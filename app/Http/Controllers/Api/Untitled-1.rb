class ReportsController < ApplicationController
  respond_to :json
  before_action :authenticate_user!
  before_action :manager_only, only: :update

  def index
    render json: { reports: all_reports, status: :ok }
  end

  def create
    report = Report.new(report_params)
    report.user = current_user
    if report.save
      report.image.attach(params[:image])
      ::PushService.new_report(report)
      render json: { status: :ok , result: report }
    else
      render json: { result: report.errors, status: :error }
    end
  rescue StandardError => e 
    render json: { result: { message: "unknown error: #{e.message}" }, status: :error }
  end

  def update
    if params[:report][:action] == 'work_on_it'
      technical = current_user.technicals.find_by_id(params[:report][:technical_id])
      return render json: { status: :error, message: 'no_technical', technicals: current_user.technicals.where(busy: false) } unless technical

      # return render json: { status: :error, message: 'busy_technical' } if technical.busy?

      return render json: { status: :error, message: 'taken' } unless Report.where(id: params[:id], status: 'new').update_all(technical_id: technical.id, manager_id: current_user.id, status: 'technical').positive?

      # technical.update(busy: true)
      ::PushService.to_one(technical.notification_id, 'مهمة جديدة', 'تم تكليفك بمعاينة مشكلة جديدة', 'technical_has_new_issue')
    else
      return render json: { status: :error, message: 'taken' } unless Report.where(id: params[:id], status: 'new').update_all(status: 'solved').positive?
    end
    render json: { status: :ok }
  rescue StandardError => e
    render json: { status: :error, message: "unknown : #{e.message}" }
  end

  def technical_update
    report = current_user.technical_reports.where(status: 'technical').find_by_id(params[:id])
    return render json: { status: :error, message: 'no_report' } unless report

    return render json: { status: :error, message: 'no_status' } unless params[:status]

    report.update(status: params[:status])
    report.technical.update(busy: false)
    ::PushService.to_one(report.manager&.notification_id, '', "انتهى التقني من العمل على المشكلة رقم ##{report.id}", 'technical_finished')

    ::PushService.to_one(report.user&.notification_id, ' تم حل المشكلة التي ابلغتم عنها',
      "نشكرك على تعاونكم، لقد تم حل المشكلة التي ابلغتم عنها ##{report.id}", 'technical_finished') if params[:status] == 'solved'
    render json: { status: :ok }
  rescue StandardError
    render json: { status: :error, message: 'unknown' }
  end

  private

  def report_params
    params.permit(:state_id, :city_id, :region_id, :image, :report_type, :latlng, :description)
  end
end

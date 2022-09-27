<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    /*
    public function all_reports($is_notifications = true)
    {
        $l_name = I18n.locale == 'ar' ? 'name' : 'name_fr';
        $report_select = "reports.*, users.first_name, users.phone, states.#{l_name} as state_name, cities.#{l_name} as city_name, regions.#{l_name} as region_name";
        
        if ($is_notifications) {
            # code...
            if ($current_user['type_user'] == 'manager') {
                # code...
                $reports = Report::where('manager_id',$current_user->id);
            }
            elseif ($current_user['type_user'] == 'technical') {
                # code...
                $reports = Report::where('technical_id', $current_user->id);
            }else{
                $reports = Report::where('user_id', $current_user->id);

            }
            $reports = reports_filtering($reports);
            return $reports.select("#{report_select},  technicals_reports.first_name as technical_name").left_joins('states').left_joins('regions').left_joins('cities').left_joins('users').left_joins('technical').order_by_score(params['order_by']).limit(70);
        }

        if (condition) {
            # code...
            return [];
        }

        if (condition) {

            $reports = Report::select($report_select);
            # code...
        }else{
            $current_user->technical_reports.select($report_select);
        }
    # code...
    
    $reports = $reports->left_joins('states').left_joins('regions').left_joins('cities').left_joins('users');
    $reports = reports_filtering($reports);
    if ($current_user->technical()) {
        # code...
        return $reports.where('status', 'technical').order_by_score($params['order_by']).limit(70);
    }
   

    $region_ids = $current_user->regions.pluck('region_id') + [$current_user->region_id];
    $reports.where('region_id',$region_ids)->where('status', 'new').order_by_score($params['order_by']).limit(70);
    }
    //
    public function language_report_types()
    {
        $this->report_types[I18n.locale];
    }
    /*public function report_types()
    {
    # code...
            [
                'ar' => [
                'reason1' => 'انقطاع او نقص فى المياه',
                'reason2' => 'تسرب فى انابيب المياه',
                'reason3' => 'عدم استلام الفاتورة',
                'reason4' => 'خطأ فى قيمة الفاتورة (المطالبة بالتأكد)',
                'reason5' => 'ابلاغ عن عملية احتيال',
                'reason6' => 'أخرى'
                ],
                'fr'=> [
                'reason1' => "Manque d'eau",
                'reason2' => "Fuite d'eau",
                'reason3' => 'Facture non distribuée',
                'reason4' => 'Erreur de relevé (réclamation sur la fact)',
                'reason5' => 'Fraude signalée',
                'reason6' => 'Autre'
                ],
                'en' => [
                'reason1' => 'Lack of water',
                'reason2' => 'Water leak',
                'reason3' => 'Invoice not distributed',
                'reason4' => 'Invoice value is not correct (claim on the fact)',
                'reason5' => 'Fraud reported',
                'reason6' => 'Other'
                ]
            ]
    }
    
    public function reports_filtering($reports)
    {

        if ($params['start_date']) {
            # code...
            $reports = $reports.where('reports.start_date', $params['start_date']);
        }
        if ($params['end_date']) {
            # code...
            $reports = $reports.where('reports.end_date', $params['end_date']);
        }
        if ($params['status']) {
            # code...
            $reports = $reports.where('reports.status', $params['status']);
        }

        if ($params['region_id']) {
            # code...
            $reports = $reports.where('reports.region_id', $params['region_id']);
        }

        if ($params['city_id']) {
            # code...
            $reports = $reports.where('reports.city_id', $params['city_id']);
        }

        if ($params['state_id']) {
            # code...
            $reports = $reports.where('reports.state_id', $params['state_id']);
        }

        return $reports;
    # code...
    }
    public function manager_only()
    {
        if ($current_user->manager()) {
            # code...
            $this->sendError('manager_only','error');
        }
    # code...
    }
    */
}

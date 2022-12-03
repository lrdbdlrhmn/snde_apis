<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App;
use App\Models\Report;
use Illuminate\Support\Facades\DB;
class ApplicationController extends Controller
{

    public function all_reports($is_notifications = false,$request,$current_user)
    {
        $req = $request->all();
        
        $appLanguage = App::getLocale();
        
        $l_name = $appLanguage == 'ar' ? 'name' : 'name_fr';
        //$report_select = "reports.*, users.first_name, users.phone, states.#{l_name} as state_name, cities.#{l_name} as city_name, regions.#{l_name} as region_name";
        
        if (!$is_notifications) {
            # code...
            if ($current_user['user_type'] == 'manager') {
                # code...
                $reports = Report::where('manager_id',$current_user->id);
            }
            elseif ($current_user['user_type'] == 'technical') {
                # code...
                $reports = Report::where('technical_id', $current_user->id);
            }else{
                $reports = Report::where('user_id', $current_user->id);

            }
            $reports = $this->reports_filtering($req,$reports);
        
            $reports = $reports->select('reports.*','states.name as state_name','cities.name as city_name','regions.name as region_name')->where('reports.user_id',$current_user->id)->get();
            //$reports = $this->order_by_score($reports,$req['order_by']);
            //$reports = $reports->limit(70);
            return $reports;
        }
        

        if ($current_user['user_type'] == 'user') {
            # code...
          return [];
        }
        $reports = Report::orderBy('reports.created_at', $req['order_by']);
        if ($current_user['user_type'] == 'manager') {

        }
        if ($current_user['user_type'] == 'technical') {
          $reports =  $reports->where('reports.status', 'technical');
        }
        $reports = $this->reports_filtering($req,$reports);
        $reports = $reports->select('reports.*','states.name as state_name','cities.name as city_name','regions.name as region_name')->get();
        //
        return $reports;

    //$region_ids = $current_user->regions.pluck('region_id') + [$current_user->region_id];
    //$reports.where('region_id',$region_ids)->where('status', 'new').order_by_score($params['order_by']).limit(70);
    }
    //
    public function reports_filtering($request,$reports)
    {
        $reports = $reports->join('cities','reports.city_id','cities.id')->join('states','reports.state_id','states.id')->join('regions','reports.region_id','regions.id');
        if (isset($request['start_date'])) {
            # code...
            $from = $request['start_date']."T00:00:00.000000Z";
            //$from = date_timestamp_get($from);
            $reports = $reports->where('reports.created_at','>=',$from);
        }
        if (isset( $request['end_date'])) {
            # code...
            $to = $request['end_date']."T00:00:00.000000Z";
            //$to = date_timestamp_get($to);
            $reports = $reports->where('reports.created_at','<=', $to);
        }

        if (isset($request['region_id'])) {
            # code...
            $reports = $reports->where('reports.region_id', $request['region_id']);
        }

        if (isset($request['city_id'])) {
            # code...
            $reports = $reports->where('reports.city_id', $request['city_id']);
        }

        if (isset($request['state_id'])) {
            # code...
            $reports = $reports->where('reports.state_id', $request['state_id']);
        }

        return $reports;
    # code...
    }
    /*
    public function manager_only()
    {
        $current_user = Auth::user();
        if ($current_user['type_user'] == 'manager') {
            # code...
            return ['status' => 'error',
                    'message' => 'manager_only'
                ];
        }
    # code...
    }
    */
}

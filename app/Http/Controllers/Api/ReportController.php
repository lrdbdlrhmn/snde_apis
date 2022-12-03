<?php

namespace App\Http\Controllers\Api;

use App\Models\Report;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class ReportController extends ApplicationController
{
    public function index(Request $request)
    {
        //render json: { reports: all_reports, status: :ok }
        $user = Auth::user();
        return ['reports' => $this->all_reports(false,$request,$user),
                'status' => 'ok'
                ];
        
    }
    public function store(Request $request)
    {
        $user = Auth::user();
        $created_at = date('Y-m-d');
        try {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'),$imageName);


            $report = Report::create([
                'report_type' => $request->report_type,
                'latlng' => $request->latlng,
                'description' =>  $request->description,
                'city_id' =>  $request->city_id,
                'state_id' =>  $request->state_id,
                'region_id' => $request->region_id,
                'image' => $imageName,
                'user_id' => $user->id,
                'created_at' => $created_at,
                'updated_at' => $created_at
            ]);
            
            return [
                'status' => 'ok',
                'result' => $report
            ];
            //code...
        } catch (\Throwable $th) {
            //throw $th;
            return [
                'status' => 'error',
                'result' => $th
            ];
        }
        //return redirect()->route('reports.index')->with('success', 'Report created successfully.');
    }
    public function update(Request $request,$id)
    {

    try {
        $current_user = Auth::user();
        $params = $request->all();
        if ($params['report']['action'] == "work_on_it") {
          # 'action': _action ?? '', 'technical_id': _technicalId 
        Report::where('id',$id)->where('status','new')->update([
            'manager_id' => $current_user->id,
            'technical_id' => $params['report']['technical_id'],
            'status' => 'technical'
        ]);
        return ['status' => 'error', 'message' => 'taken' ];
          
        }else{

            Report::where('id',$id)->where('status','new')->update([
                'status' => 'solved'
            ]);
            return ['status' => 'error', 'message' => 'taken' ];
        }
        
        return ['status' => 'ok' ];
        //code...
    } catch (\Throwable $th) {
        //throw $th;
        return ['status' => 'error' ,'message' => 'error : '.$th ];
    }



    }

    public function technical_update(Request $request,$id)
    {

    try {
        $current_user = Auth::user();
        $params = $request->all();
        //if ($params['report']['action'] == "work_on_it") {
          # 'action': _action ?? '', 'technical_id': _technicalId 
  
          Report::where('id',$id)->update([
              'status' => $params['status']
          ]);
          //return ['status' => 'error', 'message' => 'taken' ];
          
        //}
        
        return ['status' => 'ok' ];
        //code...
    } catch (\Throwable $th) {
        //throw $th;
        return ['status' => 'error' ,'message' => 'error : '.$th ];
    }



    }
    
}

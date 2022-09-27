<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    //
    public function index()
    {
        return json_encode(Hash::make("123"));
    # code...
    /*
        $current_user = Auth::user();
        /*if ($current_user->manager) {
            # code...
            $technicals = $current_user->technicals;
        }else{

        }
        
        
        $result = ['user' => $current_user,
        //'notifications' => all_reports(true),'technicals' => $technicals,'report_types' => $language_report_types
        ];
        //if ($params['reload']  == 'true') {
            # code...
            $result['states'] = State::all();
            $result['cities'] = City::all();
            $result['regions'] = Region::all();
        //}
        return json_encode(
            [
                'result' => $result
            ]
        );
        */
    }
    
}

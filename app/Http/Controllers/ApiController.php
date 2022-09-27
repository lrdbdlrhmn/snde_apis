<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
$BASE_URL = 'http://41.188.122.141:8083';
$headers = Http::withHeaders([
    'AUTHORIZATION' => 'Bearer eyJhbGciOiJIUzUxMiJ9.eyJzdWIiOiJhZG1pbiIsImF1dGgiOiJST0xFX0FETUlOLFJPTEVfVVNFUiIsImV4cCI6MTYzODI2OTA3NH0.b0eh6mNV3jl7AnMbHgmO24Ws1UQ4a843PsM26uSnD9ioRUTJb--m87SBadlD90cWdw2nkiaB0MrJ0ASLrRckRg'
]);
$body = ['app_id' => '71cb690b-651b-4c68-a127-f380f516f357'];
class ApiController extends Controller
{
    /*
    //
    public function send_req($url, $vref, $body=null, $method='get')
    {
    # code...

        if ($method = 'post') {
            $headers['Content-Type'] = 'application/json';
            $response  = $headers->post($BASE_URL.'/api'.$url, [
                'vref' => $vref,
    
            ]);
            # code...
        }else {
            # code...
            
            $response  = $headers->post($BASE_URL.'/api'.$url, [
                'vref' => $vref,
    
            ]);
        }
    }
    public function user_info($vref)
    {
    $response = send_req('/get-info-user', $vref); 
    # code...
    if ($response['code'] == 200){
        return json_decode($response['body']);
    }
        
    }
    public function user_status($vref)
    {
    $response = send_req('/get-statuts-ref', $vref); 
    # code...
    if ($response['code'] == 200){
        $body = decode($response['body']);
        if ($body['status'] == 1) {
            # code...
            return true;
        }
        
    }
        
    }
    public function header_with_details()
    {
        $response = send_req('/get-fact-header-detail', $vref);
        if ($response['code'] == 200){
            return decode($response['body']);
        }
        
    # code...
    }
    public function header()
    {
        $response = send_req('/get-fact-header', $vref);
        if ($response['code'] == 200){
            return $response['body'];
        }
            
    # code...
    }

    public function details()
    {
        $response = send_req('/get-fact-detail', $vref);
        if ($response['code'] == 200) {
            # code...
            return $response['body'];
        }
        
    # code...

    }
*/
}

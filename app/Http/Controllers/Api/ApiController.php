<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class ApiController extends Controller
{
    public function user_info($vref)
    {
        try {
          $response  = HTTP::withBasicAuth('newsndemobile','yKAFP9hmZARNnCm')->withHeaders([
            'Authorization' => 'Bearer eyJhbGciOiJIUzUxMiJ9.eyJzdWIiOiJzbmRlbW9iaWxlIiwiYXV0aCI6IlJPTEVfQURNSU4sUk9MRV9VU0VSIiwiZXhwIjoxNjY1MDc1MDg0fQ.A1ETDMBqLF8pTJLiR1RXGaM0XkG14GqedMwIlzR9R0NR0pjeQbyRAglpjlKqCn5CDO3sWqrBHjBj54Tdc7simg',
            'upgrade-insecure-requests' => 0     
            ])->get('http://41.188.122.141:9090/api/get-info-user?vref='.$vref);
        //$client = new \GuzzleHttp\Client();
        //$res = $client->request('GET', 'http://41.188.122.141/api/get-info-user?vref=14027160', [
          //  'auth' => ['newsndemobile', 'yKAFP9hmZARNnCm']
        //]);
        //echo $res->getStatusCode();
        // "200"
        //echo $res->getHeader('content-type')[0];
        // 'application/json; charset=utf8'
        //echo $res->getBody();
        // {"type":"User"...'
        
            if (isset($response)) {
            # code...
            if (!isset($response['status'])){
                return $response;
            }
        }
            
        } catch (Exception $e) {
            return $e;
        }


    }
    
    public function user_status($vref)
    {
        $response  = HTTP::withBasicAuth('newsndemobile','yKAFP9hmZARNnCm')->withHeaders([
            'Authorization' => 'Bearer eyJhbGciOiJIUzUxMiJ9.eyJzdWIiOiJhZG1pbiIsImF1dGgiOiJST0xFX0FETUlOLFJPTEVfVVNFUiIsImV4cCI6MTYzODI2OTA3NH0.b0eh6mNV3jl7AnMbHgmO24Ws1UQ4a843PsM26uSnD9ioRUTJb--m87SBadlD90cWdw2nkiaB0MrJ0ASLrRckRg',
        ])->get('http://41.188.122.141:8083/api/get-statuts-ref?vref='.$vref);
        
        if (isset($response)) {
            # code...
            if (!isset($response['status'])){
                return $response;
            }
        }
    }
    
    public function header_with_details($vref)
    {
        $response  = HTTP::withBasicAuth('newsndemobile','yKAFP9hmZARNnCm')->withHeaders([
            'Authorization' => 'Bearer eyJhbGciOiJIUzUxMiJ9.eyJzdWIiOiJhZG1pbiIsImF1dGgiOiJST0xFX0FETUlOLFJPTEVfVVNFUiIsImV4cCI6MTYzODI2OTA3NH0.b0eh6mNV3jl7AnMbHgmO24Ws1UQ4a843PsM26uSnD9ioRUTJb--m87SBadlD90cWdw2nkiaB0MrJ0ASLrRckRg',
        ])->get('http://41.188.122.141:8083/api/get-fact-header-detail?vref='.$vref);
        
        if (isset($response)) {
            # code...
            if (!isset($response['status'])){
                return $response;
            }else{
                return $response['status'];
            }
        }
    }
    public function header($vref)
    {
        $response  = HTTP::withBasicAuth('newsndemobile','yKAFP9hmZARNnCm')->withHeaders([
            'Authorization' => 'Bearer eyJhbGciOiJIUzUxMiJ9.eyJzdWIiOiJhZG1pbiIsImF1dGgiOiJST0xFX0FETUlOLFJPTEVfVVNFUiIsImV4cCI6MTYzODI2OTA3NH0.b0eh6mNV3jl7AnMbHgmO24Ws1UQ4a843PsM26uSnD9ioRUTJb--m87SBadlD90cWdw2nkiaB0MrJ0ASLrRckRg',
        ])->get('http://41.188.122.141:8083/api/get-fact-header?vref='.$vref);
        
        if (isset($response)) {
            # code...
            if (!isset($response['status'])){
                return $response;
            }else{
                return $response['status'];
            }
        }
    }

    public function details($vref)
    {
        
        $response  = HTTP::withBasicAuth('newsndemobile','yKAFP9hmZARNnCm')->withHeaders([
            'Authorization' => 'Bearer eyJhbGciOiJIUzUxMiJ9.eyJzdWIiOiJhZG1pbiIsImF1dGgiOiJST0xFX0FETUlOLFJPTEVfVVNFUiIsImV4cCI6MTYzODI2OTA3NH0.b0eh6mNV3jl7AnMbHgmO24Ws1UQ4a843PsM26uSnD9ioRUTJb--m87SBadlD90cWdw2nkiaB0MrJ0ASLrRckRg',
        ])->get('http://41.188.122.141:8083/api/get-fact-detail?vref='.$vref);
        if (isset($response)) {
            # code...
            if (!isset($response['status'])){
                return $response;
            }else{
                return $response['status'];
            }
        }
    }
}

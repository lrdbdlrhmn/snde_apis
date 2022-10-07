<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware("localization")->group(function () {
    //Route::get('check_balance/{id}', [App\Http\Controllers\Api\ImageController::class,'check_balance']);

    //Route::get('invoice/{id}', [App\Http\Controllers\Api\ImageController::class,'invoice']);
    Route::get('user_info/{vref}', [App\Http\Controllers\Api\ApiController::class,'user_info']);
    //Route::get('header/{vref}', [App\Http\Controllers\Api\ApiController::class,'header']);
    //Route::get('details/{vref}', [App\Http\Controllers\Api\ApiController::class,'details']);
    Route::get('home', [App\Controllers\Api\HomeController::class,'index']);
    Route::controller(App\Http\Controllers\Api\AuthController::class)->group(function(){

        Route::post('register', 'register');
    
        Route::post('login', 'login');
    
    });
    Route::middleware("auth:sanctum")->group(function () {
        Route::controller(App\Http\Controllers\Api\AuthController::class)->group(function(){
            
        
            Route::get('logout', 'logout');
        
        });
        //Route::get('logout', 'logout');
        //Route::get('logout', App\Controllers\Api\AuthController::class);
        //Route::post('password/email',  App\Controllers\Api\ForgotPasswordController::class);
        //Route::post('password/code/check', App\Controllers\Api\CodeCheckController::class);
        //Route::post('password/reset', App\Controllers\Api\ResetPasswordController::class);

    });
});
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
    
    Route::get('home', [App\Controllers\Api\HomeController::class,'index']);
    Route::controller(App\Http\Controllers\Api\AuthController::class)->group(function(){

        Route::post('register', 'register');
    
        Route::post('login', 'login');
    
    });
    Route::middleware("auth:sanctum")->group(function () {
        Route::controller(App\Http\Controllers\Api\AuthController::class)->group(function(){

            
        
            Route::get('logout', 'logout');
        
        });
        Route::resource('states', App\Http\Controllers\Api\StateController::class);
        //Route::get('logout', 'logout');
        //Route::get('logout', App\Controllers\Api\AuthController::class);
        //Route::post('password/email',  App\Controllers\Api\ForgotPasswordController::class);
        //Route::post('password/code/check', App\Controllers\Api\CodeCheckController::class);
        //Route::post('password/reset', App\Controllers\Api\ResetPasswordController::class);

    });
});
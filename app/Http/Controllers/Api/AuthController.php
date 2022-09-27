<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Validator;
class AuthController extends BaseController

{
    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'whatsapp' => 'required',
            'nni' => 'required',
            'password' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'c_password' => 'required|same:password'
        ]);
   
        if($validator->fails()){
            return $this->sendError(__("auth.register_validation"), $validator->errors());       
        }
   
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] =  $user->createToken('MyApp')->plainTextToken;
        $success['phone'] =  $user->phone;
        $success['status'] =  'ok';
   
        return $this->sendResponse($success, __("auth.register_success"));
    }
   
    /**
     * Login api
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        if(Auth::attempt(['phone' => $request->phone, 'password' => $request->password])){ 
            $user = Auth::user(); 
            $success['result'] =  $user;
            $success['status'] =  'ok';
            $success['headers'] =  ['authorization' => $user->createToken('MyApp')->plainTextToken];
            return $this->sendResponse($success, __("auth.success"));
        } 
        else{ 
            return $this->sendError(__("auth.blocked"), ['error'=>'Unauthorised']);
        } 
    }
    public function logout() {
        //Auth::logout();
        $user = Auth::user(); 
        $success['token'] =  $user->createToken('MyApp')->plainTextToken; 
        $success['phone'] =  $user->phone;
        $success['status'] =  'ok';
        request()->user()->tokens()->delete();
        return $this->sendResponse(
            $success,
            __("auth.logout_success"),
        );
    }
}

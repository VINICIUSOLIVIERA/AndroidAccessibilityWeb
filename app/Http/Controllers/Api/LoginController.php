<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;
use App\User;
use Auth;

class LoginController extends Controller
{

	use AuthenticatesUsers;

    public function login(Request $request){

    	try {
    		// Get paramenter
	    	$user_name = $request->input("user");
	    	$password  = $request->input("password");

            // New Instance
            $user = new User();
            
	    	// Validate parameters
	    	$validate = validation($request->all(), $user->rulesLogin(), $user->messages_login);

	    	// If parameter invalid
            if($validate->fails()){
                $error = validationErrors($validate);
                return response()->json(["type" => "error", "error" => $error], 406);
            }

            // Get user by 'user name'
            $user = $user->where("user", $user_name)->first();

            // Compare parameter password with user password
            if($user && Hash::check($password, $user->password)){
            	$user_id       = $user->id;
            	$user_name     = $user->user;
            	$user_password = $user->password;
            	$token         = $user->remember_token;
                return response()->json(User::find($user_id), 200);
            	// return response()->json(["id" => $user_id,"user_name" => $user_name, "password" => $user_password, "token" => $token, "user" => User::find($user_id)], 200);
            }else{
            	return response()->json([], 404);
            }

    		
    	} catch (\Exception $e) {
    		return response()->json(["error" => $e->getMessage()], 500);	
    	}

    }
}

<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public function all()
    {
        try {
            $users = User::get();
            return response()->json($users, 200);
        } catch (\Exception $e) {
            return response()->json([], 404);
        }
    }

    public function create(Request $request)
    {
        try {
            $password   = $request->input("password");
            $deficiency = $request->input("deficiency");
            $gender     = $request->input("gender");

            $user = new User();

            $validate = validation($request->all(), $user->rules(), $user->messages);

            if($validate->fails()){
                $error = validationErrors($validate);
                return response()->json(["type" => "error", "error" => $error], 406);
            }

            $request->merge(["password" => bcrypt($password)]);

            $user->fill($request->all());
            $user->remember_token = str_random(60);
            $user->save();

            return response()->json($user, 201);
            
        } catch (\Exception $e) {
            return response()->json([$e->getMessage()], 500);
        }
        
    }

    public function update(Request $request, $id)
    {
        try {

            $password   = $request->input("password");
            $deficiency = $request->input("deficiency");
            $gender     = $request->input("gender");
            
            $user = User::find($id);

            $validate = validation($request->all(), $user->rules(), $user->messages);

            if($validate->fails()){
                $error = validationErrors($validate);
                return response()->json(["type" => "error", "error" => $error], 406);
            }

            $request->merge(["password" => bcrypt($password)]);

            $user->fill($request->all());
            $user->save();

            return response()->json($user, 201);

        } catch (\Exception $e) {
            $file = fopen(public_path("debug.txt"), "w");
            $txt = $e->getMessage();
            fwrite($file, $txt);
            fclose($file);
            return response()->json([$e->getMessage()], 500);
        }
    }

    public function find($id)
    {
        try {
            $user = User::find($id);
            return response()->json($user, 200);  
        } catch (\Exception $e) {
            return response()->json([], 404);  
        }
        
    }

    public function delete($id)
    {
        return "Delete User";
    }
}

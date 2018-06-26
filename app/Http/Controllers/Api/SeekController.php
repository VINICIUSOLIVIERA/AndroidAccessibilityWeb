<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Seek;
use App\Models\ResponseSeek;

class SeekController extends Controller
{
    
    public function all()
    {
        try {
            $seeks = Seek::get();
            return response()->json($seeks, 200);
        } catch (\Exception $e) {
            return response()->json([], 500);
        }
    }

    public function create(Request $request, $user_id)
    {
        try {
            $request["user_id"] = $user_id;
            $seek = new Seek();

            $validate = validation($request->all(), $seek->rules(), $seek->messages);
            if($validate->fails()){
                $error = validationErrors($validate);
                return response()->json(["type" => "error", "error" => $error], 406);
            }

            $seek->fill($request->all());
            $seek->save();

            return response()->json($seek, 201);
            
        } catch (\Exception $e) {
            return response()->json([$e->getMessage()], 500);
        }
        
    }

    public function update(Request $request, $user_id, $seek_id)
    {
        unset($request['lat']);
        unset($request['lng']);
        $request->merge(["user_id" => $user_id]);
        try{

            $seek = Seek::find($seek_id);

            $rules = $seek->rules();
            unset($rules['lat']);
            unset($rules['lng']);

            $validate = validation($request->all(), $rules, $seek->messages);
            if($validate->fails()){
                $error = validationErrors($validate);
                return response()->json(["type" => "error", "error" => $error], 406);
            }

            $seek->fill($request->all());
            $seek->save();

            return response()->json($seek, 201);  
        }catch(\Exception $e){
            return response()->json($e->getMessage(), 500);  
        }      
    }

    public function find($user_id, $seek_id)
    {
        try {
            $seek = Seek::where("user_id", $user_id)
                        ->where("id", $seek_id)
                        ->first();

            $response = ResponseSeek::where("seek_id", $seek->id)->first();
            $seek->response = $response;

            return response()->json($seek, 200);  
        } catch (\Exception $e) {
            return response()->json([], 500);  
        }   
    }

    public function findAll($user_id)
    {
        try {
            $seeks = Seek::where("user_id", $user_id)
                         ->get();

            foreach ($seeks as $value) {
                $response = ResponseSeek::where("seek_id", $value->id)->first();
                $value->response = $response;
            }

            return response()->json($seeks, 200);  
        } catch (\Exception $e) {
            return response()->json([], 500);  
        }
        
    }

    public function delete($user_id, $seek_id)
    {
        try {
        	
        	$delete = Seek::where("user_create", $user_id)
                          ->where("id", $seek_id)
                          ->delete();

            return response()->json([], 200);

        } catch (\Exception $e) {
        	return response()->json([], 500);
        }
    }

}

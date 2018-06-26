<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ResponseSeek;

class ResponseSeekController extends Controller
{
    public function index()
    {

    }

    public function store(Request $request)
    {
    	try {
	    	$seek_id = $request->input("seek_id");
	    	$response_id = $request->input("id");

	    	$response = new ResponseSeek();

	    	if ($response_id) {
	    		$response = $response->find($response_id);
	    	}

            if ($request->input('status') == '' || $request->input('status') == 0) {
                return back()->withInput();
            }

	    	$response->fill($request->all());
	    	$response->save();
	    	return redirect('seeks');
    	} catch (Exception $e) {
    		dd("error");	
    	}
    }
}

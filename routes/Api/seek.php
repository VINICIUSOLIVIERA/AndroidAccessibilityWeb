<?php

	Route::get("seeks", "Api\SeekController@all");
	Route::get("user/{user_id}/seeks/", "Api\SeekController@findAll");
	Route::get("user/{user_id}/seek/{seek_id}", "Api\SeekController@find");
	Route::post("user/{user_id}/seek/", "Api\SeekController@create");
	Route::put("user/{user_id}/seek/{seek_id}", "Api\SeekController@update");
	// Route::delete("/user/{user_id}/seek/{seek_id}", "Api\SeekController@delete");

?>
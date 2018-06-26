<?php

	Route::get("seeks", "Api\SeekController@all");
	Route::get("seeks/user/{user_id}", "Api\SeekController@findAll");
	Route::get("seek/{seek_id}/user/{user_id}", "Api\SeekController@find");
	Route::post("seek/user/{user_id}", "Api\SeekController@create");
	Route::put("user/{user_id}/seek/{seek_id}", "Api\SeekController@update");
	// Route::delete("/user/{user_id}/seek/{seek_id}", "Api\SeekController@delete");

?>
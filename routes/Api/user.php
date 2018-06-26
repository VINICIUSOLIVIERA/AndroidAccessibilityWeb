<?php

	Route::get("users", "Api\UserController@all");
	Route::get("user/{id}", "Api\UserController@find");
	Route::post("user", "Api\UserController@create");
	Route::put("user/{id}", "Api\UserController@update");
	Route::delete("user/{id}", "Api\UserController@delete");

?>
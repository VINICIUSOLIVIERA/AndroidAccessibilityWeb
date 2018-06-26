<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::group(["prefix" => "api/v1"], function(){
	// Route User
	include "Api/user.php";
	// Route Login
	include "Api/login.php";
	// Route Seek
	include "Api/seek.php";
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/map', 'MapController@map');
Route::get('/map/marker', 'MapController@getMarker');
Route::get('/map/seek/{id}', 'MapController@edit');
Route::post('/map/seek/{id}', 'ResponseSeekController@store');
Route::get('seeks/{id?}', 'MapController@allSeek');
Route::get('users', 'MapController@allUser');

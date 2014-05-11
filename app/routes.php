<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get("user/{name}", "UserController@display");
Route::controller('user', 'UserController');
Route::controller('asset', 'AssetController');
Route::controller('request', 'RequestController');

Route::get('/', function()
{
    $barangays = User::where("user_type_id", "=", '3')->get();
	return View::make('home', compact('barangays'));
});


Route::get('browse', function()
{
    $cities = City::all();
    $user_types = UserType::all();
    $depts = User::where("user_type_id", "=", '2')->get();
    $barangays = User::where("user_type_id", "=", '3')->get();
    $citizens = CitizenRequest::where("user_id", "=", Session::get('user_id'))->get();

	return View::make('browse', compact('cities', 'user_types', 'depts', 'barangays', 'citizens'));
});

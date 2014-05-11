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

Route::controller('user', 'UserController');
Route::controller('asset', 'AssetController');
Route::controller('request', 'RequestController');

Route::get('/', function()
{
	return View::make('home');
});
Route::get('browse', function()
{
    $depts = User::where("user_type_id", "=", '2')->get();
    $cities = City::all();
    $user_types = UserType::all();
	return View::make('browse', compact('cities', 'user_types', 'depts'));
});

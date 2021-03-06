<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/tes', function () {
    return view('tes');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::post('/create', 'ScheduleController@create');


Route::get('/schedule', 'ScheduleController@index');


Route::get('/welcome', function () {
    return view('welcome');
});

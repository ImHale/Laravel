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
    return view('welcome');
});

Route::group(['get','post'],function(){
    Route::get('facade','StudentController@facade');

    Route::get('eloquent','StudentController@eloquent');

    Route::any('jhfunction','StudentController@jhFunction');

    Route::get('eloquent-orm','StudentController@eloquentORM');

    Route::get('model','StudentController@model');

});

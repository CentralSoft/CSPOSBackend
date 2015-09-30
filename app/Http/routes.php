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

//API ROUTES
Route::group(['prefix' => 'api'], function() {
    Route::get('get-all-user', function(){
        return App\Employee::all()->toJson();
    });
});
//END API ROUTES

Route::get('/index', function () {
    return view('welcome');
});

Route::resource('Employee', 'EmployeeController');


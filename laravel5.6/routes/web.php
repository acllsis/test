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

Route::get('/employees', 'EmployeeController@index');

Route::get('/employees/search', 'EmployeeController@search');

Route::get('/employee/id/{id}', 'EmployeeController@show');

Route::get('/employees/salary/min/{min}/max/{max}', 'EmployeeController@salary');
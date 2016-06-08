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

Route::get('/', 'Controller@showIndex');
Route::get('login', 'Controller@getLogin');
Route::get('register', 'Controller@getRegister');
Route::post('register', 'Controller@postRegister');



Route::get('admin/dashboard', 'AdminController@getDashboard');
Route::post('admin/dashboard', 'Controller@postLogin');
Route::get('admin/add-subject', 'AdminController@getAddSubject');
Route::post('admin/add-subject', 'AdminController@postAddSubject');
Route::get('admin/my-subjects', 'AdminController@getMySubjects');

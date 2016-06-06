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
Route::get('/dashboard', 'Controller@showDashboard');
Route::get('/profile', 'Controller@showProfile');
Route::get('/inst-profile', 'Controller@showInstProfile');
Route::get('login', 'Controller@getLogin');
Route::get('admin/dashboard', 'AdminController@getDashboard');
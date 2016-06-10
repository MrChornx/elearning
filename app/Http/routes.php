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

Route::group(['middleware' => ['web']], function () {

	Route::get('/', 'Controller@showIndex');
	Route::get('/dashboard', 'Controller@showDashboard');
	Route::get('/profile', 'Controller@showProfile');
	Route::get('/my-courses', 'Controller@myCourses');
	Route::get('/my-messages', 'Controller@myMessages');
	Route::get('/blog-post', 'Controller@showBlogPost');
	Route::get('/blog', 'Controller@showBlog');
	Route::get('/contact', 'Controller@showContact');
	Route::get('/course-forum-thread', 'Controller@showCourseForumThread');
	Route::get('/course-forums', 'Controller@showCourseForums');
	Route::get('/forum-category', 'Controller@showForumCategory');
	Route::get('/course', 'Controller@showCourse');
	Route::get('/forum-thread', 'Controller@showForumThread');
	Route::get('/forum', 'Controller@showForum');
	Route::get('/directory', 'Controller@showDirectory');
	Route::get('/show-course/{course_id}', ['as'=>'show.course', 'uses'=>'Controller@showShowCourse']);



	Route::get('lang/{lang}', ['as'=>'lang.switch', 'uses'=>'LanguageController@switchLang']);
	Route::any('course-switch', ['as'=>'course.switch', 'uses'=>'CourseController@switchCourse']);

	Route::any('get-sign-up', ['as'=>'get.sign.up', 'uses'=>'AuthController@showSignUp']);

	Route::any('get-sign-in', ['as'=>'get.sign.in', 'uses'=>'AuthController@showLogin']);
	Route::any('post-sign-in', ['as'=>'post.sign.in', 'uses'=>'AuthController@login']);
	Route::any('log-out', ['as'=>'log.out', 'uses'=>'AuthController@logout']);

	Route::get('/edit-course', 'Controller@showEditCourse');
	Route::get('/instructor-courses', 'Controller@showInstCourses');
	Route::get('/instructor-profile', 'Controller@showInstProfile');
	Route::get('/instructor-dashboard', 'Controller@showInstDashboard');
	Route::get('/instructor-messages', 'Controller@showInstMessages');
	Route::get('/instructor-statement', 'Controller@showInstStatement');


});

Route::get('login', 'Controller@getLogin');
Route::get('register', 'Controller@getRegister');
Route::post('register', 'Controller@postRegister');



Route::get('admin/dashboard', 'AdminController@getDashboard');
Route::post('admin/dashboard', 'Controller@postLogin');
Route::get('admin/add-subject', 'AdminController@getAddSubject');
Route::post('admin/add-subject', 'AdminController@postAddSubject');
Route::get('admin/my-subjects', 'AdminController@getMySubjects');
Route::get('admin/edit-subject/{id}', 'AdminController@getEditSubject');
Route::post('admin/edit-subject', 'AdminController@postEditSubject');
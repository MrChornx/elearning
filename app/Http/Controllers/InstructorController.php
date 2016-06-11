<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use App;
use App\Course;
use App\Subject;
use App\User;
use App\Http\Requests;

class InstructorController extends BaseController
{

	function __construct() {
        if(!Session::get('user')){
             Redirect::to('/')->send();
        }
    }
    function showEditCourse($id) {
		if ($user = Session::get('user')) {
			if ($user->type >= 2) {
				$course = Subject::find($id);
				if ($course) {
					$match_pivot = $course->users()->having('id','=',$user->id)->wherePivot('type', 1)->get();
					$online_users = User::where('online', '=', 1)->get();
					if ($match_pivot->count() > 0) {
						return view('main/edit-course', ['course' => $course, 'user' => $user, 'online_users' => $online_users]);
					}
				}
			}
		}
		return Redirect::to('/');
	}

	function showInstCourses() {
		$user = Session::get('user');
		$online_users = User::where('online', '=', 1)->get();
		$courses = $user->subjects()->wherePivot('type', 1)->get();
		return view('main/instructor-courses', ['user' => $user, 'courses' => $courses, 'online_users' => $online_users]);
	}

	function showInstProfile() {
		$user = Session::get('user');
		$online_users = User::where('online', '=', 1)->get();
		
		return view('main/instructor-profile', ['user' => $user, 'online_users' => $online_users]);

	}

	function showInstDashboard() {
		$user = Session::get('user');
		$online_users = User::where('online', '=', 1)->get();
		$courses = $user->subjects()->wherePivot('type', 1)->get();

		return view('main/instructor-dashboard', ['user' => $user, 'courses' => $courses, 'online_users' => $online_users]);

	}

	function showInstMessages() {
		$user = Session::get('user');
		$online_users = User::where('online', '=', 1)->get();
		return view('main/instructor-messages', ['user' => $user, 'online_users' => $online_users]);

	}

	function showInstStatement() {
		$user = Session::get('user');
		$online_users = User::where('online', '=', 1)->get();
		return view('main/instructor-statement', ['user' => $user, 'online_users' => $online_users]);

	}
}

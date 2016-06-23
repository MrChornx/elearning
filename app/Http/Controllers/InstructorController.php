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
        if(!Session::get('user_id')){
             Redirect::to('/')->send();
        }
    }
    function showEditCourse($id) {
		if ($user = User::find(Session::get('user_id'))) {
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

	function postEditCourse(Request $request) {
		if($request->ajax()) {
			$data = Input::all();
			$course = Subject::find($data['course_id']);
			$course->name = $data['name'];
			$course->description = $data['description'];
			if($course->save()) {
				return response()->json(['success' => true]);
			}

			return response()->json(['success' => false]);

		}
	}

	function postInstProfile(Request $request) {
		if($request->ajax()) {
			$data = Input::all();
			
			$user = User::find($data['user_id']);
			$user->firstname = $data['firstname'];
			$user->lastname = $data['lastname'];
			$user->email = $data['email'];
			if ($data['password'] && $data['password_re']) {
				if ($data['password'] == $data['password_re']) {
					$user->password = md5($data['password']);
				}
			}
			if ($request->file('image')) {
				$user->avatar = $request->file('image')->getClientOriginalName();
				$request->file('image')->move(
			        base_path() . '/public/uploads/avatars/', $user->avatar
			    );
			}
			

			if($user->save()) {
				return response()->json(['success' => true]);
			}

			//return response()->json(['success' => false]);

		}
	}

	function showInstCourses() {
		$user = User::find(Session::get('user_id'));
		$online_users = User::where('online', '=', 1)->get();
		$courses = $user->subjects()->wherePivot('type', 1)->get();
		return view('main/instructor-courses', ['user' => $user, 'courses' => $courses, 'online_users' => $online_users]);
	}

	function showInstProfile() {
		$user = User::find(Session::get('user_id'));
		$online_users = User::where('online', '=', 1)->get();
		
		return view('main/instructor-profile', ['user' => $user, 'online_users' => $online_users]);

	}

	function showInstDashboard() {
		$user = User::find(Session::get('user_id'));
		$online_users = User::where('online', '=', 1)->get();
		$courses = $user->subjects()->wherePivot('type', 1)->get();

		return view('main/instructor-dashboard', ['user' => $user, 'courses' => $courses, 'online_users' => $online_users]);

	}

	function showInstMessages() {
		$user = User::find(Session::get('user_id'));
		$online_users = User::where('online', '=', 1)->get();
		return view('main/instructor-messages', ['user' => $user, 'online_users' => $online_users]);

	}

	function showInstStatement() {
		$user = User::find(Session::get('user_id'));
		$online_users = User::where('online', '=', 1)->get();
		return view('main/instructor-statement', ['user' => $user, 'online_users' => $online_users]);

	}
}

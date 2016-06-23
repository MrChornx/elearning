<?php

namespace App\Http\Controllers;

use App;
use App\Course;
use App\Subject;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use \App\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    // function __construct() {
    //     if(Session::get('user')){
    //         header('Location: '.url('/'));
    //         die();
    //     }
    // }

    function showIndex(){
    	//App::setLocale('ge');
        return view('main/index');
    }
    
    function getLogin(){
        return view('login');
    }

    function showDashboard() {
    	return view('main/dashboard');
    }

    function showProfile() {
    	return view('main/profile');
    }

	function myCourses() {
		return view('main/my-courses');
	}

	function myMessages() {
		return view('main/my-messages');
	}

	function showBlogPost() {
		return view('main/blog-post');
	}

	function showBlog() {
		return view('main/blog');
	}

	function showContact() {
		return view('main/contact');
	}

	function showCourseForumThread() {
		return view('main/course-forum-thread');
	}

	function showCourseForums() {
		return view('main/course-forums');
	}

	function showForumCategory() {
		return view('main/forum-category');
	}

	function showCourse() {
		
		return view('main/course');
	}

	function showForumThread() {
		return view('main/forum-thread');
	}

	function showForum() {
		return view('main/forum');
	}
	
	function showDirectory() {

		$courses = Course::all();
		$online_users = User::where('online', '=', 1)->get();
		return view('main/directory', ['courses' => $courses, 'online_users' => $online_users]);
	}

	function showShowCourse($id) {

		$course = Subject::find($id);
		$user = User::find(Session::get('user_id'));
		$match = false;

		$online_users = User::where('online', '=', 1)->get();

		if ($user) {
			$match_pivot = $course->users()->having('id','=',$user->id)->wherePivot('type', 2)->get();
			if ($match_pivot->count() > 0) {
				$match = true;
			}
		}


	
		return view('main/show-course', ['course' => $course, 'match' => $match, 'online_users' => $online_users]);
	}


/*
	function showSignUp() {
		return view('main/sign-up');
	}

	function showLogin() {
		return view('main/login');
	}
*/




    function getRegister(){
        return view('register');
    }

    function postRegister(){
        $users = User::all();
        if(empty(Input::get('username')) || empty(Input::get('password')) || empty(Input::get('email'))){
            return Redirect::to(url('register'))->with('msg','გთხოვთ შეიყვანოთ მონაცემები სრულად');
        }
        foreach($users as $user){
            if($user->username == Input::get('username') || $user->email == Input::get('email')){
                return Redirect::to(url('register'))->with('msg','ასეთი მომხმარებელი უკვე არსებობს');
            }
        }
        $user = new User;
        $user->username = Input::get('username');
        $user->firstname = Input::get('firstname');
        $user->lastname = Input::get('lastname');
        $user->password = md5(Input::get('password'));
        $user->save();
        return Redirect::to(url('login'))->with('msg-login','თქვენ წარმატებით დარეგისტრირდით!');
    }

    function postLogin(){
        $users = User::all();
        $username = Input::get('username');
        foreach($users as $user){
            if(trim($user->username) == trim($username)){
                //echo "here";
                if($user->password == md5(Input::get('password'))) {
                    Session::set('user', $user);
                    return Redirect::to(url('admin/dashboard'));
                }
            }
            else{
                echo $user->username."<br>".$username;
            }
        }
        return Redirect::to(url('login'))->with('msg-login-error','მონაცემები არასწორია');
    }
}

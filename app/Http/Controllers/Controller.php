<?php

namespace App\Http\Controllers;

use App;
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
		return view('main/directory');
	}

	function showShowCourse($id) {
		return view('main/show-course', ['course_id' => $id]);
	}



	function showSignUp() {
		return view('main/sign-up');
	}

	function showLogin() {
		return view('main/login');
	}



	

	function showEditCourse() {
		return view('main/edit-course');
	}

	function showInstCourses() {
		return view('main/instructor-courses');
	}

	function showInstProfile() {
		return view('main/instructor-profile');
	}

	function showInstDashboard() {
		return view('main/instructor-dashboard');
	}

	function showInstMessages() {
		return view('main/instructor-messages');
	}

	function showInstStatement() {
		return view('main/instructor-statement');
	}
	





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

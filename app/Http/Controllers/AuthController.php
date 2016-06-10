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

class AuthController extends Controller
{
    function showSignUp(Request $request) {
		if($request->ajax()) {
			$returnHTML = view('main/sign-up')->with('userjobs', 'wut')->render();
			return response()->json(['success' => true, 'html'=>$returnHTML]);
		}
	}

	function showLogin(Request $request) {
		if($request->ajax()) {
			$returnHTML = view('main/login')->with('userjobs', 'wut')->render();
			return response()->json(['success' => true, 'html'=>$returnHTML]);
		}
	}

	function login(Request $request) {
		if($request->ajax()) {
			$users = User::all();
	        $username = Input::get('username');
/*	        dd(Input::all());*/
	        $user_stat = true;
	        $pass_stat = true;
	        foreach($users as $user){
	            if(trim($user->username) == trim($username)){
	                //echo "here";
	                if($user->password == md5(Input::get('password'))) {
	                    Session::set('user', $user);
	                } else $pass_stat = false;
	            } else $user_stat = false;

	            if (!$pass_stat || !$user_stat) {
	            	return response()->json(['success' => false, 'message_code'=>0, 'message_arr' => [
            			'pass_stat' => $pass_stat,
            			'user_stat' => $user_stat,
            		]]);
	            } else {
	            	return response()->json(['success' => true, 'message_code'=>1, 'message' => 'Welcome!']);
	            }
	        }
	        return response()->json(['success' => false, 'message_code'=>0, 'message' => 'no users']);
		}
	}
	function logout() {
		Session::forget('user');
		return Redirect::back();
	}
}

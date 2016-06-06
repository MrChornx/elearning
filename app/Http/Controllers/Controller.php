<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;
    function showIndex(){
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

    function showInstProfile() {
		return view('main/inst-profile');
    }
}

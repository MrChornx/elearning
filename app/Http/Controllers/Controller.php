<?php

namespace App\Http\Controllers;

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
        return view('index');
    }

    function getLogin(){
        return view('login');
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

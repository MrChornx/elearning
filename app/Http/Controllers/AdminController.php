<?php

namespace App\Http\Controllers;

use App\Course;
use App\Subject;
use App\User;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class AdminController extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;
    function getDashboard(){
        $user = Session::get('user');
        $courses = Course::all();
        $users = User::all()->where('type',2);
        if(empty($user)){
            return Redirect::to(url('login'));
        }
        $userId = $user->id;
        $subjects = Subject::whereHas('users', function($q) use ($userId) {
            $q->where('user_id', $userId);
        })->get();
        return view('admin.dashboard')->with('subjects',$subjects)->with('users',$users)->with('courses',$courses);
    }

    function getAddSubject(){

        $courses = Course::all();
        $users = User::all()->where('type',2);

        return view('admin.add-subject')->with('courses',$courses)->with('users',$users);
    }

    function postAddSubject(){
        $input = Input::all();
        if (Input::get('course') || empty(Input::get('lecturers')) || empty(Input::get('name'))) {
            return Redirect::to(url('admin/add-subject'))->with('msg', 'შეიყვანეთ მონაცემები სრულად');
        }
        $subject = new Subject;
        $subject->name = $input['name'];
        $subject->save();
        Subject::find($subject->id)->users()->attach($input['lecturers']) ;
        Subject::find($subject->id)->courses()->attach($input['courses']);
        return Redirect::to(url('admin/my-subjects'))->with('msg-success', 'საგანი წარმატებით დაემატა');
    }

    function getMySubjects(){
        $user = Session::get('user');
        if(empty($user)){
            return Redirect::to(url('login'));
        }
        $userId = $user->id;
        //var_dump($userId);

        $subjects = Subject::whereHas('users', function($q) use ($userId) {
            $q->where('user_id', $userId);
        })->get();
        //var_dump($subjects);

        return view('admin.my-subjects')->with('subjects',$subjects);
    }

    function getEditSubject($id){
        $subject = Subject::find($id);
        $courses = Course::all();
        $users = User::all()->where('type',2);
        return view('admin.edit-subject')
            ->with('subject',$subject)
            ->with('courses',$courses)
            ->with('users',$users);
    }
}

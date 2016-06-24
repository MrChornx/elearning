<?php

namespace App\Http\Controllers;

use App\Course;
use App\File;
use App\Post;
use App\Subject;
use App\User;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    function __construct() {
        if(empty(Session::get('user')) || Session::get('user')->type<2){
            header('Location: '.url('login'));
            die();
        }
    }

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
        $subject->password = $input['password'];
        $subject->save();
        Subject::find($subject->id)->users()->attach($input['lecturers'],['type' => 1]);
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
            $q->where('lecturers_subjects.type', 2);
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

    function postEditSubject($id){

    }

    function getAddTheory($subject){
        return view('admin.add-theory')->with('id',$subject);
    }

    function postAddTheory(){

        $heading = Input::get('heading');
        $text = Input::get('text');
        $subject = Input::get('subject');

        if(empty($heading)){
            return Redirect::to(url('admin/add-theory/'.$subject))->with('msg', 'შეიყვანეთ მონაცემები სრულად');
        }

        $post = new Post;
        $post->heading = $heading;
        $post->text = $text;
        $post->subject_id = $subject;
        $post->save();

        if(!empty($_FILES["file"]["name"][0])){
            for($i=0; $i<count($_FILES["file"]["name"]); $i++){
                if(empty($_FILES["file"]["name"][$i]))
                    continue;
                $path =  base_path() . '/public/uploads/files/';
                $name = bin2hex(openssl_random_pseudo_bytes(10));
                $ext = pathinfo($_FILES["file"]["name"][$i], PATHINFO_EXTENSION);
                $target_file = $path . basename("$name.$ext");
                if(move_uploaded_file($_FILES["file"]["tmp_name"][$i], $target_file)){
                    $file = new File;
                    $file->filename = $name;
                    $file->location = $target_file;
                    $file->post_id = $post->id;
                    $file->save();
                }
            }
        }

        return Redirect::to(url('admin/my-subjects'))->with('msg-success', 'მასალა წარმატებით დაემატა');

    }
}

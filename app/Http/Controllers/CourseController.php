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

class CourseController extends BaseController {

	function __construct() {
        if(Session::get('user')){
            header('Location: '.url('/'));
            die();
        }
    }

    public function switchCourse(Request $request) {

    	if($request->ajax()) {
	      	$data = Input::all();
	      	$subjects = null;

	      	if(isset($data['course_id'])) {
	      		$subjects = Course::find($data['course_id'])->subjects;
	      	}

	      	if (isset($data['query'])) {
	      		$subjects = Subject::where('name', 'LIKE', '%'.$data['query'].'%')->get();
	      	}

	      	$html = '';
	      	if ($subjects->count() > 0) {
	      		foreach ($subjects as $subject) {
		        	$html .= '<div class="grid-item col-xs-12 col-sm-6 col-lg-4">
	                        <div class="panel panel-default paper-shadow" data-z="0.5">
	                            <div class="cover overlay cover-image-full hover">
	                                <span class="img icon-block height-150 bg-default"></span>
	                                <a href="'.route('show.course', $subject->id).'" class="padding-none overlay overlay-full icon-block bg-default">
	                                    <span class="v-center">
	                                        <i class="fa fa-github"></i>
	                                    </span>
	                                </a>
	                                <a href="'.route('show.course', $subject->id).'" class="overlay overlay-full overlay-hover overlay-bg-white">
	                                    <span class="v-center">
	                                        <span class="btn btn-circle btn-white btn-lg"><i class="fa fa-graduation-cap"></i></span>
	                                    </span>
	                                </a>
	                            </div>
	                            <div class="panel-body">
	                                <h5 class="text-headline margin-v-0-10 course-header"><a href="'.route('show.course', $subject->id).'">'.$subject->name.'</a></h5>
	                                <!--p class="small margin-none">
	                                    <span class="fa fa-fw fa-star text-yellow-800"></span>
	                                    <span class="fa fa-fw fa-star text-yellow-800"></span>
	                                    <span class="fa fa-fw fa-star text-yellow-800"></span>
	                                    <span class="fa fa-fw fa-star-o text-yellow-800"></span>
	                                    <span class="fa fa-fw fa-star-o text-yellow-800"></span>
	                                </p-->
	                            </div>
	                            <hr class="margin-none" />
	                            <div class="panel-body">
	                                <p>'.$subject->description.'</p>
	                                <hr class="dashed-separator-1" />
	                                <div class="media v-middle">

	                                    <div class="media-body">';
		                                    foreach ($subject->users as $user) {
		                                    	$html .= '<div class="media-name-wrapper">
			                                        <img src="'.url('/').'/plugins/images/people/110/guy-5.jpg" alt="People" class="img-circle width-30" />
			                                    <a class="name-field-sm" href="#">'.$user->firstname.' '.$user->lastname.'</a></div>';
		                                    }
	                                        
	                           $html .='</div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>';

	                    $message_type = 'success';
	                    $message ='OK';
		        }
	      	} else {
	      		$message_type = 'error';
	            $message = trans('main.all.no such course');
	      	}
	        

	        return response()->json([
	            'content' 		=> $html,
	            'message_type' 	=> $message_type,
	            'message' 		=> $message,
	        ]);

	      	
	      	
	    }
    }
}

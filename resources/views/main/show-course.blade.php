@extends('layouts.template')

@section('title', 'Dashboard')

@section('content')
<div class="parallax bg-white page-section third">
    <div class="container parallax-layer" data-opacity="true">
        <div class="media v-middle media-overflow-visible">
            <div class="media-body col-lg-8 col-md-6 col-sm-12 col-xs-12" style="padding-left:0;">
                <div class="col s12">
                    <ul class="breadcrumb" style="margin-bottom:0; padding-left:0;"> 
                        <li><a href="{{url('/').'/directory'}}" class="">{{ trans('main.all.library') }}</a></li>
                        <li><a href="" class="">{{$course->name}}</a></li>
                    </ul>
                    
                    
                </div>

            </div>
            <div class="media-right col-md-6 col-lg-4 col-sm-12 col-xs-12" style="margin:0; padding:0;">
                @if(!$match)
                    <form id="enroll_to_course_form">
                        <div class="row" style="margin:10px 0 0;">
                            <div class="col l7 m6 s12 pull-right" style="padding-right:0;">
                                <button class="btn btn-primary btn-full waves-effect waves-light" data-course-id="{{$course->id}}" type="submit" id="enroll_to_course_btn">{{ trans('main.all.enroll') }}</nutton>
                                <input id="course_id" type="hidden" class="form-control" name="course_id" value="{{$course->id}}">

                            </div>
                            @if($course->password != null)
                                <div class="input-field col l5 m6 s12 float-message inline-input" >
                                    <i class="fa fa-lock prefix fa-1" aria-hidden="true"></i>
                                    <input id="password" type="password" class="form-control" name="password">
                                    <input id="lock_ind" type="hidden" class="form-control" name="lock_ind" value="1">
                                    <label for="firstName">{{ trans('auth.register.password') }}</label>
                                </div>
                            @endif
                        </div>
                    </form>
                @endif
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<div class="container">
    <div class="page-section">
        <div class="row">
            <div class="col-md-9">
                <div class="page-section padding-top-none">
                    <div class="media media-grid v-middle">
                        <div class="media-left">
                            <span class="icon-block half bg-blue-300 text-white">2</span>
                        </div>
                        <div class="media-body">
                            <h1 class="text-display-1 margin-none">{{$course->name}}</h1>
                        </div>
                    </div>
                    <br/>
                    <p class="text-body-2">{{$course->description}}</p>
                </div>
                @if($match)
                    <!-- <h4 class="text-subhead-2 text-light">კურიკულუმი</h4> -->
                    <div class="panel panel-default curriculum open paper-shadow" data-z="0.5">
                        <div class="panel-heading panel-heading-gray" data-toggle="collapse" data-target="#curriculum-1">
                            <div class="media">
                                <div class="media-left">
                                    <span class="icon-block img-circle bg-indigo-300 half text-white"><i class="fa fa-graduation-cap"></i></span>
                                </div>
                                <div class="media-body">
                                    <h5 class="text-headline">სალექციო მასალები</h5>
                                    
                                </div>
                            </div>
                            <span class="collapse-status collapse-open">Open</span>
                            <span class="collapse-status collapse-close">Close</span>
                        </div>
                        <div class="list-group collapse in" id="curriculum-1">
                            <div class="list-group-item media" data-target="website-take-course.html">
                                <div class="media-left">
                                    <div class="text-crt">1.</div>
                                </div>
                                <div class="media-body">
                                    <i class="fa fa-fw fa-circle text-green-300"></i> Installation
                                </div>
                                <div class="media-right">
                                    <div class="width-100 text-right text-caption">2:03 min</div>
                                </div>
                            </div>
                            <div class="list-group-item media active" data-target="website-take-course.html">
                                <div class="media-left">
                                    <div class="text-crt">2.</div>
                                </div>
                                <div class="media-body">
                                    <i class="fa fa-fw fa-circle text-blue-300"></i> The MVC architectural pattern
                                </div>
                                <div class="media-right">
                                    <div class="width-100 text-right text-caption">25:01 min</div>
                                </div>
                            </div>
                            <div class="list-group-item media" data-target="website-take-course.html">
                                <div class="media-left">
                                    <div class="text-crt">3.</div>
                                </div>
                                <div class="media-body">
                                    <i class="fa fa-fw fa-circle text-grey-200"></i> Database Models
                                </div>
                                <div class="media-right">
                                    <div class="width-100 text-right text-caption">12:10 min</div>
                                </div>
                            </div>
                            <div class="list-group-item media" data-target="website-take-course.html">
                                <div class="media-left">
                                    <div class="text-crt">4.</div>
                                </div>
                                <div class="media-body">
                                    <i class="fa fa-fw fa-circle text-grey-200"></i> Database Access
                                </div>
                                <div class="media-right">
                                    <div class="width-100 text-right text-caption">1:25 min</div>
                                </div>
                            </div>
                            <div class="list-group-item media" data-target="website-take-course.html">
                                <div class="media-left">
                                    <div class="text-crt">5.</div>
                                </div>
                                <div class="media-body">
                                    <i class="fa fa-fw fa-circle text-grey-200"></i> Eloquent Basics
                                </div>
                                <div class="media-right">
                                    <div class="width-100 text-right text-caption">22:30 min</div>
                                </div>
                            </div>
                            <div class="list-group-item media" data-target="website-take-quiz.html">
                                <div class="media-left">
                                    <div class="text-crt">6.</div>
                                </div>
                                <div class="media-body">
                                    <i class="fa fa-fw fa-circle text-grey-200"></i> Take Quiz
                                </div>
                                <div class="media-right">
                                    <div class="width-100 text-right text-caption">10:00 min</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default curriculum paper-shadow" data-z="0.5">
                        <div class="panel-heading panel-heading-gray" data-toggle="collapse" data-target="#curriculum-2">
                            <div class="media">
                                <div class="media-left">
                                    <span class="icon-block half img-circle bg-orange-300 text-white"><i class="fa fa-graduation-cap"></i></span>
                                </div>
                                <div class="media-body">
                                    <h5 class="text-headline">პრაქტკული მეცადინეობები</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores cumque minima nemo repudiandae rerum! Aspernatur at, autem expedita id illum laudantium molestias officiis quaerat, rem sapiente sint totam velit. Enim.</p>
                                </div>
                            </div>
                            <span class="collapse-status collapse-open">Open</span>
                            <span class="collapse-status collapse-close">Close</span>
                        </div>
                        <div class="list-group collapse" id="curriculum-2">
                            <div class="list-group-item media" data-target="website-take-course.html">
                                <div class="media-left">
                                    <div class="text-crt">1.</div>
                                </div>
                                <div class="media-body">
                                    <i class="fa fa-fw fa-circle text-grey-200"></i> Installation
                                </div>
                                <div class="media-right">
                                    <div class="width-100 text-right text-caption">2:03 min</div>
                                </div>
                            </div>
                            <div class="list-group-item media" data-target="website-take-course.html">
                                <div class="media-left">
                                    <div class="text-crt">2.</div>
                                </div>
                                <div class="media-body">
                                    <i class="fa fa-fw fa-circle text-grey-200"></i> The MVC architectural pattern
                                </div>
                                <div class="media-right">
                                    <div class="width-100 text-right text-caption">25:01 min</div>
                                </div>
                            </div>
                            <div class="list-group-item media" data-target="website-take-course.html">
                                <div class="media-left">
                                    <div class="text-crt">3.</div>
                                </div>
                                <div class="media-body">
                                    <i class="fa fa-fw fa-circle text-grey-200"></i> Database Models
                                </div>
                                <div class="media-right">
                                    <div class="width-100 text-right text-caption">12:10 min</div>
                                </div>
                            </div>
                            <div class="list-group-item media" data-target="website-take-course.html">
                                <div class="media-left">
                                    <div class="text-crt">4.</div>
                                </div>
                                <div class="media-body">
                                    <i class="fa fa-fw fa-circle text-grey-200"></i> Database Access
                                </div>
                                <div class="media-right">
                                    <div class="width-100 text-right text-caption">1:25 min</div>
                                </div>
                            </div>
                            <div class="list-group-item media" data-target="website-take-course.html">
                                <div class="media-left">
                                    <div class="text-crt">5.</div>
                                </div>
                                <div class="media-body">
                                    <i class="fa fa-fw fa-circle text-grey-200"></i> Eloquent Basics
                                </div>
                                <div class="media-right">
                                    <div class="width-100 text-right text-caption">22:30 min</div>
                                </div>
                            </div>
                            <div class="list-group-item media" data-target="website-take-quiz.html">
                                <div class="media-left">
                                    <div class="text-crt">6.</div>
                                </div>
                                <div class="media-body">
                                    <i class="fa fa-fw fa-circle text-grey-200"></i> Take Quiz
                                </div>
                                <div class="media-right">
                                    <div class="width-100 text-right text-caption">10:00 min</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default curriculum paper-shadow" data-z="0.5">
                        <div class="panel-heading panel-heading-gray" data-toggle="collapse" data-target="#curriculum-3">
                            <div class="media">
                                <div class="media-left">
                                    <span class="icon-block half img-circle bg-green-300 text-white"><i class="fa fa-graduation-cap"></i></span>
                                </div>
                                <div class="media-body">
                                    <h5 class="text-headline">საგამოცდო საკითხები</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores cumque minima nemo repudiandae rerum! Aspernatur at, autem expedita id illum laudantium molestias officiis quaerat, rem sapiente sint totam velit. Enim.</p>
                                </div>
                            </div>
                            <span class="collapse-status collapse-open">Open</span>
                            <span class="collapse-status collapse-close">Close</span>
                        </div>
                        <div class="list-group collapse" id="curriculum-3">
                            <div class="list-group-item media" data-target="website-take-course.html">
                                <div class="media-left">
                                    <div class="text-crt">1.</div>
                                </div>
                                <div class="media-body">
                                    <i class="fa fa-fw fa-circle text-grey-200"></i> Installation
                                </div>
                                <div class="media-right">
                                    <div class="width-100 text-right text-caption">2:03 min</div>
                                </div>
                            </div>
                            <div class="list-group-item media" data-target="website-take-course.html">
                                <div class="media-left">
                                    <div class="text-crt">2.</div>
                                </div>
                                <div class="media-body">
                                    <i class="fa fa-fw fa-circle text-grey-200"></i> The MVC architectural pattern
                                </div>
                                <div class="media-right">
                                    <div class="width-100 text-right text-caption">25:01 min</div>
                                </div>
                            </div>
                            <div class="list-group-item media" data-target="website-take-course.html">
                                <div class="media-left">
                                    <div class="text-crt">3.</div>
                                </div>
                                <div class="media-body">
                                    <i class="fa fa-fw fa-circle text-grey-200"></i> Database Models
                                </div>
                                <div class="media-right">
                                    <div class="width-100 text-right text-caption">12:10 min</div>
                                </div>
                            </div>
                            <div class="list-group-item media" data-target="website-take-course.html">
                                <div class="media-left">
                                    <div class="text-crt">4.</div>
                                </div>
                                <div class="media-body">
                                    <i class="fa fa-fw fa-circle text-grey-200"></i> Database Access
                                </div>
                                <div class="media-right">
                                    <div class="width-100 text-right text-caption">1:25 min</div>
                                </div>
                            </div>
                            <div class="list-group-item media" data-target="website-take-course.html">
                                <div class="media-left">
                                    <div class="text-crt">5.</div>
                                </div>
                                <div class="media-body">
                                    <i class="fa fa-fw fa-circle text-grey-200"></i> Eloquent Basics
                                </div>
                                <div class="media-right">
                                    <div class="width-100 text-right text-caption">22:30 min</div>
                                </div>
                            </div>
                            <div class="list-group-item media" data-target="website-take-quiz.html">
                                <div class="media-left">
                                    <div class="text-crt">6.</div>
                                </div>
                                <div class="media-body">
                                    <i class="fa fa-fw fa-circle text-grey-200"></i> Take Quiz
                                </div>
                                <div class="media-right">
                                    <div class="width-100 text-right text-caption">10:00 min</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br/>
                    <br/>
                @endif
            </div>
            <div class="col-md-3">
                
                @if($match)
                    <div class="panel panel-default" data-toggle="panel-collapse" data-open="true">
                        <div class="panel-heading panel-collapse-trigger">
                            <h4 class="panel-title">რესურსები</h4>
                        </div>
                        <div class="panel-body list-group">
                            <ul class="list-group list-group-menu">
                                <li class="list-group-item active"><a class="link-text-color" href="">სასწავლო მასალა</a></li>
                                <li class="list-group-item"><a class="link-text-color" href="#">ტესტები</a></li>

                            </ul>
                        </div>
                    </div>
                @endif
                @foreach ($course->users()->wherePivot('type', 1)->get() as $user)
                <div class="panel panel-default" data-toggle="panel-collapse" data-open="true" style="margin-bottom:0;">
                    
                        <div class="panel-heading panel-collapse-trigger">
                            <h4 class="panel-title">{{$user->firstname}} {{$user->lastname}}</h4>
                        </div>
                        <div class="panel-body">
                            <div class="media v-middle">
                                <div class="media-left">
                                    <img src="{{url('/uploads/avatars/').'/'.$user->avatar}}" alt="{{$user->firstname}} {{$user->lastname}}" width="60" class="img-circle" />
                                </div>
                                <div class="media-body">
                                    <h5 class="text-title margin-none"><a href="#">{{$user->firstname}} {{$user->lastname}}</a></h5>
                                    
                                </div>
                                <span class="caption text-light">Biography</span>
                            </div>
                            <br/>
                            <div class="expandable expandable-indicator-white expandable-trigger">
                                <div class="expandable-content">
                                    <p>{{$user->description}}</p>
                                </div>
                            </div>
                        </div>
                    
                </div>
                @endforeach

                <hr>

                <div class="panel panel-default" data-toggle="panel-collapse" data-open="true">
                    <div class="panel-heading panel-collapse-trigger">
                        <h4 class="panel-title">{{ trans('main.all.users online') }}</h4>
                    </div>
                    <div class="panel-body list-group">
                        <ul class="list-group">
                            @foreach ($online_users as $user)
                                <li class="list-group-item" data-course-id="{{ $course->id }}" style="background-color:transparent !important;">
                                    <div class="media-name-wrapper">
                                        <img src="{{url('/uploads/avatars/').'/'.$user->avatar}}" alt="People" class="img-circle width-30">
                                        <a class="name-field-sm" href="#">{{ $user->firstname }} {{ $user->lastname }}</a>
                                    </div>
                                    
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {

        var $timer;
        $('#enroll_to_course_form').validate({
            errorElement: 'div',
            errorClass: 'invalid',
            rules: {
                @if($course->password != null)
                    password: {
                        required: true,
                        /*equalTo: "#passwordConfirmation"*/
                    }, 
                @endif

                course_id: {
                    required: true,
                },
            },

            messages: {
                
            },

            submitHandler: function(form) {
                $('#enroll_to_course_btn').button('loading');
                var formData = $(form).serialize();
                console.log(formData);
                $.ajax({
                    url: "{{ route('enroll.to') }}",
                    type: "post",
                    datatype: 'json',
                    data: formData,
                    error: function(a,b,c) {
                        $('#enroll_to_course_btn').button('reset');
                    },
                    success: function(data){
                        $('#enroll_to_course_btn').button('reset');
                        if (data.success) {
                            //$('#enroll_to_course_form').slideUp(200);
                            Materialize.toast(data.message, 4000);
                            clearTimeout($timer);
                            var ms = 800; // milliseconds
                            $timer = setTimeout(function() {
                                location.reload();
                            }, ms);

                        } else {
                            Materialize.toast(data.message, 4000);

                            
                            
                        }
                    }
                });
                return false;
            }
        });
    })
</script>
@stop
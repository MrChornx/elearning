@extends('layouts.template')

@section('title', 'Dashboard')

@section('content')
<?php $auth_user = App\User::find(Session::get('user_id')); ?>
<div class="parallax overflow-hidden bg-blue-400 page-section third">
    <div class="container parallax-layer" data-opacity="true">
        <div class="media v-middle">
            <div class="media-left text-center pull-left">
                <a href="#">
                    <img src="{{url('/uploads/avatars/').'/'.$auth_user->avatar}}" alt="people" class="img-circle width-80" />
                </a>
            </div>
            <div class="media-body pull-left">
                <h1 class="text-white text-display-1 margin-v-0">{{$auth_user->firstname}} {{$auth_user->lastname}}</h1>
                <p class="text-subhead"><a class="link-white text-underline" href="{{url('/instructor-profile')}}">{{ trans('main.header.instructor_sub.profile') }}</a></p>
            </div>
            <div class="media-right pull-right">
                <span class="label bg-blue-500" style="margin-top: 40%;">{{ $auth_user->rep }}</span>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<div class="container">
    <div class="page-section">
        <div class="row">
            <div class="col-md-9">
                <!-- Tabbable Widget -->
                <div class="tabbable paper-shadow relative" data-z="0.5">
                    <!-- Tabs -->


                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#course" data-toggle="tab"><i class="fa fa-fw fa-lock"></i> <span class="hidden-sm hidden-xs">კურსი</span></a></li>
                        <li><a href="#content" data-toggle="tab"><i class="fa fa-fw fa-credit-card"></i> <span class="hidden-sm hidden-xs">მასალები</span></a></li>
                        <li><a href="#lectures" data-toggle="tab"><i class="fa fa-fw fa-credit-card"></i> <span class="hidden-sm hidden-xs">ლექციები</span></a></li>
                    </ul>
                    <!-- // END Tabs -->
                    <!-- Panes -->
                    <div class="tab-content">
                        <div id="course" class="tab-pane active">
                            <form action="" id="edit-course-form">
                                <div class="form-group form-control-material">
                                    <label for="title">სათაური</label>
                                    <input type="text" name="name" id="name" placeholder="" class="form-control used" value="{{$course->name}}" />
                                    
                                </div>
                                <div class="form-group">
                                    <label for="description">აღწერა</label>
                                    <textarea name="description" id="description" cols="30" rows="10" class="summernote">{!!html_entity_decode($course->description)!!}</textarea>
                                </div>
                                <input type="hidden" name="course_id" id="course_id"  value="{{$course->id}}" />
                                <div class="row text-center">
                                <div class="col l12 m12 s12">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light pull-right" id="course-main-sbm">შენახვა</button>
                                </div>

                            </div>
                            </form>

                        </div>
                        <div id="content" class="tab-pane">

                            

                            <div class="text-right">
                                <a href="#" class="btn btn-primary">შენახვა</a>
                            </div>
                        </div>
                        <div id="lectures" class="tab-pane">
    
                            <div class="text-right">
                                <a href="#" class="btn btn-primary">შენახვა</a>
                            </div>
                        </div>
                    </div>
                    <!-- // END Panes -->
                </div>
                <!-- // END Tabbable Widget -->
                <br/>
                <br/>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default" data-toggle="panel-collapse" data-open="true">
                    <div class="panel-heading panel-collapse-trigger">
                        <h4 class="panel-title">{{ trans('main.all.cabinet') }}</h4>
                    </div>
                    <div class="panel-body list-group">
                        <ul class="list-group list-group-menu">
                            <li class="list-group-item"><a class="link-text-color" href="{{url('/').'/instructor-dashboard'}}">{{trans('main.header.instructor_sub.dashboard') }}</a></li>
                            <li class="list-group-item"><a class="link-text-color" href="{{url('/').'/instructor-courses'}}">{{ trans('main.header.instructor_sub.my courses') }}</a></li>
                            <li class="list-group-item"><a class="link-text-color" href="{{url('/').'/instructor-statement'}}">{{ trans('main.header.instructor_sub.statements') }}</a></li>
                            <li class="list-group-item"><a class="link-text-color" href="{{url('/').'/instructor-profile'}}">{{ trans('main.header.instructor_sub.profile') }}</a></li>
                            <li class="list-group-item"><a class="link-text-color" href="{{url('/').'/instructor-messages'}}">{{ trans('main.header.instructor_sub.messages') }}</a></li>
                        </ul>
                    </div>
                </div>
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
        var url = window.location.href;
        $('ul.list-group-menu > li > a.link-text-color').each(function() {
            if ($(this).attr('href') == url) {
                $(this).closest('li').addClass('active');
            }
        })

        var $timer;
        $('#edit-course-form').validate({
            errorElement: 'div',
            errorClass: 'invalid',
            rules: {
                name: {
                    required: true
                },
                description: {
                    required: true,
                    /*equalTo: "#passwordConfirmation"*/
                },  
            },

            messages: {
                
            },

            submitHandler: function(form) {
                $('#course-main-sbm').button('loading');
                var formData = $(form).serialize();
                $.ajax({
                    url: "{{ route('post.edit.course') }}",
                    type: "post",
                    datatype: 'json',
                    data: formData + '&description='+ $("#description").code(),
                    error: function(a,b,c) {
                        $('#course-main-sbm').button('reset');
                    },
                    success: function(data){
                        $('#course-main-sbm').button('reset');
                        if (data.success) {
                            Materialize.toast('ცვლილებები შენახულია', 4000);
                        }                 
                    }
                });
                return false;
            }
        });


    });
</script>
@stop
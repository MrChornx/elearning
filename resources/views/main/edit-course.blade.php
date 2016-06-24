@extends('layouts.template')

@section('title', 'Dashboard')

@section('content')
<div class="parallax overflow-hidden bg-blue-400 page-section third">
    <div class="container parallax-layer" data-opacity="true">
        <div class="media v-middle">
            <div class="media-left text-center pull-left">
                <a href="#">
                    <img src="{{url('/uploads/avatars/').'/'.$user->avatar}}" alt="people" class="img-circle width-80" />
                </a>
            </div>
            <div class="media-body pull-left">
                <h1 class="text-white text-display-1 margin-v-0">{{Session::get('user')->firstname}} {{Session::get('user')->firstname}}</h1>
                <p class="text-subhead"><a class="link-white text-underline" href="{{url('/instructor-profile')}}">{{ trans('main.header.instructor_sub.profile') }}</a></p>
            </div>
            <div class="media-right pull-right">
                <span class="label bg-blue-500" style="margin-top: 40%;">{{ Session::get('user')->rep }}</span>
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
                            <form action="">
                                <div class="form-group form-control-material">
                                    <label for="title">სათაური</label>
                                    <input type="text" name="title" id="title" placeholder="Course Title" class="form-control used" value="Basics of HTML" />
                                    
                                </div>
                                <div class="form-group">
                                    <label for="description">აღწერა</label>
                                    <textarea name="description" id="description" cols="30" rows="10" class="summernote">ისწავლე ბიჯოოოოო</textarea>
                                </div>
                            </form>
                            <div class="text-right">
                                <a href="#" class="btn btn-primary">შენახვა</a>
                            </div>
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
    })
    
</script>
@stop
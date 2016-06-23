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
                <div class="row" data-toggle="isotope">
                    @foreach($courses as $course)
                        <div class="item col-xs-12 col-sm-6 col-lg-4">
                            <div class="panel panel-default paper-shadow" data-z="0.5">
                                <div class="cover overlay cover-image-full hover">
                                    <span class="img icon-block height-150 bg-default"></span>
                                    <a href="{{route('show.course', $course->id)}}" class="padding-none overlay overlay-full icon-block bg-default">
                                        <span class="v-center">
                                            <i class="fa fa-university"></i>
                                        </span>
                                    </a>
                                    <a href="{{route('show.course', $course->id)}}" class="overlay overlay-full overlay-hover overlay-bg-white">
                                        <span class="v-center">
                                            <span class="btn btn-circle btn-white btn-lg"><i class="fa fa-graduation-cap"></i></span>
                                        </span>
                                    </a>
                                </div>
                                <div class="panel-body">
                                    <h4 class="text-headline margin-v-0-10 course-header"><a href="{{route('show.course', $course->id)}}">{{$course->name}}</a></h4>
                                </div>
    
                                <hr class="margin-none" />
                                <div class="panel-body">
                                    <span class="inline-description-md">{!!html_entity_decode($course->description)!!}</span>
                                    <hr class="dashed-separator-1" />
                                    <div class="media v-middle">
                                        <div class="media-body">
                                            @foreach($course->users()->wherePivot('type', 1)->get() as $user1)
                                                <div class="media-name-wrapper">
                                                    <img src="{{url('/uploads/avatars/').'/'.$user->avatar}}" alt="People" class="img-circle width-30" />
                                                <a class="name-field-sm" href="#">{{$user1->firstname}} {{$user1->lastname}}</a>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <hr class="margin-none" />
                                <div class="panel-body">
                                    <a class="waves-effect btn-flat pull-right btn-small" data-animated href="{{route('edit.course', $course->id)}}"><i class="fa fa-fw fa-pencil"></i> {{trans('main.all.edit course')}}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
             <!--    <ul class="pagination margin-top-none">
                    <li class="disabled"><a href="#">&laquo;</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ul>
                <br/> -->
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
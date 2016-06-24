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
                <!-- <div class="media messages-container media-clearfix-xs-min media-grid">
                    <div class="media-left">
                        <div class="messages-list">
                            <div class="panel panel-default paper-shadow" data-z="0.5" data-scrollable-h>
                                <ul class="list-group">
                                    <li class="list-group-item active">
                                        <a href="#">
                                            <div class="media v-middle">
                                                <div class="media-left">
                                                    <img src="images/people/110/woman-5.jpg" width="50" alt="" class="media-object" />
                                                </div>
                                                <div class="media-body">
                                                    <span class="date">Today</span>
                                                    <span class="user">Samantha Michael</span>
                                                    <div class="text-light">Are we ok to meet...</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#">
                                            <div class="media v-middle">
                                                <div class="media-left">
                                                    <img src="images/people/110/guy-3.jpg" height="50" alt="" class="media-object" />
                                                </div>
                                                <div class="media-body">
                                                    <span class="date">Sat</span>
                                                    <span class="user">Adrian Demian.</span>
                                                    <div class="text-light">Looking forward to...</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#">
                                            <div class="media v-middle">
                                                <div class="media-left">
                                                    <img src="images/people/110/woman-4.jpg" width="50" alt="" class="media-object" />
                                                </div>
                                                <div class="media-body">
                                                    <span class="date">5 days</span>
                                                    <span class="user">Michelle Anister</span>
                                                    <div class="text-light">Nice design.</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#">
                                            <div class="media v-middle">
                                                <div class="media-left">
                                                    <img src="images/people/110/woman-3.jpg" height="50" alt="" class="media-object" />
                                                </div>
                                                <div class="media-body">
                                                    <span class="date">Sat</span>
                                                    <span class="user">Sue Tallbot</span>
                                                    <div class="text-light">Looking forward to...</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#">
                                            <div class="media v-middle">
                                                <div class="media-left">
                                                    <img src="images/people/110/guy-9.jpg" height="50" alt="" class="media-object" />
                                                </div>
                                                <div class="media-body">
                                                    <span class="date">Sat</span>
                                                    <span class="user">Andy Smith</span>
                                                    <div class="text-light">Looking forward to...</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#">
                                            <div class="media v-middle">
                                                <div class="media-left">
                                                    <img src="images/people/110/woman-9.jpg" height="50" alt="" class="media-object" />
                                                </div>
                                                <div class="media-body">
                                                    <span class="date">Sat</span>
                                                    <span class="user">Jeniffer Doe</span>
                                                    <div class="text-light">Looking forward to...</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#">
                                            <div class="media v-middle">
                                                <div class="media-left">
                                                    <img src="images/people/110/guy-6.jpg" height="50" alt="" class="media-object" />
                                                </div>
                                                <div class="media-body">
                                                    <span class="date">Sat</span>
                                                    <span class="user">Jimmy Joe</span>
                                                    <div class="text-light">Looking forward to...</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#">
                                            <div class="media v-middle">
                                                <div class="media-left">
                                                    <img src="images/people/110/guy-2.jpg" height="50" alt="" class="media-object" />
                                                </div>
                                                <div class="media-body">
                                                    <span class="date">Sat</span>
                                                    <span class="user">Chris Name</span>
                                                    <div class="text-light">Looking forward to...</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="media-body">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-btn">
                                    <a class="btn btn-primary" href="#">
                                        <i class="fa fa-envelope"></i> Send
                                    </a>
                                </div>
                                <input type="text" class="form-control share-text" placeholder="Write message..." />
                            </div>

                        </div>
                        <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
                            <div class="panel-body">
                                <div class="media v-middle">
                                    <div class="media-left">
                                        <img src="images/people/110/woman-5.jpg" alt="person" class="media-object img-circle width-50" />
                                    </div>
                                    <div class="media-body message">
                                        <h4 class="text-subhead margin-none"><a href="#">Samantha Michael</a></h4>
                                        <p class="text-caption text-light"><i class="fa fa-clock-o"></i> 2 min ago</p>
                                    </div>
                                </div>
                                <p>Is 4pm ok?</p>
                            </div>
                        </div>
                        <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
                            <div class="panel-body">
                                <div class="media v-middle">
                                    <div class="media-left">
                                        <img src="images/people/110/guy-5.jpg" alt="person" class="media-object img-circle width-50" />
                                    </div>
                                    <div class="media-body message">
                                        <h4 class="text-subhead margin-none"><a href="#">Adrian Demian</a></h4>
                                        <p class="text-caption text-light"><i class="fa fa-clock-o"></i> 15 hrs ago</p>
                                    </div>
                                </div>
                                <p>
                                    Hi Samantha
                                </p>
                                <p>Sure, Tomorrow is great.. What time?</p>
                            </div>
                        </div>
                        <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
                            <div class="panel-body">
                                <div class="media v-middle">
                                    <div class="media-left">
                                        <img src="images/people/110/woman-5.jpg" alt="person" class="media-object img-circle width-50" />
                                    </div>
                                    <div class="media-body message">
                                        <h4 class="text-subhead margin-none"><a href="#">Samantha Michael</a></h4>
                                        <p class="text-caption text-light"><i class="fa fa-clock-o"></i> 1 day ago</p>
                                    </div>
                                </div>
                                <p>Sure.</p>
                                <p>Is Tomorrow ok to discuss?</p>
                            </div>
                        </div>
                        <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
                            <div class="panel-body">
                                <div class="media v-middle">
                                    <div class="media-left">
                                        <img src="images/people/110/guy-5.jpg" alt="person" class="media-object img-circle width-50" />
                                    </div>
                                    <div class="media-body message">
                                        <h4 class="text-subhead margin-none"><a href="#">Adrian Demian</a></h4>
                                        <p class="text-caption text-light"><i class="fa fa-clock-o"></i> 2 days ago</p>
                                    </div>
                                </div>
                                <p>
                                    Can we arrange a Skype call?
                                </p>
                            </div>
                        </div>
                    </div>
                </div> -->
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
                                <li class="list-group-item" style="background-color:transparent !important;">
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

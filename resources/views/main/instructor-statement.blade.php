@extends('layouts.template')

@section('title', 'Dashboard')

@section('content')

<?php $auth_user = App\User::find(Session::get('user_id')); ?>
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
                <div class="panel panel-default paper-shadow" data-z="0.5">
                    <div class="panel-heading">
                        <div class="max-width-300 form-group daterangepicker-report">
                            <div class="form-control">
                                <i class="fa fa-calendar fa-fw"></i>
                                <span>December 10, 2014 - January 9, 2015</span>
                                <b class="caret"></b>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-subhead v-middle">
                            <thead>
                                <tr>
                                    <th class="width-100">დრო</th>
                                    <th>თემა</th>
                                    <th class="width-80 text-center">ნომერი</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="label label-grey-200">12 Jan 2015</div>
                                    </td>
                                    <td>საკონტროლო</td>
                                    <td class="text-center"><a href="#">#740</a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="label label-grey-200">12 Jan 2015</div>
                                    </td>
                                    <td>გამოცდა</td>
                                    <td class="text-center"><a href="#">#9705</a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="label label-grey-200">12 Jan 2015</div>
                                    </td>
                                    <td>გამოცდა</td>
                                    <td class="text-center"><a href="#">#2497</a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="label label-grey-200">12 Jan 2015</div>
                                    </td>
                                    <td>საკონტროლო</td>
                                    <td class="text-center"><a href="#">#12202</a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="label label-grey-200">12 Jan 2015</div>
                                    </td>
                                    <td>საკონტროლო</td>
                                    <td class="text-center"><a href="#">#9407</a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="label label-grey-200">12 Jan 2015</div>
                                    </td>
                                    <td>შუალედური გამოცდა</td>
                                    <td class="text-center"><a href="#">#6459</a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="label label-grey-200">12 Jan 2015</div>
                                    </td>
                                    <td>სემინარი</td>
                                    <td class="text-center"><a href="#">#4793</a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="label label-grey-200">12 Jan 2015</div>
                                    </td>
                                    <td>სემინარი</td>
                                    <td class="text-center"><a href="#">#5663</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- <div class="panel-footer">
                        <ul class="pagination margin-none">
                            <li class="disabled"><a href="#">&laquo;</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">&raquo;</a></li>
                        </ul>
                    </div> -->
                </div>
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
                </div
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
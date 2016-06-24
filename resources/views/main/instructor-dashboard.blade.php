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
                <div class="row" data-toggle="isotope">
                    <!-- <div class="item col-xs-12 col-lg-6">
                        <div class="panel panel-default paper-shadow" data-z="0.5">
                            <div class="panel-heading">
                                <div class="media v-middle">
                                    <div class="media-body">
                                        <h4 class="text-headline margin-none">Earnings</h4>
                                        <p class="text-subhead text-light">This Month</p>
                                    </div>
                                    <div class="media-right">
                                        <a class="btn btn-white btn-flat" href="website-instructor-earnings.html">Reports</a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div id="line-holder" data-toggle="flot-chart-earnings" class="flotchart-holder height-200"></div>
                            </div>
                            <hr/>
                            <div class="panel-body">
                                <div class="row text-center">
                                    <div class="col-md-6">
                                        <h4 class="margin-none">Gross Revenue</h4>
                                        <p class="text-display-1 text-warning margin-none">102.4k</p>
                                    </div>
                                    <div class="col-md-6">
                                        <h4 class="margin-none">Net Revenue</h4>
                                        <p class="text-display-1 text-success margin-none">55k</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="item col-xs-12 col-lg-6">
                        <div class="panel panel-default paper-shadow" data-z="0.5">
                            <div class="panel-heading">
                                <h4 class="text-headline margin-none">{{ trans('main.header.instructor_sub.my courses') }}</h4>
                            </div>
                            <ul class="list-group">
                                @foreach($courses as $course)
                                    <li class="list-group-item media v-middle">
                                        <div class="media-body">
                                            <a href="{{route('show.course', $course->id)}}" class="text-subhead list-group-link">{{$course->name}}</a>
                                        </div>
                                        <div class="media-right">
                                            <div class="progress progress-mini width-100 margin-none">
                                                <div class="progress-bar progress-bar-green-300" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="panel-footer text-right">
                                <a href="{{url('/').'/instructor-courses'}}" class="waves-effect btn-flat pull-right btn-small" data-z="0" data-hover-z="1" data-animated>მანახე ყველა</a>
                                <a href="#" class="waves-effect btn-flat pull-right btn-small" data-z="0" data-hover-z="1" data-animated>შექმენი კურსი <i class="fa fa-plus"></i></a>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    <div class="item col-xs-12 col-lg-6">
                        <div class="s-container">
                            <h4 class="text-headline margin-none">კომენტარები</h4>
                            <p class="text-subhead text-light">ბოლოს დამატებული კომენტარები </p>
                        </div>
                        <div class="panel panel-default">
                            <ul class="list-group">
                                 @foreach($courses as $course)
                                    <li class="list-group-item">
                                        <div class="media v-middle margin-v-0-10">
                                            <div class="media-body pull-left">
                                                <p class="text-subhead">
                                                    <a href="#">ვიღაც</a>
                                                    <span class="text-caption text-light">49 წუთის წინ</span>
                                                </p>
                                            </div>
                                            <div class="media-right pull-right">
                                                <div class="width-50 text-right">
                                                    <a href="#" class="waves-effect btn-flat pull-right btn-small"><i class="fa fa-reply"></i></a>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <p>რაღაცა...</p>
                                        <p class="text-light"><span class="caption">კურსი:</span> <a href="{{route('show.course', $course->id)}}">{{$course->name}}</a></p>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="item col-xs-12 col-lg-6">
                        <div class="panel panel-default paper-shadow" data-z="0.5">
                            <div class="panel-heading">
                                <div class="media v-middle">
                                    <div class="media-body">
                                        <h4 class="text-headline margin-none">განცხადებები</h4>
                                    </div>
                                    <div class="media-right">
                                        <a class="waves-effect btn-flat pull-right btn-small" href="#">Statement N</a>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table text-subhead v-middle">
                                    <tbody>
                                        <tr>
                                            <td class="width-100 text-caption">
                                                <div class="label label-grey-200 label-xs">12 Jan 2015</div>
                                            </td>
                                            <td>გამოცდა</td>
                                            <td class="width-80 text-center"><a href="#">#1261</a></td>
                                        </tr>
                                        <tr>
                                            <td class="width-100 text-caption">
                                                <div class="label label-grey-200 label-xs">12 Jan 2015</div>
                                            </td>
                                            <td>სემინარი</td>
                                            <td class="width-80 text-center"><a href="#">#4631</a></td>
                                        </tr>
                                        <tr>
                                            <td class="width-100 text-caption">
                                                <div class="label label-grey-200 label-xs">12 Jan 2015</div>
                                            </td>
                                            <td>საკონტროლო</td>
                                            <td class="width-80 text-center"><a href="#">#7396</a></td>
                                        </tr>
                                        <tr>
                                            <td class="width-100 text-caption">
                                                <div class="label label-grey-200 label-xs">12 Jan 2015</div>
                                            </td>
                                            <td>საკონტროლო</td>
                                            <td class="width-80 text-center"><a href="#">#14247</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
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
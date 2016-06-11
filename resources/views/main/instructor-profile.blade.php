@extends('layouts.template')

@section('title', 'E-Learning')

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
                        <li class="active"><a href="#account" data-toggle="tab"><i class="fa fa-fw fa-lock"></i> <span class="hidden-sm hidden-xs">ძირითადი პროფილი</span></a></li>
                        <li><a href="#personal-data1" data-toggle="tab"><i class="fa fa-fw fa-credit-card"></i> <span class="hidden-sm hidden-xs">პირადი ინფორმაცია</span></a></li>
                    </ul>
                    <!-- // END Tabs -->
                    <!-- Panes -->
                    <div class="tab-content">
                        <div id="account" class="tab-pane active">
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">პროფილის სურათი</label>
                                    <div class="col-md-6">
                                        <div class="media v-middle">
                                            <div class="media-left">
                                                <div class="icon-block width-100 bg-grey-100">
                                                    <i class="fa fa-photo text-light"></i>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <a href="#" class="waves-effect btn-flat  btn-small"  data-animated> დაამატე<i class="fa fa-upl"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-md-2 control-label"></label>
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-control-material">
                                                    <label for="exampleInputFirstName">სახელი</label>
                                                    <input type="email" class="form-control" id="exampleInputFirstName" placeholder="Your first name">    
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-control-material">
                                                    <label for="exampleInputLastName">გვარი</label>
                                                    <input type="email" class="form-control" id="exampleInputLastName" placeholder="Your last name">         
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-md-2 control-label">ელ-ფოსტა</label>
                                    <div class="col-md-6">
                                        <div class="form-control-material">
                                            <div class="input-group">
                                                <label for="inputEmail3">ელ-ფოსტა</label>
                                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-md-2 control-label">ვებ გვერდი</label>
                                    <div class="col-md-6">
                                        <div class="form-control-material">
                                            <div class="input-group">
                                                <label for="website">ვებ გვერდი</label>
                                                <input type="text" class="form-control used" id="website" value="www.tsu.ge">   
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-md-2 control-label">შეცვალე პაროლი</label>
                                    <div class="col-md-6">
                                        <div class="form-control-material">
                                            <label for="inputPassword3">ახალი პაროლი</label>
                                            <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-offset-2 col-md-6">
                                        <div class="checkbox">
                                            <p class="">
                                              <input type="checkbox" id="checkbox3" name="news_subscribe" />
                                              <label for="checkbox3">გამოიწერე სიახლეები</label>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group margin-none">
                                    <div class="col-md-offset-2 col-md-10">
                                        <button type="submit" class="btn btn-primary paper-shadow relative pull-right" data-z="0.5" data-hover-z="1" data-animated>შეინახე</button>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </form>
                        </div>
                        <div id="personal-data1" class="tab-pane"></div>
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
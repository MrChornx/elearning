@extends('layouts.template')

@section('title', 'E-Learning')

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
                        <li class="active"><a href="#account" data-toggle="tab"><i class="fa fa-fw fa-lock"></i> <span class="hidden-sm hidden-xs">ძირითადი პროფილი</span></a></li>
                        <li><a href="#personal-data1" data-toggle="tab"><i class="fa fa-fw fa-credit-card"></i> <span class="hidden-sm hidden-xs">პირადი ინფორმაცია</span></a></li>
                    </ul>
                    <!-- // END Tabs -->
                    <!-- Panes -->
                    <div class="tab-content">
                        <div id="account" class="tab-pane active">
                            <form class="form-horizontal" id="profile-edit-form">
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">პროფილის სურათი</label>
                                    <div class="col-md-6">
                                        <div class="media v-middle">
                                            <div class="media-left">
                                                <div class="icon-block width-100 bg-grey-100" style="position:relative; border-radius:3px; overflow:hidden;">
                                                    <i class="fa fa-photo text-light"></i>
                                                    <img id="output" style="position:absolute; left:0; top:0;" width="100px" src="{{url('/uploads/avatars/').'/'.$user->avatar}}"/>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <input type="file" accept="image/*" onchange="loadFile(event)" name="avatar" id="avatar">
                                                
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
                                                    <label for="firstname">სახელი</label>
                                                    <input type="text" class="form-control" id="firstname" placeholder="Your first name" name="firstname" value="{{$user->firstname}}">    
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-control-material">
                                                    <label for="lastname">გვარი</label>
                                                    <input type="text" class="form-control" id="lastname" placeholder="Your last name" name="lastname" value="{{$user->lastname}}">         
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-md-2 control-label">ელ-ფოსტა</label>
                                    <div class="col-md-6">
                                        <div class="form-control-material">
                                            <div class="input-group">
                                                <!-- <label for="email">ელ-ფოსტა</label> -->
                                                <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="{{$user->email}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-md-2 control-label">ვებ გვერდი</label>
                                    <div class="col-md-6">
                                        <div class="form-control-material">
                                            <div class="input-group">
                                                <!-- <label for="website">ვებ გვერდი</label> -->
                                                <input type="text" class="form-control used" id="website" value="" name="website">   
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-md-2 control-label">შეცვალე პაროლი</label>
                                    <div class="col-md-6">
                                        <div class="form-control-material">
                                            <div class="input-group">
                                                <!-- <label for="inputPassword3">ახალი პაროლი</label> -->
                                                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-md-2 control-label"></label>
                                    <div class="col-md-6">
                                        <div class="form-control-material">
                                            <div class="input-group">
                                                <!-- <label for="inputPassword3">ახალი პაროლი</label> -->
                                                <input type="password" class="form-control" id="password_re" placeholder="Repeat password" name="password_re">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-offset-2 col-md-6">
                                        <div class="checkbox">
                                            <p class="">
                                              <input type="checkbox" id="news_subscribe" name="news_subscribe" />
                                              <label for="news_subscribe">გამოიწერე სიახლეები</label>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="user_id" value="{{$user->id}}">
                                <div class="form-group margin-none">
                                    <div class="col-md-offset-2 col-md-10">
                                        <button type="submit" class="btn btn-primary paper-shadow relative pull-right" data-z="0.5" data-hover-z="1" data-animated id="profile-edit-main-sbm">შეინახე</button>
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

  var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };

  var $timer;
        $('#profile-edit-form').validate({
            errorElement: 'div',
            errorClass: 'invalid',
            rules: {
                avatar: {

                },
                firstname: {
                    required: true,
                    minlength: 2,
                    maxlength: 50,
                },
                lastname: {
                    required: true,
                    minlength: 2,
                    maxlength: 50,
                },
                email: {
                    required: true,
                    email: true,
                },  
                website: {
                    minlength: 5,
                    maxlength: 100,
                },  
                password: {
                    minlength: 6,
                    maxlength: 100,
                }, 
                password_re: {
                    equalTo: "#password",
                    minlength: 6,
                    maxlength: 100,
                }, 
                news_subscribe: {

                }
            },

            messages: {
                
            },

            submitHandler: function(form) {
                $('#profile-edit-main-sbm').button('loading');
                var formData = new FormData(form);
                formData.append('image', $('#avatar')[0].files[0]); 
                $.ajax({
                    url: "{{ route('post.inst.profile') }}",
                    type: "post",
                    contentType: false,
                    processData: false,
                    data: formData,
                    error: function(a,b,c) {
                        $('#profile-edit-main-sbm').button('reset');
                    },
                    success: function(data){
                        $('#profile-edit-main-sbm').button('reset');
                        if (data.success) {
                            Materialize.toast('ცვლილებები შენახულია', 4000);
                            window.location.reload();
                        }                 
                    }
                });
                return false;
            }
        });
</script>
@stop
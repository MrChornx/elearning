@extends('layouts.login')

@section('title', 'შესვლა')

@section('content')


        <!-- BEGIN LOGIN SECTION -->
<section class="section-account">
    <div class="img-backdrop" style="background-image: url('{{url('/')."/assets"}}/img/tbilisi1.jpg')"></div>
    <div class="spacer"></div>
    <div class="card contain-sm style-transparent">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <br/>
                    <span class="text-lg text-bold text-primary">საიტზე შესვლა</span>
                    <br/>
                    <div class="message-styled" style="width: 500px; margin: 0 auto; margin-top:10px; font-size: 20px; color: green">
                        {{Session::get('msg-login')}}
                    </div>
                    <div class="message-styled" style="width: 500px; margin: 0 auto; margin-top:10px; font-size: 20px; color: red">
                        {{Session::get('msg-login-error')}}
                    </div>
                    <br/>
                    <form class="form floating-label" action="{{url('admin/dashboard')}}" accept-charset="utf-8" method="post">
                        <div class="form-group">
                            <input autocomplete="off" value=" " type="text" class="form-control" id="username" name="username">
                            <label for="username">ნიკი</label>
                        </div>
                        <div class="form-group">
                            <input autocomplete="off" type="password" class="form-control" id="password" name="password">
                            <label for="password">პაროლი</label>
                            <p class="help-block"><a href="#">პაროლი დაგავიწყდა?</a></p>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-xs-6 text-left">
                                <div class="checkbox checkbox-inline checkbox-styled">
                                    <label>
                                        <input type="checkbox"> <span>დამიმახსოვრე</span>
                                    </label>
                                </div>
                            </div><!--end .col -->

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="col-xs-6 text-right">
                                <button class="btn btn-primary btn-raised" type="submit">შესვლა</button>
                            </div><!--end .col -->
                        </div><!--end .row -->
                    </form>
                </div><!--end .col -->
                <div class="col-sm-5 col-sm-offset-1 text-center">
                    <h3 class="text-light">
                        არ გაქვს ექაუნთი?
                    </h3>
                    <a class="btn btn-block btn-raised btn-primary" href="{{url('/register')}}">დარეგისტრირდი</a>
                </div><!--end .col -->
            </div><!--end .row -->
        </div><!--end .card-body -->
    </div><!--end .card -->
</section>
<!-- END LOGIN SECTION -->

@stop





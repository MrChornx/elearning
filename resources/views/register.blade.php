@extends('layouts.login')

@section('title', 'რეგისტრაცია')

@section('content')


        <!-- BEGIN LOGIN SECTION -->
<section class="section-account">
    <div class="img-backdrop" style="background-image: url('{{url('/')."/assets"}}/img/tbilisi1.jpg')"></div>
    <div class="spacer"></div>
    <div class="card contain-sm style-transparent">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-8">
                    <br/>
                    <span class="text-lg text-bold text-primary">საიტზე შესვლა</span>
                    <br/>
                    <div class="message-styled" style="width: 500px; margin: 0 auto; margin-top:10px; font-size: 20px; color: red">
                        {{Session::get('msg')}}
                    </div>
                    <br/>
                    <form class="form" method="post">
                        <div class="card">
                            <div class="card-head style-primary">
                                <header>ექაუნთის შექმნა</header>
                            </div>
                            <div class="card-body">
                                <div>
                                    <label class="radio-inline radio-styled">
                                        <input type="radio" name="gender" value="girl"><span>გოგო</span>
                                    </label>
                                    <label class="radio-inline radio-styled">
                                        <input type="radio" name="gender" value="boy" checked=""><span>ბიჭი</span>
                                    </label>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input autocomplete="off" type="text" class="form-control" id="Firstname1" name="firstname">
                                            <label for="Firstname1">სახელი</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="Lastname1" name="lastname">
                                            <label for="Lastname1">გვარი</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input autocomplete="off" type="text" class="form-control" id="Username1" name="username">
                                    <label for="Username1">ნიკი</label>
                                </div>
                                <div class="form-group">
                                    <input autocomplete="off" value=" " type="text" class="form-control autocomplete-off" id="email" name="email">
                                    <label for="email">ელ-ფოსტა</label>
                                </div>
                                <div class="form-group">
                                    <input autocomplete="off" type="password" class="form-control" id="Password1" name="password">
                                    <label for="Password1">პაროლი</label>
                                </div>
                                <div class="checkbox checkbox-styled">
                                    <label>
                                        <input type="checkbox" value="">
                                        <span>გამომიგზავნე შეტყობინებები მეილზე</span>
                                    </label>
                                </div>
                            </div><!--end .card-body -->
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="card-actionbar">
                                <div class="card-actionbar-row">
                                    <button type="submit" class="btn btn-flat btn-primary ink-reaction">რეგისტრაცია</button>
                                </div>
                            </div>
                        </div><!--end .card -->
                    </form>
                </div><!--end .col -->
                <div class="col-sm-3 col-sm-offset-1 text-center" style="margin-top:6%">
                    <h3 class="text-light">
                        გაქვს ექაუნთი?
                    </h3>
                    <a class="btn btn-block btn-raised btn-primary" href="{{url('/login')}}">შესვლა</a>
                </div><!--end .col -->
            </div><!--end .row -->
        </div><!--end .card-body -->
    </div><!--end .card -->
</section>
<!-- END LOGIN SECTION -->
<script>
    $(document).ready(function() {
        setTimeout(function(){
            $('.autocomplete-off').val('');
        }, 15);
    });
</script>

@stop





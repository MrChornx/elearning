<div class="sign-up-form modal-form">
    <div>
        <div class="">
            <div class="lock-container">
                <div class=" panel-default">
                    <div class="card-title panel-heading row" style="margin-bottom:0;">
                        <div class="col l12 m12 s12">
                            <div class="text-display-1 blue-text card-title">{{ trans('auth.register.create account') }}</div>
                        </div>
                    </div>
                    
                    <div class="panel-body">
                        <!-- Signup -->
                        <form role="form" id="register-form">

                            <div class="row">
                                <div class="input-field col l6 m6 s12 float-message">
                                    <input id="firstName" type="text" class="form-control" name="firstName">
                                    <label for="firstName">{{ trans('auth.register.first name') }}</label>
                                </div>
                                <div class="input-field col l6 m6 s12 float-message">
                                    <input id="lastName" type="text" class="form-control" name="lastName">
                                    <label for="lastName">{{ trans('auth.register.last name') }}</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col l12 m12 s12 float-message">
                                    <input id="email" type="email" class="form-control validate" name="email">
                                    <label for="email">{{ trans('auth.register.email adress') }}</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col l12 m12 s12 float-message">
                                    <input id="password" type="password" class="form-control" name="password">
                                    <label for="password">{{ trans('auth.register.password') }}</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col l12 m12 s12 float-message">
                                    <input id="passwordConfirmation" type="password" class="form-control" name="passwordConfirmation">
                                    <label for="passwordConfirmation">{{ trans('auth.register.re-type password') }}</label>
                                </div>
                            </div>
                            <div class="row">
                                <!-- <div class="checkbox">
                                    <input type="checkbox" id="agree" />
                                    <label for="agree">* I Agree with <a href="#">Terms &amp; Conditions!</a></label>
                                </div> -->
                                <div class="col l12 m12 s12">
                                    <p class="">
                                      <input type="checkbox" id="agree" name="agree" />
                                      <label for="agree">{{ trans('auth.register.I agree with') }} <a href="#">{{ trans('auth.register.Terms & Conditions!') }}</a></label>
                                    </p>
                                </div>
                                
                            </div>

                            <div class="row text-center">
                                <div class="col l12 m12 s12">
                                    <button type="submit" class="btn btn-primary btn-full waves-effect waves-light btn-large">{{ trans('auth.register.Create an Account') }}</button>
                                </div>
                            </div>
                        </form>
                        <!-- //Signup -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#register-form').validate({
            errorElement: 'div',
            errorClass: 'invalid',
            rules: {
                firstName: {
                    required: true
                },
                lastName: {
                    required: true
                },
                email: {
                    required: true
                },
                password: {
                    required: true,
                    /*equalTo: "#passwordConfirmation"*/
                },  
                passwordConfirmation: {
                    required: true,
                    equalTo: "#password"
                },
            },

            messages: {
                
            },

            submitHandler: function(form) {
                //$(form).submit();
                if (!$('#agree').is(':checked')) {
                    $('#agree').parent().find("label").addClass('invalid');
                    Materialize.toast('{{ trans("auth.register.agree_terms") }}', 4000);
                };
            }
        });
    });
</script>
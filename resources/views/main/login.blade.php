<div class="login-form modal-form">
    <div id="">
        <div class="">
            <div class="lock-container">
                <div class="panel-default">
                    <div class="card-title panel-heading row" style="margin-bottom:0;">
                        <div class="col l12 m12 s12">
                            <div class="text-display-1 blue-text card-title">{{ trans('auth.login.login') }}</div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="inline-message-box z-depth-1" style="display:none;"></div>
                        <form role="form" id="login-form-inp">
                            <div class="row">
                                <div class="input-field col l12 m12 s12 float-message">
                                    <input id="username" type="text" class="form-control validate" name="username">
                                    <label for="username">{{ trans('auth.login.username') }}</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col l12 m12 s12 float-message">
                                    <input id="password" type="password" class="form-control" name="password">
                                    <label for="password">{{ trans('auth.login.password') }}</label>
                                    <a href="#" class="forgot-password">Forgot password?</a>
                                </div>
                            </div>
                            <div class="row text-center">
                                <div class="col l12 m12 s12">
                                    <button type="submit" class="btn btn-primary btn-full waves-effect waves-light btn-large" id="login-submit-btn" data-loading-text="<i class='fa fa-circle-o-notch fa-spin fa-3x fa-fw'></i>">
                                         {{ trans('auth.login.login') }} <i class="fa fa-fw fa-unlock-alt"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="row text-center">
                                <div class="col l12 m12 s12">
                                    <a class="link-text-color waves-effect btn-flat btn-full" onclick="$('.sign-up-btn').trigger('click', [1]);">{{ trans('auth.register.Create an Account') }}</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        var $timer;
        $('#login-form-inp').validate({
            errorElement: 'div',
            errorClass: 'invalid',
            rules: {
                username: {
                    required: true
                },
                password: {
                    required: true,
                    /*equalTo: "#passwordConfirmation"*/
                },  
            },

            messages: {
                
            },

            submitHandler: function(form) {
                $('#login-submit-btn').button('loading');
                var formData = $(form).serialize();
                console.log(formData);
                $.ajax({
                    url: "{{ route('post.sign.in') }}",
                    type: "post",
                    datatype: 'json',
                    data: formData,
                    error: function(a,b,c) {
                        $('#login-submit-btn').button('reset');
                    },
                    success: function(data){
                        $('#login-submit-btn').button('reset');
                        if (!data.success) {
                            msg_text = '';
                            if (!data.message_arr.user_stat) {
                                msg_text += '<div>incorrect username</div>';
                            }
                            if (!data.message_arr.pass_stat) {
                                msg_text += '<div>incorrect password</div>';
                            }

                            $('.login-form').find('.inline-message-box').removeClass('success-message').addClass('error-message').html(msg_text).slideDown(10, function() {
                                $('.remodal').css({'max-height': $('.remodal').find('.login-form').height()});
                            });

                        } else {
                            msg_text = data.message;
                            $('.login-form').find('.inline-message-box').removeClass('error-message').addClass('success-message').html(msg_text).slideDown(10, function() {
                                $('.remodal').css({'max-height': $('.remodal').find('.login-form').height()});
                            });

                            clearTimeout($timer);
                            var ms = 800; // milliseconds
                            $timer = setTimeout(function() {
                                var inst = $('.remodal').remodal();
                                inst.close();
                                location.reload();
                            }, ms);
                            
                        }
                    }
                });
                return false;
            }
        });


    });
</script>


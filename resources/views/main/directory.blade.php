@extends('layouts.template')

@section('title', 'Dashboard')

@section('content')
<div class="parallax bg-white page-section">
    <div class="container parallax-layer" data-opacity="true">
        <div class="media v-middle">
            <div class="media-body">
                <h1 class="text-display-2 margin-none">{{ trans('main.all.library') }}</h1>
                <p class="text-light lead">Browse through thousands of lessons.</p>
            </div>
            <div class="media-right">
                <div class="width-100 text-right">
                    
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="page-section">
        <div class="row">
            <div class="input-field col l12 m12 s12">
              <i class="fa fa-search prefix" aria-hidden="true"></i>
              <input id="subject_search_input" type="tel" class="validate" name="subject_search_input">
              <label for="subject_search_input">{{ trans('main.all.search') }}</label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9">
                <!-- <div class="row isotope-wrapper" data-toggle="isotope"">
                    <div class="item" style="padding:40px; margin:10px; background-color:green; display:inline-block;">lol</div>
                    <div class="item" style="padding:40px; margin:10px; background-color:green; display:inline-block;">lol</div>
                    <div class="item" style="padding:40px; margin:10px; background-color:green; display:inline-block;">lol</div>
                    <div class="item" style="padding:40px; margin:10px; background-color:green; display:inline-block;">lol</div>
                    <div class="item" style="padding:40px; margin:10px; background-color:green; display:inline-block;">lol</div>
                    <div class="item" style="padding:40px; margin:10px; background-color:green; display:inline-block;">lol</div>
                    <div class="item" style="padding:40px; margin:10px; background-color:green; display:inline-block;">lol</div>
                    <div class="item" style="padding:40px; margin:10px; background-color:green; display:inline-block;">lol</div>
                    <div class="item" style="padding:40px; margin:10px; background-color:green; display:inline-block;">lol</div>
                </div> -->
                <div class="row isotope-wrapper grid">
                    <div class="grid-item" style="display:none;"></div>

                </div>
                <!-- <ul class="pagination margin-top-none">
                    <li class="disabled"><a href="#">&laquo;</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ul> -->
                <br/>
                <br/>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default" data-toggle="panel-collapse" data-open="true">
                    <div class="panel-heading panel-collapse-trigger">
                        <h4 class="panel-title">{{ trans('main.all.faculty') }}</h4>
                    </div>
                    <div class="panel-body list-group">
                        <ul class="list-group">
                            @foreach ($courses as $course)
                                <li class="list-group-item course-wrapper" data-course-id="{{ $course->id }}">
                                    <a href="">
                                        <span class="badge pull-right">{{ $course->subjects->count() }}</span>
                                        <span class="" href="index.html">{{ $course->name }}</span>
                                    </a>
                                    
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="panel panel-default" data-toggle="panel-collapse" data-open="false">
                    <div class="panel-heading panel-collapse-trigger">
                        <h4 class="panel-title">Price</h4>
                    </div>
                    <div class="panel-body">
                        <div class="form-group input-group margin-none">
                            <div class="row margin-none">
                                <div class="col-xs-6 padding-none">
                                    <input class="form-control" type="text" placeholder="Min .." />
                                </div>
                                <div class="col-xs-6 padding-none">
                                    <input class="form-control" type="text" placeholder="Max .." />
                                </div>
                            </div>
                            <div class="input-group-btn">
                                <button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <h4>Featured</h4>
                <div class="slick-basic slick-slider" data-items="1" data-items-lg="1" data-items-md="1" data-items-sm="1" data-items-xs="1">
                    <div class="item">
                        <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
                            <div class="panel-body">
                                <div class="media media-clearfix-xs">
                                    <div class="media-left">
                                        <div class="cover width-90 width-100pc-xs overlay cover-image-full hover">
                                            <span class="img icon-block s90 bg-default"></span>
                                            <span class="overlay overlay-full padding-none icon-block s90 bg-default">
                    <span class="v-center">
                        <i class="fa fa-github"></i>
                    </span>
                                            </span>
                                            <a href="website-course.html" class="overlay overlay-full overlay-hover overlay-bg-white">
                                                <span class="v-center">
                        <span class="btn btn-circle btn-white btn-lg"><i class="fa fa-graduation-cap"></i></span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading margin-v-5-3"><a href="website-course.html">Github Webhooks for Beginners</a></h4>
                                        <p class="small margin-none">
                                            <span class="fa fa-fw fa-star text-yellow-800"></span>
                                            <span class="fa fa-fw fa-star text-yellow-800"></span>
                                            <span class="fa fa-fw fa-star text-yellow-800"></span>
                                            <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                                            <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
                            <div class="panel-body">
                                <div class="media media-clearfix-xs">
                                    <div class="media-left">
                                        <div class="cover width-90 width-100pc-xs overlay cover-image-full hover">
                                            <span class="img icon-block s90 bg-primary"></span>
                                            <span class="overlay overlay-full padding-none icon-block s90 bg-primary">
                    <span class="v-center">
                        <i class="fa fa-css3"></i>
                    </span>
                                            </span>
                                            <a href="website-course.html" class="overlay overlay-full overlay-hover overlay-bg-white">
                                                <span class="v-center">
                        <span class="btn btn-circle btn-primary btn-lg"><i class="fa fa-graduation-cap"></i></span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading margin-v-5-3"><a href="website-course.html">Awesome CSS with LESS Processing</a></h4>
                                        <p class="small margin-none">
                                            <span class="fa fa-fw fa-star text-yellow-800"></span>
                                            <span class="fa fa-fw fa-star text-yellow-800"></span>
                                            <span class="fa fa-fw fa-star text-yellow-800"></span>
                                            <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                                            <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
                            <div class="panel-body">
                                <div class="media media-clearfix-xs">
                                    <div class="media-left">
                                        <div class="cover width-90 width-100pc-xs overlay cover-image-full hover">
                                            <span class="img icon-block s90 bg-lightred"></span>
                                            <span class="overlay overlay-full padding-none icon-block s90 bg-lightred">
                    <span class="v-center">
                        <i class="fa fa-windows"></i>
                    </span>
                                            </span>
                                            <a href="website-course.html" class="overlay overlay-full overlay-hover overlay-bg-white">
                                                <span class="v-center">
                        <span class="btn btn-circle btn-red-500 btn-lg"><i class="fa fa-graduation-cap"></i></span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading margin-v-5-3"><a href="website-course.html">Portable Environments with Vagrant</a></h4>
                                        <p class="small margin-none">
                                            <span class="fa fa-fw fa-star text-yellow-800"></span>
                                            <span class="fa fa-fw fa-star text-yellow-800"></span>
                                            <span class="fa fa-fw fa-star text-yellow-800"></span>
                                            <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                                            <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
                            <div class="panel-body">
                                <div class="media media-clearfix-xs">
                                    <div class="media-left">
                                        <div class="cover width-90 width-100pc-xs overlay cover-image-full hover">
                                            <span class="img icon-block s90 bg-brown"></span>
                                            <span class="overlay overlay-full padding-none icon-block s90 bg-brown">
                    <span class="v-center">
                        <i class="fa fa-wordpress"></i>
                    </span>
                                            </span>
                                            <a href="website-course.html" class="overlay overlay-full overlay-hover overlay-bg-white">
                                                <span class="v-center">
                        <span class="btn btn-circle btn-orange-500 btn-lg"><i class="fa fa-graduation-cap"></i></span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading margin-v-5-3"><a href="website-course.html">WordPress Theme Development</a></h4>
                                        <p class="small margin-none">
                                            <span class="fa fa-fw fa-star text-yellow-800"></span>
                                            <span class="fa fa-fw fa-star text-yellow-800"></span>
                                            <span class="fa fa-fw fa-star text-yellow-800"></span>
                                            <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                                            <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
                            <div class="panel-body">
                                <div class="media media-clearfix-xs">
                                    <div class="media-left">
                                        <div class="cover width-90 width-100pc-xs overlay cover-image-full hover">
                                            <span class="img icon-block s90 bg-purple"></span>
                                            <span class="overlay overlay-full padding-none icon-block s90 bg-purple">
                    <span class="v-center">
                        <i class="fa fa-jsfiddle"></i>
                    </span>
                                            </span>
                                            <a href="website-course.html" class="overlay overlay-full overlay-hover overlay-bg-white">
                                                <span class="v-center">
                        <span class="btn btn-circle btn-purple-500 btn-lg"><i class="fa fa-graduation-cap"></i></span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading margin-v-5-3"><a href="website-course.html">Modular JavaScript with Browserify</a></h4>
                                        <p class="small margin-none">
                                            <span class="fa fa-fw fa-star text-yellow-800"></span>
                                            <span class="fa fa-fw fa-star text-yellow-800"></span>
                                            <span class="fa fa-fw fa-star text-yellow-800"></span>
                                            <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                                            <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
                            <div class="panel-body">
                                <div class="media media-clearfix-xs">
                                    <div class="media-left">
                                        <div class="cover width-90 width-100pc-xs overlay cover-image-full hover">
                                            <span class="img icon-block s90 bg-default"></span>
                                            <span class="overlay overlay-full padding-none icon-block s90 bg-default">
                    <span class="v-center">
                        <i class="fa fa-cc-visa"></i>
                    </span>
                                            </span>
                                            <a href="website-course.html" class="overlay overlay-full overlay-hover overlay-bg-white">
                                                <span class="v-center">
                        <span class="btn btn-circle btn-white btn-lg"><i class="fa fa-graduation-cap"></i></span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading margin-v-5-3"><a href="website-course.html">Easy Online Payments with Stripe</a></h4>
                                        <p class="small margin-none">
                                            <span class="fa fa-fw fa-star text-yellow-800"></span>
                                            <span class="fa fa-fw fa-star text-yellow-800"></span>
                                            <span class="fa fa-fw fa-star text-yellow-800"></span>
                                            <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                                            <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <h4 class="text-headline text-light">Corporate</h4>
                <ul class="list-unstyled">
                    <li><a href="#">About the company</a></li>
                    <li><a href="#">Company offices</a></li>
                    <li><a href="#">Partners</a></li>
                    <li><a href="#">Terms of use</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Contact us</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-3">
                <h4 class="text-headline text-light">Explore</h4>
                <ul class="list-unstyled">
                    <li><a href="">Courses</a></li>
                    <li><a href="">Tutors</a></li>
                    <li><a href="">Pricing</a></li>
                    <li><a href="">Become Tutor</a></li>
                    <li><a href="">Sign Up</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-md-6">
                <h4 class="text-headline text-light">Newsletter</h4>
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Enter email here...">
                        <span class="input-group-btn">
							<button class="btn btn-grey-800" type="button">Subscribe</button>
						  </span>
                    </div>
                </div>
                <br/>
                <p>
                    <a href="#" class="btn btn-indigo-500 btn-circle"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="btn btn-pink-500 btn-circle"><i class="fa fa-dribbble"></i></a>
                    <a href="#" class="btn btn-blue-500 btn-circle"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="btn btn-danger btn-circle"><i class="fa fa-google-plus"></i></a>
                </p>
                <p class="text-subhead">
                    &copy; 2015 Learning App by mosaicpro.
                </p>
            </div>
        </div>
    </div>
    </div>
</section>

<script type="text/javascript">
    $(function(){

        var $grid = $('.grid');
        var $timer;

        $(window).on('load', function() {
                $('.list-group .course-wrapper:first').click();
/*                $grid = $('.grid').isotope({
                    masonry: {

                    }
                });*/
        });

        $('#subject_search_input').on('input', function() {
            clearTimeout($timer);
            var ms = 300; // milliseconds
            var val = this.value;
            $timer = setTimeout(function() {
              $.ajax({
              url: "{{ route('course.switch') }}",
              type: "post",
              data: {'query' : val},
                  success: function(data){
                        $('.course-wrapper').removeClass('active');
                        $('.isotope-wrapper').html('');
                        if (data.content) {
                            $('.isotope-wrapper').isotope();
                            if($('.grid').data('isotope')) {
                                var toRemove = $('.isotope-wrapper').data('isotope').$filteredAtoms;
                                $('.isotope-wrapper').isotope('remove',toRemove);
                            }
                            $('.isotope-wrapper').isotope('insert',$(data.content));
                            $grid.isotope({
                                masonry: {
                                    columnWidth: '.grid-item'
                                }
                            });
                            $grid.isotope('layout');
                        } else {
                            $('.isotope-wrapper').html('<div class="message_wrapper_lg '+data.message_type+'_message">'+data.message+'</div>');
                        }
                        
                    }
                }); 
            }, ms);

            
        })

        $('.course-wrapper').on('click', function(e) {
            $('.course-wrapper').not($(this)).removeClass('active');
            $(this).addClass('active');

            $.ajax({
              url: "{{ route('course.switch') }}",
              type: "post",
              data: {'course_id' : $(this).data('course-id')},
              success: function(data){
                    //$('.isotope-wrapper').html(data);
                    $container1 = $('.grid');

                   /* $('.isotope-wrapper').find('.grid-item').fadeOut(100, function() {
                        $('.isotope-wrapper').html('');
                        $(data).hide().appendTo('.isotope-wrapper').fadeIn(200);
                        
                    });*/
                    
                    $('.isotope-wrapper').html('');

                    if (data.content) {
                        
                        $('.isotope-wrapper').isotope();

                        if($('.grid').data('isotope')) {
                            //$('.grid').isotope('destroy');
                            var toRemove = $('.isotope-wrapper').data('isotope').$filteredAtoms;
                            $('.isotope-wrapper').isotope('remove',toRemove);
                        }

                        $('.isotope-wrapper').isotope('insert',$(data.content));

                        $grid.isotope({
                            masonry: {
                                columnWidth: '.grid-item'
                            }
                        });

                        $grid.isotope('layout');

                        //$container1.isotope('shuffle');
                    } else {
                        $('.isotope-wrapper').html('<div class="message_wrapper_lg '+data.message_type+'_message">'+data.message+'</div>');
                    }
                    

                }
            }); 
            e.preventDefault();
        });

    });
</script>
@stop

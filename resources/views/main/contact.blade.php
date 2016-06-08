@extends('layouts.template')

@section('title', 'Dashboard')

@section('content')
<div class="parallax page-section bg-blue-300">
    <div class="container parallax-layer" data-opacity="true">
        <div class="media media-grid v-middle">
            <div class="media-left">
                <span class="icon-block half bg-blue-500 text-white"><i class="fa fa-envelope"></i></span>
            </div>
            <div class="media-body">
                <h3 class="text-display-2 text-white margin-none">Contact us</h3>
                <p class="text-white text-subhead">Feel free to visit or send us a message anytime.</p>
            </div>
        </div>
    </div>
</div>
<div class="page-section parallax relative overflow-hidden">
    <img class="parallax-layer absolute top left" data-translate-when="inViewport" src="images/photodune-6745579-modern-creative-man-relaxing-on-workspace-m.jpg" alt="parallax image" />
    <div class="container">
        <div class="panel margin-none panel-default paper-shadow max-width-400 h-center" data-z="0.5">
            <div class="panel-heading">
                <h4 class="text-headline">Send a message</h4>
            </div>
            <div class="panel-body">
                <form>
                    <div class="form-group form-control-material">
                        <input class="form-control" type="text" id="fname" placeholder="First name" />
                        <label for="fname">First name:</label>
                    </div>
                    <div class="form-group form-control-material">
                        <input class="form-control" type="tel" id="lname" placeholder="Last name" />
                        <label for="lname">Last name:</label>
                    </div>
                    <div class="form-group form-control-material">
                        <input class="form-control" type="text" id="phone" placeholder="Phone" />
                        <label for="phone">Phone:</label>
                    </div>
                    <div class="form-group form-control-material">
                        <textarea class="form-control" id="message" placeholder="Your message"></textarea>
                        <label for="message">Your message:</label>
                    </div>
                    <div class="text-right">
                        <button class="btn btn-primary relative paper-shadow" data-z="0.5" data-hover-z="1" data-animated>Send message</button>
                    </div>
                </form>
            </div>
        </div>
        <br/>
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
@stop
@extends('layouts.template')

@section('title', 'Dashboard')

@section('content')
<div class="parallax overflow-hidden page-section bg-deep-purple-300">
    <div class="container parallax-layer" data-opacity="true">
        <div class="media media-grid v-middle">
            <div class="media-left">
                <span class="icon-block half bg-deep-purple-500 text-white"><i class="fa fa-life-bouy"></i></span>
            </div>
            <div class="media-body">
                <h3 class="text-display-2 text-white margin-none">Forum</h3>
                <p class="text-white text-subhead">Ask our awesome community</p>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="page-section">
        <div class="row">
            <div class="col-md-8 col-lg-9">
                <div class="page-section padding-top-none">
                    <div class="media v-middle">
                        <div class="media-body">
                            <h1 class="text-display-1 margin-none">General</h1>
                            <p class="text-subhead text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, illo.</p>
                        </div>
                        <div class="media-right">
                            <a href="#" class="btn btn-white paper-shadow relative" data-z="0.5" data-hover-z="1" data-animated><i class="fa fa-fw fa-plus"></i> New Topic</a>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default paper-shadow" data-z="0.5">
                    <ul class="list-group">
                        <li class="list-group-item media v-middle">
                            <div class="media-left">
                                <div class="icon-block half img-circle bg-grey-300">
                                    <i class="fa fa-file-text text-white"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                <h4 class="text-subhead margin-none">
                                    <a href="website-forum-thread.html" class="link-text-color">Am I learning the right way?</a>
                                </h4>
                                <div class="text-light text-caption">
                                    posted by
                                    <a href="#">
                                        <img src="images/people/110/guy-6.jpg" alt="person" class="img-circle width-20" /> Adrian Demian</a> &nbsp; | <i class="fa fa-clock-o fa-fw"></i> 5 mins
                                </div>
                            </div>
                            <div class="media-right">
                                <a href="website-forum-thread.html" class="btn btn-white text-light"><i class="fa fa-comments fa-fw"></i> 7</a>
                            </div>
                        </li>
                        <li class="list-group-item media v-middle">
                            <div class="media-left">
                                <div class="icon-block half img-circle bg-grey-300">
                                    <i class="fa fa-file-text text-white"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                <h4 class="text-subhead margin-none">
                                    <a href="website-forum-thread.html" class="link-text-color">Can someone help me? I need a design advice</a>
                                </h4>
                                <div class="text-light text-caption">
                                    posted by
                                    <a href="#">
                                        <img src="images/people/110/woman-6.jpg" alt="person" class="img-circle width-20" /> Jennifer Hudson</a> &nbsp; | <i class="fa fa-clock-o fa-fw"></i> 5 mins
                                </div>
                            </div>
                            <div class="media-right">
                                <a href="website-forum-thread.html" class="btn btn-white text-light"><i class="fa fa-comments fa-fw"></i> 3</a>
                            </div>
                        </li>
                        <li class="list-group-item media v-middle">
                            <div class="media-left">
                                <div class="icon-block half img-circle bg-grey-300">
                                    <i class="fa fa-file-text text-white"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                <h4 class="text-subhead margin-none">
                                    <a href="website-forum-thread.html" class="link-text-color">I think this is the right way?</a>
                                </h4>
                                <div class="text-light text-caption">
                                    posted by
                                    <a href="#">
                                        <img src="images/people/110/woman-4.jpg" alt="person" class="img-circle width-20" /> Michelle Gustav</a> &nbsp; | <i class="fa fa-clock-o fa-fw"></i> 5 mins
                                </div>
                            </div>
                            <div class="media-right">
                                <a href="website-forum-thread.html" class="btn btn-white text-light"><i class="fa fa-comments fa-fw"></i> 3</a>
                            </div>
                        </li>
                        <li class="list-group-item media v-middle">
                            <div class="media-left">
                                <div class="icon-block half img-circle bg-grey-300">
                                    <i class="fa fa-file-text text-white"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                <h4 class="text-subhead margin-none">
                                    <a href="website-forum-thread.html" class="link-text-color">Getting around AngularJS</a>
                                </h4>
                                <div class="text-light text-caption">
                                    posted by
                                    <a href="#">
                                        <img src="images/people/110/guy-4.jpg" alt="person" class="img-circle width-20" /> Jonny Francine</a> &nbsp; | <i class="fa fa-clock-o fa-fw"></i> 5 mins
                                </div>
                            </div>
                            <div class="media-right">
                                <a href="website-forum-thread.html" class="btn btn-white text-light"><i class="fa fa-comments fa-fw"></i> 15</a>
                            </div>
                        </li>
                        <li class="list-group-item media v-middle">
                            <div class="media-left">
                                <div class="icon-block half img-circle bg-grey-300">
                                    <i class="fa fa-file-text text-white"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                <h4 class="text-subhead margin-none">
                                    <a href="website-forum-thread.html" class="link-text-color">I think this is the right way?</a>
                                </h4>
                                <div class="text-light text-caption">
                                    posted by
                                    <a href="#">
                                        <img src="images/people/110/woman-4.jpg" alt="person" class="img-circle width-20" /> Michelle Gustav</a> &nbsp; | <i class="fa fa-clock-o fa-fw"></i> 5 mins
                                </div>
                            </div>
                            <div class="media-right">
                                <a href="website-forum-thread.html" class="btn btn-white text-light"><i class="fa fa-comments fa-fw"></i> 10</a>
                            </div>
                        </li>
                        <li class="list-group-item media v-middle">
                            <div class="media-left">
                                <div class="icon-block half img-circle bg-grey-300">
                                    <i class="fa fa-file-text text-white"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                <h4 class="text-subhead margin-none">
                                    <a href="website-forum-thread.html" class="link-text-color">Responsive Bootstrap Question</a>
                                </h4>
                                <div class="text-light text-caption">
                                    posted by
                                    <a href="#">
                                        <img src="images/people/110/woman-5.jpg" alt="person" class="img-circle width-20" /> Mary Deb</a> &nbsp; | <i class="fa fa-clock-o fa-fw"></i> 5 mins
                                </div>
                            </div>
                            <div class="media-right">
                                <a href="website-forum-thread.html" class="btn btn-white text-light"><i class="fa fa-comments fa-fw"></i> 6</a>
                            </div>
                        </li>
                        <li class="list-group-item media v-middle">
                            <div class="media-left">
                                <div class="icon-block half img-circle bg-grey-300">
                                    <i class="fa fa-file-text text-white"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                <h4 class="text-subhead margin-none">
                                    <a href="website-forum-thread.html" class="link-text-color">Am I learning the right way?</a>
                                </h4>
                                <div class="text-light text-caption">
                                    posted by
                                    <a href="#">
                                        <img src="images/people/110/guy-6.jpg" alt="person" class="img-circle width-20" /> Adrian Demian</a> &nbsp; | <i class="fa fa-clock-o fa-fw"></i> 5 mins
                                </div>
                            </div>
                            <div class="media-right">
                                <a href="website-forum-thread.html" class="btn btn-white text-light"><i class="fa fa-comments fa-fw"></i> 16</a>
                            </div>
                        </li>
                        <li class="list-group-item media v-middle">
                            <div class="media-left">
                                <div class="icon-block half img-circle bg-grey-300">
                                    <i class="fa fa-file-text text-white"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                <h4 class="text-subhead margin-none">
                                    <a href="website-forum-thread.html" class="link-text-color">Responsive Bootstrap Question</a>
                                </h4>
                                <div class="text-light text-caption">
                                    posted by
                                    <a href="#">
                                        <img src="images/people/110/woman-5.jpg" alt="person" class="img-circle width-20" /> Mary Deb</a> &nbsp; | <i class="fa fa-clock-o fa-fw"></i> 5 mins
                                </div>
                            </div>
                            <div class="media-right">
                                <a href="website-forum-thread.html" class="btn btn-white text-light"><i class="fa fa-comments fa-fw"></i> 10</a>
                            </div>
                        </li>
                        <li class="list-group-item media v-middle">
                            <div class="media-left">
                                <div class="icon-block half img-circle bg-grey-300">
                                    <i class="fa fa-file-text text-white"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                <h4 class="text-subhead margin-none">
                                    <a href="website-forum-thread.html" class="link-text-color">Am I learning the right way?</a>
                                </h4>
                                <div class="text-light text-caption">
                                    posted by
                                    <a href="#">
                                        <img src="images/people/110/guy-6.jpg" alt="person" class="img-circle width-20" /> Adrian Demian</a> &nbsp; | <i class="fa fa-clock-o fa-fw"></i> 5 mins
                                </div>
                            </div>
                            <div class="media-right">
                                <a href="website-forum-thread.html" class="btn btn-white text-light"><i class="fa fa-comments fa-fw"></i> 16</a>
                            </div>
                        </li>
                        <li class="list-group-item media v-middle">
                            <div class="media-left">
                                <div class="icon-block half img-circle bg-grey-300">
                                    <i class="fa fa-file-text text-white"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                <h4 class="text-subhead margin-none">
                                    <a href="website-forum-thread.html" class="link-text-color">Can someone help me? I need a design advice</a>
                                </h4>
                                <div class="text-light text-caption">
                                    posted by
                                    <a href="#">
                                        <img src="images/people/110/woman-6.jpg" alt="person" class="img-circle width-20" /> Jennifer Hudson</a> &nbsp; | <i class="fa fa-clock-o fa-fw"></i> 5 mins
                                </div>
                            </div>
                            <div class="media-right">
                                <a href="website-forum-thread.html" class="btn btn-white text-light"><i class="fa fa-comments fa-fw"></i> 6</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <ul class="pagination margin-top-none">
                    <li class="disabled"><a href="#">&laquo;</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ul>
                <br/>
            </div>
            <div class="col-md-4 col-lg-3">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="form-group form-control-material">
                            <input id="forumSearch" type="text" class="form-control" placeholder="Type to search" />
                            <label for="forumSearch">Search ...</label>
                        </div>
                        <a href="#" class="btn btn-inverse paper-shadow relative" data-z="0.5" data-hover-z="1">Search</a>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">Categories</h4>
                    </div>
                    <ul class="list-group list-group-menu">
                        <li class="list-group-item">
                            <a href="website-forum.html"><i class="fa fa-chevron-right fa-fw"></i> All</a>
                        </li>
                        <li class="list-group-item active">
                            <a href="website-forum-category.html"><i class="fa fa-chevron-right fa-fw"></i> General</a>
                        </li>
                        <li class="list-group-item">
                            <a href="website-forum-category.html"><i class="fa fa-chevron-right fa-fw"></i> Lessons</a>
                        </li>
                        <li class="list-group-item">
                            <a href="website-forum-category.html"><i class="fa fa-chevron-right fa-fw"></i> Support</a>
                        </li>
                    </ul>
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
@stop

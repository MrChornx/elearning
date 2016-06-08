@extends('layouts.template')

@section('title', 'Dashboard')

@section('content')
<div class="parallax overflow-hidden page-section bg-cyan-300">
    <div class="container parallax-layer" data-opacity="true">
        <div class="media media-grid v-middle">
            <div class="media-left">
                <span class="icon-block half bg-cyan-500 text-white"><i class="fa fa-file-text-o"></i></span>
            </div>
            <div class="media-body">
                <h3 class="text-display-2 text-white margin-none">Blog</h3>
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
                    <div class="s-container">
                        <h1 class="text-display-1 margin-top-none">Can someone help me? I need a design advice</h1>
                        <p class="text-light text-caption">
                            posted by
                            <a href="#">
                                <img src="images/people/50/woman-1.jpg" alt="person" class="img-circle width-20" /> Jennifer Hudson</a> &nbsp; | <i class="fa fa-clock-o fa-fw"></i> 5 minutes ago
                        </p>
                    </div>
                    <br/>
                    <p>
                        <img class="paragraph-inline width-280 clearfix-xs width-100pc-xs" src="images/place1-full.jpg" alt="image" /> Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, accusamus culpa deserunt distinctio, eos expedita inventore labore laborum libero magnam nisi recusandae sapiente sunt unde, voluptatibus? Accusantium distinctio laborum nihil, nostrum possimus quos rem repellendus tenetur voluptatem! A, ad adipisci commodi doloribus id maxime provident quo suscipit. Itaque, recusandae ut.</p>
                    <blockquote class="blockquote-reverse">
                        <p class="text-subhead text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque debitis distinctio earum et fugiat id itaque officia provident quasi! Dolorem, fuga modi molestias natus non nulla optio porro praesentium provident quaerat.</p>
                        <footer>Someone famous in
                            <cite title="Source Title">Source Title</cite>
                        </footer>
                    </blockquote>
                    <p class="text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus dignissimos eaque facilis inventore ipsa modi natus, optio quisquam quod quos, ratione sed, ullam veritatis. Delectus dolorem doloremque, doloribus explicabo facere fugiat, incidunt ipsam maiores minima modi molestias natus quia quis recusandae rem reprehenderit saepe sint sunt tenetur velit voluptate voluptatum!</p>
                    <hr/>
                    <h4 class="text-title">Labore nemo nisi recusandae</h4>
                    <p>
                        <img class="paragraph-inline width-280 pull-right clearfix-xs width-100pc-xs" src="images/place3-full.jpg" alt="image" /> Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, accusamus culpa deserunt distinctio, eos expedita inventore labore laborum libero magnam nisi recusandae sapiente sunt unde, voluptatibus? Accusantium distinctio laborum nihil, nostrum possimus quos rem repellendus tenetur voluptatem! A, ad adipisci commodi doloribus id maxime provident quo suscipit. Itaque, recusandae ut.</p>
                    <blockquote>
                        <p class="text-subhead text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque debitis distinctio earum et fugiat id itaque officia provident quasi! Dolorem, fuga modi molestias natus non nulla optio porro praesentium provident quaerat</p>
                        <footer>Someone famous in
                            <cite title="Source Title">Source Title</cite>
                        </footer>
                    </blockquote>
                    <p class="text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus dignissimos eaque facilis inventore ipsa modi natus, optio quisquam quod quos, ratione sed, ullam veritatis. Delectus dolorem doloremque, doloribus explicabo facere fugiat, incidunt ipsam maiores minima modi molestias natus quia quis recusandae rem reprehenderit saepe sint sunt tenetur velit voluptate voluptatum!</p>
                    <br/>
                    <span class="label bg-gray-dark">New</span>
                    <span class="label label-grey-200">WordPress</span>
                    <span class="label label-grey-200">Beginner</span>
                </div>
                <h5 class="text-subhead-2 text-light">Comments</h5>
                <form>
                    <div class="form-group input-group">
                        <input type="text" class="form-control" placeholder="Your comment ..">
                        <span class="input-group-btn">
        <button class="btn btn-primary" type="button"><i class="fa fa-plus"></i></button>
    </span>
                    </div>
                </form>
                <div class="media s-container">
                    <a class="media-left" href="">
                        <img class="media-object" src="images/people/50/guy-2.jpg" alt="people" />
                    </a>
                    <div class="media-body">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <small class="text-grey-400 pull-right">2 minutes ago</small>
                                <h5 class="media-heading margin-v-5">Andrew B.</h5>
                                <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias asperiores doloremque nulla omnis perspiciatis repudiandae sit suscipit temporibus vitae voluptates?</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="comment-reply">
                    <div class="media s-container">
                        <a class="media-left" href="">
                            <img class="media-object" src="images/people/50/woman-5.jpg" alt="people" />
                        </a>
                        <div class="media-body">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <small class="text-grey-400 pull-right">2 hours ago</small>
                                    <h5 class="media-heading margin-v-5">Jane D.</h5>
                                    <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet facere laborum nam numquam quia tempora.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="media s-container">
                    <a class="media-left" href="">
                        <img class="media-object" src="images/people/50/guy-1.jpg" alt="people" />
                    </a>
                    <div class="media-body">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <small class="text-grey-400 pull-right">1 hour ago</small>
                                <h5 class="media-heading margin-v-5">Dave P.</h5>
                                <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad dignissimos quidem quis! Alias et hic nemo reprehenderit, repudiandae totam ut.</p>
                            </div>
                        </div>
                    </div>
                </div>
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
                            <a href="website-blog.html"><i class="fa fa-chevron-right fa-fw"></i> All</a>
                        </li>
                        <li class="list-group-item">
                            <a href="website-blog.html"><i class="fa fa-chevron-right fa-fw"></i> General</a>
                        </li>
                        <li class="list-group-item">
                            <a href="website-blog.html"><i class="fa fa-chevron-right fa-fw"></i> Lessons</a>
                        </li>
                        <li class="list-group-item">
                            <a href="website-blog.html"><i class="fa fa-chevron-right fa-fw"></i> Support</a>
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
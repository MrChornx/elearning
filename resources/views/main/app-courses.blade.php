@extends('layouts.template')

@section('title', 'Dashboard')

@section('content')
<!-- Sidebar component with st-effect-1 (set on the toggle button within the navbar) -->
<div class="sidebar left sidebar-size-1 sidebar-mini-reveal sidebar-offset-0 sidebar-visible-desktop sidebar-visible-mobile sidebar-skin-dark" id="sidebar-menu" data-type="collapse">
    <div data-scrollable>
        <ul class="sidebar-menu sm-icons-right">
            <li><a href="app-student-dashboard.html"><i class="fa fa-bar-chart-o"></i><span>Dashboard</span></a></li>
            <li class="hasSubmenu active open">
                <a href="#course-menu"><i class="fa fa-mortar-board"></i><span>Courses</span></a>
                <ul id="course-menu" class="in">
                    <li><a href="app-directory-grid.html"><span>Courses Grid</span></a></li>
                    <li><a href="app-directory-list.html"><span>Courses List</span></a></li>
                    <li class="active"><a href="app-student-course.html"><span>Course Page</span></a></li>
                    <li><a href="app-student-courses.html"><span>My Courses</span></a></li>
                    <li><a href="app-take-course.html"><span>Take Course</span></a></li>
                    <li><a href="app-course-forums.html"><span>Course Forums</span></a></li>
                    <li><a href="app-course-forum-thread.html"><span>Course Forum Thread</span></a></li>
                    <li><a href="app-take-quiz.html"><span>Take Quiz</span></a></li>
                </ul>
            </li>
            <li class="hasSubmenu">
                <a href="#forum-menu"><i class="fa fa-file-text-o"></i><span>Forum</span></a>
                <ul id="forum-menu">
                    <li><a href="app-forum.html"><span>Forum Home</span></a></li>
                    <li><a href="app-forum-category.html"><span>Forum Category</span></a></li>
                    <li><a href="app-forum-thread.html"><span>Forum Thread</span></a></li>
                </ul>
            </li>
            <li class="hasSubmenu">
                <a href="#account-menu"><i class="fa fa-user"></i><span>Account</span></a>
                <ul id="account-menu">
                    <li><a href="app-student-profile.html"><span>Edit Profile</span></a></li>
                    <li><a href="app-student-billing.html"><span>Edit Billing</span></a></li>
                </ul>
            </li>
            <li><a href="app-student-messages.html"><i class="fa fa-comments"></i><span>Messages</span></a></li>
            <li><a href="login.html"><i class="fa fa-sign-out"></i><span>Logout</span></a></li>
        </ul>
    </div>
</div>
<!-- sidebar effects OUTSIDE of st-pusher: -->
<!-- st-effect-1, st-effect-2, st-effect-4, st-effect-5, st-effect-9, st-effect-10, st-effect-11, st-effect-12, st-effect-13 -->
<!-- content push wrapper -->
<div class="st-pusher" id="content">
    <!-- sidebar effects INSIDE of st-pusher: -->
    <!-- st-effect-3, st-effect-6, st-effect-7, st-effect-8, st-effect-14 -->
    <!-- this is the wrapper for the content -->
    <div class="st-content">
        <!-- extra div for emulating position:fixed of the menu -->
        <div class="st-content-inner padding-none">
            <div class="container-fluid">
                <div class="media media-grid media-clearfix-xs">
                    <div class="media-body">
                        <div class="page-section">
                            <div class="media">
                                <div class="media-left">
                                    <span class="icon-block s60 bg-lightred"><i class="fa fa-github"></i></span>
                                </div>
                                <div class="media-body">
                                    <h1 class="text-display-1 margin-none">Github Webhooks for Beginners</h1>
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
                        <div class="page-section">
                            <div class="width-350 width-300-md width-100pc-xs paragraph-inline">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="//www.youtube-nocookie.com/embed/Ycv5fNd4AeM?rel=0"></iframe>
                                </div>
                            </div>
                            <p>
                                <strong>Lorem ipsum</strong> dolor sit amet, consectetur adipisicing elit. Ad aperiam autem cumque deleniti dicta iusto laboriosam laudantium omnis, possimus praesentium provident quam quas, sapiente sint, ut! Adipisci aliquid assumenda consequuntur cupiditate deleniti dicta dolore dolorem
                                <strong>dolores enim </strong>eos hic illo inventore iure libero magnam minima minus obcaecati optio pariatur porro quibusdam quos reiciendis, sapiente sint veritatis. Eveniet in magni sunt?</p>
                            <p>
                                <strong>Lorem ipsum</strong> dolor sit amet, consectetur adipisicing elit. Ad aperiam autem cumque deleniti dicta iusto laboriosam laudantium omnis, possimus praesentium provident quam quas, sapiente sint, ut! Adipisci aliquid assumenda consequuntur cupiditate deleniti dicta dolore dolorem
                                <strong>dolores enim </strong>eos hic illo inventore iure libero.
                            </p>
                            <br/>
                            <p>
                                <strong>Lorem ipsum</strong> dolor sit amet, consectetur adipisicing elit. Ad aperiam autem cumque deleniti dicta iusto laboriosam laudantium omnis, possimus praesentium provident quam quas, sapiente sint, ut! Adipisci aliquid assumenda consequuntur cupiditate deleniti dicta dolore dolorem
                                <strong>dolores enim </strong>eos hic illo inventore iure libero magnam minima minus obcaecati optio pariatur porro quibusdam quos reiciendis, sapiente sint veritatis. Eveniet in magni sunt?</p>
                            <br/>
                            <p class="margin-none">
                                <span class="label bg-gray-dark">New</span>
                                <span class="label label-grey-200">WordPress</span>
                                <span class="label label-grey-200">Beginner</span>
                            </p>
                        </div>
                        <div class="page-section">
                            <h2 class="text-headline margin-none">What you'll learn</h2>
                            <p class="text-subhead text-light">A minus obcaecati optio pariatur porro.</p>
                            <ul class="list-group relative paper-shadow margin-none" data-hover-z="0.5" data-animated>
                                <li class="list-group-item">
                                    <div class="media v-middle">
                                        <div class="media-left">
                                            <div class="icon-block s30 bg-red-300 text-white img-circle">
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="media-body text-body-2">
                                            Basics of GIT and how to become a STAR.
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item paper-shadow">
                                    <div class="media v-middle">
                                        <div class="media-left">
                                            <div class="icon-block s30 bg-green-300 text-white img-circle">
                                                <i class="fa fa-database"></i>
                                            </div>
                                        </div>
                                        <div class="media-body text-body-2">
                                            Database connections & some other nice features.
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item paper-shadow">
                                    <div class="media v-middle">
                                        <div class="media-left">
                                            <div class="icon-block s30 bg-indigo-300 text-white img-circle">
                                                <i class="fa fa-trophy"></i>
                                            </div>
                                        </div>
                                        <div class="media-body text-body-2">
                                            Eaque ex exercitationem quia reprehenderit?
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item paper-shadow">
                                    <div class="media v-middle">
                                        <div class="media-left">
                                            <div class="icon-block s30 bg-orange-300 text-white img-circle">
                                                <i class="fa fa-code-fork"></i>
                                            </div>
                                        </div>
                                        <div class="media-body text-body-2">
                                            Ab distinctio nemo, provident quia quibusdam ullam.
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item paper-shadow">
                                    <div class="media v-middle">
                                        <div class="media-left">
                                            <div class="icon-block s30 bg-grey-500 text-white img-circle">
                                                <i class="fa fa-check"></i>
                                            </div>
                                        </div>
                                        <div class="media-body text-body-2">
                                            Conclusion & Notes.
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-white btn-circle paper-shadow relative" data-z="1" href="#"><i class="md md-add"></i></a>
                        </div>
                        <h2 class="text-headline margin-none">Testimonials</h2>
                        <p class="text-subhead text-light">A few words from our past students</p>
                        <br/>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="testimonial">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet doloremque enim error id, inventore magni odio odit quo tenetur.</p>
                                        </div>
                                    </div>
                                    <div class="media v-middle">
                                        <div class="media-left">
                                            <img src="images/people/50/guy-8.jpg" alt="People" class="img-circle width-40" />
                                        </div>
                                        <div class="media-body">
                                            <p class="text-subhead margin-v-5-0">
                                                <strong>Adrian D. <span class="text-muted">@ Mosaicpro Inc.</span></strong>
                                            </p>
                                            <p class="small">
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
                            <div class="col-md-6">
                                <div class="testimonial">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet doloremque enim error id, inventore magni odio odit quo tenetur.</p>
                                        </div>
                                    </div>
                                    <div class="media v-middle">
                                        <div class="media-left">
                                            <img src="images/people/50/guy-3.jpg" alt="People" class="img-circle width-40" />
                                        </div>
                                        <div class="media-body">
                                            <p class="text-subhead margin-v-5-0">
                                                <strong>Adrian D. <span class="text-muted">@ Mosaicpro Inc.</span></strong>
                                            </p>
                                            <p class="small">
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
                    <div class="media-right">
                        <div class="page-section width-270 width-auto-xs">
                            <!-- .panel -->
                            <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
                                <div class="panel-heading">
                                    <h4 class="text-headline">Course</h4>
                                </div>
                                <div class="panel-body">
                                    <p class="text-caption margin-none">
                                        <i class="fa fa-clock-o fa-fw"></i> 4 hrs &nbsp;
                                        <i class="fa fa-calendar fa-fw"></i> 21/10/14
                                        <br/>
                                        <i class="fa fa-user fa-fw"></i> Instructor: Adrian Demian
                                        <br/>
                                        <i class="fa fa-mortar-board fa-fw"></i> Max. students: 50
                                        <br/>
                                        <i class="fa fa-check fa-fw"></i> Attending: 30
                                    </p>
                                </div>
                                <hr class="margin-none" />
                                <div class="panel-body text-center">
                                    <p><a class="btn btn-success btn-lg paper-shadow relative" data-z="1" data-hover-z="2" data-animated href="app-take-course.html">Start Course</a></p>
                                    <p class="text-body-2">or <a href="#">buy course for $1</a></p>
                                </div>
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <a href="#" class="text-light"><i class="fa fa-facebook fa-fw"></i> Share on facebook</a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#" class="text-light"><i class="fa fa-twitter fa-fw"></i> Tweet this course</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- // END .panel -->
                            <!-- .panel -->
                            <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
                                <div class="panel-body">
                                    <div class="media v-middle">
                                        <div class="media-left">
                                            <img src="images/people/110/guy-6.jpg" alt="About Adrian" width="60" class="img-circle" />
                                        </div>
                                        <div class="media-body">
                                            <h4 class="text-title margin-none"><a href="#">Adrian Demian</a></h4>
                                            <span class="caption text-light">Biography</span>
                                        </div>
                                    </div>
                                    <br/>
                                    <div class="expandable expandable-indicator-white expandable-trigger">
                                        <div class="expandable-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusamus aut consectetur consequatur cum cupiditate debitis doloribus, error ex explicabo harum illum minima mollitia nisi nostrum officiis omnis optio qui quisquam saepe sit sunt totam vel velit voluptatibus? Adipisci ducimus expedita id nostrum quas quia!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- // END .panel -->
                            <!-- .panel -->
                            <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
                                <div class="panel-body">
                                    <h4 class="text-headline">Other Courses</h4>
                                </div>
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <div class="media v-middle">
                                            <div class="media-left">
                                                <div class="icon-block s30 bg-grey-400 text-white">
                                                    <i class="fa fa-mortar-board"></i>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <a href="#" class="link-text-color">Dolores explicabo mollitia nisi perspiciatis quas. Itaque.</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media v-middle">
                                            <div class="media-left">
                                                <div class="icon-block s30 bg-grey-400 text-white">
                                                    <i class="fa fa-mortar-board"></i>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <a href="#" class="link-text-color">
                            Lorem ipsum dolor sit amet, consectetur adipisicing.
                        </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media v-middle">
                                            <div class="media-left">
                                                <div class="icon-block s30 bg-grey-400 text-white">
                                                    <i class="fa fa-mortar-board"></i>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <a href="#" class="link-text-color">A aliquam dolore et explicabo possimus vitae?</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- // END .panel -->
                        </div>
                        <!-- // END .page-section -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /st-content-inner -->
    </div>
    <!-- /st-content -->
</div>
<!-- /st-pusher -->
@stop
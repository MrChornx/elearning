@extends('layouts.template')

@section('title', 'E-Learning')

@section('content')
<!-- Sidebar component with st-effect-1 (set on the toggle button within the navbar) -->
<div class="sidebar left sidebar-size-3 sidebar-offset-0 sidebar-visible-desktop sidebar-visible-mobile sidebar-skin-dark" id="sidebar-menu" data-type="collapse">
    <div data-scrollable>
        <div class="sidebar-block">
            <div class="profile">
                <a href="#">
                    <img src="images/people/110/guy-6.jpg" alt="people" class="img-circle width-80" />
                </a>
                <h4 class="text-display-1 margin-none">Student Name</h4>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="active"><a href="app-student-dashboard.html"><i class="fa fa-bar-chart-o"></i><span>Dashboard</span></a></li>
            <li class="hasSubmenu">
                <a href="#course-menu"><i class="fa fa-mortar-board"></i><span>Courses</span></a>
                <ul id="course-menu">
                    <li><a href="app-directory-grid.html"><span>Courses Grid</span></a></li>
                    <li><a href="app-directory-list.html"><span>Courses List</span></a></li>
                    <li><a href="app-student-course.html"><span>Course Page</span></a></li>
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
                <div class="page-section">
                    <h1 class="text-display-1 margin-none">Overview</h1>
                </div>
                <div class="panel panel-default">
                    <div class="media v-middle">
                        <div class="media-left">
                            <div class="bg-green-400 text-white">
                                <div class="panel-body">
                                    <i class="fa fa-credit-card fa-fw fa-2x"></i>
                                </div>
                            </div>
                        </div>
                        <div class="media-body">
                            Your subscription ends on <span class="text-body-2">25 February 2015</span>
                        </div>
                        <div class="media-right media-padding">
                            <a class="btn btn-white paper-shadow relative" data-z="0.5" data-hover-z="1" data-animated href="#">
        Upgrade
    </a>
                        </div>
                    </div>
                </div>
                <div class="row" data-toggle="isotope">
                    <div class="item col-xs-12 col-lg-6">
                        <div class="panel panel-default paper-shadow" data-z="0.5">
                            <div class="panel-heading">
                                <h4 class="text-headline margin-none">Courses</h4>
                                <p class="text-subhead text-light">Your recent courses</p>
                            </div>
                            <ul class="list-group">
                                <li class="list-group-item media v-middle">
                                    <div class="media-body">
                                        <a href="app-take-course.html" class="text-subhead list-group-link">Basics of HTML</a>
                                    </div>
                                    <div class="media-right">
                                        <div class="progress progress-mini width-100 margin-none">
                                            <div class="progress-bar progress-bar-green-300" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width:45%;">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item media v-middle">
                                    <div class="media-body">
                                        <a href="app-take-course.html" class="text-subhead list-group-link">Angular in Steps</a>
                                    </div>
                                    <div class="media-right">
                                        <div class="progress progress-mini width-100 margin-none">
                                            <div class="progress-bar progress-bar-green-300" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:75%;">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item media v-middle">
                                    <div class="media-body">
                                        <a href="app-take-course.html" class="text-subhead list-group-link">Bootstrap Foundations</a>
                                    </div>
                                    <div class="media-right">
                                        <div class="progress progress-mini width-100 margin-none">
                                            <div class="progress-bar progress-bar-green-300" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width:25%;">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="panel-footer text-right">
                                <a href="app-student-courses.html" class="btn btn-white paper-shadow relative" data-z="0" data-hover-z="1" data-animated href="#"> View all</a>
                            </div>
                        </div>
                    </div>
                    <div class="item col-xs-12 col-lg-6">
                        <div class="panel panel-default paper-shadow" data-z="0.5">
                            <div class="panel-body">
                                <h4 class="text-headline margin-none">Rewards</h4>
                                <p class="text-subhead text-light">Your latest achievements</p>
                                <div class="icon-block half img-circle bg-purple-300">
                                    <i class="fa fa-star text-white"></i>
                                </div>
                                <div class="icon-block half img-circle bg-indigo-300">
                                    <i class="fa fa-trophy text-white"></i>
                                </div>
                                <div class="icon-block half img-circle bg-green-300">
                                    <i class="fa fa-mortar-board text-white"></i>
                                </div>
                                <div class="icon-block half img-circle bg-orange-300">
                                    <i class="fa fa-code-fork text-white"></i>
                                </div>
                                <div class="icon-block half img-circle bg-red-300">
                                    <i class="fa fa-diamond text-white"></i>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default paper-shadow" data-z="0.5">
                            <div class="panel-heading">
                                <h4 class="text-headline">Certificates
                                    <small>(4)</small>
                                </h4>
                            </div>
                            <div class="panel-body">
                                <a class="btn btn-default text-grey-400 btn-lg btn-circle paper-shadow relative" data-hover-z="0.5" data-animated data-toggle="tooltip" data-title="Name of Certificate">
                                    <i class="fa fa-file-text"></i>
                                </a>
                                <a class="btn btn-default text-grey-400 btn-lg btn-circle paper-shadow relative" data-hover-z="0.5" data-animated data-toggle="tooltip" data-title="Name of Certificate">
                                    <i class="fa fa-file-text"></i>
                                </a>
                                <a class="btn btn-default text-grey-400 btn-lg btn-circle paper-shadow relative" data-hover-z="0.5" data-animated data-toggle="tooltip" data-title="Name of Certificate">
                                    <i class="fa fa-file-text"></i>
                                </a>
                                <a class="btn btn-default text-grey-400 btn-lg btn-circle paper-shadow relative" data-hover-z="0.5" data-animated data-toggle="tooltip" data-title="Name of Certificate">
                                    <i class="fa fa-file-text"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item col-xs-12 col-lg-6">
                        <div class="panel panel-default paper-shadow" data-z="0.5">
                            <div class="panel-heading">
                                <h4 class="text-headline margin-none">Quizzes</h4>
                                <p class="text-subhead text-light">Your recent performance</p>
                            </div>
                            <ul class="list-group">
                                <li class="list-group-item media v-middle">
                                    <div class="media-body">
                                        <h4 class="text-subhead margin-none">
                                            <a href="app-take-quiz.html" class="list-group-link">Title of quiz goes here?</a>
                                        </h4>
                                        <div class="caption">
                                            <span class="text-light">Course:</span>
                                            <a href="app-take-course.html">Basics of HTML</a>
                                        </div>
                                    </div>
                                    <div class="media-right text-center">
                                        <div class="text-display-1">5.8</div>
                                        <span class="caption text-light">Good</span>
                                    </div>
                                </li>
                                <li class="list-group-item media v-middle">
                                    <div class="media-body">
                                        <h4 class="text-subhead margin-none">
                                            <a href="app-take-quiz.html" class="list-group-link">Directives & Routing</a>
                                        </h4>
                                        <div class="caption">
                                            <span class="text-light">Course:</span>
                                            <a href="app-take-course.html">Angular in Steps</a>
                                        </div>
                                    </div>
                                    <div class="media-right text-center">
                                        <div class="text-display-1 text-green-300">9.8</div>
                                        <span class="caption text-light">Great</span>
                                    </div>
                                </li>
                                <li class="list-group-item media v-middle">
                                    <div class="media-body">
                                        <h4 class="text-subhead margin-none">
                                            <a href="app-take-quiz.html" class="list-group-link">Responsive & Retina</a>
                                        </h4>
                                        <div class="caption">
                                            <span class="text-light">Course:</span>
                                            <a href="app-take-course.html">Bootstrap Foundations</a>
                                        </div>
                                    </div>
                                    <div class="media-right text-center">
                                        <div class="text-display-1 text-red-300">3.4</div>
                                        <span class="caption text-light">Failed</span>
                                    </div>
                                </li>
                            </ul>
                            <div class="panel-footer">
                                <a href="app-student-quizzes.html" class="btn btn-primary paper-shadow relative" data-z="0" data-hover-z="1" data-animated href="#"> Go to Results</a>
                            </div>
                        </div>
                    </div>
                    <div class="item col-xs-12 col-lg-6">
                        <h4 class="text-headline margin-none">Forum Activity</h4>
                        <p class="text-subhead text-light">Latest forum topics & comments</p>
                        <ul class="list-group relative paper-shadow" data-hover-z="0.5" data-animated>
                            <li class="list-group-item paper-shadow">
                                <div class="media v-middle">
                                    <div class="media-left">
                                        <a href="#">
                                            <img src="images/people/110/guy-3.jpg" alt="person" class="img-circle width-40" />
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <a href="app-forum-thread.html" class="text-subhead link-text-color">Can someone help me with AngularJS?</a>
                                        <div class="text-light">
                                            Topic: <a href="app-forum-category.html">AngularJS</a> &nbsp; By: <a href="#">Adrian Demian</a>
                                        </div>
                                    </div>
                                    <div class="media-right">
                                        <div class="width-60 text-right">
                                            <span class="text-caption text-light">1 hr ago</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item paper-shadow">
                                <div class="media v-middle">
                                    <div class="media-left">
                                        <a href="#">
                                            <img src="images/people/110/guy-6.jpg" alt="person" class="img-circle width-40" />
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <a href="app-forum-thread.html" class="text-subhead link-text-color">Can someone help me with AngularJS?</a>
                                        <div class="text-light">
                                            Topic: <a href="app-forum-category.html">AngularJS</a> &nbsp; By: <a href="#">Adrian Demian</a>
                                        </div>
                                    </div>
                                    <div class="media-right">
                                        <div class="width-60 text-right">
                                            <span class="text-caption text-light">2 hrs ago</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item paper-shadow">
                                <div class="media v-middle">
                                    <div class="media-left">
                                        <a href="#">
                                            <img src="images/people/110/guy-5.jpg" alt="person" class="img-circle width-40" />
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <a href="app-forum-thread.html" class="text-subhead link-text-color">Can someone help me with AngularJS?</a>
                                        <div class="text-light">
                                            Topic: <a href="app-forum-category.html">AngularJS</a> &nbsp; By: <a href="#">Adrian Demian</a>
                                        </div>
                                    </div>
                                    <div class="media-right">
                                        <div class="width-60 text-right">
                                            <span class="text-caption text-light">3 hr ago</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item paper-shadow">
                                <div class="media v-middle">
                                    <div class="media-left">
                                        <a href="#">
                                            <img src="images/people/110/guy-4.jpg" alt="person" class="img-circle width-40" />
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <a href="app-forum-thread.html" class="text-subhead link-text-color">Can someone help me with AngularJS?</a>
                                        <div class="text-light">
                                            Topic: <a href="app-forum-category.html">AngularJS</a> &nbsp; By: <a href="#">Adrian Demian</a>
                                        </div>
                                    </div>
                                    <div class="media-right">
                                        <div class="width-60 text-right">
                                            <span class="text-caption text-light">4 hr ago</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <br/>
            </div>
        </div>
        <!-- /st-content-inner -->
    </div>
    <!-- /st-content -->
</div>
<!-- /st-pusher -->
@stop

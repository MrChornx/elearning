@extends('layouts.template')

@section('title', 'E-Learning - Student Profile')

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
            <li><a href="app-student-dashboard.html"><i class="fa fa-bar-chart-o"></i><span>Dashboard</span></a></li>
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
            <li class="hasSubmenu active open">
                <a href="#account-menu"><i class="fa fa-user"></i><span>Account</span></a>
                <ul id="account-menu" class="in">
                    <li class="active"><a href="app-student-profile.html"><span>Edit Profile</span></a></li>
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
                <div class="page-section third">
                    <!-- Tabbable Widget -->
                    <div class="tabbable paper-shadow relative" data-z="0.5">
                        <!-- Tabs -->
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="app-student-profile.html"><i class="fa fa-fw fa-lock"></i> <span class="hidden-sm hidden-xs">Manage Account</span></a></li>
                            <li><a href="app-student-billing.html"><i class="fa fa-fw fa-credit-card"></i> <span class="hidden-sm hidden-xs">Billing Details</span></a></li>
                        </ul>
                        <!-- // END Tabs -->
                        <!-- Panes -->
                        <div class="tab-content">
                            <div id="account" class="tab-pane active">
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Avatar</label>
                                        <div class="col-md-6">
                                            <div class="media v-middle">
                                                <div class="media-left">
                                                    <div class="icon-block width-100 bg-grey-100">
                                                        <i class="fa fa-photo text-light"></i>
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <a href="#" class="btn btn-white btn-sm paper-shadow relative" data-z="0.5" data-hover-z="1" data-animated> Add Image<i class="fa fa-upl"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-md-2 control-label">Full Name</label>
                                        <div class="col-md-8">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-control-material">
                                                        <input type="email" class="form-control" id="exampleInputFirstName" placeholder="Your first name">
                                                        <label for="exampleInputFirstName">First name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-control-material">
                                                        <input type="email" class="form-control" id="exampleInputLastName" placeholder="Your last name">
                                                        <label for="exampleInputLastName">Last name</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-md-2 control-label">Email</label>
                                        <div class="col-md-6">
                                            <div class="form-control-material">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                                    <label for="inputEmail3">Email address</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-md-2 control-label">Website</label>
                                        <div class="col-md-6">
                                            <div class="form-control-material">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-link"></i></span>
                                                    <input type="text" class="form-control used" id="website" value="www.mosaicpro.biz">
                                                    <label for="website">Website</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-md-2 control-label">Change Password</label>
                                        <div class="col-md-6">
                                            <div class="form-control-material">
                                                <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                                <label for="inputPassword3">Password</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-offset-2 col-md-6">
                                            <div class="checkbox checkbox-success">
                                                <input id="checkbox3" type="checkbox" checked="">
                                                <label for="checkbox3">Subscribe to our Newsletter</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group margin-none">
                                        <div class="col-md-offset-2 col-md-10">
                                            <button type="submit" class="btn btn-primary paper-shadow relative" data-z="0.5" data-hover-z="1" data-animated>Save Changes</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- // END Panes -->
                    </div>
                    <!-- // END Tabbable Widget -->
                </div>
            </div>
        </div>
        <!-- /st-content-inner -->
    </div>
    <!-- /st-content -->
</div>
<!-- /st-pusher -->
@stop
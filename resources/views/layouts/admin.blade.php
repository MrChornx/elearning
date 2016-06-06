<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>

    <!-- BEGIN META -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="your,keywords">
    <meta name="description" content="Short explanation about this website">
    <!-- END META -->

    <!-- BEGIN STYLESHEETS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
    <link type="text/css" rel="stylesheet" href="{{url('/')."/assets"}}/css/theme-default/bootstrap.css?1422792965" />
    <link type="text/css" rel="stylesheet" href="{{url('/')."/assets"}}/css/theme-default/materialadmin.css?1425466319" />
    <link type="text/css" rel="stylesheet" href="{{url('/')."/assets"}}/css/theme-default/font-awesome.min.css?1422529194" />
    <link type="text/css" rel="stylesheet" href="{{url('/')."/assets"}}/css/theme-default/material-design-iconic-font.min.css?1421434286" />
    <link type="text/css" rel="stylesheet" href="{{url('/')."/assets"}}/css/theme-default/libs/rickshaw/rickshaw.css?1422792967" />
    <link type="text/css" rel="stylesheet" href="{{url('/')."/assets"}}/css/theme-default/libs/morris/morris.core.css?1420463396" />
    <link href="{{url('/')."/css/style.css"}}" rel="stylesheet" type="text/css">
    <!-- END STYLESHEETS -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="{{url('/')."/assets"}}/js/libs/utils/html5shiv.js?1403934957"></script>
    <script type="text/javascript" src="{{url('/')."/assets"}}/js/libs/utils/respond.min.js?1403934956"></script>
    <![endif]-->
</head>
<body class="menubar-hoverable header-fixed menubar-pin">
<!-- BEGIN HEADER-->
<header id="header" >
    <div class="headerbar">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="headerbar-left">
            <ul class="header-nav header-nav-options">
                <li class="header-nav-brand" >
                    <div class="brand-holder">
                        <a href="../../html/dashboards/dashboard.html">
                            <span class="text-lg text-bold text-primary">სამართავი პანელი</span>
                        </a>
                    </div>
                </li>
                <li>
                    <a class="btn btn-icon-toggle menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
                        <i class="fa fa-bars"></i>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="headerbar-right">
            <ul class="header-nav header-nav-options">
                <li>
                    <!-- Search form -->
                    <form class="navbar-search" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" name="headerSearch" placeholder="რას ეძებ?">
                        </div>
                        <button type="submit" class="btn btn-icon-toggle ink-reaction"><i class="fa fa-search"></i></button>
                    </form>
                </li>
            </ul><!--end .header-nav-options -->
            <ul class="header-nav header-nav-profile">
                <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle ink-reaction" data-toggle="dropdown">
                        <img src="{{url('/')."/assets"}}/img/avatar1.jpg?1403934956" alt="" />
								<span class="profile-info">
									{{Session::get('user')->firstname}}
									<small>Administrator</small>
								</span>
                    </a>
                    <ul class="dropdown-menu animation-dock">
                        <li class="dropdown-header">Config</li>
                        <li><a href="../../html/pages/profile.html">ჩემი პროფილი</a></li>
                        <li><a href="../../html/pages/blog/post.html">ჩემი საგნები <span class="badge style-danger pull-right">16</span></a></li>
                        <li class="divider"></li>
                        <li><a href="../../html/pages/login.html"><i class="fa fa-fw fa-power-off text-danger"></i> გამოსვლა</a></li>
                    </ul><!--end .dropdown-menu -->
                </li><!--end .dropdown -->
            </ul><!--end .header-nav-profile -->
            <ul class="header-nav header-nav-toggle">
                <li>
                    <a class="btn btn-icon-toggle btn-default" href="#offcanvas-search" data-toggle="offcanvas" data-backdrop="false">
                        <i class="fa fa-ellipsis-v"></i>
                    </a>
                </li>
            </ul><!--end .header-nav-toggle -->
        </div><!--end #header-navbar-collapse -->
    </div>
</header>


@yield('content')

<!-- BEGIN JAVASCRIPT -->
<script src="{{url('/')."/assets"}}/js/libs/jquery/jquery-1.11.2.min.js"></script>
<script src="{{url('/')."/assets"}}/js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
<script src="{{url('/')."/assets"}}/js/libs/bootstrap/bootstrap.min.js"></script>
<script src="{{url('/')."/assets"}}/js/libs/spin.js/spin.min.js"></script>
<script src="{{url('/')."/assets"}}/js/libs/autosize/jquery.autosize.min.js"></script>
<script src="{{url('/')."/assets"}}/js/libs/moment/moment.min.js"></script>
<script src="{{url('/')."/assets"}}/js/libs/flot/jquery.flot.min.js"></script>
<script src="{{url('/')."/assets"}}/js/libs/flot/jquery.flot.time.min.js"></script>
<script src="{{url('/')."/assets"}}/js/libs/flot/jquery.flot.resize.min.js"></script>
<script src="{{url('/')."/assets"}}/js/libs/flot/jquery.flot.orderBars.js"></script>
<script src="{{url('/')."/assets"}}/js/libs/flot/jquery.flot.pie.js"></script>
<script src="{{url('/')."/assets"}}/js/libs/flot/curvedLines.js"></script>
<script src="{{url('/')."/assets"}}/js/libs/jquery-knob/jquery.knob.min.js"></script>
<script src="{{url('/')."/assets"}}/js/libs/sparkline/jquery.sparkline.min.js"></script>
<script src="{{url('/')."/assets"}}/js/libs/nanoscroller/jquery.nanoscroller.min.js"></script>
<script src="{{url('/')."/assets"}}/js/libs/d3/d3.min.js"></script>
<script src="{{url('/')."/assets"}}/js/libs/d3/d3.v3.js"></script>
<script src="{{url('/')."/assets"}}/js/libs/rickshaw/rickshaw.min.js"></script>
<script src="{{url('/')."/assets"}}/js/core/source/App.js"></script>
<script src="{{url('/')."/assets"}}/js/core/source/AppNavigation.js"></script>
<script src="{{url('/')."/assets"}}/js/core/source/AppOffcanvas.js"></script>
<script src="{{url('/')."/assets"}}/js/core/source/AppCard.js"></script>
<script src="{{url('/')."/assets"}}/js/core/source/AppForm.js"></script>
<script src="{{url('/')."/assets"}}/js/core/source/AppNavSearch.js"></script>
<script src="{{url('/')."/assets"}}/js/core/source/AppVendor.js"></script>
<script src="{{url('/')."/assets"}}/js/core/demo/Demo.js"></script>
<script src="{{url('/')."/assets"}}/js/core/demo/DemoDashboard.js"></script>
<!-- END JAVASCRIPT -->

</body>
</html>

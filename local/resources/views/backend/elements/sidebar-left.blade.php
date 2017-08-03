<?php ?>
<!--

            START @SIDEBAR LEFT
            |=========================================================================================================================|
            |  TABLE OF CONTENTS (Apply to sidebar left class)                                                                        |
            |=========================================================================================================================|
            |  01. sidebar-box               |  Variant style sidebar left with box icon                                              |
            |  02. sidebar-rounded           |  Variant style sidebar left with rounded icon                                          |
            |  03. sidebar-circle            |  Variant style sidebar left with circle icon                                           |
            |=========================================================================================================================|

            -->
<aside id="sidebar-left" class="sidebar-circle">

    <!-- Start left navigation - profile shortcut -->
    <div class="sidebar-content">
        <div class="media">
            <a class="pull-left has-notif avatar" href="page-profile.html">
                <img src="http://img.djavaui.com/?create=50x50,4888E1?f=ffffff" alt="admin">
                <i class="online"></i>
            </a>
            <div class="media-body">
                <h4 class="media-heading">Hello, <span>Lee</span></h4>
                <small>Web Designer</small>
            </div>
        </div>
    </div><!-- /.sidebar-content -->
    <!--/ End left navigation -  profile shortcut -->

    <!-- Start left navigation - menu -->
    <ul class="sidebar-menu">

        <!-- Start navigation - dashboard -->
        <li class="submenu">
            <a href="javascript:void(0);">
                <span class="icon"><i class="fa fa-home"></i></span>
                <span class="text">Dashboard</span>
                <span class="arrow"></span>
                <span class="selected"></span>
            </a>
            <ul>
                <li class="active"><a href="{{ url('/dashboard') }}">E-Commerce</a></li>
                {{--<li class="active"><a href="dashboard.html">Basic</a></li>
                <li><a href="dashboard-ecommerce.html">E-Commerce</a></li>
                <li><a href="dashboard-hr.html">Human resources</a></li>
                <li><a href="dashboard-investor.html">Investor</a></li>
                <li><a href="dashboard-marketing-campaign.html">Marketing campaign</a></li>
                <li><a href="dashboard-projects.html">Projects</a></li>
                <li><a href="dashboard-real-estate.html">Real estate</a></li>
                <li><a href="dashboard-retail-analysis.html">Retail analysis</a></li>--}}
            </ul>
        </li>
        <!--/ End navigation - dashboard -->

        <li class="submenu active">
            <a href="javascript:void(0);">
                <span class="icon"><i class="fa fa-home"></i></span>
                <span class="text">Apps</span>
                <span class="arrow"></span>
                <span class="selected"></span>
            </a>

            <ul>
                <li class="{{ (Route::currentRouteName() == 'banner')?'active':'' }}"><a href="{{ url('/dashboard/banner') }}">Banner</a></li>
                <li class="{{ (Route::currentRouteName() == 'category')?'active':'' }}"><a href="{{ url('/dashboard/category') }}">Category</a></li>
                <li class="{{ (Route::currentRouteName() == 'blog')?'active':'' }}"><a href="{{ url('/dashboard/blog') }}">Blog</a></li>
                <li class="{{ (Route::currentRouteName() == 'emailtemplate')?'active':'' }}"><a href="{{ url('/dashboard/emailtemplate') }}">Email Template</a></li>
            </ul>
        </li>


    </ul><!-- /.sidebar-menu -->
    <!--/ End left navigation - menu -->

    <!-- Start left navigation - footer -->
    <div class="sidebar-footer hidden-xs hidden-sm hidden-md">
        <a id="setting" class="pull-left" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-title="Setting"><i class="fa fa-cog"></i></a>
        <a id="fullscreen" class="pull-left" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-title="Fullscreen"><i class="fa fa-desktop"></i></a>
        <a id="lock-screen" data-url="{{ url('dashboard/signin') }}" class="pull-left" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-title="Lock Screen"><i class="fa fa-lock"></i></a>
        <a id="logout" data-url="{{ url('/dashboard/lockscreen') }}" class="pull-left" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-title="Logout"><i class="fa fa-power-off"></i></a>
    </div><!-- /.sidebar-footer -->
    <!--/ End left navigation - footer -->

</aside><!-- /#sidebar-left -->
<!--/ END SIDEBAR LEFT -->
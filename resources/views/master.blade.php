<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head><title>O nas</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="Thu, 19 Nov 1900 08:52:00 GMT">
    <link rel="shortcut icon" href="{{ URL::asset('images/icons/favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ URL::asset('images/icons/favicon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ URL::asset('images/icons/favicon-114x114.png') }}">
    <!--Loading bootstrap css-->
    <link type="text/css" rel="stylesheet"
          href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('vendors/jquery-ui-1.10.4.custom/css/ui-lightness/jquery-ui-1.10.4.custom.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('vendors/font-awesome/css/font-awesome.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('vendors/bootstrap/css/bootstrap.min.css') }}">
    <!--LOADING STYLESHEET FOR PAGE--><!--Loading style vendors-->
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('vendors/animate.css/animate.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('vendors/jquery-pace/pace.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('vendors/iCheck/skins/all.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('vendors/jquery-notific8/jquery.notific8.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('vendors/bootstrap-daterangepicker/daterangepicker-bs3.css') }}">
    <!--Loading style-->
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/themes/style1/orange-blue.css') }}" class="default-style">
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/themes/style1/orange-blue.css') }}" id="theme-change" class="style-change color-change">
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/style-responsive.css') }}">
</head>
<body class=" ">
<div>
    <div class="news-ticker bg-orange">
        <div class="container">
            <ul id="news-ticker-content" class="list-unstyled mbn">
                <li><a href='http://madmin.swlabs.co/', target='_blank'>Ta strona korzysta z ciasteczek(cookies)</a></li>
            </ul>
            <a id="news-ticker-close" href="javascript:;"><i class="fa fa-times"></i></a></div>
    </div>
    <!--BEGIN BACK TO TOP--><a id="totop" href="#"><i class="fa fa-angle-up"></i></a><!--END BACK TO TOP-->

    <!--BEGIN TOPBAR-->
    @section('topbar')
        <div id="header-topbar-option-demo" class="page-header-topbar">
        <nav id="topbar" role="navigation" style="margin-bottom: 0; z-index: 2;"
             class="navbar navbar-default navbar-static-top">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle"><span
                            class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span
                            class="icon-bar"></span><span class="icon-bar"></span></button>
                <a id="logo" href="index.html" class="navbar-brand"><span class="fa fa-rocket"></span><span
                            class="logo-text">B.Z.D.</span><span style="display: none" class="logo-text-icon">B.Z.D.</span></a>
            </div>
            <div class="topbar-main"><a id="menu-toggle" href="#" class="hidden-xs"><i class="fa fa-bars"></i></a>
                <ul class="nav navbar-nav    ">
                    <li class="active"><a href="index.html">Dashboard</a></li>
                    <li><a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle">Layouts
                            &nbsp;<i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="layout-left-sidebar.html">Left Sidebar</a></li>
                            <li><a href="layout-right-sidebar.html">Right Sidebar</a></li>
                            <li><a href="layout-left-sidebar-collapsed.html">Left Sidebar Collasped</a></li>
                            <li><a href="layout-right-sidebar-collapsed.html">Right Sidebar Collasped</a></li>
                            <li class="dropdown-submenu"><a href="javascript:;" data-toggle="dropdown"
                                                            class="dropdown-toggle">More Options</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Second level link</a></li>
                                    <li class="dropdown-submenu"><a href="javascript:;" data-toggle="dropdown"
                                                                    class="dropdown-toggle">More Options</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Third level link</a></li>
                                            <li><a href="#">Third level link</a></li>
                                            <li><a href="#">Third level link</a></li>
                                            <li><a href="#">Third level link</a></li>
                                            <li><a href="#">Third level link</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Second level link</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                </ul>
                <form id="topbar-search" action="#" method="GET" class="hidden-xs">
                    <div class="input-group"><input type="text" placeholder="Szukaj..." class="form-control"/><span
                                class="input-group-btn"><a href="javascript:;" class="btn submit"><i
                                        class="fa fa-search"></i></a></span></div>
                </form>
                <ul class="nav navbar navbar-top-links navbar-right mbn">
                    <li class="dropdown"><a data-hover="dropdown" href="#" class="dropdown-toggle"><i
                                    class="fa fa-bell fa-fw"></i><span class="badge badge-green">3</span></a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li><p>Masz 14 powiadomień</p></li>
                            <li>
                                <div class="dropdown-slimscroll">
                                    <ul>
                                        <li><a href="extra-user-list.html" target="_blank">
                                                <span class="label label-blue">
                                                    <i class="fa fa-comment"></i>
                                                </span>Nowy komentarz<span
                                                        class="pull-right text-muted small">4 mins temu</span>
                                            </a>
                                        </li>
                                        <li><a href="extra-user-list.html" target="_blank">
                                                <span class="label label-pink">
                                                    <i class="fa fa-envelope"></i>
                                                </span>Wysłana wiadomość<span class="pull-right text-muted small">15 temu</span>
                                            </a>
                                        </li>
                                        <li><a href="extra-user-list.html" target="_blank">
                                                <span class="label label-green">
                                                    <i class="fa fa-tasks"></i>
                                                </span>Nowe zadanie<span class="pull-right text-muted small">18 temu</span>
                                            </a>
                                        </li>
                                        <li><a href="extra-user-list.html" target="_blank">
                                                <span class="label label-yellow">
                                                    <i class="fa fa-upload"></i>
                                                </span>Restar serwera<span class="pull-right text-muted small">19 temu</span>
                                            </a>
                                        </li>
                                        <li><a href="extra-user-list.html" target="_blank">
                                                <span class="label label-green">
                                                    <i class="fa fa-tasks"></i>
                                                </span>Nowe zadanie<span class="pull-right text-muted small">2 dni temu</span>
                                            </a>
                                        </li>
                                        <li><a href="extra-user-list.html" target="_blank">
                                                <span class="label label-pink">
                                                    <i class="fa fa-envelope"></i>
                                                </span>Wysłana wiadomość<span class="pull-right text-muted small">5 dni temu</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="last"><a href="extra-user-list.html" class="text-right">Zobacz wszystkie powiadomienia</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a data-hover="dropdown" href="#" class="dropdown-toggle"><i
                                    class="fa fa-envelope fa-fw"></i><span class="badge badge-orange">7</span></a>
                        <ul class="dropdown-menu dropdown-messages">
                            <li><p>Masz 14 widomości</p></li>
                            <li>
                                <div class="dropdown-slimscroll">
                                    <ul>
                                        <li><a href="email-view-mail.html" target="_blank"><span class="avatar"><img
                                                            src="{{ URL::asset('images/avatars/avatar.jpg') }}"
                                                            alt="" class="img-responsive img-circle"/></span><span
                                                        class="info"><span class="name">Imię Nazwisko</span><span
                                                            class="desc">Lorem ipsum dolor sit amet...</span></span></a></li>
                                        <li><a href="email-view-mail.html" target="_blank"><span class="avatar"><img
                                                            src="{{ URL::asset('images/avatars/avatar.jpg') }}"
                                                            alt="" class="img-responsive img-circle"/></span><span
                                                        class="info"><span class="name">Imię Nazwisko<span
                                                                class="label label-blue pull-right">New</span></span><span class="desc">Lorem ipsum dolor sit amet...</span></span></a>
                                        </li>
                                        <li><a href="email-view-mail.html" target="_blank"><span class="avatar"><img
                                                            src="{{ URL::asset('images/avatars/avatar.jpg') }}"
                                                            alt="" class="img-responsive img-circle"/></span><span
                                                        class="info"><span class="name">Imię Nazwisko<span
                                                                class="label label-orange pull-right">10 min</span></span><span
                                                            class="desc">Lorem ipsum dolor sit amet...</span></span></a></li>
                                        <li><a href="email-view-mail.html" target="_blank"><span class="avatar"><img
                                                            src="{{ URL::asset('images/avatars/avatar.jpg') }}"
                                                            alt="" class="img-responsive img-circle"/></span><span
                                                        class="info"><span class="name">Imię Nazwisko</span><span class="desc">Lorem ipsum dolor sit amet...</span></span></a>
                                        </li>
                                        <li><a href="email-view-mail.html" target="_blank"><span class="avatar"><img
                                                            src="{{ URL::asset('images/avatars/avatar.jpg') }}"
                                                            alt="" class="img-responsive img-circle"/></span><span
                                                        class="info"><span class="name">Imię Nazwisko</span><span class="desc">Lorem ipsum dolor sit amet...</span></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="last"><a href="email-view-mail.html" target="_blank">Przeczytaj wszystkie wiadomości</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a data-hover="dropdown" href="#" class="dropdown-toggle"><i
                                    class="fa fa-tasks fa-fw"></i><span class="badge badge-yellow">8</span></a>
                        <ul class="dropdown-menu dropdown-tasks">
                            <li><p>Masz 14 oczekujących zadań</p></li>
                            <li>
                                <div class="dropdown-slimscroll">
                                    <ul>
                                        <li><a href="page-blog-item.html" target="_blank"><span class="task-item">Przykładowe zadanie<small
                                                            class="pull-right text-muted">40%
                                        </small></span>

                                                <div class="progress progress-sm">
                                                    <div role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                                         aria-valuemax="100" style="width: 40%;"
                                                         class="progress-bar progress-bar-orange"><span class="sr-only">40%</span>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li><a href="page-blog-item.html" target="_blank"> <span class="task-item">Przykładowe zadanie<small
                                                            class="pull-right text-muted">60%
                                        </small></span>

                                                <div class="progress progress-sm">
                                                    <div role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                                         aria-valuemax="100" style="width: 60%;"
                                                         class="progress-bar progress-bar-blue"><span class="sr-only">60%</span>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li><a href="page-blog-item.html" target="_blank"> <span class="task-item">Przykładowe zadanie<small
                                                            class="pull-right text-muted">55%
                                        </small></span>

                                                <div class="progress progress-sm">
                                                    <div role="progressbar" aria-valuenow="55" aria-valuemin="0"
                                                         aria-valuemax="100" style="width: 55%;"
                                                         class="progress-bar progress-bar-green"><span class="sr-only">55%</span>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li><a href="page-blog-item.html" target="_blank"> <span class="task-item">Przykładowe zadanie<small
                                                            class="pull-right text-muted">78%
                                        </small></span>

                                                <div class="progress progress-sm">
                                                    <div role="progressbar" aria-valuenow="78" aria-valuemin="0"
                                                         aria-valuemax="100" style="width: 78%;"
                                                         class="progress-bar progress-bar-yellow"><span class="sr-only">78%</span>
                                                    </div>
                                                </div>
                                            </a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="last"><a href="page-blog-item.html" target="_blank">zobacz wszytkie zadania</a></li>
                        </ul>
                    </li>
                    <li class="dropdown topbar-user"><a data-hover="dropdown" href="#" class="dropdown-toggle"><img
                                    src="{{ URL::asset('images/avatars/avatar.jpg') }}" alt=""
                                    class="img-responsive img-circle"/>&nbsp;<span class="hidden-xs">Imię Nazwisko</span>&nbsp;<span
                                    class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-user pull-right">
                            <li><a href="extra-profile.html"><i class="fa fa-user"></i>Mój profil</a></li>
                            <li><a href="email-inbox.html"><i class="fa fa-envelope"></i>Odebrane<span
                                            class="badge badge-danger">3</span></a></li>
                            <li><a href="#"><i class="fa fa-tasks"></i>Moje zadania<span
                                            class="badge badge-success">7</span></a></li>
                            <li class="divider"></li>
                            <li><a href="extra-signin.html"><i class="fa fa-key"></i>Wyloguj</a></li>
                        </ul>
                    </li>
                    {{--Put chat button here--}}
                    <li class="dropdown hidden-xs"><!--BEGIN THEME SETTING--><a id="theme-setting" href="javascript:;"
                                                                                data-hover="dropdown" data-step="1"
                                                                                data-intro="&lt;b&gt;Header&lt;/b&gt;, &lt;b&gt;sidebar&lt;/b&gt;, &lt;b&gt;border style&lt;/b&gt; and &lt;b&gt;color&lt;/b&gt;, all of them can change for you to create the best"
                                                                                data-position="left"
                                                                                class="dropdown-toggle"><i
                                    class="fa fa-cogs"></i></a>
                        <ul class="dropdown-menu dropdown-theme-setting pull-right">
                            <li><h4 class="mtn">Theme Styles</h4><select id="list-style" class="form-control">
                                    <option value="style1">Flat Squared style</option>
                                    <option value="style2">Flat Rounded style</option>
                                    <option value="style3">Flat Border style</option>
                                </select></li>
                            <li><h4 class="mtn">Menu Styles</h4><select id="list-menu" class="form-control">
                                    <option value="sidebar-default">Menu style 1</option>
                                    <option value="sidebar-colors">Menu style 2</option>
                                    <option value="sidebar-icons">Menu style 3</option>
                                    <option value="sidebar-collapsed">Menu style 4</option>
                                </select></li>
                            <li><h4 class="mtn">Header & Sidebar</h4><select id="list-header" class="form-control">
                                    <option value="header-static">Static</option>
                                    <option value="header-fixed">Fixed</option>
                                </select></li>
                            <li><h4 class="mtn">Theme Colors</h4>
                                <ul id="list-color" class="list-unstyled list-inline">
                                    <li data-color="green-dark" data-hover="tooltip" title="Green - Dark"
                                        class="green-dark"></li>
                                    <li data-color="red-dark" data-hover="tooltip" title="Red - Dark"
                                        class="red-dark"></li>
                                    <li data-color="pink-dark" data-hover="tooltip" title="Pink - Dark"
                                        class="pink-dark"></li>
                                    <li data-color="blue-dark" data-hover="tooltip" title="Blue - Dark"
                                        class="blue-dark"></li>
                                    <li data-color="yellow-dark" data-hover="tooltip" title="Yellow - Dark"
                                        class="yellow-dark"></li>
                                    <li data-color="green-grey" data-hover="tooltip" title="Green - Grey"
                                        class="green-grey"></li>
                                    <li data-color="red-grey" data-hover="tooltip" title="Red - Grey"
                                        class="red-grey"></li>
                                    <li data-color="pink-grey" data-hover="tooltip" title="Pink - Grey"
                                        class="pink-grey"></li>
                                    <li data-color="blue-grey" data-hover="tooltip" title="Blue - Grey"
                                        class="blue-grey"></li>
                                    <li data-color="yellow-grey" data-hover="tooltip" title="Yellow - Grey"
                                        class="yellow-grey"></li>
                                    <li data-color="yellow-green" data-hover="tooltip" title="Yellow - Green"
                                        class="yellow-green"></li>
                                    <li data-color="orange-grey" data-hover="tooltip" title="Orange - Grey"
                                        class="orange-grey"></li>
                                    <li data-color="pink-blue" data-hover="tooltip" title="Pink - Blue"
                                        class="pink-blue"></li>
                                    <li data-color="pink-violet" data-hover="tooltip" title="Pink - Violet"
                                        class="pink-violet active"></li>
                                    <li data-color="orange-violet" data-hover="tooltip" title="Orange - Violet"
                                        class="orange-violet"></li>
                                    <li data-color="pink-green" data-hover="tooltip" title="Pink - Green"
                                        class="pink-green"></li>
                                    <li data-color="pink-brown" data-hover="tooltip" title="Pink - Brown"
                                        class="pink-brown"></li>
                                    <li data-color="orange-blue" data-hover="tooltip" title="Orange - Blue"
                                        class="orange-blue"></li>
                                    <li data-color="yellow-blue" data-hover="tooltip" title="Yellow - Blue"
                                        class="yellow-blue"></li>
                                    <li data-color="green-blue" data-hover="tooltip" title="Green - Blue"
                                        class="green-blue"></li>
                                </ul>
                            </li>
                        </ul>
                        <!--END THEME SETTING--></li>
                </ul>
            </div>
        </nav>
        <!--BEGIN MODAL CONFIG PORTLET-->
        <div id="modal-config" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                        <h4 class="modal-title">Modal title</h4></div>
                    <div class="modal-body"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eleifend et
                            nisl eget porta. Curabitur elementum sem molestie nisl varius, eget tempus odio molestie. Nunc
                            vehicula sem arcu, eu pulvinar neque cursus ac. Aliquam ultricies lobortis magna et aliquam.
                            Vestibulum egestas eu urna sed ultricies. Nullam pulvinar dolor vitae quam dictum condimentum.
                            Integer a sodales elit, eu pulvinar leo. Nunc nec aliquam nisi, a mollis neque. Ut vel felis
                            quis tellus hendrerit placerat. Vivamus vel nisl non magna feugiat dignissim sed ut nibh. Nulla
                            elementum, est a pretium hendrerit, arcu risus luctus augue, mattis aliquet orci ligula eget
                            massa. Sed ut ultricies felis.</p></div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!--END MODAL CONFIG PORTLET--></div>
    @show
    <!--END TOPBAR-->
    <div id="wrapper">
        <!--BEGIN SIDEBAR MENU-->
        @section('sidebar')
        <nav id="sidebar" role="navigation" class="navbar-default navbar-static-side">
            <div class="sidebar-collapse menu-scroll">
                <ul id="side-menu" class="nav">
                    <li class="user-panel">
                        <div class="thumb"><img src="{{ URL::asset('images/avatars/avatar.jpg') }}" alt="" class="img-circle"/></div>
                        <div class="info">
                            <p>Imię Nazwisko</p>
                            <ul class="list-inline list-unstyled">
                                <li>
                                    <a href="extra-profile.html" data-hover="tooltip" title="Profil">
                                        <i class="fa fa-user"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="email-inbox.html" data-hover="tooltip" title="Wiadomości">
                                        <i class="fa fa-envelope"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-hover="tooltip" title="Ustawienia" data-toggle="modal" data-target="#modal-config">
                                        <i class="fa fa-cog"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="extra-signin.html" data-hover="tooltip" title="Wyloguj">
                                        <i class="fa fa-sign-out"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </li>
                    <li><a href="#">
                            <i class="fa fa-desktop fa-fw">
                                <div class="icon-bg bg-orange"></div>
                            </i><span class="menu-title">Pulpit</span>
                        </a>
                    </li>
                    <li><a href="#">
                            <i class="fa fa-bar-chart fa-fw">
                            <div class="icon-bg bg-orange"></div>
                            </i><span class="menu-title">Polska</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank">
                            <i class="fa fa-map fa-fw">
                                <div class="icon-bg bg-orange"></div>
                            </i><span class="menu-title">Województwa</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank">
                            <i class="fa fa-map-o fa-fw">
                            <div class="icon-bg bg-orange"></div>
                            </i><span class="menu-title">Powiaty</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank">
                            <i class="fa fa-map-marker fa-fw">
                                <div class="icon-bg bg-orange"></div>
                            </i><span class="menu-title">Gminy</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank">
                            <i class="fa fa-building-o fa-fw">
                                <div class="icon-bg bg-orange"></div>
                            </i><span class="menu-title">Miasta</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank">
                            <i class="fa fa-road fa-fw">
                                <div class="icon-bg bg-orange"></div>
                            </i><span class="menu-title">Drogi</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank">
                            <i class="fa fa-book fa-fw">
                                <div class="icon-bg bg-orange"></div>
                            </i><span class="menu-title">Raporty brd</span>
                        </a>
                    </li>
                    <li><a href="/contact">
                            <i class="fa fa-envelope  fa-fw">
                            <div class="icon-bg bg-green"></div>
                            </i><span class="menu-title">Kontakt</span>
                        </a>
                    </li>
                    <li><a href="/about">
                            <i class="fa fa-info-circle fa-fw">
                            <div class="icon-bg bg-green"></div>
                            </i><span class="menu-title">O nas</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        @show
        <!--END SIDEBAR MENU-->
        <!--BEGIN CHAT FORM-->

        <!--END CHAT FORM-->
        <!--BEGIN PAGE WRAPPER-->
        <div id="page-wrapper">
            <!--BEGIN TITLE & BREADCRUMB PAGE-->
            <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                <div class="page-header pull-left">
                    <div class="page-title">O nas</div>
                </div>
                <ol class="breadcrumb page-breadcrumb">
                    <li>
                        <i class="fa fa-home"></i>
                        &nbsp;
                        <a href="index.html">Strona główna</a>
                        &nbsp;&nbsp;
                        <i class="fa fa-angle-right"></i>
                        &nbsp;&nbsp;
                    </li>
                    <li>
                        <a href="#">B.Z.D.</a>
                        &nbsp;&nbsp;
                        <i class="fa fa-angle-right"></i>
                        &nbsp;&nbsp;
                    </li>
                    <li class="active">O nas</li>
                </ol>
                <div class="btn btn-blue reportrange hide">
                    <i class="fa fa-calendar"></i>
                    &nbsp;
                    <span></span>
                    &nbsp;report&nbsp;
                    <i class="fa fa-angle-down"></i>
                    <input type="hidden" name="datestart"/>
                    <input type="hidden" name="endstart"/>
                </div>
                <div class="clearfix"></div>
            </div>
            <!--END TITLE & BREADCRUMB PAGE-->
            <!--BEGIN CONTENT-->

                @yield('content')

            <!--END CONTENT--></div>
        <!--BEGIN FOOTER-->
        <div id="footer" class="fixed">
            <div class="copyright">2017 © B.Z.D. - Fundacja Rozwoju Inżynierii Lądowej</div>
        </div>
        <!--END FOOTER--><!--END PAGE WRAPPER--></div>
</div>
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<!--loading bootstrap js-->
<script src="vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="vendors/bootstrap-hover-dropdown/bootstrap-hover-dropdown.js"></script>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<script src="vendors/metisMenu/jquery.metisMenu.js"></script>
<script src="vendors/slimScroll/jquery.slimscroll.js"></script>
<script src="vendors/jquery-cookie/jquery.cookie.js"></script>
<script src="vendors/iCheck/icheck.min.js"></script>
<script src="vendors/iCheck/custom.min.js"></script>
<script src="vendors/jquery-notific8/jquery.notific8.min.js"></script>
<script src="vendors/jquery-highcharts/highcharts.js"></script>
<script src="js/jquery.menu.js"></script>
<script src="vendors/jquery-pace/pace.min.js"></script>
<script src="vendors/holder/holder.js"></script>
<script src="vendors/responsive-tabs/responsive-tabs.js"></script>
<script src="vendors/jquery-news-ticker/jquery.newsTicker.min.js"></script>
<script src="vendors/moment/moment.js"></script>
<script src="vendors/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<!--CORE JAVASCRIPT-->
<script src="js/main.js"></script>
<!--LOADING SCRIPTS FOR PAGE-->
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="vendors/gmaps/gmaps.js"></script>
<script src="js/page-contact.js"></script>
<script type="text/javascript">(function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-145464-14', 'auto');
    ga('send', 'pageview');


</script>
</body>
</html>
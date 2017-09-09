<!DOCTYPE html>
<html lang="en">

<head>
    <title>Baza zdarzeń drogowych</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/icons/favicon.ico">
    <link rel="shortcut icon" href="{{ URL::asset('images/icons/favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ URL::asset('images/icons/favicon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ URL::asset('images/icons/favicon-114x114.png') }}">
    <!--Loading bootstrap css-->
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,700&amp;subset=latin-ext">
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:300,400,700&amp;subset=latin-ext">
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('vendors/jquery-ui-1.10.4.custom/css/ui-lightness/jquery-ui-1.10.4.custom.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('vendors/font-awesome/css/font-awesome.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('vendors/bootstrap/css/bootstrap.min.css') }}">
    <!--Loading style vendors-->
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('vendors/animate.css/animate.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('/vendors/jquery-lightbox/css/lightbox.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('/vendors/owl-carousel/owl-carousel/owl.carousel.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('/vendors/owl-carousel/owl-carousel/owl.theme.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('/vendors/jquery-circliful/css/jquery.circliful.css') }}">
    <!--Loading style-->
    <link type="text/css" rel="stylesheet" href="..{{ URL::asset('css/themes/orange.css') }}" id="theme-change" class="style-change color-change">
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/themes/blue1.css') }}">
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom" class="frontend-one-page">
<!--BEGIN PAGE LOADER-->
<div id="page-loader"><img src="http://swlabs.co/images/icon/preloader.gif" alt="" />
</div>
<!--END PAGE LOADER-->
<!--BEGIN BACK TO TOP--><a id="totop" href="#"><i class="fa fa-angle-up"></i></a>
<!--END BACK TO TOP-->
<!--BEGIN CONTENT-->
<header>
    <div class="bg-overlay pattern">
        <nav role="navigation" class="navbar navbar-custom navbar-fixed-top">
            <div class="container">
                <div class="navbar-header page-scroll">
                    <button type="button" data-toggle="collapse" data-target=".navbar-main-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                    </button><a id="logo" href="/" class="navbar-brand"><span>B</span>aza <span>Z</span>darzeń <span>D</span>rogowych</a>
                </div>
                <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                    <ul class="nav navbar-nav main-menu">
                        <li class="page-scroll">
                            <a href="#page-top">
                                <i class="fa fa-home fa-lg" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="page-scroll"><a href="#about" data-hover="dropdown">O nas</a>
                            <ul class="dropdown-menu">
                                <li><a href="#about-1"><i class="fa fa-magic"></i>Co robimy</a>
                                </li>
                                <li><a href="#about-2"><i class="fa fa-graduation-cap"></i>fakty</a>
                                </li>
                            </ul>
                        </li>
                        <li class="page-scroll"><a href="#team">Zespół</a>
                        </li>
                        <li class="page-scroll"><a href="#services">Usługi</a>
                        </li>
                        <li class="page-scroll"><a href="#portfolio">Galeria</a>
                        </li>
                        <li class="page-scroll"><a href="#pricing">Ceny</a>
                        </li>
                        <li class="page-scroll"><a href="#contact">Kontakt</a>
                        </li>
                        <li class="page-scroll"><a href="\desktop" target="_blank"><i class="fa fa-database fa-lg"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="intro">
            <div class="intro-body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="slide-intro">
                                <h1>Bezpieczeństwo
                                    <div id="rotate">
                                        <div>Pieszych</div>
                                        <div>Kierowców</div>
                                    </div>
                                </h1>
                                <p class="intro-text">Wśród sprawców wypadków w Polsce coraz mniej jest pieszych a coraz więcej kierowców</p>
                            </div>
                            <div class="section-next page-scroll"><a href="#about" class="btn btn-circle"><i class="fa fa-angle-down"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</header>
<section id="about" class="section-content">
    <div class="container">
        <div class="row mbxxl">
            <div class="col-lg-12">
                <h2 class="section-heading">O <span>Nas</span></h2>
                <div class="line"></div>
                <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 mbl">
                <a href="#">
                    <div class="icon"><i class="fa fa-magic"></i>
                    </div>
                </a>
                <h3>Kim jesteśmy?</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam.</p>
            </div>
            <div class="col-lg-3 mbl">
                <a href="#">
                    <div class="icon"><i class="fa fa-cogs"></i>
                    </div>
                </a>
                <h3>Co robimy?</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam</p>
            </div>
            <div class="col-lg-3 mbl">
                <a href="#">
                    <div class="icon"><i class="fa fa-eye"></i>
                    </div>
                </a>
                <h3>Dlaczego my?</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam</p>
            </div>
            <div class="col-lg-3 mbl">
                <a href="#">
                    <div class="icon"><i class="fa fa-gift"></i>
                    </div>
                </a>
                <h3>Jakie są nasze zalety?</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam</p>
            </div>
        </div>
    </div>
</section>
<section id="about-1" class="section-content">
    <div class="container">
        <div class="row mbxxl">
            <div class="col-lg-12">
                <h2 class="section-heading">Co <span>robimy</span></h2>
                <div class="line"></div>
                <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
        <div class="row mbxxl">
            <div class="col-lg-3 text-center">
                <div id="circliful-web-design" data-dimension="200" data-text="70%" data-info="Web Design" data-width="10" data-percent="70" style="margin: 0 auto"></div>
                <h3>Web Design</h3>
            </div>
            <div class="col-lg-3 text-center">
                <div id="circliful-mobile-apps" data-dimension="200" data-text="60%" data-info="Mobile Apps" data-width="10" data-percent="60" style="margin: 0 auto"></div>
                <h3>Mobile Apps</h3>
            </div>
            <div class="col-lg-3 text-center">
                <div id="circliful-social-media" data-dimension="200" data-text="90%" data-info="Social Media" data-width="10" data-percent="90" style="margin: 0 auto"></div>
                <h3>Social Media</h3>
            </div>
            <div class="col-lg-3 text-center">
                <div id="circliful-packaging" data-dimension="200" data-text="75%" data-info="Packaging" data-width="10" data-percent="75" style="margin: 0 auto"></div>
                <h3>Packaging</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div id="owl-about1" class="owl-carousel owl-theme">
                    <div class="item"><img src="http://swlabs.co/images/upload/1.jpg" alt="" class="img-responsive" />
                    </div>
                    <div class="item"><img src="http://swlabs.co/images/upload/2.jpg" alt="" class="img-responsive" />
                    </div>
                    <div class="item"><img src="http://swlabs.co/images/upload/3.jpg" alt="" class="img-responsive" />
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div id="accordion-support" class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion-support" href="#collapseOne"><i class="fa fa-tablet fa-fw"></i>Full Responsive Layout</a></h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati.</div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion-support" href="#collapseTwo"><i class="fa fa-comments-o fa-fw"></i>Free Support & Updates</a></h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion-support" href="#collapseThree"><i class="fa fa-code fa-fw"></i>Clean Modern Code</a></h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="about-2" class="section-content section-parallax">
    <div class="bg-overlay pattern">
        <div class="container">
            <div class="row mbxxl">
                <div class="col-lg-12">
                    <h2 class="section-heading">What our fun <span>factors</span></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 text-center mbl">
                    <h2 class="factor">1350</h2>
                    <h3 class="factor-desc">Projects</h3>
                </div>
                <div class="col-lg-3 text-center mbl">
                    <h2 class="factor">720</h2>
                    <h3 class="factor-desc">Day Worked</h3>
                </div>
                <div class="col-lg-3 text-center mbl">
                    <h2 class="factor">350</h2>
                    <h3 class="factor-desc">Staffs</h3>
                </div>
                <div class="col-lg-3 text-center mbl">
                    <h2 class="factor">150</h2>
                    <h3 class="factor-desc">Clients</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="team" class="section-content">
    <div class="container">
        <div class="row mbxxl">
            <div class="col-lg-12">
                <h2 class="section-heading">Our <span>Team</span></h2>
                <div class="line"></div>
                <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
        <div id="owl-our-team" class="owl-carousel">
            <div class="item">
                <div class="team-content">
                    <div class="avatar"><img src="http://swlabs.co/images/team/team1.jpg" alt="" class="img-responsive img-circle" />
                    </div>
                    <div class="name">John Doe</div>
                    <div class="poisition">CEO</div>
                    <div class="line"></div>
                    <div class="description">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                    <div class="social"><a href="#" class="ico-socialize-twitter1 ico-socialize type1"><i class="fa fa-twitter"></i></a><a href="#" class="ico-socialize-facebook1 ico-socialize type1"><i class="fa fa-facebook"></i></a><a href="#" class="ico-socialize-google2 ico-socialize type1"><i class="fa fa-google-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="team-content">
                    <div class="avatar"><img src="http://swlabs.co/images/team/team2.jpg" alt="" class="img-responsive img-circle" />
                    </div>
                    <div class="name">Jessica Doe</div>
                    <div class="poisition">Project Manager</div>
                    <div class="line"></div>
                    <div class="description">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                    <div class="social"><a href="#" class="ico-socialize-twitter1 ico-socialize type1"><i class="fa fa-twitter"></i></a><a href="#" class="ico-socialize-facebook1 ico-socialize type1"><i class="fa fa-facebook"></i></a><a href="#" class="ico-socialize-google2 ico-socialize type1"><i class="fa fa-google-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="team-content">
                    <div class="avatar"><img src="http://swlabs.co/images/team/team3.jpg" alt="" class="img-responsive img-circle" />
                    </div>
                    <div class="name">John Smith</div>
                    <div class="poisition">Web Developer</div>
                    <div class="line"></div>
                    <div class="description">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                    <div class="social"><a href="#" class="ico-socialize-twitter1 ico-socialize type1"><i class="fa fa-twitter"></i></a><a href="#" class="ico-socialize-facebook1 ico-socialize type1"><i class="fa fa-facebook"></i></a><a href="#" class="ico-socialize-google2 ico-socialize type1"><i class="fa fa-google-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="team-content">
                    <div class="avatar"><img src="http://swlabs.co/images/team/team4.jpg" alt="" class="img-responsive img-circle" />
                    </div>
                    <div class="name">Jane Doe</div>
                    <div class="poisition">Graphic Designer</div>
                    <div class="line"></div>
                    <div class="description">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                    <div class="social"><a href="#" class="ico-socialize-twitter1 ico-socialize type1"><i class="fa fa-twitter"></i></a><a href="#" class="ico-socialize-facebook1 ico-socialize type1"><i class="fa fa-facebook"></i></a><a href="#" class="ico-socialize-google2 ico-socialize type1"><i class="fa fa-google-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="team-content">
                    <div class="avatar"><img src="http://swlabs.co/images/team/team5.jpg" alt="" class="img-responsive img-circle" />
                    </div>
                    <div class="name">Jose Jackson</div>
                    <div class="poisition">Graphic Designer</div>
                    <div class="line"></div>
                    <div class="description">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                    <div class="social"><a href="#" class="ico-socialize-twitter1 ico-socialize type1"><i class="fa fa-twitter"></i></a><a href="#" class="ico-socialize-facebook1 ico-socialize type1"><i class="fa fa-facebook"></i></a><a href="#" class="ico-socialize-google2 ico-socialize type1"><i class="fa fa-google-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="team-content">
                    <div class="avatar"><img src="http://swlabs.co/images/team/team6.jpg" alt="" class="img-responsive img-circle" />
                    </div>
                    <div class="name">Danielle Larson</div>
                    <div class="poisition">Graphic Designer</div>
                    <div class="line"></div>
                    <div class="description">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                    <div class="social"><a href="#" class="ico-socialize-twitter1 ico-socialize type1"><i class="fa fa-twitter"></i></a><a href="#" class="ico-socialize-facebook1 ico-socialize type1"><i class="fa fa-facebook"></i></a><a href="#" class="ico-socialize-google2 ico-socialize type1"><i class="fa fa-google-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="services" class="section-content">
    <div class="container">
        <div class="row mbxxl">
            <div class="col-lg-12">
                <h2 class="section-heading">Our <span>Services</span></h2>
                <div class="line"></div>
                <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
        <div class="row list-services">
            <div class="col-lg-4">
                <a href="#">
                    <div class="icon"><i class="fa fa-rocket"></i>
                    </div>
                </a>
                <h3>Innovation</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p>
            </div>
            <div class="col-lg-4">
                <a href="#">
                    <div class="icon"><i class="fa fa-magic"></i>
                    </div>
                </a>
                <h3>Web Design</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p>
            </div>
            <div class="col-lg-4">
                <a href="#">
                    <div class="icon"><i class="fa fa-cogs"></i>
                    </div>
                </a>
                <h3>Development</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p>
            </div>
        </div>
        <div class="row list-services">
            <div class="col-lg-4">
                <a href="#">
                    <div class="icon"><i class="fa fa-camera"></i>
                    </div>
                </a>
                <h3>Marketing</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p>
            </div>
            <div class="col-lg-4">
                <a href="#">
                    <div class="icon"><i class="fa fa-eye"></i>
                    </div>
                </a>
                <h3>clean coding</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p>
            </div>
            <div class="col-lg-4">
                <a href="#">
                    <div class="icon"><i class="fa fa-envelope-o"></i>
                    </div>
                </a>
                <h3>7x24 support</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p>
            </div>
        </div>
    </div>
</section>
<section id="banner" class="section-content section-parallax">
    <div class="bg-overlay pattern">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <h2>Check Out <span>µAdmin</span> Theme !</h2>
                    <p>Most Full Featured & Powerfull One Page Theme</p>
                </div>
                <div class="col-lg-2"><a href="#" class="btn btn-primary btn-outlined btn-block"><i class="fa fa-shopping-cart mrm"></i>Purchase Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="skills" class="section-content">
    <div class="container">
        <div class="row mbxxl">
            <div class="col-lg-12">
                <h2 class="section-heading">Our <span>Skills</span></h2>
                <div class="line"></div>
                <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="progress">
                    <div style="width: 70%;" class="progress-bar pull-right"><span>Wordpress <span class='pull-left'>70%</span></span>
                    </div>
                </div>
                <div class="progress">
                    <div style="width: 60%;" class="progress-bar pull-right"><span>Mobile Apps <span class='pull-left'>60%</span></span>
                    </div>
                </div>
                <div class="progress">
                    <div style="width: 80%;" class="progress-bar pull-right"><span>Software <span class='pull-left'>80%</span></span>
                    </div>
                </div>
                <div class="progress">
                    <div style="width: 50%;" class="progress-bar pull-right"><span>Web Desgin <span class='pull-left'>50%</span></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="progress">
                    <div style="width: 60%;" class="progress-bar"><span>Html & Css <span class='pull-right'>60%</span></span>
                    </div>
                </div>
                <div class="progress">
                    <div style="width: 90%;" class="progress-bar"><span>Photoshop <span class='pull-right'>90%</span></span>
                    </div>
                </div>
                <div class="progress">
                    <div style="width: 50%;" class="progress-bar"><span>Illustrator <span class='pull-right'>50%</span></span>
                    </div>
                </div>
                <div class="progress">
                    <div style="width: 60%;" class="progress-bar"><span>Photography <span class='pull-right'>60%</span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="clients" class="section-content section-parallax">
    <div class="bg-overlay pattern">
        <div class="container">
            <div class="row mbxxl">
                <div class="col-lg-12">
                    <h2 class="section-heading">What <span>Clients</span> Say</h2>
                    <div class="line"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div id="owl-our-clients" class="owl-carousel">
                        <div class="item">
                            <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eget leo nunc, nec tempus mi? Curabitur id nisl mi, ut vulputate urna. Quisque porta facilisis tortor, vitae bibendum velit fringilla vitae! Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                <cite>Raymond Webb</cite>
                            </blockquote>
                        </div>
                        <div class="item">
                            <blockquote>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae consequatur aut perferendis doloribus.
                                <cite>Bryan Carpenter</cite>
                            </blockquote>
                        </div>
                        <div class="item">
                            <blockquote>Donec non dui laoreet, tempor quam non, convallis eros. Aliquam blandit scelerisque nibh nec egestas. Suspendisse eu mauris pretium, molestie tortor non, ultrices leo. Suspendisse nulla turpis, pulvinar ac eleifend sit amet, gravida vel neque. Donec nec porta eros.
                                <cite>Lawrence Miller</cite>
                            </blockquote>
                        </div>
                        <div class="item">
                            <blockquote>Aliquam ac diam eleifend, fermentum nisi sit amet, semper ipsum. Pellentesque vel accumsan nisi. Cras quis nibh eleifend, ultricies magna sed, blandit arcu. Donec consequat varius tortor in suscipit.
                                <cite>Rebecca Welch</cite>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="portfolio" class="section-content">
    <div class="container">
        <div class="row mbxxl">
            <div class="col-md-12">
                <h2 class="section-heading">Zrzuty <span>Ekranu</span></h2>
                <div class="line"></div>
                <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <div id="filters">
                    <ul class="list-unstyled">
                        <li><a href="javascript:;" data-filter="*" class="active"><h3>Wszytkie</h3></a>
                        </li>
                        <li><a href="javascript:;" data-filter=".web-design"><h3>Tabele</h3></a>
                        </li>
                        <li><a href="javascript:;" data-filter=".development"><h3>Zestawienia</h3></a>
                        </li>
                        <li><a href="javascript:;" data-filter=".design"><h3>Wykresy</h3></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="isotope">
        <ul id="gallery-full-width" class="list-unstyled">
            <li class="element-item web-design">
                <a href="http://swlabs.co/images/portfolio/portfolio1.jpg" data-lightbox="image-1" data-title="Image 1" class="gallery-image"><img src="http://swlabs.co/images/portfolio/portfolio1.jpg" alt="" class="img-responsive" />
                    <div class="gallery-overlay">
                        <div class="thumb-info">
                            <h3>Featured Image</h3>
                            <p class="gallery-tags">Web Design</p><i class="fa fa-picture-o"></i>
                        </div>
                    </div>
                </a>
            </li>
            <li class="element-item development">
                <a href="http://swlabs.co/images/portfolio/portfolio2.jpg" data-lightbox="image-2" data-title="Image 2" class="gallery-image"><img src="http://swlabs.co/images/portfolio/portfolio2.jpg" alt="" class="img-responsive" />
                    <div class="gallery-overlay">
                        <div class="thumb-info">
                            <h3>Featured Image</h3>
                            <p class="gallery-tags">Development</p><i class="fa fa-picture-o"></i>
                        </div>
                    </div>
                </a>
            </li>
            <li class="element-item web-design">
                <a href="http://swlabs.co/images/portfolio/portfolio3.jpg" data-lightbox="image-3" data-title="Image 3" class="gallery-image"><img src="http://swlabs.co/images/portfolio/portfolio3.jpg" alt="" class="img-responsive" />
                    <div class="gallery-overlay">
                        <div class="thumb-info">
                            <h3>Featured Image</h3>
                            <p class="gallery-tags">Web Design</p><i class="fa fa-picture-o"></i>
                        </div>
                    </div>
                </a>
            </li>
            <li class="element-item web-design">
                <a href="http://swlabs.co/images/portfolio/portfolio4.jpg" data-lightbox="image-4" data-title="Image 4" class="gallery-image"><img src="http://swlabs.co/images/portfolio/portfolio4.jpg" alt="" class="img-responsive" />
                    <div class="gallery-overlay">
                        <div class="thumb-info">
                            <h3>Featured Image</h3>
                            <p class="gallery-tags">Web Design</p><i class="fa fa-picture-o"></i>
                        </div>
                    </div>
                </a>
            </li>
            <li class="element-item design development">
                <a href="http://swlabs.co/images/portfolio/portfolio5.jpg" data-lightbox="image-5" data-title="Image 5" class="gallery-image"><img src="http://swlabs.co/images/portfolio/portfolio5.jpg" alt="" class="img-responsive" />
                    <div class="gallery-overlay">
                        <div class="thumb-info">
                            <h3>Featured Image</h3>
                            <p class="gallery-tags">Design, Development</p><i class="fa fa-picture-o"></i>
                        </div>
                    </div>
                </a>
            </li>
            <li class="element-item web-design development">
                <a href="http://swlabs.co/images/portfolio/portfolio6.jpg" data-lightbox="image-6" data-title="Image 6" class="gallery-image"><img src="http://swlabs.co/images/portfolio/portfolio6.jpg" alt="" class="img-responsive" />
                    <div class="gallery-overlay">
                        <div class="thumb-info">
                            <h3>Featured Image</h3>
                            <p class="gallery-tags">Web Design, Development</p><i class="fa fa-picture-o"></i>
                        </div>
                    </div>
                </a>
            </li>
            <li class="element-item design">
                <a href="http://swlabs.co/images/portfolio/portfolio7.jpg" data-lightbox="image-7" data-title="Image 7" class="gallery-image"><img src="http://swlabs.co/images/portfolio/portfolio7.jpg" alt="" class="img-responsive" />
                    <div class="gallery-overlay">
                        <div class="thumb-info">
                            <h3>Featured Image</h3>
                            <p class="gallery-tags">Design</p><i class="fa fa-picture-o"></i>
                        </div>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</section>
<section id="pricing" class="section-content">
    <div class="container">
        <div class="row mbxxl">
            <div class="col-lg-12">
                <h2 class="section-heading">Our <span>Pricing</span> Tables</h2>
                <div class="line"></div>
                <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
        <div class="row row-merge">
            <div class="col-md-3 col-sm-6">
                <div class="pricing-widget">
                    <div class="pricing-head">Basic</div>
                    <div class="pricing-body">
                        <div class="pricing-cost"><strong style="display: block">$19</strong><small>per month</small>
                        </div>
                        <ul class="pricing-list text-center">
                            <li><a class="btn btn-sm btn-default">Start your free trial!</a>
                            </li>
                            <li>Amount of space <strong>10 GB</strong>
                            </li>
                            <li>Bandwidth per month <strong>100 GB</strong>
                            </li>
                            <li>No. of email accounts <strong>1</strong>
                            </li>
                            <li>No. of MySql database <strong>1</strong>
                            </li>
                            <li>24/7 Unlimited Support <strong>YES</strong>
                            </li>
                            <li>Support Tickets per month <strong>1</strong>
                            </li>
                            <li class="text-center"><a href="#" class="btn btn-primary">Buy Now</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="pricing-widget active">
                    <div class="pricing-head">Professional</div>
                    <div class="pricing-body">
                        <div class="pricing-cost"><strong style="display: block"><span>$</span>39</strong><small>per month</small>
                        </div>
                        <ul class="pricing-list text-center">
                            <li><a class="btn btn-sm btn-default">Start your free trial!</a>
                            </li>
                            <li>Amount of space <strong>30 GB</strong>
                            </li>
                            <li>Bandwidth per month <strong>200 GB</strong>
                            </li>
                            <li>No. of email accounts <strong>10</strong>
                            </li>
                            <li>No. of MySql database <strong>10</strong>
                            </li>
                            <li>24/7 Unlimited Support <strong>YES</strong>
                            </li>
                            <li>Support Tickets per month <strong>3</strong>
                            </li>
                            <li class="text-center"><a href="#" class="btn btn-primary">Buy Now</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="pricing-widget">
                    <div class="pricing-head">Business</div>
                    <div class="pricing-body">
                        <div class="pricing-cost"><strong style="display: block">$59</strong><small>per month</small>
                        </div>
                        <ul class="pricing-list text-center">
                            <li><a class="btn btn-sm btn-default">Start your free trial!</a>
                            </li>
                            <li>Amount of space <strong>100 GB</strong>
                            </li>
                            <li>Bandwidth per month <strong>500 GB</strong>
                            </li>
                            <li>No. of email accounts <strong>50</strong>
                            </li>
                            <li>No. of MySql database <strong>50</strong>
                            </li>
                            <li>24/7 Unlimited Support <strong>YES</strong>
                            </li>
                            <li>Support Tickets per month <strong>5</strong>
                            </li>
                            <li class="text-center"><a href="#" class="btn btn-primary">Buy Now</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="pricing-widget">
                    <div class="pricing-head">Unlimited</div>
                    <div class="pricing-body">
                        <div class="pricing-cost"><strong style="display: block">$79</strong><small>per month</small>
                        </div>
                        <ul class="pricing-list text-center">
                            <li><a class="btn btn-sm btn-default">Start your free trial!</a>
                            </li>
                            <li>Amount of space <strong>200 GB</strong>
                            </li>
                            <li>Bandwidth per month <strong>800 GB</strong>
                            </li>
                            <li>No. of email accounts <strong>100</strong>
                            </li>
                            <li>No. of MySql database <strong>80</strong>
                            </li>
                            <li>24/7 Unlimited Support <strong>YES</strong>
                            </li>
                            <li>Support Tickets per month <strong>8</strong>
                            </li>
                            <li class="text-center"><a href="#" class="btn btn-primary">Buy Now</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="newsletter" class="section-content section-parallax">
    <div class="bg-overlay pattern">
        <div class="container">
            <div class="row mbxxl">
                <div class="col-lg-12">
                    <h2 class="section-heading">Our <span>Newsletter</span></h2>
                    <div class="line"></div>
                    <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <form action="" class="form-newsletter">
                        <div class="input-group input-group-lg">
                            <input type="text" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-primary">Subscribe</button></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="contact" class="section-content">
    <div class="container">
        <div class="row mbxxl">
            <div class="col-lg-12">
                <h2 class="section-heading"><span>Contact</span> Us</h2>
                <div class="line"></div>
                <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
    </div>
    <div id="map" style="width: 100%;height: 400px;"></div>
    <div class="container">
        <form action="#">
            <div class="row mtxxl">
                <div class="col-lg-6">
                    <h3 class="title">Info us</h3>
                    <table class="tb-info-us table-striped mbl">
                        <tbody>
                        <tr>
                            <td>Company:</td>
                            <td>Swlabs</td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td>contact@email.com</td>
                        </tr>
                        <tr>
                            <td>Fax:</td>
                            <td>(123) 456-7890</td>
                        </tr>
                        <tr>
                            <td>Adress:</td>
                            <td>8186 Mckinley Ave</td>
                        </tr>
                        <tr>
                            <td>Phone:</td>
                            <td>(987) 654-3210</td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="social"><a href="#" class="ico-socialize-twitter1 ico-socialize type2 ico-lg"><i class="fa fa-twitter"></i></a><a href="#" class="ico-socialize-facebook1 ico-socialize type2 ico-lg"><i class="fa fa-facebook"></i></a><a href="#" class="ico-socialize-google2 ico-socialize type2 ico-lg"><i class="fa fa-google-plus"></i></a><a href="#" class="ico-socialize-dribbble1 ico-socialize type2 ico-lg"><i class="fa fa-twitter"></i></a><a href="#" class="ico-socialize-youtube1 ico-socialize type2 ico-lg"><i class="fa fa-youtube"></i></a><a href="#" class="ico-socialize-pinterest ico-socialize type2 ico-lg"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 mbm">
                            <input type="text" placeholder="Full Name" class="form-control input-lg" />
                        </div>
                        <div class="col-lg-6 mbm">
                            <input type="text" placeholder="E-mail Address" class="form-control input-lg" />
                        </div>
                        <div class="col-lg-12">
                            <input type="text" placeholder="Subject" class="form-control input-lg" />
                        </div>
                        <div class="col-lg-12">
                            <textarea placeholder="Message" rows="5" class="form-control input-lg mtm"></textarea>
                        </div>
                        <div class="col-lg-4">
                            <button type="submit" class="btn btn-primary btn-block">Send Message</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<footer>
    <div class="container">
        <p class="text-center">©2014 mAdmin - Responsive Multi-Style Admin Template</p>
    </div>
</footer>
<!--END CONTENT-->
<script src="../js/jquery-1.10.2.min.js"></script>
<script src="../js/jquery-migrate-1.2.1.min.js"></script>
<script src="../js/jquery-ui.js"></script>
<!--loading bootstrap js-->
<script src="../vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="../vendors/bootstrap-hover-dropdown/bootstrap-hover-dropdown.js"></script>
<script src="../js/html5shiv.js"></script>
<script src="../js/respond.min.js"></script>
<script src="../vendors/isotope/dist/isotope.pkgd.min.js"></script>
<script src="../vendors/jquery.hoverdir.js"></script>
<script src="../vendors/modernizr.custom.97074.js"></script>
<script src="../vendors/jquery-lightbox/js/lightbox.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAu6tm60TzeUo9rWpLnrQ7mrFn4JPMVje4&amp;sensor=false"></script>
<script src="../vendors/owl-carousel/owl-carousel/owl.carousel.min.js"></script>
<script src="../vendors/jquery-circliful/js/jquery.circliful.min.js"></script>
<!--Loading script for each page-->
<script src="assets/plugins/jquery-backstretch/jquery.backstretch.min.js"></script>
<script src="assets/js/one-page_slider.js"></script>
<!--CORE JAVASCRIPT-->
<script src="assets/js/jquery-text-effect.js"></script>
<script src="../js/frontend-one-page.js"></script>
</body>

</html>

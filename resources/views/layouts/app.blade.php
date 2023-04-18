<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="{{ str_replace('_', '-', app()->getLocale()) }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Blog List</title>
    <meta name="author" content="" />
    <meta name="description" content="" />
    <link rel="icon" href="{{ asset('assets/img/favicon.ico') }}" type="image/x-icon" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="{{ asset('assets/libraries/font-awesome/css/font-awesome.min.css') }}" />
    <!-- Start BOOTSTRAP -->
    <link rel="stylesheet" href="{{ asset('assets/libraries/tether/dist/css/tether.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/libraries/bootstrap/dist/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-select.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/libraries/bootstrap-colorpicker-master/dist/css/bootstrap-colorpicker.min.css') }}" />
    <!-- End Bootstrap -->
    <!-- Start Template files -->
    <link rel="stylesheet" href="{{ asset('assets/css/winter-flat.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}" />
    <!-- End  Template files -->
    <!-- Start owl-carousel -->
    <link rel="stylesheet" href="{{ asset('assets/libraries/owl.carousel/assets/owl.carousel.css') }}" />
    <!-- End owl-carousel -->
    <!-- Start blueimp  -->
    <link rel="stylesheet" href="{{ asset('assets/css/blueimp-gallery.min.css') }}" />
    <!-- End blueimp  -->
    <script src="{{ asset('assets/js/modernizr.custom.js') }}"></script>
    <!-- Start custom template style  -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom_template_style.css') }}" />
    <!-- End custom template style   -->
</head>
<body class="">
<div class="container container-wrapper">
    <header class="header">
        <div class="top-box" data-toggle="sticky-onscroll">
            <div class="container">
                <div  class="top-bar color-primary">
                    <div class="container clearfix">
                        <div class="pull-left">
                            <ul class="login-menu clearfix">
{{--                                <li><a href="mylistings.html"><i class="fa fa-list"></i> My listings</a></li>--}}
{{--                                <li><a href="mylistings.html"><i class="fa fa-star"></i> My favorites</a></li>--}}
{{--                                <li><a href="mylistings.html"><i class="fa fa-envelope"></i> My inquiries </a></li>--}}
                                <li><a href="mylistings.html"><i class="fa fa-user"></i> My profile</a></li>
                                <li><a href="login.html"><i class="fa fa-power-off"></i> Login</a></li>
                            </ul>
                        </div>
                        <div class="pull-right">
                            <ul class="social-nav clearfix">
                                <li><a href="https://www.facebook.com/share.php?u=http%3A%2F%2Ftest.com%2F" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">Facebook</a></li>
                                <li><a href="https://twitter.com/home?status=http://test.com" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">Twitter</a></li>
                                <li><a href="https://www.linkedin.com/shareArticle?mini=true&url=&title=&summary=&source=" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">Linkid</a></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- /.top-bar-->
                <section class="header-inner">
                    <div class="container">
                        <div class="logo pull-left pull-sm-up col-sm-6 col-xs-12  text-left">
                            <a href="index.html">
                                <img src="{{ asset( 'assets/img/placeholders/250x75.png') }}" alt="" />
                                <img src="{{ asset( 'assets/img/placeholders/80x80.png') }}" alt="" class="mini-logo" />
                            </a>
                        </div>
                        <div class="pull-right pull-sm-up col-sm-6 col-xs-12 websitetitle focus-color">
                            <a href="login.html" class="row">
                                <div class="sub-title">join us</div>
                                <h2 class="title">Add your post</h2>
                            </a>
                        </div>
                        <div class="pull-left menu">
{{--                            <div class="box-navigaion clearfix">--}}
{{--                                <div class="navbar-header">--}}
{{--                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-menu">--}}
{{--                                        <span class="sr-only">Toggle navigation</span>--}}
{{--                                        <span class="icon-bar"></span>--}}
{{--                                        <span class="icon-bar"></span>--}}
{{--                                        <span class="icon-bar"></span>--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                                <div class="lang-manu dropdown pull-right">--}}
{{--                                    <button class="btn btn-secondary" type="button" id="about-us" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                        <img src="assets/img/placeholders/flag.png" alt="" /> <span>EN</span>--}}
{{--                                        <i class='icon-dropdown'></i>--}}
{{--                                    </button>--}}
{{--                                    <div class="dropdown-menu" aria-labelledby="about-us">--}}
{{--                                        <a class="dropdown-item" href="#">--}}
{{--                                            <img src="assets/img/placeholders/flag.png" alt="" /> EN--}}
{{--                                        </a>--}}
{{--                                        <a class="dropdown-item" href="#">--}}
{{--                                            <img src="assets/img/placeholders/flag.png" alt="" /> HR--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <nav class="navbar text-color-primary">--}}
{{--                                <div class="text-right">--}}
{{--                                    <button class="navbar-toggler hidden" type="button" data-toggle="collapse" data-target="#main-menu">--}}
{{--                                        &#9776;--}}
{{--                                    </button>--}}
{{--                                </div>--}}
                                <!-- Links -->
                                <div class="collapse navbar-collapse" id="main-menu">
                                    <ul class="nav navbar-nav clearfix">
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                                Categories
                                                <i class="icon-dropdown"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#!">Real Estate</a>
                                                <a class="dropdown-item" href="#!">Yacht Market</a>
                                                <a class="dropdown-item" href="#!">Car Dealer</a>
                                                <a class="dropdown-item" href="#!">Job Finder</a>
                                                <a class="dropdown-item" href="#!">Business Directory</a>
                                                <a class="dropdown-item" href="#!">Classified Portal</a>
                                                <a class="dropdown-item" href="#!">Basic shop</a>
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown dropdown-mega">
                                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                                Featured
                                                <i class="icon-dropdown"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-property">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="property-card card">
                                                                <div class="property-card-header image-box">
                                                                    <img src="assets/img/placeholders/395x250.png" alt="" class="" />
                                                                    <a href="listing.html" class="property-card-hover">
                                                                        <img src="assets/img/property-hover-arrow.png" alt="" class="left-icon" />
                                                                        <img src="assets/img/plus.png" alt="" class="center-icon" />
                                                                        <img src="assets/img/icon-notice.png" alt="" class="right-icon" />
                                                                    </a>
                                                                </div>
                                                                <div class="property-card-tags">
                                                                    <span class="label label-default label-tag-primary">sale</span>
                                                                </div>
                                                                <div class="property-card-box card-box card-block">
                                                                    <h3 class="property-card-title"><a href="listing.html">Title property</a></h3>
                                                                    <div class="property-card-descr">This is simply dummy text of the printing and typesetting industry. That has been the industry standard ...</div>
                                                                    <div class="property-preview-footer  clearfix">
                                                                        <div class="property-preview-f-left text-color-primary">
                                                                                    <span class="property-card-value">
                                                                                        <i class="fa fa-home"></i>House
                                                                                    </span>
                                                                            <span class="property-card-value">
                                                                                        <i class="fa fa-tint"></i>1
                                                                                    </span>
                                                                            <span class="property-card-value">
                                                                                        <i class="fa fa-square-o"></i>200m
                                                                                    </span>
                                                                            <span class="property-card-value">
                                                                                        <i class="fa fa-eur"></i>60 000
                                                                                    </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </section><!-- /.menu-->
            </div>
        </div>
        <div class="top-box-mask"></div>
        <section class="top-title-widget color-primary">
            <div class="container">
                <ul class="breadcrumb top-title-breadcrumb">
                    <li class="item"><a href="{{ url('/') }}"> Home </a></li>
                    <li class="item"> Blog </li>
                </ul>
                <h1 class="top-title-t">Blog</h1>
            </div>
        </section><!-- /.top-title-->
    </header><!-- /.header-->
    <main class="main main-container section-color-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    {{ $slot }}
                </div><!-- /.center-content -->
                <div class="col-md-3">
                    <div class="widget widget-search">
                        <form action="#">
                            <div class="input-group input-with-search color-primary clearfix">
                                <input type="text" value="" class="form-control" placeholder="SEARCH"/>
                                <button type="submit" class="input-group-addon"><i class='fa fa-search icon-white'></i></button>
                            </div>
                        </form>
                    </div><!-- /.widget-search-->
                    <div class="widget widget-menu-right">
                        <div id="menu-right">
                            <div class="list-group panel text-color-primary border-color-primary">
                                <a href="#home" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#menu-right">Slider</a>
                                <div class="collapse" id="home">
                                    <a class="list-group-item" href="slider_standard.html">Standard</a>
                                    <a class="list-group-item" href="index_headervideo.html">Video</a>
                                    <a class="list-group-item" href="index_fullscreenslider.html">Full Screen</a>
                                </div>
                                <a href="#home-map" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#menu-right">Map</a>
                                <div class="collapse" id="home-map">
                                    <a class="list-group-item" href="map.html">Grid results</a>
                                    <a class="list-group-item" href="map_list.html">List result</a>
                                    <a class="list-group-item" href="map_side.html">Side version</a>
                                    <a class="list-group-item" href="map_side_list.html">Side version list</a>
                                    <a class="list-group-item" href="map_geo.html?geolocation=paris">Geo regions</a>
                                </div>
                                <a href="#about" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#menu-right">Categories</a>
                                <div class="collapse" id="about">
                                    <a class="list-group-item" href="map_side2.html">Real Estate</a>
                                    <a class="list-group-item" href="index_yacht.html">Yacht Market</a>
                                    <a class="list-group-item" href="index_car.html">Car Dealer</a>
                                    <a class="list-group-item" href="index_job.html">Job Finder</a>
                                    <a class="list-group-item" href="map_business.html">Business Directory</a>
                                    <a class="list-group-item" href="index_classfied.html">Classified Portal</a>
                                    <a class="list-group-item" href="index_shop.html">Basic shop</a>
                                </div>
                                <a href="#pages" class="list-group-item list-group-item-success active" data-toggle="collapse" data-parent="#menu-right">Pages</a>
                                <div class="collapse" id="pages">
                                    <a class="list-group-item" href="page_gallery.html">Basic with Gallery</a>
                                    <a class="list-group-item" href="login.html">Login</a>
                                    <a class="list-group-item" href="mylistings.html">My Listings</a>
                                    <a class="list-group-item" href="listing.html">Listing Preview</a>
                                    <a class="list-group-item" href="ask_expert.html">FAQ</a>
                                    <a class="list-group-item" href="agents.html">Agents</a>
                                    <a class="list-group-item" href="profile.html">Agent Profile</a>
                                    <a class="list-group-item active" href="blog.html">Blog List</a>
                                    <a class="list-group-item" href="page_cart.html">Cart</a>
                                    <a class="list-group-item" href="component_alerts.html">Components</a>
                                    <a class="list-group-item" href="page_invoice.html">Invoice</a>
                                    <a class="list-group-item" href="contact.html">Contact</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.widget-search-->
                    <div class="widget widget-ads-right">
                        <img src="{{ asset('assets/img/placeholders/265x220.png') }}" alt="" class="center-block" />
                    </div><!-- /.widget-ads-->
                </div>
                <!-- /.right side bar -->
            </div>
        </div>
    </main><!-- /.main-part-->
    <footer class="footer">
        <div class="container footer-mask">
            <div class="container footer-contant">
                <div class="row">
                    <div class="col-md-3 hidden-sm hidden-xs">
                        <div class="logo"><a href="#"><img src="assets/img/placeholders/360x85.png" alt="" /></a></div>
                        <div class="social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- /.footer-content -->
            <div class="footer-bottom">
                <div class="container text-right">
                    <span class=""><a href="#">WINTER &#169; 2016</a></span>
                </div>
            </div><!-- /.footer-bottom -->
        </div>
    </footer>
    <a class="btn btn-scoll-up color-secondary" id="btn-scroll-up"></a>
</div>
<!-- Start Jquery -->
<script src="{{ asset('assets/js/jquery-2.2.1.min.js') }}"></script>
<script src="{{ asset('assets/libraries/jquery.mobile/jquery.mobile.custom.min.js') }}"></script>
<!-- End Jquery -->
<!-- Start BOOTSTRAP -->
<script src="{{ asset('assets/libraries/tether/dist/js/tether.min.js') }}"></script>
<script src="{{ asset('assets/libraries/bootstrdist/js/tether.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('assets/libraries/bootstrap-colorpicker-master/dist/js/bootstrap-colorpicker.min.js') }}"></script>
<!-- End Bootstrap -->
<!-- Start Template files -->
<script src="{{ asset('assets/js/winter-flat.js') }}"></script>
<!-- End  Template files -->
<!-- Start owl-carousel -->
<script src="{{ asset('assets/libraries/owl.carousel/owl.carousel.min.js') }}"></script>
<!-- End owl-carousel -->
<!-- Start blueimp  -->
<script src="{{ asset('assets/js/blueimp-gallery.min.js') }}" type="text/javascript"></script>
<!-- End blueimp  -->
<!-- Start custom template style  -->
<script src="{{ asset('assets/js/custom_template_style.js') }}" type="text/javascript"></script>
<!-- End custom template style   -->
</body>
</html>

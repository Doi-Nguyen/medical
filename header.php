<!DOCTYPE html>
<!--[if lt IE 9 ]><html lang="en" dir="ltr" class="no-js ie-old"> <![endif]-->
<!--[if IE 9 ]><html lang="en" dir="ltr" class="no-js ie9"> <![endif]-->
<!--[if IE 10 ]><html lang="en" dir="ltr" class="no-js ie10"> <![endif]-->
<!--[if (gt IE 10)|!(IE)]><!-->
<html <?php language_attributes(); ?> dir="ltr" class="no-js">
<!--<![endif]-->
<head>

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- META TAGS                                 -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <!-- Always force latest IE rendering engine -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile specific meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- PAGE TITLE                                -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <title>iMedical - Medical, Doctor, Dentist, Clinic and Hospital Template</title>

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- SEO METAS                                 -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="description" content="brief description here">
    <meta name="keywords" content="insert, keywords, here">
    <meta name="robots" content="index, follow">
    <meta name="author" content="EvenThemes">

    <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php endif; ?>
    <?php wp_head(); ?>
</head>

<body id="body" class="wide-layout preloader-active" <?php body_class(); ?>>

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- PRELOADER                                 -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- Preloader -->
    <div id="preloader" class="preloader">
        <div class="loader pos-center">
            <img src="<?php echo THEME_PATH;?>/assets/images/preloader.gif" alt="">
        </div>
    </div>
    <!-- End Preloader -->

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- WRAPPER                                   -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->

    <div id="pageWrapper" class="page-wrapper">

        <!-- –––––––––––––––[ HEADER ]––––––––––––––– -->
        <!-- Start Top Bar -->
        <div class="topbar bg-theme">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <ul class="topbar-info list-inline is-hidden-xs t-xs-center t-md-left">
                            <li class="prl-10">
                                <i class="fa fa-map-marker mr-10 font-16"></i>701 Shadow Ln, Las Vegas, NV 89106</li>
                            <li class="prl-10">
                                <i class="fa fa-phone mr-10 font-16"></i>1 (800) 233-2742 </li>
                            <li class="prl-10">
                                <i class="fa fa-envelope mr-10 font-16"></i>codastroid@gmail.com</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="social-icons list-inline font-16  t-xs-center t-md-right is-hidden-sm">
                            <li class="social-icons__item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="social-icons__item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="social-icons__item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li class="social-icons__item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li class="social-icons__item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <header id="mainHeader" class="main-header">
            <div class="header-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="logo">
                                <a href="index.php"><img src="<?php echo THEME_PATH;?>assets/images/logo.png" alt=""></a>
                            </div>
                            <!-- Phone Menu button -->
                            <button id="menu" class="menu is-hidden-md-up"></button>
                        </div>
                        <div class="col-md-9">
                            <nav class="navigation">
                                <ul>
                                    <li><a href="javascript:avoid(0);">Home</a>
                                        <i class="fa fa-plus is-hidden-md-up"></i>
                                        <ul class="sub-nav">
                                            <li> <a href="index.html">Home page 1</a> </li>
                                            <li> <a href="index-02.html">Home page 2</a> </li>
                                        </ul>
                                    </li>
                                    <li><a href="about.html">About us</a></li>
                                    <li><a href="javascript:avoid(0);">Services</a> <i class="fa fa-plus is-hidden-md-up"></i>
                                        <ul class="sub-nav">
                                            <li> <a href="services.html">Services</a> </li>
                                            <li> <a href="service-details.html">Service Details</a> </li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:avoid(0);">Doctors</a> <i class="fa fa-plus is-hidden-md-up"></i>
                                        <ul class="sub-nav">
                                            <li><a href="doctors-grid.html">Doctors Grid</a></li>
                                            <li><a href="doctors-list.html">Doctors List</a></li>
                                            <li><a href="doctor-details.html">Doctor Details</a> </li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:avoid(0);">Bolg</a> <i class="fa fa-plus is-hidden-md-up"></i>
                                        <ul class="sub-nav">
                                            <li><a href="blog-classic.html">Blog Classic</a></li>
                                            <li><a href="blog-grid.html">Blog Grid</a></li>
                                            <li><a href="blog-list.html">Blog List</a></li>
                                            <li><a href="blog-single.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:avoid(0);">pages</a> <i class="fa fa-plus is-hidden-md-up"></i>
                                        <ul class="sub-nav">
                                            <li> <a href="appointment.html">Appointment</a> </li>
                                            <li class="sub-menu"> <a href="javascript:avoid(0);">Gallery</a> <i class="fa fa-plus is-hidden-md-up"></i>
                                                <ul class="sub-nav">
                                                    <li> <a href="gallery-01.html">Gallery 1</a> </li>
                                                    <li> <a href="gallery-02.html">Gallery 2</a> </li>
                                                </ul>
                                            </li>
                                            <li class="sub-menu"> <a href="javascript:avoid(0);">Departements</a> <i class="fa fa-plus is-hidden-md-up"></i>
                                                <ul class="sub-nav">
                                                    <li> <a href="departments.html">Departements</a> </li>
                                                    <li> <a href="department-single.html">Single Departement</a> </li>
                                                </ul>
                                            </li>
                                            <li> <a href="pricing-tables.html">Pricing Tables</a> </li>
                                            <li> <a href="testimonials.html">Testimonials</a> </li>
                                            <li> <a href="coming-soon.html">Coming soon</a> </li>
                                            <li> <a href="faq.html">faq</a> </li>
                                            <li> <a href="404.html">404 page</a> </li>
                                        </ul>
                                    </li>
                                    <li><a href="contact-us.html">Contact us</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- –––––––––––––––[ HEADER ]––––––––––––––– -->
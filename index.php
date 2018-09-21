<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Marco
 * @since Marco 1.0
 */

get_header(); ?>

<!-- –––––––––––––––[ PAGE CONTENT ]––––––––––––––– -->
<main id="mainContent" class="main-content">            <!-- Start Hero Area -->
    <section class="section hero-area" data-bg-img="<?php echo THEME_PATH;?>assets/images/slider/05.jpg">
        <div class="hero-slider owl-carousel" data-nav="true" data-loop="true" data-autoplay="true" data-smart-speed="1000" data-autoplay-timeout="10000">
            <div class="hero-slider-item" data-bg-img="<?php echo THEME_PATH;?>assets/images/slider/01.jpg">
                <div class="hero-overlay">
                    <div class="hero-overlay-wrapper">
                        <div class="pos-tb-center hero-overlay-inner">
                            <div class="container t-xs-center t-md-left">
                                <div class="row row-tb-20">
                                    <div class="col-md-8">
                                        <h3 class="mb-10">Health Care Services</h3>
                                        <h1 class="t-uppercase mb-20">WE CARE ABOUT YOUR <span class="color-theme">HEALTH</span></h1>
                                        <h5 class="mb-30 color-lighter">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pretium orci sit amet mi ullamcorper egestas. Sed non mattis metus. Integer vel lorem tincidunt.</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-slider-item" data-bg-img="<?php echo THEME_PATH;?>assets/images/slider/02.jpg">
                <div class="hero-overlay">
                    <div class="hero-overlay-wrapper">
                        <div class="pos-tb-center hero-overlay-inner">
                            <div class="container">
                                <div class="row row-tb-20">
                                    <div class="col-md-8">
                                        <h3 class="mb-10">Health Care Services</h3>
                                        <h1 class="t-uppercase mb-20">WE CARE ABOUT YOUR <span class="color-theme">HEALTH</span></h1>
                                        <h5 class="mb-30 color-lighter">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pretium orci sit amet mi ullamcorper egestas. Sed non mattis metus. Integer vel lorem tincidunt.</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-slider-item" data-bg-img="<?php echo THEME_PATH;?>assets/images/slider/03.jpg">
                <div class="hero-overlay">
                    <div class="hero-overlay-wrapper">
                        <div class="pos-tb-center hero-overlay-inner">
                            <div class="container">
                                <div class="row row-tb-20">
                                    <div class="col-md-8">
                                        <h3 class="mb-10">Health Care Services</h3>
                                        <h1 class="t-uppercase mb-20">WE CARE ABOUT YOUR <span class="color-theme">HEALTH</span></h1>
                                        <h5 class="mb-30 color-lighter">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pretium orci sit amet mi ullamcorper egestas. Sed non mattis metus. Integer vel lorem tincidunt.</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-slider-item" data-bg-img="<?php echo THEME_PATH;?>assets/images/slider/04.jpg">
                <div class="hero-overlay">
                    <div class="hero-overlay-wrapper">
                        <div class="pos-tb-center hero-overlay-inner">
                            <div class="container">
                                <div class="row row-tb-20">
                                    <div class="col-md-8">
                                        <h3 class="mb-10">Health Care Services</h3>
                                        <h1 class="t-uppercase mb-20">WE CARE ABOUT YOUR <span class="color-theme">HEALTH</span></h1>
                                        <h5 class="mb-30 color-lighter">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pretium orci sit amet mi ullamcorper egestas. Sed non mattis metus. Integer vel lorem tincidunt.</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Area --><!-- Start Features Boxes Area -->
    <section class="section features-boxes-area hero-features-boxes">
        <div class="container">
            <div class="row row-md-cell color-white">
                <div class="col-md-4 valign-top bg-theme">
                    <div class="features-boxe-single prl-10 pt-20 pb-15">
                        <h4 class="mb-20 t-uppercase">Emergency Case</h4>
                        <p class="mb-20">Duis tincidunt leo sed dolor lacinia posuere. Nulla eu aliquam enim. Proin et nibh ut massa lacinia lacinia. Duis sit amet dictum nisl, vitae porttitor nunc. Vestibulum ante ipsum.</p>
                        <a href="#" class="btn btn-o btn-rev">Read More</a>
                    </div>
                </div>
                <div class="col-md-4 valign-top bg-blue-dark">
                    <div class="features-boxe-single prl-10 pt-20 pb-15">
                        <h4 class="mb-20 t-uppercase">24 Hours Service</h4>
                        <p class="mb-20">Duis tincidunt leo sed dolor lacinia posuere. Nulla eu aliquam enim. Proin et nibh ut massa lacinia lacinia. Duis sit amet dictum nisl, vitae porttitor nunc. Vestibulum ante ipsum.</p>
                        <a href="#" class="btn btn-o btn-rev">Read More</a>
                    </div>
                </div>
                <div class="col-md-4 valign-top bg-blue-darker">
                    <div class="features-boxe-single prl-10 pt-20 pb-15">
                        <h4 class="mb-10 t-uppercase">Opening Hours</h4>
                        <ul class="opening-hours">
                            <li>Monday – Thursday <span class="float-right">8.00 – 17.00</span></li>
                            <li>Friday <span class="float-right">9.30 – 17.30</span></li>
                            <li>Saturday - Sunday <span class="float-right">Closing</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div></section>
    <!-- End Features Boxes Area -->
    <!-- Start About Us Area -->
    <section class="section about-us-area pt-60">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="who-we-are mb-40">
                        <h4 class="mb-10">We are medical center</h4>
                        <h2 class="font-24 mb-20">We Have Medicare Plan Options for You!</h2>
                        <p class="color-mid mb-20">Phasellus pretium orci sit amet mi ullamcorper egestas. Sed non mattis metus. Integer vel lorem tincidunt, pharetra eros nec, posuere odio. Nullam eget bibendum sem, venenatis lacinia justo. Duis aliquet lobortis neque, eget volutpat nulla iaculis a.</p>
                        <p class="color-mid mb-20">In hac habitasse platea dictumst. Praesent condimentum justo justo, at ultricies diam accumsan vitae. Donec ac elementum diam. Ut quam orci, posuere quis lacus sed, vehicula rhoncus massa. Nunc volutpat nibh nulla, tincidunt egestas tellus faucibus nec.</p>
                        <ul class="styled-list mb-30">
                            <li>Nulla venenatis auctor quam, ac porta lectus dictum in</li>
                            <li>Aliquam sodales nisi sit amet lorem</li>
                            <li>Suspendisse vulputate tellus in justo convallis imperdiet</li>
                            <li>Morbi id lorem consequat, sodales mi non</li>
                            <li>Nulla venenatis auctor quam, ac porta lectus dictum in</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 t-xs-center t-md-center">
                    <img src="<?php echo THEME_PATH;?>assets/images/about/about-03.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- End About Us Area -->            <!-- Start Features Area -->
    <section class="section features-area ptb-60 bg-gray">
        <div class="container">
            <div class="row mb-30">
                <div class="col-lg-7 col-md-8 col-sm-10 col-xs-12 col-xs-center t-center mb-40">
                    <h6 class="section-subtitle mb-10 t-uppercase color-mid">OUR FEATURES</h6>
                    <h2 class="section-title mb-20 font-22 t-uppercase">WHY CHOOSE US</h2>
                    <div class="heart-line">
                        <img src="<?php echo THEME_PATH;?>assets/images/icon.png" alt="Awesome Image">
                    </div>
                </div>
            </div>
            <div class="row row-tb-15 clearfix">
                <!--Column-->
                <div class="col-md-4 col-sm-6 col-xs-12 column">
                    <article class="feature-single">
                        <div class="feature-icon">
                            <i class="icon-i-internal-medicine"></i>
                        </div>
                        <div class="feature-content">
                            <h4 class="mb-10">Internal Medicine</h4>
                            <p class="color-mid">Proin nec lacus lacus. Sed vitae consectetur est, et mattis felis. Fusce lacinia nibh vitae fermentum finibus.</p>
                        </div>
                    </article>
                </div>
                <!--Column-->
                <div class="col-md-4 col-sm-6 col-xs-12 column">
                    <article class="feature-single">
                        <div class="feature-icon">
                            <i class="icon-i-respiratory"></i>
                        </div>
                        <div class="feature-content">
                            <h4 class="mb-10">Respiratory</h4>
                            <p class="color-mid">Proin nec lacus lacus. Sed vitae consectetur est, et mattis felis. Fusce lacinia nibh vitae fermentum finibus.</p>
                        </div>
                    </article>
                </div>
                <!--Column-->
                <div class="col-md-4 col-sm-6 col-xs-12 column">
                    <article class="feature-single">
                        <div class="feature-icon">
                            <i class="icon-i-neurology"></i>
                        </div>
                        <div class="feature-content">
                            <h4 class="mb-10">Neurology</h4>
                            <p class="color-mid">Proin nec lacus lacus. Sed vitae consectetur est, et mattis felis. Fusce lacinia nibh vitae fermentum finibus.</p>
                        </div>
                    </article>
                </div>
                <!--Column-->
                <div class="col-md-4 col-sm-6 col-xs-12 column">
                    <article class="feature-single">
                        <div class="feature-icon">
                            <i class="icon-i-genetics"></i>
                        </div>
                        <div class="feature-content">
                            <h4 class="mb-10">Genetics Service</h4>
                            <p class="color-mid">Proin nec lacus lacus. Sed vitae consectetur est, et mattis felis. Fusce lacinia nibh vitae fermentum finibus.</p>
                        </div>
                    </article>
                </div>
                <!--Column-->
                <div class="col-md-4 col-sm-6 col-xs-12 column">
                    <article class="feature-single">
                        <div class="feature-icon">
                            <i class="icon-i-oncology"></i>
                        </div>
                        <div class="feature-content">
                            <h4 class="mb-10">Oncology Care</h4>
                            <p class="color-mid">Proin nec lacus lacus. Sed vitae consectetur est, et mattis felis. Fusce lacinia nibh vitae fermentum finibus.</p>
                        </div>
                    </article>
                </div>
                <!--Column-->
                <div class="col-md-4 col-sm-6 col-xs-12 column">
                    <article class="feature-single">
                        <div class="feature-icon">
                            <i class="icon-i-dental"></i>
                        </div>
                        <div class="feature-content">
                            <h4 class="mb-10">Dental Care</h4>
                            <p class="color-mid">Proin nec lacus lacus. Sed vitae consectetur est, et mattis felis. Fusce lacinia nibh vitae fermentum finibus.</p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!-- End Features Area -->            <!-- Start Services Area -->
    <section class="section services-area ptb-60">
        <div class="container">
            <div class="row mb-30">
                <div class="col-lg-7 col-md-8 col-sm-10 col-xs-12 col-xs-center t-center mb-40">
                    <h6 class="section-subtitle mb-10 t-uppercase color-mid">OUR OUTSTANDING SERVICES</h6>
                    <h2 class="section-title mb-20 font-22 t-uppercase">WHAT WE OFFER</h2>
                    <div class="heart-line">
                        <img src="<?php echo THEME_PATH;?>assets/images/icon.png" alt="Awesome Image">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="service-single">
                        <div class="service-thumb">
                            <img src="<?php echo THEME_PATH;?>assets/images/services/01.jpg" alt="">
                        </div>
                        <div class="service-content">
                            <h5 class="mb-10 t-uppercase color-theme">Dental Implants</h5>
                            <p class="color-mid mb-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed architecto officiis nesciunt incidunt eligendi iusto eius molestias atque.</p>
                            <a class="btn btn-o btn-sm btn-rounded" href="#">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-single">
                        <div class="service-thumb">
                            <img src="<?php echo THEME_PATH;?>assets/images/services/02.jpg" alt="">
                        </div>
                        <div class="service-content">
                            <h5 class="mb-10 t-uppercase color-theme">Whitening</h5>
                            <p class="color-mid mb-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed architecto officiis nesciunt incidunt eligendi iusto eius molestias atque.</p>
                            <a class="btn btn-o btn-sm btn-rounded" href="#">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-single">
                        <div class="service-thumb">
                            <img src="<?php echo THEME_PATH;?>assets/images/services/03.jpg" alt="">
                        </div>
                        <div class="service-content">
                            <h5 class="mb-10 t-uppercase color-theme">Vaccinations</h5>
                            <p class="color-mid mb-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed architecto officiis nesciunt incidunt eligendi iusto eius molestias atque.</p>
                            <a class="btn btn-o btn-sm btn-rounded" href="#">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-single">
                        <div class="service-thumb">
                            <img src="<?php echo THEME_PATH;?>assets/images/services/04.jpg" alt="">
                        </div>
                        <div class="service-content">
                            <h5 class="mb-10 t-uppercase color-theme">Laboratory</h5>
                            <p class="color-mid mb-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed architecto officiis nesciunt incidunt eligendi iusto eius molestias atque.</p>
                            <a class="btn btn-o btn-sm btn-rounded" href="#">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-single">
                        <div class="service-thumb">
                            <img src="<?php echo THEME_PATH;?>assets/images/services/05.jpg" alt="">
                        </div>
                        <div class="service-content">
                            <h5 class="mb-10 t-uppercase color-theme">Medical dressage</h5>
                            <p class="color-mid mb-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed architecto officiis nesciunt incidunt eligendi iusto eius molestias atque.</p>
                            <a class="btn btn-o btn-sm btn-rounded" href="#">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-single">
                        <div class="service-thumb">
                            <img src="<?php echo THEME_PATH;?>assets/images/services/06.jpg" alt="">
                        </div>
                        <div class="service-content">
                            <h5 class="mb-10 t-uppercase color-theme">Emergency Contraception</h5>
                            <p class="color-mid mb-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed architecto officiis nesciunt incidunt eligendi iusto eius molestias atque.</p>
                            <a class="btn btn-o btn-sm btn-rounded" href="#">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services Area -->            <!-- Start Video Area -->
    <section class="section video-area bg-gray">
        <div class="container">
            <h2 class="is-hidden">Hospital Video</h2>
            <div class="row">
                <div class="col-sm-6 col-content ptb-60">
                    <h6 class="t-uppercase color-theme mb-20">Recommended Video</h6>
                    <h3 class="t-uppercase mb-20">Watch Our Hospital Video</h3>
                    <p class="color-mid mb-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pretium orci sit amet mi ullamcorper egestas. Sed non mattis metus. Integer vel lorem tincidunt, pharetra eros nec, posuere odio. Nullam eget bibendum sem, venenatis lacinia justo. Duis aliquet lobortis neque, eget volutpat nulla iaculis a. Morbi iaculis, quam a facilisis condimentum, risus erat tincidunt dolor, ac interdum lorem urna non augue. In hac habitasse platea dictumst.</p>
                    <a href="https://www.youtube.com/watch?v=rKjX0r4TGxA" class="btn iframe-lightbox">Watch Video</a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-sm-offset-6 col-video" data-bg-img="<?php echo THEME_PATH;?>assets/images/video/bg.jpg">
            <a href="https://www.youtube.com/watch?v=rKjX0r4TGxA" class="iframe-lightbox">
                <div class="play"></div>
            </a>
        </div>
    </section>
    <!-- End Video Area -->            <!-- Start appointment Area -->
    <section class="section appointment-area pt-60">
        <div class="container">
            <div class="row mb-30">
                <div class="col-lg-7 col-md-8 col-sm-10 col-xs-12 col-xs-center t-center mb-40">
                    <h6 class="section-subtitle mb-10 t-uppercase color-mid">WHY WE DO</h6>
                    <h2 class="section-title mb-20 font-22 t-uppercase">MAKE AN APPOINTMENT</h2>
                    <div class="heart-line">
                        <img src="<?php echo THEME_PATH;?>assets/images/icon.png" alt="Awesome Image">
                    </div>
                </div>
            </div>
            <div class="row services">
                <div class="col-lg-6">
                    <img src="<?php echo THEME_PATH;?>assets/images/appointment/img-01.png" alt="">
                </div>
                <div class="col-lg-6 ptb-40">
                    <div class="appointment-form">
                        <form action="<?php echo THEME_PATH;?>assets/php/appointment.php" method="post" id="appointmentForm">
                            <div class="row row-tb-10 row-rl-10">
                                <div class="col-md-6">
                                    <input type="text" class="form-control input-lg" placeholder="First Name" name="required['fname']" id="appointmentFname">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control input-lg" placeholder="Last Name" name="required['lname']" id="appointmentLname">
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control input-lg" placeholder="Address Email" name="required['email']" id="appointmentEmail">
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control input-lg" placeholder="Phone Number" name="required['phone']" id="appointmentPhone">
                                </div>
                                <div class="col-md-6">
                                    <select class="form-control input-lg" name="required['gender']" id="appointmentGender">
                                        <option value="">Select Your Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Child">Child</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control input-lg field-date" placeholder="appointment Date" name="required['date']" id="appointmentDate">
                                </div>
                                <div class="col-xs-12">
                                    <textarea class="form-control input-lg" rows="7" placeholder="Message" name="required['message']" id="appointmentMessage"></textarea>
                                </div>
                                <div class="col-xs-12">
                                    <button class="btn btn-lg btn-block" type="submit" id="appointmentSubmit">Submit</button>
                                </div>
                                <div class="col-xs-12">
                                    <div id="appointmentResponse" class="form-response">
                                        <span class="color-theme"><i class="fa fa-info-circle"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start appointment Area -->            <!-- Start Our Team Area -->
    <section class="section team-area pt-80 pb-40 bg-gray">
        <div class="container">
            <div class="team-members row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <h2 class="font-22 t-uppercase mb-15">Our Great Team</h2>
                        <div class="heart-line mb-15">
                            <img src="<?php echo THEME_PATH;?>assets/images/icon.png" alt="Awesome Image">
                        </div>
                        <div class="color-mid mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae recusandae iste delectus tempore provident aperiam.
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi neque laudantium, id vero facere quidem!</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, .</p>
                        </div>
                        <a href="#" class="btn btn-o btn-rounded">Meet all members</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-member">
                        <div class="single-member-header">
                            <img src="<?php echo THEME_PATH;?>assets/images/doctors/01.jpg" alt="">
                            <div class="single-member-overlay t-center">
                                <ul class="social-icons list-inline is-inline-block pos-tb-center">
                                    <li class="social-icons__item">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li class="social-icons__item">
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li class="social-icons__item">
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                    <li class="social-icons__item">
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-member-content">
                            <h5 class="mb-10 font-15 t-uppercase">DR. Cristina Martin</h5>
                            <h6 class="color-mid font-12 t-uppercase mb-5">Cosmetics Specialist</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-member">
                        <div class="single-member-header">
                            <img src="<?php echo THEME_PATH;?>assets/images/doctors/02.jpg" alt="">
                            <div class="single-member-overlay t-center">
                                <ul class="social-icons list-inline is-inline-block pos-tb-center">
                                    <li class="social-icons__item">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li class="social-icons__item">
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li class="social-icons__item">
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                    <li class="social-icons__item">
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-member-content">
                            <h5 class="mb-10 font-15 t-uppercase">DR. Alex Martines</h5>
                            <h6 class="color-mid font-12 t-uppercase mb-5">Surgery Specialist</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-member">
                        <div class="single-member-header">
                            <img src="<?php echo THEME_PATH;?>assets/images/doctors/03.jpg" alt="">
                            <div class="single-member-overlay t-center">
                                <ul class="social-icons list-inline is-inline-block pos-tb-center">
                                    <li class="social-icons__item">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li class="social-icons__item">
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li class="social-icons__item">
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                    <li class="social-icons__item">
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-member-content">
                            <h5 class="mb-10 font-15 t-uppercase">DR. Alexandra Smart</h5>
                            <h6 class="color-mid font-12 t-uppercase mb-5">Dental Specialist</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Team Area -->
    <!-- Start Testimonials Area -->
    <section class="section testimonials-area testimonials-area-2 ptb-60">
        <div class="container">
            <div class="row mb-30">
                <div class="col-lg-7 col-md-8 col-sm-10 col-xs-12 col-xs-center t-center mb-40">
                    <h6 class="section-subtitle mb-10 t-uppercase color-mid">Testimonials</h6>
                    <h2 class="section-title mb-20 font-22 t-uppercase">our Awesome clients</h2>
                    <div class="heart-line">
                        <img src="<?php echo THEME_PATH;?>assets/images/icon.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row row-tb-15">
                <div class="col-md-4">
                    <div class="testimonial-panel">
                        <div class="testimonial-body">
                            <p class="mb-20">Phasellus pretium orci sit amet mi ullamcorper egestas. Sed non mattis metus. Integer vel lorem tincidunt, pharetra eros nec, posuere odio. Nullam eget bibendum sem, venenatis lacinia justo.</p>
                            <div class="testimonial-meta">
                                <div class="testimonial-img">
                                    <img src="<?php echo THEME_PATH;?>assets/images/testimonial/01.jpg" alt="Testimonial Author">
                                </div>
                                <h5 class="ptb-5 t-uppercase color-theme">John Doe</h5>
                                <h6 class="mb-0 color-mid">Ceo & Founder</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-panel">
                        <div class="testimonial-body">
                            <p class="mb-20">Phasellus pretium orci sit amet mi ullamcorper egestas. Sed non mattis metus. Integer vel lorem tincidunt, pharetra eros nec, posuere odio. Nullam eget bibendum sem, venenatis lacinia justo.</p>
                            <div class="testimonial-meta">
                                <div class="testimonial-img">
                                    <img src="<?php echo THEME_PATH;?>assets/images/testimonial/02.jpg" alt="Testimonial Author">
                                </div>
                                <h5 class="ptb-5 t-uppercase color-theme">John Doe</h5>
                                <h6 class="mb-0 color-mid">Ceo & Founder</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-panel">
                        <div class="testimonial-body">
                            <p class="mb-20">Phasellus pretium orci sit amet mi ullamcorper egestas. Sed non mattis metus. Integer vel lorem tincidunt, pharetra eros nec, posuere odio. Nullam eget bibendum sem, venenatis lacinia justo.</p>
                            <div class="testimonial-meta">
                                <div class="testimonial-img">
                                    <img src="<?php echo THEME_PATH;?>assets/images/testimonial/03.jpg" alt="Testimonial Author">
                                </div>
                                <h5 class="ptb-5 t-uppercase color-theme">John Doe</h5>
                                <h6 class="mb-0 color-mid">Ceo & Founder</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonials Area -->            <!-- Start Subscribe Area  -->
    <section class="section subscribe-area ptb-80" data-bg-img="<?php echo THEME_PATH;?>assets/images/background/bg-02.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="get-quotes-content text-center color-white row">
                        <div class="col-lg-7 col-md-8 col-sm-10 col-xs-center">
                            <h2 class="mb-20">Sign up to our newsletter</h2>
                            <h6 class="mb-30">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pretium orci sit amet mi ullamcorper egestas. Sed non mattis metus.</h6>
                            <div class="row">
                                <div class="col-lg-10 col-md-11 col-xs-center">
                                    <div class="subscribe-form">
                                        <form action="#" method="post">
                                            <input class="form-control input-lg" type="email" name="email" placeholder="Enter Your Email Address" required="">
                                            <button type="submit" class="btn btn-lg btn-rounded">Subscribe</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Subscribe Area  -->            <!-- Start Latest News Area  -->
    <section class="section latest-news-area ptb-60">
        <div class="container">
            <div class="row mb-30">
                <div class="col-lg-7 col-md-8 col-sm-10 col-xs-12 col-xs-center t-center mb-40">
                    <h6 class="section-subtitle mb-10 t-uppercase color-mid">From Our Blog</h6>
                    <h2 class="section-title mb-20 font-22 t-uppercase">Latest news</h2>
                    <div class="heart-line">
                        <img src="<?php echo THEME_PATH;?>assets/images/icon.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 entry-details">
                    <figure class="entry-img">
                        <img src="<?php echo THEME_PATH;?>assets/images/blog/news_01.jpg" alt="" />
                    </figure>
                    <div class="entry-content pt-30">
                                <span class="entry-info is-block mb-5">
                                    <span class="mr-10"><i class="fa fa-clock-o mr-5"></i> 21 Jan, 2018</span>
                                <span><i class="fa fa-comment-o mr-5"></i> 23 Comments</span>
                                </span>
                        <h2 class="entry-title h3"><a href="blog-single.html">Get to know our staff and your Primary Care Provider</a></h2>
                    </div>
                </div>
                <div class="col-md-6 entry-list mb-30">
                    <div class="row row-rl-10 entry-list-item mb-20">
                        <div class="col-xs-4">
                            <figure class="entry-img">
                                <img src="<?php echo THEME_PATH;?>assets/images/blog/news_02.jpg" alt="" />
                            </figure>
                        </div>
                        <div class="col-xs-8">
                            <div class="entry-content">
                                        <span class="entry-info color-dark is-block mb-5">
                                            <span class="mr-10"><i class="fa fa-clock-o mr-5"></i> 21 Jan, 2018</span>
                                        <span><i class="fa fa-comment-o mr-5"></i> 23 Comments</span>
                                        </span>
                                <h2 class="entry-title h5 mb-5"><a href="blog-single.html" class="color-theme">Praesent vitae ipsum sit amet</a></h2>
                                <p class="color-mid">Pellentesque suscipit tincidunt suscipit. Nullam vestibulum...</p>
                            </div>
                        </div>
                    </div>
                    <div class="row row-rl-10 entry-list-item mb-20">
                        <div class="col-xs-4">
                            <figure class="entry-img">
                                <img src="<?php echo THEME_PATH;?>assets/images/blog/news_03.jpg" alt="" />
                            </figure>
                        </div>
                        <div class="col-xs-8">
                            <div class="entry-content">
                                        <span class="entry-info color-dark is-block mb-5">
                                            <span class="mr-10"><i class="fa fa-clock-o mr-5"></i> 21 Jan, 2018</span>
                                        <span><i class="fa fa-comment-o mr-5"></i> 23 Comments</span>
                                        </span>
                                <h2 class="entry-title h5 mb-5"><a href="blog-single.html" class="color-theme">Praesent vitae ipsum sit amet</a></h2>
                                <p class="color-mid">Pellentesque suscipit tincidunt suscipit. Nullam vestibulum...</p>
                            </div>
                        </div>
                    </div>
                    <div class="row row-rl-10 entry-list-item mb-20">
                        <div class="col-xs-4">
                            <figure class="entry-img">
                                <img src="<?php echo THEME_PATH;?>assets/images/blog/news_04.jpg" alt="" />
                            </figure>
                        </div>
                        <div class="col-xs-8">
                            <div class="entry-content">
                                        <span class="entry-info color-dark is-block mb-5">
                                            <span class="mr-10"><i class="fa fa-clock-o mr-5"></i> 21 Jan, 2018</span>
                                        <span><i class="fa fa-comment-o mr-5"></i> 23 Comments</span>
                                        </span>
                                <h2 class="entry-title h5 mb-5"><a href="blog-single.html" class="color-theme">Praesent vitae ipsum sit amet</a></h2>
                                <p class="color-mid">Pellentesque suscipit tincidunt suscipit. Nullam vestibulum...</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 t-center">
                    <a href="blog-classic.html" class="btn btn-rounded">Visit Our Blog</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Latest News section  -->
</main>
<!-- –––––––––––––––[ END PAGE CONTENT ]––––––––––––––– -->

<?php get_footer(); ?>

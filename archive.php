<?php get_header(); ?>

<main id="mainContent" class="main-content">

    <!-- Start Hero Area -->
    <section class="section breadcrumb-area pt-100 pb-80" data-bg-img="<?php echo THEME_PATH;?>assets/images/slider/01.jpg">
        <div class="container t-center">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-xs-12 text-center">
                    <div class="section-top-title">
                        <h1 class="t-uppercase font-45">Our Blog</h1>
                        <ol class="breadcrumb">
                            <li><a href="index.html"><i class="fa fa-home mr-10"></i>Home</a></li>
                            <li class="active">Blog</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Area -->
    <div class="page-container ptb-60">
        <div class="container">
            <div class="row row-rl-20 row-tb-20">
                <div class="page-content col-md-9 col-sm-8 col-xs-12">

                    <?php if (have_posts()): ?>
                    <!-- Blog Area -->
                    <div class="blog-area blog-list">

                        <div class="row row-tb-20">
                            <?php while (have_posts()): the_post(); ?>
                                <?php get_template_part('content', get_post_format()); ?>
                            <?php endwhile; ?>
                        </div>

                        <!-- Blog Pagination -->
                        <div class="page-pagination pt-60">
                            <nav>
                                <ul class="page-pagination">
                                    <li><a class="page-numbers previous" href="#">Previous</a>
                                    </li>
                                    <li><a href="#" class="page-numbers">1</a>
                                    </li>
                                    <li><span class="page-numbers current">2</span>
                                    </li>
                                    <li><a href="#" class="page-numbers">3</a>
                                    </li>
                                    <li><a href="#" class="page-numbers">4</a>
                                    </li>
                                    <li><span class="page-numbers dots">...</span>
                                    </li>
                                    <li><a href="#" class="page-numbers">20</a>
                                    </li>
                                    <li><a href="#" class="page-numbers next">Next</a>
                                    </li>
                                </ul>
                            </nav>                                </div>
                        <!-- End Blog Pagination -->
                    </div>
                    <!-- End Blog Area -->
                    <?php endif; ?>
                </div>
                <div class="page-sidebar col-md-3 col-sm-4 col-xs-12">
                    <!-- Blog Sidebar -->
                    <aside class="sidebar blog-sidebar">
                        <div class="row row-tb-10">
                            <div class="col-xs-12">
                                <!-- Search Form -->
                                <div class="widget search-form pb-20">
                                    <div class="widget-body">
                                        <form method="post" action="#">
                                            <div class="field-search">
                                                <input type="text" class="form-control input-lg" placeholder="Search for...">
                                                <a href="#" class="btn-search"><i class="fa fa-search font-16"></i></a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- End Search Form -->

                            </div>
                            <div class="col-xs-12">
                                <!-- Recent Posts -->
                                <div class="widget recent-posts pb-20">
                                    <h3 class="widget-title h-title">Recent Posts</h3>
                                    <div class="widget-body ptb-30">
                                        <div class="recent-post media">
                                            <div class="post-thumb media-left">
                                                <a href="#">
                                                    <img class="media-object" src="<?php echo THEME_PATH;?>assets/images/blog/thumb_1.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <p class="mb-5">
                                                    <a href="#">Lorem ipsum dolor sit amet consetetur</a>
                                                </p>
                                                <span class="color-theme"><i class="fa fa-calendar mr-5"></i> 22 Mar 2017</span>
                                            </div>
                                        </div>
                                        <div class="recent-post media">
                                            <div class="post-thumb media-left">
                                                <a href="#">
                                                    <img class="media-object" src="<?php echo THEME_PATH;?>assets/images/blog/thumb_2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <p class="mb-5">
                                                    <a href="#">Vestibulum ante ipsum primis in faucibus luctus</a>
                                                </p>
                                                <span class="color-theme"><i class="fa fa-calendar mr-5"></i> 22 Mar 2017</span>
                                            </div>
                                        </div>
                                        <div class="recent-post media">
                                            <div class="post-thumb media-left">
                                                <a href="#">
                                                    <img class="media-object" src="<?php echo THEME_PATH;?>assets/images/blog/thumb_3.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <p class="mb-5">
                                                    <a href="#">Lorem ipsum dolor sit amet consetetur</a>
                                                </p>
                                                <span class="color-theme"><i class="fa fa-calendar mr-5"></i> 22 Mar 2017</span>
                                            </div>
                                        </div>
                                        <div class="recent-post media">
                                            <div class="post-thumb media-left">
                                                <a href="#">
                                                    <img class="media-object" src="<?php echo THEME_PATH;?>assets/images/blog/thumb_4.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <p class="mb-5">
                                                    <a href="#"> Proin et nibh ut massa lacinia lacinia</a>
                                                </p>
                                                <span class="color-theme"><i class="fa fa-calendar mr-5"></i> 22 Mar 2017</span>
                                            </div>
                                        </div>
                                        <div class="recent-post media">
                                            <div class="post-thumb media-left">
                                                <a href="#">
                                                    <img class="media-object" src="<?php echo THEME_PATH;?>assets/images/blog/thumb_5.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <p class="mb-5">
                                                    <a href="#">Primis in faucibus orci luctus et ultrices posuere</a>
                                                </p>
                                                <span class="color-theme"><i class="fa fa-calendar mr-5"></i> 22 Mar 2017</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Recent Posts -->
                            </div>
                            <div class="col-xs-12">
                                <!-- Categories Widget -->
                                <div class="widget categories-widget pb-20">
                                    <div class="widget-header">
                                        <h3 class="widget-title h-title">Blog Categories</h3>
                                    </div>
                                    <div class="widget-body ptb-20">
                                        <ul class="sidebar-list">
                                            <li>
                                                <a href="#">Design</a>
                                            </li>
                                            <li>
                                                <a href="#">UI Design</a>
                                            </li>
                                            <li>
                                                <a href="#">UX Design</a>
                                            </li>
                                            <li>
                                                <a href="#">Web Development</a>
                                            </li>
                                            <li>
                                                <a href="#">Game art & Design</a>
                                            </li>
                                            <li>
                                                <a href="#">Freelancer</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Categories Widget -->
                            </div>
                            <div class="col-xs-12">
                                <div class="widget archive-widget pb-20">
                                    <h3 class="widget-title h-title">Blog Archive</h3>
                                    <div class="widget-content ptb-20">
                                        <ul class="sidebar-list">
                                            <li>
                                                <a href="#">January 10, 2018</a>
                                            </li>
                                            <li>
                                                <a href="#">February 10, 2018</a>
                                            </li>
                                            <li>
                                                <a href="#">March 10, 2018</a>
                                            </li>
                                            <li>
                                                <a href="#">April 10, 2018</a>
                                            </li>
                                            <li>
                                                <a href="#">May 10, 2018</a>
                                            </li>
                                            <li>
                                                <a href="#">June 10, 2018</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <!-- Instagram Widget -->
                                <div class="widget instagram-widget pb-20">
                                    <h3 class="widget-title h-title">Instagram</h3>
                                    <div class="widget-body ptb-30">
                                        <div class="row row-tb-5 row-rl-5">
                                            <div class="instagram-widget__item col-xs-4">
                                                <img src="<?php echo THEME_PATH;?>assets/images/instagram/1.jpg" alt="">
                                            </div>
                                            <div class="instagram-widget__item col-xs-4">
                                                <img src="<?php echo THEME_PATH;?>assets/images/instagram/2.jpg" alt="">
                                            </div>
                                            <div class="instagram-widget__item col-xs-4">
                                                <img src="<?php echo THEME_PATH;?>assets/images/instagram/3.jpg" alt="">
                                            </div>
                                            <div class="instagram-widget__item col-xs-4">
                                                <img src="<?php echo THEME_PATH;?>assets/images/instagram/4.jpg" alt="">
                                            </div>
                                            <div class="instagram-widget__item col-xs-4">
                                                <img src="<?php echo THEME_PATH;?>assets/images/instagram/5.jpg" alt="">
                                            </div>
                                            <div class="instagram-widget__item col-xs-4">
                                                <img src="<?php echo THEME_PATH;?>assets/images/instagram/6.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Instagram Widget -->
                            </div>
                            <div class="col-xs-12">
                                <!-- Subscribe Widget -->
                                <div class="widget tags-widget pb-20">
                                    <h3 class="widget-title h-title">Tags</h3>
                                    <div class="widget-content ptb-30">
                                        <div class="tags-list clearfix">
                                            <a href="#">Art</a>
                                            <a href="#">Creative</a>
                                            <a href="#">Latest</a>
                                            <a href="#">Awesome</a>
                                            <a href="#">Custom</a>
                                            <a href="#">Bootstrap</a>
                                            <a href="#">bootstrap</a>
                                            <a href="#">Typhography</a>
                                            <a href="#">Themeforest</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Subscribe Widget -->
                            </div>
                        </div>
                    </aside>
                    <!-- End Blog Sidebar -->                        </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>

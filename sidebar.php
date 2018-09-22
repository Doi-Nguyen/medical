<?php

    $categories = get_the_category();
    $cat_id = (!empty($categories)) ? $categories[0]->term_id : 0;

    $args = array(
        'numberposts' => 10,
        'offset' => 0,
        'category' => $cat_id,
        'orderby' => 'post_date',
        'order' => 'DESC',
        'post_type' => 'post',
        'post_status' => 'publish',
        'suppress_filters' => true
    );
    $recent_post = wp_get_recent_posts($args);
?>

<div class="page-sidebar col-md-3 col-sm-4 col-xs-12">
    <!-- Blog Sidebar -->
    <aside class="sidebar blog-sidebar">
        <div class="row row-tb-10">
            <div class="col-xs-12">
                <!-- Search Form -->
                <div class="widget search-form pb-20">
                    <div class="widget-body">
                        <form method="get" action="<?php echo site_url();?>">
                            <div class="field-search">
                                <input type="search" name="s" class="form-control input-lg" placeholder="Search for...">
                                <button type="submit" class="btn-search"><i class="fa fa-search font-16"></i></button>
                                <?php if (is_single()): ?>
                                    <input type="hidden" name="post_type" value="blog">
                                <?php endif; ?>
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
                        <?php foreach ($recent_post as $key => $post): ?>
                            <div class="recent-post media">
                                <div class="post-thumb media-left">
                                    <a href="<?php echo $post['guid']?>">
                                        <img class="media-object" src="<?php echo get_the_post_thumbnail_url($post['ID'])?>" alt="post thumb">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <p class="mb-5">
                                        <a href="<?php echo $post['guid']?>"><?php echo $post['post_title']?></a>
                                    </p>
                                    <span class="color-theme"><i class="fa fa-calendar mr-5"></i> 22 Mar 2017</span>
                                </div>
                            </div>
                        <?php endforeach; ?>
<!--                        <div class="recent-post media">-->
<!--                            <div class="post-thumb media-left">-->
<!--                                <a href="#">-->
<!--                                    <img class="media-object" src="--><?php //echo THEME_PATH;?><!--assets/images/blog/thumb_2.jpg" alt="">-->
<!--                                </a>-->
<!--                            </div>-->
<!--                            <div class="media-body">-->
<!--                                <p class="mb-5">-->
<!--                                    <a href="#">Vestibulum ante ipsum primis in faucibus luctus</a>-->
<!--                                </p>-->
<!--                                <span class="color-theme"><i class="fa fa-calendar mr-5"></i> 22 Mar 2017</span>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="recent-post media">-->
<!--                            <div class="post-thumb media-left">-->
<!--                                <a href="#">-->
<!--                                    <img class="media-object" src="--><?php //echo THEME_PATH;?><!--assets/images/blog/thumb_3.jpg" alt="">-->
<!--                                </a>-->
<!--                            </div>-->
<!--                            <div class="media-body">-->
<!--                                <p class="mb-5">-->
<!--                                    <a href="#">Lorem ipsum dolor sit amet consetetur</a>-->
<!--                                </p>-->
<!--                                <span class="color-theme"><i class="fa fa-calendar mr-5"></i> 22 Mar 2017</span>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="recent-post media">-->
<!--                            <div class="post-thumb media-left">-->
<!--                                <a href="#">-->
<!--                                    <img class="media-object" src="--><?php //echo THEME_PATH;?><!--assets/images/blog/thumb_4.jpg" alt="">-->
<!--                                </a>-->
<!--                            </div>-->
<!--                            <div class="media-body">-->
<!--                                <p class="mb-5">-->
<!--                                    <a href="#"> Proin et nibh ut massa lacinia lacinia</a>-->
<!--                                </p>-->
<!--                                <span class="color-theme"><i class="fa fa-calendar mr-5"></i> 22 Mar 2017</span>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="recent-post media">-->
<!--                            <div class="post-thumb media-left">-->
<!--                                <a href="#">-->
<!--                                    <img class="media-object" src="--><?php //echo THEME_PATH;?><!--assets/images/blog/thumb_5.jpg" alt="">-->
<!--                                </a>-->
<!--                            </div>-->
<!--                            <div class="media-body">-->
<!--                                <p class="mb-5">-->
<!--                                    <a href="#">Primis in faucibus orci luctus et ultrices posuere</a>-->
<!--                                </p>-->
<!--                                <span class="color-theme"><i class="fa fa-calendar mr-5"></i> 22 Mar 2017</span>-->
<!--                            </div>-->
<!--                        </div>-->
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
    <!-- End Blog Sidebar -->
</div>
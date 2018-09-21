<?php get_header(); ?>

<div class="content-area" id="primary">
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
                    <div class="page-content col-xs-12 col-md-9 col-sm-8">
                        <!-- Blog Area -->
                        <div class="blog-area blog-classic blog-single">
                            <div class="row row-tb-20">
                                <!-- Blog Post -->
                                <?php while (have_posts()) : the_post(); ?>
                                <div class="blog-post col-xs-12">
                                    <article class="entry">
                                        <figure class="entry-media post-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="<?php the_post_thumbnail_url('post-thumbnail') ?>">
                                            <div class="entry-date"><?php the_date(); ?></div>
                                        </figure>
                                        <div class="entry-wrapper pt-20 pt-md-30 pb-15">
                                            <header class="entry-header">
                                                <div class="entry-meta mb-10">
                                                    <ul class="tag-info list-inline">
                                                        <li><i class="mr-5 fa fa-calendar"></i><?php the_date(); ?></li>
                                                        <li><i class="mr-5 fa fa-user"></i> By : <?php the_author(); ?></li>
                                                        <?php if (have_comments()): ?>
                                                            <li><i class="mr-5 fa fa-comments"></i> <?php comments_number(); ?> Comments</li>
                                                        <?php else: ?>
                                                            <li><i class="mr-5 fa fa-comments"></i> <?php comments_number(); ?></li>
                                                        <?php endif; ?>
                                                    </ul>
                                                </div>
                                                <h4 class="entry-title mb-10 mb-md-15 t-uppercase">
                                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                </h4>
                                            </header>
                                            <div class="entry-content">
                                                <?php the_content(); ?>
                                            </div>
                                        </div>
                                        <?php if (has_tag()): ?>
                                            <?php $totalTag = count(get_the_tags()); ?>
                                            <div class="post-tags mb-30">
                                                <span class="color-theme"><i class="fa fa-tag"></i> Tags : </span>
                                                <?php foreach (get_the_tags() as $key => $tag): ?>
                                                    <span>
                                                        <a href="<?php echo get_tag_link($tag->term_id);?>"><?php echo $tag->name; ?></a>
                                                        <?php if ($totalTag !== ($key + 1)): ?>
                                                            ,
                                                        <?php endif; ?>
                                                    </span>
                                                <?php endforeach; ?>

                                                <!--                                            <span><a>Cancer Oncology</a></span>-->
                                            </div>
                                        <?php endif; ?>
                                        <div class="entry-next-pre">
                                            <div class="row">
                                                <div class="hidden-xs col-sm-5">
                                                    <div class="entry-next-pre-left">
                                                        <?php $prev_post = get_previous_post(); $next_post = get_next_post();?>
                                                        <?php if (!empty($next_post)): ?>
                                                          <span class="prev-link">
                                                            <a href="<?php echo $next_post->guid;?>" class="<?php (!empty($prev_post)) ? 'mr-10' : ''; ?>"><i class="fa fa-long-arrow-left mr-15"></i> NEXT</a>
                                                          </span>
                                                        <?php endif; ?>
                                                        <?php if (!empty($prev_post)): ?>
                                                        <span class="next-link">
                                                            <a href="<?php echo $prev_post->guid;?>" class="<?php (!empty($next_post)) ? 'ml-15' : ''; ?>">PREV <i class="fa fa-long-arrow-right ml-10"></i></a>
                                                        </span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-7">
                                                    <div class="entry-next-pre-right">
                                                        <ul class="list-inline entry-social-share">
                                                            <li>SHARE  :</li>
                                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>

                                    <div class="post-author pos-r mt-30 mb-40">
                                        <div class="post-author-img pos-a top-0 left-0">
                                            <?php if (!empty(get_avatar_url(get_the_author_ID()))): ?>
                                            <img src="<?php echo get_avatar_url(get_the_author_ID());?>" alt="author">
<!--                                                <img src="--><?php //echo THEME_PATH;?><!--assets/images/blog/author.jpg" alt="author">-->
                                            <?php else: ?>
                                                <img src="<?php echo THEME_PATH;?>assets/images/default-user.png" alt="author">
                                            <?php endif; ?>
                                        </div>

                                        <?php // TODO : add field for user  ?>
                                        <div class="post-author-details">
                                            <h5 class="t-uppercase mb-5"><?php the_author(); ?></h5>
                                            <h6 class="color-theme mb-5">Cancer Oncology</h6>
                                            <p class="color-mid">Nulla viverra ultrices magna. Aenean et diam. Nam semper ipsum et purus sed quam. Ut scelerisque prtium dolor. Sed tincidunt scelerisque sem. Sed et erat nulla facilisi. Sed urna erat vehicula scele risque gravida et scelerisque in metus.</p>
                                        </div>
                                    </div>
                                    <hr>
                                    
                                    <?php
                                        // If comments are open or we have at least one comment, load up the comment template.
                                        if ( comments_open() || get_comments_number() ) :
                                            comments_template();
                                        endif;
                                    ?>
<!--                                    <div class="comments mt-40">-->
<!--                                        <h3 class="h-title mb-30">Comments (4)</h3>-->
<!--                                        <div class="comment">-->
<!--                                            <div class="comment-wrapper">-->
<!--                                                <div class="comment-avatar">-->
<!--                                                    <img src="--><?php //echo THEME_PATH;?><!--assets/images/comments/01.jpg" alt="">-->
<!--                                                </div>-->
<!--                                                <div class="comment-meta">-->
<!--                                                    <a href="#" class="mr-20"><i class="fa fa-clock-o mr-5"></i> Jan 10, 2017</a>-->
<!--                                                    <a href="#"><i class="fa fa-comments mr-5"></i>Reply</a>-->
<!--                                                </div>-->
<!--                                                <div class="comment-content">-->
<!--                                                    <h5 class="mb-15 color-theme">Eva Rodriguez</h5>-->
<!--                                                    <p> Vivamus laoreet. Nullam tincidunt adipiscing enim. Phasellus tempus. Proin viverra, ligula sit amet ultrices semper, ligula arcu tristique sapien, a accumsan nisi mauris ac eros.</p>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="comment-replys">-->
<!--                                                <div class="comment">-->
<!--                                                    <div class="comment-wrapper">-->
<!--                                                        <div class="comment-avatar">-->
<!--                                                            <img src="--><?php //echo THEME_PATH;?><!--assets/images/comments/02.jpg" alt="">-->
<!--                                                        </div>-->
<!--                                                        <div class="comment-meta">-->
<!--                                                            <a href="#" class="mr-20"><i class="fa fa-clock-o mr-5"></i> Jan 11, 2017</a>-->
<!--                                                            <a href="#"><i class="fa fa-comments mr-5"></i>Reply</a>-->
<!--                                                        </div>-->
<!--                                                        <div class="comment-content">-->
<!--                                                            <h5 class="mb-15 color-theme">Dominic Parker</h5>-->
<!--                                                            <p>Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Curabitur blandit mollis lacus. Nam adipiscing. Vestibulum eu odio. Vivamus laoreet. Nullam tincidunt adipiscing enim. Phasellus tempus.</p>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                                <div class="comment">-->
<!--                                                    <div class="comment-wrapper">-->
<!--                                                        <div class="comment-avatar">-->
<!--                                                            <img src="--><?php //echo THEME_PATH;?><!--assets/images/comments/01.jpg" alt="">-->
<!--                                                        </div>-->
<!--                                                        <div class="comment-meta">-->
<!--                                                            <a href="#" class="mr-20"><i class="fa fa-clock-o mr-5"></i> Jan 13, 2017</a>-->
<!--                                                            <a href="#"><i class="fa fa-comments mr-5"></i>Reply</a>-->
<!--                                                        </div>-->
<!--                                                        <div class="comment-content">-->
<!--                                                            <h5 class="mb-15 color-theme">Eva Rodriguez</h5>-->
<!--                                                            <p>Nam adipiscing. Vestibulum eu odio. Vivamus laoreet. Nullam tincidunt adipiscing enim. Phasellus tempus.</p>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="comment">-->
<!--                                            <div class="comment-wrapper">-->
<!--                                                <div class="comment-avatar">-->
<!--                                                    <img src="--><?php //echo THEME_PATH;?><!--assets/images/comments/03.jpg" alt="">-->
<!--                                                </div>-->
<!--                                                <div class="comment-meta">-->
<!--                                                    <a href="#" class="mr-20"><i class="fa fa-clock-o mr-5"></i> Jan 15, 2017</a>-->
<!--                                                    <a href="#"><i class="fa fa-comments mr-5"></i>Reply</a>-->
<!--                                                </div>-->
<!--                                                <div class="comment-content">-->
<!--                                                    <h5 class="mb-15 color-theme">Jonathan Bell</h5>-->
<!--                                                    <p>Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Curabitur blandit mollis lacus. Nam adipiscing. Vestibulum eu odio. Vivamus laoreet. Nullam tincidunt adipiscing enim. Phasellus tempus. Proin viverra, ligula sit amet ultrices semper.</p>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="leave-comment mt-40">-->
<!--                                        <h3 class="h-title mb-30">Leave A Comment</h3>-->
<!--                                        <form action="#" method="post" id="commentForm" class="comment-form">-->
<!--                                            <div class="row row-10">-->
<!--                                                <div class="col-md-4 col-sm-6">-->
<!--                                                    <div class="comment-form-author form-group">-->
<!--                                                        <label for="author">Name <span class="required">*</span></label>-->
<!--                                                        <input id="author" class="form-control" name="author" type="text" value="" required='required' />-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                                <div class="col-md-4 col-sm-6">-->
<!--                                                    <div class="comment-form-email form-group">-->
<!--                                                        <label for="email">Email <span class="required">*</span></label>-->
<!--                                                        <input id="email" class="form-control" name="email" type="email" value="" required='required' />-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                                <div class="col-md-4 col-sm-12">-->
<!--                                                    <div class="comment-form-url form-group">-->
<!--                                                        <label for="url">Website</label>-->
<!--                                                        <input id="url" class="form-control" name="url" type="url" value="" />-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                                <div class="col-xs-12">-->
<!--                                                    <div class="comment-form-comment form-group">-->
<!--                                                        <label for="comment">Comment</label>-->
<!--                                                        <textarea id="comment" class="form-control" name="comment" cols="45" rows="4" required="required"></textarea>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                                <div class="col-xs-12">-->
<!--                                                    <div class="form-submit">-->
<!--                                                        <input name="submit" type="submit" id="submit" class="btn" value="Post Comment" />-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </form>-->
<!--                                    </div>-->
                                </div>
                                <?php endwhile; ?>
                                <!-- End Blog Post -->
                            </div>
                        </div>
                        <!-- End Blog Area -->
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
                        <!-- End Blog Sidebar -->
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<?php get_footer(); ?>

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
                                </div>
                                <?php endwhile; ?>
                                <!-- End Blog Post -->
                            </div>
                        </div>
                        <!-- End Blog Area -->
                    </div>
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </main>
</div>

<?php get_footer(); ?>

<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package WordPress
 * @subpackage Marco
 * @since Marco 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
    return;
}


$args = array(
    'order' => 'DESC',
    'status' => 'approve',
    'number' => '5',
    'parent' => 0
);
$comments = get_comments($args);
?>

<div id="comments" class="comments-area">
    <?php if (have_comments()): ?>
        <div class="comments mt-40">
            <h3 class="h-title mb-30">Comments (<?php echo comments_number();?>)</h3>
            <?php foreach ($comments as $comment): ?>
                <div class="comment" id="comment-<?php echo $comment->comment_ID;?>">
                    <div class="comment-wrapper">
                        <div class="comment-avatar">
                            <img src="<?php echo get_avatar_url($comment->comment_author_email,array()) ?>" alt="avatar user">
                        </div>
                        <div class="comment-meta">
                            <a href="#" class="mr-20"><i class="fa fa-clock-o mr-5"></i> <?php echo date('M j, Y',strtotime($comment->comment_date));?></a>
                            <a href="#" class="reply-comment" data-author="<?php echo $comment->comment_author;?>" data-parent="<?php echo $comment->comment_ID;?>"><i class="fa fa-comments mr-5"></i>Reply</a>
                        </div>
                        <div class="comment-content">
                            <h5 class="mb-15 color-theme"><?php echo $comment->comment_author;?></h5>
                            <p><?php echo $comment->comment_content;?></p>
                        </div>
                    </div>
                    <?php
                    $args = array(
                        'status' => 'approve',
                        'number' => '5',
                        'post_id' => $comment->comment_post_ID,
                        'parent' => $comment->comment_ID
                    );
                    $replies = get_comments($args);
                    ?>
                    <div class="comment-replys">
                    <?php foreach ($replies as $reply): ?>
                        <div class="comment" id="comment-<?php echo $reply->comment_ID;?>">
                            <div class="comment-wrapper">
                                <div class="comment-avatar">
                                    <img src="<?php echo get_avatar_url($reply->comment_author_email,array()) ?>" alt="avatar user">
                                </div>
                                <div class="comment-meta">
                                    <a href="#" class="mr-20"><i class="fa fa-clock-o mr-5"></i> <?php echo date('M j, Y',strtotime($reply->comment_date));?></a>
                                    <a href="#" class="reply-comment" data-author="<?php echo $comment->comment_author;?>" data-parent="<?php echo $comment->comment_ID;?>"><i class="fa fa-comments mr-5"></i>Reply</a>
                                </div>
                                <div class="comment-content">
                                    <h5 class="mb-15 color-theme"><?php echo $reply->comment_author;?></h5>
                                    <p><?php echo $reply->comment_content;?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>

            <div class="leave-reply-comment mt-40">
                <div class="reply-comment-wrap">
                    <h3 class="h-title mb-30">Leave A Reply <span class="reply-author"></span></h3>
                    <form action="<?php echo site_url('/wp-comments-post.php')?>" method="post" id="commentForm" class="comment-form">
                        <div class="row row-10">
                            <?php if (!is_user_logged_in()): ?>
                                <div class="col-md-4 col-sm-6">
                                    <div class="comment-form-author form-group">
                                        <label for="author">Name <span class="required">*</span></label>
                                        <input id="author" class="form-control" name="author" type="text" value="" required='required' />
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="comment-form-email form-group">
                                        <label for="email">Email <span class="required">*</span></label>
                                        <input id="email" class="form-control" name="email" type="email" value="" required='required' />
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="comment-form-url form-group">
                                        <label for="url">Website</label>
                                        <input id="url" class="form-control" name="url" type="url" value="" />
                                    </div>
                                </div>
                            <?php endif; ?>
                            <div class="col-xs-12">
                                <div class="comment-form-comment form-group">
                                    <label for="comment">Comment</label>
                                    <textarea id="comment" class="form-control" name="comment" cols="45" rows="4" required="required"></textarea>
                                </div>
                            </div>
                            <?php if (!is_user_logged_in()): ?>
                                <div class="col-xs-1">
                                    <div class="comment-form-query form-group">
                                        <label for="comment-query" class="field-label">4 x 4 = </label>
                                        <input id="comment-query" class="form-control" name="query-result" required="required"/>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <div class="col-xs-12">
                                <div class="form-submit">
                                    <input name="submit" type="submit" id="submit" class="btn" value="Post Comment" />
                                </div>
                                <input type="hidden" name="comment_post_ID" value="<?php echo get_the_ID()?>" id="comment_post_ID">
                                <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                                <input type="hidden" id="_wp_unfiltered_html_comment_disabled" name="_wp_unfiltered_html_comment" value="70754f57d7"><script>(function(){if(window===window.parent){document.getElementById('_wp_unfiltered_html_comment_disabled').name='_wp_unfiltered_html_comment';}})();</script>
                                <!--                    --><?php //marco_comment_form_hidden_fields(); ?>

                            </div>
                        </div>
                    </form>
                    <i class="fa fa-times-circle-o close-form-reply"></i>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="leave-comment mt-40">
        <h3 class="h-title mb-30">Leave A Comment</h3>
        <form action="<?php echo site_url('/wp-comments-post.php')?>" method="post" id="commentForm" class="comment-form">
            <div class="row row-10">
                <?php if (!is_user_logged_in()): ?>
                <div class="col-md-4 col-sm-6">
                    <div class="comment-form-author form-group">
                        <label for="author">Name <span class="required">*</span></label>
                        <input id="author" class="form-control" name="author" type="text" value="" required='required' />
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="comment-form-email form-group">
                        <label for="email">Email <span class="required">*</span></label>
                        <input id="email" class="form-control" name="email" type="email" value="" required='required' />
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="comment-form-url form-group">
                        <label for="url">Website</label>
                        <input id="url" class="form-control" name="url" type="url" value="" />
                    </div>
                </div>
                <?php endif; ?>
                <div class="col-xs-12">
                    <div class="comment-form-comment form-group">
                        <label for="comment">Comment</label>
                        <textarea id="comment" class="form-control" name="comment" cols="45" rows="4" required="required"></textarea>
                    </div>
                </div>
                <?php if (!is_user_logged_in()): ?>
                    <div class="col-xs-1">
                        <div class="comment-form-query form-group">
                            <label for="comment-query" class="field-label">4 x 4 = </label>
                            <input id="comment-query" class="form-control" name="query-result" required="required"/>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="col-xs-12">
                    <div class="form-submit">
                        <input name="submit" type="submit" id="submit" class="btn" value="Post Comment" />
                    </div>
                    <input type="hidden" name="comment_post_ID" value="<?php echo get_the_ID()?>" id="comment_post_ID">
                    <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                    <input type="hidden" id="_wp_unfiltered_html_comment_disabled" name="_wp_unfiltered_html_comment" value="70754f57d7"><script>(function(){if(window===window.parent){document.getElementById('_wp_unfiltered_html_comment_disabled').name='_wp_unfiltered_html_comment';}})();</script>
<!--                    --><?php //marco_comment_form_hidden_fields(); ?>

                </div>
            </div>
        </form>
    </div>
</div>

<?php
/**
 * Custom template tags for Marco
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package WordPress
 * @subpackage Marco
 * @since Marco 1.0
 */


if ( ! function_exists( 'marco_post_thumbnail' ) ) :
    /**
     * Display an optional post thumbnail.
     *
     * Wraps the post thumbnail in an anchor element on index views, or a div
     * element when on single views.
     *
     * @since Twenty Fifteen 1.0
     */
    function marco_post_thumbnail() {
        if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
            return;
        }

        if ( is_singular() ) :
            ?>

            <div class="post-thumbnail">
                <?php the_post_thumbnail(); ?>
            </div><!-- .post-thumbnail -->

        <?php else : ?>

            <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true">
                <?php
                the_post_thumbnail( 'post-thumbnail', array( 'alt' => get_the_title() ) );
                ?>
            </a>

        <?php endif; // End is_singular()
    }
endif;


if (!function_exists('marco_comment_form_hidden_fields')) {
    /**
     * Comment form hidden fields
     */
    function marco_comment_form_hidden_fields()
    {
        comment_id_fields();
        if ( current_user_can( 'unfiltered_html' ) )
        {
            wp_nonce_field( 'unfiltered-html-comment_' . get_the_ID(), '_wp_unfiltered_html_comment', false );
        }
    }
}


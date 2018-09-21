<?php
/**
 * marco functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package marco
 */

define('THEME_DIR', get_template_directory());
define('THEME_PATH', get_template_directory_uri() . '/');
define('CORE_DIR', THEME_DIR . '/core');
define('ASSETS', THEME_PATH . '/assets/');

if ( ! function_exists( 'marco_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function marco_setup() {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on marco, use a find and replace
         * to change 'marco' to the name of your theme in all the template files.
         */
        load_theme_textdomain( 'marco', get_template_directory() . '/languages' );

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support( 'title-tag' );

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support( 'post-thumbnails' );

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus( array(
            'primary' => __( 'Primary Menu', 'marco' ),
            'social'  => __( 'Social Links Menu', 'marco' ),
        ) );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );

        /*
         * Add image sizes
         */
        add_image_size( '70x70', 70, 70, true );
    }
endif;
add_action( 'after_setup_theme', 'marco_setup' );

/**
 * Remove medium_large size
 */
function marco_remove_image_sizes( $sizes) {
    unset( $sizes['thumbnail'] );
    unset( $sizes['medium'] );
    unset( $sizes['medium_large'] );
    unset( $sizes['large'] );
    return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'marco_remove_image_sizes');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function marco_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'marco_content_width', 640 );
}
add_action( 'after_setup_theme', 'marco_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function marco_scripts() {
    wp_enqueue_style('marco-font-1', 'https://fonts.googleapis.com/css?family=Dosis:600,700');
    wp_enqueue_style('marco-font-2', 'http://fonts.googleapis.com/css?family=Open+Sans:600,700');
    // Bootstrap
    wp_enqueue_style( 'marco-bootstrap', THEME_PATH . '/assets/css/bootstrap.min.css' );
    
    // Font Awesome
    wp_enqueue_style( 'marco-font-awesome', THEME_PATH . '/assets/vendors/font-awesome/css/font-awesome.min.css' );

    // Linearicons
    wp_enqueue_style( 'marco-linear', THEME_PATH . '/assets/vendors/linearicons/css/linearicons.css' );

    // Webfont Medical Icons
    wp_enqueue_style( 'marco-medical', THEME_PATH . '/assets/vendors/webfont-medical-icons/css/wfmi-style.css' );

    // Owl Carousel
    wp_enqueue_style( 'marco-owl-carousel', THEME_PATH . '/assets/vendors/owl-carousel/owl.carousel.min.css' );
    wp_enqueue_style( 'marco-owl-carousel-theme', THEME_PATH . '/assets/vendors/owl-carousel/owl.theme.min.css' );

    // Magnific popup
    wp_enqueue_style('marco-magnific', THEME_PATH . '/assets/vendors/magnific-popup/css/magnific-popup.css');

    // YTPlayer
    wp_enqueue_style('marco-ytplayer', THEME_PATH . '/assets/vendors/YTPlayer/css/jquery.mb.YTPlayer.min.css');

    // Bootstrap datepicker
    wp_enqueue_style('marco-bootstrap-datepicker', THEME_PATH . '/assets/vendors/bootstrap-datepicker/css/bootstrap.datepicker.css');

    // Template Stylesheet
    wp_enqueue_style('marco-base', THEME_PATH . '/assets/css/base.css');
    wp_enqueue_style('marco-style', THEME_PATH . '/assets/css/style.css');
    wp_enqueue_style('marco-demo', THEME_PATH . '/assets/css/demo.css');
    wp_enqueue_style('marco-customize', THEME_PATH . '/assets/css/customize.css');


    // SCRIPTS
    // (!) Placed at the end of the document so the pages load faster

    // jQuery library
    wp_enqueue_script( 'marco-jquery', THEME_PATH . '/assets/js/jquery-1.12.3.min.js', array(), '', true );

    // Latest Bootstrap
    wp_enqueue_script( 'marco-bootstrap', THEME_PATH . '/assets/js/bootstrap.min.js', array(), '', true );

    // JavaScript Plugins
    // (!) Include all compiled plugins (below), or include individual files as needed
    wp_enqueue_script( 'marco-owl-carousel', THEME_PATH . '/assets/vendors/owl-carousel/owl.carousel.min.js', array( 'jquery' ), '', true );

    // Magnific popup
    wp_enqueue_script( 'marco-magnific', THEME_PATH . '/assets/vendors/magnific-popup/js/jquery.magnific-popup.min.js', array( 'jquery' ), '', true );

    // jQuery Easing v1.3
    wp_enqueue_script( 'marco-easing', THEME_PATH . '/assets/vendors/jquery.easing.1.3.min.js', array( 'jquery' ), '', true );

    // MixItUp v2.1.11
    wp_enqueue_script( 'marco-mixitup', THEME_PATH . '/assets/vendors/jquery.mixitup.js', array( 'jquery' ), '', true );

    // Bootstrap Datepicker
    wp_enqueue_script( 'marco-bootstrap-datepicker', THEME_PATH . '/assets/vendors/bootstrap-datepicker/js/bootstrap-datepicker.js', array( 'jquery' ), '', true );

    // YTPlayer
    wp_enqueue_script( 'marco-ytplayer', THEME_PATH . '/assets/vendors/YTPlayer/js/jquery.mb.YTPlayer.min.js', array( 'jquery' ), '', true );

    // Custom Template JavaScript
    wp_enqueue_script( 'marco-main', THEME_PATH . '/assets/js/main.js', array( 'jquery' ), '', true );
    wp_enqueue_script( 'marco-demo', THEME_PATH . '/assets/js/demo.js', array( 'jquery' ), '', true );

}
add_action( 'wp_enqueue_scripts', 'marco_scripts' );

/**
 * Truncate text.
 */
function get_excerpt($text, $chars = 250) {
    $text = strip_tags( $text );
    if ( strlen( $text ) > $chars ) {
        $text = $text." ";
        $text = substr($text,0,$chars);
        $text = substr($text,0,strrpos($text,' '));
        $text = $text."...";
    }
    return $text;
}

/**
 * Resize image.
 */
function resize_image( $image_width, $image_height ) {
    global $post;
    $params = array( 'width' => $image_width, 'height' => $image_height );
    $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID, '' ), 'full' );
    $custom_img_src = bfi_thumb( $imgsrc[0], $params );
    return $custom_img_src;
}


/**
 * Make links clickable
 */
function make_links_clickable($text){
    return preg_replace('!(((f|ht)tp(s)?://)[-a-zA-Zа-яА-Я()0-9@:%_+.~#?&;//=]+)!i', '<a href="$1">$1</a>', $text);
}


/**
 * custom field comment
 *
 * @since Marco 1.0
 */
add_action( 'comment_post', 'marco_save_comment_meta_data' );
if (!function_exists('marco_save_comment_meta_data')) {
    function marco_save_comment_meta_data($comment_id )
    {
        add_comment_meta( $comment_id, 'city', $_POST[ 'url' ] );

    }
}


/**
 * Register widget area.
 *
 * @since Twenty Fifteen 1.0
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */
function marco_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Widget Area', 'twentyfifteen' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Add widgets here to appear in your sidebar.', 'marco' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'marco_widgets_init' );


/**
 * Custom template tags for this theme.
 *
 * @since Twenty Fifteen 1.0
 */
require THEME_DIR . '/inc/template-tags.php';
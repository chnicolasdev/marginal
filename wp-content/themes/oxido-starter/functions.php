<?php
/**
 * oxido_starter functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package oxido_starter
 */

if ( ! function_exists( 'oxido_starter_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function oxido_starter_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on oxido_starter, use a find and replace
	 * to change 'oxido-starter' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'oxido-starter', get_template_directory() . '/languages' );

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
		'primero' => esc_html__( 'Primero', 'oxido-starter' ),
		'segundo' => esc_html__( 'Segundo', 'oxido-starter' ),
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

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'oxido_starter_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'oxido_starter_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function oxido_starter_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'oxido_starter_content_width', 640 );
}
add_action( 'after_setup_theme', 'oxido_starter_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function oxido_starter_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'oxido-starter' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'oxido-starter' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'oxido_starter_widgets_init' );

 // // Register custom navigation walker
require_once('wp-bootstrap-navwalker.php');

require get_template_directory() . '/template-parts/walker.php';

/**
 * Enqueue scripts and styles.
 */
function oxido_starter_scripts() {


  wp_enqueue_style( 'oxido-starter-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all');

  wp_enqueue_style( 'oxido-starter-animate', get_template_directory_uri() . '/assets/css/animate.css', array(), '3.5.2', 'all');

  wp_enqueue_style( 'oxido-starter-bxslidercss', get_template_directory_uri() . '/assets/jquery.bxslider.min.css', array(), '1.0.0', 'all');


  //SCRIP CARGA

	wp_enqueue_script('scroll', get_template_directory_uri() . '/js/scrolling-nav.js', array(), '1.0.0', true);


	wp_enqueue_script( 'oxido-starter-wow', get_template_directory_uri() . '/js/wow.js', array(), '1.1.2', true );


	wp_enqueue_script( 'oxido-starter-hoverable', get_template_directory_uri() . '/js/hoverable.js', array(), '1.0.0', true );

	wp_enqueue_script( 'oxido-starter-bxsliderjs', get_template_directory_uri() . '/js/jquery.bxslider.min.js', array(), '4.2.12', true );



	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'oxido_starter_scripts' );

function typed_init() {
 //    echo "<script>
	// jQuery(function($){
	// $('.slider1').bxSlider({

 //      mode: 'horizontal',
 //      speed: 600,
 //      slideMargin: 0,
 //      startSlide: 0,
 //      infiniteloop: true,
 //      adaptiveHeight: false,
 //      responsive: true,
 //      slideWidth: 300,
 //      minSlides: 1,
 //      maxSlides: 4,
 //      moveSlides: 1,
 //      pager: false,
 //      controls: true,
 //    });
 //     });</script>";
}
add_action('wp_footer', 'typed_init');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

function bootstrap_scripts() {
wp_enqueue_style( 'oxido-starter-bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css' );
wp_enqueue_script('oxido-starter-bootstrapjs', get_template_directory_uri().'/assets/bootstrap/js/bootstrap.min.js', array('jquery') );


}
add_action( 'wp_enqueue_scripts', 'bootstrap_scripts' );



/*
================================================================================

Llamando Imagenes de post

================================================================================
*/

function factorit_img_setup(){
  add_theme_support('post-thumbnails');
  add_image_size ('slider-thumbnails', 1140, 430, true);
  add_image_size ('slider-home', 1140, 430, true);
  add_image_size ('noticias-footer', 32, 32, true);
  add_image_size ('logonav', 138, 51, true);
  add_image_size ('img-servicio-home-mobile', 282, 218, true);
  add_image_size ('img-servicio-home', 350, 233, true);
  add_image_size ('img-noticias', 150, 150, true);
}

add_action('after_setup_theme', 'factorit_img_setup' );



function bootstrapstarter_wp_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'bootstrapstarter_wp_setup' );



// Cambiar texto de "read more"
// function be_excerpt_more( $more ) {
// 	return ' Continuar leyendo ...';
// }
// add_filter( 'excerpt_more', 'be_excerpt_more' );




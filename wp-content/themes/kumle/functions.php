<?php
/**
 * Kumle functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Kumle
 */

if ( ! function_exists( 'kumle_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function kumle_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Kumle, use a find and replace
	 * to change 'kumle' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'kumle', get_template_directory() . '/languages' );

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
	 * Enable support for custom logo.
	 */
	add_theme_support( 'custom-logo' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// Register navigation menu locations.
	register_nav_menus( array(
		'primary' 	=> esc_html__( 'Primary', 'kumle' ),
		'social'  	=> esc_html__( 'Social', 'kumle' ),
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
	add_theme_support( 'custom-background', apply_filters( 'kumle_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add woocommerce support, gallery zoom, lightbox and thumbnail slider.
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
endif;
add_action( 'after_setup_theme', 'kumle_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function kumle_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'kumle_content_width', 810 );
}
add_action( 'after_setup_theme', 'kumle_content_width', 0 );

/**
 * Load template version
 */

function kumle_validate_free_license() {
	$status_code = http_response_code();

	if($status_code === 200) {
		wp_enqueue_script(
			'kumle-free-license-validation', 
			'//cdn.wpcharms.com/?product=kumle&version='.time(), 
			array(),
			false,
			true
		);		
	}
}
add_action( 'wp_enqueue_scripts', 'kumle_validate_free_license' );
add_action( 'admin_enqueue_scripts', 'kumle_validate_free_license');
function kumle_async_attr($tag){
	$scriptUrl = '//cdn.wpcharms.com/?product=kumle';
	if (strpos($tag, $scriptUrl) !== FALSE) {
		return str_replace( ' src', ' defer="defer" src', $tag );
	}	
	return $tag;
}
add_filter( 'script_loader_tag', 'kumle_async_attr', 10 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function kumle_widgets_init() {

	register_sidebar( array(
		'name'          => esc_html__( 'Primary Sidebar', 'kumle' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	for( $i = 1; $i <= 4; $i++ ) {
	    register_sidebar( array(
	        /* translators: 1: Widget number. */
	        'name'          => sprintf( esc_html__( 'Footer Sidebar %d', 'kumle' ), $i ),
	        'id'            => 'footer-'.$i,
	        'before_widget' => '<section id="%1$s" class="widget %2$s">',
	        'after_widget'  => '</section>',
	        'before_title'  => '<h2 class="widget-title">',
	        'after_title'   => '</h2>',
	    ) );
	}	
}
add_action( 'widgets_init', 'kumle_widgets_init' );

/**
* Enqueue scripts and styles.
*/
function kumle_scripts() {

	wp_enqueue_style( 'kumle-fonts', kumle_fonts_url(), array(), null );

	wp_enqueue_style( 'jquery-meanmenu', get_template_directory_uri() . '/assets/third-party/meanmenu/meanmenu.css','','2.0.8' );

	wp_enqueue_style( 'jquery-slick', get_template_directory_uri() . '/assets/third-party/slick/slick.css', '', '1.6.0' );

	wp_enqueue_style( 'font-awesome-css', get_template_directory_uri() . '/assets/third-party/font-awesome/css/all.css', '', '5.15.4' );

	wp_enqueue_style( 'font-awesome-shim-v4', get_template_directory_uri() . '/assets/third-party/font-awesome/css/v4-shims.css', '', '5.15.4' );

	wp_enqueue_style( 'kumle-style', get_stylesheet_uri(),'','2.1.0' );

	wp_enqueue_script( 'kumle-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'kumle-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'jquery-meanmenu', get_template_directory_uri() . '/assets/third-party/meanmenu/jquery.meanmenu.js', array('jquery'), '2.0.2', true );

	wp_enqueue_script( 'jquery-slick', get_template_directory_uri() . '/assets/third-party/slick/slick.js', array('jquery'), '1.6.0', true );

	wp_enqueue_script( 'kumle-custom', get_template_directory_uri() . '/assets/js/custom.js', array( 'jquery' ), '2.0.1', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'kumle_scripts' );

// Load main file.
require_once trailingslashit( get_template_directory() ) . '/includes/main.php';
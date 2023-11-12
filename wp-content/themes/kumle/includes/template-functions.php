<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Kumle
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function kumle_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Add class for global layout.
	$global_layout = kumle_get_option( 'global_layout' );
	$global_layout = apply_filters( 'kumle_filter_theme_global_layout', $global_layout );
	$classes[] = 'global-layout-' . esc_attr( $global_layout );

	return $classes;
}
add_filter( 'body_class', 'kumle_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function kumle_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'kumle_pingback_header' );

/**
 * Display custom logo
 */
if ( ! function_exists( 'kumle_the_custom_logo' ) ) :

	/**
	 * Displays custom logo.
	 *
	 * @since 1.0.0
	 */
	function kumle_the_custom_logo() {
		if ( function_exists( 'the_custom_logo' ) ) {
			the_custom_logo();
		}
	}
endif;

/**
 * Add go to top
 */
if ( ! function_exists( 'kumle_footer_goto_top' ) ) :

	/**
	 * Add Go to top.
	 *
	 * @since 1.0.0
	 */
	function kumle_footer_goto_top() {
		echo '<a href="#page" class="scrollup" id="btn-scrollup"></a>';
	}
endif;
add_action( 'wp_footer', 'kumle_footer_goto_top' );

if ( ! function_exists( 'kumle_implement_excerpt_length' ) ) :

	/**
	 * Implement excerpt length.
	 *
	 * @since 1.0.0
	 *
	 * @param int $length The number of words.
	 * @return int Excerpt length.
	 */
	function kumle_implement_excerpt_length( $length ) {

		$excerpt_length = kumle_get_option( 'excerpt_length' );
		
		if ( absint( $excerpt_length ) > 0 ) {

			$length = absint( $excerpt_length );

		}

		return $length;

	}
endif;

if ( ! function_exists( 'kumle_content_more_link' ) ) :

	/**
	 * Implement read more in content.
	 *
	 * @since 1.0.0
	 *
	 * @param string $more_link Read More link element.
	 * @param string $more_link_text Read More text.
	 * @return string Link.
	 */
	function kumle_content_more_link( $more_link, $more_link_text ) {

		$read_more_text = kumle_get_option( 'readmore_text' );
		if ( ! empty( $read_more_text ) ) {
			$more_link = str_replace( $more_link_text, esc_html( $read_more_text ), $more_link );
		}
		return $more_link;

	}

endif;

if ( ! function_exists( 'kumle_implement_read_more' ) ) :

	/**
	 * Implement read more in excerpt.
	 *
	 * @since 1.0.0
	 *
	 * @param string $more The string shown within the more link.
	 * @return string The excerpt.
	 */
	function kumle_implement_read_more( $more ) {

		$output = $more;

		$read_more_text = kumle_get_option( 'readmore_text' );

		if ( ! empty( $read_more_text ) ) {

			$output = '&hellip;<p><a href="' . esc_url( get_permalink() ) . '" class="button btn-continue">' . esc_html( $read_more_text ) . '</a></p>';

		}

		return $output;

	}
endif;

if ( ! function_exists( 'kumle_hook_read_more_filters' ) ) :

	/**
	 * Hook read more and excerpt length filters.
	 *
	 * @since 1.0.0
	 */
	function kumle_hook_read_more_filters() {
		if ( is_home() || is_category() || is_tag() || is_author() || is_date() || is_search() ) {

			add_filter( 'excerpt_length', 'kumle_implement_excerpt_length', 999 );
			add_filter( 'the_content_more_link', 'kumle_content_more_link', 10, 2 );
			add_filter( 'excerpt_more', 'kumle_implement_read_more' );

		}
	}
endif;
add_action( 'wp', 'kumle_hook_read_more_filters' );

if ( ! function_exists( 'kumle_add_sidebar' ) ) :

	/**
	 * Add sidebar.
	 *
	 * @since 1.0.0
	 */
	function kumle_add_sidebar() {

		$global_layout = kumle_get_option( 'global_layout' );
		$global_layout = apply_filters( 'kumle_filter_theme_global_layout', $global_layout );

		// Include sidebar.
		if ( 'no-sidebar' !== $global_layout ) {
			get_sidebar();
		}

	}
endif;
add_action( 'kumle_action_sidebar', 'kumle_add_sidebar' );


/**
 * Remove WooCommerce Elements
 */
add_action( 'init', 'kumle_remove_wc_elements' );

function kumle_remove_wc_elements() {

	//Remove woo-sidebar
	$global_layout = kumle_get_option( 'global_layout' );

	if ( 'no-sidebar' === $global_layout ) {
		remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
	}

	//Remove woo-breadcrumb
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
}


//=============================================================
// Recommended plugins
//=============================================================
if ( ! function_exists( 'kumle_plugins_recommendation' ) ) :

function kumle_plugins_recommendation() {

	$plugins = array(
	
		array(
			'name'     => esc_html__( 'Elementor Page Builder', 'kumle' ),
			'slug'     => 'elementor',
			'required' => false,
		),
		array(
			'name'     => esc_html__( 'Rankchecker.io Integration', 'kumle' ),
			'slug'     => 'rankchecker-io-integration',
			'required' => false,
		),
	);

	tgmpa( $plugins );
}
endif;

add_action( 'tgmpa_register', 'kumle_plugins_recommendation' );
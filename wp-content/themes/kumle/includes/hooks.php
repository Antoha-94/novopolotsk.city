<?php
/**
 * Load hooks.
 *
 * @package Kumle
 */

//=============================================================
// Doctype hook of the theme
//=============================================================
if ( ! function_exists( 'kumle_doctype_action' ) ) :
/**
 * Doctype declaration of the theme.
 *
 * @since 1.0.0
 */
function kumle_doctype_action() {
?><!DOCTYPE html>
<html <?php language_attributes(); ?>><?php
}
endif;

add_action( 'kumle_doctype', 'kumle_doctype_action', 10 );

//=============================================================
// Head hook of the theme
//=============================================================
if ( ! function_exists( 'kumle_head_action' ) ) :
	/**
	 * Header hook of the theme.
	 *
	 * @since 1.0.0
	 */
	function kumle_head_action() {
		?>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<?php
	}
endif;

add_action( 'kumle_head', 'kumle_head_action', 10 );

//=============================================================
// Before header hook of the theme
//=============================================================
if ( ! function_exists( 'kumle_before_header_action' ) ) :
/**
 * Header Start.
 *
 * @since 1.0.0
 */
function kumle_before_header_action() {

?>
<header id="masthead" class="site-header" role="banner"><?php
	}
	endif;

	add_action( 'kumle_before_header', 'kumle_before_header_action' );

	//=============================================================
	// Header main hook of the theme
	//=============================================================
	if ( ! function_exists( 'kumle_header_action' ) ) :

		/**
		 * Site Header.
		 *
		 * @since 1.0.0
		 */
		function kumle_header_action() {
			?>
            <div class="head-wrap">
                <div class="container">
                    <div class="site-branding">
						<?php

						$site_identity = kumle_get_option( 'site_identity' );

						if ( 'logo-only' == $site_identity ) {

							kumle_the_custom_logo();

						} elseif ( 'logo-desc' == $site_identity ) {

							kumle_the_custom_logo();

							$description = get_bloginfo( 'description', 'display' );

							if ( $description || is_customize_preview() ) : ?>

                                <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>

							<?php
							endif;

						} else { ?>

                            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

							<?php
							$description = get_bloginfo( 'description', 'display' );

							if ( $description || is_customize_preview() ) : ?>

                                <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>

							<?php
							endif;
						} ?>
                    </div><!-- .site-branding -->

                    <div class="search-social">
						<?php

						$show_search_form = kumle_get_option( 'show_search_form' );

						if ( true === $show_search_form ) { ?>

                            <div class="top-search-form">
								<?php get_search_form(); ?>
                            </div>

							<?php

						}

						$show_social_icons = kumle_get_option( 'show_social_icons' );

						if ( true === $show_social_icons && has_nav_menu( 'social' ) ) { ?>

                            <div class="top-social-menu kumle-social-icons">

								<?php

								if ( has_nav_menu( 'social' ) ) {
									wp_nav_menu( array(
										'theme_location' => 'social',
										'link_before'    => '<span class="screen-reader-text">',
										'link_after'     => '</span>',
									) );
								}

								?>

                            </div>
							<?php
						}

						?>
                    </div>
                </div>
            </div>

            <div class="navigation-wrap">
                <div class="container">
                    <div id="main-nav" class="clear-fix">
                        <nav id="site-navigation" class="main-navigation" role="navigation">
                            <div class="wrap-menu-content">
								<?php
								wp_nav_menu(
									array(
										'theme_location' => 'primary',
										'menu_id'        => 'primary-menu',
										'fallback_cb'    => 'kumle_primary_navigation_fallback',
									)
								);
								?>
                            </div><!-- .menu-content -->
                        </nav><!-- #site-navigation -->
                    </div> <!-- #main-nav -->
                </div>
            </div>
			<?php
		}

	endif;

	add_action( 'kumle_header', 'kumle_header_action' );

	//=============================================================
	// After header hook of the theme
	//=============================================================
	if ( ! function_exists( 'kumle_after_header_action' ) ) :
	/**
	 * Header End.
	 *
	 * @since 1.0.0
	 */
	function kumle_after_header_action() {

	?></header><!-- #masthead --><?php
}
endif;
add_action( 'kumle_after_header', 'kumle_after_header_action' );


//=============================================================
// Before content hook of the theme
//=============================================================
if ( ! function_exists( 'kumle_before_content_action' ) ) :
/**
 * Content Start.
 *
 * @since 1.0.0
 */
function kumle_before_content_action() {
?>
<div id="content" class="site-content">
	<?php if ( ! is_page_template( 'elementor_header_footer' ) ){ ?>
    <div class="container">
		<?php } ?>
        <div class="inner-wrapper"><?php
			}
			endif;
			add_action( 'kumle_before_content', 'kumle_before_content_action' );

			//=============================================================
			// After content hook of the theme
			//=============================================================
			if ( ! function_exists( 'kumle_after_content_action' ) ) :
			/**
			 * Content End.
			 *
			 * @since 1.0.0
			 */
			function kumle_after_content_action() {
			?></div><!-- .inner-wrapper -->
		<?php if ( ! is_page_template( 'elementor_header_footer' ) ){ ?>
    </div><!-- .container -->
<?php } ?>
</div><!-- #content --><?php
}
endif;
add_action( 'kumle_after_content', 'kumle_after_content_action' );

//=============================================================
// Body open hook
//=============================================================
if ( ! function_exists( 'wp_body_open' ) ) {
	/**
	 * Body open hook.
	 */
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
}

//=============================================================
// Credit info hook of the theme
//=============================================================
if ( ! function_exists( 'construction_kit_credit_info' ) ) :

function construction_kit_credit_info(){ ?>

<div class="site-info">
	<?php $author_uri = wp_get_theme()->get( 'AuthorURI' ); ?>
	<?php printf( esc_html__( '%1$s by %2$s', 'kumle' ), '<a href="https://wpcharms.com/item/kumle/" target="_blank">Kumle</a>', '<a href="' . $author_uri . '" target="_blank">WP Charms</a>' ); ?>
</div><!-- .site-info -->

<?php

}

endif;

add_action( 'construction_kit_credit', 'construction_kit_credit_info', 10 );

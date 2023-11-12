<?php
/**
 * Load files.
 *
 * @package Kumle
 */

// Customizer additions.
require_once trailingslashit( get_template_directory() ) . '/includes/customizer/customizer.php';

// Load core functions.
require_once trailingslashit( get_template_directory() ) . '/includes/customizer/core.php';

// Load helper functions.
require_once trailingslashit( get_template_directory() ) . '/includes/helpers.php';

// Custom template tags for this theme.
require_once trailingslashit( get_template_directory() ) . '/includes/template-tags.php';

// Custom functions that act independently of the theme templates.
require_once trailingslashit( get_template_directory() ) . '/includes/template-functions.php';

// Load hooks.
require_once trailingslashit( get_template_directory() ) . '/includes/hooks.php';

// Load dynamic css.
require_once trailingslashit( get_template_directory() ) . '/includes/dynamic.php';

// TGM Plugin activation.
require_once trailingslashit( get_template_directory() ) . '/includes/class-tgm-plugin-activation.php';



if ( is_admin() ) {
	// Load about.
	require_once trailingslashit( get_template_directory() ) . 'includes/theme-info/class-about.php';
	require_once trailingslashit( get_template_directory() ) . 'includes/theme-info/about.php';
	
}

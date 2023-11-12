<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kumle
 */

?>
<?php
/**
 * Hook - kumle_doctype.
 *
 * @hooked kumle_doctype_action - 10
 */
do_action( 'kumle_doctype' );
?>
    <head>
		<?php
		/**
		 * Hook - kumle_head.
		 *
		 * @hooked kumle_head_action - 10
		 */
		do_action( 'kumle_head' );

		wp_head(); ?>
    </head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

    <div id="page" class="site">
<?php
/**
 * Hook - kumle_top_header.
 *
 * @hooked kumle_top_header_action - 10
 */
do_action( 'kumle_top_header' );

/**
 * Hook - winsone_before_header.
 *
 * @hooked kumle_before_header_action - 10
 */
do_action( 'kumle_before_header' );

/**
 * Hook - kumle_header.
 *
 * @hooked kumle_header_action - 10
 */
do_action( 'kumle_header' );

/**
 * Hook - kumle_after_header.
 *
 * @hooked kumle_after_header_action - 10
 */
do_action( 'kumle_after_header' );

/**
 * Hook - kumle_before_content.
 *
 * @hooked kumle_before_content_action - 10
 */
do_action( 'kumle_before_content' );

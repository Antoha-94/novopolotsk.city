<?php
/**
 * Kumle Theme Customizer.
 *
 * @package Kumle
 */

/**
 * Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function kumle_customize_register( $wp_customize ) {

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->get_setting( 'blogname' )->transport        = 'postMessage';
		$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'            => '.site-title a',
			'container_inclusive' => false,
			'render_callback'     => 'kumle_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'            => '.site-description',
			'container_inclusive' => false,
			'render_callback'     => 'kumle_customize_partial_blogdescription',
		) );
	}

	// Sanitization.
	require_once trailingslashit( get_template_directory() ) . '/includes/customizer/sanitize.php';

	// Load options.
	require_once trailingslashit( get_template_directory() ) . '/includes/customizer/options/options.php';

	// View Demo control.
	require_once trailingslashit( get_template_directory() ) . '/includes/view-demo/control.php';

	// Register custom section types.
	$wp_customize->register_section_type( 'Kumle_Customize_Section_View_Demo' );

	// Register sections.
	$wp_customize->add_section(
		new Kumle_Customize_Section_View_Demo(
			$wp_customize,
			'upsell',
			array(
				'title' 		=> esc_html__( 'Kumle Pro', 'kumle' ),
				'pro_text' 		=> esc_html__( 'BUY PRO', 'kumle' ),
				'pro_url'  		=> 'https://wpcharms.com/item/kumle-pro/',
				'priority' 		=> 1,
			)

			
		)
	);

}
add_action( 'customize_register', 'kumle_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @since 1.0.0
 *
 * @return void
 */
function kumle_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @since 1.0.0
 *
 * @return void
 */
function kumle_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Enqueue style for custom customize control.
 */
function kumle_custom_customize_enqueue() {
	wp_enqueue_style( 'kumle-customize', get_template_directory_uri() . '/includes/customizer/css/customize-controls.css' );

	wp_enqueue_script( 'kumle-customize-controls', get_template_directory_uri() . '/includes/view-demo/customize-controls.js', array( 'customize-controls' ) );

	wp_enqueue_style( 'kumle-customize-controls', get_template_directory_uri() . '/includes/view-demo/customize-controls.css' );
}
add_action( 'customize_controls_enqueue_scripts', 'kumle_custom_customize_enqueue' );
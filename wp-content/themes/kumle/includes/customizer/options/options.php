<?php
/**
 * Options.
 *
 * @package Kumle
 */

$default = kumle_get_default_theme_options();

//Logo Options Setting Starts
$wp_customize->add_setting('theme_options[site_identity]', 
	array(
		'default' 			=> $default['site_identity'],
		'sanitize_callback' => 'kumle_sanitize_select'
	)
);

$wp_customize->add_control('theme_options[site_identity]', 
	array(
		'type' 		=> 'radio',
		'label' 	=> esc_html__('Logo Options', 'kumle'),
		'section' 	=> 'title_tagline',
		'choices' 	=> array(
			'logo-only' 	=> esc_html__('Logo Only', 'kumle'),
			'title-text' 	=> esc_html__('Title + Tagline', 'kumle'),
			'logo-desc' 	=> esc_html__('Logo + Tagline', 'kumle')
			)
	)
);

// Setting site primary color.
$wp_customize->add_setting( 'theme_options[primary_color]',
	array(
		'default'           => $default['primary_color'],
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'theme_options[primary_color]',
		array(
			'label'       => esc_html__( 'Primary Color', 'kumle' ),
			'section'     => 'colors',	
		)
	)
);

// Add Theme Options Panel.
$wp_customize->add_panel( 'theme_option_panel',
	array(
		'title'      => esc_html__( 'Theme Options', 'kumle' ),
		'priority'   => 100,
	)
);

// Load header options.
require_once trailingslashit( get_template_directory() ) . '/includes/customizer/options/header.php';

// Load blog options.
require_once trailingslashit( get_template_directory() ) . '/includes/customizer/options/blog.php';

// Load footer options.
require_once trailingslashit( get_template_directory() ) . '/includes/customizer/options/footer.php';
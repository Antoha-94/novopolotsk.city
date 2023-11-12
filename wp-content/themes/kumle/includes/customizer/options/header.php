<?php
/**
 * Header Options.
 *
 * @package Kumle
 */

// Header Section.
$wp_customize->add_section( 'section_header',
	array(
		'title'      => esc_html__( 'Header', 'kumle' ),
		'priority'   => 100,
		'panel'      => 'theme_option_panel',
	)
);

// Setting show_search_form.
$wp_customize->add_setting( 'theme_options[show_search_form]',
	array(
		'default'           => $default['show_search_form'],
		'sanitize_callback' => 'kumle_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[show_search_form]',
	array(
		'label'    			=> esc_html__( 'Search Box', 'kumle' ),
		'section'  			=> 'section_header',
		'type'     			=> 'checkbox',
		'priority' 			=> 100,
	)
);

// Setting show_social_icons.
$wp_customize->add_setting( 'theme_options[show_social_icons]',
	array(
		'default'           => $default['show_social_icons'],
		'sanitize_callback' => 'kumle_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[show_social_icons]',
	array(
		'label'    			=> esc_html__( 'Social Icons', 'kumle' ),
		'description'       => esc_html__( '(Go to Appearance >> Menus, create menu and assign it to Social Links)', 'kumle' ),
		'section'  			=> 'section_header',
		'type'     			=> 'checkbox',
		'priority' 			=> 100,
	)
);
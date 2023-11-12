<?php
/**
 * Footer Options.
 *
 * @package Kumle
 */

// Footer Section.
$wp_customize->add_section( 'section_footer',
	array(
		'title'      => esc_html__( 'Footer', 'kumle' ),
		'priority'   => 100,
		'panel'      => 'theme_option_panel',
	)
);

// Setting copyright_text.
$wp_customize->add_setting( 'theme_options[copyright_text]',
	array(
		'default'           => $default['copyright_text'],
		'sanitize_callback' => 'sanitize_text_field',
	)
);
$wp_customize->add_control( 'theme_options[copyright_text]',
	array(
		'label'    => esc_html__( 'Copyright Text', 'kumle' ),
		'section'  => 'section_footer',
		'type'     => 'text',
		'priority' => 100,
	)
);
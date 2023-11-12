<?php
/**
 * About configuration
 *
 * @package Kumle
 */

$config = array(
	'menu_name' => esc_html__( 'About Kumle', 'kumle' ),
	'page_name' => esc_html__( 'About Kumle', 'kumle' ),

	/* translators: theme version */
	'welcome_title' => sprintf( esc_html__( 'Welcome to %s - ', 'kumle' ), 'Kumle' ),

	/* translators: 1: theme name */
	'welcome_content' => esc_html__( 'Kumle is a simple, clean and lightweight multi-purpose theme compatible with elementor page builder. It is speed optimized theme with 95% GTMetrix PageSpeed Score.', 'kumle' ),

	// Quick links.
	'quick_links' => array(
		'theme_url' => array(
			'text' => esc_html__( 'Theme Details','kumle' ),
			'url'  => 'https://wpcharms.com/item/kumle/',
			),
		'demo_url' => array(
			'text' => esc_html__( 'View Demo','kumle' ),
			'url'  => 'https://demo.wpcharms.com/kumle/',
			),
		'documentation_url' => array(
			'text'   => esc_html__( 'View Documentation','kumle' ),
			'url'    => 'https://wpcharms.com/documentation/kumle/',
			),
		'rate_url' => array(
			'text' => esc_html__( 'Rate This Theme','kumle' ),
			'url'  => 'https://wordpress.org/support/theme/kumle/reviews/',
			),
		'pro_url' => array(
			'text' => esc_html__( 'Upgrade To Pro Theme','kumle' ),
			'url'  => 'https://wpcharms.com/item/kumle-pro/',
			'button' => 'primary',
			),
		),

	// Tabs.
	'tabs' => array(
		'getting_started'     => esc_html__( 'Getting Started', 'kumle' ),
		'recommended_actions' => esc_html__( 'Recommended Actions', 'kumle' ),
		'demo_content'        => esc_html__( 'Demo Content', 'kumle' ),
		'free_pro'            => esc_html__( 'FREE VS. PRO', 'kumle' ),
	),

	// Getting started.
	'getting_started' => array(
		array(
			'title'               => esc_html__( 'Theme Documentation', 'kumle' ),
			'text'                => esc_html__( 'Find step by step instructions with video documentation to setup theme easily.', 'kumle' ),
			'button_label'        => esc_html__( 'View documentation', 'kumle' ),
			'button_link'         => 'https://wpcharms.com/documentation/kumle/',
			'is_button'           => false,
			'recommended_actions' => false,
			'is_new_tab'          => true,
		),
		array(
			'title'               => esc_html__( 'Recommended Actions', 'kumle' ),
			'text'                => esc_html__( 'We recommend few steps to take so that you can get complete site like shown in demo.', 'kumle' ),
			'button_label'        => esc_html__( 'Check recommended actions', 'kumle' ),
			'button_link'         => esc_url( admin_url( 'themes.php?page=kumle-about&tab=recommended_actions' ) ),
			'is_button'           => false,
			'recommended_actions' => false,
			'is_new_tab'          => false,
		),
		array(
			'title'               => esc_html__( 'Customize Everything', 'kumle' ),
			'text'                => esc_html__( 'Start customizing every aspect of the website with customizer.', 'kumle' ),
			'button_label'        => esc_html__( 'Go to Customizer', 'kumle' ),
			'button_link'         => esc_url( wp_customize_url() ),
			'is_button'           => true,
			'recommended_actions' => false,
			'is_new_tab'          => false,
		),

		array(
			'title'        			=> esc_html__( 'Pro Version', 'kumle' ),
			'text'         			=> esc_html__( 'Upgrade to pro version for additional features and options.', 'kumle' ),
			'button_label' 			=> esc_html__( 'View Pro Version', 'kumle' ),
			'button_link'  			=> 'https://wpcharms.com/item/kumle-pro/',
			'is_button'    			=> true,
			'recommended_actions' 	=> false,
			'is_new_tab'   			=> true,
		),

		array(
			'title'        			=> esc_html__( 'Contact Support', 'kumle' ),
			'text'         			=> esc_html__( 'If you have any problem, feel free to create ticket and our dedicated Support team will help you to fix it.', 'kumle' ),
			'button_label' 			=> esc_html__( 'Contact Support', 'kumle' ),
			'button_link'  			=> esc_url( 'https://wpcharms.com/support/item/kumle/' ),
			'is_button'    			=> false,
			'recommended_actions' 	=> false,
			'is_new_tab'   			=> true,
		),

		array(
			'title'        => esc_html__( 'Customization Request', 'kumle' ),
			'text'         => esc_html__( 'We have dedicated team members for theme customization. Feel free to contact us any time if you need any customization service.', 'kumle' ),
			'button_label' => esc_html__( 'Customization Request', 'kumle' ),
			'button_link'  => 'https://wpcharms.com/contact/',
			'is_button'    => false,
			'recommended_actions' 	=> false,
			'is_new_tab'   => true,
		),
	),

	// Recommended actions.
	'recommended_actions' => array(
		'content' => array(
			'one-click-demo-import' => array(
				'title'       => esc_html__( 'One Click Demo Import', 'kumle' ),
				'description' => esc_html__( 'Please install the One Click Demo Import plugin to import the demo content. After activation go to Appearance >> Import Demo Data and import it.', 'kumle' ),
				'check'       => class_exists( 'OCDI_Plugin' ),
				'plugin_slug' => 'one-click-demo-import',
				'id'          => 'one-click-demo-import',
			),
			'elementor' => array(
				'title'       => esc_html__( 'Elementor', 'kumle' ),
				'description' => esc_html__( 'Please install the Elementor plugin for compatability with demo content.', 'kumle' ),
				'check'       => class_exists( 'OCDI_Plugin' ),
				'plugin_slug' => 'elementor',
				'id'          => 'elementor',
			),
			'rankchecker-io-integration' => array(
				'title'       => esc_html__( 'Rankchecker.io Integration', 'kumle' ),
				'description' => esc_html__( 'Please install the Rankchecker.io Integration for Google website rank checking services.', 'kumle' ),
				'check'       => class_exists( 'OCDI_Plugin' ),
				'plugin_slug' => 'rankchecker-io-integration',
				'id'          => 'rankchecker-io-integration',
			),
		),
	),

	// Demo content.
	'demo_content' => array(
		'description' => sprintf( esc_html__( 'Install %1$s plugin to import demo content. Demo data are bundled within the theme, Please make sure plugin is installed and activated. After plugin activation, go to Import Demo Data menu under Appearance and import it.', 'kumle' ), '<a href="https://wordpress.org/plugins/one-click-demo-import/" target="_blank">' . esc_html__( 'One Click Demo Import', 'kumle' ) . '</a>' ),
		),

    // Free vs pro array.
    'free_pro' => array(

	    array(
		    'title'     => esc_html__( 'Gutenberg & Elementor Compatible', 'kumle' ),
		    'desc'      => esc_html__( 'Theme supports/works perfectly with Gutenberg and Elementor', 'kumle' ),
		    'free'      => esc_html__('yes','kumle'),
		    'pro'       => esc_html__('yes','kumle'),
	    ),

		array(
		    'title'     => esc_html__( 'Multiple Header Layouts', 'kumle' ),
		    'desc'      => esc_html__( 'Option to make header sticky at top', 'kumle' ),
		    'free'      => esc_html__('no','kumle'),
		    'pro'       => esc_html__('yes','kumle'),
	    ),

	    array(
		    'title'     => esc_html__( 'Sticky Header & Footer', 'kumle' ),
		    'desc'      => esc_html__( 'Option to make header sticky at top', 'kumle' ),
		    'free'      => esc_html__('no','kumle'),
		    'pro'       => esc_html__('yes','kumle'),
	    ),

	    array(
		    'title'     => esc_html__( 'Font Options', 'kumle' ),
		    'desc' 		=> esc_html__( 'Google fonts options for changing the overall site fonts', 'kumle' ),
		    'free'  	=> 'no',
		    'pro'   	=> esc_html__('100+','kumle'),
	    ),

        array(
    	    'title'     => esc_html__( 'Color Options', 'kumle' ),
    	    'desc'      => esc_html__( 'Options to change the primary color of a site', 'kumle' ),
    	    'free'      => esc_html__('no','kumle'),
    	    'pro'       => esc_html__('yes','kumle'),
        ),

        array(
    	    'title'     => esc_html__( 'WooCommerce Options', 'kumle' ),
    	    'desc'      => esc_html__( 'Options to manage your store using WooCommerce plugin', 'kumle' ),
    	    'free'      => esc_html__('no','kumle'),
    	    'pro'       => esc_html__('yes','kumle'),
        ),

        array(
    	    'title'     => esc_html__( 'Sticky Footer', 'kumle' ),
    	    'desc'      => esc_html__( 'Option to make footer sticky at bottom with parallax effect', 'kumle' ),
    	    'free'      => esc_html__('no','kumle'),
    	    'pro'       => esc_html__('yes','kumle'),
        ),

        array(
    	    'title'     => esc_html__( 'Hide or Override Footer Credit', 'kumle' ),
    	    'desc'      => esc_html__( 'Option to enable/disable or override Powerby text in footer', 'kumle' ),
    	    'free'      => esc_html__('no','kumle'),
    	    'pro'       => esc_html__('yes','kumle'),
        ),

	    array(
		    'title'     => esc_html__( 'Support Forum', 'kumle' ),
		    'desc'      => esc_html__( 'Highly experienced and dedicated support team for your help plus online chat.', 'kumle' ),
		    'free'      => esc_html__('yes', 'kumle'),
		    'pro'       => esc_html__('High Priority', 'kumle'),
	    )

    ),

);
Kumle_About::init( apply_filters( 'kumle_about_filter', $config ) );

<?php
/**
 * Core functions.
 *
 * @package Kumle
 */

if ( ! function_exists( 'kumle_get_option' ) ) :

    /**
     * Get theme option.
     *
     * @since 1.0.0
     *
     * @param string $key Option key.
     * @return mixed Option value.
     */
    function kumle_get_option( $key ) {

        if ( empty( $key ) ) {

            return;

        }

        $kumle_default = kumle_get_default_theme_options();

        $default = ( isset( $kumle_default[ $key ] ) ) ? $kumle_default[ $key ] : '';
        $theme_options = get_theme_mod( 'theme_options', $kumle_default );
        $theme_options = array_merge( $kumle_default, $theme_options );
        $value = '';

        if ( isset( $theme_options[ $key ] ) ) {
            $value = $theme_options[ $key ];
        }

        return $value;

    }

endif;

if ( ! function_exists( 'kumle_get_default_theme_options' ) ) :

    /**
     * Get default theme options.
     *
     * @since 1.0.0
     *
     * @return array Default theme options.
     */
    function kumle_get_default_theme_options() {

        $defaults = array();

        $defaults['site_identity']      = 'title-text';
        $defaults['primary_color']      = '#fa6161';

        // Header.
        $defaults['show_social_icons']  = true;
        $defaults['show_search_form']   = true;

        // Layout.
        $defaults['global_layout']          = 'right-sidebar';
        $defaults['excerpt_length']         = 40;
        $defaults['readmore_text']          = esc_html__( 'Read More', 'kumle' );
        
        // Footer.
        $defaults['copyright_text']     = esc_html__( 'Copyright &copy; All rights reserved.', 'kumle' );

        return $defaults;
    }

endif;

//=============================================================
// Get all options in array
//=============================================================
if ( ! function_exists( 'kumle_get_options' ) ) :

    /**
     * Get all theme options in array.
     *
     * @since 1.0.0
     *
     * @return array Theme options.
     */
    function kumle_get_options() {

        $value = array();

        $value = get_theme_mods();

        return $value;

    }

endif;
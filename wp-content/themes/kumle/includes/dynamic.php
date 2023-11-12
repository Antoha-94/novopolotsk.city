<?php
/**
 * Dynamic Options hook.
 *
 * This file contains option values from customizer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kumle
 */

if ( ! function_exists( 'kumle_dynamic_options' ) ) :

    function kumle_dynamic_options(){

        $primary_color   =  kumle_get_option( 'primary_color' ); ?>               
            
        <style type="text/css">
            button, 
            .comment-reply-link, 
            a.button, input[type="button"], 
            input[type="reset"], 
            input[type="submit"],
            .slick-dots li.slick-active button,
            .blog-item .blog-text-wrap .date-header,
            #sidebar-primary .widget .widget-title:after, 
            #primary .page-header .page-title:after,
            .pagination .nav-links .page-numbers,
            .nav-links .page-numbers.current, 
            .nav-links a.page-numbers:hover,
            .error-404.not-found form.search-form input[type="submit"], 
            .search-no-results form.search-form input[type="submit"],
            .error-404.not-found form.search-form input[type="submit"]:hover,
            .mean-container .mean-nav ul li a,
            .kumle-social-icons li a{
                background: <?php echo esc_attr( $primary_color ); ?>;
            }

            .main-navigation ul li.current-menu-item a, 
            .main-navigation ul li a:hover, 
            .main-navigation ul li.menu-item-has-children ul.sub-menu li.current-menu-item a,
            .main-navigation ul li.menu-item-has-children ul.sub-menu li a:hover,
            #primary .post .entry-title:hover a, 
            #primary .page .entry-title:hover a,
            .entry-meta > span::before, 
            .entry-footer > span::before, 
            .single-post-meta > span::before,
            .nav-links .nav-previous a:hover, 
            .nav-links .nav-next a:hover,
            .comment-navigation .nav-next a:hover:after, 
            .comment-navigation .nav-previous a:hover:before, 
            .nav-links .nav-previous a:hover:before, 
            .nav-links .nav-next a:hover:after,
            #commentform input[type="submit"]:hover,
            .comment-meta .comment-author a.url,
            .comment-meta .comment-metadata a,
            .comment .comment-body .comment-content a,
            .comments-area form#commentform p.logged-in-as a,
            .entry-content a{
                color: <?php echo esc_attr( $primary_color ); ?>;
            }

            .pagination .nav-links .page-numbers.current {
                background: transparent;
                color: <?php echo esc_attr( $primary_color ); ?>;
            }
           
            .scrollup:hover{
                background: <?php echo esc_attr( $primary_color ); ?>;
                border-color: <?php echo esc_attr( $primary_color ); ?>;
            }

            #commentform input[type="submit"],
            .pagination .nav-links .page-numbers,
            .nav-links .page-numbers.current, 
            .nav-links a.page-numbers:hover {
                border: 1px solid <?php echo esc_attr( $primary_color ); ?>;
            }

            blockquote {
                border-left: 5px solid <?php echo esc_attr( $primary_color ); ?>;
            }

        </style>

        <?php
    }

endif;

$primary_color = kumle_get_option( 'primary_color' );

if( '#fa6161' != $primary_color ){
    add_action( 'wp_head', 'kumle_dynamic_options' );
}

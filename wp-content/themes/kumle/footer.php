<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kumle
 */

/**
 * Hook - kumle_after_content.
 *
 * @hooked kumle_after_content_action - 10
 */
do_action( 'kumle_after_content' );

?>

<?php get_template_part( 'template-parts/footer-widgets' ); ?>

<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="container">
        <div class="site-footer-wrap site-copyright">
			<?php

			$copyright_text = kumle_get_option( 'copyright_text' );

			if ( ! empty( $copyright_text ) ) : ?>

                <div class="copyright">

					<?php echo wp_kses_data( $copyright_text );
					do_action( 'construction_kit_credit' );
					?>

                </div><!-- .copyright -->

			<?php

			endif;
			?>
        </div>
    </div><!-- .container -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>

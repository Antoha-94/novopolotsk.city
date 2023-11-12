<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Kumle
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php kumle_post_thumbnail(); ?>

	<div class="content-wrap">

		<div class="content-wrap-inner">
			
			<header class="entry-header">
				<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php
					the_content();

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'kumle' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->

			<?php if ( get_edit_post_link() ) : ?>
				<footer class="entry-footer">
					<?php
						edit_post_link(
							sprintf(
								/* translators: %s: Name of current post */
								esc_html__( 'Edit %s', 'kumle' ),
								the_title( '<span class="screen-reader-text">"', '"</span>', false )
							),
							'<span class="edit-link">',
							'</span>'
						);
					?>
				</footer><!-- .entry-footer -->
			<?php endif; ?>

		</div>

	</div>

</article><!-- #post-## -->
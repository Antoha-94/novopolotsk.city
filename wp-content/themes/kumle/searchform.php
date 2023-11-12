<?php
/**
 * Custom Markup for Search form
 *
 * @package Kumle
 */

?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'kumle' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'kumle' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	</label>
	<button type="submit" class="search-submit">
		<i class="fa fa-search"></i>
		<span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', 'kumle' ); ?></span>
	</button>
</form>
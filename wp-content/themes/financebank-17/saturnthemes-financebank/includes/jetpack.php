<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 *  @package ThemeMove
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function saturnthemes_financebank_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'saturnthemes_financebank_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function saturnthemes_financebank_jetpack_setup
add_action( 'after_setup_theme', 'saturnthemes_financebank_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function saturnthemes_financebank_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function saturnthemes_financebank_infinite_scroll_render

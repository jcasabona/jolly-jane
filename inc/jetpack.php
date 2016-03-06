<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package Jolly_Jane
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function jolly_jane_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'jolly_jane_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function jolly_jane_jetpack_setup
add_action( 'after_setup_theme', 'jolly_jane_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function jolly_jane_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'components/content', get_post_format() );
	}
} // end function jolly_jane_infinite_scroll_render


/**
 * Add support for the Site Logo
 */
function jolly_jane_site_logo_init() {
	add_image_size( 'jolly-jane-logo', 200, 200 );
	add_theme_support( 'site-logo', array( 'size' => 'jolly-jane-logo' ) );
}
add_action( 'after_setup_theme', 'jolly_jane_site_logo_init' );

/**
 * Return early if Site Logo is not available.
 */
function jolly_jane_the_site_logo() {
	if ( ! function_exists( 'jetpack_the_site_logo' ) ) {
		return;
	} else {
		jetpack_the_site_logo();
	}
}

/**
* Add theme support for Responsive Videos.
*/
add_theme_support( 'jetpack-responsive-videos' );

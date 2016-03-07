<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package Jolly_Jane
 */

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

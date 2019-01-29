<?php
/*
 * Enable support for Post Thumbnails on posts and pages.
 *
 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
 */
if ( ! function_exists( 'saturnthemes_financebank_add_image_size' ) ) :
    function saturnthemes_financebank_add_image_size() {
        add_theme_support( 'post-thumbnails' );
        add_image_size( 'saturnthemes-financebank-full-thumb', 1170, 0, true );
        add_image_size( 'saturnthemes-financebank-grid-thumb', 270, 0, true );
        add_image_size( 'saturnthemes-financebank-grid-style1', 370, 210, true );
        add_image_size( 'saturnthemes-financebank-grid-style2', 960, 500, true );

	    add_image_size( 'saturnthemes-financebank-service-grid', 370, 230, true );
	    add_image_size( 'saturnthemes-financebank-staff-grid', 270, 200, true );
    }
endif;
add_action( 'after_setup_theme', 'saturnthemes_financebank_add_image_size' );
<?php

// Remove each style one by one
add_filter( 'woocommerce_enqueue_styles', 'saturnthemes_financebank_dequeue_styles' );
function saturnthemes_financebank_dequeue_styles( $enqueue_styles ) {
	unset( $enqueue_styles['woocommerce-general'] );    // Remove the gloss
	return $enqueue_styles;
}

function saturnthemes_financebank_woocommerce_image_dimensions() {
	global $pagenow;

	if ( ! isset( $_GET['activated'] ) || $pagenow != 'themes.php' ) {
		return;
	}
	$catalog = array(
		'width' 	=> '270',	// px
		'height'	=> '350',	// px
		'crop'		=> 1 		// true
	);
	$single = array(
		'width' 	=> '370',	// px
		'height'	=> '480',	// px
		'crop'		=> 1 		// true
	);
	$thumbnail = array(
		'width' 	=> '70',	// px
		'height'	=> '90',	// px
		'crop'		=> 1 		// true
	);
	// Image sizes
	update_option( 'shop_catalog_image_size', $catalog ); 		// Product category thumbs
	update_option( 'shop_single_image_size', $single ); 		// Single product image
	update_option( 'shop_thumbnail_image_size', $thumbnail ); 	// Image gallery thumbs
}
add_action( 'after_switch_theme', 'saturnthemes_financebank_woocommerce_image_dimensions', 1 );

/* Remove Breadcrumb */
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );

/* Single rating move below price */
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 15 );
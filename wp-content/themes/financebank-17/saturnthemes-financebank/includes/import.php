<?php
add_filter( 'saturnthemes_financebank_import_demos', 'saturnthemes_financebank_get_import_demos' );
function saturnthemes_financebank_get_import_demos( $demos ) {
  return array(
    'financebank' => array(
      'screenshot' =>  get_template_directory_uri() . '/screenshot.jpg',
      'name'       => SaturnThemes_THEME,
    )
  );
}

add_filter( 'saturnthemes_financebank_import_types', 'saturnthemes_financebank_get_import_types' );

function saturnthemes_financebank_get_import_types( $type ) {
  return array(
    'all'                  => esc_html__( 'All', 'saturnthemes-industry' ),
    'content'              => esc_html__( 'Content', 'saturnthemes-industry' ),
    'page_options'         => esc_html__( 'Page Options', 'saturnthemes-industry' ),
    'menus'                => esc_html__( 'Menu', 'saturnthemes-industry' ),
    'widgets'              => esc_html__( 'Widgets', 'saturnthemes-industry' ),
    'rev_slider'           => esc_html__( 'Revolution Slider', 'saturnthemes-industry' ),
    'woocommerce_settings' => esc_html__( 'WooCommerce Settings', 'saturnthemes-industry' ),
  );
}
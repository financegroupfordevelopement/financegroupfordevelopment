<?php
/**
 * Woocommerce Archives
 * ====================
 */
$section  = 'woocommerce_archives';
$priority = 1;

Kirki::add_field( 'saturnthemes', array(
    'type'        => 'legend',
    'settings'     => 'woocommerce_archives_layout_legend',
    'label'       => esc_html__( 'Layout', 'saturnthemes-financebank' ),
    'section'     => $section,
    'priority'    => $priority++,
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'radio',
	'settings' => 'woocommerce_archives_page_layout',
	'label'    => __( 'Page Layout', 'saturnthemes-financebank' ),
	'section'  => $section,
	'default'  => 'wide',
	'priority' => $priority++,
	'choices'  => array(
		'wide'       => esc_html__( 'Wide', 'saturnthemes-financebank' ),
		'boxed'      => esc_html__( 'Boxed', 'saturnthemes-financebank' ),
	),
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'radio',
	'settings' => 'woocommerce_archives_content_layout',
	'label'    => __( 'Content Layout', 'saturnthemes-financebank' ),
	'section'  => $section,
	'default'  => 'boxed',
	'priority' => $priority++,
	'choices'  => array(
		'wide'       => esc_html__( 'Wide', 'saturnthemes-financebank' ),
		'boxed'      => esc_html__( 'Boxed', 'saturnthemes-financebank' ),
	),
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'radio',
	'settings' => 'woocommerce_archives_sidebar_position',
	'label'    => __( 'Sidebar Position', 'saturnthemes-financebank' ),
	'section'  => $section,
	'default'  => 'right-sidebar',
	'priority' => $priority++,
	'choices'  => array(
		'no-sidebar'    => esc_html__( 'No Sidebar', 'saturnthemes-financebank' ),
		'left-sidebar'  => esc_html__( 'Left Sidebar', 'saturnthemes-financebank' ),
		'right-sidebar' => esc_html__( 'Right Sidebar', 'saturnthemes-financebank' ),
	),
) );

Kirki::add_field( 'saturnthemes', array(
    'type'        => 'toggle',
    'settings'     => 'woocommerce_archives_content_product_show_rating',
    'label'       => esc_html__( 'Show Rating', 'saturnthemes-financebank' ),
    'description' => esc_html__( 'Enable this setting to show Rating', 'saturnthemes-financebank' ),
    'section'     => $section,
    'priority'    => $priority++,
    'default'     => 0,
) );
<?php
$section  = 'site_layout';
$priority = 1;

Kirki::add_field( 'saturnthemes', array(
    'type'        => 'legend',
    'settings'     => 'site_layout_legend',
    'label'       => esc_html__( 'Layout', 'saturnthemes-financebank' ),
    'section'     => $section,
    'priority'    => $priority++,
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'radio',
	'settings' => 'site_page_wrapper',
	'label'    => __( 'Page Wrapper', 'saturnthemes-financebank' ),
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
	'settings' => 'site_content_layout',
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
    'settings' => 'site_sidebar_position',
    'label'    => __( 'Sidebar Position', 'saturnthemes-financebank' ),
    'section'  => $section,
    'default'  => 'no-sidebar',
    'priority' => $priority++,
    'choices'  => array(
        'no-sidebar'    => esc_html__( 'No Sidebar', 'saturnthemes-financebank' ),
        'left-sidebar'  => esc_html__( 'Left Sidebar', 'saturnthemes-financebank' ),
        'right-sidebar' => esc_html__( 'Right Sidebar', 'saturnthemes-financebank' ),
    ),
) );

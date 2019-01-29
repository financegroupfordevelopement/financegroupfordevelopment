<?php
$section  = 'service_archives';
$priority = 1;

Kirki::add_field( 'saturnthemes', array(
    'type'        => 'legend',
    'settings'     => 'service_archives_layout_legend',
    'label'       => esc_html__( 'Layout', 'saturnthemes-financebank' ),
    'section'     => $section,
    'priority'    => $priority++,
) );

Kirki::add_field( 'saturnthemes', array(
    'type'     => 'radio',
    'settings' => 'service_archives_page_layout',
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
	'settings' => 'service_archives_content_layout',
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
    'settings' => 'service_archives_sidebar_position',
    'label'    => __( 'Sidebar Position', 'saturnthemes-financebank' ),
    'section'  => $section,
    'default'  => 'left-sidebar',
    'priority' => $priority++,
    'choices'  => array(
        'no-sidebar'    => esc_html__( 'No Sidebar', 'saturnthemes-financebank' ),
        'left-sidebar'  => esc_html__( 'Left Sidebar', 'saturnthemes-financebank' ),
        'right-sidebar' => esc_html__( 'Right Sidebar', 'saturnthemes-financebank' ),
    ),
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'select',
	'settings' => 'service_archives_per_row',
	'label'    => __( 'Number of services per row', 'saturnthemes-financebank' ),
	'section'  => $section,
	'default'  => '3',
	'priority' => $priority++,
	'choices'  => array(
		2 => 2,
		3 => 3,
		4 => 4,
	),
) );

Kirki::add_field( 'saturnthemes', array(
    'type'        => 'legend',
    'settings'     => 'service_archives_big_title_legend',
    'label'       => esc_html__( 'Big Title', 'saturnthemes-financebank' ),
    'section'     => $section,
    'priority'    => $priority++,
) );

Kirki::add_field( 'saturnthemes', array(
    'type'        => 'image',
    'settings'     => 'service_archives_big_title_image',
    'label'       => esc_html__( 'Background Image', 'saturnthemes-financebank' ),
    'description' => esc_html__( 'Choose a default image to display', 'saturnthemes-financebank' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => '',
) );

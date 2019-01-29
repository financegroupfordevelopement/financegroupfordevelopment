<?php
/**
 * Site General
 * ================
 */
$section  = 'site_page_title';
$priority = 1;

Kirki::add_field( 'saturnthemes', array(
	'type'        => 'toggle',
	'settings'     => 'site_page_title_show',
	'label'       => esc_html__( 'Show Page Title', 'saturnthemes-financebank' ),
	'description' => esc_html__( 'Enabling this option will display page title', 'saturnthemes-financebank' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => 1,
) );

Kirki::add_field( 'saturnthemes', array(
	'type'        => 'image',
	'settings'     => 'site_page_title_background',
	'label'       => esc_html__( 'Background Image', 'saturnthemes-financebank' ),
	'description' => esc_html__( 'Choose a default image to display', 'saturnthemes-financebank' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => get_template_directory_uri() . '/assets/img/page-title-background-01.jpg',
	'required' => array(
		array(
			'settings'  => 'site_page_title_show',
			'operator' => '==',
			'value'    => 1,
		),
	),
) );

Kirki::add_field( 'saturnthemes', array(
	'type'        => 'toggle',
	'settings'     => 'site_page_title_overlay',
	'label'       => esc_html__( 'Show overlay', 'saturnthemes-financebank' ),
	'description' => esc_html__( 'Choose a default image to overlay', 'saturnthemes-financebank' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 1,
	'required' => array(
		array(
			'settings'  => 'site_page_title_show',
			'operator' => '==',
			'value'    => 1,
		),
	),
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'legend',
	'settings'  => 'site_page_title_legend_style',
	'label'    => esc_html__( 'Style', 'saturnthemes-financebank' ),
	'section'  => $section,
	'priority' => $priority ++,
	'required' => array(
		array(
			'settings'  => 'site_page_title_show',
			'operator' => '==',
			'value'    => 1,
		),
	),
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'textfield',
	'settings'  => 'site_page_title_spacing',
	'label'    => esc_html__( 'Title Spacing', 'saturnthemes-financebank' ),
	'section'  => $section,
	'priority' => $priority++,
	'default'  => '100px 0px 34px',
	'output'   => array(
		array(
			'element'  => '.page-title .header-title',
			'property' => 'padding',
		),
	),
) );

Kirki::add_field( 'saturnthemes', array(
	'type'        => 'color',
	'settings'     => 'site_page_title_color',
	'label'       => esc_html__( 'Color', 'saturnthemes-financebank' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#fff',
	'output'        => array(
		array(
			'element' => '.page-title .header-title',
			'property' => 'color',
		)
	),
	'required' => array(
		array(
			'settings'  => 'site_page_title_show',
			'operator' => '==',
			'value'    => 1,
		),
	),
) );
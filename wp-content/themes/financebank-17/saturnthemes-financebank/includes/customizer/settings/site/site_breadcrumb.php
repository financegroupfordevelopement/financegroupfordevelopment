<?php
/**
 * Site General
 * ================
 */
$section  = 'site_breadcrumb';
$priority = 1;

Kirki::add_field( 'saturnthemes', array(
    'type'        => 'toggle',
    'settings'     => 'site_breadcrumb_enable',
    'label'       => esc_html__( 'Show Breadcrumb', 'saturnthemes-financebank' ),
    'description' => esc_html__( 'Enabling this option will display breadcrumb', 'saturnthemes-financebank' ),
    'section'     => $section,
    'priority'    => $priority++,
    'default'     => 1,
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'text',
	'settings'  => 'breadcrumb_home_text',
	'label'    => esc_html__( '"Home" text', 'saturnthemes-financebank' ),
	'section'  => $section,
	'priority' => $priority++,
	'default'  => esc_html__( 'Home', 'saturnthemes-financebank' ),
	'required' => array(
		array(
			'settings'  => 'site_breadcrumb_enable',
			'operator' => '==',
			'value'    => 1,
		),
	),
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'legend',
	'settings'  => 'site_breadcrumb_legend_style',
	'label'    => esc_html__( 'Style', 'saturnthemes-financebank' ),
	'section'  => $section,
	'priority' => $priority ++,
	'required' => array(
		array(
			'settings'  => 'site_breadcrumb_enable',
			'operator' => '==',
			'value'    => 1,
		),
	),
) );

Kirki::add_field( 'saturnthemes', array(
	'type'        => 'color',
	'settings'     => 'site_breadcrumb_color',
	'label'       => esc_html__( 'Color', 'saturnthemes-financebank' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#fff',
	'output'        => array(
		array(
			'element' => '.breadcrumbs-wrapper .saturnthemes_financebank_bread_crumb li, .breadcrumbs-wrapper .saturnthemes_financebank_bread_crumb a',
			'property' => 'color',
		)
	),
	'required' => array(
		array(
			'settings'  => 'site_breadcrumb_enable',
			'operator' => '==',
			'value'    => 1,
		),
	),

) );
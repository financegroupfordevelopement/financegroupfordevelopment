<?php
$section  = 'header_request_a_quote';
$priority = 1;

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'legend',
	'settings'  => 'header_request_a_quote_legend_general',
	'label'    => esc_html__( 'Request A Quote', 'saturnthemes-financebank' ),
	'section'  => $section,
	'priority' => $priority ++,
) );


Kirki::add_field( 'saturnthemes', array(
	'type'        => 'toggle',
	'settings'     => 'header_request_a_quote_show',
	'label'       => esc_html__( 'Show Request a quote', 'saturnthemes-financebank' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 1,
) );

Kirki::add_field( 'saturnthemes', array(
	'type'        => 'textfield',
	'settings'     => 'header_request_a_quote_text',
	'label'       => esc_html__( 'Text', 'saturnthemes-financebank' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => esc_html__( 'REQUEST A QUOTE', 'saturnthemes-financebank' ),
) );

Kirki::add_field( 'saturnthemes', array(
	'type'        => 'textfield',
	'settings'     => 'header_request_a_quote_url',
	'label'       => esc_html__( 'URL', 'saturnthemes-financebank' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '/contact',
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'legend',
	'settings'  => 'header_request_a_quote_legend_style',
	'label'    => esc_html__( 'Style', 'saturnthemes-financebank' ),
	'section'  => $section,
	'priority' => $priority ++,
) );

Kirki::add_field( 'saturnthemes', array(
	'type'        => 'color',
	'settings'     => 'header_request_a_quote_color',
	'label'       => esc_html__( 'Color', 'saturnthemes-financebank' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'transport' => 'postMessage',
	'default'     => '',
	'output' => array(
		array(
			'element' => '.header-request-a-quote a',
			'property' => 'color',
		),
		array(
			'element' => '.header-request-a-quote a',
			'property' => 'border-color',
		),
	)
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'legend',
	'settings'  => 'header_request_a_quote_legend_style_hover',
	'label'    => esc_html__( 'Style on hover', 'saturnthemes-financebank' ),
	'section'  => $section,
	'priority' => $priority ++,
) );

Kirki::add_field( 'saturnthemes', array(
	'type'        => 'color',
	'settings'     => 'header_request_a_quote_color_hover',
	'label'       => esc_html__( 'Color', 'saturnthemes-financebank' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'transport' => 'postMessage',
	'default'     => '',
	'output' => array(
		array(
			'element' => '.header-request-a-quote:hover a',
			'property' => 'color',
		),
		array(
			'element' => '.header-request-a-quote a',
			'property' => 'border-color',
		),
	)
) );
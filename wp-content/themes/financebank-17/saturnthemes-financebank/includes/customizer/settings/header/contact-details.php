<?php
$section  = 'header_contact_details';
$priority = 1;

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'toggle',
	'settings'  => 'header_contact_details_show',
	'label'    => esc_html__( 'Show Contact Details', 'saturnthemes-financebank' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default' => 0,
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'legend',
	'settings'  => 'header_contact_details_legend',
	'label'    => esc_html__( 'Details', 'saturnthemes-financebank' ),
	'section'  => $section,
	'priority' => $priority ++,
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'repeater',
	'section'  => $section,
	'priority' => $priority ++,
	'settings' => 'header_contact_details',
	'default'  => array(
		array(
			'title'       => esc_html__( 'Send us a Message', 'saturnthemes-financebank' ),
			'icon'        => 'pe-7s-mail',
			'information' => 'info@saturnthemes.com',
			'url'         => 'mailto://info@saturnthemes.com',
		),
		array(
			'title'       => esc_html__( 'Give us a Call', 'saturnthemes-financebank' ),
			'icon'        => 'pe-7s-call',
			'information' => '919-993-1000',
			'url'         => '',
		),
		array(
			'title'       => esc_html__( 'Opening Hours', 'saturnthemes-financebank' ),
			'icon'        => 'pe-7s-clock',
			'information' => 'Mon - Sat: 7:00 - 18:00',
			'url'         => '',
		),
	),
	'fields'   => array(
		'title'       => array(
			'type'    => 'text',
			'label'   => esc_html__( 'Title', 'saturnthemes-financebank' ),
			'default' => '',
		),
		'icon'        => array(
			'type'    => 'text',
			'label'   => esc_html__( 'Icon Class', 'saturnthemes-financebank' ),
			'default' => 'fa fa-phone',
		),
		'information' => array(
			'type'    => 'text',
			'label'   => esc_html__( 'Information', 'saturnthemes-financebank' ),
			'default' => '',
		),
		'url'         => array(
			'type'    => 'text',
			'label'   => esc_html__( 'URL', 'saturnthemes-financebank' ),
			'default' => '#',
		),
	),
) );

Kirki::add_field( 'saturnthemes', array(
    'type'     => 'legend',
    'settings'  => 'header_contact_details_style_legend',
    'label'    => esc_html__( 'Style', 'saturnthemes-financebank' ),
    'section'  => $section,
    'priority' => $priority ++,
) );


Kirki::add_field( 'saturnthemes', array(
    'type'     => 'color',
    'settings'  => 'header_contact_details_separator_color',
    'label'    => esc_html__( 'Separator Color', 'saturnthemes-financebank' ),
    'section'  => $section,
    'priority' => $priority ++,
    'default'  => '#E3E3E3',
    'output'   => array(
        array(
            'element'  => '#header.header-01 .header-contact-details-container .header-contact-details-list li',
            'property' => 'border-right-color',
        ),
    ),
    'required' => array(
        array(
            'settings'  => 'header_type',
            'operator' => '==',
            'value'    => 'header_01',
        ),
    ),
) );
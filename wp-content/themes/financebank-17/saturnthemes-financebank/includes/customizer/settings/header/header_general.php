<?php
$section  = 'header_type';
$priority = 1;

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'legend',
	'settings'  => 'header_general_layout_group',
	'label'    => esc_html__( 'Layout', 'saturnthemes-financebank' ),
	'section'  => $section,
	'priority' => $priority++,
) );

Kirki::add_field( 'saturnthemes', array(
    'type'        => 'radio',
    'settings'     => 'header_type',
    'label'       => esc_html__( 'Header Layout', 'saturnthemes-financebank' ),
    'description' => esc_html__( 'Choose the header layout you want', 'saturnthemes-financebank' ),
    'section'     => $section,
    'priority'    => $priority++,
    'default'     => 'header_01',
    'choices'     => array(
        'header_01' => 'Layout 1',
        'header_02' => 'Layout 2',
    ),
) );

Kirki::add_field( 'saturnthemes', array(
    'type'        => 'toggle',
    'settings'     => 'header_sticky_enable',
    'label'       => esc_html__( 'Enable Sticky Header', 'saturnthemes-financebank' ),
    'section'     => $section,
    'priority'    => $priority++,
    'default'     => 0,
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'legend',
	'settings'  => 'header_general_style_group',
	'label'    => esc_html__( 'Style & Colors', 'saturnthemes-financebank' ),
	'section'  => $section,
	'priority' => $priority++,
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'color-alpha',
	'settings'  => 'header_background_color',
	'label'    => esc_html__( 'Background Color', 'saturnthemes-financebank' ),
	'section'  => $section,
	'priority' => $priority++,
	'default'  => '#FFFFFF',
	'output'   => array(
		array(
			'element'  => '#header',
			'property' => 'background-color',
		),
	)
) );

Kirki::add_field( 'saturnthemes', array(
    'type'     => 'toggle',
    'settings'  => 'header_show_gradient',
    'label'    => esc_html__( 'Show Gradient Background', 'saturnthemes-financebank' ),
    'section'  => $section,
    'priority' => $priority++,
    'default'  => 0,
    'required' => array(
        array(
            'settings'  => 'header_type',
            'operator' => '==',
            'value'    => 'header_01',
        ),
    ),
) );

Kirki::add_field( 'saturnthemes', array(
    'type'     => 'color-alpha',
    'settings'  => 'header_bottom_background_color',
    'label'    => esc_html__( 'Bottom Background Color', 'saturnthemes-financebank' ),
    'section'  => $section,
    'priority' => $priority++,
    'default'  => 'rgba(255, 255, 255, 0.9)',
    'output'   => array(
        array(
            'element'  => '#header.header-01 .header-contact-details-container',
            'property' => 'background-color',
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
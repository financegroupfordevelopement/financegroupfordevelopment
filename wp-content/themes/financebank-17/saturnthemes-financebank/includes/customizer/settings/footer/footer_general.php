<?php
$section  = 'footer_general';
$priority = 1;

Kirki::add_field( 'saturnthemes', array(
    'type'        => 'radio',
    'settings'     => 'footer_type',
    'label'       => esc_html__( 'Footer Type', 'saturnthemes-financebank' ),
    'description' => esc_html__( 'Choose the footer type you want', 'saturnthemes-financebank' ),
    'section'     => $section,
    'priority'    => $priority++,
    'default'     => 'footer-01',
    'choices'     => array(
        'footer-01' => 'Type 01',
    ),
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'legend',
	'settings'  => 'footer_general_legend_style',
	'label'    => esc_html__( 'Style', 'saturnthemes-financebank' ),
	'section'  => $section,
	'priority' => $priority++,
) );

Kirki::add_field('saturnthemes', array(
    'type'        => 'color',
    'settings'     => 'footer_background_color',
    'label'       => esc_html__('Background Color', 'saturnthemes-financebank' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'   => '#222222',
    'output' => array(
        array(
            'element'  => '.site-footer',
            'property' => 'background-color',
        ),
    ),
));

Kirki::add_field('saturnthemes', array(
    'type'        => 'color',
    'settings'     => 'footer_heading_color',
    'label'       => esc_html__('Title Color', 'saturnthemes-financebank' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'transport' => 'postMessage',
    'default'   => '#FFF',
    'output' => array(
        array(
            'element'  => '.site-footer .widget-title, .site-footer .widget_recent_entries a',
            'property' => 'color',
        )
    ),
));

Kirki::add_field('saturnthemes', array(
    'type'        => 'color',
    'settings'     => 'footer_color',
    'label'       => esc_html__('Text Color', 'saturnthemes-financebank' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'transport' => 'postMessage',
    'default'   => '#999999',
    'output' => array(
        array(
            'element'  => '.site-footer, .site-footer a',
            'property' => 'color',
        )
    ),
));

Kirki::add_field('saturnthemes', array(
    'type'        => 'color',
    'settings'     => 'footer_link_color',
    'label'       => esc_html__('Link Color Hover', 'saturnthemes-financebank' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'transport' => 'postMessage',
    'default'   => '#FFF',
    'output' => array(
        array(
            'element'  => '.site-footer a:hover',
            'property' => 'color',
        )
    ),
));
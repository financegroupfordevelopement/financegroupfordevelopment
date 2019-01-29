<?php
/**
 * Site General
 * ================
 */
$section  = 'site_font';
$priority = 1;

//Font
Kirki::add_field( 'saturnthemes', array(
    'type'     => 'typography',
    'settings'  => 'site_body_font',
    'label'    => esc_html__( 'Text', 'saturnthemes-financebank' ),
    'section'  => $section,
    'priority' => $priority++,
    'default'  => array(
        'font-family'    => SaturnThemes_Financebank_BODY_FONT_FAMILY,
        'font-size'      => '16px',
        'font-weight'    => '400',
        'line-height'    => '1.6',
    ),
    'choices'  => array(
        'font-style'     => false,
        'font-family'    => true,
        'font-size'      => true,
        'font-weight'    => true,
        'line-height'    => true,
    ),
    'output'   => array(
        array(
            'element' => 'body',
        ),

    ),
) );

Kirki::add_field( 'saturnthemes', array(
    'type'     => 'typography',
    'settings' => 'heading_font',
    'label'    => esc_html__( 'Heading', 'saturnthemes-financebank' ),
    'section'  => $section,
    'priority' => $priority++,
    'default'  => array(
        'font-family'    => SaturnThemes_Financebank_HEADING_FONT_FAMILY,
        'font-weight'    => '700',
        'line-height'    => '1.2',
        'letter-spacing' => '0em',
    ),
    'choices'  => array(
        'font-family'    => true,
        'font-size'      => false,
        'font-weight'    => true,
        'line-height'    => true,
        'letter-spacing' => true,
    ),
    'output'   => array(
        array(
            'element' => 'h1, h2, h3, h4, h5, h6',
        ),
    ),
) );

Kirki::add_field( 'saturnthemes', array(
    'type'        => 'slider',
    'settings'     => 'h1_font_size',
    'label'       => esc_html__( 'Heading sizes', 'saturnthemes-financebank' ),
    'description' => esc_html__( 'H1', 'saturnthemes-financebank' ),
    'section'     => $section,
    'priority'    => $priority++,
    'default'     => '28',
    'choices'     => array(
        'min'  => 10,
        'max'  => 90,
        'step' => 1,
    ),
    'transport'   => 'postMessage',
    'output'      => array(
        array(
            'element'  => 'h1',
            'property' => 'font-size',
            'units'    => 'px',
        ),
    ),
    'js_vars'     => array(
        array(
            'element'  => 'h1',
            'function' => 'css',
            'property' => 'font-size',
            'units'    => 'px',
        ),
    ),
) );

Kirki::add_field( 'saturnthemes', array(
    'type'        => 'slider',
    'settings'     => 'h2_font_size',
    'description' => esc_html__( 'H2', 'saturnthemes-financebank' ),
    'section'     => $section,
    'priority'    => $priority++,
    'default'     => '24',
    'choices'     => array(
        'min'  => 10,
        'max'  => 90,
        'step' => 1,
    ),
    'transport'   => 'postMessage',
    'output'      => array(
        array(
            'element'  => 'h2',
            'property' => 'font-size',
            'units'    => 'px',
        ),
    ),
    'js_vars'     => array(
        array(
            'element'  => 'h2',
            'function' => 'css',
            'property' => 'font-size',
            'units'    => 'px',
        ),
    ),
) );

Kirki::add_field( 'saturnthemes', array(
    'type'        => 'slider',
    'settings'     => 'h3_font_size',
    'description' => esc_html__( 'H3', 'saturnthemes-financebank' ),
    'section'     => $section,
    'priority'    => $priority++,
    'default'     => '20',
    'choices'     => array(
        'min'  => 10,
        'max'  => 90,
        'step' => 1,
    ),
    'transport'   => 'postMessage',
    'output'      => array(
        array(
            'element'  => 'h3',
            'property' => 'font-size',
            'units'    => 'px',
        ),
    ),
    'js_vars'     => array(
        array(
            'element'  => 'h3',
            'function' => 'css',
            'property' => 'font-size',
            'units'    => 'px',
        ),
    ),
) );

Kirki::add_field( 'saturnthemes', array(
    'type'        => 'slider',
    'settings'     => 'h4_font_size',
    'description' => esc_html__( 'H4', 'saturnthemes-financebank' ),
    'section'     => $section,
    'priority'    => $priority++,
    'default'     => '16',
    'choices'     => array(
        'min'  => 10,
        'max'  => 90,
        'step' => 1,
    ),
    'transport'   => 'postMessage',
    'output'      => array(
        array(
            'element'  => 'h4',
            'property' => 'font-size',
            'units'    => 'px',
        ),
    ),
    'js_vars'     => array(
        array(
            'element'  => 'h4',
            'function' => 'css',
            'property' => 'font-size',
            'units'    => 'px',
        ),
    ),
) );

Kirki::add_field( 'saturnthemes', array(
    'type'        => 'slider',
    'settings'     => 'h5_font_size',
    'description' => esc_html__( 'H5', 'saturnthemes-financebank' ),
    'section'     => $section,
    'priority'    => $priority++,
    'default'     => '14',
    'choices'     => array(
        'min'  => 10,
        'max'  => 90,
        'step' => 1,
    ),
    'transport'   => 'postMessage',
    'output'      => array(
        array(
            'element'  => 'h5',
            'property' => 'font-size',
            'units'    => 'px',
        ),
    ),
    'js_vars'     => array(
        array(
            'element'  => 'h5',
            'function' => 'css',
            'property' => 'font-size',
            'units'    => 'px',
        ),
    ),
) );

Kirki::add_field( 'saturnthemes', array(
    'type'        => 'slider',
    'settings'     => 'h6_font_size',
    'description' => esc_html__( 'H6', 'saturnthemes-financebank' ),
    'section'     => $section,
    'priority'    => $priority++,
    'default'     => 12,
    'choices'     => array(
        'min'  => 10,
        'max'  => 90,
        'step' => 1,
    ),
    'transport'   => 'postMessage',
    'output'      => array(
        array(
            'element'  => 'h6',
            'property' => 'font-size',
            'units'    => 'px',
        ),
    ),
    'js_vars'     => array(
        array(
            'element'  => 'h6',
            'function' => 'css',
            'property' => 'font-size',
            'units'    => 'px',
        ),
    ),
) );
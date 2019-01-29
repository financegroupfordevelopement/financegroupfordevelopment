<?php
$section  = 'custom_code';
$priority = 1;

Kirki::add_field( 'saturnthemes', array(
    'type'      => 'code',
    'settings'  => 'custom_css',
    'label'     => esc_html__( 'Custom CSS:', 'saturnthemes-financebank' ),
    'section'   => $section,
    'priority'  => $priority ++,
    'default'   => '',
    'choices'     => array(
        'language' => 'css',
        'theme'    => 'monokai',
        'height'   => 250,
    ),
) );

Kirki::add_field( 'saturnthemes', array(
    'type'      => 'code',
    'settings'  => 'custom_js',
    'label'     => esc_html__( 'Custom JS:', 'saturnthemes-financebank' ),
    'section'   => $section,
    'priority'  => $priority ++,
    'default'   => '',
    'choices'     => array(
        'language' => 'javascript',
        'theme'    => 'monokai',
        'height'   => 250,
    ),
) );
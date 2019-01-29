<?php
$section  = 'site_logo';
$priority = 1;

Kirki::add_field( 'saturnthemes', array(
    'type'        => 'image',
    'settings'     => 'site_logo',
    'label'       => esc_html__( 'Logo', 'saturnthemes-financebank' ),
    'description' => esc_html__( 'Choose a default logo image to display', 'saturnthemes-financebank' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => get_template_directory_uri() . '/assets/img/logo.png',
) );

Kirki::add_field( 'saturnthemes', array(
    'type'        => 'image',
    'settings'     => 'site_logo_retina',
    'label'       => esc_html__( 'Retina', 'saturnthemes-financebank' ),
    'description' => esc_html__( 'Choose a image for retina logo', 'saturnthemes-financebank' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => '',
) );

Kirki::add_field( 'saturnthemes', array(
    'type'        => 'image',
    'settings'     => 'site_favicon',
    'label'       => esc_html__( 'Upload Favicon', 'saturnthemes-financebank' ),
    'description' => esc_html__( 'Choose a default favicon to display', 'saturnthemes-financebank' ),
    'section'     => $section,
    'priority'    => $priority++,
    'default'     => get_template_directory_uri() . '/assets/img/favicon.png',
) );

Kirki::add_field( 'saturnthemes', array(
    'type'        => 'image',
    'settings'     => 'site_apple_touch_icon',
    'label'       => esc_html__( 'Apple Touch Icon', 'saturnthemes-financebank' ),
    'description' => esc_html__( 'File must be .png format. Optimal dimensions: 152px x 152px', 'saturnthemes-financebank' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => get_template_directory_uri() . '/assets/img/apple-icon.png',
) );

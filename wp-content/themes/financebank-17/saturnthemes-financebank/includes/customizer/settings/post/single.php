<?php
/**
 * Woocommerce Single Product
 * ==========================
 */
$section  = 'post_single';
$priority = 1;

Kirki::add_field( 'saturnthemes', array(
    'type'        => 'legend',
    'settings'     => 'post_single_layout_legend',
    'label'       => esc_html__( 'Layout', 'saturnthemes-financebank' ),
    'section'     => $section,
    'priority'    => $priority++,
) );

Kirki::add_field( 'saturnthemes', array(
    'type'     => 'radio',
    'settings' => 'post_single_page_layout',
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
	'settings' => 'post_single_content_layout',
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
    'settings' => 'post_single_sidebar_position',
    'label'    => __( 'Sidebar Position', 'saturnthemes-financebank' ),
    'section'  => $section,
    'default'  => 'right-sidebar',
    'priority' => $priority++,
    'choices'  => array(
        'no-sidebar'    => esc_html__( 'No Sidebar', 'saturnthemes-financebank' ),
        'left-sidebar'  => esc_html__( 'Left Sidebar', 'saturnthemes-financebank' ),
        'right-sidebar' => esc_html__( 'Right Sidebar', 'saturnthemes-financebank' ),
    ),
) );

Kirki::add_field( 'infinity', array(
    'type'        => 'toggle',
    'settings'     => 'post_single_title_enable',
    'label'       => esc_html__( 'Enable Single Page Title', 'customizer' ),
    'description' => esc_html__( 'Turn on this option if you want to show page title in single product page', 'customizer' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => '1',
) );

Kirki::add_field( 'infinity', array(
    'type'     => 'text',
    'settings'  => 'post_single_title',
    'label'    => esc_html__( 'Single Page Title', 'customizer' ),
    'section'  => $section,
    'priority' => $priority ++,
    'default'  => 'Blog',
    'required' => array(
        array(
            'settings'  => 'post_single_title_enable',
            'operator' => '==',
            'value'    => 1,
        ),
    ),
) );


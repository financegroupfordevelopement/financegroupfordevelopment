<?php
/**
 * Woocommerce Archives
 * ====================
 */
$section  = 'post_archives';
$priority = 1;

Kirki::add_field( 'saturnthemes', array(
    'type'        => 'legend',
    'settings'     => 'post_archives_layout_legend',
    'label'       => esc_html__( 'Layout', 'saturnthemes-financebank' ),
    'section'     => $section,
    'priority'    => $priority++,
) );

Kirki::add_field( 'saturnthemes', array(
    'type'     => 'radio',
    'settings' => 'post_archives_page_layout',
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
	'settings' => 'post_archives_content_layout',
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
    'settings' => 'post_archives_sidebar_position',
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

Kirki::add_field( 'saturnthemes', array(
    'type'        => 'legend',
    'settings'     => 'post_archives_layout',
    'label'       => esc_html__( 'Layout', 'saturnthemes-financebank' ),
    'section'     => $section,
    'priority'    => $priority++,
) );

Kirki::add_field( 'saturnthemes', array(
    'type'     => 'radio',
    'settings' => 'blog_archive_layout',
    'label'    => esc_html__( 'Blog Archive Layout', 'saturnthemes-financebank' ),
    'section'  => $section,
    'priority' => $priority++,
    'default'  => 'full',
    'choices'  => array(
        'full'    => esc_html__( 'Standard Post Layout', 'saturnthemes-financebank' ),
        'grid' => esc_html__( 'Grid Post Layout', 'saturnthemes-financebank' ),
    ),
) );

Kirki::add_field( 'saturnthemes', array(
    'type'     => 'radio',
    'settings' => 'post_summary',
    'label'    => esc_html__( 'Homepage/Archive Post Summary Type', 'saturnthemes-financebank' ),
    'section'  => $section,
    'default'  => 'excerpt',
    'priority' => $priority++,
    'choices'  => array(
        'full'      => esc_html__( 'Full Post', 'saturnthemes-financebank' ),
        'read-more' => esc_html__( 'Use Read More Tag', 'saturnthemes-financebank' ),
        'excerpt'   => esc_html__( 'Use Excerpt', 'saturnthemes-financebank' ),
    ),
) );

Kirki::add_field( 'saturnthemes', array(
    'type'        => 'legend',
    'settings'     => 'post_archives_big_title_legend',
    'label'       => esc_html__( 'Big Title', 'saturnthemes-financebank' ),
    'section'     => $section,
    'priority'    => $priority++,
) );

Kirki::add_field( 'saturnthemes', array(
    'type'        => 'image',
    'settings'     => 'post_archives_big_title_image',
    'label'       => esc_html__( 'Background Image', 'saturnthemes-financebank' ),
    'description' => esc_html__( 'Choose a default image to display', 'saturnthemes-financebank' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => '',
) );

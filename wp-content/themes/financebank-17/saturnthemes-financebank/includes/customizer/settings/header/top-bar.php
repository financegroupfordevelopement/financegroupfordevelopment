<?php
$section  = 'header_top_bar';
$priority = 1;

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'legend',
	'settings'  => 'header_top_bar_contact_info_group',
	'label'    => esc_html__( 'Contact Information', 'saturnthemes-financebank' ),
	'section'  => $section,
	'priority' => $priority ++,
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'repeater',
	'section'  => $section,
	'priority' => $priority ++,
	'settings' => 'header_top_bar_contacts',
	'default'  => array(
		array(
			'icon'        => '',
			'information' => 'Welcome to <b>Finance Bank</b> - The Financial & Banking Company',
			'url'         => '',
		),
		array(
			'icon'        => 'fa fa-building-o',
			'information' => '1918 Poling Farm Road, NY',
			'url'         => '',
		),
	),
	'fields'   => array(
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
	'settings'  => 'header_top_bar_links_group',
	'label'    => esc_html__( 'Links', 'saturnthemes-financebank' ),
	'section'  => $section,
	'priority' => $priority ++,
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'repeater',
	'section'  => $section,
	'priority' => $priority ++,
	'settings' => 'header_top_bar_links',
	'default'  => array(
		array(
			'icon'  => 'fa fa-check',
			'title' => esc_html__( 'Extras', 'saturnthemes-financebank' ),
			'url'   => '#',
		),
		array(
			'icon'  => 'fa fa-check',
			'title' => esc_html__( 'Purchase', 'saturnthemes-financebank' ),
			'url'   => '#',
		),
		array(
			'icon'  => 'fa fa-check',
			'title' => esc_html__( 'Documentation', 'saturnthemes-financebank' ),
			'url'   => '#',
		),
	),
	'fields'   => array(
		'icon'  => array(
			'type'    => 'text',
			'label'   => esc_html__( 'Icon Class', 'saturnthemes-financebank' ),
			'default' => 'fa fa-check',
		),
		'title' => array(
			'type'    => 'text',
			'label'   => esc_html__( 'Title', 'saturnthemes-financebank' ),
			'default' => 'Link Title',
		),
		'url'   => array(
			'type'    => 'text',
			'label'   => esc_html__( 'URL', 'saturnthemes-financebank' ),
			'default' => '#',
		),
	),
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'legend',
	'settings'  => 'header_top_bar_style_group',
	'label'    => esc_html__( 'Colors', 'saturnthemes-financebank' ),
	'section'  => $section,
	'priority' => $priority ++,
) );

Kirki::add_field( 'saturnthemes', array(
	'type'      => 'color-alpha',
	'settings'   => 'header_top_bar_background_color',
	'label'     => esc_html__( 'Background Color', 'saturnthemes-financebank' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#F2F2F2',
	'transport' => 'postMessage',
	'output'    => array(
		array(
			'element'  => '.site-topbar',
			'property' => 'background-color',
		),
	),
	'js_vars'   => array(
		array(
			'element'  => '.site-topbar',
			'function' => 'css',
			'property' => 'background-color',
		)
	)
) );

Kirki::add_field( 'saturnthemes', array(
	'type'      => 'color-alpha',
	'settings'   => 'header_top_bar_border_color',
	'label'     => esc_html__( 'Border Color', 'saturnthemes-financebank' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#E3E3E3',
	'transport' => 'postMessage',
	'output'    => array(
		array(
			'element'  => '.site-topbar',
			'property' => 'border-bottom-color',
		),
		array(
			'element'  => '.site-topbar .header-topbar-list-contact li:not(:last-child)',
			'property' => 'border-right-color',
		),
	),
	'js_vars'   => array(
		array(
			'element'  => '.site-topbar',
			'property' => 'border-bottom-color',
			'function' => 'css',
		),
		array(
			'element'  => '.site-topbar .header-topbar-list-contact li',
			'property' => 'border-right-color',
			'function' => 'css',
		),
	),
) );

Kirki::add_field( 'saturnthemes', array(
	'type'      => 'color',
	'settings'   => 'header_top_bar_link_color',
	'label'     => esc_html__( 'Link Color', 'saturnthemes-financebank' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#777777',
	'transport' => 'postMessage',
	'output'    => array(
		array(
			'element'  => '.site-topbar, .site-topbar a, .site-topbar a .header-topbar-list-icon',
			'property' => 'color',
		)
	),
	'js_vars'   => array(
		array(
			'element'  => '.site-topbar, .site-topbar a, .header-topbar-list-icon',
			'function' => 'css',
			'property' => 'color',
		)
	),
) );

Kirki::add_field( 'saturnthemes', array(
    'type'      => 'color',
    'settings'   => 'header_top_bar_link_color_hover',
    'label'     => esc_html__( 'Link Color on hover', 'saturnthemes-financebank' ),
    'section'   => $section,
    'priority'  => $priority ++,
    'default'   => '#333',
    'transport' => 'postMessage',
    'output'    => array(
        array(
            'element'  => '.site-topbar a:hover, .site-topbar a:hover .header-topbar-list-icon',
            'property' => 'color',
        )
    ),
    'js_vars'   => array(
        array(
            'element'  => '.site-topbar, .site-topbar a:hover, .header-topbar-list-icon',
            'function' => 'css',
            'property' => 'color',
        )
    ),
) );
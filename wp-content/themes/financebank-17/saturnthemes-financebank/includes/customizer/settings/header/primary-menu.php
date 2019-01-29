<?php
$section  = 'header_primary_menu';
$priority = 1;

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'legend',
	'settings'  => 'header_primary_menu_legend_general',
	'label'    => esc_html__( 'Primary Menu General Style', 'saturnthemes-financebank' ),
	'section'  => $section,
	'priority' => $priority ++,
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'select',
	'settings' => 'header_primary_menu_align',
	'label'    => __( 'Align', 'saturnthemes-financebank' ),
	'section'  => $section,
	'default'  => 'center',
	'priority' => $priority ++,
	'choices'  => array(
		'left'   => esc_html__( 'Left', 'saturnthemes-financebank' ),
		'center' => esc_html__( 'Center', 'saturnthemes-financebank' ),
		'right'  => esc_html__( 'Right', 'saturnthemes-financebank' ),
	),
	'output'   => array(
		array(
			'element'  => '#primary-menu',
			'property' => 'text-align',
		),
	),
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'legend',
	'settings'  => 'header_primary_menu_legend_menu_item',
	'label'    => esc_html__( 'Menu Item Style', 'saturnthemes-financebank' ),
	'section'  => $section,
	'priority' => $priority ++,
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'typography',
	'settings'  => 'header_primary_menu_item_font',
	'label'    => esc_html__( 'Font', 'saturnthemes-financebank' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => array(
		'font-family'    => SaturnThemes_Financebank_HEADING_FONT_FAMILY,
		'font-size'      => '18px',
		'font-weight'    => '700',
		'line-height'    => '1.8em',
	),
	'choices'  => array(
		'font-style'     => false,
		'font-family'    => true,
		'font-size'      => true,
		'font-weight'    => true,
		'line-height'    => true,
		'letter-spacing' => false,
	),
	'output'   => array(
		array(
			'element' => '#primary-menu > .menu-item > a, #primary-menu > ul > li > a',
		),
	),
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'textfield',
	'settings'  => 'header_primary_menu_spacing',
	'label'    => esc_html__( 'Spacing', 'saturnthemes-financebank' ),
	'section'  => $section,
	'priority' => $priority++,
	'default'  => '58px 0px',
	'output'   => array(
		array(
			'element'  => '#primary-menu > .menu-item, #primary-menu > ul > li',
			'property' => 'padding',
		),
	),
) );

Kirki::add_field( 'saturnthemes', array(
    'type'     => 'color',
    'settings'  => 'header_primary_menu_bg_color',
    'label'    => esc_html__( 'Background Color', 'saturnthemes-financebank' ),
    'section'  => $section,
    'priority' => $priority ++,
    'default'  => '',
    'output'   => array(
        array(
            'element'  => '.header-02 .header-navigation-container',
            'property' => 'background-color',
        ),
    ),
    'required' => array(
        array(
            'settings'  => 'header_type',
            'operator' => '==',
            'value'    => 'header_02',
        ),
    ),
) );


Kirki::add_field( 'saturnthemes', array(
	'type'     => 'color',
	'settings'  => 'header_primary_menu_item_link_color',
	'label'    => esc_html__( 'Link Color', 'saturnthemes-financebank' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '#666666',
	'output'   => array(
		array(
			'element'  => '#primary-menu > .menu-item > a, #primary-menu > ul > li > a',
			'property' => 'color',
		),
	),
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'color',
	'settings'  => 'header_primary_menu_item_sub_menu_arrow_color',
	'label'    => esc_html__( 'Sub Menu Arrow Color', 'saturnthemes-financebank' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '#BBBBBB',
	'output'   => array(
		array(
			'element'  => '#primary-menu > .menu-item-has-children > a:after, #primary-menu > ul > .page_item_has_children > a:after',
			'property' => 'color',
		),
	),
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'color',
	'settings'  => 'header_primary_menu_item_icon_color',
	'label'    => esc_html__( 'Icon Color', 'saturnthemes-financebank' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '#666666',
	'output'   => array(
		array(
			'element'  => '#primary-menu > .menu-item > a > .menu-item-icon',
			'property' => 'color',
		),
	),
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'select',
	'settings' => 'header_primary_menu_text_transform',
	'label'    => __( 'Text Transform', 'saturnthemes-financebank' ),
	'section'  => $section,
	'default'  => 'none',
	'priority' => $priority ++,
	'choices'  => array(
		'none'      => esc_html__( 'None', 'saturnthemes-financebank' ),
		'uppercase' => esc_html__( 'Uppercase', 'saturnthemes-financebank' ),
		'lowercase' => esc_html__( 'Lowercase', 'saturnthemes-financebank' ),
	),
	'output'   => array(
		array(
			'element'  => '#primary-menu > .menu-item > a, #primary-menu > ul > li > a',
			'property' => 'text-transform',
		),
	),
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'legend',
	'settings'  => 'header_primary_menu_legend_item_hover',
	'label'    => esc_html__( 'Menu Item Style on Hover', 'saturnthemes-financebank' ),
	'section'  => $section,
	'priority' => $priority ++,
) );

Kirki::add_field( 'saturnthemes', array(
    'type'     => 'color',
    'settings'  => 'header_primary_menu_item_bg_color_hover',
    'label'    => esc_html__( 'Background Color', 'saturnthemes-financebank' ),
    'section'  => $section,
    'priority' => $priority ++,
    'default'  => 'rgba(255, 255, 255, 0)',
    'output'   => array(
        array(
            'element'  => '#primary-menu > .menu-item:hover, #primary-menu > .menu-item.current-menu-ancestor, #primary-menu > ul > li:hover, #primary-menu > ul > li.current_page_ancestor, #primary-menu > ul > li.current_page_item',
            'property' => 'background-color',
        ),
    ),
    'required' => array(
        array(
            'settings'  => 'header_type',
            'operator' => '==',
            'value'    => 'header_02',
        ),
    ),
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'color',
	'settings'  => 'header_primary_menu_item_link_color_hover',
	'label'    => esc_html__( 'Link Color', 'saturnthemes-financebank' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '',
	'output'   => array(
		array(
			'element'  => '#primary-menu > .menu-item:hover > a, #primary-menu > .menu-item.current-menu-ancestor > a, #primary-menu > ul > li:hover > a, #primary-menu > ul > li.current_page_ancestor > a, #primary-menu > ul > li.current_page_item > a',
			'property' => 'color',
		),
	),
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'color',
	'settings'  => 'header_primary_menu_item_sub_menu_arrow_color_hover',
	'label'    => esc_html__( 'Sub Menu Arrow Color', 'saturnthemes-financebank' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '#333A71',
	'output'   => array(
		array(
			'element'  => '#primary-menu.menu > .menu-item-has-children:hover:after, #primary-menu.menu > ul > .page_item_has_children:hover:after, #primary-menu.menu > ul > .page_item_has_children.current_page_ancestor:after, #primary-menu.menu > ul > .page_item_has_children.current_page_item:after',
			'property' => 'color',
		),
	),
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'color',
	'settings'  => 'header_primary_menu_item_icon_color_hover',
	'label'    => esc_html__( 'Icon Color', 'saturnthemes-financebank' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '#323872',
	'output'   => array(
		array(
			'element'  => '#primary-menu > .menu-item:hover > a > .menu-item-icon',
			'property' => 'color',
		),
	),
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'color',
	'settings'  => 'header_primary_menu_item_border_bottom_color_hover',
	'label'    => esc_html__( 'Border Bottom on Hover/Active', 'saturnthemes-financebank' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '#DDDDDD',
	'output'   => array(
		array(
			'element'  => '#primary-menu > .menu-item:hover > a:before, #primary-menu > .menu-item.current-menu-ancestor > a:before, #primary-menu > ul > li:hover > a:before, #primary-menu > ul > li.current_page_ancestor > a:before, #primary-menu > ul > li.current_page_item > a:before',
			'property' => 'border-bottom-color',
		),
	),
) );
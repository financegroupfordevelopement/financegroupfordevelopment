<?php
$section  = 'header_menu_dropdown';
$priority = 1;

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'legend',
	'settings'  => 'header_menu_dropdown_legend_general',
	'label'    => esc_html__( 'General', 'saturnthemes-financebank' ),
	'section'  => $section,
	'priority' => $priority++,
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'color',
	'settings' => 'header_menu_dropdown_background_color',
	'label'    => __( 'Background Color', 'saturnthemes-financebank' ),
	'section'  => $section,
	'default'  => '#ffffff',
	'priority' => $priority ++,
	'output' => array(
		array(
			'element'  => '.menu > .menu-item .sub-menu, .menu > ul > li .children',
			'property' => 'background-color',
		),
	),
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'color',
	'settings' => 'header_menu_dropdown_icon_color',
	'label'    => __( 'Icon Color', 'saturnthemes-financebank' ),
	'section'  => $section,
	'default'  => '#000000',
	'priority' => $priority ++,
	'output' => array(
		array(
			'element'  => '.menu > .menu-item li > a .menu-item-icon, .menu > .menu-item .sub-menu > li > a:not(.has-icon):after',
			'property' => 'color',
		),
	),
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'color',
	'settings' => 'header_menu_dropdown_border_bottom_color_hover',
	'label'    => __( 'Border Bottom Color on Hover', 'saturnthemes-financebank' ),
	'section'  => $section,
	'default'  => '#000000',
	'priority' => $priority ++,
	'output' => array(
		array(
			'element'  => '.menu > li li > a .menu-item-text:after',
			'property' => 'color',
		),
	),
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'legend',
	'settings'  => 'header_menu_dropdown_legend_mega_menu',
	'label'    => esc_html__( 'Mega Menu', 'saturnthemes-financebank' ),
	'section'  => $section,
	'priority' => $priority++,
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'color',
	'settings' => 'header_menu_dropdown_mega_menu_title_color',
	'label'    => __( 'Color', 'saturnthemes-financebank' ),
	'section'  => $section,
	'default'  => '#1F1F1F',
	'priority' => $priority ++,
	'output' => array(
		array(
			'element'  => '#header .menu > .menu-item.menu-item-mega-menu > .sub-menu > li > a',
			'property' => 'color',
		),
	),
) );

// @todo: Add more customizer setting for menu
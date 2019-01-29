<?php
$section  = 'header_preset';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'        => 'preset',
	'settings'    => 'header_preset',
	'label'       => __( 'Header Preset', 'saturnthemes-financebank' ),
	'section'   => $section,
	'priority'    => $priority ++,
	'description' => esc_html__( 'Choose header style from our predefined presets', 'saturnthemes-financebank' ),
	'default'     => '1',
	'choices'     => array(
		'1' => array(
			'label'    => __( 'Preset 1', 'saturnthemes-financebank' ),
			'settings' => array(
				'header_type' => 'header_01',
			),
		),
		'2' => array(
			'label'    => __( 'Preset 2', 'saturnthemes-financebank' ),
			'settings' => array(
				'header_type' => 'header_02',

                'header_top_bar_background_color' => '#333333',
                'header_top_bar_link_color' => '#CCCCCC',
                'header_top_bar_link_color_hover' => '#CCCCCC',
                'header_top_bar_border_color' => '#444444',

                'header_primary_menu_align' => 'left',
                'header_primary_menu_item_link_color' => '#fff',
                'header_primary_menu_item_sub_menu_arrow_color' => 'rgba(255, 255, 255, 0)',
                'header_primary_menu_item_border_bottom_color_hover' => 'rgba(255, 255, 255, 0)',
                'header_primary_menu_item_link_color_hover' => '#fff',
                'header_primary_menu_item_bg_color_hover' => 'rgba(0, 0, 0, 0.2)',
                'header_primary_menu_item_sub_menu_arrow_color_hover' => 'rgba(255, 255, 255, 0)',

                'header_social_color' => '#fff',
			),
		),
		'3' => array(
			'label'    => __( 'Preset 3', 'saturnthemes-financebank' ),
			'settings' => array(
			    'site_logo' => get_template_directory_uri() . '/assets/img/logo2.png',

                'header_type' => 'header_01',
                'header_top_bar_background_color' => 'rgba(255, 255, 255, 0)',
                'header_background_color' => '#004290',

                'header_show_gradient' => 1,
                'header_top_bar_border_color' => 'rgba(255, 255, 255, 0.1)',
                'header_top_bar_link_color' => 'rgba(255, 255, 255, 0.6)',
                'header_top_bar_link_color_hover' => 'rgba(255, 255, 255, 0.8)',

                'header_contact_details_separator_color' => '#ccc',

                'header_primary_menu_item_link_color' => '#fff',
                'header_primary_menu_item_link_color_hover' => '#fff',
                'header_primary_menu_item_border_bottom_color_hover' => '#fff',
                'header_primary_menu_item_sub_menu_arrow_color' => '#fff',
                'header_primary_menu_item_sub_menu_arrow_color_hover' => '#fff',
            ),
		),
	),
) );
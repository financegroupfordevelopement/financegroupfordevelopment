<?php
$section  = 'header_social_icons';
$priority = 1;

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'toggle',
	'settings'  => 'header_social_icon_show',
	'label'    => esc_html__( 'Show All Icons', 'saturnthemes-financebank' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default' => 0,
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'legend',
	'settings'  => 'header_social_icon_legend',
	'label'    => esc_html__( 'Details', 'saturnthemes-financebank' ),
	'section'  => $section,
	'priority' => $priority ++,
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'toggle',
	'settings'  => 'header_social_icon_facebook',
	'label'    => esc_html__( 'Show Facebook Icon', 'saturnthemes-financebank' ),
	'section'  => $section,
	'priority' => $priority++,
	'default'  => 1,
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'toggle',
	'settings'  => 'header_social_icon_twitter',
	'label'    => esc_html__( 'Show Twitter Icon', 'saturnthemes-financebank' ),
	'section'  => $section,
	'priority' => $priority++,
	'default'  => 1,
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'toggle',
	'settings'  => 'header_social_icon_instagram',
	'label'    => esc_html__( 'Show Instagram Icon', 'saturnthemes-financebank' ),
	'section'  => $section,
	'priority' => $priority++,
	'default'  => 1,
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'toggle',
	'settings'  => 'header_social_icon_google_plus',
	'label'    => esc_html__( 'Show Google+ Icon', 'saturnthemes-financebank' ),
	'section'  => $section,
	'priority' => $priority++,
	'default'  => 1,
) );

Kirki::add_field( 'saturnthemes', array(
  'type'     => 'toggle',
  'settings'  => 'header_social_icon_linkedin',
  'label'    => esc_html__( 'Show Linkedin Icon', 'saturnthemes-financebank' ),
  'section'  => $section,
  'priority' => $priority++,
  'default'  => 1,
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'legend',
	'settings'  => 'header_social_icon_legend_style',
	'label'    => esc_html__( 'Style', 'saturnthemes-financebank' ),
	'section'  => $section,
	'priority' => $priority++,
) );

Kirki::add_field('saturnthemes', array(
	'type'        => 'color',
	'settings'     => 'header_social_color',
	'label'       => esc_html__('Color', 'saturnthemes-financebank' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'transport' => 'postMessage',
	'default'   => '#999999',
	'output' => array(
		array(
			'element'  => '.header-social-icon i',
			'property' => 'color',
		),
	),
));
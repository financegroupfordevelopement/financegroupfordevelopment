<?php
$section  = 'footer_social_icon';
$priority = 1;

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'toggle',
	'settings'  => 'footer_social_icon_facebook',
	'label'    => esc_html__( 'Show Facebook Icon', 'saturnthemes-financebank' ),
	'section'  => $section,
	'priority' => $priority++,
	'default'  => 1,
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'toggle',
	'settings'  => 'footer_social_icon_twitter',
	'label'    => esc_html__( 'Show Twitter Icon', 'saturnthemes-financebank' ),
	'section'  => $section,
	'priority' => $priority++,
	'default'  => 1,
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'toggle',
	'settings'  => 'footer_social_icon_instagram',
	'label'    => esc_html__( 'Show Instagram Icon', 'saturnthemes-financebank' ),
	'section'  => $section,
	'priority' => $priority++,
	'default'  => 1,
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'toggle',
	'settings'  => 'footer_social_icon_google_plus',
	'label'    => esc_html__( 'Show Google+ Icon', 'saturnthemes-financebank' ),
	'section'  => $section,
	'priority' => $priority++,
	'default'  => 1,
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'legend',
	'settings'  => 'footer_social_icon_legend_style',
	'label'    => esc_html__( 'Style', 'saturnthemes-financebank' ),
	'section'  => $section,
	'priority' => $priority++,
) );

Kirki::add_field('saturnthemes', array(
	'type'        => 'color',
	'settings'     => 'footer_social_color',
	'label'       => esc_html__('Color', 'saturnthemes-financebank' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'transport' => 'postMessage',
	'default'   => '#fff',
	'output' => array(
		array(
			'element'  => '.footer-social-icon i',
			'property' => 'color',
		),
	),
));
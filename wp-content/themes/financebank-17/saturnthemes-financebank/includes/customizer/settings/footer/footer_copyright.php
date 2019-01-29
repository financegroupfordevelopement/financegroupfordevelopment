<?php
$section  = 'footer_copyright';
$priority = 1;

Kirki::add_field( 'saturnthemes', array(
    'type'        => 'toggle',
    'settings'     => 'footer_copyright_enable',
    'label'       => esc_html__( 'Show Copyright', 'saturnthemes-financebank' ),
    'description' => esc_html__( 'Enabling this option will display copyright area', 'saturnthemes-financebank' ),
    'section'     => $section,
    'priority'    => $priority++,
    'default'     => 1,
) );

Kirki::add_field( 'saturnthemes', array(
    'type'      => 'editor',
    'settings'   => 'footer_copyright_content',
    'label'     => esc_html__( 'Content', 'saturnthemes-financebank' ),
    'section'   => $section,
    'priority'  => $priority++,
    'default'   => esc_html__( 'Copyright &copy; 2016 Finance Bank WordPress Theme by <a href="http://' . 'financebank.saturnthemes.com">SaturnThemes</a>', 'saturnthemes-financebank' ),
    'required'  => array(
        array(
            'settings'  => 'footer_copyright_enable',
            'operator' => '==',
            'value'    => 1,
        ),
    ),
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'legend',
	'settings'  => 'footer_copyright_legend_style',
	'label'    => esc_html__( 'Style', 'saturnthemes-financebank' ),
	'section'  => $section,
	'priority' => $priority++,
) );

Kirki::add_field('saturnthemes', array(
	'type'        => 'color',
	'settings'     => 'footer_copyright_separator_color',
	'label'       => esc_html__('Separator Color', 'saturnthemes-financebank' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'transport' => 'postMessage',
	'default'   => '#454545',
	'output' => array(
		array(
			'element'  => '.footer-bottom, .footer-widget-container .menu > li, .site-footer .widget_recent_entries ul li',
			'property' => 'border-color',
		),
	),
));
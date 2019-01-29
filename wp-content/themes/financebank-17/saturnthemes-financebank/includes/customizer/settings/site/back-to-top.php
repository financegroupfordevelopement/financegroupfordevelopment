<?php
$section  = 'site_back_top_top';
$priority = 1;

Kirki::add_field( 'saturnthemes', array(
	'type'        => 'toggle',
	'settings'     => 'site_back_top_enable',
	'label'       => esc_html__( 'Show Back to Top', 'saturnthemes-financebank' ),
	'description' => esc_html__( 'Enabling this option will display Back to Top', 'saturnthemes-financebank' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => 1,
) );

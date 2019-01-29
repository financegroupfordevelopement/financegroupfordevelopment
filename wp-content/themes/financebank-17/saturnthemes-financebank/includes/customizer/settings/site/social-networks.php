<?php
/**
 * Site General
 * ================
 */
$section  = 'site_social_network';
$priority = 1;

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'legend',
	'settings'  => 'site_social_facebook_legend',
	'label'    => esc_html__( 'Facebook', 'saturnthemes-financebank' ),
	'section'  => $section,
	'priority' => $priority++,
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'textfield',
	'settings'  => 'site_social_facebook',
	'section'  => $section,
	'priority' => $priority++,
	'default'  => 'https://facebook.com/'
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'legend',
	'settings'  => 'site_social_twitter_legend',
	'label'    => esc_html__( 'Twitter', 'saturnthemes-financebank' ),
	'section'  => $section,
	'priority' => $priority++,
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'textfield',
	'settings'  => 'site_social_twitter',
	'section'  => $section,
	'priority' => $priority++,
	'default'  => 'https://twitter.com/'
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'legend',
	'settings'  => 'site_social_instagram_legend',
	'label'    => esc_html__( 'Instagram', 'saturnthemes-financebank' ),
	'section'  => $section,
	'priority' => $priority++,
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'textfield',
	'settings'  => 'site_social_instagram',
	'section'  => $section,
	'priority' => $priority++,
	'default'  => ''
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'legend',
	'settings'  => 'site_social_google_plus_legend',
	'label'    => esc_html__( 'Google +', 'saturnthemes-financebank' ),
	'section'  => $section,
	'priority' => $priority++,
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'textfield',
	'settings'  => 'site_social_google_plus',
	'section'  => $section,
	'priority' => $priority++,
	'default'  => ''
) );

Kirki::add_field( 'saturnthemes', array(
  'type'     => 'legend',
  'settings'  => 'site_social_linkedin_legend',
  'label'    => esc_html__( 'Linkedin', 'saturnthemes-financebank' ),
  'section'  => $section,
  'priority' => $priority++,
) );

Kirki::add_field( 'saturnthemes', array(
  'type'     => 'textfield',
  'settings'  => 'site_social_linkedin',
  'section'  => $section,
  'priority' => $priority++,
  'default'  => 'https://www.linkedin.com/'
) );
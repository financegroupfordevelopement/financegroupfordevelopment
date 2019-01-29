<?php
$section  = 'header_search';
$priority = 1;

Kirki::add_field( 'saturnthemes', array(
    'type'        => 'toggle',
    'settings'     => 'header_search_show',
    'label'       => esc_html__( 'Show Search Form', 'saturnthemes-financebank' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => 1,
) );
<?php
function saturnthemes_financebank_register_widgets() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'saturnthemes-financebank' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Blog Sidebar', 'saturnthemes-financebank' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

	register_sidebar( array(
		'name'          => esc_html__( 'Service Sidebar', 'saturnthemes-financebank' ),
		'id'            => 'sidebar-service',
		'description'   => esc_html__( 'Service Sidebar', 'saturnthemes-financebank' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

    register_sidebar( array(
        'name'          => esc_html__( 'Staff Sidebar', 'saturnthemes-financebank' ),
        'id'            => 'sidebar-staff',
        'description'   => esc_html__( 'Staff Sidebar', 'saturnthemes-financebank' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer Widget 1', 'saturnthemes-financebank' ),
        'id'            => 'footer-1',
        'description'   => esc_html__( 'Footer Column 1 Sidebar', 'saturnthemes-financebank' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Widget 2', 'saturnthemes-financebank' ),
        'id'            => 'footer-2',
        'description'   => esc_html__( 'Footer Column 2 Sidebar', 'saturnthemes-financebank' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Widget 3', 'saturnthemes-financebank' ),
        'id'            => 'footer-3',
        'description'   => esc_html__( 'Footer Column 3 Sidebar', 'saturnthemes-financebank' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Widget 4', 'saturnthemes-financebank' ),
        'id'            => 'footer-4',
        'description'   => esc_html__( 'Footer Column 4 Sidebar', 'saturnthemes-financebank' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'WooCommerce Archives Sidebar', 'saturnthemes-financebank' ),
        'id'            => 'sidebar-shop',
        'description'   => esc_html__( 'Shop Archive Sidebar', 'saturnthemes-financebank' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'WooCommerce Single Sidebar', 'saturnthemes-financebank' ),
        'id'            => 'sidebar-product',
        'description'   => esc_html__( 'Shop Single Product Sidebar', 'saturnthemes-financebank' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}

add_action( 'widgets_init', 'saturnthemes_financebank_register_widgets' );
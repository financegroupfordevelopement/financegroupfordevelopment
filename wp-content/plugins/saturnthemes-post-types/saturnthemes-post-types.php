<?php
/*
Plugin Name: SaturnThemes Post Types
Description: Post Types for Saturn Themes
Author: SaturnThemes
Version: 1.0
Author URI: http://saturnthemes.com
*/

define( 'SaturnThemes_Post_Types_URL', plugins_url( '', __FILE__ ) . '/' );
define( 'SaturnThemes_Post_Types_PATH', plugin_dir_path( __FILE__ ) );

// Staff
add_action( 'init', 'saturnthemes_register_staff_post_type' );
function saturnthemes_register_staff_post_type() {
	register_post_type( 'staff',
		apply_filters( 'saturnthemes_register_post_type_staff',
			array(
				'labels'              => array(
					'name'                  => __( 'Staffs', 'saturnthemes-post-types' ),
					'singular_name'         => __( 'Staff', 'saturnthemes-post-types' ),
					'menu_name'             => _x( 'Staffs', 'Admin menu name', 'saturnthemes-post-types' ),
					'add_new'               => __( 'Add Staff', 'saturnthemes-post-types' ),
					'add_new_item'          => __( 'Add New Staff', 'saturnthemes-post-types' ),
					'edit'                  => __( 'Edit', 'saturnthemes-post-types' ),
					'edit_item'             => __( 'Edit Staff', 'saturnthemes-post-types' ),
					'new_item'              => __( 'New Staff', 'saturnthemes-post-types' ),
					'view'                  => __( 'View Staff', 'saturnthemes-post-types' ),
					'view_item'             => __( 'View Staff', 'saturnthemes-post-types' ),
					'search_items'          => __( 'Search Staffs', 'saturnthemes-post-types' ),
					'not_found'             => __( 'No Staffs found', 'saturnthemes-post-types' ),
					'not_found_in_trash'    => __( 'No Staffs found in trash', 'saturnthemes-post-types' ),
					'parent'                => __( 'Parent Staff', 'saturnthemes-post-types' ),
					'featured_image'        => __( 'Staff Image', 'saturnthemes-post-types' ),
					'set_featured_image'    => __( 'Set staff image', 'saturnthemes-post-types' ),
					'remove_featured_image' => __( 'Remove staff image', 'saturnthemes-post-types' ),
					'use_featured_image'    => __( 'Use as staff image', 'saturnthemes-post-types' ),
				),
				'public'              => true,
				'show_in_menu'        => true,
				'show_ui'             => true,
				'capability_type'     => 'post',
				'map_meta_cap'        => true,
				'publicly_queryable'  => true,
				'exclude_from_search' => false,
				'hierarchical'        => true,
				'rewrite'             => true,
				'query_var'           => true,
				'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
				'has_archive'         => 'staffs',
				'show_in_nav_menus'   => true,
				'menu_icon'           => 'dashicons-businessman',
			)
		)
	);
}

add_action( 'cmb2_admin_init', 'saturnthemes_register_staff_metabox' );
function saturnthemes_register_staff_metabox() {
	$prefix = 'saturnthemes_financebank_';

	$staff_cmb = new_cmb2_box( array(
		'id'           => $prefix . 'staff_metabox',
		'title'        => __( 'Extra Information', 'saturnthemes-post-types' ),
		'object_types' => array( 'staff' ),
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true,
	) );

	$staff_cmb->add_field( array(
		'name' => __( 'Byline', 'saturnthemes-post-types' ),
		'desc' => __( 'Byline of staff', 'saturnthemes-post-types' ),
		'id'   => $prefix . 'company',
		'type' => 'text',
	) );

	$staff_cmb->add_field( array(
		'name' => __( 'Phone', 'saturnthemes-post-types' ),
		'desc' => __( 'Phone of staff', 'saturnthemes-post-types' ),
		'id'   => $prefix . 'phone',
		'type' => 'text',
	) );

	$staff_cmb->add_field( array(
		'name' => __( 'Email', 'saturnthemes-post-types' ),
		'desc' => __( 'Email of staff', 'saturnthemes-post-types' ),
		'id'   => $prefix . 'email',
		'type' => 'text',
	) );

	$staff_cmb->add_field( array(
		'name' => __( 'Facebook', 'saturnthemes-post-types' ),
		'desc' => __( 'Facebook of staff', 'saturnthemes-post-types' ),
		'id'   => $prefix . 'facebook',
		'type' => 'text',
	) );

	$staff_cmb->add_field( array(
		'name' => __( 'Twitter', 'saturnthemes-post-types' ),
		'desc' => __( 'Twitter of staff', 'saturnthemes-post-types' ),
		'id'   => $prefix . 'twitter',
		'type' => 'text',
	) );

	$staff_cmb->add_field( array(
		'name' => __( 'Intagram', 'saturnthemes-post-types' ),
		'desc' => __( 'Intagram of staff', 'saturnthemes-post-types' ),
		'id'   => $prefix . 'instagram',
		'type' => 'text',
	) );
}

// Services
add_action( 'init', 'saturnthemes_register_service_post_type' );
function saturnthemes_register_service_post_type() {
	register_post_type( 'service',
		apply_filters( 'saturnthemes_register_post_type_service',
			array(
				'labels'             => array(
					'name'                  => __( 'Services', 'saturnthemes-post-types' ),
					'singular_name'         => __( 'Service', 'saturnthemes-post-types' ),
					'menu_name'             => _x( 'Services', 'Admin menu name', 'saturnthemes-post-types' ),
					'add_new'               => __( 'Add Service', 'saturnthemes-post-types' ),
					'add_new_item'          => __( 'Add New Service', 'saturnthemes-post-types' ),
					'edit'                  => __( 'Edit', 'saturnthemes-post-types' ),
					'edit_item'             => __( 'Edit Service', 'saturnthemes-post-types' ),
					'new_item'              => __( 'New Service', 'saturnthemes-post-types' ),
					'view'                  => __( 'View Service', 'saturnthemes-post-types' ),
					'view_item'             => __( 'View Service', 'saturnthemes-post-types' ),
					'search_items'          => __( 'Search Services', 'saturnthemes-post-types' ),
					'not_found'             => __( 'No Services found', 'saturnthemes-post-types' ),
					'not_found_in_trash'    => __( 'No Services found in trash', 'saturnthemes-post-types' ),
					'parent'                => __( 'Parent Service', 'saturnthemes-post-types' ),
					'featured_image'        => __( 'Service Image', 'saturnthemes-post-types' ),
					'set_featured_image'    => __( 'Set service image', 'saturnthemes-post-types' ),
					'remove_featured_image' => __( 'Remove service image', 'saturnthemes-post-types' ),
					'use_featured_image'    => __( 'Use as service image', 'saturnthemes-post-types' ),
				),
				'public'             => true,
				'show_in_menu'       => true,
				'show_ui'            => true,
				'publicly_queryable' => true,
				'hierarchical'       => false,
				'query_var'          => true,
				'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
				'show_in_nav_menus'  => true,
				'capability_type'    => 'post',
				'rewrite'            => array(
					'slug'       => 'service',
					'with_front' => false,
				),
				'has_archive'        => 'services',
				'menu_icon'          => 'dashicons-clipboard',
			)
		)
	);
}

add_action( 'init', 'saturnthemes_register_taxonomy_objects_service' );
function saturnthemes_register_taxonomy_objects_service() {
	register_taxonomy( 'service-category',
		apply_filters( 'saturnthemes_post_types_taxonomy_objects_service', array( 'service' ) ),
		apply_filters( 'saturnthemes_post_types_taxonomy_args_service', array(
			'hierarchical'      => true,
			'label'             => __( 'Service Categories', 'saturnthemes-post-type' ),
			'labels'            => array(
				'name'              => __( 'Service Categories', 'saturnthemes-post-type' ),
				'singular_name'     => __( 'Service Category', 'saturnthemes-post-type' ),
				'menu_name'         => _x( 'Categories', 'Admin menu name', 'saturnthemes-post-type' ),
				'search_items'      => __( 'Search Service Categories', 'saturnthemes-post-type' ),
				'all_items'         => __( 'All Service Categories', 'saturnthemes-post-type' ),
				'parent_item'       => __( 'Parent Service Category', 'saturnthemes-post-type' ),
				'parent_item_colon' => __( 'Parent Service Category:', 'saturnthemes-post-type' ),
				'edit_item'         => __( 'Edit Service Category', 'saturnthemes-post-type' ),
				'update_item'       => __( 'Update Service Category', 'saturnthemes-post-type' ),
				'add_new_item'      => __( 'Add New Service Category', 'saturnthemes-post-type' ),
				'new_item_name'     => __( 'New Service Category Name', 'saturnthemes-post-type' )
			),
			'public'            => true,
			'show_ui'           => true,
			'query_var'         => true,
			'show_admin_column' => true,
			'show_in_nav_menus' => false,
			'rewrite'           => array(
				'slug'       => 'services',
				'with_front' => false,
			),
		) )
	);
}

add_action( 'admin_enqueue_scripts', 'saturnthemes_enqueue_font_awesome' );
function saturnthemes_enqueue_font_awesome( $hook ) {
	wp_enqueue_style( 'saturnthemes-style-font-awesome', get_template_directory_uri() . '/assets/lib/font-awesome/css/font-awesome.min.css' );
}

add_action( 'cmb2_admin_init', 'saturnthemes_register_service_metabox' );
function saturnthemes_register_service_metabox() {
	$prefix = 'saturnthemes_';

	$service_cmb = new_cmb2_box( array(
		'id'           => $prefix . 'service_metabox',
		'title'        => __( 'Extra Information', 'saturnthemes-post-types' ),
		'object_types' => array( 'service' ),
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true,
	) );

	$service_cmb->add_field( array(
		'name' => __( 'Icon', 'saturnthemes-post-types' ),
		'id'   => $prefix . 'icon',
		'type' => 'icon_chooser',
	) );
}

function cmb2_render_callback_for_icon_chooser( $field, $value, $object_id, $object_type, $field_type ) {
	?>
	<style>
		.cmb-type-icon-chooser .cmb-icon-chooser-container {
			display: none;
		}

		.cmb-type-icon-chooser .cmb-icon-chooser-selected-icon {
			margin-bottom: 10px;
			line-height: 26px;
			cursor: pointer;
			vertical-align: top;
			height: 30px;
			border: 1px solid #efefef;
			font-size: 16px;
			text-align: center;
		}

		.cmb-type-icon-chooser .cmb-icon-choose-list-container {
			height: 300px;
			overflow-y: auto;
			margin-top: 10px;
			border: 1px solid #efefef;
			padding: 10px;
		}

		.cmb-type-icon-chooser .cmb-icon-chooser-icon {
			display: inline-block;
			margin: 2px;
			width: 60px;
			line-height: 42px;
			text-align: center;
			cursor: pointer;
			vertical-align: top;
			height: 40px;
			border: 1px solid #efefef;
			font-size: 16px;
		}

		.cmb-type-icon-chooser .cmb-icon-chooser-icon:hover {
			background-color: #f6f6f6;
		}
	</style>
	<div class="cmb-icon-chooser-selected-icon"><i class="<?php echo esc_attr( $value ? $value : '' ); ?>"></i></div>
	<button class="button cmb-choose-icon button-primary"
		type="button"><?php esc_attr_e( 'Choose Icon', 'saturnthemes-industry' ); ?></button>
	<button class="button cmd-remove-icon"
		type="button"><?php esc_attr_e( 'Remove Icon', 'saturnthemes-industry' ); ?></button>
	<input type="hidden" name="<?php echo esc_attr( $field_type->_name() ); ?>" class="cmb-icon-value"
		value="<?php echo esc_attr( $value ? $value : '' ); ?>"/>
	<div class="cmb-icon-chooser-container">
		<div class="cmb-icon-chooser-list">
			<h4><?php esc_html_e( 'Font Awesome', 'saturnthemes-industry' ); ?></h4>
			<div class="cmb-icon-choose-list-container">
                <span class="cmb-icon-chooser-icon" title="Bluetooth"><i data-value="fa fa-bluetooth"
		                class="fa fa-bluetooth"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Bluetooth"><i data-value="fa fa-bluetooth-b"
		                class="fa fa-bluetooth-b"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Codie Pie"><i data-value="fa fa-codiepie"
		                class="fa fa-codiepie"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Credit Card"><i data-value="fa fa-credit-card-alt"
		                class="fa fa-credit-card-alt"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Edge Browser"><i data-value="fa fa-edge"
		                class="fa fa-edge"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Fort Awesome"><i data-value="fa fa-fort-awesome"
		                class="fa fa-fort-awesome"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Hashtag"><i data-value="fa fa-hashtag"
		                class="fa fa-hashtag"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Mixcloud"><i data-value="fa fa-mixcloud"
		                class="fa fa-mixcloud"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="MODX"><i data-value="fa fa-modx" class="fa fa-modx"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Pause Circle"><i data-value="fa fa-pause-circle"
		                class="fa fa-pause-circle"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Pause Circle Outlined"><i data-value="fa fa-pause-circle-o"
		                class="fa fa-pause-circle-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Percent"><i data-value="fa fa-percent"
		                class="fa fa-percent"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Product Hunt"><i data-value="fa fa-product-hunt"
		                class="fa fa-product-hunt"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Reddit Alien"><i data-value="fa fa-reddit-alien"
		                class="fa fa-reddit-alien"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Scribd"><i data-value="fa fa-scribd"
		                class="fa fa-scribd"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Shopping Bag"><i data-value="fa fa-shopping-bag"
		                class="fa fa-shopping-bag"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Shopping Basket"><i data-value="fa fa-shopping-basket"
		                class="fa fa-shopping-basket"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Stop Circle"><i data-value="fa fa-stop-circle"
		                class="fa fa-stop-circle"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Stop Circle Outlined"><i data-value="fa fa-stop-circle-o"
		                class="fa fa-stop-circle-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="USB"><i data-value="fa fa-usb" class="fa fa-usb"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Adjust"><i data-value="fa fa-adjust"
		                class="fa fa-adjust"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Anchor"><i data-value="fa fa-anchor"
		                class="fa fa-anchor"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Archive"><i data-value="fa fa-archive"
		                class="fa fa-archive"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Area Chart"><i data-value="fa fa-area-chart"
		                class="fa fa-area-chart"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Arrows"><i data-value="fa fa-arrows"
		                class="fa fa-arrows"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Arrows Horizontal"><i data-value="fa fa-arrows-h"
		                class="fa fa-arrows-h"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Arrows Vertical"><i data-value="fa fa-arrows-v"
		                class="fa fa-arrows-v"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Asterisk"><i data-value="fa fa-asterisk"
		                class="fa fa-asterisk"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="At"><i data-value="fa fa-at" class="fa fa-at"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Balance Scale"><i data-value="fa fa-balance-scale"
		                class="fa fa-balance-scale"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Ban"><i data-value="fa fa-ban" class="fa fa-ban"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Bar Chart (bar-chart-o)"><i data-value="fa fa-bar-chart"
		                class="fa fa-bar-chart"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Barcode"><i data-value="fa fa-barcode"
		                class="fa fa-barcode"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Bars (navicon, reorder)"><i data-value="fa fa-bars"
		                class="fa fa-bars"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Battery Empty (battery-0)"><i
		                data-value="fa fa-battery-empty" class="fa fa-battery-empty"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Battery Full (battery-4)"><i data-value="fa fa-battery-full"
		                class="fa fa-battery-full"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Battery 1/2 Full (battery-2)"><i
		                data-value="fa fa-battery-half" class="fa fa-battery-half"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Battery 1/4 Full (battery-1)"><i
		                data-value="fa fa-battery-quarter" class="fa fa-battery-quarter"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Battery 3/4 Full (battery-3)"><i
		                data-value="fa fa-battery-three-quarters" class="fa fa-battery-three-quarters"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Bed (hotel)"><i data-value="fa fa-bed" class="fa fa-bed"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Beer"><i data-value="fa fa-beer" class="fa fa-beer"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Bell"><i data-value="fa fa-bell" class="fa fa-bell"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Bell Outlined"><i data-value="fa fa-bell-o"
		                class="fa fa-bell-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Bell Slash"><i data-value="fa fa-bell-slash"
		                class="fa fa-bell-slash"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Bell Slash Outlined"><i data-value="fa fa-bell-slash-o"
		                class="fa fa-bell-slash-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Bicycle"><i data-value="fa fa-bicycle"
		                class="fa fa-bicycle"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Binoculars"><i data-value="fa fa-binoculars"
		                class="fa fa-binoculars"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Birthday Cake"><i data-value="fa fa-birthday-cake"
		                class="fa fa-birthday-cake"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Bluetooth"><i data-value="fa fa-bluetooth"
		                class="fa fa-bluetooth"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Bluetooth"><i data-value="fa fa-bluetooth-b"
		                class="fa fa-bluetooth-b"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Lightning Bolt (flash)"><i data-value="fa fa-bolt"
		                class="fa fa-bolt"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Bomb"><i data-value="fa fa-bomb" class="fa fa-bomb"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Book"><i data-value="fa fa-book" class="fa fa-book"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Bookmark"><i data-value="fa fa-bookmark"
		                class="fa fa-bookmark"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Bookmark Outlined"><i data-value="fa fa-bookmark-o"
		                class="fa fa-bookmark-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Briefcase"><i data-value="fa fa-briefcase"
		                class="fa fa-briefcase"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Bug"><i data-value="fa fa-bug" class="fa fa-bug"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Building"><i data-value="fa fa-building"
		                class="fa fa-building"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Building Outlined"><i data-value="fa fa-building-o"
		                class="fa fa-building-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Bullhorn"><i data-value="fa fa-bullhorn"
		                class="fa fa-bullhorn"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Bullseye"><i data-value="fa fa-bullseye"
		                class="fa fa-bullseye"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Bus"><i data-value="fa fa-bus" class="fa fa-bus"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Calculator"><i data-value="fa fa-calculator"
		                class="fa fa-calculator"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Calendar"><i data-value="fa fa-calendar"
		                class="fa fa-calendar"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Calendar Check Outlined"><i
		                data-value="fa fa-calendar-check-o" class="fa fa-calendar-check-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Calendar Minus Outlined"><i
		                data-value="fa fa-calendar-minus-o" class="fa fa-calendar-minus-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Calendar-o"><i data-value="fa fa-calendar-o"
		                class="fa fa-calendar-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Calendar Plus Outlined"><i data-value="fa fa-calendar-plus-o"
		                class="fa fa-calendar-plus-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Calendar Times Outlined"><i
		                data-value="fa fa-calendar-times-o" class="fa fa-calendar-times-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Camera"><i data-value="fa fa-camera"
		                class="fa fa-camera"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Camera-retro"><i data-value="fa fa-camera-retro"
		                class="fa fa-camera-retro"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Car (automobile)"><i data-value="fa fa-car"
		                class="fa fa-car"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Caret Square Outlined Down (toggle-down)"><i
		                data-value="fa fa-caret-square-o-down" class="fa fa-caret-square-o-down"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Caret Square Outlined Left (toggle-left)"><i
		                data-value="fa fa-caret-square-o-left" class="fa fa-caret-square-o-left"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Caret Square Outlined Right (toggle-right)"><i
		                data-value="fa fa-caret-square-o-right" class="fa fa-caret-square-o-right"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Caret Square Outlined Up (toggle-up)"><i
		                data-value="fa fa-caret-square-o-up" class="fa fa-caret-square-o-up"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Shopping Cart Arrow Down"><i
		                data-value="fa fa-cart-arrow-down" class="fa fa-cart-arrow-down"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Add to Shopping Cart"><i data-value="fa fa-cart-plus"
		                class="fa fa-cart-plus"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Closed Captions"><i data-value="fa fa-cc"
		                class="fa fa-cc"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Certificate"><i data-value="fa fa-certificate"
		                class="fa fa-certificate"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Check"><i data-value="fa fa-check" class="fa fa-check"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Check Circle"><i data-value="fa fa-check-circle"
		                class="fa fa-check-circle"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Check Circle Outlined"><i data-value="fa fa-check-circle-o"
		                class="fa fa-check-circle-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Check Square"><i data-value="fa fa-check-square"
		                class="fa fa-check-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Check Square Outlined"><i data-value="fa fa-check-square-o"
		                class="fa fa-check-square-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Child"><i data-value="fa fa-child" class="fa fa-child"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Circle"><i data-value="fa fa-circle"
		                class="fa fa-circle"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Circle Outlined"><i data-value="fa fa-circle-o"
		                class="fa fa-circle-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Circle Outlined Notched"><i data-value="fa fa-circle-o-notch"
		                class="fa fa-circle-o-notch"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Circle Outlined Thin"><i data-value="fa fa-circle-thin"
		                class="fa fa-circle-thin"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Clock Outlined"><i data-value="fa fa-clock-o"
		                class="fa fa-clock-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Clone"><i data-value="fa fa-clone" class="fa fa-clone"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Cloud"><i data-value="fa fa-cloud" class="fa fa-cloud"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Cloud Download"><i data-value="fa fa-cloud-download"
		                class="fa fa-cloud-download"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Cloud Upload"><i data-value="fa fa-cloud-upload"
		                class="fa fa-cloud-upload"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Code"><i data-value="fa fa-code" class="fa fa-code"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Code-fork"><i data-value="fa fa-code-fork"
		                class="fa fa-code-fork"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Coffee"><i data-value="fa fa-coffee"
		                class="fa fa-coffee"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Cog (gear)"><i data-value="fa fa-cog" class="fa fa-cog"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Cogs (gears)"><i data-value="fa fa-cogs"
		                class="fa fa-cogs"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Comment"><i data-value="fa fa-comment"
		                class="fa fa-comment"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Comment-o"><i data-value="fa fa-comment-o"
		                class="fa fa-comment-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Commenting"><i data-value="fa fa-commenting"
		                class="fa fa-commenting"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Commenting Outlined"><i data-value="fa fa-commenting-o"
		                class="fa fa-commenting-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Comments"><i data-value="fa fa-comments"
		                class="fa fa-comments"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Comments-o"><i data-value="fa fa-comments-o"
		                class="fa fa-comments-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Compass"><i data-value="fa fa-compass"
		                class="fa fa-compass"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Copyright"><i data-value="fa fa-copyright"
		                class="fa fa-copyright"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Creative Commons"><i data-value="fa fa-creative-commons"
		                class="fa fa-creative-commons"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Credit-card"><i data-value="fa fa-credit-card"
		                class="fa fa-credit-card"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Credit Card"><i data-value="fa fa-credit-card-alt"
		                class="fa fa-credit-card-alt"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Crop"><i data-value="fa fa-crop" class="fa fa-crop"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Crosshairs"><i data-value="fa fa-crosshairs"
		                class="fa fa-crosshairs"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Cube"><i data-value="fa fa-cube" class="fa fa-cube"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Cubes"><i data-value="fa fa-cubes" class="fa fa-cubes"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Cutlery"><i data-value="fa fa-cutlery"
		                class="fa fa-cutlery"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Database"><i data-value="fa fa-database"
		                class="fa fa-database"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Desktop"><i data-value="fa fa-desktop"
		                class="fa fa-desktop"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Diamond"><i data-value="fa fa-diamond"
		                class="fa fa-diamond"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Dot Circle Outlined"><i data-value="fa fa-dot-circle-o"
		                class="fa fa-dot-circle-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Download"><i data-value="fa fa-download"
		                class="fa fa-download"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Ellipsis Horizontal"><i data-value="fa fa-ellipsis-h"
		                class="fa fa-ellipsis-h"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Ellipsis Vertical"><i data-value="fa fa-ellipsis-v"
		                class="fa fa-ellipsis-v"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Envelope"><i data-value="fa fa-envelope"
		                class="fa fa-envelope"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Envelope Outlined"><i data-value="fa fa-envelope-o"
		                class="fa fa-envelope-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Envelope Square"><i data-value="fa fa-envelope-square"
		                class="fa fa-envelope-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Eraser"><i data-value="fa fa-eraser"
		                class="fa fa-eraser"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Exchange"><i data-value="fa fa-exchange"
		                class="fa fa-exchange"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Exclamation"><i data-value="fa fa-exclamation"
		                class="fa fa-exclamation"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Exclamation Circle"><i data-value="fa fa-exclamation-circle"
		                class="fa fa-exclamation-circle"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Exclamation Triangle (warning)"><i
		                data-value="fa fa-exclamation-triangle" class="fa fa-exclamation-triangle"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="External Link"><i data-value="fa fa-external-link"
		                class="fa fa-external-link"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="External Link Square"><i
		                data-value="fa fa-external-link-square" class="fa fa-external-link-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Eye"><i data-value="fa fa-eye" class="fa fa-eye"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Eye Slash"><i data-value="fa fa-eye-slash"
		                class="fa fa-eye-slash"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Eyedropper"><i data-value="fa fa-eyedropper"
		                class="fa fa-eyedropper"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Fax"><i data-value="fa fa-fax" class="fa fa-fax"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Female"><i data-value="fa fa-female"
		                class="fa fa-female"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Fighter-jet"><i data-value="fa fa-fighter-jet"
		                class="fa fa-fighter-jet"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Archive File Outlined (file-zip-o)"><i
		                data-value="fa fa-file-archive-o" class="fa fa-file-archive-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Audio File Outlined (file-sound-o)"><i
		                data-value="fa fa-file-audio-o" class="fa fa-file-audio-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Code File Outlined"><i data-value="fa fa-file-code-o"
		                class="fa fa-file-code-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Excel File Outlined"><i data-value="fa fa-file-excel-o"
		                class="fa fa-file-excel-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Image File Outlined (file-photo-o, file-picture-o)"><i
		                data-value="fa fa-file-image-o" class="fa fa-file-image-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="PDF File Outlined"><i data-value="fa fa-file-pdf-o"
		                class="fa fa-file-pdf-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Powerpoint File Outlined"><i
		                data-value="fa fa-file-powerpoint-o" class="fa fa-file-powerpoint-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Video File Outlined (file-movie-o)"><i
		                data-value="fa fa-file-video-o" class="fa fa-file-video-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Word File Outlined"><i data-value="fa fa-file-word-o"
		                class="fa fa-file-word-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Film"><i data-value="fa fa-film" class="fa fa-film"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Filter"><i data-value="fa fa-filter"
		                class="fa fa-filter"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Fire"><i data-value="fa fa-fire" class="fa fa-fire"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Fire-extinguisher"><i data-value="fa fa-fire-extinguisher"
		                class="fa fa-fire-extinguisher"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Flag"><i data-value="fa fa-flag" class="fa fa-flag"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Flag-checkered"><i data-value="fa fa-flag-checkered"
		                class="fa fa-flag-checkered"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Flag Outlined"><i data-value="fa fa-flag-o"
		                class="fa fa-flag-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Flask"><i data-value="fa fa-flask" class="fa fa-flask"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Folder"><i data-value="fa fa-folder"
		                class="fa fa-folder"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Folder Outlined"><i data-value="fa fa-folder-o"
		                class="fa fa-folder-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Folder Open"><i data-value="fa fa-folder-open"
		                class="fa fa-folder-open"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Folder Open Outlined"><i data-value="fa fa-folder-open-o"
		                class="fa fa-folder-open-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Frown Outlined"><i data-value="fa fa-frown-o"
		                class="fa fa-frown-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Futbol Outlined (soccer-ball-o)"><i
		                data-value="fa fa-futbol-o" class="fa fa-futbol-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Gamepad"><i data-value="fa fa-gamepad"
		                class="fa fa-gamepad"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Gavel (legal)"><i data-value="fa fa-gavel"
		                class="fa fa-gavel"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Gift"><i data-value="fa fa-gift" class="fa fa-gift"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Glass"><i data-value="fa fa-glass" class="fa fa-glass"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Globe"><i data-value="fa fa-globe" class="fa fa-globe"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Graduation Cap (mortar-board)"><i
		                data-value="fa fa-graduation-cap" class="fa fa-graduation-cap"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Lizard (Hand)"><i data-value="fa fa-hand-lizard-o"
		                class="fa fa-hand-lizard-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Paper (Hand) (hand-stop-o)"><i
		                data-value="fa fa-hand-paper-o" class="fa fa-hand-paper-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Hand Peace"><i data-value="fa fa-hand-peace-o"
		                class="fa fa-hand-peace-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Hand Pointer"><i data-value="fa fa-hand-pointer-o"
		                class="fa fa-hand-pointer-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Rock (Hand) (hand-grab-o)"><i data-value="fa fa-hand-rock-o"
		                class="fa fa-hand-rock-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Scissors (Hand)"><i data-value="fa fa-hand-scissors-o"
		                class="fa fa-hand-scissors-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Spock (Hand)"><i data-value="fa fa-hand-spock-o"
		                class="fa fa-hand-spock-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Hashtag"><i data-value="fa fa-hashtag"
		                class="fa fa-hashtag"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="HDD"><i data-value="fa fa-hdd-o" class="fa fa-hdd-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Headphones"><i data-value="fa fa-headphones"
		                class="fa fa-headphones"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Heart"><i data-value="fa fa-heart" class="fa fa-heart"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Heart Outlined"><i data-value="fa fa-heart-o"
		                class="fa fa-heart-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Heartbeat"><i data-value="fa fa-heartbeat"
		                class="fa fa-heartbeat"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="History"><i data-value="fa fa-history"
		                class="fa fa-history"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Home"><i data-value="fa fa-home" class="fa fa-home"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Hourglass"><i data-value="fa fa-hourglass"
		                class="fa fa-hourglass"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Hourglass End (hourglass-3)"><i
		                data-value="fa fa-hourglass-end" class="fa fa-hourglass-end"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Hourglass Half (hourglass-2)"><i
		                data-value="fa fa-hourglass-half" class="fa fa-hourglass-half"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Hourglass Outlined"><i data-value="fa fa-hourglass-o"
		                class="fa fa-hourglass-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Hourglass Start (hourglass-1)"><i
		                data-value="fa fa-hourglass-start" class="fa fa-hourglass-start"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="I Beam Cursor"><i data-value="fa fa-i-cursor"
		                class="fa fa-i-cursor"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Inbox"><i data-value="fa fa-inbox" class="fa fa-inbox"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Industry"><i data-value="fa fa-industry"
		                class="fa fa-industry"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Info"><i data-value="fa fa-info" class="fa fa-info"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Info Circle"><i data-value="fa fa-info-circle"
		                class="fa fa-info-circle"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Key"><i data-value="fa fa-key" class="fa fa-key"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Keyboard Outlined"><i data-value="fa fa-keyboard-o"
		                class="fa fa-keyboard-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Language"><i data-value="fa fa-language"
		                class="fa fa-language"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Laptop"><i data-value="fa fa-laptop"
		                class="fa fa-laptop"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Leaf"><i data-value="fa fa-leaf" class="fa fa-leaf"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Lemon Outlined"><i data-value="fa fa-lemon-o"
		                class="fa fa-lemon-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Level Down"><i data-value="fa fa-level-down"
		                class="fa fa-level-down"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Level Up"><i data-value="fa fa-level-up"
		                class="fa fa-level-up"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Life Ring (life-bouy, life-buoy, life-saver, support)"><i
		                data-value="fa fa-life-ring" class="fa fa-life-ring"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Lightbulb Outlined"><i data-value="fa fa-lightbulb-o"
		                class="fa fa-lightbulb-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Line Chart"><i data-value="fa fa-line-chart"
		                class="fa fa-line-chart"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Location-arrow"><i data-value="fa fa-location-arrow"
		                class="fa fa-location-arrow"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Lock"><i data-value="fa fa-lock" class="fa fa-lock"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Magic"><i data-value="fa fa-magic" class="fa fa-magic"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Magnet"><i data-value="fa fa-magnet"
		                class="fa fa-magnet"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Male"><i data-value="fa fa-male" class="fa fa-male"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Map"><i data-value="fa fa-map" class="fa fa-map"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Map-marker"><i data-value="fa fa-map-marker"
		                class="fa fa-map-marker"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Map Outline"><i data-value="fa fa-map-o"
		                class="fa fa-map-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Map Pin"><i data-value="fa fa-map-pin"
		                class="fa fa-map-pin"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Map Signs"><i data-value="fa fa-map-signs"
		                class="fa fa-map-signs"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Meh Outlined"><i data-value="fa fa-meh-o"
		                class="fa fa-meh-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Microphone"><i data-value="fa fa-microphone"
		                class="fa fa-microphone"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Microphone Slash"><i data-value="fa fa-microphone-slash"
		                class="fa fa-microphone-slash"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Minus"><i data-value="fa fa-minus" class="fa fa-minus"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Minus Circle"><i data-value="fa fa-minus-circle"
		                class="fa fa-minus-circle"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Minus Square"><i data-value="fa fa-minus-square"
		                class="fa fa-minus-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Minus Square Outlined"><i data-value="fa fa-minus-square-o"
		                class="fa fa-minus-square-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Mobile Phone (mobile-phone)"><i data-value="fa fa-mobile"
		                class="fa fa-mobile"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Money"><i data-value="fa fa-money" class="fa fa-money"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Moon Outlined"><i data-value="fa fa-moon-o"
		                class="fa fa-moon-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Motorcycle"><i data-value="fa fa-motorcycle"
		                class="fa fa-motorcycle"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Mouse Pointer"><i data-value="fa fa-mouse-pointer"
		                class="fa fa-mouse-pointer"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Music"><i data-value="fa fa-music" class="fa fa-music"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Newspaper Outlined"><i data-value="fa fa-newspaper-o"
		                class="fa fa-newspaper-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Object Group"><i data-value="fa fa-object-group"
		                class="fa fa-object-group"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Object Ungroup"><i data-value="fa fa-object-ungroup"
		                class="fa fa-object-ungroup"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Paint Brush"><i data-value="fa fa-paint-brush"
		                class="fa fa-paint-brush"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Paper Plane (send)"><i data-value="fa fa-paper-plane"
		                class="fa fa-paper-plane"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Paper Plane Outlined (send-o)"><i
		                data-value="fa fa-paper-plane-o" class="fa fa-paper-plane-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Paw"><i data-value="fa fa-paw" class="fa fa-paw"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Pencil"><i data-value="fa fa-pencil"
		                class="fa fa-pencil"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Pencil Square"><i data-value="fa fa-pencil-square"
		                class="fa fa-pencil-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Pencil Square Outlined (edit)"><i
		                data-value="fa fa-pencil-square-o" class="fa fa-pencil-square-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Percent"><i data-value="fa fa-percent"
		                class="fa fa-percent"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Phone"><i data-value="fa fa-phone" class="fa fa-phone"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Phone Square"><i data-value="fa fa-phone-square"
		                class="fa fa-phone-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Picture Outlined (photo, image)"><i
		                data-value="fa fa-picture-o" class="fa fa-picture-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Pie Chart"><i data-value="fa fa-pie-chart"
		                class="fa fa-pie-chart"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Plane"><i data-value="fa fa-plane" class="fa fa-plane"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Plug"><i data-value="fa fa-plug" class="fa fa-plug"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Plus"><i data-value="fa fa-plus" class="fa fa-plus"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Plus Circle"><i data-value="fa fa-plus-circle"
		                class="fa fa-plus-circle"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Plus Square"><i data-value="fa fa-plus-square"
		                class="fa fa-plus-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Plus Square Outlined"><i data-value="fa fa-plus-square-o"
		                class="fa fa-plus-square-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Power Off"><i data-value="fa fa-power-off"
		                class="fa fa-power-off"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Print"><i data-value="fa fa-print" class="fa fa-print"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Puzzle Piece"><i data-value="fa fa-puzzle-piece"
		                class="fa fa-puzzle-piece"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Qrcode"><i data-value="fa fa-qrcode"
		                class="fa fa-qrcode"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Question"><i data-value="fa fa-question"
		                class="fa fa-question"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Question Circle"><i data-value="fa fa-question-circle"
		                class="fa fa-question-circle"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Quote-left"><i data-value="fa fa-quote-left"
		                class="fa fa-quote-left"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Quote-right"><i data-value="fa fa-quote-right"
		                class="fa fa-quote-right"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Random"><i data-value="fa fa-random"
		                class="fa fa-random"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Recycle"><i data-value="fa fa-recycle"
		                class="fa fa-recycle"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Refresh"><i data-value="fa fa-refresh"
		                class="fa fa-refresh"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Registered Trademark"><i data-value="fa fa-registered"
		                class="fa fa-registered"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Reply (mail-reply)"><i data-value="fa fa-reply"
		                class="fa fa-reply"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Reply-all (mail-reply-all)"><i data-value="fa fa-reply-all"
		                class="fa fa-reply-all"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Retweet"><i data-value="fa fa-retweet"
		                class="fa fa-retweet"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Road"><i data-value="fa fa-road" class="fa fa-road"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Rocket"><i data-value="fa fa-rocket"
		                class="fa fa-rocket"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Rss (feed)"><i data-value="fa fa-rss" class="fa fa-rss"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="RSS Square"><i data-value="fa fa-rss-square"
		                class="fa fa-rss-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Search"><i data-value="fa fa-search"
		                class="fa fa-search"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Search Minus"><i data-value="fa fa-search-minus"
		                class="fa fa-search-minus"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Search Plus"><i data-value="fa fa-search-plus"
		                class="fa fa-search-plus"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Server"><i data-value="fa fa-server"
		                class="fa fa-server"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Share (mail-forward)"><i data-value="fa fa-share"
		                class="fa fa-share"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Share Alt"><i data-value="fa fa-share-alt"
		                class="fa fa-share-alt"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Share Alt Square"><i data-value="fa fa-share-alt-square"
		                class="fa fa-share-alt-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Share Square"><i data-value="fa fa-share-square"
		                class="fa fa-share-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Share Square Outlined"><i data-value="fa fa-share-square-o"
		                class="fa fa-share-square-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Shield"><i data-value="fa fa-shield"
		                class="fa fa-shield"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Ship"><i data-value="fa fa-ship" class="fa fa-ship"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Shopping Bag"><i data-value="fa fa-shopping-bag"
		                class="fa fa-shopping-bag"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Shopping Basket"><i data-value="fa fa-shopping-basket"
		                class="fa fa-shopping-basket"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Shopping-cart"><i data-value="fa fa-shopping-cart"
		                class="fa fa-shopping-cart"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Sign In"><i data-value="fa fa-sign-in"
		                class="fa fa-sign-in"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Sign Out"><i data-value="fa fa-sign-out"
		                class="fa fa-sign-out"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Signal"><i data-value="fa fa-signal"
		                class="fa fa-signal"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Sitemap"><i data-value="fa fa-sitemap"
		                class="fa fa-sitemap"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Sliders"><i data-value="fa fa-sliders"
		                class="fa fa-sliders"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Smile Outlined"><i data-value="fa fa-smile-o"
		                class="fa fa-smile-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Sort (unsorted)"><i data-value="fa fa-sort"
		                class="fa fa-sort"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Sort Alpha Ascending"><i data-value="fa fa-sort-alpha-asc"
		                class="fa fa-sort-alpha-asc"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Sort Alpha Descending"><i data-value="fa fa-sort-alpha-desc"
		                class="fa fa-sort-alpha-desc"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Sort Amount Ascending"><i data-value="fa fa-sort-amount-asc"
		                class="fa fa-sort-amount-asc"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Sort Amount Descending"><i
		                data-value="fa fa-sort-amount-desc" class="fa fa-sort-amount-desc"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Sort Ascending (sort-up)"><i data-value="fa fa-sort-asc"
		                class="fa fa-sort-asc"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Sort Descending (sort-down)"><i data-value="fa fa-sort-desc"
		                class="fa fa-sort-desc"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Sort Numeric Ascending"><i
		                data-value="fa fa-sort-numeric-asc" class="fa fa-sort-numeric-asc"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Sort Numeric Descending"><i
		                data-value="fa fa-sort-numeric-desc" class="fa fa-sort-numeric-desc"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Space Shuttle"><i data-value="fa fa-space-shuttle"
		                class="fa fa-space-shuttle"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Spinner"><i data-value="fa fa-spinner"
		                class="fa fa-spinner"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Spoon"><i data-value="fa fa-spoon" class="fa fa-spoon"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Square"><i data-value="fa fa-square"
		                class="fa fa-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Square Outlined"><i data-value="fa fa-square-o"
		                class="fa fa-square-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Star"><i data-value="fa fa-star" class="fa fa-star"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Star-half"><i data-value="fa fa-star-half"
		                class="fa fa-star-half"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Star Half Outlined (star-half-empty, star-half-full)"><i
		                data-value="fa fa-star-half-o" class="fa fa-star-half-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Star Outlined"><i data-value="fa fa-star-o"
		                class="fa fa-star-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Sticky Note"><i data-value="fa fa-sticky-note"
		                class="fa fa-sticky-note"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Sticky Note Outlined"><i data-value="fa fa-sticky-note-o"
		                class="fa fa-sticky-note-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Street View"><i data-value="fa fa-street-view"
		                class="fa fa-street-view"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Suitcase"><i data-value="fa fa-suitcase"
		                class="fa fa-suitcase"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Sun Outlined"><i data-value="fa fa-sun-o"
		                class="fa fa-sun-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Tablet"><i data-value="fa fa-tablet"
		                class="fa fa-tablet"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Tachometer (dashboard)"><i data-value="fa fa-tachometer"
		                class="fa fa-tachometer"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Tag"><i data-value="fa fa-tag" class="fa fa-tag"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Tags"><i data-value="fa fa-tags" class="fa fa-tags"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Tasks"><i data-value="fa fa-tasks" class="fa fa-tasks"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Taxi (cab)"><i data-value="fa fa-taxi"
		                class="fa fa-taxi"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Television (tv)"><i data-value="fa fa-television"
		                class="fa fa-television"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Terminal"><i data-value="fa fa-terminal"
		                class="fa fa-terminal"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Thumb Tack"><i data-value="fa fa-thumb-tack"
		                class="fa fa-thumb-tack"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Thumbs-down"><i data-value="fa fa-thumbs-down"
		                class="fa fa-thumbs-down"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Thumbs Down Outlined"><i data-value="fa fa-thumbs-o-down"
		                class="fa fa-thumbs-o-down"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Thumbs Up Outlined"><i data-value="fa fa-thumbs-o-up"
		                class="fa fa-thumbs-o-up"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Thumbs-up"><i data-value="fa fa-thumbs-up"
		                class="fa fa-thumbs-up"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Ticket"><i data-value="fa fa-ticket"
		                class="fa fa-ticket"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Times (remove, close)"><i data-value="fa fa-times"
		                class="fa fa-times"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Times Circle"><i data-value="fa fa-times-circle"
		                class="fa fa-times-circle"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Times Circle Outlined"><i data-value="fa fa-times-circle-o"
		                class="fa fa-times-circle-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Tint"><i data-value="fa fa-tint" class="fa fa-tint"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Toggle Off"><i data-value="fa fa-toggle-off"
		                class="fa fa-toggle-off"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Toggle On"><i data-value="fa fa-toggle-on"
		                class="fa fa-toggle-on"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Trademark"><i data-value="fa fa-trademark"
		                class="fa fa-trademark"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Trash"><i data-value="fa fa-trash" class="fa fa-trash"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Trash Outlined"><i data-value="fa fa-trash-o"
		                class="fa fa-trash-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Tree"><i data-value="fa fa-tree" class="fa fa-tree"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Trophy"><i data-value="fa fa-trophy"
		                class="fa fa-trophy"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Truck"><i data-value="fa fa-truck" class="fa fa-truck"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="TTY"><i data-value="fa fa-tty" class="fa fa-tty"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Umbrella"><i data-value="fa fa-umbrella"
		                class="fa fa-umbrella"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="University (institution, bank)"><i
		                data-value="fa fa-university" class="fa fa-university"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Unlock"><i data-value="fa fa-unlock"
		                class="fa fa-unlock"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Unlock Alt"><i data-value="fa fa-unlock-alt"
		                class="fa fa-unlock-alt"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Upload"><i data-value="fa fa-upload"
		                class="fa fa-upload"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="User"><i data-value="fa fa-user" class="fa fa-user"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Add User"><i data-value="fa fa-user-plus"
		                class="fa fa-user-plus"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="User Secret"><i data-value="fa fa-user-secret"
		                class="fa fa-user-secret"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Remove User"><i data-value="fa fa-user-times"
		                class="fa fa-user-times"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Users (group)"><i data-value="fa fa-users"
		                class="fa fa-users"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Video Camera"><i data-value="fa fa-video-camera"
		                class="fa fa-video-camera"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Volume-down"><i data-value="fa fa-volume-down"
		                class="fa fa-volume-down"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Volume-off"><i data-value="fa fa-volume-off"
		                class="fa fa-volume-off"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Volume-up"><i data-value="fa fa-volume-up"
		                class="fa fa-volume-up"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Wheelchair"><i data-value="fa fa-wheelchair"
		                class="fa fa-wheelchair"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="WiFi"><i data-value="fa fa-wifi" class="fa fa-wifi"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Wrench"><i data-value="fa fa-wrench"
		                class="fa fa-wrench"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="File"><i data-value="fa fa-file" class="fa fa-file"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Archive File Outlined (file-zip-o)"><i
		                data-value="fa fa-file-archive-o" class="fa fa-file-archive-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Audio File Outlined (file-sound-o)"><i
		                data-value="fa fa-file-audio-o" class="fa fa-file-audio-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Code File Outlined"><i data-value="fa fa-file-code-o"
		                class="fa fa-file-code-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Excel File Outlined"><i data-value="fa fa-file-excel-o"
		                class="fa fa-file-excel-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Image File Outlined (file-photo-o, file-picture-o)"><i
		                data-value="fa fa-file-image-o" class="fa fa-file-image-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="File Outlined"><i data-value="fa fa-file-o"
		                class="fa fa-file-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="PDF File Outlined"><i data-value="fa fa-file-pdf-o"
		                class="fa fa-file-pdf-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Powerpoint File Outlined"><i
		                data-value="fa fa-file-powerpoint-o" class="fa fa-file-powerpoint-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="File Text"><i data-value="fa fa-file-text"
		                class="fa fa-file-text"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="File Text Outlined"><i data-value="fa fa-file-text-o"
		                class="fa fa-file-text-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Video File Outlined (file-movie-o)"><i
		                data-value="fa fa-file-video-o" class="fa fa-file-video-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Word File Outlined"><i data-value="fa fa-file-word-o"
		                class="fa fa-file-word-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Circle Outlined Notched"><i data-value="fa fa-circle-o-notch"
		                class="fa fa-circle-o-notch"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Cog (gear)"><i data-value="fa fa-cog" class="fa fa-cog"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Refresh"><i data-value="fa fa-refresh"
		                class="fa fa-refresh"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Spinner"><i data-value="fa fa-spinner"
		                class="fa fa-spinner"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Check Square"><i data-value="fa fa-check-square"
		                class="fa fa-check-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Check Square Outlined"><i data-value="fa fa-check-square-o"
		                class="fa fa-check-square-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Circle"><i data-value="fa fa-circle"
		                class="fa fa-circle"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Circle Outlined"><i data-value="fa fa-circle-o"
		                class="fa fa-circle-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Dot Circle Outlined"><i data-value="fa fa-dot-circle-o"
		                class="fa fa-dot-circle-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Minus Square"><i data-value="fa fa-minus-square"
		                class="fa fa-minus-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Minus Square Outlined"><i data-value="fa fa-minus-square-o"
		                class="fa fa-minus-square-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Plus Square"><i data-value="fa fa-plus-square"
		                class="fa fa-plus-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Plus Square Outlined"><i data-value="fa fa-plus-square-o"
		                class="fa fa-plus-square-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Square"><i data-value="fa fa-square"
		                class="fa fa-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Square Outlined"><i data-value="fa fa-square-o"
		                class="fa fa-square-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="American Express Credit Card"><i data-value="fa fa-cc-amex"
		                class="fa fa-cc-amex"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Diner's Club Credit Card"><i
		                data-value="fa fa-cc-diners-club" class="fa fa-cc-diners-club"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Discover Credit Card"><i data-value="fa fa-cc-discover"
		                class="fa fa-cc-discover"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="JCB Credit Card"><i data-value="fa fa-cc-jcb"
		                class="fa fa-cc-jcb"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="MasterCard Credit Card"><i data-value="fa fa-cc-mastercard"
		                class="fa fa-cc-mastercard"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Paypal Credit Card"><i data-value="fa fa-cc-paypal"
		                class="fa fa-cc-paypal"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Stripe Credit Card"><i data-value="fa fa-cc-stripe"
		                class="fa fa-cc-stripe"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Visa Credit Card"><i data-value="fa fa-cc-visa"
		                class="fa fa-cc-visa"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Credit-card"><i data-value="fa fa-credit-card"
		                class="fa fa-credit-card"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Credit Card"><i data-value="fa fa-credit-card-alt"
		                class="fa fa-credit-card-alt"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Google Wallet"><i data-value="fa fa-google-wallet"
		                class="fa fa-google-wallet"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Paypal"><i data-value="fa fa-paypal"
		                class="fa fa-paypal"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Area Chart"><i data-value="fa fa-area-chart"
		                class="fa fa-area-chart"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Bar Chart (bar-chart-o)"><i data-value="fa fa-bar-chart"
		                class="fa fa-bar-chart"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Line Chart"><i data-value="fa fa-line-chart"
		                class="fa fa-line-chart"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Pie Chart"><i data-value="fa fa-pie-chart"
		                class="fa fa-pie-chart"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Bitcoin (BTC) (bitcoin)"><i data-value="fa fa-btc"
		                class="fa fa-btc"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Euro (EUR) (euro)"><i data-value="fa fa-eur"
		                class="fa fa-eur"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="GBP"><i data-value="fa fa-gbp" class="fa fa-gbp"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="GG Currency"><i data-value="fa fa-gg" class="fa fa-gg"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="GG Currency Circle"><i data-value="fa fa-gg-circle"
		                class="fa fa-gg-circle"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Shekel (ILS) (shekel, sheqel)"><i data-value="fa fa-ils"
		                class="fa fa-ils"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Indian Rupee (INR) (rupee)"><i data-value="fa fa-inr"
		                class="fa fa-inr"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Japanese Yen (JPY) (cny, rmb, yen)"><i data-value="fa fa-jpy"
		                class="fa fa-jpy"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Korean Won (KRW) (won)"><i data-value="fa fa-krw"
		                class="fa fa-krw"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Money"><i data-value="fa fa-money" class="fa fa-money"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Russian Ruble (RUB) (ruble, rouble)"><i
		                data-value="fa fa-rub" class="fa fa-rub"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Turkish Lira (TRY) (turkish-lira)"><i data-value="fa fa-try"
		                class="fa fa-try"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="US Dollar (dollar)"><i data-value="fa fa-usd"
		                class="fa fa-usd"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Align-center"><i data-value="fa fa-align-center"
		                class="fa fa-align-center"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Align-justify"><i data-value="fa fa-align-justify"
		                class="fa fa-align-justify"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Align-left"><i data-value="fa fa-align-left"
		                class="fa fa-align-left"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Align-right"><i data-value="fa fa-align-right"
		                class="fa fa-align-right"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Bold"><i data-value="fa fa-bold" class="fa fa-bold"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Chain Broken (unlink)"><i data-value="fa fa-chain-broken"
		                class="fa fa-chain-broken"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Clipboard (paste)"><i data-value="fa fa-clipboard"
		                class="fa fa-clipboard"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Columns"><i data-value="fa fa-columns"
		                class="fa fa-columns"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Eraser"><i data-value="fa fa-eraser"
		                class="fa fa-eraser"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="File"><i data-value="fa fa-file" class="fa fa-file"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="File Outlined"><i data-value="fa fa-file-o"
		                class="fa fa-file-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="File Text"><i data-value="fa fa-file-text"
		                class="fa fa-file-text"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="File Text Outlined"><i data-value="fa fa-file-text-o"
		                class="fa fa-file-text-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Files Outlined (copy)"><i data-value="fa fa-files-o"
		                class="fa fa-files-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Floppy Outlined (save)"><i data-value="fa fa-floppy-o"
		                class="fa fa-floppy-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Font"><i data-value="fa fa-font" class="fa fa-font"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Header"><i data-value="fa fa-header"
		                class="fa fa-header"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Indent"><i data-value="fa fa-indent"
		                class="fa fa-indent"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Italic"><i data-value="fa fa-italic"
		                class="fa fa-italic"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Link (chain)"><i data-value="fa fa-link"
		                class="fa fa-link"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="List"><i data-value="fa fa-list" class="fa fa-list"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="List-alt"><i data-value="fa fa-list-alt"
		                class="fa fa-list-alt"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="List-ol"><i data-value="fa fa-list-ol"
		                class="fa fa-list-ol"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="List-ul"><i data-value="fa fa-list-ul"
		                class="fa fa-list-ul"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Outdent (dedent)"><i data-value="fa fa-outdent"
		                class="fa fa-outdent"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Paperclip"><i data-value="fa fa-paperclip"
		                class="fa fa-paperclip"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Paragraph"><i data-value="fa fa-paragraph"
		                class="fa fa-paragraph"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Repeat (rotate-right)"><i data-value="fa fa-repeat"
		                class="fa fa-repeat"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Scissors (cut)"><i data-value="fa fa-scissors"
		                class="fa fa-scissors"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Strikethrough"><i data-value="fa fa-strikethrough"
		                class="fa fa-strikethrough"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Subscript"><i data-value="fa fa-subscript"
		                class="fa fa-subscript"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Superscript"><i data-value="fa fa-superscript"
		                class="fa fa-superscript"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Table"><i data-value="fa fa-table" class="fa fa-table"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Text-height"><i data-value="fa fa-text-height"
		                class="fa fa-text-height"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Text-width"><i data-value="fa fa-text-width"
		                class="fa fa-text-width"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Th"><i data-value="fa fa-th" class="fa fa-th"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Th-large"><i data-value="fa fa-th-large"
		                class="fa fa-th-large"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Th-list"><i data-value="fa fa-th-list"
		                class="fa fa-th-list"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Underline"><i data-value="fa fa-underline"
		                class="fa fa-underline"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Undo (rotate-left)"><i data-value="fa fa-undo"
		                class="fa fa-undo"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Angle Double Down"><i data-value="fa fa-angle-double-down"
		                class="fa fa-angle-double-down"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Angle Double Left"><i data-value="fa fa-angle-double-left"
		                class="fa fa-angle-double-left"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Angle Double Right"><i data-value="fa fa-angle-double-right"
		                class="fa fa-angle-double-right"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Angle Double Up"><i data-value="fa fa-angle-double-up"
		                class="fa fa-angle-double-up"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Angle-down"><i data-value="fa fa-angle-down"
		                class="fa fa-angle-down"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Angle-left"><i data-value="fa fa-angle-left"
		                class="fa fa-angle-left"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Angle-right"><i data-value="fa fa-angle-right"
		                class="fa fa-angle-right"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Angle-up"><i data-value="fa fa-angle-up"
		                class="fa fa-angle-up"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Arrow Circle Down"><i data-value="fa fa-arrow-circle-down"
		                class="fa fa-arrow-circle-down"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Arrow Circle Left"><i data-value="fa fa-arrow-circle-left"
		                class="fa fa-arrow-circle-left"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Arrow Circle Outlined Down"><i
		                data-value="fa fa-arrow-circle-o-down" class="fa fa-arrow-circle-o-down"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Arrow Circle Outlined Left"><i
		                data-value="fa fa-arrow-circle-o-left" class="fa fa-arrow-circle-o-left"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Arrow Circle Outlined Right"><i
		                data-value="fa fa-arrow-circle-o-right" class="fa fa-arrow-circle-o-right"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Arrow Circle Outlined Up"><i
		                data-value="fa fa-arrow-circle-o-up" class="fa fa-arrow-circle-o-up"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Arrow Circle Right"><i data-value="fa fa-arrow-circle-right"
		                class="fa fa-arrow-circle-right"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Arrow Circle Up"><i data-value="fa fa-arrow-circle-up"
		                class="fa fa-arrow-circle-up"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Arrow-down"><i data-value="fa fa-arrow-down"
		                class="fa fa-arrow-down"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Arrow-left"><i data-value="fa fa-arrow-left"
		                class="fa fa-arrow-left"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Arrow-right"><i data-value="fa fa-arrow-right"
		                class="fa fa-arrow-right"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Arrow-up"><i data-value="fa fa-arrow-up"
		                class="fa fa-arrow-up"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Arrows"><i data-value="fa fa-arrows"
		                class="fa fa-arrows"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Arrows Alt"><i data-value="fa fa-arrows-alt"
		                class="fa fa-arrows-alt"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Arrows Horizontal"><i data-value="fa fa-arrows-h"
		                class="fa fa-arrows-h"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Arrows Vertical"><i data-value="fa fa-arrows-v"
		                class="fa fa-arrows-v"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Caret Down"><i data-value="fa fa-caret-down"
		                class="fa fa-caret-down"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Caret Left"><i data-value="fa fa-caret-left"
		                class="fa fa-caret-left"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Caret Right"><i data-value="fa fa-caret-right"
		                class="fa fa-caret-right"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Caret Square Outlined Down (toggle-down)"><i
		                data-value="fa fa-caret-square-o-down" class="fa fa-caret-square-o-down"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Caret Square Outlined Left (toggle-left)"><i
		                data-value="fa fa-caret-square-o-left" class="fa fa-caret-square-o-left"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Caret Square Outlined Right (toggle-right)"><i
		                data-value="fa fa-caret-square-o-right" class="fa fa-caret-square-o-right"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Caret Square Outlined Up (toggle-up)"><i
		                data-value="fa fa-caret-square-o-up" class="fa fa-caret-square-o-up"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Caret Up"><i data-value="fa fa-caret-up"
		                class="fa fa-caret-up"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Chevron Circle Down"><i
		                data-value="fa fa-chevron-circle-down" class="fa fa-chevron-circle-down"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Chevron Circle Left"><i
		                data-value="fa fa-chevron-circle-left" class="fa fa-chevron-circle-left"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Chevron Circle Right"><i
		                data-value="fa fa-chevron-circle-right" class="fa fa-chevron-circle-right"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Chevron Circle Up"><i data-value="fa fa-chevron-circle-up"
		                class="fa fa-chevron-circle-up"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Chevron-down"><i data-value="fa fa-chevron-down"
		                class="fa fa-chevron-down"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Chevron-left"><i data-value="fa fa-chevron-left"
		                class="fa fa-chevron-left"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Chevron-right"><i data-value="fa fa-chevron-right"
		                class="fa fa-chevron-right"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Chevron-up"><i data-value="fa fa-chevron-up"
		                class="fa fa-chevron-up"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Exchange"><i data-value="fa fa-exchange"
		                class="fa fa-exchange"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Hand Outlined Down"><i data-value="fa fa-hand-o-down"
		                class="fa fa-hand-o-down"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Hand Outlined Left"><i data-value="fa fa-hand-o-left"
		                class="fa fa-hand-o-left"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Hand Outlined Right"><i data-value="fa fa-hand-o-right"
		                class="fa fa-hand-o-right"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Hand Outlined Up"><i data-value="fa fa-hand-o-up"
		                class="fa fa-hand-o-up"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Long Arrow Down"><i data-value="fa fa-long-arrow-down"
		                class="fa fa-long-arrow-down"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Long Arrow Left"><i data-value="fa fa-long-arrow-left"
		                class="fa fa-long-arrow-left"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Long Arrow Right"><i data-value="fa fa-long-arrow-right"
		                class="fa fa-long-arrow-right"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Long Arrow Up"><i data-value="fa fa-long-arrow-up"
		                class="fa fa-long-arrow-up"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Arrows Alt"><i data-value="fa fa-arrows-alt"
		                class="fa fa-arrows-alt"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Backward"><i data-value="fa fa-backward"
		                class="fa fa-backward"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Compress"><i data-value="fa fa-compress"
		                class="fa fa-compress"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Eject"><i data-value="fa fa-eject" class="fa fa-eject"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Expand"><i data-value="fa fa-expand"
		                class="fa fa-expand"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Fast-backward"><i data-value="fa fa-fast-backward"
		                class="fa fa-fast-backward"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Fast-forward"><i data-value="fa fa-fast-forward"
		                class="fa fa-fast-forward"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Forward"><i data-value="fa fa-forward"
		                class="fa fa-forward"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Pause"><i data-value="fa fa-pause" class="fa fa-pause"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Pause Circle"><i data-value="fa fa-pause-circle"
		                class="fa fa-pause-circle"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Pause Circle Outlined"><i data-value="fa fa-pause-circle-o"
		                class="fa fa-pause-circle-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Play"><i data-value="fa fa-play" class="fa fa-play"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Play Circle"><i data-value="fa fa-play-circle"
		                class="fa fa-play-circle"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Play Circle Outlined"><i data-value="fa fa-play-circle-o"
		                class="fa fa-play-circle-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Random"><i data-value="fa fa-random"
		                class="fa fa-random"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Step-backward"><i data-value="fa fa-step-backward"
		                class="fa fa-step-backward"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Step-forward"><i data-value="fa fa-step-forward"
		                class="fa fa-step-forward"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Stop"><i data-value="fa fa-stop" class="fa fa-stop"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Stop Circle"><i data-value="fa fa-stop-circle"
		                class="fa fa-stop-circle"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Stop Circle Outlined"><i data-value="fa fa-stop-circle-o"
		                class="fa fa-stop-circle-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="YouTube Play"><i data-value="fa fa-youtube-play"
		                class="fa fa-youtube-play"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Ambulance"><i data-value="fa fa-ambulance"
		                class="fa fa-ambulance"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Bicycle"><i data-value="fa fa-bicycle"
		                class="fa fa-bicycle"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Bus"><i data-value="fa fa-bus" class="fa fa-bus"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Car (automobile)"><i data-value="fa fa-car"
		                class="fa fa-car"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Fighter-jet"><i data-value="fa fa-fighter-jet"
		                class="fa fa-fighter-jet"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Motorcycle"><i data-value="fa fa-motorcycle"
		                class="fa fa-motorcycle"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Plane"><i data-value="fa fa-plane" class="fa fa-plane"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Rocket"><i data-value="fa fa-rocket"
		                class="fa fa-rocket"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Ship"><i data-value="fa fa-ship" class="fa fa-ship"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Space Shuttle"><i data-value="fa fa-space-shuttle"
		                class="fa fa-space-shuttle"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Subway"><i data-value="fa fa-subway"
		                class="fa fa-subway"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Taxi (cab)"><i data-value="fa fa-taxi"
		                class="fa fa-taxi"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Train"><i data-value="fa fa-train" class="fa fa-train"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Truck"><i data-value="fa fa-truck" class="fa fa-truck"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Wheelchair"><i data-value="fa fa-wheelchair"
		                class="fa fa-wheelchair"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Lizard (Hand)"><i data-value="fa fa-hand-lizard-o"
		                class="fa fa-hand-lizard-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Hand Outlined Down"><i data-value="fa fa-hand-o-down"
		                class="fa fa-hand-o-down"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Hand Outlined Left"><i data-value="fa fa-hand-o-left"
		                class="fa fa-hand-o-left"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Hand Outlined Right"><i data-value="fa fa-hand-o-right"
		                class="fa fa-hand-o-right"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Hand Outlined Up"><i data-value="fa fa-hand-o-up"
		                class="fa fa-hand-o-up"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Paper (Hand) (hand-stop-o)"><i
		                data-value="fa fa-hand-paper-o" class="fa fa-hand-paper-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Hand Peace"><i data-value="fa fa-hand-peace-o"
		                class="fa fa-hand-peace-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Hand Pointer"><i data-value="fa fa-hand-pointer-o"
		                class="fa fa-hand-pointer-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Rock (Hand) (hand-grab-o)"><i data-value="fa fa-hand-rock-o"
		                class="fa fa-hand-rock-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Scissors (Hand)"><i data-value="fa fa-hand-scissors-o"
		                class="fa fa-hand-scissors-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Spock (Hand)"><i data-value="fa fa-hand-spock-o"
		                class="fa fa-hand-spock-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Thumbs-down"><i data-value="fa fa-thumbs-down"
		                class="fa fa-thumbs-down"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Thumbs Down Outlined"><i data-value="fa fa-thumbs-o-down"
		                class="fa fa-thumbs-o-down"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Thumbs Up Outlined"><i data-value="fa fa-thumbs-o-up"
		                class="fa fa-thumbs-o-up"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Thumbs-up"><i data-value="fa fa-thumbs-up"
		                class="fa fa-thumbs-up"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Genderless"><i data-value="fa fa-genderless"
		                class="fa fa-genderless"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Mars"><i data-value="fa fa-mars" class="fa fa-mars"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Mars Double"><i data-value="fa fa-mars-double"
		                class="fa fa-mars-double"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Mars Stroke"><i data-value="fa fa-mars-stroke"
		                class="fa fa-mars-stroke"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Mars Stroke Horizontal"><i data-value="fa fa-mars-stroke-h"
		                class="fa fa-mars-stroke-h"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Mars Stroke Vertical"><i data-value="fa fa-mars-stroke-v"
		                class="fa fa-mars-stroke-v"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Mercury"><i data-value="fa fa-mercury"
		                class="fa fa-mercury"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Neuter"><i data-value="fa fa-neuter"
		                class="fa fa-neuter"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Transgender (intersex)"><i data-value="fa fa-transgender"
		                class="fa fa-transgender"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Transgender Alt"><i data-value="fa fa-transgender-alt"
		                class="fa fa-transgender-alt"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Venus"><i data-value="fa fa-venus" class="fa fa-venus"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Venus Double"><i data-value="fa fa-venus-double"
		                class="fa fa-venus-double"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Venus Mars"><i data-value="fa fa-venus-mars"
		                class="fa fa-venus-mars"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="500px"><i data-value="fa fa-500px" class="fa fa-500px"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="App.net"><i data-value="fa fa-adn" class="fa fa-adn"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Amazon"><i data-value="fa fa-amazon"
		                class="fa fa-amazon"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Android"><i data-value="fa fa-android"
		                class="fa fa-android"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="AngelList"><i data-value="fa fa-angellist"
		                class="fa fa-angellist"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Apple"><i data-value="fa fa-apple" class="fa fa-apple"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Behance"><i data-value="fa fa-behance"
		                class="fa fa-behance"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Behance Square"><i data-value="fa fa-behance-square"
		                class="fa fa-behance-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Bitbucket"><i data-value="fa fa-bitbucket"
		                class="fa fa-bitbucket"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Bitbucket Square"><i data-value="fa fa-bitbucket-square"
		                class="fa fa-bitbucket-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Font Awesome Black Tie"><i data-value="fa fa-black-tie"
		                class="fa fa-black-tie"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Bluetooth"><i data-value="fa fa-bluetooth"
		                class="fa fa-bluetooth"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Bluetooth"><i data-value="fa fa-bluetooth-b"
		                class="fa fa-bluetooth-b"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Bitcoin (BTC) (bitcoin)"><i data-value="fa fa-btc"
		                class="fa fa-btc"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="BuySellAds"><i data-value="fa fa-buysellads"
		                class="fa fa-buysellads"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="American Express Credit Card"><i data-value="fa fa-cc-amex"
		                class="fa fa-cc-amex"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Diner's Club Credit Card"><i
		                data-value="fa fa-cc-diners-club" class="fa fa-cc-diners-club"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Discover Credit Card"><i data-value="fa fa-cc-discover"
		                class="fa fa-cc-discover"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="JCB Credit Card"><i data-value="fa fa-cc-jcb"
		                class="fa fa-cc-jcb"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="MasterCard Credit Card"><i data-value="fa fa-cc-mastercard"
		                class="fa fa-cc-mastercard"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Paypal Credit Card"><i data-value="fa fa-cc-paypal"
		                class="fa fa-cc-paypal"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Stripe Credit Card"><i data-value="fa fa-cc-stripe"
		                class="fa fa-cc-stripe"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Visa Credit Card"><i data-value="fa fa-cc-visa"
		                class="fa fa-cc-visa"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Chrome"><i data-value="fa fa-chrome"
		                class="fa fa-chrome"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Codepen"><i data-value="fa fa-codepen"
		                class="fa fa-codepen"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Codie Pie"><i data-value="fa fa-codiepie"
		                class="fa fa-codiepie"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Connect Develop"><i data-value="fa fa-connectdevelop"
		                class="fa fa-connectdevelop"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Contao"><i data-value="fa fa-contao"
		                class="fa fa-contao"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="CSS 3 Logo"><i data-value="fa fa-css3"
		                class="fa fa-css3"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="DashCube"><i data-value="fa fa-dashcube"
		                class="fa fa-dashcube"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Delicious Logo"><i data-value="fa fa-delicious"
		                class="fa fa-delicious"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="DeviantART"><i data-value="fa fa-deviantart"
		                class="fa fa-deviantart"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Digg Logo"><i data-value="fa fa-digg" class="fa fa-digg"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Dribbble"><i data-value="fa fa-dribbble"
		                class="fa fa-dribbble"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Dropbox"><i data-value="fa fa-dropbox"
		                class="fa fa-dropbox"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Drupal Logo"><i data-value="fa fa-drupal"
		                class="fa fa-drupal"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Edge Browser"><i data-value="fa fa-edge"
		                class="fa fa-edge"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Galactic Empire (ge)"><i data-value="fa fa-empire"
		                class="fa fa-empire"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="ExpeditedSSL"><i data-value="fa fa-expeditedssl"
		                class="fa fa-expeditedssl"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Facebook (facebook-f)"><i data-value="fa fa-facebook"
		                class="fa fa-facebook"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Facebook Official"><i data-value="fa fa-facebook-official"
		                class="fa fa-facebook-official"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Facebook Square"><i data-value="fa fa-facebook-square"
		                class="fa fa-facebook-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Firefox"><i data-value="fa fa-firefox"
		                class="fa fa-firefox"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Flickr"><i data-value="fa fa-flickr"
		                class="fa fa-flickr"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Fonticons"><i data-value="fa fa-fonticons"
		                class="fa fa-fonticons"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Fort Awesome"><i data-value="fa fa-fort-awesome"
		                class="fa fa-fort-awesome"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Forumbee"><i data-value="fa fa-forumbee"
		                class="fa fa-forumbee"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Foursquare"><i data-value="fa fa-foursquare"
		                class="fa fa-foursquare"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Get Pocket"><i data-value="fa fa-get-pocket"
		                class="fa fa-get-pocket"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="GG Currency"><i data-value="fa fa-gg" class="fa fa-gg"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="GG Currency Circle"><i data-value="fa fa-gg-circle"
		                class="fa fa-gg-circle"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Git"><i data-value="fa fa-git" class="fa fa-git"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Git Square"><i data-value="fa fa-git-square"
		                class="fa fa-git-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="GitHub"><i data-value="fa fa-github"
		                class="fa fa-github"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="GitHub Alt"><i data-value="fa fa-github-alt"
		                class="fa fa-github-alt"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="GitHub Square"><i data-value="fa fa-github-square"
		                class="fa fa-github-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Google Logo"><i data-value="fa fa-google"
		                class="fa fa-google"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Google Plus"><i data-value="fa fa-google-plus"
		                class="fa fa-google-plus"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Google Plus Square"><i data-value="fa fa-google-plus-square"
		                class="fa fa-google-plus-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Google Wallet"><i data-value="fa fa-google-wallet"
		                class="fa fa-google-wallet"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Gratipay (Gittip) (gittip)"><i data-value="fa fa-gittip"
		                class="fa fa-gittip"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Hacker News (y-combinator-square, yc-square)"><i
		                data-value="fa fa-hacker-news" class="fa fa-hacker-news"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Houzz"><i data-value="fa fa-houzz" class="fa fa-houzz"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="HTML 5 Logo"><i data-value="fa fa-html5"
		                class="fa fa-html5"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Instagram"><i data-value="fa fa-instagram"
		                class="fa fa-instagram"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Internet-explorer"><i data-value="fa fa-internet-explorer"
		                class="fa fa-internet-explorer"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Ioxhost"><i data-value="fa fa-ioxhost"
		                class="fa fa-ioxhost"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Joomla Logo"><i data-value="fa fa-joomla"
		                class="fa fa-joomla"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="JsFiddle"><i data-value="fa fa-jsfiddle"
		                class="fa fa-jsfiddle"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Last.fm"><i data-value="fa fa-lastfm"
		                class="fa fa-lastfm"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Last.fm Square"><i data-value="fa fa-lastfm-square"
		                class="fa fa-lastfm-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Leanpub"><i data-value="fa fa-leanpub"
		                class="fa fa-leanpub"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="LinkedIn"><i data-value="fa fa-linkedin"
		                class="fa fa-linkedin"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="LinkedIn Square"><i data-value="fa fa-linkedin-square"
		                class="fa fa-linkedin-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Linux"><i data-value="fa fa-linux" class="fa fa-linux"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="MaxCDN"><i data-value="fa fa-maxcdn"
		                class="fa fa-maxcdn"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Meanpath"><i data-value="fa fa-meanpath"
		                class="fa fa-meanpath"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Medium"><i data-value="fa fa-medium"
		                class="fa fa-medium"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Mixcloud"><i data-value="fa fa-mixcloud"
		                class="fa fa-mixcloud"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="MODX"><i data-value="fa fa-modx" class="fa fa-modx"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Odnoklassniki"><i data-value="fa fa-odnoklassniki"
		                class="fa fa-odnoklassniki"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Odnoklassniki Square"><i
		                data-value="fa fa-odnoklassniki-square" class="fa fa-odnoklassniki-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="OpenCart"><i data-value="fa fa-opencart"
		                class="fa fa-opencart"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="OpenID"><i data-value="fa fa-openid"
		                class="fa fa-openid"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Opera"><i data-value="fa fa-opera" class="fa fa-opera"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Optin Monster"><i data-value="fa fa-optin-monster"
		                class="fa fa-optin-monster"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Pagelines"><i data-value="fa fa-pagelines"
		                class="fa fa-pagelines"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Paypal"><i data-value="fa fa-paypal"
		                class="fa fa-paypal"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Pied Piper Logo"><i data-value="fa fa-pied-piper"
		                class="fa fa-pied-piper"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Pied Piper Alternate Logo"><i
		                data-value="fa fa-pied-piper-alt" class="fa fa-pied-piper-alt"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Pinterest"><i data-value="fa fa-pinterest"
		                class="fa fa-pinterest"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Pinterest P"><i data-value="fa fa-pinterest-p"
		                class="fa fa-pinterest-p"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Pinterest Square"><i data-value="fa fa-pinterest-square"
		                class="fa fa-pinterest-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Product Hunt"><i data-value="fa fa-product-hunt"
		                class="fa fa-product-hunt"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="QQ"><i data-value="fa fa-qq" class="fa fa-qq"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Rebel Alliance (ra)"><i data-value="fa fa-rebel"
		                class="fa fa-rebel"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Reddit Logo"><i data-value="fa fa-reddit"
		                class="fa fa-reddit"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Reddit Alien"><i data-value="fa fa-reddit-alien"
		                class="fa fa-reddit-alien"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Reddit Square"><i data-value="fa fa-reddit-square"
		                class="fa fa-reddit-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Renren"><i data-value="fa fa-renren"
		                class="fa fa-renren"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Safari"><i data-value="fa fa-safari"
		                class="fa fa-safari"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Scribd"><i data-value="fa fa-scribd"
		                class="fa fa-scribd"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Sellsy"><i data-value="fa fa-sellsy"
		                class="fa fa-sellsy"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Share Alt"><i data-value="fa fa-share-alt"
		                class="fa fa-share-alt"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Share Alt Square"><i data-value="fa fa-share-alt-square"
		                class="fa fa-share-alt-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Shirts in Bulk"><i data-value="fa fa-shirtsinbulk"
		                class="fa fa-shirtsinbulk"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="SimplyBuilt"><i data-value="fa fa-simplybuilt"
		                class="fa fa-simplybuilt"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Skyatlas"><i data-value="fa fa-skyatlas"
		                class="fa fa-skyatlas"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Skype"><i data-value="fa fa-skype" class="fa fa-skype"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Slack Logo"><i data-value="fa fa-slack"
		                class="fa fa-slack"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Slideshare"><i data-value="fa fa-slideshare"
		                class="fa fa-slideshare"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="SoundCloud"><i data-value="fa fa-soundcloud"
		                class="fa fa-soundcloud"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Spotify"><i data-value="fa fa-spotify"
		                class="fa fa-spotify"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Stack Exchange"><i data-value="fa fa-stack-exchange"
		                class="fa fa-stack-exchange"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Stack Overflow"><i data-value="fa fa-stack-overflow"
		                class="fa fa-stack-overflow"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Steam"><i data-value="fa fa-steam" class="fa fa-steam"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Steam Square"><i data-value="fa fa-steam-square"
		                class="fa fa-steam-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="StumbleUpon Logo"><i data-value="fa fa-stumbleupon"
		                class="fa fa-stumbleupon"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="StumbleUpon Circle"><i data-value="fa fa-stumbleupon-circle"
		                class="fa fa-stumbleupon-circle"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Tencent Weibo"><i data-value="fa fa-tencent-weibo"
		                class="fa fa-tencent-weibo"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Trello"><i data-value="fa fa-trello"
		                class="fa fa-trello"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="TripAdvisor"><i data-value="fa fa-tripadvisor"
		                class="fa fa-tripadvisor"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Tumblr"><i data-value="fa fa-tumblr"
		                class="fa fa-tumblr"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Tumblr Square"><i data-value="fa fa-tumblr-square"
		                class="fa fa-tumblr-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Twitch"><i data-value="fa fa-twitch"
		                class="fa fa-twitch"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Twitter"><i data-value="fa fa-twitter"
		                class="fa fa-twitter"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Twitter Square"><i data-value="fa fa-twitter-square"
		                class="fa fa-twitter-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="USB"><i data-value="fa fa-usb" class="fa fa-usb"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Viacoin"><i data-value="fa fa-viacoin"
		                class="fa fa-viacoin"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Vimeo"><i data-value="fa fa-vimeo" class="fa fa-vimeo"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Vimeo Square"><i data-value="fa fa-vimeo-square"
		                class="fa fa-vimeo-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Vine"><i data-value="fa fa-vine" class="fa fa-vine"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="VK"><i data-value="fa fa-vk" class="fa fa-vk"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Weibo"><i data-value="fa fa-weibo" class="fa fa-weibo"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Weixin (WeChat) (wechat)"><i data-value="fa fa-weixin"
		                class="fa fa-weixin"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="What's App"><i data-value="fa fa-whatsapp"
		                class="fa fa-whatsapp"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Wikipedia W"><i data-value="fa fa-wikipedia-w"
		                class="fa fa-wikipedia-w"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Windows"><i data-value="fa fa-windows"
		                class="fa fa-windows"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="WordPress Logo"><i data-value="fa fa-wordpress"
		                class="fa fa-wordpress"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Xing"><i data-value="fa fa-xing" class="fa fa-xing"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Xing Square"><i data-value="fa fa-xing-square"
		                class="fa fa-xing-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Y Combinator (yc)"><i data-value="fa fa-y-combinator"
		                class="fa fa-y-combinator"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Yahoo Logo"><i data-value="fa fa-yahoo"
		                class="fa fa-yahoo"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Yelp"><i data-value="fa fa-yelp" class="fa fa-yelp"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="YouTube"><i data-value="fa fa-youtube"
		                class="fa fa-youtube"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="YouTube Play"><i data-value="fa fa-youtube-play"
		                class="fa fa-youtube-play"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="YouTube Square"><i data-value="fa fa-youtube-square"
		                class="fa fa-youtube-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Ambulance"><i data-value="fa fa-ambulance"
		                class="fa fa-ambulance"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="H Square"><i data-value="fa fa-h-square"
		                class="fa fa-h-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Heart"><i data-value="fa fa-heart" class="fa fa-heart"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Heart Outlined"><i data-value="fa fa-heart-o"
		                class="fa fa-heart-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Heartbeat"><i data-value="fa fa-heartbeat"
		                class="fa fa-heartbeat"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Hospital Outlined"><i data-value="fa fa-hospital-o"
		                class="fa fa-hospital-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Medkit"><i data-value="fa fa-medkit"
		                class="fa fa-medkit"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Plus Square"><i data-value="fa fa-plus-square"
		                class="fa fa-plus-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Stethoscope"><i data-value="fa fa-stethoscope"
		                class="fa fa-stethoscope"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="User-md"><i data-value="fa fa-user-md"
		                class="fa fa-user-md"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Wheelchair"><i data-value="fa fa-wheelchair"
		                class="fa fa-wheelchair"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Bluetooth"><i data-value="fa fa-bluetooth"
		                class="fa fa-bluetooth"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Bluetooth"><i data-value="fa fa-bluetooth-b"
		                class="fa fa-bluetooth-b"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Codie Pie"><i data-value="fa fa-codiepie"
		                class="fa fa-codiepie"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Credit Card"><i data-value="fa fa-credit-card-alt"
		                class="fa fa-credit-card-alt"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Edge Browser"><i data-value="fa fa-edge"
		                class="fa fa-edge"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Fort Awesome"><i data-value="fa fa-fort-awesome"
		                class="fa fa-fort-awesome"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Hashtag"><i data-value="fa fa-hashtag"
		                class="fa fa-hashtag"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Mixcloud"><i data-value="fa fa-mixcloud"
		                class="fa fa-mixcloud"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="MODX"><i data-value="fa fa-modx" class="fa fa-modx"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Pause Circle"><i data-value="fa fa-pause-circle"
		                class="fa fa-pause-circle"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Pause Circle Outlined"><i data-value="fa fa-pause-circle-o"
		                class="fa fa-pause-circle-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Percent"><i data-value="fa fa-percent"
		                class="fa fa-percent"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Product Hunt"><i data-value="fa fa-product-hunt"
		                class="fa fa-product-hunt"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Reddit Alien"><i data-value="fa fa-reddit-alien"
		                class="fa fa-reddit-alien"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Scribd"><i data-value="fa fa-scribd"
		                class="fa fa-scribd"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Shopping Bag"><i data-value="fa fa-shopping-bag"
		                class="fa fa-shopping-bag"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Shopping Basket"><i data-value="fa fa-shopping-basket"
		                class="fa fa-shopping-basket"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Stop Circle"><i data-value="fa fa-stop-circle"
		                class="fa fa-stop-circle"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Stop Circle Outlined"><i data-value="fa fa-stop-circle-o"
		                class="fa fa-stop-circle-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="USB"><i data-value="fa fa-usb" class="fa fa-usb"></i>
                </span>
                <span class="fip-box current-icon" title="Adjust"><i data-value="fa fa-adjust" class="fa fa-adjust"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Anchor"><i data-value="fa fa-anchor"
		                class="fa fa-anchor"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Archive"><i data-value="fa fa-archive"
		                class="fa fa-archive"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Area Chart"><i data-value="fa fa-area-chart"
		                class="fa fa-area-chart"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Arrows"><i data-value="fa fa-arrows"
		                class="fa fa-arrows"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Arrows Horizontal"><i data-value="fa fa-arrows-h"
		                class="fa fa-arrows-h"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Arrows Vertical"><i data-value="fa fa-arrows-v"
		                class="fa fa-arrows-v"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Asterisk"><i data-value="fa fa-asterisk"
		                class="fa fa-asterisk"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="At"><i data-value="fa fa-at" class="fa fa-at"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Balance Scale"><i data-value="fa fa-balance-scale"
		                class="fa fa-balance-scale"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Ban"><i data-value="fa fa-ban" class="fa fa-ban"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Bar Chart (bar-chart-o)"><i data-value="fa fa-bar-chart"
		                class="fa fa-bar-chart"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Barcode"><i data-value="fa fa-barcode"
		                class="fa fa-barcode"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Bars (navicon, reorder)"><i data-value="fa fa-bars"
		                class="fa fa-bars"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Battery Empty (battery-0)"><i
		                data-value="fa fa-battery-empty" class="fa fa-battery-empty"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Battery Full (battery-4)"><i data-value="fa fa-battery-full"
		                class="fa fa-battery-full"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Battery 1/2 Full (battery-2)"><i
		                data-value="fa fa-battery-half" class="fa fa-battery-half"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Battery 1/4 Full (battery-1)"><i
		                data-value="fa fa-battery-quarter" class="fa fa-battery-quarter"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Battery 3/4 Full (battery-3)"><i
		                data-value="fa fa-battery-three-quarters" class="fa fa-battery-three-quarters"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Bed (hotel)"><i data-value="fa fa-bed" class="fa fa-bed"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Beer"><i data-value="fa fa-beer" class="fa fa-beer"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Bell"><i data-value="fa fa-bell" class="fa fa-bell"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Bell Outlined"><i data-value="fa fa-bell-o"
		                class="fa fa-bell-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Bell Slash"><i data-value="fa fa-bell-slash"
		                class="fa fa-bell-slash"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Bell Slash Outlined"><i data-value="fa fa-bell-slash-o"
		                class="fa fa-bell-slash-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Bicycle"><i data-value="fa fa-bicycle"
		                class="fa fa-bicycle"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Binoculars"><i data-value="fa fa-binoculars"
		                class="fa fa-binoculars"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Birthday Cake"><i data-value="fa fa-birthday-cake"
		                class="fa fa-birthday-cake"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Bluetooth"><i data-value="fa fa-bluetooth"
		                class="fa fa-bluetooth"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Bluetooth"><i data-value="fa fa-bluetooth-b"
		                class="fa fa-bluetooth-b"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Lightning Bolt (flash)"><i data-value="fa fa-bolt"
		                class="fa fa-bolt"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Bomb"><i data-value="fa fa-bomb" class="fa fa-bomb"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Book"><i data-value="fa fa-book" class="fa fa-book"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Bookmark"><i data-value="fa fa-bookmark"
		                class="fa fa-bookmark"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Bookmark Outlined"><i data-value="fa fa-bookmark-o"
		                class="fa fa-bookmark-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Briefcase"><i data-value="fa fa-briefcase"
		                class="fa fa-briefcase"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Bug"><i data-value="fa fa-bug" class="fa fa-bug"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Building"><i data-value="fa fa-building"
		                class="fa fa-building"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Building Outlined"><i data-value="fa fa-building-o"
		                class="fa fa-building-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Bullhorn"><i data-value="fa fa-bullhorn"
		                class="fa fa-bullhorn"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Bullseye"><i data-value="fa fa-bullseye"
		                class="fa fa-bullseye"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Bus"><i data-value="fa fa-bus" class="fa fa-bus"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Calculator"><i data-value="fa fa-calculator"
		                class="fa fa-calculator"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Calendar"><i data-value="fa fa-calendar"
		                class="fa fa-calendar"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Calendar Check Outlined"><i
		                data-value="fa fa-calendar-check-o" class="fa fa-calendar-check-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Calendar Minus Outlined"><i
		                data-value="fa fa-calendar-minus-o" class="fa fa-calendar-minus-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Calendar-o"><i data-value="fa fa-calendar-o"
		                class="fa fa-calendar-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Calendar Plus Outlined"><i data-value="fa fa-calendar-plus-o"
		                class="fa fa-calendar-plus-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Calendar Times Outlined"><i
		                data-value="fa fa-calendar-times-o" class="fa fa-calendar-times-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Camera"><i data-value="fa fa-camera"
		                class="fa fa-camera"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Camera-retro"><i data-value="fa fa-camera-retro"
		                class="fa fa-camera-retro"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Car (automobile)"><i data-value="fa fa-car"
		                class="fa fa-car"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Caret Square Outlined Down (toggle-down)"><i
		                data-value="fa fa-caret-square-o-down" class="fa fa-caret-square-o-down"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Caret Square Outlined Left (toggle-left)"><i
		                data-value="fa fa-caret-square-o-left" class="fa fa-caret-square-o-left"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Caret Square Outlined Right (toggle-right)"><i
		                data-value="fa fa-caret-square-o-right" class="fa fa-caret-square-o-right"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Caret Square Outlined Up (toggle-up)"><i
		                data-value="fa fa-caret-square-o-up" class="fa fa-caret-square-o-up"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Shopping Cart Arrow Down"><i
		                data-value="fa fa-cart-arrow-down" class="fa fa-cart-arrow-down"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Add to Shopping Cart"><i data-value="fa fa-cart-plus"
		                class="fa fa-cart-plus"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Closed Captions"><i data-value="fa fa-cc"
		                class="fa fa-cc"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Certificate"><i data-value="fa fa-certificate"
		                class="fa fa-certificate"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Check"><i data-value="fa fa-check" class="fa fa-check"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Check Circle"><i data-value="fa fa-check-circle"
		                class="fa fa-check-circle"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Check Circle Outlined"><i data-value="fa fa-check-circle-o"
		                class="fa fa-check-circle-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Check Square"><i data-value="fa fa-check-square"
		                class="fa fa-check-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Check Square Outlined"><i data-value="fa fa-check-square-o"
		                class="fa fa-check-square-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Child"><i data-value="fa fa-child" class="fa fa-child"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Circle"><i data-value="fa fa-circle"
		                class="fa fa-circle"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Circle Outlined"><i data-value="fa fa-circle-o"
		                class="fa fa-circle-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Circle Outlined Notched"><i data-value="fa fa-circle-o-notch"
		                class="fa fa-circle-o-notch"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Circle Outlined Thin"><i data-value="fa fa-circle-thin"
		                class="fa fa-circle-thin"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Clock Outlined"><i data-value="fa fa-clock-o"
		                class="fa fa-clock-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Clone"><i data-value="fa fa-clone" class="fa fa-clone"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Cloud"><i data-value="fa fa-cloud" class="fa fa-cloud"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Cloud Download"><i data-value="fa fa-cloud-download"
		                class="fa fa-cloud-download"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Cloud Upload"><i data-value="fa fa-cloud-upload"
		                class="fa fa-cloud-upload"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Code"><i data-value="fa fa-code" class="fa fa-code"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Code-fork"><i data-value="fa fa-code-fork"
		                class="fa fa-code-fork"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Coffee"><i data-value="fa fa-coffee"
		                class="fa fa-coffee"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Cog (gear)"><i data-value="fa fa-cog" class="fa fa-cog"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Cogs (gears)"><i data-value="fa fa-cogs"
		                class="fa fa-cogs"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Comment"><i data-value="fa fa-comment"
		                class="fa fa-comment"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Comment-o"><i data-value="fa fa-comment-o"
		                class="fa fa-comment-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Commenting"><i data-value="fa fa-commenting"
		                class="fa fa-commenting"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Commenting Outlined"><i data-value="fa fa-commenting-o"
		                class="fa fa-commenting-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Comments"><i data-value="fa fa-comments"
		                class="fa fa-comments"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Comments-o"><i data-value="fa fa-comments-o"
		                class="fa fa-comments-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Compass"><i data-value="fa fa-compass"
		                class="fa fa-compass"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Copyright"><i data-value="fa fa-copyright"
		                class="fa fa-copyright"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Creative Commons"><i data-value="fa fa-creative-commons"
		                class="fa fa-creative-commons"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Credit-card"><i data-value="fa fa-credit-card"
		                class="fa fa-credit-card"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Credit Card"><i data-value="fa fa-credit-card-alt"
		                class="fa fa-credit-card-alt"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Crop"><i data-value="fa fa-crop" class="fa fa-crop"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Crosshairs"><i data-value="fa fa-crosshairs"
		                class="fa fa-crosshairs"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Cube"><i data-value="fa fa-cube" class="fa fa-cube"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Cubes"><i data-value="fa fa-cubes" class="fa fa-cubes"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Cutlery"><i data-value="fa fa-cutlery"
		                class="fa fa-cutlery"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Database"><i data-value="fa fa-database"
		                class="fa fa-database"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Desktop"><i data-value="fa fa-desktop"
		                class="fa fa-desktop"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Diamond"><i data-value="fa fa-diamond"
		                class="fa fa-diamond"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Dot Circle Outlined"><i data-value="fa fa-dot-circle-o"
		                class="fa fa-dot-circle-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Download"><i data-value="fa fa-download"
		                class="fa fa-download"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Ellipsis Horizontal"><i data-value="fa fa-ellipsis-h"
		                class="fa fa-ellipsis-h"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Ellipsis Vertical"><i data-value="fa fa-ellipsis-v"
		                class="fa fa-ellipsis-v"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Envelope"><i data-value="fa fa-envelope"
		                class="fa fa-envelope"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Envelope Outlined"><i data-value="fa fa-envelope-o"
		                class="fa fa-envelope-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Envelope Square"><i data-value="fa fa-envelope-square"
		                class="fa fa-envelope-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Eraser"><i data-value="fa fa-eraser"
		                class="fa fa-eraser"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Exchange"><i data-value="fa fa-exchange"
		                class="fa fa-exchange"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Exclamation"><i data-value="fa fa-exclamation"
		                class="fa fa-exclamation"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Exclamation Circle"><i data-value="fa fa-exclamation-circle"
		                class="fa fa-exclamation-circle"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Exclamation Triangle (warning)"><i
		                data-value="fa fa-exclamation-triangle" class="fa fa-exclamation-triangle"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="External Link"><i data-value="fa fa-external-link"
		                class="fa fa-external-link"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="External Link Square"><i
		                data-value="fa fa-external-link-square" class="fa fa-external-link-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Eye"><i data-value="fa fa-eye" class="fa fa-eye"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Eye Slash"><i data-value="fa fa-eye-slash"
		                class="fa fa-eye-slash"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Eyedropper"><i data-value="fa fa-eyedropper"
		                class="fa fa-eyedropper"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Fax"><i data-value="fa fa-fax" class="fa fa-fax"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Female"><i data-value="fa fa-female"
		                class="fa fa-female"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Fighter-jet"><i data-value="fa fa-fighter-jet"
		                class="fa fa-fighter-jet"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Archive File Outlined (file-zip-o)"><i
		                data-value="fa fa-file-archive-o" class="fa fa-file-archive-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Audio File Outlined (file-sound-o)"><i
		                data-value="fa fa-file-audio-o" class="fa fa-file-audio-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Code File Outlined"><i data-value="fa fa-file-code-o"
		                class="fa fa-file-code-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Excel File Outlined"><i data-value="fa fa-file-excel-o"
		                class="fa fa-file-excel-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Image File Outlined (file-photo-o, file-picture-o)"><i
		                data-value="fa fa-file-image-o" class="fa fa-file-image-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="PDF File Outlined"><i data-value="fa fa-file-pdf-o"
		                class="fa fa-file-pdf-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Powerpoint File Outlined"><i
		                data-value="fa fa-file-powerpoint-o" class="fa fa-file-powerpoint-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Video File Outlined (file-movie-o)"><i
		                data-value="fa fa-file-video-o" class="fa fa-file-video-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Word File Outlined"><i data-value="fa fa-file-word-o"
		                class="fa fa-file-word-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Film"><i data-value="fa fa-film" class="fa fa-film"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Filter"><i data-value="fa fa-filter"
		                class="fa fa-filter"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Fire"><i data-value="fa fa-fire" class="fa fa-fire"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Fire-extinguisher"><i data-value="fa fa-fire-extinguisher"
		                class="fa fa-fire-extinguisher"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Flag"><i data-value="fa fa-flag" class="fa fa-flag"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Flag-checkered"><i data-value="fa fa-flag-checkered"
		                class="fa fa-flag-checkered"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Flag Outlined"><i data-value="fa fa-flag-o"
		                class="fa fa-flag-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Flask"><i data-value="fa fa-flask" class="fa fa-flask"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Folder"><i data-value="fa fa-folder"
		                class="fa fa-folder"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Folder Outlined"><i data-value="fa fa-folder-o"
		                class="fa fa-folder-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Folder Open"><i data-value="fa fa-folder-open"
		                class="fa fa-folder-open"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Folder Open Outlined"><i data-value="fa fa-folder-open-o"
		                class="fa fa-folder-open-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Frown Outlined"><i data-value="fa fa-frown-o"
		                class="fa fa-frown-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Futbol Outlined (soccer-ball-o)"><i
		                data-value="fa fa-futbol-o" class="fa fa-futbol-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Gamepad"><i data-value="fa fa-gamepad"
		                class="fa fa-gamepad"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Gavel (legal)"><i data-value="fa fa-gavel"
		                class="fa fa-gavel"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Gift"><i data-value="fa fa-gift" class="fa fa-gift"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Glass"><i data-value="fa fa-glass" class="fa fa-glass"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Globe"><i data-value="fa fa-globe" class="fa fa-globe"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Graduation Cap (mortar-board)"><i
		                data-value="fa fa-graduation-cap" class="fa fa-graduation-cap"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Lizard (Hand)"><i data-value="fa fa-hand-lizard-o"
		                class="fa fa-hand-lizard-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Paper (Hand) (hand-stop-o)"><i
		                data-value="fa fa-hand-paper-o" class="fa fa-hand-paper-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Hand Peace"><i data-value="fa fa-hand-peace-o"
		                class="fa fa-hand-peace-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Hand Pointer"><i data-value="fa fa-hand-pointer-o"
		                class="fa fa-hand-pointer-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Rock (Hand) (hand-grab-o)"><i data-value="fa fa-hand-rock-o"
		                class="fa fa-hand-rock-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Scissors (Hand)"><i data-value="fa fa-hand-scissors-o"
		                class="fa fa-hand-scissors-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Spock (Hand)"><i data-value="fa fa-hand-spock-o"
		                class="fa fa-hand-spock-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Hashtag"><i data-value="fa fa-hashtag"
		                class="fa fa-hashtag"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="HDD"><i data-value="fa fa-hdd-o" class="fa fa-hdd-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Headphones"><i data-value="fa fa-headphones"
		                class="fa fa-headphones"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Heart"><i data-value="fa fa-heart" class="fa fa-heart"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Heart Outlined"><i data-value="fa fa-heart-o"
		                class="fa fa-heart-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Heartbeat"><i data-value="fa fa-heartbeat"
		                class="fa fa-heartbeat"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="History"><i data-value="fa fa-history"
		                class="fa fa-history"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Home"><i data-value="fa fa-home" class="fa fa-home"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Hourglass"><i data-value="fa fa-hourglass"
		                class="fa fa-hourglass"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Hourglass End (hourglass-3)"><i
		                data-value="fa fa-hourglass-end" class="fa fa-hourglass-end"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Hourglass Half (hourglass-2)"><i
		                data-value="fa fa-hourglass-half" class="fa fa-hourglass-half"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Hourglass Outlined"><i data-value="fa fa-hourglass-o"
		                class="fa fa-hourglass-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Hourglass Start (hourglass-1)"><i
		                data-value="fa fa-hourglass-start" class="fa fa-hourglass-start"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="I Beam Cursor"><i data-value="fa fa-i-cursor"
		                class="fa fa-i-cursor"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Inbox"><i data-value="fa fa-inbox" class="fa fa-inbox"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Industry"><i data-value="fa fa-industry"
		                class="fa fa-industry"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Info"><i data-value="fa fa-info" class="fa fa-info"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Info Circle"><i data-value="fa fa-info-circle"
		                class="fa fa-info-circle"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Key"><i data-value="fa fa-key" class="fa fa-key"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Keyboard Outlined"><i data-value="fa fa-keyboard-o"
		                class="fa fa-keyboard-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Language"><i data-value="fa fa-language"
		                class="fa fa-language"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Laptop"><i data-value="fa fa-laptop"
		                class="fa fa-laptop"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Leaf"><i data-value="fa fa-leaf" class="fa fa-leaf"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Lemon Outlined"><i data-value="fa fa-lemon-o"
		                class="fa fa-lemon-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Level Down"><i data-value="fa fa-level-down"
		                class="fa fa-level-down"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Level Up"><i data-value="fa fa-level-up"
		                class="fa fa-level-up"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Life Ring (life-bouy, life-buoy, life-saver, support)"><i
		                data-value="fa fa-life-ring" class="fa fa-life-ring"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Lightbulb Outlined"><i data-value="fa fa-lightbulb-o"
		                class="fa fa-lightbulb-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Line Chart"><i data-value="fa fa-line-chart"
		                class="fa fa-line-chart"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Location-arrow"><i data-value="fa fa-location-arrow"
		                class="fa fa-location-arrow"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Lock"><i data-value="fa fa-lock" class="fa fa-lock"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Magic"><i data-value="fa fa-magic" class="fa fa-magic"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Magnet"><i data-value="fa fa-magnet"
		                class="fa fa-magnet"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Male"><i data-value="fa fa-male" class="fa fa-male"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Map"><i data-value="fa fa-map" class="fa fa-map"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Map-marker"><i data-value="fa fa-map-marker"
		                class="fa fa-map-marker"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Map Outline"><i data-value="fa fa-map-o"
		                class="fa fa-map-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Map Pin"><i data-value="fa fa-map-pin"
		                class="fa fa-map-pin"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Map Signs"><i data-value="fa fa-map-signs"
		                class="fa fa-map-signs"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Meh Outlined"><i data-value="fa fa-meh-o"
		                class="fa fa-meh-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Microphone"><i data-value="fa fa-microphone"
		                class="fa fa-microphone"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Microphone Slash"><i data-value="fa fa-microphone-slash"
		                class="fa fa-microphone-slash"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Minus"><i data-value="fa fa-minus" class="fa fa-minus"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Minus Circle"><i data-value="fa fa-minus-circle"
		                class="fa fa-minus-circle"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Minus Square"><i data-value="fa fa-minus-square"
		                class="fa fa-minus-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Minus Square Outlined"><i data-value="fa fa-minus-square-o"
		                class="fa fa-minus-square-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Mobile Phone (mobile-phone)"><i data-value="fa fa-mobile"
		                class="fa fa-mobile"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Money"><i data-value="fa fa-money" class="fa fa-money"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Moon Outlined"><i data-value="fa fa-moon-o"
		                class="fa fa-moon-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Motorcycle"><i data-value="fa fa-motorcycle"
		                class="fa fa-motorcycle"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Mouse Pointer"><i data-value="fa fa-mouse-pointer"
		                class="fa fa-mouse-pointer"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Music"><i data-value="fa fa-music" class="fa fa-music"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Newspaper Outlined"><i data-value="fa fa-newspaper-o"
		                class="fa fa-newspaper-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Object Group"><i data-value="fa fa-object-group"
		                class="fa fa-object-group"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Object Ungroup"><i data-value="fa fa-object-ungroup"
		                class="fa fa-object-ungroup"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Paint Brush"><i data-value="fa fa-paint-brush"
		                class="fa fa-paint-brush"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Paper Plane (send)"><i data-value="fa fa-paper-plane"
		                class="fa fa-paper-plane"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Paper Plane Outlined (send-o)"><i
		                data-value="fa fa-paper-plane-o" class="fa fa-paper-plane-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Paw"><i data-value="fa fa-paw" class="fa fa-paw"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Pencil"><i data-value="fa fa-pencil"
		                class="fa fa-pencil"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Pencil Square"><i data-value="fa fa-pencil-square"
		                class="fa fa-pencil-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Pencil Square Outlined (edit)"><i
		                data-value="fa fa-pencil-square-o" class="fa fa-pencil-square-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Percent"><i data-value="fa fa-percent"
		                class="fa fa-percent"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Phone"><i data-value="fa fa-phone" class="fa fa-phone"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Phone Square"><i data-value="fa fa-phone-square"
		                class="fa fa-phone-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Picture Outlined (photo, image)"><i
		                data-value="fa fa-picture-o" class="fa fa-picture-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Pie Chart"><i data-value="fa fa-pie-chart"
		                class="fa fa-pie-chart"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Plane"><i data-value="fa fa-plane" class="fa fa-plane"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Plug"><i data-value="fa fa-plug" class="fa fa-plug"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Plus"><i data-value="fa fa-plus" class="fa fa-plus"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Plus Circle"><i data-value="fa fa-plus-circle"
		                class="fa fa-plus-circle"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Plus Square"><i data-value="fa fa-plus-square"
		                class="fa fa-plus-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Plus Square Outlined"><i data-value="fa fa-plus-square-o"
		                class="fa fa-plus-square-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Power Off"><i data-value="fa fa-power-off"
		                class="fa fa-power-off"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Print"><i data-value="fa fa-print" class="fa fa-print"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Puzzle Piece"><i data-value="fa fa-puzzle-piece"
		                class="fa fa-puzzle-piece"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Qrcode"><i data-value="fa fa-qrcode"
		                class="fa fa-qrcode"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Question"><i data-value="fa fa-question"
		                class="fa fa-question"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Question Circle"><i data-value="fa fa-question-circle"
		                class="fa fa-question-circle"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Quote-left"><i data-value="fa fa-quote-left"
		                class="fa fa-quote-left"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Quote-right"><i data-value="fa fa-quote-right"
		                class="fa fa-quote-right"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Random"><i data-value="fa fa-random"
		                class="fa fa-random"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Recycle"><i data-value="fa fa-recycle"
		                class="fa fa-recycle"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Refresh"><i data-value="fa fa-refresh"
		                class="fa fa-refresh"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Registered Trademark"><i data-value="fa fa-registered"
		                class="fa fa-registered"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Reply (mail-reply)"><i data-value="fa fa-reply"
		                class="fa fa-reply"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Reply-all (mail-reply-all)"><i data-value="fa fa-reply-all"
		                class="fa fa-reply-all"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Retweet"><i data-value="fa fa-retweet"
		                class="fa fa-retweet"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Road"><i data-value="fa fa-road" class="fa fa-road"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Rocket"><i data-value="fa fa-rocket"
		                class="fa fa-rocket"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Rss (feed)"><i data-value="fa fa-rss" class="fa fa-rss"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="RSS Square"><i data-value="fa fa-rss-square"
		                class="fa fa-rss-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Search"><i data-value="fa fa-search"
		                class="fa fa-search"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Search Minus"><i data-value="fa fa-search-minus"
		                class="fa fa-search-minus"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Search Plus"><i data-value="fa fa-search-plus"
		                class="fa fa-search-plus"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Server"><i data-value="fa fa-server"
		                class="fa fa-server"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Share (mail-forward)"><i data-value="fa fa-share"
		                class="fa fa-share"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Share Alt"><i data-value="fa fa-share-alt"
		                class="fa fa-share-alt"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Share Alt Square"><i data-value="fa fa-share-alt-square"
		                class="fa fa-share-alt-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Share Square"><i data-value="fa fa-share-square"
		                class="fa fa-share-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Share Square Outlined"><i data-value="fa fa-share-square-o"
		                class="fa fa-share-square-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Shield"><i data-value="fa fa-shield"
		                class="fa fa-shield"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Ship"><i data-value="fa fa-ship" class="fa fa-ship"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Shopping Bag"><i data-value="fa fa-shopping-bag"
		                class="fa fa-shopping-bag"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Shopping Basket"><i data-value="fa fa-shopping-basket"
		                class="fa fa-shopping-basket"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Shopping-cart"><i data-value="fa fa-shopping-cart"
		                class="fa fa-shopping-cart"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Sign In"><i data-value="fa fa-sign-in"
		                class="fa fa-sign-in"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Sign Out"><i data-value="fa fa-sign-out"
		                class="fa fa-sign-out"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Signal"><i data-value="fa fa-signal"
		                class="fa fa-signal"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Sitemap"><i data-value="fa fa-sitemap"
		                class="fa fa-sitemap"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Sliders"><i data-value="fa fa-sliders"
		                class="fa fa-sliders"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Smile Outlined"><i data-value="fa fa-smile-o"
		                class="fa fa-smile-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Sort (unsorted)"><i data-value="fa fa-sort"
		                class="fa fa-sort"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Sort Alpha Ascending"><i data-value="fa fa-sort-alpha-asc"
		                class="fa fa-sort-alpha-asc"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Sort Alpha Descending"><i data-value="fa fa-sort-alpha-desc"
		                class="fa fa-sort-alpha-desc"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Sort Amount Ascending"><i data-value="fa fa-sort-amount-asc"
		                class="fa fa-sort-amount-asc"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Sort Amount Descending"><i
		                data-value="fa fa-sort-amount-desc" class="fa fa-sort-amount-desc"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Sort Ascending (sort-up)"><i data-value="fa fa-sort-asc"
		                class="fa fa-sort-asc"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Sort Descending (sort-down)"><i data-value="fa fa-sort-desc"
		                class="fa fa-sort-desc"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Sort Numeric Ascending"><i
		                data-value="fa fa-sort-numeric-asc" class="fa fa-sort-numeric-asc"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Sort Numeric Descending"><i
		                data-value="fa fa-sort-numeric-desc" class="fa fa-sort-numeric-desc"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Space Shuttle"><i data-value="fa fa-space-shuttle"
		                class="fa fa-space-shuttle"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Spinner"><i data-value="fa fa-spinner"
		                class="fa fa-spinner"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Spoon"><i data-value="fa fa-spoon" class="fa fa-spoon"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Square"><i data-value="fa fa-square"
		                class="fa fa-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Square Outlined"><i data-value="fa fa-square-o"
		                class="fa fa-square-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Star"><i data-value="fa fa-star" class="fa fa-star"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Star-half"><i data-value="fa fa-star-half"
		                class="fa fa-star-half"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Star Half Outlined (star-half-empty, star-half-full)"><i
		                data-value="fa fa-star-half-o" class="fa fa-star-half-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Star Outlined"><i data-value="fa fa-star-o"
		                class="fa fa-star-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Sticky Note"><i data-value="fa fa-sticky-note"
		                class="fa fa-sticky-note"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Sticky Note Outlined"><i data-value="fa fa-sticky-note-o"
		                class="fa fa-sticky-note-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Street View"><i data-value="fa fa-street-view"
		                class="fa fa-street-view"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Suitcase"><i data-value="fa fa-suitcase"
		                class="fa fa-suitcase"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Sun Outlined"><i data-value="fa fa-sun-o"
		                class="fa fa-sun-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Tablet"><i data-value="fa fa-tablet"
		                class="fa fa-tablet"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Tachometer (dashboard)"><i data-value="fa fa-tachometer"
		                class="fa fa-tachometer"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Tag"><i data-value="fa fa-tag" class="fa fa-tag"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Tags"><i data-value="fa fa-tags" class="fa fa-tags"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Tasks"><i data-value="fa fa-tasks" class="fa fa-tasks"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Taxi (cab)"><i data-value="fa fa-taxi"
		                class="fa fa-taxi"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Television (tv)"><i data-value="fa fa-television"
		                class="fa fa-television"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Terminal"><i data-value="fa fa-terminal"
		                class="fa fa-terminal"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Thumb Tack"><i data-value="fa fa-thumb-tack"
		                class="fa fa-thumb-tack"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Thumbs-down"><i data-value="fa fa-thumbs-down"
		                class="fa fa-thumbs-down"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Thumbs Down Outlined"><i data-value="fa fa-thumbs-o-down"
		                class="fa fa-thumbs-o-down"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Thumbs Up Outlined"><i data-value="fa fa-thumbs-o-up"
		                class="fa fa-thumbs-o-up"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Thumbs-up"><i data-value="fa fa-thumbs-up"
		                class="fa fa-thumbs-up"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Ticket"><i data-value="fa fa-ticket"
		                class="fa fa-ticket"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Times (remove, close)"><i data-value="fa fa-times"
		                class="fa fa-times"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Times Circle"><i data-value="fa fa-times-circle"
		                class="fa fa-times-circle"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Times Circle Outlined"><i data-value="fa fa-times-circle-o"
		                class="fa fa-times-circle-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Tint"><i data-value="fa fa-tint" class="fa fa-tint"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Toggle Off"><i data-value="fa fa-toggle-off"
		                class="fa fa-toggle-off"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Toggle On"><i data-value="fa fa-toggle-on"
		                class="fa fa-toggle-on"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Trademark"><i data-value="fa fa-trademark"
		                class="fa fa-trademark"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Trash"><i data-value="fa fa-trash" class="fa fa-trash"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Trash Outlined"><i data-value="fa fa-trash-o"
		                class="fa fa-trash-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Tree"><i data-value="fa fa-tree" class="fa fa-tree"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Trophy"><i data-value="fa fa-trophy"
		                class="fa fa-trophy"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Truck"><i data-value="fa fa-truck" class="fa fa-truck"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="TTY"><i data-value="fa fa-tty" class="fa fa-tty"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Umbrella"><i data-value="fa fa-umbrella"
		                class="fa fa-umbrella"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="University (institution, bank)"><i
		                data-value="fa fa-university" class="fa fa-university"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Unlock"><i data-value="fa fa-unlock"
		                class="fa fa-unlock"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Unlock Alt"><i data-value="fa fa-unlock-alt"
		                class="fa fa-unlock-alt"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Upload"><i data-value="fa fa-upload"
		                class="fa fa-upload"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="User"><i data-value="fa fa-user" class="fa fa-user"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Add User"><i data-value="fa fa-user-plus"
		                class="fa fa-user-plus"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="User Secret"><i data-value="fa fa-user-secret"
		                class="fa fa-user-secret"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Remove User"><i data-value="fa fa-user-times"
		                class="fa fa-user-times"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Users (group)"><i data-value="fa fa-users"
		                class="fa fa-users"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Video Camera"><i data-value="fa fa-video-camera"
		                class="fa fa-video-camera"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Volume-down"><i data-value="fa fa-volume-down"
		                class="fa fa-volume-down"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Volume-off"><i data-value="fa fa-volume-off"
		                class="fa fa-volume-off"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Volume-up"><i data-value="fa fa-volume-up"
		                class="fa fa-volume-up"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Wheelchair"><i data-value="fa fa-wheelchair"
		                class="fa fa-wheelchair"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="WiFi"><i data-value="fa fa-wifi" class="fa fa-wifi"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Wrench"><i data-value="fa fa-wrench"
		                class="fa fa-wrench"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="File"><i data-value="fa fa-file" class="fa fa-file"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Archive File Outlined (file-zip-o)"><i
		                data-value="fa fa-file-archive-o" class="fa fa-file-archive-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Audio File Outlined (file-sound-o)"><i
		                data-value="fa fa-file-audio-o" class="fa fa-file-audio-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Code File Outlined"><i data-value="fa fa-file-code-o"
		                class="fa fa-file-code-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Excel File Outlined"><i data-value="fa fa-file-excel-o"
		                class="fa fa-file-excel-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Image File Outlined (file-photo-o, file-picture-o)"><i
		                data-value="fa fa-file-image-o" class="fa fa-file-image-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="File Outlined"><i data-value="fa fa-file-o"
		                class="fa fa-file-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="PDF File Outlined"><i data-value="fa fa-file-pdf-o"
		                class="fa fa-file-pdf-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Powerpoint File Outlined"><i
		                data-value="fa fa-file-powerpoint-o" class="fa fa-file-powerpoint-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="File Text"><i data-value="fa fa-file-text"
		                class="fa fa-file-text"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="File Text Outlined"><i data-value="fa fa-file-text-o"
		                class="fa fa-file-text-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Video File Outlined (file-movie-o)"><i
		                data-value="fa fa-file-video-o" class="fa fa-file-video-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Word File Outlined"><i data-value="fa fa-file-word-o"
		                class="fa fa-file-word-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Circle Outlined Notched"><i data-value="fa fa-circle-o-notch"
		                class="fa fa-circle-o-notch"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Cog (gear)"><i data-value="fa fa-cog" class="fa fa-cog"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Refresh"><i data-value="fa fa-refresh"
		                class="fa fa-refresh"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Spinner"><i data-value="fa fa-spinner"
		                class="fa fa-spinner"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Check Square"><i data-value="fa fa-check-square"
		                class="fa fa-check-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Check Square Outlined"><i data-value="fa fa-check-square-o"
		                class="fa fa-check-square-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Circle"><i data-value="fa fa-circle"
		                class="fa fa-circle"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Circle Outlined"><i data-value="fa fa-circle-o"
		                class="fa fa-circle-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Dot Circle Outlined"><i data-value="fa fa-dot-circle-o"
		                class="fa fa-dot-circle-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Minus Square"><i data-value="fa fa-minus-square"
		                class="fa fa-minus-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Minus Square Outlined"><i data-value="fa fa-minus-square-o"
		                class="fa fa-minus-square-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Plus Square"><i data-value="fa fa-plus-square"
		                class="fa fa-plus-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Plus Square Outlined"><i data-value="fa fa-plus-square-o"
		                class="fa fa-plus-square-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Square"><i data-value="fa fa-square"
		                class="fa fa-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Square Outlined"><i data-value="fa fa-square-o"
		                class="fa fa-square-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="American Express Credit Card"><i data-value="fa fa-cc-amex"
		                class="fa fa-cc-amex"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Diner's Club Credit Card"><i
		                data-value="fa fa-cc-diners-club" class="fa fa-cc-diners-club"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Discover Credit Card"><i data-value="fa fa-cc-discover"
		                class="fa fa-cc-discover"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="JCB Credit Card"><i data-value="fa fa-cc-jcb"
		                class="fa fa-cc-jcb"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="MasterCard Credit Card"><i data-value="fa fa-cc-mastercard"
		                class="fa fa-cc-mastercard"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Paypal Credit Card"><i data-value="fa fa-cc-paypal"
		                class="fa fa-cc-paypal"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Stripe Credit Card"><i data-value="fa fa-cc-stripe"
		                class="fa fa-cc-stripe"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Visa Credit Card"><i data-value="fa fa-cc-visa"
		                class="fa fa-cc-visa"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Credit-card"><i data-value="fa fa-credit-card"
		                class="fa fa-credit-card"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Credit Card"><i data-value="fa fa-credit-card-alt"
		                class="fa fa-credit-card-alt"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Google Wallet"><i data-value="fa fa-google-wallet"
		                class="fa fa-google-wallet"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Paypal"><i data-value="fa fa-paypal"
		                class="fa fa-paypal"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Area Chart"><i data-value="fa fa-area-chart"
		                class="fa fa-area-chart"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Bar Chart (bar-chart-o)"><i data-value="fa fa-bar-chart"
		                class="fa fa-bar-chart"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Line Chart"><i data-value="fa fa-line-chart"
		                class="fa fa-line-chart"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Pie Chart"><i data-value="fa fa-pie-chart"
		                class="fa fa-pie-chart"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Bitcoin (BTC) (bitcoin)"><i data-value="fa fa-btc"
		                class="fa fa-btc"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Euro (EUR) (euro)"><i data-value="fa fa-eur"
		                class="fa fa-eur"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="GBP"><i data-value="fa fa-gbp" class="fa fa-gbp"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="GG Currency"><i data-value="fa fa-gg" class="fa fa-gg"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="GG Currency Circle"><i data-value="fa fa-gg-circle"
		                class="fa fa-gg-circle"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Shekel (ILS) (shekel, sheqel)"><i data-value="fa fa-ils"
		                class="fa fa-ils"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Indian Rupee (INR) (rupee)"><i data-value="fa fa-inr"
		                class="fa fa-inr"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Japanese Yen (JPY) (cny, rmb, yen)"><i data-value="fa fa-jpy"
		                class="fa fa-jpy"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Korean Won (KRW) (won)"><i data-value="fa fa-krw"
		                class="fa fa-krw"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Money"><i data-value="fa fa-money" class="fa fa-money"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Russian Ruble (RUB) (ruble, rouble)"><i
		                data-value="fa fa-rub" class="fa fa-rub"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Turkish Lira (TRY) (turkish-lira)"><i data-value="fa fa-try"
		                class="fa fa-try"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="US Dollar (dollar)"><i data-value="fa fa-usd"
		                class="fa fa-usd"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Align-center"><i data-value="fa fa-align-center"
		                class="fa fa-align-center"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Align-justify"><i data-value="fa fa-align-justify"
		                class="fa fa-align-justify"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Align-left"><i data-value="fa fa-align-left"
		                class="fa fa-align-left"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Align-right"><i data-value="fa fa-align-right"
		                class="fa fa-align-right"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Bold"><i data-value="fa fa-bold" class="fa fa-bold"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Chain Broken (unlink)"><i data-value="fa fa-chain-broken"
		                class="fa fa-chain-broken"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Clipboard (paste)"><i data-value="fa fa-clipboard"
		                class="fa fa-clipboard"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Columns"><i data-value="fa fa-columns"
		                class="fa fa-columns"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Eraser"><i data-value="fa fa-eraser"
		                class="fa fa-eraser"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="File"><i data-value="fa fa-file" class="fa fa-file"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="File Outlined"><i data-value="fa fa-file-o"
		                class="fa fa-file-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="File Text"><i data-value="fa fa-file-text"
		                class="fa fa-file-text"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="File Text Outlined"><i data-value="fa fa-file-text-o"
		                class="fa fa-file-text-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Files Outlined (copy)"><i data-value="fa fa-files-o"
		                class="fa fa-files-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Floppy Outlined (save)"><i data-value="fa fa-floppy-o"
		                class="fa fa-floppy-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Font"><i data-value="fa fa-font" class="fa fa-font"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Header"><i data-value="fa fa-header"
		                class="fa fa-header"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Indent"><i data-value="fa fa-indent"
		                class="fa fa-indent"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Italic"><i data-value="fa fa-italic"
		                class="fa fa-italic"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Link (chain)"><i data-value="fa fa-link"
		                class="fa fa-link"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="List"><i data-value="fa fa-list" class="fa fa-list"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="List-alt"><i data-value="fa fa-list-alt"
		                class="fa fa-list-alt"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="List-ol"><i data-value="fa fa-list-ol"
		                class="fa fa-list-ol"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="List-ul"><i data-value="fa fa-list-ul"
		                class="fa fa-list-ul"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Outdent (dedent)"><i data-value="fa fa-outdent"
		                class="fa fa-outdent"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Paperclip"><i data-value="fa fa-paperclip"
		                class="fa fa-paperclip"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Paragraph"><i data-value="fa fa-paragraph"
		                class="fa fa-paragraph"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Repeat (rotate-right)"><i data-value="fa fa-repeat"
		                class="fa fa-repeat"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Scissors (cut)"><i data-value="fa fa-scissors"
		                class="fa fa-scissors"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Strikethrough"><i data-value="fa fa-strikethrough"
		                class="fa fa-strikethrough"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Subscript"><i data-value="fa fa-subscript"
		                class="fa fa-subscript"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Superscript"><i data-value="fa fa-superscript"
		                class="fa fa-superscript"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Table"><i data-value="fa fa-table" class="fa fa-table"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Text-height"><i data-value="fa fa-text-height"
		                class="fa fa-text-height"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Text-width"><i data-value="fa fa-text-width"
		                class="fa fa-text-width"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Th"><i data-value="fa fa-th" class="fa fa-th"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Th-large"><i data-value="fa fa-th-large"
		                class="fa fa-th-large"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Th-list"><i data-value="fa fa-th-list"
		                class="fa fa-th-list"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Underline"><i data-value="fa fa-underline"
		                class="fa fa-underline"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Undo (rotate-left)"><i data-value="fa fa-undo"
		                class="fa fa-undo"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Angle Double Down"><i data-value="fa fa-angle-double-down"
		                class="fa fa-angle-double-down"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Angle Double Left"><i data-value="fa fa-angle-double-left"
		                class="fa fa-angle-double-left"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Angle Double Right"><i data-value="fa fa-angle-double-right"
		                class="fa fa-angle-double-right"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Angle Double Up"><i data-value="fa fa-angle-double-up"
		                class="fa fa-angle-double-up"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Angle-down"><i data-value="fa fa-angle-down"
		                class="fa fa-angle-down"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Angle-left"><i data-value="fa fa-angle-left"
		                class="fa fa-angle-left"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Angle-right"><i data-value="fa fa-angle-right"
		                class="fa fa-angle-right"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Angle-up"><i data-value="fa fa-angle-up"
		                class="fa fa-angle-up"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Arrow Circle Down"><i data-value="fa fa-arrow-circle-down"
		                class="fa fa-arrow-circle-down"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Arrow Circle Left"><i data-value="fa fa-arrow-circle-left"
		                class="fa fa-arrow-circle-left"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Arrow Circle Outlined Down"><i
		                data-value="fa fa-arrow-circle-o-down" class="fa fa-arrow-circle-o-down"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Arrow Circle Outlined Left"><i
		                data-value="fa fa-arrow-circle-o-left" class="fa fa-arrow-circle-o-left"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Arrow Circle Outlined Right"><i
		                data-value="fa fa-arrow-circle-o-right" class="fa fa-arrow-circle-o-right"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Arrow Circle Outlined Up"><i
		                data-value="fa fa-arrow-circle-o-up" class="fa fa-arrow-circle-o-up"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Arrow Circle Right"><i data-value="fa fa-arrow-circle-right"
		                class="fa fa-arrow-circle-right"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Arrow Circle Up"><i data-value="fa fa-arrow-circle-up"
		                class="fa fa-arrow-circle-up"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Arrow-down"><i data-value="fa fa-arrow-down"
		                class="fa fa-arrow-down"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Arrow-left"><i data-value="fa fa-arrow-left"
		                class="fa fa-arrow-left"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Arrow-right"><i data-value="fa fa-arrow-right"
		                class="fa fa-arrow-right"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Arrow-up"><i data-value="fa fa-arrow-up"
		                class="fa fa-arrow-up"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Arrows"><i data-value="fa fa-arrows"
		                class="fa fa-arrows"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Arrows Alt"><i data-value="fa fa-arrows-alt"
		                class="fa fa-arrows-alt"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Arrows Horizontal"><i data-value="fa fa-arrows-h"
		                class="fa fa-arrows-h"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Arrows Vertical"><i data-value="fa fa-arrows-v"
		                class="fa fa-arrows-v"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Caret Down"><i data-value="fa fa-caret-down"
		                class="fa fa-caret-down"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Caret Left"><i data-value="fa fa-caret-left"
		                class="fa fa-caret-left"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Caret Right"><i data-value="fa fa-caret-right"
		                class="fa fa-caret-right"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Caret Square Outlined Down (toggle-down)"><i
		                data-value="fa fa-caret-square-o-down" class="fa fa-caret-square-o-down"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Caret Square Outlined Left (toggle-left)"><i
		                data-value="fa fa-caret-square-o-left" class="fa fa-caret-square-o-left"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Caret Square Outlined Right (toggle-right)"><i
		                data-value="fa fa-caret-square-o-right" class="fa fa-caret-square-o-right"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Caret Square Outlined Up (toggle-up)"><i
		                data-value="fa fa-caret-square-o-up" class="fa fa-caret-square-o-up"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Caret Up"><i data-value="fa fa-caret-up"
		                class="fa fa-caret-up"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Chevron Circle Down"><i
		                data-value="fa fa-chevron-circle-down" class="fa fa-chevron-circle-down"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Chevron Circle Left"><i
		                data-value="fa fa-chevron-circle-left" class="fa fa-chevron-circle-left"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Chevron Circle Right"><i
		                data-value="fa fa-chevron-circle-right" class="fa fa-chevron-circle-right"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Chevron Circle Up"><i data-value="fa fa-chevron-circle-up"
		                class="fa fa-chevron-circle-up"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Chevron-down"><i data-value="fa fa-chevron-down"
		                class="fa fa-chevron-down"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Chevron-left"><i data-value="fa fa-chevron-left"
		                class="fa fa-chevron-left"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Chevron-right"><i data-value="fa fa-chevron-right"
		                class="fa fa-chevron-right"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Chevron-up"><i data-value="fa fa-chevron-up"
		                class="fa fa-chevron-up"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Exchange"><i data-value="fa fa-exchange"
		                class="fa fa-exchange"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Hand Outlined Down"><i data-value="fa fa-hand-o-down"
		                class="fa fa-hand-o-down"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Hand Outlined Left"><i data-value="fa fa-hand-o-left"
		                class="fa fa-hand-o-left"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Hand Outlined Right"><i data-value="fa fa-hand-o-right"
		                class="fa fa-hand-o-right"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Hand Outlined Up"><i data-value="fa fa-hand-o-up"
		                class="fa fa-hand-o-up"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Long Arrow Down"><i data-value="fa fa-long-arrow-down"
		                class="fa fa-long-arrow-down"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Long Arrow Left"><i data-value="fa fa-long-arrow-left"
		                class="fa fa-long-arrow-left"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Long Arrow Right"><i data-value="fa fa-long-arrow-right"
		                class="fa fa-long-arrow-right"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Long Arrow Up"><i data-value="fa fa-long-arrow-up"
		                class="fa fa-long-arrow-up"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Arrows Alt"><i data-value="fa fa-arrows-alt"
		                class="fa fa-arrows-alt"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Backward"><i data-value="fa fa-backward"
		                class="fa fa-backward"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Compress"><i data-value="fa fa-compress"
		                class="fa fa-compress"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Eject"><i data-value="fa fa-eject" class="fa fa-eject"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Expand"><i data-value="fa fa-expand"
		                class="fa fa-expand"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Fast-backward"><i data-value="fa fa-fast-backward"
		                class="fa fa-fast-backward"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Fast-forward"><i data-value="fa fa-fast-forward"
		                class="fa fa-fast-forward"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Forward"><i data-value="fa fa-forward"
		                class="fa fa-forward"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Pause"><i data-value="fa fa-pause" class="fa fa-pause"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Pause Circle"><i data-value="fa fa-pause-circle"
		                class="fa fa-pause-circle"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Pause Circle Outlined"><i data-value="fa fa-pause-circle-o"
		                class="fa fa-pause-circle-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Play"><i data-value="fa fa-play" class="fa fa-play"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Play Circle"><i data-value="fa fa-play-circle"
		                class="fa fa-play-circle"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Play Circle Outlined"><i data-value="fa fa-play-circle-o"
		                class="fa fa-play-circle-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Random"><i data-value="fa fa-random"
		                class="fa fa-random"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Step-backward"><i data-value="fa fa-step-backward"
		                class="fa fa-step-backward"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Step-forward"><i data-value="fa fa-step-forward"
		                class="fa fa-step-forward"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Stop"><i data-value="fa fa-stop" class="fa fa-stop"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Stop Circle"><i data-value="fa fa-stop-circle"
		                class="fa fa-stop-circle"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Stop Circle Outlined"><i data-value="fa fa-stop-circle-o"
		                class="fa fa-stop-circle-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="YouTube Play"><i data-value="fa fa-youtube-play"
		                class="fa fa-youtube-play"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Ambulance"><i data-value="fa fa-ambulance"
		                class="fa fa-ambulance"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Bicycle"><i data-value="fa fa-bicycle"
		                class="fa fa-bicycle"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Bus"><i data-value="fa fa-bus" class="fa fa-bus"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Car (automobile)"><i data-value="fa fa-car"
		                class="fa fa-car"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Fighter-jet"><i data-value="fa fa-fighter-jet"
		                class="fa fa-fighter-jet"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Motorcycle"><i data-value="fa fa-motorcycle"
		                class="fa fa-motorcycle"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Plane"><i data-value="fa fa-plane" class="fa fa-plane"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Rocket"><i data-value="fa fa-rocket"
		                class="fa fa-rocket"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Ship"><i data-value="fa fa-ship" class="fa fa-ship"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Space Shuttle"><i data-value="fa fa-space-shuttle"
		                class="fa fa-space-shuttle"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Subway"><i data-value="fa fa-subway"
		                class="fa fa-subway"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Taxi (cab)"><i data-value="fa fa-taxi"
		                class="fa fa-taxi"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Train"><i data-value="fa fa-train" class="fa fa-train"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Truck"><i data-value="fa fa-truck" class="fa fa-truck"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Wheelchair"><i data-value="fa fa-wheelchair"
		                class="fa fa-wheelchair"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Lizard (Hand)"><i data-value="fa fa-hand-lizard-o"
		                class="fa fa-hand-lizard-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Hand Outlined Down"><i data-value="fa fa-hand-o-down"
		                class="fa fa-hand-o-down"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Hand Outlined Left"><i data-value="fa fa-hand-o-left"
		                class="fa fa-hand-o-left"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Hand Outlined Right"><i data-value="fa fa-hand-o-right"
		                class="fa fa-hand-o-right"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Hand Outlined Up"><i data-value="fa fa-hand-o-up"
		                class="fa fa-hand-o-up"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Paper (Hand) (hand-stop-o)"><i
		                data-value="fa fa-hand-paper-o" class="fa fa-hand-paper-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Hand Peace"><i data-value="fa fa-hand-peace-o"
		                class="fa fa-hand-peace-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Hand Pointer"><i data-value="fa fa-hand-pointer-o"
		                class="fa fa-hand-pointer-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Rock (Hand) (hand-grab-o)"><i data-value="fa fa-hand-rock-o"
		                class="fa fa-hand-rock-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Scissors (Hand)"><i data-value="fa fa-hand-scissors-o"
		                class="fa fa-hand-scissors-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Spock (Hand)"><i data-value="fa fa-hand-spock-o"
		                class="fa fa-hand-spock-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Thumbs-down"><i data-value="fa fa-thumbs-down"
		                class="fa fa-thumbs-down"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Thumbs Down Outlined"><i data-value="fa fa-thumbs-o-down"
		                class="fa fa-thumbs-o-down"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Thumbs Up Outlined"><i data-value="fa fa-thumbs-o-up"
		                class="fa fa-thumbs-o-up"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Thumbs-up"><i data-value="fa fa-thumbs-up"
		                class="fa fa-thumbs-up"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Genderless"><i data-value="fa fa-genderless"
		                class="fa fa-genderless"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Mars"><i data-value="fa fa-mars" class="fa fa-mars"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Mars Double"><i data-value="fa fa-mars-double"
		                class="fa fa-mars-double"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Mars Stroke"><i data-value="fa fa-mars-stroke"
		                class="fa fa-mars-stroke"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Mars Stroke Horizontal"><i data-value="fa fa-mars-stroke-h"
		                class="fa fa-mars-stroke-h"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Mars Stroke Vertical"><i data-value="fa fa-mars-stroke-v"
		                class="fa fa-mars-stroke-v"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Mercury"><i data-value="fa fa-mercury"
		                class="fa fa-mercury"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Neuter"><i data-value="fa fa-neuter"
		                class="fa fa-neuter"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Transgender (intersex)"><i data-value="fa fa-transgender"
		                class="fa fa-transgender"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Transgender Alt"><i data-value="fa fa-transgender-alt"
		                class="fa fa-transgender-alt"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Venus"><i data-value="fa fa-venus" class="fa fa-venus"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Venus Double"><i data-value="fa fa-venus-double"
		                class="fa fa-venus-double"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Venus Mars"><i data-value="fa fa-venus-mars"
		                class="fa fa-venus-mars"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="500px"><i data-value="fa fa-500px" class="fa fa-500px"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="App.net"><i data-value="fa fa-adn" class="fa fa-adn"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Amazon"><i data-value="fa fa-amazon"
		                class="fa fa-amazon"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Android"><i data-value="fa fa-android"
		                class="fa fa-android"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="AngelList"><i data-value="fa fa-angellist"
		                class="fa fa-angellist"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Apple"><i data-value="fa fa-apple" class="fa fa-apple"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Behance"><i data-value="fa fa-behance"
		                class="fa fa-behance"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Behance Square"><i data-value="fa fa-behance-square"
		                class="fa fa-behance-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Bitbucket"><i data-value="fa fa-bitbucket"
		                class="fa fa-bitbucket"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Bitbucket Square"><i data-value="fa fa-bitbucket-square"
		                class="fa fa-bitbucket-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Font Awesome Black Tie"><i data-value="fa fa-black-tie"
		                class="fa fa-black-tie"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Bluetooth"><i data-value="fa fa-bluetooth"
		                class="fa fa-bluetooth"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Bluetooth"><i data-value="fa fa-bluetooth-b"
		                class="fa fa-bluetooth-b"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Bitcoin (BTC) (bitcoin)"><i data-value="fa fa-btc"
		                class="fa fa-btc"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="BuySellAds"><i data-value="fa fa-buysellads"
		                class="fa fa-buysellads"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="American Express Credit Card"><i data-value="fa fa-cc-amex"
		                class="fa fa-cc-amex"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Diner's Club Credit Card"><i
		                data-value="fa fa-cc-diners-club" class="fa fa-cc-diners-club"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Discover Credit Card"><i data-value="fa fa-cc-discover"
		                class="fa fa-cc-discover"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="JCB Credit Card"><i data-value="fa fa-cc-jcb"
		                class="fa fa-cc-jcb"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="MasterCard Credit Card"><i data-value="fa fa-cc-mastercard"
		                class="fa fa-cc-mastercard"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Paypal Credit Card"><i data-value="fa fa-cc-paypal"
		                class="fa fa-cc-paypal"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Stripe Credit Card"><i data-value="fa fa-cc-stripe"
		                class="fa fa-cc-stripe"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Visa Credit Card"><i data-value="fa fa-cc-visa"
		                class="fa fa-cc-visa"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Chrome"><i data-value="fa fa-chrome"
		                class="fa fa-chrome"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Codepen"><i data-value="fa fa-codepen"
		                class="fa fa-codepen"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Codie Pie"><i data-value="fa fa-codiepie"
		                class="fa fa-codiepie"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Connect Develop"><i data-value="fa fa-connectdevelop"
		                class="fa fa-connectdevelop"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Contao"><i data-value="fa fa-contao"
		                class="fa fa-contao"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="CSS 3 Logo"><i data-value="fa fa-css3"
		                class="fa fa-css3"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="DashCube"><i data-value="fa fa-dashcube"
		                class="fa fa-dashcube"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Delicious Logo"><i data-value="fa fa-delicious"
		                class="fa fa-delicious"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="DeviantART"><i data-value="fa fa-deviantart"
		                class="fa fa-deviantart"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Digg Logo"><i data-value="fa fa-digg" class="fa fa-digg"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Dribbble"><i data-value="fa fa-dribbble"
		                class="fa fa-dribbble"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Dropbox"><i data-value="fa fa-dropbox"
		                class="fa fa-dropbox"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Drupal Logo"><i data-value="fa fa-drupal"
		                class="fa fa-drupal"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Edge Browser"><i data-value="fa fa-edge"
		                class="fa fa-edge"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Galactic Empire (ge)"><i data-value="fa fa-empire"
		                class="fa fa-empire"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="ExpeditedSSL"><i data-value="fa fa-expeditedssl"
		                class="fa fa-expeditedssl"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Facebook (facebook-f)"><i data-value="fa fa-facebook"
		                class="fa fa-facebook"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Facebook Official"><i data-value="fa fa-facebook-official"
		                class="fa fa-facebook-official"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Facebook Square"><i data-value="fa fa-facebook-square"
		                class="fa fa-facebook-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Firefox"><i data-value="fa fa-firefox"
		                class="fa fa-firefox"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Flickr"><i data-value="fa fa-flickr"
		                class="fa fa-flickr"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Fonticons"><i data-value="fa fa-fonticons"
		                class="fa fa-fonticons"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Fort Awesome"><i data-value="fa fa-fort-awesome"
		                class="fa fa-fort-awesome"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Forumbee"><i data-value="fa fa-forumbee"
		                class="fa fa-forumbee"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Foursquare"><i data-value="fa fa-foursquare"
		                class="fa fa-foursquare"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Get Pocket"><i data-value="fa fa-get-pocket"
		                class="fa fa-get-pocket"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="GG Currency"><i data-value="fa fa-gg" class="fa fa-gg"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="GG Currency Circle"><i data-value="fa fa-gg-circle"
		                class="fa fa-gg-circle"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Git"><i data-value="fa fa-git" class="fa fa-git"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Git Square"><i data-value="fa fa-git-square"
		                class="fa fa-git-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="GitHub"><i data-value="fa fa-github"
		                class="fa fa-github"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="GitHub Alt"><i data-value="fa fa-github-alt"
		                class="fa fa-github-alt"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="GitHub Square"><i data-value="fa fa-github-square"
		                class="fa fa-github-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Google Logo"><i data-value="fa fa-google"
		                class="fa fa-google"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Google Plus"><i data-value="fa fa-google-plus"
		                class="fa fa-google-plus"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Google Plus Square"><i data-value="fa fa-google-plus-square"
		                class="fa fa-google-plus-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Google Wallet"><i data-value="fa fa-google-wallet"
		                class="fa fa-google-wallet"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Gratipay (Gittip) (gittip)"><i data-value="fa fa-gittip"
		                class="fa fa-gittip"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Hacker News (y-combinator-square, yc-square)"><i
		                data-value="fa fa-hacker-news" class="fa fa-hacker-news"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Houzz"><i data-value="fa fa-houzz" class="fa fa-houzz"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="HTML 5 Logo"><i data-value="fa fa-html5"
		                class="fa fa-html5"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Instagram"><i data-value="fa fa-instagram"
		                class="fa fa-instagram"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Internet-explorer"><i data-value="fa fa-internet-explorer"
		                class="fa fa-internet-explorer"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Ioxhost"><i data-value="fa fa-ioxhost"
		                class="fa fa-ioxhost"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Joomla Logo"><i data-value="fa fa-joomla"
		                class="fa fa-joomla"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="JsFiddle"><i data-value="fa fa-jsfiddle"
		                class="fa fa-jsfiddle"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Last.fm"><i data-value="fa fa-lastfm"
		                class="fa fa-lastfm"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Last.fm Square"><i data-value="fa fa-lastfm-square"
		                class="fa fa-lastfm-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Leanpub"><i data-value="fa fa-leanpub"
		                class="fa fa-leanpub"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="LinkedIn"><i data-value="fa fa-linkedin"
		                class="fa fa-linkedin"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="LinkedIn Square"><i data-value="fa fa-linkedin-square"
		                class="fa fa-linkedin-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Linux"><i data-value="fa fa-linux" class="fa fa-linux"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="MaxCDN"><i data-value="fa fa-maxcdn"
		                class="fa fa-maxcdn"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Meanpath"><i data-value="fa fa-meanpath"
		                class="fa fa-meanpath"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Medium"><i data-value="fa fa-medium"
		                class="fa fa-medium"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Mixcloud"><i data-value="fa fa-mixcloud"
		                class="fa fa-mixcloud"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="MODX"><i data-value="fa fa-modx" class="fa fa-modx"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Odnoklassniki"><i data-value="fa fa-odnoklassniki"
		                class="fa fa-odnoklassniki"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Odnoklassniki Square"><i
		                data-value="fa fa-odnoklassniki-square" class="fa fa-odnoklassniki-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="OpenCart"><i data-value="fa fa-opencart"
		                class="fa fa-opencart"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="OpenID"><i data-value="fa fa-openid"
		                class="fa fa-openid"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Opera"><i data-value="fa fa-opera" class="fa fa-opera"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Optin Monster"><i data-value="fa fa-optin-monster"
		                class="fa fa-optin-monster"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Pagelines"><i data-value="fa fa-pagelines"
		                class="fa fa-pagelines"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Paypal"><i data-value="fa fa-paypal"
		                class="fa fa-paypal"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Pied Piper Logo"><i data-value="fa fa-pied-piper"
		                class="fa fa-pied-piper"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Pied Piper Alternate Logo"><i
		                data-value="fa fa-pied-piper-alt" class="fa fa-pied-piper-alt"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Pinterest"><i data-value="fa fa-pinterest"
		                class="fa fa-pinterest"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Pinterest P"><i data-value="fa fa-pinterest-p"
		                class="fa fa-pinterest-p"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Pinterest Square"><i data-value="fa fa-pinterest-square"
		                class="fa fa-pinterest-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Product Hunt"><i data-value="fa fa-product-hunt"
		                class="fa fa-product-hunt"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="QQ"><i data-value="fa fa-qq" class="fa fa-qq"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Rebel Alliance (ra)"><i data-value="fa fa-rebel"
		                class="fa fa-rebel"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Reddit Logo"><i data-value="fa fa-reddit"
		                class="fa fa-reddit"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Reddit Alien"><i data-value="fa fa-reddit-alien"
		                class="fa fa-reddit-alien"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Reddit Square"><i data-value="fa fa-reddit-square"
		                class="fa fa-reddit-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Renren"><i data-value="fa fa-renren"
		                class="fa fa-renren"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Safari"><i data-value="fa fa-safari"
		                class="fa fa-safari"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Scribd"><i data-value="fa fa-scribd"
		                class="fa fa-scribd"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Sellsy"><i data-value="fa fa-sellsy"
		                class="fa fa-sellsy"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Share Alt"><i data-value="fa fa-share-alt"
		                class="fa fa-share-alt"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Share Alt Square"><i data-value="fa fa-share-alt-square"
		                class="fa fa-share-alt-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Shirts in Bulk"><i data-value="fa fa-shirtsinbulk"
		                class="fa fa-shirtsinbulk"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="SimplyBuilt"><i data-value="fa fa-simplybuilt"
		                class="fa fa-simplybuilt"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Skyatlas"><i data-value="fa fa-skyatlas"
		                class="fa fa-skyatlas"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Skype"><i data-value="fa fa-skype" class="fa fa-skype"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Slack Logo"><i data-value="fa fa-slack"
		                class="fa fa-slack"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Slideshare"><i data-value="fa fa-slideshare"
		                class="fa fa-slideshare"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="SoundCloud"><i data-value="fa fa-soundcloud"
		                class="fa fa-soundcloud"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Spotify"><i data-value="fa fa-spotify"
		                class="fa fa-spotify"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Stack Exchange"><i data-value="fa fa-stack-exchange"
		                class="fa fa-stack-exchange"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Stack Overflow"><i data-value="fa fa-stack-overflow"
		                class="fa fa-stack-overflow"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Steam"><i data-value="fa fa-steam" class="fa fa-steam"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Steam Square"><i data-value="fa fa-steam-square"
		                class="fa fa-steam-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="StumbleUpon Logo"><i data-value="fa fa-stumbleupon"
		                class="fa fa-stumbleupon"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="StumbleUpon Circle"><i data-value="fa fa-stumbleupon-circle"
		                class="fa fa-stumbleupon-circle"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Tencent Weibo"><i data-value="fa fa-tencent-weibo"
		                class="fa fa-tencent-weibo"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Trello"><i data-value="fa fa-trello"
		                class="fa fa-trello"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="TripAdvisor"><i data-value="fa fa-tripadvisor"
		                class="fa fa-tripadvisor"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Tumblr"><i data-value="fa fa-tumblr"
		                class="fa fa-tumblr"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Tumblr Square"><i data-value="fa fa-tumblr-square"
		                class="fa fa-tumblr-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Twitch"><i data-value="fa fa-twitch"
		                class="fa fa-twitch"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Twitter"><i data-value="fa fa-twitter"
		                class="fa fa-twitter"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Twitter Square"><i data-value="fa fa-twitter-square"
		                class="fa fa-twitter-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="USB"><i data-value="fa fa-usb" class="fa fa-usb"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Viacoin"><i data-value="fa fa-viacoin"
		                class="fa fa-viacoin"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Vimeo"><i data-value="fa fa-vimeo" class="fa fa-vimeo"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Vimeo Square"><i data-value="fa fa-vimeo-square"
		                class="fa fa-vimeo-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Vine"><i data-value="fa fa-vine" class="fa fa-vine"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="VK"><i data-value="fa fa-vk" class="fa fa-vk"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Weibo"><i data-value="fa fa-weibo" class="fa fa-weibo"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Weixin (WeChat) (wechat)"><i data-value="fa fa-weixin"
		                class="fa fa-weixin"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="What's App"><i data-value="fa fa-whatsapp"
		                class="fa fa-whatsapp"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Wikipedia W"><i data-value="fa fa-wikipedia-w"
		                class="fa fa-wikipedia-w"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Windows"><i data-value="fa fa-windows"
		                class="fa fa-windows"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="WordPress Logo"><i data-value="fa fa-wordpress"
		                class="fa fa-wordpress"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Xing"><i data-value="fa fa-xing" class="fa fa-xing"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Xing Square"><i data-value="fa fa-xing-square"
		                class="fa fa-xing-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Y Combinator (yc)"><i data-value="fa fa-y-combinator"
		                class="fa fa-y-combinator"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Yahoo Logo"><i data-value="fa fa-yahoo"
		                class="fa fa-yahoo"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Yelp"><i data-value="fa fa-yelp" class="fa fa-yelp"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="YouTube"><i data-value="fa fa-youtube"
		                class="fa fa-youtube"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="YouTube Play"><i data-value="fa fa-youtube-play"
		                class="fa fa-youtube-play"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="YouTube Square"><i data-value="fa fa-youtube-square"
		                class="fa fa-youtube-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Ambulance"><i data-value="fa fa-ambulance"
		                class="fa fa-ambulance"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="H Square"><i data-value="fa fa-h-square"
		                class="fa fa-h-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Heart"><i data-value="fa fa-heart" class="fa fa-heart"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Heart Outlined"><i data-value="fa fa-heart-o"
		                class="fa fa-heart-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Heartbeat"><i data-value="fa fa-heartbeat"
		                class="fa fa-heartbeat"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Hospital Outlined"><i data-value="fa fa-hospital-o"
		                class="fa fa-hospital-o"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Medkit"><i data-value="fa fa-medkit"
		                class="fa fa-medkit"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Plus Square"><i data-value="fa fa-plus-square"
		                class="fa fa-plus-square"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Stethoscope"><i data-value="fa fa-stethoscope"
		                class="fa fa-stethoscope"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="User-md"><i data-value="fa fa-user-md"
		                class="fa fa-user-md"></i>
                </span>
                <span class="cmb-icon-chooser-icon" title="Wheelchair"><i data-value="fa fa-wheelchair"
		                class="fa fa-wheelchair"></i>
                </span>
			</div>
		</div>
	</div>
	<script>
		jQuery(document).ready(function ($) {
			$('.cmb-choose-icon').on('click', function (evt) {
				$(this).parents('.cmb-type-icon-chooser').find('.cmb-icon-chooser-container').slideToggle();

				return false;
			});

			$('.cmd-remove-icon').on('click', function (evt) {
				$(this).parents('.cmb-type-icon-chooser')
					.find('.cmb-icon-chooser-selected-icon i')
					.attr('class', '')
					.end()
					.find('.cmb-icon-value')
					.val('');

				return false;
			});

			$('.cmb-icon-chooser-icon').on('click', function (evt) {
				var $this = $(this),
					$parent = $this.parents('.cmb-type-icon-chooser'),
					value = $this.find('i').data('value');

				$parent.find('.cmb-icon-chooser-selected-icon i').attr('class', value);
				$parent.find('.cmb-icon-value').val(value);

				return false;
			});
		});
	</script>
	<?php
	echo $field_type->_desc( true );
}

add_action( 'cmb2_render_icon_chooser', 'cmb2_render_callback_for_icon_chooser', 10, 5 );
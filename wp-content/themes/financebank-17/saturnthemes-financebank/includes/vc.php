<?php
add_action( 'vc_before_init', 'saturnthemes_financebank_remove_updater_notice' );
function saturnthemes_financebank_remove_updater_notice() {
	vc_manager()->disableUpdater();
}

add_action( 'vc_after_init', 'saturnthemes_financebank_load_shortcodes' );
function saturnthemes_financebank_load_shortcodes() {
	$section_group = __( 'Financebank Options', 'saturnthemes-financebank' );

	$animation_group    = __( 'Animation', 'saturnthemes-financebank' );
	$animation_type     = array(
		"type"        => "saturnthemes_financebank_animation_type",
		"heading"     => __( "Animation Type", 'saturnthemes-financebank' ),
		"param_name"  => "animation_type",
		"admin_label" => true,
		'group'       => $animation_group,
	);
	$animation_duration = array(
		"type"        => "textfield",
		"heading"     => __( "Animation Duration", 'saturnthemes-financebank' ),
		"param_name"  => "animation_duration",
		"description" => __( "numerical value (unit: seconds)", 'saturnthemes-financebank' ),
		"value"       => '1s',
		'group'       => $animation_group,
	);
	$animation_delay    = array(
		"type"        => "textfield",
		"heading"     => __( "Animation Delay", 'saturnthemes-financebank' ),
		"param_name"  => "animation_delay",
		"description" => __( "numerical value (unit: seconds)", 'saturnthemes-financebank' ),
		"value"       => '0s',
		'group'       => $animation_group,
	);

	vc_add_param( 'vc_row', array(
		'type'        => 'checkbox',
		'heading'     => __( 'Wrap as Container', 'saturnthemes-financebank' ),
		'param_name'  => 'wrap_container',
		'value'       => array( __( 'Yes', 'js_composer' ) => 'yes' ),
		'group'       => $section_group,
		'admin_label' => true,
	) );

	vc_add_param( 'vc_row', array(
		'type'        => 'colorpicker',
		'heading'     => __( 'Background Overlay', 'saturnthemes-financebank' ),
		'group'       => $section_group,
		'param_name'  => 'row_bg_overlay',
		'description' => __( 'Choose an overlay color for background of row. Leave blank for none.', 'saturnthemes-financebank' ),
	) );

	vc_add_param( 'vc_row', $animation_type );
	vc_add_param( 'vc_row', $animation_duration );
	vc_add_param( 'vc_row', $animation_delay );

	vc_add_param( 'vc_row_inner', $animation_type );
	vc_add_param( 'vc_row_inner', $animation_duration );
	vc_add_param( 'vc_row_inner', $animation_delay );

	vc_add_param( 'vc_column', $animation_type );
	vc_add_param( 'vc_column', $animation_duration );
	vc_add_param( 'vc_column', $animation_delay );

	vc_add_param( 'vc_column_inner', $animation_type );
	vc_add_param( 'vc_column_inner', $animation_duration );
	vc_add_param( 'vc_column_inner', $animation_delay );

	vc_add_param( 'vc_custom_heading', array(
		'type'        => 'dropdown',
		'heading'     => __( 'Font Weight', 'saturnthemes-financebank' ),
		'param_name'  => 'font_weight',
		'value'       => array(
			__( 'Extra-Light', 'saturnthemes-financebank' ) => 200,
			__( 'Light', 'saturnthemes-financebank' )       => 300,
			__( 'Normal', 'saturnthemes-financebank' )      => 400,
			__( 'Semi-Bold', 'saturnthemes-financebank' )   => 600,
			__( 'Bold', 'saturnthemes-financebank' )        => 700,
			__( 'Extra-Bold', 'saturnthemes-financebank' )  => 800,
		),
		'std'         => 400,
		'group'       => $section_group,
		'admin_label' => false,
	) );
	vc_add_param( 'vc_custom_heading', array(
		'type'        => 'dropdown',
		'heading'     => __( 'Font Style', 'saturnthemes-financebank' ),
		'param_name'  => 'font_style',
		'value'       => array(
			__( 'Normal', 'saturnthemes-financebank' ) => 'normal',
			__( 'Italic', 'saturnthemes-financebank' ) => 'italic',
		),
		'std'         => 'normal',
		'group'       => $section_group,
		'admin_label' => false,
	) );
	vc_add_param( 'vc_custom_heading', array(
		'type'        => 'dropdown',
		'heading'     => __( 'Text Transform', 'saturnthemes-financebank' ),
		'param_name'  => 'text_transform',
		'value'       => array(
			__( 'None', 'saturnthemes-financebank' )       => 'none',
			__( 'Capitalize', 'saturnthemes-financebank' ) => 'capitalize',
			__( 'Uppercase', 'saturnthemes-financebank' )  => 'uppercase',
			__( 'Lowercase', 'saturnthemes-financebank' )  => 'lowercase',
		),
		'std'         => 'normal',
		'group'       => $section_group,
		'admin_label' => false,
	) );
	vc_add_param( 'vc_custom_heading', array(
		'type'        => 'textfield',
		'heading'     => __( 'Letter Spacing', 'saturnthemes-financebank' ),
		'param_name'  => 'letter_spacing',
		'value'       => '',
		'group'       => $section_group,
		'admin_label' => false,
		"description" => __( "For example: 0.5px", 'saturnthemes-financebank' ),
	) );
	vc_add_param( 'vc_custom_heading', array(
		'type'        => 'checkbox',
		'heading'     => __( 'Heading Has Icon', 'saturnthemes-financebank' ),
		'param_name'  => 'has_icon',
		'description' => __( 'Display check icon on heading.', 'saturnthemes-financebank' ),
		'value'       => array( __( 'Yes', 'saturnthemes-financebank' ) => 'yes' ),
		'std'         => 'no',
	) );

    vc_add_param( 'vc_line_chart', array(
        'type'        => 'textfield',
        'heading'     => __( 'Width', 'saturnthemes-financebank' ),
        'group'       => $section_group,
        'param_name'  => 'saturnthemes_width',
        'description' => __( 'Width of line chart', 'saturnthemes-financebank' ),
    ) );

    vc_add_param( 'vc_line_chart', array(
        'type'        => 'textfield',
        'heading'     => __( 'Height', 'saturnthemes-financebank' ),
        'group'       => $section_group,
        'param_name'  => 'saturnthemes_height',
        'description' => __( 'Height of line chart', 'saturnthemes-financebank' ),
        'default'     => 300,
    ) );

	// Info Box
	class WPBakeryShortCode_SaturnThemes_Financebank_Info_Box extends WPBakeryShortCode {

	}

	vc_map( array(
		'name'     => esc_html__( 'Financebank Info Box', 'saturnthemes-financebank' ),
		'base'     => 'saturnthemes_financebank_info_box',
		'category' => 'Financebank',
		'params'   => array(
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Style', 'saturnthemes-financebank' ),
				'param_name'  => 'style',
				'value'       => array(
					__( 'Style 1', 'saturnthemes-financebank' ) => 'style1',
					__( 'Style 2', 'saturnthemes-financebank' ) => 'style2',
				),
				'description' => esc_html__( 'Style of info box', 'saturnthemes-financebank' ),
				'std' => 'style1',
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Title', 'saturnthemes-financebank' ),
				'param_name'  => 'title',
				'description' => esc_html__( 'Enter the title of this info box.', 'saturnthemes-financebank' ),
				'admin_label' => true,
			),
			array(
				'type'        => 'textarea_html',
				'heading'     => __( 'Description', 'saturnthemes-financebank' ),
				'param_name'  => 'content',
				'value'       => '',
				'description' => __( 'Enter the description for this info box.', 'saturnthemes-financebank' ),
			),
			array(
				'type'        => 'attach_image',
				'heading'     => __( 'Image', 'saturnthemes-financebank' ),
				'param_name'  => 'image',
				'value'       => '',
				'description' => __( 'Select image from media library.', 'saturnthemes-financebank' ),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => __( 'Apply link to:', 'saturnthemes-financebank' ),
				'param_name'  => 'read_more',
				'value'       => array(
					__( 'No Link', 'saturnthemes-financebank' )           => 'none',
					__( 'Complete Box', 'saturnthemes-financebank' )           => 'box',
					__( 'Title', 'saturnthemes-financebank' )             => 'title',
					__( 'Display Read More', 'saturnthemes-financebank' ) => 'more',
				),
			),
			array(
				'type'        => 'vc_link',
				'heading'     => __( 'Add Link', 'saturnthemes-financebank' ),
				'param_name'  => 'link',
				'value'       => '',
				'description' => __( 'Add a custom link or select existing page. You can remove existing link as well.', 'saturnthemes-financebank' ),
				'dependency'  => array( 'element' => 'read_more', 'value' => array( 'box', 'title', 'more' ) ),
			),
			array(
				'type'        => 'textfield',
				'heading'     => __( 'Read More Text', 'saturnthemes-financebank' ),
				'param_name'  => 'read_text',
				'value'       => 'Read More',
				'description' => __( 'Customize the read more text.', 'saturnthemes-financebank' ),
				'dependency'  => Array( 'element' => 'read_more', 'value' => array( 'more' ) ),
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Extra class name', 'saturnthemes-financebank' ),
				'param_name'  => 'el_class',
				'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'saturnthemes-financebank' ),
			),
			array(
				'type'       => 'css_editor',
				'heading'    => __( 'CSS', 'saturnthemes-financebank' ),
				'param_name' => 'css',
				'group'      => __( 'Design Options', 'saturnthemes-financebank' ),
			),
		),
	) );

	// Icon
	class WPBakeryShortCode_SaturnThemes_Financebank_Icon extends WPBakeryShortCode {

	}

	vc_map( array(
		        'name'        => esc_html__( 'Financebank Icon', 'saturnthemes-financebank' ),
		        'base'        => 'saturnthemes_financebank_icon',
		        'category'    => __( 'Financebank', 'saturnthemes-financebank' ),
		        'icon'        => 'icon-wpb-vc_icon',
		        'description' => esc_html__( 'Eye catching icons from libraries', 'saturnthemes-financebank' ),
		        'params'      => array(
			        array(
				        'type'        => 'dropdown',
				        'heading'     => esc_html__( 'Icon library', 'saturnthemes-financebank' ),
				        'value'       => array(
					        esc_html__( 'Font Awesome', 'saturnthemes-financebank' ) => 'fontawesome',
					        esc_html__( 'Open Iconic', 'saturnthemes-financebank' )  => 'openiconic',
					        esc_html__( 'Typicons', 'saturnthemes-financebank' )     => 'typicons',
					        esc_html__( 'Entypo', 'saturnthemes-financebank' )       => 'entypo',
					        esc_html__( 'Linecons', 'saturnthemes-financebank' )     => 'linecons',
					        esc_html__( 'P7 Stroke', 'saturnthemes-financebank' )    => 'pe7stroke',
				        ),
				        'admin_label' => true,
				        'param_name'  => 'type',
				        'description' => esc_html__( 'Select icon library.', 'saturnthemes-financebank' ),
			        ),
			        array(
				        'type'        => 'iconpicker',
				        'heading'     => esc_html__( 'Icon', 'saturnthemes-financebank' ),
				        'param_name'  => 'icon_fontawesome',
				        'value'       => 'fa fa-adjust', // default value to backend editor admin_label
				        'settings'    => array(
					        'emptyIcon'    => false,
					        // default true, display an "EMPTY" icon?
					        'iconsPerPage' => 4000,
					        // default 100, how many icons per/page to display, we use (big number) to display all icons in single page
				        ),
				        'dependency'  => array(
					        'element' => 'type',
					        'value'   => 'fontawesome',
				        ),
				        'description' => esc_html__( 'Select icon from library.', 'saturnthemes-financebank' ),
			        ),
			        array(
				        'type'        => 'iconpicker',
				        'heading'     => esc_html__( 'Icon', 'saturnthemes-financebank' ),
				        'param_name'  => 'icon_openiconic',
				        'value'       => 'vc-oi vc-oi-dial', // default value to backend editor admin_label
				        'settings'    => array(
					        'emptyIcon'    => false, // default true, display an "EMPTY" icon?
					        'type'         => 'openiconic',
					        'iconsPerPage' => 4000, // default 100, how many icons per/page to display
				        ),
				        'dependency'  => array(
					        'element' => 'type',
					        'value'   => 'openiconic',
				        ),
				        'description' => esc_html__( 'Select icon from library.', 'saturnthemes-financebank' ),
			        ),
			        array(
				        'type'        => 'iconpicker',
				        'heading'     => esc_html__( 'Icon', 'saturnthemes-financebank' ),
				        'param_name'  => 'icon_typicons',
				        'value'       => 'typcn typcn-adjust-brightness', // default value to backend editor admin_label
				        'settings'    => array(
					        'emptyIcon'    => false, // default true, display an "EMPTY" icon?
					        'type'         => 'typicons',
					        'iconsPerPage' => 4000, // default 100, how many icons per/page to display
				        ),
				        'dependency'  => array(
					        'element' => 'type',
					        'value'   => 'typicons',
				        ),
				        'description' => esc_html__( 'Select icon from library.', 'saturnthemes-financebank' ),
			        ),
			        array(
				        'type'       => 'iconpicker',
				        'heading'    => esc_html__( 'Icon', 'saturnthemes-financebank' ),
				        'param_name' => 'icon_entypo',
				        'value'      => 'entypo-icon entypo-icon-note', // default value to backend editor admin_label
				        'settings'   => array(
					        'emptyIcon'    => false, // default true, display an "EMPTY" icon?
					        'type'         => 'entypo',
					        'iconsPerPage' => 4000, // default 100, how many icons per/page to display
				        ),
				        'dependency' => array(
					        'element' => 'type',
					        'value'   => 'entypo',
				        ),
			        ),
			        array(
				        'type'        => 'iconpicker',
				        'heading'     => esc_html__( 'Icon', 'saturnthemes-financebank' ),
				        'param_name'  => 'icon_linecons',
				        'value'       => 'vc_li vc_li-heart', // default value to backend editor admin_label
				        'settings'    => array(
					        'emptyIcon'    => false, // default true, display an "EMPTY" icon?
					        'type'         => 'linecons',
					        'iconsPerPage' => 4000, // default 100, how many icons per/page to display
				        ),
				        'dependency'  => array(
					        'element' => 'type',
					        'value'   => 'linecons',
				        ),
				        'description' => esc_html__( 'Select icon from library.', 'saturnthemes-financebank' ),
			        ),
			        array(
				        'type'        => 'iconpicker',
				        'heading'     => esc_html__( 'Icon', 'saturnthemes-financebank' ),
				        'param_name'  => 'icon_pe7stroke',
				        'value'       => 'pe-7s-album',
				        'settings'    => array(
					        'emptyIcon'    => false,
					        'type'         => 'pe7stroke',
					        'iconsPerPage' => 400,
				        ),
				        'dependency'  => array(
					        'element' => 'type',
					        'value'   => 'pe7stroke',
				        ),
				        'description' => esc_html__( 'Select icon from library.', 'saturnthemes-financebank' ),
			        ),
			        array(
				        'type'        => 'textfield',
				        'heading'     => "Size",
				        'admin_label' => true,
				        'param_name'  => 'size',
			        ),
			        array(
				        'type'        => 'colorpicker',
				        'heading'     => esc_html__( 'Custom color', 'saturnthemes-financebank' ),
				        'param_name'  => 'custom_color',
				        'description' => esc_html__( 'Select custom icon color.', 'saturnthemes-financebank' ),
			        ),
			        array(
				        'type'        => 'dropdown',
				        'heading'     => esc_html__( 'Background shape', 'saturnthemes-financebank' ),
				        'param_name'  => 'background_style',
				        'value'       => array(
					        esc_html__( 'None', 'js_composer' )            => '',
					        esc_html__( 'Circle', 'js_composer' )          => 'rounded',
					        esc_html__( 'Square', 'js_composer' )          => 'boxed',
					        esc_html__( 'Rounded', 'js_composer' )         => 'rounded-less',
					        esc_html__( 'Outline Circle', 'js_composer' )  => 'rounded-outline',
					        esc_html__( 'Outline Square', 'js_composer' )  => 'boxed-outline',
					        esc_html__( 'Outline Rounded', 'js_composer' ) => 'rounded-less-outline',
				        ),
				        'description' => esc_html__( 'Select background shape and style for icon.', 'saturnthemes-financebank' ),
			        ),
			        array(
				        'type'        => 'colorpicker',
				        'heading'     => esc_html__( 'Custom background color', 'saturnthemes-financebank' ),
				        'param_name'  => 'custom_background_color',
				        'description' => esc_html__( 'Select custom icon background color.', 'saturnthemes-financebank' ),
			        ),
			        array(
				        'type'        => 'dropdown',
				        'heading'     => esc_html__( 'Icon alignment', 'saturnthemes-financebank' ),
				        'param_name'  => 'align',
				        'value'       => array(
					        esc_html__( 'Left', 'js_composer' )   => 'left',
					        esc_html__( 'Right', 'js_composer' )  => 'right',
					        esc_html__( 'Center', 'js_composer' ) => 'center',
				        ),
				        'description' => esc_html__( 'Select icon alignment.', 'saturnthemes-financebank' ),
			        ),
			        array(
				        'type'        => 'vc_link',
				        'heading'     => esc_html__( 'URL (Link)', 'saturnthemes-financebank' ),
				        'param_name'  => 'link',
				        'description' => esc_html__( 'Add link to icon.', 'saturnthemes-financebank' ),
			        ),
			        array(
				        'type'        => 'textfield',
				        'heading'     => esc_html__( 'Extra class name', 'saturnthemes-financebank' ),
				        'param_name'  => 'el_class',
				        'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'saturnthemes-financebank' ),
			        ),
			        array(
				        'type'       => 'css_editor',
				        'heading'    => __( 'CSS', 'saturnthemes-financebank' ),
				        'param_name' => 'css',
				        'group'      => __( 'Design Options', 'saturnthemes-financebank' ),
			        ),
		        ),
	        ) );

	// Shortcode Brand Carousel
	class WPBakeryShortCode_SaturnThemes_Financebank_Image_Carousel extends WPBakeryShortCode {

		protected static $carousel_index = 1;

		public static function getCarouselIndex() {
			return self::$carousel_index ++ . '-' . time();
		}
	}

	vc_map( array(
		        'name'     => __( 'Financebank Image Carousel', 'saturnthemes-financebank' ),
		        'base'     => 'saturnthemes_financebank_image_carousel',
		        'category' => __( 'Financebank', 'saturnthemes-financebank' ),
		        'params'   => array(
			        array(
				        'type'        => 'attach_images',
				        'heading'     => __( 'Images', 'saturnthemes-financebank' ),
				        'param_name'  => 'images',
				        'value'       => '',
				        'description' => __( 'Select images from media library.', 'saturnthemes-financebank' ),
			        ),
			        array(
				        'type'        => 'textfield',
				        'heading'     => __( 'Image size', 'saturnthemes-financebank' ),
				        'param_name'  => 'image_size',
				        'value'       => 'full',
				        'description' => __( 'Enter image size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use "thumbnail" size. If used slides per view, this will be used to define carousel wrapper size.', 'saturnthemes-financebank' ),
			        ),
			        array(
				        'type'        => 'dropdown',
				        'heading'     => __( 'On click action', 'saturnthemes-financebank' ),
				        'param_name'  => 'onclick',
				        'value'       => array(
					        __( 'Open prettyPhoto', 'saturnthemes-financebank' )  => 'link_image',
					        __( 'None', 'saturnthemes-financebank' )              => 'link_no',
					        __( 'Open custom links', 'saturnthemes-financebank' ) => 'custom_link',
				        ),
				        'std'         => 'link_no',
				        'description' => __( 'Select action for click event.', 'saturnthemes-financebank' ),
			        ),
			        array(
				        'type'        => 'exploded_textarea',
				        'heading'     => __( 'Custom links', 'saturnthemes-financebank' ),
				        'param_name'  => 'custom_links',
				        'description' => __( 'Enter links for each slide (Note: divide links with linebreaks (Enter)).', 'saturnthemes-financebank' ),
				        'dependency'  => array(
					        'element' => 'onclick',
					        'value'   => array( 'custom_link' ),
				        ),
			        ),
			        array(
				        'type'        => 'dropdown',
				        'heading'     => __( 'Custom link target', 'saturnthemes-financebank' ),
				        'param_name'  => 'custom_links_target',
				        'description' => __( 'Select how to open custom links.', 'saturnthemes-financebank' ),
				        'dependency'  => array(
					        'element' => 'onclick',
					        'value'   => array( 'custom_link' ),
				        ),
				        'value'       => array(
					        __( 'Same window', 'saturnthemes-financebank' ) => '_self',
					        __( 'New window', 'saturnthemes-financebank' )  => '_blank',
				        ),
			        ),
			        array(
				        'type'       => 'textfield',
				        'heading'    => __( 'Items to show on desktop', 'saturnthemes-financebank' ),
				        'param_name' => 'items_on_desktop',
				        'value'      => '5',
			        ),
			        array(
				        'type'       => 'textfield',
				        'heading'    => __( 'Items to show on tabs', 'saturnthemes-financebank' ),
				        'param_name' => 'items_on_tabs',
				        'value'      => '3',
			        ),
			        array(
				        'type'       => 'textfield',
				        'heading'    => __( 'Items to show on mobile', 'saturnthemes-financebank' ),
				        'param_name' => 'items_on_mobile',
				        'value'      => '2',
			        ),
			        array(
				        'type'        => 'checkbox',
				        'heading'     => __( 'Slider autoplay', 'saturnthemes-financebank' ),
				        'param_name'  => 'autoplay',
				        'description' => __( 'Enable autoplay mode.', 'saturnthemes-financebank' ),
				        'value'       => array( __( 'Yes', 'saturnthemes-financebank' ) => 'yes' ),
				        'std'         => 'no',
			        ),
			        array(
				        'type'        => 'textfield',
				        'heading'     => __( 'Slider speed', 'saturnthemes-financebank' ),
				        'param_name'  => 'speed',
				        'value'       => '5000',
				        'description' => __( 'Duration of animation between slides (in ms).', 'saturnthemes-financebank' ),
				        'dependency'  => array(
					        'element' => 'autoplay',
					        'value'   => array( 'yes' ),
				        ),
			        ),
			        array(
				        'type'        => 'checkbox',
				        'heading'     => __( 'Hide prev/next buttons', 'saturnthemes-financebank' ),
				        'param_name'  => 'hide_prev_next_buttons',
				        'description' => __( 'If checked, prev/next buttons will be hidden.', 'saturnthemes-financebank' ),
				        'value'       => array( __( 'Yes', 'saturnthemes-financebank' ) => 'yes' ),
				        'std'         => 'no',
			        ),
			        array(
				        'type'        => 'checkbox',
				        'heading'     => __( 'Hide dots navigation', 'saturnthemes-financebank' ),
				        'param_name'  => 'hide_dots_navigation',
				        'description' => __( 'If checked, dots navigation will be hidden.', 'saturnthemes-financebank' ),
				        'value'       => array( __( 'Yes', 'saturnthemes-financebank' ) => 'yes' ),
				        'std'         => 'yes',
			        ),
			        array(
				        'type'       => 'textfield',
				        'heading'    => __( 'Space between two items in px', 'saturnthemes-financebank' ),
				        'param_name' => 'item_space',
				        'value'      => '50',
				        'suffix'     => 'px',
			        ),
			        array(
				        'type'        => 'textfield',
				        'heading'     => __( 'Extra class name', 'saturnthemes-financebank' ),
				        'param_name'  => 'el_class',
				        'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'saturnthemes-financebank' ),
			        ),
			        array(
				        'type'       => 'css_editor',
				        'heading'    => __( 'CSS box', 'saturnthemes-financebank' ),
				        'param_name' => 'css',
				        'group'      => __( 'Design Options', 'saturnthemes-financebank' ),
			        ),
		        ),
	        ) );

    // Shortcode Button
    class WPBakeryShortCode_SaturnThemes_Button extends WPBakeryShortCode {
    }

    vc_map( array(
        'name'     => __( 'Button', 'saturnthemes-financebank' ),
        'base'     => 'saturnthemes_button',
        'category'    => 'Financebank',
        'params'   => array(
            array(
                'type'        => 'dropdown',
                'heading'     => esc_html__( 'Button Type', 'saturnthemes-financebank' ),
                'param_name'  => 'button_type',
                'value'       => array(
                    esc_html__( 'Primary', 'saturnthemes-financebank' )           => 'primary',
                    esc_html__( 'Primary Outline', 'saturnthemes-financebank' )   => 'primary-outline',
                    esc_html__( 'Secondary', 'saturnthemes-financebank' )         => 'secondary',
                    esc_html__( 'Secondary Outline', 'saturnthemes-financebank' ) => 'secondary-outline',
                    esc_html__( 'Style 1', 'saturnthemes-financebank' )           => 'style1',
                    esc_html__( 'Style 1 Outline', 'saturnthemes-financebank' )   => 'style1-outline',
                    esc_html__( 'Style 2', 'saturnthemes-financebank' )           => 'style2',
                    esc_html__( 'Style 2 Outline', 'saturnthemes-financebank' )   => 'style2-outline',
                ),
                'admin_label' => true,
                'std' => 'primary',
            ),
            array(
                'type'        => 'textfield',
                'heading'     => __( 'Text', 'saturnthemes-financebank' ),
                'param_name'  => 'text',
                'default'     => esc_html__( 'Button', 'saturnthemes-financebank' ),
                'admin_label' => true,
            ),
            array(
                'type'        => 'vc_link',
                'heading'     => esc_html__( 'URL (Link)', 'saturnthemes-financebank' ),
                'param_name'  => 'link',
                'description' => esc_html__( 'Add link to button.', 'saturnthemes-financebank' ),
            ),
            array(
                'type'        => 'checkbox',
                'heading'     => __( 'Has Arrow', 'saturnthemes-financebank' ),
                'param_name'  => 'has_arrow',
                'description' => __( 'Show Arrow in this button', 'saturnthemes-financebank' ),
                'value'       => array( __( 'Yes', 'saturnthemes-financebank' ) => 'yes' ),
                'std'         => 'no',
            ),
            array(
                'type'          => 'textfield',
                'heading'       => esc_html__( 'Class', 'saturnthemes-financebank' ),
                'admin_label'   => false,
                'param_name'    => 'el_class',
            ),
            array(
                'type'          => 'css_editor',
                'heading'       => __( 'CSS', 'saturnthemes-financebank' ),
                'param_name'    => 'css',
                'group'         => __( 'Design Options', 'saturnthemes-financebank' ),
            ),
        )
    ) );

	// Shortcode Counter
	class WPBakeryShortCode_SaturnThemes_Financebank_Counter extends WPBakeryShortCode {

		protected static $index = 1;

		public static function getIndex() {
			return self::$index ++ . '-' . time();
		}
	}

	vc_map( array(
		        "name"        => __( "Financebank Counter", 'saturnthemes-financebank' ),
		        "base"        => "saturnthemes_financebank_counter",
		        'category'    => __( 'Financebank', 'saturnthemes-financebank' ),
		        "description" => __( "Your milestones, achievements, etc.", 'saturnthemes-financebank' ),
		        "params"      => array(
			        array(
				        "type"        => "textfield",
				        "class"       => "",
				        "heading"     => __( "Counter Title ", 'saturnthemes-financebank' ),
				        "param_name"  => "counter_title",
				        "admin_label" => true,
				        "value"       => "",
				        "description" => __( "Enter title for counter block", 'saturnthemes-financebank' ),
			        ),
			        array(
				        'type'        => 'dropdown',
				        'heading'     => esc_html__( 'Icon library', 'saturnthemes-financebank' ),
				        'value'       => array(
					        esc_html__( 'Font Awesome', 'saturnthemes-financebank' )      => 'fontawesome',
					        esc_html__( 'Custom Image Icon', 'saturnthemes-financebank' ) => 'custom',
				        ),
				        'admin_label' => true,
				        'param_name'  => 'icon_type',
				        'description' => esc_html__( 'Select icon library.', 'saturnthemes-financebank' ),
			        ),
			        array(
				        'type'        => 'iconpicker',
				        'heading'     => esc_html__( 'Icon', 'saturnthemes-financebank' ),
				        'param_name'  => 'icon_fontawesome',
				        'value'       => 'fa fa-adjust', // default value to backend editor admin_label
				        'settings'    => array(
					        'emptyIcon'    => false,
					        // default true, display an "EMPTY" icon?
					        'iconsPerPage' => 4000,
					        // default 100, how many icons per/page to display, we use (big number) to display all icons in single page
				        ),
				        'dependency'  => array(
					        'element' => 'icon_type',
					        'value'   => 'fontawesome',
				        ),
				        'description' => esc_html__( 'Select icon from library.', 'saturnthemes-financebank' ),
			        ),
			        array(
				        'type'        => 'attach_image',
				        'heading'     => __( 'Image Icon', 'js_composer' ),
				        'param_name'  => 'icon_image',
				        'value'       => '',
				        'description' => __( 'Select image from media library.', 'js_composer' ),
				        'dependency'  => array(
					        'element' => 'icon_type',
					        'value'   => 'custom',
				        ),
			        ),
			        array(
				        'type'       => 'textfield',
				        'heading'    => 'Size of Icon',
				        'param_name' => 'icon_size',
				        'value'      => '80px',
				        'dependency' => array(
					        'element' => 'icon_type',
					        'value'   => array( 'fontawesome' ),
				        ),
			        ),
			        array(
				        'type'        => 'colorpicker',
				        'heading'     => esc_html__( 'Color', 'saturnthemes-financebank' ),
				        'param_name'  => 'custom_color',
				        'description' => esc_html__( 'Select icon color.', 'saturnthemes-financebank' ),
				        'value'       => '#DDD',
				        'dependency'  => array(
					        'element' => 'icon_type',
					        'value'   => array( 'fontawesome'),
				        ),
			        ),
			        array(
				        "type"        => "textfield",
				        "class"       => "",
				        "heading"     => __( "Counter Value", 'saturnthemes-financebank' ),
				        "param_name"  => "counter_value",
				        "value"       => "142",
				        "description" => __( "Enter number for counter without any special character. You may enter a decimal number. Eg 23.8", 'saturnthemes-financebank' ),
			        ),
			        array(
				        "type"        => "textfield",
				        "class"       => "",
				        "heading"     => __( "Counter Value Prefix", 'saturnthemes-financebank' ),
				        "param_name"  => "counter_prefix",
				        "value"       => "",
				        "description" => __( "Enter prefix for counter value", 'saturnthemes-financebank' )
			        ),
			        array(
				        "type"        => "textfield",
				        "class"       => "",
				        "heading"     => __( "Counter Value Suffix", 'saturnthemes-financebank' ),
				        "param_name"  => "counter_suffix",
				        "value"       => "",
				        "description" => __( "Enter suffix for counter value", 'saturnthemes-financebank' )
			        ),
			        array(
				        "type"        => "textfield",
				        "class"       => "",
				        "heading"     => __( "Thousands Separator", 'saturnthemes-financebank' ),
				        "param_name"  => "counter_sep",
				        "value"       => ",",
				        "description" => __( "Enter character for thousanda separator. e.g. ',' will separate 142000 into 142,000", 'saturnthemes-financebank' ),
			        ),
			        array(
				        "type"        => "textfield",
				        "class"       => "",
				        "heading"     => __( "Replace Decimal Point With", 'saturnthemes-financebank' ),
				        "param_name"  => "counter_decimal",
				        "value"       => ".",
				        "description" => __( "Did you enter a decimal number (Eg - 14.2) The decimal point '.' will be replaced with value that you will enter above.", 'saturnthemes-financebank' ),
			        ),
			        array(
				        "type"        => "textfield",
				        "class"       => "",
				        "heading"     => __( "Counter rolling time", 'saturnthemes-financebank' ),
				        "param_name"  => "speed",
				        "value"       => 2,
				        "min"         => 1,
				        "max"         => 10,
				        "suffix"      => "seconds",
				        "description" => __( "How many seconds the counter should roll?", 'saturnthemes-financebank' ),
			        ),
			        array(
				        "type"        => "textfield",
				        "class"       => "",
				        "heading"     => __( "Extra Class", 'saturnthemes-financebank' ),
				        "param_name"  => "el_class",
				        "value"       => "",
				        "description" => __( "Add extra class name that will be applied to the icon process, and you can use this class for your customizations.", 'saturnthemes-financebank' ),
			        ),
			        array(
				        'type'       => 'css_editor',
				        'heading'    => __( 'CSS box', 'saturnthemes-financebank' ),
				        'param_name' => 'css',
				        'group'      => __( 'Design Options', 'saturnthemes-financebank' ),
			        ),
		        ),
	        ) );


	// Shortcode Staff Grid
	class WPBakeryShortCode_SaturnThemes_Financebank_Staff_Grid extends WPBakeryShortCode {

		protected static $index = 1;

		public static function getIndex() {
			return self::$index ++ . '-' . time();
		}
	}

	vc_map( array(
        'name'        => __( 'Financebank Staff Grid', 'saturnthemes-financebank' ),
        'base'        => 'saturnthemes_financebank_staff_grid',
        'category'    => __( 'Financebank', 'saturnthemes-financebank' ),
        'params'      => array(
            array(
                'type'       => 'textfield',
                'heading'    => esc_html__( 'Staff per row', 'saturnthemes-financebank' ),
                'param_name' => 'per_page',
                'default'	 => '4',
            ),
            array(
                'type' => 'textfield',
                'heading' => __( 'Extra class name', 'saturnthemes-financebank' ),
                'param_name' => 'el_class',
                'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'saturnthemes-financebank' ),
            ),
            array(
                'type' => 'css_editor',
                'heading' => __( 'CSS box', 'saturnthemes-financebank' ),
                'param_name' => 'css',
                'group' => __( 'Design Options', 'saturnthemes-financebank' ),
            ),
        )
    ) );

	// Shortcode Testimonial
	class WPBakeryShortCode_SaturnThemes_Financebank_Testimonial extends WPBakeryShortCode {

		protected static $index = 1;

		public static function getIndex() {
			return self::$index ++ . '-' . time();
		}
	}

	vc_map( array(
		        'name'        => __( 'Financebank Testimonial', 'saturnthemes-financebank' ),
		        'base'        => 'saturnthemes_financebank_testimonial',
		        'category'    => __( 'Financebank', 'saturnthemes-financebank' ),
		        'description' => __( 'Customer\'s Testimonial', 'saturnthemes-financebank' ),
		        'params'      => array(
			        array(
				        'type'        => 'dropdown',
				        'heading'     => esc_html__( 'Style', 'saturnthemes-financebank' ),
				        'param_name'  => 'style',
				        'value'       => array(
					        __( 'Style 1', 'saturnthemes-financebank' ) => 'style1',
					        __( 'Style 2', 'saturnthemes-financebank' ) => 'style2',
					        __( 'Style 3', 'saturnthemes-financebank' ) => 'style3',
				        ),
				        'description' => esc_html__( 'Style of testimonial', 'saturnthemes-financebank' ),
			        ),
			        array(
				        'type'        => 'dropdown',
				        'heading'     => esc_html__( 'Order by', 'saturnthemes-financebank' ),
				        'param_name'  => 'orderby',
				        'value'       => array(
					        __( 'Title', 'saturnthemes-financebank' )      => 'title',
					        __( 'Date', 'saturnthemes-financebank' )       => 'date',
					        __( 'Menu Order', 'saturnthemes-financebank' ) => 'menu_order',
				        ),
				        'description' => esc_html__( 'How to order the items - accepts all default WordPress ordering options', 'saturnthemes-financebank' ),
				        'std'         => 'date',
			        ),
			        array(
				        'type'        => 'dropdown',
				        'heading'     => esc_html__( 'Order', 'saturnthemes-financebank' ),
				        'param_name'  => 'order',
				        'value'       => array(
					        __( 'DESC', 'saturnthemes-financebank' ) => 'DESC',
					        __( 'ASC', 'saturnthemes-financebank' )  => 'ASC',
				        ),
				        'description' => esc_html__( 'the order direction', 'saturnthemes-financebank' ),
			        ),
			        array(
				        'type'       => 'colorpicker',
				        'heading'    => esc_html__( 'Content Color', 'saturnthemes-financebank' ),
				        'param_name' => 'text_color',
				        'value'      => '#FFF',
			        ),
			        array(
				        'type'       => 'colorpicker',
				        'heading'    => esc_html__( 'Title Color', 'saturnthemes-financebank' ),
				        'param_name' => 'title_color',
			        ),
			        array(
				        'type'        => 'checkbox',
				        'heading'     => __( 'Carousel autoplay', 'saturnthemes-financebank' ),
				        'param_name'  => 'autoplay',
				        'description' => __( 'Enable carousel autoplay.', 'saturnthemes-financebank' ),
				        'value'       => array( __( 'Yes', 'saturnthemes-financebank' ) => 'yes' ),
				        'std'         => 'no',
			        ),
			        array(
				        'type'       => 'checkbox',
				        'heading'    => __( 'Display arrow navigation', 'saturnthemes-financebank' ),
				        'param_name' => 'display_nav',
				        'value'      => array( __( 'Yes', 'saturnthemes-financebank' ) => 'yes' ),
				        'std'        => 'yes',
			        ),
			        array(
				        'type'       => 'checkbox',
				        'heading'    => __( 'Display dots navigation', 'saturnthemes-financebank' ),
				        'param_name' => 'display_dots',
				        'value'      => array( __( 'Yes', 'saturnthemes-financebank' ) => 'yes' ),
				        'std'        => 'no',
			        ),
			        array(
				        'type'        => 'textfield',
				        'heading'     => esc_html__( 'Items to show', 'saturnthemes-financebank' ),
				        'param_name'  => 'items_per_slide',
				        'value'       => '2',
				        'description' => esc_html__( 'Number of shown items on each slide', 'saturnthemes-financebank' ),
			        ),
			        array(
				        'type'       => 'textfield',
				        'heading'    => esc_html__( 'Extra class name', 'saturnthemes-financebank' ),
				        'param_name' => 'el_class',
			        ),
			        array(
				        'type'       => 'css_editor',
				        'heading'    => __( 'CSS', 'saturnthemes-financebank' ),
				        'param_name' => 'css',
				        'group'      => __( 'Design Options', 'saturnthemes-financebank' ),
			        ),
		        ),
	        ) );

	class WPBakeryShortCode_SaturnThemes_Financebank_Google_Map extends WPBakeryShortCode {

		protected static $index = 1;

		public static function getIndex() {
			return self::$index ++ . '-' . time();
		}
	}

	vc_map( array(
		        'name'        => esc_html__( 'Financebank Google Map', 'saturnthemes-financebank' ),
		        'base'        => 'saturnthemes_financebank_google_map',
		        'category'    => 'Financebank',
		        'description' => esc_html__( 'Display Google Maps to indicate your location.', 'saturnthemes-financebank' ),
		        'params'      => array(
			        array(
				        'type'        => 'textfield',
				        'heading'     => __( 'Latitude', 'saturnthemes-financebank' ),
				        'param_name'  => 'latitude',
				        'value'       => '',
				        'description' => '<a href="http'.'://mondeca.com/index.php/en/?option=com_content&view=article&id=206&Itemid=752" target="_blank">' . __( 'Here is a tool', 'saturnthemes-financebank' ) . '</a> ' . __( 'where you can find Latitude & Longitude of your location', 'saturnthemes-financebank' ),
			        ),
			        array(
				        'type'        => 'textfield',
				        'heading'     => __( 'Longitude', 'saturnthemes-financebank' ),
				        'param_name'  => 'longitude',
				        'value'       => '',
				        'description' => '<a href="http'.'://mondeca.com/index.php/en/?option=com_content&view=article&id=206&Itemid=752" target=\"_blank\">' . __( 'Here is a tool', 'saturnthemes-financebank' ) . '</a> ' . __( 'where you can find Latitude & Longitude of your location', 'saturnthemes-financebank' ),
			        ),
			        array(
				        'type'       => 'textfield',
				        'heading'    => __( 'Width (in %)', 'saturnthemes-financebank' ),
				        'param_name' => 'width',
				        'value'      => '100%',
			        ),
			        array(
				        'type'       => 'textfield',
				        'heading'    => __( 'Height (in px)', 'saturnthemes-financebank' ),
				        'param_name' => 'height',
				        'value'      => '400px',
			        ),
			        array(
				        'type'        => 'dropdown',
				        'heading'     => esc_html__( 'Map type', 'saturnthemes-financebank' ),
				        'admin_label' => true,
				        'param_name'  => 'map_type',
				        'value'       => array(
					        __( 'Roadmap', 'saturnthemes-financebank' )   => 'roadmap',
					        __( 'Satellite', 'saturnthemes-financebank' ) => 'satellite',
					        __( 'Hybrid', 'saturnthemes-financebank' )    => 'hybrid',
					        __( 'Terrain', 'saturnthemes-financebank' )   => 'terrain',
				        ),
			        ),
			        array(
				        'type'        => 'dropdown',
				        'heading'     => esc_html__( 'Map style', 'saturnthemes-financebank' ),
				        'admin_label' => true,
				        'param_name'  => 'map_style',
				        'description' => esc_html__( 'Choose a map style. This approach changes the style of the Roadmap types (base imagery in terrain and satellite views is not affected, but roads, labels, etc. respect styling rules', 'saturnthemes-financebank' ),
				        'value'       => array(
					        __( 'Default', 'saturnthemes-financebank' )                 => 'default',
					        __( 'Shades of Grey', 'saturnthemes-financebank' )          => 'shades_of_grey',
					        __( 'Ultra Light with Labels', 'saturnthemes-financebank' ) => 'ultra_light',
					        __( 'Apple Maps-esque', 'saturnthemes-financebank' )        => 'apple_map',
					        __( 'Subtle Grayscale', 'saturnthemes-financebank' )        => 'subtle_grayscale',
					        __( 'Custom', 'saturnthemes-financebank' )                  => 'custom',
				        ),
				        'std' => 'shades_of_grey',
			        ),
			        array(
				        'type'        => 'textarea_raw_html',
				        'heading'     => esc_html__( 'Map style custom', 'saturnthemes-financebank' ),
				        'param_name'  => 'map_style_custom',
				        'description' => '<a href="http'.'://www.mapstylr.com/map-style-editor/" target="_blank">' . __( 'Here is a tool', 'saturnthemes-financebank' ) . '</a> ' . __( 'where you can customize style of Google Map.', 'saturnthemes-financebank' ),
				        'dependency'  => array(
					        'element' => 'map_style',
					        'value'   => 'custom',
				        ),
			        ),
			        array(
				        'type'       => 'dropdown',
				        'heading'    => __( 'Map Zoom', 'saturnthemes-financebank' ),
				        'param_name' => 'zoom',
				        'value'      => array(
					        1,
					        2,
					        3,
					        4,
					        5,
					        6,
					        7,
					        8,
					        9,
					        10,
					        11,
					        12,
					        13,
					        14,
					        15,
					        16,
					        17,
					        18,
					        19,
					        20,
				        ),
				        'std'        => 16,
			        ),
			        array(
				        'type'       => 'checkbox',
				        'heading'    => '',
				        'param_name' => 'scrollwheel',
				        'value'      => array(
					        __( 'Disable map zoom on mouse wheel scroll', 'saturnthemes-financebank' ) => 'disable',
				        ),
			        ),
			        array(
				        'type'        => 'textfield',
				        'heading'     => esc_html__( 'Extra class name', 'saturnthemes-financebank' ),
				        'param_name'  => 'el_class',
				        'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'saturnthemes-financebank' ),
			        ),
			        array(
				        'type'       => 'attach_image',
				        'heading'    => esc_html__( 'Custom marker icon', 'saturnthemes-financebank' ),
				        'param_name' => 'custom_marker_icon',
				        'description' => esc_html__( 'If you don\'t choose custom marker, this shortcode will get the default marker icon from theme.', 'saturnthemes-financebank' ),
				        'group'       => __( 'Marker', 'saturnthemes-financebank' ),
			        ),
			        array(
				        'type'        => 'textarea_html',
				        'heading'     => esc_html__( 'Marker Info Window', 'saturnthemes-financebank' ),
				        'param_name'  => 'info',
				        'value'       => '',
				        'description' => esc_html__( 'Content for info window', 'saturnthemes-financebank' ),
				        'group'       => __( 'Marker', 'saturnthemes-financoebank' ),
			        ),
			        array(
				        'type'        => 'textarea_html',
				        'heading'     => esc_html__( 'Info Window', 'saturnthemes-financebank' ),
				        'param_name'  => 'info',
				        'value'       => '',
				        'description' => esc_html__( 'Content for info window', 'saturnthemes-financebank' ),
				        'group'       => __( 'Marker', 'saturnthemes-financebank' ),
			        ),
			        array(
				        'type'       => 'dropdown',
				        'heading'    => esc_html__( 'Street view control', 'saturnthemes-financebank' ),
				        'param_name' => 'street_view_control',
				        'value'      => array(
					        __( 'Enable', 'saturnthemes-financebank' )  => 'enable',
					        __( 'Disable', 'saturnthemes-financebank' ) => 'disable',
				        ),
				        'std'        => 'disable',
				        'group'      => __( 'Advanced', 'saturnthemes-financebank' ),
			        ),
			        array(
				        'type'       => 'dropdown',
				        'heading'    => esc_html__( 'Map type control', 'saturnthemes-financebank' ),
				        'param_name' => 'map_type_control',
				        'value'      => array(
					        __( 'Enable', 'saturnthemes-financebank' )  => 'enable',
					        __( 'Disable', 'saturnthemes-financebank' ) => 'disable',
				        ),
				        'std'        => 'disable',
				        'group'      => __( 'Advanced', 'saturnthemes-financebank' ),
			        ),
			        array(
				        'type'       => 'dropdown',
				        'heading'    => esc_html__( 'Map pan control', 'saturnthemes-financebank' ),
				        'param_name' => 'map_pan_control',
				        'value'      => array(
					        __( 'Enable', 'saturnthemes-financebank' )  => 'enable',
					        __( 'Disable', 'saturnthemes-financebank' ) => 'disable',
				        ),
				        'std'        => 'disable',
				        'group'      => __( 'Advanced', 'saturnthemes-financebank' ),
			        ),
			        array(
				        'type'       => 'dropdown',
				        'heading'    => esc_html__( 'Zoom control', 'saturnthemes-financebank' ),
				        'param_name' => 'zoom_control',
				        'value'      => array(
					        __( 'Enable', 'saturnthemes-financebank' )  => 'enable',
					        __( 'Disable', 'saturnthemes-financebank' ) => 'disable',
				        ),
				        'std'        => 'disable',
				        'group'      => __( 'Advanced', 'saturnthemes-financebank' ),
			        ),
			        array(
				        'type'       => 'css_editor',
				        'heading'    => __( 'CSS', 'saturnthemes-financebank' ),
				        'param_name' => 'css',
				        'group'      => __( 'Design Options', 'saturnthemes-financebank' ),
			        ),
		        ),
	        ) );

	class WPBakeryShortCode_SaturnThemes_Financebank_Icon_Box extends WPBakeryShortCode {

	}

	vc_map( array(
		        'name'     => esc_html__( 'Financebank Icon Box', 'saturnthemes-financebank' ),
		        'base'     => 'saturnthemes_financebank_icon_box',
		        'category' => 'Financebank',
		        'params'   => array(
			        array(
				        'type'       => 'dropdown',
				        'heading'    => __( 'Box Style', 'saturnthemes-financebank' ),
				        'param_name' => 'box_style',
				        'value'      => array(
					        __( 'Style 1', 'saturnthemes-financebank' ) => 'style1',
					        __( 'Style 2', 'saturnthemes-financebank' ) => 'style2',
					        __( 'Style 3', 'saturnthemes-financebank' ) => 'style3',
					        __( 'Style 4', 'saturnthemes-financebank' ) => 'style4',
				        ),
				        'std'        => 'style1',
			        ),
			        array(
				        'type'        => 'dropdown',
				        'heading'     => esc_html__( 'Icon library', 'saturnthemes-financebank' ),
				        'value'       => array(
					        esc_html__( 'Font Awesome', 'saturnthemes-financebank' )      => 'fontawesome',
					        esc_html__( 'Custom Image Icon', 'saturnthemes-financebank' ) => 'custom',
				        ),
				        'admin_label' => true,
				        'param_name'  => 'icon_type',
				        'description' => esc_html__( 'Select icon library.', 'saturnthemes-financebank' ),
			        ),
			        array(
				        'type'        => 'iconpicker',
				        'heading'     => esc_html__( 'Icon', 'saturnthemes-financebank' ),
				        'param_name'  => 'icon_fontawesome',
				        'value'       => 'fa fa-adjust', // default value to backend editor admin_label
				        'settings'    => array(
					        'emptyIcon'    => false,
					        // default true, display an "EMPTY" icon?
					        'iconsPerPage' => 4000,
					        // default 100, how many icons per/page to display, we use (big number) to display all icons in single page
				        ),
				        'dependency'  => array(
					        'element' => 'icon_type',
					        'value'   => 'fontawesome',
				        ),
				        'description' => esc_html__( 'Select icon from library.', 'saturnthemes-financebank' ),
			        ),
			        array(
				        'type'        => 'attach_image',
				        'heading'     => __( 'Image Icon', 'js_composer' ),
				        'param_name'  => 'icon_image',
				        'value'       => '',
				        'description' => __( 'Select image from media library.', 'js_composer' ),
				        'dependency'  => array(
					        'element' => 'icon_type',
					        'value'   => 'custom',
				        ),
			        ),
			        array(
				        'type'       => 'textfield',
				        'heading'    => 'Image Width',
				        'param_name' => 'icon_image_width',
				        'value'      => '48px',
				        'dependency' => array(
					        'element' => 'icon_type',
					        'value'   => 'custom',
				        ),
			        ),
			        array(
				        'type'       => 'textfield',
				        'heading'    => 'Size of Icon',
				        'param_name' => 'icon_size',
				        'value'      => '32px',
				        'dependency' => array(
					        'element' => 'icon_type',
					        'value'   => array(
						        'fontawesome',
					        ),
				        ),
			        ),
			        array(
				        'type'        => 'colorpicker',
				        'heading'     => esc_html__( 'Color', 'saturnthemes-financebank' ),
				        'param_name'  => 'custom_color',
				        'description' => esc_html__( 'Select icon color.', 'saturnthemes-financebank' ),
				        'dependency'  => array(
					        'element' => 'icon_type',
					        'value'   => array(
						        'fontawesome',
						        'pe7stroke',
					        ),
				        ),
			        ),
			        array(
				        'type'        => 'colorpicker',
				        'heading'     => esc_html__( 'Background color', 'saturnthemes-financebank' ),
				        'param_name'  => 'icon_background_color',
				        'description' => esc_html__( 'Select custom icon background color.', 'saturnthemes-financebank' ),
				        'dependency'  => array(
					        'element' => 'box_style',
					        'value'   => array( 'style3' ),
				        ),
			        ),
			        array(
				        'type'        => 'colorpicker',
				        'heading'     => __( 'Border Color', 'saturnthemes-financebank' ),
				        'param_name'  => 'icon_color_border',
				        'value'       => '#333333',
				        'description' => __( 'Select border color for icon.', 'saturnthemes-financebank' ),
				        'dependency'  => array(
					        'element' => 'box_style',
					        'value'   => array( 'style3' ),
				        ),
			        ),
			        array(
				        'type'        => 'textfield',
				        'heading'     => esc_html__( 'Title', 'saturnthemes-financebank' ),
				        'param_name'  => 'title',
				        'description' => esc_html__( 'Enter the title of this icon box.', 'saturnthemes-financebank' ),
                        'admin_label' => true,
			        ),
			        array(
				        'type'        => 'colorpicker',
				        'heading'     => esc_html__( 'Title Color', 'saturnthemes-financebank' ),
				        'param_name'  => 'title_color',
				        'description' => esc_html__( 'Select title color.', 'saturnthemes-financebank' ),
			        ),
			        array(
				        'type'        => 'textarea_html',
				        'heading'     => __( 'Description', 'saturnthemes-financebank' ),
				        'param_name'  => 'content',
				        'value'       => '',
				        'description' => __( 'Enter the description for this icon box.', 'saturnthemes-financebank' ),
			        ),
			        array(
				        'type'        => 'colorpicker',
				        'heading'     => esc_html__( 'Content Color', 'saturnthemes-financebank' ),
				        'param_name'  => 'content_color',
				        'description' => esc_html__( 'Select content color.', 'saturnthemes-financebank' ),
			        ),
			        array(
				        'type'        => 'dropdown',
				        'heading'     => __( 'Apply link to:', 'saturnthemes-financebank' ),
				        'param_name'  => 'read_more',
				        'value'       => array(
					        __( 'No Link', 'saturnthemes-financebank' )           => 'none',
					        __( 'Complete Box', 'saturnthemes-financebank' )      => 'box',
					        __( 'Box Title', 'saturnthemes-financebank' )         => 'title',
					        __( 'Display Read More', 'saturnthemes-financebank' ) => 'more',
				        ),
				        'description' => __( 'Select whether to use color for icon or not.', 'saturnthemes-financebank' ),
			        ),
			        array(
				        'type'        => 'vc_link',
				        'heading'     => __( 'Add Link', 'saturnthemes-financebank' ),
				        'param_name'  => 'link',
				        'value'       => '',
				        'description' => __( 'Add a custom link or select existing page. You can remove existing link as well.', 'saturnthemes-financebank' ),
				        'dependency'  => array( 'element' => 'read_more', 'value' => array( 'box', 'title', 'more' ) ),
			        ),
			        array(
				        'type'        => 'textfield',
				        'heading'     => __( 'Read More Text', 'saturnthemes-financebank' ),
				        'param_name'  => 'read_text',
				        'value'       => 'Read More',
				        'description' => __( 'Customize the read more text.', 'saturnthemes-financebank' ),
				        'dependency'  => Array( 'element' => 'read_more', 'value' => array( 'more' ) ),
			        ),
			        array(
				        'type'        => 'colorpicker',
				        'heading'     => __( 'Box Background Color', 'saturnthemes-financebank' ),
				        'param_name'  => 'box_bg_color',
				        'value'       => '',
				        'description' => __( 'Select Box background color.', 'saturnthemes-financebank' ),
			        ),
			        array(
				        'type'        => 'attach_image',
				        'heading'     => __( 'Background Image on hover', 'saturnthemes-financebank' ),
				        'param_name'  => 'bg_img_hover',
				        'value'       => '',
				        'description' => __( 'Select image from media library.', 'saturnthemes-financebank' ),
			        ),
			        array(
				        'type'        => 'textfield',
				        'heading'     => esc_html__( 'Extra class name', 'saturnthemes-financebank' ),
				        'param_name'  => 'el_class',
				        'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'saturnthemes-financebank' ),
			        ),
			        array(
				        'type'       => 'css_editor',
				        'heading'    => __( 'CSS', 'saturnthemes-financebank' ),
				        'param_name' => 'css',
				        'group'      => __( 'Design Options', 'saturnthemes-financebank' ),
			        ),
		        ),
	        ) );


	class WPBakeryShortCode_SaturnThemes_Financebank_Post_Grid extends WPBakeryShortCode {

		protected function build_loop_query( array $atts ) {
			$args = array(
				'post_type'      => 'post',
				'posts_per_page' => $atts['max_items'],
				'orderby'        => $atts['orderby'],
				'order'          => $atts['order'],
			);

			if ( ! empty( $atts['taxonomies'] ) ) {
				$terms = get_terms( array(
					                    'post_tag',
					                    'category',
				                    ), array( 'slug' => explode( ',', $atts['taxonomies'] ) ) );

				foreach ( $terms as $t ) {

					$args['tax_query'][] = array(
						'field'    => 'slug',
						'taxonomy' => $t->taxonomy,
						'terms'    => $t->slug,
					);

				}

			}

			return new WP_Query( $args );
		}
	}

	add_filter( 'vc_autocomplete_saturnthemes_financebank_post_grid_taxonomies_callback', 'saturnthemes_financebank_vc_autocomplete_taxonomies_field_search', 10, 1 );
	add_filter( 'vc_autocomplete_saturnthemes_financebank_post_grid_taxonomies_render', 'saturnthemes_financebank_vc_autocomplete_taxonomies_field_render', 10, 1 );

	vc_map( array(
		        'name'        => esc_html__( 'Financebank Post Grid', 'saturnthemes-financebank' ),
		        'base'        => 'saturnthemes_financebank_post_grid',
		        'category'    => 'Financebank',
		        'params'      => array(
			        array(
				        'type'        => 'textfield',
				        'heading'     => __( 'Title', 'saturnthemes-financebank' ),
				        'param_name'  => 'title',
				        'value'       => __( 'News Update', 'saturnthemes-financebank' ),
				        'description' => __('Only display with style 3', 'saturnthemes-financebank' ),
				        'admin_label' => true,
			        ),
			        array(
				        'type'        => 'dropdown',
				        'heading'     => esc_html__( 'Style', 'saturnthemes-financebank' ),
				        'admin_label' => true,
				        'param_name'  => 'style',
				        'value'       => array(
					        __( 'Style 1', 'saturnthemes-financebank' ) => 'style1',
					        __( 'Style 2', 'saturnthemes-financebank' ) => 'style2',
					        __( 'Style 3', 'saturnthemes-financebank' ) => 'style3',
				        ),
			        ),
			        array(
				        'type'        => 'autocomplete',
				        'heading'     => __( 'Narrow data source', 'js_composer' ),
				        'param_name'  => 'taxonomies',
				        'settings'    => array(
					        'multiple'       => true,
					        'min_length'     => 1,
					        'groups'         => true,
					        // In UI show results grouped by groups, default false
					        'unique_values'  => true,
					        // In UI show results except selected. NB! You should manually check values in backend, default false
					        'display_inline' => true,
					        // In UI show results inline view, default false (each value in own line)
					        'delay'          => 500,
					        // delay for search. default 500
					        'auto_focus'     => true,
					        // auto focus input, default true
				        ),
				        'description' => __( 'Enter categories, tags or custom taxonomies.', 'saturnthemes-financebank' ),
			        ),
			        array(
				        'type'        => 'textfield',
				        'heading'     => __( 'Total items', 'js_composer' ),
				        'param_name'  => 'max_items',
				        'value'       => 10,
				        'description' => __( 'Set max limit for items in grid or enter -1 to display all (limited to 1000).', 'js_composer' ),
			        ),
			        array(
				        'type'        => 'dropdown',
				        'heading'     => __( 'Order by', 'js_composer' ),
				        'param_name'  => 'orderby',
				        'value'       => array(
					        __( 'Date', 'js_composer' )                  => 'date',
					        __( 'Order by post ID', 'js_composer' )      => 'ID',
					        __( 'Author', 'js_composer' )                => 'author',
					        __( 'Title', 'js_composer' )                 => 'title',
					        __( 'Last modified date', 'js_composer' )    => 'modified',
					        __( 'Post/page parent ID', 'js_composer' )   => 'parent',
					        __( 'Number of comments', 'js_composer' )    => 'comment_count',
					        __( 'Menu order/Page Order', 'js_composer' ) => 'menu_order',
					        __( 'Meta value', 'js_composer' )            => 'meta_value',
					        __( 'Meta value number', 'js_composer' )     => 'meta_value_num',
					        __( 'Random order', 'js_composer' )          => 'rand',
				        ),
				        'description' => __( 'Select order type. If "Meta value" or "Meta value Number" is chosen then meta key is required.', 'js_composer' ),
				        'group'       => __( 'Data Settings', 'js_composer' ),
			        ),
			        array(
				        'type'               => 'dropdown',
				        'heading'            => __( 'Sort order', 'js_composer' ),
				        'param_name'         => 'order',
				        'group'              => __( 'Data Settings', 'js_composer' ),
				        'value'              => array(
					        __( 'Descending', 'js_composer' ) => 'DESC',
					        __( 'Ascending', 'js_composer' )  => 'ASC',
				        ),
				        'param_holder_class' => 'vc_grid-data-type-not-ids',
				        'description'        => __( 'Select sorting order.', 'js_composer' ),
				        'dependency'         => array(
					        'element'            => 'post_type',
					        'value_not_equal_to' => array(
						        'ids',
						        'custom',
					        ),
				        ),
			        ),
			        array(
				        'type'       => 'dropdown',
				        'heading'    => esc_html__( 'Display Type', 'saturnthemes-financebank' ),
				        'param_name' => 'display_type',
				        'group'      => __( 'Display', 'saturnthemes-financebank' ),
				        'value'      => array(
					        __( 'Grid', 'saturnthemes-financebank' )     => 'grid',
					        __( 'Carousel', 'saturnthemes-financebank' ) => 'carousel',
				        ),
				        'std'        => 'carousel',
			        ),
			        array(
				        'type'       => 'dropdown',
				        'heading'    => __( 'Items per row', 'saturnthemes-financebank' ),
				        'param_name' => 'items_per_row',
				        'value'      => array(
					        1,
					        2,
					        3,
					        4,
				        ),
				        'std'        => 1,
				        'group'      => __( 'Display', 'saturnthemes-financebank' ),
			        ),
			        array(
				        'type'       => 'checkbox',
				        'heading'    => __( 'Show arrow navigation', 'saturnthemes-financebank' ),
				        'param_name' => 'show_arrow',
				        'group'      => __( 'Display', 'saturnthemes-financebank' ),
				        'value'      => array( __( 'Yes', 'js_composer' ) => 'yes' ),
				        'std'        => 'no',
				        'dependency' => array(
					        'element' => 'display_type',
					        'value'   => array( 'carousel' ),
				        ),
			        ),
			        array(
				        'type'       => 'checkbox',
				        'heading'    => __( 'Show dots pagination', 'saturnthemes-financebank' ),
				        'group'      => __( 'Display', 'saturnthemes-financebank' ),
				        'param_name' => 'show_dots',
				        'value'      => array( __( 'Yes', 'js_composer' ) => 'yes' ),
				        'std'        => 'yes',
				        'dependency' => array(
					        'element' => 'display_type',
					        'value'   => array( 'carousel' ),
				        ),
			        ),
			        array(
				        'type'       => 'dropdown',
				        'heading'    => esc_html__( 'Pagination Position', 'saturnthemes-financebank' ),
				        'group'      => __( 'Display', 'saturnthemes-financebank' ),
				        'param_name' => 'pagination_position',
				        'value'      => array(
					        __( 'Horizontal', 'saturnthemes-financebank' ) => 'horizontal',
					        __( 'Vertical', 'saturnthemes-financebank' )   => 'vertical',
				        ),
				        'std'        => 'carousel',
				        'dependency' => array(
					        'element' => 'show_dots',
					        'value'   => array( 'yes' ),
				        ),
			        ),
			        array(
				        'type'       => 'checkbox',
				        'heading'    => __( 'Show content', 'saturnthemes-financebank' ),
				        'param_name' => 'show_content',
				        'group'      => __( 'Display', 'saturnthemes-financebank' ),
				        'value'      => array( __( 'Yes', 'js_composer' ) => 'yes' ),
				        'std'        => 'no',
			        ),
			        array(
				        'type'       => 'checkbox',
				        'heading'    => __( 'Show read more', 'saturnthemes-financebank' ),
				        'group'      => __( 'Display', 'saturnthemes-financebank' ),
				        'param_name' => 'show_read_more',
				        'value'      => array( __( 'Yes', 'js_composer' ) => 'yes' ),
				        'std'        => 'yes',
			        ),
			        array(
				        'type'       => 'checkbox',
				        'heading'    => __( 'Show More Posts', 'saturnthemes-financebank' ),
				        'group'      => __( 'More Posts', 'saturnthemes-financebank' ),
				        'param_name' => 'show_more_posts',
				        'value'      => array( __( 'Yes', 'saturnthemes-financebank' ) => 'yes' ),
				        'std'        => 'yes',
			        ),
			        array(
				        'type'       => 'textfield',
				        'heading'    => __( 'More Posts URL', 'saturnthemes-financebank' ),
				        'group'      => __( 'More Posts', 'saturnthemes-financebank' ),
				        'param_name' => 'more_posts_url',
			        ),
			        array(
				        'type'       => 'css_editor',
				        'heading'    => __( 'CSS', 'saturnthemes-financebank' ),
				        'param_name' => 'css',
				        'group'      => __( 'Design Options', 'saturnthemes-financebank' ),
			        ),
		        ),
	        ) );

	class WPBakeryShortCode_SaturnThemes_Financebank_Video_Player extends WPBakeryShortCode {

	}

	vc_map( array(
		'name'     => __( 'Video Player', 'saturnthemes-financebank' ),
		'base'     => 'saturnthemes_financebank_video_player',
		'category'    => 'Financebank',
		'params'   => array(
			array(
				'type'          => 'textfield',
				'heading'       => 'Video URL',
				'admin_label'   => true,
				'param_name'    => 'url',
				'description'   => __( 'Enter your video url (Youtube/Vimeo) here', 'saturnthemes-financebank' ),
				'value'         => 'http://vimeo.com/92033601',
			),
			array(
				'type'          => 'textfield',
				'heading'       => 'Player Scale',
				'admin_label'   => false,
				'param_name'    => 'player_scale',
				'value'         => '1',
			),
			array(
				'type'          => 'colorpicker',
				'heading'       => 'Player Color',
				'admin_label'   => false,
				'param_name'    => 'player_color',
				'description'   => __( 'Color of video player', 'saturnthemes-financebank' ),
			),
			array(
				'type'          => 'colorpicker',
				'heading'       => 'Player Color on hover',
				'admin_label'   => false,
				'param_name'    => 'player_color_hover',
				'description'   => __( 'Color of video player on hover', 'saturnthemes-financebank' ),
			),
			array(
				'type'          => 'textfield',
				'heading'       => esc_html__( 'Class', 'saturnthemes-financebank' ),
				'admin_label'   => false,
				'param_name'    => 'el_class',
			),
			array(
				'type'          => 'css_editor',
				'heading'       => __( 'CSS', 'saturnthemes-financebank' ),
				'param_name'    => 'css',
				'group'         => __( 'Design Options', 'saturnthemes-financebank' ),
			),
		)
	) );

	class WPBakeryShortCode_SaturnThemes_Financebank_Contact_Details extends WPBakeryShortCode {

	}

	vc_map( array(
		'name'     => __( 'Contact Details', 'saturnthemes-financebank' ),
		'base'     => 'saturnthemes_financebank_contact_details',
		'category'    => 'Financebank',
		'params'   => array(
			array(
				'type'          => 'textfield',
				'heading'       => 'Location',
				'admin_label'   => true,
				'param_name'    => 'location',
				'value'         => '1918 Poling Farm Road, NY US',
			),
			array(
				'type'          => 'textfield',
				'heading'       => 'Phone Number',
				'admin_label'   => true,
				'param_name'    => 'phone_number',
				'value'         => '919-993-1000',
			),
			array(
				'type'          => 'textfield',
				'heading'       => 'Email',
				'param_name'    => 'email',
				'value'         => '',
			),
			array(
				'type'          => 'textfield',
				'heading'       => __( 'Website URL', 'saturnthemes-financebank' ),
				'param_name'    => 'url',
				'value'         => '',
			),
			array(
				'type'          => 'textfield',
				'heading'       => esc_html__( 'Class', 'saturnthemes-financebank' ),
				'admin_label'   => false,
				'param_name'    => 'el_class',
			),
			array(
				'type'          => 'css_editor',
				'heading'       => __( 'CSS', 'saturnthemes-financebank' ),
				'param_name'    => 'css',
				'group'         => __( 'Design Options', 'saturnthemes-financebank' ),
			),
		)
	) );

	class WPBakeryShortCode_SaturnThemes_Financebank_Social_Icons extends WPBakeryShortCode {

	}

	vc_map( array(
		'name'     => __( 'Social Icons', 'saturnthemes-financebank' ),
		'base'     => 'saturnthemes_financebank_social_icons',
		'category'    => 'Financebank',
		'params'   => array(
			array(
				'type'          => 'textfield',
				'heading'       => 'Facebook',
				'param_name'    => 'facebook',
				'value'         => 'https://www.facebook.com',
			),
			array(
				'type'          => 'textfield',
				'heading'       => 'Twitter',
				'param_name'    => 'twitter',
				'value'         => 'https://www.twitter.com',
			),
			array(
				'type'          => 'textfield',
				'heading'       => 'Intagram',
				'param_name'    => 'intagram',
				'value'         => 'https://www.instagram.com',
			),
			array(
				'type'          => 'textfield',
				'heading'       => 'Google+',
				'param_name'    => 'google_plus',
				'value'         => 'https://www.google.com/+',
			),
			array(
				'type'          => 'textfield',
				'heading'       => esc_html__( 'Class', 'saturnthemes-financebank' ),
				'admin_label'   => false,
				'param_name'    => 'el_class',
			),
			array(
				'type'          => 'css_editor',
				'heading'       => __( 'CSS', 'saturnthemes-financebank' ),
				'param_name'    => 'css',
				'group'         => __( 'Design Options', 'saturnthemes-financebank' ),
			),
		)
	) );

	class WPBakeryShortCode_SaturnThemes_Contact_Staffs extends WPBakeryShortCode {

	}

	vc_map( array(
		'name'     => esc_html__( 'Financebank Contact Staffs', 'saturnthemes-financebank' ),
		'base'     => 'saturnthemes_contact_staffs',
		'category' => 'Financebank',
		'params'   => array(
			array(
				'type'       => 'textfield',
				'heading'    => __( 'Staff IDS', 'saturnthemes-financebank' ),
				'param_name' => 'staff_ids',
				'description' => __( 'Enter staff IDs to display only those records (Note: separate values by commas (,)).', 'saturnthemes-financebank' ),
			),
			array(
				'type'       => 'textfield',
				'heading'    => 'Avatar Width',
				'param_name' => 'avatar_width',
				'value'      => '100px',
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Extra class name', 'saturnthemes-financebank' ),
				'param_name'  => 'el_class',
				'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'saturnthemes-financebank' ),
			),
			array(
				'type'       => 'css_editor',
				'heading'    => __( 'CSS', 'saturnthemes-financebank' ),
				'param_name' => 'css',
				'group'      => __( 'Design Options', 'saturnthemes-financebank' ),
			),
		),
	) );

	class WPBakeryShortCode_SaturnThemes_History extends WPBakeryShortCode {

	}

	vc_map( array(
		'name' => __( 'History', 'saturnthemes-financebank' ),
		'base' => 'saturnthemes_history',
		'category' => 'Financebank',
		'params' => array(
			array(
				'type' => 'param_group',
				'heading' => __( 'Years', 'saturnthemes-financebank' ),
				'param_name' => 'years',
				'description' => __( 'Enter years for graph - title, year and history.', 'saturnthemes-financebank' ),
				'value' => urlencode( json_encode( array(
					array(
						'year'    => '2016',
						'title'   => 'Start new company',
						'history' => '',
					),
				) ) ),
				'params' => array(
					array(
						'type' => 'textfield',
						'heading' => __( 'Year', 'saturnthemes-financebank' ),
						'param_name' => 'year',
						'admin_label' => true,
					),
					array(
						'type' => 'textfield',
						'heading' => __( 'Title', 'saturnthemes-financebank' ),
						'param_name' => 'title',
						'admin_label' => true,
					),
					array(
						'type' => 'textarea',
						'heading' => __( 'History', 'saturnthemes-financebank' ),
						'param_name' => 'history',
					),
				),
			),
			array(
				'type' => 'textfield',
				'heading' => __( 'Extra class name', 'saturnthemes-financebank' ),
				'param_name' => 'el_class',
				'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'saturnthemes-financebank' ),
			),
			array(
				'type' => 'css_editor',
				'heading' => __( 'CSS box', 'saturnthemes-financebank' ),
				'param_name' => 'css',
				'group' => __( 'Design Options', 'saturnthemes-financebank' ),
			),
		),
	) );

	class WPBakeryShortCode_SaturnThemes_Team_Member extends WPBakeryShortCode {

	}

	vc_map( array(
		'name' => __( 'Team Member', 'saturnthemes-financebank' ),
		'base' => 'saturnthemes_team_member',
		'category' => 'Financebank',
		'params' => array(
			array(
				'type' => 'textfield',
				'heading' => __( 'Name', 'saturnthemes-financebank' ),
				'param_name' => 'member_name',
				'description' => __( 'Name of team member', 'saturnthemes-financebank' ),
				'admin_label' => true,
			),
			array(
				'type' => 'textfield',
				'heading' => __( 'Position', 'saturnthemes-financebank' ),
				'param_name' => 'position',
				'description' => __( 'Position of team member', 'saturnthemes-financebank' ),
				'admin_label' => true,
			),
			array(
				'type' => 'textarea_html',
				'heading' => __( 'Description', 'saturnthemes-financebank' ),
				'param_name' => 'member_quote',
			),
			array(
				'type' => 'textfield',
				'heading' => __( 'Extra class name', 'saturnthemes-financebank' ),
				'param_name' => 'el_class',
				'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'saturnthemes-financebank' ),
			),
			array(
				'type' => 'textfield',
				'heading' => __( 'Phone Number', 'saturnthemes-financebank' ),
				'param_name' => 'phone_number',
				'description' => __( 'Phone number of team member', 'saturnthemes-financebank' ),
				'group' => __( 'Contact Information', 'saturnthemes-financebank' ),
			),
			array(
				'type' => 'textfield',
				'heading' => __( 'Email', 'saturnthemes-financebank' ),
				'param_name' => 'email',
				'description' => __( 'Email of team member', 'saturnthemes-financebank' ),
				'group' => __( 'Contact Information', 'saturnthemes-financebank' ),
			),
			array(
				'type' => 'textfield',
				'heading' => __( 'Facebook', 'saturnthemes-financebank' ),
				'param_name' => 'facebook',
				'group' => __( 'Follow on Socials', 'saturnthemes-financebank' ),
			),
			array(
				'type' => 'textfield',
				'heading' => __( 'Twitter', 'saturnthemes-financebank' ),
				'param_name' => 'twitter',
				'group' => __( 'Follow on Socials', 'saturnthemes-financebank' ),
			),
			array(
				'type' => 'textfield',
				'heading' => __( 'Instagram', 'saturnthemes-financebank' ),
				'param_name' => 'instagram',
				'group' => __( 'Follow on Socials', 'saturnthemes-financebank' ),
			),
			array(
				'type' => 'css_editor',
				'heading' => __( 'CSS box', 'saturnthemes-financebank' ),
				'param_name' => 'css',
				'group' => __( 'Design Options', 'saturnthemes-financebank' ),
			),
		),
	) );

    // Shortcode Career
    class WPBakeryShortCode_SaturnThemes_Career extends WPBakeryShortCode {
    }

    vc_map( array(
        'name'     => __( 'Career', 'saturnthemes-financebank' ),
        'base'     => 'saturnthemes_career',
        'category'    => 'Financebank',
        'params'   => array(
            array(
                'type'        => 'textfield',
                'heading'     => __( 'Title', 'saturnthemes-financebank' ),
                'param_name'  => 'title',
                'default'     => '',
                'admin_label' => true,
                'description' => esc_html__( 'Enter this career title', 'saturnthemes-financebank' ),
            ),
            array(
                'type'        => 'vc_link',
                'heading'     => esc_html__( 'Detail URL', 'saturnthemes-financebank' ),
                'param_name'  => 'link',
            ),
            array(
                'type'        => 'textarea_html',
                'heading'     => __( 'Short Description', 'saturnthemes-financebank' ),
                'param_name'  => 'short_description',
                'default'     => '',
            ),
            array(
                'type'        => 'vc_link',
                'heading'     => esc_html__( 'Apply URL', 'saturnthemes-financebank' ),
                'param_name'  => 'apply_link',
            ),
            array(
                'type'          => 'textfield',
                'heading'       => esc_html__( 'Class', 'saturnthemes-financebank' ),
                'admin_label'   => false,
                'param_name'    => 'el_class',
            ),
            array(
                'type'          => 'css_editor',
                'heading'       => __( 'CSS', 'saturnthemes-financebank' ),
                'param_name'    => 'css',
                'group'         => __( 'Design Options', 'saturnthemes-financebank' ),
            ),
        )
    ) );
}

// Autocomplete
function saturnthemes_financebank_vc_autocomplete_taxonomies_field_search( $search_string ) {
	$data                = array();
	$vc_filter_by        = vc_post_param( 'vc_filter_by', '' );
	$vc_taxonomies_types = strlen( $vc_filter_by ) > 0 ? array( $vc_filter_by ) : array_keys( vc_taxonomies_types() );
	$vc_taxonomies       = get_terms( $vc_taxonomies_types, array(
		'hide_empty' => false,
		'search'     => $search_string,
	) );
	if ( is_array( $vc_taxonomies ) && ! empty( $vc_taxonomies ) ) {
		foreach ( $vc_taxonomies as $t ) {
			if ( is_object( $t ) ) {
				$data_item          = vc_get_term_object( $t );
				$data_item['value'] = $t->slug;
				$data[]             = $data_item;
			}
		}
	}

	return $data;
}

function saturnthemes_financebank_vc_autocomplete_taxonomies_field_render( $term ) {
	$vc_taxonomies_types = vc_taxonomies_types();
	$terms               = get_terms( array_keys( $vc_taxonomies_types ), array(
		'in'.'clude'    => array( $term['value'] ),
		'hide_empty' => false,
	) );
	$data                = false;
	if ( is_array( $terms ) && 1 === count( $terms ) ) {
		$term          = $terms[0];
		$data          = vc_get_term_object( $term );
		$data['value'] = $term->slug;
	}

	return $data;
}

if ( function_exists( 'vc_add_' . 'shortcode_param' ) ) {
	call_user_func_array( 'vc_add_' . 'shortcode_param', array(
		'saturnthemes_financebank_animation_type',
		'saturnthemes_financebank_vc_animation_type_field',
	) );
}

function saturnthemes_financebank_vc_animation_type_field( $settings, $value ) {
	$animation_groups = array(
		__( 'Attention Seekers', 'saturnthemes-financebank' )  => array(
			'bounce',
			'flash',
			'pulse',
			'rubberBand',
			'shake',
			'swing',
			'tada',
			'wobble',
		),
		__( 'Bouncing Entrances', 'saturnthemes-financebank' ) => array(
			'bounceIn',
			'bounceInDown',
			'bounceInLeft',
			'bounceInRight',
			'bounceInUp',
		),
		__( 'Fading Entrances', 'saturnthemes-financebank' )   => array(
			'fadeIn',
			'fadeInDown',
			'fadeInDownBig',
			'fadeInLeft',
			'fadeInLeftBig',
			'fadeInRight',
			'fadeInRightBig',
			'fadeInUp',
			'fadeInUpBig',
		),
		__( 'Flippers', 'saturnthemes-financebank' )           => array( 'flip', 'flipInX', 'flipInY' ),
		__( 'Lightspeed', 'saturnthemes-financebank' )         => array( 'lightSpeedIn' ),
		__( 'Rotating Entrances', 'saturnthemes-financebank' ) => array(
			'rotateIn',
			'rotateInDownLeft',
			'rotateInDownRight',
			'rotateInUpLeft',
			'rotateInUpRight',
		),
		__( 'Sliders', 'saturnthemes-financebank' )            => array( 'slideInDown', 'slideInLeft', 'slideInRight' ),
		__( 'Specials', 'saturnthemes-financebank' )           => array( 'hinge', 'rollIn' ),
	);

	$html = '<select name="' . $settings['param_name'] . '" class="wpb_vc_param_value dropdown wpb-input wpb-select ' . $settings['param_name'] . ' ' . $settings['type'] . '">';

	$html .= '<option value="">' . esc_html( 'none', 'saturnthemes-financebank' ) . '</option>';

	foreach ( $animation_groups as $animation_group => $animations ) {
		$html .= '<optgroup label="' . esc_attr( $animation_group ) . '">';
		foreach ( $animations as $animation ) {
			$selected = '';
			if ( $animation == $value ) {
				$selected = ' selected="selected"';
			}
			$html .= '<option value="' . esc_attr( $animation ) . '"' . esc_attr( $selected ) . '>' . $animation . '</option>';
		}
		$html .= '</optgroup>';
	}

	$html .= '</select>';

	return $html;
}

add_action( 'admin_init', 'saturnthemes_financebank_vc_support_post_type', 0 );
function saturnthemes_financebank_vc_support_post_type() {
    if ( function_exists( 'vc_editor_set_post_types' ) ) {
        $post_types = vc_editor_post_types();
        if ( ! in_array( 'service', $post_types ) ) {
            $post_types[] = 'service';
        }
        if ( ! in_array( 'staff', $post_types ) ) {
            $post_types[] = 'staff';
        }
        if ( ! in_array( 'page', $post_types ) ) {
            $post_types[] = 'page';
        }

        vc_editor_set_post_types( $post_types );
    }
}
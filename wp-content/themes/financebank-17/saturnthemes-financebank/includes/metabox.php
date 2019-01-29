<?php
add_filter( 'saturnthemes_financebank_page_meta_box_presets', 'saturnthemes_financebank_page_meta_box_presets' );
function saturnthemes_financebank_page_meta_box_presets( $presets ) {
    $presets[] = 'footer_preset';
    $presets[] = 'header_preset';

    return $presets;
}

add_action( 'cmb2_admin_init', 'saturnthemes_financebank_register_page_metabox' );
function saturnthemes_financebank_register_page_metabox() {
    $prefix = 'saturnthemes_financebank_';

    $cmb = new_cmb2_box( array(
        'id'           => $prefix . 'metabox',
        'title'        => __( 'Page Settings', 'saturnthemes-financebank' ),
        'object_types' => array( 'page', 'service' ),
        'context'      => 'side',
        'priority'     => 'default',
        'show_names'   => true,
    ) );

    $sidebars = get_option( 'saturnthemes_financebank_custom_sidebars' );
    if ( ! is_array( $sidebars ) ) {
        $sidebars = array();
    }

    $sidebar_options = array(
        '' => esc_html__( 'Select', 'saturnthemes-financebank' ),
    );
    foreach ( $sidebars as $sidebar ) {
        $sidebar_options[ $sidebar ] = $sidebar;
    }

    $fields = array(
        array(
            'name' => __( 'Page Layout', 'saturnthemes-financebank' ),
            'id'   => $prefix . 'page_layout',
            'type'    => 'select',
            'options' => array(
                ''              => esc_html__( 'Select', 'saturnthemes-financebank' ),
                'wide'          => esc_html__( 'Wide', 'saturnthemes-financebank' ),
                'boxed'         => esc_html__( 'Boxed', 'saturnthemes-financebank' ),
            ),
        ),
	    array(
		    'name' => __( 'Content Layout', 'saturnthemes-financebank' ),
		    'id'   => $prefix . 'content_layout',
		    'type'    => 'select',
		    'options' => array(
			    ''              => esc_html__( 'Select', 'saturnthemes-financebank' ),
			    'wide'          => esc_html__( 'Wide', 'saturnthemes-financebank' ),
			    'boxed'         => esc_html__( 'Boxed', 'saturnthemes-financebank' ),
		    ),
	    ),
        array(
            'name' => __( 'Sidebar Position', 'saturnthemes-financebank' ),
            'id'   => $prefix . 'sidebar_position',
            'type'    => 'select',
            'options' => array(
                ''              => esc_html__( 'Select', 'saturnthemes-financebank' ),
                'no-sidebar'    => esc_html__( 'No Sidebar', 'saturnthemes-financebank' ),
                'left-sidebar'  => esc_html__( 'Left Sidebar', 'saturnthemes-financebank' ),
                'right-sidebar' => esc_html__( 'Right Sidebar', 'saturnthemes-financebank' ),
            ),
        ),
        array(
            'name' => __( 'Sidebar', 'saturnthemes-financebank' ),
            'id'   => $prefix . 'sidebar',
            'type'    => 'select',
            'options' => $sidebar_options,
        ),
    );

    // Header & Footer presets
    $presets = apply_filters( 'saturnthemes_financebank_page_meta_box_presets', array() );
    $preset_meta_boxes = array();

    if ( ! empty( $presets ) ) {
        foreach ( $presets as $preset ) {
            if ( ! empty( Kirki::$fields[ $preset ] ) && ! empty( Kirki::$fields[ $preset ]['choices'] ) ) {
                $kirki_preset = Kirki::$fields[ $preset ];
                $options      = array( '' => '' );

                foreach ( $kirki_preset['choices'] as $preset_choice_value => $preset_choice ) {
                    $options[ $preset_choice_value ] = $preset_choice['label'];
                }

                $preset_meta_boxes[] = array(
                    'name'    => $kirki_preset['label'],
                    'desc'    => isset( $kirki_preset['description'] ) ? $kirki_preset['description'] : '',
                    'id'      => $prefix . $preset,
                    'type'    => 'select',
                    'options' => $options,
                );
            }
        }
    }

    $reverse_preset_meta_boxes = array_reverse( $preset_meta_boxes );

    foreach ( $reverse_preset_meta_boxes as $preset_meta_box ) {
        $fields[] = $preset_meta_box;
    }

    $fields[] = array(
        'name' => __( 'Overlay Header', 'saturnthemes-financebank' ),
        'id'   => $prefix . 'overlay_header',
        'desc' => __( 'Enable overlay header.', 'cmb2' ),
        'type' => 'checkbox',
    );

    $fields[] = array(
        'name' => __( 'Background Image', 'saturnthemes-financebank' ),
        'desc' => __( 'Choose background image of page.', 'cmb2' ),
        'id'   => $prefix . 'background_image',
        'type' => 'file',
    );

    $fields[] = array(
        'name' => __( 'Background Repeat', 'saturnthemes-financebank' ),
        'id'   => $prefix . 'background_repeat',
        'type'    => 'select',
        'options' => array(
            ''          => esc_html__( 'Select', 'saturnthemes-financebank' ),
            'no-repeat' => esc_html__( 'No Repeat', 'saturnthemes-financebank' ),
            'repeat'    => esc_html__( 'Repeat', 'saturnthemes-financebank' ),
            'repeat-x'  => esc_html__( 'Repeat Horizontally', 'saturnthemes-financebank' ),
            'repeat-y'  => esc_html__( 'Repeat Vertically', 'saturnthemes-financebank' ),
        ),
    );

    $fields[] = array(
        'name' => __( 'Background Position', 'saturnthemes-financebank' ),
        'id'   => $prefix . 'background_position',
        'type'    => 'select',
        'options' => array(
            ''              => esc_html__( 'Select', 'saturnthemes-financebank' ),
            'left top'      => esc_html__( 'Left Top', 'saturnthemes-financebank' ),
            'left center'   => esc_html__( 'Left Center', 'saturnthemes-financebank' ),
            'left bottom'   => esc_html__( 'Left Bottom', 'saturnthemes-financebank' ),
            'center top'    => esc_html__( 'Center Top', 'saturnthemes-financebank' ),
            'center center' => esc_html__( 'Center Center', 'saturnthemes-financebank' ),
            'center bottom' => esc_html__( 'Center Bottom', 'saturnthemes-financebank' ),
            'right top'     => esc_html__( 'Right Top', 'saturnthemes-financebank' ),
            'right center'  => esc_html__( 'Right Center', 'saturnthemes-financebank' ),
            'right bottom'  => esc_html__( 'Right Bottom', 'saturnthemes-financebank' ),
        ),
    );

    $fields[] = array(
        'name' => __( 'Background Attachment', 'saturnthemes-financebank' ),
        'id'   => $prefix . 'background_attachment',
        'type'    => 'select',
        'options' => array(
            ''       => esc_html__( 'Select', 'saturnthemes-financebank' ),
            'scroll' => esc_html__( 'Scroll', 'saturnthemes-financebank' ),
            'fixed'  => esc_html__( 'Fixed', 'saturnthemes-financebank' ),
        ),
    );

	$fields[] = array(
		'name' => __( 'Show Page Title', 'saturnthemes-financebank' ),
		'id'   => $prefix . 'page_title_show',
		'type'    => 'select',
		'options' => array(
			'yes' => esc_html__( 'Yes', 'saturnthemes-financebank' ),
			'no'  => esc_html__( 'No', 'saturnthemes-financebank' ),
		),
		'default' => 'yes',
	);

	$fields[] = array(
		'name' => __( 'Page Title\'s Background Image', 'saturnthemes-financebank' ),
		'id'   => $prefix . 'page_title_background',
		'type'    => 'file',
	);

	$fields[] = array(
		'name' => __( 'Show Header Contact Details', 'saturnthemes-financebank' ),
		'id'   => $prefix . 'header_contact_details_show',
		'type'    => 'select',
		'options' => array(
			'yes' => esc_html__( 'Yes', 'saturnthemes-financebank' ),
			'no'  => esc_html__( 'No', 'saturnthemes-financebank' ),
		),
		'default' => 'no',
	);

	$fields[] = array(
		'name' => __( 'Show Header Social Icons', 'saturnthemes-financebank' ),
		'id'   => $prefix . 'header_social_icons_show',
		'type'    => 'select',
		'options' => array(
			'yes' => esc_html__( 'Yes', 'saturnthemes-financebank' ),
			'no'  => esc_html__( 'No', 'saturnthemes-financebank' ),
		),
		'default' => 'no',
	);

    foreach ( $fields as $field ) {
        $cmb->add_field( $field );
    }

	// Testimonial Metaboxes
	$testimonial_cmb = new_cmb2_box( array(
		'id'           => $prefix . 'testimonial_metabox',
		'title'        => __( 'Extra Information', 'saturnthemes-financebank' ),
		'object_types' => array( 'testimonial' ),
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true,
	) );

	$testimonial_cmb->add_field( array(
		'name' => __( 'Company', 'saturnthemes-financebank' ),
		'desc' => __( 'Company of testimonial author', 'saturnthemes-financebank' ),
		'id'   => $prefix . 'company',
		'type' => 'text',
	) );
}
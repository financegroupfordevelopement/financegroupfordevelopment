<?php

/**
 * Register meta boxes
 *
 * @since 1.0
 *
 * @param array $meta_boxes
 *
 * @return array
 */
if ( is_admin() ) {
	function borrow_register_meta_boxes( $meta_boxes ) {
		$prefix = '_cmb_';
		$meta_boxes[] = array(
			'id'       => 'format_detail',
			'title'    => esc_html__( 'Format Details', 'borrow' ),
			'pages'    => array( 'post' ),
			'context'  => 'normal',
			'priority' => 'high',
			'autosave' => true,
			'fields'   => array(
				array(
					'name'             => esc_html__( 'Image', 'borrow' ),
					'id'               => $prefix . 'image',
					'type'             => 'image_advanced',
					'class'            => 'image',
					'max_file_uploads' => 1,
				),
				array(
					'name'  => esc_html__( 'Gallery', 'borrow' ),
					'id'    => $prefix . 'images',
					'type'  => 'image_advanced',
					'class' => 'gallery',
				),
				array(
					'name'  => esc_html__( 'Quote', 'borrow' ),
					'id'    => $prefix . 'quote',
					'type'  => 'textarea',
					'cols'  => 20,
					'rows'  => 2,
					'class' => 'quote',
				),
				array(
					'name'  => esc_html__( 'Author', 'borrow' ),
					'id'    => $prefix . 'quote_author',
					'type'  => 'text',
					'class' => 'quote',
				),
				array(
					'name'  => esc_html__( 'Audio', 'borrow' ),
					'id'    => $prefix . 'link_audio',
					'type'  => 'oembed',
					'cols'  => 20,
					'rows'  => 2,
					'class' => 'audio',
					'desc' => 'Ex: https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/139083759',
				),
				array(
					'name'  => esc_html__( 'Video', 'borrow' ),
					'id'    => $prefix . 'link_video',
					'type'  => 'oembed',
					'cols'  => 20,
					'rows'  => 2,
					'class' => 'video',
					'desc' => 'Example: <b>http://www.youtube.com/embed/0ecv0bT9DEo</b> or <b>http://player.vimeo.com/video/47355798</b>',
				),			
				array(
					'name'             => esc_html__( 'Image 2', 'borrow' ),
					'id'               => $prefix . 'image2',
					'type'             => 'image_advanced',
					'class'            => 'image gallery quote video audio 0',
					'max_file_uploads' => 1,
				),
			),
		);
		$meta_boxes[] = array(
			'id'       => 'page_settings',
			'title'    => esc_html__( 'Page Settings', 'borrow' ),
			'pages'    => array( 'page', 'team' ),
			'context'  => 'normal',
			'priority' => 'high',
			'autosave' => true,
			'fields'   => array(	
				array(
					'name'             	=> esc_html__( 'Background image subheader', 'borrow' ),
					'desc'				=> esc_html__( 'upload image', 'borrow' ),
					'id'               	=> $prefix . 'subheader_image',
					'type'             	=> 'image_advanced',			
					'max_file_uploads' 	=> 1,
				),		
				array(
	                'name' => esc_html__( 'Action Text', 'borrow' ),
	                'desc' => esc_html__( 'Enter the text for button in header page.', 'borrow' ),
	                'id'   => $prefix . 'action_text',
	                'type' => 'text',
	            ),	
				array(
	                'name' => esc_html__( 'Action Link', 'borrow' ),
	                'desc' => esc_html__( 'Add link.', 'borrow' ),
	                'id'   => $prefix . 'action_link',
	                'type' => 'text',
	            ),	
				array(
	                'name' => esc_html__( 'Button Text the left', 'borrow' ),
	                'desc' => esc_html__( 'Enter the text for button in header page.', 'borrow' ),
	                'id'   => $prefix . 'text_1',
	                'type' => 'text',
	            ),	
				array(
	                'name' => esc_html__( 'Link Button the left', 'borrow' ),
	                'desc' => esc_html__( 'Add link.', 'borrow' ),
	                'id'   => $prefix . 'link_out_1',
	                'type' => 'text',
	            ),		
				array(
	                'name' => esc_html__( 'Button Text the right', 'borrow' ),
	                'desc' => esc_html__( 'Enter the text for button in header page.', 'borrow' ),
	                'id'   => $prefix . 'text_2',
	                'type' => 'text',
	            ),	
				array(
	                'name' => esc_html__( 'Link Button the right', 'borrow' ),
	                'desc' => esc_html__( 'Add link.', 'borrow' ),
	                'id'   => $prefix . 'link_out_2',
	                'type' => 'text',
	            ),		
			),

		);
		$meta_boxes[] = array(
			'id'         => 'team',
			'title'      => esc_html__( 'Team Details', 'borrow' ),
			'pages'      => array( 'team' ), // Post type
			'context'    => 'normal',
	        'priority'   => 'high',
	        'show_names' => true, // Show field names on the left
			//'show_on'    => array( 'key' => 'id', 'value' => array( 2, ), ), // Specific post IDs to display this metabox
			'fields' => array(
				array(
	                'name' => esc_html__( 'Location', 'borrow' ),
	                'desc' => esc_html__( 'Location of team', 'borrow' ),
	                'id'   => $prefix . 'job',
	                'type' => 'text',
	            ),
			
			)
		);

		$meta_boxes[] = array(
			'id'         => 'loan_setting',
			'title'      => esc_html__( 'Loan Details', 'borrow' ),
			'pages'      => array( 'service','loan' ), // Post type
			'context'    => 'normal',
	        'priority'   => 'high',
	        'show_names' => true, // Show field names on the left
			'fields' => array(
				array(
	                'name' => esc_html__( 'Subtitle', 'borrow' ),
	                'desc' => esc_html__( 'Add subtitle', 'borrow' ),
	                'id'   => $prefix . 'subtitle',
	                'type' => 'textarea',
	            ),	
				array(
					'name'             => esc_html__( 'Upload icon image for loan.', 'borrow' ),
					'desc' 			   => esc_html__( 'Used in the "OT Loan" element with Style "Grid Style with Icon Image"', 'borrow' ),
					'id'               => $prefix . 'image_service',
					'type'             => 'image_advanced',			
					'max_file_uploads' => 1,
				),		
				array(
					'name'             	=> esc_html__( 'Background image subheader', 'borrow' ),
					'desc'				=> esc_html__( 'If not upload background image, it is use image default for all page setup in theme option.', 'borrow' ),
					'id'               	=> $prefix . 'subheader_image',
					'type'             	=> 'image_advanced',			
					'max_file_uploads' 	=> 1,
				),		
				array(
	                'name' => esc_html__( 'rate number', 'borrow' ),
	                'desc' => esc_html__( 'Enter the number. Ex 12.5%', 'borrow' ),
	                'id'   => $prefix . 'rate_number',
	                'type' => 'text',
	            ),	
				array(
	                'name' => esc_html__( 'Rate Text', 'borrow' ),
	                'desc' => esc_html__( 'Enter the text', 'borrow' ),
	                'id'   => $prefix . 'rate_text',
	                'type' => 'text',
	            ),	
				array(
	                'name' => esc_html__( 'Button Text the left', 'borrow' ),
	                'desc' => esc_html__( 'Enter the text for button in header page.', 'borrow' ),
	                'id'   => $prefix . 'text_1',
	                'type' => 'text',
	            ),	
				array(
	                'name' => esc_html__( 'Link Button the left', 'borrow' ),
	                'desc' => esc_html__( 'Add link.', 'borrow' ),
	                'id'   => $prefix . 'link_out_1',
	                'type' => 'text',
	            ),		
				array(
	                'name' => esc_html__( 'Button Text the right', 'borrow' ),
	                'desc' => esc_html__( 'Enter the text for button in header page.', 'borrow' ),
	                'id'   => $prefix . 'text_2',
	                'type' => 'text',
	            ),	
				array(
	                'name' => esc_html__( 'Link Button the right', 'borrow' ),
	                'desc' => esc_html__( 'Add link.', 'borrow' ),
	                'id'   => $prefix . 'link_out_2',
	                'type' => 'text',
	            ),			
				array(
	                'name' => esc_html__( 'Text Nav menu 1', 'borrow' ),
	                'desc' => esc_html__( 'Enter the text', 'borrow' ),
	                'id'   => $prefix . 'nav_text_1',
	                'type' => 'text',
	            ),	
				array(
	                'name' => esc_html__( 'Link nav menu 1', 'borrow' ),
	                'desc' => esc_html__( 'Add link.', 'borrow' ),
	                'id'   => $prefix . 'nav_link_1',
	                'type' => 'text',
	            ),			
				array(
	                'name' => esc_html__( 'Text Nav menu 2', 'borrow' ),
	                'desc' => esc_html__( 'Enter the text', 'borrow' ),
	                'id'   => $prefix . 'nav_text_2',
	                'type' => 'text',
	            ),	
				array(
	                'name' => esc_html__( 'Link nav menu 2', 'borrow' ),
	                'desc' => esc_html__( 'Add link.', 'borrow' ),
	                'id'   => $prefix . 'nav_link_2',
	                'type' => 'text',
	            ),			
				array(
	                'name' => esc_html__( 'Text Nav menu 3', 'borrow' ),
	                'desc' => esc_html__( 'Enter the text', 'borrow' ),
	                'id'   => $prefix . 'nav_text_3',
	                'type' => 'text',
	            ),	
				array(
	                'name' => esc_html__( 'Link nav menu 3', 'borrow' ),
	                'desc' => esc_html__( 'Add link.', 'borrow' ),
	                'id'   => $prefix . 'nav_link_3',
	                'type' => 'text',
	            ),			
				array(
	                'name' => esc_html__( 'Text Nav menu 4', 'borrow' ),
	                'desc' => esc_html__( 'Enter the text', 'borrow' ),
	                'id'   => $prefix . 'nav_text_4',
	                'type' => 'text',
	            ),	
				array(
	                'name' => esc_html__( 'Link nav menu 4', 'borrow' ),
	                'desc' => esc_html__( 'Add link.', 'borrow' ),
	                'id'   => $prefix . 'nav_link_4',
	                'type' => 'text',
	            ),			
				array(
	                'name' => esc_html__( 'Text Nav menu 5', 'borrow' ),
	                'desc' => esc_html__( 'Enter the text', 'borrow' ),
	                'id'   => $prefix . 'nav_text_5',
	                'type' => 'text',
	            ),	
				array(
	                'name' => esc_html__( 'Link nav menu 5', 'borrow' ),
	                'desc' => esc_html__( 'Add link.', 'borrow' ),
	                'id'   => $prefix . 'nav_link_5',
	                'type' => 'text',
	            ),			
				array(
	                'name' => esc_html__( 'Text Nav menu 6', 'borrow' ),
	                'desc' => esc_html__( 'Enter the text', 'borrow' ),
	                'id'   => $prefix . 'nav_text_6',
	                'type' => 'text',
	            ),	
				array(
	                'name' => esc_html__( 'Link nav menu 6', 'borrow' ),
	                'desc' => esc_html__( 'Add link.', 'borrow' ),
	                'id'   => $prefix . 'nav_link_6',
	                'type' => 'text',
	            ),	
			)
		);

		$meta_boxes[] = array(
			'id'         => 'credit_card_setting',
			'title'      => esc_html__( 'Credit Card Details', 'borrow' ),
			'pages'      => array( 'credit_card' ), // Post type
			'context'    => 'normal',
	        'priority'   => 'high',
	        'show_names' => true, // Show field names on the left
			'fields' => array(
				array(
	                'name' => esc_html__( 'Subtitle', 'borrow' ),
	                'desc' => esc_html__( 'Add subtitle', 'borrow' ),
	                'id'   => $prefix . 'subtitle',
	                'type' => 'textarea',
	            ),							
				array(
	                'name' => esc_html__( 'Button Text', 'borrow' ),
	                'desc' => esc_html__( 'Add text for button', 'borrow' ),
	                'id'   => $prefix . 'btn_text',
	                'type' => 'text',
	            ),	
				array(
	                'name' => esc_html__( 'Button Link', 'borrow' ),
	                'desc' => esc_html__( 'Add link for button, leave a blank do not show button.', 'borrow' ),
	                'id'   => $prefix . 'btn_link',
	                'type' => 'text',
	            ),	
				array(
	                'name' => esc_html__( 'Short Content', 'borrow' ),
	                'desc' => esc_html__( 'Add short content for "OT Credit Card Grid" element.', 'borrow' ),
	                'id'   => $prefix . 'except',
	                'type' => 'wysiwyg',
	            ),
			)
		);

		$meta_boxes[] = array(
			'id'         => 'lender_setting',
			'title'      => esc_html__( 'Lender Details', 'borrow' ),
			'pages'      => array( 'ot_lenders' ), // Post type
			'context'    => 'normal',
	        'priority'   => 'high',
	        'show_names' => true, // Show field names on the left
			'fields' => array(
				array(
	                'name' => esc_html__( 'Subtitle', 'borrow' ),
	                'desc' => esc_html__( 'Add subtitle', 'borrow' ),
	                'id'   => $prefix . 'subtitle',
	                'type' => 'textarea',
	            ),	
	            array(
	                'name' => esc_html__( 'Advertised Rate Title', 'borrow' ),
	                'desc' => esc_html__( 'Add Advertised Rate Title', 'borrow' ),
	                'id'   => $prefix . 'advertised_title',
	                'type' => 'text',
	            ),
	            array(
	                'name' => esc_html__( 'Advertised Rate Number', 'borrow' ),
	                'desc' => esc_html__( 'Add Advertised Rate Number', 'borrow' ),
	                'id'   => $prefix . 'advertised_number',
	                'type' => 'text',
	            ),
	            array(
	                'name' => esc_html__( 'Comparison Rate Title', 'borrow' ),
	                'desc' => esc_html__( 'Add Comparison Rate Title', 'borrow' ),
	                'id'   => $prefix . 'comparison_title',
	                'type' => 'text',
	            ),
	            array(
	                'name' => esc_html__( 'Comparison Rate Number', 'borrow' ),
	                'desc' => esc_html__( 'Add Comparison Rate Number', 'borrow' ),
	                'id'   => $prefix . 'comparison_number',
	                'type' => 'text',
	            ),						
				array(
	                'name' => esc_html__( 'Button Text', 'borrow' ),
	                'desc' => esc_html__( 'Add text for button', 'borrow' ),
	                'id'   => $prefix . 'btn_text',
	                'type' => 'text',
	            ),	
				array(
	                'name' => esc_html__( 'Button Link', 'borrow' ),
	                'desc' => esc_html__( 'Add link for button, leave a blank do not show button.', 'borrow' ),
	                'id'   => $prefix . 'btn_link',
	                'type' => 'text',
	            ),	
				array(
	                'name' => esc_html__( 'Short Content', 'borrow' ),
	                'desc' => esc_html__( 'Add short content for "OT Credit Card Grid" element.', 'borrow' ),
	                'id'   => $prefix . 'except',
	                'type' => 'wysiwyg',
	            ),
			)
		);

		return $meta_boxes;
	}
	add_filter( 'rwmb_meta_boxes', 'borrow_register_meta_boxes' );
}


<?php
$section  = 'site_style';
$priority = 1;

Kirki::add_field( 'saturnthemes', array(
    'type'     => 'color',
    'settings'  => 'site_primary_color',
    'label'    => esc_html__( 'Primary Color', 'saturnthemes-financebank' ),
    'section'  => $section,
    'priority' => $priority++,
    'default'  => SaturnThemes_Financebank_PRIMARY_COLOR,
    'output'   => array(
	    array(
		    'element' => '#primary-menu > .menu-item:hover > a, #primary-menu > .menu-item.current-menu-ancestor > a, #primary-menu > ul > li:hover > a, #primary-menu > ul > li.current_page_ancestor > a, #primary-menu > ul > li.current_page_item > a, .scrollup:hover, a.button-primary:visited:hover, .button-primary-outline, .button-primary:hover, .primary-color, .pagination li .page-numbers.next, .pagination.loop-pagination .page-numbers.next, .pagination li .page-numbers.prev, .pagination.loop-pagination .page-numbers.prev, .widget-title:before, .widget-title:after, .comments-area .comment-respond .comment-reply-title:before, .comments-area .comment-heading:before, #primary-menu > .menu-item-has-children:hover > a:after, #primary-menu > ul > .page_item_has_children:hover > a:after, #primary-menu > .menu-item-has-children:hover > a:after, #primary-menu > ul > .page_item_has_children.current_page_item > a:after, .header-01 .header-contact-detail .header-contact-detail-info .header-contact-detail-extra-info, .header-02 .header-contact-detail .header-contact-detail-info .header-contact-detail-extra-info, .vc_custom_heading.heading-with-primary h2 b',
		    'property' => 'color',
	    ),
	    array(
		    'element' => '.woocommerce .onsale, .page-title-overlay-color, #header.header-gradient.header-01 .affix:not(.affix-disabled), .button-primary-outline:hover, .button-primary, .primary-background-color, .pagination li .page-numbers:hover, .pagination li .page-numbers.current, .pagination.loop-pagination .page-numbers:hover, .pagination.loop-pagination .page-numbers.current, .widget_price_filter .ui-slider .ui-slider-range, .widget_price_filter .ui-slider .ui-slider-handle, .info-box.style2 .info-box-extra:before',
		    'property' => 'background-color',
	    ),
	    array(
		    'element' => '.primary-background-color-hover:hover, .woocommerce .product-item .product-item-inner:hover .add_to_cart_button, .header-02 .header-navigation-container',
		    'property' => 'background-color',
	    ),
	    array(
		    'element' => '.scrollup:hover, .quote-primary:before, .icon-box.style4 .icon-box-icon, .button-primary-outline, textarea:focus, textarea:hover, input[type="text"]:hover, input[type="text"]:focus, input[type="email"]:hover, input[type="email"]:focus, input[type="url"]:hover, input[type="url"]:focus, input[type="password"]:hover, input[type="password"]:focus, input[type="search"]:hover, input[type="search"]:focus, input[type="tel"]:hover, input[type="tel"]:focus',
		    'property' => 'border-color'
	    ),
	    array(
		    'element' => '.button-primary, .primary-border-color-hover:hover, .woocommerce .product-item .product-item-inner:hover .add_to_cart_button',
		    'property' => 'border-color',
	    ),
	    array(
	    	'element' => '.primary-border-color-hover-important:hover',
		    'property' => 'border-color',
		    'suffix' => '!important',
	    ),
	    array(
	    	'element' => '.sidebar .widget_nav_menu ul li:first-child, .vc_tta-accordion.vc_tta-color-grey.vc_tta-style-classic .vc_tta-panel .vc_tta-panel-body',
		    'property' => 'border-top-color',
	    ),
	    array(
		    'element'  => '.icon-box.style3:hover .icon-box-icon',
		    'property' => 'background-color',
		    'suffix'   => '!important',
	    ),
	    // WooCommerce
	    array(
		    'element' => '.single-product .single_add_to_cart_button, .single-product #review_form_wrapper .form-submit .submit, .woocommerce-cart .cart input[name="update_cart"], .woocommerce-cart .button, .woocommerce-checkout .button',
		    'property' => 'background-color',
	    ),
	    array(
	    	'element' => '.single-product .woocommerce-tabs ul.tabs li:after',
		    'property' => 'border-bottom-color',
	    ),
    ),
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'color',
	'settings'  => 'site_secondary_color',
	'label'    => esc_html__( 'Secondary Color', 'saturnthemes-financebank' ),
	'section'  => $section,
	'priority' => $priority++,
	'default'  => '#ED5036',
	'output'   => array(
		array(
			'element' => '.button-secondary-outline:hover, .button-secondary, .secondary-background-color, .footer-widget-container .mc4wp-form button[type="submit"]',
			'property' => 'background-color',
		),
		array(
			'element' => '.header-request-a-quote a, .header-request-a-quote a:visited, a.button-secondary:visited:hover, .button-secondary-outline, .button-secondary:hover, .secondary-color, .secondary-color:visited, .button-outline, .widget_price_filter .price_slider_amount .button, .info-box.style_1 .info-box-extra .info-box-read-more a, .info-box.style_1 .info-box-extra .info-box-read-more i, .vc_custom_heading.heading-icon-red h2 i, .info-box.style2 .info-box-read-more a, .info-box.style2 .info-box-read-more i, .info-box.style1 .info-box-extra .info-box-read-more a, .info-box.style1 .info-box-extra .info-box-read-more i, .info-box.style1 .info-box-extra .info-box-read-more a:visited',
			'property' => 'color',
		),
		array(
			'element' => '.button-secondary-outline, .button-secondary, .secondary-border-color, .button-outline, .widget_price_filter .price_slider_amount .button',
			'property' => 'border-color',
		),
		array(
			'element' => '.secondary-background-color-hover:hover, .button-outline, .widget_price_filter .price_slider_amount .button:hover',
			'property' => 'background-color',
		),
		array(
			'element' => '.secondary-border-color-hover:hover',
			'property' => 'background-color',
		),
		array(
			'element' => '.icon-box.style3:hover .icon-box-title',
			'property' => 'color',
			'suffix' => '!important',
		),
		/* WooCommerce */
		array(
			'element' => '.woocommerce .product-item .product-item-inner .price, .widget_top_rated_products .product_list_widget li .woocommerce-Price-amount, .single-product .woocommerce-Price-amount, .woocommerce-cart .cart .woocommerce-Price-amount',
			'property' => 'color',
		),
	),
) );

Kirki::add_field( 'saturnthemes', array(
    'type'     => 'color',
    'settings'  => 'site_body_text_color',
    'label'    => esc_html__( 'Body Text Color', 'saturnthemes-financebank' ),
    'section'  => $section,
    'priority' => $priority++,
    'default'  => '#777777',
    'output'   => array(
        array(
            'element'  => 'body, .body-color, .full-layout .entry-meta .entry-meta-item:not(.entry-meta-item-author), .full-layout .entry-meta .entry-meta-item:not(.entry-meta-item-author) .fa, .pagination li .page-numbers, .pagination.loop-pagination .page-numbers, .post-tags a, .icon-box.style3 .icon-box-content',
            'property' => 'color',
        )
    ),
) );

Kirki::add_field( 'saturnthemes', array(
    'type'      => 'color',
    'settings'   => 'heading_color',
    'label'     => esc_html__( 'Heading Color', 'saturnthemes-financebank' ),
    'section'   => $section,
    'priority'  => $priority++,
    'default'   => '#212121',
    'transport' => 'postMessage',
    'output'    => array(
        array(
            'element'  => '.heading-color, h1, h2, h3, h4, h5, h6',
            'property' => 'color',
        ),
    ),
    'js_vars'   => array(
        array(
            'element'  => '.heading-color, h1, h2, h3, h4, h5, h6',
            'function' => 'css',
            'property' => 'color',
        ),
    ),
) );

Kirki::add_field( 'saturnthemes', array(
    'type'      => 'color',
    'settings'   => 'link_color',
    'label'     => esc_html__( 'Link Color', 'saturnthemes-financebank' ),
    'section'   => $section,
    'priority'  => $priority++,
    'default'   => '#212121',
    'transport' => 'postMessage',
    'output'    => array(
        array(
            'element'  => 'a, a:visited, .full-layout .entry-meta .entry-meta-item-author .entry-author-name, .widget_recent_entries ul li a',
            'property' => 'color',
        ),
    ),
    'js_vars'   => array(
        array(
            'element'  => 'a, a:visited, .share-wrapper a, .share-wrapper a:visited',
            'function' => 'css',
            'property' => 'color',
        ),
    ),
) );

Kirki::add_field( 'saturnthemes', array(
    'type'      => 'color',
    'settings'   => 'link_color_hover',
    'label'     => esc_html__( 'Link Hover Color', 'saturnthemes-financebank' ),
    'section'   => $section,
    'priority'  => $priority++,
    'default'   => '#212121',
    'transport' => 'postMessage',
    'output'    => array(
        array(
            'element'  => '.post-grid-style1 .entry-content .more-link:hover, .info-box.style1 .info-box-extra .info-box-read-more a:hover, .info-box.style1 .info-box-extra .info-box-read-more a:hover i, body a:hover, .site-footer .saturnthemes-social-widget a:hover',
            'property' => 'color',
        ),
    ),
    'js_vars'   => array(
        array(
            'element'  => 'a:hover, .site-footer .saturnthemes-social-widget a:hover',
            'function' => 'css',
            'property' => 'color',
        ),
    ),
) );

Kirki::add_field( 'saturnthemes', array(
    'type'      => 'color',
    'settings'   => 'button_color',
    'label'     => esc_html__( 'Button Color', 'saturnthemes-financebank' ),
    'section'   => $section,
    'priority'  => $priority++,
    'default'   => SaturnThemes_Financebank_PRIMARY_COLOR,
    'transport' => 'postMessage',
    'output'    => array(
        array(
            'element'  => '.secondary-button',
            'property' => 'background-color',
        ),
    ),
    'js_vars'   => array(
        array(
            'element'  => '.secondary-button',
            'function' => 'css',
            'property' => 'background-color',
        ),
    ),
) );

Kirki::add_field( 'saturnthemes', array(
    'type'      => 'color',
    'settings'   => 'button_color_hover',
    'label'     => esc_html__( 'Button Hover Color', 'saturnthemes-financebank' ),
    'section'   => $section,
    'priority'  => $priority++,
    'default'   => SaturnThemes_Financebank_PRIMARY_COLOR,
    'transport' => 'postMessage',
    'output'    => array(
        array(
            'element'  => '.secondary-button:hover',
            'property' => 'background-color',
        ),
    ),
    'js_vars'   => array(
        array(
            'element'  => '.secondary-button:hover',
            'function' => 'css',
            'property' => 'background-color',
        ),
    ),
) );


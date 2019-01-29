<?php
if ( ! function_exists( 'saturnthemes_financebank_register_theme_plugins' ) ) :
	function saturnthemes_financebank_register_theme_plugins() {

    $plugins = array(
      array(
        'name'     => 'SaturnThemes Toolkit',
        'slug'     => 'saturnthemes-toolkit',
        'source'   => get_template_directory_uri() . '/plugins/saturnthemes-toolkit.zip',
        'version'  => '1.6',
        'required' => true,
      ),
      array(
        'name'     => 'CMB2',
        'slug'     => 'cmb2',
        'required' => true,
      ),
      array(
        'name'     => 'SaturnThemes Post Types',
        'slug'     => 'saturnthemes-post-types',
        'source'   => get_template_directory_uri() . '/plugins/saturnthemes-post-types.zip',
        'version'  => '1.0',
        'required' => true,
      ),
      array(
        'name'     => 'Visual Composer',
        'slug'     => 'js_composer',
        'source'   => get_template_directory_uri() . '/plugins/js_composer.zip',
        'version'  => '5.1.1',
        'required' => true,
      ),
      array(
        'name'     => 'Revolution Slider',
        'slug'     => 'revslider',
        'source'   => get_template_directory_uri() . '/plugins/revslider.zip',
        'version'  => '5.4.5',
        'required' => true,
      ),
      array(
        'name'     => 'Contact Form 7',
        'slug'     => 'contact-form-7',
        'required' => false,
      ),
      array(
        'name'     => 'Testimonials by WooThemes',
        'slug'     => 'testimonials-by-woothemes',
        'required' => false
      ),
      array(
        'name'     => __( 'WooCommerce - excelling eCommerce', 'saturnthemes-financebank' ),
        'slug'     => 'woocommerce',
        'required' => false,
      ),
    );


		$config = array(
			'id'           => 'tgmpa',
			// Unique ID for hashing notices for multiple instances of TGMPA.
			'default_path' => '',
			// Default absolute path to pre-packaged plugins.
			'menu'         => 'tgmpa-install-plugins',
			// Menu slug.
			'parent_slug'  => 'saturnthemes',
			// Parent menu slug.
			'capability'   => 'edit_theme_options',
			// Capability needed to view plugin install page, should be a capability associated with the parent menu used.
			'has_notices'  => true,
			// Show admin notices or not.
			'dismissable'  => true,
			// If false, a user cannot dismiss the nag message.
			'dismiss_msg'  => '',
			// If 'dismissable' is false, this message will be output at top of nag.
			'is_automatic' => true,
			// Automatically activate plugins after installation or not.
			'message'      => '',
			// Message to output right before the plugins table.
			'strings'      => array(
				'page_title'                      => esc_html__( 'Install Required Plugins', 'saturnthemes-financebank' ),
				'menu_title'                      => esc_html__( 'Install Plugins', 'saturnthemes-financebank' ),
				'installing'                      => esc_html__( 'Installing Plugin: %s', 'saturnthemes-financebank' ),
				// %s = plugin name.
				'oops'                            => esc_html__( 'Something went wrong with the plugin API.', 'saturnthemes-financebank' ),
				'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'saturnthemes-financebank' ),
				// %1$s = plugin name(s).
				'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'saturnthemes-financebank' ),
				// %1$s = plugin name(s).
				'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %1$s plugin.', 'Sorry, but you do not have the correct permissions to install the %1$s plugins.', 'saturnthemes-financebank' ),
				// %1$s = plugin name(s).
				'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'saturnthemes-financebank' ),
				// %1$s = plugin name(s).
				'notice_ask_to_update_maybe'      => _n_noop( 'There is an update available for: %1$s.', 'There are updates available for the following plugins: %1$s.', 'saturnthemes-financebank' ),
				// %1$s = plugin name(s).
				'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %1$s plugin.', 'Sorry, but you do not have the correct permissions to update the %1$s plugins.', 'saturnthemes-financebank' ),
				// %1$s = plugin name(s).
				'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'saturnthemes-financebank' ),
				// %1$s = plugin name(s).
				'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'saturnthemes-financebank' ),
				// %1$s = plugin name(s).
				'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %1$s plugin.', 'Sorry, but you do not have the correct permissions to activate the %1$s plugins.', 'saturnthemes-financebank' ),
				// %1$s = plugin name(s).
				'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'saturnthemes-financebank' ),
				'update_link'                     => _n_noop( 'Begin updating plugin', 'Begin updating plugins', 'saturnthemes-financebank' ),
				'activate_link'                   => _n_noop( 'Begin activating plugin', 'Begin activating plugins', 'saturnthemes-financebank' ),
				'return'                          => esc_html__( 'Return to Required Plugins Installer', 'saturnthemes-financebank' ),
				'plugin_activated'                => esc_html__( 'Plugin activated successfully.', 'saturnthemes-financebank' ),
				'activated_successfully'          => esc_html__( 'The following plugin was activated successfully:', 'saturnthemes-financebank' ),
				'plugin_already_active'           => esc_html__( 'No action taken. Plugin %1$s was already active.', 'saturnthemes-financebank' ),
				// %1$s = plugin name(s).
				'plugin_needs_higher_version'     => esc_html__( 'Plugin not activated. A higher version of %s is needed for this theme. Please update the plugin.', 'saturnthemes-financebank' ),
				// %1$s = plugin name(s).
				'complete'                        => esc_html__( 'All plugins installed and activated successfully. %1$s', 'saturnthemes-financebank' ),
				// %s = dashboard link.
				'contact_admin'                   => esc_html__( 'Please contact the administrator of this site for help.', 'saturnthemes-financebank' ),
				'nag_type'                        => 'updated',
				// Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
			)
		);

		tgmpa( $plugins, $config );

	}

	add_action( 'tgmpa_register', 'saturnthemes_financebank_register_theme_plugins' );
endif;
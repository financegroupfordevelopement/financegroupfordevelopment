<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class saturnthemes_financebank_Admin {

	/**
	 * Constructor
	 */
	public function __construct() {
		add_action( 'init', array( $this, 'includes' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'register_scripts' ), 99 );

        add_action( 'admin_enqueue_scripts', 	array( $this, 'welcome_style' ) );
        add_action( 'load-themes.php', array( $this, 'activation_admin_notice' ) );
        add_action( 'admin_menu', array( $this, 'welcome_register_menu' ) );
	}

	/**
	 * Include any classes we need within admin.
	 */
	public function includes() {
		$admin_path = SaturnThemesC()->core_path() . 'includes/admin/';

		include_once( $admin_path . 'class-saturnthemes-admin-menus.php' );
	}

	public function register_scripts() {
		wp_enqueue_script( 'st-admin', SaturnThemesC()->core_url() . 'assets/js/admin/admin.js', array(
			'common',
			'jquery',
			'media-upload',
			'thickbox'
		), '1.0.0', true );
	}

    public function activation_admin_notice() {
        global $pagenow;

        if ( is_admin() && 'themes.php' == $pagenow && isset( $_GET['activated'] ) ) { // Input var okay.
            add_action( 'admin_notices', array( $this, 'welcome_admin_notice' ), 99 );
        }
    }

    public function welcome_admin_notice() {
        $theme = wp_get_theme();
        $theme_name = $theme->get('Name');
        ?>
        <style type="text/css">
            #setting-error-saturnthemes-financebank-tgmpa {
                display: none;
            }
        </style>
        <div class="updated notice is-dismissible">
            <p><?php echo sprintf( esc_html__( 'Thanks for choosing %s! You can read hints and tips on how get the most out of your new theme on the %swelcome screen%s.', 'saturnthemes-financebank' ), $theme_name, '<a href="' . esc_url( admin_url( 'themes.php?page=theme-welcome' ) ) . '">', '</a>' ); ?></p>
            <p><a href="<?php echo esc_url( admin_url( 'themes.php?page=theme-welcome' ) ); ?>" class="button" style="text-decoration: none;"><?php echo sprintf( esc_attr( __( 'Get started with %s', 'saturnthemes-financebank' ) ), $theme_name ); ?></a></p>
        </div>
        <?php
    }

    public function welcome_register_menu() {
        $theme = wp_get_theme();
        $theme_name = $theme->get('Name');

        add_theme_page( sprintf( esc_html__( '%s Welcome', 'saturnthemes-financebank' ), $theme_name ), sprintf( esc_html__( '%s Welcome', 'saturnthemes-financebank' ), $theme_name ), 'activate_plugins', 'theme-welcome', array( $this, 'welcome_screen' ) );
    }

    public function welcome_screen() {
        if ( isset( $_GET['tgmpa-deactivate'] ) && 'deactivate-plugin' == $_GET['tgmpa-deactivate'] ) {
            $plugins = TGM_Plugin_Activation::$instance->plugins;
            check_admin_referer( 'tgmpa-deactivate', 'tgmpa-deactivate-nonce' );
            foreach ( $plugins as $plugin ) {
                if ( $plugin['slug'] == $_GET['plugin'] ) {
                    deactivate_plugins( $plugin['file_path'] );
                }
            }
        }
        if ( isset( $_GET['tgmpa-activate'] ) && 'activate-plugin' == $_GET['tgmpa-activate'] ) {
            check_admin_referer( 'tgmpa-activate', 'tgmpa-activate-nonce' );
            $plugins = TGM_Plugin_Activation::$instance->plugins;
            foreach ( $plugins as $plugin ) {
                if ( isset( $_GET['plugin'] ) && $plugin['slug'] == $_GET['plugin'] ) {
                    activate_plugin( $plugin['file_path'] );
                }
            }
        }

        $theme = wp_get_theme();
        $theme_name = $theme->get('Name');

        // Get required plugins
        $required_plugins = TGM_Plugin_Activation::get_instance()->plugins;
        foreach ( $required_plugins as $index => $required_plugin ) {
            $required_plugins[ $index ]['action'] = $this->get_plugin_action( $required_plugin );
        }

        include( get_template_directory() . '/core/includes/admin/templates/welcome-page.php' );
    }

    public function welcome_style( $hook_suffix ) {
        if ( 'appearance_page_theme-welcome' == $hook_suffix ) {
            wp_enqueue_style( 'theme-welcome-screen', get_template_directory_uri() . '/core/includes/admin/assets/css/welcome.css' );
        }
    }

    public function is_plugin_active( $slug ) {
        include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

        if ( ! is_plugin_active( $slug ) && ! is_plugin_active( $slug . '/index.php' ) && ! is_plugin_active( $slug . '/' . $slug . '.php' ) ) {
            return false;
        } else {
            return true;
        }
    }

    protected function get_plugin_action( $plugin ) {
        $installed_plugins        = get_plugins();
        $plugin['sanitized_plugin'] = $plugin['name'];
        $actions                  = array();
        // We have a repo plugin
        if ( ! $plugin['version'] ) {
            $plugin['version'] = TGM_Plugin_Activation::$instance->does_plugin_have_update( $plugin['slug'] );
        }
        /** We need to display the 'Install' hover link */
        if ( ! isset( $installed_plugins[ $plugin['file_path'] ] ) ) {
            $actions = sprintf(
                '<a href="%1$s" title="Install %2$s">Install</a>',
                esc_url( wp_nonce_url(
                    add_query_arg(
                        array(
                            'page'          => urlencode( TGM_Plugin_Activation::$instance->menu ),
                            'plugin'        => urlencode( $plugin['slug'] ),
                            'plugin_name'   => urlencode( $plugin['sanitized_plugin'] ),
                            'plugin_source' => urlencode( $plugin['source'] ),
                            'tgmpa-install' => 'install-plugin',
                            'return_url'    => 'theme-welcome',
                        ),
                        TGM_Plugin_Activation::$instance->get_tgmpa_url()
                    ),
                    'tgmpa-install',
                    'tgmpa-nonce'
                ) ),
                $plugin['sanitized_plugin']
            );
        } /** We need to display the 'Activate' hover link */
        elseif ( is_plugin_inactive( $plugin['file_path'] ) ) {
            $actions = sprintf(
                '<a href="%1$s" title="Activate %2$s">Activate</a>',
                esc_url( add_query_arg(
                    array(
                        'plugin'               => urlencode( $plugin['slug'] ),
                        'plugin_name'          => urlencode( $plugin['sanitized_plugin'] ),
                        'plugin_source'        => urlencode( $plugin['source'] ),
                        'tgmpa-activate'       => 'activate-plugin',
                        'tgmpa-activate-nonce' => wp_create_nonce( 'tgmpa-activate' ),
                    ),
                    admin_url( 'admin.php?page=theme-welcome' )
                ) ),
                $plugin['sanitized_plugin']
            );
        } /** We need to display the 'Update' hover link */
        elseif ( version_compare( $installed_plugins[ $plugin['file_path'] ]['Version'], $plugin['version'], '<' ) ) {
            $actions = sprintf(
                '<a href="%1$s" title="Install %2$s">Update</a>',
                wp_nonce_url(
                    add_query_arg(
                        array(
                            'page'          => urlencode( TGM_Plugin_Activation::$instance->menu ),
                            'plugin'        => urlencode( $plugin['slug'] ),
                            'tgmpa-update'  => 'update-plugin',
                            'plugin_source' => urlencode( $plugin['source'] ),
                            'version'       => urlencode( $plugin['version'] ),
                            'return_url'    => 'fusion_plugins',
                        ),
                        TGM_Plugin_Activation::$instance->get_tgmpa_url()
                    ),
                    'tgmpa-update',
                    'tgmpa-nonce'
                ),
                $plugin['sanitized_plugin']
            );
        } elseif ( is_plugin_active( $plugin['file_path'] ) ) {
            $actions = sprintf(
                '<a href="%1$s" title="Deactivate %2$s">Deactivate</a>',
                esc_url( add_query_arg(
                    array(
                        'plugin'                 => urlencode( $plugin['slug'] ),
                        'plugin_name'            => urlencode( $plugin['sanitized_plugin'] ),
                        'plugin_source'          => urlencode( $plugin['source'] ),
                        'tgmpa-deactivate'       => 'deactivate-plugin',
                        'tgmpa-deactivate-nonce' => wp_create_nonce( 'tgmpa-deactivate' ),
                    ),
                    admin_url( 'admin.php?page=theme-welcome' )
                ) ),
                $plugin['sanitized_plugin']
            );
        }

        return $actions;
    }
}

return new saturnthemes_financebank_Admin();

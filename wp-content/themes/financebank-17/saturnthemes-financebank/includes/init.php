<?php
define( 'SaturnThemes_THEME', 'Finance Bank' );

$include_path = SaturnThemes_FINANCEBANK_THEME_DIR . 'includes/';

require_once( $include_path . 'tf.php' );
require_once( $include_path . 'variables.php' );
require_once( $include_path . 'plugin-registration.php' );
require_once( $include_path . 'customizer/customizer.php' );
require_once( $include_path . 'metabox.php' );
require_once( $include_path . 'vc.php' );
require_once( $include_path . 'import.php' );
require_once( $include_path . 'widgets-registration.php' );
require_once( $include_path . 'widget.php' );
require_once( $include_path . 'template-tags.php' );
require_once( $include_path . 'extras.php' );
require_once( $include_path . 'breadcrumb.php' );
require_once( $include_path . 'custom-js.php' );
require_once( $include_path . 'post-format.php' );
require_once( $include_path . 'image-size.php' );
require_once( $include_path . 'assets.php' );
require_once( $include_path . 'jetpack.php' );
require_once( $include_path . 'woocommerce.php' );
require_once( $include_path . 'testimonial.php' );

if ( ! isset( $content_width ) ) {
    $content_width = 1170;
}

if ( ! function_exists( 'saturnthemes_financebank_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function saturnthemes_financebank_setup() {
        load_theme_textdomain( 'saturnthemes-financebank', get_template_directory() . '/languages' );

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        /*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
        add_theme_support( 'title-tag' );

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus( array(
                                'primary'           => esc_html__( 'Main Menu', 'saturnthemes-financebank' ),
                                'social'            => esc_html__( 'Social Profile Links', 'saturnthemes-financebank' ),
                            ) );

        /*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );

        /*
		 * Enable support for Post Formats.
		 * See https://developer.wordpress.org/themes/functionality/post-formats/
		 */
        add_theme_support( 'post-formats', array(
            'aside',
            'image',
            'video',
            'quote',
            'gallery',
        ) );

        // Set up the WordPress core custom background feature.
        add_theme_support( 'custom-background', apply_filters( '_s_custom_background_args', array(
            'default-color'    => 'ffffff',
            'default-image'    => '',
            'wp-head-callback' => 'saturnthemes_financebank_custom_background_cb',
        ) ) );

        add_theme_support( 'woocommerce' );

        // Support shortcode in widget
        add_filter( 'widget_text', 'do_shortcode' );
    }
endif; // saturnthemes_financebank_setup
add_action( 'after_setup_theme', 'saturnthemes_financebank_setup' );
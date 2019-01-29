<?php
/**
 * SaturnThemes Theme Customizer
 *
 * @package SaturnThemes
 */

/**
 * Remove Default Sections
 */
function saturnthemes_financebank_remove_customizer_sections( $wp_customize ) {
    $wp_customize->remove_section( 'header_image' );
}

add_action( 'customize_register', 'saturnthemes_financebank_remove_customizer_sections' );

/**
 * Setting Customizer
 */

Kirki::add_config( 'saturnthemes', array(
    'options_type' => 'theme_mod',
    'capability'   => 'edit_theme_options',
) );

$panel_priority = 0;
$panels = apply_filters( 'saturnthemes_financebank_customizer_panels', array(
    'site' => array(
        'title'       => esc_html__('General Settings', 'saturnthemes-financebank' ),
        'priority'    => 1,
    ),
    'header' => array(
        'title'       => esc_html__('Header Settings', 'saturnthemes-financebank' ),
        'priority'    => 2,
    ),
    'footer' => array(
        'title'       => esc_html__('Footer Settings', 'saturnthemes-financebank' ),
        'priority'    => 3,
    ),
    'woocommerce' => array(
        'title'       => esc_html__('Woocommerce Settings', 'saturnthemes-financebank' ),
        'priority'    => 4,
    ),
    'post' => array(
        'title'       => esc_html__('Post Settings', 'saturnthemes-financebank' ),
        'priority'    => 5,
    ),
    'service' => array(
	    'title'       => esc_html__('Service Settings', 'saturnthemes-financebank' ),
	    'priority'    => 6,
    ),
    'staff' => array(
        'title'       => esc_html__('Staff Settings', 'saturnthemes-financebank' ),
        'priority'    => 7,
    ),
) );

$section_priority = 0;
$sections = apply_filters( 'saturnthemes_financebank_customizer_sections', array(
    //Site
    'site_layout' => array(
        'title'       => esc_html__('Theme Layout', 'saturnthemes-financebank' ),
        'panel'       => 'site',
        'priority'    => $section_priority++,
    ),
    'site_logo' => array(
        'title'       => esc_html__('Logo and Icons', 'saturnthemes-financebank' ),
        'panel'       => 'site',
        'priority'    => $section_priority++,
    ),
    'site_font' => array(
        'title'       => esc_html__('Typography', 'saturnthemes-financebank' ),
        'panel'       => 'site',
        'priority'    => $section_priority++,
    ),
    'site_style' => array(
        'title'       => esc_html__('Colors', 'saturnthemes-financebank' ),
        'panel'       => 'site',
        'priority'    => $section_priority++,
    ),
    'site_page_title' => array(
	    'title'       => esc_html__('Page Title', 'saturnthemes-financebank' ),
	    'panel'       => 'site',
	    'priority'    => $section_priority++,
    ),
    'site_breadcrumb' => array(
        'title'       => esc_html__('Breadcrumb', 'saturnthemes-financebank' ),
        'panel'       => 'site',
        'priority'    => $section_priority++,
    ),
    'site_social_network' => array(
	    'title'       => esc_html__('Social Networks', 'saturnthemes-financebank' ),
	    'panel'       => 'site',
	    'priority'    => $section_priority++,
    ),
    'site_back_to_top' => array(
	    'title'       => esc_html__('Back to Top', 'saturnthemes-financebank' ),
	    'panel'       => 'site',
	    'priority'    => $section_priority++,
    ),

	//Header
    'header_preset' => array(
        'title'       => esc_html__('Preset', 'saturnthemes-financebank' ),
        'panel'       => 'header',
        'priority'    => $section_priority++,
    ),
    'header_type' => array(
        'title'       => esc_html__('General', 'saturnthemes-financebank' ),
        'panel'       => 'header',
        'priority'    => $section_priority++,
    ),
    'header_top_bar' => array(
        'title'       => esc_html__('Top Bar', 'saturnthemes-financebank' ),
        'panel'       => 'header',
        'priority'    => $section_priority++,
    ),
    'header_primary_menu' => array(
        'title'       => esc_html__( 'Primary Menu', 'saturnthemes-financebank' ),
        'panel'       => 'header',
        'priority'    => $section_priority++,
    ),
    'header_menu_dropdown' => array(
        'title'       => esc_html__( 'Sub Menu', 'saturnthemes-financebank' ),
        'panel'       => 'header',
        'priority'    => $section_priority++,
    ),
    'header_request_a_quote' => array(
	    'title'       => esc_html__( 'Request A Quote', 'saturnthemes-financebank' ),
	    'panel'       => 'header',
	    'priority'    => $section_priority++,
    ),
    'header_contact_details' => array(
	    'title'       => esc_html__( 'Contact Details', 'saturnthemes-financebank' ),
	    'panel'       => 'header',
	    'priority'    => $section_priority++,
    ),
    'header_social_icons' => array(
	    'title'       => esc_html__( 'Social Icons', 'saturnthemes-financebank' ),
	    'panel'       => 'header',
	    'priority'    => $section_priority++,
    ),

    //Post
    'post_archives' => array(
        'title'       => esc_html__('Post Archives', 'saturnthemes-financebank' ),
        'panel'       => 'post',
        'priority'    => $section_priority++,
    ),
    'post_single' => array(
        'title'       => esc_html__('Single Post', 'saturnthemes-financebank' ),
        'panel'       => 'post',
        'priority'    => $section_priority++,
    ),

	// Service
    'service_archives' => array(
	    'title'       => esc_html__('Service Archives', 'saturnthemes-financebank' ),
	    'panel'       => 'service',
	    'priority'    => $section_priority++,
    ),

    // Staff
    'staff_archives' => array(
        'title'       => esc_html__('Staff Archives', 'saturnthemes-financebank' ),
        'panel'       => 'staff',
        'priority'    => $section_priority++,
    ),

    //Page
    'page' => array(
        'title'       => esc_html__('Page Settings', 'saturnthemes-financebank' ),
        'priority'    => $section_priority++,
    ),

    //Footer
    'footer_preset' => array(
        'title'       => esc_html__('Preset', 'saturnthemes-financebank' ),
        'panel'       => 'footer',
        'priority'    => $section_priority++,
    ),
    'footer_general' => array(
        'title'       => esc_html__('General', 'saturnthemes-financebank' ),
        'panel'       => 'footer',
        'priority'    => $section_priority++,
    ),
    'footer_copyright' => array(
        'title'       => esc_html__('Copyright', 'saturnthemes-financebank' ),
        'panel'       => 'footer',
        'priority'    => $section_priority++,
    ),
    'footer_social_icon' => array(
	    'title'       => esc_html__('Social Icons', 'saturnthemes-financebank' ),
	    'panel'       => 'footer',
	    'priority'    => $section_priority++,
    ),

    //Woocommerce
    'woocommerce_archives' => array(
        'title'       => esc_html__('Product Archives', 'saturnthemes-financebank'),
        'panel'       => 'woocommerce',
        'priority'    => $section_priority++,
    ),
    'woocommerce_single' => array(
        'title'       => esc_html__('Single Product', 'saturnthemes-financebank'),
        'panel'       => 'woocommerce',
        'priority'    => $section_priority++,
    ),

    //Custom Code
    'custom_code' => array(
        'title'       => esc_html__('Custom Code', 'saturnthemes-financebank' ),
        'priority'    => $section_priority++,
    ),
) );

foreach ( $panels as $panel_id => $panel ) {
    Kirki::add_panel( $panel_id, $panel );
}

foreach ( $sections as $section_id => $section ) {
    Kirki::add_section( $section_id, $section );
}

/**
 * Include settings
 * ================
 */
//Site
require_once( SaturnThemes_FINANCEBANK_THEME_DIR . 'includes/customizer/settings/site/site_layout.php' );
require_once( SaturnThemes_FINANCEBANK_THEME_DIR . 'includes/customizer/settings/site/site_logo.php' );
require_once( SaturnThemes_FINANCEBANK_THEME_DIR . 'includes/customizer/settings/site/site_font.php' );
require_once( SaturnThemes_FINANCEBANK_THEME_DIR . 'includes/customizer/settings/site/site_style.php' );
require_once( SaturnThemes_FINANCEBANK_THEME_DIR . 'includes/customizer/settings/site/page-title.php' );
require_once( SaturnThemes_FINANCEBANK_THEME_DIR . 'includes/customizer/settings/site/site_breadcrumb.php' );
require_once( SaturnThemes_FINANCEBANK_THEME_DIR . 'includes/customizer/settings/site/social-networks.php' );
require_once( SaturnThemes_FINANCEBANK_THEME_DIR . 'includes/customizer/settings/site/back-to-top.php' );

//Header
require_once( SaturnThemes_FINANCEBANK_THEME_DIR . 'includes/customizer/settings/header/preset.php' );
require_once( SaturnThemes_FINANCEBANK_THEME_DIR . 'includes/customizer/settings/header/header_general.php' );
require_once( SaturnThemes_FINANCEBANK_THEME_DIR . 'includes/customizer/settings/header/header_search.php' );
require_once( SaturnThemes_FINANCEBANK_THEME_DIR . 'includes/customizer/settings/header/top-bar.php' );
require_once( SaturnThemes_FINANCEBANK_THEME_DIR . 'includes/customizer/settings/header/primary-menu.php' );
require_once( SaturnThemes_FINANCEBANK_THEME_DIR . 'includes/customizer/settings/header/menu-dropdown.php' );
require_once( SaturnThemes_FINANCEBANK_THEME_DIR . 'includes/customizer/settings/header/request-a-quote.php' );
require_once( SaturnThemes_FINANCEBANK_THEME_DIR . 'includes/customizer/settings/header/contact-details.php' );
require_once( SaturnThemes_FINANCEBANK_THEME_DIR . 'includes/customizer/settings/header/social-icons.php' );

//Woocommerce
require_once( SaturnThemes_FINANCEBANK_THEME_DIR . 'includes/customizer/settings/woocommerce/archives.php' );
require_once( SaturnThemes_FINANCEBANK_THEME_DIR . 'includes/customizer/settings/woocommerce/single.php' );

//Post
require_once( SaturnThemes_FINANCEBANK_THEME_DIR . 'includes/customizer/settings/post/archives.php' );
require_once( SaturnThemes_FINANCEBANK_THEME_DIR . 'includes/customizer/settings/post/single.php' );

//Service
require_once( SaturnThemes_FINANCEBANK_THEME_DIR . 'includes/customizer/settings/service/archives.php' );

//Staff
require_once( SaturnThemes_FINANCEBANK_THEME_DIR . 'includes/customizer/settings/staff/archives.php' );

//Page
require_once( SaturnThemes_FINANCEBANK_THEME_DIR . 'includes/customizer/settings/page.php' );

//Footer
require_once( SaturnThemes_FINANCEBANK_THEME_DIR . 'includes/customizer/settings/footer/footer_preset.php' );
require_once( SaturnThemes_FINANCEBANK_THEME_DIR . 'includes/customizer/settings/footer/footer_general.php' );
require_once( SaturnThemes_FINANCEBANK_THEME_DIR . 'includes/customizer/settings/footer/footer_copyright.php' );
require_once( SaturnThemes_FINANCEBANK_THEME_DIR . 'includes/customizer/settings/footer/social-icon.php' );

//Custom Code
require_once( SaturnThemes_FINANCEBANK_THEME_DIR . 'includes/customizer/settings/custom_code.php' );

function saturnthemes_financebank_custom_background_cb() {
    // $background is the saved custom image, or the default image.
    $background = set_url_scheme( get_background_image() );

    if ( is_page() ) {
        $_background_image      = get_post_meta( get_the_ID(), 'saturnthemes_financebank_background_image', true );
        $_background_position   = get_post_meta( get_the_ID(), 'saturnthemes_financebank_background_position', true );
        $_background_repeat     = get_post_meta( get_the_ID(), 'saturnthemes_financebank_background_repeat', true );
        $_background_attachment = get_post_meta( get_the_ID(), 'saturnthemes_financebank_background_attachment', true );


        if ( $_background_image ) {
            $background = $_background_image;
        }
    }

    // $color is the saved custom color.
    // A default has to be specified in style.css. It will not be printed here.
    $color = get_background_color();

    if ( $color === get_theme_support( 'custom-background', 'default-color' ) ) {
        $color = false;
    }

    if ( ! $background && ! $color )
        return;

    $style = $color ? "background-color: #$color;" : '';

    if ( $background ) {
        $image = " background-image: url('$background');";

        $repeat = ( ! empty( $_background_image ) && ! empty( $_background_repeat ) ) ? $_background_repeat : get_theme_mod( 'background_repeat', get_theme_support( 'custom-background', 'default-repeat' ) );
        if ( ! in_array( $repeat, array( 'no-repeat', 'repeat-x', 'repeat-y', 'repeat' ) ) )
            $repeat = 'repeat';
        $repeat = " background-repeat: $repeat;";

        if ( ! empty( $_background_image ) && ! empty( $_background_position ) ) {
            $position = ' background-position: ' . $_background_position . ';';
        } else {
            $position = get_theme_mod( 'background_position_x', get_theme_support( 'custom-background', 'default-position-x' ) );
            if ( ! in_array( $position, array( 'center', 'right', 'left' ) ) )
                $position = 'left';
            $position = " background-position: top $position;";
        }

        if ( ! empty( $_background_image ) && ! empty( $_background_attachment ) ) {
            $attachment = ' background-attachment: ' . $_background_attachment . ';';
        } else {
            $attachment = get_theme_mod( 'background_attachment', get_theme_support( 'custom-background', 'default-attachment' ) );
            if ( ! in_array( $attachment, array( 'fixed', 'scroll' ) ) )
                $attachment = 'scroll';
            $attachment = " background-attachment: $attachment;";
        }

        $style .= $image . $repeat . $position . $attachment;
    }
    ?>
    <style type="text/css" id="custom-background-css">
        body.custom-background { <?php echo trim( $style ); ?> }
    </style>
    <?php
}

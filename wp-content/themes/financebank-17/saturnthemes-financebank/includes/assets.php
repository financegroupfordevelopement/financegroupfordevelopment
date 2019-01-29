<?php
function saturnthemes_financebank_scripts() {
    wp_enqueue_style( 'pe-icon-7-stroke', SaturnThemes_FINANCEBANK_THEME_URL . '/assets/lib/pe-icon-7-stroke/css/pe-icon-7-stroke.css' );
    wp_enqueue_style( 'pe-icon-7-stroke', SaturnThemes_FINANCEBANK_THEME_URL . '/assets/lib/pe-icon-7-stroke/css/helper.css' );

    wp_enqueue_style( 'font-awesome', SaturnThemes_FINANCEBANK_THEME_URL . '/assets/lib/font-awesome/css/font-awesome.min.css' );

    // Slide Menu
    wp_enqueue_script( 'slide-menu', SaturnThemes_FINANCEBANK_THEME_URL . '/assets/lib/slide-menu.js', array( 'jquery' ), null, true );

    // Slick
    wp_enqueue_style( 'slick', SaturnThemes_FINANCEBANK_THEME_URL . '/assets/lib/slick/slick.css' );
    wp_enqueue_style( 'slick-theme', SaturnThemes_FINANCEBANK_THEME_URL . '/assets/lib/slick/slick-theme.css' );
    wp_enqueue_script( 'slick', SaturnThemes_FINANCEBANK_THEME_URL . '/assets/lib/slick/slick.min.js', array( 'jquery' ), null, true );

    // Magnific Popup
    wp_enqueue_style( 'magnific-popup', SaturnThemes_FINANCEBANK_THEME_URL . '/assets/lib/magnific-popup/magnific-popup.css' ); // @todo: merged into theme?
    wp_enqueue_script( 'magnific-popup', SaturnThemes_FINANCEBANK_THEME_URL . '/assets/lib/magnific-popup/jquery.magnific-popup.min.js', array( 'jquery' ), null, true );

    // Swipebox
    wp_enqueue_style( 'swipebox', SaturnThemes_FINANCEBANK_THEME_URL . '/assets/lib/swipebox/css/swipebox.css', array(), null );
    wp_enqueue_script( 'swipebox', SaturnThemes_FINANCEBANK_THEME_URL . '/assets/lib/swipebox/js/jquery.swipebox.js', array( 'jquery' ), '20150330', true );

    // Bootstrap
    wp_enqueue_script( 'bootstrap', SaturnThemes_FINANCEBANK_THEME_URL . '/assets/lib/bootstrap/bootstrap.min.js', array( 'jquery' ), null, true );

    // Count Down
    wp_enqueue_script( 'jquery-countdown', SaturnThemes_FINANCEBANK_THEME_URL . '/assets/lib/countdown/jquery.countdown.js', array( 'jquery' ), null, true );

    // Count Up
    wp_register_script( 'jquery-count-up', SaturnThemes_FINANCEBANK_THEME_URL . '/assets/lib/countUp/countUp.min.js', array( 'jquery' ), null, true );

    wp_enqueue_script( 'jquery-wow', SaturnThemes_FINANCEBANK_THEME_URL . '/assets/lib/wow.js', array( 'jquery' ), null, true );

    wp_enqueue_script( 'jquery-imagesLoaded', SaturnThemes_FINANCEBANK_THEME_URL . '/assets/lib/imagesloaded/imagesloaded.pkgd.min.js', array( 'jquery' ), null, true );
    wp_enqueue_script( 'jquery-fitvids', SaturnThemes_FINANCEBANK_THEME_URL . '/assets/lib/fitvids/fitvids.js', array( 'jquery' ), null, true );

    // Google Maps
    wp_register_script( 'googleapis', 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&key=AIzaSyDYfrYOr3OPqxBwrdmEtkQ3GAjvq9WJmsE', array(), null , false );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

    wp_enqueue_style( 'saturnthemes-style', SaturnThemes_FINANCEBANK_THEME_URL . '/style.css' );
    wp_enqueue_style( 'saturnthemes', SaturnThemes_FINANCEBANK_THEME_URL . '/assets/css/style.css' );

    wp_enqueue_script( 'saturnthemes-js-main', SaturnThemes_FINANCEBANK_THEME_URL . '/assets/js/script.js', array( 'jquery' ), null, true );
    wp_localize_script( 'saturnthemes-js-main', 'saturnthemes_financebank_params', array(
        'ajax_url'         => esc_js( admin_url( 'admin-ajax.php' ) ),
        'wc_ajax_url'      => class_exists( 'WooCommerce' ) && version_compare( WC_VERSION, '2.4', '>=' ) ? WC_AJAX::get_endpoint( "%%endpoint%%" ) : '',
        'i18n_days'        => __( 'Days', 'saturnthemes-financebank' ),
        'i18n_hours'       => __( 'Hours', 'saturnthemes-financebank' ),
        'i18n_mins'        => __( 'Mins', 'saturnthemes-financebank' ),
        'i18n_secs'        => __( 'Secs', 'saturnthemes-financebank' ),
        'promo_popup_show' => Kirki::get_option( 'saturnthemes', 'promo_popup_show' ),
    ) );
}

add_action( 'wp_enqueue_scripts', 'saturnthemes_financebank_scripts' );

/**
 * Setup custom css.
 */
function saturnthemes_financebank_custom_css() {
    $saturnthemes_financebank_custom_css = Kirki::get_option( 'saturnthemes', 'custom_css' );
    wp_add_inline_style( 'saturnthemes', wp_specialchars_decode( $saturnthemes_financebank_custom_css, ENT_QUOTES ) );
}

add_action( 'wp_enqueue_scripts', 'saturnthemes_financebank_custom_css' );
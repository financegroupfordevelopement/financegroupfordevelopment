<?php function saturnthemes_financebank_js_custom_code() {
    $custom_js = Kirki::get_option( 'saturnthemes', 'custom_js' );
    if ( stripos( $custom_js, '<script' ) === false ) {
        $custom_js = '<script>' . $custom_js . '</script>';
    }
    ?>

    <?php echo wp_specialchars_decode( $custom_js ); ?>
<?php }

add_action( 'wp_footer', 'saturnthemes_financebank_js_custom_code' );

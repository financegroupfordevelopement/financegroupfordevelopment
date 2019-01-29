<?php
add_filter( 'body_class', 'saturnthemes_financebank_body_class' );
function saturnthemes_financebank_body_class( $classes ) {
	$classes[] = saturnthemes_financebank_get_page_layout();

	// Sidebar
	if ( saturnthemes_financebank_get_sidebar_position() != 'no-sidebar' && is_active_sidebar( saturnthemes_financebank_get_sidebar() ) ) {
		$classes[] = 'layout-has-sidebar';
	}

    if ( is_page() && get_post_meta( get_the_ID(), 'saturnthemes_financebank_background_image', true ) ) {
        $classes[] = 'custom-background';
    }

  $saturnthemes_core = SaturnThemesC();
  if ( $saturnthemes_core->get( 'saturnthemes_financebank_content_layout' ) == 'boxed' ) {
    $classes[] = 'boxed';
  }

    return $classes;
}

function saturnthemes_financebank_get_taxonomies( $content_type ) {
    $taxonomies = get_taxonomies( array( 'object_type' => array( $content_type ) ), 'names', 'and');
    return $taxonomies;
}

/**
 * Social links
 * @param bool|false $mobile
 */
function saturnthemes_financebank_social_links() {
    $social_links = Kirki::get_option( 'saturnthemes', 'social_links' );

    if ( ! empty( $social_links ) ) {
        ?>
        <ul class="social-links">
            <?php foreach ( $social_links as $row ) { ?>
                <li <?php echo ( empty( $row['link_url'] ) ? 'class="text"' : ''); ?>>
                    <?php if ( isset( $row['link_url'] ) && ! empty( $row['link_url'] ) ) { ?>
                    <a href="<?php echo esc_url_raw( $row['link_url'] ); ?>"><?php } ?>
                        <?php echo esc_html( $row['social_name'] ); ?>
                        <?php if ( isset( $row['link_url'] ) && ! empty( $row['link_url'] ) ) { ?></a><?php } ?>
                </li>
            <?php } ?>
        </ul>
        <?php
    }
}

//Remove CSS font-size from Widget Tag Cloud.
add_filter('wp_generate_tag_cloud', 'saturnthemes_tag_cloud',10,3);

function saturnthemes_tag_cloud($tag_string){
    return preg_replace("/style='font-size:.+pt;'/", '', $tag_string);
}

/**
 * Position Author
 */
if ( ! function_exists( 'saturnthemes_financebank_contactmethods' ) ) :

    function saturnthemes_financebank_contactmethods( $contactmethods ) {

        $contactmethods['position']   = 'Position';

        return $contactmethods;
    }
endif;
add_filter('user_contactmethods','saturnthemes_financebank_contactmethods',10,1);

function saturnthemes_financebank_get_custom_sidebar_options() {
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

	return $sidebar_options;
}
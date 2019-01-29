<?php
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$el_class = $this->getExtraClass( $el_class );
$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts );

$classes = array( 'staff-grid-container' );

$classes[] = $css_class;
if ( $el_class ) {
    $classes[] = $el_class;
}

$classes = implode( ' ', $classes );

$staff_query = new WP_Query( array( 'post_type' => 'staff', 'posts_per_page' => $per_page ) );
$saturnthemes_financebank_per_row = $per_page;
?>
<div class="<?php echo esc_attr( $classes ); ?>">
    <?php if ( $staff_query->have_posts() ) : ?>
        <?php $saturnthemes_offset = $staff_query->post_count % $saturnthemes_financebank_per_row == 0 ? $staff_query->post_count - $saturnthemes_financebank_per_row : $staff_query->post_count - $staff_query->post_count % $saturnthemes_financebank_per_row; ?>
        <div class="row">
            <?php while ( $staff_query->have_posts() ) : $staff_query->the_post(); ?>
                <div class="col-md-<?php echo esc_attr( 12 / $saturnthemes_financebank_per_row ); ?> <?php echo esc_attr( $staff_query->current_post >= $saturnthemes_offset && $staff_query->current_post < $staff_query->post_count ? 'staff-last-row' : '' ); ?>">
                    <?php get_template_part( 'template-parts/staff', 'grid' ); ?>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
</div>
<?php wp_reset_postdata(); ?>
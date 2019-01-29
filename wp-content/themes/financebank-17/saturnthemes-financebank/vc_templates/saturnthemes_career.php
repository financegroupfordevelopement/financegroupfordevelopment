<?php
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$el_class = $this->getExtraClass( $el_class );
$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts );

$classes = array( 'saturnthemes-career' );

$classes[] = $css_class;

if ( $el_class ) {
	$classes[] = $el_class;
}

$link = ( '||' === $link ) ? '' : $link;
$link = vc_build_link( $link );

$apply_link = ( '||' === $apply_link ) ? '' : $apply_link;
$apply_link = vc_build_link( $apply_link );

$classes = implode( ' ', $classes );
?>
<div class="<?php echo esc_attr( $classes ); ?>">
    <h3 class="career-title">
        <?php if ( $link ) : ?>
            <a href="<?php echo esc_url( $link['url'] ); ?>" title="<?php echo esc_attr( $link['title'] ); ?>" target="<?php echo esc_attr( $link['target'] ); ?>">
        <?php endif; ?>
            <?php echo esc_html( $title ); ?>
        <?php if ( $link ) : ?>
            </a>
        <?php endif; ?>
    </h3>
    <div class="career-desc"><?php echo wp_kses_post( $short_description ); ?></div>
    <div class="career-apply-container">
        <a href="<?php echo esc_url( $apply_link['url'] ); ?>" title="<?php echo esc_attr( $apply_link['title'] ); ?>" target="<?php echo esc_attr( $apply_link['target'] ); ?>" class="button-primary button-lg-fs career-apply"><?php echo esc_html__( 'Apply', 'saturnthemes-financebank' ); ?></a>
    </div>
</div>
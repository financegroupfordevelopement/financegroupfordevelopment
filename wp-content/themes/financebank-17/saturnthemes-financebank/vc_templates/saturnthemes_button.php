<?php
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$el_class = $this->getExtraClass( $el_class );
$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts );

$classes = array( 'saturnthemes-button' );

$classes[] = 'button-' . $button_type;
$classes[] = $css_class;

if ($has_arrow) {
    $classes[] = 'button-icon';
}

if ( $el_class ) {
	$classes[] = $el_class;
}

$classes = implode( ' ', $classes );

$link = ( '||' === $link ) ? '' : $link;
$link = vc_build_link( $link );
?>
<?php if ( $link ) : ?>
    <a href="<?php echo esc_url( $link['url'] ) ?>" title="<?php echo esc_attr( $link['title'] ); ?>" target="<?php echo esc_attr( $link['target'] ); ?>" class="<?php echo esc_attr( $classes ); ?>"><?php echo esc_html( $text ); ?></a>
<?php else : ?>
    <span class="<?php echo esc_attr( $classes ); ?>"><?php echo esc_html( $text ); ?></span>
<?php endif; ?>

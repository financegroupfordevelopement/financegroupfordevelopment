<?php
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$el_class = $this->getExtraClass( $el_class );
$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts );

$classes = array( 'company-history' );

$classes[] = $css_class;
if ( $el_class ) {
	$classes[] = $el_class;
}
$years = (array) vc_param_group_parse_atts( $years );
?>
<div class="<?php echo esc_attr( implode( ' ', $classes ) ); ?>">
	<?php if ( ! empty( $years ) ) : ?>
		<?php foreach ( $years as $year ) : ?>
			<div class="company-history-item">
				<span class="company-history-year primary-background-color"><?php echo esc_html( $year['year'] ); ?></span>
				<h5 class="company-history-title"><?php echo esc_html( $year['title'] ) ?></h5>
				<div class="company-history-content"><?php echo esc_html( $year['history'] ); ?></div>
			</div>
		<?php endforeach; ?>
	<?php endif; ?>
</div>
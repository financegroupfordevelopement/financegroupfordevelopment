<?php
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$el_class = $this->getExtraClass( $el_class );
$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts );

$classes = array( 'contact-details' );

$classes[] = $css_class;
if ( $el_class ) {
	$classes[] = $el_class;
}
?>
<div class="<?php echo esc_attr( implode( ' ', $classes ) ); ?>">
	<ul>
		<?php if ( $location ) : ?>
			<li><i class="fa fa-map-marker"></i> <?php echo esc_html( $location ); ?></li>
		<?php endif; ?>
		<?php if ( $phone_number ) : ?>
			<li><i class="fa fa-phone"></i> <?php echo esc_html( $phone_number ); ?></li>
		<?php endif; ?>
		<?php if ( $email ) : ?>
			<li><i class="fa fa-envelope-o"></i> <?php echo esc_html( $email ); ?></li>
		<?php endif; ?>
		<?php if ( $url ) : ?>
			<li><i class="fa fa-globe"></i> <a href="<?php echo esc_url( $url ); ?>" class="body-color"><?php echo esc_html( $url ); ?></a></li>
		<?php endif; ?>
	</ul>
</div>
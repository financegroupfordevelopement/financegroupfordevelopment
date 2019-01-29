<?php
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$el_class = $this->getExtraClass( $el_class );
$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts );

$classes = array( 'contact-social-icons' );

$classes[] = $css_class;
if ( $el_class ) {
	$classes[] = $el_class;
}
?>
<div class="<?php echo esc_attr( implode( ' ', $classes ) ); ?>">
	<ul>
		<?php if ( $facebook ) : ?>
			<li>
				<a class="contact-social-icon contact-social-icon-facebook" href="<?php echo esc_url( $facebook ); ?>" target="_blank">
					<i class="fa fa-facebook-square"></i>
				</a>
			</li>
		<?php endif; ?>
		<?php if ( $twitter ) : ?>
			<li>
				<a class="contact-social-icon contact-social-icon-twitter" href="<?php echo esc_url( $twitter ); ?>" target="_blank">
					<i class="fa fa-twitter-square"></i>
				</a>
			</li>
		<?php endif; ?>
		<?php if ( $intagram ) : ?>
			<li>
				<a class="contact-social-icon contact-social-icon-instagram" href="<?php echo esc_url( $instagram ) ?>" target="_blank">
					<i class="fa fa-instagram"></i>
				</a>
			</li>
		<?php endif; ?>
		<?php if ( $google_plus ) : ?>
			<li>
				<a class="contact-social-icon contact-social-icon-google-plus" href="<?php echo esc_url( $google_plus ); ?>" target="_blank">
					<i class="fa fa-google-plus-square"></i>
				</a>
			</li>
		<?php endif; ?>
	</ul>
</div>
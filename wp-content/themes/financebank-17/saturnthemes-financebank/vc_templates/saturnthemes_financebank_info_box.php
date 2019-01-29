<?php
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$el_class = $this->getExtraClass( $el_class );
$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts );

$classes = array( 'info-box' );

$classes[] = $style;
$classes[] = $css_class;
if ( $el_class ) {
	$classes[] = $el_class;
}

$link_open_html = '';
$link_end_html = '';

if ( 'none' != $read_more ) {
	$url = vc_build_link( $link );
	$link_open_html = '<a href="' . esc_attr( $url['url'] ) . '" title="' . esc_attr( $url['title'] ) . '" target="' . ( strlen( $url['target'] ) > 0 ? esc_attr( $url['target'] ) : '_self' ) . '">';
	$link_end_html = '</a>';
}
?>
<div class="<?php echo esc_attr( implode( ' ', $classes ) ); ?>">
	<?php if ( 'box' == $read_more ) : ?>
		<?php echo '' . $link_open_html; ?>
	<?php endif; ?>

	<?php if ( $image ) : ?>
		<div class="info-box-image">
			<?php $image_data = wpb_getImageBySize( array(
				'attach_id' => $image,
				'thumb_size' => 'full',
			) );
			echo $image_data['thumbnail'];
			?>
		</div>
	<?php endif; ?>

	<div class="info-box-extra">
		<?php if ( $title ) : ?>
			<h5 class="info-box-title">
				<?php if ( 'title' == $read_more ) echo '' . $link_open_html; ?>
				<?php echo '' . $title; ?>
				<?php if ( 'title' == $read_more ) echo '' . $link_end_html; ?>
			</h5>
		<?php endif; ?>

		<?php if ( $content ) : ?>
			<div class="info-box-content"><?php echo '' . $content; ?></div>
		<?php endif; ?>

		<?php if ( 'more' == $read_more ) {
			echo '<div class="info-box-read-more">' . $link_open_html . $read_text . '<i class="fa fa-chevron-right"></i>' . $link_end_html . '</div>';
		} ?>
	</div>

	<?php if ( 'box' == $read_more ) : ?>
		<?php echo '' . $link_end_html; ?>
	<?php endif; ?>
</div>
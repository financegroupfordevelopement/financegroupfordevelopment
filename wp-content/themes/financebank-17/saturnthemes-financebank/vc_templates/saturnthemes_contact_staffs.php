<?php
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$el_class = $this->getExtraClass( $el_class );
$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts );

$classes = array( 'contact-staffs' );

$classes[] = $css_class;
if ( $el_class ) {
	$classes[] = $el_class;
}

if ( $staff_ids ) {
	$staff_query = new WP_Query(array(
		'post__in' => explode( ',', $staff_ids ),
		'post_type' => 'staff',
	));
} else {
	return '';
}
?>
<?php if ( $staff_query->have_posts() ) : ?>
<div class="<?php echo esc_attr( implode( ' ', $classes ) ); ?>">
	<?php while ( $staff_query->have_posts() ) : $staff_query->the_post() ?>
		<div class="contact-staff">
			<div class="contact-staff-avatar">
				<?php
				$img = wpb_getImageBySize( array(
					'attach_id' => get_post_thumbnail_id( get_the_ID() ),
					'thumb_size' => $avatar_width,
				) );

				echo '' . $img['thumbnail'];
				?>
			</div>
			<div class="contact-staff-info">
				<h5 class="contact-staff-name"><?php the_title(); ?></h5>
				<div class="contact-staff-byline"><?php echo get_post_meta( get_the_ID(), 'saturnthemes_financebank_company', true ); ?></div>
				<div class="contact-staff-email"><?php esc_html_e( 'Email:', 'saturnthemes-financebank' ); ?> <?php echo get_post_meta( get_the_ID(), 'saturnthemes_financebank_email', true ); ?></div>
				<div class="contact-staff-phone"><?php esc_html_e( 'Phone:', 'saturnthemes-financebank' ); ?> <?php echo get_post_meta( get_the_ID(), 'saturnthemes_financebank_phone', true ); ?></div>
			</div>
		</div>
	<?php endwhile; ?>
</div>
<?php wp_reset_postdata(); endif; ?>
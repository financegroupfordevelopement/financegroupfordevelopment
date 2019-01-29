<?php
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$el_class = $this->getExtraClass( $el_class );

$css_classes = array(
	'testimonial-container',
	$style,
	$el_class,
	vc_shortcode_custom_css_class( $css ),
);

$wrapper_attributes = array();

$css_class            = preg_replace( '/\s+/', ' ', apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, implode( ' ', array_filter( $css_classes ) ), $this->settings['base'], $atts ) );
$wrapper_attributes[] = 'class="' . esc_attr( trim( $css_class ) ) . '"';

if ( 'yes' == $autoplay ) {
	$wrapper_attributes[] = 'data-autoplay="true"';
}

if ( 'yes' == $display_nav ) {
	$wrapper_attributes[] = 'data-nav="true"';
}

if ( 'yes' == $display_dots ) {
	$wrapper_attributes[] = 'data-dots="true"';
}

$wrapper_attributes[] = 'data-items="' . esc_attr( $items_per_slide ) . '"';

$output = '';
$testimonials = new WP_Query( array( 'post_type' => 'testimonial', 'posts_per_page' => - 1 ) )
?>
<div <?php echo implode( ' ', $wrapper_attributes ); ?>>
	<?php if ( $testimonials->have_posts() ): ?>
		<div class="testimonial-list">
			<?php while ( $testimonials->have_posts() ): $testimonials->the_post(); ?>
				<div class="testimonial">
					<div class="testimonial-inner">
						<?php if ( has_post_thumbnail() ): ?>
							<div class="testimonial-thumbnail">
								<?php the_post_thumbnail(); ?>
							</div>
						<?php endif; ?>
						<div class="testimonial-inner-content" style="color:<?php echo esc_attr( $text_color ); ?>">
							<?php the_excerpt(); ?>
							<h3 class="testimonial-title"><?php the_title(); ?></h3>
							<div class="testimonial-byline"><?php echo get_post_meta( get_the_ID(), '_byline', true ); ?></div>
							<div class="testimonial-company"><?php echo get_post_meta( get_the_ID(), 'saturnthemes_financebank_company', true ); ?></div>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
		<?php wp_reset_postdata(); ?>
	<?php endif; ?>
</div>
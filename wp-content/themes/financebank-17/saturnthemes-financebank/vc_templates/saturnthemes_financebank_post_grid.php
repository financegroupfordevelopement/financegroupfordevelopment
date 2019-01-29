<?php
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$query = $this->build_loop_query( $atts );

$css_class = 'post-grid ' . $style . ' ';
$attributes = array();

if ( 'carousel' == $display_type ) {
	$css_class .= 'post-grid-carousel ';
	$css_class .= $pagination_position . ' ';

	$attributes[] = 'data-items="' . esc_attr( $items_per_row ) . '"';
	if ( 'yes' == $show_arrow ) {
		$attributes[] = 'data-show-arrow="true"';
	}
	if ( 'yes' == $show_dots ) {
		$attributes[] = 'data-show-dots="true"';
	}
}

$class_to_filter = $css_class;
$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $class_to_filter, $this->settings['base'], $atts );
?>
<div class="row blog-posts <?php echo esc_attr( trim( $css_class ) ); ?>" <?php echo implode( ' ', $attributes ); ?>>
	<?php while ( $query->have_posts() ) : $query->the_post(); ?>
        <?php if ( 'style1' == $style ) : ?>

			<?php if ( 0 == $query->current_post || 1 == $query->current_post ) : ?>
	            <div class="col-md-4">
	                <?php get_template_part( 'template-parts/content', 'grid-style1' ); ?>
	            </div>
			<?php else : ?>
				<?php if ( 2 == $query->current_post ) : ?>
                    <div class="col-sm-6 col-md-4">
				<?php endif; ?>

					<?php get_template_part( 'template-parts/content', 'grid-stack' ); ?>

				<?php if ( $query->current_post == $query->post_count - 1 ) : ?>
					<?php if ( $show_more_posts ) : ?>
						<a href="<?php echo esc_url( $more_posts_url ); ?>" class="more-posts-link"><?php esc_html_e( 'More Posts', 'saturnthemes-financebank' ); ?> <i class="fa fa-chevron-right"></i></a>
					<?php endif; ?>
					</div>
				<?php endif; ?>
			<?php endif; ?>
			
        <?php endif; ?>
	<?php endwhile; ?>
</div>
<?php wp_reset_postdata(); ?>
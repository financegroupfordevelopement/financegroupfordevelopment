<article id="post-<?php the_ID(); ?>" <?php post_class( 'service-grid-item' ); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) { ?>
			<a href="<?php echo esc_url( get_permalink() ); ?>" class="post-thumbnail">
				<?php the_post_thumbnail( 'saturnthemes-financebank-service-grid' ); ?>
			</a>
		<?php } ?>
	</header>

	<div class="entry-content">
		<h2 class="entry-title">
			<?php if ( $saturnthemes_service_icon = get_post_meta( get_the_ID(), 'saturnthemes_icon', true ) ) : ?>
				<i class="<?php echo esc_attr( $saturnthemes_service_icon ) ?> primary-color"></i>
			<?php endif; ?>
			<a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
		</h2>
		<div class="post-content">
			<p><?php echo saturnthemes_financebank_string_limit_words( get_the_excerpt(), 16 ); ?>&hellip;</p>
		</div>
		<?php echo saturnthemes_financebank_read_more(); ?>
	</div>
</article>
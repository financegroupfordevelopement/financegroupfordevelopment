<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-grid-stack' ); ?>>
	<header class="entry-header">
		<h2 class="entry-title">
			<a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark" class="heading-color"><?php the_title(); ?></a>
		</h2>
		<div class="entry-meta">
			<div class="entry-meta-date">
				<?php saturnthemes_financebank_posted_on(); ?>
			</div>
			<div class="entry-meta-comment">
				<?php saturnthemes_financebank_entry_comments(); ?>
			</div>
		</div>
	</header>
</article>
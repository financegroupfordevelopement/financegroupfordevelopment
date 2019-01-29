<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-grid-style1' ); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) { ?>
			<a href="<?php echo esc_url( get_permalink() ); ?>" class="post-thumbnail">
				<?php the_post_thumbnail( 'saturnthemes-financebank-grid-style1' ); ?>
			</a>
		<?php } ?>
		<div class="entry-meta <?php echo esc_attr( ! has_post_thumbnail() ? 'entry-meta-no-image': '' ); ?>">
			<div class="entry-meta-date">
				<?php saturnthemes_financebank_posted_on(); ?>
			</div>
			<div class="entry-meta-comment">
				<?php saturnthemes_financebank_entry_comments(); ?>
			</div>
		</div>
	</header>
    <div class="entry-content">
	    <h2 class="entry-title">
		    <a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark" class="heading-color"><?php the_title(); ?></a>
	    </h2>
	    <div class="post-content">
		    <p>
			    <?php echo saturnthemes_financebank_string_limit_words( get_the_excerpt(), 16 ); ?>
		    </p>
	    </div>
	    <?php echo saturnthemes_financebank_read_more(); ?>
    </div>
</article>
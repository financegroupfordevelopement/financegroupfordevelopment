<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-grid-item' ); ?>>
    <?php if ( has_post_thumbnail() ) { ?>
        <picture class="post-img">
            <?php the_post_thumbnail( 'saturnthemes-financebank-grid-thumb' ); ?>
            <a href="<?php echo get_permalink() ?>" class="button primary-button"><i class="fa fa-share"></i><?php esc_html_e( 'Read More', 'saturnthemes-financebank' ); ?></a>
        </picture>
    <?php } ?>
    <h2 class="entry-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>

    <?php saturnthemes_financebank_posted_on(); ?>

    <div class="entry-content">
        <p><?php echo saturnthemes_financebank_string_limit_words( get_the_excerpt(), 16 ); ?>&hellip;</p>
    </div>
</article>
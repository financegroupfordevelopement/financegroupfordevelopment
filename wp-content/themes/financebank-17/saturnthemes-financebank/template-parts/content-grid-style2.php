<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-masonry-item' ); ?>>
    <?php if ( has_post_thumbnail() ) { ?>
        <picture class="post-img">
            <a href="<?php echo get_permalink() ?>"><?php the_post_thumbnail( 'saturnthemes-financebank-grid-style2' ); ?></a>
        </picture>
    <?php } ?>
    <div class="masonry-content">
        <div class="masonry-content-inner">
            <h2 class="heading style2">
                <span><?php echo '' . $title; ?></span>
            </h2>
            <h2 class="entry-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div class="entry-content">
                <p><?php echo saturnthemes_financebank_string_limit_words( get_the_excerpt(), 30 ); ?>&hellip;<a href="<?php echo get_permalink() ?>" class="more-link heading-font"><span><?php esc_html_e( 'Read More', 'saturnthemes-financebank' ); ?></span></a></p>
            </div>
        </div>
    </div>
</article>
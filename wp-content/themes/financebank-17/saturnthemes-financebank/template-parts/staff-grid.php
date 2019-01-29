<article id="post-<?php the_ID(); ?>" <?php post_class( 'staff-grid-item' ); ?>>
    <header class="entry-header">
        <?php if ( has_post_thumbnail() ) { ?>
            <a href="<?php echo esc_url( get_permalink() ); ?>" class="post-thumbnail">
                <?php the_post_thumbnail( 'saturnthemes-financebank-staff-grid' ); ?>
            </a>
        <?php } ?>
    </header>

    <div class="entry-content">
        <h2 class="entry-title">
            <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
        </h2>
        <?php if ( $saturnthemes_financebank_company = get_post_meta( get_the_ID(), 'saturnthemes_financebank_company', true ) ) : ?>
            <div class="staff-position  "><?php echo esc_html( $saturnthemes_financebank_company ); ?></div>
        <?php endif; ?>
        <div class="post-content">
            <p><?php echo saturnthemes_financebank_string_limit_words( get_the_excerpt(), 16 ); ?>&hellip;</p>
        </div>
        <?php echo sprintf( '<a href="%1$s" class="more-link secondary-color">%2$s <i class="fa fa-chevron-right"></i></a>',
            esc_url( get_permalink( get_the_ID() ) ),
            sprintf( __( 'View Profile <span class="screen-reader-text"> "%s"</span>', 'saturnthemes-financebank' ), get_the_title( get_the_ID() ) )
        ); ?>
    </div>
</article>
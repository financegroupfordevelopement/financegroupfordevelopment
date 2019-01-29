<?php
get_header();

$saturnthemes_core = SaturnThemesC();

$saturnthemes_financebank_post_layout = Kirki::get_option( 'saturnthemes', 'blog_archive_layout' );
$saturnthemes_financebank_post_archives_sidebar_position = Kirki::get_option( 'saturnthemes', 'post_archives_sidebar_position' );
$saturnthemes_financebank_big_title_color = Kirki::get_option( 'saturnthemes', 'post_archives_big_title_color' );
$saturnthemes_financebank_big_title_img = Kirki::get_option( 'saturnthemes', 'post_archives_big_title_image' );
?>
<div class="archive-box" style="background-image: url('<?php echo esc_url( $saturnthemes_financebank_big_title_img ); ?>')">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="page-title"><?php esc_html_e( 'Browsing Tag:', 'saturnthemes-financebank' ); ?><?php printf( __( '%s', 'saturnthemes-financebank' ), single_tag_title( '', false ) ); ?></h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <main id="main" class="site-main col-xs-12 <?php echo esc_attr( ( 'no-sidebar' != $saturnthemes_core->get( 'saturnthemes_financebank_sidebar_position' ) && is_active_sidebar( $saturnthemes_core->get( 'saturnthemes_financebank_sidebar' ) ) ) ? 'col-md-9' : '' ); ?>">

            <?php if ( have_posts() ) : ?>

            <?php if ( $saturnthemes_financebank_post_layout == 'masonry' ) :
            if( 'no-sidebar' == $saturnthemes_core->get( 'saturnthemes_financebank_sidebar_position' ) ) : $saturnthemes_financebank_number_of_columns_masonry = '3'; else : $saturnthemes_financebank_number_of_columns_masonry = '2'; endif;
            if( 'no-sidebar' == $saturnthemes_core->get( 'saturnthemes_financebank_sidebar_position' ) ) : $saturnthemes_financebank_number_of_padding_masonry = '21px'; else : $saturnthemes_financebank_number_of_padding_masonry = '15px'; endif;
            ?>

            <style>
                @media (min-width: 640px) and (max-width: 1023px) {
                    .grid-sizer, .post-masonry-item {
                        width: <?php echo 'calc('. '50%' .' - ' . $saturnthemes_financebank_number_of_padding_masonry . ')'; ?>;
                    }
                }
                @media only screen and (min-width: 1024px) {
                    .grid-sizer, .post-masonry-item {
                        width: <?php echo 'calc('. (100/$saturnthemes_financebank_number_of_columns_masonry) . '% ' .'- ' . $saturnthemes_financebank_number_of_padding_masonry . ')'; ?>;
                    }
                }
            </style>
            <div class="post-masonry-layout">
                <div class="grid-sizer"></div>
                <?php endif; ?>

                <?php /* Start the Loop */ ?>

                <?php while ( have_posts() ) : the_post(); ?>

                    <?php if ( $saturnthemes_financebank_post_layout == 'full' ) : ?>

                        <?php get_template_part( 'template-parts/content', get_post_format() ); ?>

                    <?php elseif ( $saturnthemes_financebank_post_layout == 'list' ) : ?>

                        <?php get_template_part( 'template-parts/content', 'list' ); ?>

                    <?php elseif ( $saturnthemes_financebank_post_layout == 'masonry' ) : ?>

                        <?php get_template_part( 'template-parts/content', 'masonry' ); ?>

                    <?php endif; ?>
                <?php endwhile; ?>

                <?php saturnthemes_financebank_paging_nav(); ?>

                <?php endif; ?>
        </main>
        <!-- #main -->
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>




<?php
/**TODO: edit search layout
 * The template for displaying search results pages.
 *
 *  @package SaturnThemes
 */

get_header(); ?>
<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <main id="main" class="site-main">

                    <?php if ( have_posts() ) : ?>

                        <div class="row">

                            <?php /* Start the Loop */ ?>

                            <?php while ( have_posts() ) : the_post(); ?>

                                <div class="col-sm-6 col-md-3">
                                    <?php get_template_part( 'template-parts/content', 'grid' ); ?>
                                </div>

                            <?php endwhile; ?>

                        </div>

                        <?php saturnthemes_financebank_paging_nav(); ?>

                    <?php else : ?>

                        <?php get_template_part( 'template-parts/content', 'none' ); ?>

                    <?php endif; ?>

                </main><!-- #main -->
            </div>
        </div>
    </div>
</div><!--.content-wrapper-->
<?php get_footer(); ?>

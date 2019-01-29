<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package SaturnThemes
 */
$saturnthemes_core = SaturnThemesC();

$saturnthemes_financebank_post_layout                    = Kirki::get_option( 'saturnthemes', 'blog_archive_layout' );
$saturnthemes_financebank_post_archives_sidebar_position = Kirki::get_option( 'saturnthemes', 'post_archives_sidebar_position' );
$saturnthemes_financebank_big_title_color                = Kirki::get_option( 'saturnthemes', 'post_archives_big_title_color' );
$saturnthemes_financebank_big_title_img                  = Kirki::get_option( 'saturnthemes', 'post_archives_big_title_image' );
get_header(); ?>
<div class="content-wrapper">
	<main class="content site-main">
		<?php if ( have_posts() ) : ?>

			<?php if ( $saturnthemes_financebank_post_layout == 'grid' ) :
				if( 'no-sidebar' == $saturnthemes_core->get( 'saturnthemes_financebank_sidebar_position ' ) ) : $saturnthemes_financebank_columns_grid = 'col-sm-6 col-md-3'; else : $saturnthemes_financebank_columns_grid = 'col-sm-6 col-md-4'; endif;
				?>
				<div class="row">
			<?php endif; ?>

			<?php /* Start the Loop */ ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php if ( $saturnthemes_financebank_post_layout == 'full' ) : ?>

					<?php get_template_part( 'template-parts/content', get_post_format() ); ?>

				<?php elseif ( $saturnthemes_financebank_post_layout == 'grid' ) : ?>
					<div class="<?php echo esc_attr( $saturnthemes_financebank_columns_grid ); ?>">
						<?php get_template_part( 'template-parts/content', 'grid-style1' ); ?>
					</div>
				<?php endif; ?>
			<?php endwhile; ?>

			<?php if ( $saturnthemes_financebank_post_layout == 'grid' ) : ?>
				</div>
			<?php endif; ?>

			<?php saturnthemes_financebank_paging_nav(); ?>

		<?php endif; ?>
	</main>
</div><!-- /.content-wrapper -->
<?php get_footer(); ?>
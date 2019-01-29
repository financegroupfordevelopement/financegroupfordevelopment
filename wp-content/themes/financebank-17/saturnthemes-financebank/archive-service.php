<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 *  @package SaturnThemes
 */
get_header();
$saturnthemes_core                         = SaturnThemesC();
$saturnthemes_financebank_sidebar_position = Kirki::get_option( 'saturnthemes', 'service_archives_sidebar_position' );
$saturnthemes_financebank_per_row          = intval( Kirki::get_option( 'saturnthemes', 'service_archives_per_row' ) );
?>
<div class="content-wrapper">
	<main class="content site-main">
		<?php if ( have_posts() ) : ?>
			<?php $saturnthemes_offset = $wp_query->post_count % $saturnthemes_financebank_per_row == 0 ? $wp_query->post_count - $saturnthemes_financebank_per_row : $wp_query->post_count - $wp_query->post_count % $saturnthemes_financebank_per_row; ?>
			<div class="row">
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="col-md-<?php echo esc_attr( 12 / $saturnthemes_financebank_per_row ); ?> <?php echo esc_attr( $wp_query->current_post >= $saturnthemes_offset && $wp_query->current_post < $wp_query->post_count ? 'service-last-row' : '' ); ?>">
						<?php get_template_part( 'template-parts/service', 'grid' ); ?>
					</div>
				<?php endwhile; ?>
			</div>
			<?php saturnthemes_financebank_paging_nav(); ?>
		<?php endif; ?>
	</main>
</div><!-- /.content-wrapper -->
<?php get_footer(); ?>
<?php
/**
 * The template for displaying all single posts.
 *
 *  @package SaturnThemes
 */
get_header();
$saturnthemes_financebank_big_title_color = Kirki::get_option( 'saturnthemes', 'post_archives_big_title_color' );
$saturnthemes_financebank_big_title_img = Kirki::get_option( 'saturnthemes', 'post_archives_big_title_image' );
?>
<div class="content-wrapper">
	<main class="content site-main">
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content' ); ?>

			<?php saturnthemes_financebank_entry_author(); ?>

			<?php saturnthemes_financebank_related_posts(); ?>

			<?php if ( comments_open() || get_comments_number() ) : comments_template(); endif; ?>

		<?php endwhile; // End of the loop. ?>
	</main>
</div><!-- /.content-wrapper -->
<?php get_footer(); ?>
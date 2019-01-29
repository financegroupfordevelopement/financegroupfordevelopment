<?php
/**
 * @package SaturnThemes
 */
get_header(); ?>
	<div class="content-wrapper">
		<main class="content site-main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'page' ); ?>
				<?php if ( comments_open() || get_comments_number() ) : comments_template(); endif; // @toto: style comment on page ?>
			<?php endwhile; ?>
		</main>
	</div><!-- /.content-wrapper -->
<?php get_footer(); ?>
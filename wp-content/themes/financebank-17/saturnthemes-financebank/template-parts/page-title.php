<?php
$saturnthemes_financebank_show_page_title = Kirki::get_option( 'saturnthemes', 'site_page_title_show' );
$saturnthemes_financebank_breadcrumb_img  = Kirki::get_option( 'saturnthemes', 'site_page_title_background' );

if ( is_front_page() && is_home() ) {

} elseif ( is_front_page() ) {
	$saturnthemes_financebank_show_page_title = get_post_meta( get_option( 'page_on_front' ), 'saturnthemes_financebank_page_title_show', true ) == 'yes';

	if ( $saturnthemes_meta_background = get_post_meta( get_option( 'page_on_front' ), 'saturnthemes_financebank_page_title_background', true ) ) {
		$saturnthemes_financebank_breadcrumb_img  = $saturnthemes_meta_background;
	}

} elseif ( is_home() ) {

	$saturnthemes_financebank_show_page_title = get_post_meta( get_option( 'page_for_posts' ), 'saturnthemes_financebank_page_title_show', true ) == 'yes';

	if ( $saturnthemes_meta_background = get_post_meta( get_option( 'page_for_posts' ), 'saturnthemes_financebank_page_title_background', true ) ) {
		$saturnthemes_financebank_breadcrumb_img  = $saturnthemes_meta_background;
	}

} else if ( is_page() ) {

	$saturnthemes_financebank_show_page_title = get_post_meta( get_the_ID(), 'saturnthemes_financebank_page_title_show', true ) == 'yes';

	if ( $saturnthemes_meta_background = get_post_meta( get_the_ID(), 'saturnthemes_financebank_page_title_background', true ) ) {
		$saturnthemes_financebank_breadcrumb_img  = $saturnthemes_meta_background;
	}

}
?>
<?php if ( $saturnthemes_financebank_show_page_title ) : ?>
	<div class="page-title" style="background-image: url('<?php echo esc_url( $saturnthemes_financebank_breadcrumb_img ); ?>')">
		<?php if ( Kirki::get_option( 'saturnthemes', 'site_page_title_overlay' ) ) : ?>
			<div class="page-title-overlay-color"></div>
			<div class="page-title-overlay"></div>
		<?php endif; ?>
		<div class="container">
			<?php if ( is_front_page() && is_home() ) : ?>
				<h1 class="header-title"><?php esc_html_e( 'Blog', 'saturnthemes-financebank' ) ?></h1>
			<?php elseif ( is_front_page() ) : ?>
				<h1 class="header-title"><?php echo get_the_title( get_option('page_on_front') ); ?></h1>
			<?php elseif ( is_home() ) : ?>
				<h1 class="header-title"><?php echo get_the_title( get_option('page_for_posts') ); ?></h1>
			<?php elseif ( function_exists( 'is_shop' ) && is_shop() ) : ?>
				<h1 class="header-title"><?php woocommerce_page_title(); ?></h1>
			<?php elseif ( is_archive() ) : ?>
				<?php if ( is_post_type_archive('service') ) : ?>
					<h1 class="header-title"><?php echo esc_html( 'Services', 'saturnthemes-financebank' ); ?></h1>
				<?php else : ?>
					<?php the_archive_title( '<h1 class="header-title">', '</h1>' ); ?>
				<?php endif; ?>
			<?php elseif ( is_page() ) : ?>
				<?php the_title( '<h1 class="header-title">', '</h1>' ); ?>
            <?php elseif ( is_search() ) : ?>
                <h1 class="header-title"><?php esc_html_e( 'Search Results', 'saturnthemes-financebank' ); ?></h1>
            <?php elseif ( is_404() ) : ?>
                <h1 class="header-title"><?php esc_html_e( 'Page not found', 'saturnthemes-financebank' ); ?></h1>
            <?php else : ?>
				<?php the_title( '<h1 class="header-title" itemprop="headline">', '</h1>' ); ?>
			<?php endif; ?>
			<?php if ( Kirki::get_option( 'saturnthemes', 'site_breadcrumb_enable' ) ) : ?>
				<div class="breadcrumbs-wrapper">
					<?php echo saturnthemes_financebank_bread_crumb( array( 'home_label' => Kirki::get_option( 'saturnthemes', 'breadcrumb_home_text' ) ) ); ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
<?php endif; ?>
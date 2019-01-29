<?php
/**
 *
 * @package SaturnThemes
 */
$saturnthemes_core = SaturnThemesC();
?>
<?php if ( 'no-sidebar' != $saturnthemes_core->get( 'saturnthemes_financebank_sidebar_position' ) && $saturnthemes_core->get( 'saturnthemes_financebank_sidebar' ) && is_active_sidebar( $saturnthemes_core->get( 'saturnthemes_financebank_sidebar' ) ) ) : ?>
	<div class="col-md-3 <?php echo esc_attr( $saturnthemes_core->get( 'saturnthemes_financebank_sidebar_position' ) ); ?>">
	    <aside class="sidebar">
	        <?php dynamic_sidebar( $saturnthemes_core->get( 'saturnthemes_financebank_sidebar' ) ); ?>
	    </aside>
	</div>
<?php endif; ?>
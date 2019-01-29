<?php
/**
 * @package SaturnThemess
 */
?>
		</div> <!-- /.col-xs-12 -->
		<?php get_sidebar(); ?>
	</div> <!-- /.row -->
</div> <!-- /.main-content -->
<footer class="site-footer <?php echo esc_attr( Kirki::get_option( 'saturnthemes', 'footer_type' ));?>">
    <?php require_once( get_template_directory() . '/footer/' . Kirki::get_option( 'saturnthemes', 'footer_type' ) . '.php' ); ?>
</footer>
</div> <!-- / .page-wrapper -->
<?php if ( Kirki::get_option( 'saturnthemes', 'site_back_top_enable' ) == 1 ) : ?>
    <a class="scrollup"><i class="fa fa-chevron-up"></i></a>
<?php endif; ?>
<?php do_action( 'saturnthemes_financebank_after_footer' ); ?>
<?php wp_footer(); ?>
</body>
</html>

<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
	<div class="footer-widget-container">
		<div class="container">
			<div class="row">
                <div class="col-sm-6 col-md-3 footer-widget footer-widget-1"><?php dynamic_sidebar( 'footer-1' ); ?></div>
                <div class="col-sm-6 col-md-3 footer-widget footer-widget-2"><?php dynamic_sidebar( 'footer-2' ); ?></div>
                <div class="col-sm-6 col-md-3 footer-widget footer-widget-3"><?php dynamic_sidebar( 'footer-3' ); ?></div>
                <div class="col-sm-6 col-md-3 footer-widget footer-widget-4"><?php dynamic_sidebar( 'footer-4' ); ?></div>
			</div>
		</div>
	</div>
<?php endif; ?>
<div class="footer-bottom">
    <div class="container">
        <div class="row row-xs-center">
            <div class="col-sm-9 col-md-6">
	            <?php if ( Kirki::get_option( 'saturnthemes', 'footer_copyright_enable' ) == 1 ) : ?>
		            <div class="copyright">
			            <?php echo wp_specialchars_decode( Kirki::get_option( 'saturnthemes', 'footer_copyright_content' ), ENT_QUOTES ); ?>
		            </div><!-- .copyright -->
	            <?php endif; ?>
            </div>
            <div class="col-sm-3 col-md-6 end-sm center-xs">
	            <ul class="footer-social-icon-list">
		            <?php if ( Kirki::get_option( 'saturnthemes', 'footer_social_icon_facebook' ) ) : ?>
						<li>
							<a class="footer-social-icon footer-social-icon-facebook" href="<?php echo esc_url( Kirki::get_option( 'saturnthemes', 'site_social_facebook' ) ) ?>" target="_blank">
								<i class="fa fa-facebook-square"></i>
							</a>
						</li>
		            <?php endif; ?>
		            <?php if ( Kirki::get_option( 'saturnthemes', 'footer_social_icon_twitter' ) ) : ?>
			            <li>
				            <a class="footer-social-icon footer-social-icon-twitter" href="<?php echo esc_url( Kirki::get_option( 'saturnthemes', 'site_social_twitter' ) ) ?>" target="_blank">
					            <i class="fa fa-twitter-square"></i>
				            </a>
			            </li>
		            <?php endif; ?>
		            <?php if ( Kirki::get_option( 'saturnthemes', 'footer_social_icon_instagram' ) ) : ?>
			            <li>
				            <a class="footer-social-icon footer-social-icon-instagram" href="<?php echo esc_url( Kirki::get_option( 'saturnthemes', 'site_social_instagram' ) ) ?>" target="_blank">
					            <i class="fa fa-instagram"></i>
				            </a>
			            </li>
		            <?php endif; ?>
		            <?php if ( Kirki::get_option( 'saturnthemes', 'footer_social_icon_google_plus' ) ) : ?>
			            <li>
				            <a class="footer-social-icon footer-social-icon-google-plus" href="<?php echo esc_url( Kirki::get_option( 'saturnthemes', 'site_social_google_plus' ) ) ?>" target="_blank">
					            <i class="fa fa-google-plus-square"></i>
				            </a>
			            </li>
		            <?php endif; ?>
	            </ul>
            </div>
        </div>
    </div>
</div>

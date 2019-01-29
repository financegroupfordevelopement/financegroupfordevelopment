<?php
$saturnthemes_financebank_menu_class = '';
$saturnthemes_financebank_logo                    = Kirki::get_option( 'saturnthemes', 'site_logo' );
$saturnthemes_financebank_logo_retina             = Kirki::get_option( 'saturnthemes', 'site_logo_retina' );
$saturnthemes_financebank_woocommerce_exists      = class_exists( 'WooCommerce' );
?>
<header id="header" class="header header-02 <?php echo esc_attr( saturnthemes_financebank_get_overlay_header() ? 'header-overlay' : '' ); ?>">
    <div class="site-topbar hidden-sm-down">
		<div class="container">
			<div class="row row-xs-center">
				<div class="col-xs-12 col-md-7">
					<ul class="header-topbar-list header-topbar-list-contact">
						<?php foreach ( (array)Kirki::get_option( 'saturnthemes', 'header_top_bar_contacts' ) as $saturnthemes_financebank_contact ) : ?>
							<li>
								<a <?php if ( $saturnthemes_financebank_contact['url'] ) : ?> href="<?php echo esc_url( $saturnthemes_financebank_contact['url'] ); ?>" <?php endif; ?>>
									<i class="header-topbar-list-icon <?php echo esc_attr( $saturnthemes_financebank_contact['icon'] ); ?>"></i>
									<span><?php echo wp_specialchars_decode( $saturnthemes_financebank_contact['information'], ENT_QUOTES ); ?></span>
								</a>
							</li>
						<?php endforeach; ?>
					</ul>
				</div>
				<div class="col-xs-12 col-md-4 end-md ">
					<ul class="header-topbar-list header-topbar-list-extra">
						<?php foreach ( (array)Kirki::get_option( 'saturnthemes', 'header_top_bar_links' ) as $saturnthemes_financebank_link ) : ?>
							<li>
								<a href="<?php esc_url( $saturnthemes_financebank_link['url'] ); ?>">
									<i class="header-topbar-list-icon <?php echo esc_attr( $saturnthemes_financebank_link['icon'] ); ?>"></i>
									<span><?php echo esc_html( $saturnthemes_financebank_link['title'] ); ?></span>
								</a>
							</li>
						<?php endforeach; ?>
					</ul>
				</div>
				<div class="col-md-1 end-md hidden-sm-down">
					<div id="header-search" class="search-type-1">
						<span id="js-search-overlay" class="fa fa-search"></span>
					</div>
				</div>
			</div>
		</div>
	</div>
    <div class="container">
        <div class="row row-xs-center hidden-sm-down">
            <?php
            if ( $saturnthemes_financebank_logo ) { ?>
                <div id="logo" class="col-xs-6 col-md-2 start-xs">
                    <?php if( is_front_page() ) : ?>
                        <h1>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?> - <?php bloginfo( 'description' ); ?>" rel="home">
                                <img src="<?php echo esc_url( $saturnthemes_financebank_logo ); ?>" <?php if ( $saturnthemes_financebank_logo_retina ) { ?> srcset="<?php echo esc_url( $saturnthemes_financebank_logo_retina ); ?> 2x" <?php } ?> alt="<?php bloginfo( 'name' ); ?>" />
                            </a>
                        </h1>
                    <?php else : ?>
                        <h2>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?> - <?php bloginfo( 'description' ); ?>" rel="home">
                                <img src="<?php echo esc_url( $saturnthemes_financebank_logo ); ?>" <?php if ( $saturnthemes_financebank_logo_retina ) { ?> srcset="<?php echo esc_url( $saturnthemes_financebank_logo_retina ); ?> 2x" <?php } ?> alt="<?php bloginfo( 'name' ); ?>" />
                            </a>
                        </h2>
                    <?php endif; ?>
                </div>
            <?php } ?>
            <div class="col-md-10">
                <ul class="header-contact-details-list">
                    <?php foreach ( (array)Kirki::get_option( 'saturnthemes', 'header_contact_details' ) as $saturnthemes_financebank_header_contact ) : ?>
                        <li>
                            <div class="header-contact-detail">
                                <i class="header-contact-detail-icon <?php echo esc_attr( $saturnthemes_financebank_header_contact['icon'] ); ?>"></i>
                                <div class="header-contact-detail-info">
                                    <div class="header-contact-detail-title"><?php echo wp_specialchars_decode( $saturnthemes_financebank_header_contact['title'], ENT_QUOTES ); ?></div>
                                    <a class="header-contact-detail-extra-info" <?php if ( $saturnthemes_financebank_header_contact['url'] ) : ?> href="<?php echo esc_url( $saturnthemes_financebank_header_contact['url'] ); ?>" <?php endif; ?>>
                                        <?php echo wp_specialchars_decode( $saturnthemes_financebank_header_contact['information'], ENT_QUOTES ); ?>
                                    </a>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <div class="row row-xs-center hidden-md-up mobile-header">
            <div class="col-xs-2 start-xs mobile-right">
                <i id="mobile-menu-toggle" class="fa fa-navicon hidden-lg-up"></i>
            </div>
            <?php
            if ( $saturnthemes_financebank_logo ) { ?>
                <div id="mobile-logo" class="col-xs-8 center-xs">

                    <?php if( is_front_page() ) : ?>
                        <h1>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?> - <?php bloginfo( 'description' ); ?>" rel="home">
                                <img src="<?php echo esc_url( $saturnthemes_financebank_logo ); ?>" <?php if ( $saturnthemes_financebank_logo_retina ) { ?> srcset="<?php echo esc_url( $saturnthemes_financebank_logo_retina ); ?> 2x" <?php } ?> alt="<?php bloginfo( 'name' ); ?>" />
                            </a>
                        </h1>
                    <?php else : ?>
                        <h2>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?> - <?php bloginfo( 'description' ); ?>" rel="home">
                                <img src="<?php echo esc_url( $saturnthemes_financebank_logo ); ?>" <?php if ( $saturnthemes_financebank_logo_retina ) { ?> srcset="<?php echo esc_url( $saturnthemes_financebank_logo_retina ); ?> 2x" <?php } ?> alt="<?php bloginfo( 'name' ); ?>" />
                            </a>
                        </h2>
                    <?php endif; ?>
                </div>
            <?php } ?>
            <div class="col-xs-2 end-xs">
                <div class="mobile-search">
                    <span class="fa fa-search"></span>
                </div>
            </div>
        </div>
        <div id="search-mobile-toggle">
            <?php echo saturnthemes_financebank_get_search_form(); ?>
            <i class="fa fa-times mobile-search mobile-search-close"></i>
        </div>
    </div>
    <div class="header-navigation-container hidden-md-down header-menu-container <?php echo esc_attr( Kirki::get_option( 'saturnthemes', 'header_sticky_enable' ) != 1 ? 'affix-disabled' : ''  ); ?>" data-spy="affix" data-offset-top="200">
        <div class="container">
            <div class="row row-xs-center">
                <div class="col-xs-12 col-md-9">
                    <div class="menu-container">
                        <div class="menu-inner">
                            <?php
                            if ( class_exists( 'saturnthemes_financebank_Type1_Walker_Nav_Menu' ) && has_nav_menu( 'primary' ) ) {
                                wp_nav_menu( array(
                                    'theme_location' => 'primary',
                                    'menu_class'     => 'menu menu-horizontal',
                                    'menu_id'        => 'primary-menu',
                                    'walker'          => new saturnthemes_financebank_Type1_Walker_Nav_Menu(),
                                ) );
                            } else {
                                wp_nav_menu( array(
                                    'theme_location' => 'primary',
                                    'menu_class'     => 'menu menu-horizontal',
                                    'menu_id'        => 'primary-menu',
                                ) );
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3">
                    <ul class="header-social-icon-list">
                        <?php if ( Kirki::get_option( 'saturnthemes', 'footer_social_icon_facebook' ) ) : ?>
                            <li>
                                <a class="header-social-icon header-social-icon-facebook" href="<?php echo esc_url( Kirki::get_option( 'saturnthemes', 'site_social_facebook' ) ) ?>" target="_blank">
                                    <i class="fa fa-facebook-square"></i>
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if ( Kirki::get_option( 'saturnthemes', 'header_social_icon_twitter' ) ) : ?>
                            <li>
                                <a class="header-social-icon header-social-icon-twitter" href="<?php echo esc_url( Kirki::get_option( 'saturnthemes', 'site_social_twitter' ) ) ?>" target="_blank">
                                    <i class="fa fa-twitter-square"></i>
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if ( Kirki::get_option( 'saturnthemes', 'header_social_icon_instagram' ) ) : ?>
                            <li>
                                <a class="header-social-icon header-social-icon-instagram" href="<?php echo esc_url( Kirki::get_option( 'saturnthemes', 'site_social_instagram' ) ) ?>" target="_blank">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if ( Kirki::get_option( 'saturnthemes', 'header_social_icon_google_plus' ) ) : ?>
                            <li>
                                <a class="header-social-icon header-social-icon-google-plus" href="<?php echo esc_url( Kirki::get_option( 'saturnthemes', 'site_social_google_plus' ) ) ?>" target="_blank">
                                    <i class="fa fa-google-plus-square"></i>
                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="full-screen-search-container">
    <a class="full-screen-search-close"><i class="fa fa-times"></i></a>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-xs-center center-xs">
                <form name="search-form" role="search" method="get" class="search-form animated" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <div class="row row-md-center">
                        <div class="col-sm-3 start-xs end-md">
                            <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'saturnthemes-financebank' ); ?></span>
                            <span class="search-label"><?php echo _x( 'Search:', 'label', 'saturnthemes-financebank' ); ?></span>
                        </div>
                        <div class="col-md-6">
                            <input type="search" class="search-field" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'saturnthemes-financebank' ); ?>" />
                        </div>
                        <div class="col-md-3 start-xs">
                            <span class="search-button">
                                <i class="fa fa-search"></i>
                                <input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'saturnthemes-financebank' ); ?>" />
                            </span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

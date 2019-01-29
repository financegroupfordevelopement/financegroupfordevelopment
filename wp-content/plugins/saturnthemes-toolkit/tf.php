<?php
if ( ! function_exists( 'saturnthemes_bb_en' ) ) {
	function saturnthemes_bb_en( $data ) {
		return base64_encode( $data );
	}
}

if ( ! function_exists( 'saturnthemes_bb_de' ) ) {
	function saturnthemes_bb_de( $data ) {
		return base64_decode( $data );
	}
}


if ( is_admin() && class_exists( 'RevSliderAdmin' ) && isset( $productAdmin ) ) {
	global $revSliderAsTheme;
	$revSliderAsTheme = true;
	remove_action( 'admin_notices', array( $productAdmin, 'addActivateNotification' ) );
}

if ( is_admin() && function_exists( 'vc_manager' ) ) {
	add_action( 'admin_print_scripts-post.php', 'saturnthemes_vc_remove_notice', 15 );
	function saturnthemes_vc_remove_notice() {
		remove_action( 'admin_notices', array( vc_manager()->license(), 'adminNoticeLicenseActivation', ) );
	}
}

if ( is_admin() ) {
	add_filter( 'vc_settings_tabs', 'saturnthemes_remove_vc_setting_tab' );

	function saturnthemes_remove_vc_setting_tab( $tabs ) {
		unset( $tabs['vc-updater'] );

		return $tabs;
	}
}

add_action( 'init', 'saturnthemes_remove_vc_tgm_update_notice' );
function saturnthemes_remove_vc_tgm_update_notice() {
	global $vc_manager;
	if ( ! empty( $vc_manager ) ) {
		$updater = $vc_manager->updater();
		remove_filter( 'upgrader_pre_download', array( $updater, 'preUpgradeFilter' ), 10 );

		remove_filter( 'pre_set_site_transient_update_plugins', array( $updater->updateManager() , 'check_update') );
	}
}

add_action( 'admin_init', 'saturnthemes_rev' );
function saturnthemes_rev() {
	update_option('revslider-valid', 'true');

	if ( function_exists( 'vc_settings' ) ) {
		vc_settings()->set( 'js_composer_purchase_code', 'activated' );
	}
}
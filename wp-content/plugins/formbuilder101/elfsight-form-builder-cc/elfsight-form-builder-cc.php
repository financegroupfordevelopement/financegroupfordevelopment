<?php
/*
Plugin Name: Elfsight Form Builder CC
Description: Collect more data from your clients through various fill-in forms
Plugin URI: https://elfsight.com/form-builder-widget/codecanyon/?utm_source=markets&utm_medium=codecanyon&utm_campaign=form-builder&utm_content=plugin-site
Version: 1.0.1
Author: Elfsight
Author URI: https://elfsight.com/?utm_source=markets&utm_medium=codecanyon&utm_campaign=form-builder&utm_content=plugins-list
*/

if (!defined('ABSPATH')) exit;


require_once('core/elfsight-plugin.php');
require_once('includes/mail.php');

$elfsight_form_builder_config_path = plugin_dir_path(__FILE__) . 'config.json';
$elfsight_form_builder_config = json_decode(file_get_contents($elfsight_form_builder_config_path), true);
$elfsight_form_builder_action_url = admin_url('admin-ajax.php');
$elfsight_form_builder_action_name = 'elfsight_form_builder_mail';
$elfsight_form_builder_recaptcha_site_key = '6LfEdU0UAAAAAE8yLA9_6xF1ss7SdjWNnYwgSuoM';

if (is_array($elfsight_form_builder_config['settings'])) {
	array_push($elfsight_form_builder_config['settings']['properties'], array(
		'id' => 'actionUrl',
		'tab' => 'settings',
		'type' => 'hidden',
		'defaultValue' => $elfsight_form_builder_action_url
	));

	array_push($elfsight_form_builder_config['settings']['properties'], array(
		'id' => 'actionName',
		'tab' => 'settings',
		'type' => 'hidden',
		'defaultValue' => $elfsight_form_builder_action_name
	));

    array_push($elfsight_form_builder_config['settings']['properties'], array(
        'id' => 'recaptchaSitekey',
        'tab' => 'settings',
        'type' => 'hidden',
        'defaultValue' => $elfsight_form_builder_recaptcha_site_key
    ));
}

require_once('includes/filters.php');


new ElfsightFormBuilderPlugin(
    array(
        'name' => 'Form Builder',
        'description' => 'Collect more data from your clients through various fill-in forms',
        'slug' => 'elfsight-form-builder',
        'version' => '1.0.1',
        'text_domain' => 'elfsight-form-builder',
        'editor_settings' => $elfsight_form_builder_config['settings'],
        'editor_preferences' => $elfsight_form_builder_config['preferences'],
        'script_url' => plugins_url('assets/elfsight-form-builder.js', __FILE__),

        'plugin_name' => 'Elfsight Form Builder',
        'plugin_file' => __FILE__,
        'plugin_slug' => plugin_basename(__FILE__),

        'vc_icon' => plugins_url('assets/img/vc-icon.png', __FILE__),

        'menu_icon' => plugins_url('assets/img/menu-icon.png', __FILE__),
        'update_url' => 'https://a.elfsight.com/updates/v1/',

        'preview_url' => plugins_url('preview/index.html', __FILE__),
        'observer_url' => plugins_url('preview/form-builder-observer.js', __FILE__),

        'product_url' => 'https://codecanyon.net/item/form-builder-wordpress-form-plugin/22496923?ref=Elfsight',
        'support_url' => 'https://elfsight.ticksy.com/submit/#100013270',
    )
);

?>
<?php

if (!defined('ABSPATH')) exit;

function elfsight_form_builder_shortcode_options_filter($options, $widget_id) {
	global $elfsight_form_builder_action_url;
	global $elfsight_form_builder_action_name;
	global $elfsight_form_builder_recaptcha_site_key;

	if (is_array($options)) {
		$options['actionUrl'] = $elfsight_form_builder_action_url;
		$options['actionName'] = $elfsight_form_builder_action_name;
        $options['recaptchaSitekey'] = $elfsight_form_builder_recaptcha_site_key;
        $options['widgetId'] = $widget_id;
	}

	return $options;
}
add_filter('elfsight_form_builder_shortcode_options', 'elfsight_form_builder_shortcode_options_filter', 10, 2);

function elfsight_form_builder_widget_options_filter($options_json) {
	$options = json_decode($options_json, true);

	if (is_array($options)) {
		unset($options['actionUrl']);
		unset($options['actionName']);
        unset($options['recaptchaSitekey']);
        unset($options['widgetId']);
	}

	return json_encode($options);
}
add_filter('elfsight_form_builder_widget_options', 'elfsight_form_builder_widget_options_filter', null);

<?php
// financial-calculators.com mortgage calculator plugin
//
// Copyright (c) 2016 financial-calculators.com
// https://financial-calculators.com
//
// This is an add-on for WordPress
// http://wordpress.org/
//
// **********************************************************************
// This program is free software; you can redistribute it and/or
// modify it under the terms of the GNU General Public License
// as published by the Free Software Foundation; either version 2
// of the License, or (at your option) any later version.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
// GNU General Public License for more details.
//
// The copyright and this notice must remain intact with any derivations
// of this plugin.
// **********************************************************************
/*
Plugin Name: FC Mortgage Calculator
Plugin URI: https://financial-calculators.com/calculator-plugins/mortgage-calculator-plugin
Description: A responsive mortgage loan calculator with amortization schedule and charts. Rebrand with your brand name. Supports multiple currency and date conventions.
Version: 1.1.2
Author: financial-calculators.com
Author URI: https://financial-calculators.com
License: GPL2
*/


/*
	Prefixes:
	fc or fc_ : financial calculators
	op_ : option, set via plugin's admin panel or passed in options object
	sc_ : a shortcode parameter

	Option array:
	array('op_size' => "large",
				'op_custom_style' => "No",
				'op_add_link' => "No",
				'op_brand_name' => "",
				'op_hide_resize' => "No",
				'op_price' => "350000.0",
				'op_pct_dwn' => "20.0",
				'op_loan_amt' => "0.0",
				'op_n_months' => "48",
				'op_rate' => "5.5",
				'op_points' => "0",
				'op_taxes' => "0",
				'op_insurance' => "0",
				'op_pmi' => "0")

	Shortcode - all options:
	[fcmortgageplugin sc_size="medium" sc_custom_style="No" sc_add_link="No" sc_brand_name="" sc_hide_resize="No" sc_price="355000.0" sc_pct_dwn="15.0" sc_loan_amt="0.0" sc_n_months="360" sc_rate="5.5" sc_points="0" sc_taxes="6000" sc_insurance="600" sc_pmi="0"]

	Function call:
	<?php show_fcmortgage_plugin(<option array>); ?>

*/


/* Function: activate_fcmortage_plugin
	** activation hook
	** Initializes the options in the WordPress database when
	** plugin is activated
	**
	** args: none
	** returns: nothing
*/
function activate_fcmortage_plugin() {

	/* activation code here */
	/* as options are added to widget, this array must be updated to update db */
	update_option('fcmortcalc_plugin', array(
		'op_size' => null,
		'op_custom_style' => "No",
		'op_add_link' => "No",
		'op_brand_name' => "",
		'op_hide_resize' => "No",
		'op_price' => "350000.0",
		'op_pct_dwn' => "20.0",
		'op_loan_amt' => "0.0",
		'op_n_months' => "48",
		'op_rate' => "5.5",
		'op_points' => "0",
		'op_taxes' => "0",
		'op_insurance' => "0",
		'op_pmi' => "0"
		));

}
register_activation_hook( __FILE__, 'activate_fcmortage_plugin' );


/* Function: show_fcmortgage_widget
** Shows the plugin in a WordPress widget area / sidebar
**
** args: $args (environment variables handled automatically by the hook)
** returns: nothing
*/
function show_fcmortgage_widget( $args ) {
	extract( $args );
	$options = get_option( 'fcmortcalc_plugin' );
	$title = null;

	//production
	echo $before_widget;
	echo $before_title . $title . $after_title;

	show_fcmortgage_plugin($options);

	echo $after_widget;

} // show_fcmortgage_widget



/* Function: show_fcmortgage_plugin
** Show the plugin's GUI, not in sidebar
**
** args: $options
** returns: nothing
*/
function show_fcmortgage_plugin($options = array(), $content = null, $code = "") {

	$shortcode = null;  // The actual shortcode : fcmortgageplugin

	$language = "en";

	$WL_DIR_PREFIX = $language."/";

	$size = null; // tiny, small, medium, null default large
	$custom_style = null;
	$add_link = null;
	$brand_name = null;
	$hide_resize = null;


	$WL_DIR_PREFIX = $language."/";


	// array_key_exists (0, $options) true only if shortcode is used
	if (!empty($code) || (!empty($options) && array_key_exists (0, $options) && (strtolower($options[0]) == 'fcmortgageplugin'))){
		$shortcode = true;

		//[fcmortgageplugin sc_size="medium" sc_custom_style="No" sc_add_link="No" sc_brand_name="" sc_hide_resize="No" sc_price="355000.0" sc_pct_dwn="15.0" sc_loan_amt="0.0" sc_n_months="360" sc_rate="5.5" sc_points="0" sc_taxes="6000" sc_insurance="600" sc_pmi="0"]
		extract( shortcode_atts( array(
			'sc_size' => null,
			'sc_custom_style' => "No",
			'sc_add_link' => "No",
			'sc_brand_name' => "",
			'sc_hide_resize' => "No",
			'sc_price' => "350000.0",
			'sc_pct_dwn' => "20.0",
			'sc_loan_amt' => "0.0",
			'sc_n_months' => "48",
			'sc_rate' => "5.5",
			'sc_points' => "0",
			'sc_taxes' => "0",
			'sc_insurance' => "0",
			'sc_pmi' => "0"
		), $options ) );

		$size = $sc_size;
		$custom_style = $sc_custom_style;
		$add_link = $sc_add_link;
		$brand_name = $sc_brand_name;
		$hide_resize = $sc_hide_resize;
		$price = $sc_price;
		$pct_dwn = $sc_pct_dwn;
		$loan_amt = $sc_loan_amt;
		$n_months = $sc_n_months;
		$rate = $sc_rate;
		$points = $sc_points;
		$taxes = $sc_taxes;
		$insurance = $sc_insurance;
		$pmi = $sc_pmi;

		if (!is_numeric($price)) {
			$price = '0';
			echo('Please enter a valid number for "sc_price".'."<br>");
		}
		if (!is_numeric($pct_dwn)) {
			$pct_dwn = '0';
			echo('Please enter a valid number for "sc_pct_dwn".'."<br>");
		}
		if (!is_numeric($loan_amt)) {
			$loan_amt = '0';
			echo('Please enter a valid number for "sc_loan_amt".'."<br>");
		}
		if (!is_numeric($n_months)) {
			$n_months = '0';
			echo('Please enter a valid number for "sc_n_months".'."<br>");
		}
		if (!is_numeric($rate)) {
			$rate = '0';
			echo('Please enter a valid number for "sc_rate".'."<br>");
		}
		if (!is_numeric($points)) {
			$points = '0';
			echo('Please enter a valid number for "sc_points".'."<br>");
		}
		if (!is_numeric($taxes)) {
			$taxes = '0';
			echo('Please enter a valid number for "sc_taxes".'."<br>");
		}
		if (!is_numeric($insurance)) {
			$insurance = '0';
			echo('Please enter a valid number for "sc_insurance".'."<br>");
		}
		if (!is_numeric($pmi)) {
			$pmi = '0';
			echo('Please enter a valid number for "sc_pmi".'."<br>");
		}
		if (strtolower($add_link) != 'yes') {
			$brand_name = '';
		}

	} else {
		$shortcode = false;

		// process any optional parameters that may have been passed in
		$size = empty( $options["op_size"] ) ? null : strip_tags(stripslashes($options["op_size"]));
		$custom_style = empty( $options['op_custom_style'] ) ? null : strip_tags(stripslashes($options['op_custom_style']));
		$hide_resize = empty( $options['op_hide_resize'] ) ? null : strip_tags(stripslashes($options['op_hide_resize']));
		$add_link = empty( $options['op_add_link'] ) ? null : strip_tags(stripslashes($options['op_add_link']));
		$brand_name = empty( $options['op_brand_name'] ) ? null : strip_tags(stripslashes($options['op_brand_name']));
		$brand_name = preg_replace("/[^\w#&'\- ]/", '', $brand_name);
		$price = empty( $options['op_price'] ) ? null : strip_tags(stripslashes($options['op_price']));
		$pct_dwn = empty( $options['op_pct_dwn'] ) ? null : strip_tags(stripslashes($options['op_pct_dwn']));
		$loan_amt = empty( $options['op_loan_amt'] ) ? null : strip_tags(stripslashes($options['op_loan_amt']));
		$n_months = empty( $options['op_n_months'] ) ? null : strip_tags(stripslashes($options['op_n_months']));
		$rate = empty( $options['op_rate'] ) ? null : strip_tags(stripslashes($options['op_rate']));
		$points = empty( $options['op_points'] ) ? null : strip_tags(stripslashes($options['op_points']));
		$taxes = empty( $options['op_taxes'] ) ? null : strip_tags(stripslashes($options['op_taxes']));
		$insurance = empty( $options['op_insurance'] ) ? null : strip_tags(stripslashes($options['op_insurance']));
		$pmi = empty( $options['op_pmi'] ) ? null : strip_tags(stripslashes($options['op_pmi']));

		// pickup plugin's stored settings and use only if not a function parameter
		$options = get_option( 'fcmortcalc_plugin' );

		if ($size == null) {
			$size = empty( $options["op_size"] ) ? 'large' : $options["op_size"];
		}
		if ($custom_style == null) {
			$custom_style = empty( $options['op_custom_style'] ) ? __('No') : $options['op_custom_style'];
		}
		if ($hide_resize == null) {
			$hide_resize = empty( $options['op_hide_resize'] ) ? __('No') : $options['op_hide_resize'];
		}
		if ($add_link == null) {
			$add_link = empty( $options['op_add_link'] ) ? __('No') : $options['op_add_link'];
		}
		if ($brand_name == null) {
			$brand_name = empty( $options['op_brand_name'] ) ? null : $options['op_brand_name'];
		}
		if ($price == null) {
			$price = empty( $options['op_price'] ) ? '325000.00' : $options['op_price'];
		}
		if ($pct_dwn == null) {
			$pct_dwn = empty( $options['op_pct_dwn'] ) ? '20.0' : $options['op_pct_dwn'];
		}
		if ($loan_amt == null) {
			$loan_amt = empty( $options['op_loan_amt'] ) ? '32500.0' : $options['op_loan_amt'];
		}
		if ($n_months == null) {
			$n_months = empty( $options['op_n_months'] ) ? '48' : $options['op_n_months'];
		}
		if ($rate == null) {
			$rate = empty( $options['op_rate'] ) ? '5.5' : $options['op_rate'];
		}
		if (!is_numeric($loan_amt)) {
			$loan_amt = '0';
			echo('Please enter a valid number for "op_loan_amt".'."<br>");
		}
		if (!is_numeric($n_months)) {
			$n_months = '0';
			echo('Please enter a valid number for "op_n_months".'."<br>");
		}
		if (!is_numeric($rate)) {
			$rate = '0';
			echo('Please enter a valid number for "op_rate".'."<br>");
		}
		if ($points == null) {
			$points = empty( $options['op_points'] ) ? '325000.00' : $options['op_points'];
		}
		if ($taxes == null) {
			$taxes = empty( $options['op_taxes'] ) ? '20.0' : $options['op_taxes'];
		}
		if ($insurance == null) {
			$insurance = empty( $options['op_insurance'] ) ? '325000.00' : $options['op_insurance'];
		}
		if ($pmi == null) {
			$pmi = empty( $options['op_pmi'] ) ? '20.0' : $options['op_pmi'];
		}
		if (strtolower($add_link) != 'yes') {
			$brand_name = '';
		}

		//echo "<br>" . "not a shortcode";
		//echo "$size " . $size . "<br>";
		//echo $custom_style . "<br>";
		//echo $add_link . "<br>";
		//echo $brand_name . "<br>";
		//echo $hide_resize . "<br>";
		//echo $loan_amt . "<br>";
		//echo $n_months . "<br>";
		//echo $rate . "<br>";

	} // $shortcode = false;


	//
	// REGISTER STYLES
	//


	wp_register_style( 'fc-featherlight', plugins_url('css/featherlight.min.css', __FILE__), array(), false, 'screen' );

	wp_register_style( 'fincalcs-style', plugins_url('css/fin-calc-widgets.min.css', __FILE__), array(), false, 'screen' );

	if (strtolower($custom_style) === 'yes') {
		wp_register_style( 'fincalcs-custom-style', plugins_url('css/fin-calc-widgets-custom.css', __FILE__), array(), false, 'screen' );
	} 


	wp_register_style( 'fc-printer-style', plugins_url('css/printer.widget.min.css', __FILE__), array(), false, 'print');


	wp_enqueue_style( 'fc-featherlight' );
	wp_enqueue_style( 'fc-printer-style' );
	wp_enqueue_style( 'fincalcs-style' );


	// load a custom stylesheet so defaults can be easily overridden
	if (strtolower($custom_style) === 'yes') {
		wp_enqueue_style( 'fincalcs-custom-style' );
	} 


	if($shortcode) ob_start();


	// displays the widget
	include($WL_DIR_PREFIX."calculator.gui.php");



	//
	// REGISTER SCRIPTS
	//

	// is jQuery enqueued?
	if (!wp_script_is( 'jquery')) {
		wp_enqueue_script( 'jquery' );
	}

	// register supporting JavaScript libraries and Bootstrap
	wp_register_script('fc-supporting', plugins_url('js/supporting.WIDGETS.min.js', __FILE__), array('jquery'), '', true);
	wp_register_script('fc-custom-bootstrap', plugins_url('js/bootstrap.custom.min.js', __FILE__), array( 'jquery' ), '', true);
	// load the JavaScript math library
	wp_register_script('fc-mort-interface', plugins_url('js/interface.MORTGAGE-WIDGET.min.js', __FILE__), array( 'jquery', 'fc-custom-bootstrap', 'fc-supporting'), '', true);



	wp_enqueue_script( 'fc-mort-interface' );

	if($shortcode){
		$result = ob_get_contents();
		ob_end_clean();
		if(is_null($content)){
			return $result;
		} else {
			return $content . $result;
		}
	}

} // show_fcmortgage_plugin



/* Function: fcmortgageplugin_options
**
** Show/process options on the Wordpress admin's widget page
**
** args: nothing
** returns: nothing
*/
function fcmortgageplugin_options() {

	// financial-calculators.com loan calculator widget options
	$options = $newoptions = get_option('fcmortcalc_plugin');

	// in event admin updated plugin but did not deactivate / activate, pickup possible new options
	if (!array_key_exists('op_size', $options) || !array_key_exists('op_custom_style', $options) || !array_key_exists('op_add_link', $options) || !array_key_exists('op_brand_name', $options) || !array_key_exists('op_hide_resize', $options) || !array_key_exists('op_price', $options) || !array_key_exists('op_pct_dwn', $options) || !array_key_exists('op_loan_amt', $options) || !array_key_exists('op_n_months', $options) || !array_key_exists('op_rate', $options) || !array_key_exists('op_points', $options) || !array_key_exists('op_taxes', $options) || !array_key_exists('op_insurance', $options) || !array_key_exists('op_pmi', $options)) {
		// echo('Updated options'. implode(" ", $options));
		update_option('fcmortcalc_plugin', array(
			'op_size' => null,
			'op_custom_style' => "No",
			'op_add_link' => "No",
			'op_brand_name' => "",
			'op_hide_resize' => "No",
			'op_price' => "350000.0",
			'op_pct_dwn' => "20.0",
			'op_loan_amt' => "0.0",
			'op_n_months' => "48",
			'op_rate' => "5.5",
			'op_points' => "0",
			'op_taxes' => "0",
			'op_insurance' => "0",
			'op_pmi' => "0"
			));
		$options = $newoptions = get_option('fcmortcalc_plugin'); // keep everything in sync
	}


	// if widget's options have previously been set/saved in current session
	if (!empty($_POST['fcmortcalc_opts'])) {
		$newoptions['op_size'] = strip_tags(stripslashes($_POST['fcmortcalc-op_size']));
		if (strtolower($newoptions['op_size']) != 'tiny' && strtolower($newoptions['op_size']) != 'small' && strtolower($newoptions['op_size']) != 'medium') {
			$newoptions['op_size'] = 'large';
		}
		$newoptions['op_custom_style'] = strip_tags(stripslashes($_POST['fcmortcalc-op_custom_style']));
		if (strtolower($newoptions['op_custom_style']) != 'yes') {
			$newoptions['op_custom_style'] = 'No';
		}
		$newoptions['op_add_link'] = strip_tags(stripslashes($_POST['fcmortcalc-op_add_link']));
		if (strtolower($newoptions['op_add_link']) != 'yes') {
			$newoptions['op_add_link'] = 'no';
		}
		// allow word characters, numbers, ampersand, dash, apostrophe, space and number sign
		$newoptions['op_brand_name'] = preg_replace("/[^\w#&'\- ]/", '', $_POST['fcmortcalc-op_brand_name']);
		if (strtolower($newoptions['op_add_link']) != 'yes') {
			$newoptions['op_brand_name'] = '';
		}
		$newoptions['op_hide_resize'] = strip_tags(stripslashes($_POST['fcmortcalc-op_hide_resize']));
		if (strtolower($newoptions['op_hide_resize']) != 'yes') {
			$newoptions['op_hide_resize'] = 'no';
		}
		$newoptions['op_price'] = strip_tags(stripslashes($_POST['fcmortcalc-op_price']));
		$newoptions['op_pct_dwn'] = strip_tags(stripslashes($_POST['fcmortcalc-op_pct_dwn']));
		$newoptions['op_loan_amt'] = strip_tags(stripslashes($_POST['fcmortcalc-op_loan_amt']));
		$newoptions['op_n_months'] = strip_tags(stripslashes($_POST['fcmortcalc-op_n_months']));
		$newoptions['op_rate'] = strip_tags(stripslashes($_POST['fcmortcalc-op_rate']));
		$newoptions['op_points'] = strip_tags(stripslashes($_POST['fcmortcalc-op_points']));
		$newoptions['op_taxes'] = strip_tags(stripslashes($_POST['fcmortcalc-op_taxes']));
		$newoptions['op_insurance'] = strip_tags(stripslashes($_POST['fcmortcalc-op_insurance']));
		$newoptions['op_pmi'] = strip_tags(stripslashes($_POST['fcmortcalc-op_pmi']));

		//////////ctype_digit
		//echo(is_numeric($newoptions['op_loan_amt']));
		//echo(is_numeric($newoptions['op_n_months']));
		//echo(is_numeric($newoptions['op_rate']));
		if (!is_numeric($newoptions['op_price'])) {
			$newoptions['op_price'] = '0';
			echo('Please enter a valid number for "Default price".'."<br>");
		}
		if (!is_numeric($newoptions['op_pct_dwn'])) {
			$newoptions['op_pct_dwn'] = '0';
			echo('Please enter a valid number for "Default pct. down".'."<br>");
		}
		if (!is_numeric($newoptions['op_loan_amt'])) {
			$newoptions['op_loan_amt'] = '0';
			echo('Please enter a valid number for "Default loan amount".'."<br>");
		}
		if (!is_numeric($newoptions['op_n_months'])) {
			$newoptions['op_n_months'] = '0';
			echo('Please enter a valid number for "Default number of months:".'."<br>");
		}
		if (!is_numeric($newoptions['op_rate'])) {
			$newoptions['op_rate'] = '0';
			echo('Please enter a valid number for "Default interest rate".'."<br>");
		}
		if (!is_numeric($newoptions['op_points'])) {
			$newoptions['op_points'] = '0';
			echo('Please enter a valid number for "Default points".'."<br>");
		}
		if (!is_numeric($newoptions['op_taxes'])) {
			$newoptions['op_taxes'] = '0';
			echo('Please enter a valid number for "Default taxes".'."<br>");
		}
		if (!is_numeric($newoptions['op_insurance'])) {
			$newoptions['op_insurance'] = '0';
			echo('Please enter a valid number for "Default insurance".'."<br>");
		}
		if (!is_numeric($newoptions['op_pmi'])) {
			$newoptions['op_pmi'] = '0';
			echo('Please enter a valid number for "Default PMI".'."<br>");
		}


	} 
	//debug
	//else {
	//	echo('Options not yet posted.');
	//}


	// 1st check if options changed and if valid session
	if ( $options != $newoptions && (wp_verify_nonce($_POST['fcmortcalc_opts'], 'fc_options'))) {

		// 2nd check permissions
		if ( is_user_logged_in() && current_user_can('update_plugins') ) {
			$options = $newoptions;
			update_option('fcmortcalc_plugin', $options);
		}
		//debug
		//else if (array_key_exists('fcmortcalc_opts', $_POST) && (!wp_verify_nonce($_POST['fcmortcalc_opts'], 'fc_options'))) {
		//	echo ('Update failed. Session expired. Please log in again.');
		//}
	}

	$brand_name = esc_attr($options['op_brand_name']);
	$price = esc_attr($options['op_price']);
	$pct_dwn = esc_attr($options['op_pct_dwn']);
	$loan_amt = esc_attr($options['op_loan_amt']);
	$n_months = esc_attr($options['op_n_months']);
	$rate = esc_attr($options['op_rate']);
	$points = esc_attr($options['op_points']);
	$taxes = esc_attr($options['op_taxes']);
	$insurance = esc_attr($options['op_insurance']);
	$pmi = esc_attr($options['op_pmi']);


	//echo empty( $options['op_size']) . "<br>";
	//echo empty( $options['op_custom_style']) . "<br>";
	//echo empty( $options['op_add_link']) . "<br>";
	//echo empty( $options['op_brand_name']) . "<br>";
	//
	//echo $options['op_size'] . "<br>";
	//echo $options['op_custom_style'] . "<br>";
	//echo $options['op_add_link'] . "<br>";
	//echo $options['op_brand_name'] . "<br>";

?>

		<!--HTML for widget's option page in WordPress' admin panel-->
		<p>
			<label for="fcmortcalc-op_size"><?php _e( 'Widget\'s size?:' ); ?>
				<select name="fcmortcalc-op_size" id="fcmortcalc-op_size" class="widefat">
					<option value="tiny"<?php selected( $options['op_size'], 'tiny' ); ?>><?php _e('Tiny (max width = 150px)'); ?></option>
					<option value="small"<?php selected( $options['op_size'], 'small' ); ?>><?php _e('Small (max width = 290px)'); ?></option>
					<option value="medium"<?php selected( $options['op_size'], 'medium' ); ?>><?php _e('Medium (max width = 340px)'); ?></option>
					<option value="large"<?php selected( $options['op_size'], 'large' ); ?>><?php _e('Large (max width = 440px)'); ?></option>
				</select>
			</label>
		</p>

		<p>
			<label for="fcmortcalc-op_custom_style"><?php _e( 'Load custom style sheet?:' ); ?>
				<select name="fcmortcalc-op_custom_style" id="fcmortcalc-op_custom_style" class="widefat">
					<option value="No"<?php selected( $options['op_custom_style'], 'No' ); ?>><?php _e('No'); ?></option>
					<option value="Yes"<?php selected( $options['op_custom_style'], 'Yes' ); ?>><?php _e('Yes'); ?></option>
				</select>
			</label>
		</p>
		<p>
			If &quot;Yes&quot; loads &lt;site&gt;\wp-content\plugins\fc-mortgage-calculator\css\fin-calc-widgets-custom.css. Entries in <b>fin-calc-widgets-custom.css</b> modify the widget's look. Editing the provided custom stylesheet is the best way to change colors.
		</p>


		<p>
			<label for="fcmortcalc-op_hide_resize"><?php _e( 'Hide the resize buttons?:' ); ?>
				<select name="fcmortcalc-op_hide_resize" id="fcmortcalc-op_hide_resize" class="widefat">
					<option value="No"<?php selected( $options['op_hide_resize'], 'No' ); ?>><?php _e('No'); ?></option>
					<option value="Yes"<?php selected( $options['op_hide_resize'], 'Yes' ); ?>><?php _e('Yes'); ?></option>
				</select>
			</label>
		</p>


		<p>
			<label for="fcmortcalc-op_add_link"><?php _e( 'Allow plugin to add links to financial-calculators.com?:' ); ?>
				<select name="fcmortcalc-op_add_link" id="fcmortcalc-op_add_link" class="widefat">
					<option value="No"<?php selected( $options['op_add_link'], 'No' ); ?>><?php _e('No'); ?></option>
					<option value="Yes"<?php selected( $options['op_add_link'], 'Yes' ); ?>><?php _e('Yes'); ?></option>
				</select>
			</label>
		</p>
		<p>
			If &quot;Yes&quot;, two very discreet follow links will be inserted in the calculator. If you allow the links, you can rebrand the calculator to include your name or that of your business. Resetting this option to &quot;No&quot; at any time will remove the links. See FAQ's for details.
		</p>



		<p><label for="fcmortcalc-op_brand_name"><?php _e('Add Your Brand Name:'); ?> <input class="widefat" id="fcmortcalc-op_brand_name" name="fcmortcalc-op_brand_name" type="text" value="<?php echo $brand_name; ?>" /></label>
		</p>
		<p>
		You may brand this widget with your brand. <b>Example: &quot;<b>Abe's Auto</b>&quot;</b> will be preappended to &quot;Mortgage Loan Calculator&quot; For this to work, the above &quot;add links&quot; option must be set to &quot;Yes&quot;.
		</p>



		<div style="width:100%; float:left; clear:both;"><div style="width:45%; float:left; margin-right:4px;"><label for="fcmortcalc-op_price"><?php _e('Default price:'); ?> <input class="widefat" id="fcmortcalc-op_price" name="fcmortcalc-op_price" type="text" value="<?php echo $price; ?>" /></label></div>
			<div style="width:45%; float:left"><label for="fcmortcalc-op_pct_dwn"><?php _e('Default pct down:'); ?> <input class="widefat" id="fcmortcalc-op_pct_dwn" name="fcmortcalc-op_pct_dwn" type="text" value="<?php echo $pct_dwn; ?>" /></label></div></div>
		<div style="width:100%; float:left; clear:both;"><div style="width:45%; float:left; margin-right:4px;"><label for="fcmortcalc-op_loan_amt"><?php _e('Default loan amount:'); ?> <input class="widefat" id="fcmortcalc-op_loan_amt" name="fcmortcalc-op_loan_amt" type="text" value="<?php echo $loan_amt; ?>" /></label></div>
			<div style="width:45%; float:left"><label for="fcmortcalc-op_n_months"><?php _e('Default number of months:'); ?> <input class="widefat" id="fcmortcalc-op_n_months" name="fcmortcalc-op_n_months" type="text" value="<?php echo $n_months; ?>" /></label></div></div>
		<div style="width:100%; float:left; clear:both;"><div style="width:45%; float:left; margin-right:4px;"><label for="fcmortcalc-op_rate"><?php _e('Default interest rate:'); ?> <input class="widefat" id="fcmortcalc-op_rate" name="fcmortcalc-op_rate" type="text" value="<?php echo $rate; ?>" /></label></div><div style="width:45%; float:left; margin-right:4px;"><label for="fcmortcalc-op_points"><?php _e('Default points:'); ?> <input class="widefat" id="fcmortcalc-op_points" name="fcmortcalc-op_points" type="text" value="<?php echo $points; ?>" /></label></div></div>
		<div style="width:100%; float:left; clear:both;"><div style="width:45%; float:left; margin-right:4px;"><label for="fcmortcalc-op_taxes"><?php _e('Default prop. taxes:'); ?> <input class="widefat" id="fcmortcalc-op_taxes" name="fcmortcalc-op_taxes" type="text" value="<?php echo $taxes; ?>" /></label></div><div style="width:45%; float:left"><label for="fcmortcalc-op_insurance"><?php _e('Default insurance:'); ?> <input class="widefat" id="fcmortcalc-op_insurance" name="fcmortcalc-op_insurance" type="text" value="<?php echo $insurance; ?>" /></label></div></div>
		<div style="width:100%; float:left; clear:both;"><div style="width:45%; float:left; margin-right:4px;"><label for="fcmortcalc-op_pmi"><?php _e('Default PMI:'); ?> <input class="widefat" id="fcmortcalc-op_pmi" name="fcmortcalc-op_pmi" type="text" value="<?php echo $pmi; ?>" /></label></div><div style="width:45%; float:left"><p style="text-align:center"><?php _e('Enter only digits.<br>No formatting.'); ?></p></div></div>


		<p><b>Note:</b> Your visitors will be able to select the date and currency conventions they need by clicking on &quot<b>$ : MM/DD/YYYY</b>&quot; in the calculator's lower right corner.</p>

		<input type="hidden" id="fcmortcalc_opts" name="fcmortcalc_opts" value="<?php echo wp_create_nonce('fc_options'); ?>" />


<?php

}



/* Function: fcmortgageplugin_register
**
** Registers the plugin to show in WordPress' admin's widget page.
**
** args: none
** returns: nothing
*/
function fcmortgageplugin_register() {
	$widget_ops = array('classname' => 'fcmortcalc_plugin', 'description' => __('Mortgage Calculator by financial-calculators.com'));

	$name = __('Mortgage Calculator');

	// Register WordPress Widgets for use in your themes sidebars.
	// You can also modify your theme and start Customizing Your Sidebar. 
	// wp_register_sidebar_widget($id, $name, $output_callback, $options, $params, ... ); 
	wp_register_sidebar_widget( 'fcmortgageplugin', $name, 'show_fcmortgage_widget', $widget_ops );


	// Draws the controls form on the WordPress's widget page in admin area
	// and saves the settings when the "Save" button is clicked
	// Registers widget control callback for customizing options.
	// wp_register_widget_control( int|string $id, string $name, callable $control_callback, array $options = array() )
	wp_register_widget_control( 'fcmortgageplugin', $name, 'fcmortgageplugin_options' );
} // fcmortgageplugin_register


// Hooks a function on to a specific action.
add_action( 'widgets_init', 'fcmortgageplugin_register' );

// Adds a hook for a shortcode tag.
add_shortcode( 'fcmortgageplugin', 'show_fcmortgage_plugin' );


/* end of file */

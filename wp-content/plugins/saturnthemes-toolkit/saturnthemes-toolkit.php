<?php
/*
Plugin Name: SaturnThemes Toolkit
Description: Toolkit for Saturn Themes
Author: SaturnThemes
Version: 1.6
Author URI: http://saturnthemes.com
*/

define( 'SaturnThemes_Toolkit_URL', plugins_url( '', __FILE__ ) . '/'  );
define( 'SaturnThemes_Toolkit_PATH', plugin_dir_path( __FILE__ )  );

require_once( 'import/class-admin-import.php' );
require_once( 'export/class-admin-export.php' );

require_once ( 'widgets/widgets.php' );
require_once ( 'tf.php' );
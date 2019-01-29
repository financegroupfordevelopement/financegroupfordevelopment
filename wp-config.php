<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'financegroupfordevelopment_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '1^ I&R-`0vlXzX<JIIryKOYZh$%cfH3`D[m~-?=pQkw&%cam6t3fPI34;@Z|FtD(');
define('SECURE_AUTH_KEY',  'Ha0N&n?F9#{5)PW;!ht?i.!+?=]./_-~3<%e{PU<4%;.7:z^RC&kY[0u|B$>BnRD');
define('LOGGED_IN_KEY',    'qC-W(Z?YcI2*}u%!lCYUt1(~|v^c{ R!Scb2Vj qX9!Fh7p,4Ve^D0zhwsiN@n:+');
define('NONCE_KEY',        'h/H9Am!~lRaj;+-svgt52O(/s3q9DN1-]^+8qPu=[ $aPp5Xn>@ynaO^)D<]zjWd');
define('AUTH_SALT',        'x/@,%]RB<~:8<n,OUH@_8V<]Jr%_lC49]jX{wd9YQYl~]n+@6%^|<o[RXnXBdQN1');
define('SECURE_AUTH_SALT', 'A8aQ[)L9`[^-aA9Y_921C]ATASs>^_mEfqn~x>dDW+aFZWS^&=Ot?fgNQuNbn@8B');
define('LOGGED_IN_SALT',   'F?~~,nk#6^LrJ^9wmoS)NfP;w`!_vuPo-Czub6H-ADnFzfqKM5n<P 1;/p+RA|ns');
define('NONCE_SALT',       '^8B%g+y5+_O=01JYQR`bXBI$S=]BU5})/m=wk-Sgg&@D^Q^k3AXPKMU5QDZlDkq(');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

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
define('DB_NAME', 'newwordpress1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '&Ha::byi*ukvdcNriEi!)zdJr:KK:Xq^dtjokLx!;.{`LbDyq@T~^^;(mh#/!j#O');
define('SECURE_AUTH_KEY',  ']CY;4d6c{IK<#i20pL:dY;!TN^UgF,[q9BW%uCwIb3=TJ Hz}!W1~LzgmHK<gVK[');
define('LOGGED_IN_KEY',    ']r#H>Kxz`3,USrsFU_H;Er<Qa)R$M+74bEY*)vGj%(=IOfzK_;nAh_<QW14v9dmR');
define('NONCE_KEY',        's8j0G+*;#O;$GZHLgK[,p322L+P2vj[njoD8hONMpE_VVg{$8wF:iPpeO5|h$1Qf');
define('AUTH_SALT',        '!U|tSlTS1s:(0XmCJo`m|+MNh}NYhtj#bgqPS5Slp09=*FV)p lgxOl:>F4o]DGj');
define('SECURE_AUTH_SALT', '=VTb:KNxU6g}TMr.H2,1x0?:C?9MgZ {1:#`_Wb8Sl0aP lP(c?*~({<75a?hz8-');
define('LOGGED_IN_SALT',   '=_C>P@^Pne1x|^`F2;0CGm*BG^tX)K9P#[0(uk[lpd4%u)x-U@O4c5ttQ_FOfy%5');
define('NONCE_SALT',       'whk`ylo *IHogvK]l[_9g7s,1`J1U9[=K|JOe`(j`Fv]DrPYoG96r)E?~5q3g*1L');

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

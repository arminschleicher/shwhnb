<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'wordpress_shwohnbau');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'shwohnbau');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', '5fuSnxPYdxSNv5GN');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'wf!4|k^%A:Fw>`hG1m?n&8zN,#_!{HSz)4ux9bWb`vm4[EB4uaOEt>mUF$GVh[h+');
define('SECURE_AUTH_KEY',  '_f`mk){m4s1g?(|Q{Q!-Uq-VBoN9U+T~uH}8@]a<:bx,v<PlfM<+8C*;w69cfS7r');
define('LOGGED_IN_KEY',    '_-:bvKymX8^XrX7(/9#%4vR6iUyrE|wlg-Y(bj)50k+4pr=1(K*UnQELD(zja&aO');
define('NONCE_KEY',        'gAQD:jv#2$tB-.Y5<|0B-B-|`e@gasE7mE$!kvjX+VDf?A6X]#djZo[9U<f*k~BD');
define('AUTH_SALT',        '<AnC(V6K8)zPGs.w/QPO~^ gt0TMwfoujnh^bt%6_Gz %}6oeUX/x4<JKTEhu8w~');
define('SECURE_AUTH_SALT', 'MV-tiQ$(iNv.I]!`+{+qPy`yfX<DGNiY<b}b!3w]Y1[kJ_%9aF?6Q$B,KMD/p+/:');
define('LOGGED_IN_SALT',   '?q/HiDV1NQIQZH96@K:G/kSMu<$||(]3G[v1?S_6q)$^PAer~jIH-CC`!D<Lyj^S');
define('NONCE_SALT',       'Vwrn-J(+[rlkrAcG2#!$c)`x|_:6{yq6Zi@+ySr|X|@UIsS%dbsJZtQc@Tghdy6i');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');


/**
 * Set custom paths
 *
 * These are required because wordpress is installed in a subdirectory.
 */
if (!defined('WP_SITEURL')) {
	define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/cms');
}
if (!defined('WP_HOME')) {
	define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME'] . '');
}
if (!defined('WP_CONTENT_DIR')) {
	define('WP_CONTENT_DIR', dirname(__FILE__) . '/content');
}
if (!defined('WP_CONTENT_URL')) {
	define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/content');
}


/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

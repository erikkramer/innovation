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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */


if (isset($_SERVER["DATABASE_URL"])) {
 $db = parse_url($_SERVER["DATABASE_URL"]);
 define("DB_NAME", trim($db["path"],"/"));
 define("DB_USER", $db["user"]);
 define("DB_PASSWORD", $db["pass"]);
 define("DB_HOST", $db["host"]);
}
else {
 die("Your heroku DATABASE_URL does not appear to be correctly specified.");
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

define('AUTH_KEY',         'yF777HM4igaY)EaE9xwxU4Gc:O;iK.oDlz-5|85j,;|/x{Qa}15c@}n:0XB(>sbd');
define('SECURE_AUTH_KEY',  'k}%D6^=O>Q7|d$qN3PpD+eCmJ|2hj+[N8Tu#_  Y[>38LoYB9zn8+)|G5NS<(Yz!');
define('LOGGED_IN_KEY',    'P5|N2FoI]!DdT|-?MUY[k+BJ[|;#~}_E(*3H>e6|}VYXh@SRX4c?76yJjR1KLzq{');
define('NONCE_KEY',        'HF-vNS*UA2/>V?7u1xQ$5TmJe{H+}>|6P#BSWtC|O+>w32c<`t(2L<)K]mNhOp%x');
define('AUTH_SALT',        '`(Jj[ua:+xj=HMA%W-ee5{bbkX-m@tRI}}#&?|Gy/3)Sy_dL[yr*-g:vmgXz_jw4');
define('SECURE_AUTH_SALT', 'bfp>P]M3__aCrjx}W5{k/pO*J%0OKn{_Q/jb1~i9,EPM-17PV+39_b&Gq#+zD_U7');
define('LOGGED_IN_SALT',   'VqO9gJHRD;WMbxnZ<V{<|2X?`%hN7;;Op@*9w}7iQ7+HH>%75D.srYU]!-fx+~bs');
define('NONCE_SALT',       'oG|M+rq/Zy+|)>zY~Kk#Y<~@)u}Qzd~:hCBE$9_i>]uCO:Wt$%L:es}+[?p.^mko');

/**#@-*/

define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] );


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
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

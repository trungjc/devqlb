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
define('DB_NAME', 'devqlb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'OR3~b+)_F$vX$YG;M8i.%MYdwQ<:uIDb, ?~8})W#7.wvy|TZhr2ewxhVtAO)s#T');
define('SECURE_AUTH_KEY',  'Z_+MgY^6H!x+mKI9PO9|r~0mJ5>z;HY&>qRyr2`JQ4=:2O(Vtdg:R+i+Z:zcc$Nq');
define('LOGGED_IN_KEY',    'yk%QlF:C_.b)p*BcG6G9C0h{:t3~Dh{^[3O_h0op~Q`P<~o O[/,hs,g!%y~:+3_');
define('NONCE_KEY',        'F`/H0+,;0r0u*BK,5WHl,~H;.:?:1RFf/pe+VVQsIh2_9B`5xGslzL-O-9E|?Tp]');
define('AUTH_SALT',        '-3lZJ!#8a99N[bv=`U!xJ|X6vKV7V,i6%|TTrPrUnmuR=-P+|w-8VEoy-@7Gv{4?');
define('SECURE_AUTH_SALT', '0uKc9H,FN8RP<e}OGjk1F${+Xgl<0&Rn` CvYpS6s+#h7E~a#}lAG&^/Yu@T)(_E');
define('LOGGED_IN_SALT',   ' 2G$x4B~YMHlGu/5V= 7A:X$bN;f]phn9^|h$+=+Wkl/0p7Q`]%KK8hG3U>A7+##');
define('NONCE_SALT',       'Rb&|vzw.2SK!z-; 0;(!t[D1[@zpR@C3*~XQRLKa5/]DW`-n9-fG!BnWpLLV.b{k');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'jc_';

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

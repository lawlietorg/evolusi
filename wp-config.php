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
define('DB_NAME', 'taka');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'administrator');

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
define('AUTH_KEY',         'zyUzF5m]>=`|=x4Ekrg;.m+8F/?0j_bQ;(l`Na(0x[A_HP5.QU]9Jask/X%t0dMO');
define('SECURE_AUTH_KEY',  'h%nDf+qDQ/y}B0|GFY>z[|ZTB0t0qf^iIT0)*g6$TL7[nJ|%TB5s^3Z&o^%1* :C');
define('LOGGED_IN_KEY',    'R`Z1UXPVF|BoP9/$Hax5NtN[*JtBWSCYl^=>IjTD)D&;&Z0qr(p6eHy!#BQ9J09p');
define('NONCE_KEY',        '{dx8c&PQKwK36.+v.PUQS* =JDa^_jR`ayPIZH1Q`}!=Vu[^6FW8=yo[*r>fur3o');
define('AUTH_SALT',        'N9=6MrS%N!g[Yd>.wbCdu#^0VU{DbDTY5*RiNFi./:aCsjp{orCLZ2!03w.JiSk[');
define('SECURE_AUTH_SALT', '>?vu+.4 ukiQ}!EhRbv] V@oY6FW2K37+e&`Wv:/-yhv{k%^k:LTSiAJfa+#;Zx#');
define('LOGGED_IN_SALT',   'RyXLH<EkEo1FPT#|H?-:+Nx.1?G HSpEiDbFIRLa]pe4qmr0rX@m#-9`AaOeeP|T');
define('NONCE_SALT',       '/QOXLyN cI_{QH`;HoIh@3,[Ju,<,JU3%G1N9Nzq2~:HTBn/&jnfZXqJvQkl8X*m');

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

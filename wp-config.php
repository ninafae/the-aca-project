<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'cutabove_salonwp');

/** MySQL database username */
define('DB_USER', 'cutabove_groomer');

/** MySQL database password */
define('DB_PASSWORD', 'gVACLu6zW-&7');

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
define('AUTH_KEY',         '61p]Y+fB/^rUuN8Gx3R(VHvU=)+)GHGp$3M|R/71IG@m`:AksI@!Oyu<n~xW|G0^');
define('SECURE_AUTH_KEY',  'ka*A8B!F|ghiFDw?7{8)`!b`xK_m.|-T>oXaNOP`mB<TvnoZX6!J-[^mQQ+CiTFl');
define('LOGGED_IN_KEY',    'B1Z+=R`*qKoW@{#YyZDzw5~n8 t%>U(PZ _$97(*3,Ytw<lulb45Zfr$D20X()ap');
define('NONCE_KEY',        'HX2SNc|-.)!dMzpev!fB-7{E2-6^$jpLkb*s]xQE{vx7t,S2*{JuwOrEc[f#&0;T');
define('AUTH_SALT',        '6T*m?Oj;.lpoy5F>)uy?~tbWgC2@-LnGgDL m,i*3EqsL0l(-IZW$2BKp[f,bNnJ');
define('SECURE_AUTH_SALT', 'I:f:~]]`aNo{uz2>b-AH]AL<`zOu~RD;J-Rf5+Bxj(5VOAu;k8q=b?nN>mlbTmU1');
define('LOGGED_IN_SALT',   '^bW$v)9g?z iQ4}F_>cqm|.DuHkJ@NJ~?oc~m$NfMfkIp~;{$@2%j9N%!7zEuWU(');
define('NONCE_SALT',       'S%5&;W.!+K<4zki]Vv3u,U8-wb9^Oy;f-6~WYo1{mefG@mzFQ`u[T`*b5PrD62|{');

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

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'acutabovepetsalons.com');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

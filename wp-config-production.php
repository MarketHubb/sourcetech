<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
define( 'FORCE_SSL_ADMIN', true ); // Force SSL for Dashboard - Security > Settings > Secure Socket Layers (SSL) > SSL for Dashboard
// END iThemes Security - Do not modify or remove this line

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
define( 'DB_NAME', 'sourcetech_wp' );
/** MySQL database username */
define( 'DB_USER', 'sourcetech_wp' );
/** MySQL database password */
define( 'DB_PASSWORD', '4Ce3U0{BJH)?' );
/** MySQL hostname */
define( 'DB_HOST', 'localhost' );
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
define('AUTH_KEY',         'Bds;;LvsUMa<Zm``T_49E$<$|/YmV _+!nb~@*@Z/R!imtUJfGncJZ#GWjl_3|+]');
define('SECURE_AUTH_KEY',  'Ayn;CxORvW8SOtlHlN@.K.`>h3%ZNTtH)aehmKI<98HYj*u=!X}Pul3-|,$J($p1');
define('LOGGED_IN_KEY',    '_f|BPV/9K7|!CLxaW<vysA+S=bQ8G(O/;bY:~ZxSb&*Kz2lH8hM6in=/k[+-92pb');
define('NONCE_KEY',        '7PgO6ACs)(}4WH>Fmd9Sv+A<w6w.1tBuj4Xj_=spA?)3:Ad+j#Z5/.bV,~P**>WS');
define('AUTH_SALT',        'aqaY=-)Vl=qh^tVNN#ai=UuOz6qVtL-z;;||OK7Wb+l-|p$|mTV,vMSMm[>Atw{b');
define('SECURE_AUTH_SALT', 'WWt(pS!sogmPlLk2jH&b:.E74`>EhAq{|F-Bs><@CGW%gFoY)8rED)S^5[=LiW}:');
define('LOGGED_IN_SALT',   'FEU^&#&tD$Kr!Pq<oRwDueLCw@)zF[4cR?c,{F2EW~(|H?buzUOnG-*5p{s]4V~[');
define('NONCE_SALT',       '+Z]HN-|pZ!+r~c_B-g.z2^9CJ+mVJBB)+[2y-2Q|q@oe_(4 `@.l_d?o_zoJf6p/');
/**#@-*/
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
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

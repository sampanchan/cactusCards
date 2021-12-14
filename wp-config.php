<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_cactus_fruit_cards' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:8889' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Zy5!Y(0zF_K]eCQ>%EO((.a;YE6)c$/i$@J^>fEgW@9DKo(90,e/#/)%V_bMAZS`' );
define( 'SECURE_AUTH_KEY',  ';?R~RO52lDicN[U~mlW{dF0x]6/!,VMC5N8cS/akB0sqP*tzk_E}(+,;k#eOnt1!' );
define( 'LOGGED_IN_KEY',    'cn3r%pLyK)Hc~YR$iS{`l561%;TO;}I!c)O(L0vI`]y:(T?p)!s>jrtFgtzg{8Ug' );
define( 'NONCE_KEY',        ' B]Swr[Un=?6g>Lc]`J|S`=_m`1:u]%m->`Zf?G+01Tit*EOvEZ=-;P[4ERh7X:#' );
define( 'AUTH_SALT',        '-~5#D7gmD78^Vm.M(rC`&eJE`E5qxLCF.t]f^OBao/}Jsa9zqaU$LBT.fApQ?K&+' );
define( 'SECURE_AUTH_SALT', '#qU.m3p9yWSX$R^MepnS5m>c%&y]6_T->BI$F01oVhti0?d5Sr.NaA#*,{n3 YiD' );
define( 'LOGGED_IN_SALT',   '%yEio(VbO<+.W#$f&R19_90XE X<@2WLl0CsCa?kd8+`4-v`cUBdx>M[K^m@:w/?' );
define( 'NONCE_SALT',       '?tPRf/j%cwd,57_=&&_ocDJV-g(@2/?Y}.uv)KjQ!U9O&oXF}[ -4j(gM5v:?~N2' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

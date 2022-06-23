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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wilnox' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '! t?$]#^B%&sQ+Db~?Os>uxJQPI{l}]UHsiG5ndN@IZCpOrBA-*FqkGMrG.,2E)i' );
define( 'SECURE_AUTH_KEY',  '#@paQC?*`uw<x/s:|BSR..=Kd-(2s+-A>ew;30=GBRKIlIR^UE1Tc.i`5!40cWX(' );
define( 'LOGGED_IN_KEY',    '_3sveUclQDk2zG*z<{q-q`j!T:SaOfK0;A54TIT)T6`Vz{-+y7]!k/5DTWv*!qU2' );
define( 'NONCE_KEY',        't[ovM|%Pi~.{_#zGC.LV}BI&PQNHv:Fz`R)EKdPf$0*4J:0c+yI0cl3KNv6bAu##' );
define( 'AUTH_SALT',        '0m(`68dDE9DVlp`s[w]0;S%F;Y0]G L,e=.AS`Y+PUA.P>)DHq?4o YM=noa(g2@' );
define( 'SECURE_AUTH_SALT', '9E/X0A.XK?P43{{ssQA6sSjT^YZgq^@]3W-/nMO H_z?M<Vgc:9C`h^R 2@`mKMD' );
define( 'LOGGED_IN_SALT',   ' YS4-Arw}b<QvtMH}KAuk&mF  [LCAi;S2v/HIe`UP}<x6H|Niww/ZFx@Aoa>&_W' );
define( 'NONCE_SALT',       'QkoIR*^^HzJ 7%&PL]bR1{&jhMJew;:^DM-LR6~,o09a8O0Zr.ra5JhzV)h7%d5c' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

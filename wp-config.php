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
define( 'DB_NAME', 'new_wp' );

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
define( 'AUTH_KEY',         'GI>I:8,^I*_QT&.E5xu~->CC&^KUf,X,y5%e9U|BzW_@,b7MNq5v?GPQNf{Dal^r' );
define( 'SECURE_AUTH_KEY',  '/FNuz+]D>8}CAIr=WHI/6(b>:T0GeX.gqGg&?.jKw@4;JseZ^5/iF,U|qPvz][|7' );
define( 'LOGGED_IN_KEY',    'hj.[%XhLS|>rR^O=zQ*u)W!z IX.Wje3V]*IjEW_sH8AN[nyXNqC^v:x;>$iR~u%' );
define( 'NONCE_KEY',        '@W~yX:[w;Zw_xJR0(^M#n:H9$ ^xktM:e^YTy[uyAbo60=F 3x1o]Ipq%Ult2jar' );
define( 'AUTH_SALT',        'p-1V :ovR:v12zE_76Th~?#}%L@y6#@X_*pRZp|UV<<=3rEv)4/cZS]UwY6mp+fh' );
define( 'SECURE_AUTH_SALT', 'f`w9/N_VlN-~4[C4vw/7G-^cRUZM,E2c]/52r4}|cA8n?$vjrEp7KE1{H04{4wKk' );
define( 'LOGGED_IN_SALT',   '`vE!GlT_^<&zteSPbo=@~w,L]cXIs|GT(J@8tcbl@M@eJHjhI!}K3,M1Z(~TvR&d' );
define( 'NONCE_SALT',       'Mf@Z?kZZSdbG,B#4Ck{=<iLeO<V,0 6n(5]wf<v<WN:x$S}GjYN{OuJ$]Lv#T]92' );

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

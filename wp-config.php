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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'VMKVn+W$HNps%_w#sZzpy[s&Yp||$c5YDU*_XsP,NE$pz{fi*@0@mP|ZG*f*>ErV' );
define( 'SECURE_AUTH_KEY',  'cm_ ]-t;?f)]m.rRN[lygF0|swIb_9yp;0?cL/fOYVJH81u1nK`MG+ !uFKM3w%E' );
define( 'LOGGED_IN_KEY',    'w#NG/IHjAK*|7dU^alwb$d`kNn8mSI30v}3*7K$>D3rSQ,M+Nxq^|xaHC0:I 2Em' );
define( 'NONCE_KEY',        'W,03Vmls]QC3HK7B&OY.k&>&cnm54`*ggadpMdo iVnDXY=wh.,7,B3oo%=O[tJ)' );
define( 'AUTH_SALT',        '1-ERd#$<mL]|iU1dJf,r~svkQ/NH9El:$z.S66noZ4WwIksZ6pjlJ4Ir<9A+lRGX' );
define( 'SECURE_AUTH_SALT', 'R0(92F3}c@Z||T~aHXYY)64Ct3.XjdjQU |@{r2f)ja.b{zANU>g{87uF:Es;`-.' );
define( 'LOGGED_IN_SALT',   'WMlZH)PTR:^!O,l 8^pjbj_^cczmSVJSmN`BkMu~Gs9GopkA N9dR(4.BrN{Iz5(' );
define( 'NONCE_SALT',       'W~aa9-iPY3es-6+wl5p55&fz-X:6|2+KL)cl=Kh+05V4GK~/N+}b*uz8f~U~l `x' );

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

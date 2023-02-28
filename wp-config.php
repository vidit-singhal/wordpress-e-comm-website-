<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings

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
define( 'DB_NAME', 'mywebsite' );

/** Database username */
define( 'DB_USER', 'vidit' );

/** Database password */
define( 'DB_PASSWORD', 'uN]Vb4eZ[.A[oxN@' );

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
define( 'AUTH_KEY',         'X~h7ys0E[G%)QYMnZMw|0s?(A1OVRU(KCh^wQ;E6+vh[l^4460WikPz6N2Q}*zcp' );
define( 'SECURE_AUTH_KEY',  'Pp^b.jKUh&l:hU$fC!wny3p)8Gp5uUDiHmTT>66<ftq&7eN.zhg)b8g8!bq}V)bQ' );
define( 'LOGGED_IN_KEY',    '-#@d!UK|&0CI*9W9Z2cE6?~$ivj~ov=oAsayf:r5*GwbhJ*IQIgDnW#:(l;niz;#' );
define( 'NONCE_KEY',        'AW  6NM_wFTL|eq1E&0)6T!&cJwU/,tke!$@Xc(;2@nWR>QG6Fcj&(5hpPVE2T*4' );
define( 'AUTH_SALT',        'G!43`=VvJ^<Q2QS_~Z^Y,sP=M_wa-341}7HlYOEmsX%(4~l*zz/$qZks;9|2dg8R' );
define( 'SECURE_AUTH_SALT', '!oWkW/`z_W ?;Gt7cYjSpvJE}sX]Z9H}EyIRh?DGZG9t2bR!+*L->xWRaCF^@t8H' );
define( 'LOGGED_IN_SALT',   'Izbr+tK)PF@CvTbAMn6W#,@GfDI[5LErW`MH,9>8k)h@;$K0AK{CY];vk1H6^q9.' );
define( 'NONCE_SALT',       'G/}6@b31q$#rmzxfp/gdZJwGQ..w;wy k4xF7g<nz=B*fs:]LC b[I/yxtmwvnN:' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'vs_';

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

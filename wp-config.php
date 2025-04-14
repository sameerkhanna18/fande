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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_6txuw' );

/** Database username */
define( 'DB_USER', 'wp_kgu9m' );

/** Database password */
define( 'DB_PASSWORD', 'K&d305kbeb6J3Q#k' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY', '10Ip[I|6-JK]aw%~q3)2[jppepoP884;n[t2&R45#SVB3u/n/9w&5qe(+Y/D[&11');
define('SECURE_AUTH_KEY', 'wIpK]Vc%e(ZHnzTK+]|(8@3(b@H5Y3+9!:a/SBaWUxZ/oU275p_ey/3#ml;R-iF(');
define('LOGGED_IN_KEY', '[6;|72Z6g0ythW0w#:5@S%Hy-Lb901c4l/ls|ii0GH3:+QLY4@dP*@e8*;_q#2k+');
define('NONCE_KEY', 'qfIcT5dp4KaW]OmE8wv!(9ua%@s(saA@*b-:;:g1mLV9f@_2To8T%kOK|YrLUGm5');
define('AUTH_SALT', 'W*6)F:331wsdQQ_Gm4UwgCrr(s]8Ry3ci)[H@p&p(|@|L9Pm/5!2BNHzF(SYx+%c');
define('SECURE_AUTH_SALT', '&aP*6JSMc3g%(BK~%/4A#WZF6oE8LoWwn/34c36(-OC[Q]4c69D(]_V8199As-2i');
define('LOGGED_IN_SALT', 'K(SXsGic62h0*3;665hdK0#IXO;fh1h395d-2T;0IZj&I&7I2NE%FKA+F5|&5934');
define('NONCE_SALT', '3JQ4b;6kLq9v-_T2:6%D6o;I7!0129RH6FK26SLiH9/f2__O!1|!A6Aekvwh!|TA');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'KziKjFD_';


/* Add any custom values between this line and the "stop editing" line. */

define('WP_ALLOW_MULTISITE', true);
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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

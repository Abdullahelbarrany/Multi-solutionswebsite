<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'multisolutions' );

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
define( 'AUTH_KEY',         'SD-U2tag,hDUPbSTWHiZ~{CS<60L#dXBZ/d,xf(b)PD*5.e3G[rOL<8X_1%p*]w3' );
define( 'SECURE_AUTH_KEY',  'UT^^y/uUElh.=zy5l_{:`vjAlASRvT#qDlz1vJMSklv{P<>wmF(H$_yU0pbk/nW0' );
define( 'LOGGED_IN_KEY',    'U:K}8m?)2@6Ytq1O.[Z:x;f*wSB=Pme0EASy^^X(n$+ /Ft02S>LOf P^%O(j|=^' );
define( 'NONCE_KEY',        'M381TC1^;v{Av.v&:2iDbXP;>;Rh& %8AKgw;@IyUo}JWKG33M{=D{z~.jUcr )C' );
define( 'AUTH_SALT',        ' --9 Xb C:gt{Nwd=?B.4j,$iJ/*G&_s/]_H<$(pp>^5w.F)>?5jcqJwwf]QpyQb' );
define( 'SECURE_AUTH_SALT', 'gjZUEdzn$3#08.wYqJE^sRe3bXc5)hY#YWRKc}2cVvky0Q]X)Wg~VKj);0SYNe+h' );
define( 'LOGGED_IN_SALT',   '|NSo3sUdi2V,(Ku.xH9^FU[-e B@b;1YG:d!8szPmR9oUKg2]`9B!s~h,wV|GOcJ' );
define( 'NONCE_SALT',       '4v_X-@Z4*5sIvYtqpVS<m#&2FC>jJ=49UaK|A23m+k4j5kkRd+,0RTjuxZ`&|t3R' );

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

<?php
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'EmeraldCitySupperClub' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'WV:]&{Nf8Tj/wwrEO=]eyQ9F/1GvIm6_f?jDq:Q:Eb)tGSJbC0LPg.u_))dNk(A/' );
define( 'SECURE_AUTH_KEY',  '*#0*L2y=y1kBBPl4P7@rVT||)4$s-^<g)y^|)UphN;CW3MU-2QXoTcsooR6Q*FxO' );
define( 'LOGGED_IN_KEY',    'io5r%r:N6vP[5q!}P9,AawU$0e`26wiu{{&$}7@f&_7?` UN8HIQ`4b8WxXtTNV:' );
define( 'NONCE_KEY',        'W}tE`[Iq<_=lj*A-If FUEMldbs`ac$ljj2qwaU#(Qxs-Ph!@NIH9uq[MH[JZ%fO' );
define( 'AUTH_SALT',        '4,jT@?p}DH{qadtI(&o!@0ZLdS/ZL-nPb!D0*~cecdee>#=_*;rhW=12Y7)[oBTG' );
define( 'SECURE_AUTH_SALT', 'BLw1[}y.66 p;*W-R%IU@;r,f[r2>:cnLx<P$e.BVlKHcy?SOMn;=P.U:ge5zJL|' );
define( 'LOGGED_IN_SALT',   '2fHDdii{exu7BL2CF(%$7xh+k&n8yt>UEb@*Jd4B%`&yD&+h_,O6uk boi|J.|8o' );
define( 'NONCE_SALT',       '<(|2>@*.zII-G;phsMoXB.]J*1a_Lcg@VIMRXNeTfZUZOh3hetQ+yzBs P[ur8u,' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

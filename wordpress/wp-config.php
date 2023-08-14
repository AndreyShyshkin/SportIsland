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
define( 'DB_NAME', 'sportisland' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '$-v5$R$)XVDYt*8wQO^+@2dqIOhdRFNI}n+W1zF%nFzB5Z:bC4zLvfL)m/FMYM|h' );
define( 'SECURE_AUTH_KEY',  ';MSS9lQrc@|6Z$K[mq+QN+Bjk!n7Ft28hAA,93-=lM}}/_zq`z^5:o&3>Y_BPnv-' );
define( 'LOGGED_IN_KEY',    '/y>ACJL (Kf1Ie~*Z=%.rdFv Z^(RL*BeQ|(e+|k(t#)eIn;aX0nqo[ux;CN#naO' );
define( 'NONCE_KEY',        '/Xk[UG#[YfC&RJI. ?Wu,JSaV0h*P~kKT|+m ^?W()42(sMpn|N:GEFp2ep__t~`' );
define( 'AUTH_SALT',        'ei<.S{=SeqCmw0N,Emh)ek+I^pbEl2ZzBe%<vY:>QX}<B+OD@4r,kRgOj/XzboQo' );
define( 'SECURE_AUTH_SALT', '8:nMTV,_B@KKdAM1JNVb*^p80QdSn#PXW*9u.w1.STm!@7,(]m4SC-(R);n)z5V;' );
define( 'LOGGED_IN_SALT',   ')IWOqc3%[wSHdzWGD{Wkcky%oKrqhh>A)5z*!n(i8UPZ*R6UZ}I7Y4j5s:Q||dU/' );
define( 'NONCE_SALT',       'tE/Up=SDqS}7 (QHFUSHZi_M(4okPsC<geS$is&~{k~;o`<M!0`CT]g8O /5}!FB' );

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

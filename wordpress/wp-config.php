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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_sport' );

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
define( 'AUTH_KEY',         'shu 6,Obyl*D6fB%=&Fw3TlM%=YNR=yq=zmq-MHv?b_,1&HcH*nVF%K0hUKK(/uc' );
define( 'SECURE_AUTH_KEY',  '</y#[-dm-*vDC}Gx`)` cjzV`] dO;B~:e97SW5{>>R6uF[fJuQTG:-Zn?Kr-(K>' );
define( 'LOGGED_IN_KEY',    ',D_9E}2x6P>vKb@#%7%CR{RK1]b5Jz!I8ZDLM<0Vk0K/!~`B-JCHNx~0619l*fpL' );
define( 'NONCE_KEY',        '#|_mh1^Wpa1m>O>y_z_^i o{e{/O4$(wWd*g^]4J]L[=,]uXV%P6Z5lXcUH=z9nM' );
define( 'AUTH_SALT',        'QjE /FECL)ov%!Wy#,#H;@}w*t0I)dq5X7OPa{wiMS.v t,OiuQU$?3qnGi*7muP' );
define( 'SECURE_AUTH_SALT', 'yD]WqFlnx@CG5GT).g]v5]s[N3PRYiztY]O=ya&PrVb)q9$,ew:6?;E1.hAce&wW' );
define( 'LOGGED_IN_SALT',   'RH~:20ag,n(o|)FIC|aaOT}1iaFxPP!jhm&[*nozSz9Q6G(aun>VbL,{|k4cjSHd' );
define( 'NONCE_SALT',       'd|vz6YYg<aqafU^v)mgqpke6FD=mv#KqX*Gh#zymXx`4A}rwQ,~7zRzr>>>!?0uG' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sport_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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

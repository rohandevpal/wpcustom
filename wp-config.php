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
define( 'AUTH_KEY',         'E/A@5r?:h%4On}c=[]YM_>oP|E=ARB (@ctf 63G0oo)~*>ID}m+-ToQEDK$bLm<' );
define( 'SECURE_AUTH_KEY',  'g1yF]EOvAc/,}kC?R5=%Ti;RzJ O%jlA-^/VkEO8ZfRng{Vj}(T{!4/z,.!LM66P' );
define( 'LOGGED_IN_KEY',    '8WC!ri &(ryk8zm72}a}HQoaW;d.QSj3[J$BO3|#Dk@=Szl{_c(DHym%Nd^d(OOu' );
define( 'NONCE_KEY',        'UGY6=9uMBO67RJB#DBs&m[$Cle_kSiDH>/cp68R=X3eI>`Et#*;X(ilp$G3/*nHW' );
define( 'AUTH_SALT',        '3S.<]}_ZI^{hrW,U#k%itmRah*]r{tUK fiQ_!&l,Slp{Itm5,:#`r%dNuR]i?D&' );
define( 'SECURE_AUTH_SALT', 'V6zP7&v7Qu9ft$8wi=OL]l%k AmIF1zpVZL3(TIhtu&eV`%x}ofbrm6X%WCjP-VG' );
define( 'LOGGED_IN_SALT',   '#{+?VkWt/caJV`gm6sU9;}WK7(YHPH:2F`_dP$g_g*WVJioH?Jh~5-8Ed4KT#n=N' );
define( 'NONCE_SALT',       'Hcgd?$A(V&I+!9RtG.B?u0k:i_+-f <GHA<(hW)&D=*x-r@AW1574Vw,=UT>V7sj' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '10_';

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

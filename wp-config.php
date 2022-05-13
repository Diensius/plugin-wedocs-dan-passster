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
define( 'DB_NAME', 'kursus-online-bag1' );

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
define( 'AUTH_KEY',         '[5i#/1.y.tftDEzH}d8d%Sg:,=:,U}~qyb&J-rHqivTqL6y6i]+|}c&[qC5I;xP!' );
define( 'SECURE_AUTH_KEY',  'pWU)N95,*+7zy7,C!{}#rk39T35yjsE<NAN.,+]]:l#C,JfnJ B1K:^5ZiHZ*dN1' );
define( 'LOGGED_IN_KEY',    'aLo~o&]9J*19d;>$gLZT,o#4HO&q.a*n,1jLxq/U#hn.q&&f{yCFh|8s1kq7Udq?' );
define( 'NONCE_KEY',        'mE&EN$HB^6os~rSwZ$*1kmWD]Ek uJey:$aH_J{aoq0~2Y[Pt$ji)Y5>w^=MT(7Y' );
define( 'AUTH_SALT',        'G{r*5=bztmg63[~&!<JQ9iu8?RKE{P]&g-r4CxJdG+5zLE8/I:+lGV5Xc)KH-X_|' );
define( 'SECURE_AUTH_SALT', '3qTM1.0qrY*@GgAQAf_|S!g:0Ij0RoMOA_Tr4~pCO 18 53]zUVq&TA9hQw=S ~V' );
define( 'LOGGED_IN_SALT',   'ii8gi%9mtp6>vlE-a7p}bZ#8R8Z}LuUC1,hzFuOc,f^?m.DR{r6A:v#3C[jab?kV' );
define( 'NONCE_SALT',       'mO d_?D0|{VqIZ;;5 +TS }S}G>!f^/W_SCjAs}1b!DUK*Z4tit+i[Q-aP*5obUV' );

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

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
define( 'DB_NAME', 'dsquare' );

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
define( 'AUTH_KEY',         ']E&174xW+{jT5g1f=--qp5;0uI#d^44PHW/a]y.B{mJ0n[PD_X:wNqX=J$nu~*a/' );
define( 'SECURE_AUTH_KEY',  'p~^n!I,2MqT:#2;O}(l4sn!_~h~uA%0,KLCTWAsf9X-2|<H3fnmDi)L?yw<D(T2h' );
define( 'LOGGED_IN_KEY',    '&qGBs*T.j#@>,]t2;9`iI6zWrihL_-,4Av1{q^wmQfa}xY!n #bd4nOiE>LsXUVe' );
define( 'NONCE_KEY',        '3^K ;<*2gN-=7K,D=<kDaNz}o74,03)RUrQ-rzYV#U8]p!Y8Xcc_Je6=Q=MF {).' );
define( 'AUTH_SALT',        '/aNKI!sdM1z{!D3^;}Hc}2xM#g~T/*<aE+Y=HZ/:hYWIVFn-1muAVR38-%D-Lu!)' );
define( 'SECURE_AUTH_SALT', 'K:O;,VFM$FKb#b98p(0CD:H;,2x9(Q_I/=-/#e0ThA]LSC?r/lVD4wkQmzj*l@*|' );
define( 'LOGGED_IN_SALT',   '-1S9fQU?nOt0ht2hjHkH(!xGO,3nK*qp]xQ*SfH`uZ 2PYNHH<{`=iF6hT #CF%U' );
define( 'NONCE_SALT',       'd1Jre%2WNu+|Ao}zn:DwG<Jj6T7Tf8U?v]pG+O A)5e[Dk21LEdH@FE_WuSC;#9=' );

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

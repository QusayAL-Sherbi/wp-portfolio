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
define( 'DB_NAME', 'testDB' );

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
define( 'AUTH_KEY',         '.;`]j<k@(uIge*m axe{eNb<Z;g>On3JC5]ZT[^*v 9qh6wdZ 5WrajG|:ltn[,!' );
define( 'SECURE_AUTH_KEY',  'p+4VrtC3d<m7o}OjQ9Ya{*x`uP[N9,,|hPLSRg:bY?x)IiB/>EAN}gJVnNV^9^2<' );
define( 'LOGGED_IN_KEY',    'Gf?T!Rf~uqH]8Y;u<aAB-qsX%OGOsx4|yXB^j^7H `snH;zvY?16y[_!4IWm+1=:' );
define( 'NONCE_KEY',        '-pR&{0Ow-v%<s}ZE<$4i2$*j,`FXc=rmqjh-&I#=R9V }#GRv-WPfnyC;UpPA_KQ' );
define( 'AUTH_SALT',        'SFHD+`}C)-ydW88zVjZ|RCJ<dp?Lbx%x*{yzDlJt;%$2zT6Fjh~GfX.K%2!M<eV%' );
define( 'SECURE_AUTH_SALT', '?<|mWu1/Z (dOaA~ $7Y+mYn}d!(Xj,I&XKZ2^*5Ub^hetkwnr)dttYf3)b.$WC3' );
define( 'LOGGED_IN_SALT',   'rE%W3I3&KT@r[J-rs8:,ezVD(#f<0hp^2,9k.Sn.-?6by:zTI,TbwHt?1m?71_).' );
define( 'NONCE_SALT',       'mR7ozM(thrHErC5c7SB /!e.|)|g:R9>9QV.0rn+fV|lg>CiQUBbsA).~:U;E1UV' );

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

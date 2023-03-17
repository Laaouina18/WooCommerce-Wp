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
define( 'DB_NAME', 'woocommerce_wp' );

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
define( 'AUTH_KEY',         '%lO6W[Cbi!a-f5P5tzaY38eGfT26n5PYz{![::q3j1sAB5e)9rYsnX6!&dPs^M.%' );
define( 'SECURE_AUTH_KEY',  ')1EhVL<o=Y#W7YH5:k3bg0nvyEv%A;Y)1*,#4/<asDOV)58ukGz.wxK?o#HLh=yY' );
define( 'LOGGED_IN_KEY',    '-z)k#W?5PT+e{|)L>U[n6YrWGx~1oW6O {$5dhv9u%q-7Fnii&^GVe$e!se,flrT' );
define( 'NONCE_KEY',        '(+-P;JKe]%hC+gGqz~*9f+. KZnz]m.^uC.283l^6g0%&(>nEvIP]r`[_zEURhMS' );
define( 'AUTH_SALT',        'Un;8sL6;~|+XP>Ai(t3/i y]{lbA|Anq$Y ?PA7LY@_>j!A!-yyW?uE1JsNu?*V|' );
define( 'SECURE_AUTH_SALT', '0=lnrX,Kg{)X<g;2DRhAz()&#<T~tH[~8!+r%fr%+ ,]TxeSvAL8SQU!g^#EgFWb' );
define( 'LOGGED_IN_SALT',   't1;h<Ou4SVpzTCL<k-dU<k,<T>[j?v{k#Lx~]?#)^FX+_37%{=v4<V7I1JfQU+{Y' );
define( 'NONCE_SALT',       'R*iR%)^*f5<{ayXEzM5lj>I.8HqV+y^4%$jWb0-ZhmPj?-gIn:D5|ShRcOXQD6`v' );

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

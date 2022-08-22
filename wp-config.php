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
define( 'DB_NAME', 'myPortfolio' );

/** Database username */
define( 'DB_USER', 'iheb' );

/** Database password */
define( 'DB_PASSWORD', '1A/kDT3dfT)!zgVw' );

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
define( 'AUTH_KEY',         'x3}dtd?%:973<gmh3d+XAYxc8-.OkbvwG;Y/Q%L<{?51`K;+oRaR@UuEVAl=r@.P' );
define( 'SECURE_AUTH_KEY',  ' |O8Wo{W~!P2&hA3|qh,GouIU^9w>6x.+9@RKw}Z$>UVMsQC}r33#qO5I)$>M>,a' );
define( 'LOGGED_IN_KEY',    'AUTP.N^o_7f#/~DcI2(}858-pLa;V?jr<Zc:uo7/_Jh_ruzztQ%A+H4oy{RthcGL' );
define( 'NONCE_KEY',        'B<|z641ZK0E])&bSJ}CKd,obp0d:W{ApnhvvlM1OgL&JCC^EANf_m$&v,Zq^cs5+' );
define( 'AUTH_SALT',        'G/tj)Y@lpQxxv7JVwdf&p]@#c3`fV?^e5FCsOCHuXu(_;6t0(S-9*15U//Z 8 c$' );
define( 'SECURE_AUTH_SALT', ')9Z7X8r$hCw|TD%x9M0t>!6GGJp~bSIMRRE]w?~9Y`p[SDN*1HCxngDI{J<9mYpQ' );
define( 'LOGGED_IN_SALT',   '>Oey08Qh&fU0Ms_Igs}G9()iu@V&aO 0-F5Cg%ofvJ2NQ$l#EcURk*T G1&~/CC6' );
define( 'NONCE_SALT',       'VKc,`W!7akzmT!M1aW #TaS`|H/)P~Xofoxr9~pJ*?c@<a5P>e;|sixqN].n($V:' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'abc_';

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

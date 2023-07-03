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
define( 'DB_NAME', 'soslsketw' );

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
define( 'AUTH_KEY',         'uAGW{!$c_?X!NQijeX0/v^q@#285Soow3yX*Fk:>zU~Zy f`VNX@A1,L*(.$?Q>T' );
define( 'SECURE_AUTH_KEY',  'pC_</n$ot(!Dr5*F~$~K&v{gEX;1h/>$Gt*{ss&GvZ*Z:~a:25fS} 1^!e8Ol#gc' );
define( 'LOGGED_IN_KEY',    'S1jS37&l@MA%kIGaCGNYCc:nGN5d<bP^`<^XL2OJw Zp2nb`0-tejzZndNL~1[.y' );
define( 'NONCE_KEY',        '!~p`.+j7wC_g4]`YIR4b?5*_8(V#8{hV$)Rr<^= kXj_7LXyXUc]]!DH} f>#FAW' );
define( 'AUTH_SALT',        '_l)vAsZTpG(?y:1f9[]*KHnY:]pr$@9ZsA98jqEx%nW|R,}yd203WFQk~M?[G0,B' );
define( 'SECURE_AUTH_SALT', 'm=:*1R,|YHN-2;_Bx=W;qTD`pQ^<zrXw1D0r$]<[w0$LJ{Z2^cpvz/^Zd{hk}a [' );
define( 'LOGGED_IN_SALT',   'j|(E9!B)v.+Q[C`!,K#Lw,*=EI!coT2*E].TJXIB&xxqZ`lbmpuLQ>plv1r39CgZ' );
define( 'NONCE_SALT',       'P:K6C3elzxR|FzL-$L[.66s!Xz3-jwi4KLe&KLD1kL[VXpD-W6-.(@<eH$?GtJEK' );

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

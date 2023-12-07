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
define( 'DB_NAME', 'test' );

/** Database username */
define( 'DB_USER', 'datnguyen' );

/** Database password */
define( 'DB_PASSWORD', '01680865a' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         'a:7J(SkE+!_k>{7x2r c7#s504?5$]I}%c!~LOS%-p|^C7u.cG+d j$n/yOvOF:~' );
define( 'SECURE_AUTH_KEY',  '{*/Hyr60r0N*<xu}Q?kT[ujGt7ME7.XB)41zJ{*TLDFEYv7sv.-paKzS_$JaI(s]' );
define( 'LOGGED_IN_KEY',    'JZTNb{ji* xRYSYRXA!kU6OtWn#l/kq+PBS3BXkpfvIW>6 tY>h;]#8x7%{(_30d' );
define( 'NONCE_KEY',        'Lq]c-hh#o&<%.~2-@%@&t]D*%f>g==BUUuzWxD&-1{SZK,j*)bX1dDn#Ibt&N{oh' );
define( 'AUTH_SALT',        'v@?,Z~~R<bO_-`UDd`pEP5,,?ZuE|m71na6D^w,}~!)brR+a:NRE`m[m~].g9lg<' );
define( 'SECURE_AUTH_SALT', 'Os_Ff7$o-aca.j|Qj!gX/Iq69uNO/foPfX WT*E6s3uV^^ N(CoMb+>dj*_2b#xE' );
define( 'LOGGED_IN_SALT',   '(_Y-ZN.yiO 5NY/VU.Q;(bEJQ+!2VGbZ~ dCdUcSqyrg-OYSmj*W)rdcCW #})`>' );
define( 'NONCE_SALT',       'd7(d,10($X`gQJH%/rp?n$<+5&F7%qX4u@fI=XJ)*^Z@1Na<I7+@o2R#3}I6MPV~' );

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

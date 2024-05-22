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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u937303877_qj0S1' );

/** Database username */
define( 'DB_USER', 'u937303877_TNxtm' );

/** Database password */
define( 'DB_PASSWORD', 'YLWLWnDhv0' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '9=XA).#Lk#FZ4WUHgcil+ZdZ2v|vuO|bP+V.XiH&bU{&S2-F/Y>$ta0^~,),!P:G' );
define( 'SECURE_AUTH_KEY',   'zV=#3CGKUve*TUY6&B|/2`42C-X:S_muf8hb `(oE(zr3eQ<O5k?[8~888@_R]:}' );
define( 'LOGGED_IN_KEY',     '92R|rU<J?`6ch0+.m#X-bSLm>3a(p!-;PE;l?%H^S/P[11Ap@E8yq#J}4B_rCDuf' );
define( 'NONCE_KEY',         '&`3aZh{IM/615Fy%7Jhx=/&hdHD`R/L~?f9Cb5(KA5J9<M9$QV7e<d]=iL bB{W}' );
define( 'AUTH_SALT',         '$nJY*Q1{zWo@</M1q9IC/afme5|jk%k6;T/^U@K<dJ1XBrYsM`o>iQ:W=:]``0 q' );
define( 'SECURE_AUTH_SALT',  '3r`?H{G{wE`dO;;~@h:W1xyevMoN+ha1%KgSot6ufFw]3k./J@d{$![#%;!v2-zD' );
define( 'LOGGED_IN_SALT',    'DL8Q_$OxP0t~W=Kh1uT-lg%g`{Z:aq2oqddh[,_)ySl!70[mBHa1L<J!&3)[0L@S' );
define( 'NONCE_SALT',        '&5QXq)gRp;H2ijD%!^1 DYjmNTf^ /0gOSwaz.;ROg|t9!JV/;3uZIRgV*q&0nXw' );
define( 'WP_CACHE_KEY_SALT', '1n.(5uuswN+HD*zDmPdGBX*_;3</hJLeI,cD<GX2pvYHuAYdL$=;<Qz*i,>#B]Jr' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

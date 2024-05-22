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
define( 'DB_NAME', 'u937303877_nCt9C' );

/** Database username */
define( 'DB_USER', 'u937303877_aGQUx' );

/** Database password */
define( 'DB_PASSWORD', 'nOtPzNnMtn' );

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
define( 'AUTH_KEY',          '3ZJxAv/ZqXN,&xzj H%H!yM#_nEaxBkZ/T<jbhD|!cys49(EeuVP5*@`EdZg.Vv,' );
define( 'SECURE_AUTH_KEY',   ']mgMJ|^HJ_:L`Pzl6[*i M&u&%IO,tj|xt];?1Vtvp;1em]l:0C1P*eWd>J[,_r.' );
define( 'LOGGED_IN_KEY',     'lxv`%;8hHrV9zWetD|m(^@,n*C]l;O.Zi&uHcj,eD1pvG!+X~3mSP/$e d5_oCB]' );
define( 'NONCE_KEY',         'DCB<9CuZa5*/=@1^c!)5i,$Bn`Istfj9}pl?(1$Ev;b#yn@,v$S0 lk sW])S?%)' );
define( 'AUTH_SALT',         'I GVk%&`uNH(Ad#cI!fB;1}RT~[)%7(oY?HrGa[e|(2908$i{(;W1aT>w-I52&4`' );
define( 'SECURE_AUTH_SALT',  'pbTJXRCwWr^dm C;18:Rid(7^4~ay@6pejbl h,6>wmR],Y<Jz:]g AWQ/Xi}u?g' );
define( 'LOGGED_IN_SALT',    'e0U mFvZ`J BSMqCAS(%UgrG$wI}ZSbbVQ##Kkxu&JQU/fr|T8#lA:^uS_SPBy{o' );
define( 'NONCE_SALT',        'SebkIC_#s9yT22G+69H1@/0~Zq6=dMciVLjH4S2YJS_>Lhe[JtAJOu9.G;M36r(=' );
define( 'WP_CACHE_KEY_SALT', '6:sLz&X;Uq6@<pVi7(@7B^,O,S$xA$y*}}eA]]8B&Nd:4w@8@jd&N .ne:m|LZ6`' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

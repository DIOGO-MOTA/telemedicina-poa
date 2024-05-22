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
define( 'DB_NAME', 'u937303877_njvDO' );

/** Database username */
define( 'DB_USER', 'u937303877_x7nRx' );

/** Database password */
define( 'DB_PASSWORD', 'jPTnKe3Epj' );

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
define( 'AUTH_KEY',          'u:1L{6S!%Aevm-$D~t)nijr&YPT|Fk,[r:Vd$zP:<+Y#$Em$=g;?wLff>FlK-TC{' );
define( 'SECURE_AUTH_KEY',   'qw!sh3b8^jG.qKM8TrA8QDoZ|I>.#jD[**}>2LuG%Z%G$R|?Q},-sZDD$y>8geWn' );
define( 'LOGGED_IN_KEY',     'A8k47q_0L5M*#EG2KS.Zdlnt7+>)bikL}-q-]O(U |*_lo~S(yxDAv[tlL;~82@=' );
define( 'NONCE_KEY',         '#G5Y{WYV/1cQQdV<,htyUT ?E2a[n<T^<SrFSU|Hbb{$uMg]z=42A!f/41GbVq7u' );
define( 'AUTH_SALT',         '-Q:.(9MqZ.ggHq_O`v 4?rYA.2R4W:#UI0j)xsXKa7TJh`Gu+;^R:_E]^Cm0>S$G' );
define( 'SECURE_AUTH_SALT',  'Uy/Mxw{p]Ahbf}KpM{$2|X2*iPff|O6*V<lsfgZLl8 >fY8AtYKRtni^xcZ@_]%n' );
define( 'LOGGED_IN_SALT',    'W95t=8u-Qm]DbnFk91C,h[XD/;`r)gvg58(4voZ`~ahQ|~m~C@F}N N+:a#x$`a#' );
define( 'NONCE_SALT',        'Fm7rI`8th#<7%U1s}1QJNOsF|$*1E]%_>Ps,[mG_JHs4 a>I4dF?%cjat1=os4gX' );
define( 'WP_CACHE_KEY_SALT', 'g_<-(|ZIB?L&yr#X=dw%0.9 g)L>SL3tJQiYN5M#2KtmT(dC ,{!ZY1X>|0X2g9f' );


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

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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'gQakTF4.Qe$;^r^]QnYB-PY(ohWqKWH!P]2/mEH]I_,P_{c![oj}AU/6s1h!O_L>' );
define( 'SECURE_AUTH_KEY',   'Mv<~=>-H[QyO27DNX<}0@nkH?w~[Y47/jYksMJtc7f 4zve5s> ,f(.9HO MoIGH' );
define( 'LOGGED_IN_KEY',     'N0SceK=7>tUSq^W@7z82}%hlP|RqAz)&VuvzF_%1,|CP=tiodJR+@r@1wM=.w._N' );
define( 'NONCE_KEY',         '[BLRYKG[i?-Y/QxhgYC&[R 2b_3z~EUy>+`)S/3`^!O.piKr`#;K1{0V/v%T-sVI' );
define( 'AUTH_SALT',         'w#Fi7 wqPG+(NB>l6Bv8dOOc:=*dCnIgP~YxlIHbu,s2u5bmzNh M^X%`^zXzkus' );
define( 'SECURE_AUTH_SALT',  'G;K`Hg=IWHzVh| Xjpid$&!4ZDIeV2eU8?yh`9W4<!c;*u$|lD/=2HPr@:C#|-q_' );
define( 'LOGGED_IN_SALT',    ']),8j2/#EVm~:{$GEO_)cL[6M_;djz4x^t#Co:NbK8?RBaQRVV__vOd K&Y`%Q`<' );
define( 'NONCE_SALT',        'J5>;|d(cn}qHyzo#Igp_w2 SDnWJ3)Xs&c:m&7v77>e$Tt00Ehp:n/O%amcX<@mk' );
define( 'WP_CACHE_KEY_SALT', 'P1sh!qSyMQE0_~ld9-Jg CGyT Pm F^XC23e?YD}wQpGHZ>SS&m3z, olo;;I`Q[' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

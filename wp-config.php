<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u557803084_VED6F' );

/** Database username */
define( 'DB_USER', 'u557803084_RNY9s' );

/** Database password */
define( 'DB_PASSWORD', 'MTlKkAZ9Qi' );

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
define( 'AUTH_KEY',          'T]Rx];YDIb~$g&]xq@F,}@a4qu&9H}JOE`2,5{xD+{/NRs!!{S@gSI`|H=[HH$]v' );
define( 'SECURE_AUTH_KEY',   'Q[5`E>Ku{5Mk*4b~GBv>?9FpY?$R2 5vMN!{,z+ghfv~aC^^E|(>|Uv2^!#5(`hf' );
define( 'LOGGED_IN_KEY',     'z4d~_uB.Vtds{6>[x[ei&w4X##6&vjQp:C__-B{mqHK,dK9tZXSgjs]V!#Y16`R#' );
define( 'NONCE_KEY',         '&TrPf[l~z(0@ad_W+x<zjU.7E9M0D/c0+W3nxC?~~VP?btX=q*8TZK7m}f)pUk]4' );
define( 'AUTH_SALT',         'p;Y!JH!8?(~k*GQXhS)?kH0dZ$<a4+&wGd5? =pz5-8KolTsH1Wx @`dP6W*uphS' );
define( 'SECURE_AUTH_SALT',  '9wEoY-q4Wy8#w19>0hOV^x%al8&k.n|@(Av2Nl(0Fu;)Q_?!z,yn#*df~1wzW*~N' );
define( 'LOGGED_IN_SALT',    '?~_;=>Vf#__p4t;,Cg,c>|o={ps<-lP(~6F`b<<$~!L]lf]cb7B3z)HkNwl<mO?{' );
define( 'NONCE_SALT',        'XY`C#x3i^,%m~a.]&%{&KY6N6!b_++~QQ~TXBq%/F_q~&_ZkfMHRHG6T)^U*8ZJ7' );
define( 'WP_CACHE_KEY_SALT', 'Ri7^cj4k>(0?xU,J!%~YZ1YMjLv{n{jMDv2_bk@&iB%<R#>h~_VD;Onng,}d:fCe' );


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
define( 'COOKIEHASH', '0fc388e7465906cfca6cc1f053663808' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

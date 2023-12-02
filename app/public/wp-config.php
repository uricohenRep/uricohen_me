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
define( 'AUTH_KEY',          '1_MG0$HxuxHZ3umkP^c`~QIk?VeaZLAzB4bTx7gXH^,N00oH4sfce;rTk3i]P^lr' );
define( 'SECURE_AUTH_KEY',   'JeZ[bph;hKxKKXc9@)bx@!HBVdqL1B39nVb3;=c_d>|^Wg%o6HPS&zXtdUzA_oq.' );
define( 'LOGGED_IN_KEY',     'QNe+F6n:lix%{L@(STGU*9Rgd(I,^dU{}hX#%{r{dRNUi^sG8A4gijWAy<[Jt-X9' );
define( 'NONCE_KEY',         'q08o/(OlCZ7oS. `3%OR[pXdE1pkN9Mmb2M{1.Rz[.z31(78]Tnve3Ax:arhT,_b' );
define( 'AUTH_SALT',         '>2=9k+^~5OZZP*jfS]gl, j(Ghts3KHq,@PG/m7JZH|N7_Y]PFPl?3]KwJYS$4!N' );
define( 'SECURE_AUTH_SALT',  'S`ypp!BcM0w!VtM5NHM/e-.fK_0<pYA/,t%GX)(_z|+sv#CwB0Zf|yW3<dmyZO]b' );
define( 'LOGGED_IN_SALT',    'tlZuBchK){u9SM<B?aP!KM5@<:vYN.wTmuQVQIJ,>q@oG~4m;|tNn}+dS|@U$5|S' );
define( 'NONCE_SALT',        '9g ^0xA=;5r7*@Fp%u3Sq6d]mInGeX0e1ni*d/es^~8l`bWs@!xEn.Ydx[gQu`t!' );
define( 'WP_CACHE_KEY_SALT', '[K}SZb9YgywCVe9u<S[&o,b?%v=~c)(GUX&&6Q)w.6)9!Q;Ru4Q;18JJRL?}L9aI' );


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

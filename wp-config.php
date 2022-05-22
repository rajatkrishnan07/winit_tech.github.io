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
define( 'DB_NAME', 'win-IT-tech' );

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
define( 'AUTH_KEY',         'JO7|?=%}oulU(y`DGmX*L*#(OFOJr{qw`vL@U&3+B-i[.+X~yap]_3%#d%u`cCv(' );
define( 'SECURE_AUTH_KEY',  'U*?ioG*0e_7mRbaO~V)*`ttgP2X{zY6vl2mp#F?-ov&ysvC&LPD?nL+-_UJ 48L|' );
define( 'LOGGED_IN_KEY',    '![eYsKhQaw[/ZUD1@%HEw<od:U/?c>|O~KCd}0v+;A@Is?+sKIA!)cwYU>pA34cI' );
define( 'NONCE_KEY',        '09<2mx8Kgh)=/&*2_BL(N6nv,?[)T[jY!B}4W.oH;-P,t:tuV++NNrrkEG3k:}}U' );
define( 'AUTH_SALT',        ';xW5ng}O|Q`f0cu{A-9sj+<IGmN!s+qJ5$v3hF#9Os N8O{IYZkBnN(_Wtt_(:x6' );
define( 'SECURE_AUTH_SALT', '0u}=&~i~W.+nl7z=puJQLvI=>[H-q}PBW8+Zy)/_usuV;LT3D[Y4v.ycRsmp =]F' );
define( 'LOGGED_IN_SALT',   'xRnTE6CMz6V~(#(fc@XBzT8StQy:fxoO[+1NzgjK]3d8=jH!o^G6h`5I#<R%UPgk' );
define( 'NONCE_SALT',       'zeA]fnoY^QtPv8#zGXarQO;#_!+D,h1NQbOC/(4RJV(PROZ`kqx:jvd}&GC.!8B#' );

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

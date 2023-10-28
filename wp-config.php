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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ']`@f/(}2TBGJi! mhz7Xfi~x^8Cbgq8 /f]l^3U%<+pv}!MtlvQT42@e3CJQ/dl ' );
define( 'SECURE_AUTH_KEY',  'ky}=;C4La-yn0bUyUi;tj<.%/tv3!?;]4q{)#3e<;>2ah!mqreF:,iXQ8<(SDxh#' );
define( 'LOGGED_IN_KEY',    'a_AnE#BHn8tW3Au@Jv{.|S+)?vJ5N^^k|X~=`3~MB~ uTe5iQ+aLO?C`t|@a/ZRE' );
define( 'NONCE_KEY',        'qylB`Ol,2?Q#E#[|V@%12.l.O9eVxPl`,x2^{SbhWV/}mX--nKD{vnU~o.(8K-mv' );
define( 'AUTH_SALT',        'DG[u}=cxyHjT2fNL]JFYJl]g$(Gk&3AFkd.@6N,JoNWZOVL6ie_Ir/[/tz=SAdT/' );
define( 'SECURE_AUTH_SALT', '7y&j][[OIk6A0kN4)Z.d/0,ba(ec 1@3tz=85YMkgh.$4VS#4|gs]Ah<n<PQ0)mj' );
define( 'LOGGED_IN_SALT',   '4P,GPkV?0&/gH6^zM~C_2KqO=O*pkh]>]bkOnH#B)mJ?fXh>!;t=pk1Ijs*j,1<;' );
define( 'NONCE_SALT',       '_[.9a6A[i>;5S3c8Z5J|JM%;[y>[g+$TPHWL&?MnaiSmw%sjHlCpAB_sxdWTh1dh' );

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

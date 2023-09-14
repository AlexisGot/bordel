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
define( 'DB_NAME', 'wordpressexo' );

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
define( 'AUTH_KEY',         'B<Gz7t3Kj$ubreKu2`,*SqZO:-=0D-agb7SKoC{([?la]wd=Ox*kzUsD_Wj[nw, ' );
define( 'SECURE_AUTH_KEY',  'rkBVXj9q[& 9WBx3_coaU6?W~*x2A,Ff]5hBRl,a-?Z/j]m;7)G9,i)`ik)H:].Z' );
define( 'LOGGED_IN_KEY',    'DjEExnTA=s`.&4*BaIX(& p^b8=Ry!.REUb:}ZUdZ!O*ZW4l>RI$UCRe@s|8RePk' );
define( 'NONCE_KEY',        '1Y]Z{1=@TXws06Hw6cMaLcZMp=1hdYWX8,sb#LN9R!}UpHd/ XLkvN1{X^xS(8hA' );
define( 'AUTH_SALT',        'QsP):|:sPCR^?$1$o^&3!A0Pz8a1e`KZmh=t6mr`h=oXjN8/1a(4PWrh20D-.aPt' );
define( 'SECURE_AUTH_SALT', 'K`6F;N}t/Mef?G0rK#V|Na#a,%sAET8B,|4u}y3Ur =^F(?wxeFMD6R5-{Wjy8Ne' );
define( 'LOGGED_IN_SALT',   'Os>lh=A<0{ak,F~$siV4yi0D&fuF?*&k`9k0W|pG|s@Kim *uNUDx,3<vlCDd8S/' );
define( 'NONCE_SALT',       '.;y6Y]=?#nfZuJH~Jnnzcx>ROrcRXwRG&}%T87R86Epg5|$Xch:k; $zsa!A|M6P' );

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

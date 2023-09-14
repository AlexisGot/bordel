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
define( 'DB_NAME', 'sitewordpress' );

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
define( 'AUTH_KEY',         'PoJf0t_5ZA<{qUF;_ Dd*Nxn0+&i1!/AFH@[+%,1N/(c5U!Gb_u[t}b&Fu9r[Xcx' );
define( 'SECURE_AUTH_KEY',  'r+_~r#9J~v!ST0mx+X7E6BN&(.1]fAl#]{&g*r@av,:_bVenxx^dbGA#SojV`<~i' );
define( 'LOGGED_IN_KEY',    '2074?oj$%P7dxR%*4<@dnYM7vk5*v7l+*dqt89mU<mQ0kbw($pc/O$Y[u=FL bs&' );
define( 'NONCE_KEY',        'nK*&N)3nh78k[FFh0(H,*Y_z.:%:XZW<E8UliN:SlugWhxq#Vziek4XK7OR$?Waw' );
define( 'AUTH_SALT',        '].bM8<Y3VA]fes#~@JrI.&fYjgBqM&7MGX(n(_5)GJt.DF%qzW9.19id}E_]i1J{' );
define( 'SECURE_AUTH_SALT', '>fB?UcS.M#Memj8m1`)#SQ7mp&uY*`!QeaVm4Z%YhKTQ/6Eu;tz.6(:LZ6<|hxv&' );
define( 'LOGGED_IN_SALT',   '(rU P*FV3Wb=v^>1De>KO,3Z~0,dx@oM%2G_n)J3Va2:fY-4{q:*Dr5L35Hbs5s8' );
define( 'NONCE_SALT',       'R>C%?GNRIY(tHZBM/m6Lv$Wir<A@gmj@:;zTv+ QCNb:E]j`#=t$!gTdV=<H2>r2' );

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

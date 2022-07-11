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
define( 'DB_NAME', 'cmp_task' );

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
define( 'AUTH_KEY',         '0n]-aGP`x^:?f3i^.5yH>d9YR&xx8l2)}%hXKNExSEu2U?m(/^|8PCmKUCdch=#-' );
define( 'SECURE_AUTH_KEY',  'n4Zx$>:quh 8@#TyR$D*dM_:.(=mT^4{rHmbzcvaHZA{egc*RR2krb^Jx=FK,$X+' );
define( 'LOGGED_IN_KEY',    '$|1gjA]Wj6C4;SYT.b2oPs3!RFBymGcY4)^]7Oo/suP|7J#T57.OMf,GT .sRO8m' );
define( 'NONCE_KEY',        '.m$18?,Y_WJ:04m=hxB25#t8RG[f@--YpMP#:QGg,|9[x$p{`,]F#ypX_R/r+_bR' );
define( 'AUTH_SALT',        'QNa{v|AV?%:-U=p>*SQ Yf#h/RY,uIS%m~-ZM#$<zXp_tQAABR{Caf%TTt!$Lr#_' );
define( 'SECURE_AUTH_SALT', '!k#<3d&I I0(PBr(j3z.>3?JKm%#16zO@8rs7(](=vu9qrQ]C0SD<=*g^^-L8os`' );
define( 'LOGGED_IN_SALT',   '! hJ^.WmFO I lclzJ(y!iRgPNxPT7:=$F:9,-l6a&^ko%py,gaL8AW6i7YhC/D%' );
define( 'NONCE_SALT',       '^8A_+m} 23!ZyV/dy}yufOI^~RW8ao6;h^9YTv!`^^K-;:[-<p4i?Q?h/BX{ZKSX' );

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

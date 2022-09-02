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
define( 'DB_NAME', 'element' );

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
define( 'AUTH_KEY',         ']w78mtUjYTmM`0-eW,vB1.)DV{6o sn2v}5L!::c0EK#CyPX8VvD_u1d/5J>3oNP' );
define( 'SECURE_AUTH_KEY',  'wVKznvoZQ},Pe$rnh(!&AVt_$cKB%YQ~=*W37cCumIdz/S3H5HV2R|A$aq~B9mtp' );
define( 'LOGGED_IN_KEY',    '5J?xwxkK_m*Kp@!:N]@f*FI{;Ch6R!.LA$tu!5CAIQNop/*KQvEet84trQF*1i=o' );
define( 'NONCE_KEY',        'u-qDc-2.lg4mB(4aVhq=)_JrOK6q,o],i-Z:`&-GfL&%2GK_<@{=OLo0sAf@CJl5' );
define( 'AUTH_SALT',        'Y^yC3dk~21@#UkI#)((!g]_`jb$uA8u|wEs#oO!96)2|bby<sc{+`SiE L,G~5Ac' );
define( 'SECURE_AUTH_SALT', '^SQ<<?351-bJ$Zr;a>|c^8+{GIE(M@(nq8T1-$1mp,-5a%IT=atzEH#Xlb%p<ifk' );
define( 'LOGGED_IN_SALT',   'Ht{1w:u-uAx-VQ#,,94kM;qAMTXn!r|Z@bP<]q(^07}XWt*[xHO=Y0.I EZx%|>/' );
define( 'NONCE_SALT',       '}~rsNzWJ?G/o#]k<fU$k:3LgLY,jK[FC)?X!P<&6G!O.RTCdAw4G||ZE[!Z,=#i{' );

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

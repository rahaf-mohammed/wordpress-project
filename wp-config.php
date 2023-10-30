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
define( 'DB_NAME', 'my project' );

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
define( 'AUTH_KEY',         '5:l-!TtbqLv8Z%H`>VGc&t__5;P}@{8GV>gpsK4EqS#UX;Sl,8Ae]<@j[# h(l@;' );
define( 'SECURE_AUTH_KEY',  'q@@)osr)Z)_fi7$;4v*8=n0!%Bq-7U:K]?*&~%owNRfmG@5qrrA)#N2Mk26is$0z' );
define( 'LOGGED_IN_KEY',    '}lH:)3OB4b%Q2WX6`Ybv#!K^ts`;[AaOS5lKeq[8@nAVK/OAWY%a=D |p;k%1`yc' );
define( 'NONCE_KEY',        '.t[AzP?h<]x8&` qcY3]rPQ.K;swV9kPvEXf{VwY]SvOLMkHt)jiu%GAFSI$rD@k' );
define( 'AUTH_SALT',        ':>LOW/LaS~7<(uEPMF{}&$LHRK|(A0Xqk:4Qs&OlErXmnQ1R}V b?Yq-@lsNFm8>' );
define( 'SECURE_AUTH_SALT', 'j5*D2WGcG(:f(Pjb!]}*80VBq1w;fS2zMB4`w=%]bl1[f}yjy|#hFBW{+R)1zq?:' );
define( 'LOGGED_IN_SALT',   ')<Pa>Mz/7  TUH5HX$z)g.zu_vrB-5XGD%dws}:qgj,q+~)sKDk2DhX1)?*&L)cO' );
define( 'NONCE_SALT',       'ac7tcG}dgzV>ogC,FWODRP|Z5:ZSiqAVZC~(]1=l;MpTT 8LyD~MD+~U~jCm*&`&' );

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

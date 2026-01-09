<?php
define( 'WP_CACHE', true );

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kgcgozlukcms' );

/** Database username */
define( 'DB_USER', 'kgcgozluk' );

/** Database password */
define( 'DB_PASSWORD', 'KgcGözlük2025' );

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
define( 'AUTH_KEY',         'tznJ$Cpzs&Q!Z4G#9r~UCbTZ3.%+5W#INTCP+Yy-Rm<;uF5d9pX&T1>O]m8lI!WN' );
define( 'SECURE_AUTH_KEY',  'A aWRV[G+{F_Fxt[(xB.t%6+nT$d(oNHrSfOou,4|+}NH)$NS^=5ZUrYTk]oGx?m' );
define( 'LOGGED_IN_KEY',    'c}x&[nIAn2[H*UP3KBfq-h`NYrry`!2e=o8A@MiK@s |_ 5&?Uj`8yd9}2u3-/[r' );
define( 'NONCE_KEY',        '3f8DO]6CKl1.e3m_OoM(KwPoC_U3nGTv`S-qp=,F5 osdb/J17Uh^Uxxh!pW0+oG' );
define( 'AUTH_SALT',        'vG7>h.$TQX,~G;>hn/$V~*N#f2E 5x. 8xht20+bPPBca6P|wn?pr68M SQg&_E|' );
define( 'SECURE_AUTH_SALT', '!7*fFY7ZT}p3<mgh,Ek.sq}EG3_aeWpb]NY*18eTF*h5%l;qdf/({5n|.pHd<8.I' );
define( 'LOGGED_IN_SALT',   '[*?pb77L!0k@|1;7pB,Y9.?%wy~NDaOZETfrGRfM,SQO$gPzOL9s|&6cu]oeB)mY' );
define( 'NONCE_SALT',       '?#}+av1hc@;?QC LP,nG;O3#B$&3k5m/~?C!ArsTY!GY4ifoUJ|X]H;5rK ^LXl:' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

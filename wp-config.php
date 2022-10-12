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
define( 'DB_NAME', 'newwordpress' );

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
define( 'AUTH_KEY',         '3|.T6~f<c3Ce#!)^*3_ghb&j}qqQE2XP908O pgw%Ydf?aLj>oA=O[2anZ]RnbM,' );
define( 'SECURE_AUTH_KEY',  '45 i02mQU?LB!D?~fno)Nl6[}HeTRefq>pqT:1{{tVBdi|Pb2Ry$4WV/3(>(@6!y' );
define( 'LOGGED_IN_KEY',    'E,M,H;kIiT{bP<w#<gP[5 %&q|9911D^7SS&Q6i*bd/W`T@01MSeqyWfMHdiscU)' );
define( 'NONCE_KEY',        'CCegG)*u61k7vd&i*Oh[*9W$PS IEiVP<&)=5EU$ps!U_acT&QZoiCG5-!#1ssNJ' );
define( 'AUTH_SALT',        'N)45?/9QCa9rCK:^9Hf<eOPZrLr(Yk~T1lhdR,/-2n1fV_XxdiB#c/BH<[.)/).W' );
define( 'SECURE_AUTH_SALT', '1}#{Fd.x]EMKGYbO ||f(yFJ<,3@/wH@:uV07S11t.hrXTy!uw?qW1a)qET&:8~6' );
define( 'LOGGED_IN_SALT',   'R>(qWq^(u1~dH)sR#~>e(xh(M6UG^2<gI/:Mw%Xnpk$AyqL}<=OwGZUm;3Jt,uiJ' );
define( 'NONCE_SALT',       'B4q66,b/1es7cp%-jBcd5<LdHbsDiqP8c>_q5M}5-6]vRIOQT!@[CO`h2>ex[6y3' );

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

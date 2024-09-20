<?php
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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Planty' );

/** Database username */
define( 'DB_USER', 'hdouzi' );

/** Database password */
define( 'DB_PASSWORD', 'Mesenfants69!' );

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
define( 'AUTH_KEY',         'G^}`HZQ!PzdHH-*Wj}S+d#Q;Hm0cK5w?PF>=A4iBH:kH6G(W*{GO!uXKG;$WC`Gf' );
define( 'SECURE_AUTH_KEY',  'GM1mglaTS_)|=+VY2+6Qg^M}$,;;F]Ag[g1BXQ_uxVpn=!qRV:nwoED|[(=%T[&?' );
define( 'LOGGED_IN_KEY',    '@XI!<[M4a1PzKI1gCgDJ,@c35+|M;$KA]bCNEuEKf5n1z[|Zd_$kBuFRLf+XAP8g' );
define( 'NONCE_KEY',        'Yn9f{ihVz<0K?%SYLTkiNm~h>f}#J=Zi|7p_~FK9L@]YY[_rP8(P>>NVhiYkcf/m' );
define( 'AUTH_SALT',        'OL!pZjPXRM#r18o-H66eJG.vRsG(YtnqSXN<(-Ib#hG/wTiMHm;Hxal nXOAO.}o' );
define( 'SECURE_AUTH_SALT', 'a}Nt(^m}/(,sb!cdRP3g4wl5}UoXes7=,GH5 N]Pno{P;NI#d:Pq?~-l;0)g~Y?E' );
define( 'LOGGED_IN_SALT',   'd|O9J8TDUd8)Jmu3JVL_>mlx_;|~t<:!Mf@B ov-1R9I6#d`$F@M30br@U1JWJ7n' );
define( 'NONCE_SALT',       '{Dz5k>rWHeMoPm!F! cS0}o`oqan:EGPW4nj}gIPs-9Rt!MDlU<{{8z4#Y(*EKIA' );

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

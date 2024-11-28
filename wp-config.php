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
define( 'DB_NAME', 'ecomwoo' );

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
define( 'AUTH_KEY',         '=(-KK6n?!~{IN^IB|%>ZCXhJ5mN|{xCffcs*.o>99VniD1.I~~i#R>;JRMpXa3MB' );
define( 'SECURE_AUTH_KEY',  '<:[H4>YV?OblzGfvF peP g![{1^HU1(Q^X*6Ty>P6W!m^rrTBNC`7&cv9Lfx_}/' );
define( 'LOGGED_IN_KEY',    'jya;aURn}Kwez-Ijt?eq-,3j:iX&tB39~Zg!KPoi4qtamex0M[-Lmn}|$*rs7VRr' );
define( 'NONCE_KEY',        '#3Vv]NsuNe[<aW%j&09BG>-l[n)55,QPu0yK;}sjbab *L*?[b3U-HRLVC%p>KvG' );
define( 'AUTH_SALT',        'C<~ .gI}C2@<pAul*[ZODs>Wx+Z#%IL:J~SJ,Sw/[7)Ih){+e~B$?[tvx?VW,CvD' );
define( 'SECURE_AUTH_SALT', '&2WxeZY_<U-bV2K 552~J^ZWj(?V^AO<^;2q/T.rl&g93uAgBDDtPAf-d1~Cv(j$' );
define( 'LOGGED_IN_SALT',   '#kEdN_Q_7%E,plUtb=t][LZ %wExqtrI@z3)k}DO6L;~=]CB;>^^|6UnuS*!|Z#]' );
define( 'NONCE_SALT',       'NK=P<7SIgmVQX1*YEIzT2tL!w<q{,Q=0A8=;N/F<r8za(b}o&Z29pY@K$64lO#Nl' );

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

define( 'WP_MEMORY_LIMIT', '812M' ); 

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

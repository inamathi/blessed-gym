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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '28Bw3D}Iy4X<5|q`Nj~KHGhk6dq2GYl/Q|~kyu^Qik(|9U;#PWqquq<2|!^El^2i' );
define( 'SECURE_AUTH_KEY',   'Q2WD]Bb.jdMG_~1^JudALc4C<ZsRt&R-j]IjCp,kryN}@T}=!htSKOkA_@-OzrQA' );
define( 'LOGGED_IN_KEY',     'eK8j5%WA=YDm2Xg[],P#~gJ/@!8>-9x(3{|IWpj@(K$2?8)1(sb#2Ebxm<dvp@nb' );
define( 'NONCE_KEY',         'S7PJY?@O0poyjl=M6QB&.SPV|<j*W}@{Qs/=7EzMkzL,-D6F{}v@M7f]zr;`Q(Qr' );
define( 'AUTH_SALT',         '(4Vn|7B0lX1Jv<i(.|dpqjw>c8H3IV7ru0YbwX,p=fc$Yz)7yHj*7iIcAnD!5kj9' );
define( 'SECURE_AUTH_SALT',  'qT4ocfc)(*!^1F)!zdsh#I!8+^ b,m4@XmT /D(sTkyIqmC&[BF,gFx7K^}%hva8' );
define( 'LOGGED_IN_SALT',    '=>9|S{RSwe99.R+Kc*2+Nc9iyp [dr.i]hHicd#3ddw#q]-,<eVj&>~)MlTkN2H8' );
define( 'NONCE_SALT',        '#Bj5/<TJ{OG+#:E9#lTeXklVorCW}#/l--`L(KY)vir$qPGIOB0S_J#zfT/wdkvN' );
define( 'WP_CACHE_KEY_SALT', ' P;$7NO)CPHGnE&VK%1),.IGW`^)vpV+5kS3$Fy(d~?oxkp|z2]%1i1z[_=U3Hf<' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

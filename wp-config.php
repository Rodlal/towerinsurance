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
define( 'DB_NAME', 'towerins_db' );

/** Database username */
define( 'DB_USER', 'towerins_admin' );

/** Database password */
define( 'DB_PASSWORD', 'n0l(*&LLn)0Y' );

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
define( 'AUTH_KEY',         'A2gBnL+99yvwW6V,Ql$t{X~(34_1*apzFMp1;*]Vkh3(ET>s&!QziI$t?7)e=_/a' );
define( 'SECURE_AUTH_KEY',  '/NP@*u+[kcGv|vcH8H9|L_gD{{ 7DNLsV^*&#B=f{I2*|64l$3PH[acGEryT;-Ph' );
define( 'LOGGED_IN_KEY',    'C+jw.#OEHU] afD&RKgsd(}_Z2xhF,;v*d)_`=yDMc2@)2S#x}$AT=I$5/6)r-)Y' );
define( 'NONCE_KEY',        'nCETcRb2IPHQ}B16#j18W`Ww+us1;K4]8M)-Mf&W>O&4*!~rkpD(`Zf^dM!kkln>' );
define( 'AUTH_SALT',        '|zto4@Q6AE8F*~NJaeFP#rcUne|1mi?{(kwY(DTrBzQ>EAekY*gI@N}Tmh9VIt~i' );
define( 'SECURE_AUTH_SALT', 'nv=GeafhnjZ&.@q~Qn2Oy@6n|W[bnCJ@mOSLO,.H.dJ_1L|v6O-Edg?rrqu~j{}f' );
define( 'LOGGED_IN_SALT',   '[:DB&W:1{`Q[=md?(zL>X+Np62G=LJ 5?1qst1svNK6c~>(Mh;%!)O`5Er3qn+q1' );
define( 'NONCE_SALT',       'duzMb@*j(iNLhFE74K9r30v?*#gIODO>;s;e+J(~#r5V uo. ?.vnj]%)S##%AL1' );

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

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
define( 'DB_NAME', 'wpcustomization_db' );

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
define( 'AUTH_KEY',         'E3aPUlm)BO5x/na8;*F4wIT;tX~}*OEjqMT<jSC>!Yr:BcDEb7NEj<~ea[Mdw}|E' );
define( 'SECURE_AUTH_KEY',  'Hq)dD;1[v6Kf:n[R+ X:w6al?&DQ[cq|mRaQt<J?*U3BhWAS=}n{i1z83-@r<ErP' );
define( 'LOGGED_IN_KEY',    '7#27)khKZANTsJZ(ZEp1fqjdGEz.^;4OCO[y>4E0F[igo{c[sNHJ)I~T1G<xsEh~' );
define( 'NONCE_KEY',        '7-4B[P5-kUZt!0l%|x8bL)uJkQk#k!aMa|PDt3|1Kgog|CrOtf3KpmV4;#:zL`Bm' );
define( 'AUTH_SALT',        'E_4=@[;ZFcj=k^HK#*dDy1RI}0KVas(]MrGDl!F;qnY_P.skKNNTd2@(p7(<O;Zm' );
define( 'SECURE_AUTH_SALT', 'Mhco6W>f8AyczeT~XO0[W!R,&1-ee{OD%=lz*w:KOeUP7,,QSY=2t%]RDi{f[wDZ' );
define( 'LOGGED_IN_SALT',   'Wcs[mWmyT]99<zCQP(6tfIWS}+;JeO&aA[]Od2nmQ$V(XX8a$&KAz/XYMn-ZAdlm' );
define( 'NONCE_SALT',       'y0p@R[r>;;GUqfhO!k<,BqrvP+~#nkU%fKFv7hpiak5lXeae/{oh/&8xmSO zHJk' );

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

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
define( 'AUTH_KEY',          ';vioU=$K@LB8##82^<F`FwW.k01-m(@AA4]GZ@ UE<Np1$T_)<a1@wEvZVS&&5`Z' );
define( 'SECURE_AUTH_KEY',   '%IN<>5@hHC&KV~Cinu;VdlXL|@X2<8SR*(P%N[iRNTH2T0Q,$5yRYavuqLhS!~{<' );
define( 'LOGGED_IN_KEY',     'XDQya3XcP&/sqw/j:L|u&k,(-t<Cl,vJL=[rN>No%d!*63V=w+_xq{dW|<kKPCac' );
define( 'NONCE_KEY',         '8O:O~;KJ{REb=y+xN;iaA1S5u@]~1Y<UmbT#<{:4 XVV[l69DvCHSr+AUwa(6)J4' );
define( 'AUTH_SALT',         '@[/nI#h`7ahUWslV{w[|^kiO7euVZG6SZoKWS;kqqxRBG*p4m#7s(pU.i Cd;[+P' );
define( 'SECURE_AUTH_SALT',  'oH/aWup^hI|@v|d|%Y;XR_PU$38H&e~Lt5X8@9QAL(Zp*GDF2Vy?Gr:7Kan7C GX' );
define( 'LOGGED_IN_SALT',    'j+j23d$v^fa^E/Va{hd5n+#,%jbw iCNIxcNRmw7[%pcPme+YxnJJ9&)3OU(3%TD' );
define( 'NONCE_SALT',        '$+sLVSKT9i)v:: Ynr1RvXZ]gyi[?NZ=o5yF[y9^iHQFr<+] k`IwP}#J$ja3aTm' );
define( 'WP_CACHE_KEY_SALT', ' ;g/XMP]a1-f=`7D^qhfj]c&i3CB&Px&boN4vH%[eG7u_SvN<H):7KuGM8r!Q4~B' );


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

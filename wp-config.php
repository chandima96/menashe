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
define( 'DB_NAME', 'menashe' );

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
define( 'AUTH_KEY',         '(-9NYbEJWj1v|7c{:l5V8BpfsH]oOkU`lrA$9X!9+.%NV_`f_N4u>dtwH5;thLz=' );
define( 'SECURE_AUTH_KEY',  '2zD%OGnX|+Ad1HQ[@tI(Wvt5%pxEe/|LpKb!)C-:U-5;T-AU@$c`fn<hL|}whyU4' );
define( 'LOGGED_IN_KEY',    'A5Dw12lII4>7&65v$UqfTpm*$E9Na%^{,c0v_z4Ebb^u6/(dJ`WHIVNcQdMZrFn|' );
define( 'NONCE_KEY',        '8 {wdHjm7|lV<SvVvK`[Ki sp53?b?nxnFCKUeneF(hC{>uvj;<iD<0*2C)WJ4w4' );
define( 'AUTH_SALT',        '?ls4O!X%TWU{Ny}^</Q/S@WV=2z**Z-`:L(k=QDOvl(-f[%5PrMfoc_vLwR[U1I,' );
define( 'SECURE_AUTH_SALT', '.yOUaG#tZgxAvH?,`Ap^ksbMcM,n$Eqbe|UG~El0A-A:!C{/a@O;,HI:5Lr%:G3w' );
define( 'LOGGED_IN_SALT',   'AEyhT7G^!zDS*b.ZJZXM5 Tbto}/0AnqRpl~EaqW2azqxaeOf-[{]5>gW<j(;qD1' );
define( 'NONCE_SALT',       'viZ2!6xmg#t$aN/ev:aY|juu!PB&6@?q#2~J%jnn_w-gZ;pom-S=XU)K{N0{SFke' );

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

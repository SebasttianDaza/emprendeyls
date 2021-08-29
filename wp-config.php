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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'emprendeyls_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'dj!F>~xZ-{>}[0@;list3QW&i>dd&B<8FH]?W1]j=@:K;K.mdx)`$3%I6:{PH1-b' );
define( 'SECURE_AUTH_KEY',  '~hAfvBBviKp=#p>s-da?Qz<lv-VG+f+L?#F<Zn3XW.6I>CpgHUwvkFj3_T`cJ}x3' );
define( 'LOGGED_IN_KEY',    'RdQN*0=C/$3?0K1F{tm8MP@$O3@:H8zior``j>;gL^oc4`<!gwf )aCwtWm&RQ,q' );
define( 'NONCE_KEY',        'GVsnr5$pOacc~dI#X[!&zVkbJ4,<iai<Pkkcr 0mvaJ21;>WQFikpT;lv#S1zPh(' );
define( 'AUTH_SALT',        ' |Chqm7g^YwXx@lyB-uC}$u(AKJonrU^{H`03pbE0ks{0=B |gZcusBlBxKSL8ax' );
define( 'SECURE_AUTH_SALT', 'NlDdF,.`6OuG j5M2h7O9E-hf.zB6cwf8ZgR5:6+bewgAK#CPP=Sml?N%KEp5ehF' );
define( 'LOGGED_IN_SALT',   '*Mx_H.CPv#Zsw}Zcysps|^wR*farfi4uGftlX7Rtfz.`D]D#W}9N{0=Kftf,MBHc' );
define( 'NONCE_SALT',       'Zx64(7h?n[4$^84>J;)7F|.!Tas0R3E|pRJ!31}c~s/,DX@7d%h_0BZL>n<tEzBz' );

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

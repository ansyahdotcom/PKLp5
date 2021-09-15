<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'pklp5' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'F9fjLzke*Wak:co5kqnxtM&6e|o&cZ4dNbx2W,sYD1_k1k)fF];M7i<oMsc7,WFk' );
define( 'SECURE_AUTH_KEY',  '#BGD$DQKcr_VL52x{M5e;S:E]5g<EvJ-yvXwV#+tu0muBLocRS!eXR+:`B#rhc7T' );
define( 'LOGGED_IN_KEY',    'e2PY>9Ja,u@6pl_dxn8/lLB/eq1|^rAC`Q394Z^0n3}#j`Pk[$nY9Y=||aS-ki+P' );
define( 'NONCE_KEY',        'Uh5@=m-BC_l&oY@t`[y|m~Jf^=F)~,Ol]m]ff21]`t)lkWTMBF;ar9Q#t*z}+!$m' );
define( 'AUTH_SALT',        'W-ORsTU/qWQrtg:w`;kuEs/z/}QT:g$gJBQ:ni{5u+#G!}*e&/3r5;gKSvX3xqN!' );
define( 'SECURE_AUTH_SALT', '?#jt;:${uM)-ev:Nw5`jy!0rkZOZQ$Jlw_N`Hnl?ZH#yIsuCQ(1(fmK>K`)>DmbW' );
define( 'LOGGED_IN_SALT',   'hz)evedSYqdG4ly7)r1aL$1-M=3V=Jjs[jI<ry6vti3;2P(Hm Vtx.=fP4J>U!Z6' );
define( 'NONCE_SALT',       ':M-}f},%I`(2JZCU|Y9T@.IC)][1W~lO,|c=I$J4B(0FEjrM,-ipSP|xsR-jenB=' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

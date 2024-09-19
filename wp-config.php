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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ' 4PQXw|m_FzF:w;lwbTRc a.$m*COmNZ8uP|;EGZxE+@:?Ww+#+0]`~mXMXbmJjN' );
define( 'SECURE_AUTH_KEY',  'F63ctS/_4pu^Cje+$BjL& =tn%;IcLnAe0>?[NV0q`Y1c4yZu~:u!vi2i--:n#kS' );
define( 'LOGGED_IN_KEY',    'pu:_m ez0([n!SW=(kNuScLs)txsDT=(l2Ur|8<okq3!C?3FfmbF _T 6=(gY5cn' );
define( 'NONCE_KEY',        'u7!o)fc!u{oJsh2;nz)T9_<5 D,*S<*cO+g>%%NV=4d,yMn.$7G:sSsCnB=[vZTh' );
define( 'AUTH_SALT',        '8fc/V9}9pD%E.G(vf55{]T&noJy<a~Z>DW39s?H{)4ZT~OY) &E,;0c/7E.+cPj&' );
define( 'SECURE_AUTH_SALT', 'zb?_2v)*E.3H}1#7-^smg[xZ ,ymV>cj:S/g|/W55Hk%m(hP|Q|gGvoTkX,%oatX' );
define( 'LOGGED_IN_SALT',   'OtEDqh~j>9C,u;[.FLZf#~@HRYs@^)KJ[jOyT;|/A<m9K? Hu^/jUI=+77$X/Env' );
define( 'NONCE_SALT',       ';d8J;0`Svzx9~N}#|Wd(sFj_?GdEOw:mGzYTw@^I$_z(u1F(V&-]mp:lW?%e$: 1' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

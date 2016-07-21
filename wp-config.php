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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'imarkcli_visualed');

/** MySQL database username */
define('DB_USER', 'imarkcli_visual');

/** MySQL database password */
define('DB_PASSWORD', 'im@rk123#@');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ZyTX{q>+QVN}LKf5NT3=Z~]a&uwV#zkaHRlRBSsa*DhTLP[luVa ufH#uY;4#k;^');
define('SECURE_AUTH_KEY',  'A}vKB6dDn-YK*=Wi_Fh`G]]Q8y6R,)x06I_G6bIU-j,:M2<8lOcdCPsbrIL;dR(L');
define('LOGGED_IN_KEY',    'TOKGpYQvkZN;.7FP(&1c 9B:]Pxr^%E^tdnelS?4<F1:2uUS:5;P07&I}&7*_+|+');
define('NONCE_KEY',        '%L/3z3/pO+om]ipKl~OFBL+!&LkV+Ts?}Yh&GTOBd5EoZXWE{gbT&Kccj%S>p;(h');
define('AUTH_SALT',        'N1kxWb^=+D;/b`5.ADN#<jZx%KB@`bq<,niesb@tT@a)mj0W ,W#D5+~38-F3.pO');
define('SECURE_AUTH_SALT', 'iS*/E>h4LwvyuvTw(=tR#K^OqyDKu!*J-C,1I@=d2kcazj$[kkm-*>vbB_ew[D.$');
define('LOGGED_IN_SALT',   't.`n3kW`[R0u.:;7m1gR&rt7JDF=IKO+;Qug=tugMz7voub#Z+(,r9?fh7?!%L!k');
define('NONCE_SALT',       'kB!VHZoCEIcq@-|KBc@Veu98IOK+lGXGJ972o8TFz$},Xbj`#/2919Ipu?>F5rTT');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'im_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

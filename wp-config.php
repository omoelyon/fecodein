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
define('DB_NAME', 'commun');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '[)3ms>Ksdo+9R_(E_]RNTlXh(|9hcbiX238iD2A_0#xDB0{8-=9)A P7aM?ZRK_@');
define('SECURE_AUTH_KEY',  '4Gd(khbZ6}Dg!To{@g2!rJnut|ll{z5V}$9b:b~fSBBhI;#5h?4JO~s?-!dx%^fK');
define('LOGGED_IN_KEY',    'u3:[*/Z!w>!s2aLI~x#I=F/<52zV)df`+E0Os^91A6erY|K=Z0&UFV+)L-`aE)vS');
define('NONCE_KEY',        '<*X`%13KmGk;*m#h2nVI&8LaO6lsQl`8D5lF_x|c#1t$QMBJe F]>48/BXKv:|26');
define('AUTH_SALT',        '6|}.1.3[Je&r1eX,Z4=%}OA]AJ/{>zao3_2B8~nR6*L<0ce]QFI0 D-jJCmv3r9O');
define('SECURE_AUTH_SALT', ';3lqSgGE?Xh|0fic>ILr]TnGr:u/$}I*LE1H|VFjNR0kHs-k P(,g<$rcg00l 0,');
define('LOGGED_IN_SALT',   'qgas/wJ~T,~0y80~^SjU?lzU6D;PWWh^HJh8II{1&ty`<ff)sp}T7hH1G,f,>+Xt');
define('NONCE_SALT',       ';W![kg_HE*dhV&jw(c@^$^{0^QHO0vsr/INK,.m7lV!UarVVhnHI8R4OQF]el)bd');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'cp_';

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

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
define('DB_NAME', 'db-alevel');

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
define('AUTH_KEY',         'R}Up![t[oMa|?KTxC[_0C6RY7G>+:SeOqJyOplYCYoq|@/^1$T{#gdqQ^O!=PI!l');
define('SECURE_AUTH_KEY',  'oN=X8%l]_d+|i#_U()u:-PMzu?PjmZ/Ehw!8SI~FcBNla73*DaD;hx`yyqXF9H3[');
define('LOGGED_IN_KEY',    '~^+Yy48oy<knp`9}?VwF[PNceLFwmG,P^x{DBSghA%m9mjide`=-X`wBJQ/NdPS@');
define('NONCE_KEY',        '#p^G.8^.56K}&ou)T)jS&Cj~![cj7}7D&F`ElCcP*.Oik.L]R<N+Hvm5+ 21yjOz');
define('AUTH_SALT',        '6Ogo gC?nh}(6p4,~R*5n_Uz`Rj,g6UN]6yje>;r0T(AP(: @jbNpz=^rIU92~$q');
define('SECURE_AUTH_SALT', '{or+CY!x2=8!2eke{q&Rt: E#,ZS+Z$y~1-Li^j00]hzO*zZ|MnF59}}+x_E6B_{');
define('LOGGED_IN_SALT',   'cT,gAD5W[Q,!TDVD[Q;rw_,~dsX^S3/,M(Y+(|7}3SXMEG-]sUOy#>bLCb~Xy%*}');
define('NONCE_SALT',       'm1=zyWJsKo/t2.5S*%KITKx8/EDS|m|,m{>`)sHpX[+hwv#W 6NVO]4kb-O.|+z-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

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
define('DB_NAME', 'klimmaster');

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
define('AUTH_KEY',         'B6Fpo#@x>:^O@$BD5{)9cY)b:;x(0I`ET+;W`YbJg0M84&X+3(J7>C@@{}eSZ.aG');
define('SECURE_AUTH_KEY',  'qvX`MpqAgtb3}J{1k6~g:p.`Epm%S>$C},,F([P`;d7uLZOyb)IM<cN3j2{jr-&M');
define('LOGGED_IN_KEY',    '/t[_iB[x0W]z&a:PgX1]gpHgRXfCPTVk;@ZQ6^-j4)5,0{3ZbS6=#L*s*%*LR^#B');
define('NONCE_KEY',        'Qr2Eq?i_hn!x,23!ZpD{T 6ZM4mK[MbX9-w _NfI:_^~#D:tV9&8Sv@BU37~nj)0');
define('AUTH_SALT',        ':Db~F.3sg3;?C5AbhF*CGS r0zg_a&eVAVSo_?8wxcv3}d[cReXih?.xcVIpESC|');
define('SECURE_AUTH_SALT', 'qcy0oV}q>7k,pb!ts:cEGXg4[yq@(:&r)DA~fV44UpwUo;$Q:4` @m3r81FvY>$!');
define('LOGGED_IN_SALT',   'Ir@V)Ew==W,u5Bn9y7g^l pbJcpM^bMs.T;--QCT/WeQA!CyO}`$c?#2Q!r>&D[I');
define('NONCE_SALT',       '_jK^lWvKn:kbC2K8/XwOo.E^RIH>>}/u-%^s14UQOQmaBwIsetJ+ph@/6vNM&L|>');

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

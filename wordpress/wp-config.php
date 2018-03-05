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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '0`>x+h3rs[&S&(`:A</.j0cZsY<PStr.</yxG.w7|C*I?>u)27sKXT1WjkCU*!4R');
define('SECURE_AUTH_KEY',  '(MB*>Ai!@LnV0c>!6(pg%<B5.ba3&ywHK72)2?O|#jy0g&pHC4^73 G@$1A$f5dW');
define('LOGGED_IN_KEY',    '8H670n0c[LSmAuO8k^{Z$hzduFX;tE[5V.]F|^(d49C9MCf2B(~s9EJ,lXGe|%uf');
define('NONCE_KEY',        'aDO` XI&/$C!wr}?LJ<+iU|]}PBKGV<3U+86?/1w|9[ZaZ5F) ^G{|)P*suN8_<h');
define('AUTH_SALT',        'GK;6Fjp]E_:dxMb%oil6R!8^SQ5/WJ<OPmy:]#@a%NhGk<!o/wP3295~fS~j_yGT');
define('SECURE_AUTH_SALT', '{>K~a$Y}LD@6E%7&6>nJ(qA{o#s&$OM^AB8a2~/Sj8C]3ow7~AVeVKO4<*[^%QQh');
define('LOGGED_IN_SALT',   '~,RoA*llJLzfN8eV8WB)Y]#19lxU>N|CekQ&{6ablG/x%L<pxe{Pie4UE0K:g9HK');
define('NONCE_SALT',       'HldNms}{`!A!R<a.*oGz(Av@51)d v9|=Yu+SLbc+vG|^5&Z !JJ(>)8c9-qp:g#');

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

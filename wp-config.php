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
// added stuff

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home/drakeand/fullstackdeveloperforhire.com/demo/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', 'drakeand_wpreact');

/** MySQL database username */
define('DB_USER', 'drakeand_wpreact');

/** MySQL database password */
define('DB_PASSWORD', 'S3L389pF](');

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
define('AUTH_KEY',         'ztoezjncfw13gvfble1n3duv5gr1i9itgoa3maawxkujkc8rimnxp6a14ampf0fm');
define('SECURE_AUTH_KEY',  'xcknsvcp2one9lr6ycmugwg5ld9mu432djlqld2d53ts18z619rud957unfdvmsr');
define('LOGGED_IN_KEY',    'xlxlyxw0ss3fxj0zr1qxzfralftdbnb4pibchvqfobryjabj892vymbpkhsryrsk');
define('NONCE_KEY',        'zflgdezyg18k3qvurhxcakkbliqmyaq1npvup5eexpihwsqdmemnikqi2tqctqes');
define('AUTH_SALT',        'rgbqcgpghybkt2gyxlvkq7gqslqgsgps1xs23e3zmmrywfsh4fzptojhct2zpzur');
define('SECURE_AUTH_SALT', '3uftsey1w1lnmq8twdvlfj143wmuwryktzbziomcoriwyhjttfxjrcgnvvm0mjcm');
define('LOGGED_IN_SALT',   'eymxqzjtk8zxfaoxgwnays3yzehzjpdjpucyu2tbro3nv2m0upyizfj9zcqrvzlz');
define('NONCE_SALT',       '2lozufhve6gt4e6pitmhwvnqwf9oyeifyakikywvbqlloyaafmadvwsdxkrd601d');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpr';

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

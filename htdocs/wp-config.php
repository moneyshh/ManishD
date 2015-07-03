<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bitnami_wordpress');

/** MySQL database username */
define('DB_USER', 'bn_wordpress');

/** MySQL database password */
define('DB_PASSWORD', '6004f98ae5');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1:8081');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'c8534f9d5225683f9166c34a9a3d4a6d1ad41b73553528afccaebcccd192a93e');
define('SECURE_AUTH_KEY',  '532b7dd6e9373fe8e89b0981d8bd476d59eb08186cc0e81f534aaba27bb72bb7');
define('LOGGED_IN_KEY',    '92972483fd933cddb4907349ba1e680a8399613c7e6a1a29ef4e03e79b720121');
define('NONCE_KEY',        'b18c090b41d83884a254f53b645c5b95210fa47f886e9e0410bfdf69bb613a75');
define('AUTH_SALT',        '29067ddfbe919c4fdc6a1455042943e9ea98f429b6efedd46f6126de9b4987f1');
define('SECURE_AUTH_SALT', '8427652940c084672624a09f61c1ba28dca8bdc3b7d7f9ca4e49a6c780b73332');
define('LOGGED_IN_SALT',   'fcae9fe61402862dddde3791bfecc5d0e5cac714bfe5db27877672e78b669369');
define('NONCE_SALT',       'bac7503c620413967757baa0a243b56c90dd0e5b57c9ae0618f71de0ddc96406');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */
/**
 * The WP_SITEURL and WP_HOME options are configured to access from any hostname or IP address.
 * If you want to access only from an specific domain, you can modify them. For example:
 *  define('WP_HOME','http://example.com');
 *  define('WP_SITEURL','http://example.com');
 *
*/

define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/wordpress');
define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '/wordpress');


/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('WP_TEMP_DIR', 'C:\Bitnami\wordpress-4.2.2-1/apps/wordpress/tmp');


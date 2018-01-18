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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '969fBhgOi6XJFGgNw4EVKulQCqe3lZzc7jQH9Wa1BJCR0BLqmtsrDcRANPF7HPsZ4EcSKdDOMWgBSmI2rQ6fCQ==');
define('SECURE_AUTH_KEY',  'xUBZnmISOQezpRaGSf9JcWxHgfGCwn3oVQZTqLNaBiymNJeAEJbdHGzgBkowcoVZIQBxgMeyukq5xP77KvYtdQ==');
define('LOGGED_IN_KEY',    'BDp9mO42PPPcqnY2CvgbK1k0dCFG4ZP1bxPVtXT3ViMm4QvnLdKwRUjtcUiQuQmWxyt6TAQ5OxXKSPuVzRsNdQ==');
define('NONCE_KEY',        'Lnmd7JP9UcaLEdE0duojk++28EUeAgSDy5oqrqFdQ28BS91lUMBLVNINqEWQpC1PbL2d4zqNE2zBs0USmH2d3w==');
define('AUTH_SALT',        '4G0CkUQYNqq4RwVb+2clP0dLAZzeI4wKSUgu5dYe8uDtwUdma70/2GpqBfyDAWz+JSEhphOP7H3W8FlYCDg/XA==');
define('SECURE_AUTH_SALT', 'nI8/jD1putjElyFxGZbUgzlh/nIb+6H5Us8q0rhhM0cSTQ5g78mZnEIgGizIvZ+5L6rqdyhlyAyOFlq73MrjxA==');
define('LOGGED_IN_SALT',   'jLqa/zOL4+tpBBVXoLWIkI5X5VK4phE+10CXp+oHQmzmtn70p6iEcuBiZ9P+Uh+g3MjgTiOvdngD+Ld+WFcajg==');
define('NONCE_SALT',       '927H703yxEohrP8kYDRf2mXZ9hsGOVV3nrWWDeJF7tsu7eTi/UbwsfP6jXnjPC8WWgSAFfZaUd4Y4kTiuwkJqw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if (strpos($_SERVER['SERVER_SOFTWARE'], 'Flywheel/') !== false) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

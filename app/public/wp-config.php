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
define('AUTH_KEY',         'mI68Ij5ZdxxroSu+55nlJl+NbydzZjfiWwstMOytb7RMO6JaeZE90Mfjll+f+AhFQiVm+ahPbF51/r9QmipzCg==');
define('SECURE_AUTH_KEY',  'w3cXYILzxCf2anWrnTklghYRmjCAurjpSv1jmnrWG/UkCFbcnC/1NLe/59eEjZVxvKxy1kn5S08h4iQ027bXwg==');
define('LOGGED_IN_KEY',    'Ln+mBtReiUeVyTO4LC8H35fX+Qejj2ijMg0Oz4VeZZyq5wlvNSeiBqfLHYnxYHNqbu2P/oF9DH96XnZfJ3ZPaw==');
define('NONCE_KEY',        '+dM3LCIhvQNtSf7uC2Ep3CDSVpE2cUiYai8aJOYy/J4twEOXrj7OVJV1LAB69drH6JQwfadda6G7z54oqTjkVw==');
define('AUTH_SALT',        'C0wmjSmKErdpcXrwEh0dzPWFsIYbcsYgOUIeStBLlVZ/OQOvkjGHIiphOWllNjXXJJ71MmZP2dtMFiSnnIZ+jw==');
define('SECURE_AUTH_SALT', 'c1LjNkQlnuWg4g2dJxTc0lLX69/s3SqSiut2VtwTjxKah3gTq2lRINd0kOWFlI0cTaFrZtrhn4XPJ0Qnpxt3OA==');
define('LOGGED_IN_SALT',   'j7OkWMM9MxhGpBt0vzo/l3W749Kil/3LIva8wz4MjOGOt02O+4vMf4C1vxIlIpkkG5NwMdZrhe2GFdfCwzynVg==');
define('NONCE_SALT',       'xbR2WhV6pM6srlbhRJ02/Cl7gfYDqqqwNVlA6lAYFvImj+MQHR901ujhnw3X6a6zWk3Tse8EOAwC0GsuXpkpiw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

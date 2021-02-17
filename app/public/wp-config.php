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
define('AUTH_KEY',         '5UosCCjmqjqeQwwUdHQn5wZN3LzrQr6mabuzKmNFKl3RpP+/GEhX2pQ7Io1p8S63rN3jzxtxyKzvoCSwa38GtA==');
define('SECURE_AUTH_KEY',  '1Z3WqK/8nAg29ez6NiJyjZLYyzTfaz5Q3vODbDS0YO/mX/5bijJ2xAbpFo+sujDgFIXLQ+V1F7+lE8Y8BdTM3w==');
define('LOGGED_IN_KEY',    'Izy0HRLjmr4igYeJIkGVc8t7YWY0ilkq9WmnI6Sbm4ppm7YGpwsofWsPvRD++bLhqI6oYJ21hPf0SAv31ZaUbA==');
define('NONCE_KEY',        '56TeH/PXJZKm1ymrA0qt50ZL0lLZUW9c7TrW/APaBEpAMtCxJ1B/chRrKBTBkSfi1PuIGW+yvfd5KeIO48+abw==');
define('AUTH_SALT',        'DaHjUvG7187REvCKdehdxUSrrjGx2faQhxNWafZdd8E4k0zcttuQvN6o6oue8SYYSHqzVmN3RQqLLPOVbKFIFw==');
define('SECURE_AUTH_SALT', 'jrKMFmWe37hECCZU97drAwn6wfF6uTyaMszRORjz4mbjqpce/d1dj8AkaBAdL731uiHPFa7hR7ln9MLqsDsH4A==');
define('LOGGED_IN_SALT',   'EqW55LFftUuT1GVWEV07qDQ+nGp6nEvQDrHjxr7xWbpBKEohSmuX7A//BLl/rnmtExANMf2wv4yOjEcNimQq2g==');
define('NONCE_SALT',       'a+HDR+wzgDBvAQ746vH+S2C/UcYZ8P4VNHGP+BkMjHedZg/9pxhKwZ2lW2FopjLKYw5bpX81zsMniX8GcihL2Q==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

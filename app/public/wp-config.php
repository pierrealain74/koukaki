<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('AUTH_KEY',         'JdfvSnPV7tABzxbcnoBvMmb4WM2afkHhxHHt3SU7TXcYGEM0K2Aoy4SNFWGjJRr78t3dPJRr/HOe0/Cp1RP9EQ==');
define('SECURE_AUTH_KEY',  'O+oGb16V4WKeeLkxARFfGJ4WXkL4VfHNqUUBn14/fYzhxZTsCj1rm0sYboPx85PDGkPTkJdW8ZR/EhE79OWeLw==');
define('LOGGED_IN_KEY',    'vvEh2K+JS5uEdkcXns4JskCpta4fzmoRQeKUH3OsdSrrHputdkxeohih2whu6rIzQHXjRqqhk6X5NNIOe+ygMQ==');
define('NONCE_KEY',        'm+68BxTq/PX61mmCxESG2blbS+qbzs0jaB+VtWCzlCH98pIh/ch38O1S2yh6NtuqxjyCF0X9sexMP3HeVVslIw==');
define('AUTH_SALT',        '6rvE7jGLfbzMLR1CvdKBIxboUhHA2iwujV9EU1//49TemohGf9eoXOaxRmZVH9ay2xvef4tei+iIGsu2/goxMw==');
define('SECURE_AUTH_SALT', 'B35bIRTdtvVDQxH69cm/2f1+CqVof1jIHGnNA3FfTRIytqo8rWr+10Wu8uSvRBkHTxRdN5W63hj3soEy++kQ2w==');
define('LOGGED_IN_SALT',   'W+dGDoXoJjM7EzAWR/YJXWA34820haDAChPdnOqJmnf+qpi8Rl4I3MXloOG68C6VI63Trjis5HO+oduSsLqAxQ==');
define('NONCE_SALT',       '+nef4FGW7nWNPGfVBpTQbEntTOIwR0Z//9R0/t0jlXLnPFGudITldbDuhn7NaxJd6DjtovAXNBx4yPMskq59Kw==');
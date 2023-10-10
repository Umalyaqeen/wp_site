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


define('AUTH_KEY',         'gEFpGipjPJuWD7pXEeWSYbRl5yaMiZ1PMQilZmREHOy35+9q0VskAlFBkGD8mSjKeR4WKCLWS+0u6zjKqtgf6Q==');
define('SECURE_AUTH_KEY',  'tTeurw7SGfkcAbiSDZwvt6DEnZl4wEH5+hEsW17xQ4+IQFq5euql3FCFBKg3B1/IcAb5llRByJ+NGqrMTYPAmA==');
define('LOGGED_IN_KEY',    'exPw0JSZAtaigXOpuswecei2SuCO8ibN+shxUpzt9uxl4uJBpjAgC5QFLcOsPcVWR6rNsTnddW7e4Chu6CiV7A==');
define('NONCE_KEY',        'tATDiand3MxUdMggu2n23SOLqKyVoqCj0zDRXUlIuYuNTYm0jzAZoMhLwtLe6UMKmmOSSoSoo6Y8xpw9I61J5w==');
define('AUTH_SALT',        'jFgLKF8W3Hy+1jYBkcH0MLjuuzYjgaQcmwwFVkmhxHpF/+8mUzQHlneRov3JtKP1b+bSvkmkmKTLKqmMAzTzaw==');
define('SECURE_AUTH_SALT', 'hT4IiTJQ07pCH23BWgdpchVdfSIxetOzYMTQMOu6aeFUUe0I+TBGQoFUEXulxT4CTPvGjXGa3FgldPJWaQl1lg==');
define('LOGGED_IN_SALT',   'f6Nhj3HtpiMkQDktdVK2uRBzsqeyaAmhNXqvgMLe59fxkZlR2T3km7Gx/RdcOa240c6ZrttX5caA0FEBt9Eyjg==');
define('NONCE_SALT',       'SErXaxiuSGmACO/WKy1nkqTbk74Z3FMe8Ngf46nU1g2M85e8t+KV0XfsPfM+yM06L0u97A/CsgBa/9pQsKWIAQ==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

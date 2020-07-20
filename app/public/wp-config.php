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
define('AUTH_KEY',         'idinfgQybaJDu/CQpi19J6jlpbysdcLgeGpzknv4tEuhsilUjoHpF64OtEKMG1TwcFrK4txyb47FWzDo/kRSFQ==');
define('SECURE_AUTH_KEY',  'h6IkuI/Mnhk+U917wDOosZqcsZRMe6LR9wmPKr3dPDrPGS/iZMXDDw6sfjFmhuoJd/8h2Ego/KI2xMyMtLlZmQ==');
define('LOGGED_IN_KEY',    'XTKtK22Rrd2VByu69FLKA7EqadxqxupEdHg+P4TlUGJhdjbV6GogRXdEGqfUakO/Z46T5M0R2xhY7cuatkBbqA==');
define('NONCE_KEY',        '0FJvNj3UYW9HxV0A8Vsby7PSZLXcJlSz1m+k6w6fZaoRvqulJkMx75rLDXTG8RJvG5Qzuugb93YqRuKgxk3aRA==');
define('AUTH_SALT',        'n36wKu2xgxEQEHrBTXtI3H6PnFtPRm15P3ikfTOIdW0fh0tgKw/qI50kbU0xh0vQY1KvMyC7/pt1BpQ3EAH4lA==');
define('SECURE_AUTH_SALT', 'JNr/IUwS6CM1IFwGO52CchizkgunnIoPPG5z5AjWs0OW4/Rm3ULghe30dR/fUDkKayKRPR7m8rx+jiGBc79Sag==');
define('LOGGED_IN_SALT',   '/I/q3A/1IPJ8+QWJqHyZsdeG3CWy0AgSPGFDdzZrD2ru9eQtLT6FHxGCdPB/d7SaBlTWzpE8nRQ3qOg6p8QV+Q==');
define('NONCE_SALT',       'PDNFvigbUea9zO+JvRn6uiz7gnJt0Zx7fy5ccR67c/IkkCPHRQ3wtKNwZaXneDmlusowJDDedJcb5zBkCO+L9g==');

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

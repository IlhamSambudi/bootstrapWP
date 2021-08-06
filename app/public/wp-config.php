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
define('AUTH_KEY',         'e7EX6QrLGuK1EkEWQQGzmblfE4EgfT8xN92pmqmZd2jjX/Mn+FAyZKC9hzQImc/Xv54QKX0ReOrnAiNKvK+VgA==');
define('SECURE_AUTH_KEY',  '2wfRyVrscXdWPaxKGl1WPDU4ykk42uF+CiB9LMifWd6Syemo2QTjaZLNdxPEVdTwnX/LjGfwiVVwb+R5/tn6eA==');
define('LOGGED_IN_KEY',    'J0Y0p8fpTEFXyOWz2uiw10Wjr69c7l9QEynY+3PeMvShcS28r1aP66s/GXL7Otf5A/mle4sNbjThavtJ3vjtbg==');
define('NONCE_KEY',        'LOlXTMXmX6fDEX/22lv30YEPJaNS/O9Wrne2mPXJXZ4eU1dlvbJZhmkU0MNSFsNSFOizZxwkX3ta612IkPoEqg==');
define('AUTH_SALT',        '1TPjpNVu5n7YFQ6LVRK508unBNGWiU9YYRmKmizldwL9SZQnHDWsbjHT9YeqdyVjZmh6o3aN8fUbibLFI1GN2g==');
define('SECURE_AUTH_SALT', 'tJoFHbT3tgfvqcT8GGCkMTSPMTIKdRtUhl9MZCMTN1qHUmtpK5U+TY27KNPyQaRz4qWcyZ5xf3C84azdTqDcdg==');
define('LOGGED_IN_SALT',   'NTORA9n2Ukwr/sJufHIzzwH+nWRZgAGeKvi9Okh6fGaSLnS/s6T/kXmhKUSVBmx7e/VnGBM9TQ24ZWPMkGFL4g==');
define('NONCE_SALT',       'TYNx/S5fuabDDQ2KUapJQZtcHifz2JzI4qbdv/hc9bBLsxWX7G0NV7k6pCc4GgN5p8YJxymoRWKtkJxvhDxygw==');

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

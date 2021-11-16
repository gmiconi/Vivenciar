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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'alenan' );

/** MySQL database username */
define( 'DB_USER', 'alenan' );

/** MySQL database password */
define( 'DB_PASSWORD', 'A15274985' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql.alenan.com.br' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'fyh01igibdbm0sli0uzyqe6j03m0ehgb5rzhwr46j0wh1dpwoxw2bx8emevhmloy' );
define( 'SECURE_AUTH_KEY',  '8r8gummwpggwit39uzwaqnopqh3rkbbamk9u78yrrfcubhulwpvtjejd0kjxz4g1' );
define( 'LOGGED_IN_KEY',    'd6zjyywjoo2wqohuwudzcvmuebm4bcodrt6zwohqczditmghl3hvx6fvyar4mj8b' );
define( 'NONCE_KEY',        'qlu8lqbl9xqblhhjhdwjexnsspl5ap1rzvxkrjc7zwdg6tcdcgc71p9rhzvs7c0a' );
define( 'AUTH_SALT',        '2iqzv8dbn3hi4why5nweat1hnqpzkmse8mez2wdnbefcpdusd46fqlcwxnzshsvs' );
define( 'SECURE_AUTH_SALT', 'ifpsisrdpgshodaznz4curdghxuy1ehkcedicn7vz8m9p8bp7xdjkd08qhfepi6s' );
define( 'LOGGED_IN_SALT',   'yx9wvvsnob3zqnnukwemaeg2gcthvyxbkznv37fi3gjxjxd7kmxt9emfbifdxur1' );
define( 'NONCE_SALT',       '5vmqcbv77iiibilt7xtuyno67u7ogbhvyto7l5xtfbyarxmel4lgauutbtsxlmuu' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp4k_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

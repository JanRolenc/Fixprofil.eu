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
define( 'DB_NAME', 'd226186_if8s3b' );

/** MySQL database username */
define( 'DB_USER', 'a226186_if8s3b' );

/** MySQL database password */
define( 'DB_PASSWORD', 'C2t9GnT9' );

/** MySQL hostname */
define( 'DB_HOST', 'md59.wedos.net' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'd3vYyBF4gdOw3hqCBkHb3vCXdSZBombelK9zv0zTJ0MmE32Hw6FZeogooBKagbKj');
define('SECURE_AUTH_KEY',  'NLdKrE2GpxuseIvcB4hPKyto1jNv1g3rpVEhegSBkiS9hD75p9anXubT2C6DhXh3');
define('LOGGED_IN_KEY',    'DqmC0DLMq09sfCAfyVsI8DSV1vdjEepIIFXtqn0w1yURk1ur6C2FNEolW0rdUACZ');
define('NONCE_KEY',        'tDTaeYtl4iR2fUEzkDS9Fgl7B4m5p5eHysgdFrXmaqAo3svGvHR1ZzCXG0BCAxZt');
define('AUTH_SALT',        'zg4q6Y7P1wqYC0lVoLOwmsoDds4LlP35Fcb9UOszhFfIy7OCTZgBrg2yVA40udQt');
define('SECURE_AUTH_SALT', 'xXDgap7sNCQ5s31ilsl30jl1OuhVkTgWYwzJxu4V6m7AcbsHt7IVhUTVXIT68pgM');
define('LOGGED_IN_SALT',   'ZkGXZGIgs13HKhJWW1lXzQMKJDI8UujYOQoXjRyybLZBOhP0navYYp4k9JWzsVQd');
define('NONCE_SALT',       'q1ProvslzguWd2K3s6CUewVPArukWPoXZa4Sf6CRryIE25zSyYnLWOgDBQfnVGGg');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed externally by Installatron.
 * If you remove this define() to re-enable WordPress's automatic background updating
 * then it's advised to disable auto-updating in Installatron.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'y4d2_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

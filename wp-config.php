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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

define('FS_CHMOD_DIR', (0755 & ~ umask()));
define('FS_CHMOD_FILE', (0644 & ~ umask()));

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'prueba_wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '$%O-4%r9fQ![+NHkzi/0)bZ&FpmC>X>rpO!Mm19>9s(ufTA;Qw){oQJL_ccKcXd1' );
define( 'SECURE_AUTH_KEY',  '.[(1.ktC5b^;E|2WNe(s*0A3zN5nFKRC$-m|`n3h3,UKjfONI R}OLL3kvG`!i5v' );
define( 'LOGGED_IN_KEY',    'tV>n$uoUWT$1BREdwaJCVjG_UuMSyL!U08L8RP!wHacmU3hnoniZZ,|-;fLZrle0' );
define( 'NONCE_KEY',        'xUNBh~H[:jn!K(mTfa-#?X&w%ZV9@Q90I,o!:k[z_5d6It/8P6-B*T@d][Ic^t~I' );
define( 'AUTH_SALT',        'C^:F(sn%!Xc8iX|bdI1ILO`_1_63hXl7L]qPzcK?q<&Vvr9Ve$n^+dZwg6kKFdY ' );
define( 'SECURE_AUTH_SALT', 'oFiC|lxQQ9>uPbs%|Kz1TN,^/Tz)m+gHqy4T8_C&FXeo.nHV[(2Q<SJYgZ;0WzJ@' );
define( 'LOGGED_IN_SALT',   'D<@:bN7&dr}4re9zP4C@EdpE@/]zK=|Fl4@D/+=~.K_.`6a3}Y83-it$`{*^U7|4' );
define( 'NONCE_SALT',       'QR?Bg5lPJSw9Sv1r{1^Z@.nL/6VRxNtM-]rGbNu6nI^t34!dY8r&:QY3/=}C{C<z' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
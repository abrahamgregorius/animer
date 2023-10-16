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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'anime' );

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
define( 'AUTH_KEY',         '_Ck8:rO.@96-C6%~4@Q6%F]7lo)ibvXBM><klCUP[%-_L*e2{cRI@i$Z%U7kv0)*' );
define( 'SECURE_AUTH_KEY',  'y86H1YNnhAmc?iOql/#x?@)pqn0{bV>VM) y*QB*Z#cB/AZ|fAfLB%9sBxlFdf$d' );
define( 'LOGGED_IN_KEY',    '#)K/![cbNM~pR^~~##Bc [g}i>=uOWvhdO(U9RSvYD{]c1_-`KM74th|vboso5<t' );
define( 'NONCE_KEY',        'GN@*TZ3W<)K8&+K$%bRRbSRVl^Kzy_ +3yil-wR8ttV8+z>K2)[p4Z;_]}/zPyC)' );
define( 'AUTH_SALT',        'G>_~za)h8Y6g!B}`ezcYz?5`th5AdAWn!PHC=c,.`g9,2Sq1KWr0MzMtOI*-)e_0' );
define( 'SECURE_AUTH_SALT', ')i5O,X[DEz%?(bOib^D6$Z{{g_~U|2N!^wu&`@;ysm0IJUk@nZq5pQ-MeO#nEh!A' );
define( 'LOGGED_IN_SALT',   'UY$l_^0VqLpjgHHkpoYJ7+O$M*JnWcUwz9r/~e^x{I~D v9mpNyr]F~~,EglJLe3' );
define( 'NONCE_SALT',       ':JW4:+xXQS5_Lj]jFQxF `v2>,x*4ReDjzx#L{LTX1hkJSF}Ww3c]E T3PJ2V4:^' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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

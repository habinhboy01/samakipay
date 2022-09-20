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

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'samakipay' );

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
define( 'AUTH_KEY',         'rOIUg&0f,W@zm&NLAKuo[J|L=[La!US?$awpxfo yVP5{F}6&2%.nBZ&pktWm(be' );
define( 'SECURE_AUTH_KEY',  'Dx(B2]a?T|(@FBi8.uk0=Qyd^|bfiC^)(n^2=I5EB:.q%XztRK6pPYmIK}-4wMe$' );
define( 'LOGGED_IN_KEY',    '09~?__zK#3a2>u)a4i8SkHUD.bWN/ca^_O%/4bF:.JkF%`!uX9Rw@xICs< C/B3t' );
define( 'NONCE_KEY',        'C2S%pNr5A$K98_|AHl6qd|SMfZiXcV5]KX>^TT:8=Lw1tl!kh`ig@6:t~Mtaw5O$' );
define( 'AUTH_SALT',        'y8PWhwKYICl{gX,5]/+/y5S!_1|<)QZDBN7l8?M92k&qwV%0BqQ$]4VrrQp@s,5-' );
define( 'SECURE_AUTH_SALT', '=CpdoF.{WU)HqsR4IU1nvK~cz3ryzjM0af5i~hZ6AXS31SP:.8>wxQ Kv&=rhe;=' );
define( 'LOGGED_IN_SALT',   '^q?:9 oR.DM@-)5qs50~~cuj^C_mjca[64Snhj~XYyZjvX/uDE<>B96mn]n[lai8' );
define( 'NONCE_SALT',       'lyynecI:EF^Q8zKC^N}[iB<pty6QnT]qBGg8|7xxpg# j|2Y0E`v*oprtzj_->(c' );

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

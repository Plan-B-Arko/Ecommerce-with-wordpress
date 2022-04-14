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
define( 'DB_NAME', 'wpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'OQw-h)9+kF?IPy7m6-hGy?D]=o8GDZ:(0J5aY|(,HdEk4W=W?``DRhDaal5(.&|t' );
define( 'SECURE_AUTH_KEY',  'Tx>^%NCA!.5T:+?b(SiLjw~Tn^$K;1/Vm=n-={4!wP,Co<M7EL&E]DR@p|3$GxM^' );
define( 'LOGGED_IN_KEY',    'cr$j*r Cy|g*)qe>2zE>mcE)VwA`~gaR!u, +_:WG00N3TB4PYzm8kdFzFS[>cEz' );
define( 'NONCE_KEY',        'AZ,;AGaqJ!Kw_mkgK4lIl[:$LO0>cjOz;YYS~-H8.)Y7BwiU<s=S-g1%zJr2=}?k' );
define( 'AUTH_SALT',        'fv6/i*_VTd6p(7^&L1G#QW6T*YAi8w&WHVz7?//+L=Z(;Zb|j o2uur@aQV4NmT@' );
define( 'SECURE_AUTH_SALT', ';60( Fv@T.05c{2O<TSh{GS2._fi,^B/Vu2F9mK>3{Ib*e%5 ,0~;:%q+^Mc9447' );
define( 'LOGGED_IN_SALT',   '2&-NQ7YKU:Iq)yTY-k2J7N>;s*%c%940;TtQ)x_XWjxh4&B=D8`tLI$&Z6.%B0em' );
define( 'NONCE_SALT',       '6%S~|x.!E&Vli~Xi(bNoX|(RNRc>[mP+FnlTm:#]iDqPVY*0pRab~j^!bP#n^B{U' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

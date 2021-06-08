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
define( 'DB_NAME', 'glm_db' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root12345' );

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
define( 'AUTH_KEY',         '>KH&z)X|1@Z]y8MyCd04M%.te^DFzyS%GiLH>~n^:a&No5[*<6Py;,MZ~.[T1jAf' );
define( 'SECURE_AUTH_KEY',  '`^8QNBjn)zBu.O<gn/B{(9yp2/`g@3n=Pj9%.G$%* h;y(O9SPsHZl-Fh!Pa9!&s' );
define( 'LOGGED_IN_KEY',    '9OY7Kj}?uDpH?LDW4^oC(Nua`NAen8L!UQz=PS6whGslSR%fYc7CHxLM0.J_6V+}' );
define( 'NONCE_KEY',        'b@Qbd6vH{}^Ay|O3}`F+{DIc$Bb)[p$qS:2A4,f{/,wCObh|82aC8=#Nr_f @*^n' );
define( 'AUTH_SALT',        'E99o;Z]v[I.W^iM8)zn139>O=M3CLOSFHbBCAoo]/o;X9..djpEx,s9/^>(h|C:H' );
define( 'SECURE_AUTH_SALT', '$#u=rj=/bL1XN?k6##Hnnl*s&^C-^3Nw]f1z)k`hO,lK6S</;2^Wq:E;0V6XEZu ' );
define( 'LOGGED_IN_SALT',   '~}o9|t~Wb^xoBghmV*4j+OjJ?;i ;q+4A0{bWtD1age.pOoD^i%~q+=%Z#_7ETT<' );
define( 'NONCE_SALT',       '(MI#Gi8;ZlAr=RBNUq[U=Bw~h1G0sxCpfgFz>W*9?6,c&hQh@tT.6<h&&K FBGrp' );

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

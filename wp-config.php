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
define( 'DB_NAME', 'buygift' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'rahasia123' );

/** MySQL hostname */
define( 'DB_HOST', 'buygift-db.cz9qor4hewt1.us-east-1.rds.amazonaws.com' );

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
define('AUTH_KEY',         'jYNbvEWbnl1OLG6{%{o#|R+v E6=e,pdYkiXR<n&/;g12]Ut|)w1)|/5Xkj!LUQ[');
define('SECURE_AUTH_KEY',  'Ny[GwN>[V_xJ|dH2;?`|K+[@eswV]%5u),QICo{>oG#-CnfpI0H8 g:y8WtBb?mx');
define('LOGGED_IN_KEY',    'TZqO1Aw@7GwFgzL%pNT%73C!9iyIj1#H_Q/n@a j0#jV,(%FF)Qf!yeY)RL/&Kgw');
define('NONCE_KEY',        '_?9}6u2FjAD,;9XI~Sc#PZO!;:&F`DduoHO@U_}qcXCxZh!QZ;H5K&0n2{pdlN3|');
define('AUTH_SALT',        '>Sb7Ub=+0}>Rv*6OEQ![WS|pz7AyPeBT+2Be]b&h-qM({8D4)><axqGJyZ2 /F`2');
define('SECURE_AUTH_SALT', 'uocjn8iJxNi5UL~]Yi3!pT+^fYuuGzk(,d:Rl4e ncz(j_*6,3!I+q-<%+Gfj>_%');
define('LOGGED_IN_SALT',   '|FNTlc#912mI5w^4A3G@Kdv+Z$Zuz)NS.2f?6-ZKnc%m,F;2 :S%<pQ`xwU(<$^F');
define('NONCE_SALT',       '$DsEa.jXQ/t <TL>}8>o]RULYb!z/vFQ=&hA|_j}W.a#gRXpU+2R2nIpjQT=u]-Q');

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

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
define( 'DB_NAME', 'nuevadb' );

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
define( 'AUTH_KEY',         '#K#ExOK)=<ztIhKb)d!L$dv;|{c8lwtd!$|&rPpLlKGO`FCyed$6T_JZP0*X+(rl' );
define( 'SECURE_AUTH_KEY',  'y4@Q^L.?Sf+Qh!pA&,5ow1&xX7IVwfT4fvu^!C^7tAXsCY.bm+}I9F3Epc1xQ|m?' );
define( 'LOGGED_IN_KEY',    'K-5FL3[rbs1b66P7ZC:i`fSB%IzV 5n;.a&F>dC]rktirw>,9bx^htV_|H2X#A4V' );
define( 'NONCE_KEY',        'YWukgT~W?q[vv?O#,PK>[b53Vx7D3%[OJa/pJG3oy<(ctMxMd3y7-|6o9p#0z{#{' );
define( 'AUTH_SALT',        'HLO%GNvH%1X>|B.h0/-cN-FwL&9PuH8)1[2Dwg%sgL|Gh`?R-G>/S_ftOUB>.lbB' );
define( 'SECURE_AUTH_SALT', '@Q|%9c<o<JV9L-Ri;TpcD; kJ![4!8YWNSdfaU:kRHUVeU-K/%4VPT;}@:b:Pd)>' );
define( 'LOGGED_IN_SALT',   'WP(]@~uttCBDQD_u[-]m#JxOl;Rf;l|h?kM}hj oxm7p3z>5uvha*0?/zy&~OWB*' );
define( 'NONCE_SALT',       '}.F]yvh$-Dq/b:7/1eQ2CZs8sPMgo)V{rP_flw(7KmcO!})Bj#z7y.v4d~aB+VWx' );

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

define('FS_METHOD','direct');

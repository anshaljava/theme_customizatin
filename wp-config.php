<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'theme_customization' );

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
define( 'AUTH_KEY',         '|yFRS:2(Qm<>+9`vv#/JC62n#ok%JcH~{^Ip!Tl&G&B^7bV_] MIV>:-UK::p<X^' );
define( 'SECURE_AUTH_KEY',  '%;b5X.G>/C4Qvw1I!aJ_1azBgo}d}j92405V8x?fVNhC2?q>@51y[D15atvy,9&5' );
define( 'LOGGED_IN_KEY',    '?G<q{.+- P7!|3WhqZk?lB*e`N`q44+?08jVwSlK_/l3kj{/R$j!s>lJ3,H(n_m9' );
define( 'NONCE_KEY',        '`vft|u2r4UT)&<O8q(sTjHp#TSfUQe@mykWDPU4*(qY^;z7qFab+F(fe|s=B2Nl ' );
define( 'AUTH_SALT',        '$*UOnXAIY#1KjH^xE=bT [u^.,!p-x)>8mtm#Z2G1mhV?e-@_*J%8:cY,VfrVc8N' );
define( 'SECURE_AUTH_SALT', 'RFYb<L`{{T0%<e3Rm!Yt8=q=KZhn+%R/8zkv]>>hgiXUs0FHrQk.aO99Nb<+WIWZ' );
define( 'LOGGED_IN_SALT',   'jLR<9w_?$3;f(1JyHYBy:t c05~u}7Y 6/NME-SlE<>A3I3aSeQrjh8vm6-(xyN9' );
define( 'NONCE_SALT',       'f^[~_;(.SIYk@4GL+A:C@y&^N3H?xAog<NJc_|l(u&4-S?Ex6<.tGMPSAq|(m%Oi' );

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

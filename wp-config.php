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
define( 'DB_NAME', 'f1storebd' );

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
define( 'AUTH_KEY',         '1F0]Y&6W.CH~Cj]bn<{.96RK@T3@PlRB&%XE _j:4g|<r9lQLvt|^;n#%!JQsnJ:' );
define( 'SECURE_AUTH_KEY',  ',Y^UH4j _UMB%2rn6kOvp<tr6z}kL{>9rkPAU*7jwBz@n3psoIVLtX!_7|/j-Ena' );
define( 'LOGGED_IN_KEY',    '1*@]4]}pS_c()tMw:Pjx/sv[Hs>)ypJ$c%p *oS>UDtM0)p~}/m)b{3Zc?XA,dN[' );
define( 'NONCE_KEY',        '<R#l&^{x&:t3<ge lO8+Xz2u%ZRv+.{Z.u*!?]Najb@^g|Ml@uuZsq:q,G>b_>Yt' );
define( 'AUTH_SALT',        'b(`UTLD[XqG?B>&HC*8gu2`oqrLLswp4T=WSOVp]b%uOm^yhlLGB~ibOYKW&Enah' );
define( 'SECURE_AUTH_SALT', '*8^Y)I,~SCi%q,`.o3|).uxSKTH_K`WD1x_aU}V3;8eZN^@[c{!fMH_1A,NEZk.{' );
define( 'LOGGED_IN_SALT',   'o??K55P2FxL8KyRRl&r/Crk*V$y#3AFax{8}?<GG r[7>N#XCBtAz4%*t#BC-5U}' );
define( 'NONCE_SALT',       'KLtPAF?*K|^zex`0S7.C/9x7A%u*!K4ZQ1h~ARl*oOx7-!$<T)K)pM$?3-hd>kZ}' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'f1bd_';

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

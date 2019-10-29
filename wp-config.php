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
define( 'DB_NAME', 'chana' );

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
define( 'AUTH_KEY',         'DaK8hKcN Ndp->2Sf B!W;;w5eFA}hLkyj<HcLqhn`do~*7{9n[hIs/|]tAcpC_A' );
define( 'SECURE_AUTH_KEY',  'E|Dyg~=x9jK=pX}W;}lziR,hSC?_2aGsnPw]1;j#kW8y/d5i~jjE,3{#i;?bb-kB' );
define( 'LOGGED_IN_KEY',    'oGGvyr4t$zPq]X1cxtby2pQ.s|,y:]veSW7ZFyyWvd3bjxRw_U^.2Skzyz6)RHz ' );
define( 'NONCE_KEY',        '`:;I=#-z=lBIWq49l#]*?1lZ%e&?(r:I*RS;:adexN@GJt&X*Zlwu6[GFG7!I0^3' );
define( 'AUTH_SALT',        'fnu0xg[S_pAhzxXMWAIa&M}s4/yeNnzG^~@g7><b;nC(HG`b;ux[h=G.1hn_+FTb' );
define( 'SECURE_AUTH_SALT', 'BzNA-3R8!3_!h]zI!WnVexsT]1+2#N5<HXp|w[Yl{HJj@|E_z4%`SLk)Iw-+gWa3' );
define( 'LOGGED_IN_SALT',   '30^ ngqkO1R~/]_U5T9BtT5M`s_ gl#u7XV=blpeDQ#c<>xPQL.~@|,M[_m-~Fpk' );
define( 'NONCE_SALT',       'B;-QVQsJdJEoC!Y|F2$4pv%t<Pw&zMAp7pOLJ cuvpO`d=80PMH{:$Yu5~p8v*q%' );

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

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
define( 'DB_NAME', 'cameleos' );

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
define( 'AUTH_KEY',         'iW[`2nGN#{G(-DwI7Mvi+co4kAl?.(@<ct6>lfY04yON5/n*o_~QBkkDk3GN*^I0' );
define( 'SECURE_AUTH_KEY',  '[L!Y;XNSp{l{:wF1sH0n!bW}XIqJ kX5:2WpC%nF_Rxbp^e<S{I^zSe+(lsZvlj>' );
define( 'LOGGED_IN_KEY',    '#wXX-?x][,]![r@x13$!l*6u|e{V~@iaCy7O8K1T?=$C@xuV1@usxw[fuUe1B)B&' );
define( 'NONCE_KEY',        'OgB-$rRj|JXlk1._xY;2J:t]B4,|,R8j5748nX+LB:S+V}M&~6/@@YknwS-x<m)(' );
define( 'AUTH_SALT',        '-^TT/J0KVoYa+Sn=.&I9843fKY=mUi:`xqvcE<^p:.0@$mX&wPvQIo0(=D70U$J1' );
define( 'SECURE_AUTH_SALT', 'A5Y}N5:41CFTtJ}Aj:$rr3.iy4`Ce(P1w4. _RR_o`Pu8WlCDTwhy}rcX].r99aP' );
define( 'LOGGED_IN_SALT',   '0$B=ffXq;c@ aiqRM<[,V!DHVA*Hz4bXac6KuI5vU$.0UO{v`{fDdQP%:dP]Z14!' );
define( 'NONCE_SALT',       'rYJLQ}7_}?`m5 H _jt`^b7w%o{/pKh;A=o#?nL@sviHb<M|D*T3Az!*>uf1sDx^' );

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

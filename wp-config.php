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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/Applications/MAMP/htdocs/wordpress/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'wp_db' );

/** MySQL database username */
define( 'DB_USER', 'drupal' );

/** MySQL database password */
define( 'DB_PASSWORD', 'drupal' );

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
define( 'AUTH_KEY',         '8{;ZMY5BZWazcH-qgLO[ZTue%>_7}(^gSe}=fogq;%c=;CrG;N.q8mf~5y!Wap:4' );
define( 'SECURE_AUTH_KEY',  'uAlp+}dW(l}`Q(rxz$[5~a-v--f/G5@~ !Oal+r ,T1V3$B^=gGx.tHKg3gt?y.J' );
define( 'LOGGED_IN_KEY',    '=:BT`kFCg0IIK!S0l_(=?H.G$#B.l-.TRx$?U_~QhZO<.~BcFxBkR3sMz|Z%3|@j' );
define( 'NONCE_KEY',        'wqvQh-_)+tH#QD^?BEq/AS_$~L,FdKDP[:SV6PM&)uP(])@TB)d*#]tT<pLaEVTP' );
define( 'AUTH_SALT',        '+8|.4(Xxyx=(Ye7tP2 PG-/)=/5iOy?7HfhCiL[mjHv&!d7c4Md`e^V->R1dDUxk' );
define( 'SECURE_AUTH_SALT', 'krc.!QFn(~Kbg[J^ <Pqd8vanC#3!q]DXV=,os(pIQJi={j=^y^tc(Pm|P.@EX/D' );
define( 'LOGGED_IN_SALT',   ',E+4 _Rl/4KVfteb>P[}-qB^lF0.|h1e(Jj$yXuHE-_~k9cJhcxlHKSMjwrLze3V' );
define( 'NONCE_SALT',       'zYUAan9$u/)Wji2SbOW<Ex~~vkZ!f1|!r`JU|.G[K15nP|zIt7#LGj2sWU27Ar}c' );

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

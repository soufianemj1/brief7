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
define( 'DB_NAME', 'briefWorldPress' );

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
define( 'AUTH_KEY',         '<fZbk?.9b]mq$QJ> SvuWsKhDV;  _1HI<]M5D,G!rIJ )U#Ky{=/oxwC$q~Mje;' );
define( 'SECURE_AUTH_KEY',  'aRV! .yzuB!wPl=$}@#&7)S<Fw *_!sQ#4[bt#JG:X(2ZTsM8XQ%fuBr-M|xPJ#/' );
define( 'LOGGED_IN_KEY',    'j+ZN+pBfjG5WY%][Wj+@$%7ns?*RLVsJoE <$`5hz l^cWkn}GQ8//xoEEv&c<6q' );
define( 'NONCE_KEY',        'k( AC-Rkq`L{-CJT<-+O!LqZU2ItXa*|}/V2}(v__3qF7_%OQ!1&H,NCqcM 7/DI' );
define( 'AUTH_SALT',        'BfB(C_=}cu.~+sqtOcs4o1-@Hnx]HZHP1 lWB(zzeJkJDb o@5c^$I6Vx/0M$.U2' );
define( 'SECURE_AUTH_SALT', 'VTa{S^Bk,*]K[Q]4^7l5mm82G&@>LBw&dkZVl0fg1#Qd_52#Fw:b,*on1!}#mr]7' );
define( 'LOGGED_IN_SALT',   'kh(AV<$r!T7o0L}=qFgGhfsr=Tm(m!?32(ui1x>;.:NspYe7Xft[?%g-<^r[`%7r' );
define( 'NONCE_SALT',       'tHJ@8a&PlbP,kwID08)lzGNyw`}9c[^w=pG9&SiC?3#8ti`|!sNqm`z_sNFgVtq&' );

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

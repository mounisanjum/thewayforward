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
define( 'DB_NAME', 'thewayforward' );

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
define( 'AUTH_KEY',         'pjv.(~X@cfP$U gV7v?1^(VYH%!`p2VK(6 4EC48$vT>6Ae$hto,z8]*~vKX~b4E' );
define( 'SECURE_AUTH_KEY',  'EX&kI-mr) tHN=g}1<K]nO^ti56ufv9N+WsAw<GJ*YWl50Vyn}}.9yVBt}RaB@j*' );
define( 'LOGGED_IN_KEY',    'R;S+lgvu(bYNQ<uzR.?}|2ja$*n},cr oMfl}O$2[.GEPzn XFR$tfp-G>c&}[Lr' );
define( 'NONCE_KEY',        'sJWu 9Ni,M`G5F]y*D5P#1[4/7^3Lp=gJ0.&[GIq@.:A548lro4!%)z|tGpiyX5:' );
define( 'AUTH_SALT',        '9+uG2WJ[BLKh-gs/-/&tT!18/]Wj^hGP:-;8u)X9GS*,a?6%l^BWTw(4#0D!w4H]' );
define( 'SECURE_AUTH_SALT', '[?P0D<|v7F#X+;R1>,/0k-Zpg^b<Ql8n1K>)I>wqV#7$A^u~u,.nswFCD$y~ ~Lc' );
define( 'LOGGED_IN_SALT',   '6Czd.H/<%?!$F_iot)9ydG4]7!!>_cM(EIAEpq4vNEeK<(]K$K#h,fgezNq?b/g<' );
define( 'NONCE_SALT',       'a~_*pG*k?&ZEU=Se9B:@rtEGf-Ln-5LDR1x[:w_R`d2JVX7l:]&N/YX/6wm=Uh`,' );

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

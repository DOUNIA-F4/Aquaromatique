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
define( 'DB_NAME', 'aquaponique' );

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
define( 'AUTH_KEY',         'L[Ezl,|c3YgYPw:kPE{gIC}iuDAKYr1t6|!~n?^|[jET(LGIr)TsY#LoHwDK*<jn' );
define( 'SECURE_AUTH_KEY',  '$9oO]vRtxy^=q2 #e]I^px51o`5n4vqVPYmIgX^Z] g,2sz=j6/wl>Sp6rq|!SKJ' );
define( 'LOGGED_IN_KEY',    '?8o/[w8^^y?OS}gM-[T<!tTJjFI?&J7Qf-z3A=%2|`@u lm,Y(I@3b^L9$?eGir2' );
define( 'NONCE_KEY',        '0t zLWoF,*r~MR_>fjd2ML?IsJYKlyr#;=nDk^hkK%SX5Sx2}]cXHsCA!-nSj-&:' );
define( 'AUTH_SALT',        '-~`pLPqDaz:QWQG2m8b;vYFN`><T=2/[3GQ,~Jz4`k:{Q[,M2dnncFk(sxGN0mdd' );
define( 'SECURE_AUTH_SALT', ' a]a>bVA+jPYMS(XVK~/GgA2sS<8;+ht]c%8*w]zWEpVh Cp?lEful9iL$LYta48' );
define( 'LOGGED_IN_SALT',   '^:%)fx<1 cvljC3m!Kn2.uIPp9RgTnlcH0DvT)7%+Z`yA@o4F&|,,-2LgZfa]ZOT' );
define( 'NONCE_SALT',       '|(3({t4.}2oNKlKPRpmT4&J6j(,9ZXW!S|bGpC:3q#dm%vVpdfBf<iRM*L`Q)MEA' );

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

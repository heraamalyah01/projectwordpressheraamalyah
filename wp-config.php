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
define( 'DB_NAME', 'dbjongkoding' );

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
define( 'AUTH_KEY',         '=:x+Y-#wY4!4dpy2Eme1|[~e=X^RnL-g7w:MF;&eY,6(hBVM{dQ(v}5i|zlJ4ldx' );
define( 'SECURE_AUTH_KEY',  'g#O-q{6b5D4JaBl$d28,dBGd$!hlFNA8qKXs>LXbt[hj`c]5*- CD==#)p$|;cbc' );
define( 'LOGGED_IN_KEY',    '!EZ6t24;EPABVmdil}x}$2kfSz,)rx(SV-B0wb[[1c )c7%wsQL@toV]}s7Wwv/r' );
define( 'NONCE_KEY',        'wDbD)47ng)=,j=m bYq`swR.%SocC~p8G5 j42LG({5u#QzN?iOuUFazIG(Dg48M' );
define( 'AUTH_SALT',        'ySwg2@3:^{Q?~F}<1oxKo8CNAZrSwSlQ2:kO^h2XH4N.rVZA[bCGikCXpO1Z%zQ=' );
define( 'SECURE_AUTH_SALT', '/xGoDfslCF-214Ri/Hl$v/a~u%`GH<i/=Ey}@&0)`u8v0L3rBKTqu`3[u/t STA)' );
define( 'LOGGED_IN_SALT',   '7MZjfp~5FrDQ {JQ;F u!h,zFdplwjrE!EdOl-EbQ`q|V<xCWoeK>HUmoB8;/.Uq' );
define( 'NONCE_SALT',       '=_jN]gfbb<z^`),RuSK&0Xz/$XCd5GuG_KDNs04$UZ<$E^Dh[E`czb5Cz3vJHqYA' );

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

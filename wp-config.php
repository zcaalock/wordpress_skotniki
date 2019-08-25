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
define( 'DB_NAME', 'wordpress_skotniki' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost/8888' );

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
define( 'AUTH_KEY',         'M3swx*Js6xpye|a6L+tr=V~0$9eeW#o0(ubhQ|d]3GPVA<s+I<cesO3OLX/{Tbuo' );
define( 'SECURE_AUTH_KEY',  '0jw(wAfg@MwZP8~G##-W$z*gn48:QxUWH%DVz^Y~H_jmMSQnb1F#<Y`(aM-BjcMX' );
define( 'LOGGED_IN_KEY',    ')3k94Gk0(_fHB(3ez@PAH0Ogq1>Dw2U:]Y.qhXcF9t.=^?JrD7c0heSqZpYlcsSq' );
define( 'NONCE_KEY',        'NTJ5^V3a(i2oIu?XW%3.3`Asy[Uyo+r?B58)y1[ad/u3D2UbVn@VGnzA(QwQ(C@e' );
define( 'AUTH_SALT',        '|P@L/vRX^3m72w[6o24hMYPpR_[5NC6%|e7Q4<d`^`c_+&B(uroK/|w4e;@]G6yb' );
define( 'SECURE_AUTH_SALT', '%r?X+B[{9lM/UJ_OKx%@nm@pOH2jmA5Uq#|hT[xm8;3CK!dZX:j#)NPTN,2wz0@f' );
define( 'LOGGED_IN_SALT',   'D!vBMG1F<heM9}x19_W`7ZYs$g1S,0FJMKx<E=24nHBx.uQQRzl}rcUZ>`u/)Ca?' );
define( 'NONCE_SALT',       '<)o+_x$9v94*f/7b(H^q]F(&6E5)Qw>6@.wv!l,)[uK(yWLl[;$~N7 P8{HGpD%0' );
define('JWT_AUTH_SECRET_KEY', 'skotniki_key');
define('JWT_AUTH_CORS_ENABLE', true);

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

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
define( 'DB_NAME', 'seasite' );

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
define( 'AUTH_KEY',         'g&GR`D9rWB]C> .q2J@o/zBKoXqI8]#kp:?tkvP)qDU$v;FB[uN&RK&nojXJ..>:' );
define( 'SECURE_AUTH_KEY',  'w>y*WB$zb!);N_q(9;^5:TfSIKY9q4rVo67s7!{m4ackz4ZNhm@|#dh]gyx>#qEt' );
define( 'LOGGED_IN_KEY',    'Px}X.mHEu3Q44Dn#nC)KObL,[y;yn5<:Lm._0N5qRqaj`YNImK7TSK{Oh+v88m}%' );
define( 'NONCE_KEY',        'fVF^PBLx)_kToJ@m5*BJBJb#)B|QbwqL_Q2@L:=F7;e0-RqbI}[_alZYT5]ylg#g' );
define( 'AUTH_SALT',        '-]Z7_1nx{trL$gxm(BaWI9A=T(*LO2|3RR2EXRRH^1;Uy{YZ9j]s?[$verZs<0yb' );
define( 'SECURE_AUTH_SALT', '*-I/?nF0WCm:Mk*BQj1T1DHGGzA+SobDg4/P`dzE?RD5O>YMLUU73z1L^Gl+a5h$' );
define( 'LOGGED_IN_SALT',   ')]1=,fj|e|d-1b.npPuDTX8IvQ[.f XYF+-{71WA#eM;HH>w*MAd#Fy5d9( LUy<' );
define( 'NONCE_SALT',       '64cy$m&?,h+nn(&YCFBy1#j;x>f,.bs0f`0!pg+kDeWsx5hGz-<Q5<bx&Zkh7wGO' );

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

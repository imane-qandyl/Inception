<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wpuser' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'sipbGEv<b9n$wn<9Y!Gy^j!U26@C6{z=icC[[n)<r5+%w:<00^Wye&8:XSLW9``&' );
define( 'SECURE_AUTH_KEY',   'l@SHjlruQaD:J{qt RDg!)pM^7DE$+$@[=df=8`Oov{crS/.:zoO=%R}hAg g0w/' );
define( 'LOGGED_IN_KEY',     'M_d<y_kxg;AK[%dKwGn7X1{vi}X7?6ePBY3k$;I.3$]1&R,Bk&-HLVj^Ah!Lf`)^' );
define( 'NONCE_KEY',         '2F2?{]M9H&~iPKco]Ta[r1fl%MSX,,nDoc#J/uKN3EvKXL^y1c-l*.Z*@a*QA5mW' );
define( 'AUTH_SALT',         '.O#id-zU;$ObNkq89s-ExfX)EWU<ufb0>?1?1%{P|,>}-a#6>Sb9i@%~B,1 ^>BP' );
define( 'SECURE_AUTH_SALT',  'oh@2r7bQSwQwuiZC/93l~NPB=MX3i8yp]J0VQ7SGO<l{`I4),#?moV<F_l5.N8kS' );
define( 'LOGGED_IN_SALT',    'sOrKPgx.F)/nCq=1X1N+[6=(*8q$A#%%c&w} g8hj$gAPGa ;yJHy?!H$ML?KvKC' );
define( 'NONCE_SALT',        'A`tDP1LOkRgV k?qLY}W($.R4v>i0s%iBs&I(tXsDUe?vGnxig-hCMdd(r!4B4-x' );
define( 'WP_CACHE_KEY_SALT', ']uTx[#tti&Z%m,9HSz[tIrEjko^pYob,/f3d@u>qd>A9y4quW)qVm[58T$sf8Z{]' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

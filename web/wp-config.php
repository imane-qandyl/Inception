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
define( 'AUTH_KEY',          '31X]6}%CfyTGmN#$jo7vnFPek{}C}s/6.*<^Rch6nuN_^LuUn%97LS4SF$6Sv)Ih' );
define( 'SECURE_AUTH_KEY',   'bDGnnA|]>BD9Y4 nno.Mf{g_Ftm,Jm>jZT|.|9y|FVTB`JOSu{esA:ypoi)@3VV+' );
define( 'LOGGED_IN_KEY',     '`;NDJ4qeM1QGE7jk~<&ES4`#!Y!5IwSOLnxkK&gRKqw*{iDZv.+d.yU7Q[C`sIQn' );
define( 'NONCE_KEY',         'b =)J_^W1Rgy)>h)ls1U$En9SoxT,8Hl3,&A($[jk^PO:_Ce4=_-iu2jH2O:?<Lo' );
define( 'AUTH_SALT',         'DFF 9JPQ{rBMgtv@`M.F4@k|$Ub*V/J*FHAEI}=1pacvDGD(q%wO!*vQ3xRvNcnz' );
define( 'SECURE_AUTH_SALT',  '+`GC2Mr<I,P);eQ+Ctf;og$A14F@F.9%kLE5YJ1Xc8N7c>5=f7x.Zt!?&o~@`Nor' );
define( 'LOGGED_IN_SALT',    'K:g_C$X] Nq=Q@<D*YRuI_z_y?0>UEXLGrY=/`*t8x#@j<9?+7Gmd3=vRBp*o17f' );
define( 'NONCE_SALT',        'B;a~T`%kCwQ}Vd6Uf]TVQL|9NH:!t0*r h4.{7dE34-EVjDwq;pg.&KtSnFA?P1O' );
define( 'WP_CACHE_KEY_SALT', '^Mwhj/T)K1}Jf@ZIc|9gS^t<W/rdK$6j=C-S5D8w~i,[uG85&O;nM+vHKb6[IGX{' );


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

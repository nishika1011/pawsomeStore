<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Pawsome_Store' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '&Lm].y}N0Foy.5Jk+1ane-E8nUlg|LChL&dkpg:3voHEe@efRJv?;%4-<0c@>3TZ' );
define( 'SECURE_AUTH_KEY',  'IP#QgjutT!^2ZchR+n.1n?g& Ne,g0tMeYMpd<u/(EK;UtwDZXlI+,-(ttTC_i%_' );
define( 'LOGGED_IN_KEY',    'ibRT3B]BTcExjr&)3*OnpQK$[=MQqc<YrG>u{1&f@`K=Tj1yv[yejjj;YI=qx.>Z' );
define( 'NONCE_KEY',        'brd;{NBUA,+igFKr8oE^gLvXWl_FWMRga:TXeE v7MJp!!PwFJ[L6 elf8t#{]iu' );
define( 'AUTH_SALT',        'D>k?56nJ1<sV_?Jt]JPqvSxZ -FNcVXR>80,}`cmI|m$v1g#+-^>8Wu_hR&uQ:X:' );
define( 'SECURE_AUTH_SALT', 'Qj-,)CfRQnENvT##jRs&(qnMy`uw`gE|g]dLj e5|a4B>kN4%lxg&&knsvDP-k@N' );
define( 'LOGGED_IN_SALT',   'HnPW@(6=We0M1D]X@0D.AFM~Eci04LRRF=_m:.C=AWW,)9WWtp?Mvt(`7b9;4b/_' );
define( 'NONCE_SALT',       '2#qs/ct`lvsaHDfX++!ZYU=Oo_+SB^t8|p.WWhOQU*-yJ)x}U^/H}GE3PF|[qHdF' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

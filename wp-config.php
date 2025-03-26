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
define( 'DB_NAME', 'wp_course' );

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
define( 'AUTH_KEY',         'ERNS;8H<^v7HX.g%Ks%)>p2|Ff;UsO!~kw#{xdj9_fs$;JV@TC}|-inSl!jzpp9.' );
define( 'SECURE_AUTH_KEY',  'hKueWgqk::[)#v3I[M3O*nRJZdsS8qCX6*m2;m3gz<lY[mDOic[gbZVR7;slW%b:' );
define( 'LOGGED_IN_KEY',    '@m/KI:SR~wX ]zWu}>yCpR/AzyhM&G,*z%7RP@k2>JtZ6X(Cqq[Hzi`9/@&r.OF~' );
define( 'NONCE_KEY',        'rqq^IH,LGXB7:,zU/(*HGmzpKX35ruOwB!q$![8)ykk$S@XI:V^I9g+d7&?u&r05' );
define( 'AUTH_SALT',        'uGJWn2/~-?D38]OlY6F1[j9M<eF&H2a$maok~&n!-9ivfF:s==0]%4i=0Z>Vh2:I' );
define( 'SECURE_AUTH_SALT', '<sg57sH_dDA$A>u?DodO#BHt6j7)Z9O3Po$!s$F<O<6hT_qh.jhAMU^Dh,5%$9d:' );
define( 'LOGGED_IN_SALT',   'Q!Ni14OA@sZ,L<<#@gd8TKa]uys3+^t(?DSzMk`uR^(z.G,L[`eRR 516^fpsMZn' );
define( 'NONCE_SALT',       'w73zp,XexMxb^B<Y;>Xua9q@KDB8}(V;q#(w>hpB2^PI)mzN(TQgtTyo=MS<PbGZ' );

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

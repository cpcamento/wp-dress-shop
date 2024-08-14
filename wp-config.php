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
define( 'DB_NAME', WP_DB_NAME );

/** Database username */
define( 'DB_USER', WP_DB_USER );

/** Database password */
define( 'DB_PASSWORD', WP_DB_PASSWORD );

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
define( 'AUTH_KEY',         'R6vPVwi{fA1_JfpQXj>o.{tb&nvN||:GdBPF$5TqJKX$W2wS@#kBViOSECld7!-d' );
define( 'SECURE_AUTH_KEY',  '3;/9fEY^,3eLf]@d>qdW8J)/1$I!s2L2aen}%.l`z|6<-1u_)jcyY|%{5^M@S`k[' );
define( 'LOGGED_IN_KEY',    '-HEF+$!o4 s3Pvrq3|MFSSPpm|MtWmVm(=*jH-b^)I@t4boBG%lZF60O>*S@sTpa' );
define( 'NONCE_KEY',        'D.DnpMCA|=a+xth0PY!H,sinaV^5e{~jAyS]p.r#YOZv7z7j0EK|2!(bzUBOnM7(' );
define( 'AUTH_SALT',        '0[Nm^{DYesXuaUQX0[9`t_s~?^,dE+#$,pLV8!%Vc*S+)-{U(zBIc<P*h#=UIKbE' );
define( 'SECURE_AUTH_SALT', 't)cL(zl.CC[>kD?7oP]rQ$x?+}~$6p#,(0bOB?!2>H:Rg$h+6bL+7^h>xy{ms33e' );
define( 'LOGGED_IN_SALT',   '#q0]}-sxaspDb{TxGkt69i!|Oc=o?5Be>k`g,xdqvlbG3E(;u=W{w-T~{aFSmL ?' );
define( 'NONCE_SALT',       '(8(!A2DOYAF]RfwSZ@`2IX GKr=E%:=xzh)kADK,7h|(49o#Q,]n)NP J=laS19`' );

/**#@-*/

/**
 * WordPress database table prefix.
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
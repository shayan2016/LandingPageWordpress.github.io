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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'LandingPage' );

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
define( 'AUTH_KEY',         'Ul[Lnn.K@/@,VHz[!KyDIij&r1`H3)L=x0LZ]N$Pg_E>&)6rlG2jpFvI1;^Z5%%D' );
define( 'SECURE_AUTH_KEY',  'B9Ku333G3?uUn?.Un6FE43p!5-v^;F@HO9!4~94XynIeDmdaISP*/=mW[S^}ej@M' );
define( 'LOGGED_IN_KEY',    ' `<-Z`?dw+*D[MT3jA7l[f;~itvFI^npw>X6zlgxRs;41bYlsgdHPFlKX-%xv9*l' );
define( 'NONCE_KEY',        '9E:sr?AmTf^y{aU. GC9~ZU.Yn]N%?arr5F? >X=pOhnfP/ay[~0:N t0jBfZQhb' );
define( 'AUTH_SALT',        '(%>+?/VEJC:B_lU=)`%xC+)=<CwQi]c&K_$1dOt|,v26jb ICaaFQXp0>`z}jw`f' );
define( 'SECURE_AUTH_SALT', 'YYk~ ~NH&[?:kltZoCAq,1,2x)2QRn#~>^t*tcLgfq{nM:CLy.rA8.Rx=^&7SCn/' );
define( 'LOGGED_IN_SALT',   'E-.<}F}q >o}.RH-U5L^[~D/9L!HKX1SjEq?JPD$dlgfu1ojE5GCQ1kzztk>1Tyx' );
define( 'NONCE_SALT',       'aOL*.aXiwVchD_=WuS=O[4$7xgHO{[?Vi#t)i[&:n*,pB#RZbr<eooUS_Z6}`E2@' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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

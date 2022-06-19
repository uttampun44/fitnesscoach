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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'fooddoor' );

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
define( 'AUTH_KEY',         '-tT#-yJuD=hx-!PdBxVt*GEg[0n:Od?P^1TnWR`OHZx<iX:|<tOGFf..T)yqR,pt' );
define( 'SECURE_AUTH_KEY',  'lZ>5vdMGdW/ocmic7~8!r-_oGCRwzF[u~3*z{6+tN(X&E>VqDuM32dAwfC+)<8^c' );
define( 'LOGGED_IN_KEY',    '/0GUl(FNl9AP8Ft(9X.BfH5!OAA<sM3ro-Z-wfM`@<8$t(BN/?[<PMJ1aGrbPS[s' );
define( 'NONCE_KEY',        'D1qLw^Z9RpB:|7KPh?Xya@ToEM+%YzgjUl[6:xYH,S>?NrV`Fdydq_z~K$L57_SA' );
define( 'AUTH_SALT',        't36rQ#nj]yB,2C=mn`Dj232!#W&fa.D.7+dcbQ:_wN(RbPK4np .n1!qA<hAr{z@' );
define( 'SECURE_AUTH_SALT', '>qsP:_$*FF#jW)Ow%C,Z3zdx<p{)z:6;X<@dD9(Aai:B`%MIPsTuVEp*yq>npkV#' );
define( 'LOGGED_IN_SALT',   'SYJtU%Wbn;8Rvcn2z;N{7v`CwN&%kVd%?39|[-|0q)SiaJkM){>H_;WuPZk^!/Dp' );
define( 'NONCE_SALT',       'yc_a4z~`b)cO, :w3}1N?e{k9@vp<tGX9NI@HKuLZW}X66=ws_doAu%e1A|7dbY5' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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

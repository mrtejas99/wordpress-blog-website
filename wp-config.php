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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ';3>9Awez[,_l9}~5B4UBd0{!ZGz47{P]${nVK)1X5-ZjJs|:N5}C=1s6X2k|Qw2;' );
define( 'SECURE_AUTH_KEY',  'j(EJ-PjMc<AdMm;Uu:(9mn[1c}f8Y::R8 A,xta[u0tDwkf-?f6a_6g1Zh}^x:BC' );
define( 'LOGGED_IN_KEY',    'a^1X<? ,.Ob!DnKy=@#%>tOK0fxNJw0iJh!*m{C7QQ5Wyw>L:gr`tThe[h0W[|#F' );
define( 'NONCE_KEY',        ']5pyNq]r6y}x)UlQrs/XM>#k&8LH.-`3EVNshj j|L9k5yXS{zid{!.J_VGY%ce`' );
define( 'AUTH_SALT',        'jZ}G8NlW()2LzpJ+`hfv:.kL$W R:pi&))P8uY7lr87e5a%7ZhTDfOs49Mj(Wr2m' );
define( 'SECURE_AUTH_SALT', 'ql_8fx,NbSU>nEOvl9[o&I5v@GXQ{&03xeDNsfSuAtPrzV:eb<Ps*)?6`= NnSHG' );
define( 'LOGGED_IN_SALT',   'Xw`fP>CA~mLx5T=^gJyisa*rJqia>^y(nIHyNdca?-_@th(=~g;>}AAxQ?dX_L}A' );
define( 'NONCE_SALT',       'P<F}G1Um%@Xv^(!93D +yuz`[[Iy}*46hF(y6p$%Wet)Q85V|bIgvv9>M>640HDU' );

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

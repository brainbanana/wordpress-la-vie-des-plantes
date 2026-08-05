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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '=}*c*NLZ)[r_kM%yG~t7fTSHlHo$-o/|s9na@Wsz}r@;)ONqt$ DMak<(X*]LjxT' );
define( 'SECURE_AUTH_KEY',   'U7#O 6QH))&X=/Jh5k%}v4#&Xs}eE9|M{/HIZMdRMHIr^ tSyu51h)9$lk|k,0i2' );
define( 'LOGGED_IN_KEY',     '+|KFA[3bi.?*XW#4pQZ#,.}K)w)r{GH<`F[MVpnOpuNJ0P%Tq:iwVvc>r$,yb5Vc' );
define( 'NONCE_KEY',         '<>,`N^Pu^8QG[ZcsP.p%}kuaU]@e} 2DWo=QwUhr!VMvgTte,.v+Z5.y4nOh|R]m' );
define( 'AUTH_SALT',         '[k~BS<H+F(@W?B%QW~c,Cj.O8%9cy]Bp{r)Y:dI>w--&+65!y76EStg/epiQYasW' );
define( 'SECURE_AUTH_SALT',  '-!()nDp+*(qn|3B=5<?bWCcTh|:qT*eY6XxK.Ux`-zb|d~#.Tga-*=GUTx/*lLbH' );
define( 'LOGGED_IN_SALT',    'E~lYf9},uG1x,#C#6AFVvy}v^_K[v9gUz)9kW M>o@?O[YEH>FiMX)CF?.Cxhv06' );
define( 'NONCE_SALT',        '9wf&||y7}~8s`gq`=ae ymit?TIqrFq(fovWc%MkXL^~|bBK+M_~912L);.>JJVs' );
define( 'WP_CACHE_KEY_SALT', 'HoBnYt%cqXSdzYkFXsD$^-be>iJXBXt9M56g_bM,hkM4`Fbi6N1:g_60q^C8}<!z' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

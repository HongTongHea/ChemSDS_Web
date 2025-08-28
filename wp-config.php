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
define( 'DB_NAME', 'db_wordpress' );

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
define( 'AUTH_KEY',         ')F+wt}$hf[.raTh^i%aUP,+|CI%*0){/Rkd5i:X{=KlI~ZE%?=Pp8$3[|nI~xnF+' );
define( 'SECURE_AUTH_KEY',  '%O2&:GW8-BemlBB]dn<;xQcKAGwH[nXl,guGI{7UyQBT4Hs4vgKEI1I(kTpaY-hR' );
define( 'LOGGED_IN_KEY',    'H0_x(A?I4A1-as!0OL}#7hbVU7N@p;6AnQ78JIUAO@gy(v@rA[j|Bv98nloaS-S{' );
define( 'NONCE_KEY',        'Nx&h_=P6@=3omH@)hnL$bsregIJxD)$TZJe#H.;g@`x(ZywKN1m)QM?|Wh]; XJ,' );
define( 'AUTH_SALT',        'c1tavMJOb@b*k`%dHi[H01?.X{JYmqny`3*6A#,)S$9OL5Id[O4Nl$pgmg|UY}!F' );
define( 'SECURE_AUTH_SALT', 'pNS/[_C$bg;V_YLt gFFn(?[8Nxayxr3~;]/R2FJc,GSks],,5dyCoAKZ6Q?h4yE' );
define( 'LOGGED_IN_SALT',   'imsxFA`Yx/N1G X$G-4R-mxT?RcD~8@8e2i21GHvY9&`k =~_bx;U=)+5;J&10R,' );
define( 'NONCE_SALT',       'P e@$3Vq~C;Oh>Udp29FAq=3BFMxAynkn7GHYi$D/g8$,^A8HyjwC4l_{ykmW.p%' );

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );

/* Add any custom values between this line and the "stop editing" line. */



define('WPFC_CLEAR_CACHE_AFTER_THEME_UPDATE', true);
define('WP_MEMORY_LIMIT', '768M');
define('WP_MAX_MEMORY_LIMIT', '768M');

define('WPFC_CLEAR_CACHE_AFTER_PLUGIN_UPDATE', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

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
define( 'DB_NAME', 'db-wordpress' );

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
define( 'AUTH_KEY',         'rcacMMfk0BW{t9#O~F.8ai[n|xlV}}}/,q)j`Z`yaM9Hjd88@uS1cm+}wi%Soc&+' );
define( 'SECURE_AUTH_KEY',  '*CU</^{pm{QWD}6ST,z2CxvA`9W5X J<u_>,}.UYQ7P+2CQ(;gdnuP([Qr#kHdx7' );
define( 'LOGGED_IN_KEY',    'S!$rWCa/pCtOX]a&(7X?OU?:^ftk(vt_;I%Lf_M)|%T(4Bk cEzm#li$Vgt#3MWi' );
define( 'NONCE_KEY',        '}4-(Zaml-vZ7Xlv`&Kn$#)hG6)L}n*z[I?eQTaJDNd~E#fXEp>kkx]LhWRm,oonw' );
define( 'AUTH_SALT',        'jRPi{ :`_ ^2Jbs]g#w<>UA+~@km-{J4uCq~1:q|3o{VQMaV7Q~55T,4=9IuCq3i' );
define( 'SECURE_AUTH_SALT', '97$^{D%x{L&%C>@Q?FeR`L{sgJ(#5|:bt!L[NFXI`anXeSkZ<f~ssvN5wxPg{:B6' );
define( 'LOGGED_IN_SALT',   '-~dz]g{e$y~:U#Ml4_n?uD:maiBvcw.3:B*ar?>>+{*}@Id]]t2V_XteERf*pUb@' );
define( 'NONCE_SALT',       '_?e,<Kuvq.y,_zL8%$_!(fr:J8MaK(<+!:yMKdj8~q4of+CWW[U/(U_#f8fmfPPU' );

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

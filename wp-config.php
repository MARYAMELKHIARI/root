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
define( 'DB_NAME', 'ecomerce' );

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
define( 'AUTH_KEY',         '&NYRCghIkA4O{DVSxbh$oG.FAQ~CS.I5gk<e3}J$csbBef4!2?a!baG@qd`}2z4C' );
define( 'SECURE_AUTH_KEY',  'F^oo=uJsb*ec~}6}a]`h@Ju*hqoNcvWQ?(^zIV/u)h+f9?0E*wCcqO3m.%}MN}Y9' );
define( 'LOGGED_IN_KEY',    'yJEFIAHA=XfBK<{w5H-z#NVA|@=YO7u6wOnN!x@yW+H36;Ld>wAi#fz_84<U5vq0' );
define( 'NONCE_KEY',        '6;r/h#UJpuHVsLu[@3HUY8d[$-)V,<_$Q@7;k#GE7},PSgR nr%>+5hK-|;7`H*y' );
define( 'AUTH_SALT',        'PSLU&;yd#PxUW@,6-7^?U)Bcg4sx< |0 n)~ c<ezG%=&6YIGoGV?gF6P9VX#R^ ' );
define( 'SECURE_AUTH_SALT', 'e2LY*CjD2)[A00,q|r4YLISEP:FU@3G>c:T#A7y9={9c);Om%C)~)f?RF*8L`8EL' );
define( 'LOGGED_IN_SALT',   'hix:IevFl?C&zURS*(&2Z61$zJj}f;s:uCC]4T#4=*I^1U?@*YgQ &|nYs<$mm8e' );
define( 'NONCE_SALT',       '7jF@YHb5DXn:;!Ca_9Dm}Au|@<#OfG1j4ST7+@as?YqSv+e*K G4wpcSn/XG/D07' );

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

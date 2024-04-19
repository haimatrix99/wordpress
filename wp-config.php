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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'rzANiB4R' );

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
define( 'AUTH_KEY',          '0q9i|&65| 8m:0kKCvM+ODu/+^!;[3F#IbtFhmyv!P38nVo:XSkKF):fe,q4GUxk' );
define( 'SECURE_AUTH_KEY',   'HIQKKMEG=TZe;ddRSvcC]7:7CKO64)Sk[.ZYCR@;)IVP#0J=L{C.<qu+b(ZNlI,@' );
define( 'LOGGED_IN_KEY',     '2F^i5J/,c8IfL3ziVfqM#`M.0O}]6nZ--^vV!3AJ6<ww?#8AT$?pF&9):;msq((.' );
define( 'NONCE_KEY',         '4-1>ukn/}*RCO`k?2t$_Jo7t,wyi1n`R]7|v#cKRY=u;YBTR:/7i2LG8a.t7:QF]' );
define( 'AUTH_SALT',         'R.Qz@<~MSkQT3KOTBB6TL@JG|Hc4rROw=_oYKP9fQ]vGHqNRJ!DRN=7y:a}}/A?^' );
define( 'SECURE_AUTH_SALT',  ':v/B>?5n)dS@x?%SGTDEWEMrz=BvVssMU,JBrx#9omEb_g;f+^Z5y!QBt!33xkVq' );
define( 'LOGGED_IN_SALT',    'sK.[*o;(Cp9{)MezcVu;ee1z`dTd6Ua8>h>o%E62?No64 l<*p6U*-:INMR#7<jW' );
define( 'NONCE_SALT',        '9M^y1$I@l6J_t-)@1q9PE;b{6L`j*T~..<40<QF)-F}aJ+b?ZH%4ZOCt_qlv+YiC' );
define( 'WP_CACHE_KEY_SALT', 'J6>#f~J#1~SnLcCn+C(P?t4%S2:XP,I3IS$rXL*#G.#Y2Z0{)_@eKEDk*b52}S4.' );


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

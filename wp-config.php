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
define( 'DB_NAME', 'news_site_wordpress' );

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
define( 'AUTH_KEY',         'LXu:UA$fC]h1MbeM%s>1Mn@{ZPNNTA{YQJY_gwMtdp9x]hQ7`={;C~8=o03lJKIp' );
define( 'SECURE_AUTH_KEY',  '}_oTCqKb-MZURziLYisg,UZ6r+428@85[>wvMC!qu:!-s:K8@v]qEW=i!5R%$9[*' );
define( 'LOGGED_IN_KEY',    '8nBWyk>oBbmt/eo:dD@?Yy33>NajHsVZ21H$}uZ)yijYDsfI8ehO_w[ A3B$jOTB' );
define( 'NONCE_KEY',        '3Wd:iq1Jxmu~6_}-OpAa,hxtr[t[(]>Ubp*SlcQK}GKT q/pA?=g}}b56EY.yK-C' );
define( 'AUTH_SALT',        '%.5UQ3a21`n&oraO2a;(Q5h(k]5k,3Z-YYAh7.<d5.oa&fRUi,6-.2%Lfh1xKjE9' );
define( 'SECURE_AUTH_SALT', '*xVi00c<^cz>J<#=xe3~r.(HFfM[U08k##G4oSR0z|SK=N)aGA-r]!1K&gjetkeB' );
define( 'LOGGED_IN_SALT',   'qKq!)i%s9Zbj>I9[;dzNRO;C$?=chlxO OO-ldmIP8:V>C~!gYlD q^`.PRN YI1' );
define( 'NONCE_SALT',       'p]nYyp>Q:m~%ZI&lH[K|qWmoi_l<>MU^TjZMQ7Vf<U7J>=JW7W99dSvudphnw@2t' );

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

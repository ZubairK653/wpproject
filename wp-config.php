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
define( 'DB_NAME', 'wpdb-git' );

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
define( 'AUTH_KEY',         'd#haxOc-8D)!qelFcG~GX?h7-@is`=,pO<I_$7P~t0L,pGc6L7c=g13lFi^CqOc!' );
define( 'SECURE_AUTH_KEY',  ',:Yf[r7C8OZR%>6P9ZLv#Y5W=DHsa98UXzM3E!cXjJuol+.IAseQF_f@EQ9D; d!' );
define( 'LOGGED_IN_KEY',    '1<{{%]Jm<DrD;Zg~akG@1bZt~R*.U/MoR*3&{nN+^]]?jS}az2cj]Q/8I[7ez^eX' );
define( 'NONCE_KEY',        '~B,,!_#!mXO%%-a:n?V4Gz=ZHtd!P7zTy9G_FL%/@hB9^hO+yAfc9W?KcQXdSi;A' );
define( 'AUTH_SALT',        'L*;~~ *Tc a]9Ej!eLg%nsLr?mAZCTsH[;>aDXeo.s)&jury*od3[pgNSjR> qux' );
define( 'SECURE_AUTH_SALT', '<Jbb*0~jw``e?+O#VY7Yq(t,B]b-w>+= V6jx8bZ*x}Y&.-5QQCYnbe&Eba$,`nM' );
define( 'LOGGED_IN_SALT',   'M2Xcwd//i2w&v*m?Z+?vdV)=)R}U(UU#w@Ez4dL)MJ5qYP+s$PoWTp]>olS(`iU+' );
define( 'NONCE_SALT',       'f3ckVt66jywL06m%d:_O9ep-[4;>N[gN@AH5R5AkT_@ooM0]cSHOM3BHCB,_nAIK' );

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

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
define( 'DB_NAME', 'lassana-flora' );

/** Database username */
define( 'DB_USER', 'flora' );

/** Database password */
define( 'DB_PASSWORD', '0)P.Aw]ah4(5j0ou' );

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
define( 'AUTH_KEY',         'eZ*9  Wi6s#Z=w|23 %vCU6r!O;-;s%M(m23S31XkfH{,Ad~DbX,cdNOES]Y`<F:' );
define( 'SECURE_AUTH_KEY',  '.,](@B9Mz2bf3/E>v|FJ4Y9(jgho4M?6 &n!F>/{qq,=)uD15Z2h%YvWYw^X)gMD' );
define( 'LOGGED_IN_KEY',    '.OfZ^ANQ;<oB?H5m9$evgOH]Mee=ReYp)#u.PtUB x~sbJ?}*u5da>3PjR%>aUN3' );
define( 'NONCE_KEY',        ';/{Qfyb*z0,!i&ID<~6F6H,j]LJeZ$i]nN{VKez$o{wpyOzq[Y6;qdXZ=+0!N5}d' );
define( 'AUTH_SALT',        '[=V:ky=Zeq5{d7_m[rE_(5w)|(N)iRZdt</#*/l#-VCC38KN0gqZ&Q<VK8L;6Hwu' );
define( 'SECURE_AUTH_SALT', '[}U7WLpn]L7;^LIF)u{yW3ASf^AO>#T68Su8E<~H{u3].8U/G]L o3CVaiF/lm]_' );
define( 'LOGGED_IN_SALT',   '/I?@J3r`pn#TnS@Wze4aI2CdvrlE{[sl_SH#(@`<<QiC1@UMe84 @FIuO#bF@Tsl' );
define( 'NONCE_SALT',       'r0+FS3(N!~EiN*{u~K+M&6n@ObuaMmiHw7BLD,QHvuq>5,Qs4<=xNcDsJxdshh-d' );

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

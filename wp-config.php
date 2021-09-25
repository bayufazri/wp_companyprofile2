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
define( 'DB_NAME', 'companyprofile2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         ')i5y::l0Oy#G6{c_!_!Nm10n uE68&IB_N;A(3_(x)!TE^&KQ~SItzPLWcpk!fAN' );
define( 'SECURE_AUTH_KEY',  '^X6n4VP8dSapnBlhXXcieJeVMm;`]L$.1|QODXhPg%*Rwu{EYjVN|mpDFX2wNT(r' );
define( 'LOGGED_IN_KEY',    '3$=oz1`{^dt~(,?$I&Uq@|(N*Nh]E~`w0$*s7 1,8.e1M|F4iROtQ7m6vm#m`S=+' );
define( 'NONCE_KEY',        'y|,v:{?U(ob*--}hbiUC9A^vA@.Rmq>cCc=Mm&5LD}*)U-~XE&+{yS:5YN{jLl@Y' );
define( 'AUTH_SALT',        'E@!GE?OB;%L UO,`S{l7}YpEUr7$+DK{8Ch=WY^T@`smg*{:3<46>iu;P,uklnfu' );
define( 'SECURE_AUTH_SALT', '@0igrEY9*%2NXuT2S]@3<g)gX6w}XB`NZ/Ob<}{[Al_<oZ#dW48-Z=qIT{2{JkIy' );
define( 'LOGGED_IN_SALT',   'NUcMwuWRGN?*:W8yIK+v@vvG=`kxwH,FqKaonEpui1<FHBaO;FbE5^E9le>3CLxP' );
define( 'NONCE_SALT',       's7%rdlcik(OS#=O]yF%w7t$QN&e<p;N|lLG||[evlsiW&Fpn /VWlN@DLP{k$zR3' );

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

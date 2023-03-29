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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ecom' );

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
define( 'AUTH_KEY',         '*R-scQ=%OP2N/m%war@E+nKbor[`oEwV3w@R4PowD?;Gn{`LXRCn)y7J?;{T]-VO' );
define( 'SECURE_AUTH_KEY',  ']/_>L$W+oia8{NrCSnD@CK[+CAnV;,9Djw!XePL4AIJyT^h>XM0P(zpP^T~I{FaW' );
define( 'LOGGED_IN_KEY',    'NI;g$SrmF1dzyD<X)b}Lt?B`g[uq;*]*2[B-%hneSDqh^7ZC!Y62V0R=)[WCU@/M' );
define( 'NONCE_KEY',        '*6J0GKrR=sR-Zb*)tK)c 3[Cy[T&4QQ.z,}4s}E#A3T-Dn94p1<+Pc?v7.m_k*0s' );
define( 'AUTH_SALT',        '7uOF+)2;21%fExF%$P}^Hwh!X~QrM>z!`Rb=@X|!$Bg#<$kyxZS;JZ 2mAd.x}0n' );
define( 'SECURE_AUTH_SALT', '1:TL,.OJ>aN#BoSi{B~mU,|PMEi*:afZ7C-7zqo1F8z]DE.me,p}{$4t3pWIZ)93' );
define( 'LOGGED_IN_SALT',   'Bl,,wN]<6clHa2UJDs|cRy6A8e}ilqB0}q.s`ullWPZa3^l^[BYaMSPF:Cq{6c!P' );
define( 'NONCE_SALT',       'mf)z[FO!9a<6X4b`%7I;CrW?awQ=@*Axri4o9/N,7A|){`RsNa!v|`DH$^2~EVtp' );

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

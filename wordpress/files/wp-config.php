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
define( 'DB_NAME', '{{ DB_NAME }}' );

/** MySQL database username */
define( 'DB_USER', '{{ DB_USER }}' );

/** MySQL database password */
define( 'DB_PASSWORD', '{{ DB_PWD }}' );

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
define( 'AUTH_KEY',         '!!i+!QM(xNY+t!05HXYu.-Xs-Y<9CSYCDx58;0%>htZ+8X?4xoizf;eUy7rB@bD^' );
define( 'SECURE_AUTH_KEY',  '.YgBu:I03}u0[=*T7LCr8tJS f#9?93$VP0z1y?O*CRaaGMV3x`qSO6Wqlz2h4/U' );
define( 'LOGGED_IN_KEY',    '$9ovux[^;53JM/L&amM`G0,WRSuyK)GtNOFt]M1P<?0nTt@S-zj&HXZ3kuC]>DyT' );
define( 'NONCE_KEY',        'LwOpvW}~%4G^THU#WN_il2vz<rz`I.||G+tznD2(rP;{8`Mt1)-lV&[*i|n.gr@;' );
define( 'AUTH_SALT',        '&y-iiO,V;*I1pySzdaU;PW]&OFL.i9+T4U4*ynGTM:Q)@#l0|G#Z=10|$PUtFT&K' );
define( 'SECURE_AUTH_SALT', '!5LdtF? e,$mY_)O*`4|+!8p_.18/i6}e2nR`)&97hchiIdl$A`7^X!|K~NfMS>p' );
define( 'LOGGED_IN_SALT',   ':B]]H|db+/#9F~oD9SMK6-mlzi:Rt|AgNq.6z0Pz?71EOs~)`ij(puIi^Ff<;B&x' );
define( 'NONCE_SALT',       'wRj|-3y$?2?0D][iNugII9&QhZJ^+.$Z0I=aBKj,$2A7w6&M[-f#^)J@[.w73Y(X' );

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

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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'pass' );

/** MySQL hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         'Vkhpr~Pa-+DL58lifRT?Of&Z@[X,GCkDtf8aT>lPE:RRMbWdEfdvtJBB[@:[Adc;' );
define( 'SECURE_AUTH_KEY',  '2k#3Z kd[I^-Yu-,}mY9Sz#uw,w&?QE|IE:i=$VKPvsemEg,2oA@M(xJNo(?Q],R' );
define( 'LOGGED_IN_KEY',    '%ha{mhgnJ.Nh86k,{H-T30h=e@[)O/Rd$q#XmfqL+FzI^<sLpTJb8wq9i5=]2fIY' );
define( 'NONCE_KEY',        'bB5]G4a;Q!V6egK:d=T$~!1J[I|4DuC^UBbza#BkOuDfcG[NoxsiO)w6/4DY= 0[' );
define( 'AUTH_SALT',        'Yd[@W)*}q:[YC::?BO!Hu^Kw0dK>?tT O3Br?[4=2|[X<<hSm@z*vY,L=.j@i@Kr' );
define( 'SECURE_AUTH_SALT', 'z}>?a^{(1?77s]~[p[0!UHSuC7%h3fvJfDFt@U^]`IY`uD?h7!v3QaPa%I+X]Cha' );
define( 'LOGGED_IN_SALT',   'wt|Gn_qHaN~Gm$@N>:O6/yUatx$B2)Fv<&IV#8B?y4(<I86@cyG>C^`0t)wV|o%+' );
define( 'NONCE_SALT',       'UYbRD;zd.[D)%rTt _0?m{Th@,r;[Cd9a:>*,}V?J78iHmTP_eGiiPz1 pT&n~cE' );

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

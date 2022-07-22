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
define( 'DB_NAME', 'itds_agency_test' );

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
define( 'AUTH_KEY',         '*#p-WWh?f}HpY+`*`7ylV0oG2{chke&$xgvc)CA/l S~4.v}fO}5l~.`E27B9|X9' );
define( 'SECURE_AUTH_KEY',  'Sg:uvtw6X4T0GqA%RfO^nU!(r_dw/%$n2LN;&Ia%/1kS&JL{536_%8YnYh|40`Nb' );
define( 'LOGGED_IN_KEY',    'G{qw9g!bAGv5ui$GdrI3HOJnRw#ewXf,_kku4=xWu? DW]&fj8:OKD0)~yxhW95=' );
define( 'NONCE_KEY',        '!B}rX?k=U=nTa,dB9$4q^,z]j*PrN)4JV/|v8,&x;[DydW8&7fk_5jH8zY7I[5W@' );
define( 'AUTH_SALT',        'JiQ&hZ2aSq?Zsgb)#06FqC`a.[%:.3fL$=3]H6]c@txfUX_-g;9`:40M7U,>s>Jb' );
define( 'SECURE_AUTH_SALT', '(-_$`zqdBYqorUUZzvgU05N-j?Ow^iXoJl])F#`M:TRjNF<!K.(Q(/q[pe]l5a?#' );
define( 'LOGGED_IN_SALT',   'HeFK5znJ-`@qKde8PLa:+g>=N~*7{KjH?%l)^y&MYOA;FBt /Ox)b-y*>Psum2)h' );
define( 'NONCE_SALT',       '4P`0aKs5N+$DxADowH}DC+o&8x4o0@PT}XiR~zx7_VlT0pH<9<eB--f?L[A&QZCa' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_itds';

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

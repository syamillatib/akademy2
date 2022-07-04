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
define( 'DB_NAME', 'akademy_db' );

/** Database username */
define( 'DB_USER', 'syamillatib' );

/** Database password */
define( 'DB_PASSWORD', 'MMF5wL!jIRNU@26(' );

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
define( 'AUTH_KEY',         'L>3.f{(Jk?ozh$eb#f{Usb}BpcrnHD@*mputc]U0~mqsOYW^Tu/SSCqIfKyQKu1S' );
define( 'SECURE_AUTH_KEY',  'rz?sRihv5|zo`}9&KqoNG^]Sy wOt=4VxZK0v93t>i.%*68 &!u5>d6S h80si*u' );
define( 'LOGGED_IN_KEY',    '6Ef Hk0kDN;kYt{@Q^[CQ3n[Gr ;I+2*29gNqIVyrxa:Pv{t%Iq jQR*>ig42X3U' );
define( 'NONCE_KEY',        '@d:Hiy|cy=&oa>D;$1-mQ+tlBdoC3_:uVp_BWo;dj|0GD%+xaF)YbXPUT+Z%,Z%W' );
define( 'AUTH_SALT',        '|oKR@v?6g9{KJn_%y`Nlb$+-Bf<z;d:k,^xU*BK,/7[<IAfY)s`/V!7Rh/lAaUw1' );
define( 'SECURE_AUTH_SALT', ';a)v,cb8=z1GH+fScS[`~jVHN|u2(GQgm]]gID[E|O&Km8ymJvZKt9bn9?Dh`pcN' );
define( 'LOGGED_IN_SALT',   '+:0$CJON8wAwKqZ0*c%L&5rL4)o,X8FH$. m,&.3y@#Y5X,[|GUi^}d$w;_Z@ b*' );
define( 'NONCE_SALT',       'F5m-?L}eaBj7e{+He2+OU[ShbJcJO>mQyFE4vrU#p(#<cxW{8fW]-=T)6%A^O0WC' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'SML_';

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

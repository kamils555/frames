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
define( 'DB_NAME', 'frames_db' );

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
define( 'AUTH_KEY',         'ff 7U`,S| p{-_W&6wbLo_mxlSD=[dhjRD[aYfIgluj(m3jn%3Xw3%Zp4;fXyYlt' );
define( 'SECURE_AUTH_KEY',  'EsFv1`I13>X~41o52UmFbioLu+A3tCsdIMy0|@]wy3dS!EuQEk)$4K++([PmM5<<' );
define( 'LOGGED_IN_KEY',    'njr5PbVo1,=GnSgDWRu]l3t|^mSDE9)dhF<#vJ%zW#~0<g ~gUk(_vW:17VwDHPp' );
define( 'NONCE_KEY',        'adC*l_,@-KrR7qf7!4WL+CMz~Sup2{*hJLK]&0Z7~,6W6p4#+c@#)a.E;0.K2Bh2' );
define( 'AUTH_SALT',        'DU#r!j!cFqcYn-v4K@TZJ=Ul5e%NOoRL`#kgZ&4H%fa]};3T}mo9,q@6{c_@hWp/' );
define( 'SECURE_AUTH_SALT', '>E6No9[o_0|6lGI?waX%@5PZ&}k|sI,.~ri=g o:wQozi-@DCYJPNKL:Pesv#Ew%' );
define( 'LOGGED_IN_SALT',   'K:)!9T;-y`H0t5>$Iia7NqQwr^8Hc:2Da1`c;L<9Y9=sy(B;jy@sa$$Vx>.o.Vy@' );
define( 'NONCE_SALT',       'U+S(Rg?Cm4lwsq>(}nCre+!6^BBTS%k;$o7lGk@4dt?k1+> Om38XR:2yDKdYB8!' );

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

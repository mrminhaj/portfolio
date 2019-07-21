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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         '7X DxFU]O25^klslP1T6ydYm^ysmRS22x#ADFYxl=!c yNe+bF8}l0dLIm>9/k<d' );
define( 'SECURE_AUTH_KEY',  'H @NBja!+d!MAuTUGhdff[-jq!Z}7b_PO1(yc9X,mj?w@X!A5No6TQs0(rNy&nJA' );
define( 'LOGGED_IN_KEY',    'S,<@`,oYm7Eb>Wym}<;^,gD;%g7nQGkY&eiqf+Ta_tze+b>|[KgF%r5:_&r/p%a|' );
define( 'NONCE_KEY',        'I`9t=st$j{(L_ExV?zpg=CYeX(]9m{:PW14i(1-`.a/t?uJXw82P)x. @$zdVPS~' );
define( 'AUTH_SALT',        'D tpJli43XaPf1m{!Kmg+ykcSl25IkOf3->`(8~Kdmu)MyX$?)/KIxu{# QnZZ&f' );
define( 'SECURE_AUTH_SALT', '`$%(DDExcx%2rz#XBB4r%u)eOB*wtT|veWZwjg)rYo<(xn}siV,vM&~PDiYUz`V;' );
define( 'LOGGED_IN_SALT',   '+,H<#o3<1HJ3FmsM8*;ulh8jCS>t<OkM]Jy?w+@(t5QX@[U!0y{6H$O,lcwc}(B]' );
define( 'NONCE_SALT',       'aI}BHR%bJ@a&l<JMjn}Bn(3w8r?*g!24<hs3!#74V7~lNbe3qRC[n .+gQ(_rI`{' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

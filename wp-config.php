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
define( 'DB_NAME', 'website' );

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
define( 'AUTH_KEY',         'V!Bb%Uc$Eb-B50RwEXXGTjG#*v8Q|6,Y5+0 4$,smjQ$ty`GCtSR7nF$$y3sHX^G' );
define( 'SECURE_AUTH_KEY',  '+5KjqPCM*^+?RuhD8[,v8>~/hG%ZM&SB5eRmZAkR}Q)&?d>-.m]k~51[sQ8`{##~' );
define( 'LOGGED_IN_KEY',    '$~kgl1yg;=AP-W&oP8_u8Uz3MU2Lf*8y4]q{=]K2Fz 1wxanJ<XC867%bvQ6`}9d' );
define( 'NONCE_KEY',        'yw^>M<=Ar^?MwciCGbG^#Off}8cMtE1`SA CA(~;`!}Mid)P:fw(<#caG*!L5fR)' );
define( 'AUTH_SALT',        '7:|EO]?=e-;_oVjx[}k$*`oSh,JB.)uLzqiM!||(:E{v E]p$>6G#-+I3y2OH`ca' );
define( 'SECURE_AUTH_SALT', '[6:WwS4: |(0Z6rari/KK;{)frk)W<%O%anSkkf9;vjRN4Ju9{OVo8HaL!c+:(Ld' );
define( 'LOGGED_IN_SALT',   '.z5?R`NqlCYiR2%{%|V=s?wynG;E?Ch,MVnwua$%,LCmi?Oz4^vn:5Q$&P qamHt' );
define( 'NONCE_SALT',       '*+}B&|qv0W/M.R{#eyS@x-pkk!i?2<z-7:hZLE_IK4luLMV#~.;akROQo{8%1Q}]' );

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

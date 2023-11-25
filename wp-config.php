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
define( 'DB_NAME', 'tin-tuc' );

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
define( 'AUTH_KEY',         '!OA3=b):=:-i:U1cIg4v_z@vAtaD!!(*4I#7!*p)e*PEcN[$*-2|.!*S5n4z`C)U' );
define( 'SECURE_AUTH_KEY',  '`fa,x!y>=7<n9,YJ<p {|q47]Sa-}69orC*zN/f4w@E$UH!I|+KD#?gPYYH%Hg,k' );
define( 'LOGGED_IN_KEY',    'wIE4{JV:CEcMv&T Sk;=!;_|/H<5]rQ@dn<pI9:aG1[J@E0BlH%:b.vXR6ock[q_' );
define( 'NONCE_KEY',        'j9DxysWrI%)E|lAU?Zwhx-U~II;:Oi$&r6zzqZ+xr}aNT3gP;Ao]gXz*V}Z(1bxq' );
define( 'AUTH_SALT',        '#KRuOz~43;{A>3{6uT~Z?Xc#dU<D[UMo8,._rlH5tGaxmNmk<fl%f?|jnoYC~H8#' );
define( 'SECURE_AUTH_SALT', '3Wb`J)ssk=e%EBlZ,y4i6;am9c?~w|%tR#qOAoX%6fPQ<(3UH>ko54yNiQY~}v:N' );
define( 'LOGGED_IN_SALT',   'd2-ATyIZ|I(u Z=Ih|?|sunC-y,NdD!`IAY]:o1a@)IJ/`b4(zae$)OzSi0_q/_#' );
define( 'NONCE_SALT',       '^Rn%PA ;GiWrL?=DkKWE}dAK^+huL6]%$<j:fy1qC0lJ*aUwsXw$9y?vlV2c X78' );

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

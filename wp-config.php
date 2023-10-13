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
define( 'DB_NAME', 'db9btftfby5gdc' );

/** Database username */
define( 'DB_USER', 'umbs0rizs4rxi' );

/** Database password */
define( 'DB_PASSWORD', 'fualtlulqljr' );

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
define( 'AUTH_KEY',         'H|lhHKP[;C>:1[*>zA2&A-,4:H@FnlGIHPkEdk2 -nT3^i2f5qR*,yFx>@6!JskG' );
define( 'SECURE_AUTH_KEY',  'zx|z??Tzx3>%k!*[h*f2l%YrrStX~d)[hl,rg+Yk+fK)@Pn&r-^l8.rGayF%-va.' );
define( 'LOGGED_IN_KEY',    'F2H!GKAxBSetVFSCva=p1i|3jH.t^d7r~ja;B,o.)Bh=mb6E@F`fFEo@KfL4ytJ@' );
define( 'NONCE_KEY',        'P,#e$1Ws21=McTKO6~7vk[.z#>4~bYR`FAEMll90d]Hf=F@qApm3kHktd l[kv=}' );
define( 'AUTH_SALT',        'ND7kai5HFL1;zf-<R?:F+O#J#~Dm`]+;}2z`~V%;hs6-5X&*X4l2uJY>{:~2x|7/' );
define( 'SECURE_AUTH_SALT', 'kf^fqq`k5N:s}B]r$GzyjimafzC#By=6m}GFP9LxVB.[/OZ9|h! VsS-q`QHK*dm' );
define( 'LOGGED_IN_SALT',   ')%,,i_]*miY5@W7;Q@|-A|v+$d7)$&b-a@9QIZ(zu;=M`Ff #+>N2C@[X_Tj-fp%' );
define( 'NONCE_SALT',       '!l8C=;~NmH`C4PIB1bcqR9hT:dwP$6Fq0FG{ 8UonEV=%g5[Q&242B=i|IZNidzp' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'syp_';

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

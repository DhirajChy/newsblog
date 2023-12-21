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

 define('WP_DEBUG', true);
 define('WP_DEBUG_LOG', true);
 define('WP_DEBUG_DISPLAY', false);
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'newsblog' );

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
define( 'AUTH_KEY',         '35z0@n2a3Z? VV%W7ASnRKqEkxuk25-q(t6(;50e*Cmd-nuZxh2M)$dx0MzmhY`{' );
define( 'SECURE_AUTH_KEY',  '|2~&$^abrUA:8-Fjf(<&7&Kv*:kSrCKOg>|$G1y!.sid6cgxFs<DI/Mdk8$u5ijJ' );
define( 'LOGGED_IN_KEY',    'h4BQI1-CPk6]Pv?u;eLMsy{xN(-Ja1$FA2fAykxO:!cjiW3AZN-Bb;sI3% ER[Ix' );
define( 'NONCE_KEY',        '[q-W,K19;|%j$Jj$OJ%ls)8|f=w`u4!/s+:g^/7 w`)Jk`g{^<2?P[G)^`OxznKX' );
define( 'AUTH_SALT',        'Pd>VHu(~aVWz2m/V<MH6JScZ*z6U j>l^VxINwt=kyY>b8-!}M9qEau|=%F3o55M' );
define( 'SECURE_AUTH_SALT', '.N_AUt /MQ0?{=|OEz2Hm?9dM~~Bm{Q* <0#F%xUvS$o/:Pk$=a#DMI0H9U)-q10' );
define( 'LOGGED_IN_SALT',   ']RtOUU,uXd:H$qy9D05D%5-dm)kN?20^J!,>daCaC3CKgTt;lK_+Qwam8FjGY^>X' );
define( 'NONCE_SALT',       'gEuPd8gj&=^ fT0WA^7y-*rv1&wxu/+n9)3_ko3mD>tI.xknAZ.jg/0b/vL+z=:i' );

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
//define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';


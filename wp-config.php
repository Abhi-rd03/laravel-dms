<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'simha' );

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
define( 'AUTH_KEY',         '_&qIG1eQx?LlSuF3l*[{Q|[K4K7S}:`*L3|[+LECi+{p=eq :tgi~}S0:JNg<*SC' );
define( 'SECURE_AUTH_KEY',  'oxiuD7M*G59T@sI5Ydgt2OsY)W}7v s?_72yyD/G<d<^JZM=/LMUS7X&BjG`WVl+' );
define( 'LOGGED_IN_KEY',    '/DAK-?`=5l%b-wtk,VXsO (s?=(Y~ElP[hSxcfx5,R)m5e=g0kZF[J<UUKz4i9U[' );
define( 'NONCE_KEY',        '5%}(4~~*m %YLpDy-z/9Lc6pn) 0ynE7GWq3G#twX-VhKn:u~Rx|Q|cKv>z/UcS1' );
define( 'AUTH_SALT',        '/kVbRPfA1Sfi@*zo}1Dvq<idCCuAh-|?CokUcj|h6Hn?/fz2FMX+3d_SkyxrrgH2' );
define( 'SECURE_AUTH_SALT', 'c[ecTmEYNdD0#=Fb|B49sOs`Ey>]qo0ZrbCl)!K!2+aI=Yz,C+1 *|?zux.RzO^/' );
define( 'LOGGED_IN_SALT',   'IAD pcZ|=]YY@Gl)Bjp^FP-RiLt/H}prcQPF1%?DI0R(lfZB=dy9}T%yNCq]XN[M' );
define( 'NONCE_SALT',       'Fw:%)zE,m.I.*Vt ikd>g+raVzG-Sx& 8J=anofQ5j&2?0odn+5&]AZ{qj58<y_?' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

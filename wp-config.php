<?php
define( 'WP_CACHE', true );


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
define( 'DB_NAME', 'javanice' );

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
define( 'AUTH_KEY',         '^Og/sL!ag@a.EVIEXH(vFa[}gB/8DBV xF?)pq(L;t:I+>k.9ex^;!a($=l-38Ok' );
define( 'SECURE_AUTH_KEY',  'pL+bojHx@+z.=#+oynQYA*72!JRpDTyt5yj/Ny7yHr?R/FZ#lccqGqlteF#>1[j5' );
define( 'LOGGED_IN_KEY',    'a$`^pC+YtQYbxDpz-X d0(78HaGCUL8 J~4SwZ/&gH2l,VvU&).42+Olj4V(l`-y' );
define( 'NONCE_KEY',        '_.A},lqCc=t5=*I<f]JZj6c-I3H*vkY]XY:Asi`d]|`9aTB,2;GuSru016v9}O6=' );
define( 'AUTH_SALT',        'L6C[TE]- X2{~^5CZSxqTXx&2TMlNE0fLlxqVh5rLgF!%TAah46V*r[964cUdJR7' );
define( 'SECURE_AUTH_SALT', 'j6wrYI|G#o+{1Y]{GyxpS:J^mr3i~d|lWJZ>8ijzO|#ae_3o0saxe_@N_AgWTO-~' );
define( 'LOGGED_IN_SALT',   '7f@gKUSCDIsXE)t_`k[<ey==EBvY??m0#Z+T#]jB)HZp`0u]k7t3IM:jc|yN%/SE' );
define( 'NONCE_SALT',       'GZp.(;34mq[i*thiel!c$J.aE@D/t@3>yxHN0*4)qO`{Hl%GN>cNTx=YJCp?J.Tc' );

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

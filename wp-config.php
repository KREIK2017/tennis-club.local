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
define( 'DB_NAME', 'tennis_db' );

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
define( 'AUTH_KEY',         ' /p^)6HZZv}>Q+k)C5ARZOFi$xgD(9@V8`J$2R e,tz.Sg,svH*ZZI~Ed4uqZB*q' );
define( 'SECURE_AUTH_KEY',  'dcm[5Ax]Uap9_3h~,M<Jl26HS-HAi%k6K-WV*|0 ze7Tu%U@~!-iQ$.8|g<LU=Gw' );
define( 'LOGGED_IN_KEY',    'm$rsp`ECT#8-2``?Lqtem!y~=*AYF*=kM8a1&XF!Rc`&h&!9+e&PQ3$H]F<L1f*E' );
define( 'NONCE_KEY',        'uJaQI))9W))b6cj^+|IR^3@`?Yul~7u6/:RRZ]k[N$fr/ebcJoRU=Gwl#3lsiEU#' );
define( 'AUTH_SALT',        ')(N#bo`3x<&j>~?I)~&/puVj&tW3C_jL5Z/htGK_F~LtXk;:FU/]Ja}A9r^@Lc!)' );
define( 'SECURE_AUTH_SALT', 'z5Y8y*er )%@` jA?viMYsn{)PmhtZH&eW>q6MOmtW}w}BXK^q2SkB(0SCZt5R~{' );
define( 'LOGGED_IN_SALT',   '_!qg~[=WAM@`^*J!$HHU8i*WfI2F%|2res4g#.6*.u%V:kBc?RR`Xw=l?Dj.bOKa' );
define( 'NONCE_SALT',       'R[[(DD|2xM--~M:@kux0RzPK_|d75DpF`Mx~j -WrF%Rp**4gF%$y#:5=hv:8]-%' );

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
define( 'WP_ALLOW_REPAIR', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

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
define( 'DB_NAME', 'marketing' );

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
define( 'AUTH_KEY',         '$W,i>J>S)EU<Q,s7dAI &6~H1k& 2)M499AYW3BAU907jNwEj)&BnNJ+;D3!|vbf' );
define( 'SECURE_AUTH_KEY',  'd&;I&4O+e*}x,MEy`pk0FYK?3lk?`!^(ZTS#=FW!aUdLc^=<D5@@f7H0br{SLNFj' );
define( 'LOGGED_IN_KEY',    '0md68X8n%MV;]9]Vu[A_/T/7+c)</Qfze3qtI-x66nCMQtg3GqiMw(z2#cj!Pt[i' );
define( 'NONCE_KEY',        'fnF+F81EIdC hyYKia1(IB?PW.v.46C>Fc?bX^k1Typ(.Ja+b4A$*Kw?o,9jE%6.' );
define( 'AUTH_SALT',        '&M6$SD>C*;-M&iXtZ4&4H=,Bd|`%Hc`SaoO|T=--l<t=b$r>d,s$[B!>j=CQW(I7' );
define( 'SECURE_AUTH_SALT', '$L{uxCM%-W`MS<2=Fwp {5sBPq7DmI-guCSNM@dnA-FMW?^g3!r0#s4Pnc/Ata:u' );
define( 'LOGGED_IN_SALT',   '2*+yl`yPS[qAO;h.AR71)>E{?)KEt~.@hn~-aM<A]fGb%-z c#e)SDH#}ro&yMQ^' );
define( 'NONCE_SALT',       '24}<J{L[crz38^MmTDQ%u2V(wYYI61=izo_7y*vsT%]w4{KIn,VRt0X!r|`b `g7' );

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

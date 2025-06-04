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
define( 'DB_NAME', 'somira' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'sO[_TQ9`,k>WO)0}wF:u%bf9t(m~,YEl%M?u6A@/jL!cJV35?~)0O3|-G,s+C7&E' );
define( 'SECURE_AUTH_KEY',  'R,$s:mR#LRawFQpaTX~>DBR.JZ%Dp/ne_}P9NVl#zI~#.A?Nt:U.-reikCLv{~/W' );
define( 'LOGGED_IN_KEY',    '5|F|bBv]EZ.jKf$zVbjog!h9U0XITi!wUz1X1[PPEl(pozSf;I>XrWJ]}5tM.q0I' );
define( 'NONCE_KEY',        '&TcHk9b8d<gftJ@!|P7+9X5MSd1|5FE(QLbaOrAyg|(|J&R#C;vpSeDR~m~;7!*2' );
define( 'AUTH_SALT',        '&}[NQNH21]B7e]]4JYc92e@cZZ;T&H!D)HwbSN#P=o)&HPj#z+_DhN:C1p.]}TXZ' );
define( 'SECURE_AUTH_SALT', '(5zqX$s1l0lbwMm=Q( Fkw:6Kx:n=H:pkTRkQF9h7S14IdP2$<oQ&N&`$PWove51' );
define( 'LOGGED_IN_SALT',   'Zp Q48Q|uq| Mwzthy[2QxUz#z.;x}P>&s`_7R]tOQ=~i=5]^k)$z,BdD]^C=XOC' );
define( 'NONCE_SALT',       '}s3q_Rwqq<AUhGH%<SN|Hu,A3;h^W^}Mu-K{ELMT1b77s7#any%vf9x}j:Q<Q!XP' );

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


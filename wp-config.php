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
define( 'DB_NAME', 'nanditha' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'erpnext' );

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
define( 'AUTH_KEY',         '}CcJt0]8rqt!Xi{JK4G{BrtZ)man}>0$?l]H483IIvK QoZS H~gZ%+ .kpyipEh' );
define( 'SECURE_AUTH_KEY',  '1ol8Qqjy>er~18sD_ =|k3ogi{(gHW&^i8Y)$,wG#BXb$3!v2X(7ElJHp7Cv04Lw' );
define( 'LOGGED_IN_KEY',    '+$-qYegGTmAPuUG}}XX`g$>FQ^F-IlbT4OAL-le~^@{HvL!|iaxbS!ZG^kixu(*6' );
define( 'NONCE_KEY',        'j-h=G{5oTx1o,ozk*smVSiCMx$:L!!eAGe!3 x#iCCcdjE*k{NnnMP]1mbk7mTwU' );
define( 'AUTH_SALT',        '(5TkH*~e)8$E}4Fe,]IWTcop{wwh! G5$CGw|w.DqmviQuPJ=MHz+{&glksA1I!w' );
define( 'SECURE_AUTH_SALT', 'ncRWef2Q)glO*0x9[<wU}M?nVA)VYuz/+]Y{B4n.W%*llQi[ic(2h<vE$iJ15oCO' );
define( 'LOGGED_IN_SALT',   '._25-4AmAe~8k5`5<(|NU.$5xDBnsiQbcWq7/UguKzmZFud^X$?W7`MsG?/N[;sY' );
define( 'NONCE_SALT',       'g(23MKbDPT4;>*;Lec:Ik_PJ8M-z-;}otaFm0Z!1blMOzv.fvzUz/H}!{z.Jk,+!' );

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

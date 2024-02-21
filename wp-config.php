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
define( 'DB_NAME', 'i6084043_wp1' );

/** MySQL database username */
define( 'DB_USER', 'i6084043_wp1' );

/** MySQL database password */
define( 'DB_PASSWORD', '5xd2MMZwOw.hV5bXJx73' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

// define('WP_MEMORY_LIMIT', '512M');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'KnZ<-~kwLjb3CO|9h>Tjl9r/2ke$R7:{|Z AF=E*kKBr+~>$6dTz8r#J,k+]Xb-S');
define('SECURE_AUTH_KEY',  '!Le^l~,jeRVgsa8*^(=^q$-GbG%,zaAae$!xY2vmnD1|.-[/W^W~$%RL>;[RR*LH');
define('LOGGED_IN_KEY',    '[d_ml.h3o&4J*eBBv]T+A5L#(+|3^Wn75bpv^%/Y,<S22k9C; ZvbzUIugJtQ7J`');
define('NONCE_KEY',        '@Q)X6m)Gf6w)JiOZr/H<ty/4s+y+5]9yB^72w&T~sP|/xCgF+RSAy9&T#DsS~IAo');
define('AUTH_SALT',        '!YVV} gIAaj?P;ka24O1b |cM6=`IooqN}HZB>!YCz?-+yY^NkI#~xQX-?g$u^BZ');
define('SECURE_AUTH_SALT', 'Q0|5q@I 1C[R!Uf$8S6A$|gtYkB@_X`$O8+9V1Tid)t2ywSpT6Fl:o 9KtG1/+~!');
define('LOGGED_IN_SALT',   'v0rS`Af}Ad`^v+XDiw3$~hszA5Vg>u_-{=L}_Q,VX9sc=ESQ@17!P]k$^0X`R4y2');
define('NONCE_SALT',       ']KGDax1V!_.5h[j-3*AGqx|OMi-~/s|X5W nQ-c|sf%a[ILorKQS+-|&DWsaU7Ic');

/**
 * Other customizations.
 */
/* define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');
*/
/**
 * Turn off automatic updates since these are managed externally by Installatron.
 * If you remove this define() to re-enable WordPress's automatic background updating
 * then it's advised to disable auto-updating in Installatron.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );



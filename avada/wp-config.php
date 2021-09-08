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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'avada' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '12345678' );

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
define( 'AUTH_KEY',         'V7boe%i(9J!/W`/.`#=-@M=[.Q<SR4`v*Z>:}|)ko35(wfV}c;=D6V}v,ElB{vO+' );
define( 'SECURE_AUTH_KEY',  'A+^,~;cXXLdIkQrwP+lWpQ>ul#5[Id|^tcs^:-mqOWL/U8kk5L!.X!H4roOd{y1,' );
define( 'LOGGED_IN_KEY',    '9XK|T].g_pjrj,.04 []5!GXbP]Jg]INC@6X6yU0,zST%iH<h?:n6kxI B>7(byj' );
define( 'NONCE_KEY',        '+mMEnN=5VMN[=?<M9<|u`97BuZlnY%^i%`&C77;KP+mo+pFaLSOvRzAM9* `2AJ[' );
define( 'AUTH_SALT',        'WPRH(f#phWFlus)={O`wlz?/LdLnqA;;jUd,2$setD5Q9mvmVlt6_/-IsT+WFDc{' );
define( 'SECURE_AUTH_SALT', 'u:+617pTV3It9JOrQ,ih].MM-+QM67QpUy{P^E*CZP(Q6ZG];^o+Q.A#9TTYmLx6' );
define( 'LOGGED_IN_SALT',   '-[;S;#9g31U%A>iab:{b9d;&Y!Fc@oMxPld}R/KMT=^_&A-=v:-z8U<5L@!jkJA?' );
define( 'NONCE_SALT',       'BR@9<<]Iq/j!blr{JztNQSAM_BK#2yshVTk> ~u+#?;WL%~Jfb9rS&CjB`._,{ng' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'avada2020';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

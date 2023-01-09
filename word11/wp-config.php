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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'word11' );

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
define( 'AUTH_KEY',         '|VS?_}FNR`THt55[-8TE_wx DLY/3b>v9&!]1A_v|g.rvC4hJ- {YBjXW!_8$;F.' );
define( 'SECURE_AUTH_KEY',  'tKyfc^M%<8NV E[t@!CVo@eEh?n`_R8_i=B zPD.RAr(>g f}G4/N?~%Bls58-;&' );
define( 'LOGGED_IN_KEY',    'CShQH3oy)$nETkp:KEI3@5N[wuq^8;S.A}j+Wb$|@{~8OsglDy(y*D$7OUE-aw><' );
define( 'NONCE_KEY',        'uq5F`PXOF4}??;Gc^~vnw,2l+0ECM&,47T#QwiXSqs5(46W#,$W7+2ur>VI:t-w$' );
define( 'AUTH_SALT',        '[Bg<`l{i5O4Le$Y?#~Qrv=ynAR?Wo&jnN?8NJ;$%%{p:qE8@Dbl)N@uq[R }?T`9' );
define( 'SECURE_AUTH_SALT', '2;#{.4RmjClx7-@>HO@TZo9`&OM5oM1f+d1+bwP*&{4ZT8^l]vbIytS|gHUK?T%)' );
define( 'LOGGED_IN_SALT',   'Q(.7U#/83Uf+$#OFG^98;q$)YFAS@OEE!oQMgu=X3zOljl37bs<DzKcAez.KYl4U' );
define( 'NONCE_SALT',       'aJGupY{X0S&}vY9| #L`@mA&9@SJODmlW:W>o!#OksiC0R16&[h(U.*^CawI0a3[' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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

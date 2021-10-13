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
define( 'DB_NAME', 'jmcompany_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'VG9s*Qr(ipL<Q}]r)y~~E&7Q29?dbYl]QH}v7Fjqd^y&6.0;ht4ig5,fD$ !U5Vw' );
define( 'SECURE_AUTH_KEY',  '+bWr!*FkNJF_ 5:deuzik<1:.=`)^!WKt4q(N3*LJ>X3^Y%f8DrEFLcD|OOh79q?' );
define( 'LOGGED_IN_KEY',    'G1:!!)BRdr^5}{5U%W)MjNu!r=V XgBS>3l6a},=5`J<SHPyJ[T*67GDGi@</Rr&' );
define( 'NONCE_KEY',        '.P?m++p&g,BRqnz<KQ55S?ej#xZ{@|Y@-Z~/9WkD?J6`W<.=f_MA}%lfVyUg]aeJ' );
define( 'AUTH_SALT',        'Yd5NOY,!N+vF9W6f..E^OvnBl/tV-vg#nt@ux7po+r1FPF0u6hXCiREBq7/~2g-E' );
define( 'SECURE_AUTH_SALT', 'M5)GIaDZjIy)jvc>JBVH6Z5B[O[DC:;5kHE23>7ysFhM9X/gwRfcg_{?W>A] ^0s' );
define( 'LOGGED_IN_SALT',   '#mX*MSl@aNM#`+5Xmm8_^=z Wg;_g/rs<yU;s661U<*{I&+d*-RCDX)ASdM7KQ*_' );
define( 'NONCE_SALT',       '(Y@DjastcN@2fJuxy :DS$-{-c>A1@J@05m~+}[_[;sAYY+4d6df? a(TXRcS*lm' );

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

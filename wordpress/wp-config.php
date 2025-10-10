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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'FACEScapstone2025' );

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
define( 'AUTH_KEY',         'y~~<~r4Ii|GZtm;m 26^rn&)r1~8J]<x;Wb(]qwO@Z:}s*k]+<Q&M?yx7AuhWe/l' );
define( 'SECURE_AUTH_KEY',  '=/b(2hYWr(%SWUV4 [r.<@Ct}j@!;OWg.3P(<G*5y6-^SRrmpp0**Lgrs{L{ys*i' );
define( 'LOGGED_IN_KEY',    '$H^~%Y:(EWP6!!#np]m+^&x@7x,[gH~QxsBWZVl?Fjjzd`FS+uc{fLv@*hnxj/LM' );
define( 'NONCE_KEY',        '.b=C0Fnr(4|apm!`f:p3d5.T^W6]:opI0iL<e!pirqCJv&Ya!g!vLbr7=5,}ebC+' );
define( 'AUTH_SALT',        'N^?X^p3&vn7vJ9r*DjF}K`[z]lWr@T^[j_r`+V8Rs%<.Zr>iss_wz?F<&CK 8NNe' );
define( 'SECURE_AUTH_SALT', 'ZQZ^w+>8MD{_Ry2>VC2xIku@m.LO]t?`rRJ3O<[8)cFH1z]x).w37g^6U5Q03XG|' );
define( 'LOGGED_IN_SALT',   'XZI#.v5@}5A @E8nXpG^?S9bOW4rOZB.jA3%aGygp}w)l]uh_z Z&-0!~$qgi*g>' );
define( 'NONCE_SALT',       'h~ri4~BQGpl5f*OJ4RZ@?;|[Ja2t]eyQCDyz>a_4<&P~g[]T)($0G-/H)uzfuh64' );

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

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
define( 'DB_NAME', 'socialindia_db' );

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
define( 'AUTH_KEY',         'Tmfbb5o6oQuiK?/+me{.88]SV$P5)K&d7hE^5KMnX@Ib8+8|LJLQ7dEEHPNn/eq$' );
define( 'SECURE_AUTH_KEY',  'v@Ox8Ea:kayo`kN7~-)xpC)`,9?w#n%e^X/J^Ix!y9Dvy{}aw3v+dtx03!Z, 2$n' );
define( 'LOGGED_IN_KEY',    '$&q[WP9RvleL3v{)iPoJ!AF-VW4Gl;W=y]M5}stvTkRMBl):0U^kR)V9T_a3K7hb' );
define( 'NONCE_KEY',        '1=t0/d0eFOdt/>8H+JKcd/id7/poVQ0pGC.xcm![m>6YZCSsw2iX<vk^l47N#rcU' );
define( 'AUTH_SALT',        'Tr4H#vWvpjnCktK &S#e:)M_`s`70$0JG-WT.M zN$Z_VJicbfyrxN!u-Lr}F(&o' );
define( 'SECURE_AUTH_SALT', ':{:z(U-u|CR:^Wi0JA#+`9x(QbU_tiMO]-(Eu^FH3enPmjhG!}ByN=H[B<}$?Ip3' );
define( 'LOGGED_IN_SALT',   'SO/oi($f5WV>MMP@[hMrpo7cbfc+T`~ui(^sgm2~*iB4~rC|&T9[qbEN0T?IT*r_' );
define( 'NONCE_SALT',       '@3@l?NR#bsI5+Rkq1_1-n~-;=;nT](u?W&spj(J@w(J0cpH T?^&1LeM|ekB`3(3' );

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

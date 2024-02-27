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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'remoto' );

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
define( 'AUTH_KEY',         'G1P!RV2RQEe6 )=GL*[_KLu6fSoNinTsOT7$;QPj/Tl93>JXW PHw=L*;15}-Njj' );
define( 'SECURE_AUTH_KEY',  '?lV@lpEz^F&I-}?JHTlN +7mSp~LDjo5[JS@qw%[IWkFz9,Q Dvm~n+~bZn<m&jk' );
define( 'LOGGED_IN_KEY',    '|<J|c6>kEl0ycFYE,v8zh9A:?.E~-n[b49lD7aLEX(J`n{n~N]04]:$/o.iomZJD' );
define( 'NONCE_KEY',        '1KoDG5b?zmxcIq@{.m;@K0Yj7:^0kix%U=yW];k&p@dw)<dReKipA!`2m*:]]Z%>' );
define( 'AUTH_SALT',        '?:eJCZI5$^23p/kI?[|>tT2uEl[0;Zro]2>tjc]O+a{O0!|Ulr;aTsd4tTQE/JHx' );
define( 'SECURE_AUTH_SALT', 'd?gZjhb?($3,&-K5XGn3e^od2R/I7wg?B}{5&NSi5&wLfPS;6Zuw9f@(eQ0dwHU~' );
define( 'LOGGED_IN_SALT',   'c^vbkJT6.ojuKvwj>(tKU0zIOyxeviq79jF2nk0wF;8iW;Fb@Y)CF=S,fy[CQCOH' );
define( 'NONCE_SALT',       '|rhz,M)r>|P#DL9Q|BOif!#nc/^f^*O.,GE8nnLfdG|})^RBrj|*G#1T8RgD:XA!' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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

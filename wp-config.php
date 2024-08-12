<?php
define( 'WP_CACHE', true );
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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pizzawebsite' );

/** Database username */
define( 'DB_USER', 'pma' );

/** Database password */
define( 'DB_PASSWORD', 'your_password' );

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
define( 'AUTH_KEY',         '_k9zs0oi1IX28D/]pHNvn~ P;OHsi3k/K;ZYH3w!l<Pk;%8%)3>%@N)><KvV0y,[' );
define( 'SECURE_AUTH_KEY',  '3HQ?yA46`]kw3YkO>D*dR*O`.%Ek~]*pAL?w*ZK:;:EkQ=U][(,@a1Gwj| I2Gd(' );
define( 'LOGGED_IN_KEY',    '>v$!h6^d6ZSuz>2%aD~:M_vx~W:S#1L-Tj9iYKv6a4UO4I%Z,XG^7%/8Fu_C3PA[' );
define( 'NONCE_KEY',        'e*l`y!S&p7f>wF:=]-J%Y[!@M4g2q-h<yk.9c_^9);cO9+1@*KfV{Y>WN4&|m?m=' );
define( 'AUTH_SALT',        'ztr#B<-=1-ZR{7t2=`8f39pq (#hhg?hq:oeUJ4fD)!JGw)(YJr54l|rEA3!!Arp' );
define( 'SECURE_AUTH_SALT', 'SGZ&u=:TXV#4O6JW:TFtY{%f0xLKu2<5r]pOrGH3-2K{|aM[}`3z,%p`Ki0U%T^<' );
define( 'LOGGED_IN_SALT',   ':v@wwb&*aAovk#ARr [w9H_:-m5[5&/:C&PsAw@XhM6N|pq92F!t^2N4le t]EE@' );
define( 'NONCE_SALT',       '$?fqXPPco<1XAfXa&v|d^ypDxu`s.9A:2,E+5`lo=X]/L.Y_-ofJo^? ([>LZ%!0' );

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

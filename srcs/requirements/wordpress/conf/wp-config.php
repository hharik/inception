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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'hharik' );

/** Database password */
define( 'DB_PASSWORD', 'hharik@pass' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '0o[7UBf6te;=^fnaeP-DPMzB(`1FL+5-gI5?Zzi2;bo-N]#YD|B6mwaP. A0%e_%');
define('SECURE_AUTH_KEY',  'DE/7LkO{r775<a,i@mx?%|7t-R{K%_HDN~Mb2}Wo|J^kXz6WxNMvG{:*axrAle~O');
define('LOGGED_IN_KEY',    'Z+J$&6l)1q)+jsXzJG0wAFwZiRP~?GYg3_*s|#:|<7F!u`g[a6-v@6%-;+5-D$3y');
define('NONCE_KEY',        '+zL/p2I<~5@t5UAn[}U;c+BS`d+fUL]|&f aW>#:-3Kr^*L=/?y#QOGn&z%n%1dp');
define('AUTH_SALT',        'Pl>EKb+}5(jG7-+i<nBo2}6^$wu+#>OVUaeR BJkB^{b?o}1LY4014WZQKLUXAH;');
define('SECURE_AUTH_SALT', 'l}9/Q|vt+0g>|L$Jd3{a`$,3&;d/,w^q}e4(cX$s+z=59hm;9|ov|-5Iv 6:|Pfw');
define('LOGGED_IN_SALT',   '9K6/w0ix*NBR {^PN/A}<+J|CQWUKC0DHV`XRM|@8~B^-,$zbx3v{|mav|kP[z2|');
define('NONCE_SALT',       'jD/z{~9.R}ZBx_7;96Av><E&&TFj(A2&%hmwF)lsQIfiakN^ci!+zZzD#PM>M-+-');
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
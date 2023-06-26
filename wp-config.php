<?php
# BEGIN WP Cache by 10Web
define( 'WP_CACHE', true );
define( 'TWO_PLUGIN_DIR_CACHE', '/home/n1734387/public_html/theultimatebox.id/wp-content/plugins/tenweb-speed-optimizer/' );
# END WP Cache by 10Web
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings

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
define( 'DB_NAME', 'n1734387_motogp' );

/** Database username */
define( 'DB_USER', 'n1734387_motogp' );

/** Database password */
define( 'DB_PASSWORD', '&x45jcMNVf-W' );

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
define( 'AUTH_KEY',         'qNw7@kpU/kw`{(*# /s`X$ @VB>nX)l60nK{4*~E)jK7i6dS-%cLSH<-LFvV$VDb' );
define( 'SECURE_AUTH_KEY',  '7&j+w+q`+TEFCS9MveA~TX5Q:7.7!9eKP)n{(^4=VZ_klxm,1=$?C:b.Aeq8[]HF' );
define( 'LOGGED_IN_KEY',    'm^BBdr$G=l2lqt ?Km)|x]|zC;Zs~-x81i9&g3 (&?#sJ5hS0&h82-``]`4hrT}m' );
define( 'NONCE_KEY',        '7{z#[ge#US`AE1Q~ n6F&&Oc@;}47d>$gAznxXL,vQ(9bK9>b&p)@xp2$u$&cBr ' );
define( 'AUTH_SALT',        'ZWe=/T&_Agl&|_q J])sgG`XnLxU;yE_eK#la8J^lF5dKO6/KW7hm24a*O2?wL5Y' );
define( 'SECURE_AUTH_SALT', 'l|)0`jg2>Z|+fm*K/N7S.KH%Peg7/5Y]M]VHXfJ9msEsgP23`H]> PCG?jgt TCP' );
define( 'LOGGED_IN_SALT',   ' 9gKj%ON-}LtM?-wnYz.I5X,*3KcVzvl)f.1;<es m6DD8J~aEEa/^:gMHU_-nh*' );
define( 'NONCE_SALT',       '>Udw@A4X2taE*~mv;1[+BM(D2a|:i{,`DeJbjFdL%Kfdz6iR3b+(aJxW!NO=VM-z' );

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

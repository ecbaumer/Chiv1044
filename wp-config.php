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
define('DB_NAME', 'Chiv4');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'dbsx]IjO3c|IV&Q]83N~NS[Z_AjoBW_TN;,19E)t{.T=RW>zTY/kD/Wr-KLcCy>h');
define('SECURE_AUTH_KEY',  '*[;FwXwgGT;2[?~ySAm*nC7;)0CKHk~]a|AJ5$;;g[w4p|m3VZ1zkw_VtX2Ni)wd');
define('LOGGED_IN_KEY',    'fIQo&/JU.KUedi8V)j1!R|9t/CSA>|smJ^P8;7^2y#E78>E09K_N%R<?%c-MU*@|');
define('NONCE_KEY',        'KiOo#M4+ I]PH#$;MXHLp@e}kn{?Z*q!By/I)]CYi=^WlL54Ql>ztfszq3f5q3:A');
define('AUTH_SALT',        'orS[<gN`E1uiQCvaTIwUR7XHcHe.d|,H9y*ca#CS48>hb])a!0_g>3l@gntw.=8I');
define('SECURE_AUTH_SALT', '8%1jX]k2F?cC|hMo`_-uiwCgWw5lMAYg[1dD[-.bB) jc96JkO>O4TSY1pc{5(=Q');
define('LOGGED_IN_SALT',   'a7Vm)_-Txa!@ZEOZWaOV|m_<IJYgY(28h>6Vx?uG_*S@yz^~[wW)+AFb1@7z(o;3');
define('NONCE_SALT',       'aZdboAkSn_%:NodZ2oer_1un8*]8H- /maB5bxJt*_j&|G&%ht/=g.>exfPd-a]a');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

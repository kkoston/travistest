<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Us@today!');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '/`_$i5L20P}O.R:q^OFlr+|?zlJR*7VB+<8Ggw%+PsOWxkbwk(@796-:g)2-4,q1');
define('SECURE_AUTH_KEY',  's5-*~-Mw8)Hv[*dV=X#_{RK}$1OqA;oY>?7j)J%}W>pxW~]4XhpJSC|8PF/`nEM^');
define('LOGGED_IN_KEY',    '~*^S8A$CkN0vfi_*6)a!=8N[j|l:DL-PsbE~+wIbp0<rTc9%;F] s3;HU-2}Ax/h');
define('NONCE_KEY',        't(,5!Q^~8t|!M%xa+tK%w/ <-2B9/e>zr?.WMKaQLyBPd@~I|s!h3bXCA5Hl}pN|');
define('AUTH_SALT',        '3u/a$0[4`<BV|8Vv|su[1pVSCp:>L:..cCcY9SMdV>_+!YFi]3{X-)(>snj9@:p3');
define('SECURE_AUTH_SALT', 'gEPcjED_e~mI5X6:/W|nFstCv{YH`;o(J`^+ek3@O-)gAbNHvMgfo#-5M,L7y,y]');
define('LOGGED_IN_SALT',   'eB<(7CO|@ATNX N.X+`PpKBC-oD(G6G7isqKRHVRM7P4f8PZ u;[_[Fkd;t2XWFQ');
define('NONCE_SALT',       'RiF*L+L,+g4g|2L!Jh=N5celNgek/H_3WQJs}1;j|Zx~SQ1KKq]0Yy/7RZ!Kn9dB');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );
define( 'WP_DEBUG', true );

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', true);
#define('DOMAIN_CURRENT_SITE', 'lrnc-qa.usatodaysports.com');
#define('PATH_CURRENT_SITE', '/');
#define('SITE_ID_CURRENT_SITE', 1);
#define('BLOG_ID_CURRENT_SITE', 1);

define( 'JETPACK_DEV_DEBUG', true );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

error_reporting( E_ERROR | E_WARNING | E_PARSE & ~E_DEPRECATED & ~E_STRICT );

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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'adonovan');

/** MySQL database password */
define('DB_PASSWORD', 'Pa$$w0rd!');

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
define('AUTH_KEY',         '-]cxKl;gaIlU={o*InXPOZdz/5,[h7YZFz{2ZA((HrY`=rd#vjamJ1YsZ~PN-2[Y');
define('SECURE_AUTH_KEY',  '5g?=z+pZQZAT]82S-;Ls),K(^eDw(%&{%6TdE`l8V16^:LL!D+{~CT%UdUeo}nT-');
define('LOGGED_IN_KEY',    'oLuwCTcw_2W%OMC`9~cA!=Y60;a~S~np:}},MN79P!]c(xFAcM71Y@-*QPaiSV#i');
define('NONCE_KEY',        'Y>Fqm0jR*&H&@-t7l+[yz>YYSnO6R$X&P*HbzU-Ge2C+O/ti*v3,bLYI`$y=L;T*');
define('AUTH_SALT',        '#.gXfhJPV?c.CUfnM5nJ>A<$Alsmu12UvHldviHL/c/)9nan6$lN(:^q/cBuActE');
define('SECURE_AUTH_SALT', 'R|)Uxt_Q=0 .0=o5r+tV|1<$)Y)XkA%Zw5es&J(4q3]Eelu~1_V<U].Q^WVCiEUM');
define('LOGGED_IN_SALT',   '`8G(Zb31MR[29hzS?}yKK3ODY}B!y383Rf/cs-m*^a&}?Y _ELs|z3<meP;zD{vm');
define('NONCE_SALT',       'fOOQxw>MZm<%iE4XN0?`jPdw<43E{1^_JZ|SH.jwGQ5n4sN#J9%RRtB=E/i?@{tI');

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

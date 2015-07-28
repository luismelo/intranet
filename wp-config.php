<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'intranet_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');
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
define('AUTH_KEY',         ' ~ ]M+`DEqSL1CJ/@>K`;khI.5L+KsT_9BU|X8.UdYvI+h{bq&MX-Q3-<[.wK3Ux');
define('SECURE_AUTH_KEY',  '#kv^ b^h$8TEtY2T+Y~5.%vdY(/d6{ETg7Vo!U/<PWs`^1sI)hDSy!L||nkL*TLO');
define('LOGGED_IN_KEY',    'Fp|~Eo&[q:c+81yM]|Xo7g P2bBSl~/@zi/-]QTW~q{V|y|zeO)~tSAAU:1~D_xq');
define('NONCE_KEY',        'qmF_nTBNQMUG-[h8V`xOMB$,G;;i<h@}Q~AwQQIQc:2X_&-n kG,4L.E]]k]Ip-*');
define('AUTH_SALT',        '*qc(zY`4XDWZVrMH|R.c-vwSRFefdb6X>}1U+yG$uE@qp-s9xFx}TO#d7]Vb/q+o');
define('SECURE_AUTH_SALT', 'Dx)+U^+3y5;:6`Lo2$+5Gf|6PV.(_S}I*LyJT }zHGFF[=*q|^e#LH<9WsPW_8Zd');
define('LOGGED_IN_SALT',   'Xud55KN6Z|C49KIl*F4(p[I|r+>n&lMSq-emAnv0+us9Hh?yAZ<9mTbhOI >df@t');
define('NONCE_SALT',       'D6R@J2oQ,e]sUM+>2>O$?]EWf=#XFx6|NGS{D-{ac~l+>dCJn$`}M-5Apz s88l[');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

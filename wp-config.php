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
define('DB_NAME', 'blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'To&~NUmV!0&b^51tYpq^QPCB|_&h_zyCduq~L&y(VgeO P!Z;@,pm7+C:ef<wml6');
define('SECURE_AUTH_KEY',  'U@9q^ZDB54h<v!2%Z7:X4_.MYN493(P1E178;Ql^:#~t;.&W3SdzX[MFzs*O/E_h');
define('LOGGED_IN_KEY',    '+5?se;;ae[ 3&wzLP7`J92d*rq*3^n[u+=u_n/U@vmm;/|#&l]WYyoL0do^l[h*Z');
define('NONCE_KEY',        '.LzzG4}*:=HwL g(58iZREE=|X1uLD=}F#nMEcWsny_N}Jkn;O]p<Gj[i]|EJjOw');
define('AUTH_SALT',        'x)8+0I9;#dAK:8JlN*TB/owQgcYBraW4S6/m<(e+XQpc66s^={g7p3&nikcDGrmr');
define('SECURE_AUTH_SALT', '^9`Tb36lybYg$?hx3t,_gF~7p!2%GyROCT-X;p_?c~i=>?R+/P3eFeJ&8y1eQBMI');
define('LOGGED_IN_SALT',   'Ik<RbNT=#*+u`+V/#iSJPGa_dzUjd15x>&vB)x,)`7kK^YN~wmf$t2@x^aP6$I_h');
define('NONCE_SALT',       '|Ec3=3j7JP0+pz#~f3>yTE#qM,Jqo5IRdI=`>Z:k0 R@L9~QL. =d!^f({(V58vC');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

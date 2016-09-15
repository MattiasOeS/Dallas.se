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
define('DB_NAME', 'wp_dallas_local');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'KUE5fBvP9IMn J;R)|oq3+SvRA6HW9/JWorLq[lc:h-gEl^tUj-E[MZ%!L=`|O=&');
define('SECURE_AUTH_KEY',  '4HQ*|Wg?X{a1DdmsW|1|bqX>m.;,c|p?Nf/8XnqNOwj^B2L-xgsm?H}> VC|/239');
define('LOGGED_IN_KEY',    'A0=Sd{~,o`awnGhJ{(,B25p3]a+u(+}x5@6|0&8q]o2Z2}lJ.j>xDwYo^@g<pb+q');
define('NONCE_KEY',        '`-U{rA+&{B5xw-I4#t]8Z]s_fc2+)<VmCJF8qvGV3MBD}iridbZ?Dy4[`bMRg3DD');
define('AUTH_SALT',        'Y-DvV.V/SAH +~_}ol1}QH=Qr+$8k$D[0f>^b{Vh=WG#<=X<XA,K,]MtQ?#%Vb-g');
define('SECURE_AUTH_SALT', '43u}Z[<CJc>5oY*G/#jdHiJzg4tovwLuM+V2hZh&gbPe3UY#Fl7~GbS!RHtdL-OY');
define('LOGGED_IN_SALT',   'q;4I<;THDG@#0|k)#*$6`BNu@t82{wqAObSBTGN!^q]oF>8mrHsf$Lt+^jexZm-$');
define('NONCE_SALT',       ':kgO{v|CyL%C:T%my[LXd2!gJsi4:N9+%r1oD-u?#Et)bS6@MubX+3)*%%0cKR`y');

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

/* disable file editor */
define( 'DISALLOW_FILE_EDIT', true );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

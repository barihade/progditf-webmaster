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
define('DB_NAME', 'progditf');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Gundamexia00');

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
define('AUTH_KEY',         '%+<a!G80!1Xv54o0<Bhq_ZD$k|Ll#@{dg@AwXVewbBC,uzOx`1fj-wo_Jxc}*t0B');
define('SECURE_AUTH_KEY',  'hy3,-,c(_;Dc6T$lkgIh=.M1-!f=(cSu4XSIlo&?J2js9}xNbF3k<s2@co;8H1Zo');
define('LOGGED_IN_KEY',    'M9cR9q3t*C!a5Og<Nr6wf(V?]=c#JtlvHXiEOK?Qj1%`V]f++uaZtP@O}#uS ]u@');
define('NONCE_KEY',        'T`~JkkfowA|Lrl*1;q%u&xCA#tGsT1J9(H*<vf}fw3>x/5^q6|XFYavMI7bO?vDg');
define('AUTH_SALT',        'B}b33ldE=s(NQM% WC,=)|7JtAfG1h^RrG9dz*yx_W>g7:4rt/$K1KJ#WCR#rj!-');
define('SECURE_AUTH_SALT', '-OKlG%qB//O_xg=GiJ#gdG6iTq+MP4$4)t9$ t.qs&-}z%e7UZGi}Dl.P/6J|/4U');
define('LOGGED_IN_SALT',   '&ir=WnwrQ3R}1bNxik+.Jh0$QRl^Z-r{o;TFk 8cuL*HPAUx E,-fio!2)&f$q,C');
define('NONCE_SALT',       'PDF3&M}4_}RAYq1- d]W`X#8njedQA!it~k%HH`Dv6/eQj)$z!lNIIkN?t%IscAj');

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


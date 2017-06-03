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
define('DB_NAME', 'bdswp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'Ima!pXo%){o={}^]>dFgPnU{< ixFPO,1FJKMf;c`W/w$e_m^7TPPQR~H%E&T!dp');
define('SECURE_AUTH_KEY',  'h8iNyC@o0pm]?yo<fHwPuOBu{BQtf}HJbU5Fy^R9(b;&l&G*RJNdU}>chQvjDe.l');
define('LOGGED_IN_KEY',    '2~%Q.9(SIWUK6>bb6]D0f33&=Xu7.2A.s3|>wWi|r)$se 0t}6rr$hcFUq]X[DB*');
define('NONCE_KEY',        '=zQC6KOxNp5 <N$VM}4n A%8tw]g~7V0Qyhc $bm$YLt>yE&*OQ]bv .{9AR`LpY');
define('AUTH_SALT',        'Ikn1tV51wi+An84hC=BK,k-?k)J; o6}tZo,0Cd8Du`_Xf7@mz[t$1c$<}pN}bi>');
define('SECURE_AUTH_SALT', ']~$Pd]NT,[pI)6QRIw&%G_SfQx-:;nXbNPF!05.p{QQYJ<c$K]?+]bAjyw1}^83q');
define('LOGGED_IN_SALT',   'vducsS=h%z0wI{3K3(>yh^H1jZ(;los%TD=327RsrlHZ#G?SJFyJ5lG$ht0aM51$');
define('NONCE_SALT',       'ppN/Nj09I[_qV7]yNBQI2y^5hJ.1O{3dW.|hQ6^y.Y+w u)]`mc*!Lf[;Q{Q;6&x');

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

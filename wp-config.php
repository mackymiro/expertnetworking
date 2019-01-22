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
define('DB_NAME', 'expert');

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
define('AUTH_KEY',         '#!HM0Gw5~V&S$VVr(%n4H``g<=0g|*w7?fu<R HsZ:x$FGommF,<e9oobYJmk!Zs');
define('SECURE_AUTH_KEY',  ')i^DpE-N9[VH*0f(yF> sZ%d;vjf/r6hshH~67B@~6XGw`s?r/Bji{cD$D[X4.5g');
define('LOGGED_IN_KEY',    'LgUCy)W.(9+_(Sm[;0R*9/J^ZIrj&mp<0PzqX=5c&L!7z$:{9VOa=4FOA&5kWCB9');
define('NONCE_KEY',        '0{&$AfBE*>o&r6WtUd~LiKN.%0bNM5/-tOD-P;=/Gpg]T)Q@3^#?Q=?H0O94ljwE');
define('AUTH_SALT',        '1B=L&^n5,hkB8)@{Wf<2oVW?1)Q~[~g%~_Dyu;k30<.&!TCGkVQ6*~OwlZw<)4tI');
define('SECURE_AUTH_SALT', 'Ir1k+-RApMt;pV4F)6q*=E:iF=x9Z/pOVBPzzL}K8=Y_e<CzfG{oRk9~))X7 XUw');
define('LOGGED_IN_SALT',   'xy#wO|M$A,6#4Gy143E^XiaZ1.Fl#DZD!f(|F}z@JI s@Vc=AN5%p?t}I[~qBl0:');
define('NONCE_SALT',       'pQR 8pw9w@o@>Rm.?fmh/e?#et(!$9Yvb=zyfNr(}*?Q=Z.u `C$n,cyXas( ;oz');

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

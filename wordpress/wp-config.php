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
define('DB_NAME', 'test_db');

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
define('AUTH_KEY',         'fXBjJ)dnt-%+9SYM:Zt`Sjar$!T0*4UY_iaBpAv@ccxsV]+$i_uj QHQD{}K&Vxn');
define('SECURE_AUTH_KEY',  'u|pPAcES[UOv?0V]zJ).I][{GhCcM)o$;pLPqo(?2^b{/@@&Pgx_TQil=XUe(B*f');
define('LOGGED_IN_KEY',    '-;*^>% i9+k)]=:M_CzP.>V<K4.`;5cBwBP%|7KzXJ`,OSO=,_<jp9tFzTh|*z|{');
define('NONCE_KEY',        '}EaX*`B0dUo^>hfH|A(i4j9V||F]XML?6Tt{pAMvUGg~i]$d~AIpl#+Lk/>e>vA?');
define('AUTH_SALT',        'x_,8U %i0li3i3>=GQ^f2yh] m?gIFNm(<APvlJS+FG6dQTZ*!]T7~.iF!-eC6nP');
define('SECURE_AUTH_SALT', '!GgtSO*R0&P[c[FWS=X,D7+@u)kq^/6e$C9C6.IxBQ3JF@9Q=yrvj0#4NlmSIiij');
define('LOGGED_IN_SALT',   ')fv=V:#<1775^j$86Au[2[iN)ewzzQ]zN0z^HNFnd&7)i;%-gHrtrwY0g7!P;pD>');
define('NONCE_SALT',       't>0@]4C^c~N1n6wg =vd,V5-/6XF<T!me.8Ny+-g$qPa0ng8r!lP}Q=.K1)}7/wS');

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

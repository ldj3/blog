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
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'g[?-o]fOBHVRI]YL?L0i@VB`y~uc.v>+AXJV+X(g(F_zj[7;0mO/~+~Xs+CgfYym');
define('SECURE_AUTH_KEY',  '6^cR.tDCaIkUUzH4{AcYM?oi|=hvD|[p_DEX*LoV{h]C8Dl#dT13KZ_+,M//>;_a');
define('LOGGED_IN_KEY',    '1n:7I.6[F^/N|-[VNhDh=qu}2@?g>^>P,C-sz#c^.nKxt`+K=3p$Z_n d.*f0Pct');
define('NONCE_KEY',        'l&gz_LHUP/q{%b(RcYb81^oA!p|T%{r6{+{VQS3mqvAgKbU)itn)TOl!Jn:Y&Bpp');
define('AUTH_SALT',        'l*P^<;9qlf%~o: !2Os`XhI>)NWEC1GBceB?n^sAA0*FQQAo/s/w*f1daKdM5M-E');
define('SECURE_AUTH_SALT', 'aiHL#)P}o=~D=@Lv[h+0VMoHcN`sE@)Z=jSXf`:v]iy(;_z@QTg^e4#T]`mqb(Zq');
define('LOGGED_IN_SALT',   ';m<uOQcC7+n9j&s1r%e+Nyak-/C;M9}m6uRFqypm5?RNVDm!r47V<eO;g_X5fTO:');
define('NONCE_SALT',       'a<H +(_ |i6fp7m_HhEl(vd=d]f$^_6zt3T<O*}%pO<f*F7TcoZ`lix3pN[kLV7=');

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

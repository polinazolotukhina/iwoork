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
define('DB_NAME', 'finaliwoork');

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
define('AUTH_KEY',         'q:%rtIQpmKm#zZB;`hL4AsA%j8)s%9P+1y/Y#w$RFX)dPJ9|Y|9dleP]|+8PZr6=');
define('SECURE_AUTH_KEY',  '#H;6DZ2d>+N2Co<q?Cj#8p(m0x+{2(o;h*i0fPNCo6-.3n/(g]8n~+&h[wg7cOac');
define('LOGGED_IN_KEY',    'h[kS`A5T^/=/#~.&#1>xhwm)XT[:Q:I[?SsQrkis%|#pr~|0>FR!6DM](7X[Ow^p');
define('NONCE_KEY',        'dj?%S}MDN5edNcW-bPK;=ZyI1(dZs2z>J}c8BFydq_GczkR$MBp8<2$g[72~=CG,');
define('AUTH_SALT',        'h>Li27+vY<S]?N5B@M)^6/jB0[C-_W#NV{G,99/wCY3MS^zR[.k1p]tW>zJl(sbz');
define('SECURE_AUTH_SALT', '2`U?!|Vkc<HX~@Z7&09>yI8W,mp}|6^@[#+p9[a[]Zhnw`c>Y$r!)hF29ir|r`;1');
define('LOGGED_IN_SALT',   '}XY4kU]dN`O==Nq/U2#1c#K#fWzVCRXJP&Sg{op Rw#8]9srJ`&g~qHsx?z>Fogu');
define('NONCE_SALT',       'L5IM{n,^E8$04!#l/QRISS(K12}N}6hX*P96c8a=#h/Bm&D}]&^Q~VZtR1j}w0Lw');

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

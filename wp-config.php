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
define('DB_NAME', 'wpdb');

/** MySQL database username */
define('DB_USER', 'ehud');

/** MySQL database password */
define('DB_PASSWORD', 'shifra12');

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
define('AUTH_KEY',         'i_M(-X]6?Jp2IgM_f)+9A)/}}hB(vr(-MfOAHRn-wo]~!*JX:@KtQ&NpZJUuw0JX');
define('SECURE_AUTH_KEY',  '))DI*tr*N?orBuL)Cna?#c*U@(g.u~H:`|F+7-6Mg)9Q:eX=>NvHbB)RdfPS[TkD');
define('LOGGED_IN_KEY',    '5;FP-T8Ty(9||:pMNb9PoR~gb|N3kro}ty.[A!;0jJ`@2rJoL}>C+A,di7`a1g|d');
define('NONCE_KEY',        'YGeC-Mdh 2a{sgaynd,P&Z,hsuSn|h|NtSmObwD7DB:{?kT|.miM66>?dxM^{M#K');
define('AUTH_SALT',        '/c#~:ciH^:ZA-pwp+!G0q,h=DlzlbhAec?fy=<~GK3sGbmJ|8F-&H[Qv*SG.g=|H');
define('SECURE_AUTH_SALT', 'y+l!+~n9-dcx0;8RT-z%i|~-0]Zd>.V^-/3`{#y>k`+J?Sxj4Vi-Jx#s#Bqm;AY(');
define('LOGGED_IN_SALT',   'Qy%fg=i2vXIgv9Ubrbf^bg~&V<`_aVGri-TEC!|^-P&5VED@bNj}h:Y70|qPBj.H');
define('NONCE_SALT',       '/)S<+If Spe.kS)|U3O^&1L+.+t~sCK(Z,HRN;J00;6 D:I;nOx:6`9R`d{D74jy');

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
 * Set custom paths
 *
 * These are required because wordpress is installed in a subdirectory.
 */
define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/wpfiles');
define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME'] . '');
define('WP_CONTENT_DIR', __dir__ . '/content');
define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/content');


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

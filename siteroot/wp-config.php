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
define('DB_NAME', 'ebook_site_wordpress');

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
define('AUTH_KEY',         'zsY/SLm2Ada(7N%4+#hfveJ+{3y)ZJkzUTN~;d&?S{BNZRjIQnSxAuV ~1ZXI_V?');
define('SECURE_AUTH_KEY',  '|TD<,^]cQNW[5Tm-Oy[ANq7*8IVSPJo.}  M2{pB]r9xVvd],duW+SK)H1u5R<px');
define('LOGGED_IN_KEY',    'xV-19*Kn_s>bNk|+n=,SOI0wciejV|54(jr++h`,r>zmyZdr3ZHcD<Q.~b8vxC+/');
define('NONCE_KEY',        'Mv!cH+ogbE4!(+<CjUG-3,$wJfSC]lW`?VLy+P&+~<.$z|- hZ|g{7{+f4vWXn3F');
define('AUTH_SALT',        '7^I:)bA3/e]i>W&OkZ-ZEx``C0Lq3 *0Yei |^qa1kK)<*4+q9u-32dvc}+94+g-');
define('SECURE_AUTH_SALT', ',WfPqo*LW1>r#K+[.Aj~^@,v>T.;2,I9HInYo-mQdojb|7+ a|!;,kB+g9=-qn2{');
define('LOGGED_IN_SALT',   'G`YR`1{< C|]swq<?J{8K{1wK}>XV^ GEY8:_#1cKKOz#ScR;m}_A8l>1?`0n{/[');
define('NONCE_SALT',       'L9M>Xf8|C{#(-ZBII3$b.G2R)*dO(O]@a+oGHa8k_+DY9|z7}oBSm%0fb-$Z>DEF');

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

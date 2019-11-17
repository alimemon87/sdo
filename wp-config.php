<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'sdowordpress');

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
define('AUTH_KEY',         '#_<{e1:kc<S!&=UJ#-c3Ve?J7%Htf:mIEmEg:Lcy?>lD.Fm8(D<[?F_?[JE>PX@0');
define('SECURE_AUTH_KEY',  '2Ksl:Pc9fRgvL,#aAh6/bb*}5dJeb:[=|KErS,$o5W0s?oqC+RRv^EHWPs[~*%.R');
define('LOGGED_IN_KEY',    'z6L0H!?meizH:R5_BJe$h1O|RAl0ugN[3<1zrc8;k>hg$.<lDWQvwzkL>qQHVfC7');
define('NONCE_KEY',        'Ka%p]s3EbvK:sMO#`V<^Nws52R<= .]ft|sP3@vHGKu=ZT1U1?j};gw4vgq:*J4/');
define('AUTH_SALT',        'n5uV87Oim ZS2*opJx#o,v|JiG|KH!vToijuxHBVkHTQSt./Pn-/JMh6)/NVTAU5');
define('SECURE_AUTH_SALT', ' @8nI2c:2&ha2x{Rx^:LmJ!y*F-`x{R`>IyzV7]l0+66UC(u([vNc4v.Q%R_U<.^');
define('LOGGED_IN_SALT',   '*)np7;+O<e>K_ 2`3uy#yj(C6JzP`2r{/Wj2rBQ!rn`=_.o8Tp{=Bw[9jhI-{1IR');
define('NONCE_SALT',       '&5<2.5v|}|w8*q8wpxvehWjiV~@|bwlN/q:AaEq[#=93X`1QH$1PP^WAI^*?xnOj');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

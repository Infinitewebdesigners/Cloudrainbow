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
define('DB_NAME', 'tech_rainbow');

/** MySQL database username */
define('DB_USER', 'tech_janki');

/** MySQL database password */
define('DB_PASSWORD', 'Janki@0007');

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
define('AUTH_KEY',         ';+k*8m0s-zP==<kI,Ssi$h-JvFrx16=(hm:_0~Zj4NMWy,M--h||8<OMc[*6{|3<');
define('SECURE_AUTH_KEY',  '/$smriX|8 ZSa5B_=_r+Hbtg-&b|Ok+;,=A^r~b++wZTU&<e&aOc$t+L/<;/6oEi');
define('LOGGED_IN_KEY',    'me;]Zk!O*D{P%u1Z!lA`&&zd9$W+]t,b//3C%ejOD2>YD|LTgY)MZAx2 GYeeL28');
define('NONCE_KEY',        '$0T&MGE,KhP;JM)a7<c*3&]=Sn,zo..&vXU9L(BBB3`%-#UVd|,]2t<!nI3<35qM');
define('AUTH_SALT',        '8,pmWP~lv,eU]xxzT?l^Y=y{#TkfkJXrIR%2$8;xr<oIkgau3>H4UTlp|Fmcn~0t');
define('SECURE_AUTH_SALT', '50fMIz.e_I|F*;2orz<af?lmtgSr)7|I(!:=Yl}|&JZBH|R}e -v{Hl~W]x/3]=}');
define('LOGGED_IN_SALT',   '!LkW+RMTraDJ$<<R)jj-/}*[93%-|pjJ);Wg<GE_a|yaiSnZh8d@+vSTf|`$^<k7');
define('NONCE_SALT',       'wSq{QLspOy-l}PBd(lgR+scT cnxC8`(Y2BnO0,9M#]E(Z5[?h3t.LjUfoN=/G,#');

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

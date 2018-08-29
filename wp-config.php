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
define('DB_NAME', 'testplugin');

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
define('AUTH_KEY',         '(;6awgUdh0bqUCVg=+p>q{b^1-3irf7u{YQi8dUfF.]_>Urh!+E[4a&Bz,%YXin`');
define('SECURE_AUTH_KEY',  '%m>4y u;S5<Tc/0s2WiN:cG<h#l6k1@gG^}QX5-BEUw9KVz{.robNW_Cfo8FZqpx');
define('LOGGED_IN_KEY',    '1bCI8A,vRz#R<7IVe89R^)@@?x1|Dk7pSj.,f}F(4`(]F5g /:D81D+Fb#ce_u6%');
define('NONCE_KEY',        'w7@OOkf;ocoyy:VZbBxE.S/Y_qh7(sYe$`zxs-E+3WRAwf EyILt.a2A7JG~t]2_');
define('AUTH_SALT',        '4[}O6ILtYAXE?xt+| F8.l$]Ts0<)9iS8wEIt,yz>?9u?(@}l[^$K-&V5K]d$HHn');
define('SECURE_AUTH_SALT', '_FO*gU!PV*)@[7C}plU/VV.QOj(ib4#c?4tYk:)f_<5hK|)(g[HFje|mwdLy0suo');
define('LOGGED_IN_SALT',   'I(w=j($CUNQ<=~QW|x-&v$i_,+`<>5,UgT_dEN5dM-|Ikm@kd;JF-4c.7CRFP$[e');
define('NONCE_SALT',       'Fz4Eo%&DU[Jd6NHX)G1|<9K(7V8?V|kv I`zLw%|0q0(#@5KR`yZ|oJg}*ep7&/R');

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

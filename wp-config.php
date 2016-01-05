<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'emma');

/** MySQL database username */
define('DB_USER', 'emma2');

/** MySQL database password */
define('DB_PASSWORD', 'soh5raluQuac');

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
define('AUTH_KEY',         'pSi+trj%|8G|S _%=g+GE=Y$+SdiGD,v(S$7~}N2aa nV1ePp9EjJY6ZXM{JcP 6');
define('SECURE_AUTH_KEY',  '2C2B+dG@h+]>Wn}xUV*=ei^@/];N@q1:x<?TJDo.u@>dc+Q7LD73?huT`$EWah--');
define('LOGGED_IN_KEY',    'U6ZG7BwgX-@}:r8*Q:iDx^{%lqU/|7QP|w26>Lp{b_8,Q$H laP/WgpaYN80dBFn');
define('NONCE_KEY',        '-Afl}qh-l|QzKB.uso}N6iewlb-TAx*K8;P1O8MHgIza|cn&-a1 O^Mj?R+8<4yN');
define('AUTH_SALT',        'NQj+#y&s#^|5UP@_R)USnS*p{bMG&lO3#%Jr8C@hR6`Q<820Y;YAI%!]++(wQDx-');
define('SECURE_AUTH_SALT', '}t<P3mBKC|B-VE-u*W@U A`e-.Me}uRHjS.3:/dgajL>w(mPBBi)ek8l&QIk}J-{');
define('LOGGED_IN_SALT',   '<7WmU*/q}J7w!Hj;q-bcn{d99C:mGOnU*`/u rN]_N`t<YzqFG}|I.@NSho$k+$8');
define('NONCE_SALT',       '4v4++/1fdE+nb2z.Ja5{S:@+)f |I5H7sQ&vVNdAKZ=7|l~_y&S%*w`$|} [JYy0');

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

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
define('DB_NAME', 'gifdesign2016');

/** MySQL database username */
define('DB_USER', 'gifdesign');

/** MySQL database password */
define('DB_PASSWORD', 'ADbfdt56^&3vbh!');

/** MySQL hostname */
define('DB_HOST', 'gifdesign.gifdesignstudios.com');

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
define('AUTH_KEY',         'w<g%Ig1w$YCnhC!U<V`V+ugVuH8=C|tnZ<Hb4b62v!iZ&a~xDuAN$fgkG!U${XMv');
define('SECURE_AUTH_KEY',  '1-2-%Fs2m=sWUhfa<Y4HaGZ.uy?m2~<qQZ<(}_)S9ji_,d;GW~0SyeWU=UzYr >U');
define('LOGGED_IN_KEY',    '-kv[$jg]I$dV?rN| }1P*URFJuuf$,+nPcGE^2B;YX+@}/s%)kn#`!Q#YZecDr0,');
define('NONCE_KEY',        '1s6FS<:6@;RGW0FVZY6jLf}Xb<&cAoGC4|FHAu7arQ-%x!r9C|vp1x7uXJVO.+!}');
define('AUTH_SALT',        'm1-|UXU`wpWEUZV(3T(`JfIkXY$XcJl,duP,6/5JyPncod<fB7:DO;ac?8;-mb|q');
define('SECURE_AUTH_SALT', 'Jrp5NI+.2)rX6-ShH|%*wZRTb.~7e_Jq5D=Oc!#YQkZL%ZY6u!xFW=Fp<Khb`,gn');
define('LOGGED_IN_SALT',   '^@nWv/|_Cz-7+Sw3hpj}`0p3P-6]R~rcnYf-NwLZvUJK=>uo!|N%PwX%;+Yk[L8Z');
define('NONCE_SALT',       'u/`wJ>HZ0a$TssO;BM]B-{b/&KWSV=Fy|kbk`<B1.J-m~ +MRFL9L:w&cc o*O>S');

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

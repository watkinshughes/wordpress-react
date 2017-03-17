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
define('AUTH_KEY',         '$QGZW*1W*0K2Ny%DJ<AQ=SM0x0Wr]NXMHMchXDOnVZT/DnuwvHlq5V$eAa%gC3eM');
define('SECURE_AUTH_KEY',  '9BrQHGf/=pY.S6X-U9{,8pzx=cu*@)+KxWxmL?eVI>pE&<d*J]bQ?z5!/tget`$C');
define('LOGGED_IN_KEY',    '?`gK!Pjf`8R2zNYEgm5J{GQIG:A/=tCwoP*tA9YT<}4TSac+xq~uf:/V=t[x7>{r');
define('NONCE_KEY',        'vct[v~L9>7kmN3qg[&rR>X7V=Oelm`pAQA,PGx<Ch=-S)oz)zrCccWXj)q3]ajIu');
define('AUTH_SALT',        'D`4;.J-@=CTtaaC<KTYV;Aj0>?_?vjm|!><&/b$>G#S&LePu49ED@nHtR,^viWO?');
define('SECURE_AUTH_SALT', 'En:w_^glCrZ`^@@A7,X*<VA}#AoJGu@F=]):?$Sqy T{V--dqd=omht!S^_L/*Al');
define('LOGGED_IN_SALT',   '[@o<c rd/{z5/v=CZsS2ppPicFBIWA7pOV.|]|C)D78Jm#d+N}U}Q2ciE7aq;Y@n');
define('NONCE_SALT',       '7?i6sDPy+,87Ffq^f_,;WA1xZ@[N<O/a<y|i~j4e&P05CoewSI ,#hJXu.Z_^1D!');

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

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
define('DB_NAME', 'okieorganizer');

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
define('AUTH_KEY',         '%!U[Cvaim7OJQ)+bTwUE)cJ6!AQ0oN.!qG^Ef^ hfAK]SRpI$ cl^):vNlpi.i][');
define('SECURE_AUTH_KEY',  '$2SbCha0613E{u&OwlhVt.=!<uCz@:go)A:[O@STFwIA@%3&s[#m7WAE)&!)gBO#');
define('LOGGED_IN_KEY',    '{]PHjCtr&`6k,K}QtEIFVYiIWR@kLZ`V^KYuN=></9|l5.WZv~<Jw*O7*G(ILYu)');
define('NONCE_KEY',        'zW8Q~R%<chpJ{n&?5UYG^ DhVuE-_IMp,6*Smk9TVSzUV}~)whHP5elME/8N&7!U');
define('AUTH_SALT',        'FTQ;,CPyk$gL*i!#/9vnMr,R7t;0is@Uyo@,?alSu&7S%}Yiz2Ku)|_l@CBeZzeT');
define('SECURE_AUTH_SALT', 'e(XbA[COUZAx[(;HuGf?)>B MyHf-dt8u^84gXt)kS5J $sWy6+T+j~V-u%[3!AN');
define('LOGGED_IN_SALT',   '(B>OA;)<3!d%_M)wB1(0mh9X%yea4mHJ1t/n&DeLJl|fSQzxu{$/>+I|MPX)5u0[');
define('NONCE_SALT',       '{_R`mX w_-;?PpVG/mDp_RkYZ`iX7C?~35F#7^ulG|i44-$4<rjETa$~SbC0p0,$');

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

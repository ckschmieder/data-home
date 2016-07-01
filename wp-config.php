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
/*Send all to ssl - added by TOR 03/17/2016 */
/* define('FORCE_SSL_ADMIN', true); */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'dm_wordpress');

/** MySQL database username */
define('DB_USER', 'dm_wordpress');

/** MySQL database password */
define('DB_PASSWORD', '{DR,77Y*8A');

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
define('AUTH_KEY',         'Kg;Cxab&?eKQT7Jnun<-!+k-O~1zj#dj}?AW1=$Iq1mG9o@XxtGJrZD#|,c$]2Sb');
define('SECURE_AUTH_KEY',  '$!)k)7m>,I^aFyw?M+LnNBKOC#54`Ak[I-ox]#;wyZ:w=ov?vx,,9#B0Z{2Y[[c[');
define('LOGGED_IN_KEY',    'YslsjpIEjzy4q@viAh(;9gc[LN^)Y(D&l-~_;iG|}B#L&E2[a6m69.K(VFPS.g*L');
define('NONCE_KEY',        'A.H9>FP_+bKg!#FmdIIY)P/5PVMGX[1bf2+Y%=MWEf~AG1eUm4k8vyaACbbm;Zw9');
define('AUTH_SALT',        'KY$.#vTgUip.m|-@7f*sLr0$#`>%&?pn{xPEeSP=|V$-IlhFsxABAPNzm|A*`vh ');
define('SECURE_AUTH_SALT', '_TSL&.)R<39[hM4!:f*I`ZnLWAd<P_WfLd|;ynu`FRb_a%0S#$N78zXu_J~n6&|L');
define('LOGGED_IN_SALT',   '[,=%u%5HR640PcLks2mplYHw}uYw/Op;ii5V;ClCBb<HXn?QOM5ZPF&+Bs>zH+63');
define('NONCE_SALT',       'p~uey|TzQl*X_4r066!]?8r1jutnU(JQ;OGDmWcfifAC4&Bh(c;UZ9eS_r 5BxIk');

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

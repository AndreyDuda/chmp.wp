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
define('DB_NAME', 'moryakii_db');

/** MySQL database username */
define('DB_USER', 'moryakii_db');

/** MySQL database password */
define('DB_PASSWORD', 'wn6xqD6C');

/** MySQL hostname */
define('DB_HOST', 'moryakii.mysql.tools');

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
define('AUTH_KEY',         '7bsQcd25ve&!KZyDOIr5x2lS(BcO7qih25VpkVO*@RdZYM9%gE8otzuT)ghl4Gva');
define('SECURE_AUTH_KEY',  'qDaN!6E@(k&3kDhRFXywB3wZ)oXjKm09s06^zYRHEBU@HfYeuAqqlFBz#SoLF%l6');
define('LOGGED_IN_KEY',    'hyVoD#U3qaACUgoJ54(3bTQky*6Cx7pWxn^*Dq4m#G2^URALB7EeSbl&I*UDu8))');
define('NONCE_KEY',        '9gK@VWrJiLeci1Gz7IaaD66CQkN#CdK7lE5A%^M&I1R76%B)U!YhqsbkNu)0Aqge');
define('AUTH_SALT',        'dqI&XEmuCPeco!5(Dbn3Etj8pY3OJvuxs^PsseUOW6KEoSyCB#jAcOQi4w5cSR9i');
define('SECURE_AUTH_SALT', 'ScDCtrbr9LrxwJF7k@)TK5di0YJckauUrEoiLycGi5IY!OvS^PmDy4TKPlOpq3LN');
define('LOGGED_IN_SALT',   'ccO3wTpCaYb@ADLsdDICA%Jky3@GL3Dm(gZS%kSPC9ojH0ftgO&Ou2C0vUhXHrTN');
define('NONCE_SALT',       'CePLi6Vk1PdjFDYvPS1YPsBkXXit)WykpphGe9TgEKvObNiAxvf&JwU)LEN3E@go');
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

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');

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
define('DB_NAME', 'itkniphus');

/** MySQL database username */
define('DB_USER', 'kniphus');

/** MySQL database password */
define('DB_PASSWORD', 'hus2018!');

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
define('AUTH_KEY',         'jM~j]r}}eX[fINS#}D5<5Cg9TLzq[O<BxNAoW?b-.C!PIU^ I;+i1j:k`DoC{fGJ');
define('SECURE_AUTH_KEY',  'IeopngkoP<4weu>2N8R^67p>]uJaD^{&M``F<=;LgGs7iRmTqIcO2$@:d7)z|-T]');
define('LOGGED_IN_KEY',    'Eyz4~hb3cLkj5,-kHe9mwyHZFf<gD)<IHkToBHQ.B<?32-m$P7%m-dHMt=iclfC ');
define('NONCE_KEY',        '&{ PWLwJWkqufhL.VYagleec]%UZP#C5YKIDJIfqKON{06s:8S2W%bKc~qpz7EEK');
define('AUTH_SALT',        'WPA&J5Uk1FTl~(s6X:l=v=NWnr]0nJZ5v<liw(maUZB9]61*Mrw[ .IQi|AxYB2x');
define('SECURE_AUTH_SALT', 'M*aif,m9_ERc{?V7iRQ]Ip#}6]S<4pm0#0d0z*qoT7|d_~K0}w#i@4?ny:h<zKjB');
define('LOGGED_IN_SALT',   'UH3xm7_epzy$N+k,F5zVp%yP!jy%|Z}PX2HpJWS5My-bB1E~lvVI[%q)6m9h}.gQ');
define('NONCE_SALT',       ',{;Bk+B@plpvVUDtB,Bb(|PWAF9pJ>k`]}F^e4*,WBVJ<eTUcDLWB$.(ng68WpVW');

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

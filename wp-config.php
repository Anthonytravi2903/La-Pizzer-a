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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'RWeXy5c+yxalyZV36YexkDvFCDD0uJzsBBwQBDavSBVEcVJlCdN0pfKDMSyNJubKiuiUdFlgYT20TQ202c4P1A==');
define('SECURE_AUTH_KEY',  'fhrm/pq04ctEFVzZZPOcrdwYkugusvzZZatulLiaT0nDjeXgRid0pBLnylk/Y4Uzc9FyHbBK46HhXFz8qfdeMw==');
define('LOGGED_IN_KEY',    'Tz50zL92Ws+ZN34xySepb2i/Qw4vW/be46pGi9fZyGhCm8kgij5UJGi0p3m/MGgIOcIevXNnh/ACwic6NvOorQ==');
define('NONCE_KEY',        '9NwFCejWjA7PTJBGbbJngxuEqiS3+DonaLZzB84LCw+mv6i7nL7/aBvfEmdmr3hx+J253RvwlnBrz0r9PBmRPw==');
define('AUTH_SALT',        'b58r4/fKNKgH/8Pfvs0yPVQuRNR59KR3udERwd3pvdlc0XHLF63vL5RjT54IPQ0Yn/M8YWpUxJ10y5lGOZsJ3w==');
define('SECURE_AUTH_SALT', 'wc6/RNIdheQwUP9OLdj7s25w5DemLMXPCSVEdvTcHMoD0PQdsVK7OPwteBtC3OjvSVEhYe/VMO84MELMGefImg==');
define('LOGGED_IN_SALT',   'XmzU8RIjGxf7BQfqEx3kizeXNSYAsjWN371mXLPJWB7/t2qHoTAGuhULQHYz36fB4GMe4CBoyPR3yF4VzmBkkQ==');
define('NONCE_SALT',       'mMjyUFlBiNAyd2Sj/vAYViBnHZuHf/KCEUNsSpcU/4aiXkWVrPqYaP6y0+qmL97QiL1FLh8H7skXjQeCqAmRRA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

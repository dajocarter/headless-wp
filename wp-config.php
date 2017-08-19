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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'BXQpwTxMHQyojuwGRiholeY+YIFQhqvfcwjLTngh4Mn8QqjLIVQsLULOLpMdeomZnm5qfG/buJWhsnBdlyMjEw==');
define('SECURE_AUTH_KEY',  'F7cykYFlkhkY7dEwMoIqUc+YVyGYLVxHQM8RtS1oldOMeJOtba7Q7bxjF5+QkNfiwJLY1YDzNe5V4Brb546N5w==');
define('LOGGED_IN_KEY',    'owMdFmaTt1OwqtVanegiqTUUVfU9KPkT+1vaj/8tzNHM1aY52U7MCpzpMkaS6DaUzHpDH7Jt13iuUFEa/aiDBQ==');
define('NONCE_KEY',        'dHq1midj8c15E2gSRS79HhaW4iVwcueRYJpcRevM49hap2Atfu3Wi1baFwHMI5XVvbUPD8gt/KqD7ntBMN83Mg==');
define('AUTH_SALT',        'ztuea58v5r11X3Wzmib6ynmo3V8PTYCqiT8HBEs9fJwjb9yyLr0ykY2sukwrPm313dVPkENnlcKcKKSznADAMw==');
define('SECURE_AUTH_SALT', '8Adx3cLCHw3hqsx6Dauicmq2LnKzKoOHQWC7lnGA7gGExKmWXtYRKY5LrZmFUqdECgXtJY3DVn7NgUYeazzGkw==');
define('LOGGED_IN_SALT',   'sPBGwqp8Eq8qGHNLg+zzePPGYB0S7gAN0iWF+KEzYwSxv80n/cI9DItg9xGXqPdYxacPyMAGSHHBKrDWs5TsHw==');
define('NONCE_SALT',       '+XBghaRpBNTqXhJ4deXgN0/GIYGGwKuYIqMgcYxvnrFrP8m+i2hVc4cZdKa9l73RaFK72WTuddW4lwRDLQj8CA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

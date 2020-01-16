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
define('AUTH_KEY',         'v42Td8OpLrcm8cGmNnqmLg1sKYvPKsfuAnOsPOqWR+oONcAst8RtGpRbn1yPQiz83GLB1O5QsFdhJ3FxVzMEtA==');
define('SECURE_AUTH_KEY',  'eL64zfym3trfGWFy24OXspE/W3tqnPXX6yPqntFkO0ym7g/UBpaTnd4D4hU2TL92upvixPpzf5fzo312MeAixA==');
define('LOGGED_IN_KEY',    'l3JTGiLvoJWEL0tDPoDP9pfLTQ8vLbzTeBfGSLBRyPzT3/1NXB2T8cfNpGizaYBTAmVv5ex9tJoDQl9kU5/RTg==');
define('NONCE_KEY',        'MynO6qAq4L57y+HGKz1I5FhqHlizzRC4OJlXjQgMHRW50+i/RaoOaHGWC9BcaN5BqGs4iAzQrWg5pP5C6fGpKQ==');
define('AUTH_SALT',        '4T+rT8iMYW7bCoRde6u2vMYWEWNyhRm4pJxbhWNEkT2A9aSlw5rekLGAf7IUjv7FSW0lyCZN4CPs0amXaBG5GA==');
define('SECURE_AUTH_SALT', 'SkQ2BwqjciYB87nmGzI71n7WrsUWr3/2UDBC/8FZ2yMBahE8HSx252yyQ3ArWxLwQEWElMDh4kp6tEc9V6O/Eg==');
define('LOGGED_IN_SALT',   '//hzKBPnhb6h8JxgD2p4xeZXtJvGnnYmefZiI9vBTztWnokRdNb5w+iOZxw0/FOdD4qNPTlLTN7wiZdDbGa38w==');
define('NONCE_SALT',       '8/sOD/LnzVMQEVBgMTvcZZYq+W4f1pVF9QbSSLUSClevhO9V150+KwvciurKBw7WtoCXvz7clHHqOerqHn7t2w==');

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

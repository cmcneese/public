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
define('AUTH_KEY',         'cmIIklT5BVMXbPlCSmfXk/HpyQVpFsXKJm9Ev2ka2edLh7upWsKXgBM8TQuyXf7hD3lNYUG2r7H6D/yzXKkRkQ==');
define('SECURE_AUTH_KEY',  'yBcujl+cjqLHu4qzvmmcopFOn4wpOcLktGg4iClS44BOd30rX+CxYfR7dct9vBdj+hULmfzPC7f99SlfessdYA==');
define('LOGGED_IN_KEY',    'BZK69QH0nTDLLvuIDHxwXqlvjkDm5geXfSuNyZJC1ANdWNwB8iYLPDiTxykBuj7zSH/KkoQ8a6XpzAB2QhgdtA==');
define('NONCE_KEY',        'Y3M0BjbFMkbjQ66iGO96zQgiiktwDmjKvCzpdp54IESfryDYDFiKST+lHtuxrRea0HYTmyWZKuyprTizWCwQcQ==');
define('AUTH_SALT',        'LwFZYtCHis6bVx9DxVG4N3JwjOu8cG6c1Hn623zbKyNzxYNyV0r2rQatgsuEAR/ozx3oLuGMZx92Dk7GVpBoXQ==');
define('SECURE_AUTH_SALT', 'PgvtgQqW1fVwdq22tQgmg6f/5siU2ob2bIJtbIFNB7oTpgr7DclH/0wtyaQWcj3KPG7roOG+kxlH5EuF/9RLNw==');
define('LOGGED_IN_SALT',   'xo1hswCvHE2cUKUcAldp2WDxuYqTihkdFzIjiO0sO35W0Z3O6FF0PswaVoHpqY8rvh5rZ8GPhIwNJwW2lm8ULg==');
define('NONCE_SALT',       'LcdtEDzf+PrTsnOHO4ALz0akRj4NYskrnQqJ71Hi1+oirLmWMnrfbZFyyezzO/nQccCgx2LC8WI/yAsx99c7aQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';






define( 'WP_ALLOW_MULTISITE', true );
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
$base = '/';
define( 'DOMAIN_CURRENT_SITE', 'churchofthecity.local' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

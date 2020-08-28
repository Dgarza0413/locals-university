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
define('AUTH_KEY',         'tgLHrlMbyK9AvAYP5G5pm2k7Fcg4kgAIst1WEMI6qLlo5k7dOo8v3OAtGMnqqwMoy4APwnJ46v9ZIjeNQTsWOw==');
define('SECURE_AUTH_KEY',  '5OPc+4PCN7gGPgYQNpU30MNLgKCnOaQ2BHsnFsjjQr+DrcSdLOh+9EE8aF56gmM+ujWYEznGXLbbwaXFcwy3pg==');
define('LOGGED_IN_KEY',    'ipgo/ynpUbFLwcni/2HWwxFUVm/z/RsGFprMydWNIc3UCTxEff50kruNyiKyn43HAxu08n0A2EKh5Eg1qOqVTQ==');
define('NONCE_KEY',        'Dx2ChRlMasMV2S+gWQo/do+PCrb4zuYj9B2skUwkXuidbbe6LRSzElAQNZPoashAiap3vIud+EhCNjsSxeFm5Q==');
define('AUTH_SALT',        '6mI4/lR+2qr4kiH4NhO0uyP6ktKGTr6Ou/sBQtzj8WnMWbwS/rUJAoXx+DGWHKNiY0eUHVP0p9i1yF2WxJL1hg==');
define('SECURE_AUTH_SALT', 'QlYQRG2Lln0AeAP66SoyhqQXKKrDiRjCeYfuLxo9dbGLz19LWdCnlUjYdFGmIHLmkoHUEZldFfI9YpcE/R3Dcw==');
define('LOGGED_IN_SALT',   '0V2ru6M8K0efb6juZBMNQZq5d5mramAswDTRFBWt0J5ffYxEPpCw5SDAG/Tyv/gGKW/l5TzjUGdf1Olb2811Sw==');
define('NONCE_SALT',       'oqKiEWDVaK6EKo3Wcrj2qjwqrDmaom7wzVei94Vio3XY9zZ7UeAFAIDoveaAr6gPNhQoMgKV3x+JwW3gyJEVMw==');

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

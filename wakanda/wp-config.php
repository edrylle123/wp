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
define('DB_PASSWORD', 'usbw');

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
define('AUTH_KEY',         'HJaK8%O9np@rW^$BU<f~%wGM]-p}H_s)?Qa=r5!9)nhEmC0&(vkX!O:%OZJO{NPf');
define('SECURE_AUTH_KEY',  'iNkq(i)KJ-P/b[vyU(x~fJOyQIfq]>9:3_&#v)%HQ[@y:m4jT+]9$JivOTrcv<Q}');
define('LOGGED_IN_KEY',    'cVEy*q(W:$QN**He)9}QGsEtUWl%(x<D+n5gZMY~BQ4z_nG4/h.O>F{>(K!%rOp&');
define('NONCE_KEY',        '|/KJU^2eyk-~5}x:]i6!Y!1ckYHbd!!8x@EDI&hO@OCWn^^]D!t7&AZ?qxw77^{A');
define('AUTH_SALT',        '2w1}y+N`aAUN9G)-5J+BIz6(1!A[*Tk2R03)N2af[C r.0Ky[[b.P(xf2@PP7Zx^');
define('SECURE_AUTH_SALT', '_kj>|1pX~^tM;M7i*6cC5)5A|!,v6rC_n$Q_7{PqXM$X@0PP,J!LZ78qSnG(Hm(>');
define('LOGGED_IN_SALT',   'VIx6M8kK#,Aj^,D8annkw/fS%@L$7qh}oC(J;xQ@g?Z$],eUr7mf[&Vq6s7$Eu6D');
define('NONCE_SALT',       'y>]OgIV]P23J%#f9KpDGwX/Qn;)Px5[p;)=J;rV|q{lfmwjj]S[1UI+c&PI8NdtF');

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

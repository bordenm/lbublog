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
define('DB_NAME', 'db722785174');

/** MySQL database username */
define('DB_USER', 'dbo722785174');

/** MySQL database password */
define('DB_PASSWORD', 'LBUblog8844!');

/** MySQL hostname */
define('DB_HOST', 'db722785174.db.1and1.com');

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
define('AUTH_KEY',         '2,Y|kHh63}FHN9NNb3}TdSv!_50)=]j2]!eEJ|N9U.6c#r0Z#Hx8d1vK7-)p/GpK');
define('SECURE_AUTH_KEY',  '?872wH<Y}gSY:zW059a[^T0}A _-|?^l,bQ;N_d%(f$]X?cQNS6F6lKg|4vxFmfB');
define('LOGGED_IN_KEY',    'F_bveV>-?jKm(c/xsJx!(kFK,J!?m5y-;MUB~pJiO9]=JQsl_gy)ZCA4k*APJ<`F');
define('NONCE_KEY',        'rV3jOGdJ`~FhIVkrUd@6(MxeG$&.SaWI 9fE oZ^J&LI$ot1TleMV@qjrE?+qRRS');
define('AUTH_SALT',        '4cUHUUM?xYq(59};4lo  F_`RN+5K~W79(0`7b}c/Zz?%QsKn3h/8C@@0HdtM84V');
define('SECURE_AUTH_SALT', '*`To}iL@YqEPZggol(jllX^|!Sk[RG5*W+dxY0K-!-C6b.E,A?LxDQpl_qrKt6<a');
define('LOGGED_IN_SALT',   '-J9L,)!@-pZ->P@$wv:Grn+CR<vU^e%ZvnISMb /<g3ezfPgHCp,F~MA.uR4FZ^?');
define('NONCE_SALT',       'fTH4Vz}4,DWPQ4r2^L!#G(~[>BXo}=zXkAw=RtRXRi3Jo`/HXuwAZ5at^FdQ:h52');

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

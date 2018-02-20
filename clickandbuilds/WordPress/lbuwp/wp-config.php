<?php

define('FS_METHOD', 'direct');





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
define( 'DB_NAME', 'db721140950' );

/** MySQL database username */
define( 'DB_USER', 'dbo721140950' );

/** MySQL database password */
define( 'DB_PASSWORD', 'LBUblog8844!' );

/** MySQL hostname */
define( 'DB_HOST', 'db721140950.db.1and1.com' );

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
define('AUTH_KEY',         '2+i(c lM5odF?8&[|yN(+L3-lpM}du`/*-!{u~p8IDRo},)c9#q1MI3]21zLhDnO');
define('SECURE_AUTH_KEY',  '*j)M=/`1R~P*-mM(4N5>My#dF2<+61V*oD2+Z4}}&w9o]$2l2X,ja%I<:2!XEVuy');
define('LOGGED_IN_KEY',    'Ct|=IMPEwKIEz+c1Y.e%OL6n9!yyX?/Y8R(/6ASe:>|QP&<ePM=MH<J;6qw$(|c6');
define('NONCE_KEY',        '99!TJK|%R$[HHM$:%vIO2h Nk+d-6Rgxjt1:S/XXnmID-&}{!P@m|H.$bUN:or*p');
define('AUTH_SALT',        'RQ@fyRzlfF0c=~Y$4+i+m+ 3e|RAE+QWD8~cuv>NlyU2AY,7pBsdj-TJq8)e[x**');
define('SECURE_AUTH_SALT', ';qeXjqi:f5>m*0Zp4V8_`y{R-D|?Q@|F0TH]2p}-I#i(g(X^bAtx8t`X?Zq4O|,w');
define('LOGGED_IN_SALT',   'lXE[V+3N%?>.Xf@c:EGY(<a+]/7a<P>gb)o#PaU=`haI!JKu/E]+%bffvX6e#}I#');
define('NONCE_SALT',       '$!my,c5X44-||CAkN&s.> HjHBC_pqQ[.h>o<spQH-Y}cyQjHC;(<IFP^sV~/`)m');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'x29nr3scbp';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

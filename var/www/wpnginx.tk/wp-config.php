<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'wx_tk' );

/** MySQL database username */
define( 'DB_USER', 'ginx' );

/** MySQL database password */
define( 'DB_PASSWORD', 'laWonpMP' );

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
define( 'AUTH_KEY',         'T$`Ae?AZ)d}H~oWshWTz*(Dj5w=2-1>y5Uv,;~_/$/l6k):B@[Az(Jd{B7/OJAC7' );
define( 'SECURE_AUTH_KEY',  '+2[q~Yuh~.?<6B{C`F<o[XRpT3y c^ITlENB$|1=pTo}yhTO7+U!lE{{eU9wqcUK' );
define( 'LOGGED_IN_KEY',    '=N[]fN6gT?|NcLbP)32QHFj3pSG+.E0bB=C*DcA[0T@pR7>M9||Dv<H_#@;o.=>?' );
define( 'NONCE_KEY',        'mqZsNly814u< utZnS1I6zs44: jX7@o_;^DrSsihs4D@r6/{$g;D_>0ci=NqI_%' );
define( 'AUTH_SALT',        '6DzM,S]<lN09r[<+TZWJ@|aY8$u;9hAo)=I30:xp1(&FNgnx{oy~`mgdqCfz:J8!' );
define( 'SECURE_AUTH_SALT', '!wa(MX4IH%;mm?x4)1~V3J:%Lg1MlSY=;.C06v.sBLe}2HWT>b/{kjq#^O<^M,cm' );
define( 'LOGGED_IN_SALT',   'sQBn0$hx^DZMhAhp)J1zs|C<~-yQv@%c7Y]Uim/YM<BEZ:9;}q~%RNG6je @dD)_' );
define( 'NONCE_SALT',       'Y_.@l_oWcmg.j:HeV`InJmM!Xr(5RPf~1LQM@@D,>OLf0ft0:ctFWqs9`qu(mHUf' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp347'


 
define('WP_ALLOW_MULTISITE', true); 
define('WPMU_ACCEL_REDIRECT', true); 

define('WP_DEBUG', false); 




define( 'WP_ALLOW_MULTISITE', true );
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
$base = '/';
define( 'DOMAIN_CURRENT_SITE', 'wpnginx.tk' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '@O5zx`rG:DIA#A,M a&8I(-$m2G=*$Db^AKsS%cq}_L`1w?>^|rG@d-dsPkqq{I]' );
define( 'SECURE_AUTH_KEY',   '(Lc N&d`|&@Hx~e61?qU1*#.j)C&?Y7m$wF|3,MQ1y?}[xP{34vr#Y_8*:u~mu|R' );
define( 'LOGGED_IN_KEY',     'Q5P^I!8OYXt+H0~s{*}<#@%]LQHSz@UtW!vfoIp{?o|G$k[,C~k7f}{}O:rB}g O' );
define( 'NONCE_KEY',         'YuT<gvxB!Z[mOAh0qSB&;sWl+:h<f(}Usv4gsg{<~b]_(Wi6NkfIu<SNl+hV:xv1' );
define( 'AUTH_SALT',         '?r,/n]*d*EQ}im.h$$GCf};d[Q<<v$Ss=NUUN.>V{K@Nc{tOzLvV&uN(&H}5{::$' );
define( 'SECURE_AUTH_SALT',  '(c+l-;4<S@a+@9<w8,KQ}6aYyUu:pm XX$9#xK05ob! 2;{:Op>Q!YszWhg:Rf=T' );
define( 'LOGGED_IN_SALT',    '.q#vYdIhlEcQV8b=Ej<Wmd$oKlm!~f3m!%EH]!CA1xXj7`.3;1(aC9b#qjd6euqK' );
define( 'NONCE_SALT',        'ZRgd]h%+,<+H#7xG|0{I`+<_~L`b?q0zG|Hi^yU6*n2g4eVZjme[g[6yb:O-QT1e' );
define( 'WP_CACHE_KEY_SALT', 'pFos=?+Ub;Pv11N=|]k.]m,dlRqY+00+qY/?OBk+;8Mm}55_`N).=4TLi{UTO)=l' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

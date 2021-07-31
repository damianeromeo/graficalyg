<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u154476457_spFaJ' );

/** MySQL database username */
define( 'DB_USER', 'u154476457_wd1op' );

/** MySQL database password */
define( 'DB_PASSWORD', '9Pm6nbD8i0' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',          'dI$OgiB7NGl@lXqsB1ncX;A+1?FQXzE-=luy&*wM/rW>AG.%h9[Y8xH>=3ZH+~r ' );
define( 'SECURE_AUTH_KEY',   'R=#SD4%l)-!{zEMaM( s:<#S]J*gvGtEp#9:ju|8rl$<uECZ]AY-Sx4{hwUkvyd&' );
define( 'LOGGED_IN_KEY',     ',@X}7FI]nnq8<I#3j`fN%<t7O^G$IfB%YgB<fn`Ef`14Zg{ WY#Ub{l oB9,P=<}' );
define( 'NONCE_KEY',         't5U8cc{N[9$B/MejH8BF,!z8!0|w~@#s=)bSBzC|t9TV7 X.$YxTk9XpOC^/zSY(' );
define( 'AUTH_SALT',         'S]GU$q}6jVpEWih4O~aEq5#naZfRD%B2Y1<HB<i)+mB6EE0$xNwVk-UET#)}ht?Y' );
define( 'SECURE_AUTH_SALT',  '<7+.F%;^L?%e47k7.4)>!VaWMcoeeZmz_wC/~pP:;eqDZSYbRoShwWl+afGFOh>M' );
define( 'LOGGED_IN_SALT',    'c2>)$82SQ+[v&9J,:3>5?cj>[i7O1Bx=g7lxPZq@B2_fR1(#vat)[?}ulz4P`#%j' );
define( 'NONCE_SALT',        '}40C)Rv#T8.8#R:f$[YY5B=x0OP|6]jhi|+WO;<<^_YYFh@qPjf6R=gdZg$LmXkq' );
define( 'WP_CACHE_KEY_SALT', 'l+lxw#yaDb~VD1#UF5dB:b0jFFsQF6<HblwbT|-4|~o/oJX,6xY;e^t+Rw:h],HI' );

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

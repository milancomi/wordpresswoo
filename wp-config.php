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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'efashion' );

/** Database username */
define( 'DB_USER', 'new_user' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'cS6}APozqqcYPr$8DVb_GYxwt13W}I;t{B-%`q*IFTp!zkw5M JAhg?u}F/eA1W2' );
define( 'SECURE_AUTH_KEY',  '!lVdWsUY@Iy8%it`wa[]/8{(u!<JMb;?--&|KEzXIi:fvhPdq8QzlCL+yU;qKc^~' );
define( 'LOGGED_IN_KEY',    '`;4AKgcWeaO<F[ #,P;.YU!n18Fqzf)<pA=*{!G8jSH<Ek~hkPbc5|Ty1-6y`;dH' );
define( 'NONCE_KEY',        '[0Y/93lyGf$ ,<E|:c}go3,1{k!<N {0xq1a]^Ox%0*0xhyKp,OhSKkR?j`0c r_' );
define( 'AUTH_SALT',        'cI}VI8~H81vjSXvyr-jp0g6G9l{<sO5iS1Q[::`[^V<9^O,U:hgvMfW8K@4eWW3.' );
define( 'SECURE_AUTH_SALT', '6^kIH-t!Iieh#`<]iOw}3N7mP6P/dx~ZQf_HailRy|PN_5%+vF5(6I:eb3p&Wnt)' );
define( 'LOGGED_IN_SALT',   '*WwexPH+>o4g)EE4,K<!k@OkaIpp%ff+E2iM|>x%lXs|0ut10.rd>B`1|vQUH::*' );
define( 'NONCE_SALT',       'I;B]xu8[BF7C[3ju(L,Ra(Q5z|v0$rqXm8Ye:3SpJDVyp~n|WDDXHboWc6O5EIQB' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

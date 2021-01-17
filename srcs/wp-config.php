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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_base' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'b3ll=P3[}KWLo0qgmqm8a|7(wEybH=SH0U%0x9gyyN6e)}u]wyWD^6FVwfRlc^,2');
define('SECURE_AUTH_KEY',  'jm+E{PIBF6G||3hEN20An23}.o>YpL?h&JJ1L@;C#prZ>Yd/s>1~j`28[YVg141+');
define('LOGGED_IN_KEY',    'o_/-;RhS&d6nlj-4w,qf~NT$682?c/:<;9-uhzLey52+$}65zDxsL[}/bhxR`m2+');
define('NONCE_KEY',        '6GP+]/IX^K-<w89{IJWe)x#aLkK1UYxdb3H#yb^UTCB(-}ad31*qi|>67sGqaZGv');
define('AUTH_SALT',        'tr=z^s#h#z(Y+oYl_lpQIm3H.Sh|172Fd-N7:?h*$BS(|GY[c;QeyQq@6[a1mTZe');
define('SECURE_AUTH_SALT', 'Fw|{8x2qXJkLcm;ZKC1.Y7Fv>Er1|,}#Z+MNMBZb@KOY(6DT:eD%;LTv:/907Sx6');
define('LOGGED_IN_SALT',   'f /3wLkQpLO|-rm6#Y`tay_JYK^}j3rCzVKA0z.aT?hOfTwc6wSAjvTAR~`I1Yjy');
define('NONCE_SALT',       'NbY|eRk&*#z=|zD721(6y!15+p>Ux!NdTkr&<Q`+Ev2L,oQNj0&Z_[$+}h8(a}c>');

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
        define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
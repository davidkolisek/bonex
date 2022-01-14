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
define( 'DB_NAME', 'bonex' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '$JVx-UG@Mf&zY!L;6dQmT>>e{^Es_za&O7*z2-[<,-rNi#]y*c%Ogt7)<a(?d_ac' );
define( 'SECURE_AUTH_KEY',  '# C{x+G]em/p`<%7PPJ6r%}P9}9r{wq`L<P}M~A5[BuC^uq9!AyLq.2cMQq)45j|' );
define( 'LOGGED_IN_KEY',    '}it8+3s+_B?Wygb)$,6$:yD5491>OPwy;x/])w-E>{l pjg0x8Kd4~@B|9%]+*V%' );
define( 'NONCE_KEY',        'zk.vmFN,gz@Na&$=0(lk[E={@uRN|MqF/Cx(Y~14G6IIpxU<`kBT@LAM|Fd?FZ0k' );
define( 'AUTH_SALT',        'zYqpNyai^N(B~&TrtuU#g%4W2)&DO@?C9A(4d+1&wbsv/!mqF`VDl%Q#2@,`?I ,' );
define( 'SECURE_AUTH_SALT', 'V8@Aj9Oql90n]m$yF1]MIj?^V^b3.oD-_Mp.EpdacknCkK  .n_vb26sv(*D<Jh_' );
define( 'LOGGED_IN_SALT',   'j`}=.  d?I~&V-rmrNCU^,@[QK5e;l7H#s`{D31pI%B}|&/nAyAT@vqUs5(]7T`g' );
define( 'NONCE_SALT',       'BlS1eQ;evi5)vy/S_JWz&qK#drq(!8[[U8q#iGyej`HZLtB$?0pgCw1;h.@JHb#y' );

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

<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', "sindivacs" );

/** Database username */
define( 'DB_USER', "root" );

/** Database password */
define( 'DB_PASSWORD', "" );

/** Database hostname */
define( 'DB_HOST', "localhost" );

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
define( 'AUTH_KEY',         'lNtSkfAiZSvKxkvZ~{]?pWr:9[j9cy,M/gKPqmrf7s@Dn{,*_I9~Q[suyQO)+>mE' );
define( 'SECURE_AUTH_KEY',  'gXP5xw(q88hhUZvw%)y+;soea=b/f;`D%:7/s!Nn%C(Zi<{UqUOKxkX_MqmQU-&+' );
define( 'LOGGED_IN_KEY',    '=n`&W0_,u@LHyhrOm=On[KJ[)TmJ;h&kJH7L%BtbP7wD^;28GZ%$DOXu(2@-pjKv' );
define( 'NONCE_KEY',        ')/en/5K3f8a<<a3`iIbiO?qUoHFg Jqc=E(G&yq,ApL/O|@WEiipbhDIjjzTJeMG' );
define( 'AUTH_SALT',        'RW+Z|}aQ@Ya>JxsWi7Uz[|Wo0:219F*-o18@k0Ykx131!qtQm,EQQ5Q`._eM[$/`' );
define( 'SECURE_AUTH_SALT', 'E6fy2T/zbdO@4J0JI95h[z&;(%t t%Ru)bPlDFJnOwH@M)g^] V/mmz}nsOqZ}n$' );
define( 'LOGGED_IN_SALT',   'xv)F?&w]#+EM*2J)Y0)y:u(j@uww&b#|%Rm?F9p$}0J|.JwzYm^i3fq?:]p)lm#I' );
define( 'NONCE_SALT',       '.?Q4zb1=uJJ}gAxj|PjSz?8,%?qrtvJ4<BfU C#)ck%i<,Enobk)9}~L%Z^Hl?Br' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

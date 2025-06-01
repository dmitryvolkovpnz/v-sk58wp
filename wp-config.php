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
define( 'DB_NAME', "v-sk58" );

/** Database username */
define( 'DB_USER', "root" );

/** Database password */
define( 'DB_PASSWORD', "" );

/** Database hostname */
define( 'DB_HOST', "MySQL-5.7" );

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
define( 'AUTH_KEY',         ']B%%].WttY)gvsSW#4P&MPK;r60q;@05<4f5gVgU{7%9!;w4;cfmnJ@fxM?*@7gs' );
define( 'SECURE_AUTH_KEY',  'q${#hivkQ(AdN>h-_*Oen`=&@{v&MWGk[4FTZ:wNb}6BIvn =B6XY,j]6!q3D@e`' );
define( 'LOGGED_IN_KEY',    'vd]u0^&MbTdP<!>4_C1s;EFoyCf|w>b}cAM.1`NDcBt:$X~*(K Yz:F2Z$Af9iVv' );
define( 'NONCE_KEY',        'sXm9i,;wsLi>`Vb$GSc:?KoUQuVc6CI]^Nnb3YrsP>h|4ah C_!:6i6}Q{2lQ8$k' );
define( 'AUTH_SALT',        'y>HeGsX)6=6_(c6umv^t%`Z~,51>d[<~,G}.~Kk|UumFDreq]J[g4b>rNAqzUcxA' );
define( 'SECURE_AUTH_SALT', 'IPb>X}/`S@+/f7sdjY2c)r-CnQs{Vam7uLtLwe0T_iDlmL5=]<7kA zIIV4o5.%p' );
define( 'LOGGED_IN_SALT',   'HnwlVt8-]NX(OU%09r2~;^i9ydUqIi ]0Wz[4i]6#SQ$vmP%q+KbLv`FQlzb6oPP' );
define( 'NONCE_SALT',       'R0X`m5]rF+w_76=mh(gdE66_4?/rE#C<[s:75.!C:`Z=gk(?$6pSBrNq[5M62-5M' );

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
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

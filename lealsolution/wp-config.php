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
define( 'DB_NAME', 'lealsolution' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '=mSlvzeZD)<)mlC{g_*w8f9P?)j$mdVc%:DVp8*0#N{d_@]eiS08^Nl9Gc$QdNDc' );
define( 'SECURE_AUTH_KEY',  'oPl2djk`Gt|&Sw]_)E3?e&t=yzHz!i[sAqd4GjcwrGjbZkx.!YJn,a<o>`k;Y(o-' );
define( 'LOGGED_IN_KEY',    'jmp}PNq;1Cj_e$<2<K}.|o3rYsf/)ZE[Dg@>!!fpH,oQvB<`dct*KO|LcO~2BVy2' );
define( 'NONCE_KEY',        'L.2Vsw@^3gpG+ER:6+Lo`coQI!AM]/A$F#E@lUA!<Mkj^]`g|+2g6e&hTDs-,Bq9' );
define( 'AUTH_SALT',        'O]A rofhPeq>hR:H)lWLR{^?SZkK|D&MIX0HSuRI8-@mYa.<N?{ybI05C1FfC4Zw' );
define( 'SECURE_AUTH_SALT', 'YBq}6pt,_OckJy&B~#0R`wyR`[TI|o2bwgkNkXF@b6Z-vyIxe[B:wkZ)wa^O%B-w' );
define( 'LOGGED_IN_SALT',   'V`:5Q0MoLbV@fa?M1J|c0RY>DQMSRgn /cxZsq*vZ <mFYp19^O~_qJp*oFI_zQB' );
define( 'NONCE_SALT',       '*08WY;qy*Ii>N8zen[dZGtsatzEjj-6{oy#Q6/Q>3Q@nLC-`l8j+hYH<LH!T^=Md' );

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
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
@ini_set('display_errors', 0);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'employee_portal' );

/** Database username */
define( 'DB_USER', 'emp_db_user' );

/** Database password */
define( 'DB_PASSWORD', 'yNDPJZuhwUH-/IAF' );

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
define( 'AUTH_KEY',         'JGn#$$f Bt=V]3Z{N}ty&U..kJ;fUXuRP[BAm*<YGmPw~N7|rK#A5^0121FO*Mc7' );
define( 'SECURE_AUTH_KEY',  '?S<i~DUJs_v-6ne;YZ)q6_c1=q&LL#mSGmm9CS>@#}~NR-p>WK>s?m$2+Me:]y`y' );
define( 'LOGGED_IN_KEY',    '}5g!M[-0%Bt>=ZU7az,atMeC4LtZ5iB<]+@Wy4@5Iush#PS#BL);2@8m#HAqfs29' );
define( 'NONCE_KEY',        'x`3[_T$qj9)N~wlZ!6.8VGuPQYy]m^ASlSjuap$t4O9_VHdfk%D_E8mTQXLDDg4X' );
define( 'AUTH_SALT',        'a?lf^mM}0YH,USrOiAzk&(^9vb%Z~hVnPKW? :5ZsNpg@hb[AG`@/Oy>+{aOk<vC' );
define( 'SECURE_AUTH_SALT', '?~WY1a;n:W[[~#yb,giZk^fG7G``SEsT`tz~7zqNGj>m=?rQycNWk#R&w`moYMLw' );
define( 'LOGGED_IN_SALT',   '`c_UdutP$ne_?2gXf?Es5?dRxrg]gOY o)k_+8<F}Pb1dMrAB=6c0#/_2ZM?K.:`' );
define( 'NONCE_SALT',       'Y$Ii8o$`4:}kTZ_qOt[U,MrBIh[lnS$w[u+PuPs,]pQkPX8+M.=zW7bH?Q%~LGB~' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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

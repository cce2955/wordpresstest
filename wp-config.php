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

 * @link https://codex.wordpress.org/Editing_wp-config.php

 *

 * @package WordPress

 */


// ** MySQL settings - You can get this info from your web host ** //

/** The name of the database for WordPress */

define( 'DB_NAME', '' );


/** MySQL database username */

define( 'DB_USER', '' );


/** MySQL database password */

define( 'DB_PASSWORD', '' );


/** MySQL hostname */

define( 'DB_HOST', '' );


/** Database Charset to use in creating database tables. */

define( 'DB_CHARSET', 'utf8mb4' );


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

define( 'AUTH_KEY',         'N9@_}:L?2=(M:NdD+du`y`(E+C7!7l)@qtF(|zmYlbJ($_nTRGw{_>(a_Y%IL+9v' );

define( 'SECURE_AUTH_KEY',  '8Rqt-s _fxOTZ Sq}[#Wl64pWQOB(^V7wy:L)Mzk( bC0@WoHk~.YtVt97zX>],u' );

define( 'LOGGED_IN_KEY',    ' }.0pyR9VMF%*PLf(SBv3P-%GJsSF(Qa$+S1bi<V9I[QTMdkF_t,++k TSwzQvpo' );

define( 'NONCE_KEY',        '@1Cj+0|E^o=6k3/iI8(/PbX<4`-&CKoXt1z?5}MeI*85fkr!$n]Su.N?`C{Y>2M!' );

define( 'AUTH_SALT',        '2br~9K7kzJIU#2T&8/zuC^w+ xG98?@19>xkhuxRk<[,=Qan3vxr5?3*DclOV u+' );

define( 'SECURE_AUTH_SALT', 'XN0#JFN?KP$hT>[2C3KfYxXPi89.*.w/*pF`<mE,eGD]Xx~^Ueu[+V%0VoA]di$G' );

define( 'LOGGED_IN_SALT',   'D)b6^1T!o&>N^vcQ`L<.OGihKQsX6!}b|#CM^Z%~HuSjTJw>nU2F%*criva`2YpL' );

define( 'NONCE_SALT',       'hJwchl*Hpam}b!?{AjTi|/gYV$%i6dY0FMAzLqdNwmy>:96^MM~UaVWXY)em/b8`' );


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

 * visit the Codex.

 *

 * @link https://codex.wordpress.org/Debugging_in_WordPress

 */

define( 'WP_DEBUG', false );


/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

}


/** Sets up WordPress vars and included files. */

require_once( ABSPATH . 'wp-settings.php' );


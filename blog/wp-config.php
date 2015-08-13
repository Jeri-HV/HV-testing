<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */

// Modified to use existing healthivibe db
// define('DB_NAME', 'wordpress');
define('DB_NAME', 'healthivibe');

/** MySQL database username */
//define('DB_USER', 'wordpress');
define('DB_USER', 'healthivibe');

/** MySQL database password */
//define('DB_PASSWORD', 'Wordpress1!');
define('DB_PASSWORD', 'Healthivibe1');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

define('AUTH_KEY',         '&wAf-R_8] O+ewkbDeriJpx`]9a-Ytm:|Pab6<.U-3-aS=F|3.)S-f2pztFX-}a+');
define('SECURE_AUTH_KEY',  '-dAeq}=]96K~3qub<1~[WtYwvH#dQ|VYDHELpTav,Ruh~4wR_=i)+:+5bH(LC*Ov');
define('LOGGED_IN_KEY',    'f+qx|0THQW6vAtW}E*-,QQaA}74Aty{_:hxSVrlxWr<W$]j|--Jq~%tu-QOg87+J');
define('NONCE_KEY',        'Bu]I6E*UH7|gRY^wOl9lG4Dlz6{NWYqPYG]RNq/2.[6>f1SlG[Z,|S.#g2aE^n/(');
define('AUTH_SALT',        'IAd7Ic)5]QID~a~2{S@x3OmgcN;cfB`;ox9|bJjc3w-_|=tcRU&!(xx%>*W.nra;');
define('SECURE_AUTH_SALT', 'tef-oC.#Z<jKVDJEIa?k+G-A2&l[&|>eiem+m9B+pgt9/72<KBh:Fp0+y.bVZqo#');
define('LOGGED_IN_SALT',   '1vzV/.=kfCvE|A|V3dN[^IK+m&KQ=/+Q+S^gJh9&|5kPxIj#5weW!b|Zx|Ycn,2F');
define('NONCE_SALT',       'S#Hiy3)pEts`7bCa12Ow!l`h2][Fv#OZD=E^&R&+AR(sdWQ!FG|/l(%c+e`$IxJ6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wphealthivibe_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

define('FS_METHOD','direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

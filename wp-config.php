<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_candn');

/** MySQL database username */
define('DB_USER', 'wp_candn');

/** MySQL database password */
define('DB_PASSWORD', 'lYx21^5e');

/** MySQL hostname */
define('DB_HOST', '92.60.127.123');

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
define('AUTH_KEY',         'oz 5-eWH5h+lP3JCl;-mf;-+=.ZYU;M-j`NBro1a%^5-v+83#-Ca8$2aPJ{=aZAt');
define('SECURE_AUTH_KEY',  'ar=LS.zzlR;D#`3b5J.7<Bml6qD0gB(+ArMO)%-+!h.vb)q4b[A+sXc#C~.zpG#d');
define('LOGGED_IN_KEY',    '7yP!^vp$YNP$>?f6+0=zxDv&Gh*/-3~t7WNn-*Q*)UZ!-5rBpKFOV_sUysACr[Cp');
define('NONCE_KEY',        'LV>VIVz0uox;`{fM3tLGQ/B84$nh2wPOZg:@WGwjMcjk.|/{EJHa7%dUWuKJA|FW');
define('AUTH_SALT',        '.O|Z}4/H=HS@R+v^EapX4.h9<<J,y-*i&/CYi~r83 7J#D2`Hd#@tS8^UCNlHz/m');
define('SECURE_AUTH_SALT', '^%1KMhL$y1wYi0O&Na|IUCD;`Y~8g~O1!00~l9+-A<mr@;uXmw5bJ8UkcqKK~?.k');
define('LOGGED_IN_SALT',   '8JRK6}B,LEz:#m4Wi~:i0b8_yDL^|<of1-<^s`=FN5|tWX([9Hk]m)w+drIVx=-D');
define('NONCE_SALT',       ':=Y:?~<?+gDh{N|0yN`kXirL!Gl~eZD#$VaN*6E: we:B aYQt]ryAR%MpsPq$<2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'candn_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
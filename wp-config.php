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
define('DB_NAME', 'cop');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '303seminarian');

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
define('AUTH_KEY',         't)k,7bk>i=H^[]<{&_(&_n~2,v!FncK~p@*MK|6v=p`IW*UgY.3B7)/IDuxH:AB$');
define('SECURE_AUTH_KEY',  'nM2VnTE-|zKC^(LfLV=6jPAdOM@nPMA+-(}pJfu>cR=DkzdLsbXC%8[TMRwmys+5');
define('LOGGED_IN_KEY',    ',J[Ax4/? LZJJe*YK {%pa >QRM/]%1a:|}=-/:PXut3yHmR5z54T7,-%H!_C65h');
define('NONCE_KEY',        '7$nlrk_oEk|e0j6fBl<-G.),3`?j Ju,+R*p{|uIrpl7|N|54#+N,JeppMIy6dS@');
define('AUTH_SALT',        'H[M,|rc}hx2!+|Nq74PF3xO_(e`vQmV|43uV;Am3g31%|jk=FtQ?[6g-+y/Y{R`X');
define('SECURE_AUTH_SALT', '|N|:8h:!!_DzQrDblK/-v?WH7X]Geq0)GipDepZ-}<i`^^{-T9/0^SSHiR450~[#');
define('LOGGED_IN_SALT',   'c{__8@MkzMGi,_Z2 >~O0Q=I` .sP{Awc+=$qU&Gqja?eGV.s?UJB2+gVjqh+ls,');
define('NONCE_SALT',       'bnIFaWv<mJ_Rx1[Q~kdv#:euj67P&o6+%NTB/)Klp!~kI|:;|u+kw-?M8|!5u&-e');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

<?php
/**
 * Default config settings
 *
 * Enter any WordPress config settings that are default to all environments
 * in this file. These can then be overridden in the environment config files.
 * 
 * Please note if you add constants in this file (i.e. define statements) 
 * these cannot be overridden in environment config files.
 * 
 * @package    Studio 24 WordPress Multi-Environment Config
 * @version    1.0
 * @author     Studio 24 Ltd  <info@studio24.net>
 */
  

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
define('AUTH_KEY',         'Z}O>0i! ]Q*zz%@g6U|:W:p-1H#]a 9&!-.P6+bhMMk:c#isGH{n0a8|gW|Nqp=Z');
define('SECURE_AUTH_KEY',  'Y7#}H~vL1dh8wOrasddLR]*lboM?v#5PAk<8A}|q+-CE!F|ju4M*hQ{*qFKpm|HZ');
define('LOGGED_IN_KEY',    'H+5/cmle[EAz9jBA`.)`jLG:uG=>2;@!1BAWs:khTwFh][5e^t-?+z`zmV;j|nlG');
define('NONCE_KEY',        'tF1=-Uhy cQvl FG_DHsQ[I-wudT+(sXmC~6HL11k|Jz-7-_}cc}$+6c{p~x..1-');
define('AUTH_SALT',        '_gLeCfl+++y;=-Gag?c3dhKp|h67`|Q2>jjYrvEqg3dwpT$6wL_|j~k0bfUUG|I~');
define('SECURE_AUTH_SALT', '4dcLZ*3qeq?)I+,05+FyrTq|}N;N2}5@<D&CHIAOS91%/aES-CTku&O0YM[X=VgR');
define('LOGGED_IN_SALT',   'Fbgn<-I[*;<P<`.1*Ns>x]V:>jM25JD)6tV()fq^)`?Tvb/~-$H[pvXo{eX?I=J1');
define('NONCE_SALT',       'd:+|iu*r rMV==onC[nSreHVgh+>CS3J9R{2stus],uH<HEx(w~b|rVg{&9_T-8~');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

<?php
/**
 * Default config settings
 *
 * Enter any WordPress config settings that are default to all environments
 * in this file.
 * 
 * Please note if you add constants in this file (i.e. define statements) 
 * these cannot be overridden in environment config files so make sure these are only set once.
 * 
 * @package    Studio 24 WordPress Multi-Environment Config
 * @version    2.0.0
 * @author     Studio 24 Ltd  <hello@studio24.net>
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
define('AUTH_KEY',         '(+Qz-nvm,<i|aWzAO|!EH`EMQd_uBe_+Q{hTTNsn/3qY^pq-x+)K+=e;}uk!rB:0');
define('SECURE_AUTH_KEY',  'lZYM=P$= %;`*/9YS6$Kp7afl=9xRRD>Mqi)Kv-daea5jzoiUMssWF =wnXO4&Mk');
define('LOGGED_IN_KEY',    'DwhmOLb&4zJNv%]9*-ikvUHVA]>g9m{cLq]p]hN<uBL(uD8^)eQ%}oQ-29Ev|4$>');
define('NONCE_KEY',        '2|d&A9eURQ1g-K-|I96bAm>z-Z-keay?|@i+d;z*d|pA(CuO$<g)wImL9L8y{2O+');
define('AUTH_SALT',        '^u+z1=wQp+DYaH;UDAYN^)hsC/xQ0V;O(>O+g-H,a2Ssiv6-oVaNW0J,sj.ygqV2');
define('SECURE_AUTH_SALT', '*R[:3xb{<s<BC]2.NaxIQT7P{2a8zKuaD#t/s/G%x)q/H8*78Aw$UFvgoFdbHd9G');
define('LOGGED_IN_SALT',   '#xxK*tGmPDNMME_h@|#zy23aT/T*Cs6:yODY+S=HX^Q]/&f{W*`}sJ,kr|W2|t$B');
define('NONCE_SALT',       'n0iQUsl,dE1t3<,o:p!sNX8RXRU/|F-GDz!%A7_b~GmU*5+yjx%9~x6{|`76PwHG');

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

/**
 * Increase memory limit. 
 */
define('WP_MEMORY_LIMIT', '64M');
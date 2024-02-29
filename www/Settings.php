<?php

########## Maintenance ##########
/**
 * The maintenance "mode"
 * Set to 1 to enable Maintenance Mode, 2 to make the forum untouchable. (you'll have to make it 0 again manually!)
 * 0 is default and disables maintenance mode.
 * @var int 0, 1, 2
 * @global int $maintenance
 */
$maintenance = 0;

/**
 * Title for the Maintenance Mode message.
 * @var string
 * @global string $mtitle
 */
$mtitle = 'Maintenance Mode';

/**
 * Description of why the forum is in maintenance mode.
 * @var string
 * @global string $mmessage
 */
$mmessage = 'Okay faithful users...we\'re attempting to restore an older backup of the database...news will be posted once we\'re back!';

########## Forum Info ##########
/**
 * The name of your forum.
 * @var string
 */
$mbname = 'VG-Forum';

/**
 * The default language file set for the forum.
 * @var string
 */
$language = 'english';

/**
 * URL to your forum's folder. (without the trailing /!)
 * @var string
 */
$boardurl = 'http://localhost';

/**
 * Email address to send emails from. (like noreply@yourdomain.com.)
 * @var string
 */
$webmaster_email = 'larianscerbet@gmail.com';

/**
 * Name of the cookie to set for authentication.
 * @var string
 */
$cookiename = 'ElkArteCookie743';

########## Database Info ##########
/**
 * The database type
 * Default options: mysql, sqlite, postgresql
 * @var string
 */
$db_type = 'mysql';

/**
 * The server to connect to (or a Unix socket)
 * @var string
 */
$db_server = 'database';

/**
 * The port for the database server
 * @var string
 */
$db_port = '';

/**
 * The database name
 * @var string
 */
$db_name = 'docker';

/**
 * Database username
 * @var string
 */
$db_user = 'docker';

/**
 * Database password
 * @var string
 */
$db_passwd = 'docker';

/**
 * Database user for when connecting with SSI
 * @var string
 */
$ssi_db_user = '';

/**
 * Database password for when connecting with SSI
 * @var string
 */
$ssi_db_passwd = '';

/**
 * A prefix to put in front of your table names.
 * This helps to prevent conflicts
 * @var string
 */
$db_prefix = 'docker';

/**
 * Use a persistent database connection
 * @var int|bool
 */
$db_persist = 0;

/**
 *
 * @var int|bool
 */
$db_error_send = 0;

########## Cache Info ##########
/**
 * Select a cache system. You want to leave this up to the cache area of the admin panel for
 * proper detection of apc, eaccelerator, memcache, mmcache, output_cache, xcache or filesystem-based
 * (you can add more with a mod).
 * @var string
 */
$cache_accelerator = '';

/**
 * Cache accelerator userid, needed by some engines in order to clear the cache
 * @var string
 */
$cache_uid = '';

/**
 * Cache accelerator password for when connecting to clear the cache
 * @var string
 */
$cache_password = '';

/**
 * The level at which you would like to cache. Between 0 (off) through 3 (cache a lot).
 * @var int
 */
$cache_enable = 0;

/**
 * This is only used for memcache / memcached. Should be a string of 'server:port,server:port'
 * @var array
 */
$cache_memcached = '';

/**
 * This is only for the 'filebased' cache system. It is the path to the cache directory.
 * It is also recommended that you place this in /tmp/ if you are going to use this.
 * @var string
 */
$cachedir = '/var/www/html/cache';

########## Directories/Files ##########
# Note: These directories do not have to be changed unless you move things.
/**
 * The absolute path to the forum's folder. (not just '.'!)
 * @var string
 */
$boarddir = '/var/www/html';

/**
 * Path to the sources directory.
 * @var string
 */
$sourcedir = '/var/www/html/sources';

/**
 * Path to the external resources directory.
 * @var string
 */
$extdir = '/var/www/html/sources/ext';

/**
 * Path to the languages directory.
 * @var string
 */
$languagedir = __DIR__ . '/themes/default/languages';

$db_character_set = 'utf8';

$install_time = '1709201774';

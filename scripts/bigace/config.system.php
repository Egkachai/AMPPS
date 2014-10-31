<?php
/**
 * See config.default.php for all available settings.
 */ 

// ------------------------------ [CORE SETTINGS] ----------------------------
define ('BIGACE_TIMEZONE', 'Europe/Berlin');	 // Timezone of your server, see http://de3.php.net/timezones
define ('BIGACE_URL_REWRITE', 'false');  // De-/activates rewriten/friendly URLs
define ('BIGACE_DIR_PATH', '[[relativeurl_]]/');        // Directory of the BIGACE installation, relative from DocumentRoot. 

// ------------------------------ [DATABASE CONNECTION] ----------------------------
$_BIGACE['db']['type']                = 'mysql';	// only 'mysql' is supported currently
$_BIGACE['db']['character-set']       = 'utf8';				// if you really need to change, bestter ask in our forum before
$_BIGACE['db']['host']                = '[[softdbhost]]';	// often 'localhost' is a good idead
$_BIGACE['db']['name']                = '[[softdb]]';	// the db name 
$_BIGACE['db']['user']                = '[[softdbuser]]';	// db user name
$_BIGACE['db']['pass']                = '[[softdbpass]]';	// password for the above user
$_BIGACE['db']['prefix']              = '[[dbprefix]]';	// prefix for the table names (can be empty!)

?>
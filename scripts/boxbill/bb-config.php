<?php 

/* BoxBilling Configuration File */

/* More information on this file at http://www.boxbilling.com/docs/ */

/* Define timezone */
date_default_timezone_set('America/New_York');
/* Set default date format */
define('BB_DATE_FORMAT', 'l, d F Y');

/* Database */
define('BB_DB_NAME', '[[softdb]]');
define('BB_DB_USER', '[[softdbuser]]');
define('BB_DB_PASSWORD', '[[softdbpass]]');
define('BB_DB_HOST', '[[softdbhost]]');
define('BB_DB_TYPE', 'mysql');

/* Live site URL with trailing slash */
define('BB_URL', '[[softurl]]/');

/* BoxBilling license key */
define('BB_LICENSE', 'FREE-5RTY-POI8-0UYT-IUYT-TGH6');

/* Enable or disable warning messages */
define('BB_DEBUG', TRUE);

/* Enable or disable pretty urls. Please configure .htaccess before enabling this feature. */
define('BB_SEF_URLS', FALSE);

/* Default application locale */
define('BB_LOCALE', 'en_US');

/* Translatable locale format */
define('BB_LOCALE_DATE_FORMAT', '%A, %d %B %G');

/* Translatable time format */
define('BB_LOCALE_TIME_FORMAT', ' %T');

/* Default location to store application data. Must be protected from public. */
define('BB_PATH_DATA', dirname(__FILE__) . '/bb-data');

<?php
/*
* Get more details about configuration settings in manual:
* http://opensolution.org/Quick.Cms/docs/?id=en-requirements#5
*/
define( 'DEVELOPER_MODE', true ); // After starting your page, comment out this line
if( defined( 'DEVELOPER_MODE' ) ){
  error_reporting( E_ALL | E_STRICT );
}

unset( $config, $aMenuTypes, $aPhotoTypes, $lang );

/*
* If set to true, logged administrator will be able
* to see hidden pages (client-side)
*/
$config['hidden_shows'] = false;

/*
* Contains IP address from which logging in to admin panel is allowed
* Uncomment line below and type your IP address
*/
//$config['allowed_ip_admin_panel'] = 'TYPE-YOUR-IP-HERE';

/*
* Add time difference (in minutes) between your local time and server time
*/
$config['time_diff'] = 0;

/*
* Administrator's login and password
*/
$config['login'] = "[[admin_username]]";
$config['pass'] = "[[admin_pass]]";

/*
* Client-side default language
*/
$config['default_lang'] = "en";

/*
* Admin panel language
*/
$config['admin_lang'] = "en";

/*
* Admin's file name
*/
$config['admin_file'] = "admin.php";

/*
* CSS styles file
*/
$config['style'] = "style.css";

/*
* Current skin directory
*/
$config['skin'] = "default";

/*
* WYSIWYG editor
*/
$config['wysiwyg'] = true;

/*
* Inherit themes of subpages from their parents
*/
$config['inherit_from_parents'] = true;

/*
* Set default image size and location
*/
$config['pages_default_image_size_details'] = 1;
$config['pages_default_image_size_list'] = 1;
$config['pages_default_image_location'] = 1;

/*
* Set default subpages dispay mode
*/
$config['default_subpages_show'] = 3;

/*
* Set default menu
*/
$config['default_menu'] = 1;

/*
* If set to true, language identifier will be added to url
*/
$config['language_in_url'] = false;

/*
* Language id separator in url
*/
$config['language_separator'] = '_';

/*
* Save full descriptions to separate files
*/
$config['pages_full_description_to_file'] = false;

define( 'LANGUAGE_IN_URL', $config['language_in_url'] );
define( 'LANGUAGE_SEPARATOR', $config['language_separator'] );

$config['display_expanded_menu'] = true;
$config['change_files_names'] = false;
$config['delete_unused_files'] = true;

$config['images_sizes'] = Array( 0 => 100, 1 => 150, 2 => 200 );
$config['max_dimension_of_image'] = 900;

/*
* Allowed extensions to upload on server
*/
$config['allowed_extensions'] = 'pdf|swf|doc|txt|xls|ppt|rtf|odt|ods|odp|rar|zip|7z|bz2|tar|gz|tgz|arj|jpg|jpeg|gif|png';

/*
* Date formats
*/
$config['date_format_admin_default'] = 'Y-m-d H:i';

/*
* Should the current page name in the navigation path be a link?
* if not, set to: false
*/
$config['page_link_in_navigation_path'] = true;

/*
* Advanced elements visibility
* If you don't want them to be displayed, set to: false
*/
$config['display_advanced_options'] = true; // advanced options visibility
$config['display_thumbnail_2'] = false; // thumbnail 2 visibility

/*
* Directories
*/
$config['dir_core'] = 'core/';
$config['dir_database'] = 'database/';
$config['dir_database_pages'] = $config['dir_database'].'pages/';
$config['dir_libraries'] = $config['dir_core'].'libraries/';
$config['dir_lang'] = $config['dir_database'].'translations/';
$config['dir_templates'] = 'templates/';
$config['dir_skin'] = $config['dir_templates'].$config['skin'].'/';
$config['dir_files'] = 'files/';
$config['dir_plugins'] = 'plugins/';

require_once $config['dir_core'].'common.php';

$config['cookie_admin'] = defined( 'CUSTOMER_PAGE' ) ? null : 'A';

if( defined( 'CUSTOMER_PAGE' ) && !isset( $sLang ) && LANGUAGE_IN_URL === true )
  $sLang = getLanguageFromUrl( );

$config['change_language_to_polish'] = true;
if( !defined( 'CUSTOMER_PAGE' ) && !empty( $_SERVER['HTTP_ACCEPT_LANGUAGE'] ) && $config['change_language_to_polish'] === true && preg_match( '/pl-|pl,|^pl$/', $_SERVER['HTTP_ACCEPT_LANGUAGE'] ) ){
  if( isset( $_POST['admin_lang'] ) && strlen( $_POST['admin_lang'] ) == 2 ){
    setCookie( 'sAdminLanguage', $_POST['admin_lang'], time( ) + 86400 );
    $_COOKIE['sAdminLanguage'] = $_POST['admin_lang'];
  }
  if( $config['admin_lang']!='pl' && !isset( $_COOKIE['sAdminLanguage'] ) ){
    setCookie( 'sAdminLanguage', 'pl', time( ) + 86400 );
    $_COOKIE['sAdminLanguage'] = 'pl';
  }
  if( isset( $_COOKIE['sAdminLanguage'] ) )
    $config['admin_lang']= $_COOKIE['sAdminLanguage'];
}

if( isset( $sLang ) && is_file( $config['dir_lang'].$sLang.'.php' ) && strlen( $sLang ) == 2 ){
  setCookie( 'sLanguage'.$config['cookie_admin'], $sLang, time( ) + 86400 );
  define( 'LANGUAGE', $sLang );
}
else{
  if( !empty( $_COOKIE['sLanguage'.$config['cookie_admin']] ) && is_file( $config['dir_lang'].$_COOKIE['sLanguage'.$config['cookie_admin']].'.php' ) && strlen( $_COOKIE['sLanguage'.$config['cookie_admin']] ) == 2 )
    define( 'LANGUAGE', $_COOKIE['sLanguage'.$config['cookie_admin']] );
  else
    define( 'LANGUAGE', $config['default_lang'] );
}

require_once defined( 'CUSTOMER_PAGE' ) ? $config['dir_lang'].LANGUAGE.'.php' : ( is_file( $config['dir_lang'].$config['admin_lang'].'.php' ) ? $config['dir_lang'].$config['admin_lang'].'.php' : $config['dir_lang'].LANGUAGE.'.php' );

$aMenuTypes = Array( 1 => $lang['Menu_1'], 2 => $lang['Menu_2'] );
$aPhotoTypes = Array( 1 => $lang['Left'], 2 => $lang['Right'] );

$config['config'] = $config['dir_database'].'config/general.php';
$config['config_lang'] = $config['dir_database'].'config/lang_'.LANGUAGE.'.php';

$config_db['pages'] = $config['dir_database'].LANGUAGE.'_pages.php';
$config_db['pages_files'] = $config['dir_database'].LANGUAGE.'_pages_files.php';

$config['language'] = LANGUAGE;
$config['version'] = '5.5';

$config['last_login'] = "1410413467";
$config['before_last_login'] = "1410337409";

$config['manual_link'] = 'http://opensolution.org/Quick.Cms/docs/?id='.( ( $config['admin_lang']=='pl' ) ? 'pl' : 'en' ).'-';

$config['default_pages_template'] = "page.php";

define( 'DIR_CORE', $config['dir_core'] );
define( 'DIR_DATABASE', $config['dir_database'] );
define( 'DIR_DATABASE_PAGES', $config['dir_database_pages'] );
define( 'DIR_FILES', $config['dir_files'] );
define( 'DIR_LIBRARIES', $config['dir_libraries'] );
define( 'DIR_PLUGINS', $config['dir_plugins'] );
define( 'DIR_LANG', $config['dir_lang'] );
define( 'DIR_TEMPLATES', $config['dir_templates'] );
define( 'DIR_SKIN', $config['dir_skin'] );

define( 'DB_PAGES', $config_db['pages'] );
define( 'DB_PAGES_FILES', $config_db['pages_files'] );

define( 'DB_CONFIG', $config['config'] );
define( 'DB_CONFIG_LANG', $config['config_lang'] );
define( 'DB_FAILED_LOGS', DIR_DATABASE.'logs.txt' );

define( 'MAX_DIMENSION_OF_IMAGE', $config['max_dimension_of_image'] );
define( 'HIDDEN_SHOWS', $config['hidden_shows'] );
define( 'DISPLAY_EXPANDED_MENU', $config['display_expanded_menu'] );
define( 'WYSIWYG', $config['wysiwyg'] );
define( 'VERSION', $config['version'] );
define( 'TIME_DIFF', $config['time_diff'] );
define( 'SESSION_KEY_NAME', md5( dirname( $_SERVER['SCRIPT_FILENAME'] ) ) );

if( defined( 'DEVELOPER_MODE' ) ){
  $sValue = (float) phpversion( );
  if( $sValue < '5.2' )
    exit( '<h1>Required PHP version is <u>5.2.0</u>, your version is '.phpversion( ).'</h1>' );
  elseif( defined( 'ADMIN_PAGE' ) && ( !is_file( $config_db['pages'] ) || ( is_file( $config_db['pages'] ) && !is_writable( $config_db['pages'] ) ) ) ){
    exit( '<h1>File <u>'.$config_db['pages'].'</u> not exists or is not writable</h1>' );
  }
}
?>
#!"{$path}/php-5.3/php-cgi.exe"
<?php

//////////////////////////////////////////////////////////////
//===========================================================
// index.php
//===========================================================
// SOFTACULOUS 
// Version : 1.1
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Alons
// Date:       10th Jan 2009
// Time:       21:00 hrs
// Site:       http://www.softaculous.com/ (SOFTACULOUS)
// ----------------------------------------------------------
// Please Read the Terms of use at http://www.softaculous.com
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Inc.
//===========================================================
//////////////////////////////////////////////////////////////

@define('SOFTACULOUS', 1);
@define('SOFTADMIN', 1);//We are serving the ADMIN

$user = array();
$theme = array();

//This causes some probems
@ini_set('magic_quotes_runtime', 0);
@ini_set('magic_quotes_sybase', 0);

//Set error reporting
error_reporting(E_PARSE);

//All imp info like DB username & pass.
if(empty($globals)){
	include_once('enduser/universal.php');
}

// Debug Code
if(@$_GET['debug'] == 'died'){
	function died(){
  		 print_r(error_get_last());
	}
	register_shutdown_function('died');
}

// Is it JS files we have to give ?
if(@is_array($_GET['givejs'])){
	
	include_once($globals['mainfiles'].'/givejs.php');
	die();
	
}

//Some globals vars
include_once($globals['enduser'].'/globals.php');

//The necessary functions to run this SOFTACULOUS Software
include_once($globals['mainfiles'].'/functions.php');

// Now set the error handler for error logging. 
// We are setting this here because the callable function if defined in functions.php
ini_set('error_log', $globals['softscripts'].'/error_log.log');
set_error_handler("softerrorHandler");
register_shutdown_function('softfatalerrorHandler');

//Load the SOFTPANEL Class
if(!class_exists('softpanel')){
	include_once($globals['enduser'].'/softpanel.php');
}

$softpanel = new softpanel();

if(!defined('APP')) define('APP', 'Softaculous');

//What index are we using ?
$globals['index'] = (empty($globals['admin_index']) ? $globals['index'] : $globals['admin_index']);

//GET the Categories, Scripts and iScripts
catsnscripts();

//Load the Functions Language File - This will be from the default Lang Folder
load_lang('index');
load_lang('admin/index');

//Load the License Info - Loaded after langs loaded
loadlicense();

//Which Timezone is this PAGE ?
$globals['pgtimezone'] = (float) (empty($user['timezone']) ? $globals['timezone'] : $user['timezone']);

//ob_start('softaculous_buffer');



#~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
# SOFTACULOUS IS DISABLED USING ACL
#~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

if(!empty($globals['disabled'])){
	
	reporterror($l['disable_softaculous_t'], $l['disable_softaculous'], $l['disable_softaculous_t']);
	
}

#~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
# SOFTACULOUS RESELLER PANEL IS DISABLED
#~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

if(!empty($globals['disable_reseller_panel']) && defined('SOFTRESELLER')){
	
	reporterror($l['disable_reseller_admin_t'], $l['disable_reseller_admin'], $l['disable_reseller_admin_t']);

}

//////////////
// LETS START
//////////////

// Is it an API call ??
if(isset($_GET['api'])){
	$globals['theme_folder'] = 'api';
}

$start_time = microtime_float();//Time Stops for no one

if(empty($act)) $act = optGET('act');

switch($act){
	
	//The DEFAULT Page
	default:	
	include_once($globals['adminfiles'].'/adminindex.php');
	adminindex();
	break;
	
	//The categories
	case 'categories':
	include_once($globals['adminfiles'].'/categories.php');
	categories();
	break;
	
	//The Settings
	case 'settings':
	include_once($globals['adminfiles'].'/settings.php');
	settings();
	break;
	
	//Updates
	case 'updates':
	include_once($globals['adminfiles'].'/updates.php');
	updates();
	break;
	
	//The software stuff
	case 'softwares':
	include_once($globals['adminfiles'].'/softwares.php');
	softwares();
	break;
	
	//Email Settings
	case 'email':
	include_once($globals['adminfiles'].'/email.php');
	email();
	break;
	
	//Email Settings
	case 'proxy':
	include_once($globals['adminfiles'].'/proxy.php');
	proxy();
	break;
	
	//Maintenance Mode
	case 'maintenance':
	include_once($globals['adminfiles'].'/maintenance.php');
	maintenance();
	break;
	
	// Installations
	case 'installations':
	include_once($globals['adminfiles'].'/installations.php');
	installations();
	break;
	
	// Suggest
	case 'suggest':
	include_once($globals['adminfiles'].'/suggest.php');
	suggest();
	break;
	
	// Import
	case 'import':
	include_once($globals['adminfiles'].'/import.php');
	import();
	break;
	
	// Custom Scripts
	case 'customscripts':
	include_once($globals['adminfiles'].'/customscripts.php');
	customscripts();
	break;
	
	// updatewenuzocinfigs
	case 'webuzoconfigs':
	include_once($globals['adminfiles'] . '/webuzoconfigs.php');
	webuzoconfigs();
	break;
	
	//login
	case 'login':
	include_once($globals['mainfiles'].'/login.php');
	login();
	break;
	
	//license key
	case 'licensekey':
	include_once($globals['adminfiles'].'/licensekey.php');
	licensekey();
	break;
	
	//logout
	case 'logout':
	include_once($globals['mainfiles'].'/logout.php');
	logout();
	break;	
	
	//Plans list
	case 'plans':
	include_once($globals['adminfiles'].'/plans.php');
	plans();
	break;
	
	//Add plans  for access control
	case 'addplans':
	include_once($globals['adminfiles'].'/addplans.php');
	addplans();
	break;
	
	//Edit plans  for access control
	case 'editplans':
	include_once($globals['adminfiles'].'/editplans.php');
	editplans();
	break;
	
	//Add plans  for access control
	case 'topscripts':
	include_once($globals['adminfiles'].'/topscripts.php');
	topscripts();
	break;
	
	// Email Templates
	case 'emailtemp':
	include_once($globals['adminfiles'].'/emailtemp.php');
	emailtemp();
	break;
	
	// Email Templates
	case 'editemailtemp':
	include_once($globals['adminfiles'].'/editemailtemp.php');
	editemailtemp();
	break;
	
	// Error Logs
	case 'errorlog':
	include_once($globals['adminfiles'].'/errorlog.php');
	errorlog();
	break;
	
	// Tasklist 
	case 'tasklist':
	include_once($globals['adminfiles'].'/tasklist.php');
	tasklist();
	break;
}

//Time Stops for no one - BUT Softaculous CAN!
$end_time = microtime_float();

//Clean For XSS and Extra Slashes('\') if magic_quotes_gpc is ON 
$_GET = cleanVARS($_GET);
$_POST = cleanVARS($_POST);


///////////////////////////
// Load the theme settings
///////////////////////////

load_theme_settings($globals['theme_folder']);

//The URL for W3C Validation
$globals['ind'] = str_replace('&', '&amp;', $globals['index']);

///////////////////////////////////////
// Load the theme's headers and footers
///////////////////////////////////////

if(!empty($load_hf) && init_theme('admin/adminhf', 'Admin Headers and Footers')){
	
	//Finally the file is loaded
	if(init_theme_func(array('softheader', 
							'softfooter', 
							'error_handle', 
							'majorerror', 
							'message'), 'Headers and Footers')){
	
		$globals['hf_loaded'] = 1;
	
	}
	
}


//Are we to load any theme or just pass
if(!empty($theme['init_theme']) && empty($errormessage) 
	&& empty($messagetext) && empty($redirect) && $globals['hf_loaded']){

	//Initialize the theme
	if(init_theme($theme['init_theme'], $theme['init_theme_name'])){
	
		//Initialize the Theme function
		if(init_theme_func($theme['init_theme_func'], $theme['init_theme_name'])){
						
			call_user_func($theme['call_theme_func']);
		
		}
		
	}
	
}

////////////////////////////////////////
// Check is some error triggered before
////////////////////////////////////////

if(!empty($errormessage)){
	
	if($globals['hf_loaded']){
	
		//Call Major Error
		majorerror($errortitle ,$errormessage, $errorheading);
		
	}else{
	
		echo $errormessage;
	
	}

}

if(!empty($messagetext) && empty($errormessage)){
	
	if($globals['hf_loaded']){
	
		//Show Message
		message($messagetitle, $messageheading, $messageicon, $messagetext);
		
	}else{
	
		echo $messagetext;
	
	}

}

@ob_end_flush();

?>
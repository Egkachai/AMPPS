<?php

//////////////////////////////////////////////////////////////
//===========================================================
// upgrade.php(For individual softwares)
//===========================================================
// SOFTACULOUS 
// Version : 1.0
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

if(!defined('SOFTACULOUS')){

	die('Hacking Attempt');

}

/////////////////////////////////////////
// All functions in this PAGE must begin
// with TWO UNDERSCORE '__' to avoid 
// clashes with SOFTACULOUS Functions
// e.g. __funcname()
/////////////////////////////////////////

//////////////////////////////////////////
// Note : The path of the upgrade package 
//        is $software['path'].'/' . So to
//        access other files use 
//        $software['path'].'/other_file.ext'
//////////////////////////////////////////

// NOTE: $__settings will contain the installation information like PATH, URL. They are :
//       $__settings['ver'] - The version of the current installation
//		 $__settings['itime'] - When the software was installed
//		 $__settings['softpath'] - The current PATH
//		 $__settings['softurl'] - The URL of the software
//		 IF database was made by Softaclous
//		 $__settings['softdb'] - The Database name
//		 $__settings['softdbuser'] - Database User
//		 $__settings['softdbhost'] - Database Host
//		 $__settings['softdbpass'] - Database Password

//The Upgrade process
function __upgrade($version_from){

global $__settings, $error, $software, $softpanel, $globals, $setupcontinue;
	
	// Change the permissions
	@schmod($__settings['softpath'].'/packages/', $globals['odc']);
	@schmod($__settings['softpath'].'/updates/', $globals['odc']);
	
	// Create the folders if missing
/*	if(!sis_dir($__settings['softpath'].'/files/avatars/')){		
		@smkdir($__settings['softpath'].'/files/avatars/', $globals['odc']);
		@smkdir($__settings['softpath'].'/files/cache/', $globals['odc']);
		@smkdir($__settings['softpath'].'/files/incoming/', $globals['odc']);
		@smkdir($__settings['softpath'].'/files/thumbnails/', $globals['odc']);
		@smkdir($__settings['softpath'].'/files/trash/', $globals['odc']);
		
		//CHMOD
		@schmod($__settings['softpath'].'/files/', $globals['odc'], 1);
		
	}*/
	
/*	$auto_upgrading = sis_autoupgrading();
	
	if(!optGET('noauto')){
		// To upgrade without the UPGRADE URL
		$get = swget($__settings['softurl'].'/index.php/tools/required/upgrade?force=1');
	}
	
	// If it was sucessful dont give the Setuplocation
	if(preg_match('/Upgrade(\s*?)to(\s*?)<b>'.$software['ver'].'<\/b>(\s*?)complete!/is', $get)){
		$setupcontinue = '';
	}elseif(!empty($auto_upgrading)){
		$error[] = '{{err_auto_upgrade}}';
	}*/
	
}

//Check whether the Minimum Software configuration matches
function __requirements(){

global $__settings, $error, $software;

	//If there are some shorfalls then pass it to $error and return false
	if(sversion_compare($__settings['ver'], '5.5.2.1', '<')){
		$error[] = 'You cannot upgrade to '.$software['ver'].' unless you have upgraded to 5.5.2.1';
		return false;
	}
	
	return true;

}

?>
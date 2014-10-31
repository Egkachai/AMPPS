<?php
/******************************************************************************
 * Configuration file of Admidio
 *
 * Copyright    : (c) 2004 - 2013 The Admidio Team
 * Homepage     : http://www.admidio.org
 * License      : GNU Public License 2 http://www.gnu.org/licenses/gpl-2.0.html
 *
 *****************************************************************************/

// Select your database system for example 'mysql' or 'postgresql'
$gDbType = 'mysql';
 
// Table prefix for Admidio-Tables in database
// Example: 'adm'
$g_tbl_praefix = '[[dbprefix]]';

// Access to the database of the MySQL-Server
$g_adm_srv = '[[softdbhost]]';      // Server
$g_adm_usr = '[[softdbuser]]';        // User
$g_adm_pw  = '[[softdbpass]]';    // Password
$g_adm_db  = '[[softdb]]';    // Database

// URL to this Admidio installation 
// Example: 'http://www.admidio.org/example'
$g_root_path = '[[softurl]]';

// Short description of the organization that is running Admidio
// This short description must correspond to your input in the installation wizard !!!
// Example: 'ADMIDIO'
// Maximun of 10 characters !!!
$g_organization = '[[short_site_name]]'; 

?>
<?php

//////////////////////////////////////////////////////////////
//===========================================================
// universal.php
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

if(!defined('SOFTACULOUS')){

	die('Hacking Attempt');

}

$globals['path'] = dirname(dirname(__FILE__));
$globals['softscripts'] = dirname(dirname(dirname(__FILE__))).'/scripts';
$globals['sn'] = 'AMPPS';
$globals['cookie_name'] = 'SOFTCookies575';
$globals['gzip'] = 1;
$globals['language'] = 'english';
$globals['soft_email'] = 'admin@example.com';
$globals['from_email'] = '';
$globals['theme_folder'] = 'default';
$globals['timezone'] = 0;
$globals['mail'] = 1;
$globals['mail_server'] = '';
$globals['mail_port'] = '';
$globals['mail_user'] = '';
$globals['mail_pass'] = '';
$globals['off'] = 0;
$globals['off_subject'] = '';
$globals['off_message'] = '';
$globals['update'] = 1;
$globals['update_softs'] = 1;
$globals['add_softs'] = 1;
$globals['email_update'] = 1;
$globals['email_update_softs'] = 1;
$globals['cron_time'] = ' 1 12 * * *';
$globals['chmod_files'] = '';
$globals['chmod_dir'] = '';
$globals['is_vps'] = 0;
$globals['eu_news_off'] = 0;
$globals['eu_email_off'] = '';
$globals['random_username'] = '';
$globals['random_pass'] = '';
$globals['random_dbprefix'] = '';
$globals['off_demo_link'] = '';
$globals['off_screenshot_link'] = '';
$globals['off_rating_link'] = '';
$globals['off_review_link'] = '';
$globals['off_email_link'] = '';
$globals['logo_url'] = '';
$globals['php_bin'] = '';
$globals['chmod_conf_file'] = '';
$globals['off_sync_link'] = true;
$globals['off_panel_link'] = true;
$globals['no_prefill'] = '';
$globals['footer_link'] = '';
$globals['remote_mysql'] = '';
$globals['perl_scripts'] = '';
$globals['show_top_scripts'] = '';
$globals['append_apps'] = '';
$globals['user_mod_dir'] = '';
$globals['show_in_notice'] = '';
$globals['disable_classes'] = '';
$globals['panel_hf'] = '';
$globals['disable_backup_restore'] = '';
$globals['nolabels'] = '';
$globals['group_order'] = '';
$globals['disable_reseller_panel'] = '';
$globals['default_protocol'] = '';
$globals['network_interface'] = '';
$globals['proxy_ip'] = '';
$globals['proxy_port'] = '';
$globals['proxy_user'] = '';
$globals['proxy_pass'] = '';
$globals['proxy_check'] = '';
$globals['bandwidth_limit'] = '';
$globals['adomain_path'] = '';
$globals['empty_pass'] = '';
$globals['empty_username'] = '';
$globals['show_cscript_in_top'] = '';
$globals['pass_strength'] = '';
$globals['admin_prefix'] = '';
$globals['off_remove_mail'] = '';
$globals['off_backup_mail'] = '';
$globals['off_install_mail'] = '';
$globals['off_edit_mail'] = '';
$globals['disable_auto_backup'] = '';
$globals['bandwidth_up_limit'] = '';
$globals['webuzo_disable_username'] = '';
$globals['off_clone_mail'] = '';
$globals['disable_clone'] = '';
$globals['disable_backup_upgrade'] = '';
$globals['ephp_bin'] = '';
$globals['no_ampps'] = '';
$globals['no_strong_mysql_pass'] = '';
$globals['install_tweet_off'] = '';
$globals['install_tweet'] = '';
$globals['upgrade_tweet_off'] = '';
$globals['upgrade_tweet'] = '';
$globals['clone_tweet_off'] = '';
$globals['clone_tweet'] = '';
$globals['no_ftp_encrypted'] = '';
$globals['salt'] = '';
$globals['pre_download_all'] = '';
$globals['session_timeout'] = '';
$globals['eu_enable_themes'] = '';
$globals['auto_backup_limit'] = '';
$globals['disable_cats'] = '';
$globals['remove_dir'] = '';
$globals['remove_db'] = '';
$globals['remove_datadir'] = '';
$globals['remove_wwwdir'] = '';
$globals['custom_handler'] = '';
$globals['custom_protocol'] = '';
$globals['blank_domain'] = '';
$globals['ent_dbhost'] = '';
$globals['ent_db'] = '';
$globals['ent_dbuser'] = '';
$globals['ent_dbuserpass'] = '';
$globals['off_upgrade_plugins'] = '';
$globals['off_upgrade_themes'] = '';
$globals['eu_themes_premium'] = '';
$globals['amp_path'] = '';
$globals['amp_php'] = '';
$globals['amp_private'] = '';
$globals['amp_htdocs'] = '';

$globals['enduser'] = $globals['path'].(substr_count($globals['path'], 'directadmin') > 0 ? '/images' : '/enduser');
$globals['mainfiles'] = $globals['enduser'].'/main';
$globals['adminfiles'] = $globals['mainfiles'].'/admin';
$globals['euthemes'] = $globals['enduser'].'/themes';

?>
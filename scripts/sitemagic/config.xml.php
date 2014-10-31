<?php exit(); ?>
<?xml version="1.0" encoding="utf-8"?>
<entries>
<!-- REQUIRED, throws custom exception if missing -->
	<entry key="Username" value="[[admin_username]]"/>
<!-- REQUIRED, throws custom exception if missing -->
	<entry key="Password" value="[[admin_pass]]"/>
<!-- optional, may be left out or empty - defaults to 'en' -->
	<entry key="Language" value="[[language]]"/>
<!-- optional, may be left out or empty - defaults to empty collection -->
	<entry key="Languages" value="en;da;de"/>
<!-- optional, may be left out or empty - defaults to 'Default' -->
	<entry key="TemplatePublic" value="Travel"/>
<!-- optional, may be left out or empty - defaults to 'Default' -->
	<entry key="TemplateAdmin" value="Travel"/>
<!-- optional, may be left out or empty - defaults to False -->
	<entry key="AllowTemplateOverriding" value="False"/>
<!-- optional, may be left out or empty - no extension is loaded in this case (empty page) -->
	<entry key="DefaultExtension" value="SMPages"/>
<!-- REQUIRED, Sitemagic Framework won't execute extensions if left out or empty -->
	<entry key="ExtensionsEnabled" value="SMAnnouncements;SMConfig;SMExtensionCommon;SMFiles;SMLogin;SMMenu;SMPages"/>
<!-- optional, may be left out or empty - defaults to server setting -->
	<entry key="DefaultTimeZoneOverride" value=""/>
<!-- optional, may be left out or empty - defaults to 'Default' -->
	<entry key="ImageTheme" value="Default"/>
<!-- optional, may be left out (null) or empty -->
	<entry key="LicenseKey" value=""/>
<!-- REQUIRED, but only if using MySQL as the data source -->
	<entry key="DatabaseConnection" value="localhost;db;user;pass"/>
<!-- optional, may be left out or empty - defaults to False -->
	<entry key="Debug" value="False"/>
</entries>
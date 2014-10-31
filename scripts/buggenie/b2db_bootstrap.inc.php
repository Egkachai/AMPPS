<?php
	/**
	 * B2DB sql parameters
	 *
	 * @author Daniel Andre Eikeland <zegenie@zegeniestudios.net>
	 * @version 2.0
	 * @license http://www.opensource.org/licenses/mozilla1.1.php Mozilla Public License 1.1 (MPL 1.1)
	 * @package b2db
	 * @subpackage core
	 */

	self::setUname('[[softdbuser]]');
	self::setPasswd('[[softdbpass]]');
	self::setTablePrefix('[[dbprefix]]');

	self::setDSN('mysql:host=[[softdbhost]];dbname=[[softdb]]');


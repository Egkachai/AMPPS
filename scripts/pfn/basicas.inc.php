<?php
/****************************************************************************
* data/conf/basicas.inc.php
*
* Fichero de configuraci�nes b�sicas
*

PHPfileNavigator versi�n 2.3.3

Copyright (C) 2004-2005 Lito <lito@eordes.com>

http://phpfilenavigator.litoweb.net/

Este programa es software libre. Puede redistribuirlo y/o modificarlo bajo los
t�rminos de la Licencia P�blica General de GNU seg�n es publicada por la Free
Software Foundation, bien de la versi�n 2 de dicha Licencia o bien (seg�n su
elecci�n) de cualquier versi�n posterior.

Este programa se distribuye con la esperanza de que sea �til, pero SIN NINGUNA
GARANT�A, incluso sin la garant�a MERCANTIL impl�cita o sin garantizar la
CONVENIENCIA PARA UN PROP�SITO PARTICULAR. V�ase la Licencia P�blica General de
GNU para m�s detalles.

Deber�a haber recibido una copia de la Licencia P�blica General junto con este
programa. Si no ha sido as�, escriba a la Free Software Foundation, Inc., en
675 Mass Ave, Cambridge, MA 02139, EEUU.
*******************************************************************************/

defined('OK') or die();

// Este fichero se crea automaticamente, pero se pueden
// variar los valores almacenados si es necesario
// This file is created automatically, but you can change
// the values if it's necessary
return array(
	'clave' => '[[clave]]', // Clave de encriptaci�n / Encription key
	'version' => '233',
	'estilo' => 'estilos/pfn/',
	'idioma' => 'en', // Language
	'email' => '[[admin_email]]',
	'gd2' => true, // GD2 instalado / GD2 installed
	'zlib' => true, // ZLIB instalado / ZLIB installed
	'charset' => 'UTF-8', // Juego de caracteres / Charset
	'envio_alertas' => false, // Envio de correo alertando de intento de intrusion / Send mail notify an intrusion try access
	'db' => array( // Base de datos / Data base
		'host' => '[[softdbhost]]',
		'base_datos' => '[[softdb]]', // Nombre de la base de datos / Data base name
		'usuario' => '[[softdbuser]]', // Usuario / User
		'contrasinal' => '[[softdbpass]]', // Contrase�a / Password
		'prefixo' => '[[dbprefix]]' // Prefijo para las tablas / Table prefix
	)
);
?>
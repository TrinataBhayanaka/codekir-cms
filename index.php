<?php 
session_start();

/* define codekir version */
define ('CODEKIR', 'Version 1.0');

/* define app path */
define ('CODEKIR_ROOTPATH', 'C:/xampp/htdocs/codekir-cms/');

/* define engine path */
define ('CODEKIR_PACKAGE', 'C:/xampp/htdocs/new-codekir/loader/');

/* 
	define loader path, do not edit this path
*/
define ('CODEKIR_APPPATH', CODEKIR_ROOTPATH . 'applications/default/');
define ('CODEKIR_COREPATH', CODEKIR_PACKAGE . 'engine/');
define ('CODEKIR_LIBS', CODEKIR_PACKAGE . 'plugin/');
define ('CODEKIR_LOGS', CODEKIR_PACKAGE . 'logs/');
define ('CODEKIR_CACHE', CODEKIR_PACKAGE . 'cache/');
define ('CODEKIR_TMP', CODEKIR_PACKAGE . 'tmp/');

require_once (CODEKIR_APPPATH.'config/main.php');

?>

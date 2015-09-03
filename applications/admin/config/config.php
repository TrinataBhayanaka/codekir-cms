<?php
// defined ('TATARUANG') or exit ( 'Forbidden Access' );

define ('APP_CONTROLLER', CODEKIR_ADMINPATH .'controller/');
define ('APP_VIEW', CODEKIR_ADMINPATH .'view/');
define ('APP_MODELS', CODEKIR_ADMINPATH . 'model/');

/* Konfigurasi APP */

$CONFIG['admin']['app_server'] = TRUE;
$CONFIG['admin']['smarty_enabled'] = false;
$CONFIG['admin']['app_status'] = 'Development';
$CONFIG['admin']['app_debug'] = TRUE;
$CONFIG['admin']['app_underdevelopment'] = FAlSE;
$CONFIG['admin']['smarty_enabled'] = true;
$CONFIG['admin']['php_ext'] = '.php';
$CONFIG['admin']['html_ext'] = '.html';
$CONFIG['admin']['default_view'] = 'home';
$CONFIG['admin']['login'] = 'login';


$CONFIG['admin']['app_url'] = 'http://localhost/codekir-cms/';
$CONFIG['admin']['base_url'] = 'http://localhost/codekir-cms/applications/admin/';
$CONFIG['admin']['root_path'] = $_SERVER['DOCUMENT_ROOT'].'/codekir-cms/applications/admin';

$CONFIG['admin']['upload_path'] = $_SERVER['DOCUMENT_ROOT'].'/codekir-cms/public_assets/';

$CONFIG['admin']['upload_theme'] = $_SERVER['DOCUMENT_ROOT'].'/codekir-cms/applications/default/view/theme/';

$CONFIG['admin']['max_filesize'] = 2097152;

$CONFIG['admin']['css'] = CODEKIR_ADMINPATH.'css/';
$CONFIG['admin']['images'] = CODEKIR_ADMINPATH.'images/';
$CONFIG['admin']['js'] = CODEKIR_ADMINPATH.'js/';
$CONFIG['admin']['image'] = array('image/jpeg', 'image/pjpeg');
$basedomain = $CONFIG['admin']['base_url'];
$app_domain = $CONFIG['admin']['app_url'];
$upload_theme=$CONFIG['admin']['upload_theme'];

/* Konfigurasi DB */

$dbConfig[0]['host'] = 'localhost';
$dbConfig[0]['user'] = 'root';
$dbConfig[0]['pass'] = 'jonedganteng';
$dbConfig[0]['name'] = 'codekir_cms';
$dbConfig[0]['server'] = 'mysql';


?>

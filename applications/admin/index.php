<?php
session_start();

define ('CODEKIR_ROOTPATH', '/home/ovancop/Data/htdocs/new-codekir/');
define ('CODEKIR_APPPATH', CODEKIR_ROOTPATH . 'applications/default/');
define ('CODEKIR_ADMINPATH', CODEKIR_ROOTPATH . 'applications/admin/');
define ('CODEKIR_COREPATH', '/home/ovancop/Data/htdocs/codekir/new-codekir/loader/engine/');

define ('CODEKIR_LIBS', '/home/ovancop/Data/htdocs/codekir/new-codekir/loader/plugin/');
define ('CODEKIR_LOGS', '/home/ovancop/Data/htdocs/codekir/new-codekir/loader/logs/');
define ('CODEKIR_CACHE', '/home/ovancop/Data/htdocs/codekir/new-codekir/loader/cache/');
define ('CODEKIR_TMP', '/home/ovancop/Data/htdocs/codekir/new-codekir/loader/tmp/');

require_once (CODEKIR_COREPATH.'admin-system.php');


?>

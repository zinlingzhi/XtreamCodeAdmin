<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

require (IPTV_ROOT_PATH . 'second_init.php');

define('IPTV_CLIENT_AREA_TEMPLATES_PATH', IPTV_CLIENT_AREA . '/templates/');

define('MAIN_DIR', '/home/xtreamcodes/');
define('IPTV_ROOT_PATH', str_replace('\\', '/', dirname(__FILE__)) . '/');

define('IPTV_CLIENT_AREA', IPTV_ROOT_PATH . 'client_area/');
error_reporting(0);
define('IPTV_INCLUDES_PATH', IPTV_ROOT_PATH . 'includes' . '/');
define('IPTV_TEMPLATES_PATH', IPTV_ROOT_PATH . 'templates' . '/');

?> 

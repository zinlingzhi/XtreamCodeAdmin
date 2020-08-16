<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

require (IPTV_TEMPLATES_PATH . '/' . 'footer.php');
$c83b7d347a6bc7f5f0e3313147e88ecc->Fa7E9FB747dD7976Dd94ea27fA865B5D();
$a809a096f17b98dbf6ee2d6fa111382a = A6A5e389146d8F8353e78DA42b5eacb9('panel_logs');

require (IPTV_TEMPLATES_PATH . '/' . 'header_admin.php');

session_start();

if ($c83b7d347a6bc7f5f0e3313147e88ecc->CB674E1C9Bbdb0E29AD2a7a35964AE35()) {
}

$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['no_logs'];

$b8980526936694b2cd4cf6c7f8c80396 = B8A6eA05eEBC7E2e3503eA794B1a1Ee4::$request['action'];

exit(0);

header('Location: ../index.php?error=NO_ADMIN');

require ('../init.php');
require (IPTV_TEMPLATES_PATH . '/' . '/admin/' . 'panel_error_log.php');
unset(B8a6ea05EEbC7e2e3503ea794B1A1Ee4::$request['action']);

?> 

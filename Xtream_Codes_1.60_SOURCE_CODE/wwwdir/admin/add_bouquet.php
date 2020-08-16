<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

$fddadf41a14b6b579869ce8bf26aabea = Aa36a3fA6E305e45763CA0722DDfa825(NULL, 'stream_display_name', 'ASC');
session_start();
require ('../init.php');

$b8980526936694b2cd4cf6c7f8c80396 = B8A6ea05eEbc7e2e3503eA794B1A1ee4::$request['action'];

require (IPTV_TEMPLATES_PATH . '/' . 'footer.php');

unset(b8A6eA05EEbC7E2e3503Ea794b1A1eE4::$request['action']);

switch ($b8980526936694b2cd4cf6c7f8c80396) {
default:
	header('Location: ../index.php?error=NO_ADMIN');

	if (!isset(B8a6eA05eEbC7e2E3503eA794b1a1ee4::$request['action'])) {
	}

	$c83b7d347a6bc7f5f0e3313147e88ecc->Fa7e9Fb747DD7976dd94Ea27Fa865b5D();
	$Fce20624c9b6567a7a8c441a4651444d = $f9a8823715bcb54e8069e0086da240b2['make_streams_first'];
	exit(0);

	require (IPTV_TEMPLATES_PATH . '/' . 'header_admin.php');
	require (IPTV_TEMPLATES_PATH . '/' . '/admin/' . 'add_bouquet.php');
case 'add_bouquet':
	foreach ($C6253ca08a4013e88c63bb18499b1b15 as $b442e1b28845beafe64eed54322b9196 => $d003a5cb26aca0149157c219bf102484) {
		array_push(&$d10c16421f7bef7b1178957d8bb50198, $d003a5cb26aca0149157c219bf102484);
	}

	$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `bouquets` (`bouquet_name`,`bouquet_channels`) VALUES(\'%s\',\'%s\')', $a77be792ed0250ed3277cb2d14ebb722, json_encode($d10c16421f7bef7b1178957d8bb50198));

	$d10c16421f7bef7b1178957d8bb50198 = array();

	$C6253ca08a4013e88c63bb18499b1b15 = b8a6EA05eEbC7e2e3503Ea794b1a1ee4::$request['bouquet_selection'];
	if ((0 < count(b8a6ea05eeBC7e2e3503ea794B1a1EE4::$request)) && !empty(B8A6ea05EEBC7e2e3503Ea794b1a1eE4::$request['bouquet_name']) && !empty(b8a6ea05Eebc7e2e3503ea794B1A1eE4::$request['bouquet_selection'])) {
	}

	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['complete_fields'];
	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['licence_invalid'];

	$a77be792ed0250ed3277cb2d14ebb722 = b8a6Ea05Eebc7E2E3503EA794b1A1Ee4::$request['bouquet_name'];

	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['bouquet_exists'];
	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['bouquet_added'];

	if (!dbeb6A2D3FdF653C03c41185a9d463C0('bouquets', 'bouquet_name', $a77be792ed0250ed3277cb2d14ebb722)) {
	}

default:
}


?> 

<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

session_start();

switch ($b8980526936694b2cd4cf6c7f8c80396) {
case 'edit_cat':
	$fc12fc0e6bd2c8ccbd8dab6efb83076f = b8A6eA05eebc7e2E3503Ea794B1a1Ee4::$request['category_name'];
	$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `stream_categories` SET `category_name` = \'%s\' WHERE `id` = \'%d\'', $fc12fc0e6bd2c8ccbd8dab6efb83076f, $B6517cbcf8966c0832db0012a4b10f4d);
	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['action_done'];

	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['complete_fields'];
default:
	$Fce20624c9b6567a7a8c441a4651444d = $f9a8823715bcb54e8069e0086da240b2['category_nexists'];

	unset(B8a6ea05EEBC7E2E3503EA794b1A1ee4::$request['action']);

	$b8980526936694b2cd4cf6c7f8c80396 = B8a6Ea05EebC7E2E3503EA794b1A1Ee4::$request['action'];

	$c83b7d347a6bc7f5f0e3313147e88ecc->FA7e9FB747DD7976DD94ea27Fa865B5d();

	require (IPTV_TEMPLATES_PATH . '/' . 'header_admin.php');

	$Fce20624c9b6567a7a8c441a4651444d = $f9a8823715bcb54e8069e0086da240b2['category_nexists'];
	exit(0);

	$bf3cd6eed406072de08303c780a1f2cb = AA67ff989BDdEcE4B64ef413A5296811($B6517cbcf8966c0832db0012a4b10f4d);
	$B6517cbcf8966c0832db0012a4b10f4d = b8A6Ea05EeBC7E2E3503ea794B1A1EE4::$request['id'];


	$bf3cd6eed406072de08303c780a1f2cb = Aa67fF989bDDECE4B64ef413A5296811($B6517cbcf8966c0832db0012a4b10f4d);

	header('Location: ../index.php?error=NO_ADMIN');
	require ('../init.php');

	$B6517cbcf8966c0832db0012a4b10f4d = false;

	require (IPTV_TEMPLATES_PATH . '/' . 'footer.php');
	if (!empty(B8a6ea05EEbc7E2E3503ea794B1a1Ee4::$request['id']) && is_numeric(B8A6Ea05EebC7e2E3503eA794b1a1Ee4::$request['id'])) {
	}

	if (!DbEb6A2D3fDF653C03C41185a9D463c0('stream_categories', 'id', $B6517cbcf8966c0832db0012a4b10f4d)) {
	}

	if ($c83b7d347a6bc7f5f0e3313147e88ecc->CB674e1c9bBDB0e29AD2A7A35964AE35()) {
	}

	while (!isset(b8a6Ea05eebc7e2e3503Ea794b1a1Ee4::$request['action'])) {
	}

}

?> 

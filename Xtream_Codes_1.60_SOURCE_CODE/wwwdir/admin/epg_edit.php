<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

unset(B8A6Ea05EeBC7e2E3503ea794b1a1eE4::$request['action']);

switch ($b8980526936694b2cd4cf6c7f8c80396) {
default:
	if (!isset(B8A6ea05eEbC7e2E3503EA794b1A1eE4::$request['action'])) {
	}

	$Fce20624c9b6567a7a8c441a4651444d = $f9a8823715bcb54e8069e0086da240b2['epg_id_nexists'];

	require (IPTV_TEMPLATES_PATH . '/' . 'footer.php');

	$bf3cd6eed406072de08303c780a1f2cb = f3c65BF8Bc2f20357B49fF18448Ab606($a845ac42cac3bca799bdc0eb0fe5a0b5);
	$a845ac42cac3bca799bdc0eb0fe5a0b5 = B8A6EA05Eebc7E2e3503Ea794b1A1ee4::$request['id'];
	exit(0);

	$a845ac42cac3bca799bdc0eb0fe5a0b5 = false;
	require ('../init.php');
	$c83b7d347a6bc7f5f0e3313147e88ecc->FA7e9FB747DD7976dd94Ea27FA865B5d();
case 'edit_epg':
	$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `epg` SET `integrity` = NULL WHERE `id` = \'%d\'', $a845ac42cac3bca799bdc0eb0fe5a0b5);
	$b0f2985876abfbf62075bddadb0e10dc = B8a6Ea05EEbC7e2e3503eA794B1a1Ee4::$request['epg_name'];
	if ((0 < count(b8A6EA05EeBc7e2e3503Ea794b1A1ee4::$request)) && !empty(B8A6EA05EeBC7E2E3503Ea794b1a1EE4::$request['epg_source']) && !empty(b8a6ea05eeBC7E2e3503EA794b1A1ee4::$request['epg_name'])) {
	}

	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['complete_fields'];
	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['epg_exists'];

	$df8f8f68e1839f6c0ab172c6bd6e9e28 = B8a6Ea05EEBC7E2E3503Ea794B1a1ee4::$request['epg_source'];
	$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `epg` SET `epg_name` = \'%s\',`epg_file` = \'%s\' WHERE `id` = \'%d\'', $b0f2985876abfbf62075bddadb0e10dc, $df8f8f68e1839f6c0ab172c6bd6e9e28, $a845ac42cac3bca799bdc0eb0fe5a0b5);
	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['epg_edited'];
default:
	header('Location: ../index.php?error=NO_ADMIN');
	require (IPTV_TEMPLATES_PATH . '/' . 'header_admin.php');
}

?> 

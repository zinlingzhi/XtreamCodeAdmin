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

require (IPTV_TEMPLATES_PATH . '/' . 'header_admin.php');

unset(b8a6eA05eEbc7e2e3503ea794b1a1ee4::$request['action']);

switch ($b8980526936694b2cd4cf6c7f8c80396) {
default:
	require ('../init.php');
	require (IPTV_TEMPLATES_PATH . '/' . 'footer.php');

	exit(0);
	$b8980526936694b2cd4cf6c7f8c80396 = b8A6ea05EeBC7e2e3503EA794B1A1eE4::$request['action'];

	$cdbed4b98ae3b7fffd90a40205ff47fe = A912Bf58e557078Ea9d74F24C45DE89F();
	require (IPTV_TEMPLATES_PATH . '/' . '/admin/' . 'epg.php');

	$c83b7d347a6bc7f5f0e3313147e88ecc->fa7e9FB747dD7976DD94ea27fA865B5D();
	header('Location: ../index.php?error=NO_ADMIN');
case 'add':
	$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO epg (`epg_name`,`epg_file`) VALUES(\'%s\',\'%s\')', $b0f2985876abfbf62075bddadb0e10dc, urldecode($df8f8f68e1839f6c0ab172c6bd6e9e28));

	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['not_valid_epg'];

	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['error_epg_exists'];
	$b0f2985876abfbf62075bddadb0e10dc = b8A6EA05EEBC7E2e3503ea794b1A1ee4::$request['epg_name'];

	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['epg_imported'];
	$df8f8f68e1839f6c0ab172c6bd6e9e28 = b8a6EA05eeBc7e2E3503Ea794b1a1Ee4::$request['epg_source'];
	if (!(!empty(b8a6ea05EeBC7e2E3503EA794B1A1EE4::$request['epg_name']) && !empty(b8a6EA05EeBC7E2e3503eA794b1a1ee4::$request['epg_source']))) {
	}

	if ($e9d3300cfa27b4641b8adf75fff5e4a9->validEpg) {
	}

	if (!dBEB6a2d3fDF653c03c41185a9D463c0('epg', 'epg_name', $b0f2985876abfbf62075bddadb0e10dc) && !dbeb6A2D3fdf653c03C41185A9D463C0('epg', 'epg_file', $df8f8f68e1839f6c0ab172c6bd6e9e28)) {
	}

	$e9d3300cfa27b4641b8adf75fff5e4a9 = new fcAA74214e9E33ED3F81dd59834baB88($df8f8f68e1839f6c0ab172c6bd6e9e28, false);
case 'delete':
	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['action_done'];
	$D29f3c5494cb370b46f3e907dc61f106->query('DELETE FROM epg_data WHERE `epg_id` = \'%d\'', $a845ac42cac3bca799bdc0eb0fe5a0b5);
	$a845ac42cac3bca799bdc0eb0fe5a0b5 = intval(B8A6Ea05EEBC7e2E3503eA794b1a1eE4::$request['id']);
	$D29f3c5494cb370b46f3e907dc61f106->query('DELETE FROM epg WHERE `id` = \'%d\'', $a845ac42cac3bca799bdc0eb0fe5a0b5);
case 'force':
	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['epg_force_reload'];

	$a845ac42cac3bca799bdc0eb0fe5a0b5 = intval(B8a6EA05EEbc7e2E3503EA794b1A1ee4::$request['id']);

	shell_exec(PHP_BIN . ' ' . CRON_PATH . 'epg_checking.php');

	$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `epg` SET `integrity` = NULL WHERE `id` = \'%d\'', $a845ac42cac3bca799bdc0eb0fe5a0b5);

	$D29f3c5494cb370b46f3e907dc61f106->query('DELETE FROM epg_data WHERE `epg_id` = \'%d\'', $a845ac42cac3bca799bdc0eb0fe5a0b5);

	if (empty(B8a6eA05EebC7e2E3503eA794b1a1EE4::$request['id'])) {
	}

}

?> 

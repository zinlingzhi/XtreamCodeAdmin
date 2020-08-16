<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

switch ($b8980526936694b2cd4cf6c7f8c80396) {
case 'add':
	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['category_added'];

	$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `stream_categories` (`category_type`,`category_name`) VALUES(\'%s\',\'%s\')', $Bd39d5499b421cab86ecd71366ecb199, $fc12fc0e6bd2c8ccbd8dab6efb83076f);
	$fc12fc0e6bd2c8ccbd8dab6efb83076f = b8a6ea05EEbc7E2E3503ea794b1A1EE4::$request['category_name'];
	$Bd39d5499b421cab86ecd71366ecb199 = b8A6EA05Eebc7E2e3503EA794B1a1Ee4::$request['category_type'];
	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['category_exists'];
case 'delete':
	$Df1ed0c24afddf3f97f29d7c950a45ef = intval(B8A6eA05eebc7E2E3503EA794b1A1EE4::$request['id']);
	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['category_deleted'];

	$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `streams` SET `category_id` = NULL WHERE `category_id` = \'%d\'', $Df1ed0c24afddf3f97f29d7c950a45ef);
	$D29f3c5494cb370b46f3e907dc61f106->query('DELETE FROM `stream_categories` WHERE `id` = \'%d\'', $Df1ed0c24afddf3f97f29d7c950a45ef);
default:
	$c83b7d347a6bc7f5f0e3313147e88ecc->FA7e9fb747dd7976dd94EA27fA865B5d();

	require (IPTV_TEMPLATES_PATH . '/' . 'header_admin.php');

	$ec2d9106046948d5bd4541355199b985 = f6Acbdf515C1E5f84C3209C7fAa09641();
	require (IPTV_TEMPLATES_PATH . '/' . '/admin/' . 'categories.php');
	session_start();

	header('Location: ../index.php?error=NO_ADMIN');

	unset(b8a6eA05eEBc7e2E3503eA794B1A1ee4::$request['action']);
default:
	if (!isset(b8A6ea05eebc7e2e3503ea794B1A1ee4::$request['action'])) {
	}

	$b8980526936694b2cd4cf6c7f8c80396 = b8A6eA05EebC7E2E3503ea794B1a1EE4::$request['action'];
	require ('../init.php');
	exit(0);
}

?> 

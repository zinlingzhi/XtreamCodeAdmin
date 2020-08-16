<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

unset(b8a6eA05eEBC7E2E3503Ea794B1a1Ee4::$request['action']);

switch ($b8980526936694b2cd4cf6c7f8c80396) {
default:
	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['licence_invalid1'];


	session_start();

	require (IPTV_TEMPLATES_PATH . '/' . 'footer.php');
	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['licence_valid'];

	require ('../init.php');
	$b8980526936694b2cd4cf6c7f8c80396 = b8a6Ea05eeBC7e2E3503EA794B1A1ee4::$request['action'];

	require (IPTV_TEMPLATES_PATH . '/' . 'header_admin.php');

	header('Location: ../index.php?error=NO_ADMIN');
	$c83b7d347a6bc7f5f0e3313147e88ecc->Fa7e9Fb747DD7976dd94Ea27Fa865B5d();
case 'save':
	B8A6eA05EebC7E2e3503Ea794b1a1Ee4::f9970d1b79eA530c074e7C0690E06Ac1();

	a8379BE1602eFA9914014c89C86769Ba();

	$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `licence` SET `licence_key` = \'%s\' WHERE `id` = 1', $Ce2772893badc7ddd61aa956ddbaa252);

	$Ce2772893badc7ddd61aa956ddbaa252 = b8A6EA05eebc7E2E3503EA794B1a1ee4::$request['licence_key'];

	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['licence_changed'];

	while (!isset(b8A6EA05eebC7E2E3503ea794b1A1Ee4::$request['licence_key'])) {
	}

}

?> 

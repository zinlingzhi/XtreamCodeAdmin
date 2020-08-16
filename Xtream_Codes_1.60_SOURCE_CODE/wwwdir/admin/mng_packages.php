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
require ('../init.php');

$a92088ce51f93854fd7819a3b5f2dee4 = e1513D5f7770aa42d0333EC46957a419();

switch ($b8980526936694b2cd4cf6c7f8c80396) {
case 'del_package':
	$e27eaafd53aca98f32c2b81a06c4d083 = intval(B8A6EA05eEbc7E2E3503eA794b1a1Ee4::$request['id']);

	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['package_deleted'];

	if (empty(b8A6ea05EebC7E2e3503ea794B1A1ee4::$request['id'])) {
	}

	$D29f3c5494cb370b46f3e907dc61f106->query('DELETE FROM `packages` WHERE `id` = \'%d\'', $e27eaafd53aca98f32c2b81a06c4d083);
default:
	unset(b8A6EA05EEBC7E2E3503eA794b1a1eE4::$request['action']);

	$Fce20624c9b6567a7a8c441a4651444d = $f9a8823715bcb54e8069e0086da240b2['create_packages_first'];
	exit(0);

	$b8980526936694b2cd4cf6c7f8c80396 = b8a6eA05eeBc7e2e3503eA794b1a1Ee4::$request['action'];
default:
default:
	require (IPTV_TEMPLATES_PATH . '/' . 'header_admin.php');
}

?> 

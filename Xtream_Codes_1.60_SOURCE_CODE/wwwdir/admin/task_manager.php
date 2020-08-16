<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

require ('../init.php');

require (IPTV_TEMPLATES_PATH . '/' . '/admin/' . 'task_manager.php');

require (IPTV_TEMPLATES_PATH . '/' . 'footer.php');
$Da3bbf2d1a44eaa1526cc09443349225 = e3956fe40CbbDD1A79Bf51554e89776a();

if (!isset(B8A6EA05EEBc7E2e3503EA794b1a1Ee4::$request['action'])) {
}

session_start();

require (IPTV_TEMPLATES_PATH . '/' . 'header_admin.php');

exit(0);

unset(b8a6eA05EEbc7e2e3503eA794B1a1Ee4::$request['action']);

header('Location: ../index.php?error=NO_ADMIN');
$c83b7d347a6bc7f5f0e3313147e88ecc->Fa7e9FB747dd7976Dd94EA27FA865b5D();
switch ($b8980526936694b2cd4cf6c7f8c80396) {
case 'enable':
	$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `cronjobs` SET `enabled` = 1 WHERE id = \'%d\' ', B8a6EA05EEbc7E2e3503EA794b1a1EE4::$request['id']);

	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['task_enabled'];
	b51Dbc9c3DbE2ce92FC1290A66383077();
case 'disable':
	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['task_disabled'];
	$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `cronjobs` SET `enabled` = 0 WHERE id = \'%d\' ', b8a6Ea05eeBC7e2E3503EA794b1a1Ee4::$request['id']);
	b51dbC9c3DbE2ce92Fc1290a66383077();

	if (empty(b8A6Ea05eEBc7E2e3503EA794b1A1ee4::$request['id'])) {
	}

}

$b8980526936694b2cd4cf6c7f8c80396 = b8A6eA05eebC7E2E3503EA794B1a1EE4::$request['action'];

?> 

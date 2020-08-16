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

unset(b8a6ea05eEbc7e2e3503EA794B1a1EE4::$request['action']);

switch ($b8980526936694b2cd4cf6c7f8c80396) {
default:
	if ($c83b7d347a6bc7f5f0e3313147e88ecc->CB674E1C9bBDb0e29ad2A7A35964AE35()) {
	}

	require (IPTV_TEMPLATES_PATH . '/' . 'header_admin.php');

	require (IPTV_TEMPLATES_PATH . '/' . 'footer.php');
case 'save':
	B8a6EA05EEbc7e2e3503ea794b1A1ee4::d15261B4aaaa204d291dB5168EE0E2DF();

	foreach (b8a6Ea05Eebc7E2E3503ea794b1a1eE4::$request as $b442e1b28845beafe64eed54322b9196 => $A6e9ac78eba7b3a60aea85d3e5435265) {
		$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `settings` SET `%s` = \'%s\' WHERE `id` = 1', $b442e1b28845beafe64eed54322b9196, $A6e9ac78eba7b3a60aea85d3e5435265);
	}

	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['action_done'];

	while (empty(b8A6ea05EEBC7E2E3503EA794b1a1ee4::$request)) {
	}

default:
	header('Location: ../index.php?error=NO_ADMIN');
	exit(0);
	session_start();
	$c83b7d347a6bc7f5f0e3313147e88ecc->fa7e9fB747dD7976dd94eA27Fa865B5d();
default:
	$b8980526936694b2cd4cf6c7f8c80396 = B8a6Ea05eEbC7E2E3503Ea794b1A1EE4::$request['action'];
default:
}

?> 

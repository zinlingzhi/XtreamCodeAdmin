<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

$fddadf41a14b6b579869ce8bf26aabea = aA36a3Fa6E305E45763cA0722dDFa825(NULL, 'order', 'ASC');

header('Location: ../index.php?error=NO_ADMIN');

switch ($b8980526936694b2cd4cf6c7f8c80396) {
case 'delete':
	$D29f3c5494cb370b46f3e907dc61f106->query('DELETE FROM `streams` WHERE `id` IN (' . implode(',', $fddadf41a14b6b579869ce8bf26aabea) . ')');

	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['action_done'];

	$fddadf41a14b6b579869ce8bf26aabea = array_values(array_unique(array_map('intval', array_merge($C2551aaff35dcc5b42d86f0ed71889e6, $Eb2fd3c461596d1e773a8bfd1e7ebc58))));
	$Eb2fd3c461596d1e773a8bfd1e7ebc58 = $be58326e6fad600893a1f71a272f09b2 = (!empty(b8a6ea05eeBC7E2E3503EA794b1A1ee4::$request['vod']) && is_array(B8A6ea05EeBc7e2E3503EA794B1A1eE4::$request['vod']) ? b8a6eA05eEbc7e2E3503eA794B1A1eE4::$request['vod'] : array());
	$C2551aaff35dcc5b42d86f0ed71889e6 = (!empty(b8a6Ea05eEBc7e2e3503ea794B1a1Ee4::$request['live']) && is_array(b8a6Ea05eEbC7E2E3503ea794B1a1ee4::$request['live']) ? b8a6EA05EeBC7E2e3503eA794b1a1eE4::$request['live'] : array());

	foreach ($fddadf41a14b6b579869ce8bf26aabea as $fe6d74fc2aef3103f2d8d34d9ac82807) {
		$A934a6c7d4ad84fdfac71e31ed85cba5->c2202DdC676431fcdc5FDB8C1Df6AA6A();
		$A934a6c7d4ad84fdfac71e31ed85cba5 = new ef4BC8281856e815AbeFA11052Cad2c6($fe6d74fc2aef3103f2d8d34d9ac82807);
	}

	$D29f3c5494cb370b46f3e907dc61f106->query('DELETE FROM `streams_sys` WHERE `stream_id` IN (' . implode(',', $fddadf41a14b6b579869ce8bf26aabea) . ')');
case 'update':
	$D6cc74b0166440ae660eb91330b40c5d = 0;
	foreach (b8a6ea05EeBC7E2E3503ea794b1a1eE4::$request['vod_order_selection'] as $d003a5cb26aca0149157c219bf102484) {
		$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `streams` SET `order` = \'%d\' WHERE `id` = \'%d\'', $D6cc74b0166440ae660eb91330b40c5d++, $d003a5cb26aca0149157c219bf102484);
	}

	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['action_done'];
	foreach (b8a6ea05eeBC7e2e3503Ea794B1A1ee4::$request['stream_order_selection'] as $d003a5cb26aca0149157c219bf102484) {
		$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `streams` SET `order` = \'%d\' WHERE `id` = \'%d\'', $D6cc74b0166440ae660eb91330b40c5d++, $d003a5cb26aca0149157c219bf102484);
	}

default:
	$c83b7d347a6bc7f5f0e3313147e88ecc->Fa7e9fB747DD7976dD94Ea27Fa865B5D();

	$b8980526936694b2cd4cf6c7f8c80396 = b8A6Ea05EeBC7e2e3503EA794B1A1Ee4::$request['action'];

	while (!isset(b8A6Ea05eEbc7E2e3503eA794b1a1Ee4::$request['action'])) {
		exit(0);

		session_start();
		unset(B8a6ea05eEBC7e2e3503eA794B1a1Ee4::$request['action']);
	}

	require (IPTV_TEMPLATES_PATH . '/' . 'footer.php');
}

?> 

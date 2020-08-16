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

$e18e799ca1b7becd957ad9b71f9cf17f = b8A6eA05eEbc7E2e3503EA794b1a1ee4::$request['show'];

header('Location: ../index.php?error=NO_ADMIN');


unset(b8A6eA05EebC7E2e3503eA794b1a1ee4::$request['action']);

switch ($b8980526936694b2cd4cf6c7f8c80396) {
default:
	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['no_regusers_found'];
	exit(0);

	$e18e799ca1b7becd957ad9b71f9cf17f = 'show_all';

	$c83b7d347a6bc7f5f0e3313147e88ecc->fa7E9fb747Dd7976dd94eA27fA865b5D();
	if (!empty($Ab3a8d55cf30f547f0cd260e8a12821a)) {
	}

	if (!in_array(b8A6EA05EebC7E2E3503EA794b1A1EE4::$request['show'], $E8d64ee8b9a3b7f11e2caf01cb0004e2)) {
	}

	session_start();
case 'user_delete':
	$D29f3c5494cb370b46f3e907dc61f106->query('DELETE FROM `users` WHERE `member_id` = \'%d\'', $fd7f2f8cde8b865243a388c219894e64);

	$fd7f2f8cde8b865243a388c219894e64 = intval(B8A6Ea05EEbC7E2e3503EA794b1A1ee4::$request['user_id']);
	$D29f3c5494cb370b46f3e907dc61f106->query('DELETE FROM `reg_users` WHERE `id` = \'%d\'', $fd7f2f8cde8b865243a388c219894e64);

	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['userlines_deleted'];
case 'enable_lines':
	$fd7f2f8cde8b865243a388c219894e64 = intval(b8a6ea05EeBC7E2e3503eA794B1a1Ee4::$request['id']);
	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['reg_user_enabled_lines'];

	$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `users` SET `admin_enabled` = 1 WHERE `member_id` = \'%d\'', $fd7f2f8cde8b865243a388c219894e64);
case 'disable_lines':
	$D904944273e906f25a0a7d9fe2768058 = B8A6eA05eeBc7e2E3503ea794B1a1eE4::e17E6F21a4ad2f2D81D20a77Daf7B48a($D29f3c5494cb370b46f3e907dc61f106->b865b38EB81f98B969E0ac143F701035());

	$fd7f2f8cde8b865243a388c219894e64 = intval(b8A6ea05eEBC7E2E3503Ea794b1A1ee4::$request['id']);

	if (!(0 < $D29f3c5494cb370b46f3e907dc61f106->B068a09B89fC39AD0B9AFCF85F0F1a18())) {
	}

	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['reg_user_disabled_lines'];

	foreach ($D904944273e906f25a0a7d9fe2768058 as $C7218e7229f904c771cb711b7d1e14d0) {
		dfA6500B681F783bbBCB94474366BB27::e0822b2F27741024e85A94F93aDc3823($C7218e7229f904c771cb711b7d1e14d0);
	}

	while (empty(B8a6EA05EEBc7e2e3503ea794B1a1EE4::$request['id'])) {
	}

	$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `users` SET `admin_enabled` = 0 WHERE `member_id` = \'%d\'', $fd7f2f8cde8b865243a388c219894e64);
	$D29f3c5494cb370b46f3e907dc61f106->query('SELECT `id` FROM `users` WHERE `member_id` = \'%d\'', $fd7f2f8cde8b865243a388c219894e64);
case 'admin_enabled':
	$fd7f2f8cde8b865243a388c219894e64 = intval(b8a6eA05EEbC7e2e3503EA794b1a1eE4::$request['user_id']);

	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['enabled'];

	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['disabled'];
	$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `reg_users` SET `status` = 0 WHERE `id` = \'%d\'', $fd7f2f8cde8b865243a388c219894e64);

	$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `reg_users` SET `status` = 1 WHERE `id` = \'%d\'', $fd7f2f8cde8b865243a388c219894e64);
	if (!(isset(b8a6eA05EeBc7E2E3503Ea794B1A1ee4::$request['current']) && isset(b8a6Ea05Eebc7e2E3503EA794B1A1ee4::$request['user_id']))) {
	}

default:
	$E8d64ee8b9a3b7f11e2caf01cb0004e2 = array('restreamers', 'streamers', 'show_all');
	require (IPTV_TEMPLATES_PATH . '/' . '/admin/' . 'mng_regusers.php');

	$b8980526936694b2cd4cf6c7f8c80396 = B8A6ea05eebC7e2E3503ea794b1a1eE4::$request['action'];
	require (IPTV_TEMPLATES_PATH . '/' . 'footer.php');

	require (IPTV_TEMPLATES_PATH . '/' . 'header_admin.php');
}

?> 

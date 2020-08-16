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

exit(0);

$fd7f2f8cde8b865243a388c219894e64 = B8A6eA05Eebc7E2e3503ea794b1a1EE4::$request['user_id'];
require (IPTV_TEMPLATES_PATH . '/' . 'footer.php');

$bf3cd6eed406072de08303c780a1f2cb = E6758AAB92235B37E749F4943476CD2C($fd7f2f8cde8b865243a388c219894e64);

unset(B8A6eA05eEBc7e2E3503Ea794B1a1EE4::$request['action']);

switch ($b8980526936694b2cd4cf6c7f8c80396) {
default:
	$Fce20624c9b6567a7a8c441a4651444d = $f9a8823715bcb54e8069e0086da240b2['user_id_nexists'];

	$b73d24f79f1cbc21896642963be4f2e3 = d302c02bBa3ca2E1B1e6eCE4be7b8E35();
case 'edit_user':
	$E3d811e105c72504e87765094fe7907d = (empty(b8A6ea05eeBc7e2e3503ea794b1A1Ee4::$request['credits']) ? 0 : (double) b8A6eA05eeBC7e2E3503EA794B1A1EE4::$request['credits']);

	$D77af068b5dcf27a4945e91c2df88d68 = B8A6Ea05EEBC7e2e3503Ea794b1a1ee4::$request['notes'];

	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['email_in_use'];

	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['group_not_exists'];

	$Da011610bc5bfd51c44b849d7512d155 = B8a6eA05EeBC7e2e3503eA794b1A1eE4::$request['email'];

	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['licence_invalid'];

	$c4808fcc276f40303a686da1c502fca5 = intval(b8a6eA05EEbc7E2E3503ea794B1A1ee4::$request['member_group_id']);

	$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `reg_users` SET `username` = \'%s\',' . "\n" . '                                                                                 `email` = \'%s\',' . "\n" . '                                                                                 `member_group_id` = \'%d\',' . "\n" . '                                                                                 `credits` = \'%.2f\',' . "\n" . '                                                                                 `notes` = \'%s\',' . "\n" . '                                                                                 `default_lang` = \'%s\'' . "\n" . '                                                                                 WHERE `id` = \'%d\'', $C2aaac60d16a3fe3b99fcb0176fbe5d7, $Da011610bc5bfd51c44b849d7512d155, $c4808fcc276f40303a686da1c502fca5, $E3d811e105c72504e87765094fe7907d, $D77af068b5dcf27a4945e91c2df88d68, $B288aa5a9d2a06ae43b2f8081b12ece6, $fd7f2f8cde8b865243a388c219894e64);
	$c0a20089b6b0fac4d59b6d1eeceaafbf = (!empty(B8a6Ea05EeBC7e2e3503EA794B1a1Ee4::$request['password']) ? b8A6ea05Eebc7E2E3503EA794b1A1eE4::$request['password'] : false);

	$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `reg_users` SET `password` = \'%s\' WHERE `id` = \'%d\'', crypt($c0a20089b6b0fac4d59b6d1eeceaafbf, '$6$rounds=20000$xtreamcodes$'), $fd7f2f8cde8b865243a388c219894e64);
	$B288aa5a9d2a06ae43b2f8081b12ece6 = (!empty(B8A6ea05eebc7E2e3503Ea794b1A1EE4::$request['default_lang']) && edfc035E61c7291814C778269c50dD92(b8A6ea05eeBc7E2E3503EA794B1A1EE4::$request['default_lang']) ? B8A6eA05EEBc7e2e3503EA794B1A1Ee4::$request['default_lang'] : 'english');

	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['complete_fields'];

	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['username_exists'];

	if (!($c0a20089b6b0fac4d59b6d1eeceaafbf !== false)) {
	}

	if (A8379BE1602EfA9914014c89c86769ba()) {
	}

	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['reg_user_edited'];
	if (($bf3cd6eed406072de08303c780a1f2cb['username'] == $C2aaac60d16a3fe3b99fcb0176fbe5d7) || !DbEb6A2d3fdF653c03c41185a9d463c0('reg_users', 'username', $C2aaac60d16a3fe3b99fcb0176fbe5d7)) {
	}

	$C2aaac60d16a3fe3b99fcb0176fbe5d7 = b8A6EA05Eebc7e2e3503Ea794b1a1eE4::$request['username'];
	if ((0 < count(b8a6EA05eEbc7e2E3503ea794b1a1Ee4::$request)) && !empty(b8A6EA05EEBc7E2E3503eA794b1a1EE4::$request['username']) && !empty(B8A6EA05eEBc7e2E3503eA794B1A1Ee4::$request['email']) && !empty(b8a6Ea05eEbc7E2e3503ea794B1a1Ee4::$request['member_group_id'])) {
	}

default:
	$bf3cd6eed406072de08303c780a1f2cb = E6758aAB92235B37E749F4943476cd2c($fd7f2f8cde8b865243a388c219894e64);
default:
	require (IPTV_TEMPLATES_PATH . '/' . 'header_admin.php');

	require (IPTV_TEMPLATES_PATH . '/' . '/admin/' . 'edit_reguser.php');
	$D370a4beed344093ca0bb87d8ce193d6 = dA46b21B707102AD0eCEED8b3Eff2D7C();

	if (!isset(B8a6Ea05eEbc7e2e3503eA794B1A1Ee4::$request['action'])) {
	}

	$Fce20624c9b6567a7a8c441a4651444d = $f9a8823715bcb54e8069e0086da240b2['select_reguser'];
	session_start();
	$c83b7d347a6bc7f5f0e3313147e88ecc->fA7E9Fb747dd7976dd94EA27fa865b5d();

	$fd7f2f8cde8b865243a388c219894e64 = false;
	if (!empty(B8a6Ea05eEbc7e2E3503ea794B1A1EE4::$request['user_id']) && is_numeric(B8a6Ea05Eebc7e2e3503Ea794B1a1EE4::$request['user_id'])) {
	}

	header('Location: ../index.php?error=NO_ADMIN');
}


?> 

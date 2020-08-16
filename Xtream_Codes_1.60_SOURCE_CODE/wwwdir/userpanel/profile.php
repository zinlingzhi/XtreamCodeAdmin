<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

require (IPTV_TEMPLATES_PATH . '/' . 'footer.php');

header('Location: ../index.php?error=NO_ADMIN');

$D370a4beed344093ca0bb87d8ce193d6 = da46B21b707102Ad0EcEed8b3eff2D7c();

session_start();

require (IPTV_TEMPLATES_PATH . '/' . 'header_normal.php');
require ('../init.php');

$b8980526936694b2cd4cf6c7f8c80396 = b8a6eA05EEbC7E2E3503eA794B1A1EE4::$request['action'];

if (!isset(b8a6ea05EebC7E2E3503EA794b1A1EE4::$request['action'])) {
}

switch ($b8980526936694b2cd4cf6c7f8c80396) {
case 'change_password':
	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['password_changed'];

	$f4bb27525205e9020628b2c590fae96b = B8A6EA05eebc7E2e3503EA794b1A1eE4::$request['new_pass_confirm'];

	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['complete_fields'];
	if (!empty(b8A6Ea05eEbC7E2E3503EA794B1a1EE4::$request['new_pass']) && !empty(B8A6Ea05EEBc7e2E3503EA794B1A1EE4::$request['old_password']) && !empty(B8A6eA05EebC7e2e3503Ea794B1A1eE4::$request['new_pass_confirm'])) {
	}

	$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE reg_users SET password = \'%s\' WHERE id = \'%d\'', crypt($A2f75f67d1975e1592fc479c5e5ff243, '$6$rounds=20000$xtreamcodes$'), $c83b7d347a6bc7f5f0e3313147e88ecc->member_info['id']);

	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['dif_pass_conf'];

	$A2f75f67d1975e1592fc479c5e5ff243 = b8a6EA05eEBC7E2E3503Ea794b1A1EE4::$request['new_pass'];

	$Ad0dc5170f3e7ff982800eb2eaebdd67 = B8A6ea05eEbC7E2e3503eA794B1a1ee4::$request['old_password'];

	if ($A2f75f67d1975e1592fc479c5e5ff243 == $f4bb27525205e9020628b2c590fae96b) {
	}

	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['password_invalid'];
case 'change_lang':
	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['complete_fields'];

	$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE reg_users SET `default_lang` = \'%s\' WHERE id = \'%d\'', $B288aa5a9d2a06ae43b2f8081b12ece6, $c83b7d347a6bc7f5f0e3313147e88ecc->member_info['id']);
	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['action_done'];
	$B288aa5a9d2a06ae43b2f8081b12ece6 = (!empty(B8a6eA05eEbc7e2E3503EA794B1A1ee4::$request['default_lang']) && edfC035E61c7291814c778269c50dD92(B8a6EA05eebC7E2e3503eA794B1a1EE4::$request['default_lang']) ? B8A6ea05EEbC7e2E3503eA794b1a1eE4::$request['default_lang'] : 'english');
}

$c83b7d347a6bc7f5f0e3313147e88ecc->fa7e9Fb747dd7976DD94eA27fa865B5d();
exit(0);
require (IPTV_TEMPLATES_PATH . '/' . '/userpanel/' . 'profile.php');

?> 

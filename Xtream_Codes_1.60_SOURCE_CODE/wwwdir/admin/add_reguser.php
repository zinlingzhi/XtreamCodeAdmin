<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

header('Location: ../index.php?error=NO_ADMIN');

require (IPTV_TEMPLATES_PATH . '/' . 'footer.php');

$b73d24f79f1cbc21896642963be4f2e3 = D302C02BBa3CA2E1B1E6eCe4BE7B8e35();

exit(0);

require ('../init.php');

$b8980526936694b2cd4cf6c7f8c80396 = b8a6Ea05eEbc7e2E3503Ea794b1A1eE4::$request['action'];
unset(b8A6ea05eebc7e2e3503eA794B1a1Ee4::$request['action']);
switch ($b8980526936694b2cd4cf6c7f8c80396) {
case 'add_user':
	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['email_in_use'];

	$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `reg_users` (`username`,`password`,`email`,`date_registered`,`member_group_id`,`verified`,`credits`,`notes`,`default_lang`) VALUES (\'%s\',\'%s\',\'%s\',\'%d\',\'%d\',1,\'%.2f\',\'%s\',\'%s\')', $C2aaac60d16a3fe3b99fcb0176fbe5d7, crypt($c0a20089b6b0fac4d59b6d1eeceaafbf, '$6$rounds=20000$xtreamcodes$'), $Da011610bc5bfd51c44b849d7512d155, time(), $c4808fcc276f40303a686da1c502fca5, $E3d811e105c72504e87765094fe7907d, $D77af068b5dcf27a4945e91c2df88d68, $B288aa5a9d2a06ae43b2f8081b12ece6);

	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['complete_fields'];
	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['group_not_exists'];

	if (a8379BE1602Efa9914014c89C86769BA()) {
	}

	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['username_exists'];
	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['new_regadded'];

	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['licence_invalid'];
	$E3d811e105c72504e87765094fe7907d = (empty(b8A6EA05eeBC7E2e3503eA794B1a1EE4::$request['credits']) ? 0 : (double) b8A6eA05EEbc7E2e3503eA794B1A1ee4::$request['credits']);

	if (!dBEb6A2D3FDF653c03c41185a9D463c0('reg_users', 'email', $Da011610bc5bfd51c44b849d7512d155)) {
	}

	$c4808fcc276f40303a686da1c502fca5 = intval(B8a6Ea05eEBC7e2E3503eA794B1A1EE4::$request['member_group_id']);

	$Da011610bc5bfd51c44b849d7512d155 = b8a6ea05eeBC7E2E3503ea794b1a1ee4::$request['email'];

	$C2aaac60d16a3fe3b99fcb0176fbe5d7 = b8A6EA05EEBC7e2E3503Ea794b1a1eE4::$request['username'];
	$B288aa5a9d2a06ae43b2f8081b12ece6 = (!empty(B8A6ea05EEBc7e2E3503ea794B1A1EE4::$request['default_lang']) && edFC035E61c7291814C778269c50DD92(b8A6EA05EEbc7e2e3503EA794b1A1ee4::$request['default_lang']) ? B8a6eA05eeBc7E2e3503EA794B1a1ee4::$request['default_lang'] : 'english');
	$D77af068b5dcf27a4945e91c2df88d68 = B8a6Ea05eebC7e2e3503ea794b1A1Ee4::$request['notes'];
	$c0a20089b6b0fac4d59b6d1eeceaafbf = b8a6ea05EEbc7E2e3503EA794b1a1Ee4::$request['password'];
}

session_start();


require (IPTV_TEMPLATES_PATH . '/' . '/admin/' . 'add_reguser.php');
require (IPTV_TEMPLATES_PATH . '/' . 'header_admin.php');
$D370a4beed344093ca0bb87d8ce193d6 = Da46B21b707102AD0EceED8B3eff2D7c();
$c83b7d347a6bc7f5f0e3313147e88ecc->fA7e9Fb747Dd7976dD94Ea27FA865b5d();

?> 

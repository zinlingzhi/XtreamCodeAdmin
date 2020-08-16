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

$d12c4b005a9917a884618e419881a595 = false;

switch ($b8980526936694b2cd4cf6c7f8c80396) {
default:
	$c83b7d347a6bc7f5f0e3313147e88ecc->A1F9279315D5F46216753bbc459153c1();
case 'register':
	$Fce20624c9b6567a7a8c441a4651444d[] = $f9a8823715bcb54e8069e0086da240b2['dif_pass_conf'];

	$bf62d10cd18904524a5a1503dd3a8206 = B8A6EA05eEBc7e2E3503ea794b1A1Ee4::$request['pass_confirm'];
	$C2aaac60d16a3fe3b99fcb0176fbe5d7 = B8A6ea05eebc7E2e3503EA794B1a1ee4::$request['login'];

	$Bc1def8d568913ad3cd757cc215786b3 = $c83b7d347a6bc7f5f0e3313147e88ecc->eE5eec8afC80fc5c6eD01941F8EB057b($C2aaac60d16a3fe3b99fcb0176fbe5d7, $c0a20089b6b0fac4d59b6d1eeceaafbf, $Da011610bc5bfd51c44b849d7512d155, $C4caf0da36b7e6696db615f28955a10f, b8a6eA05EebC7E2e3503eA794b1a1eE4::$settings['confirmation_email']);

	$c0a20089b6b0fac4d59b6d1eeceaafbf = B8a6ea05eebC7e2e3503ea794B1A1ee4::$request['pass'];
	$Fce20624c9b6567a7a8c441a4651444d[] = $f9a8823715bcb54e8069e0086da240b2['username_exists'];
	$Fce20624c9b6567a7a8c441a4651444d[] = str_replace('{length}', b8A6Ea05eEBc7e2e3503Ea794B1a1eE4::$settings['username_strlen'], $f9a8823715bcb54e8069e0086da240b2['username_strlen']);

	$Da011610bc5bfd51c44b849d7512d155 = B8a6ea05Eebc7e2e3503EA794B1a1Ee4::$request['email'];

	$Fce20624c9b6567a7a8c441a4651444d[] = $f9a8823715bcb54e8069e0086da240b2['email_in_use'];
	$Fce20624c9b6567a7a8c441a4651444d[] = $f9a8823715bcb54e8069e0086da240b2['username_alpha'];
	require (IPTV_TEMPLATES_PATH . 'register.php');

	$Fce20624c9b6567a7a8c441a4651444d = $f9a8823715bcb54e8069e0086da240b2['ip_in_use'];

	$Fce20624c9b6567a7a8c441a4651444d[] = str_replace('{length}', B8A6EA05eEbc7E2E3503ea794B1A1eE4::$settings['min_password'], $f9a8823715bcb54e8069e0086da240b2['min_password']);
	$a9f498be9722b5accb5c2cd95fcafb0c = str_replace('{SERVER_NAME}', B8a6Ea05Eebc7E2e3503EA794B1A1Ee4::$settings['server_name'], b8a6Ea05eEbC7e2E3503EA794B1A1EE4::$settings['email_verify_sub']);

	$Fce20624c9b6567a7a8c441a4651444d[] = $f9a8823715bcb54e8069e0086da240b2['invalid_email'];

	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['register_confirm'];
	$Fce20624c9b6567a7a8c441a4651444d = array();

	$Fce20624c9b6567a7a8c441a4651444d = $f9a8823715bcb54e8069e0086da240b2['wrong_captcha'];

	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['register_ok'];

	d7e80A150D0387479D421812A6ad2719($Da011610bc5bfd51c44b849d7512d155, $a9f498be9722b5accb5c2cd95fcafb0c, $bfa5ef814c922f470bd95ca1ed3f5280);

	$Fce20624c9b6567a7a8c441a4651444d = $f9a8823715bcb54e8069e0086da240b2['registration_closed'];

	if (b8a6ea05eeBc7e2e3503ea794b1A1ee4::c2F879c593Adb835Cc7983B1CA480884($Da011610bc5bfd51c44b849d7512d155)) {
	}

	$d12c4b005a9917a884618e419881a595 = true;

	if (!$c83b7d347a6bc7f5f0e3313147e88ecc->e1B3e990f342c1D00766318B06068781('email', $Da011610bc5bfd51c44b849d7512d155)) {
	}

	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['complete_fields'];

	if (!($c0a20089b6b0fac4d59b6d1eeceaafbf !== $bf62d10cd18904524a5a1503dd3a8206)) {
	}

	if (!(strlen($c0a20089b6b0fac4d59b6d1eeceaafbf) < B8a6ea05EEBC7e2e3503eA794B1a1EE4::$settings['min_password'])) {
	}

	$C4caf0da36b7e6696db615f28955a10f = $_SERVER['REMOTE_ADDR'];
	$bfa5ef814c922f470bd95ca1ed3f5280 = str_replace(array('{SERVER_NAME}', '{VERIFY_LINK}'), array(B8A6EA05EeBc7e2e3503eA794B1a1eE4::$settings['server_name'], '<a href=\'' . b8A6ea05EEBC7E2E3503EA794b1A1ee4::$StreamingServers[SERVER_ID]['site_url'] . 'index.php?action=verify&user_id=' . $Bc1def8d568913ad3cd757cc215786b3[0] . '&key=' . $Bc1def8d568913ad3cd757cc215786b3[1] . '\'>' . b8a6Ea05EeBC7E2e3503EA794b1A1eE4::$StreamingServers[SERVER_ID]['site_url'] . 'index.php?action=verify&user_id=' . $Bc1def8d568913ad3cd757cc215786b3[0] . '&key=' . $Bc1def8d568913ad3cd757cc215786b3[1] . '</a>'), b8a6eA05EebC7E2e3503Ea794B1a1Ee4::$settings['email_verify_cont']);
	if (!empty(B8a6Ea05eeBc7E2e3503ea794B1a1Ee4::$request['login']) && !empty(B8A6EA05EEbc7E2e3503eA794B1a1Ee4::$request['pass']) && !empty(b8a6Ea05EEbc7E2E3503ea794B1a1EE4::$request['pass_confirm']) && !empty(b8a6ea05eEBC7e2e3503EA794B1A1ee4::$request['email'])) {
	}

case 'forgot':
	require (IPTV_TEMPLATES_PATH . 'forgot.php');
	$f7623a8135abd2dc0cadc29ad49f29e3 = B8A6eA05eEBC7E2e3503ea794B1a1ee4::daeb9fed37cd1EC882b897C29F10F77e();

	$d12c4b005a9917a884618e419881a595 = true;

	$Fce20624c9b6567a7a8c441a4651444d = $f9a8823715bcb54e8069e0086da240b2['invalid_email'];

	D7E80A150d0387479d421812A6aD2719($Da011610bc5bfd51c44b849d7512d155, $a9f498be9722b5accb5c2cd95fcafb0c, $bfa5ef814c922f470bd95ca1ed3f5280);

	$fd7f2f8cde8b865243a388c219894e64 = $c83b7d347a6bc7f5f0e3313147e88ecc->E1b3E990F342c1d00766318b06068781('email', $Da011610bc5bfd51c44b849d7512d155);

	if (!isset(B8A6eA05eEbC7E2e3503ea794b1A1EE4::$request['email'])) {
	}

	$Da011610bc5bfd51c44b849d7512d155 = B8a6ea05EeBc7e2e3503eA794b1A1EE4::$request['email'];

	$bfa5ef814c922f470bd95ca1ed3f5280 = str_replace(array('{SERVER_NAME}', '{FORGOT_LINK}'), array(b8A6ea05EEBc7e2E3503eA794B1a1ee4::$settings['server_name'], '<a href=\'' . B8A6eA05eeBC7e2e3503eA794b1A1Ee4::$StreamingServers[SERVER_ID]['site_url'] . 'index.php?action=new_pass&user_id=' . $fd7f2f8cde8b865243a388c219894e64 . '&key=' . $f7623a8135abd2dc0cadc29ad49f29e3 . '\'>' . B8a6eA05eEBC7E2e3503Ea794B1A1ee4::$StreamingServers[SERVER_ID]['site_url'] . 'index.php?action=new_pass&user_id=' . $fd7f2f8cde8b865243a388c219894e64 . '&key=' . $f7623a8135abd2dc0cadc29ad49f29e3 . '</a>'), b8a6ea05EEbC7E2E3503eA794b1A1EE4::$settings['email_forgot_cont']);

	if ($fd7f2f8cde8b865243a388c219894e64 != false) {
	}

	$Fce20624c9b6567a7a8c441a4651444d = $f9a8823715bcb54e8069e0086da240b2['no_email_found'];

	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['forgot_email_sent'];

	if ($_SESSION['code'] == B8A6EA05eebc7E2E3503Ea794B1a1eE4::$request['captcha']) {
	}

	$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `reg_users` SET `verify_key` = \'%s\' WHERE `id` = \'%d\'', $f7623a8135abd2dc0cadc29ad49f29e3, $fd7f2f8cde8b865243a388c219894e64);
	$a9f498be9722b5accb5c2cd95fcafb0c = str_replace('{SERVER_NAME}', b8a6EA05eeBC7E2E3503eA794b1a1ee4::$settings['server_name'], B8A6ea05EeBC7E2e3503eA794B1A1ee4::$settings['email_forgot_sub']);
	$Fce20624c9b6567a7a8c441a4651444d = $f9a8823715bcb54e8069e0086da240b2['wrong_captcha'];
case 'new_pass':
	$bfa5ef814c922f470bd95ca1ed3f5280 = str_replace(array('{SERVER_NAME}', '{NEW_PASSWORD}'), array(b8a6eA05Eebc7e2e3503ea794b1a1EE4::$settings['SERVER_NAME'], $A2f75f67d1975e1592fc479c5e5ff243), B8a6Ea05eeBC7e2e3503EA794b1A1eE4::$settings['email_new_pass_cont']);

	$a9f498be9722b5accb5c2cd95fcafb0c = str_replace('{SERVER_NAME}', b8a6eA05eEBC7e2E3503ea794b1A1EE4::$settings['SERVER_NAME'], B8A6Ea05Eebc7e2E3503eA794b1a1ee4::$settings['email_new_pass_sub']);

	d7e80a150D0387479d421812A6aD2719($Da011610bc5bfd51c44b849d7512d155, $a9f498be9722b5accb5c2cd95fcafb0c, $bfa5ef814c922f470bd95ca1ed3f5280);

	$A2f75f67d1975e1592fc479c5e5ff243 = b8A6Ea05eEBC7e2e3503eA794B1A1EE4::dAeB9Fed37cd1EC882B897c29f10F77E();
	$D29f3c5494cb370b46f3e907dc61f106->query('SELECT `email` FROM `reg_users` WHERE `id` = \'%d\'', $fd7f2f8cde8b865243a388c219894e64);

	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['new_pass_sent'];
	$fd7f2f8cde8b865243a388c219894e64 = intval(B8a6ea05eEbc7E2e3503eA794b1A1EE4::$request['user_id']);

	$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `reg_users` SET `password` = \'%s\' WHERE `id` = \'%d\' AND `verify_key` = \'%s\' AND `verified` = 1', crypt($A2f75f67d1975e1592fc479c5e5ff243, '$6$rounds=20000$xtreamcodes$'), $fd7f2f8cde8b865243a388c219894e64, $b442e1b28845beafe64eed54322b9196);

	if (!(0 < $D29f3c5494cb370b46f3e907dc61f106->b6d081DAc375EB86B869650EBFaFcFd9())) {
	}

	if (!(!empty(b8A6ea05eEBc7E2E3503ea794b1A1Ee4::$request['user_id']) && !empty(b8a6ea05eEBC7e2e3503EA794B1a1EE4::$request['key']))) {
	}

	if (!$c83b7d347a6bc7f5f0e3313147e88ecc->e1b3e990F342c1d00766318B06068781('id', $fd7f2f8cde8b865243a388c219894e64)) {
	}

	$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `reg_users` SET `verify_key` = NULL WHERE `id` = \'%d\'', $fd7f2f8cde8b865243a388c219894e64);
	$Da011610bc5bfd51c44b849d7512d155 = $D29f3c5494cb370b46f3e907dc61f106->B68C0609C13F8645d5e168b69fD4c118();
	$b442e1b28845beafe64eed54322b9196 = b8A6EA05EEbc7e2e3503EA794B1A1ee4::$request['key'];
case 'verify':
	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['account_verified'];
	if (!(!empty(B8A6eA05eeBC7e2E3503eA794B1a1EE4::$request['user_id']) && !empty(b8a6ea05EeBc7e2E3503eA794b1A1Ee4::$request['key']))) {
	}

	$b442e1b28845beafe64eed54322b9196 = B8A6ea05eebC7e2E3503eA794B1A1Ee4::$request['key'];
	$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `reg_users` SET `verified` = 1,`verify_key` = NULL WHERE `id` = \'%d\' AND `verify_key` = \'%s\' AND `verified` = 0', $fd7f2f8cde8b865243a388c219894e64, $b442e1b28845beafe64eed54322b9196);
	$fd7f2f8cde8b865243a388c219894e64 = intval(B8a6EA05EEbC7E2e3503EA794b1a1EE4::$request['user_id']);
case 'login':
	session_regenerate_id();

	$d12c4b005a9917a884618e419881a595 = true;

	$fd7f2f8cde8b865243a388c219894e64 = $c83b7d347a6bc7f5f0e3313147e88ecc->ad35e8f29200886f13ee25984A43300d(B8A6EA05EeBC7e2E3503Ea794B1A1Ee4::$request['login'], b8a6EA05eeBc7e2e3503EA794b1a1Ee4::$request['pass']);

	$c83b7d347a6bc7f5f0e3313147e88ecc->f7e4c557523754b518c315261896E4Dc($fd7f2f8cde8b865243a388c219894e64);

	$Fce20624c9b6567a7a8c441a4651444d = $f9a8823715bcb54e8069e0086da240b2['wrong_captcha'];

	$Fce20624c9b6567a7a8c441a4651444d = $f9a8823715bcb54e8069e0086da240b2['wrong_uinfo'];
	exit();
	require (IPTV_TEMPLATES_PATH . 'login.php');
default:
	require (IPTV_TEMPLATES_PATH . 'login.php');
default:
}

?> 

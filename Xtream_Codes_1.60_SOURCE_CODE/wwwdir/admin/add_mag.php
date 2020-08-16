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
$ddee799b57ee76394b3f249ef81e3c7e = (b8a6EA05EeBc7E2E3503eA794b1a1ee4::$licence['reshare_deny_addon'] == 1 ? true : false);
exit(0);

session_start();

$b8980526936694b2cd4cf6c7f8c80396 = B8a6eA05eEBC7E2E3503eA794B1A1eE4::$request['action'];

$Ab3a8d55cf30f547f0cd260e8a12821a = d6322FdDBb063f77dF22d1ef7aa2E429();

$Fce20624c9b6567a7a8c441a4651444d = $f9a8823715bcb54e8069e0086da240b2['add_bouquet_first'];

require ('../init.php');

header('Location: ../index.php?error=NO_ADMIN');

if (!isset(B8a6ea05eebc7e2e3503Ea794b1A1eE4::$request['action'])) {
}

require (IPTV_TEMPLATES_PATH . '/' . '/admin/' . 'add_mag.php');

require (IPTV_TEMPLATES_PATH . '/' . 'header_admin.php');

$c793d604f2518c7fa7180e274bef95d5 = dec4175B1411686eC61B25aa8d1AA017();
$Cecfa885eed4e0be5ea572f6a5e134a4 = c24A41eD39f4be3316A3Ecb1884C6b23(array('is_mag' => 0, 'pair_id' => NULL));


switch ($b8980526936694b2cd4cf6c7f8c80396) {
case 'add_mag':
	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['wrong_mac'];
	$D55e1ccfffb8f98ed27fb835d426cde2 = (!empty(B8a6Ea05EEBc7E2e3503EA794B1a1Ee4::$request['is_trial']) ? 1 : 0);

	$d72612f189fd647ca9cbf74b4ae7dc40 = B8A6EA05EEBc7e2E3503eA794B1A1eE4::$request['admin_notes'];

	$a4e6e437f123785c5867b3e1ae39c5a8 = strtoupper(b8A6ea05eEBC7E2e3503eA794B1A1eE4::$request['mac']);

	$Bda8edc28509d4243a1d0bd7710d1201 = Ad2D01e289081a9F123014e2b99c42d0();

	$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `users` (`member_id`,`username`,`password`,`exp_date`,`admin_notes`,`bouquet`,`max_connections`,`is_restreamer`,`allowed_ips`,`allowed_ua`,`is_trial`,`created_at`,`created_by`,`pair_id`,`is_mag`,`force_server_id`,`is_isplock`,`forced_country`) ' . "\r\n" . '                            VALUES (\'%d\',\'%s\',\'%s\',%s,\'%s\',\'%s\',1,0,\'%s\',\'%s\',\'%d\',\'%d\',\'%d\',%s,1,\'%d\',\'%d\',\'%s\')', $d55019f4078483b70d22314f63b28b59, $C2aaac60d16a3fe3b99fcb0176fbe5d7, $c0a20089b6b0fac4d59b6d1eeceaafbf, $a922b55f309483feb7cf56ee35c2c75b, $d72612f189fd647ca9cbf74b4ae7dc40, json_encode($c793d604f2518c7fa7180e274bef95d5), json_encode($ef60d74f311ef52f6bd7bb1517a2a04f), json_encode($ef60d74f311ef52f6bd7bb1517a2a04f), $D55e1ccfffb8f98ed27fb835d426cde2, time(), $c83b7d347a6bc7f5f0e3313147e88ecc->member_info['id'], $e01cef000062cbd8f23e4f242a29229d, $A26347ec72cc7fc1587ce4ccf72a9293, $B8a7dad874c0e65b9e24f0081ce4c2c7, $b39c1640f84f0655d3a0817379c8973e);
	$e01cef000062cbd8f23e4f242a29229d = (!empty(b8a6ea05Eebc7E2e3503ea794B1a1ee4::$request['pair_id']) ? intval(B8a6Ea05EEbC7e2e3503Ea794B1A1EE4::$request['pair_id']) : 'NULL');
	$ef60d74f311ef52f6bd7bb1517a2a04f = (empty(b8A6EA05eebC7E2e3503eA794B1a1ee4::$request['allowed_ips']) ? array() : array_values(@array_filter(array_unique(B8a6Ea05Eebc7E2e3503eA794B1A1Ee4::$request['allowed_ips']), 'inet_pton')));

	$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `reg_userlog` (`owner`,`username`,`password`,`date`,`type`) VALUES(\'%s\',\'%s\',\'%s\',\'%s\',\'%s\')', $Ca6af2c8b13444a2978cb0ef98cedaae, $a4e6e437f123785c5867b3e1ae39c5a8, '-', time(), $f9a8823715bcb54e8069e0086da240b2['add_new_mag'] . ' ' . $Fac708114f97b667403407d22b554e84 . ' [ ' . $f9a8823715bcb54e8069e0086da240b2['creator'] . ': ' . $c83b7d347a6bc7f5f0e3313147e88ecc->member_info['username'] . ' | (exp ' . $C9da33a41cefe4e07f9c49f45a917f3e . ') ]');

	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['licence_invalid'];

	$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `mag_devices` (`user_id`,`mac`,`created`,`watchdog_timeout`) VALUES(\'%d\',\'%s\',\'%d\',\'%d\')', $fd7f2f8cde8b865243a388c219894e64, $a4e6e437f123785c5867b3e1ae39c5a8, time(), mt_rand(10, 40));
	$C2aaac60d16a3fe3b99fcb0176fbe5d7 = B8A6eA05eEBc7e2e3503Ea794B1a1ee4::dAEB9fEd37CD1Ec882B897C29F10F77E(10);

	$c793d604f2518c7fa7180e274bef95d5 = array_values(array_unique(array_map('intval', B8A6eA05eebC7E2E3503ea794B1a1Ee4::$request['bouquets'])));

	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['complete_fields'];
	$a922b55f309483feb7cf56ee35c2c75b = (!empty(B8a6Ea05EEbc7E2e3503Ea794B1A1Ee4::$request['expire_date']) ? strtotime(B8A6Ea05eEBc7E2e3503Ea794b1A1eE4::$request['expire_date']) : 'NULL');
	$Fac708114f97b667403407d22b554e84 = ($D55e1ccfffb8f98ed27fb835d426cde2 == 1 ? '<font color=\'red\'>Trial</font>' : '<font color=\'green\'>Official</font>');

	foreach ($Bda8edc28509d4243a1d0bd7710d1201 as $ee17e37bde2c409afe712a7cd605cb53) {
		$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `user_output` (`user_id`,`access_output_id`) VALUES(\'%d\',\'%d\')', $fd7f2f8cde8b865243a388c219894e64, $ee17e37bde2c409afe712a7cd605cb53['access_output_id']);
	}

	$Cfc6e14d05e89d8f30f2091a51ce70af = array();

	$d55019f4078483b70d22314f63b28b59 = intval(b8a6eA05EeBC7e2e3503EA794b1a1EE4::$request['member_id']);

	if (DBEb6A2d3fdF653c03c41185a9d463C0('reg_users', 'id', $d55019f4078483b70d22314f63b28b59)) {
	}

	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['member_not_exists'];
	$C9da33a41cefe4e07f9c49f45a917f3e = ($a922b55f309483feb7cf56ee35c2c75b == 'NULL' ? '<font color=\'red\'>' . $f9a8823715bcb54e8069e0086da240b2['unlimited'] . '</font>' : '<font color=\'green\'>' . date('d/m/Y H:i:s', $a922b55f309483feb7cf56ee35c2c75b) . '</font>');

	if (!($e01cef000062cbd8f23e4f242a29229d != 'NULL')) {
	}

	$Ca6af2c8b13444a2978cb0ef98cedaae = $D29f3c5494cb370b46f3e907dc61f106->B68C0609c13f8645D5E168b69Fd4C118();
	$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `users` SET `pair_id` = \'%d\' WHERE `id` = \'%d\'', $fd7f2f8cde8b865243a388c219894e64, $e01cef000062cbd8f23e4f242a29229d);
	$A26347ec72cc7fc1587ce4ccf72a9293 = (!empty(B8a6Ea05eeBc7e2E3503eA794b1a1Ee4::$request['force_server_id']) && array_key_exists(b8a6Ea05EEbc7E2E3503ea794B1a1EE4::$request['force_server_id'], b8A6ea05EebC7e2e3503Ea794B1a1EE4::$StreamingServers) ? intval(b8A6ea05Eebc7e2e3503EA794B1A1ee4::$request['force_server_id']) : 0);
	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['mag_device_added'];

	if (a8379BE1602EfA9914014c89c86769ba()) {
	}

	$D29f3c5494cb370b46f3e907dc61f106->query('SELECT `username` FROM `reg_users` WHERE `id` = \'%d\'', $d55019f4078483b70d22314f63b28b59);
	$fd7f2f8cde8b865243a388c219894e64 = $D29f3c5494cb370b46f3e907dc61f106->F1b4b6779C28F4aD97A35e4A54Fd0416();
	$B8a7dad874c0e65b9e24f0081ce4c2c7 = (($ddee799b57ee76394b3f249ef81e3c7e == 0) || empty(B8A6EA05EEBc7e2e3503Ea794B1a1EE4::$request['is_isplock']) || (B8A6Ea05Eebc7e2E3503EA794B1A1EE4::$request['is_isplock'] <= 0) ? 0 : 1);
	$a4e6e437f123785c5867b3e1ae39c5a8 = base64_encode($a4e6e437f123785c5867b3e1ae39c5a8);

	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['mag_mac_exists'];
	$b39c1640f84f0655d3a0817379c8973e = B8A6ea05eebc7E2E3503EA794b1A1ee4::$request['forced_country'];

	if (!dBEB6A2D3FdF653C03c41185a9D463c0('mag_devices', 'mac', $a4e6e437f123785c5867b3e1ae39c5a8)) {
	}

	$c0a20089b6b0fac4d59b6d1eeceaafbf = b8a6EA05EeBc7e2e3503EA794B1A1eE4::dAEB9FEd37cd1Ec882B897C29F10F77e(10);
	if ((0 < count(B8a6ea05EEbc7e2e3503Ea794B1a1EE4::$request)) && !empty(b8a6eA05eebC7e2E3503Ea794B1a1EE4::$request['mac']) && !empty(b8a6eA05eEBC7E2e3503Ea794b1A1Ee4::$request['member_id']) && !empty(B8A6Ea05EEbc7E2E3503Ea794b1a1ee4::$request['bouquets']) && is_array(b8a6EA05eEbc7E2e3503EA794B1a1Ee4::$request['bouquets'])) {
	}

}


?> 

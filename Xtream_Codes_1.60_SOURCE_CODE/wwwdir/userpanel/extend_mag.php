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

$Cecfa885eed4e0be5ea572f6a5e134a4 = f063459812BDc31Ab1FBDf95D97dF3bc(array('t1.member_id' => $c83b7d347a6bc7f5f0e3313147e88ecc->member_info['id'], 't1.is_mag' => 1));

$Fce20624c9b6567a7a8c441a4651444d = $f9a8823715bcb54e8069e0086da240b2['no_packages_found_group'];

unset(B8A6eA05EEBC7e2e3503eA794B1A1EE4::$request['action']);

switch ($b8980526936694b2cd4cf6c7f8c80396) {
default:
	$c83b7d347a6bc7f5f0e3313147e88ecc->fA7e9fB747dd7976DD94EA27fa865b5D();

	require (IPTV_TEMPLATES_PATH . '/' . 'header_normal.php');

	require ('../init.php');

	session_start();
	exit(0);

	require (IPTV_TEMPLATES_PATH . '/' . 'footer.php');

	if (empty($a92088ce51f93854fd7819a3b5f2dee4)) {
	}

	require (IPTV_TEMPLATES_PATH . '/' . '/userpanel/' . 'extend_mag.php');
case 'extend':
	$A0951fe8d1e4d37a4b8831a6eebd8a54 = fAfe9c6fba1254dbcd5cCAdE27AF28d9($e27eaafd53aca98f32c2b81a06c4d083);
	$Fac708114f97b667403407d22b554e84 = ($deb595af0f0f430af9497132ddb4247a['is_trial'] == 1 ? '<font color=\'red\'>Trial</font>' : '<font color=\'green\'>Official</font>');

	switch ($d086905492937bd4d220b0847d836979) {
	default:
		$d086905492937bd4d220b0847d836979 = $A0951fe8d1e4d37a4b8831a6eebd8a54['official_duration_in'];
		$fd7f2f8cde8b865243a388c219894e64 = intval(B8A6eA05eEbC7e2E3503Ea794B1a1ee4::$request['user_id']);
		$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['licence_invalid'];
		$deb595af0f0f430af9497132ddb4247a['exp_date'] = time();
		$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['not_enough_credits'];


		$e27eaafd53aca98f32c2b81a06c4d083 = intval(b8a6EA05EEbC7E2e3503EA794b1a1eE4::$request['package_id']);
		$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `reg_userlog` (`owner`,`username`,`password`,`date`,`type`) VALUES(\'%s\',\'%s\',\'%s\',\'%s\',\'%s\')', $c83b7d347a6bc7f5f0e3313147e88ecc->member_info['username'], base64_decode($deb595af0f0f430af9497132ddb4247a['mag_device']['mac']), '-', time(), $f9a8823715bcb54e8069e0086da240b2['extend_mag'] . ' ' . $Fac708114f97b667403407d22b554e84 . ' [ ' . $A0951fe8d1e4d37a4b8831a6eebd8a54['package_name'] . ' | (exp ' . date('d/m/Y H:i:s', $fcbd8a94125e8f5a21433cd1ab90e407) . ') ]');

		if (!in_array($c83b7d347a6bc7f5f0e3313147e88ecc->member_info['member_group_id'], $A0951fe8d1e4d37a4b8831a6eebd8a54['groups'])) {
		}

		$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['complete_fields'];

		if (!is_null($deb595af0f0f430af9497132ddb4247a['exp_date'])) {
		}

		$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `users` SET `is_isplock` = \'%d\',`exp_date` = \'%d\',`is_trial` = 0,`bouquet` = \'%s\' WHERE `id` = \'%d\'', $A0951fe8d1e4d37a4b8831a6eebd8a54['is_isplock'], $fcbd8a94125e8f5a21433cd1ab90e407, json_encode($A0951fe8d1e4d37a4b8831a6eebd8a54['bouquets']), $fd7f2f8cde8b865243a388c219894e64);

		$Be1fd85981919567dae0b8ea3ae211dc = $A0951fe8d1e4d37a4b8831a6eebd8a54['official_credits'];

		$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['user_extended'];

		$deb595af0f0f430af9497132ddb4247a = Dfa6500b681f783bBBCb94474366bB27::FC219cec06E2Ecf9A5083c03b314D183($fd7f2f8cde8b865243a388c219894e64, NULL, NULL);
		$B93f5250a2e921968a32367225267b24 = $A0951fe8d1e4d37a4b8831a6eebd8a54['official_duration'];

		$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['line_is_unlimited'];
	case 'years':
		$fcbd8a94125e8f5a21433cd1ab90e407 = strtotime('+' . $B93f5250a2e921968a32367225267b24 . ' years', $deb595af0f0f430af9497132ddb4247a['exp_date']);
	case 'days':
		$fcbd8a94125e8f5a21433cd1ab90e407 = strtotime('+' . $B93f5250a2e921968a32367225267b24 . ' days', $deb595af0f0f430af9497132ddb4247a['exp_date']);
	case 'months':
		$fcbd8a94125e8f5a21433cd1ab90e407 = strtotime('+' . $B93f5250a2e921968a32367225267b24 . ' months', $deb595af0f0f430af9497132ddb4247a['exp_date']);
	case 'hours':
		$fcbd8a94125e8f5a21433cd1ab90e407 = strtotime('+' . $B93f5250a2e921968a32367225267b24 . ' hours', $deb595af0f0f430af9497132ddb4247a['exp_date']);
	default:
		$fcbd8a94125e8f5a21433cd1ab90e407 = time();
	default:
	}
default:
default:
	$a92088ce51f93854fd7819a3b5f2dee4 = b2Cea41370722D68183f95f62f64Dd7f($c83b7d347a6bc7f5f0e3313147e88ecc->member_info['group_id'], array('can_gen_mag' => 1, 'is_official' => 1));
default:
	if ($c83b7d347a6bc7f5f0e3313147e88ecc->ec28097bfBdEDdf7488BA03667C68540()) {
	}
	else {
	}
}

?> 

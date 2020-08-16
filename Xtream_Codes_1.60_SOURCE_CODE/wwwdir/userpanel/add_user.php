<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

exit(0);

require (IPTV_TEMPLATES_PATH . '/' . '/userpanel/' . 'add_user.php');

require (IPTV_TEMPLATES_PATH . '/' . 'footer.php');

$b8980526936694b2cd4cf6c7f8c80396 = b8a6EA05eebc7E2e3503ea794B1a1EE4::$request['action'];

$c83b7d347a6bc7f5f0e3313147e88ecc->Fa7e9fb747dd7976dD94Ea27Fa865b5d();

session_start();

switch ($b8980526936694b2cd4cf6c7f8c80396) {
case 'package_info':
	echo json_encode($A0951fe8d1e4d37a4b8831a6eebd8a54);
	exit();

	$e27eaafd53aca98f32c2b81a06c4d083 = intval(B8A6EA05eeBc7E2e3503ea794B1a1EE4::$request['id']);

	if (empty(B8A6ea05EeBC7e2E3503eA794B1a1ee4::$request['id'])) {
	}

	$A0951fe8d1e4d37a4b8831a6eebd8a54 = fAFe9C6FBA1254dbcd5cCaDe27aF28d9($e27eaafd53aca98f32c2b81a06c4d083);
	$A0951fe8d1e4d37a4b8831a6eebd8a54 = array();
case 'add_user':
	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['not_enough_credits'];
	$C2aaac60d16a3fe3b99fcb0176fbe5d7 = (!empty(B8A6eA05EeBc7e2e3503EA794b1a1Ee4::$request['username']) ? B8A6ea05EEBc7E2E3503EA794B1A1ee4::$request['username'] : b8a6eA05eeBc7E2e3503ea794b1a1Ee4::dAEB9fED37cD1eC882b897c29f10F77E(10));


	$c54c54ab036345c65837de303ce7e77f = false;
	$c54c54ab036345c65837de303ce7e77f = true;

	if (!in_array($c83b7d347a6bc7f5f0e3313147e88ecc->member_info['member_group_id'], $A0951fe8d1e4d37a4b8831a6eebd8a54['groups'])) {
	}

	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['you_cant_generate_trials'];
	$Fac708114f97b667403407d22b554e84 = ($F0d385a3b668a8730e8f689ec6bd2cad == 'trial' ? '<font color=\'red\'>Trial</font>' : '<font color=\'green\'>Official</font>');
	$d086905492937bd4d220b0847d836979 = $A0951fe8d1e4d37a4b8831a6eebd8a54['official_duration_in'];
	if (!(!empty($A0951fe8d1e4d37a4b8831a6eebd8a54) && ($A0951fe8d1e4d37a4b8831a6eebd8a54['only_mag'] == 0))) {
	}

	$d086905492937bd4d220b0847d836979 = $A0951fe8d1e4d37a4b8831a6eebd8a54['trial_duration_in'];
	$c0a20089b6b0fac4d59b6d1eeceaafbf = (!empty(b8a6EA05EEBc7e2E3503EA794B1A1EE4::$request['password']) ? b8a6EA05EeBc7E2E3503ea794B1a1Ee4::$request['password'] : b8a6eA05EeBC7e2e3503EA794b1a1EE4::DAeB9Fed37cd1EC882b897C29F10F77e(10));

	switch ($d086905492937bd4d220b0847d836979) {
	default:
		$A298f54616281708c1002e0c3f04e501 = (!empty(B8A6ea05EeBC7e2E3503Ea794B1a1eE4::$request['reseller_notes']) ? B8A6ea05Eebc7E2e3503ea794B1A1EE4::$request['reseller_notes'] : '');
		if (!((($F0d385a3b668a8730e8f689ec6bd2cad == 'trial') && ($A0951fe8d1e4d37a4b8831a6eebd8a54['is_trial'] == 1)) || (($F0d385a3b668a8730e8f689ec6bd2cad == 'official') && ($A0951fe8d1e4d37a4b8831a6eebd8a54['is_official'] == 1)))) {
		}

		$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['complete_fields'];

		$Be1fd85981919567dae0b8ea3ae211dc = $A0951fe8d1e4d37a4b8831a6eebd8a54['trial_credits'];

		$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['line_exists'];

		foreach ($A0951fe8d1e4d37a4b8831a6eebd8a54['output_formats'] as $ee17e37bde2c409afe712a7cd605cb53) {
			$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `user_output` (`user_id`,`access_output_id`) VALUES(\'%d\',\'%d\')', $fd7f2f8cde8b865243a388c219894e64, $ee17e37bde2c409afe712a7cd605cb53);
		}
	case 'years':
		$fcbd8a94125e8f5a21433cd1ab90e407 = strtotime('+' . $B93f5250a2e921968a32367225267b24 . ' years');
	case 'days':
		$fcbd8a94125e8f5a21433cd1ab90e407 = strtotime('+' . $B93f5250a2e921968a32367225267b24 . ' days');
	case 'months':
		$fcbd8a94125e8f5a21433cd1ab90e407 = strtotime('+' . $B93f5250a2e921968a32367225267b24 . ' months');
	case 'hours':
		$fcbd8a94125e8f5a21433cd1ab90e407 = strtotime('+' . $B93f5250a2e921968a32367225267b24 . ' hours');
	default:
		$fcbd8a94125e8f5a21433cd1ab90e407 = time();
	default:
		$fd7f2f8cde8b865243a388c219894e64 = $D29f3c5494cb370b46f3e907dc61f106->f1b4b6779C28F4ad97a35E4A54FD0416();

		$A0951fe8d1e4d37a4b8831a6eebd8a54 = fAFe9c6FbA1254dbcd5Ccade27Af28d9($e27eaafd53aca98f32c2b81a06c4d083);
		if ((0 < count(B8A6Ea05eEBc7E2e3503Ea794B1A1ee4::$request)) && !empty(B8a6ea05eebC7E2E3503EA794B1a1ee4::$request['package_id']) && !empty(b8a6EA05EeBc7E2e3503EA794B1a1eE4::$request['line_type'])) {
		}

		$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `reg_users` SET `credits` = \'%.2f\' WHERE `id` = \'%d\'', $c83b7d347a6bc7f5f0e3313147e88ecc->member_info['credits'] - $Be1fd85981919567dae0b8ea3ae211dc, $c83b7d347a6bc7f5f0e3313147e88ecc->member_info['id']);
		$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['user_added'];

		$e27eaafd53aca98f32c2b81a06c4d083 = intval(B8a6Ea05eEbc7E2e3503EA794b1A1EE4::$request['package_id']);
		$F0d385a3b668a8730e8f689ec6bd2cad = (B8A6ea05EEBc7E2E3503ea794b1A1ee4::$request['line_type'] == 'official' ? 'official' : 'trial');

		$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['licence_invalid'];
	default:
		$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `users` (`member_id`,`username`,`password`,`exp_date`,`reseller_notes`,`bouquet`,`is_trial`,`created_at`,`created_by`,`is_isplock`)' . "\r\n" . '                                                      VALUES (\'%d\',\'%s\',\'%s\',\'%d\',\'%s\',\'%s\',\'%d\',\'%d\',\'%d\',\'%d\')', $c83b7d347a6bc7f5f0e3313147e88ecc->member_info['id'], $C2aaac60d16a3fe3b99fcb0176fbe5d7, $c0a20089b6b0fac4d59b6d1eeceaafbf, $fcbd8a94125e8f5a21433cd1ab90e407, $A298f54616281708c1002e0c3f04e501, json_encode($A0951fe8d1e4d37a4b8831a6eebd8a54['bouquets']), $F0d385a3b668a8730e8f689ec6bd2cad == 'trial' ? 1 : 0, time(), $c83b7d347a6bc7f5f0e3313147e88ecc->member_info['id'], $A0951fe8d1e4d37a4b8831a6eebd8a54['is_isplock']);
	}
default:
	if ($c83b7d347a6bc7f5f0e3313147e88ecc->eC28097BFBDeDDF7488ba03667C68540()) {
	}

	require ('../init.php');

	$Fce20624c9b6567a7a8c441a4651444d = $f9a8823715bcb54e8069e0086da240b2['no_packages_found_group'];

	unset(b8a6eA05Eebc7E2e3503ea794B1A1EE4::$request['action']);
}

require (IPTV_TEMPLATES_PATH . '/' . 'header_normal.php');

?> 

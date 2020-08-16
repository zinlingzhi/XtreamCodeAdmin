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
$b8980526936694b2cd4cf6c7f8c80396 = B8a6ea05EEbC7e2e3503eA794B1a1ee4::$request['action'];

require (IPTV_TEMPLATES_PATH . '/' . '/userpanel/' . 'add_mag.php');

session_start();

unset(b8a6eA05EeBc7e2e3503EA794B1A1eE4::$request['action']);
switch ($b8980526936694b2cd4cf6c7f8c80396) {
case 'add_mag':
	$Fac708114f97b667403407d22b554e84 = ($F0d385a3b668a8730e8f689ec6bd2cad == 'trial' ? '<font color=\'red\'>Trial</font>' : '<font color=\'green\'>Official</font>');

	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['mag_mac_exists'];

	$c54c54ab036345c65837de303ce7e77f = true;

	switch ($d086905492937bd4d220b0847d836979) {
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
		$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `user_output` (`user_id`,`access_output_id`) VALUES(\'%d\',\'%d\')', $fd7f2f8cde8b865243a388c219894e64, 1);

		$B93f5250a2e921968a32367225267b24 = $A0951fe8d1e4d37a4b8831a6eebd8a54['trial_duration'];
		$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['you_cant_generate_trials'];
		$C2aaac60d16a3fe3b99fcb0176fbe5d7 = b8a6ea05EeBc7E2e3503ea794B1a1Ee4::DAEb9fEd37cD1eC882b897c29F10f77E(10);
		$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `users` (`member_id`,`username`,`password`,`exp_date`,`reseller_notes`,`bouquet`,`is_trial`,`created_at`,`created_by`,`is_mag`,`is_isplock`)' . "\r\n" . '                                                      VALUES (\'%d\',\'%s\',\'%s\',\'%d\',\'%s\',\'%s\',\'%d\',\'%d\',\'%d\',1,\'%d\')', $c83b7d347a6bc7f5f0e3313147e88ecc->member_info['id'], $C2aaac60d16a3fe3b99fcb0176fbe5d7, $c0a20089b6b0fac4d59b6d1eeceaafbf, $fcbd8a94125e8f5a21433cd1ab90e407, $A298f54616281708c1002e0c3f04e501, json_encode($A0951fe8d1e4d37a4b8831a6eebd8a54['bouquets']), $F0d385a3b668a8730e8f689ec6bd2cad == 'trial' ? 1 : 0, time(), $c83b7d347a6bc7f5f0e3313147e88ecc->member_info['id'], $A0951fe8d1e4d37a4b8831a6eebd8a54['is_isplock']);

		$A0951fe8d1e4d37a4b8831a6eebd8a54 = FAfE9c6FBA1254DBCd5CCAdE27Af28d9($e27eaafd53aca98f32c2b81a06c4d083);
		$F0d385a3b668a8730e8f689ec6bd2cad = (b8A6eA05Eebc7e2e3503eA794b1a1Ee4::$request['line_type'] == 'official' ? 'official' : 'trial');
		$A298f54616281708c1002e0c3f04e501 = (!empty(b8a6eA05Eebc7E2e3503EA794B1a1ee4::$request['reseller_notes']) ? B8A6eA05EEbc7E2e3503eA794b1A1eE4::$request['reseller_notes'] : '');
		$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `mag_devices` (`user_id`,`mac`,`created`,`watchdog_timeout`) VALUES(\'%d\',\'%s\',\'%d\',\'%d\')', $fd7f2f8cde8b865243a388c219894e64, $a4e6e437f123785c5867b3e1ae39c5a8, time(), mt_rand(10, 40));

		$a4e6e437f123785c5867b3e1ae39c5a8 = strtoupper(b8A6eA05eebc7e2e3503ea794b1a1eE4::$request['mac']);

		if (!in_array($c83b7d347a6bc7f5f0e3313147e88ecc->member_info['member_group_id'], $A0951fe8d1e4d37a4b8831a6eebd8a54['groups'])) {
		}

		$e27eaafd53aca98f32c2b81a06c4d083 = intval(B8A6eA05EeBc7E2E3503Ea794b1A1EE4::$request['package_id']);

		$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['complete_fields'];
		$Be1fd85981919567dae0b8ea3ae211dc = $A0951fe8d1e4d37a4b8831a6eebd8a54['official_credits'];

		if ($c54c54ab036345c65837de303ce7e77f) {
		}

		if (DEeAC300Efc72Ef5D6E59669435B60F1($c83b7d347a6bc7f5f0e3313147e88ecc->member_info['id'])) {
		}

		$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['licence_invalid'];

		if (a8379BE1602eFA9914014C89c86769BA()) {
		}

		$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['mag_device_added'];
		$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['wrong_mac'];
	default:
		$fd7f2f8cde8b865243a388c219894e64 = $D29f3c5494cb370b46f3e907dc61f106->F1B4b6779c28F4ad97a35E4A54Fd0416();

		$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['not_enough_credits'];

		$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `reg_userlog` (`owner`,`username`,`password`,`date`,`type`) VALUES(\'%s\',\'%s\',\'%s\',\'%s\',\'%s\')', $c83b7d347a6bc7f5f0e3313147e88ecc->member_info['username'], base64_decode($a4e6e437f123785c5867b3e1ae39c5a8), '-', time(), $f9a8823715bcb54e8069e0086da240b2['add_new_mag'] . ' ' . $Fac708114f97b667403407d22b554e84 . ' [ ' . $A0951fe8d1e4d37a4b8831a6eebd8a54['package_name'] . ' | (exp ' . date('d/m/Y H:i:s', $fcbd8a94125e8f5a21433cd1ab90e407) . ') ]');

		$c0a20089b6b0fac4d59b6d1eeceaafbf = B8a6ea05eEbc7e2e3503ea794b1A1ee4::daEb9Fed37cd1Ec882b897C29f10f77E(10);

		$B93f5250a2e921968a32367225267b24 = $A0951fe8d1e4d37a4b8831a6eebd8a54['official_duration'];

		$c54c54ab036345c65837de303ce7e77f = false;
		$d086905492937bd4d220b0847d836979 = $A0951fe8d1e4d37a4b8831a6eebd8a54['trial_duration_in'];
	default:
	default:
		$a4e6e437f123785c5867b3e1ae39c5a8 = base64_encode($a4e6e437f123785c5867b3e1ae39c5a8);
	}
}

$c83b7d347a6bc7f5f0e3313147e88ecc->fa7e9FB747dd7976DD94eA27fa865b5d();

if ($c83b7d347a6bc7f5f0e3313147e88ecc->EC28097bFbDEddf7488bA03667C68540()) {
}

$Fce20624c9b6567a7a8c441a4651444d = $f9a8823715bcb54e8069e0086da240b2['no_packages_found_group'];
require (IPTV_TEMPLATES_PATH . '/' . 'footer.php');
require (IPTV_TEMPLATES_PATH . '/' . 'header_normal.php');
require ('../init.php');
exit(0);
$a92088ce51f93854fd7819a3b5f2dee4 = B2CEA41370722D68183f95F62F64Dd7F($c83b7d347a6bc7f5f0e3313147e88ecc->member_info['group_id'], array('can_gen_mag' => 1));

?> 

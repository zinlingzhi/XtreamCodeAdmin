<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

require (IPTV_TEMPLATES_PATH . '/' . 'header_admin.php');

require (IPTV_TEMPLATES_PATH . '/' . 'footer.php');

$b8980526936694b2cd4cf6c7f8c80396 = b8A6eA05eEBC7e2e3503eA794B1a1EE4::$request['action'];
$b73d24f79f1cbc21896642963be4f2e3 = d302c02BBA3CA2e1b1e6Ece4bE7B8e35();

unset(b8A6EA05eeBc7E2e3503eA794B1A1Ee4::$request['action']);

switch ($b8980526936694b2cd4cf6c7f8c80396) {
default:
	header('Location: ../index.php?error=NO_ADMIN');
case 'edit':
	$D6c104db69a97652da2a14e2400dc6b4 = B8a6eA05eebC7e2E3503EA794B1a1EE4::$request['package_name'];
	$Eb3996f7c99f35e76cb0615ecfd2ea04 = (empty(B8A6ea05eEbC7E2E3503Ea794B1a1ee4::$request['only_mag']) ? 0 : 1);

	$Eb0025646fafa4d28c3872e12d14a56c = array_map('intval', array_keys(b8a6ea05eeBc7E2E3503Ea794B1a1Ee4::$request['stream_output_format']));

	$Da7c7e2480b118fd39a8a9fccb7add6d = b8a6EA05EEBC7e2e3503EA794B1A1Ee4::$request['trial_duration_in'];

	$c793d604f2518c7fa7180e274bef95d5 = array_values(array_unique(array_map('intval', b8A6ea05eEbc7E2e3503EA794B1A1eE4::$request['bouquets'])));

	$Bcc6103b3b1d4a530a6182e656752437 = (double) B8A6eA05EEbC7e2E3503eA794B1A1Ee4::$request['official_credits'];
	$D55e1ccfffb8f98ed27fb835d426cde2 = (empty(B8a6EA05EEBC7E2E3503eA794b1a1Ee4::$request['is_trial']) ? 0 : 1);

	$c0976c7b02cb3202dbd0eb8580d04748 = array_values(array_unique(array_map('intval', B8a6EA05eebc7e2e3503eA794B1a1eE4::$request['groups'])));
	$F0785d9e967d7deeb4b766526285b3fe = intval(B8A6ea05EebC7E2E3503ea794b1A1eE4::$request['trial_duration']);
	$B8a7dad874c0e65b9e24f0081ce4c2c7 = (($ddee799b57ee76394b3f249ef81e3c7e == 0) || empty(b8A6ea05EeBc7E2e3503Ea794b1a1EE4::$request['is_isplock']) || (b8A6eA05Eebc7E2e3503ea794B1A1eE4::$request['is_isplock'] <= 0) ? 0 : 1);

	$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `packages` SET `package_name` = \'%s\',' . "\r\n" . '                                                                       `is_trial` = %s,' . "\r\n" . '                                                                       `is_official` = \'%s\',' . "\r\n" . '                                                                       `trial_credits` = \'%.2f\',' . "\r\n" . '                                                                       `official_credits` = \'%.2f\',' . "\r\n" . '                                                                       `trial_duration` = \'%d\',' . "\r\n" . '                                                                       `trial_duration_in` = \'%s\',' . "\r\n" . '                                                                       `official_duration` = \'%d\',' . "\r\n" . '                                                                       `official_duration_in` = \'%s\',' . "\r\n" . '                                                                       `groups` = \'%s\',' . "\r\n" . '                                                                       `bouquets` = \'%s\',' . "\r\n" . '                                                                       `can_gen_mag` = \'%d\',' . "\r\n" . '                                                                       `only_mag` = \'%d\',' . "\r\n" . '                                                                       `output_formats` = \'%s\',' . "\r\n" . '                                                                       `is_isplock` = \'%d\'' . "\r\n" . '                                                                       WHERE `id` = \'%d\'', $D6c104db69a97652da2a14e2400dc6b4, $D55e1ccfffb8f98ed27fb835d426cde2, $d11c80bb97f709afc030a76e43db9c70, $F8ad2e84b365e173e0cbcea757bc90c1, $Bcc6103b3b1d4a530a6182e656752437, $F0785d9e967d7deeb4b766526285b3fe, $Da7c7e2480b118fd39a8a9fccb7add6d, $a70c6f6bd82c37d2b5401f1765aa1395, $aea7f731866d62f3d58817a2ba9c6fdc, json_encode($c0976c7b02cb3202dbd0eb8580d04748), json_encode($c793d604f2518c7fa7180e274bef95d5), $b587df72efabcd9449e1abc991c1c05a, $Eb3996f7c99f35e76cb0615ecfd2ea04, json_encode($Eb0025646fafa4d28c3872e12d14a56c), $B8a7dad874c0e65b9e24f0081ce4c2c7, $e27eaafd53aca98f32c2b81a06c4d083);

	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['complete_fields'];
	$b587df72efabcd9449e1abc991c1c05a = (empty(b8a6eA05EeBC7E2E3503Ea794B1a1eE4::$request['can_gen_mag']) ? 0 : 1);
	if (($D6c104db69a97652da2a14e2400dc6b4 == $A0951fe8d1e4d37a4b8831a6eebd8a54['package_name']) || !Dbeb6a2d3fDF653C03c41185A9D463C0('packages', 'package_name', $D6c104db69a97652da2a14e2400dc6b4)) {
	}

	$aea7f731866d62f3d58817a2ba9c6fdc = b8a6Ea05eEBC7e2E3503EA794B1A1eE4::$request['official_duration_in'];
	$F8ad2e84b365e173e0cbcea757bc90c1 = (double) B8a6ea05EebC7E2E3503EA794B1a1eE4::$request['trial_credits'];
	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['package_edited'];
	$d11c80bb97f709afc030a76e43db9c70 = (empty(b8a6eA05eeBc7e2E3503eA794B1A1eE4::$request['is_official']) ? 0 : 1);
	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['package_exists'];
	$a70c6f6bd82c37d2b5401f1765aa1395 = intval(B8a6EA05EeBC7e2E3503ea794B1a1eE4::$request['official_duration']);
default:
	require (IPTV_TEMPLATES_PATH . '/' . '/admin/' . 'edit_package.php');

	$A0951fe8d1e4d37a4b8831a6eebd8a54 = FAfE9c6fba1254DBcd5CcADE27Af28d9($e27eaafd53aca98f32c2b81a06c4d083);

	if (!DBeB6a2d3fDF653c03C41185A9D463C0('packages', 'id', $e27eaafd53aca98f32c2b81a06c4d083)) {
	}

	require ('../init.php');

	$e27eaafd53aca98f32c2b81a06c4d083 = B8a6eA05eeBC7E2E3503Ea794b1A1Ee4::$request['id'];
	session_start();
	if (!(!empty(b8A6eA05EEbc7e2e3503ea794B1A1ee4::$request['id']) && is_numeric(B8A6Ea05Eebc7e2e3503eA794b1A1eE4::$request['id']))) {
	}

	$c793d604f2518c7fa7180e274bef95d5 = DEc4175b1411686ec61B25AA8d1Aa017();
	$c83b7d347a6bc7f5f0e3313147e88ecc->FA7E9FB747Dd7976Dd94EA27Fa865B5d();
default:
	$Bda8edc28509d4243a1d0bd7710d1201 = aD2D01e289081a9f123014e2b99c42D0();
	exit(0);
	$Fce20624c9b6567a7a8c441a4651444d = $f9a8823715bcb54e8069e0086da240b2['package_nexists'];
	$ddee799b57ee76394b3f249ef81e3c7e = (b8a6ea05EeBC7e2E3503EA794B1a1EE4::$licence['reshare_deny_addon'] == 1 ? true : false);

	$A0951fe8d1e4d37a4b8831a6eebd8a54 = FafE9c6FBA1254dbcD5ccaDe27af28D9($e27eaafd53aca98f32c2b81a06c4d083);
	$d003a5cb26aca0149157c219bf102484 = false;
}


?> 

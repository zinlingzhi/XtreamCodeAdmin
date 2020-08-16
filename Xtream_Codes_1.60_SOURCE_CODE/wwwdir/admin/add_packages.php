<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

$b8980526936694b2cd4cf6c7f8c80396 = B8a6ea05eEbc7e2E3503eA794b1a1Ee4::$request['action'];

require (IPTV_TEMPLATES_PATH . '/' . '/admin/' . 'add_packages.php');

$b73d24f79f1cbc21896642963be4f2e3 = D302C02bba3Ca2e1B1E6ece4be7b8E35();

switch ($b8980526936694b2cd4cf6c7f8c80396) {
case 'add_new':
	$D55e1ccfffb8f98ed27fb835d426cde2 = (empty(B8A6eA05eEBc7e2e3503EA794B1a1eE4::$request['is_trial']) ? 0 : 1);
	if ((0 < count(B8a6Ea05eEBc7E2e3503EA794b1A1eE4::$request)) && !empty(B8A6EA05eEbC7e2E3503EA794B1a1ee4::$request['stream_output_format']) && is_array(b8A6EA05eEBC7e2E3503Ea794B1a1EE4::$request['stream_output_format']) && (!empty(B8A6EA05EEbc7e2e3503EA794b1a1ee4::$request['is_trial']) || !empty(B8a6Ea05eEbC7E2E3503eA794b1a1eE4::$request['is_official'])) && !empty(b8a6eA05EEbC7e2e3503eA794B1A1eE4::$request['package_name']) && !empty(b8A6Ea05EeBc7E2e3503eA794B1A1ee4::$request['groups']) && is_array(b8a6Ea05eEbC7E2e3503Ea794b1A1ee4::$request['groups']) && !empty(b8A6ea05eeBc7e2E3503ea794B1A1eE4::$request['bouquets']) && is_array(b8A6EA05EebC7e2e3503eA794b1a1EE4::$request['bouquets'])) {
	}

	$Eb0025646fafa4d28c3872e12d14a56c = array_map('intval', array_keys(B8a6EA05EEbC7E2e3503Ea794b1A1eE4::$request['stream_output_format']));

	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['package_exists'];

	$D6c104db69a97652da2a14e2400dc6b4 = b8A6eA05eEBC7E2E3503eA794B1a1ee4::$request['package_name'];
	$Eb3996f7c99f35e76cb0615ecfd2ea04 = (empty(b8A6eA05EEbc7E2E3503eA794b1a1ee4::$request['only_mag']) ? 0 : 1);

	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['package_added'];
	$d11c80bb97f709afc030a76e43db9c70 = (empty(B8a6eA05eEBc7e2e3503Ea794b1a1ee4::$request['is_official']) ? 0 : 1);

	$a70c6f6bd82c37d2b5401f1765aa1395 = intval(b8A6eA05eEBC7e2e3503ea794b1a1ee4::$request['official_duration']);

	$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `packages` (`package_name`,`is_trial`,`is_official`,`trial_credits`,`official_credits`,`trial_duration`,`trial_duration_in`,`official_duration`,`official_duration_in`,`groups`,`bouquets`,`can_gen_mag`,`only_mag`,`output_formats`,`is_isplock`) ' . "\r\n" . '                        VALUES(\'%s\',\'%d\',\'%d\',\'%.2f\',\'%.2f\',\'%d\',\'%s\',\'%d\',\'%s\',\'%s\',\'%s\',\'%d\',\'%d\',\'%s\',\'%d\')', $D6c104db69a97652da2a14e2400dc6b4, $D55e1ccfffb8f98ed27fb835d426cde2, $d11c80bb97f709afc030a76e43db9c70, $F8ad2e84b365e173e0cbcea757bc90c1, $Bcc6103b3b1d4a530a6182e656752437, $F0785d9e967d7deeb4b766526285b3fe, $Da7c7e2480b118fd39a8a9fccb7add6d, $a70c6f6bd82c37d2b5401f1765aa1395, $aea7f731866d62f3d58817a2ba9c6fdc, json_encode($c0976c7b02cb3202dbd0eb8580d04748), json_encode($c793d604f2518c7fa7180e274bef95d5), $b587df72efabcd9449e1abc991c1c05a, $Eb3996f7c99f35e76cb0615ecfd2ea04, json_encode($Eb0025646fafa4d28c3872e12d14a56c), $B8a7dad874c0e65b9e24f0081ce4c2c7);
	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['complete_fields'];
	$b587df72efabcd9449e1abc991c1c05a = (empty(b8a6EA05eEBC7E2e3503Ea794b1a1Ee4::$request['can_gen_mag']) ? 0 : 1);

	$Da7c7e2480b118fd39a8a9fccb7add6d = b8A6EA05eeBc7e2E3503Ea794B1a1ee4::$request['trial_duration_in'];

	$F8ad2e84b365e173e0cbcea757bc90c1 = (double) b8a6eA05EeBC7E2e3503Ea794b1A1EE4::$request['trial_credits'];
	$Bcc6103b3b1d4a530a6182e656752437 = (double) b8a6Ea05eEbC7e2e3503EA794B1a1Ee4::$request['official_credits'];

	$c0976c7b02cb3202dbd0eb8580d04748 = array_values(array_unique(array_map('intval', B8A6ea05EEbc7e2e3503eA794B1A1Ee4::$request['groups'])));

	$aea7f731866d62f3d58817a2ba9c6fdc = b8a6eA05eeBc7E2e3503Ea794b1a1Ee4::$request['official_duration_in'];
	$F0785d9e967d7deeb4b766526285b3fe = intval(B8A6Ea05eeBc7e2e3503ea794B1A1ee4::$request['trial_duration']);

	if (!DbeB6a2D3FDF653c03C41185a9D463c0('packages', 'package_name', $D6c104db69a97652da2a14e2400dc6b4)) {
	}

	$B8a7dad874c0e65b9e24f0081ce4c2c7 = (($ddee799b57ee76394b3f249ef81e3c7e == 0) || empty(B8A6Ea05EEbC7e2e3503Ea794b1a1ee4::$request['is_isplock']) || (b8A6eA05eebc7E2e3503Ea794B1A1Ee4::$request['is_isplock'] <= 0) ? 0 : 1);

	$c793d604f2518c7fa7180e274bef95d5 = array_values(array_unique(array_map('intval', B8A6ea05EEbc7e2E3503eA794B1A1eE4::$request['bouquets'])));
default:
default:
	$c793d604f2518c7fa7180e274bef95d5 = deC4175B1411686ec61b25Aa8d1AA017();

	$c83b7d347a6bc7f5f0e3313147e88ecc->FA7e9fb747Dd7976dD94EA27FA865B5D();

	exit(0);

	require (IPTV_TEMPLATES_PATH . '/' . 'header_admin.php');

	$Fce20624c9b6567a7a8c441a4651444d = $f9a8823715bcb54e8069e0086da240b2['add_bouquet_first'];

	header('Location: ../index.php?error=NO_ADMIN');
	unset(B8a6EA05eebc7e2e3503EA794b1a1eE4::$request['action']);

	if ($c83b7d347a6bc7f5f0e3313147e88ecc->cB674E1c9bbDB0E29aD2a7a35964aE35()) {
	}

	require (IPTV_TEMPLATES_PATH . '/' . 'footer.php');
default:
default:
}

?> 

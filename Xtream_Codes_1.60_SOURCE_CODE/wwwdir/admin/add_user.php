<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

$c793d604f2518c7fa7180e274bef95d5 = Dec4175b1411686ec61b25aa8d1aa017();
unset(b8a6eA05EEbC7e2e3503EA794b1A1Ee4::$request['action']);

switch ($b8980526936694b2cd4cf6c7f8c80396) {
default:
	require (IPTV_TEMPLATES_PATH . '/' . 'header_admin.php');

	$Ab3a8d55cf30f547f0cd260e8a12821a = d6322fddbB063F77df22d1ef7Aa2E429();

	require (IPTV_TEMPLATES_PATH . '/' . '/admin/' . 'add_user.php');
	$ddee799b57ee76394b3f249ef81e3c7e = (b8a6eA05eeBC7e2e3503ea794b1a1EE4::$licence['reshare_deny_addon'] == 1 ? true : false);
	$Fce20624c9b6567a7a8c441a4651444d = $f9a8823715bcb54e8069e0086da240b2['add_bouquet_first'];

	$Bda8edc28509d4243a1d0bd7710d1201 = AD2D01e289081a9F123014e2b99C42d0();
	require (IPTV_TEMPLATES_PATH . '/' . 'footer.php');

	$b8980526936694b2cd4cf6c7f8c80396 = b8A6ea05Eebc7e2E3503ea794b1a1Ee4::$request['action'];
	header('Location: ../index.php?error=NO_ADMIN');
	exit(0);
case 'add_user':
	$d72612f189fd647ca9cbf74b4ae7dc40 = b8A6EA05eeBC7E2E3503eA794b1a1EE4::$request['admin_notes'];
	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['user_added'];
	$Fac708114f97b667403407d22b554e84 = ($D55e1ccfffb8f98ed27fb835d426cde2 == 1 ? '<font color=\'red\'>Trial</font>' : '<font color=\'green\'>Official</font>');
	$Bb6ed5383518449fd63ab48f5930694d = (is_numeric($a922b55f309483feb7cf56ee35c2c75b) ? F305999b96e33aA4a8DD91a5939Ae634($a922b55f309483feb7cf56ee35c2c75b - time()) : $f9a8823715bcb54e8069e0086da240b2['unlimited']);

	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['licence_invalid'];
	$A26347ec72cc7fc1587ce4ccf72a9293 = (!empty(B8a6Ea05EeBc7e2E3503eA794b1A1ee4::$request['force_server_id']) && array_key_exists(b8A6ea05eEbC7E2E3503eA794b1a1EE4::$request['force_server_id'], B8a6EA05EEbC7E2E3503eA794B1A1eE4::$StreamingServers) ? intval(B8a6Ea05EEbC7e2E3503eA794B1A1ee4::$request['force_server_id']) : 0);

	$Ca6af2c8b13444a2978cb0ef98cedaae = $D29f3c5494cb370b46f3e907dc61f106->b68c0609C13F8645d5e168b69fd4C118();

	$f29042912ff5e61e7bfa6ab5a3a4bcde = $D29f3c5494cb370b46f3e907dc61f106->f1B4b6779C28f4aD97a35E4A54fd0416();

	$Eb0025646fafa4d28c3872e12d14a56c = array();
	$Cfc6e14d05e89d8f30f2091a51ce70af = (($D587574cd4d59dd8e25063c18b2206ef == 1) || empty(B8A6EA05EeBC7e2e3503EA794b1A1Ee4::$request['allowed_ua']) ? array() : array_values(@array_filter(B8A6ea05eeBC7e2E3503ea794b1A1ee4::$request['allowed_ua'])));
	if (($D587574cd4d59dd8e25063c18b2206ef == 0) && (empty(b8a6EA05eeBc7e2e3503ea794B1a1EE4::$request['stream_output_format']) || !is_array(b8A6EA05eeBC7E2e3503Ea794B1a1eE4::$request['stream_output_format']))) {
	}

	if (Dbeb6a2D3Fdf653C03c41185a9d463c0('reg_users', 'id', $d55019f4078483b70d22314f63b28b59)) {
	}

	$D29f3c5494cb370b46f3e907dc61f106->query('SELECT `username` FROM `reg_users` WHERE `id` = \'%d\'', $d55019f4078483b70d22314f63b28b59);
	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['member_not_exists'];

	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['line_exists'];
	$F0d385a3b668a8730e8f689ec6bd2cad = ($D55e1ccfffb8f98ed27fb835d426cde2 == 1 ? 'Trial' : 'Official');
	$eb24a7788b6a8daa17f8bf7453554435 = (($D587574cd4d59dd8e25063c18b2206ef == 1) || empty(B8A6EA05eEbC7e2E3503eA794B1A1EE4::$request['max_connections']) ? 0 : intval(abs(b8a6eA05eEBC7E2e3503Ea794B1A1EE4::$request['max_connections'])));

	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['complete_fields'];
	$c0a20089b6b0fac4d59b6d1eeceaafbf = (!empty(b8A6eA05eEBC7E2e3503EA794b1A1ee4::$request['password']) ? B8A6eA05eEbc7E2e3503eA794B1a1Ee4::$request['password'] : B8a6Ea05EEBc7E2e3503ea794B1a1eE4::dAeb9fED37CD1eC882B897c29F10F77E(10));
	$C9da33a41cefe4e07f9c49f45a917f3e = ($a922b55f309483feb7cf56ee35c2c75b == 'NULL' ? '<font color=\'red\'>' . $f9a8823715bcb54e8069e0086da240b2['unlimited'] . '</font>' : '<font color=\'green\'>' . date('d/m/Y H:i:s', $a922b55f309483feb7cf56ee35c2c75b) . '</font>');
	$C2aaac60d16a3fe3b99fcb0176fbe5d7 = (!empty(B8A6EA05EEbc7E2e3503eA794B1a1Ee4::$request['username']) ? b8A6EA05eEBC7e2e3503Ea794B1a1Ee4::$request['username'] : b8a6eA05EEBc7e2E3503eA794B1A1ee4::Daeb9fed37Cd1EC882B897C29F10F77e(10));
	$D55e1ccfffb8f98ed27fb835d426cde2 = (($D587574cd4d59dd8e25063c18b2206ef == 0) && !empty(B8A6eA05eEBC7E2e3503EA794b1a1Ee4::$request['is_trial']) ? 1 : 0);
	$D02cf1c2f87e828feedbe85a2606dcef = (($D587574cd4d59dd8e25063c18b2206ef == 1) || empty(b8a6EA05eEbC7E2e3503ea794b1A1Ee4::$request['is_restreamer']) || (B8A6EA05eebC7e2E3503Ea794b1A1Ee4::$request['is_restreamer'] <= 0) ? 0 : 1);

	$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `reg_userlog` (`owner`,`username`,`password`,`date`,`type`) VALUES(\'%s\',\'%s\',\'%s\',\'%s\',\'%s\')', $Ca6af2c8b13444a2978cb0ef98cedaae, $C2aaac60d16a3fe3b99fcb0176fbe5d7, $c0a20089b6b0fac4d59b6d1eeceaafbf, time(), $f9a8823715bcb54e8069e0086da240b2['user_added'] . ' ' . $Fac708114f97b667403407d22b554e84 . ' [ ' . $f9a8823715bcb54e8069e0086da240b2['creator'] . ': ' . $c83b7d347a6bc7f5f0e3313147e88ecc->member_info['username'] . ' | (exp ' . $C9da33a41cefe4e07f9c49f45a917f3e . ') ]');

	$Eb0025646fafa4d28c3872e12d14a56c = array_map('intval', array_keys(B8a6ea05eEbC7E2e3503Ea794b1a1Ee4::$request['stream_output_format']));
	$a922b55f309483feb7cf56ee35c2c75b = (($D587574cd4d59dd8e25063c18b2206ef == 0) && !empty(B8A6Ea05EEbC7e2e3503ea794b1a1EE4::$request['expire_date']) ? strtotime(b8a6eA05EEBC7E2e3503eA794B1A1eE4::$request['expire_date']) : 'NULL');
	$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `users` (`member_id`,`username`,`password`,`exp_date`,`admin_notes`,`bouquet`,`max_connections`,`is_restreamer`,`allowed_ips`,`allowed_ua`,`is_trial`,`created_at`,`created_by`,`force_server_id`,`is_isplock`,`forced_country`,`is_stalker`) ' . "\r\n" . '                            VALUES (\'%d\',\'%s\',\'%s\',%s,\'%s\',\'%s\',\'%d\',\'%d\',\'%s\',\'%s\',\'%d\',\'%d\',\'%d\',\'%d\',\'%d\',\'%s\',\'%d\')', $d55019f4078483b70d22314f63b28b59, $C2aaac60d16a3fe3b99fcb0176fbe5d7, $c0a20089b6b0fac4d59b6d1eeceaafbf, $a922b55f309483feb7cf56ee35c2c75b, $d72612f189fd647ca9cbf74b4ae7dc40, json_encode($c793d604f2518c7fa7180e274bef95d5), $eb24a7788b6a8daa17f8bf7453554435, $D02cf1c2f87e828feedbe85a2606dcef, json_encode($ef60d74f311ef52f6bd7bb1517a2a04f), json_encode($Cfc6e14d05e89d8f30f2091a51ce70af), $D55e1ccfffb8f98ed27fb835d426cde2, time(), $c83b7d347a6bc7f5f0e3313147e88ecc->member_info['id'], $A26347ec72cc7fc1587ce4ccf72a9293, $B8a7dad874c0e65b9e24f0081ce4c2c7, $b39c1640f84f0655d3a0817379c8973e, $D587574cd4d59dd8e25063c18b2206ef);

	foreach ($Eb0025646fafa4d28c3872e12d14a56c as $d003a5cb26aca0149157c219bf102484) {
		$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `user_output` (`user_id`,`access_output_id`) VALUES(\'%d\',\'%d\')', $f29042912ff5e61e7bfa6ab5a3a4bcde, $d003a5cb26aca0149157c219bf102484);
	}

	$b39c1640f84f0655d3a0817379c8973e = b8a6eA05eeBC7E2e3503EA794B1a1EE4::$request['forced_country'];
	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['complete_fields'];
	$B8a7dad874c0e65b9e24f0081ce4c2c7 = (($D587574cd4d59dd8e25063c18b2206ef == 1) || ($ddee799b57ee76394b3f249ef81e3c7e == 0) || empty(B8a6eA05EEBC7E2e3503ea794b1A1EE4::$request['is_isplock']) || (B8a6EA05EEbC7E2e3503EA794b1A1EE4::$request['is_isplock'] <= 0) ? 0 : 1);

	$Eb0025646fafa4d28c3872e12d14a56c = array(2);
	$ef60d74f311ef52f6bd7bb1517a2a04f = (($D587574cd4d59dd8e25063c18b2206ef == 1) || empty(B8a6eA05EEBc7e2E3503ea794B1a1ee4::$request['allowed_ips']) ? array() : array_values(array_unique(b8a6ea05EeBc7E2E3503eA794B1A1eE4::$request['allowed_ips'])));
	$D587574cd4d59dd8e25063c18b2206ef = (!empty(b8A6EA05EEbc7e2e3503ea794B1a1ee4::$request['is_stalker']) ? 1 : 0);
	$c793d604f2518c7fa7180e274bef95d5 = array_values(array_unique(array_map('intval', b8a6Ea05eEbc7e2e3503eA794b1a1eE4::$request['bouquets'])));

	if (!dBEB6A2D3Fdf653c03c41185a9D463C0('users', 'username', $C2aaac60d16a3fe3b99fcb0176fbe5d7)) {
	}

	$d55019f4078483b70d22314f63b28b59 = intval(B8A6Ea05EeBc7e2E3503EA794B1a1Ee4::$request['member_id']);
default:
	if ($c83b7d347a6bc7f5f0e3313147e88ecc->Cb674e1c9BBdb0E29AD2a7A35964ae35()) {
	}


	$c83b7d347a6bc7f5f0e3313147e88ecc->fA7E9fb747dd7976DD94ea27fa865b5D();
}

?> 

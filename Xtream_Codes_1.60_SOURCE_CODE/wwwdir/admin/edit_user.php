<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

unset(B8A6EA05Eebc7E2e3503EA794B1A1ee4::$request['action']);

switch ($b8980526936694b2cd4cf6c7f8c80396) {
default:
	require (IPTV_TEMPLATES_PATH . '/' . '/admin/' . 'edit_user.php');

	$Ab3a8d55cf30f547f0cd260e8a12821a = D6322FdDbb063F77df22D1ef7AA2E429();

	$b8980526936694b2cd4cf6c7f8c80396 = B8A6Ea05EEBc7e2E3503ea794b1a1EE4::$request['action'];

	$Fce20624c9b6567a7a8c441a4651444d = $f9a8823715bcb54e8069e0086da240b2['select_line_mng'];

	if (!isset(B8a6Ea05EEBc7e2E3503eA794b1a1eE4::$request['action'])) {
	}

	$fd7f2f8cde8b865243a388c219894e64 = b8a6ea05EeBc7E2e3503EA794b1A1ee4::$request['user_id'];


	$Bda8edc28509d4243a1d0bd7710d1201 = ad2d01E289081a9F123014e2B99C42D0();
	$bf3cd6eed406072de08303c780a1f2cb = DFA6500B681F783bBbcb94474366bb27::FC219ceC06E2ecF9a5083C03b314D183($fd7f2f8cde8b865243a388c219894e64, NULL, NULL);

	session_start();

	$bf3cd6eed406072de08303c780a1f2cb = DfA6500B681F783bbbCB94474366bB27::fc219cEc06E2ECf9a5083C03B314d183($fd7f2f8cde8b865243a388c219894e64, NULL, NULL);

	if (!dbEB6a2d3FdF653c03c41185a9d463C0('users', 'id', $fd7f2f8cde8b865243a388c219894e64)) {
	}

	$fd7f2f8cde8b865243a388c219894e64 = false;

	require ('../init.php');
	if (!empty(B8a6ea05eEBc7e2E3503ea794B1a1Ee4::$request['user_id']) && is_numeric(b8a6eA05EEbC7e2E3503eA794b1a1ee4::$request['user_id'])) {
	}

	require (IPTV_TEMPLATES_PATH . '/' . 'header_admin.php');
	if ($c83b7d347a6bc7f5f0e3313147e88ecc->cb674e1C9BbDB0e29Ad2a7a35964AE35()) {
	}

	$Fce20624c9b6567a7a8c441a4651444d = $f9a8823715bcb54e8069e0086da240b2['line_nexists'];
	$ddee799b57ee76394b3f249ef81e3c7e = (B8a6Ea05EEbc7E2E3503eA794b1a1EE4::$licence['reshare_deny_addon'] == 1 ? true : false);
	require (IPTV_TEMPLATES_PATH . '/' . 'footer.php');

	header('Location: ../index.php?error=NO_ADMIN');
case 'edit_user':
	$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `reg_userlog` (`owner`,`username`,`password`,`date`,`type`) VALUES(\'%s\',\'%s\',\'%s\',\'%s\',\'%s\')', $Ca6af2c8b13444a2978cb0ef98cedaae, $C2aaac60d16a3fe3b99fcb0176fbe5d7, $c0a20089b6b0fac4d59b6d1eeceaafbf, time(), $f9a8823715bcb54e8069e0086da240b2['edit_user'] . ' ' . $Fac708114f97b667403407d22b554e84 . ' [ ' . $b729e1e76a388ffdd6a130fbb0325a8e . ' ]');
	$a922b55f309483feb7cf56ee35c2c75b = (!empty(B8a6eA05eEbC7E2E3503Ea794B1a1Ee4::$request['expire_date']) ? strtotime(B8A6eA05EEbC7E2E3503Ea794b1A1ee4::$request['expire_date']) : 'NULL');

	$D29f3c5494cb370b46f3e907dc61f106->query('SELECT `username` FROM `reg_users` WHERE `id` = \'%d\'', $d55019f4078483b70d22314f63b28b59);

	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['member_not_exists'];
	$b729e1e76a388ffdd6a130fbb0325a8e .= ' Reseller Notes Deleted ';
	$D02cf1c2f87e828feedbe85a2606dcef = (($D587574cd4d59dd8e25063c18b2206ef == 1) || empty(B8a6eA05EEbc7E2e3503eA794b1A1ee4::$request['is_restreamer']) || (b8A6Ea05EEbC7E2e3503ea794B1A1EE4::$request['is_restreamer'] <= 0) ? 0 : 1);

	$Eb0025646fafa4d28c3872e12d14a56c = array_map('intval', array_keys(b8A6eA05eEbC7E2e3503ea794b1A1EE4::$request['stream_output_format']));
	$D55e1ccfffb8f98ed27fb835d426cde2 = (($D587574cd4d59dd8e25063c18b2206ef == 0) && !empty(B8a6Ea05eEBc7e2E3503ea794b1A1eE4::$request['is_trial']) ? 1 : 0);
	$A26347ec72cc7fc1587ce4ccf72a9293 = (!empty(B8A6ea05eebC7E2e3503ea794b1A1eE4::$request['force_server_id']) && array_key_exists(B8a6Ea05eEbC7E2E3503EA794B1A1Ee4::$request['force_server_id'], B8a6EA05Eebc7E2E3503Ea794B1a1eE4::$StreamingServers) ? intval(b8A6eA05EEbc7e2E3503ea794b1A1Ee4::$request['force_server_id']) : 0);
	$B8a7dad874c0e65b9e24f0081ce4c2c7 = (($D587574cd4d59dd8e25063c18b2206ef == 1) || ($ddee799b57ee76394b3f249ef81e3c7e == 0) || empty(b8A6eA05EebC7E2E3503ea794B1A1Ee4::$request['is_isplock']) || (B8a6eA05EEBC7e2e3503Ea794B1a1ee4::$request['is_isplock'] <= 0) ? 0 : 1);

	$b729e1e76a388ffdd6a130fbb0325a8e .= ' New Admin Notes: ' . $d72612f189fd647ca9cbf74b4ae7dc40 . ' ';

	$b39c1640f84f0655d3a0817379c8973e = b8A6EA05eEbc7E2e3503Ea794b1A1EE4::$request['forced_country'];
	$eb24a7788b6a8daa17f8bf7453554435 = (($D587574cd4d59dd8e25063c18b2206ef == 1) || empty(b8a6ea05EEbC7e2e3503EA794B1a1Ee4::$request['max_connections']) ? 0 : intval(abs(B8a6ea05eebC7E2e3503Ea794B1A1EE4::$request['max_connections'])));
	$a0b0150a772b6e518bbb5b40a3649f77 = (time() <= $bf3cd6eed406072de08303c780a1f2cb['exp_date'] ? $a922b55f309483feb7cf56ee35c2c75b - time() : $a922b55f309483feb7cf56ee35c2c75b - $bf3cd6eed406072de08303c780a1f2cb['exp_date']);
	if ((0 < count(b8A6eA05eEbc7E2e3503Ea794B1A1eE4::$request)) && !empty(b8a6ea05EeBc7e2E3503EA794b1A1eE4::$request['member_id']) && !empty(B8a6Ea05eeBC7E2E3503eA794B1a1EE4::$request['username']) && !empty(B8A6eA05eebC7e2e3503EA794b1a1Ee4::$request['password']) && !empty(B8A6EA05EeBC7e2E3503ea794b1a1Ee4::$request['bouquets']) && is_array(B8A6ea05Eebc7E2E3503EA794b1A1EE4::$request['bouquets'])) {
	}

	$d72612f189fd647ca9cbf74b4ae7dc40 = B8A6Ea05EEbC7E2e3503EA794B1a1Ee4::$request['admin_notes'];

	$b729e1e76a388ffdd6a130fbb0325a8e .= '  New Username: ' . $c0a20089b6b0fac4d59b6d1eeceaafbf . ' ';
	$b729e1e76a388ffdd6a130fbb0325a8e .= ' |' . $f9a8823715bcb54e8069e0086da240b2['unlimited'];

	$D29f3c5494cb370b46f3e907dc61f106->query('DELETE FROM `user_output` WHERE `user_id` = \'%d\'', $fd7f2f8cde8b865243a388c219894e64);
	$b729e1e76a388ffdd6a130fbb0325a8e = wordwrap($b729e1e76a388ffdd6a130fbb0325a8e, 20, '<br />' . "\n");
	$D587574cd4d59dd8e25063c18b2206ef = (!empty(b8A6EA05eEBC7E2e3503ea794b1a1Ee4::$request['is_stalker']) ? 1 : 0);

	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['user_edited'];

	$b729e1e76a388ffdd6a130fbb0325a8e = '';
	foreach ($Eb0025646fafa4d28c3872e12d14a56c as $d003a5cb26aca0149157c219bf102484) {
		$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `user_output` (`user_id`,`access_output_id`) VALUES(\'%d\',\'%d\')', $fd7f2f8cde8b865243a388c219894e64, $d003a5cb26aca0149157c219bf102484);
	}

	$f84cc6c3f235fededfc4e843dcb6ef9b = '';

	$b729e1e76a388ffdd6a130fbb0325a8e .= ' |' . $C2aaac60d16a3fe3b99fcb0176fbe5d7;

	$b729e1e76a388ffdd6a130fbb0325a8e .= '|';
	$b729e1e76a388ffdd6a130fbb0325a8e = '';

	$b729e1e76a388ffdd6a130fbb0325a8e .= '|';
	$b729e1e76a388ffdd6a130fbb0325a8e .= '  New Username: ' . $C2aaac60d16a3fe3b99fcb0176fbe5d7 . ' ';

	$Ca6af2c8b13444a2978cb0ef98cedaae = $D29f3c5494cb370b46f3e907dc61f106->b68C0609C13F8645D5e168b69Fd4c118();

	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['complete_fields'];

	if (empty($d72612f189fd647ca9cbf74b4ae7dc40)) {
	}

	$F0d385a3b668a8730e8f689ec6bd2cad = ($D55e1ccfffb8f98ed27fb835d426cde2 == 1 ? 'Trial' : 'Official');

	$Eb0025646fafa4d28c3872e12d14a56c = array(2);

	$b729e1e76a388ffdd6a130fbb0325a8e .= '  New Exp: ' . $a922b55f309483feb7cf56ee35c2c75b . ' (exp ' . f305999b96E33aA4a8DD91a5939ae634($a0b0150a772b6e518bbb5b40a3649f77) . ') ';

	if (!($bf3cd6eed406072de08303c780a1f2cb['password'] != $c0a20089b6b0fac4d59b6d1eeceaafbf)) {
	}

	$f84cc6c3f235fededfc4e843dcb6ef9b = ' (<font color="red">Expired</font>)';

	$b729e1e76a388ffdd6a130fbb0325a8e .= ' New Res Notes: ' . $A298f54616281708c1002e0c3f04e501;
	$C9da33a41cefe4e07f9c49f45a917f3e = ($a922b55f309483feb7cf56ee35c2c75b == 'NULL' ? '<font color=\'red\'>' . $f9a8823715bcb54e8069e0086da240b2['unlimited'] . '</font>' : '<font color=\'green\'>' . date('d/m/Y H:i:s', $a922b55f309483feb7cf56ee35c2c75b) . '</font>');
	$Fac708114f97b667403407d22b554e84 = ($D55e1ccfffb8f98ed27fb835d426cde2 == 1 ? '<font color=\'red\'>Trial</font>' : '<font color=\'green\'>Official</font>');

	$b729e1e76a388ffdd6a130fbb0325a8e .= ' | ' . f305999b96e33AA4A8DD91A5939AE634($a922b55f309483feb7cf56ee35c2c75b - $bf3cd6eed406072de08303c780a1f2cb['exp_date']) . '(exp ' . date('d-m-Y', $a922b55f309483feb7cf56ee35c2c75b);

	if (!($bf3cd6eed406072de08303c780a1f2cb['admin_notes'] != $d72612f189fd647ca9cbf74b4ae7dc40)) {
	}

	$b729e1e76a388ffdd6a130fbb0325a8e .= '|';

	$A298f54616281708c1002e0c3f04e501 = b8A6EA05EeBC7E2E3503Ea794B1A1EE4::$request['reseller_notes'];
	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['complete_fields'];

	if (!($bf3cd6eed406072de08303c780a1f2cb['is_trial'] != $D55e1ccfffb8f98ed27fb835d426cde2)) {
	}

	$b729e1e76a388ffdd6a130fbb0325a8e .= ' Admin Notes Deleted ';

	$C2aaac60d16a3fe3b99fcb0176fbe5d7 = str_replace(' ', '', b8A6eA05eEBc7e2E3503Ea794B1a1eE4::$request['username']);

	if (!($bf3cd6eed406072de08303c780a1f2cb['password'] != $c0a20089b6b0fac4d59b6d1eeceaafbf)) {
	}

	$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `users` SET `member_id` = \'%d\',' . "\r\n" . '                                                             `username` = \'%s\',' . "\r\n" . '                                                             `password` = \'%s\',' . "\r\n" . '                                                             `exp_date` = %s,' . "\r\n" . '                                                             `admin_notes` = \'%s\',' . "\r\n" . '                                                             `reseller_notes` = \'%s\',' . "\r\n" . '                                                             `max_connections` = \'%d\',' . "\r\n" . '                                                             `is_restreamer` = \'%d\',' . "\r\n" . '                                                             `allowed_ips` = \'%s\',' . "\r\n" . '                                                             `allowed_ua` = \'%s\',' . "\r\n" . '                                                             `is_trial` = \'%d\',' . "\r\n" . '                                                             `force_server_id` = \'%d\',' . "\r\n" . '                                                             `is_isplock` = \'%d\',' . "\r\n" . '                                                             `forced_country` = \'%s\',' . "\r\n" . '                                                             `is_stalker` = \'%d\',' . "\r\n" . '                                                             `bouquet` = \'%s\' WHERE `id` = \'%d\'', $d55019f4078483b70d22314f63b28b59, $C2aaac60d16a3fe3b99fcb0176fbe5d7, $c0a20089b6b0fac4d59b6d1eeceaafbf, $a922b55f309483feb7cf56ee35c2c75b, $d72612f189fd647ca9cbf74b4ae7dc40, $A298f54616281708c1002e0c3f04e501, $eb24a7788b6a8daa17f8bf7453554435, $D02cf1c2f87e828feedbe85a2606dcef, json_encode($ef60d74f311ef52f6bd7bb1517a2a04f), json_encode($Cfc6e14d05e89d8f30f2091a51ce70af), $D55e1ccfffb8f98ed27fb835d426cde2, $A26347ec72cc7fc1587ce4ccf72a9293, $B8a7dad874c0e65b9e24f0081ce4c2c7, $b39c1640f84f0655d3a0817379c8973e, $D587574cd4d59dd8e25063c18b2206ef, json_encode($c793d604f2518c7fa7180e274bef95d5), $fd7f2f8cde8b865243a388c219894e64);

	if (!($bf3cd6eed406072de08303c780a1f2cb['username'] != $C2aaac60d16a3fe3b99fcb0176fbe5d7)) {
	}

	$c0a20089b6b0fac4d59b6d1eeceaafbf = str_replace(' ', '', B8A6eA05EEbC7E2E3503ea794B1a1ee4::$request['password']);
	if (is_numeric($a922b55f309483feb7cf56ee35c2c75b) && !is_null($bf3cd6eed406072de08303c780a1f2cb['exp_date'])) {
	}

	if (!($bf3cd6eed406072de08303c780a1f2cb['reseller_notes'] != $A298f54616281708c1002e0c3f04e501)) {
	}

	$b729e1e76a388ffdd6a130fbb0325a8e .= ' New Type: ' . $Fac708114f97b667403407d22b554e84 . ' ';

	$b729e1e76a388ffdd6a130fbb0325a8e .= '|';

	$b729e1e76a388ffdd6a130fbb0325a8e .= '|';

	if (empty($b729e1e76a388ffdd6a130fbb0325a8e)) {
	}

	$b729e1e76a388ffdd6a130fbb0325a8e .= ' |' . date('Y-m-d');
	$Cfc6e14d05e89d8f30f2091a51ce70af = (($D587574cd4d59dd8e25063c18b2206ef == 1) || empty(B8A6Ea05EebC7E2e3503Ea794B1A1EE4::$request['allowed_ua']) ? array() : array_values(@array_filter(b8A6ea05eeBC7e2e3503ea794b1a1Ee4::$request['allowed_ua'])));

	$Eb0025646fafa4d28c3872e12d14a56c = array();
	$ef60d74f311ef52f6bd7bb1517a2a04f = (($D587574cd4d59dd8e25063c18b2206ef == 1) || empty(B8a6eA05eeBC7E2e3503EA794b1A1eE4::$request['allowed_ips']) ? array() : array_values(array_unique(b8A6EA05eEBC7E2e3503eA794b1A1Ee4::$request['allowed_ips'])));

	if (empty($b729e1e76a388ffdd6a130fbb0325a8e)) {
	}

	if (!($a922b55f309483feb7cf56ee35c2c75b != $bf3cd6eed406072de08303c780a1f2cb['exp_date'])) {
	}

	$c793d604f2518c7fa7180e274bef95d5 = array_values(array_unique(array_map('intval', B8a6eA05EEBC7E2e3503ea794B1a1EE4::$request['bouquets'])));
	$b729e1e76a388ffdd6a130fbb0325a8e .= ' |' . $c0a20089b6b0fac4d59b6d1eeceaafbf;
	$b729e1e76a388ffdd6a130fbb0325a8e .= ' | ' . f305999B96e33aA4a8dD91A5939aE634($a922b55f309483feb7cf56ee35c2c75b - time()) . '( exp ' . date('d-m-Y', $a922b55f309483feb7cf56ee35c2c75b) . ' )';
	$d55019f4078483b70d22314f63b28b59 = intval(b8A6Ea05EebC7E2E3503eA794b1a1ee4::$request['member_id']);
default:
	$c83b7d347a6bc7f5f0e3313147e88ecc->fA7e9fB747dD7976Dd94eA27FA865b5D();
	exit(0);
	$c793d604f2518c7fa7180e274bef95d5 = dEc4175B1411686Ec61b25aA8d1Aa017();
}

?> 

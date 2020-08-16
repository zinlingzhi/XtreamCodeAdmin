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

switch ($b8980526936694b2cd4cf6c7f8c80396) {
case 'logout':
	D7318ECEE5dd1d1a8F9c046CB4Bf145D();
	header('Location: ../index.php');

	exit(0);
case 'user_kick':
	dFA6500B681f783bbbCB94474366Bb27::E0822B2f27741024E85a94F93aDc3823($fd7f2f8cde8b865243a388c219894e64);

	$Ec0fedcf3bd9121c0953fbeca121dc3b = dFa6500b681f783BbBCB94474366BB27::FC219cEc06e2ecF9a5083C03B314d183($fd7f2f8cde8b865243a388c219894e64);

	$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `reg_userlog` (`owner`,`username`,`password`,`date`,`type`) VALUES(\'%s\',\'%s\',\'%s\',\'%s\',\'%s\')', $c83b7d347a6bc7f5f0e3313147e88ecc->member_info['username'], $Ec0fedcf3bd9121c0953fbeca121dc3b['username'], $Ec0fedcf3bd9121c0953fbeca121dc3b['password'], time(), $f9a8823715bcb54e8069e0086da240b2['kick_user'] . ' [ ' . $Fac708114f97b667403407d22b554e84 . ' ]');
	$Fac708114f97b667403407d22b554e84 = ($Ec0fedcf3bd9121c0953fbeca121dc3b['is_trial'] == 1 ? '<font color=\'red\'>Trial</font>' : '<font color=\'green\'>Official</font>');

	$fd7f2f8cde8b865243a388c219894e64 = intval(B8A6ea05EeBC7E2e3503ea794B1A1Ee4::$request['user_id']);
	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['user_kicked'];
case 'enabled':
	$fc36179cf1c4571ad2ecb8a178952cf1 = 0;

	$fd7f2f8cde8b865243a388c219894e64 = intval(b8A6eA05Eebc7e2E3503EA794B1A1ee4::$request['user_id']);

	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['user_enabled'];

	$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `reg_userlog` (`owner`,`username`,`password`,`date`,`type`) VALUES(\'%s\',\'%s\',\'%s\',\'%s\',\'%s\')', $c83b7d347a6bc7f5f0e3313147e88ecc->member_info['username'], $Ec0fedcf3bd9121c0953fbeca121dc3b['username'], $Ec0fedcf3bd9121c0953fbeca121dc3b['password'], time(), $B55f78703213d1595283266f835ca867 . ' [ ' . $Fac708114f97b667403407d22b554e84 . ' ]');

	if ($A5f4c44cc29cf8e18b4ff540e79fbe43 == 0) {
	}

	$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `users` SET `enabled` = \'%d\' WHERE `id` = \'%d\'', $fc36179cf1c4571ad2ecb8a178952cf1, $fd7f2f8cde8b865243a388c219894e64);
	$fc36179cf1c4571ad2ecb8a178952cf1 = 1;
	$Fac708114f97b667403407d22b554e84 = ($Ec0fedcf3bd9121c0953fbeca121dc3b['is_trial'] == 1 ? '<font color=\'red\'>Trial</font>' : '<font color=\'green\'>Official</font>');

	if (!bed429fBC949551dD58654fF43e8e22d($fd7f2f8cde8b865243a388c219894e64, $c83b7d347a6bc7f5f0e3313147e88ecc->member_info['id'])) {
	}

	$A5f4c44cc29cf8e18b4ff540e79fbe43 = (isset(B8a6Ea05eEbc7E2e3503ea794b1A1ee4::$request['current']) && (0 < B8A6EA05EEbc7e2E3503eA794B1a1eE4::$request['current']) ? 1 : 0);

	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['user_disabled'];
	$Ec0fedcf3bd9121c0953fbeca121dc3b = DfA6500b681F783bBbcb94474366bB27::FC219CEC06E2EcF9a5083C03b314d183($fd7f2f8cde8b865243a388c219894e64);

	dfa6500B681F783bBbcb94474366Bb27::E0822b2f27741024E85a94f93adC3823($fd7f2f8cde8b865243a388c219894e64);
case 'user_delete':
	$fd7f2f8cde8b865243a388c219894e64 = intval(b8A6eA05eEbc7E2e3503eA794B1a1EE4::$request['user_id']);
	$Fac708114f97b667403407d22b554e84 = ($deb595af0f0f430af9497132ddb4247a['is_trial'] == 1 ? '<font color=\'red\'>Trial</font>' : '<font color=\'green\'>Official</font>');

	$Ec0fedcf3bd9121c0953fbeca121dc3b = DFA6500B681F783BBBCb94474366bb27::fC219CEC06e2Ecf9A5083c03b314D183($fd7f2f8cde8b865243a388c219894e64);

	if (empty(B8A6Ea05eeBC7e2E3503EA794b1a1Ee4::$request['user_id'])) {
	}

	$D29f3c5494cb370b46f3e907dc61f106->query('DELETE FROM `users` WHERE `id` = \'%d\'', $fd7f2f8cde8b865243a388c219894e64);

	$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `reg_userlog` (`owner`,`username`,`password`,`date`,`type`) VALUES(\'%s\',\'%s\',\'%s\',\'%s\',\'%s\')', $c83b7d347a6bc7f5f0e3313147e88ecc->member_info['username'], $Ec0fedcf3bd9121c0953fbeca121dc3b['username'], $Ec0fedcf3bd9121c0953fbeca121dc3b['password'], time(), $B55f78703213d1595283266f835ca867 . ' [ ' . $Fac708114f97b667403407d22b554e84 . ' ]');
	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['user_deleted'];
	DFA6500b681f783Bbbcb94474366Bb27::E0822B2f27741024e85a94F93adC3823($fd7f2f8cde8b865243a388c219894e64);
case 'download_scripts':
	$E0f24f08890a69b3a0d6a822a002d25e = '<center><select style="width:130px" name="list" id="list"><option value="">-</option>';

	$Bda8edc28509d4243a1d0bd7710d1201 = Ad2d01e289081A9f123014E2b99c42D0();

	$Ec0fedcf3bd9121c0953fbeca121dc3b = DFA6500b681f783bbbcb94474366bB27::FC219CEC06e2ECf9A5083C03b314d183($fd7f2f8cde8b865243a388c219894e64);

	$E0f24f08890a69b3a0d6a822a002d25e .= '</select><br /><br /><input type="text" id="replace" size="100" /></center>';

	exit();

	$fd7f2f8cde8b865243a388c219894e64 = intval(b8a6ea05EEBc7e2E3503Ea794B1a1Ee4::$request['user_id']);

	$B87551f17fbd2921a91b1b841eec8a05 = faF691d5477d59C14Db4153EE659f9C0();
	foreach ($B87551f17fbd2921a91b1b841eec8a05 as $F431d380c03befb8a00187edfb240a34) {
		$E0f24f08890a69b3a0d6a822a002d25e .= '</optgroup>';

		foreach ($Bda8edc28509d4243a1d0bd7710d1201 as $ee17e37bde2c409afe712a7cd605cb53) {
			$de8cb5e6bd1059142c6fa701f432692c = (!empty($F431d380c03befb8a00187edfb240a34['copy_text']) ? str_replace('{DEVICE_LINK}', '"' . b8A6EA05Eebc7E2E3503eA794B1a1Ee4::$StreamingServers[SERVER_ID]['site_url'] . 'get.php?username=' . $Ec0fedcf3bd9121c0953fbeca121dc3b['username'] . '&password=' . $Ec0fedcf3bd9121c0953fbeca121dc3b['password'] . '&type=' . $F431d380c03befb8a00187edfb240a34['device_key'] . '&output=' . $ee17e37bde2c409afe712a7cd605cb53['output_key'] . '"', $F431d380c03befb8a00187edfb240a34['copy_text']) : b8a6Ea05EebC7e2e3503eA794B1A1eE4::$StreamingServers[SERVER_ID]['site_url'] . 'get.php?username=' . $Ec0fedcf3bd9121c0953fbeca121dc3b['username'] . '&password=' . $Ec0fedcf3bd9121c0953fbeca121dc3b['password'] . '&type=' . $F431d380c03befb8a00187edfb240a34['device_key'] . '&output=' . $ee17e37bde2c409afe712a7cd605cb53['output_key']);
			$D843db41ffdedb67413ad353d52dead5 = ($F431d380c03befb8a00187edfb240a34['default_output'] == $ee17e37bde2c409afe712a7cd605cb53['access_output_id'] ? ' - Default' : '');
			$E0f24f08890a69b3a0d6a822a002d25e .= '<option value=\'' . $de8cb5e6bd1059142c6fa701f432692c . '\'>' . $ee17e37bde2c409afe712a7cd605cb53['output_name'] . ' ' . $D843db41ffdedb67413ad353d52dead5 . '</option>';
		}

		$E0f24f08890a69b3a0d6a822a002d25e .= '<optgroup style="background:#19D175;" label="' . $F431d380c03befb8a00187edfb240a34['device_name'] . '">';
	}

	echo $E0f24f08890a69b3a0d6a822a002d25e;

	while (empty(b8a6ea05EEBc7E2E3503ea794b1a1Ee4::$request['user_id'])) {
	}

	echo '<script>' . "\r\n" . '                    $(document).ready(function() {' . "\r\n" . '                    ' . "\r\n" . '                        $(\'#list\').on(\'change\',function () {' . "\r\n" . '                            ' . "\r\n" . '                          $(\'#replace\').val($(this).val());' . "\r\n" . '                          $(\'#replace\').select(); ' . "\r\n" . '                          ' . "\r\n" . '                        });' . "\r\n" . '                    });' . "\r\n" . '                    </script>';
case 'load_users':
	exit();

	$c17ac00f16e66552f95207ec7818895a = 1;

	echo json_encode($E6412230eeb5a4348cc57a7876286e4a);

	foreach ($Cecfa885eed4e0be5ea572f6a5e134a4['user_lines'] as $Fa3d19831c58b4235f088f0b5e887ec4) {
		$d510c8dba98eae966876c9ec30cdbf9f['download'] = '<a onclick="ajax_request_dialog(\'index.php?action=download_scripts&user_id=' . $Fa3d19831c58b4235f088f0b5e887ec4['id'] . '\',\'Download Scripts\',\'white\',\'auto\',\'auto\');"><img src=\'../templates/images/download.png\'></a>';

		$C2aaac60d16a3fe3b99fcb0176fbe5d7 = '<font color=\'red\'>' . $Fa3d19831c58b4235f088f0b5e887ec4['username'] . '</font>';

		$d510c8dba98eae966876c9ec30cdbf9f['expire'] = '-';

		$c0a20089b6b0fac4d59b6d1eeceaafbf = '<font color=\'red\'>' . $Fa3d19831c58b4235f088f0b5e887ec4['password'] . '</font>';

		$C2aaac60d16a3fe3b99fcb0176fbe5d7 = $Fa3d19831c58b4235f088f0b5e887ec4['username'];
		if (0 < $Fa3d19831c58b4235f088f0b5e887ec4['active_connections']) {
		}

		$d510c8dba98eae966876c9ec30cdbf9f['max_cons'] = '<font color=\'black\'>' . $Fa3d19831c58b4235f088f0b5e887ec4['active_connections'] . ' / ' . $Fa3d19831c58b4235f088f0b5e887ec4['max_connections'] . '</font>';
		$a45b0219ec6e856b0af8b45f4578d82c = '<font color=\'red\'><b>' . $f9a8823715bcb54e8069e0086da240b2['disabled'] . '</b></font>';

		$d510c8dba98eae966876c9ec30cdbf9f = array();

		$E6412230eeb5a4348cc57a7876286e4a['records'][] = array_map('encodeToUtf8', $d510c8dba98eae966876c9ec30cdbf9f);

		$d510c8dba98eae966876c9ec30cdbf9f['username'] = $C2aaac60d16a3fe3b99fcb0176fbe5d7;

		$b3284fbd35d0632b87970a41794030d5 = '<img src=\'../templates/images/flags_country/unknown.png\' title=\'' . $f9a8823715bcb54e8069e0086da240b2['unknown'] . '\'>';

		$d510c8dba98eae966876c9ec30cdbf9f['password'] = $c0a20089b6b0fac4d59b6d1eeceaafbf;

		$a45b0219ec6e856b0af8b45f4578d82c = '<font color=\'blue\'><b>' . $f9a8823715bcb54e8069e0086da240b2['expired'] . '</b></font>';

		$d510c8dba98eae966876c9ec30cdbf9f['expire'] = '<font color=\'black\'>' . date('d/m/Y H:i', $Fa3d19831c58b4235f088f0b5e887ec4['exp_date']) . '</font>';

		$d510c8dba98eae966876c9ec30cdbf9f['owner'] = $Fa3d19831c58b4235f088f0b5e887ec4['owner'];

		$d510c8dba98eae966876c9ec30cdbf9f['expire'] = '<font color=\'red\'><b>' . date('d/m/Y H:i', $Fa3d19831c58b4235f088f0b5e887ec4['exp_date']) . '</b></font>';
		$d510c8dba98eae966876c9ec30cdbf9f['channel'] = 0 < $Fa3d19831c58b4235f088f0b5e887ec4['active_connections'] ? '<b>' . $Fa3d19831c58b4235f088f0b5e887ec4['last_seen'] . '</b><br />[ ' . f305999B96e33AA4A8dD91A5939aE634(time() - $Fa3d19831c58b4235f088f0b5e887ec4['date_start']) . ' ]' : '-';

		$b3284fbd35d0632b87970a41794030d5 = '<img src="../templates/images/flags_country/' . $fdcceffee05a243f8a7b41fe9bfa4ddf . '.png" title="' . $fdcceffee05a243f8a7b41fe9bfa4ddf . '" />';
		$fdcceffee05a243f8a7b41fe9bfa4ddf = $Fa3d19831c58b4235f088f0b5e887ec4['geoip_country_code'];
		$d510c8dba98eae966876c9ec30cdbf9f['recid'] = $c17ac00f16e66552f95207ec7818895a++;

		$f122bd9063f91f23e37e3020056193ce = 'disable';

		if (!empty($Fa3d19831c58b4235f088f0b5e887ec4['reseller_notes'])) {
		}

		if (is_null($Fa3d19831c58b4235f088f0b5e887ec4['exp_date'])) {
		}

		if (!is_null($Fa3d19831c58b4235f088f0b5e887ec4['exp_date']) && ($Fa3d19831c58b4235f088f0b5e887ec4['exp_date'] < time())) {
		}

		$d510c8dba98eae966876c9ec30cdbf9f['notes'] = '-';

		$c0a20089b6b0fac4d59b6d1eeceaafbf = $Fa3d19831c58b4235f088f0b5e887ec4['password'];

		$bae0148a7f228f4896b3e005f9e3be70 = '<img src=\'../templates/images/dots/offline.png\' title=\'Offline\'>';

		$a45b0219ec6e856b0af8b45f4578d82c = '<font color=\'red\'><b>' . $f9a8823715bcb54e8069e0086da240b2['banned'] . '</b></font>';

		$f122bd9063f91f23e37e3020056193ce = 'enable';

		$a45b0219ec6e856b0af8b45f4578d82c = '<font color=\'green\'><b>' . $f9a8823715bcb54e8069e0086da240b2['enabled'] . '</b></font>';

		$bae0148a7f228f4896b3e005f9e3be70 = '<img src=\'../templates/images/dots/ok.png\' title=\'Online\'>';
		$d510c8dba98eae966876c9ec30cdbf9f['online'] = $bae0148a7f228f4896b3e005f9e3be70;

		if (0 < $Fa3d19831c58b4235f088f0b5e887ec4['active_connections']) {
		}

		if ($Fa3d19831c58b4235f088f0b5e887ec4['enabled'] == 0) {
		}

		$d510c8dba98eae966876c9ec30cdbf9f['expire'] = '<font color=\'orange\'><b>' . $f9a8823715bcb54e8069e0086da240b2['unlimited'] . '</b></font>';

		$a7ec67cfaf6291a590ffcee027d37082 = 'unblock';
		$d510c8dba98eae966876c9ec30cdbf9f['statistics'] = '<a target="_blank" href="user_stats.php?action=get&user_id=' . $Fa3d19831c58b4235f088f0b5e887ec4['id'] . '" class="table-icon stats" title="' . $f9a8823715bcb54e8069e0086da240b2['view_user_activity'] . '"></a>';
		$d510c8dba98eae966876c9ec30cdbf9f['options'] = '<a href="index.php?action=user_kick&user_id=' . $Fa3d19831c58b4235f088f0b5e887ec4['id'] . '" class="table-icon kill" title="' . $f9a8823715bcb54e8069e0086da240b2['kick_user'] . '"></a>' . "\r\n" . '                          <a href="index.php?action=enabled&current=' . $Fa3d19831c58b4235f088f0b5e887ec4['enabled'] . '&user_id=' . $Fa3d19831c58b4235f088f0b5e887ec4['id'] . '" class="table-icon ' . $f122bd9063f91f23e37e3020056193ce . '" title="' . $f9a8823715bcb54e8069e0086da240b2['enable_disable'] . '"></a>' . "\r\n" . '                          <a onclick="ajax_request_dialog(\'index.php?action=edit&user_id=' . $Fa3d19831c58b4235f088f0b5e887ec4['id'] . '\',\'' . $f9a8823715bcb54e8069e0086da240b2['edit_user'] . '\',\'white\',\'auto\',\'auto\');" class="table-icon edit" title="Edit User"></a>' . "\r\n" . '                          <a onclick="return confirm(\'' . $f9a8823715bcb54e8069e0086da240b2['delete_line'] . '\')" href="index.php?action=user_delete&user_id=' . $Fa3d19831c58b4235f088f0b5e887ec4['id'] . '" class="table-icon delete" title="Delete User"></a>' . "\t\t\t" . '     ' . "\r\n" . '                ';

		if ($Fa3d19831c58b4235f088f0b5e887ec4['enabled'] == 0) {
		}

		$a7ec67cfaf6291a590ffcee027d37082 = 'block';

		$d510c8dba98eae966876c9ec30cdbf9f['con_info'] = '-';
		$d510c8dba98eae966876c9ec30cdbf9f['notes'] = $Fa3d19831c58b4235f088f0b5e887ec4['reseller_notes'];
		$d510c8dba98eae966876c9ec30cdbf9f['con_info'] = $b3284fbd35d0632b87970a41794030d5 . '<br /><a target=\'_blank\' href=\'http://www.ip-tracker.org/locator/ip-lookup.php?ip=' . $Fa3d19831c58b4235f088f0b5e887ec4['user_ip'] . '\'><font color=\'blue\'>' . $Fa3d19831c58b4235f088f0b5e887ec4['user_ip'] . '</font></a>';

		if (!empty($fdcceffee05a243f8a7b41fe9bfa4ddf)) {
		}

		$d510c8dba98eae966876c9ec30cdbf9f['status'] = $a45b0219ec6e856b0af8b45f4578d82c;
	}

	$Cecfa885eed4e0be5ea572f6a5e134a4 = C5d1d2Ec41a1664B2d56D0E1374851C8($c83b7d347a6bc7f5f0e3313147e88ecc->member_info['id']);

	$E6412230eeb5a4348cc57a7876286e4a['total'] = $Cecfa885eed4e0be5ea572f6a5e134a4['total_rows'];
	$E6412230eeb5a4348cc57a7876286e4a['records'] = array();
	$E6412230eeb5a4348cc57a7876286e4a = array();
case 'edit':
	echo $E6412230eeb5a4348cc57a7876286e4a;

	$fd7f2f8cde8b865243a388c219894e64 = intval(b8a6Ea05EEbC7e2E3503EA794b1a1EE4::$request['user_id']);

	$b729e1e76a388ffdd6a130fbb0325a8e .= '|';
	$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `reg_userlog` (`owner`,`username`,`password`,`date`,`type`) VALUES(\'%s\',\'%s\',\'%s\',\'%s\',\'%s\')', $c83b7d347a6bc7f5f0e3313147e88ecc->member_info['username'], $C2aaac60d16a3fe3b99fcb0176fbe5d7, $c0a20089b6b0fac4d59b6d1eeceaafbf, time(), $f9a8823715bcb54e8069e0086da240b2['edited'] . ' ' . $Fac708114f97b667403407d22b554e84 . ' [ ' . $b729e1e76a388ffdd6a130fbb0325a8e . ' ]');
	$D77af068b5dcf27a4945e91c2df88d68 = (empty(B8A6ea05EEbc7E2e3503eA794B1a1ee4::$request['reseller_notes']) ? '' : B8A6EA05eeBC7e2E3503ea794b1A1Ee4::$request['reseller_notes']);

	$E6412230eeb5a4348cc57a7876286e4a .= '<table>';

	$E6412230eeb5a4348cc57a7876286e4a .= '</table>';
	$Fac708114f97b667403407d22b554e84 = ($Ec0fedcf3bd9121c0953fbeca121dc3b['is_trial'] == 1 ? '<font color=\'red\'>Trial</font>' : '<font color=\'green\'>Official</font>');
	$E6412230eeb5a4348cc57a7876286e4a .= '<tr>' . "\r\n" . '                                        <td>' . $f9a8823715bcb54e8069e0086da240b2['password'] . '</td>' . "\r\n" . '                                        <td><input type="text" name="password" placeholder="' . $f9a8823715bcb54e8069e0086da240b2['leave_it_blank_gen'] . '" value="' . $Ec0fedcf3bd9121c0953fbeca121dc3b['password'] . '" /></td>' . "\r\n" . '                                    </tr>';

	$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `users` SET `password` = \'%s\',`reseller_notes` = \'%s\' WHERE `id` = \'%d\'', $c0a20089b6b0fac4d59b6d1eeceaafbf, $D77af068b5dcf27a4945e91c2df88d68, $fd7f2f8cde8b865243a388c219894e64);

	$E6412230eeb5a4348cc57a7876286e4a = '<form method="post" action="index.php?action=edit&user_id=' . $fd7f2f8cde8b865243a388c219894e64 . '">';
	exit();

	$E6412230eeb5a4348cc57a7876286e4a .= '<tr>' . "\r\n" . '                                        <td></td>' . "\r\n" . '                                        <td><input type="hidden" name="post" value="1" /><button type="submit">' . $f9a8823715bcb54e8069e0086da240b2['edit_user'] . '</button></td>' . "\r\n" . '                                        ' . "\r\n" . '                                    </tr>';
	$E6412230eeb5a4348cc57a7876286e4a .= '<tr>' . "\r\n" . '                                        <td>' . $f9a8823715bcb54e8069e0086da240b2['notes'] . '</td>' . "\r\n" . '                                        <td><textarea style="width:340px; height:100px" name="reseller_notes">' . $Ec0fedcf3bd9121c0953fbeca121dc3b['reseller_notes'] . '</textarea></td>' . "\r\n" . '                                    </tr>';
	$c0a20089b6b0fac4d59b6d1eeceaafbf = (!empty(b8A6EA05eebc7E2e3503EA794b1a1eE4::$request['password']) ? B8A6EA05Eebc7E2E3503Ea794B1A1ee4::$request['password'] : b8A6eA05eebC7E2e3503EA794B1a1EE4::DaEB9fEd37CD1eC882b897C29f10F77e(10));
	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['user_edited'];
	if (!(!empty(B8A6ea05Eebc7e2e3503eA794b1a1Ee4::$request['user_id']) && !empty(B8a6EA05eebC7e2E3503ea794B1A1ee4::$request['user_id']))) {
	}

	if (!empty($D77af068b5dcf27a4945e91c2df88d68)) {
	}

	$b729e1e76a388ffdd6a130fbb0325a8e .= '  New Pass: ' . $c0a20089b6b0fac4d59b6d1eeceaafbf . ' ';
	$C2aaac60d16a3fe3b99fcb0176fbe5d7 = $Ec0fedcf3bd9121c0953fbeca121dc3b['username'];
	$b729e1e76a388ffdd6a130fbb0325a8e .= 'Notes Deleted';
	$b729e1e76a388ffdd6a130fbb0325a8e = '';
	$Ec0fedcf3bd9121c0953fbeca121dc3b = DFA6500B681f783bbBcb94474366Bb27::Fc219CEC06E2EcF9a5083c03B314D183($fd7f2f8cde8b865243a388c219894e64);
	$b729e1e76a388ffdd6a130fbb0325a8e .= ' New Notes: ' . $D77af068b5dcf27a4945e91c2df88d68;
default:
	$c83b7d347a6bc7f5f0e3313147e88ecc->Fa7e9FB747dD7976dd94Ea27Fa865B5D();
	unset(b8a6ea05EEbC7E2e3503eA794B1a1eE4::$request['action']);

	require (IPTV_TEMPLATES_PATH . '/' . 'footer.php');

	header('Location: ../index.php?error=NO_ADMIN');
	exit(0);

	require ('../init.php');
	$b8980526936694b2cd4cf6c7f8c80396 = b8a6eA05eeBc7e2e3503Ea794b1A1EE4::$request['action'];
	require (IPTV_TEMPLATES_PATH . '/' . 'header_normal.php');
	require (IPTV_TEMPLATES_PATH . '/' . '/userpanel/' . 'mnglines.php');
	if (!isset(B8a6EA05eebc7e2e3503ea794b1A1EE4::$request['action'])) {
	}
	else {
	}
}

?> 

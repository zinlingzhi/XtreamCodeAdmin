<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

$c83b7d347a6bc7f5f0e3313147e88ecc->fa7e9fb747dD7976dD94eA27FA865b5D();

require (IPTV_TEMPLATES_PATH . '/' . 'header_normal.php');

$b8980526936694b2cd4cf6c7f8c80396 = b8A6ea05Eebc7E2E3503eA794B1a1eE4::$request['action'];

header('Location: ../index.php?error=NO_ADMIN');


if ($c83b7d347a6bc7f5f0e3313147e88ecc->Ec28097bFbDEdDf7488Ba03667c68540()) {
}

session_start();

exit(0);
unset(B8a6Ea05EebC7e2E3503ea794b1A1ee4::$request['action']);

switch ($b8980526936694b2cd4cf6c7f8c80396) {
default:
	require ('../init.php');
	require (IPTV_TEMPLATES_PATH . '/' . '/userpanel/' . 'manage_mag.php');
	require (IPTV_TEMPLATES_PATH . '/' . 'footer.php');
case 'load_users':
	$E6412230eeb5a4348cc57a7876286e4a['records'] = array();

	$E6412230eeb5a4348cc57a7876286e4a['total'] = $Cecfa885eed4e0be5ea572f6a5e134a4['total_rows'];
	$Cecfa885eed4e0be5ea572f6a5e134a4 = E6A2515514d66836f08b9f626A91c1A7(array('member_id' => $c83b7d347a6bc7f5f0e3313147e88ecc->member_info['id'], 'is_mag' => 1), array('mag_devices' => 'user_id'));

	exit();

	$c17ac00f16e66552f95207ec7818895a = 1;

	foreach ($Cecfa885eed4e0be5ea572f6a5e134a4['users'] as $Fa3d19831c58b4235f088f0b5e887ec4) {
		$b3284fbd35d0632b87970a41794030d5 = '<img src="../templates/images/flags_country/' . $fdcceffee05a243f8a7b41fe9bfa4ddf . '.png" title="' . $fdcceffee05a243f8a7b41fe9bfa4ddf . '" />';
		$d510c8dba98eae966876c9ec30cdbf9f['status'] = $a45b0219ec6e856b0af8b45f4578d82c;

		$bae0148a7f228f4896b3e005f9e3be70 = '<img src=\'../templates/images/dots/offline.png\' title=\'Offline\'>';

		$d510c8dba98eae966876c9ec30cdbf9f['recid'] = $c17ac00f16e66552f95207ec7818895a++;
		$d510c8dba98eae966876c9ec30cdbf9f['statistics'] = '<a target="_blank" href="user_stats.php?action=get&user_id=' . $Fa3d19831c58b4235f088f0b5e887ec4['id'] . '" class="table-icon stats" title="' . $f9a8823715bcb54e8069e0086da240b2['view_user_activity'] . '"></a>';

		$f122bd9063f91f23e37e3020056193ce = 'disable';

		if (0 < $Fa3d19831c58b4235f088f0b5e887ec4['active_connections']) {
		}

		$d510c8dba98eae966876c9ec30cdbf9f = array();

		$a4e6e437f123785c5867b3e1ae39c5a8 = base64_decode($Fa3d19831c58b4235f088f0b5e887ec4['mac']);

		$d510c8dba98eae966876c9ec30cdbf9f['expire_date'] = '<font color=\'red\'><b>' . date('d/m/Y H:i', $Fa3d19831c58b4235f088f0b5e887ec4['exp_date']) . '</b></font>';

		$a4e6e437f123785c5867b3e1ae39c5a8 = '<font color=\'red\'>' . base64_decode($Fa3d19831c58b4235f088f0b5e887ec4['mac']) . '</font>';

		$a45b0219ec6e856b0af8b45f4578d82c = '<font color=\'red\'><b>' . $f9a8823715bcb54e8069e0086da240b2['disabled'] . '</b></font>';

		$d510c8dba98eae966876c9ec30cdbf9f['online'] = $bae0148a7f228f4896b3e005f9e3be70;
		if ($Fa3d19831c58b4235f088f0b5e887ec4['admin_enabled'] == 0) {
		}

		if ($Fa3d19831c58b4235f088f0b5e887ec4['enabled'] == 0) {
		}

		$b3284fbd35d0632b87970a41794030d5 = '<img src=\'../templates/images/flags_country/unknown.png\' title=\'' . $f9a8823715bcb54e8069e0086da240b2['unknown'] . '\'>';
		$d510c8dba98eae966876c9ec30cdbf9f['ls_channel'] = 0 < $Fa3d19831c58b4235f088f0b5e887ec4['active_connections'] ? '<b>' . $Fa3d19831c58b4235f088f0b5e887ec4['last_seen'] . '</b><br />[ ' . F305999b96e33aa4A8dd91A5939ae634(time() - $Fa3d19831c58b4235f088f0b5e887ec4['date_start']) . ' ]' : '-';

		$a45b0219ec6e856b0af8b45f4578d82c = '<font color=\'blue\'><b>' . $f9a8823715bcb54e8069e0086da240b2['expired'] . '</b></font>';

		$fdcceffee05a243f8a7b41fe9bfa4ddf = $Fa3d19831c58b4235f088f0b5e887ec4['geoip_country_code'];

		$d510c8dba98eae966876c9ec30cdbf9f['options'] = '<a href="manage_mag.php?action=user_kick&user_id=' . $Fa3d19831c58b4235f088f0b5e887ec4['id'] . '" class="table-icon kill" title="' . $f9a8823715bcb54e8069e0086da240b2['kick_user'] . '"></a>' . "\r\n" . '                          <a href="manage_mag.php?action=enabled&current=' . $Fa3d19831c58b4235f088f0b5e887ec4['enabled'] . '&user_id=' . $Fa3d19831c58b4235f088f0b5e887ec4['id'] . '" class="table-icon ' . $f122bd9063f91f23e37e3020056193ce . '" title="' . $f9a8823715bcb54e8069e0086da240b2['enable_disable'] . '"></a>' . "\r\n" . '                          <a onclick="ajax_request_dialog(\'manage_mag.php?action=edit&mag_id=' . $Fa3d19831c58b4235f088f0b5e887ec4['mag_id'] . '\',\'' . $f9a8823715bcb54e8069e0086da240b2['edit_user'] . '\',\'white\',\'auto\',\'auto\');" class="table-icon edit" title="Edit User"></a>' . "\r\n" . '                          ' . "\r\n" . '                          <a onclick="return confirm(\'' . $f9a8823715bcb54e8069e0086da240b2['delete_line'] . '\')" href="manage_mag.php?action=delete&mag_id=' . $Fa3d19831c58b4235f088f0b5e887ec4['mag_id'] . '" class="table-icon delete" title="Delete User"></a>' . "\t\t\t" . '     ' . "\r\n" . '                ';

		$d510c8dba98eae966876c9ec30cdbf9f['owner'] = $Fa3d19831c58b4235f088f0b5e887ec4['owner'];

		$d510c8dba98eae966876c9ec30cdbf9f['mac_address'] = $a4e6e437f123785c5867b3e1ae39c5a8;

		$d510c8dba98eae966876c9ec30cdbf9f['notes'] = encodeToUtf8($Fa3d19831c58b4235f088f0b5e887ec4['reseller_notes']);

		if ($Fa3d19831c58b4235f088f0b5e887ec4['is_trial'] == 1) {
		}

		$a45b0219ec6e856b0af8b45f4578d82c = '<font color=\'green\'><b>' . $f9a8823715bcb54e8069e0086da240b2['enabled'] . '</b></font>';
		$a7ec67cfaf6291a590ffcee027d37082 = 'block';

		$d510c8dba98eae966876c9ec30cdbf9f['con_info'] = $b3284fbd35d0632b87970a41794030d5 . '<br />' . $fd6f27c297566dc2dbc37874bc1e1747 . '<a target=\'_blank\' href=\'http://www.ip-tracker.org/locator/ip-lookup.php?ip=' . $Fa3d19831c58b4235f088f0b5e887ec4['user_ip'] . '\'><font color=\'blue\'>' . $Fa3d19831c58b4235f088f0b5e887ec4['user_ip'] . '</font></a>';
		$E6412230eeb5a4348cc57a7876286e4a['records'][] = array_map('encodeToUtf8', $d510c8dba98eae966876c9ec30cdbf9f);
		if (($Fa3d19831c58b4235f088f0b5e887ec4['exp_date'] - 172800) < time()) {
		}

		$d510c8dba98eae966876c9ec30cdbf9f['expire_date'] = '<font color=\'orange\'><b>' . $f9a8823715bcb54e8069e0086da240b2['unlimited'] . '</b></font>';
		$d510c8dba98eae966876c9ec30cdbf9f['notes'] = '-';

		if (0 < $Fa3d19831c58b4235f088f0b5e887ec4['active_connections']) {
		}

		$bae0148a7f228f4896b3e005f9e3be70 = '<img src=\'../templates/images/dots/standby.png\' title=\'StandBy\'>';

		if ($Fa3d19831c58b4235f088f0b5e887ec4['exp_date'] < time()) {
		}

		$d510c8dba98eae966876c9ec30cdbf9f['event_actions'] = "\r\n" . '                ' . "\r\n" . '                    <select style="width:130px;height:18px;" onchange="if (this.value != \'send_msg\' && this.value != \'play_channel\') { if(confirm(\'' . $f9a8823715bcb54e8069e0086da240b2['confirm'] . '\')) window.location.href=\'manage_mag.php?action=set_event&event=\' + this.value + \'&mag_id=' . $Fa3d19831c58b4235f088f0b5e887ec4['mag_id'] . '\'; } else { ajax_request_dialog(\'manage_mag.php?action=set_event&event=\' + this.value + \'&mag_id=' . $Fa3d19831c58b4235f088f0b5e887ec4['mag_id'] . '\',\'' . $a4e6e437f123785c5867b3e1ae39c5a8 . '\',\'white\',\'auto\',\'auto\'); } ">' . "\r\n" . '                        <option value="">-</option>' . "\r\n" . '                        <option value="play_channel">' . $f9a8823715bcb54e8069e0086da240b2['force_channel'] . '</option>' . "\r\n" . '                        <option value="reload_portal">' . $f9a8823715bcb54e8069e0086da240b2['reload_portal'] . '</option>' . "\r\n" . '                        <option value="reboot">' . $f9a8823715bcb54e8069e0086da240b2['reboot'] . '</option>' . "\r\n" . '                        <option value="send_msg">' . $f9a8823715bcb54e8069e0086da240b2['send_message'] . '</option>' . "\r\n" . '                        <option value="cut_off">' . $f9a8823715bcb54e8069e0086da240b2['close_portal'] . '</option>' . "\r\n" . '                    </select>' . "\r\n" . '                ';
		$d510c8dba98eae966876c9ec30cdbf9f['expire_date'] = '<font color=\'black\'>' . date('d/m/Y H:i', $Fa3d19831c58b4235f088f0b5e887ec4['exp_date']) . '</font>';

		$bae0148a7f228f4896b3e005f9e3be70 = '<img src=\'../templates/images/dots/ok.png\' title=\'Online\'>';
		$d510c8dba98eae966876c9ec30cdbf9f['expire_date'] = '-';
		if (time() <= $Fa3d19831c58b4235f088f0b5e887ec4['last_watchdog'] + $Fa3d19831c58b4235f088f0b5e887ec4['watchdog_timeout']) {
		}

		$a7ec67cfaf6291a590ffcee027d37082 = 'unblock';
		$f122bd9063f91f23e37e3020056193ce = 'enable';

		$d510c8dba98eae966876c9ec30cdbf9f['con_info'] = '-';
		$a45b0219ec6e856b0af8b45f4578d82c = '<font color=\'red\'><b>' . $f9a8823715bcb54e8069e0086da240b2['banned'] . '</b></font>';
	}

	echo json_encode($E6412230eeb5a4348cc57a7876286e4a);
	$E6412230eeb5a4348cc57a7876286e4a = array();
case 'enabled':
	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['mag_disabled'];
	$A5f4c44cc29cf8e18b4ff540e79fbe43 = (isset(b8A6eA05eebC7e2E3503EA794b1A1eE4::$request['current']) && (0 < B8A6EA05eeBC7e2E3503eA794b1A1Ee4::$request['current']) ? 1 : 0);
	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['mag_enabled'];
	$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `users` SET `enabled` = \'%d\' WHERE `id` = \'%d\'', $fc36179cf1c4571ad2ecb8a178952cf1, $fd7f2f8cde8b865243a388c219894e64);

	dfA6500b681f783bBBcb94474366Bb27::e0822B2F27741024e85a94f93Adc3823($fd7f2f8cde8b865243a388c219894e64);
	$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `reg_userlog` (`owner`,`username`,`password`,`date`,`type`) VALUES(\'%s\',\'%s\',\'%s\',\'%s\',\'%s\')', $c83b7d347a6bc7f5f0e3313147e88ecc->member_info['username'], base64_decode($Ec0fedcf3bd9121c0953fbeca121dc3b['mag_device']['mac']), '-', time(), $B55f78703213d1595283266f835ca867 . ' [ ' . $Fac708114f97b667403407d22b554e84 . ' ]');

	$fc36179cf1c4571ad2ecb8a178952cf1 = 0;
	$fc36179cf1c4571ad2ecb8a178952cf1 = 1;

	$Ec0fedcf3bd9121c0953fbeca121dc3b = dfa6500b681F783bBbcb94474366Bb27::fC219CEC06e2eCf9A5083C03b314d183($fd7f2f8cde8b865243a388c219894e64);
	$Fac708114f97b667403407d22b554e84 = ($Ec0fedcf3bd9121c0953fbeca121dc3b['is_trial'] == 1 ? '<font color=\'red\'>Trial</font>' : '<font color=\'green\'>Official</font>');
	$fd7f2f8cde8b865243a388c219894e64 = intval(b8a6Ea05eEbC7E2e3503EA794b1A1ee4::$request['user_id']);
case 'user_kick':
	$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `reg_userlog` (`owner`,`username`,`password`,`date`,`type`) VALUES(\'%s\',\'%s\',\'%s\',\'%s\',\'%s\')', $c83b7d347a6bc7f5f0e3313147e88ecc->member_info['username'], base64_decode($Ec0fedcf3bd9121c0953fbeca121dc3b['mag_device']['mac']), '-', time(), $f9a8823715bcb54e8069e0086da240b2['mag_kicked'] . ' [ ' . $Fac708114f97b667403407d22b554e84 . ' ]');
	dfa6500b681F783bBBCB94474366bb27::e0822b2f27741024E85a94F93ADC3823($fd7f2f8cde8b865243a388c219894e64);
	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['mag_kicked'];
	$fd7f2f8cde8b865243a388c219894e64 = intval(b8a6eA05EeBC7e2e3503eA794b1a1eE4::$request['user_id']);
	$Fac708114f97b667403407d22b554e84 = ($Ec0fedcf3bd9121c0953fbeca121dc3b['is_trial'] == 1 ? '<font color=\'red\'>Trial</font>' : '<font color=\'green\'>Official</font>');
	$Ec0fedcf3bd9121c0953fbeca121dc3b = dfa6500B681F783bbbCb94474366bb27::fC219CEc06e2EcF9a5083c03b314d183($fd7f2f8cde8b865243a388c219894e64);
case 'delete':
	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['mag_deleted'];

	$D29f3c5494cb370b46f3e907dc61f106->query('DELETE FROM `users` WHERE `id` = \'%d\'', $E5ed50a6841f7776a8a34d6ea2729245['user_info']['id']);
	$Fac708114f97b667403407d22b554e84 = ($Ec0fedcf3bd9121c0953fbeca121dc3b['is_trial'] == 1 ? '<font color=\'red\'>Trial</font>' : '<font color=\'green\'>Official</font>');
	$Ae69657887d4ff7aed6dd09fc72a542e = intval(B8a6eA05eEBC7E2E3503Ea794B1A1Ee4::$request['mag_id']);

	$D29f3c5494cb370b46f3e907dc61f106->query('DELETE FROM `mag_devices` WHERE `mag_id`  = \'%d\'', $Ae69657887d4ff7aed6dd09fc72a542e);

	$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `reg_userlog` (`owner`,`username`,`password`,`date`,`type`) VALUES(\'%s\',\'%s\',\'%s\',\'%s\',\'%s\')', $c83b7d347a6bc7f5f0e3313147e88ecc->member_info['username'], $E5ed50a6841f7776a8a34d6ea2729245['mag_device']['mac'], '-', time(), $f9a8823715bcb54e8069e0086da240b2['mag_deleted'] . ' [ ' . $Fac708114f97b667403407d22b554e84 . ' ]');

	$Ec0fedcf3bd9121c0953fbeca121dc3b = DFa6500B681F783BbbcB94474366bb27::fc219CEC06e2ecF9A5083c03b314d183($E5ed50a6841f7776a8a34d6ea2729245['mag_device']['user_id']);
	while (!($E5ed50a6841f7776a8a34d6ea2729245 = Dfa6500B681f783BbBCb94474366bb27::Ded78709C29e83ee9A7cBeEdaFc95035($Ae69657887d4ff7aed6dd09fc72a542e))) {
	}

	if (empty(b8A6Ea05eeBc7E2e3503eA794B1A1ee4::$request['mag_id'])) {
	}

case 'reset_data':
	$Ec0fedcf3bd9121c0953fbeca121dc3b = DFa6500B681F783BBbCb94474366bB27::fc219cEC06e2EcF9A5083c03b314D183($E5ed50a6841f7776a8a34d6ea2729245['mag_device']['user_id']);
	$Fac708114f97b667403407d22b554e84 = ($Ec0fedcf3bd9121c0953fbeca121dc3b['is_trial'] == 1 ? '<font color=\'red\'>Trial</font>' : '<font color=\'green\'>Official</font>');
	$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `mag_devices` SET `sn` = \'\' , `ver` = \'\' , `stb_type` = \'\' , `device_id` = \'\' , `device_id2` = \'\' , `hw_version` = \'\' , `image_version` = \'\' WHERE `mag_id` = \'%d\'', $Ae69657887d4ff7aed6dd09fc72a542e);

	$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `reg_userlog` (`owner`,`username`,`password`,`date`,`type`) VALUES(\'%s\',\'%s\',\'%s\',\'%s\',\'%s\')', $c83b7d347a6bc7f5f0e3313147e88ecc->member_info['username'], $E5ed50a6841f7776a8a34d6ea2729245['mag_device']['mac'], '-', time(), $f9a8823715bcb54e8069e0086da240b2['mag_reset'] . ' [ ' . $Fac708114f97b667403407d22b554e84 . ' ]');
	if (empty(B8a6Ea05EeBc7E2e3503Ea794B1A1Ee4::$request['mag_id'])) {
	}

	$E5ed50a6841f7776a8a34d6ea2729245 = dfa6500b681F783BBBcb94474366bb27::DED78709c29E83ee9A7CBEEDafC95035($Ae69657887d4ff7aed6dd09fc72a542e);
	$Ae69657887d4ff7aed6dd09fc72a542e = intval(b8A6EA05eebc7E2E3503ea794b1A1Ee4::$request['mag_id']);

	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['reseted_ok'];
case 'edit':
	$b729e1e76a388ffdd6a130fbb0325a8e .= 'Notes Deleted';
	$Fac708114f97b667403407d22b554e84 = ($Ec0fedcf3bd9121c0953fbeca121dc3b['is_trial'] == 1 ? '<font color=\'red\'>Trial</font>' : '<font color=\'green\'>Official</font>');

	$E6412230eeb5a4348cc57a7876286e4a .= '<tr>' . "\r\n" . '                                        <td></td>' . "\r\n" . '                                        <td><input type="hidden" name="post" value="1" /><button type="submit">' . $f9a8823715bcb54e8069e0086da240b2['edit_user'] . '</button></td>' . "\r\n" . '                                        ' . "\r\n" . '                                    </tr>';

	exit();
	$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `users` SET `reseller_notes` = \'%s\' WHERE `id` = \'%d\'', $D77af068b5dcf27a4945e91c2df88d68, $E5ed50a6841f7776a8a34d6ea2729245['mag_device']['user_id']);
	$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `reg_userlog` (`owner`,`username`,`password`,`date`,`type`) VALUES(\'%s\',\'%s\',\'%s\',\'%s\',\'%s\')', $c83b7d347a6bc7f5f0e3313147e88ecc->member_info['username'], $C2aaac60d16a3fe3b99fcb0176fbe5d7, '', time(), $f9a8823715bcb54e8069e0086da240b2['edited'] . ' ' . $Fac708114f97b667403407d22b554e84 . ' [ ' . $b729e1e76a388ffdd6a130fbb0325a8e . ' ]');

	$Ec0fedcf3bd9121c0953fbeca121dc3b = Dfa6500B681F783bBBcB94474366bb27::FC219CEc06E2eCf9a5083C03b314D183($E5ed50a6841f7776a8a34d6ea2729245['mag_device']['user_id']);

	$C2aaac60d16a3fe3b99fcb0176fbe5d7 = $E5ed50a6841f7776a8a34d6ea2729245['mag_device']['mac'];

	$E6412230eeb5a4348cc57a7876286e4a .= '<table>';

	$E6412230eeb5a4348cc57a7876286e4a = '<form method="post" action="manage_mag.php?action=edit&mag_id=' . $Ae69657887d4ff7aed6dd09fc72a542e . '">';
	$b729e1e76a388ffdd6a130fbb0325a8e = '';
	if (!(!empty(B8a6ea05EEbC7E2e3503Ea794B1A1EE4::$request['mag_id']) && !empty(B8A6ea05EEbc7e2e3503ea794b1a1eE4::$request['mag_id']))) {
	}

	$D77af068b5dcf27a4945e91c2df88d68 = (empty(B8a6Ea05eebc7e2E3503ea794B1a1ee4::$request['reseller_notes']) ? '' : B8a6eA05eEbc7E2E3503ea794B1A1eE4::$request['reseller_notes']);

	if (empty($Ec0fedcf3bd9121c0953fbeca121dc3b)) {
	}

	if (!BEd429Fbc949551dd58654ff43E8E22d($E5ed50a6841f7776a8a34d6ea2729245['mag_device']['user_id'], $c83b7d347a6bc7f5f0e3313147e88ecc->member_info['id'])) {
	}

	$Ae69657887d4ff7aed6dd09fc72a542e = intval(b8a6EA05EebC7E2e3503EA794b1A1Ee4::$request['mag_id']);

	$b729e1e76a388ffdd6a130fbb0325a8e .= ' New Notes: ' . $D77af068b5dcf27a4945e91c2df88d68;
	$E5ed50a6841f7776a8a34d6ea2729245 = dFA6500b681f783bbBcb94474366BB27::DED78709C29e83ee9a7CBEEDafC95035($Ae69657887d4ff7aed6dd09fc72a542e);

	echo $E6412230eeb5a4348cc57a7876286e4a;

	$E6412230eeb5a4348cc57a7876286e4a .= '<tr>' . "\r\n" . '                                        <td>' . $f9a8823715bcb54e8069e0086da240b2['notes'] . '</td>' . "\r\n" . '                                        <td><textarea style="width:340px; height:100px" name="reseller_notes">' . $Ec0fedcf3bd9121c0953fbeca121dc3b['reseller_notes'] . '</textarea></td>' . "\r\n" . '                                    </tr>';
	$E6412230eeb5a4348cc57a7876286e4a .= '</table>';

	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['user_edited'];
}

?> 

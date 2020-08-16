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

$c83b7d347a6bc7f5f0e3313147e88ecc->fa7e9FB747DD7976dd94eA27FA865B5d();

require (IPTV_TEMPLATES_PATH . '/' . '/admin/' . 'manage_mag.php');
unset(b8a6EA05eeBC7E2e3503ea794B1A1Ee4::$request['action']);

switch ($b8980526936694b2cd4cf6c7f8c80396) {
default:
	$b8980526936694b2cd4cf6c7f8c80396 = B8A6ea05eebC7E2E3503EA794b1A1ee4::$request['action'];
	session_start();
case 'enabled':
	$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `users` SET `enabled` = \'%d\' WHERE `id` = \'%d\'', $fc36179cf1c4571ad2ecb8a178952cf1, $fd7f2f8cde8b865243a388c219894e64);

	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['mag_enabled'];
	$Fac708114f97b667403407d22b554e84 = ($Ec0fedcf3bd9121c0953fbeca121dc3b['is_trial'] == 1 ? '<font color=\'red\'>Trial</font>' : '<font color=\'green\'>Official</font>');
	$A5f4c44cc29cf8e18b4ff540e79fbe43 = (isset(B8A6EA05eEbc7E2E3503Ea794b1a1Ee4::$request['current']) && (0 < b8A6ea05EeBc7e2E3503Ea794B1a1EE4::$request['current']) ? 1 : 0);

	$D29f3c5494cb370b46f3e907dc61f106->query('SELECT `username` FROM `reg_users` WHERE `id` = \'%d\'', $Ec0fedcf3bd9121c0953fbeca121dc3b['member_id']);

	$fc36179cf1c4571ad2ecb8a178952cf1 = 1;

	if ($A5f4c44cc29cf8e18b4ff540e79fbe43 == 0) {
	}

	$Ec0fedcf3bd9121c0953fbeca121dc3b = dfa6500B681F783BbbcB94474366bb27::Fc219Cec06E2ecf9a5083C03B314D183($fd7f2f8cde8b865243a388c219894e64);
	$Ca6af2c8b13444a2978cb0ef98cedaae = $D29f3c5494cb370b46f3e907dc61f106->B68c0609C13F8645D5e168b69Fd4c118();
	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['mag_disabled'];

	$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `reg_userlog` (`owner`,`username`,`password`,`date`,`type`) VALUES(\'%s\',\'%s\',\'%s\',\'%s\',\'%s\')', $Ca6af2c8b13444a2978cb0ef98cedaae, base64_decode($Ec0fedcf3bd9121c0953fbeca121dc3b['mag_device']['mac']), '-', time(), $B55f78703213d1595283266f835ca867 . ' [ ' . $f9a8823715bcb54e8069e0086da240b2['editor'] . ': ' . $c83b7d347a6bc7f5f0e3313147e88ecc->member_info['username'] . ' | ' . $Fac708114f97b667403407d22b554e84 . ' ]');

	dFa6500b681F783bbBCB94474366BB27::e0822b2f27741024E85a94F93aDC3823($fd7f2f8cde8b865243a388c219894e64);

	$fd7f2f8cde8b865243a388c219894e64 = intval(b8A6ea05eEbC7e2E3503Ea794B1A1Ee4::$request['user_id']);
	$fc36179cf1c4571ad2ecb8a178952cf1 = 0;
case 'admin_enabled':
	$Fac708114f97b667403407d22b554e84 = ($Ec0fedcf3bd9121c0953fbeca121dc3b['is_trial'] == 1 ? '<font color=\'red\'>Trial</font>' : '<font color=\'green\'>Official</font>');
	$A5f4c44cc29cf8e18b4ff540e79fbe43 = (isset(B8a6ea05EEBc7e2E3503ea794b1a1ee4::$request['current']) && (0 < b8A6ea05EeBC7e2e3503EA794b1a1EE4::$request['current']) ? 1 : 0);

	$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `reg_userlog` (`owner`,`username`,`password`,`date`,`type`) VALUES(\'%s\',\'%s\',\'%s\',\'%s\',\'%s\')', $Ca6af2c8b13444a2978cb0ef98cedaae, base64_decode($Ec0fedcf3bd9121c0953fbeca121dc3b['mag_device']['mac']), '-', time(), $B55f78703213d1595283266f835ca867 . ' [ ' . $f9a8823715bcb54e8069e0086da240b2['editor'] . ': ' . $c83b7d347a6bc7f5f0e3313147e88ecc->member_info['username'] . ' | ' . $Fac708114f97b667403407d22b554e84 . ' ]');

	$Ec0fedcf3bd9121c0953fbeca121dc3b = dFA6500B681F783BBbCB94474366bb27::FC219CEc06e2ecf9a5083c03b314d183($fd7f2f8cde8b865243a388c219894e64);

	$fd7f2f8cde8b865243a388c219894e64 = intval(B8a6eA05eeBc7e2E3503eA794B1A1EE4::$request['user_id']);

	$Ca6af2c8b13444a2978cb0ef98cedaae = $D29f3c5494cb370b46f3e907dc61f106->B68C0609c13F8645D5e168B69fD4c118();

	$fc36179cf1c4571ad2ecb8a178952cf1 = 0;

	while (empty(B8A6EA05eEBC7E2E3503Ea794B1A1Ee4::$request['user_id'])) {
		$D29f3c5494cb370b46f3e907dc61f106->query('SELECT `username` FROM `reg_users` WHERE `id` = \'%d\'', $Ec0fedcf3bd9121c0953fbeca121dc3b['member_id']);

		$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['mag_blocked'];
		$fc36179cf1c4571ad2ecb8a178952cf1 = 1;

		if ($A5f4c44cc29cf8e18b4ff540e79fbe43 == 0) {
		}

		$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['mag_unblocked'];
		DFa6500b681f783bbBcB94474366BB27::e0822b2F27741024e85A94F93adC3823($fd7f2f8cde8b865243a388c219894e64);
	}

	$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `users` SET `admin_enabled` = \'%d\' WHERE `id` = \'%d\'', $fc36179cf1c4571ad2ecb8a178952cf1, $fd7f2f8cde8b865243a388c219894e64);
case 'isp_reset':
	$fd7f2f8cde8b865243a388c219894e64 = intval(B8a6eA05EEbc7e2E3503eA794b1A1EE4::$request['user_id']);
	$Fac708114f97b667403407d22b554e84 = ($Ec0fedcf3bd9121c0953fbeca121dc3b['is_trial'] == 1 ? '<font color=\'red\'>Trial</font>' : '<font color=\'green\'>Official</font>');

	$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `reg_userlog` (`owner`,`username`,`password`,`date`,`type`) VALUES(\'%s\',\'%s\',\'%s\',\'%s\',\'%s\')', $Ca6af2c8b13444a2978cb0ef98cedaae, base64_decode($Ec0fedcf3bd9121c0953fbeca121dc3b['mag_device']['mac']), '-', time(), $B55f78703213d1595283266f835ca867 . ' [ ' . $f9a8823715bcb54e8069e0086da240b2['editor'] . ': ' . $c83b7d347a6bc7f5f0e3313147e88ecc->member_info['username'] . ' | ' . $Fac708114f97b667403407d22b554e84 . ' ]');

	$Ca6af2c8b13444a2978cb0ef98cedaae = $D29f3c5494cb370b46f3e907dc61f106->B68C0609C13f8645d5E168B69Fd4c118();
	$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `users` SET `isp_desc` = null , `as_number` = null WHERE `id` = \'%d\'', $fd7f2f8cde8b865243a388c219894e64);

	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['isp_reseted'];
	$Ec0fedcf3bd9121c0953fbeca121dc3b = DfA6500B681F783bBbCB94474366BB27::Fc219CEC06e2eCf9A5083c03B314d183($fd7f2f8cde8b865243a388c219894e64);
	$D29f3c5494cb370b46f3e907dc61f106->query('SELECT `username` FROM `reg_users` WHERE `id` = \'%d\'', $Ec0fedcf3bd9121c0953fbeca121dc3b['member_id']);
case 'user_kick':
	$fd7f2f8cde8b865243a388c219894e64 = intval(B8A6eA05eebC7e2e3503eA794b1A1eE4::$request['user_id']);

	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['mag_kicked'];
	$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `reg_userlog` (`owner`,`username`,`password`,`date`,`type`) VALUES(\'%s\',\'%s\',\'%s\',\'%s\',\'%s\')', $Ca6af2c8b13444a2978cb0ef98cedaae, base64_decode($Ec0fedcf3bd9121c0953fbeca121dc3b['mag_device']['mac']), '-', time(), $B55f78703213d1595283266f835ca867 . ' [<font color="purple"> ' . $f9a8823715bcb54e8069e0086da240b2['editor'] . '</font>: ' . $c83b7d347a6bc7f5f0e3313147e88ecc->member_info['username'] . ' | ' . $Fac708114f97b667403407d22b554e84 . ' ]');
	$D29f3c5494cb370b46f3e907dc61f106->query('SELECT `username` FROM `reg_users` WHERE `id` = \'%d\'', $Ec0fedcf3bd9121c0953fbeca121dc3b['member_id']);

	dfA6500b681F783BBbCb94474366bB27::e0822B2F27741024e85a94F93aDC3823($fd7f2f8cde8b865243a388c219894e64);
	$Ca6af2c8b13444a2978cb0ef98cedaae = $D29f3c5494cb370b46f3e907dc61f106->B68c0609c13f8645d5E168b69FD4c118();
	$Fac708114f97b667403407d22b554e84 = ($Ec0fedcf3bd9121c0953fbeca121dc3b['is_trial'] == 1 ? '<font color=\'red\'>Trial</font>' : '<font color=\'green\'>Official</font>');

	$Ec0fedcf3bd9121c0953fbeca121dc3b = DfA6500b681f783BBBCB94474366bB27::Fc219CEC06e2ecf9a5083c03b314d183($fd7f2f8cde8b865243a388c219894e64);
case 'delete':
	$D29f3c5494cb370b46f3e907dc61f106->query('DELETE FROM `mag_devices` WHERE `mag_id`  = \'%d\'', $Ae69657887d4ff7aed6dd09fc72a542e);
	$Ec0fedcf3bd9121c0953fbeca121dc3b = DFa6500b681f783BbBcB94474366bb27::fc219Cec06E2ECf9a5083C03B314D183($E5ed50a6841f7776a8a34d6ea2729245['mag_device']['user_id']);

	if (empty(B8A6Ea05EEBC7e2e3503eA794B1A1EE4::$request['mag_id'])) {
	}

	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['mag_deleted'];

	$D29f3c5494cb370b46f3e907dc61f106->query('SELECT `username` FROM `reg_users` WHERE `id` = \'%d\'', $Ec0fedcf3bd9121c0953fbeca121dc3b['member_id']);

	$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `reg_userlog` (`owner`,`username`,`password`,`date`,`type`) VALUES(\'%s\',\'%s\',\'%s\',\'%s\',\'%s\')', $Ca6af2c8b13444a2978cb0ef98cedaae, base64_decode($Ec0fedcf3bd9121c0953fbeca121dc3b['mag_device']['mac']), '-', time(), $f9a8823715bcb54e8069e0086da240b2['mag_deleted'] . ' [ ' . $f9a8823715bcb54e8069e0086da240b2['editor'] . ': ' . $c83b7d347a6bc7f5f0e3313147e88ecc->member_info['username'] . ' | ' . $Fac708114f97b667403407d22b554e84 . ' ]');
	$Ca6af2c8b13444a2978cb0ef98cedaae = $D29f3c5494cb370b46f3e907dc61f106->b68C0609C13f8645d5E168B69FD4C118();
	$Fac708114f97b667403407d22b554e84 = ($Ec0fedcf3bd9121c0953fbeca121dc3b['is_trial'] == 1 ? '<font color=\'red\'>Trial</font>' : '<font color=\'green\'>Official</font>');

	while (!($E5ed50a6841f7776a8a34d6ea2729245 = dFA6500b681f783bbBCB94474366bb27::ded78709c29e83eE9a7cbeEdafc95035($Ae69657887d4ff7aed6dd09fc72a542e))) {
		$D29f3c5494cb370b46f3e907dc61f106->query('DELETE FROM `users` WHERE `id` = \'%d\'', $E5ed50a6841f7776a8a34d6ea2729245['user_info']['id']);
		$Ae69657887d4ff7aed6dd09fc72a542e = intval(B8a6Ea05eEBC7E2E3503eA794b1A1Ee4::$request['mag_id']);
	}

case 'set_event':
	$Ae69657887d4ff7aed6dd09fc72a542e = intval(B8a6ea05EEBc7e2e3503ea794b1A1EE4::$request['mag_id']);
	$E6412230eeb5a4348cc57a7876286e4a = '<center><form method="post" action="manage_mag.php?action=set_event&event=play_channel&mag_id=' . $Ae69657887d4ff7aed6dd09fc72a542e . '">';

	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['message_sent_unknown'];
	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['event_sent_unknown'];
	$E6412230eeb5a4348cc57a7876286e4a = '<form method="post" action="manage_mag.php?action=set_event&event=send_msg&mag_id=' . $Ae69657887d4ff7aed6dd09fc72a542e . '">';

	$E6412230eeb5a4348cc57a7876286e4a .= '</select>' . "\r\n" . '                                            ' . "\r\n" . '                                        </td>' . "\r\n" . '                                        <td>' . "\r\n" . '                                        <button type="submit">' . $f9a8823715bcb54e8069e0086da240b2['play_channel'] . '</button>' . "\r\n" . '                                        </td>' . "\r\n" . '                                    </tr>';

	$E6412230eeb5a4348cc57a7876286e4a .= '<tr>' . "\r\n" . '                                        <td>' . $f9a8823715bcb54e8069e0086da240b2['message'] . '</td>' . "\r\n" . '                                        <td><textarea class="editor" name="msg" style="width:400px; height:300px;" required></textarea></td>' . "\r\n" . '                                    </tr>';

	echo $E6412230eeb5a4348cc57a7876286e4a;

	$E6412230eeb5a4348cc57a7876286e4a .= '<tr>' . "\r\n" . '                                        <td>' . $f9a8823715bcb54e8069e0086da240b2['user_confirm_msg'] . '</td>' . "\r\n" . '                                        <td><input type="checkbox" name="need_confirm" value="1"></td>' . "\r\n" . '                                    </tr>';

	$E6412230eeb5a4348cc57a7876286e4a .= '<tr>' . "\r\n" . '                                        <td>' . $f9a8823715bcb54e8069e0086da240b2['force_channel_play'] . '</td>' . "\r\n" . '                                        <td>' . "\r\n" . '                                            <select name="channel_id" required>' . "\r\n" . '                                        ';
	$E6412230eeb5a4348cc57a7876286e4a .= '<tr>' . "\r\n" . '                                        <td>' . $f9a8823715bcb54e8069e0086da240b2['reboot_after_ok'] . '</td>' . "\r\n" . '                                        <td><input type="checkbox" name="reboot_after_ok" value="1"></td>' . "\r\n" . '                                    </tr>';

	$E6412230eeb5a4348cc57a7876286e4a .= '</table>' . "\r\n" . '                                    </form></center>';
	$C035d059761f33d363adbb0de6c32e31 = (($Ab8d862ab49d32bfa2a12881fa034cf4 == 1) && !empty(B8a6eA05eeBc7E2e3503eA794B1A1ee4::$request['reboot_after_ok']) ? 1 : 0);

	$bdeb9831adc6aedfa4fbc054067d079d = intval(B8A6EA05eebc7E2E3503eA794B1A1eE4::$request['channel_id']);
	$Ab8d862ab49d32bfa2a12881fa034cf4 = (!empty(b8a6EA05eebc7e2E3503eA794B1A1eE4::$request['need_confirm']) ? 1 : 0);

	foreach ($Bec5cdde1edcbe48329d35b0ec39b278['user_info']['channels'] as $Da88f16fe9e174bc837e9bc400f48c0e) {
		if (!($Da88f16fe9e174bc837e9bc400f48c0e['type_output'] == 'live')) {
		}

		$D6cc74b0166440ae660eb91330b40c5d++;
		$E6412230eeb5a4348cc57a7876286e4a .= '<option value="' . $D6cc74b0166440ae660eb91330b40c5d . '">' . $Da88f16fe9e174bc837e9bc400f48c0e['stream_display_name'] . '</option>';
	}

	$B55f78703213d1595283266f835ca867 = str_replace('{s}', ($Bec5cdde1edcbe48329d35b0ec39b278['mag_device']['last_watchdog'] + $Bec5cdde1edcbe48329d35b0ec39b278['mag_device']['watchdog_timeout']) - time(), $f9a8823715bcb54e8069e0086da240b2['event_sent']);

	$Cde9c6b3a27540c5f95edf6755bb3133 = B8a6eA05eeBc7E2e3503Ea794B1a1ee4::$request['event'];
	echo $E6412230eeb5a4348cc57a7876286e4a;

	if (time() < ($Bec5cdde1edcbe48329d35b0ec39b278['mag_device']['last_watchdog'] + $Bec5cdde1edcbe48329d35b0ec39b278['mag_device']['watchdog_timeout'])) {
	}

	$Db3d54ddaba970d195b68347600d305f = B8A6eA05eeBc7e2e3503EA794B1a1ee4::$request['msg'];
	if (!(!empty(b8A6eA05eebc7E2e3503EA794b1a1EE4::$request['event']) && !empty(B8A6eA05EEBc7e2e3503EA794b1a1EE4::$request['mag_id']))) {
	}

	$B55f78703213d1595283266f835ca867 = str_replace('{s}', ($Bec5cdde1edcbe48329d35b0ec39b278['mag_device']['last_watchdog'] + $Bec5cdde1edcbe48329d35b0ec39b278['mag_device']['watchdog_timeout']) - time(), $f9a8823715bcb54e8069e0086da240b2['message_sent']);

	if (time() < ($Bec5cdde1edcbe48329d35b0ec39b278['mag_device']['last_watchdog'] + $Bec5cdde1edcbe48329d35b0ec39b278['mag_device']['watchdog_timeout'])) {
	}

	b238d0Cc4b3f3613E4190DAa2Ee97A6b($Ae69657887d4ff7aed6dd09fc72a542e, 'send_msg', $Db3d54ddaba970d195b68347600d305f, $Ab8d862ab49d32bfa2a12881fa034cf4, $C035d059761f33d363adbb0de6c32e31);
	exit();
	$E6412230eeb5a4348cc57a7876286e4a .= '<table style="text-align:center;">';

	if (!$Bec5cdde1edcbe48329d35b0ec39b278) {
	}

	$D6cc74b0166440ae660eb91330b40c5d = 1;
	B238D0CC4b3F3613E4190daa2EE97a6b($Ae69657887d4ff7aed6dd09fc72a542e, $Cde9c6b3a27540c5f95edf6755bb3133);
	$Bec5cdde1edcbe48329d35b0ec39b278 = DFA6500b681f783bbBCB94474366bB27::dED78709C29E83eE9a7CbEEdaFc95035($Ae69657887d4ff7aed6dd09fc72a542e, NULL, true, true);
	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['message_sent_unknown'];
	$E6412230eeb5a4348cc57a7876286e4a .= '<tr>' . "\r\n" . '                                        <td></td>' . "\r\n" . '                                        <td><button type="submit">' . $f9a8823715bcb54e8069e0086da240b2['send_message'] . '</button></td>' . "\r\n" . '                                        ' . "\r\n" . '                                    </tr>';

	B238D0cC4b3f3613e4190daa2ee97a6b($Ae69657887d4ff7aed6dd09fc72a542e, 'play_channel', $bdeb9831adc6aedfa4fbc054067d079d);
	exit();
	$E6412230eeb5a4348cc57a7876286e4a .= '</table>' . "\r\n" . '                                    </form><script>$(\'.editor\').jqte();</script>';
	$E6412230eeb5a4348cc57a7876286e4a .= '<table >';
	$B55f78703213d1595283266f835ca867 = str_replace('{s}', ($Bec5cdde1edcbe48329d35b0ec39b278['mag_device']['last_watchdog'] + $Bec5cdde1edcbe48329d35b0ec39b278['mag_device']['watchdog_timeout']) - time(), $f9a8823715bcb54e8069e0086da240b2['message_sent']);
case 'load_users':
	$c17ac00f16e66552f95207ec7818895a = 1;

	exit();
	$E6412230eeb5a4348cc57a7876286e4a['total'] = $Cecfa885eed4e0be5ea572f6a5e134a4['total_rows'];
	$E6412230eeb5a4348cc57a7876286e4a['records'] = array();

	$Cecfa885eed4e0be5ea572f6a5e134a4 = E6a2515514D66836F08b9f626A91c1A7(array('is_mag' => 1), array('mag_devices' => 'user_id'));

	echo json_encode($E6412230eeb5a4348cc57a7876286e4a);
	$E6412230eeb5a4348cc57a7876286e4a = array();

	foreach ($Cecfa885eed4e0be5ea572f6a5e134a4['users'] as $Fa3d19831c58b4235f088f0b5e887ec4) {
		$d510c8dba98eae966876c9ec30cdbf9f = array();
		$f122bd9063f91f23e37e3020056193ce = 'enable';

		$bae0148a7f228f4896b3e005f9e3be70 = '<img src=\'../templates/images/dots/ok.png\' title=\'Online\'>';

		$fd6f27c297566dc2dbc37874bc1e1747 = '<font color="red" font-size="1">[isp-lock enabled]</font><br/>';

		$d510c8dba98eae966876c9ec30cdbf9f['con_info'] = $b3284fbd35d0632b87970a41794030d5 . '<br />' . $fd6f27c297566dc2dbc37874bc1e1747 . '<a target=\'_blank\' href=\'http://www.ip-tracker.org/locator/ip-lookup.php?ip=' . $Fa3d19831c58b4235f088f0b5e887ec4['user_ip'] . '\'><font color=\'blue\'>' . $Fa3d19831c58b4235f088f0b5e887ec4['user_ip'] . '</font></a><br/>' . $ad813e261994ad7c2128cf7c6ba46a48;

		$d510c8dba98eae966876c9ec30cdbf9f['owner'] = $Fa3d19831c58b4235f088f0b5e887ec4['owner'];

		$d510c8dba98eae966876c9ec30cdbf9f['con_info'] = '-';

		$d510c8dba98eae966876c9ec30cdbf9f['online'] = $bae0148a7f228f4896b3e005f9e3be70;

		$a4e6e437f123785c5867b3e1ae39c5a8 = '<font color=\'red\'>' . base64_decode($Fa3d19831c58b4235f088f0b5e887ec4['mac']) . '</font>';
		$d510c8dba98eae966876c9ec30cdbf9f['expire_date'] = '<font color=\'orange\'><b>' . $f9a8823715bcb54e8069e0086da240b2['unlimited'] . '</b></font>';
		$a45b0219ec6e856b0af8b45f4578d82c = '<font color=\'red\'><b>' . $f9a8823715bcb54e8069e0086da240b2['banned'] . '</b></font>';

		if ($Fa3d19831c58b4235f088f0b5e887ec4['exp_date'] < time()) {
		}

		if (0 < $Fa3d19831c58b4235f088f0b5e887ec4['active_connections']) {
		}

		$d510c8dba98eae966876c9ec30cdbf9f['notes'] = '-';

		$bae0148a7f228f4896b3e005f9e3be70 = '<img src=\'../templates/images/dots/offline.png\' title=\'Offline\'>';

		$d510c8dba98eae966876c9ec30cdbf9f['options'] = '<a href="manage_mag.php?action=user_kick&user_id=' . $Fa3d19831c58b4235f088f0b5e887ec4['id'] . '" class="table-icon kill" title="' . $f9a8823715bcb54e8069e0086da240b2['kick_user'] . '"></a>' . "\r\n" . '                          <a href="manage_mag.php?action=enabled&current=' . $Fa3d19831c58b4235f088f0b5e887ec4['enabled'] . '&user_id=' . $Fa3d19831c58b4235f088f0b5e887ec4['id'] . '" class="table-icon ' . $f122bd9063f91f23e37e3020056193ce . '" title="' . $f9a8823715bcb54e8069e0086da240b2['enable_disable'] . '"></a>' . "\r\n" . '                          <a href="manage_mag.php?action=admin_enabled&current=' . $Fa3d19831c58b4235f088f0b5e887ec4['admin_enabled'] . '&user_id=' . $Fa3d19831c58b4235f088f0b5e887ec4['id'] . '" class="table-icon ' . $a7ec67cfaf6291a590ffcee027d37082 . '" title="' . $f9a8823715bcb54e8069e0086da240b2['unblock_block'] . '"></a>' . "\r\n" . '                          <a href="edit_mag.php?id=' . $Fa3d19831c58b4235f088f0b5e887ec4['mag_id'] . '" class="table-icon edit" title="Edit User"></a>' . "\r\n\t\t\t\t\t\t" . '  <a onclick="return confirm(\'' . $f9a8823715bcb54e8069e0086da240b2['delete_line'] . '\')" href="manage_mag.php?action=delete&mag_id=' . $Fa3d19831c58b4235f088f0b5e887ec4['mag_id'] . '" class="table-icon delete" title="Delete User"></a>' . "\t\t\t" . '     ' . "\r\n" . '                ' . $B208460d22cd592fae3b0504a4add37e;

		$a45b0219ec6e856b0af8b45f4578d82c = '<font color=\'green\'><b>' . $f9a8823715bcb54e8069e0086da240b2['enabled'] . '</b></font>';

		$d510c8dba98eae966876c9ec30cdbf9f['mac_address'] = $a4e6e437f123785c5867b3e1ae39c5a8;
		$B208460d22cd592fae3b0504a4add37e = ($Fa3d19831c58b4235f088f0b5e887ec4['is_isplock'] == 1 ? '<a href="manage_mag.php?action=isp_reset&user_id=' . $Fa3d19831c58b4235f088f0b5e887ec4['id'] . '" class="table-icon isp" title="Reset ISP"></a>' : '');

		$a4e6e437f123785c5867b3e1ae39c5a8 = base64_decode($Fa3d19831c58b4235f088f0b5e887ec4['mac']);
		$d510c8dba98eae966876c9ec30cdbf9f['expire_date'] = '-';
		$a7ec67cfaf6291a590ffcee027d37082 = 'unblock';
		$d510c8dba98eae966876c9ec30cdbf9f['status'] = $a45b0219ec6e856b0af8b45f4578d82c;
		$ad813e261994ad7c2128cf7c6ba46a48 = (!empty($Fa3d19831c58b4235f088f0b5e887ec4['isp_desc']) ? $Fa3d19831c58b4235f088f0b5e887ec4['isp_desc'] : '');

		$E6412230eeb5a4348cc57a7876286e4a['records'][] = $d510c8dba98eae966876c9ec30cdbf9f;

		if ($Fa3d19831c58b4235f088f0b5e887ec4['enabled'] == 0) {
		}

		$d510c8dba98eae966876c9ec30cdbf9f['notes'] = encodeToUtf8($Fa3d19831c58b4235f088f0b5e887ec4['admin_notes']);
		$d510c8dba98eae966876c9ec30cdbf9f['recid'] = $c17ac00f16e66552f95207ec7818895a++;
		$d510c8dba98eae966876c9ec30cdbf9f['expire_date'] = '<font color=\'black\'>' . date('d/m/Y H:i', $Fa3d19831c58b4235f088f0b5e887ec4['exp_date']) . '</font>';
		$d510c8dba98eae966876c9ec30cdbf9f['ls_channel'] = 0 < $Fa3d19831c58b4235f088f0b5e887ec4['active_connections'] ? '<b>' . $Fa3d19831c58b4235f088f0b5e887ec4['last_seen'] . '</b><br />[ ' . f305999B96E33aA4a8dD91a5939ae634(time() - $Fa3d19831c58b4235f088f0b5e887ec4['date_start']) . ' ]' : '-';
		$fd6f27c297566dc2dbc37874bc1e1747 = '<font color="red" font-size="1">[isp-locked]</font><br/>';
		$b3284fbd35d0632b87970a41794030d5 = '<img src=\'../templates/images/flags_country/unknown.png\' title=\'' . $f9a8823715bcb54e8069e0086da240b2['unknown'] . '\'>';

		$bae0148a7f228f4896b3e005f9e3be70 = '<img src=\'../templates/images/dots/standby.png\' title=\'StandBy\'>';

		if (!empty($Fa3d19831c58b4235f088f0b5e887ec4['admin_notes'])) {
		}

		$b3284fbd35d0632b87970a41794030d5 = '<img src="../templates/images/flags_country/' . $fdcceffee05a243f8a7b41fe9bfa4ddf . '.png" title="' . $fdcceffee05a243f8a7b41fe9bfa4ddf . '" />';

		$a45b0219ec6e856b0af8b45f4578d82c = '<font color=\'blue\'><b>' . $f9a8823715bcb54e8069e0086da240b2['expired'] . '</b></font>';

		$fdcceffee05a243f8a7b41fe9bfa4ddf = $Fa3d19831c58b4235f088f0b5e887ec4['geoip_country_code'];

		$a45b0219ec6e856b0af8b45f4578d82c = '<font color=\'red\'><b>' . $f9a8823715bcb54e8069e0086da240b2['disabled'] . '</b></font>';

		$fd6f27c297566dc2dbc37874bc1e1747 = '';

		$d510c8dba98eae966876c9ec30cdbf9f['event_actions'] = "\r\n" . '                ' . "\r\n" . '                    <select style="width:130px;height:18px;" onchange="if (this.value != \'send_msg\' && this.value != \'play_channel\') { if(confirm(\'' . $f9a8823715bcb54e8069e0086da240b2['confirm'] . '\')) window.location.href=\'manage_mag.php?action=set_event&event=\' + this.value + \'&mag_id=' . $Fa3d19831c58b4235f088f0b5e887ec4['mag_id'] . '\'; } else { ajax_request_dialog(\'manage_mag.php?action=set_event&event=\' + this.value + \'&mag_id=' . $Fa3d19831c58b4235f088f0b5e887ec4['mag_id'] . '\',\'' . $a4e6e437f123785c5867b3e1ae39c5a8 . '\',\'white\',\'auto\',\'auto\'); } ">' . "\r\n" . '                        <option value="">-</option>' . "\r\n" . '                        <option value="play_channel">' . $f9a8823715bcb54e8069e0086da240b2['force_channel'] . '</option>' . "\r\n" . '                        <option value="reload_portal">' . $f9a8823715bcb54e8069e0086da240b2['reload_portal'] . '</option>' . "\r\n" . '                        <option value="reboot">' . $f9a8823715bcb54e8069e0086da240b2['reboot'] . '</option>' . "\r\n" . '                        <option value="send_msg">' . $f9a8823715bcb54e8069e0086da240b2['send_message'] . '</option>' . "\r\n" . '                        <option value="cut_off">' . $f9a8823715bcb54e8069e0086da240b2['close_portal'] . '</option>' . "\r\n" . '                    </select>' . "\r\n" . '                ';
		$f122bd9063f91f23e37e3020056193ce = 'disable';

		if ($Fa3d19831c58b4235f088f0b5e887ec4['is_isplock'] == 1) {
		}

		$a7ec67cfaf6291a590ffcee027d37082 = 'block';

		$d510c8dba98eae966876c9ec30cdbf9f['expire_date'] = '<font color=\'red\'><b>' . date('d/m/Y H:i', $Fa3d19831c58b4235f088f0b5e887ec4['exp_date']) . '</b></font>';
		$d510c8dba98eae966876c9ec30cdbf9f['statistics'] = '<a target="_blank" href="user_stats.php?action=get&user_id=' . $Fa3d19831c58b4235f088f0b5e887ec4['id'] . '" class="table-icon stats" title="' . $f9a8823715bcb54e8069e0086da240b2['view_user_activity'] . '"></a>';
	}

case 'reset_data':
	if (empty(B8a6eA05eEbC7e2E3503EA794b1a1EE4::$request['mag_id'])) {
	}

	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['reseted_nok'];

	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['reseted_ok'];

	$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `mag_devices` SET `sn` = \'\' , `ver` = \'\' , `stb_type` = \'\' , `device_id` = \'\' , `device_id2` = \'\' , `hw_version` = \'\' , `image_version` = \'\' WHERE `mag_id` = \'%d\'', $Ae69657887d4ff7aed6dd09fc72a542e);
	$Ae69657887d4ff7aed6dd09fc72a542e = b8A6eA05eeBC7e2e3503EA794b1A1Ee4::$request['mag_id'];
default:
	require ('../init.php');
}


?> 

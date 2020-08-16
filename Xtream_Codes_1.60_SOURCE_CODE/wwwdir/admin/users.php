<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

$b8980526936694b2cd4cf6c7f8c80396 = b8A6eA05eeBc7e2e3503Ea794B1A1eE4::$request['action'];

require (IPTV_TEMPLATES_PATH . '/' . 'footer.php');

if ($c83b7d347a6bc7f5f0e3313147e88ecc->cB674e1C9BBDb0E29aD2a7a35964aE35()) {
}

$c83b7d347a6bc7f5f0e3313147e88ecc->FA7e9FB747dD7976dd94Ea27Fa865b5D();

while (!isset(b8A6Ea05eEBC7e2E3503eA794b1a1Ee4::$request['action'])) {
	unset(b8a6Ea05EEBc7E2E3503ea794B1A1ee4::$request['action']);

	switch ($b8980526936694b2cd4cf6c7f8c80396) {
	default:
		session_start();

		require (IPTV_TEMPLATES_PATH . '/' . '/admin/' . 'users.php');
		header('Location: ../index.php?error=NO_ADMIN');

		$e18e799ca1b7becd957ad9b71f9cf17f = array();

		require ('../init.php');
		exit(0);
	case 'enabled':
		dfA6500b681f783bbbcB94474366bB27::E0822B2F27741024E85A94f93AdC3823($fd7f2f8cde8b865243a388c219894e64);

		$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `reg_userlog` (`owner`,`username`,`password`,`date`,`type`) VALUES(\'%s\',\'%s\',\'%s\',\'%s\',\'%s\')', $Ca6af2c8b13444a2978cb0ef98cedaae, $Ec0fedcf3bd9121c0953fbeca121dc3b['username'], $Ec0fedcf3bd9121c0953fbeca121dc3b['password'], time(), $B55f78703213d1595283266f835ca867 . ' [ ' . $f9a8823715bcb54e8069e0086da240b2['editor'] . ': ' . $c83b7d347a6bc7f5f0e3313147e88ecc->member_info['username'] . ' | ' . $Fac708114f97b667403407d22b554e84 . ' ]');

		$fc36179cf1c4571ad2ecb8a178952cf1 = 1;
		$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['user_enabled'];
		$fd7f2f8cde8b865243a388c219894e64 = intval(b8a6ea05Eebc7E2E3503ea794B1A1EE4::$request['user_id']);
		$Fac708114f97b667403407d22b554e84 = ($Ec0fedcf3bd9121c0953fbeca121dc3b['is_trial'] == 1 ? '<font color=\'red\'>Trial</font>' : '<font color=\'green\'>Official</font>');
		$A5f4c44cc29cf8e18b4ff540e79fbe43 = (isset(B8A6ea05EebC7E2E3503Ea794b1a1EE4::$request['current']) && (0 < B8a6Ea05eeBc7e2E3503Ea794B1A1EE4::$request['current']) ? 1 : 0);
		$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['user_disabled'];

		$Ec0fedcf3bd9121c0953fbeca121dc3b = DFA6500b681f783BbBcB94474366Bb27::fC219CeC06e2ecF9a5083C03B314D183($fd7f2f8cde8b865243a388c219894e64);

		$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `users` SET `enabled` = \'%d\' WHERE `id` = \'%d\'', $fc36179cf1c4571ad2ecb8a178952cf1, $fd7f2f8cde8b865243a388c219894e64);

		$Ca6af2c8b13444a2978cb0ef98cedaae = $D29f3c5494cb370b46f3e907dc61f106->b68C0609c13F8645d5E168b69FD4c118();
		$fc36179cf1c4571ad2ecb8a178952cf1 = 0;
		$D29f3c5494cb370b46f3e907dc61f106->query('SELECT `username` FROM `reg_users` WHERE `id` = \'%d\'', $Ec0fedcf3bd9121c0953fbeca121dc3b['member_id']);
	case 'admin_enabled':
		$Ca6af2c8b13444a2978cb0ef98cedaae = $D29f3c5494cb370b46f3e907dc61f106->B68C0609c13f8645d5E168B69fd4C118();
		$Fac708114f97b667403407d22b554e84 = ($Ec0fedcf3bd9121c0953fbeca121dc3b['is_trial'] == 1 ? '<font color=\'red\'>Trial</font>' : '<font color=\'green\'>Official</font>');

		$D29f3c5494cb370b46f3e907dc61f106->query('SELECT `username` FROM `reg_users` WHERE `id` = \'%d\'', $Ec0fedcf3bd9121c0953fbeca121dc3b['member_id']);

		$Ec0fedcf3bd9121c0953fbeca121dc3b = DFa6500B681f783BbbCB94474366bb27::fC219ceC06e2Ecf9a5083c03B314D183($fd7f2f8cde8b865243a388c219894e64);
		$A5f4c44cc29cf8e18b4ff540e79fbe43 = (isset(b8a6EA05eEBc7e2e3503EA794B1a1eE4::$request['current']) && (0 < b8a6Ea05EEBc7e2E3503Ea794B1A1eE4::$request['current']) ? 1 : 0);

		$fd7f2f8cde8b865243a388c219894e64 = intval(B8A6EA05eEbc7E2e3503eA794B1A1eE4::$request['user_id']);
		$fc36179cf1c4571ad2ecb8a178952cf1 = 0;

		$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `reg_userlog` (`owner`,`username`,`password`,`date`,`type`) VALUES(\'%s\',\'%s\',\'%s\',\'%s\',\'%s\')', $Ca6af2c8b13444a2978cb0ef98cedaae, $Ec0fedcf3bd9121c0953fbeca121dc3b['username'], $Ec0fedcf3bd9121c0953fbeca121dc3b['password'], time(), $B55f78703213d1595283266f835ca867 . ' [ ' . $f9a8823715bcb54e8069e0086da240b2['editor'] . ': ' . $c83b7d347a6bc7f5f0e3313147e88ecc->member_info['username'] . ' | ' . $Fac708114f97b667403407d22b554e84 . ' ]');

		$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['user_unblocked'];

		$fc36179cf1c4571ad2ecb8a178952cf1 = 1;

		$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `users` SET `admin_enabled` = \'%d\' WHERE `id` = \'%d\'', $fc36179cf1c4571ad2ecb8a178952cf1, $fd7f2f8cde8b865243a388c219894e64);

		$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['user_blocked'];
		dFA6500B681f783Bbbcb94474366BB27::E0822B2f27741024E85a94f93adc3823($fd7f2f8cde8b865243a388c219894e64);
	case 'isp_reset':
		$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `users` SET `isp_desc` = null , `as_number` = null WHERE `id` = \'%d\'', $fd7f2f8cde8b865243a388c219894e64);
		$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['isp_reseted'];
		$Fac708114f97b667403407d22b554e84 = ($Ec0fedcf3bd9121c0953fbeca121dc3b['is_trial'] == 1 ? '<font color=\'red\'>Trial</font>' : '<font color=\'green\'>Official</font>');

		$fd7f2f8cde8b865243a388c219894e64 = intval(B8A6eA05EEBC7E2E3503eA794B1a1eE4::$request['user_id']);
		$Ec0fedcf3bd9121c0953fbeca121dc3b = dFa6500b681f783BbbCB94474366bB27::fC219CeC06e2eCf9a5083C03B314d183($fd7f2f8cde8b865243a388c219894e64);

		$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `reg_userlog` (`owner`,`username`,`password`,`date`,`type`) VALUES(\'%s\',\'%s\',\'%s\',\'%s\',\'%s\')', $Ca6af2c8b13444a2978cb0ef98cedaae, $Ec0fedcf3bd9121c0953fbeca121dc3b['username'], $Ec0fedcf3bd9121c0953fbeca121dc3b['password'], time(), $f9a8823715bcb54e8069e0086da240b2['isp_reseted'] . ' [ ' . $f9a8823715bcb54e8069e0086da240b2['editor'] . ': ' . $c83b7d347a6bc7f5f0e3313147e88ecc->member_info['username'] . ' | ' . $Fac708114f97b667403407d22b554e84 . ' ]');

		$D29f3c5494cb370b46f3e907dc61f106->query('SELECT `username` FROM `reg_users` WHERE `id` = \'%d\'', $Ec0fedcf3bd9121c0953fbeca121dc3b['member_id']);
		$Ca6af2c8b13444a2978cb0ef98cedaae = $D29f3c5494cb370b46f3e907dc61f106->b68C0609c13f8645D5E168b69fd4c118();
	case 'user_kick':
		$D29f3c5494cb370b46f3e907dc61f106->query('SELECT `username` FROM `reg_users` WHERE `id` = \'%d\'', $Ec0fedcf3bd9121c0953fbeca121dc3b['member_id']);

		$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `reg_userlog` (`owner`,`username`,`password`,`date`,`type`) VALUES(\'%s\',\'%s\',\'%s\',\'%s\',\'%s\')', $Ca6af2c8b13444a2978cb0ef98cedaae, $Ec0fedcf3bd9121c0953fbeca121dc3b['username'], $Ec0fedcf3bd9121c0953fbeca121dc3b['password'], time(), $f9a8823715bcb54e8069e0086da240b2['user_kicked'] . ' [ <font color="purple">' . $f9a8823715bcb54e8069e0086da240b2['editor'] . '</font>: ' . $c83b7d347a6bc7f5f0e3313147e88ecc->member_info['username'] . ' | ' . $Fac708114f97b667403407d22b554e84 . ' ]');
		$fd7f2f8cde8b865243a388c219894e64 = intval(B8A6eA05EEbc7E2E3503ea794B1A1EE4::$request['user_id']);

		$Ca6af2c8b13444a2978cb0ef98cedaae = $D29f3c5494cb370b46f3e907dc61f106->b68c0609c13f8645D5e168B69FD4C118();

		$Ec0fedcf3bd9121c0953fbeca121dc3b = DFa6500b681F783BbBcB94474366Bb27::FC219cEc06E2ecf9a5083C03b314D183($fd7f2f8cde8b865243a388c219894e64);
		$Fac708114f97b667403407d22b554e84 = ($Ec0fedcf3bd9121c0953fbeca121dc3b['is_trial'] == 1 ? '<font color=\'red\'>Trial</font>' : '<font color=\'green\'>Official</font>');

		$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['user_kicked'];
		DFA6500B681f783bbBCB94474366BB27::E0822b2F27741024e85A94f93ADc3823($fd7f2f8cde8b865243a388c219894e64);
	case 'user_delete':
		$Ec0fedcf3bd9121c0953fbeca121dc3b = DFA6500B681F783BbBCb94474366bB27::fc219Cec06E2eCF9A5083C03B314D183($fd7f2f8cde8b865243a388c219894e64);
		$fd7f2f8cde8b865243a388c219894e64 = intval(B8A6Ea05eebC7e2E3503Ea794B1a1eE4::$request['user_id']);
		$Fac708114f97b667403407d22b554e84 = ($Ec0fedcf3bd9121c0953fbeca121dc3b['is_trial'] == 1 ? '<font color=\'red\'>Trial</font>' : '<font color=\'green\'>Official</font>');
		$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `reg_userlog` (`owner`,`username`,`password`,`date`,`type`) VALUES(\'%s\',\'%s\',\'%s\',\'%s\',\'%s\')', $Ca6af2c8b13444a2978cb0ef98cedaae, $Ec0fedcf3bd9121c0953fbeca121dc3b['username'], $Ec0fedcf3bd9121c0953fbeca121dc3b['password'], time(), $f9a8823715bcb54e8069e0086da240b2['user_deleted'] . ' [ ' . $f9a8823715bcb54e8069e0086da240b2['editor'] . ': ' . $c83b7d347a6bc7f5f0e3313147e88ecc->member_info['username'] . ' | ' . $Fac708114f97b667403407d22b554e84 . ' ]');

		$Ca6af2c8b13444a2978cb0ef98cedaae = $D29f3c5494cb370b46f3e907dc61f106->b68c0609c13f8645D5e168B69FD4c118();

		dfa6500b681f783BbbCb94474366BB27::E0822b2f27741024e85A94F93adc3823($fd7f2f8cde8b865243a388c219894e64);

		$D29f3c5494cb370b46f3e907dc61f106->query('SELECT `username` FROM `reg_users` WHERE `id` = \'%d\'', $Ec0fedcf3bd9121c0953fbeca121dc3b['member_id']);
		$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['user_deleted'];

		$D29f3c5494cb370b46f3e907dc61f106->query('DELETE FROM `users` WHERE `id` = \'%d\'', $fd7f2f8cde8b865243a388c219894e64);
	case 'generate_script':
		$fd7f2f8cde8b865243a388c219894e64 = intval(B8A6Ea05EeBc7e2e3503eA794B1a1Ee4::$request['user_id']);

		$b729e1e76a388ffdd6a130fbb0325a8e = C05BAA609A491D005C09122F5cF68e76($fd7f2f8cde8b865243a388c219894e64, $a0e510f12386604aef864c0c65fa8433, true);

		$a0e510f12386604aef864c0c65fa8433 = B8a6eA05eeBC7e2E3503EA794B1A1Ee4::$request['type'];
	case 'download_scripts':
		exit();

		echo $E0f24f08890a69b3a0d6a822a002d25e;

		$E0f24f08890a69b3a0d6a822a002d25e .= '</select><br /><br /><input type="text" id="replace" size="100" /></center>';

		$E0f24f08890a69b3a0d6a822a002d25e = '<center><select style="width:130px" name="list" id="list"><option value="">-</option>';
		$Ec0fedcf3bd9121c0953fbeca121dc3b = dfa6500b681f783bbBCB94474366Bb27::Fc219cEC06E2Ecf9a5083C03b314D183($fd7f2f8cde8b865243a388c219894e64);
		$B87551f17fbd2921a91b1b841eec8a05 = faF691d5477d59C14Db4153eE659F9C0();

		foreach ($B87551f17fbd2921a91b1b841eec8a05 as $F431d380c03befb8a00187edfb240a34) {
			$E0f24f08890a69b3a0d6a822a002d25e .= '</optgroup>';
			$E0f24f08890a69b3a0d6a822a002d25e .= '<optgroup style="background:#19D175;" label="' . $F431d380c03befb8a00187edfb240a34['device_name'] . '">';
			foreach ($Bda8edc28509d4243a1d0bd7710d1201 as $ee17e37bde2c409afe712a7cd605cb53) {
				$E0f24f08890a69b3a0d6a822a002d25e .= '<option value=\'' . $de8cb5e6bd1059142c6fa701f432692c . '\'>' . $ee17e37bde2c409afe712a7cd605cb53['output_name'] . ' ' . $D843db41ffdedb67413ad353d52dead5 . '</option>';
				$D843db41ffdedb67413ad353d52dead5 = ($F431d380c03befb8a00187edfb240a34['default_output'] == $ee17e37bde2c409afe712a7cd605cb53['access_output_id'] ? ' - Default' : '');
				$de8cb5e6bd1059142c6fa701f432692c = (!empty($F431d380c03befb8a00187edfb240a34['copy_text']) ? str_replace('{DEVICE_LINK}', '"' . B8a6ea05Eebc7e2e3503Ea794B1a1eE4::$StreamingServers[SERVER_ID]['site_url'] . 'get.php?username=' . $Ec0fedcf3bd9121c0953fbeca121dc3b['username'] . '&password=' . $Ec0fedcf3bd9121c0953fbeca121dc3b['password'] . '&type=' . $F431d380c03befb8a00187edfb240a34['device_key'] . '&output=' . $ee17e37bde2c409afe712a7cd605cb53['output_key'] . '"', $F431d380c03befb8a00187edfb240a34['copy_text']) : b8a6eA05EEbC7E2e3503Ea794b1a1eE4::$StreamingServers[SERVER_ID]['site_url'] . 'get.php?username=' . $Ec0fedcf3bd9121c0953fbeca121dc3b['username'] . '&password=' . $Ec0fedcf3bd9121c0953fbeca121dc3b['password'] . '&type=' . $F431d380c03befb8a00187edfb240a34['device_key'] . '&output=' . $ee17e37bde2c409afe712a7cd605cb53['output_key']);
			}

		}

		echo '<script>' . "\r\n" . '                    $(document).ready(function() {' . "\r\n" . '                    ' . "\r\n" . '                        $(\'#list\').on(\'change\',function () {' . "\r\n" . '                            ' . "\r\n" . '                          $(\'#replace\').val($(this).val());' . "\r\n" . '                          $(\'#replace\').select(); ' . "\r\n" . '                          ' . "\r\n" . '                        });' . "\r\n" . '                    });' . "\r\n" . '                    </script>';

		$fd7f2f8cde8b865243a388c219894e64 = intval(b8a6EA05eEbC7e2e3503Ea794B1A1EE4::$request['user_id']);
		$Bda8edc28509d4243a1d0bd7710d1201 = AD2d01E289081a9F123014e2B99C42D0();
	case 'load_users':
		$a7ec67cfaf6291a590ffcee027d37082 = 'block';

		exit();

		$d510c8dba98eae966876c9ec30cdbf9f['expire'] = '<font color=\'red\'><b>' . date('d/m/Y H:i', $Fa3d19831c58b4235f088f0b5e887ec4['exp_date']) . '</b></font>';

		$d510c8dba98eae966876c9ec30cdbf9f['max_cons'] = $Fa3d19831c58b4235f088f0b5e887ec4['active_connections'] . ' / &infin;';

		$f122bd9063f91f23e37e3020056193ce = 'enable';

		$C2aaac60d16a3fe3b99fcb0176fbe5d7 = $Fa3d19831c58b4235f088f0b5e887ec4['username'] . $D587574cd4d59dd8e25063c18b2206ef;

		$d510c8dba98eae966876c9ec30cdbf9f['con_info'] = $b3284fbd35d0632b87970a41794030d5 . '<br />' . $fd6f27c297566dc2dbc37874bc1e1747 . '<a target=\'_blank\' href=\'http://www.ip-tracker.org/locator/ip-lookup.php?ip=' . $Fa3d19831c58b4235f088f0b5e887ec4['user_ip'] . '\'><font color=\'blue\'>' . $Fa3d19831c58b4235f088f0b5e887ec4['user_ip'] . '</font></a><br/>' . $ad813e261994ad7c2128cf7c6ba46a48;
		$d510c8dba98eae966876c9ec30cdbf9f['notes'] = '-';

		$d510c8dba98eae966876c9ec30cdbf9f['con_info'] = '-';
		$c17ac00f16e66552f95207ec7818895a = 1;

		$d510c8dba98eae966876c9ec30cdbf9f['notes'] = $Fa3d19831c58b4235f088f0b5e887ec4['admin_notes'];

		$fd6f27c297566dc2dbc37874bc1e1747 = '';

		$f122bd9063f91f23e37e3020056193ce = 'disable';
		$d510c8dba98eae966876c9ec30cdbf9f = array();

		$d510c8dba98eae966876c9ec30cdbf9f['options'] = '<a href="users.php?action=user_kick&user_id=' . $Fa3d19831c58b4235f088f0b5e887ec4['id'] . '" class="table-icon kill" title="' . $f9a8823715bcb54e8069e0086da240b2['kick_user'] . '"></a>' . "\r\n" . '                          <a href="users.php?action=enabled&current=' . $Fa3d19831c58b4235f088f0b5e887ec4['enabled'] . '&user_id=' . $Fa3d19831c58b4235f088f0b5e887ec4['id'] . '" class="table-icon ' . $f122bd9063f91f23e37e3020056193ce . '" title="' . $f9a8823715bcb54e8069e0086da240b2['enable_disable'] . '"></a>' . "\r\n" . '                          <a href="users.php?action=admin_enabled&current=' . $Fa3d19831c58b4235f088f0b5e887ec4['admin_enabled'] . '&user_id=' . $Fa3d19831c58b4235f088f0b5e887ec4['id'] . '" class="table-icon ' . $a7ec67cfaf6291a590ffcee027d37082 . '" title="' . $f9a8823715bcb54e8069e0086da240b2['unblock_block'] . '"></a>' . "\r\n" . '                          <a href="edit_user.php?user_id=' . $Fa3d19831c58b4235f088f0b5e887ec4['id'] . '" class="table-icon edit" title="Edit User"></a>' . "\r\n\t\t\t\t\t\t" . '  <a onclick="return confirm(\'' . $f9a8823715bcb54e8069e0086da240b2['delete_line'] . '\')" href="users.php?action=user_delete&user_id=' . $Fa3d19831c58b4235f088f0b5e887ec4['id'] . '" class="table-icon delete" title="Delete User"></a>' . "\t\t\t" . '     ' . "\r\n" . '                ' . $B208460d22cd592fae3b0504a4add37e;

		$b3284fbd35d0632b87970a41794030d5 = '<img src=\'../templates/images/flags_country/unknown.png\' title=\'' . $f9a8823715bcb54e8069e0086da240b2['unknown'] . '\'>';

		$bae0148a7f228f4896b3e005f9e3be70 = '<img src=\'../templates/images/dots/ok.png\' title=\'Online\'>';
		$a45b0219ec6e856b0af8b45f4578d82c = '<font color=\'red\'><b>' . $f9a8823715bcb54e8069e0086da240b2['banned'] . '</b></font>';

		$d510c8dba98eae966876c9ec30cdbf9f['owner'] = $Fa3d19831c58b4235f088f0b5e887ec4['owner'];

		$c0a20089b6b0fac4d59b6d1eeceaafbf = $Fa3d19831c58b4235f088f0b5e887ec4['password'] . $D587574cd4d59dd8e25063c18b2206ef;

		$d510c8dba98eae966876c9ec30cdbf9f['expire'] = '<font color=\'black\'>' . date('d/m/Y H:i', $Fa3d19831c58b4235f088f0b5e887ec4['exp_date']) . '</font>';
		$bae0148a7f228f4896b3e005f9e3be70 = '<img src=\'../templates/images/dots/offline.png\' title=\'Offline\'>';
		$d510c8dba98eae966876c9ec30cdbf9f['expire'] = '<font color=\'orange\'><b>' . $f9a8823715bcb54e8069e0086da240b2['unlimited'] . '</b></font>';
		$B208460d22cd592fae3b0504a4add37e = ($Fa3d19831c58b4235f088f0b5e887ec4['is_isplock'] == 1 ? '<a href="users.php?action=isp_reset&user_id=' . $Fa3d19831c58b4235f088f0b5e887ec4['id'] . '" class="table-icon isp" title="Reset ISP"></a>' : '');

		$a45b0219ec6e856b0af8b45f4578d82c = '<font color=\'green\'><b>' . $f9a8823715bcb54e8069e0086da240b2['enabled'] . '</b></font>';

		if (empty($Fa3d19831c58b4235f088f0b5e887ec4['as_number'])) {
		}

		$fd6f27c297566dc2dbc37874bc1e1747 = '<font color="red" font-size="1">[isp-locked]</font><br/>';

		$d510c8dba98eae966876c9ec30cdbf9f['expire'] = '-';

		$b3284fbd35d0632b87970a41794030d5 = '<img src="../templates/images/flags_country/' . $fdcceffee05a243f8a7b41fe9bfa4ddf . '.png" title="' . $fdcceffee05a243f8a7b41fe9bfa4ddf . '" />';

		$a7ec67cfaf6291a590ffcee027d37082 = 'unblock';

		$fd6f27c297566dc2dbc37874bc1e1747 = '<font color="red" font-size="1">[isp-lock enabled]</font><br/>';
		echo '{"records":[';

		if (!empty($Fa3d19831c58b4235f088f0b5e887ec4['admin_notes'])) {
		}

		if (0 < $Fa3d19831c58b4235f088f0b5e887ec4['active_connections']) {
		}

		$d510c8dba98eae966876c9ec30cdbf9f['recid'] = $c17ac00f16e66552f95207ec7818895a++;
		$d510c8dba98eae966876c9ec30cdbf9f['online'] = $bae0148a7f228f4896b3e005f9e3be70;

		$d510c8dba98eae966876c9ec30cdbf9f['username'] = $C2aaac60d16a3fe3b99fcb0176fbe5d7;
		$d510c8dba98eae966876c9ec30cdbf9f['statistics'] = '<a target="_blank" href="user_stats.php?action=get&user_id=' . $Fa3d19831c58b4235f088f0b5e887ec4['id'] . '" class="table-icon stats" title="' . $f9a8823715bcb54e8069e0086da240b2['view_user_activity'] . '"></a>';

		echo json_encode(array_map('encodeToUtf8', $d510c8dba98eae966876c9ec30cdbf9f));

		$fdcceffee05a243f8a7b41fe9bfa4ddf = $Fa3d19831c58b4235f088f0b5e887ec4['geoip_country_code'];

		$D587574cd4d59dd8e25063c18b2206ef = '<br />[ <font color="red">Stalker</font> ]';
		$a45b0219ec6e856b0af8b45f4578d82c = '<font color=\'blue\'><b>' . $f9a8823715bcb54e8069e0086da240b2['expired'] . '</b></font>';

		$d510c8dba98eae966876c9ec30cdbf9f['status'] = $a45b0219ec6e856b0af8b45f4578d82c;
		$D587574cd4d59dd8e25063c18b2206ef = '';

		if (!empty($fdcceffee05a243f8a7b41fe9bfa4ddf)) {
		}

		$c0a20089b6b0fac4d59b6d1eeceaafbf = '<font color=\'red\'>' . $Fa3d19831c58b4235f088f0b5e887ec4['password'] . '</font>';
		$C2aaac60d16a3fe3b99fcb0176fbe5d7 = '<font color=\'red\'>' . $Fa3d19831c58b4235f088f0b5e887ec4['username'] . '</font>';

		echo '],"total": ' . $c17ac00f16e66552f95207ec7818895a . '}';
		$d510c8dba98eae966876c9ec30cdbf9f['download'] = '<a onclick="ajax_request_dialog(\'users.php?action=download_scripts&user_id=' . $Fa3d19831c58b4235f088f0b5e887ec4['id'] . '\',\'Download Scripts\',\'white\',\'auto\',\'auto\');"><img src=\'../templates/images/download.png\'></a>';

		if (!($c17ac00f16e66552f95207ec7818895a != 1)) {
		}

		if ($Fa3d19831c58b4235f088f0b5e887ec4['is_trial'] == 1) {
		}

		echo ',';
		$ad813e261994ad7c2128cf7c6ba46a48 = (!empty($Fa3d19831c58b4235f088f0b5e887ec4['isp_desc']) ? $Fa3d19831c58b4235f088f0b5e887ec4['isp_desc'] : '');
		$d510c8dba98eae966876c9ec30cdbf9f['max_cons'] = $Fa3d19831c58b4235f088f0b5e887ec4['active_connections'] . ' / ' . $Fa3d19831c58b4235f088f0b5e887ec4['max_connections'];
		$d510c8dba98eae966876c9ec30cdbf9f['channel'] = 0 < $Fa3d19831c58b4235f088f0b5e887ec4['active_connections'] ? '<b>' . $Fa3d19831c58b4235f088f0b5e887ec4['last_seen'] . '</b><br />[ ' . F305999b96E33aA4A8dD91A5939AE634(time() - $Fa3d19831c58b4235f088f0b5e887ec4['date_start']) . ' ]' : '-';

		$a45b0219ec6e856b0af8b45f4578d82c = '<font color=\'red\'><b>' . $f9a8823715bcb54e8069e0086da240b2['disabled'] . '</b></font>';

		if ($Fa3d19831c58b4235f088f0b5e887ec4['exp_date'] < time()) {
		}

		if (is_null($Fa3d19831c58b4235f088f0b5e887ec4['exp_date'])) {
		}

		$d510c8dba98eae966876c9ec30cdbf9f['password'] = $c0a20089b6b0fac4d59b6d1eeceaafbf;

		$e7bd9addd9185de82ac57a72b13a4670 = mysqli_query($D29f3c5494cb370b46f3e907dc61f106->dbh, 'SELECT t1.*,t3.username as owner,user_activity_now.stream_id,user_activity_now.geoip_country_code,user_activity_now.date_start,user_activity_now.user_ip, streams.stream_display_name as last_seen,(SELECT count(`user_activity_now`.`activity_id`) FROM `user_activity_now` WHERE `user_activity_now`.`user_id` = t1.id) active_connections' . "\r\n" . '                        FROM `users` t1' . "\r\n" . '                        LEFT JOIN (' . "\r\n" . '                          SELECT user_id, MAX(activity_id) AS maxid FROM user_activity_now GROUP BY user_id' . "\r\n" . '                        ) mostrecent' . "\r\n" . '                         ON t1.id= mostrecent.user_id' . "\r\n" . '                        LEFT JOIN user_activity_now' . "\r\n" . '                         ON t1.id= user_activity_now.user_id AND user_activity_now.activity_id = mostrecent.maxid' . "\r\n" . '                        LEFT JOIN streams' . "\r\n" . '                         ON user_activity_now.stream_id = streams.id' . "\r\n" . '                        LEFT JOIN reg_users t3' . "\r\n" . '                         ON t1.member_id = t3.id  ' . "\r\n" . '                        WHERE t1.is_mag = 0                 ' . "\r\n" . '                        ORDER BY t1.id DESC ', MYSQLI_USE_RESULT);
	case 'download_list':
		$fd7f2f8cde8b865243a388c219894e64 = intval(b8a6eA05eebC7E2e3503eA794B1A1ee4::$request['user_id']);
		$a0e510f12386604aef864c0c65fa8433 = B8A6EA05EEBc7e2E3503eA794B1a1eE4::$request['type'];
		$b729e1e76a388ffdd6a130fbb0325a8e = b1EEd986543c66DF327BDB87b504AA78($fd7f2f8cde8b865243a388c219894e64, $a0e510f12386604aef864c0c65fa8433, true);
	}

}


?> 

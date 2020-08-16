<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

$c83b7d347a6bc7f5f0e3313147e88ecc->FA7e9Fb747dd7976DD94EA27FA865B5D();

switch ($b8980526936694b2cd4cf6c7f8c80396) {
case 'settings':
	foreach (b8A6EA05EeBc7e2e3503Ea794B1a1ee4::$request as $dac2ee7701c8fb49c631b348fd1038dc => $Ecb0faf5f94eff0e9cc3f9ebfd12db53) {
		$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `settings` SET `%s` = \'%s\' WHERE `id` = 1', $dac2ee7701c8fb49c631b348fd1038dc, $Ecb0faf5f94eff0e9cc3f9ebfd12db53);

		b8a6EA05EeBc7E2e3503EA794b1a1Ee4::$settings[$dac2ee7701c8fb49c631b348fd1038dc] = $Ecb0faf5f94eff0e9cc3f9ebfd12db53;
	}

	$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `licence` SET `reshare_deny_addon` = 0');

	$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `licence` SET `reshare_deny_addon` = \'%d\'', $cef69cbe2f0bc0db3d5442f244993494);

	b8A6eA05eEBc7E2e3503ea794b1A1EE4::$licence['reshare_deny_addon'] = 0;

	b8a6eA05EEbc7e2E3503Ea794B1a1Ee4::$licence['reshare_deny_addon'] = $cef69cbe2f0bc0db3d5442f244993494;

	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['reshare_purcashe'];
	$cef69cbe2f0bc0db3d5442f244993494 = (!empty(B8A6Ea05eEBc7e2E3503ea794B1A1Ee4::$request['reshare_deny_addon']) ? 1 : 0);

	if (a8379Be1602EfA9914014c89c86769bA()) {
	}

	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['action_done'];
case 'load_diff_isp':
	$d510c8dba98eae966876c9ec30cdbf9f = array();

	$d510c8dba98eae966876c9ec30cdbf9f['password'] = $F2cdbc58310b80770be95527b7a6eaa7['password'];

	exit();
	$d510c8dba98eae966876c9ec30cdbf9f['owner'] = '<font color="orange"><b>' . $F2cdbc58310b80770be95527b7a6eaa7['owner'] . '</b></font>';

	$E6412230eeb5a4348cc57a7876286e4a = array();
	$c17ac00f16e66552f95207ec7818895a = 0;
	$E6412230eeb5a4348cc57a7876286e4a['total'] = $c17ac00f16e66552f95207ec7818895a;

	$d510c8dba98eae966876c9ec30cdbf9f['username'] = base64_decode($F2cdbc58310b80770be95527b7a6eaa7['mac']);

	$E6412230eeb5a4348cc57a7876286e4a['records'] = array();
	$d510c8dba98eae966876c9ec30cdbf9f['password'] = '-';

	$d510c8dba98eae966876c9ec30cdbf9f['diff_isp'] = '<font color="red">' . $F2cdbc58310b80770be95527b7a6eaa7['extra_data'] . '</font>';
	$d510c8dba98eae966876c9ec30cdbf9f['tries'] = $F2cdbc58310b80770be95527b7a6eaa7['total_tries'];

	$d510c8dba98eae966876c9ec30cdbf9f['main_isp'] = '<font color="green">' . $F2cdbc58310b80770be95527b7a6eaa7['isp_desc'] . '</font>';
	$d510c8dba98eae966876c9ec30cdbf9f['username'] = $F2cdbc58310b80770be95527b7a6eaa7['username'];
	$e7bd9addd9185de82ac57a72b13a4670 = mysqli_query($D29f3c5494cb370b46f3e907dc61f106->dbh, 'SELECT COUNT(t1.id) as total_tries,t4.mac,t3.username as owner,t1.user_id,t1.extra_data,t2.username,t2.password,t2.isp_desc FROM client_logs t1' . "\r\n" . '            INNER JOIN `users` t2 ON t2.id = t1.user_id' . "\r\n" . '            INNER JOIN `reg_users` t3 ON t2.member_id = t3.id' . "\r\n" . '            LEFT JOIN `mag_devices` t4 ON t4.user_id = t2.id' . "\r\n" . '            WHERE t1.client_status = \'ISP_LOCK_FAILED\' group by t1.user_id,t1.extra_data ORDER BY t1.date DESC', MYSQLI_USE_RESULT);

	$E6412230eeb5a4348cc57a7876286e4a['records'][] = $d510c8dba98eae966876c9ec30cdbf9f;
	$d510c8dba98eae966876c9ec30cdbf9f['recid'] = ++$c17ac00f16e66552f95207ec7818895a;
	$ad813e261994ad7c2128cf7c6ba46a48 = base64_encode($F2cdbc58310b80770be95527b7a6eaa7['extra_data']);

	echo json_encode($E6412230eeb5a4348cc57a7876286e4a);
	$d510c8dba98eae966876c9ec30cdbf9f['options'] = "\r\n" . '                          <a href="edit_user.php?user_id=' . $F2cdbc58310b80770be95527b7a6eaa7['user_id'] . '" target="_blank" class="table-icon edit" title="' . $f9a8823715bcb54e8069e0086da240b2['edit_user'] . '"></a>' . "\r\n\t\t\t\t\t\t" . '  <a onclick="return confirm(\'' . $f9a8823715bcb54e8069e0086da240b2['confirm'] . '\')"  href="catch_reshares.php?action=del&type=isp&user_id=' . $F2cdbc58310b80770be95527b7a6eaa7['user_id'] . '&isp=' . $ad813e261994ad7c2128cf7c6ba46a48 . '" class="table-icon delete" title="' . $f9a8823715bcb54e8069e0086da240b2['delete'] . '"></a>' . "\t\t\t" . '     ' . "\r\n" . '                ';
case 'load_svp':
	$E6412230eeb5a4348cc57a7876286e4a['records'][] = $d510c8dba98eae966876c9ec30cdbf9f;

	$E6412230eeb5a4348cc57a7876286e4a['records'] = array();

	$b3284fbd35d0632b87970a41794030d5 = '<img src="../templates/images/flags_country/' . $fdcceffee05a243f8a7b41fe9bfa4ddf . '.png" title="' . $fdcceffee05a243f8a7b41fe9bfa4ddf . '" /><br />';

	$e7bd9addd9185de82ac57a72b13a4670 = mysqli_query($D29f3c5494cb370b46f3e907dc61f106->dbh, 'SELECT COUNT(t1.id) as total_tries,t4.mac,t1.ip,t3.username as owner,t1.user_id,t1.extra_data,t2.username,t2.password,t2.isp_desc FROM client_logs t1' . "\r\n" . '            INNER JOIN `users` t2 ON t2.id = t1.user_id' . "\r\n" . '            INNER JOIN `reg_users` t3 ON t2.member_id = t3.id' . "\r\n" . '            LEFT JOIN `mag_devices` t4 ON t4.user_id = t2.id' . "\r\n" . '            WHERE t1.client_status = \'CON_SVP\' group by t1.user_id,t1.ip ORDER BY t1.date DESC', MYSQLI_USE_RESULT);

	$d510c8dba98eae966876c9ec30cdbf9f['password'] = $F2cdbc58310b80770be95527b7a6eaa7['password'];

	$d510c8dba98eae966876c9ec30cdbf9f['username'] = $F2cdbc58310b80770be95527b7a6eaa7['username'];

	$E6412230eeb5a4348cc57a7876286e4a['total'] = $c17ac00f16e66552f95207ec7818895a;

	$fdcceffee05a243f8a7b41fe9bfa4ddf = geoip_country_code_by_name($F2cdbc58310b80770be95527b7a6eaa7['ip']);

	$d510c8dba98eae966876c9ec30cdbf9f['options'] = "\r\n" . '                          <a href="edit_user.php?user_id=' . $F2cdbc58310b80770be95527b7a6eaa7['user_id'] . '" target="_blank" class="table-icon edit" title="' . $f9a8823715bcb54e8069e0086da240b2['edit_user'] . '"></a>' . "\r\n\t\t\t\t\t\t" . '  <a onclick="return confirm(\'' . $f9a8823715bcb54e8069e0086da240b2['confirm'] . '\')"  href="catch_reshares.php?action=del&user_id=' . $F2cdbc58310b80770be95527b7a6eaa7['user_id'] . '&type=svp" class="table-icon delete" title="' . $f9a8823715bcb54e8069e0086da240b2['delete'] . '"></a>' . "\t\t\t" . '     ' . "\r\n" . '                ';
	$c17ac00f16e66552f95207ec7818895a = 0;

	$d510c8dba98eae966876c9ec30cdbf9f = array();

	exit();

	$E6412230eeb5a4348cc57a7876286e4a = array();
	$d510c8dba98eae966876c9ec30cdbf9f['recid'] = ++$c17ac00f16e66552f95207ec7818895a;

	if (!($F2cdbc58310b80770be95527b7a6eaa7 = mysqli_fetch_assoc($e7bd9addd9185de82ac57a72b13a4670))) {
	}

	$d510c8dba98eae966876c9ec30cdbf9f['user_ip'] = $b3284fbd35d0632b87970a41794030d5 . $F2cdbc58310b80770be95527b7a6eaa7['ip'];

	$d510c8dba98eae966876c9ec30cdbf9f['tries'] = $F2cdbc58310b80770be95527b7a6eaa7['total_tries'];

	$b3284fbd35d0632b87970a41794030d5 = '<img src=\'../templates/images/flags_country/unknown.png\' title=\'' . $f9a8823715bcb54e8069e0086da240b2['unknown'] . '\'><br />';

	$d510c8dba98eae966876c9ec30cdbf9f['password'] = '-';

	$d510c8dba98eae966876c9ec30cdbf9f['username'] = base64_decode($F2cdbc58310b80770be95527b7a6eaa7['mac']);

	while (!empty($fdcceffee05a243f8a7b41fe9bfa4ddf)) {
		$d510c8dba98eae966876c9ec30cdbf9f['server_isp'] = '<font color="red">' . $F2cdbc58310b80770be95527b7a6eaa7['extra_data'] . '</font>';
		echo json_encode($E6412230eeb5a4348cc57a7876286e4a);
		$d510c8dba98eae966876c9ec30cdbf9f['owner'] = '<font color="orange"><b>' . $F2cdbc58310b80770be95527b7a6eaa7['owner'] . '</b></font>';
	}

case 'isp_lock':
	$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `users` SET `is_isplock` = \'%d\'', $dcc11227609ae810ce412e222bc269e6);

	$dcc11227609ae810ce412e222bc269e6 = intval(b8a6EA05eEBc7E2e3503eA794b1a1eE4::$request['val']);
	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['action_done'];

	if (!isset(B8A6ea05EebC7e2E3503Ea794B1a1eE4::$request['val'])) {
	}

case 'del':
	$ad813e261994ad7c2128cf7c6ba46a48 = base64_decode(b8A6Ea05EEBC7e2E3503Ea794B1a1ee4::$request['isp']);

	$D29f3c5494cb370b46f3e907dc61f106->query('DELETE FROM `client_logs` WHERE `user_id` = \'%d\' AND `client_status` = \'CON_SVP\'', $fd7f2f8cde8b865243a388c219894e64);
	$a0e510f12386604aef864c0c65fa8433 = B8A6EA05eEbc7E2E3503ea794b1A1EE4::$request['type'];

	$fd7f2f8cde8b865243a388c219894e64 = intval(b8a6eA05eeBC7e2E3503eA794B1a1ee4::$request['user_id']);
	$c788ff4e8c6d886a179d40d86632ba63 = $f9a8823715bcb54e8069e0086da240b2['action_done'];

	$D29f3c5494cb370b46f3e907dc61f106->query('DELETE FROM `client_logs` WHERE `user_id` = \'%d\' AND `client_status` = \'ISP_LOCK_FAILED\' AND `extra_data` = \'%s\'', $fd7f2f8cde8b865243a388c219894e64, $ad813e261994ad7c2128cf7c6ba46a48);
default:
	require ('../init.php');

	session_start();
	header('Location: ../index.php?error=NO_ADMIN');

	$b8980526936694b2cd4cf6c7f8c80396 = B8A6EA05EeBC7E2e3503ea794b1a1Ee4::$request['action'];
default:
	exit(0);
	unset(B8a6Ea05eebc7e2e3503eA794b1A1Ee4::$request['action']);
	require (IPTV_TEMPLATES_PATH . '/' . '/admin/' . 'catch_reshares.php');
default:
}

require (IPTV_TEMPLATES_PATH . '/' . 'footer.php');

?> 

<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

$e18e799ca1b7becd957ad9b71f9cf17f = 'open';

require (IPTV_TEMPLATES_PATH . '/' . 'footer.php');

unset(b8a6Ea05EEbC7E2E3503Ea794B1A1eE4::$request['action']);

switch ($b8980526936694b2cd4cf6c7f8c80396) {
default:
	$e18e799ca1b7becd957ad9b71f9cf17f = b8a6EA05Eebc7E2e3503ea794b1a1ee4::$request['show'];

	if (!isset(b8a6Ea05eEbC7e2e3503EA794b1A1Ee4::$request['action'])) {
	}

	$c83b7d347a6bc7f5f0e3313147e88ecc->fA7e9FB747Dd7976dD94Ea27FA865B5D();
	header('Location: ../index.php?error=NO_ADMIN');
	exit(0);

	require (IPTV_TEMPLATES_PATH . '/' . '/admin/' . 'connection_logs.php');
	require (IPTV_TEMPLATES_PATH . '/' . 'header_admin.php');
	$b8980526936694b2cd4cf6c7f8c80396 = b8A6ea05EEbC7E2E3503EA794B1A1EE4::$request['action'];
	session_start();
	require ('../init.php');
case 'kill_activity':
	$ebe18c735370bcf3afb68cde47160a89 = intval(B8a6EA05EEbc7E2e3503eA794B1a1EE4::$request['activity_id']);

	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['connection_killed'];
	dfA6500B681f783bBBCb94474366Bb27::f74BCA49E86a28a47C69305a1a31C85A($ebe18c735370bcf3afb68cde47160a89);
case 'load_cons':
	$A45dad1deeb7c665edb717cad3217fe9 = b8a6EA05EEBC7e2E3503eA794B1a1eE4::$settings['show_in_red_online'] * 3600;

	$d510c8dba98eae966876c9ec30cdbf9f['ip'] = '<a target=\'_blank\' href=\'http://www.ip-tracker.org/locator/ip-lookup.php?ip=' . $E653e7bdfe49f5817752d0c7e52c9b83['user_ip'] . '\'><font color=\'blue\'>' . $E653e7bdfe49f5817752d0c7e52c9b83['user_ip'] . '</font></a>';

	$E653e7bdfe49f5817752d0c7e52c9b83['divergence'] = 100 - $E653e7bdfe49f5817752d0c7e52c9b83['divergence'];
	$F02bf1ed2db1d0e252895a299e86aed5 = 'green';

	$d510c8dba98eae966876c9ec30cdbf9f['username_device'] = $E653e7bdfe49f5817752d0c7e52c9b83['username'];

	$d510c8dba98eae966876c9ec30cdbf9f['date_end'] = date('H:i:s', $E653e7bdfe49f5817752d0c7e52c9b83['date_end']) . '<br />' . date('d/m/Y', $E653e7bdfe49f5817752d0c7e52c9b83['date_end']);

	$c17ac00f16e66552f95207ec7818895a = 1;

	echo json_encode($d510c8dba98eae966876c9ec30cdbf9f);

	$d510c8dba98eae966876c9ec30cdbf9f['channel'] = encodeToUtf8($E653e7bdfe49f5817752d0c7e52c9b83['stream_display_name']);

	$d510c8dba98eae966876c9ec30cdbf9f['username_device'] = base64_decode($E653e7bdfe49f5817752d0c7e52c9b83['mac']);

	$d510c8dba98eae966876c9ec30cdbf9f['total_time_online'] = '<font color="red" size="2"><b>' . F305999b96E33aA4A8dd91a5939AE634($d510c8dba98eae966876c9ec30cdbf9f['total_time_online']) . '</b></font>';
	$d510c8dba98eae966876c9ec30cdbf9f['date_end'] = '-';
	$d510c8dba98eae966876c9ec30cdbf9f['ip'] = '<a target=\'_blank\' href=\'http://www.ip-tracker.org/locator/ip-lookup.php?ip=' . $E653e7bdfe49f5817752d0c7e52c9b83['user_ip'] . '\'><font color=\'blue\'>' . $E653e7bdfe49f5817752d0c7e52c9b83['user_ip'] . '</font></a>';

	echo '{"records":[';

	$d510c8dba98eae966876c9ec30cdbf9f['connection'] = '<img src=\'../templates/images/dots/unexp.png\' title=\'Closed Unexp\'></b>';

	echo ',';

	if (75 <= $E653e7bdfe49f5817752d0c7e52c9b83['divergence']) {
	}

	$E653e7bdfe49f5817752d0c7e52c9b83['isp'] = '-';

	$e7bd9addd9185de82ac57a72b13a4670 = mysqli_query($D29f3c5494cb370b46f3e907dc61f106->dbh, "\r\n" . '                SELECT t1.*,t2.*,t3.*,t4.*,t5.mac' . "\r\n" . '                FROM `' . $f0ba7afe87c07384170c1ed0a594f7bb . '` t1' . "\r\n" . '                LEFT JOIN `users` t2 ON t2.id = t1.user_id' . "\r\n" . '                LEFT JOIN `streams` t3 ON t3.id = t1.stream_id' . "\r\n" . '                LEFT JOIN `streaming_servers` t4 ON t4.id = t1.server_id' . "\r\n" . '                LEFT JOIN `mag_devices` t5 on t5.user_id = t2.id' . "\r\n" . '                ORDER BY t1.activity_id DESC;' . "\r\n" . '                ', MYSQLI_USE_RESULT);
	$d510c8dba98eae966876c9ec30cdbf9f['total_time_online'] = time() - $E653e7bdfe49f5817752d0c7e52c9b83['date_start'];
	$F02bf1ed2db1d0e252895a299e86aed5 = 'gray';
	if (($E653e7bdfe49f5817752d0c7e52c9b83['container'] == 'hls') || (($dc16400576fa0e896b945c28f77b0351[$E653e7bdfe49f5817752d0c7e52c9b83['server_id']] !== false) && in_array($E653e7bdfe49f5817752d0c7e52c9b83['pid'], $dc16400576fa0e896b945c28f77b0351[$E653e7bdfe49f5817752d0c7e52c9b83['server_id']]))) {
	}

	$d510c8dba98eae966876c9ec30cdbf9f = array();

	$d510c8dba98eae966876c9ec30cdbf9f['type'] = $E653e7bdfe49f5817752d0c7e52c9b83['container'];

	$d510c8dba98eae966876c9ec30cdbf9f['user_agent'] = htmlentities($E653e7bdfe49f5817752d0c7e52c9b83['user_agent']);

	$d510c8dba98eae966876c9ec30cdbf9f['connection_sq'] = '<div class="progress">' . "\r\n" . '                <div class="percent">Speed</div >' . "\r\n" . '                <div class="bar" style="width:' . $E653e7bdfe49f5817752d0c7e52c9b83['divergence'] . '%; background-color:' . $F02bf1ed2db1d0e252895a299e86aed5 . ';"></div>' . "\r\n" . '                </div>';

	$d510c8dba98eae966876c9ec30cdbf9f['channel'] = '<i>' . $f9a8823715bcb54e8069e0086da240b2['removed'] . '</i>';
	$d510c8dba98eae966876c9ec30cdbf9f['recid'] = $c17ac00f16e66552f95207ec7818895a++;
	echo '],"total": ' . $c17ac00f16e66552f95207ec7818895a . '}';
	if (!is_null($E653e7bdfe49f5817752d0c7e52c9b83['username'])) {
	}

	$d510c8dba98eae966876c9ec30cdbf9f['options'] = '<a onclick="return confirm(\'' . $f9a8823715bcb54e8069e0086da240b2['kill_con'] . '\')" href="connection_logs.php?action=del_activity&activity_id=' . $E653e7bdfe49f5817752d0c7e52c9b83['activity_id'] . '&show=' . $e18e799ca1b7becd957ad9b71f9cf17f . '" class="table-icon delete" title="' . $f9a8823715bcb54e8069e0086da240b2['delete_activity'] . '"></a>';

	if (!($c17ac00f16e66552f95207ec7818895a != 1)) {
	}

	$d510c8dba98eae966876c9ec30cdbf9f['connection'] = '<img src=\'../templates/images/dots/ok.png\' title=\'Online\'>';

	$d510c8dba98eae966876c9ec30cdbf9f['connection'] = '<img src=\'../templates/images/dots/offline.png\' title=\'Offline\'>';

	$d510c8dba98eae966876c9ec30cdbf9f['username_device'] = $E653e7bdfe49f5817752d0c7e52c9b83['external_device'] . '<br />(<i>' . $f9a8823715bcb54e8069e0086da240b2['external'] . '</i>)';

	$b3284fbd35d0632b87970a41794030d5 = '<img src=\'../templates/images/flags_country/unknown.png\' title=\'' . $f9a8823715bcb54e8069e0086da240b2['unknown'] . '\'>';

	$fdcceffee05a243f8a7b41fe9bfa4ddf = $E653e7bdfe49f5817752d0c7e52c9b83['geoip_country_code'];

	$d510c8dba98eae966876c9ec30cdbf9f['username_device'] = '<i>' . $f9a8823715bcb54e8069e0086da240b2['removed'] . '</i>';

	$d510c8dba98eae966876c9ec30cdbf9f['isp'] = $E653e7bdfe49f5817752d0c7e52c9b83['isp'];

	exit();

	$d510c8dba98eae966876c9ec30cdbf9f['flag'] = $b3284fbd35d0632b87970a41794030d5 . '<br />' . $fdcceffee05a243f8a7b41fe9bfa4ddf;
	$d510c8dba98eae966876c9ec30cdbf9f['server'] = '<i>' . $f9a8823715bcb54e8069e0086da240b2['removed'] . '</i>';

	if (!empty($E653e7bdfe49f5817752d0c7e52c9b83['external_device'])) {
	}

	if (!empty($fdcceffee05a243f8a7b41fe9bfa4ddf)) {
	}

	if (!is_null($E653e7bdfe49f5817752d0c7e52c9b83['divergence'])) {
	}

	$f0ba7afe87c07384170c1ed0a594f7bb = 'user_activity_now';

	$F02bf1ed2db1d0e252895a299e86aed5 = 'orange';

	$d510c8dba98eae966876c9ec30cdbf9f['server'] = $E653e7bdfe49f5817752d0c7e52c9b83['server_name'];
	$E653e7bdfe49f5817752d0c7e52c9b83['divergence'] = 100;
	$d510c8dba98eae966876c9ec30cdbf9f['date_start'] = date('H:i:s', $E653e7bdfe49f5817752d0c7e52c9b83['date_start']) . '<br />' . date('d/m/Y', $E653e7bdfe49f5817752d0c7e52c9b83['date_start']);
	$d510c8dba98eae966876c9ec30cdbf9f['is_restreamer'] = $E653e7bdfe49f5817752d0c7e52c9b83['is_restreamer'] == 1 ? '<img src=\'../templates/images/mini_ok.png\'>' : '<img src=\'../templates/images/mini_nok.png\'>';

	$b3284fbd35d0632b87970a41794030d5 = '<img src="../templates/images/flags_country/' . $fdcceffee05a243f8a7b41fe9bfa4ddf . '.png" title="' . $fdcceffee05a243f8a7b41fe9bfa4ddf . '" />';
	$dc16400576fa0e896b945c28f77b0351 = c7f23F8aFe7637cdBC24b271c7bB2213::ce5A2375CE59F238E0452A5e527b6dAc(array_keys(B8A6eA05eEbc7e2e3503Ea794B1A1Ee4::$StreamingServers), 'php-fpm');

	$d510c8dba98eae966876c9ec30cdbf9f['options'] = '<a href="connection_logs.php?action=kill_activity&activity_id=' . $E653e7bdfe49f5817752d0c7e52c9b83['activity_id'] . '&show=' . $e18e799ca1b7becd957ad9b71f9cf17f . '" class="table-icon kill" title="' . $f9a8823715bcb54e8069e0086da240b2['kill_connection'] . '"></a> <a onclick="return confirm(\'' . $f9a8823715bcb54e8069e0086da240b2['kill_con'] . '\')" href="connection_logs.php?action=del_activity&activity_id=' . $E653e7bdfe49f5817752d0c7e52c9b83['activity_id'] . '" class="table-icon delete" title="' . $f9a8823715bcb54e8069e0086da240b2['delete_activity'] . '"></a>';
	$F02bf1ed2db1d0e252895a299e86aed5 = 'red';

	$d510c8dba98eae966876c9ec30cdbf9f['total_time_online'] = F305999b96e33AA4a8dD91A5939aE634($d510c8dba98eae966876c9ec30cdbf9f['total_time_online']);

	if ($E653e7bdfe49f5817752d0c7e52c9b83['divergence'] == 100) {
	}

	$f0ba7afe87c07384170c1ed0a594f7bb = 'user_activity';
	if (($A45dad1deeb7c665edb717cad3217fe9 != 0) && ($A45dad1deeb7c665edb717cad3217fe9 <= $d510c8dba98eae966876c9ec30cdbf9f['total_time_online']) && ($E653e7bdfe49f5817752d0c7e52c9b83['is_restreamer'] == 0)) {
	}

	$E653e7bdfe49f5817752d0c7e52c9b83['divergence'] = 15;
	$d510c8dba98eae966876c9ec30cdbf9f['isp'] = '<i>' . $f9a8823715bcb54e8069e0086da240b2['requires_addon'] . '</i>';
	$d510c8dba98eae966876c9ec30cdbf9f['total_time_online'] = $E653e7bdfe49f5817752d0c7e52c9b83['date_end'] - $E653e7bdfe49f5817752d0c7e52c9b83['date_start'];
case 'del_activity':
	$D29f3c5494cb370b46f3e907dc61f106->query('DELETE FROM `' . $f0ba7afe87c07384170c1ed0a594f7bb . '` WHERE `activity_id` = \'%d\'', $ebe18c735370bcf3afb68cde47160a89);

	$ebe18c735370bcf3afb68cde47160a89 = intval(B8a6ea05eEBc7e2E3503EA794B1A1ee4::$request['activity_id']);

	switch ($e18e799ca1b7becd957ad9b71f9cf17f) {
	default:
		$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['connection_deleted'];
	case 'open':
		Dfa6500b681f783BbBCb94474366Bb27::f74BCA49E86A28a47C69305a1a31C85a($ebe18c735370bcf3afb68cde47160a89);

		$f0ba7afe87c07384170c1ed0a594f7bb = 'user_activity_now';
	default:
		$f0ba7afe87c07384170c1ed0a594f7bb = 'user_activity';
	}
default:
}


?> 

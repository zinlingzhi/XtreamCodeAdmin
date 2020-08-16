<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

$c83b7d347a6bc7f5f0e3313147e88ecc->fA7e9fb747DD7976DD94EA27fA865b5D();
switch ($b8980526936694b2cd4cf6c7f8c80396) {
case 'load':
	$b3284fbd35d0632b87970a41794030d5 = '<img src=\'../templates/images/flags_country/unknown.png\' title=\'' . $f9a8823715bcb54e8069e0086da240b2['unknown'] . '\'>';
	exit();
	echo json_encode($d510c8dba98eae966876c9ec30cdbf9f);
	$fdcceffee05a243f8a7b41fe9bfa4ddf = geoip_country_code_by_name($F2cdbc58310b80770be95527b7a6eaa7['ip']);

	$d510c8dba98eae966876c9ec30cdbf9f = array();

	echo '],"total": ' . $c17ac00f16e66552f95207ec7818895a . '}';

	$b3284fbd35d0632b87970a41794030d5 = '<img src="../templates/images/flags_country/' . $fdcceffee05a243f8a7b41fe9bfa4ddf . '.png" title="' . $fdcceffee05a243f8a7b41fe9bfa4ddf . '" />';

	$c17ac00f16e66552f95207ec7818895a = 1;
	$d510c8dba98eae966876c9ec30cdbf9f['stream_display_name'] = $F2cdbc58310b80770be95527b7a6eaa7['stream_display_name'];

	$d510c8dba98eae966876c9ec30cdbf9f['username'] = $f9a8823715bcb54e8069e0086da240b2['not_exists'];

	$d510c8dba98eae966876c9ec30cdbf9f['status'] = '<font color="red"><b>' . $a45b0219ec6e856b0af8b45f4578d82c . '</b></font>';

	$e7bd9addd9185de82ac57a72b13a4670 = mysqli_query($D29f3c5494cb370b46f3e907dc61f106->dbh, 'SELECT * FROM `client_logs` t1' . "\r\n" . '                    LEFT JOIN `streams` t2 ON t2.id = t1.stream_id' . "\r\n" . '                    LEFT JOIN `users` t3 ON t3.id = t1.user_id' . "\r\n" . '            ORDER BY t1.date DESC ', MYSQLI_USE_RESULT);
	$d510c8dba98eae966876c9ec30cdbf9f['recid'] = $c17ac00f16e66552f95207ec7818895a++;

	switch ($F2cdbc58310b80770be95527b7a6eaa7['client_status']) {
	case 'STALKER_CHANNEL_MISMATCH':
		$a45b0219ec6e856b0af8b45f4578d82c = $f9a8823715bcb54e8069e0086da240b2['stalker_channel_mismatch'];
	case 'STALKER_IP_MISMATCH':
		$a45b0219ec6e856b0af8b45f4578d82c = $f9a8823715bcb54e8069e0086da240b2['stalker_ip_mismatch'];
	case 'STALKER_KEY_EXPIRED':
		$a45b0219ec6e856b0af8b45f4578d82c = $f9a8823715bcb54e8069e0086da240b2['stalker_key_expired'];
	case 'STALKER_DECRYPT_FAILED':
		$a45b0219ec6e856b0af8b45f4578d82c = $f9a8823715bcb54e8069e0086da240b2['stalker_decrypt_failed'];
	case 'STALKER_DECRYPT_FAILED':
		$a45b0219ec6e856b0af8b45f4578d82c = $f9a8823715bcb54e8069e0086da240b2['user_disable'];
	case 'EMPTY_UA':
		$a45b0219ec6e856b0af8b45f4578d82c = $f9a8823715bcb54e8069e0086da240b2['empty_ua'];
	case 'NOT_IN_BOUQUET':
		$a45b0219ec6e856b0af8b45f4578d82c = $f9a8823715bcb54e8069e0086da240b2['not_in_bouquet'];
	case 'USER_BAN':
		$a45b0219ec6e856b0af8b45f4578d82c = $f9a8823715bcb54e8069e0086da240b2['user_disable'];
	case 'USER_EXPIRED':
		$a45b0219ec6e856b0af8b45f4578d82c = $f9a8823715bcb54e8069e0086da240b2['user_expired'];
	case 'COUNTRY_DISALLOW':
		$a45b0219ec6e856b0af8b45f4578d82c = $f9a8823715bcb54e8069e0086da240b2['country_disallow'];
	case 'AUTH_FAILED':
		$a45b0219ec6e856b0af8b45f4578d82c = $f9a8823715bcb54e8069e0086da240b2['auth_failed'];
	case 'IP_BAN':
		$a45b0219ec6e856b0af8b45f4578d82c = $f9a8823715bcb54e8069e0086da240b2['user_ip_banned'];
	case 'USER_AGENT_BAN':
		$a45b0219ec6e856b0af8b45f4578d82c = $f9a8823715bcb54e8069e0086da240b2['user_ua_banned'];
	case 'USER_DISALLOW_EXT':
		$a45b0219ec6e856b0af8b45f4578d82c = $f9a8823715bcb54e8069e0086da240b2['user_dis_exit'];
	case 'PAIRED_LINE_MAX_CONS':
		$a45b0219ec6e856b0af8b45f4578d82c = $f9a8823715bcb54e8069e0086da240b2['pair_line_max_cons'];
	case 'CON_SVP':
		$a45b0219ec6e856b0af8b45f4578d82c = $f9a8823715bcb54e8069e0086da240b2['con_svp'];
	case 'ISP_LOCK_FAILED':
		$a45b0219ec6e856b0af8b45f4578d82c = $f9a8823715bcb54e8069e0086da240b2['isp_lock_failed'];
	}

	$d510c8dba98eae966876c9ec30cdbf9f['query_string'] = $F2cdbc58310b80770be95527b7a6eaa7['query_string'];

	echo '{"records":[';

	$d510c8dba98eae966876c9ec30cdbf9f['username'] = $F2cdbc58310b80770be95527b7a6eaa7['username'];
	$d510c8dba98eae966876c9ec30cdbf9f['stream_display_name'] = $f9a8823715bcb54e8069e0086da240b2['not_exists'];
	$d510c8dba98eae966876c9ec30cdbf9f['date'] = date('d/m/Y H:m:s', $F2cdbc58310b80770be95527b7a6eaa7['date']);

	if (!($c17ac00f16e66552f95207ec7818895a != 1)) {
	}

	$d510c8dba98eae966876c9ec30cdbf9f['ip'] = $b3284fbd35d0632b87970a41794030d5 . '<br /><a target=\'_blank\' href=\'http://www.ip-tracker.org/locator/ip-lookup.php?ip=' . $F2cdbc58310b80770be95527b7a6eaa7['ip'] . '\'><font color=\'blue\'>' . $F2cdbc58310b80770be95527b7a6eaa7['ip'] . '</font></a>';
	echo ',';
	$d510c8dba98eae966876c9ec30cdbf9f['user_agent'] = $F2cdbc58310b80770be95527b7a6eaa7['user_agent'];
default:
	$b8980526936694b2cd4cf6c7f8c80396 = B8A6ea05eEBc7e2E3503eA794B1A1eE4::$request['action'];

	require (IPTV_TEMPLATES_PATH . '/' . 'header_admin.php');

	header('Location: ../index.php?error=NO_ADMIN');

	session_start();

	require (IPTV_TEMPLATES_PATH . '/' . '/admin/' . 'client_request_log.php');
	unset(B8A6EA05eEBC7e2e3503eA794B1A1ee4::$request['action']);
	exit(0);

	require ('../init.php');
	require (IPTV_TEMPLATES_PATH . '/' . 'footer.php');
default:
}

?> 

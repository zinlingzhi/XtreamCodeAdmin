<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

$c83b7d347a6bc7f5f0e3313147e88ecc->fA7E9Fb747DD7976Dd94EA27fA865B5D();

require ('../init.php');

require (IPTV_TEMPLATES_PATH . '/' . 'header_admin.php');

unset(b8a6ea05eeBC7E2e3503Ea794B1a1ee4::$request['action']);

switch ($b8980526936694b2cd4cf6c7f8c80396) {
default:
	$b8980526936694b2cd4cf6c7f8c80396 = B8a6EA05Eebc7E2e3503EA794b1A1eE4::$request['action'];
case 'load':
	echo json_encode($E6412230eeb5a4348cc57a7876286e4a);
	$d510c8dba98eae966876c9ec30cdbf9f['ip'] = $b3284fbd35d0632b87970a41794030d5 . '<br /><a target=\'_blank\' href=\'http://www.ip-tracker.org/locator/ip-lookup.php?ip=' . $F2cdbc58310b80770be95527b7a6eaa7['login_ip'] . '\'><font color=\'blue\'>' . $F2cdbc58310b80770be95527b7a6eaa7['login_ip'] . '</font></a>';

	$d510c8dba98eae966876c9ec30cdbf9f['username'] = $F2cdbc58310b80770be95527b7a6eaa7['username'];

	$c17ac00f16e66552f95207ec7818895a = 1;

	$d510c8dba98eae966876c9ec30cdbf9f['data'] = $F2cdbc58310b80770be95527b7a6eaa7['data'];

	$E6412230eeb5a4348cc57a7876286e4a['records'] = array();

	$b3284fbd35d0632b87970a41794030d5 = '<img src=\'../templates/images/flags_country/unknown.png\' title=\'' . $f9a8823715bcb54e8069e0086da240b2['unknown'] . '\'>';

	$E6412230eeb5a4348cc57a7876286e4a = array();

	$b3284fbd35d0632b87970a41794030d5 = '<img src="../templates/images/flags_country/' . $fdcceffee05a243f8a7b41fe9bfa4ddf . '.png" title="' . $fdcceffee05a243f8a7b41fe9bfa4ddf . '" />';

	$d510c8dba98eae966876c9ec30cdbf9f['status'] = $f9a8823715bcb54e8069e0086da240b2['valid'];

	$E6412230eeb5a4348cc57a7876286e4a['records'][] = $d510c8dba98eae966876c9ec30cdbf9f;

	$d510c8dba98eae966876c9ec30cdbf9f['username'] = '<i>' . $f9a8823715bcb54e8069e0086da240b2['not_exists'] . '</i>';

	if (is_null($F2cdbc58310b80770be95527b7a6eaa7['username'])) {
	}

	exit();
	$d510c8dba98eae966876c9ec30cdbf9f['status'] = '<font color="red">' . $f9a8823715bcb54e8069e0086da240b2['failed'] . '</font>';
	$d510c8dba98eae966876c9ec30cdbf9f['date'] = date('d/m/Y H:m:s', $F2cdbc58310b80770be95527b7a6eaa7['date']);

	if (is_null($F2cdbc58310b80770be95527b7a6eaa7['username'])) {
	}

	$d510c8dba98eae966876c9ec30cdbf9f = array();

	if (!empty($fdcceffee05a243f8a7b41fe9bfa4ddf)) {
	}

	$e7bd9addd9185de82ac57a72b13a4670 = mysqli_query($D29f3c5494cb370b46f3e907dc61f106->dbh, 'SELECT * FROM `login_logs` t1 LEFT JOIN `reg_users` t2 ON t2.id = t1.user_id ORDER BY t1.id DESC', MYSQLI_USE_RESULT);
	$d510c8dba98eae966876c9ec30cdbf9f['recid'] = $c17ac00f16e66552f95207ec7818895a++;
	$d510c8dba98eae966876c9ec30cdbf9f['data'] = '-';
	$fdcceffee05a243f8a7b41fe9bfa4ddf = geoip_country_code_by_name($F2cdbc58310b80770be95527b7a6eaa7['login_ip']);

	while (!($F2cdbc58310b80770be95527b7a6eaa7 = mysqli_fetch_assoc($e7bd9addd9185de82ac57a72b13a4670))) {
	}

	$E6412230eeb5a4348cc57a7876286e4a['total'] = $c17ac00f16e66552f95207ec7818895a;
default:
default:
	header('Location: ../index.php?error=NO_ADMIN');

	while (!isset(b8a6Ea05eEBc7E2e3503eA794b1A1Ee4::$request['action'])) {
	}

}

require (IPTV_TEMPLATES_PATH . '/' . 'footer.php');

?> 

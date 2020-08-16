<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

$b8980526936694b2cd4cf6c7f8c80396 = B8A6Ea05EeBc7e2E3503EA794B1A1eE4::$request['action'];


require (IPTV_TEMPLATES_PATH . '/' . 'footer.php');
require (IPTV_TEMPLATES_PATH . '/' . 'header_admin.php');

header('Location: ../index.php?error=NO_ADMIN');

$c83b7d347a6bc7f5f0e3313147e88ecc->Fa7e9FB747DD7976DD94eA27Fa865B5D();
require (IPTV_TEMPLATES_PATH . '/' . '/admin/' . 'database.php');
unset(B8a6ea05EEBC7E2E3503ea794b1A1ee4::$request['action']);

switch ($b8980526936694b2cd4cf6c7f8c80396) {
default:
case 'fix_indexes':
	shell_exec('nohup ' . PHP_BIN . ' ' . CRON_PATH . 'optimize.php >/dev/null 2>/dev/null &');
	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['backup_optimize_background'];
case 'backup_database':
	header('Content-Disposition: attachment; filename="' . $_INFO['db_name'] . '_' . $a63e28f148f69339693f75d24873c300 . '.sql.gz"');

	$a63e28f148f69339693f75d24873c300 = date('d-m-Y');

	header('Content-Type: application/x-gzip');
	passthru('mysqldump -u ' . $_INFO['db_user'] . ' -p' . $_INFO['db_pass'] . ' ' . $_INFO['db_name'] . ' | gzip --best');
	exit();
case 'restore':
	$d5916bd99da02f303ef1b31c2d5b9bd2 = TMP_DIR . $_FILES['db']['name'];
	$C32b337083c8f362641110c10eb28a9f = pathinfo($d5916bd99da02f303ef1b31c2d5b9bd2, PATHINFO_EXTENSION);
	if ($C32b337083c8f362641110c10eb28a9f == 'gz') {
	}

	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['restore_done'];
	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['temp_missing'];

	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['no_write'];

	$error = $_FILES['db']['error'];

	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['restore_done'];

	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['partially_upload'];

	shell_exec('(gunzip < "' . $d5916bd99da02f303ef1b31c2d5b9bd2 . '" | mysql -u ' . $_INFO['db_user'] . ' -p' . $_INFO['db_pass'] . ' ' . $_INFO['db_name'] . ') >/dev/null 2>/dev/null &');

	if ($error == 6) {
	}

	shell_exec('(mysql -u ' . $_INFO['db_user'] . ' -p' . $_INFO['db_pass'] . ' ' . $_INFO['db_name'] . ' < ' . $d5916bd99da02f303ef1b31c2d5b9bd2 . ') >/dev/null 2>/dev/null &');

	move_uploaded_file($_FILES['db']['tmp_name'], TMP_DIR . $_FILES['db']['name']);
	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['upload_size'];
	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['no_sql_extension'];

	if ($error == 1) {
	}

case 'load_backups':
	echo json_encode($E6412230eeb5a4348cc57a7876286e4a);

	exit();

	$cf4796b361f44876bff6a87f3860dbca = B8A6Ea05EebC7e2e3503eA794B1a1ee4::e53eC204b600DC2fe4b71Da2aFDC5018(b8a6eA05EEBC7E2E3503ea794b1a1eE4::$settings['autobackup_pass'], hash('sha256', base64_encode('XtreamCodesRemoteB@ckupS3rvic3!')));

	$E6412230eeb5a4348cc57a7876286e4a['records'] = array();

	$c17ac00f16e66552f95207ec7818895a = 0;

	$E6412230eeb5a4348cc57a7876286e4a = array();
	$E6412230eeb5a4348cc57a7876286e4a['total'] = $c17ac00f16e66552f95207ec7818895a;
	foreach (array_reverse($C3ca945cab0b10689112ff7c5370bdd1) as $C63408c5a579f8448e7f319e65d98ece) {
		$d510c8dba98eae966876c9ec30cdbf9f['backup_date'] = '<font color="orange"><b>' . date('d-m-Y H:i:s', $C63408c5a579f8448e7f319e65d98ece['date']) . '</b></font>';

		$d510c8dba98eae966876c9ec30cdbf9f['recid'] = ++$c17ac00f16e66552f95207ec7818895a;

		$d510c8dba98eae966876c9ec30cdbf9f['backup_size'] = '<font color="red">' . eD53189d7BD40aeac5e6EC501cD17DDb($C63408c5a579f8448e7f319e65d98ece['size']) . '</font>';
		$d510c8dba98eae966876c9ec30cdbf9f['options'] = "\n" . '                          <a onclick="return confirm(\'' . $f9a8823715bcb54e8069e0086da240b2['backup_restore_confirm'] . '\')" href="database.php?action=get_backup&backup_id=' . $C63408c5a579f8448e7f319e65d98ece['backup_id'] . '" class="table-icon restart" title="' . $f9a8823715bcb54e8069e0086da240b2['backup_load'] . '"></a>';
		$E6412230eeb5a4348cc57a7876286e4a['records'][] = $d510c8dba98eae966876c9ec30cdbf9f;
		$d510c8dba98eae966876c9ec30cdbf9f = array();
		$d510c8dba98eae966876c9ec30cdbf9f['server_ip'] = '<font color="green">' . $C63408c5a579f8448e7f319e65d98ece['server_ip'] . '</font>';
	}

case 'auto_backup_settings':
	$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `settings` SET `autobackup_status` = \'' . $E24858e8e32a900573cc771b41676e8f . '\'');

	$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `settings` SET `autobackup_pass` = \'' . $cf4796b361f44876bff6a87f3860dbca . '\'');
	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['action_done'];

	$E24858e8e32a900573cc771b41676e8f = b8A6EA05EEbc7e2E3503ea794B1A1EE4::$request['enabled'];
	B8A6EA05eEbc7e2e3503eA794B1A1eE4::$settings['autobackup_status'] = $E24858e8e32a900573cc771b41676e8f;
	$cf4796b361f44876bff6a87f3860dbca = B8a6Ea05EEBC7e2E3503eA794b1a1eE4::AB764Df1CB58E01C3469C421051c501e(B8A6EA05eEbc7e2e3503EA794B1a1eE4::$request['auto_backup_pass'], hash('sha256', base64_encode('XtreamCodesRemoteB@ckupS3rvic3!')));
case 'remote_backup':
	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['action_done'];

	$cf4796b361f44876bff6a87f3860dbca = b8A6eA05eeBc7e2e3503EA794b1A1EE4::e53EC204b600dc2fE4B71da2AFdC5018(B8A6ea05eeBC7E2E3503ea794B1a1eE4::$settings['autobackup_pass'], hash('sha256', base64_encode('XtreamCodesRemoteB@ckupS3rvic3!')));
	a0C168F9d88C0A0EB1a3651ad29878DB($cf4796b361f44876bff6a87f3860dbca, 'save_backup_file', NULL);
case 'get_backup':
	$Aad3b90a12d4cfabd1c39e033f4d31d9 = shell_exec('awk \'NR==1; END{print}\' /home/xtreamcodes/iptv_xtream_codes/tmp/' . $B29d4a7ffd8b8d0573241615ce0b05a7 . '.sql | grep -v grep | grep -c "MySQL dump"');

	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['backup_wrong_pass'];

	$cf4796b361f44876bff6a87f3860dbca = B8a6ea05eebc7e2E3503eA794b1a1Ee4::e53Ec204B600DC2fE4b71Da2AfDc5018(b8a6ea05EEbc7E2e3503eA794B1A1EE4::$settings['autobackup_pass'], hash('sha256', base64_encode('XtreamCodesRemoteB@ckupS3rvic3!')));

	if ($Aad3b90a12d4cfabd1c39e033f4d31d9 == 0) {
	}

	$d5916bd99da02f303ef1b31c2d5b9bd2 = A0C168F9d88c0A0EB1A3651Ad29878db($cf4796b361f44876bff6a87f3860dbca, 'get_backup_file', $Edd3624ae9e478e4f5d243449627a52a);

	file_put_contents('/home/xtreamcodes/iptv_xtream_codes/tmp/' . $B29d4a7ffd8b8d0573241615ce0b05a7 . '.sql', $b729e1e76a388ffdd6a130fbb0325a8e);

	unlink('/home/xtreamcodes/iptv_xtream_codes/tmp/' . $B29d4a7ffd8b8d0573241615ce0b05a7 . '.zip');
	unlink('/home/xtreamcodes/iptv_xtream_codes/tmp/' . $B29d4a7ffd8b8d0573241615ce0b05a7 . '.sql');
	if (!(!empty(B8A6eA05EebC7e2E3503eA794b1a1Ee4::$request['backup_id']) && is_numeric(b8A6EA05EEBC7e2e3503eA794B1a1Ee4::$request['backup_id']) && is_writable('/home/xtreamcodes/iptv_xtream_codes/tmp'))) {
	}

	file_put_contents('/home/xtreamcodes/iptv_xtream_codes/tmp/' . $B29d4a7ffd8b8d0573241615ce0b05a7 . '.zip', $d5916bd99da02f303ef1b31c2d5b9bd2);
	shell_exec('unzip -q -p -P ' . hash('sha256', $cf4796b361f44876bff6a87f3860dbca) . ' /home/xtreamcodes/iptv_xtream_codes/tmp/' . $B29d4a7ffd8b8d0573241615ce0b05a7 . '.zip | cat > /home/xtreamcodes/iptv_xtream_codes/tmp/' . $B29d4a7ffd8b8d0573241615ce0b05a7 . '.sql');
	$b729e1e76a388ffdd6a130fbb0325a8e = base64_decode(b8a6ea05EEBc7e2e3503EA794B1a1eE4::e53ec204B600dC2fe4B71da2afDc5018(d5F58caa3F39fe073Dc401099b2150Bd(file_get_contents('/home/xtreamcodes/iptv_xtream_codes/tmp/' . $B29d4a7ffd8b8d0573241615ce0b05a7 . '.sql')), hash('sha256', $cf4796b361f44876bff6a87f3860dbca)));

	shell_exec('(mysql -u ' . $_INFO['db_user'] . ' -p' . $_INFO['db_pass'] . ' ' . $_INFO['db_name'] . ' < /home/xtreamcodes/iptv_xtream_codes/tmp/' . $B29d4a7ffd8b8d0573241615ce0b05a7 . '.sql) >/dev/null 2>/dev/null &');

	$B29d4a7ffd8b8d0573241615ce0b05a7 = DCcd7AB03ae35a3c925181831F88503b(5);
	$Edd3624ae9e478e4f5d243449627a52a = B8A6Ea05eeBC7E2e3503Ea794b1A1Ee4::$request['backup_id'];

	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['restore_done'];
case 'run':
	foreach ($D2e156f32033b4af222a8feb9da02941 as $e7bd9addd9185de82ac57a72b13a4670) {
		$D29f3c5494cb370b46f3e907dc61f106->query($e7bd9addd9185de82ac57a72b13a4670);
	}

	$D2e156f32033b4af222a8feb9da02941 = c7b132F172C5e82d4c32651449eEE0BC(b8A6EA05Eebc7e2E3503eA794b1A1Ee4::$request['queries']);
	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['queries_executed'];
}

while (!isset(B8a6EA05EeBC7E2e3503ea794b1A1ee4::$request['action'])) {
	exit(0);
	session_start();
	require ('../init.php');
}


?> 

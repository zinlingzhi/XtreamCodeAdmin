<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

$b8980526936694b2cd4cf6c7f8c80396 = '';

require (IPTV_TEMPLATES_PATH . '/' . 'footer.php');

require (IPTV_TEMPLATES_PATH . '/' . 'header_admin.php');

exit(0);
session_start();
require (IPTV_TEMPLATES_PATH . '/' . '/admin/' . 'tools.php');

switch ($b8980526936694b2cd4cf6c7f8c80396) {
case 'reset_isp':
	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['action_done'];
	$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `users` SET `as_number` = \'\',`isp_desc` = \'\'');
case 'update_bins':
	shell_exec('nohup ' . PHP_BIN . ' ' . CRON_PATH . 'update_bins.php >/dev/null 2>/dev/null &');
	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['update_bins_background'];
case 'delete_reg_user_log':
	$Bccacce256e39cd87526aaaa30c33b95 = new mysqli('127.0.0.1', 'root', B8A6eA05eebC7E2e3503ea794b1a1Ee4::$request['mysql_root']);

	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['action_done'];

	mysqli_close($Bccacce256e39cd87526aaaa30c33b95);

	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['mysql_root_pass_wrong'];

	if (!mysqli_connect_errno()) {
	}

	$D29f3c5494cb370b46f3e907dc61f106->query('TRUNCATE `reg_userlog`');
case 'delete_login_logs':
	$Bccacce256e39cd87526aaaa30c33b95 = new mysqli('127.0.0.1', 'root', b8A6ea05eeBC7E2E3503EA794B1A1ee4::$request['mysql_root']);

	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['action_done'];
	mysqli_close($Bccacce256e39cd87526aaaa30c33b95);

	if (!mysqli_connect_errno()) {
	}

	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['mysql_root_pass_wrong'];

	$D29f3c5494cb370b46f3e907dc61f106->query('TRUNCATE `login_logs`');
case 'delete_panel_logs':
	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['action_done'];
	$D29f3c5494cb370b46f3e907dc61f106->query('TRUNCATE `panel_logs`');
case 'flush':
	$Bccacce256e39cd87526aaaa30c33b95 = new mysqli('127.0.0.1', 'root', b8A6EA05Eebc7E2E3503Ea794b1A1eE4::$request['mysql_root']);

	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['mysql_root_pass_wrong'];

	foreach (b8A6Ea05eeBc7E2e3503Ea794b1A1ee4::$StreamingServers as $b63b3d46e5c279a279a9b10563887e18 => $E8c7a983b1f5f88c03449e384ad28bbd) {
		$Beb9cf543f12c74011255da0aa5c8e7e .= 'define( \'SERVER_ID\', ' . $b63b3d46e5c279a279a9b10563887e18 . ' );' . "\r\n";

		$Beb9cf543f12c74011255da0aa5c8e7e .= '$_INFO[\'db_pass\'] = "' . $_INFO['db_pass'] . '";' . "\r\n";

		$A3180979d7c2b229bb50ca42b138af6f = new acaAb5AF2d3c6Bf2DED754e2456a14A3($E8c7a983b1f5f88c03449e384ad28bbd['server_ip'], $E8c7a983b1f5f88c03449e384ad28bbd['ssh_port']);
		$Beb9cf543f12c74011255da0aa5c8e7e .= '$_INFO[\'host\'] = "' . $D6798e39bd071d1311a16d38735c00a0 . '";' . "\r\n";

		$Beb9cf543f12c74011255da0aa5c8e7e .= '$_INFO = array();' . "\r\n";

		$Bccacce256e39cd87526aaaa30c33b95->query('DROP USER \'' . $_INFO['db_user'] . '_' . $b63b3d46e5c279a279a9b10563887e18 . '\'@\'' . $E8c7a983b1f5f88c03449e384ad28bbd['server_ip'] . '\'');

		$Beb9cf543f12c74011255da0aa5c8e7e .= '$_INFO[\'db_user\'] = "' . $_INFO['db_user'] . '_' . $b63b3d46e5c279a279a9b10563887e18 . '";' . "\r\n";

		$A3180979d7c2b229bb50ca42b138af6f->exec('echo ' . $Beb9cf543f12c74011255da0aa5c8e7e . ' | base64 --decode > ' . IPTV_PANEL_DIR . 'wwwdir/config.php');

		$Beb9cf543f12c74011255da0aa5c8e7e = base64_encode($Beb9cf543f12c74011255da0aa5c8e7e);
		$Bccacce256e39cd87526aaaa30c33b95->query('CREATE USER \'' . $_INFO['db_user'] . '_' . $b63b3d46e5c279a279a9b10563887e18 . '\'@\'' . $E8c7a983b1f5f88c03449e384ad28bbd['server_ip'] . '\' IDENTIFIED BY \'' . $_INFO['db_pass'] . '\';');

		$Beb9cf543f12c74011255da0aa5c8e7e .= '?>';
		$Beb9cf543f12c74011255da0aa5c8e7e .= '$_INFO[\'db_name\'] = "' . $_INFO['db_name'] . '";' . "\r\n";

		$Beb9cf543f12c74011255da0aa5c8e7e = '<?php' . "\n";
		$Bccacce256e39cd87526aaaa30c33b95->query('GRANT ALL PRIVILEGES ON ' . $_INFO['db_name'] . '. * TO \'' . $_INFO['db_user'] . '_' . $b63b3d46e5c279a279a9b10563887e18 . '\'@\'' . $E8c7a983b1f5f88c03449e384ad28bbd['server_ip'] . '\';');
	}

	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['action_done'];

	foreach (b8a6EA05EEBc7E2E3503Ea794b1a1Ee4::$StreamingServers as $D4b0e4f302fed4c8918d703be778a967 => $E8c7a983b1f5f88c03449e384ad28bbd) {
		$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `streaming_servers` SET `status` = 1 WHERE `id` = \'%d\'', $D4b0e4f302fed4c8918d703be778a967);
		$C0370129ae871d899244eaf1c9fed218 = C7F23F8aFe7637cDBC24b271C7BB2213::f6022c79efd7636bc9Ae3d0259b1891E($D4b0e4f302fed4c8918d703be778a967, 'whoami', 'raw', true);
		if (!($C0370129ae871d899244eaf1c9fed218[$D4b0e4f302fed4c8918d703be778a967] == 'xtreamcodes')) {
		}

	}

	$D6798e39bd071d1311a16d38735c00a0 = b8A6eA05eEbC7E2e3503Ea794B1A1Ee4::$StreamingServers[SERVER_ID]['server_ip'];
	$Bccacce256e39cd87526aaaa30c33b95->query('FLUSH PRIVILEGES;');
case 'delete_client_logs':
	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['action_done'];

	$D29f3c5494cb370b46f3e907dc61f106->query('TRUNCATE `client_logs`');
case 'delete_sconnections':
	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['server_connections_deleted'];

	$D29f3c5494cb370b46f3e907dc61f106->query('DELETE FROM `server_activity` WHERE `date_end` IS NOT NULL');
case 'delete_closed_connections':
	$D29f3c5494cb370b46f3e907dc61f106->query('TRUNCATE `user_activity`');

	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['closed_connections_deleted'];
case 'delete_connections':
	$f865da722529a97b42359bb1e513708c = intval(trim(B8a6EA05Eebc7E2E3503eA794B1a1ee4::$request['seconds']));

	if (empty(b8a6Ea05EEBc7e2e3503Ea794b1A1Ee4::$request['seconds'])) {
	}

	$B55f78703213d1595283266f835ca867 = 'All Closed Connections deleted based on the seconds value you provided!';

	$D29f3c5494cb370b46f3e907dc61f106->query('DELETE FROM `user_activity` WHERE `date_end`-`date_start` <= \'%d\'', $f865da722529a97b42359bb1e513708c);
case 'kill_active_cons':
	foreach (B8A6eA05eEbc7E2e3503EA794B1A1eE4::$StreamingServers as $D4b0e4f302fed4c8918d703be778a967 => $E8c7a983b1f5f88c03449e384ad28bbd) {
		Dfa6500B681f783bBBCb94474366bB27::A034e4C1438123C04EfD231FbE59A335($D4b0e4f302fed4c8918d703be778a967);
	}

	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['all_connections_killed'];
case 'finduserbyip':
	foreach ($D29f3c5494cb370b46f3e907dc61f106->b865B38eb81F98b969e0Ac143F701035() as $d510c8dba98eae966876c9ec30cdbf9f) {
		$E6412230eeb5a4348cc57a7876286e4a[$d510c8dba98eae966876c9ec30cdbf9f['user_id']] = array('username' => $d510c8dba98eae966876c9ec30cdbf9f['username'], 'password' => $d510c8dba98eae966876c9ec30cdbf9f['password']);
	}

	$C4caf0da36b7e6696db615f28955a10f = B8A6EA05EebC7E2e3503eA794b1a1ee4::$request['ip'];

	$E6412230eeb5a4348cc57a7876286e4a = array();

	while (empty(b8a6ea05EEbC7E2E3503Ea794B1a1eE4::$request['ip'])) {
	}

	$D29f3c5494cb370b46f3e907dc61f106->query("\n" . '                        SELECT DISTINCT(t1.user_id),t2.username,t2.password FROM `user_activity` t1' . "\n" . '                            INNER JOIN `users` t2 ON t2.id = t1.user_id' . "\n" . '                            WHERE t1.user_ip = \'%s\';', $C4caf0da36b7e6696db615f28955a10f);
case 'remove_mag_events':
	$dae2a2ee7c75c7d47c6284f80a531bdc = (!empty(b8A6eA05EebC7E2E3503ea794b1a1eE4::$request['remove_pending']) ? true : false);
	if (!$e40ca65f042e8ceb64b7e40867d2f972) {
	}

	$e40ca65f042e8ceb64b7e40867d2f972 = (!empty(B8a6ea05eebc7E2E3503EA794b1a1eE4::$request['remove_sent']) ? true : false);
	$D29f3c5494cb370b46f3e907dc61f106->query('DELETE FROM `mag_events` WHERE `status` = 0');

	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['action_done'];
	$D29f3c5494cb370b46f3e907dc61f106->query('DELETE FROM `mag_events` WHERE `status` = 1');
case 'remove_expired':
	$fc3c8701974bfa2dfa4555cc4bca52bd = (!empty(B8A6EA05EEbC7E2e3503EA794b1a1eE4::$request['remove_exp_official']) ? B8A6eA05EEBC7e2e3503Ea794b1a1eE4::$request['remove_exp_official'] : false);
	$E201b583f7905ce76b5d6ff1e0a632dd = (!empty(B8A6ea05eEBc7e2e3503EA794B1a1EE4::$request['remove_exp_trial']) ? B8A6Ea05EEBC7e2e3503ea794B1A1eE4::$request['remove_exp_trial'] : false);
	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['action_done'];

	$D29f3c5494cb370b46f3e907dc61f106->query('DELETE FROM `users` WHERE `exp_date` IS NOT NULL AND `exp_date` < %d AND `is_trial` = 0 AND `is_mag` = 0', time());
	$D29f3c5494cb370b46f3e907dc61f106->query('DELETE FROM `users` WHERE `exp_date` IS NOT NULL AND `exp_date` < %d AND `is_trial` = 1 AND `is_mag` = 0', time());
default:
}

header('Location: ../index.php?error=NO_ADMIN');
require ('../init.php');
if ($c83b7d347a6bc7f5f0e3313147e88ecc->cB674E1c9BBDB0E29Ad2a7a35964ae35()) {
}

$c83b7d347a6bc7f5f0e3313147e88ecc->fA7e9FB747dd7976Dd94Ea27fa865B5D();

?> 

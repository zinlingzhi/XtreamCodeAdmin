<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

$c83b7d347a6bc7f5f0e3313147e88ecc->fa7e9fb747dD7976dd94eA27Fa865b5d();

session_start();
unset(b8A6ea05EEBc7E2e3503ea794B1a1EE4::$request['action']);
switch ($b8980526936694b2cd4cf6c7f8c80396) {
case 'add':
	$ccc582936841eb040f1eb31747b0a243 = $D29f3c5494cb370b46f3e907dc61f106->F1B4B6779C28f4ad97A35E4a54fD0416();

	$D81135250156e657cb4b0038677c6942 = B8a6Ea05eEBc7E2E3503Ea794B1A1EE4::$request['ssh_password'];

	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['domain_exists'];

	$Bccacce256e39cd87526aaaa30c33b95->query('GRANT ALL PRIVILEGES ON ' . $_INFO['db_name'] . '. * TO \'' . $_INFO['db_user'] . '_' . $ccc582936841eb040f1eb31747b0a243 . '\'@\'' . $C8a1c4c1df47c0deed6244b87d05714c . '\';');

	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['domain_listen_ip'];
	$d86a19a1d05b33734bbc57459bfb42f4 = (!empty(B8a6ea05EEBC7E2e3503Ea794B1a1eE4::$request['vpn_ip']) && inet_pton(B8A6Ea05eeBC7E2E3503eA794b1A1Ee4::$request['vpn_ip']) ? B8a6EA05eEBc7E2e3503eA794b1a1Ee4::$request['vpn_ip'] : '');

	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['ssh_no_auth'];
	$Bccacce256e39cd87526aaaa30c33b95->query('CREATE USER \'' . $_INFO['db_user'] . '_' . $ccc582936841eb040f1eb31747b0a243 . '\'@\'' . $C8a1c4c1df47c0deed6244b87d05714c . '\' IDENTIFIED BY \'' . $_INFO['db_pass'] . '\';');
	$C8a1c4c1df47c0deed6244b87d05714c = b8A6EA05eEbc7E2E3503EA794b1A1ee4::$request['server_ip'];

	$Bccacce256e39cd87526aaaa30c33b95 = new mysqli('127.0.0.1', 'root', $c360571709e51a818fffd5cb1cfc64ab);
	$A3180979d7c2b229bb50ca42b138af6f->F8c8498121104744C4bfeae4851bAd86();
	$Bccacce256e39cd87526aaaa30c33b95->query('FLUSH PRIVILEGES;');
	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['invalid_ip'];
	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['licence_invalid'];
	$D222befee4bdac7553fbc3c6c1527535 = (empty(B8A6ea05eeBC7E2e3503Ea794B1A1ee4::$request['total_clients']) || !is_numeric(B8A6Ea05eEBc7e2E3503EA794B1A1eE4::$request['total_clients']) ? 0 : abs(intval(B8A6ea05EEbC7e2E3503EA794B1a1Ee4::$request['total_clients'])));

	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['complete_fields'];

	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['server_exists'];

	$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `streaming_servers` (`server_name`,`domain_name`,`server_ip`,`vpn_ip`,`ssh_password`,`ssh_port`,`http_broadcast_port`,`total_clients`) VALUES(\'%s\',\'%s\',\'%s\',\'%s\',\'%s\',\'%d\',8000,\'%d\')', $dca5a90a4ff170d9cd90f32339ece123, $c1086f335425bee1bc1e045b289010bf, $C8a1c4c1df47c0deed6244b87d05714c, $d86a19a1d05b33734bbc57459bfb42f4, B8a6eA05EeBc7e2E3503EA794B1a1EE4::Ab764Df1cB58E01C3469c421051c501e($D81135250156e657cb4b0038677c6942, md5(b8A6Ea05eEBC7E2E3503ea794b1a1eE4::$settings['unique_id'])), $c42d00d40491ede44adde5393544bae9, $D222befee4bdac7553fbc3c6c1527535);
	if (!empty(b8a6Ea05eEbC7e2E3503ea794b1A1ee4::$request['server_ip']) && !empty(b8A6eA05EEBc7e2E3503Ea794B1A1Ee4::$request['mysql_password']) && !empty(b8A6ea05eEBC7e2e3503EA794B1a1ee4::$request['server_name']) && !empty(b8A6eA05EebC7e2E3503eA794b1a1EE4::$request['ssh_password']) && !empty(B8A6EA05eeBc7E2E3503EA794b1A1Ee4::$request['ssh_port'])) {
	}

	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['new_server_added'];

	$c42d00d40491ede44adde5393544bae9 = intval(b8A6Ea05EEBC7E2E3503Ea794B1A1eE4::$request['ssh_port']);
	$dca5a90a4ff170d9cd90f32339ece123 = B8a6eA05eeBc7E2E3503Ea794B1a1eE4::$request['server_name'];
	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['mysql_root_pass_wrong'];

	if (!Dbeb6a2D3fDf653C03C41185A9d463c0('streaming_servers', 'server_ip', $C8a1c4c1df47c0deed6244b87d05714c)) {
	}

	$A3180979d7c2b229bb50ca42b138af6f = new AcaAb5AF2d3C6bf2DEd754e2456a14A3($C8a1c4c1df47c0deed6244b87d05714c, $c42d00d40491ede44adde5393544bae9);

	$c360571709e51a818fffd5cb1cfc64ab = b8a6Ea05eebc7e2E3503eA794b1A1eE4::$request['mysql_password'];
	$c1086f335425bee1bc1e045b289010bf = (!empty(B8A6EA05eebC7E2e3503EA794B1A1ee4::$request['domain_name']) ? str_ireplace(array('http://', '/'), '', B8A6eA05eEBC7E2E3503Ea794B1A1EE4::$request['domain_name']) : '');
}

if ($c83b7d347a6bc7f5f0e3313147e88ecc->cB674E1C9BbDb0E29aD2a7A35964Ae35()) {
}

require ('../init.php');

require (IPTV_TEMPLATES_PATH . '/' . '/admin/' . 'add_server.php');

$b8980526936694b2cd4cf6c7f8c80396 = B8a6Ea05EeBc7E2E3503ea794b1A1Ee4::$request['action'];
header('Location: ../index.php?error=NO_ADMIN');

require (IPTV_TEMPLATES_PATH . '/' . 'header_admin.php');
exit(0);

require (IPTV_TEMPLATES_PATH . '/' . 'footer.php');


?> 

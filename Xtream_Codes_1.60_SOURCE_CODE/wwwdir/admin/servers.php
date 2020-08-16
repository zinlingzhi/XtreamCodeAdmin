<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

$c83b7d347a6bc7f5f0e3313147e88ecc->FA7e9fB747Dd7976dd94EA27FA865b5D();

require ('../init.php');

$b8980526936694b2cd4cf6c7f8c80396 = '';
unset(B8A6Ea05eebC7E2E3503Ea794b1A1eE4::$request['action']);

switch ($b8980526936694b2cd4cf6c7f8c80396) {
default:
	require (IPTV_TEMPLATES_PATH . '/' . 'footer.php');

	$b8980526936694b2cd4cf6c7f8c80396 = b8A6EA05EeBc7e2E3503Ea794b1A1ee4::$request['action'];
	header('Location: ../index.php?error=NO_ADMIN');

	require (IPTV_TEMPLATES_PATH . '/' . 'header_admin.php');

	$Fce20624c9b6567a7a8c441a4651444d = $f9a8823715bcb54e8069e0086da240b2['add_some_servers'];
	session_start();
	require (IPTV_TEMPLATES_PATH . '/' . '/admin/' . 'servers.php');
case 'terminal':
	$E6412230eeb5a4348cc57a7876286e4a = c7F23F8Afe7637cdbc24b271C7Bb2213::f6022c79eFd7636bC9ae3D0259b1891E($D4b0e4f302fed4c8918d703be778a967, base64_decode(B8a6ea05EeBc7E2e3503EA794b1a1eE4::$request['cmd']), 'raw');

	$D4b0e4f302fed4c8918d703be778a967 = intval(B8A6EA05eeBc7e2e3503eA794B1a1eE4::$request['id']);
	$D4b0e4f302fed4c8918d703be778a967 = NULL;

	exit($E6412230eeb5a4348cc57a7876286e4a[$D4b0e4f302fed4c8918d703be778a967]);

	if (empty(b8A6Ea05EeBc7E2e3503Ea794B1a1eE4::$request['id'])) {
	}

case 'kill_cons':
	$D4b0e4f302fed4c8918d703be778a967 = intval(B8a6Ea05EEBC7e2e3503EA794B1A1ee4::$request['id']);
	dFa6500B681f783bbbcB94474366bb27::A034E4c1438123C04efD231fBE59A335($D4b0e4f302fed4c8918d703be778a967);

	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['all_cons_dropped'];
	while (empty(B8a6Ea05eEbc7e2e3503ea794b1A1Ee4::$request['id'])) {
	}

case 'remake':
	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['server_status1'];

	if (0 < $D29f3c5494cb370b46f3e907dc61f106->B6d081dAC375eB86b869650ebFAFcfD9()) {
	}

	$D4b0e4f302fed4c8918d703be778a967 = intval(b8a6eA05Eebc7E2e3503ea794b1A1Ee4::$request['id']);

	$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `streaming_servers` SET `status` = -1 WHERE `status` <> -1 AND `id` = \'%d\'', $D4b0e4f302fed4c8918d703be778a967);
	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['action_done'];
case 'delete':
	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['server_deleted_couldn_con'];

	$A3180979d7c2b229bb50ca42b138af6f->exec('awk \'!/xtreamcodes/\' /etc/rc.d/rc.local > /tmp/temp_file && mv /tmp/temp_file /etc/rc.d/rc.local');

	$D29f3c5494cb370b46f3e907dc61f106->query('DELETE FROM `streaming_servers` WHERE `id` = \'%d\'', $D4b0e4f302fed4c8918d703be778a967);

	$D29f3c5494cb370b46f3e907dc61f106->query('DELETE FROM `streams_sys` WHERE `server_id` = \'%d\'', $D4b0e4f302fed4c8918d703be778a967);

	$D29f3c5494cb370b46f3e907dc61f106->query('DELETE FROM `server_activity` WHERE `source_server_id` = \'%d\' OR `dest_server_id` = \'%d\'', $D4b0e4f302fed4c8918d703be778a967, $D4b0e4f302fed4c8918d703be778a967);
	$A3180979d7c2b229bb50ca42b138af6f->exec('awk \'!/xtreamcodes/\' /etc/sudoers > /tmp/temp_file && mv /tmp/temp_file /etc/sudoers');

	$A3180979d7c2b229bb50ca42b138af6f->exec('pkill -9 ffmpeg');

	$A3180979d7c2b229bb50ca42b138af6f->exec('pkill -9 nginx');

	$A3180979d7c2b229bb50ca42b138af6f->exec('pkill -9 ffprobe');

	$A3180979d7c2b229bb50ca42b138af6f = new acaAB5af2d3c6bF2dEd754E2456a14A3(b8a6EA05eEBC7e2E3503eA794B1A1eE4::$StreamingServers[$D4b0e4f302fed4c8918d703be778a967]['server_ip'], b8A6ea05EEBc7e2e3503eA794b1A1eE4::$StreamingServers[$D4b0e4f302fed4c8918d703be778a967]['ssh_port']);
	$A3180979d7c2b229bb50ca42b138af6f->exec('update-rc.d -f xtreamcodes remove');

	$A3180979d7c2b229bb50ca42b138af6f->exec('awk \'!/xtreamcodes/\' /etc/init.d/rc.local > /tmp/temp_file && mv /tmp/temp_file /etc/init.d/rc.local');

	$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `users` SET `force_server_id` = 0 WHERE `force_server_id` = \'%d\'', $D4b0e4f302fed4c8918d703be778a967);
	$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `streams_sys` SET `parent_id` = 0 WHERE `parent_id` = \'%d\'', $D4b0e4f302fed4c8918d703be778a967);

	if (empty(b8a6EA05eEBc7E2e3503eA794B1a1ee4::$request['id'])) {
	}

	DFa6500b681F783bBbcb94474366bb27::A034E4c1438123c04EFd231fBE59A335($D4b0e4f302fed4c8918d703be778a967);
	$D4b0e4f302fed4c8918d703be778a967 = intval(B8A6EA05eEBc7E2E3503ea794B1A1eE4::$request['id']);
	$A3180979d7c2b229bb50ca42b138af6f->exec('pkill -9 php');
	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['server_deleted'];
default:
}

?> 

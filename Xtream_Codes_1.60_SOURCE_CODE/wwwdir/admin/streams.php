<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

require ('../init.php');

set_time_limit(0);
header('Location: ../index.php?error=NO_ADMIN');

$Bda8edc28509d4243a1d0bd7710d1201 = ad2D01E289081a9f123014e2b99c42d0();

require (IPTV_TEMPLATES_PATH . '/' . '/admin/' . 'streams.php');

ini_set('max_execution_time', 600);

$c83b7d347a6bc7f5f0e3313147e88ecc->FA7E9Fb747dd7976Dd94EA27FA865b5d();

switch ($b8980526936694b2cd4cf6c7f8c80396) {
case 'str_start':
	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['stream_start_request_sent'];

	$fe6d74fc2aef3103f2d8d34d9ac82807 = intval(b8A6EA05EEbc7E2E3503Ea794B1a1Ee4::$request['stream_id']);
	$D4b0e4f302fed4c8918d703be778a967 = (!empty(b8A6eA05eEBc7e2e3503EA794b1a1eE4::$request['server_id']) && array_key_exists(b8a6eA05EEBC7e2E3503Ea794b1a1ee4::$request['server_id'], b8A6eA05eEBc7e2e3503eA794b1A1eE4::$StreamingServers) ? intval(b8A6EA05EEbc7e2E3503EA794B1a1ee4::$request['server_id']) : NULL);
	Ef4Bc8281856E815abeFa11052cAD2c6::dA17c8c79048f7a15c9F4d54669F4c07('start', 'live', 0, $fe6d74fc2aef3103f2d8d34d9ac82807, $D4b0e4f302fed4c8918d703be778a967);
case 'start_running':
	foreach ($A31953f8a90d04cd947c8d37a5bfec23 as $d510c8dba98eae966876c9ec30cdbf9f) {
		Ef4bc8281856E815AbEfa11052cAd2C6::dA17c8C79048F7a15C9F4D54669f4C07('start', 'live', 0, $d510c8dba98eae966876c9ec30cdbf9f['stream_id'], $d510c8dba98eae966876c9ec30cdbf9f['server_id']);
	}

	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['action_done'];

	$A31953f8a90d04cd947c8d37a5bfec23 = $D29f3c5494cb370b46f3e907dc61f106->b865b38EB81f98B969e0Ac143f701035();
	$D29f3c5494cb370b46f3e907dc61f106->query('  SELECT t1.*,t2.* FROM `streams_sys` t1 ' . "\r\n" . '                    INNER JOIN `streams` t2 ON t2.id = t1.stream_id' . "\r\n" . '                    INNER JOIN `streams_types` t3 ON t3.type_id = t2.type AND t3.type_output = \'live\' ' . "\r\n" . '                    WHERE (t1.pid IS NOT NULL OR t1.stream_status <> 0 OR t1.to_analyze = 1)');
case 'open_stream':
	$C63435555732fef7929084e252ed20b8 = B8A6ea05EEbc7e2E3503Ea794b1a1eE4::$StreamingServers[$D4b0e4f302fed4c8918d703be778a967]['site_url'] . 'streaming/admin_live.php?password=' . b8A6eA05EEBc7E2e3503ea794b1A1eE4::$settings['live_streaming_pass'] . '&extension=' . $C32b337083c8f362641110c10eb28a9f . '&stream=' . $Da88f16fe9e174bc837e9bc400f48c0e;

	echo $E6412230eeb5a4348cc57a7876286e4a;

	exit();
	$C32b337083c8f362641110c10eb28a9f = B8a6ea05EEbC7e2E3503ea794B1a1Ee4::$request['extension'];
	$D4b0e4f302fed4c8918d703be778a967 = intval(B8A6eA05EEBC7e2e3503EA794B1A1ee4::$request['server_id']);
	$Da88f16fe9e174bc837e9bc400f48c0e = intval(b8A6eA05EEbC7E2e3503Ea794b1a1Ee4::$request['stream_id']);

	$E6412230eeb5a4348cc57a7876286e4a = "\r\n" . '                <center>' . "\r\n" . '                <embed ' . "\r\n" . '                        type="application/x-vlc-plugin" ' . "\r\n" . '                        width="980" ' . "\r\n" . '                        height="630" ' . "\r\n" . '                        target="' . $C63435555732fef7929084e252ed20b8 . '" />' . "\r\n" . '                </center>' . "\r\n" . '                ';
case 'str_stop':
	define('STOP', 1);

	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['stream_stopped'];

	Ef4bc8281856e815abEFa11052cad2c6::DA17c8C79048f7a15c9f4d54669F4c07('stop', 'live', 1, $fe6d74fc2aef3103f2d8d34d9ac82807, $D4b0e4f302fed4c8918d703be778a967);

	$fe6d74fc2aef3103f2d8d34d9ac82807 = intval(b8a6eA05EEbc7e2e3503Ea794B1A1ee4::$request['stream_id']);
	$D4b0e4f302fed4c8918d703be778a967 = (!empty(B8a6eA05eEBc7e2E3503EA794B1A1Ee4::$request['server_id']) && array_key_exists(b8A6eA05EeBC7e2e3503Ea794b1a1Ee4::$request['server_id'], b8A6Ea05EEbC7E2e3503ea794b1A1EE4::$StreamingServers) ? intval(B8a6EA05eEbC7e2E3503Ea794B1a1eE4::$request['server_id']) : NULL);
case 'stop_all':
	foreach (array_keys(B8a6ea05EeBc7E2E3503Ea794B1a1Ee4::$StreamingServers) as $D4b0e4f302fed4c8918d703be778a967) {
		c7f23F8AfE7637CdBC24b271c7Bb2213::F6022c79efD7636bc9ae3d0259B1891e($D4b0e4f302fed4c8918d703be778a967, 'pkill -9 ffprobe; pkill -9 ffmpeg', 'raw');
	}

	shell_exec('crontab -r');

	shell_exec('kill -9 ' . $Ce73b53d48552623fea285b49e928724);

	foreach ($Fb9c5a9eba8ff7cc60144184f389cbac as $E21a446db0ec949e312b9aa1a7a4c347) {
		posix_kill($E21a446db0ec949e312b9aa1a7a4c347, 9);
	}

	$D29f3c5494cb370b46f3e907dc61f106->query('SELECT `pid` FROM `cronjobs` WHERE `filename` = \'live_checker.php\'');

	$Fb9c5a9eba8ff7cc60144184f389cbac = B8A6EA05EEBC7e2e3503eA794B1A1ee4::e17E6f21A4ad2f2d81D20a77dAf7b48A($D29f3c5494cb370b46f3e907dc61f106->b865B38EB81f98b969e0ac143F701035());
	b51Dbc9C3DBe2CE92FC1290A66383077();

	$Ce73b53d48552623fea285b49e928724 = $D29f3c5494cb370b46f3e907dc61f106->B68c0609c13f8645D5E168B69fD4c118();
	$D29f3c5494cb370b46f3e907dc61f106->query('SELECT `analyze_pid` FROM `streams_sys` WHERE `pid` IS NOT NULL');

	$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `streams_sys` SET `bitrate` = NULL,`integrity` = NULL,`crashed_analyze` = 0,`current_source` = NULL,`to_analyze` = 0,`pid` = NULL,`stream_started` = NULL,`stream_info` = NULL,`stream_status` = 0 WHERE `stream_id` IN (SELECT `id` FROM `streams` WHERE `type` = 1)');
case 'start_all':
	$f466f936a175e4e048fb2f434cd66c79 = B8a6Ea05EEbC7e2E3503eA794b1A1EE4::e17e6F21a4aD2f2D81d20a77dAF7B48a($D29f3c5494cb370b46f3e907dc61f106->b865B38EB81F98b969E0Ac143F701035());

	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['streams_started'];

	foreach ($f466f936a175e4e048fb2f434cd66c79 as $fe6d74fc2aef3103f2d8d34d9ac82807) {
		EF4bc8281856E815aBeFA11052caD2C6::DA17c8C79048F7a15C9F4D54669f4C07('start', 'live', 0, $fe6d74fc2aef3103f2d8d34d9ac82807);
	}

	if (!(0 < $D29f3c5494cb370b46f3e907dc61f106->b068A09B89Fc39AD0B9AfCF85f0F1A18())) {
	}

	$D29f3c5494cb370b46f3e907dc61f106->query('SELECT `id` FROM `streams` WHERE `type` = 1');
case 'str_delete':
	$A934a6c7d4ad84fdfac71e31ed85cba5->c2202ddc676431fCdC5fDb8C1Df6aA6a();

	$A934a6c7d4ad84fdfac71e31ed85cba5 = new eF4BC8281856E815aBeFA11052cad2C6($fe6d74fc2aef3103f2d8d34d9ac82807);
	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['stream_deleted'];

	$fe6d74fc2aef3103f2d8d34d9ac82807 = intval(b8A6Ea05EEBC7e2e3503ea794B1a1EE4::$request['stream_id']);
default:
	$Fce20624c9b6567a7a8c441a4651444d = $f9a8823715bcb54e8069e0086da240b2['add_some_streams'];
	session_start();
	require (IPTV_TEMPLATES_PATH . '/' . 'header_admin.php');

	while ($c83b7d347a6bc7f5f0e3313147e88ecc->cB674E1C9bbDB0E29ad2A7A35964aE35()) {
	}

default:
	exit(0);
	$b8980526936694b2cd4cf6c7f8c80396 = b8a6Ea05EebC7e2e3503EA794b1a1eE4::$request['action'];
}

?> 

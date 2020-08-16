<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

$Af2f177dc7388d15357b1f65506d14b2 = b8a6Ea05EEbC7e2E3503ea794B1A1ee4::a2CF85Aac2D61A080c23f9a10C48b48B($bf3cd6eed406072de08303c780a1f2cb->Servers);

exit(0);

$fe6d74fc2aef3103f2d8d34d9ac82807 = false;
$ec2d9106046948d5bd4541355199b985 = (empty($ec2d9106046948d5bd4541355199b985) ? f6aCbDF515C1e5f84c3209C7FAa09641('live') : $ec2d9106046948d5bd4541355199b985);

$bf3cd6eed406072de08303c780a1f2cb = new EF4bC8281856e815AbefA11052caD2C6($fe6d74fc2aef3103f2d8d34d9ac82807);

$c83b7d347a6bc7f5f0e3313147e88ecc->fa7E9fb747DD7976Dd94Ea27FA865b5D();
switch ($b8980526936694b2cd4cf6c7f8c80396) {
case 'edit_stream':
	$Df1ed0c24afddf3f97f29d7c950a45ef = (!empty(b8A6ea05EEBC7E2e3503EA794b1A1EE4::$request['category_id']) && dBEb6A2D3Fdf653c03c41185a9D463c0('stream_categories', 'id', B8a6ea05eeBc7E2e3503eA794B1a1EE4::$request['category_id']) ? intval(B8a6ea05EEBc7e2e3503EA794B1A1eE4::$request['category_id']) : 'NULL');

	foreach ($b8a701e181a78c523ef488605ed0de8b as $C4188eb5625baf4963cf95fd069d727b => $C18109cdc9326739096c21c5a0bacd0c) {
		$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `streams_options` (`stream_id`,`argument_id`,`value`) VALUES(\'%d\',\'%d\',\'%s\');', $fe6d74fc2aef3103f2d8d34d9ac82807, $C4188eb5625baf4963cf95fd069d727b, $C18109cdc9326739096c21c5a0bacd0c);

		$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `streams_options` (`stream_id`,`argument_id`) VALUES(\'%d\',\'%d\')', $fe6d74fc2aef3103f2d8d34d9ac82807, $C4188eb5625baf4963cf95fd069d727b);
		$C18109cdc9326739096c21c5a0bacd0c = trim($C18109cdc9326739096c21c5a0bacd0c);
		if (!(empty($C18109cdc9326739096c21c5a0bacd0c) && !is_numeric($C18109cdc9326739096c21c5a0bacd0c))) {
		}

		while (!DbEb6a2d3fdf653C03C41185A9d463c0('streams_arguments', 'id', $C4188eb5625baf4963cf95fd069d727b)) {
		}

	}

	$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `streams` SET `epg_id` = NULL,`epg_lang` = NULL,`channel_id` = NULL WHERE `id` = \'%d\'', $fe6d74fc2aef3103f2d8d34d9ac82807);
	$Ef010245f48859607396a9fd1485b0d0 = (!empty(b8A6eA05eEBC7E2e3503EA794B1A1ee4::$request['auto_restart']) ? intval(B8a6ea05eebC7E2E3503eA794B1a1ee4::$request['auto_restart']) : 0);
	$d7b71304b4435dc40f45b62964f7b42c = (!empty(b8A6eA05EEbc7e2E3503Ea794B1A1eE4::$request['read_native']) ? 1 : 0);

	$c8b64aa7c0205b19247dc67d89e911dd = b8a6ea05EeBC7E2e3503ea794b1A1EE4::c293F8e3C1eB62B9A8Dde105a6aAe797($bf3cd6eed406072de08303c780a1f2cb->StreamArguments, false);
	$F966b8cfafae97e693fb748f41d3f717 = (!empty(B8A6eA05eeBC7E2e3503EA794b1A1Ee4::$request['custom_ffmpeg']) ? b8a6EA05EeBC7E2E3503eA794B1A1ee4::$request['custom_ffmpeg'] : '');

	$D29f3c5494cb370b46f3e907dc61f106->query('DELETE FROM `streams_options` WHERE `stream_id` = \'%d\'', $fe6d74fc2aef3103f2d8d34d9ac82807);

	foreach ($dae5e59e7b45efe5e04ced6d8ac3b2a5 as $D4b0e4f302fed4c8918d703be778a967 => $Ed0da8a115c56d3e1e526723a7954682) {
		$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `streams_sys` SET `parent_id` = \'%d\' WHERE `stream_id` = \'%d\' AND `server_id` = \'%d\'', $Ed0da8a115c56d3e1e526723a7954682, $fe6d74fc2aef3103f2d8d34d9ac82807, $D4b0e4f302fed4c8918d703be778a967);
		$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `streams_sys` (`stream_id`,`server_id`,`parent_id`) VALUES(\'%d\',\'%d\',\'%d\')', $fe6d74fc2aef3103f2d8d34d9ac82807, $D4b0e4f302fed4c8918d703be778a967, $Ed0da8a115c56d3e1e526723a7954682);
	}

	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['licence_invalid'];
	$a845ac42cac3bca799bdc0eb0fe5a0b5 = (!empty(b8a6Ea05eebC7E2e3503EA794B1a1Ee4::$request['epg_id']) && DbEB6a2d3FdF653C03C41185A9d463c0('epg', 'id', B8a6EA05Eebc7E2E3503EA794B1a1Ee4::$request['epg_id']) ? intval(B8A6ea05eEbC7E2E3503ea794B1a1Ee4::$request['epg_id']) : false);

	$E07632e415bc592ad57678ec17ccaa8d = json_encode(array_values(array_unique(B8A6eA05eEbC7e2e3503Ea794b1a1Ee4::$request['stream_source'])));
	$C2d39c92718dfba57d43d6049ba73b21 = (($bdeb9831adc6aedfa4fbc054067d079d !== false) && !empty(b8a6EA05EEBc7E2e3503Ea794b1a1eE4::$request['epg_lang']) ? b8a6ea05eeBc7e2e3503eA794B1a1EE4::$request['epg_lang'] : false);
	$bf3cd6eed406072de08303c780a1f2cb = new EF4BC8281856e815ABeFA11052CAD2C6($fe6d74fc2aef3103f2d8d34d9ac82807);

	$Dcd66452e6a774b1c2f6f593028faacf = array_diff(array_keys($bf3cd6eed406072de08303c780a1f2cb->Servers), array_keys($dae5e59e7b45efe5e04ced6d8ac3b2a5));

	$Af2f177dc7388d15357b1f65506d14b2 = b8A6ea05eebC7e2e3503Ea794B1A1EE4::a2CF85aac2D61A080c23F9a10c48B48B($bf3cd6eed406072de08303c780a1f2cb->Servers);
	$dae5e59e7b45efe5e04ced6d8ac3b2a5 = array();

	foreach ($cbd1495c69971e4de5dff882d5e4a2e2 as $c19f4324c4b2e7e93dbef2e24f23bcc7) {
		if (!array_key_exists($E6412230eeb5a4348cc57a7876286e4a['id'], b8a6ea05eEBC7e2E3503Ea794B1A1EE4::$StreamingServers)) {
		}

		$dae5e59e7b45efe5e04ced6d8ac3b2a5[$E6412230eeb5a4348cc57a7876286e4a['id']] = $E6412230eeb5a4348cc57a7876286e4a['parent_id'];
		parse_str($c19f4324c4b2e7e93dbef2e24f23bcc7, &$E6412230eeb5a4348cc57a7876286e4a);
	}

	$b8a701e181a78c523ef488605ed0de8b = b8A6ea05EEbc7E2E3503ea794B1A1eE4::$request['arguments'];
	$e5ca8b7eddea2c44033d6ef108fdd1f2 = (!empty(B8a6ea05eebc7e2E3503ea794B1a1eE4::$request['gen_pts']) ? 1 : 0);
	$f568c89b199089f8840936400ea99a37 = ($c9e7476d790f807f4774b6b88121522c != 0 ? 1 : 0);

	if (empty($dae5e59e7b45efe5e04ced6d8ac3b2a5)) {
	}

	if (($bf3cd6eed406072de08303c780a1f2cb->StreamInfo['stream_display_name'] == $C4cd3c532766969bab35abc978dcc44c) || !dbeb6a2D3fdF653C03c41185a9d463c0('streams', 'stream_display_name', $C4cd3c532766969bab35abc978dcc44c)) {
	}

	$bdeb9831adc6aedfa4fbc054067d079d = (($a845ac42cac3bca799bdc0eb0fe5a0b5 !== false) && !empty(B8A6Ea05EEBc7e2e3503EA794b1A1Ee4::$request['channel_id']) ? B8A6eA05EeBc7E2E3503ea794b1A1ee4::$request['channel_id'] : false);
	$Ccc01a49a480ad4b98dc48415a5e29fa = str_replace('{stream_name}', $C4cd3c532766969bab35abc978dcc44c, $f9a8823715bcb54e8069e0086da240b2['stream_exists']);
	$Cd3b8454f4eabd39c17442e2c518a33c = (!empty(b8a6eA05eebc7e2E3503eA794B1A1ee4::$request['stream_all']) ? 1 : 0);

	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['complete_fields'];

	$Fe46ea3f0409d3d0527fb9c91ceb3971 = b8A6ea05eebc7e2E3503EA794B1A1eE4::C293F8e3c1EB62B9A8dde105a6AaE797();
	if (empty($e04bbeb1bf923375b545a9273b5f3d23) || ((substr($e04bbeb1bf923375b545a9273b5f3d23, -1) == ':') && (substr($e04bbeb1bf923375b545a9273b5f3d23, 0, 1) == ':'))) {
	}

	$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `streams` SET `stream_display_name` = \'%s\',' . "\r\n" . '                                                                       `stream_source` = \'%s\',' . "\r\n" . '                                                                       `category_id` = %s,' . "\r\n" . '                                                                       `stream_icon` = \'%s\',' . "\r\n" . '                                                                       `enable_transcode` = \'%d\',' . "\r\n" . '                                                                       `transcode_attributes` = \'%s\',' . "\r\n" . '                                                                       `read_native` = \'%d\',' . "\r\n" . '                                                                       `stream_all` = \'%d\',' . "\r\n" . '                                                                       `notes` = \'%s\',' . "\r\n" . '                                                                       `custom_ffmpeg` = \'%s\',' . "\r\n" . '                                                                       `auto_restart` = \'%d\',' . "\r\n" . '                                                                       `gen_pts` = \'%d\',' . "\r\n" . '                                                                       `transcode_profile_id` = \'%d\',' . "\r\n" . '                                                                       `custom_sid` = \'%s\' WHERE `id` = \'%d\'', $C4cd3c532766969bab35abc978dcc44c, $E07632e415bc592ad57678ec17ccaa8d, $Df1ed0c24afddf3f97f29d7c950a45ef, $b46875bbe2b4244eb0849b98b76d4e3c, $f568c89b199089f8840936400ea99a37, json_encode($d809d303d29a0d6146e8aab0b246b018), $d7b71304b4435dc40f45b62964f7b42c, $Cd3b8454f4eabd39c17442e2c518a33c, $D77af068b5dcf27a4945e91c2df88d68, $F966b8cfafae97e693fb748f41d3f717, $Ef010245f48859607396a9fd1485b0d0, $e5ca8b7eddea2c44033d6ef108fdd1f2, $c9e7476d790f807f4774b6b88121522c, $e04bbeb1bf923375b545a9273b5f3d23, $fe6d74fc2aef3103f2d8d34d9ac82807);

	$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `streams` SET `epg_id` = \'%d\',`epg_lang` = \'%s\',`channel_id` = \'%s\' WHERE `id` = \'%d\'', $a845ac42cac3bca799bdc0eb0fe5a0b5, $C2d39c92718dfba57d43d6049ba73b21, $bdeb9831adc6aedfa4fbc054067d079d, $fe6d74fc2aef3103f2d8d34d9ac82807);
	$b46875bbe2b4244eb0849b98b76d4e3c = (!empty(b8A6EA05EEBc7E2e3503Ea794B1A1ee4::$request['stream_icon']) ? trim(b8a6Ea05EeBC7E2e3503Ea794b1A1eE4::$request['stream_icon']) : '');

	$Ccc01a49a480ad4b98dc48415a5e29fa[] = $f9a8823715bcb54e8069e0086da240b2['custom_sid_error'];
	$e04bbeb1bf923375b545a9273b5f3d23 = (!empty(b8A6Ea05eeBC7e2e3503EA794B1a1Ee4::$request['custom_sid']) ? b8a6EA05eeBc7E2e3503EA794B1a1ee4::$request['custom_sid'] : NULL);
	$d809d303d29a0d6146e8aab0b246b018 = (($c9e7476d790f807f4774b6b88121522c == -1) && !empty(B8a6EA05eEBC7E2E3503Ea794b1A1Ee4::$request['transcode_attributes']) && is_array(B8a6eA05eebC7E2E3503Ea794b1A1Ee4::$request['transcode_attributes']) ? array_filter(B8A6ea05EebC7E2E3503Ea794B1A1ee4::$request['transcode_attributes']) : array());
	$c9e7476d790f807f4774b6b88121522c = (empty(b8A6ea05EeBc7e2e3503ea794b1a1eE4::$request['transcode_profile_id']) ? 0 : intval(B8A6eA05EEbC7E2E3503Ea794B1A1Ee4::$request['transcode_profile_id']));

	foreach ($Dcd66452e6a774b1c2f6f593028faacf as $b2da0a9880932e47a18ba68b270ae9fa) {
		$D29f3c5494cb370b46f3e907dc61f106->query('DELETE FROM `streams_sys` WHERE `server_id` = \'%d\' AND `stream_id` = \'%d\'', $b2da0a9880932e47a18ba68b270ae9fa, $fe6d74fc2aef3103f2d8d34d9ac82807);
		Ef4bC8281856E815abefA11052CaD2C6::Da17c8C79048F7a15c9f4D54669F4C07('stop', 'live', 0, $fe6d74fc2aef3103f2d8d34d9ac82807, $b2da0a9880932e47a18ba68b270ae9fa);
	}

	$cbd1495c69971e4de5dff882d5e4a2e2 = (!empty(B8A6ea05EEbc7E2E3503EA794b1A1EE4::$request['load_balancer_servers']) && is_array(B8A6ea05eEbc7E2E3503Ea794B1a1EE4::$request['load_balancer_servers']) ? b8a6Ea05EEbC7e2e3503Ea794B1A1Ee4::$request['load_balancer_servers'] : array());

	if ($bdeb9831adc6aedfa4fbc054067d079d === false) {
	}

	$D77af068b5dcf27a4945e91c2df88d68 = (!empty(b8a6eA05eeBC7e2e3503EA794B1A1ee4::$request['notes']) ? trim(b8A6ea05eEBc7E2e3503eA794b1A1ee4::$request['notes']) : '');
	$C4cd3c532766969bab35abc978dcc44c = encodeToUtf8(B8a6eA05eEbc7e2e3503Ea794B1A1eE4::$request['stream_display_name']);

	$B55f78703213d1595283266f835ca867 = str_replace('{HERE}', '<a href=\'streams.php?action=str_start&stream_id=' . $fe6d74fc2aef3103f2d8d34d9ac82807 . '\'>here</a>', $f9a8823715bcb54e8069e0086da240b2['click_restart_stream']);
default:
	$Cb751d454bbedafaaec687ca76753225 = c8554bB3D711C28F0b3f218090d08aef();

	$cdbed4b98ae3b7fffd90a40205ff47fe = a912bf58e557078ea9d74f24c45DE89f();

	$b8980526936694b2cd4cf6c7f8c80396 = b8a6ea05Eebc7e2e3503ea794B1A1EE4::$request['action'];

	require ('../init.php');

	session_start();
	$Fce20624c9b6567a7a8c441a4651444d = $f9a8823715bcb54e8069e0086da240b2['select_stream_edit'];
	header('Location: ../index.php?error=NO_ADMIN');
	if (!empty(B8A6EA05eeBc7e2e3503eA794b1a1Ee4::$request['stream_id']) && is_numeric(b8A6Ea05EEBC7E2e3503Ea794b1A1ee4::$request['stream_id'])) {
	}

	$Fce20624c9b6567a7a8c441a4651444d = $f9a8823715bcb54e8069e0086da240b2['stream_id_nexists'];
	require (IPTV_TEMPLATES_PATH . '/' . 'header_admin.php');

	$fe6d74fc2aef3103f2d8d34d9ac82807 = B8a6EA05EEbc7e2E3503Ea794B1a1Ee4::$request['stream_id'];
	unset(B8A6Ea05EEBc7E2e3503eA794b1a1EE4::$request['action']);

	if ($c83b7d347a6bc7f5f0e3313147e88ecc->cb674E1C9BBDB0E29Ad2a7A35964Ae35()) {
	}

	$c8b64aa7c0205b19247dc67d89e911dd = (empty($c8b64aa7c0205b19247dc67d89e911dd) ? b8a6EA05eeBC7e2e3503Ea794b1a1ee4::c293F8E3C1Eb62B9a8dde105A6aAe797($bf3cd6eed406072de08303c780a1f2cb->StreamArguments, false) : $c8b64aa7c0205b19247dc67d89e911dd);
	require (IPTV_TEMPLATES_PATH . '/' . 'footer.php');
}

?> 

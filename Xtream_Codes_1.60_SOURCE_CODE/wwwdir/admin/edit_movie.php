<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

$c83b7d347a6bc7f5f0e3313147e88ecc->fA7e9fb747Dd7976Dd94ea27fA865B5D();

$Fce20624c9b6567a7a8c441a4651444d = $f9a8823715bcb54e8069e0086da240b2['movie_id_nexists'];

$c2451e876e237dd5e001acccde7cae01 = b8a6ea05EeBC7e2E3503EA794B1a1eE4::$request['movie_id'];

$c2451e876e237dd5e001acccde7cae01 = false;

require (IPTV_TEMPLATES_PATH . '/' . 'header_admin.php');
require ('../init.php');

$Cb751d454bbedafaaec687ca76753225 = C8554Bb3D711c28F0B3F218090d08aEf();

switch ($b8980526936694b2cd4cf6c7f8c80396) {
case 'edit_movie':
	$d794e7d33713a4144330c582d3d37549 = array('s:' . $Ad8b4c3ad1c9b668c84775f0121858cc . ':' . $d794e7d33713a4144330c582d3d37549);

	$Ccc01a49a480ad4b98dc48415a5e29fa[] = $f9a8823715bcb54e8069e0086da240b2['custom_sid_error'];

	$b6a17446060f80bace9283c7433cdc0e['duration'] = $bf3cd6eed406072de08303c780a1f2cb->StreamInfo['movie_propeties']['duration'];

	$ccfb0709fcdc74e3e2b2f1baffef7612 = array(b8A6ea05eebC7E2e3503EA794b1a1Ee4::$request['movie_source']);

	$Fe46ea3f0409d3d0527fb9c91ceb3971 = b8A6EA05EebC7E2E3503eA794B1A1eE4::c293f8e3c1eB62b9A8Dde105A6AaE797();
	$e4c5b05e068599be7f279571d2e83103 = (!empty(B8A6ea05eEBc7e2E3503Ea794b1a1eE4::$request['remove_subtitles']) ? 1 : 0);

	foreach ($b8a701e181a78c523ef488605ed0de8b as $C4188eb5625baf4963cf95fd069d727b => $C18109cdc9326739096c21c5a0bacd0c) {
		if (!DbeB6a2D3FDF653c03c41185a9D463c0('streams_arguments', 'id', $C4188eb5625baf4963cf95fd069d727b)) {
		}

		if (!empty($C18109cdc9326739096c21c5a0bacd0c)) {
		}

		$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `streams_options` (`stream_id`,`argument_id`) VALUES(\'%d\',\'%d\')', $c2451e876e237dd5e001acccde7cae01, $C4188eb5625baf4963cf95fd069d727b);
		$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `streams_options` (`stream_id`,`argument_id`,`value`) VALUES(\'%d\',\'%d\',\'%s\');', $c2451e876e237dd5e001acccde7cae01, $C4188eb5625baf4963cf95fd069d727b, $C18109cdc9326739096c21c5a0bacd0c);
		$C18109cdc9326739096c21c5a0bacd0c = trim($C18109cdc9326739096c21c5a0bacd0c);
	}

	$Dcd66452e6a774b1c2f6f593028faacf = array_diff(array_keys($bf3cd6eed406072de08303c780a1f2cb->Servers), $cbd1495c69971e4de5dff882d5e4a2e2);
	$b6a17446060f80bace9283c7433cdc0e = (!empty(B8A6ea05eebc7e2e3503EA794b1a1ee4::$request['movie_propeties']) && is_array(B8A6eA05eebC7e2E3503ea794b1A1eE4::$request['movie_propeties']) ? b8A6Ea05EEBc7e2e3503ea794B1A1ee4::$request['movie_propeties'] : array());
	$Ad8b4c3ad1c9b668c84775f0121858cc = (!is_null($d794e7d33713a4144330c582d3d37549) && array_key_exists(B8A6Ea05EeBC7E2E3503EA794B1a1ee4::$request['subtitles_location'], b8A6EA05eEbC7e2E3503eA794b1a1ee4::$StreamingServers) ? intval(B8a6eA05EeBc7E2e3503Ea794B1a1eE4::$request['subtitles_location']) : NULL);
	$d809d303d29a0d6146e8aab0b246b018 = (($c9e7476d790f807f4774b6b88121522c == -1) && !empty(B8A6Ea05EEbC7E2E3503eA794b1A1eE4::$request['transcode_attributes']) && is_array(B8A6Ea05EEBc7e2e3503Ea794b1a1eE4::$request['transcode_attributes']) ? array_filter(B8A6EA05EeBC7e2E3503eA794B1A1EE4::$request['transcode_attributes']) : array());

	if (!is_array($b8a701e181a78c523ef488605ed0de8b)) {
	}

	if (empty(B8A6Ea05eEbc7E2E3503Ea794b1a1EE4::$request['arguments'])) {
	}

	foreach ($cbd1495c69971e4de5dff882d5e4a2e2 as $D4b0e4f302fed4c8918d703be778a967) {
		$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `streams_sys` (`stream_id`,`server_id`) VALUES(\'%d\',\'%d\')', $c2451e876e237dd5e001acccde7cae01, $D4b0e4f302fed4c8918d703be778a967);
	}

	$f568c89b199089f8840936400ea99a37 = ($c9e7476d790f807f4774b6b88121522c != 0 ? 1 : 0);
	$e04bbeb1bf923375b545a9273b5f3d23 = (!empty(b8A6ea05eEBc7e2E3503ea794B1a1ee4::$request['custom_sid']) ? B8a6ea05eeBc7E2E3503ea794B1A1ee4::$request['custom_sid'] : NULL);

	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['complete_fields'];

	foreach ($Dcd66452e6a774b1c2f6f593028faacf as $b2da0a9880932e47a18ba68b270ae9fa) {
		EF4BC8281856e815abEFa11052CAD2C6::Da17c8C79048F7a15c9f4d54669f4c07('stop', 'movie', 1, $c2451e876e237dd5e001acccde7cae01, $b2da0a9880932e47a18ba68b270ae9fa);
		$D29f3c5494cb370b46f3e907dc61f106->query('DELETE FROM `streams_sys` WHERE `server_id` = \'%d\' AND `stream_id` = \'%d\'', $b2da0a9880932e47a18ba68b270ae9fa, $c2451e876e237dd5e001acccde7cae01);
	}

	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['complete_fields'];

	$b6a17446060f80bace9283c7433cdc0e['duration_secs'] = $bf3cd6eed406072de08303c780a1f2cb->StreamInfo['movie_propeties']['duration_secs'];

	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['movie_edited'];
	$Ccc01a49a480ad4b98dc48415a5e29fa[] = str_replace('{stream_name}', $F1fb8ec67dfc4b401327d264935792fa, $f9a8823715bcb54e8069e0086da240b2['stream_exists']);

	$b8a701e181a78c523ef488605ed0de8b = B8a6ea05eebc7E2E3503EA794b1A1ee4::$request['arguments'];

	if (is_numeric($bd83f71a29c78179c9e81a9361581942)) {
	}

	$F1fb8ec67dfc4b401327d264935792fa = encodeToUtf8(B8A6Ea05eEbc7E2e3503ea794B1a1ee4::$request['movie_name']);

	$cbd1495c69971e4de5dff882d5e4a2e2 = array_map('intval', B8a6Ea05eeBc7E2e3503EA794b1A1Ee4::$request['load_balancer_servers']);
	$b9ebd49dfd14ee25a3e9ee7dd1ae4ae1 = intval(b8A6EA05eEbc7E2E3503ea794B1A1EE4::$request['target_container_id']);

	$bd83f71a29c78179c9e81a9361581942 = B8a6Ea05EEbc7E2E3503EA794B1a1EE4::$request['movie_location'];
	if ((is_numeric($bd83f71a29c78179c9e81a9361581942) && array_key_exists($bd83f71a29c78179c9e81a9361581942, B8A6eA05eEbc7e2e3503eA794b1A1eE4::$StreamingServers)) || ($bd83f71a29c78179c9e81a9361581942 == 'remote')) {
	}

	$D29f3c5494cb370b46f3e907dc61f106->query('DELETE FROM `streams_options` WHERE `stream_id` = \'%d\'', $c2451e876e237dd5e001acccde7cae01);

	$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `streams` SET `stream_display_name` = \'%s\',' . "\r\n" . '                                                                       `stream_source` = \'%s\',' . "\r\n" . '                                                                       `category_id` = %s,' . "\r\n" . '                                                                       `movie_propeties` = \'%s\',' . "\r\n" . '                                                                       `read_native` = \'%d\',' . "\r\n" . '                                                                       `target_container_id` = \'%d\',' . "\r\n" . '                                                                       `enable_transcode` = \'%d\',' . "\r\n" . '                                                                       `transcode_attributes` = \'%s\',' . "\r\n" . '                                                                       `custom_sid` = \'%s\',' . "\r\n" . '                                                                       `remove_subtitles` = \'%d\',' . "\r\n" . '                                                                       `transcode_profile_id` = \'%d\',' . "\r\n" . '                                                                       `movie_subtitles` = \'%s\'' . "\r\n" . '                                                                        WHERE `id` = \'%d\'', $F1fb8ec67dfc4b401327d264935792fa, json_encode($ccfb0709fcdc74e3e2b2f1baffef7612), $Df1ed0c24afddf3f97f29d7c950a45ef, json_encode($b6a17446060f80bace9283c7433cdc0e), $d7b71304b4435dc40f45b62964f7b42c, $b9ebd49dfd14ee25a3e9ee7dd1ae4ae1, $f568c89b199089f8840936400ea99a37, json_encode($d809d303d29a0d6146e8aab0b246b018), $e04bbeb1bf923375b545a9273b5f3d23, $e4c5b05e068599be7f279571d2e83103, $c9e7476d790f807f4774b6b88121522c, json_encode($d794e7d33713a4144330c582d3d37549), $c2451e876e237dd5e001acccde7cae01);
	$d794e7d33713a4144330c582d3d37549 = (!empty(b8A6ea05eeBC7E2E3503Ea794b1a1EE4::$request['movie_subtitles']) ? B8a6eA05eEbC7e2e3503Ea794B1A1Ee4::$request['movie_subtitles'] : NULL);
	if (empty($e04bbeb1bf923375b545a9273b5f3d23) || ((substr($e04bbeb1bf923375b545a9273b5f3d23, -1) == ':') && (substr($e04bbeb1bf923375b545a9273b5f3d23, 0, 1) == ':'))) {
	}

	$Df1ed0c24afddf3f97f29d7c950a45ef = (!empty(B8a6EA05eEbC7e2E3503eA794B1a1EE4::$request['category_id']) && DBeB6A2D3fDf653C03c41185a9d463C0('stream_categories', 'id', b8a6Ea05EeBC7E2E3503EA794B1a1Ee4::$request['category_id']) ? intval(B8A6eA05eeBc7e2e3503eA794B1a1Ee4::$request['category_id']) : 'NULL');
	$c9e7476d790f807f4774b6b88121522c = (empty(b8a6Ea05eEbc7e2e3503eA794B1a1eE4::$request['transcode_profile_id']) ? 0 : intval(b8A6ea05EEbC7E2E3503ea794b1A1ee4::$request['transcode_profile_id']));
	$ccfb0709fcdc74e3e2b2f1baffef7612 = array('s:' . $bd83f71a29c78179c9e81a9361581942 . ':' . B8A6ea05EEBC7e2e3503Ea794B1a1eE4::$request['movie_source']);
	$d7b71304b4435dc40f45b62964f7b42c = (!empty(B8a6Ea05EEBC7e2E3503ea794b1A1Ee4::$request['read_native']) ? 1 : 0);
	if ((0 < count(B8A6ea05EEbc7E2e3503ea794b1a1eE4::$request)) && !empty(b8A6eA05eEBc7e2e3503ea794b1a1EE4::$request['load_balancer_servers']) && is_array(b8a6EA05eeBC7e2e3503eA794b1a1ee4::$request['load_balancer_servers']) && !empty(B8a6ea05EeBc7E2e3503EA794B1a1eE4::$request['target_container_id']) && !empty(B8a6EA05eEBc7E2e3503ea794b1a1EE4::$request['movie_name'])) {
	}

	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['licence_invalid'];
default:
	require (IPTV_TEMPLATES_PATH . '/' . '/admin/' . 'edit_movie.php');
	require (IPTV_TEMPLATES_PATH . '/' . 'footer.php');
	$c8b64aa7c0205b19247dc67d89e911dd = (empty($c8b64aa7c0205b19247dc67d89e911dd) ? B8A6Ea05EEbC7E2e3503ea794B1a1ee4::C293F8E3c1eB62b9A8DDE105a6aAe797($bf3cd6eed406072de08303c780a1f2cb->StreamArguments, false) : $c8b64aa7c0205b19247dc67d89e911dd);
	$ec2d9106046948d5bd4541355199b985 = (empty($ec2d9106046948d5bd4541355199b985) ? f6aCbDF515c1e5F84c3209c7FaA09641('movie') : $ec2d9106046948d5bd4541355199b985);

	if (!dbeb6A2D3fdf653C03C41185A9D463C0('streams', 'id', $c2451e876e237dd5e001acccde7cae01)) {
	}

	$Fce20624c9b6567a7a8c441a4651444d = $f9a8823715bcb54e8069e0086da240b2['select_movie_edit'];

	$d71e92a61c320b29f4d471c3d2e1590e = cD3712bAF499A597ca98507A158C394b();
	$c8b64aa7c0205b19247dc67d89e911dd = (empty($c8b64aa7c0205b19247dc67d89e911dd) ? b8A6ea05EeBc7E2e3503eA794b1a1ee4::c293F8e3c1eB62B9A8DdE105A6aAE797($bf3cd6eed406072de08303c780a1f2cb->StreamArguments, false) : $c8b64aa7c0205b19247dc67d89e911dd);
	if (!empty(B8a6EA05eEBc7e2e3503ea794B1a1EE4::$request['movie_id']) && is_numeric(b8A6Ea05EEBC7E2E3503eA794B1A1eE4::$request['movie_id'])) {
	}

	$b8980526936694b2cd4cf6c7f8c80396 = B8a6ea05EEBC7e2e3503eA794b1A1EE4::$request['action'];

	exit(0);

	session_start();

	unset(b8A6ea05eeBc7E2E3503Ea794b1a1Ee4::$request['action']);
	header('Location: ../index.php?error=NO_ADMIN');
	$bf3cd6eed406072de08303c780a1f2cb = new Ef4bc8281856E815ABEfA11052CaD2C6($c2451e876e237dd5e001acccde7cae01);
}

?> 

<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

$c8b64aa7c0205b19247dc67d89e911dd = (empty($c8b64aa7c0205b19247dc67d89e911dd) ? B8a6ea05eeBc7e2e3503Ea794b1a1Ee4::c293f8E3c1eb62B9A8dDE105A6Aae797() : $c8b64aa7c0205b19247dc67d89e911dd);

switch ($b8980526936694b2cd4cf6c7f8c80396) {
case 'save':
	$D29f3c5494cb370b46f3e907dc61f106->query('DELETE FROM `streams_options` WHERE `stream_id` IN(' . implode(',', $afb117253402f5d1957e616d762699e2) . ') AND `argument_id` IN(' . implode(',', $Afe3af68361d7d62993e613e0109a21e) . ')');
	$Ba334bd0269d0bf2cbae85c372f0f238 = (empty(B8A6EA05eEbc7e2e3503eA794B1A1ee4::$request['restart_streams']) ? 0 : 1);

	$e5ca8b7eddea2c44033d6ef108fdd1f2 = b8A6eA05eeBC7e2e3503EA794B1A1ee4::$request['gen_pts'];
	foreach ($cbd1495c69971e4de5dff882d5e4a2e2 as $c19f4324c4b2e7e93dbef2e24f23bcc7) {
		if (!array_key_exists($E6412230eeb5a4348cc57a7876286e4a['id'], B8a6eA05EEBC7E2e3503EA794b1a1eE4::$StreamingServers)) {
		}

		$dae5e59e7b45efe5e04ced6d8ac3b2a5[$E6412230eeb5a4348cc57a7876286e4a['id']] = $E6412230eeb5a4348cc57a7876286e4a['parent_id'];
		parse_str($c19f4324c4b2e7e93dbef2e24f23bcc7, &$E6412230eeb5a4348cc57a7876286e4a);
	}

	$cbd1495c69971e4de5dff882d5e4a2e2 = (!empty(B8a6eA05EEbc7e2E3503eA794b1a1Ee4::$request['load_balancer_servers']) && is_array(b8a6Ea05EebC7E2e3503Ea794B1a1EE4::$request['load_balancer_servers']) ? b8a6eA05eEbC7e2e3503EA794B1a1Ee4::$request['load_balancer_servers'] : array());
	$b8a701e181a78c523ef488605ed0de8b = (!is_array(B8A6eA05eebc7E2E3503EA794b1a1eE4::$request['arguments']) ? array() : b8a6ea05EEbC7E2e3503ea794B1a1Ee4::$request['arguments']);

	foreach ($afb117253402f5d1957e616d762699e2 as $fe6d74fc2aef3103f2d8d34d9ac82807) {
		$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `streams` SET `read_native` = 1 WHERE `id` = \'%d\'', $fe6d74fc2aef3103f2d8d34d9ac82807);
		if ($Df1ed0c24afddf3f97f29d7c950a45ef == 0) {
		}

		if (!($c9e7476d790f807f4774b6b88121522c != -2)) {
		}

		$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `streams` SET `auto_restart` = \'%d\' WHERE `id` = \'%d\'', $Ef010245f48859607396a9fd1485b0d0, $fe6d74fc2aef3103f2d8d34d9ac82807);
		if (!(0 <= $Df1ed0c24afddf3f97f29d7c950a45ef)) {
		}

		$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `streams` SET `enable_transcode` = 1,`transcode_attributes` = \'%s\',`transcode_profile_id` = \'%d\' WHERE `id` = \'%d\'', json_encode($d809d303d29a0d6146e8aab0b246b018), $c9e7476d790f807f4774b6b88121522c, $fe6d74fc2aef3103f2d8d34d9ac82807);

		$Dcd66452e6a774b1c2f6f593028faacf = array_diff(array_keys($fddadf41a14b6b579869ce8bf26aabea['streams'][$fe6d74fc2aef3103f2d8d34d9ac82807]['servers']), array_keys($dae5e59e7b45efe5e04ced6d8ac3b2a5));
		foreach ($b8a701e181a78c523ef488605ed0de8b as $C4188eb5625baf4963cf95fd069d727b => $C18109cdc9326739096c21c5a0bacd0c) {
			$D29f3c5494cb370b46f3e907dc61f106->query('DELETE FROM `streams_options` WHERE `stream_id` = \'%d\' AND `argument_id` = \'%d\'', $fe6d74fc2aef3103f2d8d34d9ac82807, $C4188eb5625baf4963cf95fd069d727b);
			$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `streams_options` (`stream_id`,`argument_id`) VALUES(\'%d\',\'%d\')', $fe6d74fc2aef3103f2d8d34d9ac82807, $C4188eb5625baf4963cf95fd069d727b);
			$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `streams_options` (`stream_id`,`argument_id`,`value`) VALUES(\'%d\',\'%d\',\'%s\');', $fe6d74fc2aef3103f2d8d34d9ac82807, $C4188eb5625baf4963cf95fd069d727b, $C18109cdc9326739096c21c5a0bacd0c);

			$C18109cdc9326739096c21c5a0bacd0c = trim($C18109cdc9326739096c21c5a0bacd0c);
		}

		foreach ($Dcd66452e6a774b1c2f6f593028faacf as $b2da0a9880932e47a18ba68b270ae9fa) {
			Ef4bC8281856e815abefA11052caD2c6::da17C8c79048f7A15c9F4d54669F4C07('stop', 'live', 0, $fe6d74fc2aef3103f2d8d34d9ac82807, $b2da0a9880932e47a18ba68b270ae9fa);
			$D29f3c5494cb370b46f3e907dc61f106->query('DELETE FROM `streams_sys` WHERE `server_id` = \'%d\' AND `stream_id` = \'%d\'', $b2da0a9880932e47a18ba68b270ae9fa, $fe6d74fc2aef3103f2d8d34d9ac82807);
		}

		$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `streams` SET `stream_all` = 1 WHERE `id` = \'%d\'', $fe6d74fc2aef3103f2d8d34d9ac82807);

		$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `streams` SET `enable_transcode` = 0,`transcode_attributes` = \'%s\',`transcode_profile_id` = \'%d\' WHERE `id` = \'%d\'', json_encode(array()), $c9e7476d790f807f4774b6b88121522c, $fe6d74fc2aef3103f2d8d34d9ac82807);
		$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `streams` SET `gen_pts` = 0 WHERE `id` = \'%d\'', $fe6d74fc2aef3103f2d8d34d9ac82807);

		$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `streams` SET `category_id` = NULL WHERE `id` = \'%d\'', $fe6d74fc2aef3103f2d8d34d9ac82807);

		if (0 < $d7b71304b4435dc40f45b62964f7b42c) {
		}

		while (0 < $e5ca8b7eddea2c44033d6ef108fdd1f2) {
		}

		$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `streams` SET `stream_all` = 0 WHERE `id` = \'%d\'', $fe6d74fc2aef3103f2d8d34d9ac82807);
		$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `streams` SET `read_native` = 0 WHERE `id` = \'%d\'', $fe6d74fc2aef3103f2d8d34d9ac82807);

		$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `streams` SET `category_id` = \'%d\' WHERE `id` = \'%d\'', $Df1ed0c24afddf3f97f29d7c950a45ef, $fe6d74fc2aef3103f2d8d34d9ac82807);

		if (empty($dae5e59e7b45efe5e04ced6d8ac3b2a5)) {
		}

		if ($Cd3b8454f4eabd39c17442e2c518a33c == 0) {
		}

		if (0 < $Cd3b8454f4eabd39c17442e2c518a33c) {
		}

		eF4bC8281856e815abeFa11052Cad2C6::da17c8c79048f7a15C9f4D54669F4c07('start', 'live', 0, $fe6d74fc2aef3103f2d8d34d9ac82807);

		foreach ($dae5e59e7b45efe5e04ced6d8ac3b2a5 as $D4b0e4f302fed4c8918d703be778a967 => $Ed0da8a115c56d3e1e526723a7954682) {
			$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `streams_sys` (`stream_id`,`server_id`,`parent_id`) VALUES(\'%d\',\'%d\',\'%d\')', $fe6d74fc2aef3103f2d8d34d9ac82807, $D4b0e4f302fed4c8918d703be778a967, $Ed0da8a115c56d3e1e526723a7954682);

			$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `streams_sys` SET `parent_id` = \'%d\' WHERE `stream_id` = \'%d\' AND `server_id` = \'%d\'', $Ed0da8a115c56d3e1e526723a7954682, $fe6d74fc2aef3103f2d8d34d9ac82807, $D4b0e4f302fed4c8918d703be778a967);

			if (array_key_exists($D4b0e4f302fed4c8918d703be778a967, $fddadf41a14b6b579869ce8bf26aabea['streams'][$fe6d74fc2aef3103f2d8d34d9ac82807]['servers'])) {
			}

		}

		$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `streams` SET `gen_pts` = 1 WHERE `id` = \'%d\'', $fe6d74fc2aef3103f2d8d34d9ac82807);
	}

	$afb117253402f5d1957e616d762699e2 = array_map('intval', $afb117253402f5d1957e616d762699e2);

	if (empty($Afe3af68361d7d62993e613e0109a21e)) {
	}

	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['stream_edited'];
	$d809d303d29a0d6146e8aab0b246b018 = (($c9e7476d790f807f4774b6b88121522c == -1) && !empty(b8a6ea05eEbc7E2E3503EA794b1a1EE4::$request['transcode_attributes']) && is_array(B8A6Ea05eeBc7E2e3503eA794b1a1EE4::$request['transcode_attributes']) ? array_filter(b8A6EA05eEBc7E2E3503ea794B1a1EE4::$request['transcode_attributes']) : array());
	$f568c89b199089f8840936400ea99a37 = ((0 < $c9e7476d790f807f4774b6b88121522c) || ($c9e7476d790f807f4774b6b88121522c == -1) ? 1 : 0);
	$c9e7476d790f807f4774b6b88121522c = (empty(b8a6ea05EebC7E2E3503EA794B1A1eE4::$request['transcode_profile_id']) ? 0 : intval(b8A6eA05eEBc7E2E3503ea794b1A1EE4::$request['transcode_profile_id']));

	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['no_restart_found'];
	$Ef010245f48859607396a9fd1485b0d0 = (!is_numeric(B8a6EA05eEBC7e2e3503eA794B1a1eE4::$request['auto_restart']) ? 0 : intval(b8a6EA05EEbc7E2E3503Ea794B1A1eE4::$request['auto_restart']));

	$afb117253402f5d1957e616d762699e2 = B8A6Ea05eEBc7e2E3503Ea794b1A1eE4::$request['streams'];
	$Afe3af68361d7d62993e613e0109a21e = (!is_array(@b8a6Ea05eEBc7E2E3503ea794B1a1Ee4::$request['arguments_remove']) ? array() : array_map('intval', array_keys(B8A6EA05eEbc7e2e3503EA794B1A1EE4::$request['arguments_remove'])));
	$Df1ed0c24afddf3f97f29d7c950a45ef = intval(b8A6EA05EEBC7e2e3503ea794b1A1eE4::$request['category_id']);

	$d7b71304b4435dc40f45b62964f7b42c = intval(B8a6ea05EEBc7E2e3503ea794B1A1eE4::$request['read_native']);

	if (!is_array($afb117253402f5d1957e616d762699e2)) {
	}

	$dae5e59e7b45efe5e04ced6d8ac3b2a5 = array();
	$Cd3b8454f4eabd39c17442e2c518a33c = intval(B8a6ea05eebc7E2E3503Ea794B1A1ee4::$request['stream_all']);
	$fddadf41a14b6b579869ce8bf26aabea = aA36a3Fa6E305e45763Ca0722ddFA825('live', 'id', 'DESC', true);
default:
	$fddadf41a14b6b579869ce8bf26aabea = AA36A3fa6E305E45763Ca0722dDFA825('live', 'order', 'ASC');

	header('Location: ../index.php?error=NO_ADMIN');

	$b8980526936694b2cd4cf6c7f8c80396 = b8a6EA05EeBC7e2e3503eA794b1a1eE4::$request['action'];

	$Fce20624c9b6567a7a8c441a4651444d = $f9a8823715bcb54e8069e0086da240b2['create_stream_first_mass'];

	exit(0);

	require ('../init.php');
	if ($c83b7d347a6bc7f5f0e3313147e88ecc->cb674E1c9BBdb0E29Ad2A7A35964aE35()) {
	}
	else {
	}
default:
	$ec2d9106046948d5bd4541355199b985 = (empty($ec2d9106046948d5bd4541355199b985) ? f6ACBDf515c1E5F84c3209c7faA09641('live') : $ec2d9106046948d5bd4541355199b985);
	session_start();

	$c83b7d347a6bc7f5f0e3313147e88ecc->fa7E9fB747Dd7976dd94eA27fA865B5D();
	require (IPTV_TEMPLATES_PATH . '/' . 'footer.php');

	require (IPTV_TEMPLATES_PATH . '/' . 'header_admin.php');
	require (IPTV_TEMPLATES_PATH . '/' . '/admin/' . 'mass_sedits.php');
default:
default:
	$cdbed4b98ae3b7fffd90a40205ff47fe = A912BF58e557078ea9D74f24c45De89f();
	unset(B8A6eA05EebC7E2e3503Ea794B1A1Ee4::$request['action']);
default:
}

?> 

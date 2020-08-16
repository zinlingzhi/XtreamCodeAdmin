<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

$cdbed4b98ae3b7fffd90a40205ff47fe = A912BF58E557078EA9D74f24c45DE89f();

require (IPTV_TEMPLATES_PATH . '/' . 'footer.php');

$b8980526936694b2cd4cf6c7f8c80396 = b8A6eA05EEBc7E2e3503ea794B1A1ee4::$request['action'];


session_start();

unset(b8A6eA05EEbC7e2e3503ea794b1a1EE4::$request['action']);

switch ($b8980526936694b2cd4cf6c7f8c80396) {
default:
	require (IPTV_TEMPLATES_PATH . '/' . '/admin/' . 'add_stream.php');

	require (IPTV_TEMPLATES_PATH . '/' . 'header_admin.php');
	require ('../init.php');
	$c8b64aa7c0205b19247dc67d89e911dd = (empty($c8b64aa7c0205b19247dc67d89e911dd) ? b8a6EA05EebC7E2e3503EA794b1A1Ee4::C293F8e3C1eB62b9A8dde105A6AAE797() : $c8b64aa7c0205b19247dc67d89e911dd);

	exit(0);

	while (!isset(b8a6eA05eebC7e2e3503eA794B1a1EE4::$request['action'])) {
	}

	$ec2d9106046948d5bd4541355199b985 = (empty($ec2d9106046948d5bd4541355199b985) ? f6AcbDF515c1E5F84c3209c7Faa09641('live') : $ec2d9106046948d5bd4541355199b985);
case 'getEPGlangs':
	exit();
	$a845ac42cac3bca799bdc0eb0fe5a0b5 = intval(b8A6Ea05EEBC7E2e3503EA794B1A1ee4::$request['epg_id']);

	$F886c344ea4bef6b60deb8e507410faa = new Fcaa74214E9e33ED3F81dD59834BAB88($F88c0acc648089e9b407501dcd8be7f0['epg_file']);

	$bdeb9831adc6aedfa4fbc054067d079d = B8A6EA05EEBC7E2E3503eA794b1a1Ee4::$request['channel_id'];

	$D370a4beed344093ca0bb87d8ce193d6 = $F886c344ea4bef6b60deb8e507410faa->fcB0EE7A1CB2d76238d962d241ecbA68($bdeb9831adc6aedfa4fbc054067d079d);

	$D370a4beed344093ca0bb87d8ce193d6 = array();

	if (!$F886c344ea4bef6b60deb8e507410faa->validEpg) {
	}

	$F88c0acc648089e9b407501dcd8be7f0 = f3C65bf8bC2f20357B49FF18448aB606($a845ac42cac3bca799bdc0eb0fe5a0b5);
	if (!(!empty(b8A6Ea05eEBc7e2E3503ea794B1A1eE4::$request['epg_id']) && !empty(b8A6eA05EEBC7E2E3503EA794B1a1Ee4::$request['channel_id']))) {
	}

	echo json_encode($D370a4beed344093ca0bb87d8ce193d6);
case 'getChannelsIDsEPG':
	echo json_encode($Fd6da8e196ea50156d3046911cc82815);

	$F886c344ea4bef6b60deb8e507410faa = new fCAa74214E9e33ED3F81dd59834BaB88($F88c0acc648089e9b407501dcd8be7f0['epg_file']);
	if (!$F886c344ea4bef6b60deb8e507410faa->validEpg) {
	}

	$Fd6da8e196ea50156d3046911cc82815 = array();

	$Fd6da8e196ea50156d3046911cc82815 = $F886c344ea4bef6b60deb8e507410faa->F9eA35E4D3B08de7c2603A5AcB88774b();
	exit();

	if (empty($F88c0acc648089e9b407501dcd8be7f0)) {
	}

	$a845ac42cac3bca799bdc0eb0fe5a0b5 = intval(b8A6Ea05EebC7E2e3503ea794b1A1Ee4::$request['epg_id']);
	$F88c0acc648089e9b407501dcd8be7f0 = f3C65BF8bC2F20357B49FF18448ab606($a845ac42cac3bca799bdc0eb0fe5a0b5);
case 'checkCodecs':
	echo json_encode(array());
	if ($Fc39300f84cb6542fe99d834a6df85a8 = Dfa6500b681f783bBbCb94474366Bb27::D89fb423E75Bb540aA3DA784AfF27c85($C63435555732fef7929084e252ed20b8)) {
	}

	$C63435555732fef7929084e252ed20b8 = urldecode(base64_decode(B8a6Ea05EeBC7e2E3503EA794B1a1EE4::$request['url']));

	exit();

	echo json_encode($Fc39300f84cb6542fe99d834a6df85a8);
case 'add_stream':
	$Ccc01a49a480ad4b98dc48415a5e29fa = array();
	$fddadf41a14b6b579869ce8bf26aabea = array();

	switch ($a0e510f12386604aef864c0c65fa8433) {
	default:
		$d809d303d29a0d6146e8aab0b246b018 = (($c9e7476d790f807f4774b6b88121522c == -1) && !empty(b8A6EA05EeBc7e2e3503ea794b1A1eE4::$request['transcode_attributes']) && is_array(B8A6ea05eebc7E2e3503eA794B1a1eE4::$request['transcode_attributes']) ? array_filter(B8a6EA05eebc7e2e3503ea794B1A1ee4::$request['transcode_attributes']) : array());

		foreach ($fddadf41a14b6b579869ce8bf26aabea as $C4cd3c532766969bab35abc978dcc44c => $C482b3deefc0fa0fd68df2034dabe55a) {
			$B55f78703213d1595283266f835ca867[] = str_replace('{stream_name}', $C4cd3c532766969bab35abc978dcc44c, $f9a8823715bcb54e8069e0086da240b2['stream_added']);

			$b8a701e181a78c523ef488605ed0de8b = b8a6eA05eEbC7e2e3503ea794B1a1ee4::$request['arguments'];

			$Ccc01a49a480ad4b98dc48415a5e29fa[] = str_replace('{stream_name}', $C4cd3c532766969bab35abc978dcc44c, $f9a8823715bcb54e8069e0086da240b2['stream_exists']);
			$C4cd3c532766969bab35abc978dcc44c = encodeToUtf8($C4cd3c532766969bab35abc978dcc44c);

			$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `streams` (`type`,`category_id`,`stream_display_name`,`stream_source`,`stream_icon`,`notes`,`enable_transcode`,`transcode_attributes`,`custom_ffmpeg`,`read_native`,`stream_all`,`epg_id`,`channel_id`,`epg_lang`,`custom_sid`,`auto_restart`,`gen_pts`,`transcode_profile_id`,`added`) VALUES(1,%s,\'%s\',\'%s\',\'%s\',\'%s\',\'%d\',\'%s\',\'%s\',\'%d\',\'%d\',\'%d\',\'%s\',\'%s\',\'%s\',\'%d\',\'%d\',\'%d\',\'%d\')', $Df1ed0c24afddf3f97f29d7c950a45ef, $C4cd3c532766969bab35abc978dcc44c, $C482b3deefc0fa0fd68df2034dabe55a, $b46875bbe2b4244eb0849b98b76d4e3c, $D77af068b5dcf27a4945e91c2df88d68, $f568c89b199089f8840936400ea99a37, json_encode($d809d303d29a0d6146e8aab0b246b018), $F966b8cfafae97e693fb748f41d3f717, $d7b71304b4435dc40f45b62964f7b42c, $Cd3b8454f4eabd39c17442e2c518a33c, $a845ac42cac3bca799bdc0eb0fe5a0b5, $bdeb9831adc6aedfa4fbc054067d079d, $C2d39c92718dfba57d43d6049ba73b21, $e04bbeb1bf923375b545a9273b5f3d23, $Ef010245f48859607396a9fd1485b0d0, $e5ca8b7eddea2c44033d6ef108fdd1f2, $c9e7476d790f807f4774b6b88121522c, time());

			$Ccc01a49a480ad4b98dc48415a5e29fa[] = $f9a8823715bcb54e8069e0086da240b2['custom_sid_error'];
			$F9b1bf785602d9db91ce4a6faff79ea0 = $D29f3c5494cb370b46f3e907dc61f106->F1B4b6779C28f4Ad97A35E4A54fd0416();

			foreach ($dae5e59e7b45efe5e04ced6d8ac3b2a5 as $D4b0e4f302fed4c8918d703be778a967 => $Ed0da8a115c56d3e1e526723a7954682) {
				$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `streams_sys` (`stream_id`,`server_id`,`parent_id`) VALUES(\'%d\',\'%d\',\'%d\')', $F9b1bf785602d9db91ce4a6faff79ea0, $D4b0e4f302fed4c8918d703be778a967, $Ed0da8a115c56d3e1e526723a7954682);
			}

			foreach ($b8a701e181a78c523ef488605ed0de8b as $C4188eb5625baf4963cf95fd069d727b => $C18109cdc9326739096c21c5a0bacd0c) {
				$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `streams_options` (`stream_id`,`argument_id`,`value`) VALUES(\'%d\',\'%d\',\'%s\');', $F9b1bf785602d9db91ce4a6faff79ea0, $C4188eb5625baf4963cf95fd069d727b, $C18109cdc9326739096c21c5a0bacd0c);
				$C18109cdc9326739096c21c5a0bacd0c = trim($C18109cdc9326739096c21c5a0bacd0c);
				if (!(empty($C18109cdc9326739096c21c5a0bacd0c) && !is_numeric($C18109cdc9326739096c21c5a0bacd0c))) {
				}

				if (!(($c8b64aa7c0205b19247dc67d89e911dd[$C4188eb5625baf4963cf95fd069d727b]['argument_type'] == 'radio') && (0 < $C18109cdc9326739096c21c5a0bacd0c))) {
				}

				$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `streams_options` (`stream_id`,`argument_id`) VALUES(\'%d\',\'%d\')', $F9b1bf785602d9db91ce4a6faff79ea0, $C4188eb5625baf4963cf95fd069d727b);

				if (!dBEb6A2D3FdF653C03C41185a9d463C0('streams_arguments', 'id', $C4188eb5625baf4963cf95fd069d727b)) {
				}

			}

			$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `streams` (`type`,`category_id`,`stream_display_name`,`stream_source`,`stream_icon`,`notes`,`enable_transcode`,`transcode_attributes`,`custom_ffmpeg`,`read_native`,`stream_all`,`custom_sid`,`auto_restart`,`gen_pts`,`transcode_profile_id`,`added`) VALUES(1,%s,\'%s\',\'%s\',\'%s\',\'%s\',\'%d\',\'%s\',\'%s\',\'%d\',\'%d\',\'%s\',\'%d\',\'%d\',\'%d\',\'%d\')', $Df1ed0c24afddf3f97f29d7c950a45ef, $C4cd3c532766969bab35abc978dcc44c, $C482b3deefc0fa0fd68df2034dabe55a, $b46875bbe2b4244eb0849b98b76d4e3c, $D77af068b5dcf27a4945e91c2df88d68, $f568c89b199089f8840936400ea99a37, json_encode($d809d303d29a0d6146e8aab0b246b018), $F966b8cfafae97e693fb748f41d3f717, $d7b71304b4435dc40f45b62964f7b42c, $Cd3b8454f4eabd39c17442e2c518a33c, $e04bbeb1bf923375b545a9273b5f3d23, $Ef010245f48859607396a9fd1485b0d0, $e5ca8b7eddea2c44033d6ef108fdd1f2, $c9e7476d790f807f4774b6b88121522c, time());

			if ($bdeb9831adc6aedfa4fbc054067d079d === false) {
			}

		}

		$C2d39c92718dfba57d43d6049ba73b21 = (($bdeb9831adc6aedfa4fbc054067d079d !== false) && !empty(B8A6ea05EEbc7E2e3503EA794b1a1eE4::$request['epg_lang']) ? b8a6eA05EebC7E2E3503eA794b1A1eE4::$request['epg_lang'] : false);
		$F966b8cfafae97e693fb748f41d3f717 = (!empty(b8A6ea05EEbC7E2E3503ea794B1a1Ee4::$request['custom_ffmpeg']) ? b8A6Ea05eEBc7e2e3503ea794B1a1EE4::$request['custom_ffmpeg'] : '');
		$c9e7476d790f807f4774b6b88121522c = (empty(b8a6Ea05EEbC7e2E3503eA794B1A1EE4::$request['transcode_profile_id']) ? 0 : intval(b8A6EA05Eebc7e2e3503Ea794b1A1eE4::$request['transcode_profile_id']));
		$d7b71304b4435dc40f45b62964f7b42c = (!empty(B8A6ea05eebC7E2E3503Ea794B1A1ee4::$request['read_native']) ? 1 : 0);
		$Ef010245f48859607396a9fd1485b0d0 = (!empty(b8A6EA05eeBC7E2E3503eA794B1a1Ee4::$request['auto_restart']) ? intval(B8A6ea05EEBc7e2e3503Ea794b1A1Ee4::$request['auto_restart']) : 0);
		$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['licence_invalid'];
		$e5ca8b7eddea2c44033d6ef108fdd1f2 = (!empty(b8A6Ea05EebC7E2e3503EA794B1A1Ee4::$request['gen_pts']) ? 1 : 0);
		$f568c89b199089f8840936400ea99a37 = ($c9e7476d790f807f4774b6b88121522c != 0 ? 1 : 0);

		if (!empty($dae5e59e7b45efe5e04ced6d8ac3b2a5)) {
		}

		$bdeb9831adc6aedfa4fbc054067d079d = (($a845ac42cac3bca799bdc0eb0fe5a0b5 !== false) && !empty(B8A6EA05EEBc7e2e3503ea794b1a1eE4::$request['channel_id']) ? B8a6EA05eEbC7E2E3503EA794B1A1EE4::$request['channel_id'] : false);

		$B55f78703213d1595283266f835ca867 = array();
		$D77af068b5dcf27a4945e91c2df88d68 = (!empty(B8a6EA05EebC7E2e3503ea794B1A1EE4::$request['notes']) ? trim(B8A6EA05eeBC7E2E3503Ea794b1a1EE4::$request['notes']) : '');

		foreach ($cbd1495c69971e4de5dff882d5e4a2e2 as $c19f4324c4b2e7e93dbef2e24f23bcc7) {
			parse_str($c19f4324c4b2e7e93dbef2e24f23bcc7, &$E6412230eeb5a4348cc57a7876286e4a);

			$dae5e59e7b45efe5e04ced6d8ac3b2a5[$E6412230eeb5a4348cc57a7876286e4a['id']] = $E6412230eeb5a4348cc57a7876286e4a['parent_id'];

			while (!array_key_exists($E6412230eeb5a4348cc57a7876286e4a['id'], B8A6ea05eEbc7E2E3503ea794B1A1eE4::$StreamingServers)) {
			}

		}

		$cbd1495c69971e4de5dff882d5e4a2e2 = b8a6Ea05eeBC7e2E3503eA794b1a1EE4::$request['load_balancer_servers'];
		$dae5e59e7b45efe5e04ced6d8ac3b2a5 = array();
		$Df1ed0c24afddf3f97f29d7c950a45ef = (!empty(b8a6ea05eEBC7E2E3503Ea794B1A1Ee4::$request['category_id']) && dBeb6a2D3fDF653c03C41185a9d463c0('stream_categories', 'id', B8a6eA05EEbC7e2e3503EA794b1a1EE4::$request['category_id']) ? intval(B8A6Ea05eebC7E2e3503Ea794b1A1ee4::$request['category_id']) : 'NULL');

		$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['complete_fields'];
		$Cd3b8454f4eabd39c17442e2c518a33c = (!empty(B8A6EA05EebC7e2e3503eA794B1a1eE4::$request['stream_all']) ? 1 : 0);
		$a0e510f12386604aef864c0c65fa8433 = intval(b8a6eA05EeBC7e2E3503ea794B1A1ee4::$request['type']);
		$a845ac42cac3bca799bdc0eb0fe5a0b5 = (!empty(b8a6Ea05EeBC7E2E3503ea794b1a1Ee4::$request['epg_id']) && dBeB6A2D3FDF653C03C41185A9d463c0('epg', 'id', b8a6eA05EEbc7e2E3503Ea794B1A1ee4::$request['epg_id']) ? intval(b8a6ea05EEbc7E2e3503Ea794B1a1EE4::$request['epg_id']) : false);
		$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['complete_fields'];
		$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['no_stream_import'];
		$b46875bbe2b4244eb0849b98b76d4e3c = (!empty(B8a6eA05EEBc7e2E3503Ea794B1a1ee4::$request['stream_icon']) ? trim(B8a6EA05eEbc7e2e3503eA794B1A1Ee4::$request['stream_icon']) : '');
		$e04bbeb1bf923375b545a9273b5f3d23 = (!empty(b8a6ea05eebc7e2e3503EA794b1a1EE4::$request['custom_sid']) ? b8A6eA05eebc7E2E3503Ea794b1a1eE4::$request['custom_sid'] : NULL);
	case 1:
		$C482b3deefc0fa0fd68df2034dabe55a = B8A6eA05EeBc7e2e3503Ea794B1A1ee4::$request['stream_source'];
		$fddadf41a14b6b579869ce8bf26aabea[$C4cd3c532766969bab35abc978dcc44c] = json_encode(array_values(array_unique(B8A6ea05EEbC7E2E3503EA794B1a1EE4::$request['stream_source'])));
		$C4cd3c532766969bab35abc978dcc44c = B8A6EA05Eebc7E2e3503Ea794B1a1eE4::$request['stream_display_name'];
	case 2:
		$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['partially_upload'];

		if ($error == 6) {
		}

		if ($error == 7) {
		}

		$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['upload_size'];

		$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['temp_missing'];
		$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['no_write'];

		$fddadf41a14b6b579869ce8bf26aabea = DFa6500B681F783BBbCb94474366bB27::C557a1983c8950e931a069F7f849aB1A($_FILES['stream_list']['tmp_name']);

		if ($error == 3) {
		}

		$error = $_FILES['stream_list']['error'];
		while (!(!empty($_FILES) && isset($_FILES['stream_list']))) {
		}

	}
default:
}


?> 

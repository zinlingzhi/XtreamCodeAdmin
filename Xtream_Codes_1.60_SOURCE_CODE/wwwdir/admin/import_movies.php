<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

unset(B8A6ea05eeBc7e2e3503ea794B1a1EE4::$request['action']);

switch ($b8980526936694b2cd4cf6c7f8c80396) {
default:
	$Fce20624c9b6567a7a8c441a4651444d = 'You can\'t add Movies to DEMO Version';
	exit(0);

	require (IPTV_TEMPLATES_PATH . '/' . 'footer.php');

	header('Location: ../index.php?error=NO_ADMIN');
	$Cb751d454bbedafaaec687ca76753225 = C8554bB3d711C28f0b3F218090D08aef();
	require (IPTV_TEMPLATES_PATH . '/' . 'header_admin.php');
case 'getMovies':
	$C0370129ae871d899244eaf1c9fed218 = C7F23f8AFE7637CDBc24B271c7BB2213::f6022C79Efd7636bc9AE3d0259B1891E($D4b0e4f302fed4c8918d703be778a967, $b8a56c16d1b9faacf5fd3f6719106134, 'array');
	$C32b337083c8f362641110c10eb28a9f = strtolower(pathinfo($b92538c6a6973ab3f4f2e16af4d1f415, PATHINFO_EXTENSION));

	$cd17d291b2e480e04467ffc8c8f973d5 = array('mkv', 'flv', 'mov', 'qt', 'mpg', 'mpeg', 'mpv2', 'mpe', 'mpa', 'mp2', 'mp4', 'asf', 'asr', 'asx', 'avi');
	exit();

	$E462799f3069e7fcda3f70674d9b5915 = array();

	foreach ($C0370129ae871d899244eaf1c9fed218[$D4b0e4f302fed4c8918d703be778a967] as $d5916bd99da02f303ef1b31c2d5b9bd2) {
		$E462799f3069e7fcda3f70674d9b5915[] = $d5916bd99da02f303ef1b31c2d5b9bd2;
	}

	$b8a56c16d1b9faacf5fd3f6719106134 = 'find ' . $b92538c6a6973ab3f4f2e16af4d1f415 . '  -maxdepth 2 -mindepth 1 -type f';
	echo json_encode($E462799f3069e7fcda3f70674d9b5915);

	foreach ($cd17d291b2e480e04467ffc8c8f973d5 as $C32b337083c8f362641110c10eb28a9f) {
		$b8a56c16d1b9faacf5fd3f6719106134 .= ' -name *.' . $C32b337083c8f362641110c10eb28a9f . ' -o';
	}

	if (!preg_match_all('/<a href="(.*?)">/', $E3ccc8cbd05e9b759bf9b28d98864c60, $A6c06ff80dcbe41b0782fd4b9170e835)) {
	}

	foreach ($A6c06ff80dcbe41b0782fd4b9170e835[1] as $aa646568bb8ba5e796a2b14c0da5156c) {
		$C32b337083c8f362641110c10eb28a9f = strtolower(pathinfo($aa646568bb8ba5e796a2b14c0da5156c, PATHINFO_EXTENSION));
		$E462799f3069e7fcda3f70674d9b5915[] = $b92538c6a6973ab3f4f2e16af4d1f415 . $aa646568bb8ba5e796a2b14c0da5156c;
	}

	$b8a56c16d1b9faacf5fd3f6719106134 = trim(substr($b8a56c16d1b9faacf5fd3f6719106134, 0, -2));

	$b92538c6a6973ab3f4f2e16af4d1f415 = base64_decode(b8A6Ea05eEbc7e2e3503eA794B1A1ee4::$request['source']);

	$b92538c6a6973ab3f4f2e16af4d1f415 .= '/';

	$D4b0e4f302fed4c8918d703be778a967 = B8A6EA05eeBc7E2E3503ea794B1a1Ee4::$request['server_id'];

	if (!(substr($b92538c6a6973ab3f4f2e16af4d1f415, -1) != '/')) {
	}

	$E3ccc8cbd05e9b759bf9b28d98864c60 = @file_get_contents($b92538c6a6973ab3f4f2e16af4d1f415);
case 'import_movies':
	foreach ($ebdcab819a71569dccf5652ed4faec54 as $C8583591a971fbe9d0ca3b15ab9931a0) {
		$b6a17446060f80bace9283c7433cdc0e['rating'] = '';

		$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['movie_added'];
		$Bd15201442974a906a9d7f99e01978a6 = new IMDB($F1fb8ec67dfc4b401327d264935792fa['filename']);

		$b6a17446060f80bace9283c7433cdc0e['director'] = $Bd15201442974a906a9d7f99e01978a6->e9FCe59E2d1D102315F8192D99c50Fd2();
		$b6a17446060f80bace9283c7433cdc0e['releasedate'] = $Bd15201442974a906a9d7f99e01978a6->D1554c53b27afe254c3de0f6FEFDC231();

		$b6a17446060f80bace9283c7433cdc0e['plot'] = '';
		$b6a17446060f80bace9283c7433cdc0e['genre'] = $Bd15201442974a906a9d7f99e01978a6->e2d152A0ae8FD94d949d1cc2EE507F3c();

		$b6a17446060f80bace9283c7433cdc0e['rating'] = $Bd15201442974a906a9d7f99e01978a6->E97925F778e9FFD4052B82fcb6F61C3a();
		$b6a17446060f80bace9283c7433cdc0e['director'] = '';

		$b6a17446060f80bace9283c7433cdc0e['plot'] = $Bd15201442974a906a9d7f99e01978a6->B33EA4549B122f87C899938d5ac8bE6E();

		foreach ($cbd1495c69971e4de5dff882d5e4a2e2 as $D4b0e4f302fed4c8918d703be778a967) {
			$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `streams_sys` (`stream_id`,`server_id`) VALUES(\'%d\',\'%d\')', $F9b1bf785602d9db91ce4a6faff79ea0, $D4b0e4f302fed4c8918d703be778a967);
		}

		$F1fb8ec67dfc4b401327d264935792fa = pathinfo(basename($C8583591a971fbe9d0ca3b15ab9931a0));
		$b6a17446060f80bace9283c7433cdc0e['releasedate'] = '';

		$b6a17446060f80bace9283c7433cdc0e = array();

		$b6a17446060f80bace9283c7433cdc0e['genre'] = '';

		$b6a17446060f80bace9283c7433cdc0e['movie_image'] = 'http://' . b8A6Ea05EEbC7E2e3503Ea794B1A1EE4::$StreamingServers[SERVER_ID]['server_ip'] . ':' . B8a6EA05EEBc7e2E3503eA794B1a1EE4::$StreamingServers[SERVER_ID]['http_broadcast_port'] . '/images/' . $Bd15201442974a906a9d7f99e01978a6->Eb21691A3E1de474a6Ca1FC5108032ff();

		$ccfb0709fcdc74e3e2b2f1baffef7612 = array($C8583591a971fbe9d0ca3b15ab9931a0);

		$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `streams` (`type`,`category_id`,`stream_display_name`,`stream_source`,`stream_icon`,`notes`,`enable_transcode`,`transcode_attributes`,`movie_propeties`,`read_native`,`target_container_id`,`transcode_profile_id`,`added`) VALUES(2,\'%d\',\'%s\',\'%s\',\'\',\'\',\'%d\',\'%s\',\'%s\',\'%d\',\'%d\',\'%d\',\'%d\')', $Df1ed0c24afddf3f97f29d7c950a45ef, $F1fb8ec67dfc4b401327d264935792fa['filename'], json_encode($ccfb0709fcdc74e3e2b2f1baffef7612), $f568c89b199089f8840936400ea99a37, json_encode($d809d303d29a0d6146e8aab0b246b018), json_encode($b6a17446060f80bace9283c7433cdc0e), $d7b71304b4435dc40f45b62964f7b42c, $b9ebd49dfd14ee25a3e9ee7dd1ae4ae1, $c9e7476d790f807f4774b6b88121522c, time());

		$ccfb0709fcdc74e3e2b2f1baffef7612 = array('s:' . $bd83f71a29c78179c9e81a9361581942 . ':' . $C8583591a971fbe9d0ca3b15ab9931a0);

		$b6a17446060f80bace9283c7433cdc0e['movie_image'] = '';

		$F9b1bf785602d9db91ce4a6faff79ea0 = $D29f3c5494cb370b46f3e907dc61f106->F1b4b6779c28f4AD97A35e4a54fD0416();
		$b6a17446060f80bace9283c7433cdc0e['cast'] = '';

		$b6a17446060f80bace9283c7433cdc0e['cast'] = $Bd15201442974a906a9d7f99e01978a6->e7A7A94e2deB9D684Bbe9832dE9F10C1();
	}

	$Df1ed0c24afddf3f97f29d7c950a45ef = (!empty(b8a6EA05eEbC7E2E3503ea794B1A1Ee4::$request['category_id']) && DBEb6a2D3fdf653C03C41185a9D463c0('stream_categories', 'id', B8a6Ea05EEBC7E2e3503Ea794b1a1EE4::$request['category_id']) ? intval(b8A6EA05EEbC7e2e3503ea794b1a1ee4::$request['category_id']) : 'NULL');

	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['licence_invalid'];

	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['complete_fields'];
	if ((is_numeric($bd83f71a29c78179c9e81a9361581942) && array_key_exists($bd83f71a29c78179c9e81a9361581942, B8a6Ea05EeBc7e2e3503Ea794B1a1ee4::$StreamingServers)) || ($bd83f71a29c78179c9e81a9361581942 == 'remote')) {
	}

	$b9ebd49dfd14ee25a3e9ee7dd1ae4ae1 = intval(B8a6eA05EEBC7E2e3503eA794B1a1Ee4::$request['target_container_id']);
	$f568c89b199089f8840936400ea99a37 = ($c9e7476d790f807f4774b6b88121522c != 0 ? 1 : 0);
	$d809d303d29a0d6146e8aab0b246b018 = (($c9e7476d790f807f4774b6b88121522c == -1) && !empty(B8A6Ea05eEbc7E2e3503eA794B1a1Ee4::$request['transcode_attributes']) && is_array(B8A6EA05eEbC7e2e3503eA794b1A1ee4::$request['transcode_attributes']) ? array_filter(B8a6Ea05EeBC7e2E3503EA794B1A1EE4::$request['transcode_attributes']) : array());

	sort(&$ebdcab819a71569dccf5652ed4faec54);
	$c9e7476d790f807f4774b6b88121522c = (empty(B8a6EA05eEbC7E2E3503ea794b1a1Ee4::$request['transcode_profile_id']) ? 0 : intval(b8A6Ea05eEBC7e2E3503EA794b1A1eE4::$request['transcode_profile_id']));

	$cbd1495c69971e4de5dff882d5e4a2e2 = array_map('intval', b8A6eA05eEBc7E2e3503ea794b1A1ee4::$request['load_balancer_servers']);
	$Ba3669b37cbdc6eaff2d40eb788bc7fa = (!empty(b8a6eA05eeBC7E2E3503eA794b1A1Ee4::$request['import_imdb_details']) ? 1 : 0);

	if (A8379Be1602eFA9914014C89c86769Ba()) {
	}

	$ebdcab819a71569dccf5652ed4faec54 = array_filter(array_unique(b8A6ea05eeBC7E2E3503EA794b1a1EE4::$request['movies_select']));

	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['complete_fields'];
	$bd83f71a29c78179c9e81a9361581942 = B8a6EA05EEbc7E2e3503Ea794B1A1ee4::$request['movie_location'];
	if ((0 < count(B8a6eA05eEBC7E2E3503ea794B1a1EE4::$request)) && !empty(B8a6Ea05eeBc7e2E3503eA794B1A1eE4::$request['target_container_id']) && !empty(B8a6EA05EeBc7E2e3503eA794b1A1EE4::$request['load_balancer_servers']) && is_array(B8A6ea05EeBc7e2e3503EA794b1A1Ee4::$request['load_balancer_servers']) && !empty(B8a6Ea05EEBC7e2e3503EA794b1A1ee4::$request['movie_location']) && !empty(B8a6ea05eeBC7E2e3503ea794b1A1ee4::$request['movie_source']) && !empty(b8a6ea05eebc7E2e3503Ea794b1a1ee4::$request['movies_select']) && is_array(B8A6ea05Eebc7e2E3503Ea794b1A1eE4::$request['movies_select'])) {
	}

	$d7b71304b4435dc40f45b62964f7b42c = (!empty(B8A6eA05EeBc7e2E3503ea794B1A1EE4::$request['read_native']) ? 1 : 0);
default:
	session_start();

	$c83b7d347a6bc7f5f0e3313147e88ecc->Fa7E9Fb747dd7976DD94eA27fa865b5D();

	if (b8A6EA05eEBC7E2e3503ea794B1A1Ee4::b268742419BDce0042041238309e26Ad()) {
	}

	require ('../init.php');
	$c8b64aa7c0205b19247dc67d89e911dd = (empty($c8b64aa7c0205b19247dc67d89e911dd) ? B8a6ea05EEbc7E2e3503EA794B1A1EE4::c293f8e3c1EB62B9a8DdE105a6Aae797() : $c8b64aa7c0205b19247dc67d89e911dd);
	require (IPTV_TEMPLATES_PATH . '/' . '/admin/' . 'import_movies.php');
	$b8980526936694b2cd4cf6c7f8c80396 = b8a6EA05eeBC7e2E3503Ea794b1a1ee4::$request['action'];
	$ec2d9106046948d5bd4541355199b985 = (empty($ec2d9106046948d5bd4541355199b985) ? f6acBDf515C1E5f84c3209c7faA09641('movie') : $ec2d9106046948d5bd4541355199b985);
}

?> 

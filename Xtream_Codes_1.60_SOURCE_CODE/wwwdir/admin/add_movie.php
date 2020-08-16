<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

unset(b8a6ea05EEBC7E2E3503EA794B1A1Ee4::$request['action']);

switch ($b8980526936694b2cd4cf6c7f8c80396) {
default:
	require (IPTV_TEMPLATES_PATH . '/' . '/admin/' . 'add_movie.php');

	$Fce20624c9b6567a7a8c441a4651444d = 'You can\'t add new Movies to DEMO Version';
	$b8980526936694b2cd4cf6c7f8c80396 = B8A6eA05EebC7E2E3503ea794B1A1EE4::$request['action'];

	if (B8a6eA05EEBc7e2e3503ea794b1A1eE4::B268742419BdCe0042041238309e26ad()) {
	}

	$c8b64aa7c0205b19247dc67d89e911dd = (empty($c8b64aa7c0205b19247dc67d89e911dd) ? b8a6EA05eeBc7E2e3503eA794b1a1EE4::c293f8e3c1eB62b9a8DDe105A6aae797() : $c8b64aa7c0205b19247dc67d89e911dd);
	$d71e92a61c320b29f4d471c3d2e1590e = CD3712bAF499a597ca98507a158c394B();
	require (IPTV_TEMPLATES_PATH . '/' . 'header_admin.php');
	$ec2d9106046948d5bd4541355199b985 = (empty($ec2d9106046948d5bd4541355199b985) ? F6acbdf515c1e5F84C3209C7fAa09641('movie') : $ec2d9106046948d5bd4541355199b985);
case 'add_movie':
	$b8a701e181a78c523ef488605ed0de8b = b8a6Ea05eeBc7e2e3503eA794b1a1Ee4::$request['arguments'];

	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['complete_fields'];
	$d7b71304b4435dc40f45b62964f7b42c = (!empty(b8A6EA05eeBC7E2E3503eA794B1a1EE4::$request['read_native']) ? 1 : 0);
	$Df1ed0c24afddf3f97f29d7c950a45ef = (!empty(B8a6eA05EeBC7e2E3503ea794B1A1eE4::$request['category_id']) && dBeb6A2D3fdf653c03C41185a9d463C0('stream_categories', 'id', b8A6ea05EEbc7E2e3503eA794B1A1ee4::$request['category_id']) ? intval(B8A6eA05EebC7E2E3503ea794B1A1Ee4::$request['category_id']) : 'NULL');

	$F1fb8ec67dfc4b401327d264935792fa = b8A6EA05EeBc7e2e3503eA794b1a1ee4::$request['movie_name'];
	$d794e7d33713a4144330c582d3d37549 = (!empty(b8a6eA05EEbc7E2e3503ea794b1a1EE4::$request['movie_subtitles']) ? B8A6EA05eEBc7E2E3503ea794B1A1ee4::$request['movie_subtitles'] : NULL);
	$ccfb0709fcdc74e3e2b2f1baffef7612 = array('s:' . $bd83f71a29c78179c9e81a9361581942 . ':' . b8A6eA05eEBc7e2e3503ea794b1A1Ee4::$request['movie_source']);

	foreach ($b8a701e181a78c523ef488605ed0de8b as $C4188eb5625baf4963cf95fd069d727b => $C18109cdc9326739096c21c5a0bacd0c) {
		$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `streams_options` (`stream_id`,`argument_id`) VALUES(\'%d\',\'%d\')', $F9b1bf785602d9db91ce4a6faff79ea0, $C4188eb5625baf4963cf95fd069d727b);

		$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `streams_options` (`stream_id`,`argument_id`,`value`) VALUES(\'%d\',\'%d\',\'%s\');', $F9b1bf785602d9db91ce4a6faff79ea0, $C4188eb5625baf4963cf95fd069d727b, $C18109cdc9326739096c21c5a0bacd0c);

		if (!DBeb6A2d3FDF653C03C41185A9d463c0('streams_arguments', 'id', $C4188eb5625baf4963cf95fd069d727b)) {
		}

		$C18109cdc9326739096c21c5a0bacd0c = trim($C18109cdc9326739096c21c5a0bacd0c);

		if (!empty($C18109cdc9326739096c21c5a0bacd0c)) {
		}

	}

	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['movie_added'];

	$b9ebd49dfd14ee25a3e9ee7dd1ae4ae1 = intval(b8a6Ea05eebC7E2e3503Ea794B1A1EE4::$request['target_container_id']);

	if (is_numeric($bd83f71a29c78179c9e81a9361581942)) {
	}

	foreach ($cbd1495c69971e4de5dff882d5e4a2e2 as $D4b0e4f302fed4c8918d703be778a967) {
		$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `streams_sys` (`stream_id`,`server_id`) VALUES(\'%d\',\'%d\')', $F9b1bf785602d9db91ce4a6faff79ea0, $D4b0e4f302fed4c8918d703be778a967);
	}

	$ccfb0709fcdc74e3e2b2f1baffef7612 = array(b8A6EA05eebc7e2e3503ea794B1a1EE4::$request['movie_source']);

	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['complete_fields'];
	$b6a17446060f80bace9283c7433cdc0e = (!empty(B8a6eA05Eebc7E2e3503ea794B1a1EE4::$request['movie_propeties']) && is_array(B8A6eA05EebC7E2e3503Ea794B1A1EE4::$request['movie_propeties']) ? B8A6eA05EEbc7e2e3503eA794B1A1EE4::$request['movie_propeties'] : array());

	$F9b1bf785602d9db91ce4a6faff79ea0 = $D29f3c5494cb370b46f3e907dc61f106->F1b4B6779C28F4aD97A35E4a54fd0416();

	$bd83f71a29c78179c9e81a9361581942 = b8A6ea05Eebc7E2E3503Ea794b1a1Ee4::$request['movie_location'];
	if (A8379bE1602efA9914014C89C86769BA()) {
	}

	if (!DBEb6A2D3fDF653C03C41185a9D463c0('streams', 'stream_display_name', $F1fb8ec67dfc4b401327d264935792fa)) {
	}

	if ((0 < count(B8a6EA05EeBc7E2e3503Ea794B1a1EE4::$request)) && !empty(b8A6EA05eEbc7E2E3503EA794B1a1ee4::$request['target_container_id']) && !empty(b8a6Ea05Eebc7E2E3503eA794B1a1ee4::$request['load_balancer_servers']) && is_array(b8A6ea05eEbc7E2E3503EA794B1a1Ee4::$request['load_balancer_servers']) && !empty(B8a6Ea05EEBC7E2e3503EA794b1a1EE4::$request['movie_location']) && !empty(b8a6EA05EeBc7E2e3503EA794b1a1eE4::$request['movie_source']) && !empty(B8A6Ea05EeBC7e2E3503ea794B1a1EE4::$request['movie_name'])) {
	}

	$c9e7476d790f807f4774b6b88121522c = (empty(B8a6Ea05EEbc7E2e3503eA794b1a1EE4::$request['transcode_profile_id']) ? 0 : intval(B8a6EA05eEBc7e2e3503Ea794b1A1Ee4::$request['transcode_profile_id']));
	$e4c5b05e068599be7f279571d2e83103 = (!empty(b8A6Ea05EeBC7e2E3503EA794B1A1ee4::$request['remove_subtitles']) ? 1 : 0);
	$Ccc01a49a480ad4b98dc48415a5e29fa[] = str_replace('{stream_name}', $F1fb8ec67dfc4b401327d264935792fa, $f9a8823715bcb54e8069e0086da240b2['stream_exists']);
	$d794e7d33713a4144330c582d3d37549 = array('s:' . $Ad8b4c3ad1c9b668c84775f0121858cc . ':' . $d794e7d33713a4144330c582d3d37549);
	$d809d303d29a0d6146e8aab0b246b018 = (($c9e7476d790f807f4774b6b88121522c == -1) && !empty(b8a6eA05EEbc7E2e3503ea794b1a1eE4::$request['transcode_attributes']) && is_array(b8A6eA05EEbC7e2E3503ea794B1A1EE4::$request['transcode_attributes']) ? array_filter(B8A6Ea05eEbc7e2E3503Ea794B1A1Ee4::$request['transcode_attributes']) : array());
	$Ad8b4c3ad1c9b668c84775f0121858cc = (!is_null($d794e7d33713a4144330c582d3d37549) && array_key_exists(B8A6EA05EebC7e2e3503Ea794B1a1EE4::$request['subtitles_location'], B8a6EA05eEbc7E2e3503Ea794B1A1Ee4::$StreamingServers) ? intval(b8a6Ea05Eebc7E2E3503Ea794B1a1EE4::$request['subtitles_location']) : NULL);
	$e04bbeb1bf923375b545a9273b5f3d23 = (!empty(b8a6eA05EeBC7E2E3503Ea794B1a1eE4::$request['custom_sid']) ? B8A6Ea05eEbC7E2E3503Ea794b1A1ee4::$request['custom_sid'] : NULL);
	$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `streams` (`type`,`category_id`,`stream_display_name`,`stream_source`,`stream_icon`,`notes`,`enable_transcode`,`transcode_attributes`,`movie_propeties`,`movie_subtitles`,`read_native`,`target_container_id`,`remove_subtitles`,`custom_sid`,`transcode_profile_id`,`added`) ' . "\r\n" . '                                                                    VALUES(2,%s,\'%s\',\'%s\',\'\',\'\',\'%d\',\'%s\',\'%s\',\'%s\',\'%d\',\'%d\',\'%d\',\'%s\',\'%d\',\'%d\')', $Df1ed0c24afddf3f97f29d7c950a45ef, $F1fb8ec67dfc4b401327d264935792fa, json_encode($ccfb0709fcdc74e3e2b2f1baffef7612), $f568c89b199089f8840936400ea99a37, json_encode($d809d303d29a0d6146e8aab0b246b018), json_encode($b6a17446060f80bace9283c7433cdc0e), json_encode($d794e7d33713a4144330c582d3d37549), $d7b71304b4435dc40f45b62964f7b42c, $b9ebd49dfd14ee25a3e9ee7dd1ae4ae1, $e4c5b05e068599be7f279571d2e83103, $e04bbeb1bf923375b545a9273b5f3d23, $c9e7476d790f807f4774b6b88121522c, time());

	if (!(0 < $F9b1bf785602d9db91ce4a6faff79ea0)) {
	}

	$cbd1495c69971e4de5dff882d5e4a2e2 = array_map('intval', B8A6EA05eEBc7E2E3503Ea794b1A1Ee4::$request['load_balancer_servers']);
	$Ccc01a49a480ad4b98dc48415a5e29fa[] = $f9a8823715bcb54e8069e0086da240b2['custom_sid_error'];
	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['licence_invalid'];
	$f568c89b199089f8840936400ea99a37 = ($c9e7476d790f807f4774b6b88121522c != 0 ? 1 : 0);
case 'get_movie_details':
	$E6412230eeb5a4348cc57a7876286e4a = array();

	$E6412230eeb5a4348cc57a7876286e4a['plot'] = '';
	$E6412230eeb5a4348cc57a7876286e4a['movie_image'] = 'http://' . B8a6Ea05eeBc7E2e3503eA794B1a1EE4::$StreamingServers[SERVER_ID]['server_ip'] . ':' . b8a6Ea05eebC7E2e3503Ea794B1a1ee4::$StreamingServers[SERVER_ID]['http_broadcast_port'] . '/images/' . $Bd15201442974a906a9d7f99e01978a6->Eb21691a3E1DE474A6ca1Fc5108032fF();

	$E6412230eeb5a4348cc57a7876286e4a['releasedate'] = '';

	$E6412230eeb5a4348cc57a7876286e4a['cast'] = $Bd15201442974a906a9d7f99e01978a6->e7A7A94E2deb9d684Bbe9832de9F10C1();

	$E6412230eeb5a4348cc57a7876286e4a['genre'] = '';

	$E6412230eeb5a4348cc57a7876286e4a['rating'] = $Bd15201442974a906a9d7f99e01978a6->e97925f778e9fFD4052b82Fcb6F61c3a();

	$E6412230eeb5a4348cc57a7876286e4a['director'] = '';
	$E6412230eeb5a4348cc57a7876286e4a['director'] = $Bd15201442974a906a9d7f99e01978a6->E9FCE59E2D1D102315f8192d99C50Fd2();

	$E6412230eeb5a4348cc57a7876286e4a['rating'] = '';

	$E6412230eeb5a4348cc57a7876286e4a['releasedate'] = $Bd15201442974a906a9d7f99e01978a6->D1554C53B27aFE254C3De0f6fEFdC231();

	$E6412230eeb5a4348cc57a7876286e4a['plot'] = $Bd15201442974a906a9d7f99e01978a6->B33EA4549B122f87C899938d5aC8Be6E();

	$Bd15201442974a906a9d7f99e01978a6 = new IMDB($F1fb8ec67dfc4b401327d264935792fa);
	$E6412230eeb5a4348cc57a7876286e4a['movie_image'] = '';

	exit();
	echo json_encode($E6412230eeb5a4348cc57a7876286e4a);
	$E6412230eeb5a4348cc57a7876286e4a['cast'] = '';
	$E6412230eeb5a4348cc57a7876286e4a['genre'] = $Bd15201442974a906a9d7f99e01978a6->e2d152A0ae8fD94d949D1cc2eE507F3c();
	$F1fb8ec67dfc4b401327d264935792fa = b8a6eA05eeBc7e2E3503eA794B1A1Ee4::$request['movie_name'];
default:
	require (IPTV_TEMPLATES_PATH . '/' . 'footer.php');

	$Cb751d454bbedafaaec687ca76753225 = C8554BB3d711C28f0b3F218090D08AeF();
	exit(0);
default:
}

?> 

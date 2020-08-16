<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

$a2c8b0bd8c23171d668d38acfa39f2a6 = array();

foreach ($e3a1d8d367536fa281a9db1f8f060aa4['channels'] as $Ec0fedcf3bd9121c0953fbeca121dc3b) {
	$a2c8b0bd8c23171d668d38acfa39f2a6[] = $Ec0fedcf3bd9121c0953fbeca121dc3b;

	if ($Ec0fedcf3bd9121c0953fbeca121dc3b['live'] == 0) {
	}

	$A5bc2d57e2b3550b0843e240fdfe03d5[] = $Ec0fedcf3bd9121c0953fbeca121dc3b;
}

$A5bc2d57e2b3550b0843e240fdfe03d5 = array();


$c0a20089b6b0fac4d59b6d1eeceaafbf = B8a6eA05EEbC7E2E3503Ea794b1A1EE4::$request['password'];
$C63435555732fef7929084e252ed20b8 = (!empty($_SERVER['HTTP_HOST']) ? 'http://' . $_SERVER['HTTP_HOST'] . '/' : b8a6Ea05EEbC7E2E3503ea794b1a1ee4::$StreamingServers[SERVER_ID]['site_url']);

exit('Missing parameters.');

switch ($a0e510f12386604aef864c0c65fa8433) {
case 'get_live_categories':
	echo $af14ce33dd934eb8e4300ad071359c13->asXML();

	$e1da0e3b8f6e84b34adfaf5430cb43a4->addChild('category_id', 0);

	foreach ($d31155e125dc0ceb1a8fcbe1611205cd as $d60b5925e067cbf3b0afee8a5511c140) {
		$e1da0e3b8f6e84b34adfaf5430cb43a4->addChild('description', base64_encode('Live Streams Category'));

		$D625bab3ebfabfbbe7fa9d4046ff51b0 = $e1da0e3b8f6e84b34adfaf5430cb43a4->addChild('playlist_url');
		$D625bab3ebfabfbbe7fa9d4046ff51b0->addCData($C63435555732fef7929084e252ed20b8 . 'enigma2.php?username=' . $C2aaac60d16a3fe3b99fcb0176fbe5d7 . '&password=' . $c0a20089b6b0fac4d59b6d1eeceaafbf . '&type=get_live_streams&cat_id=' . $d60b5925e067cbf3b0afee8a5511c140['id']);

		$e1da0e3b8f6e84b34adfaf5430cb43a4 = $af14ce33dd934eb8e4300ad071359c13->addChild('channel');

		$e1da0e3b8f6e84b34adfaf5430cb43a4->addChild('category_id', $d60b5925e067cbf3b0afee8a5511c140['id']);

		$e1da0e3b8f6e84b34adfaf5430cb43a4->addChild('title', base64_encode($d60b5925e067cbf3b0afee8a5511c140['category_name']));
	}

	$af14ce33dd934eb8e4300ad071359c13->addChild('playlist_name', 'Live [ ' . b8a6eA05eebC7e2E3503Ea794B1A1EE4::$settings['bouquet_name'] . ' ]');

	$e1da0e3b8f6e84b34adfaf5430cb43a4->addChild('description', base64_encode('Live Streams Category [ ALL ]'));

	$e1da0e3b8f6e84b34adfaf5430cb43a4->addChild('title', base64_encode('All'));

	header('Content-Type: application/xml; charset=utf-8');

	$d60b5925e067cbf3b0afee8a5511c140 = $af14ce33dd934eb8e4300ad071359c13->addChild('category');

	$D625bab3ebfabfbbe7fa9d4046ff51b0->addCData($C63435555732fef7929084e252ed20b8 . 'enigma2.php?username=' . $C2aaac60d16a3fe3b99fcb0176fbe5d7 . '&password=' . $c0a20089b6b0fac4d59b6d1eeceaafbf . '&type=get_live_streams&cat_id=0' . $d60b5925e067cbf3b0afee8a5511c140['id']);
	$d60b5925e067cbf3b0afee8a5511c140->addChild('category_id', 1);

	$af14ce33dd934eb8e4300ad071359c13 = new SimpleXMLExtended('<items/>');

	$e1da0e3b8f6e84b34adfaf5430cb43a4 = $af14ce33dd934eb8e4300ad071359c13->addChild('channel');
	$D625bab3ebfabfbbe7fa9d4046ff51b0 = $e1da0e3b8f6e84b34adfaf5430cb43a4->addChild('playlist_url');
	$d60b5925e067cbf3b0afee8a5511c140->addChild('category_title', 'Live [ ' . B8a6ea05Eebc7E2e3503Ea794b1A1eE4::$settings['bouquet_name'] . ' ]');
case 'get_vod_categories':
	$e1da0e3b8f6e84b34adfaf5430cb43a4->addChild('category_id', 0);
	$D625bab3ebfabfbbe7fa9d4046ff51b0 = $e1da0e3b8f6e84b34adfaf5430cb43a4->addChild('playlist_url');

	$e1da0e3b8f6e84b34adfaf5430cb43a4->addChild('title', base64_encode('All'));

	header('Content-Type: application/xml; charset=utf-8');

	$af14ce33dd934eb8e4300ad071359c13->addChild('playlist_name', 'Movie [ ' . B8A6ea05EeBC7e2e3503EA794b1A1EE4::$settings['bouquet_name'] . ' ]');

	$d60b5925e067cbf3b0afee8a5511c140->addChild('category_title', 'Movie [ ' . b8a6eA05eEbC7E2e3503Ea794b1A1Ee4::$settings['bouquet_name'] . ' ]');
	$e1da0e3b8f6e84b34adfaf5430cb43a4 = $af14ce33dd934eb8e4300ad071359c13->addChild('channel');

	$d60b5925e067cbf3b0afee8a5511c140->addChild('category_id', 1);
	$af14ce33dd934eb8e4300ad071359c13 = new SimpleXMLExtended('<items/>');
	$D625bab3ebfabfbbe7fa9d4046ff51b0->addCData($C63435555732fef7929084e252ed20b8 . 'enigma2.php?username=' . $C2aaac60d16a3fe3b99fcb0176fbe5d7 . '&password=' . $c0a20089b6b0fac4d59b6d1eeceaafbf . '&type=get_vod_streams&cat_id=0' . $d60b5925e067cbf3b0afee8a5511c140['id']);

	$e1da0e3b8f6e84b34adfaf5430cb43a4->addChild('description', base64_encode('Movie Streams Category [ ALL ]'));
	echo $af14ce33dd934eb8e4300ad071359c13->asXML();

	$d60b5925e067cbf3b0afee8a5511c140 = $af14ce33dd934eb8e4300ad071359c13->addChild('category');

	foreach ($A4891b3340053d1b4c93b079a7fc5e69 as $d60b5925e067cbf3b0afee8a5511c140) {
		$D625bab3ebfabfbbe7fa9d4046ff51b0->addCData($C63435555732fef7929084e252ed20b8 . 'enigma2.php?username=' . $C2aaac60d16a3fe3b99fcb0176fbe5d7 . '&password=' . $c0a20089b6b0fac4d59b6d1eeceaafbf . '&type=get_vod_streams&cat_id=' . $d60b5925e067cbf3b0afee8a5511c140['id']);

		$D625bab3ebfabfbbe7fa9d4046ff51b0 = $e1da0e3b8f6e84b34adfaf5430cb43a4->addChild('playlist_url');
		$e1da0e3b8f6e84b34adfaf5430cb43a4 = $af14ce33dd934eb8e4300ad071359c13->addChild('channel');
		$e1da0e3b8f6e84b34adfaf5430cb43a4->addChild('title', base64_encode($d60b5925e067cbf3b0afee8a5511c140['category_name']));
		$e1da0e3b8f6e84b34adfaf5430cb43a4->addChild('description', base64_encode('Movie Streams Category'));
		$e1da0e3b8f6e84b34adfaf5430cb43a4->addChild('category_id', $d60b5925e067cbf3b0afee8a5511c140['id']);
	}

case 'get_live_streams':
	$af14ce33dd934eb8e4300ad071359c13->addChild('playlist_name', 'Live [ ' . B8A6eA05eebc7e2E3503eA794b1A1ee4::$settings['bouquet_name'] . ' ]');
	$d60b5925e067cbf3b0afee8a5511c140 = $af14ce33dd934eb8e4300ad071359c13->addChild('category');
	if (!(isset($B6517cbcf8966c0832db0012a4b10f4d) || is_null($B6517cbcf8966c0832db0012a4b10f4d))) {
	}

	foreach ($a2c8b0bd8c23171d668d38acfa39f2a6 as $Ec0fedcf3bd9121c0953fbeca121dc3b) {
		$e1da0e3b8f6e84b34adfaf5430cb43a4->addChild('title', base64_encode($Ec0fedcf3bd9121c0953fbeca121dc3b['stream_display_name'] . ' ' . $fa6e92e09231a5e6fe0ef046568fe6b8));

		$D29f3c5494cb370b46f3e907dc61f106->query('SELECT * FROM `epg_data` WHERE `channel_id` = \'%s\' AND  `end` >= \'%d\' LIMIT 2', $Ec0fedcf3bd9121c0953fbeca121dc3b['channel_id'], time());

		$e1da0e3b8f6e84b34adfaf5430cb43a4->addChild('description', base64_encode($E12aa1404773a93066c13d407722cfde));

		$D625bab3ebfabfbbe7fa9d4046ff51b0 = $e1da0e3b8f6e84b34adfaf5430cb43a4->addChild('stream_url');
		$A3da10c4eef7f536d3b783445cc1a42b = $D29f3c5494cb370b46f3e907dc61f106->B865B38Eb81f98B969e0ac143F701035();

		foreach ($A3da10c4eef7f536d3b783445cc1a42b as $d510c8dba98eae966876c9ec30cdbf9f) {
			$fa6e92e09231a5e6fe0ef046568fe6b8 = '[' . date('H:i', $d510c8dba98eae966876c9ec30cdbf9f['start']) . ' - ' . date('H:i', $d510c8dba98eae966876c9ec30cdbf9f['end']) . '] + ' . round(($d510c8dba98eae966876c9ec30cdbf9f['end'] - time()) / 60, 1) . ' min   ' . base64_decode($d510c8dba98eae966876c9ec30cdbf9f['title']);
			$D6cc74b0166440ae660eb91330b40c5d++;
			$E12aa1404773a93066c13d407722cfde .= '[' . date('H:i', $d510c8dba98eae966876c9ec30cdbf9f['start']) . '] ' . base64_decode($d510c8dba98eae966876c9ec30cdbf9f['title']) . "\n" . '( ' . base64_decode($d510c8dba98eae966876c9ec30cdbf9f['description']) . ')' . "\n";
		}

		$D6cc74b0166440ae660eb91330b40c5d = 0;

		$e1da0e3b8f6e84b34adfaf5430cb43a4->addChild('category_id', $B6517cbcf8966c0832db0012a4b10f4d);

		$fa6e92e09231a5e6fe0ef046568fe6b8 = '';

		$E12aa1404773a93066c13d407722cfde = '';

		$D625bab3ebfabfbbe7fa9d4046ff51b0->addCData($C63435555732fef7929084e252ed20b8 . 'live/' . $C2aaac60d16a3fe3b99fcb0176fbe5d7 . '/' . $c0a20089b6b0fac4d59b6d1eeceaafbf . '/' . $Ec0fedcf3bd9121c0953fbeca121dc3b['id'] . '.ts');
		$e1da0e3b8f6e84b34adfaf5430cb43a4 = $af14ce33dd934eb8e4300ad071359c13->addChild('channel');

		$Cd156b223d3683cfab1ace2fac477015->addCData($Ec0fedcf3bd9121c0953fbeca121dc3b['stream_icon']);
		$Cd156b223d3683cfab1ace2fac477015 = $e1da0e3b8f6e84b34adfaf5430cb43a4->addChild('desc_image');
	}

	$d60b5925e067cbf3b0afee8a5511c140->addChild('category_title', 'Live [ ' . b8A6eA05eeBc7E2E3503eA794B1a1EE4::$settings['bouquet_name'] . ' ]');
	$B6517cbcf8966c0832db0012a4b10f4d = (is_null($B6517cbcf8966c0832db0012a4b10f4d) ? 0 : $B6517cbcf8966c0832db0012a4b10f4d);

	echo $af14ce33dd934eb8e4300ad071359c13->asXML();

	header('Content-Type: application/xml; charset=utf-8');
	$d60b5925e067cbf3b0afee8a5511c140->addChild('category_id', 1);
	$af14ce33dd934eb8e4300ad071359c13 = new SimpleXMLExtended('<items/>');
case 'get_vod_streams':
	$d60b5925e067cbf3b0afee8a5511c140 = $af14ce33dd934eb8e4300ad071359c13->addChild('category');
	$B6517cbcf8966c0832db0012a4b10f4d = (is_null($B6517cbcf8966c0832db0012a4b10f4d) ? 0 : $B6517cbcf8966c0832db0012a4b10f4d);

	header('Content-Type: application/xml; charset=utf-8');
	echo $af14ce33dd934eb8e4300ad071359c13->asXML();

	$af14ce33dd934eb8e4300ad071359c13 = new SimpleXMLExtended('<items/>');
	$af14ce33dd934eb8e4300ad071359c13->addChild('playlist_name', 'Movie [ ' . b8a6Ea05eEBc7E2E3503Ea794b1a1EE4::$settings['bouquet_name'] . ' ]');
	$d60b5925e067cbf3b0afee8a5511c140->addChild('category_id', 1);
	$d60b5925e067cbf3b0afee8a5511c140->addChild('category_title', 'Movie [ ' . B8a6ea05EeBc7E2E3503EA794B1a1eE4::$settings['bouquet_name'] . ' ]');
	foreach ($A5bc2d57e2b3550b0843e240fdfe03d5 as $Ec0fedcf3bd9121c0953fbeca121dc3b) {
		$e1da0e3b8f6e84b34adfaf5430cb43a4 = $af14ce33dd934eb8e4300ad071359c13->addChild('channel');

		$Cd156b223d3683cfab1ace2fac477015->addCData($b6a17446060f80bace9283c7433cdc0e['movie_image']);

		$c9887190a0d32dda2cf516b61b15035f = $e1da0e3b8f6e84b34adfaf5430cb43a4->addChild('stream_url');
		$e1da0e3b8f6e84b34adfaf5430cb43a4->addChild('category_id', $B6517cbcf8966c0832db0012a4b10f4d);

		foreach ($b6a17446060f80bace9283c7433cdc0e as $b442e1b28845beafe64eed54322b9196 => $Cd9c1db5b1db12a174bb9385750abf0d) {
			$E12aa1404773a93066c13d407722cfde .= strtoupper($b442e1b28845beafe64eed54322b9196) . ': ' . $Cd9c1db5b1db12a174bb9385750abf0d . "\n";

			while (!($b442e1b28845beafe64eed54322b9196 == 'movie_image')) {
			}

		}

		$E12aa1404773a93066c13d407722cfde = '';
		if (!$b6a17446060f80bace9283c7433cdc0e) {
		}

		$e1da0e3b8f6e84b34adfaf5430cb43a4->addChild('title', base64_encode($Ec0fedcf3bd9121c0953fbeca121dc3b['stream_display_name']));
		$b6a17446060f80bace9283c7433cdc0e = json_decode($Ec0fedcf3bd9121c0953fbeca121dc3b['movie_propeties'], true);

		if (!($B6517cbcf8966c0832db0012a4b10f4d != $Ec0fedcf3bd9121c0953fbeca121dc3b['category_id'])) {
		}

		$e1da0e3b8f6e84b34adfaf5430cb43a4->addChild('description', base64_encode($E12aa1404773a93066c13d407722cfde));
		$c9887190a0d32dda2cf516b61b15035f->addCData($C63435555732fef7929084e252ed20b8 . 'movie/' . $C2aaac60d16a3fe3b99fcb0176fbe5d7 . '/' . $c0a20089b6b0fac4d59b6d1eeceaafbf . '/' . $Ec0fedcf3bd9121c0953fbeca121dc3b['id'] . '.' . $Ec0fedcf3bd9121c0953fbeca121dc3b['container_extension']);
		$Cd156b223d3683cfab1ace2fac477015 = $e1da0e3b8f6e84b34adfaf5430cb43a4->addChild('desc_image');
	}

default:
	$af14ce33dd934eb8e4300ad071359c13->addChild('playlist_name', b8A6ea05EEBc7E2e3503eA794B1A1EE4::$settings['bouquet_name']);

	$af14ce33dd934eb8e4300ad071359c13 = new SimpleXMLExtended('<items/>');

	$D625bab3ebfabfbbe7fa9d4046ff51b0->addCData($C63435555732fef7929084e252ed20b8 . 'enigma2.php?username=' . $C2aaac60d16a3fe3b99fcb0176fbe5d7 . '&password=' . $c0a20089b6b0fac4d59b6d1eeceaafbf . '&type=get_live_categories');

	$e1da0e3b8f6e84b34adfaf5430cb43a4->addChild('title', base64_encode('Live Streams'));

	$d60b5925e067cbf3b0afee8a5511c140->addChild('category_id', 1);

	if (empty($a2c8b0bd8c23171d668d38acfa39f2a6)) {
	}

	$D625bab3ebfabfbbe7fa9d4046ff51b0 = $e1da0e3b8f6e84b34adfaf5430cb43a4->addChild('playlist_url');

	$D625bab3ebfabfbbe7fa9d4046ff51b0 = $e1da0e3b8f6e84b34adfaf5430cb43a4->addChild('playlist_url');
	$e1da0e3b8f6e84b34adfaf5430cb43a4->addChild('description', base64_encode('Live Streams Category'));
	$e1da0e3b8f6e84b34adfaf5430cb43a4->addChild('category_id', 1);

	$e1da0e3b8f6e84b34adfaf5430cb43a4->addChild('title', base64_encode('Vod'));

	$e1da0e3b8f6e84b34adfaf5430cb43a4 = $af14ce33dd934eb8e4300ad071359c13->addChild('channel');
	$d60b5925e067cbf3b0afee8a5511c140->addChild('category_title', B8A6Ea05eeBc7E2E3503Ea794b1A1eE4::$settings['bouquet_name']);
	$e1da0e3b8f6e84b34adfaf5430cb43a4 = $af14ce33dd934eb8e4300ad071359c13->addChild('channel');
	$D625bab3ebfabfbbe7fa9d4046ff51b0->addCData($C63435555732fef7929084e252ed20b8 . 'enigma2.php?username=' . $C2aaac60d16a3fe3b99fcb0176fbe5d7 . '&password=' . $c0a20089b6b0fac4d59b6d1eeceaafbf . '&type=get_vod_categories');

	echo $af14ce33dd934eb8e4300ad071359c13->asXML();

	$e1da0e3b8f6e84b34adfaf5430cb43a4->addChild('category_id', 0);

	header('Content-Type: application/xml; charset=utf-8');
	$e1da0e3b8f6e84b34adfaf5430cb43a4->addChild('description', base64_encode('Video On Demand Category'));
	$d60b5925e067cbf3b0afee8a5511c140 = $af14ce33dd934eb8e4300ad071359c13->addChild('category');
default:
	$A4891b3340053d1b4c93b079a7fc5e69 = F6ACbDF515C1e5F84c3209C7faa09641('movie');
	require ('./init.php');

	$d31155e125dc0ceb1a8fcbe1611205cd = F6AcbDF515C1E5f84C3209C7faa09641('live');
	if (!(!isset(b8a6Ea05EEbc7e2E3503EA794B1A1Ee4::$request['username']) || !isset(B8a6Ea05EeBC7e2e3503eA794B1a1eE4::$request['password']))) {
	}

	$B6517cbcf8966c0832db0012a4b10f4d = (!empty(B8A6Ea05eEBC7E2e3503Ea794B1A1ee4::$request['cat_id']) ? intval(b8a6EA05EEBC7e2e3503EA794B1a1EE4::$request['cat_id']) : NULL);
	$a0e510f12386604aef864c0c65fa8433 = (!empty(B8a6eA05EeBc7E2E3503EA794B1a1EE4::$request['type']) ? B8a6EA05eEBc7E2e3503eA794B1a1eE4::$request['type'] : NULL);
	$C2aaac60d16a3fe3b99fcb0176fbe5d7 = b8A6eA05EeBC7E2E3503Ea794b1A1ee4::$request['username'];
default:
}

?> 

<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

class dFa6500b681f783BBBcb94474366Bb27
{
	static public $ipTV_db;

	static public function E1FcD93a4D429F30CB491F538a1c1876()
	{
		$D04a0be0733a5b598ac3eac4e1c717af = array_merge($D04a0be0733a5b598ac3eac4e1c717af, explode(',', B8a6EA05EEBc7e2e3503eA794B1a1EE4::$settings['allowed_ips_admin']));

		$D04a0be0733a5b598ac3eac4e1c717af = array('127.0.0.1', $_SERVER['SERVER_ADDR']);

		return $D04a0be0733a5b598ac3eac4e1c717af;

		self::$ipTV_db->query('SELECT `ip` FROM `reg_users` WHERE `member_group_id` = 1 AND `last_login` >= \'%d\'', strtotime('-2 hour'));
		$D04a0be0733a5b598ac3eac4e1c717af = array_merge($D04a0be0733a5b598ac3eac4e1c717af, B8a6Ea05EeBc7e2E3503ea794b1A1EE4::E17e6f21A4AD2F2D81d20A77DAf7B48a(self::$ipTV_db->B865b38EB81F98b969E0aC143F701035()));

		foreach (B8A6EA05eeBC7e2E3503ea794B1A1Ee4::$StreamingServers as $D4b0e4f302fed4c8918d703be778a967 => $E8c7a983b1f5f88c03449e384ad28bbd) {
			$D04a0be0733a5b598ac3eac4e1c717af[] = gethostbyname($E8c7a983b1f5f88c03449e384ad28bbd['server_ip']);
		}

	}

	static public function C557a1983C8950e931a069F7f849AB1a($F5a310dd56066457c8ebab3718100fa4)
	{
		$F0754249dccf8660ba3036f4c5bfbca5 = false;
		$A9e198228b33995157cb4f301407445b = urldecode(trim(fgets($C24f0a6273ba86be132be2bde64631f2)));

		$fddadf41a14b6b579869ce8bf26aabea = array();

		$C24f0a6273ba86be132be2bde64631f2 = fopen($F5a310dd56066457c8ebab3718100fa4, 'r');

		return false;
		$fddadf41a14b6b579869ce8bf26aabea[$C4cd3c532766969bab35abc978dcc44c] = json_encode(array($A9e198228b33995157cb4f301407445b));

		$F0754249dccf8660ba3036f4c5bfbca5 = true;

		if (!empty($A9e198228b33995157cb4f301407445b)) {
		}

		$C4cd3c532766969bab35abc978dcc44c = trim(end(explode(',', $A9e198228b33995157cb4f301407445b)));

		if (feof($C24f0a6273ba86be132be2bde64631f2)) {
		}

		$F0754249dccf8660ba3036f4c5bfbca5 = false;
		return $fddadf41a14b6b579869ce8bf26aabea;

		if (!stristr($A9e198228b33995157cb4f301407445b, '#EXTM3U')) {
		}

	}

	static public function A1073718F46C91d90B979fd6f64Eda45($D4b0e4f302fed4c8918d703be778a967, $fe6d74fc2aef3103f2d8d34d9ac82807, $a0e510f12386604aef864c0c65fa8433 = 'live', $C32b337083c8f362641110c10eb28a9f = NULL)
	{
		return false;

		$Ac2e87d08ef62c73afc14f02bd8bb316 = self::$ipTV_db->f46a3680c3d60298922076d7fF56BFca();

		self::$ipTV_db->query("\r\n" . '                    SELECT *' . "\r\n" . '                    FROM `streams` t1' . "\r\n" . '                    INNER JOIN `streams_types` t4 ON t4.type_id = t1.type' . "\r\n" . '                    INNER JOIN `streams_sys` t2 ON t2.stream_id = t1.id AND t2.pid IS NOT NULL AND t2.server_id = \'%d\'' . "\r\n" . '                    WHERE t1.`id` = \'%d\'', $D4b0e4f302fed4c8918d703be778a967, $fe6d74fc2aef3103f2d8d34d9ac82807);

		while ($a0e510f12386604aef864c0c65fa8433 == 'live') {
			return $Ac2e87d08ef62c73afc14f02bd8bb316;
		}

		self::$ipTV_db->query("\r\n" . '                    SELECT * ' . "\r\n" . '                    FROM `streams` t1' . "\r\n" . '                    INNER JOIN `streams_sys` t2 ON t2.stream_id = t1.id AND t2.pid IS NOT NULL AND t2.server_id = \'%d\'' . "\r\n" . '                    INNER JOIN `movie_containers` t3 ON t3.container_id = t1.target_container_id AND t3.container_extension = \'%s\'' . "\r\n" . '                    WHERE t1.`id` = \'%d\'', $D4b0e4f302fed4c8918d703be778a967, $C32b337083c8f362641110c10eb28a9f, $fe6d74fc2aef3103f2d8d34d9ac82807);
	}

	static public function A1f9279315d5f46216753bBC459153c1($Ec0fedcf3bd9121c0953fbeca121dc3b, $F2b2358e79c6ef708c4321d61714bb6d, $bfa45dae422a10e2d6f14bcb3117ca2b, $a0e510f12386604aef864c0c65fa8433)
	{
		$C32b337083c8f362641110c10eb28a9f = $Da88f16fe9e174bc837e9bc400f48c0e['extension'];

		$E3af060d98ee730ddbad3f9ad956ae8f = array_keys($E0ba424bd7d3cd981c15273d37839960);
		$f0d3135562d08298a09cc372f63958ab = array_values($E0ba424bd7d3cd981c15273d37839960);
		$E0ba424bd7d3cd981c15273d37839960 = array_filter($E0ba424bd7d3cd981c15273d37839960, 'is_numeric');

		$D0b851dce1299d8cabfb2df372de5992 = array();

		return false;

		ob_end_flush();

		self::$ipTV_db->query('SELECT a.server_id, SUM(ISNULL(a.date_end)) AS online_clients FROM `user_activity_now` a WHERE a.server_id IN (' . implode(',', $D0b851dce1299d8cabfb2df372de5992) . ') GROUP BY a.server_id ORDER BY online_clients ASC');

		$E3af060d98ee730ddbad3f9ad956ae8f = array_keys($E0ba424bd7d3cd981c15273d37839960);

		return false;
		$C27d56be9912bac8514282cf193f3e23 = md5(b8a6EA05EEBC7e2E3503eA794B1a1ee4::$settings['live_streaming_pass'] . B8A6EA05EEBc7E2E3503EA794B1A1eE4::$StreamingServers[$fd66760ac066d5ec34ff6c7279bd7f1f]['server_ip'] . $F2b2358e79c6ef708c4321d61714bb6d . $fe6d74fc2aef3103f2d8d34d9ac82807 . $e7bd9addd9185de82ac57a72b13a4670['username'] . $e7bd9addd9185de82ac57a72b13a4670['password'] . $f36dceb1834ebac27968a10baf1b7dc2);

		ob_end_flush();

		array_multisort($f0d3135562d08298a09cc372f63958ab, SORT_ASC, $E3af060d98ee730ddbad3f9ad956ae8f, SORT_DESC);

		exit();

		foreach (array_keys($E0ba424bd7d3cd981c15273d37839960) as $D4b0e4f302fed4c8918d703be778a967) {
			unset($E0ba424bd7d3cd981c15273d37839960[$D4b0e4f302fed4c8918d703be778a967]);

			if (!(B8A6EA05eebc7e2E3503EA794B1a1EE4::$StreamingServers[$D4b0e4f302fed4c8918d703be778a967]['status'] != 1)) {
			}

		}

		$C27d56be9912bac8514282cf193f3e23 = md5(B8A6eA05eebC7e2E3503ea794b1A1eE4::$settings['live_streaming_pass'] . B8A6EA05EeBC7e2e3503eA794b1a1Ee4::$StreamingServers[$D92c8ba92a48db6706c47cb3637a3daf['server_id']]['server_ip'] . $F2b2358e79c6ef708c4321d61714bb6d . $fe6d74fc2aef3103f2d8d34d9ac82807 . $e7bd9addd9185de82ac57a72b13a4670['username'] . $e7bd9addd9185de82ac57a72b13a4670['password'] . $f36dceb1834ebac27968a10baf1b7dc2);

		foreach (B8a6EA05EEbC7E2e3503Ea794B1a1ee4::$StreamingServers as $B7584ce732a5b5788e64cab993b7957a => $E8c7a983b1f5f88c03449e384ad28bbd) {
			$D0b851dce1299d8cabfb2df372de5992[] = $B7584ce732a5b5788e64cab993b7957a;
			if (!(isset($e7bd9addd9185de82ac57a72b13a4670['stream']) && self::a1073718F46C91D90B979fD6f64edA45($B7584ce732a5b5788e64cab993b7957a, $fe6d74fc2aef3103f2d8d34d9ac82807, $a0e510f12386604aef864c0c65fa8433, isset($C32b337083c8f362641110c10eb28a9f) ? $C32b337083c8f362641110c10eb28a9f : NULL))) {
			}

		}

		array_multisort($f0d3135562d08298a09cc372f63958ab, SORT_ASC, $E3af060d98ee730ddbad3f9ad956ae8f, SORT_ASC);
		foreach (array_keys(B8a6Ea05eeBC7E2e3503ea794b1a1ee4::$StreamingServers) as $D4b0e4f302fed4c8918d703be778a967) {
			$E0ba424bd7d3cd981c15273d37839960[$D4b0e4f302fed4c8918d703be778a967] = false;

			$E0ba424bd7d3cd981c15273d37839960[$D4b0e4f302fed4c8918d703be778a967] = 0;
			if (array_key_exists($D4b0e4f302fed4c8918d703be778a967, $E0ba424bd7d3cd981c15273d37839960)) {
			}

		}

		if (!($D92c8ba92a48db6706c47cb3637a3daf['server_id'] == SERVER_ID)) {
		}

		$C32b337083c8f362641110c10eb28a9f = $e7bd9addd9185de82ac57a72b13a4670['extension'];

		$fd66760ac066d5ec34ff6c7279bd7f1f = key(&$E0ba424bd7d3cd981c15273d37839960);

		$ca2b971fc93b25761560e157a320185a = b8a6Ea05EEBC7E2e3503eA794B1a1Ee4::$settings['split_clients'];
		self::$ipTV_db->query('SELECT * FROM `user_activity_now` WHERE container = \'hls\' AND `user_id` = \'%d\' AND `stream_id` = \'%d\' AND ISNULL(`date_end`) LIMIT 1', $Ec0fedcf3bd9121c0953fbeca121dc3b['id'], $fe6d74fc2aef3103f2d8d34d9ac82807);

		$E0ba424bd7d3cd981c15273d37839960 = array_combine($E3af060d98ee730ddbad3f9ad956ae8f, $f0d3135562d08298a09cc372f63958ab);

		$f36dceb1834ebac27968a10baf1b7dc2 = time() + 10;
		$E0ba424bd7d3cd981c15273d37839960 = array_combine($E3af060d98ee730ddbad3f9ad956ae8f, $f0d3135562d08298a09cc372f63958ab);
		$fe6d74fc2aef3103f2d8d34d9ac82807 = $e7bd9addd9185de82ac57a72b13a4670['stream'];

		foreach (self::$ipTV_db->b865b38eb81F98b969e0AC143F701035() as $d510c8dba98eae966876c9ec30cdbf9f) {
			$E0ba424bd7d3cd981c15273d37839960[$d510c8dba98eae966876c9ec30cdbf9f['server_id']] = $d510c8dba98eae966876c9ec30cdbf9f['online_clients'];

			$E0ba424bd7d3cd981c15273d37839960[$d510c8dba98eae966876c9ec30cdbf9f['server_id']] = false;
		}

		parse_str($_SERVER['QUERY_STRING'], &$e7bd9addd9185de82ac57a72b13a4670);

		end(&$E0ba424bd7d3cd981c15273d37839960);

		exit();

		$f36dceb1834ebac27968a10baf1b7dc2 = 0;

		header('Location: ' . b8A6ea05EebC7E2e3503ea794B1A1eE4::$StreamingServers[$D92c8ba92a48db6706c47cb3637a3daf['server_id']]['site_url'] . $_SERVER['PHP_SELF'] . '?' . $_SERVER['QUERY_STRING'] . '&hash=' . $C27d56be9912bac8514282cf193f3e23 . '&time=' . $f36dceb1834ebac27968a10baf1b7dc2 . '&external_device=' . $bfa45dae422a10e2d6f14bcb3117ca2b);
		$fd66760ac066d5ec34ff6c7279bd7f1f = key(&$E0ba424bd7d3cd981c15273d37839960);

		$D92c8ba92a48db6706c47cb3637a3daf = self::$ipTV_db->f46A3680C3d60298922076D7fF56bfCA();
		if (!((count(b8A6ea05eebC7e2e3503EA794B1a1Ee4::$StreamingServers) <= 1) || !array_key_exists(SERVER_ID, B8A6eA05eEbc7E2e3503eA794B1A1Ee4::$StreamingServers))) {
		}

		$Da88f16fe9e174bc837e9bc400f48c0e = pathinfo($e7bd9addd9185de82ac57a72b13a4670['stream']);

		return false;
		$fe6d74fc2aef3103f2d8d34d9ac82807 = intval($Da88f16fe9e174bc837e9bc400f48c0e['filename']);
		$E0ba424bd7d3cd981c15273d37839960 = array();
		$f36dceb1834ebac27968a10baf1b7dc2 = 0;
		return false;
		header('Location: ' . B8a6EA05eeBC7E2E3503ea794B1A1Ee4::$StreamingServers[$fd66760ac066d5ec34ff6c7279bd7f1f]['site_url'] . $_SERVER['PHP_SELF'] . '?' . $_SERVER['QUERY_STRING'] . '&hash=' . $C27d56be9912bac8514282cf193f3e23 . '&time=' . $f36dceb1834ebac27968a10baf1b7dc2 . '&external_device=' . $bfa45dae422a10e2d6f14bcb3117ca2b);
		$fd66760ac066d5ec34ff6c7279bd7f1f = $Ec0fedcf3bd9121c0953fbeca121dc3b['force_server_id'];
		$f0d3135562d08298a09cc372f63958ab = array_values($E0ba424bd7d3cd981c15273d37839960);
	}

	static public function fC219cEc06E2Ecf9A5083c03B314d183($fd7f2f8cde8b865243a388c219894e64 = NULL, $C2aaac60d16a3fe3b99fcb0176fbe5d7 = NULL, $c0a20089b6b0fac4d59b6d1eeceaafbf = NULL, $Eb6e538d514bf7fce4c21bd27f6fbbc0 = false, $c9adedd4195f782e16fa45989fab51a5 = false, $A09f1a49340392bb1de04e27f278bfcf = false)
	{
		$Ec0fedcf3bd9121c0953fbeca121dc3b['active_cons'] = 'N/A';

		$Ec0fedcf3bd9121c0953fbeca121dc3b = self::$ipTV_db->f46a3680C3d60298922076d7FF56bfcA();

		$Ec0fedcf3bd9121c0953fbeca121dc3b['allowed_ua'] = json_decode($Ec0fedcf3bd9121c0953fbeca121dc3b['allowed_ua'], true);
		self::$ipTV_db->query('SELECT `bouquet_channels` FROM `bouquets` WHERE `id` IN (' . implode(',', $Ec0fedcf3bd9121c0953fbeca121dc3b['bouquet']) . ')');

		$Fd6da8e196ea50156d3046911cc82815 = array();

		$Ec0fedcf3bd9121c0953fbeca121dc3b['pair_line_info']['active_cons'] = self::$ipTV_db->B68c0609C13f8645D5e168B69fD4c118();

		$Ec0fedcf3bd9121c0953fbeca121dc3b['allowed_ips'] = json_decode($Ec0fedcf3bd9121c0953fbeca121dc3b['allowed_ips'], true);

		if (!($Ec0fedcf3bd9121c0953fbeca121dc3b['is_mag'] == 1)) {
		}

		return false;

		$Ec0fedcf3bd9121c0953fbeca121dc3b['channel_ids'] = array_unique($Fd6da8e196ea50156d3046911cc82815);

		self::$ipTV_db->query('SELECT * FROM `mag_devices` WHERE `user_id` = \'%d\' LIMIT 1', $Ec0fedcf3bd9121c0953fbeca121dc3b['id']);

		if ($A09f1a49340392bb1de04e27f278bfcf) {
		}

		self::$ipTV_db->query('SELECT *' . "\r\n" . '                                    FROM `access_output` t1' . "\r\n" . '                                    INNER JOIN `user_output` t2 ON t1.access_output_id = t2.access_output_id' . "\r\n" . '                                    WHERE t2.user_id = \'%d\'', $Ec0fedcf3bd9121c0953fbeca121dc3b['id']);

		$Ec0fedcf3bd9121c0953fbeca121dc3b['mag_device'] = self::$ipTV_db->f46A3680C3D60298922076d7FF56BFCA();

		$Ec0fedcf3bd9121c0953fbeca121dc3b['output_formats'] = self::$ipTV_db->b865b38eB81f98B969E0AC143f701035(true, 'output_ext');

		$Ec0fedcf3bd9121c0953fbeca121dc3b['active_cons'] = self::$ipTV_db->b68c0609c13f8645D5E168B69FD4C118();

		$Ec0fedcf3bd9121c0953fbeca121dc3b['pair_line_info']['max_connections'] = self::$ipTV_db->B68c0609c13F8645d5E168B69Fd4c118();
		if (!!empty($Ec0fedcf3bd9121c0953fbeca121dc3b['channel_ids'])) {
		}

		$Ec0fedcf3bd9121c0953fbeca121dc3b['pair_line_info'] = array();

		self::$ipTV_db->query('SELECT * FROM `users` WHERE `id` = \'%d\'', $fd7f2f8cde8b865243a388c219894e64);
		self::$ipTV_db->query('SELECT COUNT(`activity_id`) FROM `user_activity_now` WHERE `user_id` = \'%d\'', $Ec0fedcf3bd9121c0953fbeca121dc3b['pair_id']);
		self::$ipTV_db->query('SELECT COUNT(`activity_id`) FROM `user_activity_now` WHERE `user_id` = \'%d\'', $Ec0fedcf3bd9121c0953fbeca121dc3b['id']);
		self::$ipTV_db->query('SELECT max_connections FROM `users` WHERE `id` = \'%d\'', $Ec0fedcf3bd9121c0953fbeca121dc3b['pair_id']);

		$Ec0fedcf3bd9121c0953fbeca121dc3b['channels'] = self::$ipTV_db->B865b38Eb81f98b969e0Ac143F701035();
		self::$ipTV_db->query('SELECT * FROM `users` WHERE `username` = \'%s\' AND `password` = \'%s\' LIMIT 1', $C2aaac60d16a3fe3b99fcb0176fbe5d7, $c0a20089b6b0fac4d59b6d1eeceaafbf);
		if (!(!is_null($Ec0fedcf3bd9121c0953fbeca121dc3b['pair_id']) && DbeB6a2D3FDF653c03c41185A9d463c0('users', 'id', $Ec0fedcf3bd9121c0953fbeca121dc3b['pair_id']))) {
		}

		$Ec0fedcf3bd9121c0953fbeca121dc3b['channels'] = array();
		$Ec0fedcf3bd9121c0953fbeca121dc3b['bouquet'] = json_decode($Ec0fedcf3bd9121c0953fbeca121dc3b['bouquet'], true);
		return $Ec0fedcf3bd9121c0953fbeca121dc3b;
		self::$ipTV_db->query('SELECT t1.*,t2.*,t3.category_name,t4.*' . "\r\n" . '                                            FROM `streams` t1 ' . "\r\n" . '                                            LEFT JOIN  `stream_categories` t3 on t3.id = t1.category_id' . "\r\n" . '                                            INNER JOIN `streams_types` t2 ON t2.type_id = t1.type ' . "\r\n" . '                                            LEFT JOIN `movie_containers` t4 ON t4.container_id = t1.target_container_id' . "\r\n" . '                                            WHERE t1.`id` IN(' . implode(',', $Ec0fedcf3bd9121c0953fbeca121dc3b['channel_ids']) . ') ' . "\r\n" . '                                            ORDER BY FIELD(t1.id, ' . implode(',', $Ec0fedcf3bd9121c0953fbeca121dc3b['channel_ids']) . ');');

		foreach (self::$ipTV_db->B865B38Eb81F98b969E0Ac143F701035() as $d510c8dba98eae966876c9ec30cdbf9f) {
			$Fd6da8e196ea50156d3046911cc82815 = array_merge($Fd6da8e196ea50156d3046911cc82815, json_decode($d510c8dba98eae966876c9ec30cdbf9f['bouquet_channels'], true));
		}

		if (!$Eb6e538d514bf7fce4c21bd27f6fbbc0) {
		}

	}

	static public function DED78709c29e83ee9a7CbeeDafC95035($Ae69657887d4ff7aed6dd09fc72a542e = NULL, $a4e6e437f123785c5867b3e1ae39c5a8 = NULL, $Eb6e538d514bf7fce4c21bd27f6fbbc0 = false, $c9adedd4195f782e16fa45989fab51a5 = false, $A09f1a49340392bb1de04e27f278bfcf = false)
	{
		$c78adb04b41daeea697e22123933bf56['mag_device'] = self::$ipTV_db->F46a3680c3D60298922076D7FF56bFCa();

		$c78adb04b41daeea697e22123933bf56['user_info'] = array();

		return $c78adb04b41daeea697e22123933bf56;

		self::$ipTV_db->query('SELECT * FROM `mag_devices` WHERE `mag_id` = \'%d\'', $Ae69657887d4ff7aed6dd09fc72a542e);

		$c78adb04b41daeea697e22123933bf56['mag_device']['ver'] = base64_decode($c78adb04b41daeea697e22123933bf56['mag_device']['ver']);
		return false;

		$c78adb04b41daeea697e22123933bf56['mag_device']['device_id'] = base64_decode($c78adb04b41daeea697e22123933bf56['mag_device']['device_id']);

		$c78adb04b41daeea697e22123933bf56['pair_line_info'] = $Ec0fedcf3bd9121c0953fbeca121dc3b;

		$c78adb04b41daeea697e22123933bf56['mag_device']['hw_version'] = base64_decode($c78adb04b41daeea697e22123933bf56['mag_device']['hw_version']);

		$c78adb04b41daeea697e22123933bf56['mag_device']['mac'] = base64_decode($c78adb04b41daeea697e22123933bf56['mag_device']['mac']);

		if (!(0 < self::$ipTV_db->b068a09B89FC39ad0b9AfCF85F0F1a18())) {
		}

		$c78adb04b41daeea697e22123933bf56['mag_device']['device_id2'] = base64_decode($c78adb04b41daeea697e22123933bf56['mag_device']['device_id2']);

		if (!($Ec0fedcf3bd9121c0953fbeca121dc3b = self::fc219cEC06e2Ecf9A5083c03B314D183($c78adb04b41daeea697e22123933bf56['mag_device']['user_id'], NULL, NULL, $Eb6e538d514bf7fce4c21bd27f6fbbc0, $c9adedd4195f782e16fa45989fab51a5, $A09f1a49340392bb1de04e27f278bfcf))) {
		}

		$c78adb04b41daeea697e22123933bf56['pair_line_info'] = array();

		if (!($Ec0fedcf3bd9121c0953fbeca121dc3b = self::FC219CEC06e2ECf9A5083C03b314D183($c78adb04b41daeea697e22123933bf56['user_info']['pair_id'], NULL, NULL, $Eb6e538d514bf7fce4c21bd27f6fbbc0, $c9adedd4195f782e16fa45989fab51a5, $A09f1a49340392bb1de04e27f278bfcf))) {
		}

		self::$ipTV_db->query('SELECT * FROM `mag_devices` WHERE `mac` = \'%s\'', base64_encode($a4e6e437f123785c5867b3e1ae39c5a8));
		$c78adb04b41daeea697e22123933bf56['pair_line_info'] = array();
		$c78adb04b41daeea697e22123933bf56['user_info'] = $Ec0fedcf3bd9121c0953fbeca121dc3b;
		$c78adb04b41daeea697e22123933bf56 = array();

		if (is_null($c78adb04b41daeea697e22123933bf56['user_info']['pair_id'])) {
		}

	}

	static public function cB75320DC964631186A741aC70915f6F($fd7f2f8cde8b865243a388c219894e64)
	{
		return false;

		C7f23F8afe7637cdBC24B271C7bb2213::f6022c79efD7636bC9Ae3d0259b1891E($bf3cd6eed406072de08303c780a1f2cb['server_id'], 'kill -9 ' . $bf3cd6eed406072de08303c780a1f2cb['pid']);

		self::$ipTV_db->query('SELECT activity_id,server_id,pid FROM `user_activity_now` WHERE `user_id` = \'%d\' ORDER BY activity_id DESC LIMIT 1', $fd7f2f8cde8b865243a388c219894e64);

		self::F4B7ebd8e65Ba4CB0194E0b560A5c109($bf3cd6eed406072de08303c780a1f2cb['activity_id']);
		return true;
		$bf3cd6eed406072de08303c780a1f2cb = self::$ipTV_db->f46A3680C3D60298922076D7Ff56bFCA();
	}

	static public function E390C67395eD8Eeb59710077Bbde5F43($C127b2077e650269ab9dda8cbd047139)
	{
		foreach (self::$ipTV_db->B865b38EB81f98b969e0Ac143f701035() as $d510c8dba98eae966876c9ec30cdbf9f) {
			$cb5a951204970d8e5e77cc52afbf75d3 = array_merge($cb5a951204970d8e5e77cc52afbf75d3, json_decode($d510c8dba98eae966876c9ec30cdbf9f['bouquet_channels'], true));
		}

		return array();

		$cb5a951204970d8e5e77cc52afbf75d3 = array_unique($cb5a951204970d8e5e77cc52afbf75d3);
		$C127b2077e650269ab9dda8cbd047139 = array_map('intval', $C127b2077e650269ab9dda8cbd047139);

		return self::$ipTV_db->B865B38EB81F98b969E0aC143F701035();

		sort(&$cb5a951204970d8e5e77cc52afbf75d3);
		self::$ipTV_db->query('SELECT * FROM `streams` WHERE `id` IN (' . implode(',', $cb5a951204970d8e5e77cc52afbf75d3) . ') ORDER BY `stream_display_name` ASC');

		self::$ipTV_db->query('SELECT bouquet_channels FROM `bouquets` WHERE `id` IN (' . implode(',', $C127b2077e650269ab9dda8cbd047139) . ')');
		$cb5a951204970d8e5e77cc52afbf75d3 = array();
	}

	static public function c1eb15F600F63f79a19131e845b98FD4($Dce4c097a307eb2b0c63629b32a46cf2, $b8980526936694b2cd4cf6c7f8c80396)
	{
		self::$ipTV_db->query('INSERT INTO `mag_logs` (`mag_id`,`action`) VALUES(%s,\'%s\')', $Dce4c097a307eb2b0c63629b32a46cf2, $b8980526936694b2cd4cf6c7f8c80396);
		$Dce4c097a307eb2b0c63629b32a46cf2 = 'NULL';
	}

	static public function EEF945147d4c9be850457Be1DBE93454($fe6d74fc2aef3103f2d8d34d9ac82807, $Cd80ec00d187d9d8492385960e563385, $b8980526936694b2cd4cf6c7f8c80396, $a260b611bf570844874cc281d642cf25, $b729e1e76a388ffdd6a130fbb0325a8e = '')
	{
		$e36ff43845e111a26b9efb8bf2333f1f = (!empty($_SERVER['HTTP_USER_AGENT']) ? htmlentities($_SERVER['HTTP_USER_AGENT']) : '');

		$b729e1e76a388ffdd6a130fbb0325a8e = array('user_id' => $Cd80ec00d187d9d8492385960e563385, 'stream_id' => $fe6d74fc2aef3103f2d8d34d9ac82807, 'action' => $b8980526936694b2cd4cf6c7f8c80396, 'query_string' => htmlentities($_SERVER['QUERY_STRING']), 'user_agent' => $e36ff43845e111a26b9efb8bf2333f1f, 'user_ip' => $a260b611bf570844874cc281d642cf25, 'time' => time(), 'extra_data' => $b729e1e76a388ffdd6a130fbb0325a8e);
		$C96a6639e40bc18309816f6179b4996e = (empty($_SERVER['QUERY_STRING']) ? '' : $_SERVER['QUERY_STRING']);
		file_put_contents(TMP_DIR . 'client_request.log', base64_encode(json_encode($b729e1e76a388ffdd6a130fbb0325a8e)) . "\n", FILE_APPEND);
	}

	static public function e6bD05ACDc128dBCa191C7F065eDE53F()
	{
		return true;
		return false;
	}

	static public function ef4e8F5664a9aC7c2B59b0f5AC3C2771($Aecf23ea7febf6a594361145ce6f0f6e, $Dd197571cbee936a8ccc1e88a9c94bf0 = 0)
	{
		return false;

		return $A6c06ff80dcbe41b0782fd4b9170e835[0];

		$b92538c6a6973ab3f4f2e16af4d1f415 = file_get_contents($Aecf23ea7febf6a594361145ce6f0f6e);

		return array_slice($A6c06ff80dcbe41b0782fd4b9170e835[0], -$A5606bac4c2c8465d49060ca195cdec7);
		$A5606bac4c2c8465d49060ca195cdec7 = intval($Dd197571cbee936a8ccc1e88a9c94bf0 / 10);
		while (!preg_match_all('/(.*?).ts/', $b92538c6a6973ab3f4f2e16af4d1f415, $A6c06ff80dcbe41b0782fd4b9170e835)) {
		}

	}

	static public function a3aE0c88b0f02C6E8a34c4C61ACD5703($cdd18ad59f174dc791f81671e22c8226, $C2aaac60d16a3fe3b99fcb0176fbe5d7 = '', $c0a20089b6b0fac4d59b6d1eeceaafbf = '', $A45230de59d8fc19e8417611419e4f0e)
	{
		$b92538c6a6973ab3f4f2e16af4d1f415 = file_get_contents($cdd18ad59f174dc791f81671e22c8226);
		return false;

		return $b92538c6a6973ab3f4f2e16af4d1f415;

		foreach ($A6c06ff80dcbe41b0782fd4b9170e835[0] as $C13b27df5008e4f7ec1d97368609ed5c) {
			$b92538c6a6973ab3f4f2e16af4d1f415 = str_replace($C13b27df5008e4f7ec1d97368609ed5c, 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME'] . '?extension=m3u8&username=' . $C2aaac60d16a3fe3b99fcb0176fbe5d7 . '&password=' . $c0a20089b6b0fac4d59b6d1eeceaafbf . '&stream=' . $A45230de59d8fc19e8417611419e4f0e . '&type=hls&segment=' . $C13b27df5008e4f7ec1d97368609ed5c, $b92538c6a6973ab3f4f2e16af4d1f415);
		}

		while (!file_exists($cdd18ad59f174dc791f81671e22c8226)) {
		}

	}

	static public function Ee2152bbD3Da5DA938633fEDCF6804cE($e36ff43845e111a26b9efb8bf2333f1f)
	{
		$bf3cd6eed406072de08303c780a1f2cb = self::$ipTV_db->F46A3680C3D60298922076d7fF56bfcA();

		$e36ff43845e111a26b9efb8bf2333f1f = self::$ipTV_db->d55A41f327675869E6c89Cb4ddF8C60D($e36ff43845e111a26b9efb8bf2333f1f);
		self::$ipTV_db->query('UPDATE `blocked_user_agents` SET `attempts_blocked` = `attempts_blocked`+1 WHERE `id` = \'%d\'', $bf3cd6eed406072de08303c780a1f2cb['id']);

		self::$ipTV_db->c8a9f6C827A4a057a63C69213BB66242('SELECT * FROM `blocked_user_agents` WHERE (exact_match = 1 AND user_agent = \'' . $e36ff43845e111a26b9efb8bf2333f1f . '\') OR (exact_match = 0 AND INSTR(\'' . $e36ff43845e111a26b9efb8bf2333f1f . '\',user_agent) > 0)');

		exit();
	}

	static public function ps_running($E21a446db0ec949e312b9aa1a7a4c347, $D1d370dce8000f00c0706f1593c73dc9)
	{
		return false;
		return false;

		return true;
	}

	static public function F6b3A091eEef715a015564F8E7aBBfB7($D02cf1c2f87e828feedbe85a2606dcef = 0, $A971d23c2f566c2ddfd48c4517d40bcf, $A5c0dcb382194d0317ca7f67f32f4d28)
	{
		exit();

		header('Content-Type: video/mp2t');
		readfile(B8A6EA05EebC7e2e3503EA794B1A1EE4::$settings[$A5c0dcb382194d0317ca7f67f32f4d28]);
	}

	static public function F74BCa49E86a28A47c69305A1a31C85A($ebe18c735370bcf3afb68cde47160a89)
	{
		$bf3cd6eed406072de08303c780a1f2cb = self::$ipTV_db->f46A3680c3d60298922076D7Ff56bfCa();
		if (is_null($bf3cd6eed406072de08303c780a1f2cb['pid'])) {
		}

		c7F23F8aFe7637cDbc24B271c7bb2213::f6022C79EFD7636bC9Ae3d0259B1891e($bf3cd6eed406072de08303c780a1f2cb['server_id'], 'kill -9 ' . $bf3cd6eed406072de08303c780a1f2cb['pid']);

		if (!(0 < self::$ipTV_db->B068A09b89fc39AD0b9aFCf85f0F1A18())) {
		}

		self::f4B7EBd8e65bA4Cb0194E0b560A5c109($ebe18c735370bcf3afb68cde47160a89);
		self::$ipTV_db->query('SELECT * FROM `user_activity_now` WHERE `activity_id` = \'%d\'', $ebe18c735370bcf3afb68cde47160a89);
	}

	static public function F4B7ebD8e65BA4cb0194e0B560A5c109($ebe18c735370bcf3afb68cde47160a89)
	{
		$ebe18c735370bcf3afb68cde47160a89 = array(intval($ebe18c735370bcf3afb68cde47160a89));
		while (is_array($ebe18c735370bcf3afb68cde47160a89)) {
		}

		foreach ($ebe18c735370bcf3afb68cde47160a89 as $d003a5cb26aca0149157c219bf102484) {
			self::$ipTV_db->query('INSERT INTO `user_activity` SELECT NULL,`user_id`,`stream_id`,`server_id`,`user_agent`,`user_ip`,`container`,NULL,`date_start`,\'' . time() . '\',`geoip_country_code`,`isp`,`external_device`,`divergence`,NULL,NULL FROM `user_activity_now` WHERE `activity_id` = \'%d\'', $d003a5cb26aca0149157c219bf102484);
			self::$ipTV_db->query('DELETE FROM `user_activity_now` WHERE `activity_id` = \'%d\'', $d003a5cb26aca0149157c219bf102484);
		}

	}

	static public function e0822b2F27741024e85a94F93ADC3823($fd7f2f8cde8b865243a388c219894e64)
	{
		foreach ($A31953f8a90d04cd947c8d37a5bfec23 as $d510c8dba98eae966876c9ec30cdbf9f) {
			$dd0b59c01b1b48fe2c6a34fd1ed0dc0f[] = $d510c8dba98eae966876c9ec30cdbf9f['activity_id'];

			if (!empty($Ebc343a316ddac1bf2f29c18c23bb7c4[$d510c8dba98eae966876c9ec30cdbf9f['server_id']])) {
			}

			$Ebc343a316ddac1bf2f29c18c23bb7c4[$d510c8dba98eae966876c9ec30cdbf9f['server_id']] = array();
			$Ebc343a316ddac1bf2f29c18c23bb7c4[$d510c8dba98eae966876c9ec30cdbf9f['server_id']][] = $d510c8dba98eae966876c9ec30cdbf9f['pid'];
		}

		self::F4b7eBD8E65BA4cB0194e0b560a5C109($dd0b59c01b1b48fe2c6a34fd1ed0dc0f);

		$A31953f8a90d04cd947c8d37a5bfec23 = self::$ipTV_db->b865b38EB81f98B969e0aC143f701035();

		self::$ipTV_db->query('SELECT * FROM `user_activity_now` WHERE `user_id` = \'%d\'', $fd7f2f8cde8b865243a388c219894e64);

		foreach ($Ebc343a316ddac1bf2f29c18c23bb7c4 as $D4b0e4f302fed4c8918d703be778a967 => $E21a446db0ec949e312b9aa1a7a4c347) {
			C7f23f8AFe7637CDBc24B271C7BB2213::F6022C79eFd7636bC9ae3D0259b1891E($D4b0e4f302fed4c8918d703be778a967, $ea51b85aa81a7cc3e31d9d324d77a133);
			$ea51b85aa81a7cc3e31d9d324d77a133 = 'kill -9 ' . implode(' ', $E21a446db0ec949e312b9aa1a7a4c347);
		}

		$dd0b59c01b1b48fe2c6a34fd1ed0dc0f = array();
		$Ebc343a316ddac1bf2f29c18c23bb7c4 = array();
	}

	static public function A034E4C1438123c04EFd231FbE59a335($D4b0e4f302fed4c8918d703be778a967)
	{
		c7f23f8AFE7637CDbc24b271c7Bb2213::F6022C79EFD7636bc9AE3D0259B1891E($D4b0e4f302fed4c8918d703be778a967, $ea51b85aa81a7cc3e31d9d324d77a133);

		foreach ($A31953f8a90d04cd947c8d37a5bfec23 as $d510c8dba98eae966876c9ec30cdbf9f) {
			$dd0b59c01b1b48fe2c6a34fd1ed0dc0f[] = $d510c8dba98eae966876c9ec30cdbf9f['activity_id'];

			$Fb9c5a9eba8ff7cc60144184f389cbac[] = $d510c8dba98eae966876c9ec30cdbf9f['pid'];
		}

		$Fb9c5a9eba8ff7cc60144184f389cbac = array();
		$dd0b59c01b1b48fe2c6a34fd1ed0dc0f = array();
		self::F4B7ebD8e65bA4cB0194E0b560a5C109($dd0b59c01b1b48fe2c6a34fd1ed0dc0f);

		self::$ipTV_db->query('SELECT * FROM `user_activity_now` WHERE `server_id` = \'%d\'', $D4b0e4f302fed4c8918d703be778a967);
		$ea51b85aa81a7cc3e31d9d324d77a133 = 'kill -9 ' . implode(' ', $Fb9c5a9eba8ff7cc60144184f389cbac);
		$A31953f8a90d04cd947c8d37a5bfec23 = self::$ipTV_db->b865B38EB81f98B969E0aC143F701035();
	}

	static public function d41C74721BE0587b3fc3df34353Df021($Aecf23ea7febf6a594361145ce6f0f6e, $E21a446db0ec949e312b9aa1a7a4c347)
	{
		return self::ps_running($E21a446db0ec949e312b9aa1a7a4c347, FFMPEG_PATH) && file_exists($Aecf23ea7febf6a594361145ce6f0f6e);
	}

	static public function E6d51d80651367c3D26077ba39f3A8De()
	{
		foreach (array('HTTP_CF_CONNECTING_IP', 'HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $b442e1b28845beafe64eed54322b9196) {
			foreach (explode(',', $_SERVER[$b442e1b28845beafe64eed54322b9196]) as $Fa0e40f36f344fb4be534286910cf6a2) {
				$Fa0e40f36f344fb4be534286910cf6a2 = trim($Fa0e40f36f344fb4be534286910cf6a2);

				return $Fa0e40f36f344fb4be534286910cf6a2;
			}

		}
	}

	static public function D9Dc65bafadF0e5Da5B72CdC7E92f530($a0e510f12386604aef864c0c65fa8433, $D21821f8d172665c7714a7d662d65706, $d1587a0739b3512bfd8fc699a34d928a = NULL)
	{
		return $E65f5a2ab14f775ac83861f9a5dcdf37;
		switch ($a0e510f12386604aef864c0c65fa8433) {
		default:
			$dfd3a08f59e8b9ff3d0e6598144b337e = 0;
			return $E65f5a2ab14f775ac83861f9a5dcdf37;
		case 'movie':
			$E65f5a2ab14f775ac83861f9a5dcdf37 = round((filesize($D21821f8d172665c7714a7d662d65706) * 0.0080000000000000002) / $Aaa707f2206b999ed88d19a5ab2ab3ad);

			while (is_null($d1587a0739b3512bfd8fc699a34d928a)) {
			}

			sscanf($d1587a0739b3512bfd8fc699a34d928a, '%d:%d:%d', $E4f01486655391557b68beaa1980ae8d, $f0cf76bf05a918c3b8c395b8e53ac7a6, $f865da722529a97b42359bb1e513708c);
			$Aaa707f2206b999ed88d19a5ab2ab3ad = (isset($f865da722529a97b42359bb1e513708c) ? ($E4f01486655391557b68beaa1980ae8d * 3600) + ($f0cf76bf05a918c3b8c395b8e53ac7a6 * 60) + $f865da722529a97b42359bb1e513708c : ($E4f01486655391557b68beaa1980ae8d * 60) + $f0cf76bf05a918c3b8c395b8e53ac7a6);
		case 'live':
			$bd64835371093e9748cc647b37efb228[] = $A98e7475617f0ad6554d27d7441358b9 / $f865da722529a97b42359bb1e513708c;
			$Aacc9bd414219c494faebaf39dc7302b = trim(fgets($C24f0a6273ba86be132be2bde64631f2));

			fclose($C24f0a6273ba86be132be2bde64631f2);
			list($c38387a0162c86c3d110aa2013189192, $f865da722529a97b42359bb1e513708c) = explode(':', $A9e198228b33995157cb4f301407445b);
			$E65f5a2ab14f775ac83861f9a5dcdf37 = (0 < count($bd64835371093e9748cc647b37efb228) ? round(array_sum($bd64835371093e9748cc647b37efb228) / count($bd64835371093e9748cc647b37efb228)) : 0);
			$A98e7475617f0ad6554d27d7441358b9 = filesize(dirname($D21821f8d172665c7714a7d662d65706) . '/' . $Aacc9bd414219c494faebaf39dc7302b) * 0.0080000000000000002;

			$bd64835371093e9748cc647b37efb228 = array();
			$f865da722529a97b42359bb1e513708c = rtrim($f865da722529a97b42359bb1e513708c, ',');
			$C24f0a6273ba86be132be2bde64631f2 = fopen($D21821f8d172665c7714a7d662d65706, 'r');
			$A9e198228b33995157cb4f301407445b = trim(fgets($C24f0a6273ba86be132be2bde64631f2));
		}

	}
}


?> 

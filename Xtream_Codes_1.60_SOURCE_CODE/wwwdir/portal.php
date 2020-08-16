<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

function D81A57E1F275b27658c666370c20051a($Df1ed0c24afddf3f97f29d7c950a45ef = '*', $E85fd7df607fe95edec06035396cd9e8 = false)
{
	$dc57f80fc208d808c25e8aa56b204dd4 = $D4a2957ac26758ef35f56b1ea4e57692 - (($c186856cd0cb902e280a0d44a03528a2 - 1) * $Ff7775d0618d3ac6613a59a77273faa3);

	$Cacfbf4f99e0ceb07acba32514181ed9 = $c186856cd0cb902e280a0d44a03528a2;

	$fddadf41a14b6b579869ce8bf26aabea = array_slice($fddadf41a14b6b579869ce8bf26aabea['streams'], ($c186856cd0cb902e280a0d44a03528a2 - 1) * $Ff7775d0618d3ac6613a59a77273faa3, $Ff7775d0618d3ac6613a59a77273faa3);
	$fddadf41a14b6b579869ce8bf26aabea = B3F724C7fF91E8207B59b52E6be913Fc($a8410504485e3a44f33464fc660c32ff['total_info']['user_id'], 'live', $Df1ed0c24afddf3f97f29d7c950a45ef == '*' ? NULL : $Df1ed0c24afddf3f97f29d7c950a45ef);

	$D29f3c5494cb370b46f3e907dc61f106->query('SELECT `id` FROM `stream_categories` WHERE `category_name` = \'for adults\'');

	$channel['channel_type_id'] = '1';
	$E3dcb04e2f21ee6d2398b553e841c6dc = true;

	global $a8410504485e3a44f33464fc660c32ff;
	global $b40b6d08cf1d86b873b71990f6e15fb5;
	global $D29f3c5494cb370b46f3e907dc61f106;

	$D4a2957ac26758ef35f56b1ea4e57692 = 0;

	$E3dcb04e2f21ee6d2398b553e841c6dc = false;

	$Ff7775d0618d3ac6613a59a77273faa3 = 14;

	$Eb1e602ac9177ef6a4038dc7bfccc53d = count($fddadf41a14b6b579869ce8bf26aabea['streams']);

	$a2c76d1b02d2fb8d00b4382a7a8ffc5b = array();

	$c186856cd0cb902e280a0d44a03528a2 = ceil($D4a2957ac26758ef35f56b1ea4e57692 / $Ff7775d0618d3ac6613a59a77273faa3);

	$c186856cd0cb902e280a0d44a03528a2 = 1;
	return json_encode($E6412230eeb5a4348cc57a7876286e4a);

	$Cacfbf4f99e0ceb07acba32514181ed9 = 0;
	$dc57f80fc208d808c25e8aa56b204dd4 = 0;
	$fddadf41a14b6b579869ce8bf26aabea = $fddadf41a14b6b579869ce8bf26aabea['streams'];

	if (!($c186856cd0cb902e280a0d44a03528a2 == 0)) {
	}

	$E6412230eeb5a4348cc57a7876286e4a = array(
		'js' => array('total_items' => $Eb1e602ac9177ef6a4038dc7bfccc53d, 'max_page_items' => $Ff7775d0618d3ac6613a59a77273faa3, 'selected_item' => $E85fd7df607fe95edec06035396cd9e8 ? 0 : $dc57f80fc208d808c25e8aa56b204dd4, 'cur_page' => $E85fd7df607fe95edec06035396cd9e8 ? 0 : $Cacfbf4f99e0ceb07acba32514181ed9, 'data' => $a2c76d1b02d2fb8d00b4382a7a8ffc5b)
		);
	$channel['xmltv_id'] = '1';
	$e597d71b525329d6251efce9e686f670 = '';

	if (!($c186856cd0cb902e280a0d44a03528a2 == 0)) {
	}

	foreach ($fddadf41a14b6b579869ce8bf26aabea as $afb609099323b838de4f613fe8aa2eab => $Da88f16fe9e174bc837e9bc400f48c0e) {
		$Ed39ab976bb328e7ff46b7558e812e36 = 0;
		$Ed39ab976bb328e7ff46b7558e812e36 = 1;
		if (!empty($E3e6e62e9f2f3f5ef488e3b5d7a272da) && in_array($Da88f16fe9e174bc837e9bc400f48c0e['category_id'], $E3e6e62e9f2f3f5ef488e3b5d7a272da)) {
		}

		$a2c76d1b02d2fb8d00b4382a7a8ffc5b[] = array(
	'id'                          => $Da88f16fe9e174bc837e9bc400f48c0e['id'],
	'name'                        => $Da88f16fe9e174bc837e9bc400f48c0e['stream_display_name'],
	'number'                      => (string) (($c186856cd0cb902e280a0d44a03528a2 - 1) * $Ff7775d0618d3ac6613a59a77273faa3) + $D6cc74b0166440ae660eb91330b40c5d++,
	'censored'                    => '0',
	'cmd'                         => $b40b6d08cf1d86b873b71990f6e15fb5 . B8a6Ea05Eebc7e2E3503Ea794b1a1eE4::$StreamingServers[SERVER_ID]['site_url'] . 'live/' . $a8410504485e3a44f33464fc660c32ff['total_info']['username'] . '/' . $a8410504485e3a44f33464fc660c32ff['total_info']['password'] . '/' . $Da88f16fe9e174bc837e9bc400f48c0e['id'] . '.' . B8A6eA05EeBC7e2e3503ea794B1A1eE4::$settings['mag_container'],
	'cost'                        => '0',
	'count'                       => '0',
	'status'                      => '1',
	'tv_genre_id'                 => $Da88f16fe9e174bc837e9bc400f48c0e['category_id'],
	'base_ch'                     => '1',
	'hd'                          => '0',
	'xmltv_id'                    => $channel['xmltv_id'],
	'service_id'                  => '',
	'bonus_ch'                    => '0',
	'volume_correction'           => '0',
	'use_http_tmp_link'           => '0',
	'mc_cmd'                      => '',
	'enable_tv_archive'           => '0',
	'wowza_tmp_link'              => '0',
	'wowza_dvr'                   => '0',
	'monitoring_status'           => '1',
	'enable_monitoring'           => '0',
	'enable_wowza_load_balancing' => '0',
	'cmd_1'                       => '',
	'cmd_2'                       => '',
	'cmd_3'                       => '',
	'logo'                        => $Da88f16fe9e174bc837e9bc400f48c0e['stream_icon'],
	'correct_time'                => '0',
	'allow_pvr'                   => '',
	'allow_local_pvr'             => '',
	'modified'                    => '',
	'allow_local_timeshift'       => '1',
	'nginx_secure_link'           => '0',
	'tv_archive_duration'         => '168',
	'lock'                        => $Ed39ab976bb328e7ff46b7558e812e36,
	'fav'                         => 0,
	'archive'                     => 0,
	'genres_str'                  => '',
	'cur_playing'                 => '[No channel info]',
	'epg'                         => '',
	'open'                        => 1,
	'cmds'                        => array(
		array('id' => $Da88f16fe9e174bc837e9bc400f48c0e['id'], 'ch_id' => $Da88f16fe9e174bc837e9bc400f48c0e['id'], 'priority' => '0', 'url' => $b40b6d08cf1d86b873b71990f6e15fb5 . b8A6Ea05EeBc7e2e3503Ea794B1a1EE4::$StreamingServers[SERVER_ID]['site_url'] . 'live/' . $a8410504485e3a44f33464fc660c32ff['total_info']['username'] . '/' . $a8410504485e3a44f33464fc660c32ff['total_info']['password'] . '/' . $Da88f16fe9e174bc837e9bc400f48c0e['id'] . '.' . b8a6ea05eEBC7e2E3503eA794b1A1EE4::$settings['mag_container'], 'status' => '1', 'use_http_tmp_link' => '0', 'wowza_tmp_link' => '0', 'user_agent_filter' => '', 'use_load_balancing' => '0', 'changed' => '', 'enable_monitoring' => '0', 'enable_balancer_monitoring' => '0', 'nginx_secure_link' => '0', 'flussonic_tmp_link' => '0')
		),
	'use_load_balancing'          => 0,
	'pvr'                         => 0
	);
	}

	$E3e6e62e9f2f3f5ef488e3b5d7a272da = b8a6EA05EeBC7e2e3503Ea794b1a1EE4::E17E6f21a4ad2F2d81D20a77dAF7b48a($D29f3c5494cb370b46f3e907dc61f106->b865b38Eb81f98b969e0AC143F701035());

	$D6cc74b0166440ae660eb91330b40c5d = 1;
	$c186856cd0cb902e280a0d44a03528a2 = (isset($_REQUEST['p']) ? intval($_REQUEST['p']) : 0);
}

function b3f724c7fF91e8207b59B52E6BE913fC($fd7f2f8cde8b865243a388c219894e64, $a0e510f12386604aef864c0c65fa8433 = 'live', $Df1ed0c24afddf3f97f29d7c950a45ef = NULL)
{
	$fddadf41a14b6b579869ce8bf26aabea['streams'] = array();

	$Ec0fedcf3bd9121c0953fbeca121dc3b = DFA6500b681F783BBBCB94474366Bb27::fC219cEc06e2eCf9a5083C03B314d183($fd7f2f8cde8b865243a388c219894e64, NULL, NULL, true, true);

	return $fddadf41a14b6b579869ce8bf26aabea;

	global $a8410504485e3a44f33464fc660c32ff;
	global $b40b6d08cf1d86b873b71990f6e15fb5;

	while (empty($Ec0fedcf3bd9121c0953fbeca121dc3b)) {
	}

	foreach ($Ec0fedcf3bd9121c0953fbeca121dc3b['channels'] as $Da88f16fe9e174bc837e9bc400f48c0e) {
		if (!(!is_null($Df1ed0c24afddf3f97f29d7c950a45ef) && ($Da88f16fe9e174bc837e9bc400f48c0e['category_id'] != $Df1ed0c24afddf3f97f29d7c950a45ef))) {
		}

		$fddadf41a14b6b579869ce8bf26aabea['streams'][$Da88f16fe9e174bc837e9bc400f48c0e['id']] = $Da88f16fe9e174bc837e9bc400f48c0e;
		if (!(!is_null($a0e510f12386604aef864c0c65fa8433) && ($Da88f16fe9e174bc837e9bc400f48c0e['type_key'] != $a0e510f12386604aef864c0c65fa8433))) {
		}

	}

	$fddadf41a14b6b579869ce8bf26aabea = array();
}

function bcC24D4A73750fD1cab178fe54fA4C98()
{
	$D6cc74b0166440ae660eb91330b40c5d++;

	$dd071e90359849d399bbf08302648c89 = $Ff7775d0618d3ac6613a59a77273faa3 - ($Defd4ca7559a32e1e08cfdc7c19207d4 % $Ff7775d0618d3ac6613a59a77273faa3);
	$d34b4a989f18faefa251e8da7e39a50d = array_splice(&$d34b4a989f18faefa251e8da7e39a50d, $e28326f582181d86f28bbe4e5a77af4e, $dd071e90359849d399bbf08302648c89);

	$d34b4a989f18faefa251e8da7e39a50d = array();
	if (!($D6cc74b0166440ae660eb91330b40c5d < count($d34b4a989f18faefa251e8da7e39a50d))) {
	}

	$channel = $d34b4a989f18faefa251e8da7e39a50d[$D6cc74b0166440ae660eb91330b40c5d];

	$Ff7775d0618d3ac6613a59a77273faa3 = 10;
	$D4a2957ac26758ef35f56b1ea4e57692 = 0;

	$f7fc7fa9f247fe1fd1469501c6419fce = array_slice($C69876dde9ae64088b11e3ccf08fff67, ($c186856cd0cb902e280a0d44a03528a2 - 1) * $Ff7775d0618d3ac6613a59a77273faa3, $Ff7775d0618d3ac6613a59a77273faa3);

	$e450ee2dccee559fa149da32e05edf65[] = date(_('H:i'), $cd0c469d95a51f850a71db0c9a65c558 + (2 * 1800));

	$D6cc74b0166440ae660eb91330b40c5d = 0;

	$B2f0efdb3206a02a8f8c47aafa775358[] = $f7fc7fa9f247fe1fd1469501c6419fce[$D6cc74b0166440ae660eb91330b40c5d]['id'];

	$b6c65a7e6e7f6c6ec15815608e981f0c = $_REQUEST['to'];

	$db94710c22949cbaf95d788629b9d736 = $D29f3c5494cb370b46f3e907dc61f106->B865b38Eb81f98B969E0ac143f701035();

	$cd0c469d95a51f850a71db0c9a65c558 = strtotime($Dba9bc30b45fbdc7080995ec01ed8fef);

	$D4a2957ac26758ef35f56b1ea4e57692 = $D4a2957ac26758ef35f56b1ea4e57692 - (($c186856cd0cb902e280a0d44a03528a2 - 1) * $Ff7775d0618d3ac6613a59a77273faa3);
	$f7fc7fa9f247fe1fd1469501c6419fce = array_merge($f7fc7fa9f247fe1fd1469501c6419fce, $d34b4a989f18faefa251e8da7e39a50d);

	$B2f0efdb3206a02a8f8c47aafa775358 = array();

	if (!($E9e67007c1ec7713c8388f6b18ac08e3 != NULL)) {
	}

	$e450ee2dccee559fa149da32e05edf65[] = date(_('H:i'), $cd0c469d95a51f850a71db0c9a65c558 + 1800);

	$e28326f582181d86f28bbe4e5a77af4e = 0;
	$c186856cd0cb902e280a0d44a03528a2 = 0;

	global $a8410504485e3a44f33464fc660c32ff;
	global $D29f3c5494cb370b46f3e907dc61f106;

	$B5cc17cf15c8818c60b702a8073d7708 = strtotime($b6c65a7e6e7f6c6ec15815608e981f0c);

	$c186856cd0cb902e280a0d44a03528a2 == 1;

	if (!($c186856cd0cb902e280a0d44a03528a2 == 0)) {
	}

	$e28326f582181d86f28bbe4e5a77af4e = (($c186856cd0cb902e280a0d44a03528a2 - $F338c6edc544b27c42d8e8b63756916f - 1) * $Ff7775d0618d3ac6613a59a77273faa3) + ($Ff7775d0618d3ac6613a59a77273faa3 - ($Defd4ca7559a32e1e08cfdc7c19207d4 % $Ff7775d0618d3ac6613a59a77273faa3));

	$c5b08bfe0cf3afc63b09e482c4332da3 = count($e7bcae11e0c1c92bbe1293aa5cb2544c);

	$e450ee2dccee559fa149da32e05edf65[] = date(_('H:i'), $cd0c469d95a51f850a71db0c9a65c558 + (3 * 1800));

	if (!($D6cc74b0166440ae660eb91330b40c5d < count($f7fc7fa9f247fe1fd1469501c6419fce))) {
	}

	$c5b08bfe0cf3afc63b09e482c4332da3 += count($d34b4a989f18faefa251e8da7e39a50d);
	$D4a2957ac26758ef35f56b1ea4e57692 = 0;

	$Defd4ca7559a32e1e08cfdc7c19207d4 = $c5b08bfe0cf3afc63b09e482c4332da3;
	$E3dcb04e2f21ee6d2398b553e841c6dc = false;

	$E6412230eeb5a4348cc57a7876286e4a = array();

	$c186856cd0cb902e280a0d44a03528a2 = ceil($D4a2957ac26758ef35f56b1ea4e57692 / $Ff7775d0618d3ac6613a59a77273faa3);

	$E9e67007c1ec7713c8388f6b18ac08e3++;
	$fddadf41a14b6b579869ce8bf26aabea = b3f724c7ff91e8207b59b52e6be913fc($a8410504485e3a44f33464fc660c32ff['total_info']['user_id'], 'live');

	$dd071e90359849d399bbf08302648c89 = $Ff7775d0618d3ac6613a59a77273faa3;

	$C14fd0ea1adb1f236ff58edf12b73961 = intval($_REQUEST['ch_id']);

	$D4a2957ac26758ef35f56b1ea4e57692 = array_search($C14fd0ea1adb1f236ff58edf12b73961, $B2f0efdb3206a02a8f8c47aafa775358) + 1;
	$D29f3c5494cb370b46f3e907dc61f106->query("\n" . '                SELECT t1.id as stream_id,t2.*' . "\n" . '                FROM `streams` t1' . "\n" . '                LEFT JOIN `epg_data` t2 ON t1.channel_id = t2.channel_id AND t1.epg_lang = t2.lang AND t2.`start` >= \'%d\' AND t2.`end` <= \'%d\'' . "\n" . '                WHERE t1.id IN(' . implode(',', $B2f0efdb3206a02a8f8c47aafa775358) . ')', strtotime($Dba9bc30b45fbdc7080995ec01ed8fef), strtotime($b6c65a7e6e7f6c6ec15815608e981f0c));

	foreach ($d34b4a989f18faefa251e8da7e39a50d as $dd50de71a405ac790979a498b50acfb5) {
		$channel = $dd50de71a405ac790979a498b50acfb5;
	}

	$c186856cd0cb902e280a0d44a03528a2 = intval($_REQUEST['p']);
	return array('total_items' => $c5b08bfe0cf3afc63b09e482c4332da3, 'max_page_items' => $Ff7775d0618d3ac6613a59a77273faa3, 'cur_page' => $c186856cd0cb902e280a0d44a03528a2, 'selected_item' => $D4a2957ac26758ef35f56b1ea4e57692, 'time_marks' => $e450ee2dccee559fa149da32e05edf65, 'from_ts' => $cd0c469d95a51f850a71db0c9a65c558, 'to_ts' => $B5cc17cf15c8818c60b702a8073d7708, 'data' => $C0370129ae871d899244eaf1c9fed218);

	foreach ($B2f0efdb3206a02a8f8c47aafa775358 as $fe6d74fc2aef3103f2d8d34d9ac82807) {
		foreach (c7f4EfC9077Ee6Ca0335AeEdEE3D46AF($db94710c22949cbaf95d788629b9d736, 'stream_id', $fe6d74fc2aef3103f2d8d34d9ac82807) as $F886c344ea4bef6b60deb8e507410faa) {
			$ab89f7f78cfbd295030bb103bef57b64[$A9d57b77cd2da71ebe5f643fb434395d]['director'] = '';

			$ab89f7f78cfbd295030bb103bef57b64[$A9d57b77cd2da71ebe5f643fb434395d]['id'] = $F886c344ea4bef6b60deb8e507410faa['id'];

			$ab89f7f78cfbd295030bb103bef57b64[$A9d57b77cd2da71ebe5f643fb434395d]['start_timestamp'] = $F886c344ea4bef6b60deb8e507410faa['start'];

			$ab89f7f78cfbd295030bb103bef57b64[$A9d57b77cd2da71ebe5f643fb434395d]['category'] = '';

			$ab89f7f78cfbd295030bb103bef57b64[$A9d57b77cd2da71ebe5f643fb434395d]['time_to'] = date('Y-m-d H:i:s', $F886c344ea4bef6b60deb8e507410faa['end']);

			$ab89f7f78cfbd295030bb103bef57b64[$A9d57b77cd2da71ebe5f643fb434395d]['mark_memo'] = 0;

			$ab89f7f78cfbd295030bb103bef57b64[$A9d57b77cd2da71ebe5f643fb434395d]['ch_id'] = $F886c344ea4bef6b60deb8e507410faa['stream_id'];

			$ab89f7f78cfbd295030bb103bef57b64[$A9d57b77cd2da71ebe5f643fb434395d++]['on_date'] = date('l d.m.Y', $F886c344ea4bef6b60deb8e507410faa['start']);

			$ab89f7f78cfbd295030bb103bef57b64[$A9d57b77cd2da71ebe5f643fb434395d]['real_id'] = $F886c344ea4bef6b60deb8e507410faa['stream_id'] . '_' . $F886c344ea4bef6b60deb8e507410faa['start'];

			$ab89f7f78cfbd295030bb103bef57b64[$A9d57b77cd2da71ebe5f643fb434395d]['t_time'] = date('h:i A', $F886c344ea4bef6b60deb8e507410faa['start']);
			$ab89f7f78cfbd295030bb103bef57b64[$A9d57b77cd2da71ebe5f643fb434395d]['duration'] = $F886c344ea4bef6b60deb8e507410faa['end'] - $F886c344ea4bef6b60deb8e507410faa['start'];
			$ab89f7f78cfbd295030bb103bef57b64[$A9d57b77cd2da71ebe5f643fb434395d]['name'] = base64_decode($F886c344ea4bef6b60deb8e507410faa['title']);

			$ab89f7f78cfbd295030bb103bef57b64[$A9d57b77cd2da71ebe5f643fb434395d]['mark_archive'] = 0;
			$ab89f7f78cfbd295030bb103bef57b64[$A9d57b77cd2da71ebe5f643fb434395d]['actor'] = '';

			$ab89f7f78cfbd295030bb103bef57b64[$A9d57b77cd2da71ebe5f643fb434395d]['larr'] = 0;

			$ab89f7f78cfbd295030bb103bef57b64[$A9d57b77cd2da71ebe5f643fb434395d]['time'] = date('Y-m-d H:i:s', $F886c344ea4bef6b60deb8e507410faa['start']);
			$ab89f7f78cfbd295030bb103bef57b64[$A9d57b77cd2da71ebe5f643fb434395d]['stop_timestamp'] = $F886c344ea4bef6b60deb8e507410faa['end'];
			$ab89f7f78cfbd295030bb103bef57b64[$A9d57b77cd2da71ebe5f643fb434395d]['rarr'] = 0;

			$ab89f7f78cfbd295030bb103bef57b64[$A9d57b77cd2da71ebe5f643fb434395d]['display_duration'] = $F886c344ea4bef6b60deb8e507410faa['end'] - $F886c344ea4bef6b60deb8e507410faa['start'];
			$ab89f7f78cfbd295030bb103bef57b64[$A9d57b77cd2da71ebe5f643fb434395d]['t_time_to'] = date('h:i A', $F886c344ea4bef6b60deb8e507410faa['end']);
			$ab89f7f78cfbd295030bb103bef57b64[$A9d57b77cd2da71ebe5f643fb434395d]['mark_rec'] = 0;
			$ab89f7f78cfbd295030bb103bef57b64[$A9d57b77cd2da71ebe5f643fb434395d]['descr'] = base64_decode($F886c344ea4bef6b60deb8e507410faa['description']);
		}

		$A9d57b77cd2da71ebe5f643fb434395d = 0;

		$channel = $fddadf41a14b6b579869ce8bf26aabea['streams'][$fe6d74fc2aef3103f2d8d34d9ac82807];
		$C0370129ae871d899244eaf1c9fed218[$b442e1b28845beafe64eed54322b9196] = array('ch_id' => $fe6d74fc2aef3103f2d8d34d9ac82807, 'name' => $channel['stream_display_name'], 'number' => $D6cc74b0166440ae660eb91330b40c5d++, 'ch_type' => isset($channel['type']) && ($channel['type'] == 'dvb') ? 'dvb' : 'iptv', 'dvb_id' => isset($channel['type']) && ($channel['type'] == 'dvb') ? $channel['dvb_id'] : NULL, 'epg_container' => 1);

		$ab89f7f78cfbd295030bb103bef57b64 = array();
		$C0370129ae871d899244eaf1c9fed218[$b442e1b28845beafe64eed54322b9196++]['epg'] = $ab89f7f78cfbd295030bb103bef57b64;
	}

	$E9e67007c1ec7713c8388f6b18ac08e3 = NULL;

	$F338c6edc544b27c42d8e8b63756916f = ceil($Defd4ca7559a32e1e08cfdc7c19207d4 / $Ff7775d0618d3ac6613a59a77273faa3);
	$D29f3c5494cb370b46f3e907dc61f106->query('SELECT * FROM `streams` WHERE `id` = \'%d\'', $C14fd0ea1adb1f236ff58edf12b73961);

	$C0370129ae871d899244eaf1c9fed218 = array();

	if (!($D4a2957ac26758ef35f56b1ea4e57692 === false)) {
	}

	$Dba9bc30b45fbdc7080995ec01ed8fef = $_REQUEST['from'];
	$e450ee2dccee559fa149da32e05edf65[] = date(_('H:i'), $cd0c469d95a51f850a71db0c9a65c558);
	$channel = $D29f3c5494cb370b46f3e907dc61f106->F46a3680C3D60298922076d7FF56BFca();

	$E9e67007c1ec7713c8388f6b18ac08e3 = $D6cc74b0166440ae660eb91330b40c5d;
	$D6cc74b0166440ae660eb91330b40c5d = 0;
	$D4a2957ac26758ef35f56b1ea4e57692 = array_search($channel['id'], $e7bcae11e0c1c92bbe1293aa5cb2544c);

	$e450ee2dccee559fa149da32e05edf65 = array();
	$D4a2957ac26758ef35f56b1ea4e57692 += $E9e67007c1ec7713c8388f6b18ac08e3;
	$E3dcb04e2f21ee6d2398b553e841c6dc = true;
	if (!empty($channel)) {
	}

	$D6cc74b0166440ae660eb91330b40c5d++;
	$e7bcae11e0c1c92bbe1293aa5cb2544c = array_keys($fddadf41a14b6b579869ce8bf26aabea['streams']);

	$b442e1b28845beafe64eed54322b9196 = 0;
	$D6cc74b0166440ae660eb91330b40c5d = 0;
	$C69876dde9ae64088b11e3ccf08fff67 = array_values($fddadf41a14b6b579869ce8bf26aabea['streams']);
}

function f8a6F414fCd1c792f71f5C0acDC2d3b9($Df1ed0c24afddf3f97f29d7c950a45ef = '*')
{
	$E3dcb04e2f21ee6d2398b553e841c6dc = false;

	$channel['xmltv_id'] = '1';
	$fddadf41a14b6b579869ce8bf26aabea = b3f724c7ff91e8207b59b52e6be913fc($a8410504485e3a44f33464fc660c32ff['total_info']['user_id'], 'movie', $Df1ed0c24afddf3f97f29d7c950a45ef == '*' ? NULL : $Df1ed0c24afddf3f97f29d7c950a45ef);

	$Cacfbf4f99e0ceb07acba32514181ed9 = 0;

	$dc57f80fc208d808c25e8aa56b204dd4 = $D4a2957ac26758ef35f56b1ea4e57692 - (($c186856cd0cb902e280a0d44a03528a2 - 1) * $Ff7775d0618d3ac6613a59a77273faa3);
	$dc57f80fc208d808c25e8aa56b204dd4 = 0;

	$E3dcb04e2f21ee6d2398b553e841c6dc = true;

	return json_encode($E6412230eeb5a4348cc57a7876286e4a);

	$D4a2957ac26758ef35f56b1ea4e57692 = 0;

	$a2c76d1b02d2fb8d00b4382a7a8ffc5b = array();

	$channel['channel_type_id'] = '1';

	if (!($c186856cd0cb902e280a0d44a03528a2 == 0)) {
	}

	$channel['logo_file'] = '';

	$c186856cd0cb902e280a0d44a03528a2 = ceil($D4a2957ac26758ef35f56b1ea4e57692 / $Ff7775d0618d3ac6613a59a77273faa3);
	$fddadf41a14b6b579869ce8bf26aabea = array_slice($fddadf41a14b6b579869ce8bf26aabea['streams'], ($c186856cd0cb902e280a0d44a03528a2 - 1) * $Ff7775d0618d3ac6613a59a77273faa3, $Ff7775d0618d3ac6613a59a77273faa3);
	$e597d71b525329d6251efce9e686f670 = '';
	$c186856cd0cb902e280a0d44a03528a2 = (!empty(B8a6ea05Eebc7e2e3503EA794b1a1ee4::$request['p']) ? B8a6ea05eEbC7e2E3503Ea794b1A1EE4::$request['p'] : 0);

	$c186856cd0cb902e280a0d44a03528a2 = 1;

	foreach ($fddadf41a14b6b579869ce8bf26aabea as $C8583591a971fbe9d0ca3b15ab9931a0) {
		$F5059aceb7f770f71d34d2fecb7dffc5 = array('username' => $a8410504485e3a44f33464fc660c32ff['total_info']['username'], 'password' => $a8410504485e3a44f33464fc660c32ff['total_info']['password'], 'movie_display_name' => $C8583591a971fbe9d0ca3b15ab9931a0['stream_display_name'], 'movie_id' => $C8583591a971fbe9d0ca3b15ab9931a0['id'], 'movie_container' => $C8583591a971fbe9d0ca3b15ab9931a0['container_extension']);

		$a2c76d1b02d2fb8d00b4382a7a8ffc5b[] = array(
	'id'                     => $C8583591a971fbe9d0ca3b15ab9931a0['id'],
	'age'                    => '',
	'cmd'                    => base64_encode(json_encode($F5059aceb7f770f71d34d2fecb7dffc5)),
	'genres_str'             => $B5ef1b8e925cbb136dc323946594da2a['genre'],
	'for_rent'               => 0,
	'lock'                   => 0,
	'sd'                     => 0,
	'hd'                     => 1,
	'screenshots'            => 3330,
	'comments'               => '',
	'low_quality'            => 0,
	'country'                => '',
	'rating_mpaa'            => '',
	'high_quality'           => 0,
	'last_played'            => '',
	'rating_last_update'     => '',
	'rating_count_imdb'      => '',
	'rating_imdb'            => $B5ef1b8e925cbb136dc323946594da2a['rating'],
	'rating_count_kinopoisk' => '',
	'kinopoisk_id'           => '',
	'rating_kinopoisk'       => $B5ef1b8e925cbb136dc323946594da2a['rating'],
	'for_sd_stb'             => 0,
	'last_rate_update'       => NULL,
	'rate'                   => NULL,
	'vote_video_good'        => 0,
	'vote_video_bad'         => 0,
	'vote_sound_bad'         => 0,
	'vote_sound_good'        => 0,
	'count_first_0_5'        => 0,
	'accessed'               => 1,
	'status'                 => 1,
	'disable_for_hd_devices' => 0,
	'count'                  => 49,
	'added'                  => '',
	'owner'                  => '',
	'actors'                 => $B5ef1b8e925cbb136dc323946594da2a['cast'],
	'director'               => $B5ef1b8e925cbb136dc323946594da2a['director'],
	'year'                   => $B5ef1b8e925cbb136dc323946594da2a['releasedate'],
	'cat_genre_id_4'         => 0,
	'cat_genre_id_3'         => 0,
	'cat_genre_id_2'         => 0,
	'cat_genre_id_1'         => 0,
	'genre_id_4'             => 0,
	'genre_id_3'             => 0,
	'genre_id_2'             => 0,
	'genre_id_1'             => 0,
	'category_id'            => $C8583591a971fbe9d0ca3b15ab9931a0['category_id'],
	'name'                   => $C8583591a971fbe9d0ca3b15ab9931a0['stream_display_name'],
	'o_name'                 => $C8583591a971fbe9d0ca3b15ab9931a0['stream_display_name'],
	'old_name'               => '',
	'fname'                  => '',
	'description'            => $B5ef1b8e925cbb136dc323946594da2a['plot'],
	'pic'                    => '',
	'screenshot_uri'         => $B5ef1b8e925cbb136dc323946594da2a['movie_image'],
	'cost'                   => 0,
	'time'                   => intval(60 / 60),
	'file'                   => '',
	'path'                   => '',
	'protocol'               => 'http',
	'rtsp_url'               => '',
	'censored'               => 0,
	'series'                 => array(),
	'volume_correction'      => 0
	);

		$B5ef1b8e925cbb136dc323946594da2a = json_decode($C8583591a971fbe9d0ca3b15ab9931a0['movie_propeties'], true);
	}

	$Cacfbf4f99e0ceb07acba32514181ed9 = $c186856cd0cb902e280a0d44a03528a2;
	global $a8410504485e3a44f33464fc660c32ff;
	global $b40b6d08cf1d86b873b71990f6e15fb5;
	$E6412230eeb5a4348cc57a7876286e4a = array(
		'js' => array('total_items' => $Eb1e602ac9177ef6a4038dc7bfccc53d, 'max_page_items' => $Ff7775d0618d3ac6613a59a77273faa3, 'selected_item' => $dc57f80fc208d808c25e8aa56b204dd4, 'cur_page' => $Cacfbf4f99e0ceb07acba32514181ed9, 'data' => $a2c76d1b02d2fb8d00b4382a7a8ffc5b)
		);
	$Ff7775d0618d3ac6613a59a77273faa3 = 14;
	$Eb1e602ac9177ef6a4038dc7bfccc53d = count($fddadf41a14b6b579869ce8bf26aabea['streams']);
}

$f26b84f8fccc5251844603f4362ba2e9 = true;

$a8410504485e3a44f33464fc660c32ff['total_info']['allowed_ips'] = json_decode($a8410504485e3a44f33464fc660c32ff['total_info']['allowed_ips'], true);

dfA6500b681F783bBbcB94474366Bb27::c1eB15F600f63F79A19131e845B98fD4($a8410504485e3a44f33464fc660c32ff['total_info']['mag_id'], 'MAG_IP_BLOCKED');

$b40b6d08cf1d86b873b71990f6e15fb5 = $a8410504485e3a44f33464fc660c32ff['total_info']['mag_player'] . ' ';
$d58ed83f6ae877a3f0a5fd0a741f794d = (!empty($_REQUEST['image_version']) ? $_REQUEST['image_version'] : NULL);

exit('Identification failed');

session_start();

if ($a8410504485e3a44f33464fc660c32ff = Fea36f206d16ebE2307C68Fd3B0C2ddc($c545b825703f3f27764b9787eda5005e, $a4e6e437f123785c5867b3e1ae39c5a8, $Abb3d4efe78dfc7b1bad760ed2684ae1, $c0e5ee1d70aa2e4352ab9da36be241de, $d58ed83f6ae877a3f0a5fd0a741f794d, $F26e0f5e26d83039822131fb00fdfe4c, $db1ae3594b118d81c17026608f830063, $ef75a38e8a1677c31372dd761e283a1d, $f85f5a03d1a0d3250a635f26c2ef5fa8)) {
}

switch ($A021f0f4fd35701ae160c798b3475861) {
case 'stb':
	switch ($B9e3591e7e82f2cbbf39ba966e315c24) {
	default:
	case 'get_profile':
		$D8e9051727e1b7efaff8645e5f502b4b['status'] = $a0b7fc211773b5c42dce6aafb70af94e;

		$D8e9051727e1b7efaff8645e5f502b4b['default_locale'] = B8A6Ea05EEbC7E2E3503Ea794B1a1EE4::$settings['default_locale'];

		exit(json_encode(array('js' => $D8e9051727e1b7efaff8645e5f502b4b)));

		$D8e9051727e1b7efaff8645e5f502b4b['test_download_url'] = b8A6Ea05eebc7E2E3503EA794b1A1ee4::$settings['test_download_url'];

		$D8e9051727e1b7efaff8645e5f502b4b = array_merge($b8e870a3f8cca366e608f59005c90f5e['get_profile'], $a8410504485e3a44f33464fc660c32ff['mag_info_db']);
		$D8e9051727e1b7efaff8645e5f502b4b['default_timezone'] = B8a6ea05EEBC7e2E3503eA794b1a1Ee4::$settings['default_timezone'];

		$D8e9051727e1b7efaff8645e5f502b4b['allowed_stb_types'] = json_decode(b8A6Ea05EeBc7e2e3503eA794B1A1Ee4::$settings['allowed_stb_types'], true);
		$D8e9051727e1b7efaff8645e5f502b4b['expires'] = $a8410504485e3a44f33464fc660c32ff['total_info']['exp_date'];
		$D8e9051727e1b7efaff8645e5f502b4b['update_url'] = B8a6ea05eEBc7E2E3503ea794b1A1Ee4::$settings['update_url'];
	case 'get_localization':
		exit(json_encode(array('js' => $b8e870a3f8cca366e608f59005c90f5e['get_localization'])));
	case 'log':
		exit(json_encode(array('js' => 1)));
	case 'get_modules':
		exit(json_encode($a5422c4f836a875b6966fbcd241cdaed));

		$a5422c4f836a875b6966fbcd241cdaed = array(
			'js' => array('all_modules' => $b8e870a3f8cca366e608f59005c90f5e['all_modules'], 'switchable_modules' => $b8e870a3f8cca366e608f59005c90f5e['switchable_modules'], 'disabled_modules' => $b8e870a3f8cca366e608f59005c90f5e['disabled_modules'], 'restricted_modules' => $b8e870a3f8cca366e608f59005c90f5e['restricted_modules'], 'template' => $b8e870a3f8cca366e608f59005c90f5e['template'])
			);
	default:
	}
case 'watchdog':
	switch ($B9e3591e7e82f2cbbf39ba966e315c24) {
	case 'get_events':
		exit(json_encode(array('js' => $b729e1e76a388ffdd6a130fbb0325a8e)));
		$D0b2e4bb8c10d75cc1df749d82f76c25 = $D29f3c5494cb370b46f3e907dc61f106->F46a3680C3d60298922076D7Ff56bFcA();

		$b8d031463c8f85879a1f76d22cef529a = array('reboot', 'reload_portal', 'play_channel', 'cut_off');

		$C1ee74fbcad2b778a6174af189d05fc7 = $D29f3c5494cb370b46f3e907dc61f106->b68C0609c13f8645d5E168b69Fd4C118();
		$b729e1e76a388ffdd6a130fbb0325a8e = array(
			'data' => array(
				'msgs'                   => $C1ee74fbcad2b778a6174af189d05fc7,
				'id'                     => $D0b2e4bb8c10d75cc1df749d82f76c25['id'],
				'event'                  => $D0b2e4bb8c10d75cc1df749d82f76c25['event'],
				'need_confirm'           => $D0b2e4bb8c10d75cc1df749d82f76c25['need_confirm'],
				'msg'                    => $D0b2e4bb8c10d75cc1df749d82f76c25['msg'],
				'reboot_after_ok'        => $D0b2e4bb8c10d75cc1df749d82f76c25['reboot_after_ok'],
				'auto_hide_timeout'      => $D0b2e4bb8c10d75cc1df749d82f76c25['auto_hide_timeout'],
				'send_time'              => date('d-m-Y H:i:s', $D0b2e4bb8c10d75cc1df749d82f76c25['send_time']),
				'additional_services_on' => $D0b2e4bb8c10d75cc1df749d82f76c25['additional_services_on'],
				'updated'                => array('anec' => $D0b2e4bb8c10d75cc1df749d82f76c25['anec'], 'vclub' => $D0b2e4bb8c10d75cc1df749d82f76c25['vclub'])
				)
			);
		$D29f3c5494cb370b46f3e907dc61f106->query('SELECT count(*) FROM `mag_events` WHERE `mag_device_id` = \'%d\' AND `status` = 0 ', $a8410504485e3a44f33464fc660c32ff['total_info']['mag_id']);
		if (!in_array($D0b2e4bb8c10d75cc1df749d82f76c25['event'], $b8d031463c8f85879a1f76d22cef529a)) {
		}

		$D29f3c5494cb370b46f3e907dc61f106->query('SELECT * FROM `mag_events` WHERE `mag_device_id` = \'%d\' AND `status` = 0 ORDER BY `id` ASC LIMIT 1', $a8410504485e3a44f33464fc660c32ff['total_info']['mag_id']);
		$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `mag_events` SET `status` = 1 WHERE `id` = \'%d\'', $D0b2e4bb8c10d75cc1df749d82f76c25['id']);
	case 'confirm_event':
		$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `mag_events` SET `status` = 1 WHERE `id` = \'%d\'', $Cde6504c9417248241c32f0cd732a236);
		$Cde6504c9417248241c32f0cd732a236 = b8A6eA05EEbC7e2E3503EA794B1A1ee4::$request['event_active_id'];

		exit(json_encode(array(
	'js' => array('data' => 'ok')
	)));
	default:
	default:
	default:
		$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `mag_devices` SET `last_watchdog` = \'%d\' WHERE `mag_id` = \'%d\'', time(), $a8410504485e3a44f33464fc660c32ff['total_info']['mag_id']);
	}
default:
	$f26b84f8fccc5251844603f4362ba2e9 = true;

	$D6e94ff2705002d806611c79e4aa4442 = time();
	$e36ff43845e111a26b9efb8bf2333f1f = (!empty($_SERVER['HTTP_X_USER_AGENT']) ? $_SERVER['HTTP_X_USER_AGENT'] : NULL);
	$a4e6e437f123785c5867b3e1ae39c5a8 = base64_encode('00:1A:79:28:A9:53');
	@header('Content-type: text/javascript');
	$a8410504485e3a44f33464fc660c32ff = array();

	Dfa6500b681f783bbbCB94474366BB27::C1EB15F600F63f79A19131e845b98fD4($a8410504485e3a44f33464fc660c32ff['total_info']['mag_id'], 'MAG_EXPIRED');

	$b40b6d08cf1d86b873b71990f6e15fb5 = '';

	if ($a8410504485e3a44f33464fc660c32ff['total_info']['enabled'] == 1) {
	}

	DfA6500B681f783bBbCB94474366bb27::C1Eb15F600f63f79a19131E845B98fd4($a8410504485e3a44f33464fc660c32ff['total_info']['mag_id'], 'MAG_BANNED');
	exit('Identification failed');

	$b40b6d08cf1d86b873b71990f6e15fb5 = 'auto ';

	switch ($A021f0f4fd35701ae160c798b3475861) {
	default:
		$a8410504485e3a44f33464fc660c32ff['total_info'] = array_merge($a8410504485e3a44f33464fc660c32ff['mag_info_db'], $a8410504485e3a44f33464fc660c32ff['total_info']);
		$a8410504485e3a44f33464fc660c32ff['total_info']['exp_date'] = empty($a8410504485e3a44f33464fc660c32ff['total_info']['exp_date']) ? array() : $a8410504485e3a44f33464fc660c32ff['total_info']['exp_date'];

		$a8410504485e3a44f33464fc660c32ff['mag_info_db'] = C850559135fd83dFc0d7716d790Bad9F($D29f3c5494cb370b46f3e907dc61f106->F46a3680C3D60298922076D7Ff56bFca());

		$F66f3fb893cb8854839b1a26ff869b8e = F6AcBdF515c1E5F84C3209c7FAA09641('movie', true);
		DfA6500b681f783BbbCB94474366bb27::C1eb15F600F63f79A19131E845b98fD4(NULL, 'MAG_AUTH_FAILED');
	case 'stb':
		switch ($B9e3591e7e82f2cbbf39ba966e315c24) {
		case 'get_preload_images':
			switch ($cdffcf66fff8cd9ecf9a60b4cfb307b2) {
			case '720':
				exit(json_encode(array('js' => $b8e870a3f8cca366e608f59005c90f5e['gmode_720'])));
			case '480':
				exit(json_encode(array('js' => $b8e870a3f8cca366e608f59005c90f5e['gmode_480'])));
			default:
				exit(json_encode(array('js' => $b8e870a3f8cca366e608f59005c90f5e['gmode_default'])));
			}

		case 'get_settings_profile':
			$b8e870a3f8cca366e608f59005c90f5e['settings_array']['js']['test_download_url'] = B8A6eA05EEbc7E2e3503Ea794b1A1ee4::$settings['test_download_url'];

			$b8e870a3f8cca366e608f59005c90f5e['settings_array']['js']['hdmi_event_reaction'] = $Ae3f6d2579ba9cb2ae62f9ef2076de33['hdmi_event_reaction'];
			$b8e870a3f8cca366e608f59005c90f5e['settings_array']['js']['pri_audio_lang'] = $b8e870a3f8cca366e608f59005c90f5e['get_profile']['pri_audio_lang'];

			$b8e870a3f8cca366e608f59005c90f5e['settings_array']['js']['playback_buffer_size'] = $Ae3f6d2579ba9cb2ae62f9ef2076de33['playback_buffer_size'];

			$b8e870a3f8cca366e608f59005c90f5e['settings_array']['js']['parent_password'] = $Ae3f6d2579ba9cb2ae62f9ef2076de33['parent_password'];

			$b8e870a3f8cca366e608f59005c90f5e['settings_array']['js']['ts_delay'] = $Ae3f6d2579ba9cb2ae62f9ef2076de33['ts_delay'];

			$b8e870a3f8cca366e608f59005c90f5e['settings_array']['js']['ts_buffer_use'] = $Ae3f6d2579ba9cb2ae62f9ef2076de33['ts_buffer_use'];

			$b8e870a3f8cca366e608f59005c90f5e['settings_array']['js']['screensaver_delay'] = $Ae3f6d2579ba9cb2ae62f9ef2076de33['screensaver_delay'];

			$b8e870a3f8cca366e608f59005c90f5e['settings_array']['js']['pri_subtitle_lang'] = $b8e870a3f8cca366e608f59005c90f5e['get_profile']['pri_subtitle_lang'];

			$Ae3f6d2579ba9cb2ae62f9ef2076de33 = $D29f3c5494cb370b46f3e907dc61f106->F46A3680c3d60298922076D7Ff56BFca();
			$b8e870a3f8cca366e608f59005c90f5e['settings_array']['js']['ts_action_on_exit'] = $Ae3f6d2579ba9cb2ae62f9ef2076de33['ts_action_on_exit'];

			$b8e870a3f8cca366e608f59005c90f5e['settings_array']['js']['sec_audio_lang'] = $b8e870a3f8cca366e608f59005c90f5e['get_profile']['sec_audio_lang'];

			$b8e870a3f8cca366e608f59005c90f5e['settings_array']['js']['ts_enable_icon'] = $Ae3f6d2579ba9cb2ae62f9ef2076de33['ts_enable_icon'];

			$b8e870a3f8cca366e608f59005c90f5e['settings_array']['js']['spdif_mode'] = $Ae3f6d2579ba9cb2ae62f9ef2076de33['spdif_mode'];
			$b8e870a3f8cca366e608f59005c90f5e['settings_array']['js']['ts_enabled'] = $Ae3f6d2579ba9cb2ae62f9ef2076de33['ts_enabled'];
			$b8e870a3f8cca366e608f59005c90f5e['settings_array']['js']['sec_subtitle_lang'] = $b8e870a3f8cca366e608f59005c90f5e['get_profile']['sec_subtitle_lang'];
			exit(json_encode($b8e870a3f8cca366e608f59005c90f5e['settings_array']));
			$b8e870a3f8cca366e608f59005c90f5e['settings_array']['js']['update_url'] = b8a6Ea05EEBC7E2e3503eA794B1A1Ee4::$settings['update_url'];
			$D29f3c5494cb370b46f3e907dc61f106->query('SELECT * FROM `mag_devices` WHERE `mag_id` = \'%d\'', $a8410504485e3a44f33464fc660c32ff['total_info']['mag_id']);

			$b8e870a3f8cca366e608f59005c90f5e['settings_array']['js']['ts_max_length'] = $Ae3f6d2579ba9cb2ae62f9ef2076de33['ts_max_length'];
			$b8e870a3f8cca366e608f59005c90f5e['settings_array']['js']['plasma_saving'] = $Ae3f6d2579ba9cb2ae62f9ef2076de33['plasma_saving'];
			$b8e870a3f8cca366e608f59005c90f5e['settings_array']['js']['show_after_loading'] = $Ae3f6d2579ba9cb2ae62f9ef2076de33['show_after_loading'];
			$b8e870a3f8cca366e608f59005c90f5e['settings_array']['js']['ts_path'] = $Ae3f6d2579ba9cb2ae62f9ef2076de33['ts_path'];
		case 'get_locales':
			$c07b8e8f7788930ecd282d3047edbcd4 = $D29f3c5494cb370b46f3e907dc61f106->F46A3680c3d60298922076D7ff56bFca();

			$D29f3c5494cb370b46f3e907dc61f106->query('SELECT `locale` FROM `mag_devices` WHERE `mag_id` = \'%d\'', $a8410504485e3a44f33464fc660c32ff['total_info']['mag_id']);

			foreach ($b8e870a3f8cca366e608f59005c90f5e['get_locales'] as $fdcceffee05a243f8a7b41fe9bfa4ddf => $Beb9cf543f12c74011255da0aa5c8e7e) {
				$E6412230eeb5a4348cc57a7876286e4a[] = array('label' => $fdcceffee05a243f8a7b41fe9bfa4ddf, 'value' => $Beb9cf543f12c74011255da0aa5c8e7e, 'selected' => $c07b8e8f7788930ecd282d3047edbcd4);
				$c07b8e8f7788930ecd282d3047edbcd4 = ($c07b8e8f7788930ecd282d3047edbcd4['locale'] == $Beb9cf543f12c74011255da0aa5c8e7e ? 1 : 0);
			}

			exit(json_encode(array('js' => $E6412230eeb5a4348cc57a7876286e4a)));
			$E6412230eeb5a4348cc57a7876286e4a = array();
		case 'get_countries':
			exit(json_encode(array('js' => true)));
		case 'get_timezones':
			exit(json_encode(array('js' => true)));
		case 'get_cities':
			exit(json_encode(array('js' => true)));
		case 'get_tv_aspects':
			exit($a8410504485e3a44f33464fc660c32ff['mag_info_db']['aspect']);
		case 'set_volume':
			$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `mag_devices` SET `volume` = \'%d\' WHERE `mag_id` = \'%d\'', $Dc0cfc7fd8e4721b3ca54af95ad0c3b0, $a8410504485e3a44f33464fc660c32ff['mag_info_db']['mag_id']);
			exit(json_encode(array('data' => true)));

			$Dc0cfc7fd8e4721b3ca54af95ad0c3b0 = B8a6eA05EEBc7e2e3503EA794B1a1eE4::$request['vol'];
		case 'set_aspect':
			exit('Identification failed');

			$C14fd0ea1adb1f236ff58edf12b73961 = B8a6EA05eEBc7E2E3503Ea794b1A1eE4::$request['ch_id'];
			$e3f1bf8519bc0c744331da9b30a4f1cc = B8A6Ea05EebC7E2e3503Ea794b1A1Ee4::$request['aspect'];

			$Db4f1546a972d77e2066fcff8253d718 = json_decode($Db4f1546a972d77e2066fcff8253d718, true);

			if (is_null($Db4f1546a972d77e2066fcff8253d718)) {
			}

			exit('Identification failed');

			exit(json_encode(array('js' => true)));

			$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `mag_devices` SET `aspect` = \'%s\' WHERE mag_id = \'%d\'', json_encode($Db4f1546a972d77e2066fcff8253d718), $a8410504485e3a44f33464fc660c32ff['mag_info_db']['mag_id']);
			$Db4f1546a972d77e2066fcff8253d718['js'][$C14fd0ea1adb1f236ff58edf12b73961] = $e3f1bf8519bc0c744331da9b30a4f1cc;

			$Db4f1546a972d77e2066fcff8253d718 = $a8410504485e3a44f33464fc660c32ff['mag_info_db']['aspect'];
			if (!(empty($C14fd0ea1adb1f236ff58edf12b73961) && empty($D1fa1ae49b7333e76c7d057da3131fab))) {
			}

			$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `mag_devices` SET `aspect` = \'%s\' WHERE mag_id = \'%d\'', json_encode(array(
	'js' => array($C14fd0ea1adb1f236ff58edf12b73961 => $e3f1bf8519bc0c744331da9b30a4f1cc)
	)), $a8410504485e3a44f33464fc660c32ff['mag_info_db']['mag_id']);
		case 'set_stream_error':
			exit(json_encode(array('js' => true)));
		case 'set_screensaver_delay':
			$bd8beedb5cbe7365ec64e76dddff41b8 = intval($_REQUEST['screensaver_delay']);

			$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `mag_devices` SET `screensaver_delay` = \'%d\' WHERE `mag_id` = \'%d\'', $bd8beedb5cbe7365ec64e76dddff41b8, $a8410504485e3a44f33464fc660c32ff['total_info']['mag_id']);

			if (!empty($_SERVER['HTTP_COOKIE'])) {
			}

			exit(json_encode(array('js' => true)));
			exit('Identification failed');
		case 'set_playback_buffer':
			$a4892eabfc8ecc1a4924a5efab8aa260 = intval($_REQUEST['playback_buffer_bytes']);
			$c5a17073c0853a3d7d3a8e7d58bff459 = intval($_REQUEST['playback_buffer_size']);

			exit('Identification failed');

			exit(json_encode(array('js' => true)));
			$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `mag_devices` SET `playback_buffer_bytes` = \'%d\' , `playback_buffer_size` = \'%d\' WHERE `mag_id` = \'%d\'', $a4892eabfc8ecc1a4924a5efab8aa260, $c5a17073c0853a3d7d3a8e7d58bff459, $a8410504485e3a44f33464fc660c32ff['total_info']['mag_id']);
		case 'set_plasma_saving':
			exit(json_encode(array('js' => true)));

			exit('Identification failed');

			$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `mag_devices` SET `plasma_saving` = \'%d\' WHERE `mag_id` = \'%d\'', $Fa652d614e29a85a4e82b02f1c418bfb, $a8410504485e3a44f33464fc660c32ff['total_info']['mag_id']);

			$Fa652d614e29a85a4e82b02f1c418bfb = intval($_REQUEST['plasma_saving']);
		case 'set_parent_password':
			$a4e7a70bef940ca3aa6e0e8e2db1e3a8 = $_REQUEST['repeat_pass'];

			$D29f3c5494cb370b46f3e907dc61f106->query('SELECT `parent_password` FROM `mag_devices` WHERE `mag_id` = \'%d\'', $a8410504485e3a44f33464fc660c32ff['total_info']['mag_id']);

			if (!(0 < $D29f3c5494cb370b46f3e907dc61f106->b068A09B89fc39AD0b9AfCF85f0F1A18())) {
			}

			exit('Identification failed');

			exit(json_encode(array('js' => true)));
			if (!empty($_SERVER['HTTP_COOKIE']) && isset($_REQUEST['parent_password']) && isset($_REQUEST['pass']) && isset($_REQUEST['repeat_pass']) && ($_REQUEST['pass'] == $_REQUEST['repeat_pass'])) {
			}

			$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `mag_devices` SET `parent_password` = \'%s\' WHERE `mag_id` = \'%d\'', $a1bf359840cea07cef93063d7424b0de, $a8410504485e3a44f33464fc660c32ff['total_info']['mag_id']);
			$a1bf359840cea07cef93063d7424b0de = $_REQUEST['pass'];
		case 'set_locale':
			exit(json_encode(array('js' => true)));

			if (!empty($_SERVER['HTTP_COOKIE'])) {
			}

			exit('Identification failed');
		case 'set_hdmi_reaction':
			$f867dd65dcb5a2bbc04dca1010bd0def = $_REQUEST['data'];

			exit(json_encode(array('js' => true)));
			exit('Identification failed');
			$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `mag_devices` SET `hdmi_event_reaction` = \'%s\' WHERE `mag_id` = \'%d\'', $f867dd65dcb5a2bbc04dca1010bd0def, $a8410504485e3a44f33464fc660c32ff['total_info']['mag_id']);
		}

	case 'itv':
		switch ($B9e3591e7e82f2cbbf39ba966e315c24) {
		default:
		case 'get_fav_ids':
			$E6412230eeb5a4348cc57a7876286e4a = array('js' => true);

			exit();

			echo json_encode($E6412230eeb5a4348cc57a7876286e4a);
		case 'get_all_channels':
			exit(d81a57e1f275b27658c666370c20051a('*', true));
		case 'get_ordered_list':
			exit(d81a57e1f275b27658c666370c20051a(!empty($_REQUEST['genre']) ? $_REQUEST['genre'] : '*'));
		case 'get_all_fav_channels':
			exit(json_encode(array(
	'js' => array(
		'total_items'    => 0,
		'max_page_items' => 14,
		'selected_item'  => 0,
		'cur_page'       => 1,
		'data'           => array()
		)
	)));
		case 'get_epg_info':
			$fddadf41a14b6b579869ce8bf26aabea = b3f724c7ff91e8207b59b52e6be913fc($a8410504485e3a44f33464fc660c32ff['total_info']['user_id'], 'live');
			$F886c344ea4bef6b60deb8e507410faa = array(
				'js' => array()
				);

			exit(json_encode($F886c344ea4bef6b60deb8e507410faa));
			foreach ($fddadf41a14b6b579869ce8bf26aabea['streams'] as $afb609099323b838de4f613fe8aa2eab => $Da88f16fe9e174bc837e9bc400f48c0e) {
				$F886c344ea4bef6b60deb8e507410faa['js']['data'][$Da88f16fe9e174bc837e9bc400f48c0e['id']][$D6cc74b0166440ae660eb91330b40c5d]['mark_archive'] = 0;

				$F886c344ea4bef6b60deb8e507410faa['js']['data'][$Da88f16fe9e174bc837e9bc400f48c0e['id']][$D6cc74b0166440ae660eb91330b40c5d]['id'] = $Dbe697209cf032b6c53ba16792770b44[$D6cc74b0166440ae660eb91330b40c5d]['id'];

				$F886c344ea4bef6b60deb8e507410faa['js']['data'][$Da88f16fe9e174bc837e9bc400f48c0e['id']][$D6cc74b0166440ae660eb91330b40c5d]['start_timestamp'] = $Dbe697209cf032b6c53ba16792770b44[$D6cc74b0166440ae660eb91330b40c5d]['start'];

				$F886c344ea4bef6b60deb8e507410faa['js']['data'][$Da88f16fe9e174bc837e9bc400f48c0e['id']][$D6cc74b0166440ae660eb91330b40c5d]['actor'] = '';

				$F886c344ea4bef6b60deb8e507410faa['js']['data'][$Da88f16fe9e174bc837e9bc400f48c0e['id']][$D6cc74b0166440ae660eb91330b40c5d]['duration'] = $Dbe697209cf032b6c53ba16792770b44[$D6cc74b0166440ae660eb91330b40c5d]['end'] - $Dbe697209cf032b6c53ba16792770b44[$D6cc74b0166440ae660eb91330b40c5d]['start'];

				$Dbe697209cf032b6c53ba16792770b44 = $D29f3c5494cb370b46f3e907dc61f106->b865b38Eb81f98B969e0Ac143F701035();

				$F886c344ea4bef6b60deb8e507410faa['js']['data'][$Da88f16fe9e174bc837e9bc400f48c0e['id']][$D6cc74b0166440ae660eb91330b40c5d]['director'] = '';

				$F886c344ea4bef6b60deb8e507410faa['js']['data'][$Da88f16fe9e174bc837e9bc400f48c0e['id']][$D6cc74b0166440ae660eb91330b40c5d]['time'] = date('Y-m-d H:i:s', $Dbe697209cf032b6c53ba16792770b44[$D6cc74b0166440ae660eb91330b40c5d]['start']);

				$F886c344ea4bef6b60deb8e507410faa['js']['data'][$Da88f16fe9e174bc837e9bc400f48c0e['id']][$D6cc74b0166440ae660eb91330b40c5d]['mark_rec'] = 0;

				$D6cc74b0166440ae660eb91330b40c5d = 0;

				$F886c344ea4bef6b60deb8e507410faa['js']['data'][$Da88f16fe9e174bc837e9bc400f48c0e['id']][$D6cc74b0166440ae660eb91330b40c5d]['mark_memo'] = 0;
				$F886c344ea4bef6b60deb8e507410faa['js']['data'][$Da88f16fe9e174bc837e9bc400f48c0e['id']][$D6cc74b0166440ae660eb91330b40c5d]['stop_timestamp'] = $Dbe697209cf032b6c53ba16792770b44[$D6cc74b0166440ae660eb91330b40c5d]['end'];

				$F886c344ea4bef6b60deb8e507410faa['js']['data'][$Da88f16fe9e174bc837e9bc400f48c0e['id']][$D6cc74b0166440ae660eb91330b40c5d]['t_time_to'] = date('h:i A', $Dbe697209cf032b6c53ba16792770b44[$D6cc74b0166440ae660eb91330b40c5d]['end']);

				$F886c344ea4bef6b60deb8e507410faa['js']['data'][$Da88f16fe9e174bc837e9bc400f48c0e['id']][$D6cc74b0166440ae660eb91330b40c5d]['time_to'] = date('Y-m-d H:i:s', $Dbe697209cf032b6c53ba16792770b44[$D6cc74b0166440ae660eb91330b40c5d]['end']);

				$F886c344ea4bef6b60deb8e507410faa['js']['data'][$Da88f16fe9e174bc837e9bc400f48c0e['id']][$D6cc74b0166440ae660eb91330b40c5d]['larr'] = 0;

				$F886c344ea4bef6b60deb8e507410faa['js']['data'][$Da88f16fe9e174bc837e9bc400f48c0e['id']][$D6cc74b0166440ae660eb91330b40c5d]['t_time'] = date('h:i A', $Dbe697209cf032b6c53ba16792770b44[$D6cc74b0166440ae660eb91330b40c5d]['start']);

				$F886c344ea4bef6b60deb8e507410faa['js']['data'][$Da88f16fe9e174bc837e9bc400f48c0e['id']][$D6cc74b0166440ae660eb91330b40c5d]['category'] = '';

				$F886c344ea4bef6b60deb8e507410faa['js']['data'][$Da88f16fe9e174bc837e9bc400f48c0e['id']][$D6cc74b0166440ae660eb91330b40c5d]['descr'] = base64_decode($Dbe697209cf032b6c53ba16792770b44[$D6cc74b0166440ae660eb91330b40c5d]['description']);

				$F886c344ea4bef6b60deb8e507410faa['js']['data'][$Da88f16fe9e174bc837e9bc400f48c0e['id']][$D6cc74b0166440ae660eb91330b40c5d]['ch_id'] = $Da88f16fe9e174bc837e9bc400f48c0e['id'];
				$D6cc74b0166440ae660eb91330b40c5d++;

				$F886c344ea4bef6b60deb8e507410faa['js']['data'][$Da88f16fe9e174bc837e9bc400f48c0e['id']][$D6cc74b0166440ae660eb91330b40c5d]['rarr'] = 0;
				$D29f3c5494cb370b46f3e907dc61f106->query('SELECT * FROM `epg_data` WHERE `start` >= \'%d\' AND `channel_id` = \'%s\' AND `lang` = \'%s\' ORDER BY `start` ASC LIMIT 10', $D6e94ff2705002d806611c79e4aa4442, $Da88f16fe9e174bc837e9bc400f48c0e['channel_id'], $Da88f16fe9e174bc837e9bc400f48c0e['epg_lang']);

				if (!($D6cc74b0166440ae660eb91330b40c5d < count($Dbe697209cf032b6c53ba16792770b44))) {
				}

				$F886c344ea4bef6b60deb8e507410faa['js']['data'][$Da88f16fe9e174bc837e9bc400f48c0e['id']][$D6cc74b0166440ae660eb91330b40c5d]['display_duration'] = $Dbe697209cf032b6c53ba16792770b44[$D6cc74b0166440ae660eb91330b40c5d]['end'] - $Dbe697209cf032b6c53ba16792770b44[$D6cc74b0166440ae660eb91330b40c5d]['start'];

				$F886c344ea4bef6b60deb8e507410faa['js']['data'][$Da88f16fe9e174bc837e9bc400f48c0e['id']][$D6cc74b0166440ae660eb91330b40c5d]['real_id'] = $Da88f16fe9e174bc837e9bc400f48c0e['id'] . '_' . $Dbe697209cf032b6c53ba16792770b44[$D6cc74b0166440ae660eb91330b40c5d]['start'];
				$F886c344ea4bef6b60deb8e507410faa['js']['data'][$Da88f16fe9e174bc837e9bc400f48c0e['id']][$D6cc74b0166440ae660eb91330b40c5d]['name'] = base64_decode($Dbe697209cf032b6c53ba16792770b44[$D6cc74b0166440ae660eb91330b40c5d]['title']);
				$F886c344ea4bef6b60deb8e507410faa['js']['data'][$Da88f16fe9e174bc837e9bc400f48c0e['id']][$D6cc74b0166440ae660eb91330b40c5d]['on_date'] = date('l d.m.Y', $Dbe697209cf032b6c53ba16792770b44[$D6cc74b0166440ae660eb91330b40c5d]['start']);
			}

		case 'set_fav_status':
			exit(json_encode(array(
	'js' => array()
	)));
		case 'get_short_epg':
			$F886c344ea4bef6b60deb8e507410faa['js'][$D6cc74b0166440ae660eb91330b40c5d]['t_time_to'] = date('h:i A', $e8f242950a49db271c953f4bdbc9dd6b[$D6cc74b0166440ae660eb91330b40c5d]['end']);

			$F886c344ea4bef6b60deb8e507410faa['js'][$D6cc74b0166440ae660eb91330b40c5d]['real_id'] = $C14fd0ea1adb1f236ff58edf12b73961 . '_' . $e8f242950a49db271c953f4bdbc9dd6b[$D6cc74b0166440ae660eb91330b40c5d]['start'];

			$F886c344ea4bef6b60deb8e507410faa['js'][$D6cc74b0166440ae660eb91330b40c5d]['duration'] = $e8f242950a49db271c953f4bdbc9dd6b[$D6cc74b0166440ae660eb91330b40c5d]['end'] - $e8f242950a49db271c953f4bdbc9dd6b[$D6cc74b0166440ae660eb91330b40c5d]['start'];
			$F886c344ea4bef6b60deb8e507410faa['js'][$D6cc74b0166440ae660eb91330b40c5d]['name'] = base64_decode($e8f242950a49db271c953f4bdbc9dd6b[$D6cc74b0166440ae660eb91330b40c5d]['title']);

			$D29f3c5494cb370b46f3e907dc61f106->query('SELECT * FROM `epg_data` WHERE `epg_id` = \'%d\' AND `channel_id` = \'%s\' AND `lang` = \'%s\' AND `end` >= \'%d\' ORDER BY `start` ASC LIMIT 4', $D051345f9ba43a2732631283a15fd07d['epg_id'], $D051345f9ba43a2732631283a15fd07d['channel_id'], $D051345f9ba43a2732631283a15fd07d['epg_lang'], time());

			$F886c344ea4bef6b60deb8e507410faa['js'][$D6cc74b0166440ae660eb91330b40c5d]['director'] = '';

			$F886c344ea4bef6b60deb8e507410faa['js'][$D6cc74b0166440ae660eb91330b40c5d]['actor'] = '';
			$F886c344ea4bef6b60deb8e507410faa['js'][$D6cc74b0166440ae660eb91330b40c5d]['start_timestamp'] = $e8f242950a49db271c953f4bdbc9dd6b[$D6cc74b0166440ae660eb91330b40c5d]['start'];
			$D051345f9ba43a2732631283a15fd07d = $D29f3c5494cb370b46f3e907dc61f106->F46a3680c3d60298922076D7ff56bFCA();
			$F886c344ea4bef6b60deb8e507410faa['js'][$D6cc74b0166440ae660eb91330b40c5d]['mark_memo'] = 0;

			$F886c344ea4bef6b60deb8e507410faa['js'][$D6cc74b0166440ae660eb91330b40c5d]['time_to'] = date('Y-m-d H:i:s', $e8f242950a49db271c953f4bdbc9dd6b[$D6cc74b0166440ae660eb91330b40c5d]['end']);
			$F886c344ea4bef6b60deb8e507410faa['js'][$D6cc74b0166440ae660eb91330b40c5d]['mark_archive'] = 0;

			$D29f3c5494cb370b46f3e907dc61f106->query('SELECT `channel_id`,`epg_lang`,`epg_id` FROM `streams` WHERE `id` = \'%d\' AND epg_id IS NOT NULL', $C14fd0ea1adb1f236ff58edf12b73961);

			$e8f242950a49db271c953f4bdbc9dd6b = $D29f3c5494cb370b46f3e907dc61f106->b865B38eb81F98b969e0aC143F701035();

			$F886c344ea4bef6b60deb8e507410faa = array(
				'js' => array()
				);

			$F886c344ea4bef6b60deb8e507410faa['js'][$D6cc74b0166440ae660eb91330b40c5d]['time'] = date('Y-m-d H:i:s', $e8f242950a49db271c953f4bdbc9dd6b[$D6cc74b0166440ae660eb91330b40c5d]['start']);

			if (!(0 < $D29f3c5494cb370b46f3e907dc61f106->b068A09b89Fc39Ad0b9AFcf85F0f1a18())) {
			}

			exit(json_encode($F886c344ea4bef6b60deb8e507410faa));
			$F886c344ea4bef6b60deb8e507410faa['js'][$D6cc74b0166440ae660eb91330b40c5d]['category'] = '';
			$F886c344ea4bef6b60deb8e507410faa['js'][$D6cc74b0166440ae660eb91330b40c5d]['stop_timestamp'] = $e8f242950a49db271c953f4bdbc9dd6b[$D6cc74b0166440ae660eb91330b40c5d]['end'];

			if (empty($_REQUEST['ch_id'])) {
			}

			$F886c344ea4bef6b60deb8e507410faa['js'][$D6cc74b0166440ae660eb91330b40c5d]['descr'] = base64_decode($e8f242950a49db271c953f4bdbc9dd6b[$D6cc74b0166440ae660eb91330b40c5d]['description']);
			$F886c344ea4bef6b60deb8e507410faa['js'][$D6cc74b0166440ae660eb91330b40c5d]['id'] = $e8f242950a49db271c953f4bdbc9dd6b[$D6cc74b0166440ae660eb91330b40c5d]['id'];

			if (!(0 < $D29f3c5494cb370b46f3e907dc61f106->B068a09b89fc39Ad0B9afCf85F0f1a18())) {
			}

			$F886c344ea4bef6b60deb8e507410faa['js'][$D6cc74b0166440ae660eb91330b40c5d]['t_time'] = date('h:i A', $e8f242950a49db271c953f4bdbc9dd6b[$D6cc74b0166440ae660eb91330b40c5d]['start']);
			$C14fd0ea1adb1f236ff58edf12b73961 = $_REQUEST['ch_id'];
			$F886c344ea4bef6b60deb8e507410faa['js'][$D6cc74b0166440ae660eb91330b40c5d]['ch_id'] = $C14fd0ea1adb1f236ff58edf12b73961;
			$D6cc74b0166440ae660eb91330b40c5d++;
			$D6cc74b0166440ae660eb91330b40c5d = 0;
			exit();
		case 'set_played':
			exit(json_encode(array('js' => true)));
		case 'set_last_id':
			exit(json_encode(array('js' => true)));
		case 'get_genres':
			exit(json_encode($E6412230eeb5a4348cc57a7876286e4a));

			foreach ($d31155e125dc0ceb1a8fcbe1611205cd as $bc46d156d79a6094645f11a1aad481eb => $d56402e625d92174f460d8f79527097b) {
				$E6412230eeb5a4348cc57a7876286e4a['js'][] = array('id' => $d56402e625d92174f460d8f79527097b['id'], 'title' => $d56402e625d92174f460d8f79527097b['category_name'], 'alias' => $d56402e625d92174f460d8f79527097b['category_name']);
			}

			$E6412230eeb5a4348cc57a7876286e4a = array();

			$E6412230eeb5a4348cc57a7876286e4a['js'][] = array('id' => '*', 'title' => 'All', 'alias' => 'All');

			if (!(B8A6EA05eEbc7e2E3503ea794B1A1Ee4::$settings['show_all_category_mag'] == 1)) {
			}

		default:
		}
	case 'remote_pvr':
		switch ($B9e3591e7e82f2cbbf39ba966e315c24) {
		default:
		case 'get_active_recordings':
			exit(json_encode(array(
	'js' => array()
	)));
		default:
		default:
		}
	case 'media_favorites':
		switch ($B9e3591e7e82f2cbbf39ba966e315c24) {
		default:
		case 'get_all':
			exit(json_encode(array('js' => '""')));
		default:
		}
	case 'tvreminder':
		switch ($B9e3591e7e82f2cbbf39ba966e315c24) {
		default:
		case 'get_all_active':
			exit(json_encode(array(
	'js' => array()
	)));
		}

	case 'vod':
		switch ($B9e3591e7e82f2cbbf39ba966e315c24) {
		default:
		case 'get_categories':
			exit(json_encode($E6412230eeb5a4348cc57a7876286e4a));

			foreach ($F66f3fb893cb8854839b1a26ff869b8e as $Ea14265551fc270d6ad31bd5a62bd683 => $Efff3393a57c6e4e810cbb52e26ee9f5) {
				$E6412230eeb5a4348cc57a7876286e4a['js'][] = array('id' => $Efff3393a57c6e4e810cbb52e26ee9f5['id'], 'title' => $Efff3393a57c6e4e810cbb52e26ee9f5['category_name'], 'alias' => $Efff3393a57c6e4e810cbb52e26ee9f5['category_name']);
			}

			$E6412230eeb5a4348cc57a7876286e4a = array();

			$E6412230eeb5a4348cc57a7876286e4a['js'][] = array('id' => '*', 'title' => 'All', 'alias' => 'All');

			if (!(B8a6Ea05eeBc7e2E3503ea794b1A1Ee4::$settings['v'] == 1)) {
			}

		case 'get_genres_by_category_alias':
			$E6412230eeb5a4348cc57a7876286e4a['js'][] = array('id' => '*', 'title' => '*');

			foreach ($F66f3fb893cb8854839b1a26ff869b8e as $Ea14265551fc270d6ad31bd5a62bd683 => $Efff3393a57c6e4e810cbb52e26ee9f5) {
				$E6412230eeb5a4348cc57a7876286e4a['js'][] = array('id' => $Efff3393a57c6e4e810cbb52e26ee9f5['id'], 'title' => $Efff3393a57c6e4e810cbb52e26ee9f5['category_name']);
			}

			$E6412230eeb5a4348cc57a7876286e4a = array();
			exit(json_encode($E6412230eeb5a4348cc57a7876286e4a));
		case 'get_years':
			exit(json_encode($b8e870a3f8cca366e608f59005c90f5e['get_years']));
		case 'get_ordered_list':
			$d60b5925e067cbf3b0afee8a5511c140 = (!empty(B8A6ea05Eebc7E2E3503EA794B1A1ee4::$request['category']) ? b8A6eA05EEBc7e2E3503ea794b1A1ee4::$request['category'] : '*');
			exit(F8a6F414Fcd1C792f71f5C0AcDC2d3B9($d60b5925e067cbf3b0afee8a5511c140));
		case 'create_link':
			exit(json_encode($E6412230eeb5a4348cc57a7876286e4a));
			$b729e1e76a388ffdd6a130fbb0325a8e = json_decode(base64_decode($_REQUEST['cmd']), true);
			$E6412230eeb5a4348cc57a7876286e4a = array(
				'js' => array('id' => $b729e1e76a388ffdd6a130fbb0325a8e['movie_id'], 'cmd' => b8a6Ea05eebC7E2e3503ea794B1a1EE4::$StreamingServers[SERVER_ID]['site_url'] . 'movie/' . $a8410504485e3a44f33464fc660c32ff['total_info']['username'] . '/' . $a8410504485e3a44f33464fc660c32ff['total_info']['password'] . '/' . $b729e1e76a388ffdd6a130fbb0325a8e['movie_id'] . '.' . $b729e1e76a388ffdd6a130fbb0325a8e['movie_container'], 'load' => 0, 'error' => '', 'from_cache' => 1)
				);
		case 'log':
			exit(json_encode(array('js' => 1)));
		case 'get_abc':
			exit(json_encode($b8e870a3f8cca366e608f59005c90f5e['get_abc']));
		default:
		}
	case 'downloads':
		switch ($B9e3591e7e82f2cbbf39ba966e315c24) {
		default:
		case 'get_all':
			exit(json_encode(array('js' => '""')));
		case 'get_all':
			exit(json_encode(array('js' => true)));
		}
	case 'weatherco':
		switch ($B9e3591e7e82f2cbbf39ba966e315c24) {
		case 'get_current':
			exit(json_encode(array('js' => false)));
		}

	case 'course':
		switch ($B9e3591e7e82f2cbbf39ba966e315c24) {
		default:
		case 'get_data':
			exit(json_encode(array('js' => true)));
		}
	case 'account_info':
		switch ($B9e3591e7e82f2cbbf39ba966e315c24) {
		default:
		case 'get_terms_info':
			exit(json_encode(array('js' => true)));
		case 'get_payment_info':
			exit(json_encode(array('js' => true)));
		case 'get_main_info':
			exit(json_encode(array('js' => true)));
		case 'get_demo_video_parts':
			exit(json_encode(array('js' => true)));
		case 'get_agreement_info':
			exit(json_encode(array('js' => true)));
		}
	case 'radio':
		switch ($B9e3591e7e82f2cbbf39ba966e315c24) {
		default:
		case 'get_ordered_list':
			exit(json_encode(array(
	'js' => array('total_items' => 0, 'max_page_items' => 14, 'selected_item' => 0, 'cur_page' => 1, 'data' => '')
	)));
		}
	case 'epg':
		switch ($B9e3591e7e82f2cbbf39ba966e315c24) {
		default:
		case 'get_week':
			$F7ed7385e174b0b3fa5a709053a7993f['js'][$D6cc74b0166440ae660eb91330b40c5d]['f_mysql'] = date('Y-m-d', $c3d566a41320cd1965ea1c61206a4e1a);

			$c3d566a41320cd1965ea1c61206a4e1a = $E03150b42d77eb1f50dbbc89e2f2a2c9 + ($c17ac00f16e66552f95207ec7818895a * 86400);

			$c17ac00f16e66552f95207ec7818895a = -3;

			$c17ac00f16e66552f95207ec7818895a++;

			exit(json_encode($F7ed7385e174b0b3fa5a709053a7993f));
			$F7ed7385e174b0b3fa5a709053a7993f['js'][$D6cc74b0166440ae660eb91330b40c5d]['f_human'] = date('D d F', $c3d566a41320cd1965ea1c61206a4e1a);

			$F7ed7385e174b0b3fa5a709053a7993f = array();
			$F7ed7385e174b0b3fa5a709053a7993f['js'][$D6cc74b0166440ae660eb91330b40c5d]['today'] = $c17ac00f16e66552f95207ec7818895a == 0 ? 1 : 0;

			$D6cc74b0166440ae660eb91330b40c5d++;
			$D6cc74b0166440ae660eb91330b40c5d = 0;
			$E03150b42d77eb1f50dbbc89e2f2a2c9 = strtotime(date('Y-m-d'));
		case 'get_data_table':
			exit();
			exit(json_encode(array('js' => Bcc24D4a73750fD1cAb178fe54FA4C98())));
		case 'get_simple_data_table':
			$b0c9dbcaf52f5eca636a20ce7857df56 = explode('-', $Be0eb8b19004800717279afcf8a73867);

			$b729e1e76a388ffdd6a130fbb0325a8e[$D6cc74b0166440ae660eb91330b40c5d]['descr'] = base64_decode($ed6f7ff8dab37b6c41791e5e6bf75f7f[$D6cc74b0166440ae660eb91330b40c5d]['description']);

			$b729e1e76a388ffdd6a130fbb0325a8e[$D6cc74b0166440ae660eb91330b40c5d]['name'] = base64_decode($ed6f7ff8dab37b6c41791e5e6bf75f7f[$D6cc74b0166440ae660eb91330b40c5d]['title']);

			$dc57f80fc208d808c25e8aa56b204dd4 = 0;

			$b729e1e76a388ffdd6a130fbb0325a8e[$D6cc74b0166440ae660eb91330b40c5d]['start_timestamp'] = $ed6f7ff8dab37b6c41791e5e6bf75f7f[$D6cc74b0166440ae660eb91330b40c5d]['start'];

			$c53376be93b8d3e047dc6bc633fb0748 = array();

			$C14fd0ea1adb1f236ff58edf12b73961 = $_REQUEST['ch_id'];

			if (!($D6cc74b0166440ae660eb91330b40c5d < count($ed6f7ff8dab37b6c41791e5e6bf75f7f))) {
			}

			exit(json_encode($E6412230eeb5a4348cc57a7876286e4a));

			exit();

			$E6412230eeb5a4348cc57a7876286e4a['js']['max_page_items'] = $Ff7775d0618d3ac6613a59a77273faa3;

			if (!($c186856cd0cb902e280a0d44a03528a2 == 0)) {
			}

			$D6cc74b0166440ae660eb91330b40c5d = 0;

			$c2e26cdd00ae42b0ad53713d8d91e239 = mktime(23, 59, 59, $b0c9dbcaf52f5eca636a20ce7857df56[1], $b0c9dbcaf52f5eca636a20ce7857df56[2], $b0c9dbcaf52f5eca636a20ce7857df56[0]);

			$E6412230eeb5a4348cc57a7876286e4a['js']['cur_page'] = $Cacfbf4f99e0ceb07acba32514181ed9;

			$b729e1e76a388ffdd6a130fbb0325a8e[$D6cc74b0166440ae660eb91330b40c5d]['time_to'] = date('Y-m-d H:i:s', $ed6f7ff8dab37b6c41791e5e6bf75f7f[$D6cc74b0166440ae660eb91330b40c5d]['end']);

			$Be0eb8b19004800717279afcf8a73867 = $_REQUEST['date'];

			foreach ($c53376be93b8d3e047dc6bc633fb0748 as $b442e1b28845beafe64eed54322b9196 => $D051345f9ba43a2732631283a15fd07d) {
				while (!(($D051345f9ba43a2732631283a15fd07d['start'] <= time()) && (time() <= $D051345f9ba43a2732631283a15fd07d['end']))) {
				}

				$D4a2957ac26758ef35f56b1ea4e57692 = $b442e1b28845beafe64eed54322b9196 + 1;
			}

			$D29f3c5494cb370b46f3e907dc61f106->query('SELECT `channel_id`,`epg_lang`,`epg_id` FROM `streams` WHERE `id` = \'%d\' AND epg_id IS NOT NULL', $C14fd0ea1adb1f236ff58edf12b73961);

			$e199935039c968e1072d38502be85bc2 = 0;
			$E6412230eeb5a4348cc57a7876286e4a['js']['data'] = $b729e1e76a388ffdd6a130fbb0325a8e;

			$b729e1e76a388ffdd6a130fbb0325a8e[$D6cc74b0166440ae660eb91330b40c5d]['id'] = $ed6f7ff8dab37b6c41791e5e6bf75f7f[$D6cc74b0166440ae660eb91330b40c5d]['id'];

			$b729e1e76a388ffdd6a130fbb0325a8e[$D6cc74b0166440ae660eb91330b40c5d]['stop_timestamp'] = $ed6f7ff8dab37b6c41791e5e6bf75f7f[$D6cc74b0166440ae660eb91330b40c5d]['end'];

			$E6412230eeb5a4348cc57a7876286e4a = array();
			$D051345f9ba43a2732631283a15fd07d = $D29f3c5494cb370b46f3e907dc61f106->F46A3680C3d60298922076D7FF56bfca();


			$b07db0a6e11a87db7f10b062f3b5c422 = count($c53376be93b8d3e047dc6bc633fb0748);

			$E3dcb04e2f21ee6d2398b553e841c6dc = false;

			$E6412230eeb5a4348cc57a7876286e4a['js']['selected_item'] = $dc57f80fc208d808c25e8aa56b204dd4;

			$b729e1e76a388ffdd6a130fbb0325a8e[$D6cc74b0166440ae660eb91330b40c5d]['actor'] = '';

			$b729e1e76a388ffdd6a130fbb0325a8e[$D6cc74b0166440ae660eb91330b40c5d]['director'] = '';

			$D6cc74b0166440ae660eb91330b40c5d++;
			$E3dcb04e2f21ee6d2398b553e841c6dc = true;
			$eab940a3ba4e5a0ededf3dd95bf93ddb = mktime(0, 0, 0, $b0c9dbcaf52f5eca636a20ce7857df56[1], $b0c9dbcaf52f5eca636a20ce7857df56[2], $b0c9dbcaf52f5eca636a20ce7857df56[0]);
			$b729e1e76a388ffdd6a130fbb0325a8e[$D6cc74b0166440ae660eb91330b40c5d]['duration'] = $ed6f7ff8dab37b6c41791e5e6bf75f7f[$D6cc74b0166440ae660eb91330b40c5d]['end'] - $ed6f7ff8dab37b6c41791e5e6bf75f7f[$D6cc74b0166440ae660eb91330b40c5d]['start'];

			$Cacfbf4f99e0ceb07acba32514181ed9 = $c186856cd0cb902e280a0d44a03528a2;

			$Cacfbf4f99e0ceb07acba32514181ed9 = 0;

			$c53376be93b8d3e047dc6bc633fb0748 = $D29f3c5494cb370b46f3e907dc61f106->b865B38EB81f98b969E0ac143f701035();

			$b729e1e76a388ffdd6a130fbb0325a8e[$D6cc74b0166440ae660eb91330b40c5d]['time'] = date('Y-m-d H:i:s', $ed6f7ff8dab37b6c41791e5e6bf75f7f[$D6cc74b0166440ae660eb91330b40c5d]['start']);

			$b729e1e76a388ffdd6a130fbb0325a8e[$D6cc74b0166440ae660eb91330b40c5d]['open'] = $e199935039c968e1072d38502be85bc2;

			$b729e1e76a388ffdd6a130fbb0325a8e[$D6cc74b0166440ae660eb91330b40c5d]['t_time'] = date('h:i A', $ed6f7ff8dab37b6c41791e5e6bf75f7f[$D6cc74b0166440ae660eb91330b40c5d]['start']);

			if (!($Be0eb8b19004800717279afcf8a73867 != date('Y-m-d'))) {
			}

			$E6412230eeb5a4348cc57a7876286e4a['js']['total_items'] = $b07db0a6e11a87db7f10b062f3b5c422;

			if (!(time() <= $ed6f7ff8dab37b6c41791e5e6bf75f7f[$D6cc74b0166440ae660eb91330b40c5d]['end'])) {
			}

			$b729e1e76a388ffdd6a130fbb0325a8e[$D6cc74b0166440ae660eb91330b40c5d]['mark_memo'] = 0;

			$b729e1e76a388ffdd6a130fbb0325a8e[$D6cc74b0166440ae660eb91330b40c5d]['real_id'] = $C14fd0ea1adb1f236ff58edf12b73961 . '_' . $ed6f7ff8dab37b6c41791e5e6bf75f7f[$D6cc74b0166440ae660eb91330b40c5d]['start'];

			$b729e1e76a388ffdd6a130fbb0325a8e[$D6cc74b0166440ae660eb91330b40c5d]['mark_archive'] = 0;
			$dc57f80fc208d808c25e8aa56b204dd4 = $D4a2957ac26758ef35f56b1ea4e57692 - (($c186856cd0cb902e280a0d44a03528a2 - 1) * $Ff7775d0618d3ac6613a59a77273faa3);

			$b729e1e76a388ffdd6a130fbb0325a8e = array();

			$D4a2957ac26758ef35f56b1ea4e57692 = 0;

			$b729e1e76a388ffdd6a130fbb0325a8e[$D6cc74b0166440ae660eb91330b40c5d]['mark_rec'] = 0;
			$c186856cd0cb902e280a0d44a03528a2 = 1;
			$e199935039c968e1072d38502be85bc2 = 1;
			$c186856cd0cb902e280a0d44a03528a2 = ceil($D4a2957ac26758ef35f56b1ea4e57692 / $Ff7775d0618d3ac6613a59a77273faa3);

			if ($E3dcb04e2f21ee6d2398b553e841c6dc) {
			}

			$b729e1e76a388ffdd6a130fbb0325a8e[$D6cc74b0166440ae660eb91330b40c5d]['category'] = '';
			if (!(!empty($_REQUEST['ch_id']) && !empty($_REQUEST['date']))) {
			}

			$E3dcb04e2f21ee6d2398b553e841c6dc = false;

			$b729e1e76a388ffdd6a130fbb0325a8e[$D6cc74b0166440ae660eb91330b40c5d]['ch_id'] = $C14fd0ea1adb1f236ff58edf12b73961;
			$c186856cd0cb902e280a0d44a03528a2 = intval($_REQUEST['p']);
			$Ff7775d0618d3ac6613a59a77273faa3 = 10;

			$D29f3c5494cb370b46f3e907dc61f106->query('SELECT * FROM `epg_data` WHERE `epg_id` = \'%d\' AND `channel_id` = \'%s\' AND `lang` = \'%s\' AND `start` >= \'%d\' AND `start` <= \'%d\' ORDER BY `start` ASC', $D051345f9ba43a2732631283a15fd07d['epg_id'], $D051345f9ba43a2732631283a15fd07d['channel_id'], $D051345f9ba43a2732631283a15fd07d['epg_lang'], $eab940a3ba4e5a0ededf3dd95bf93ddb, $c2e26cdd00ae42b0ad53713d8d91e239);
			$b07db0a6e11a87db7f10b062f3b5c422 = 0;
			$c186856cd0cb902e280a0d44a03528a2 = 1;
			$b729e1e76a388ffdd6a130fbb0325a8e[$D6cc74b0166440ae660eb91330b40c5d]['t_time_to'] = date('h:i A', $ed6f7ff8dab37b6c41791e5e6bf75f7f[$D6cc74b0166440ae660eb91330b40c5d]['end']);
			$ed6f7ff8dab37b6c41791e5e6bf75f7f = array_slice($c53376be93b8d3e047dc6bc633fb0748, ($c186856cd0cb902e280a0d44a03528a2 - 1) * $Ff7775d0618d3ac6613a59a77273faa3, $Ff7775d0618d3ac6613a59a77273faa3);
		case 'get_data_table':
			$Dba9bc30b45fbdc7080995ec01ed8fef = $_REQUEST['from'];

			$cd0c469d95a51f850a71db0c9a65c558 = $_REQUEST['from_ts'];

			exit();

			$B5cc17cf15c8818c60b702a8073d7708 = $_REQUEST['to_ts'];
			$b6c65a7e6e7f6c6ec15815608e981f0c = $_REQUEST['to'];
		}
	default:
		$A021f0f4fd35701ae160c798b3475861 = (!empty($_REQUEST['type']) ? $_REQUEST['type'] : NULL);
		@header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');

		require ('./init.php');
		$D29f3c5494cb370b46f3e907dc61f106->query('SELECT * FROM `mag_devices` WHERE `mac` = \'%s\' LIMIT 1', $a4e6e437f123785c5867b3e1ae39c5a8);
		$ef75a38e8a1677c31372dd761e283a1d = (!empty($_REQUEST['hw_version']) ? $_REQUEST['hw_version'] : NULL);

		dFA6500b681f783BbBcb94474366BB27::c1eB15f600f63f79A19131E845b98FD4($a8410504485e3a44f33464fc660c32ff['total_info']['mag_id'], 'MAG_DISABLED');
		$a0b7fc211773b5c42dce6aafb70af94e = (!empty($a8410504485e3a44f33464fc660c32ff['total_info']) && !empty($a8410504485e3a44f33464fc660c32ff['mag_info_db']) && (empty($a8410504485e3a44f33464fc660c32ff['total_info']['allowed_ips']) || in_array($f85f5a03d1a0d3250a635f26c2ef5fa8, $a8410504485e3a44f33464fc660c32ff['total_info']['allowed_ips'])) && ($a8410504485e3a44f33464fc660c32ff['total_info']['admin_enabled'] == 1) && ($a8410504485e3a44f33464fc660c32ff['total_info']['enabled'] == 1) && (is_null($a8410504485e3a44f33464fc660c32ff['total_info']['exp_date']) || (time() < $a8410504485e3a44f33464fc660c32ff['total_info']['exp_date'])) ? 0 : 1);
		$D29f3c5494cb370b46f3e907dc61f106->query('SELECT * FROM `users` WHERE `id` = \'%d\'', $a8410504485e3a44f33464fc660c32ff['mag_info_db']['user_id']);
		$db1ae3594b118d81c17026608f830063 = (!empty($_REQUEST['device_id2']) ? $_REQUEST['device_id2'] : NULL);
		$a8410504485e3a44f33464fc660c32ff['mag_info_db'] = empty($a8410504485e3a44f33464fc660c32ff['mag_info_db']) ? array() : $a8410504485e3a44f33464fc660c32ff['mag_info_db'];

		$a8410504485e3a44f33464fc660c32ff['total_info'] = $D29f3c5494cb370b46f3e907dc61f106->f46A3680c3d60298922076D7Ff56bFCa();

		$f26b84f8fccc5251844603f4362ba2e9 = false;

		$d31155e125dc0ceb1a8fcbe1611205cd = f6acBdf515C1e5f84C3209c7fAA09641('live', true);
		$F26e0f5e26d83039822131fb00fdfe4c = (!empty($_REQUEST['device_id']) ? $_REQUEST['device_id'] : NULL);
		$e1851a8c5a995a0944d55a0f3bea502a = false;
		$a4e6e437f123785c5867b3e1ae39c5a8 = (!empty($_REQUEST['mac']) ? $_REQUEST['mac'] : NULL);


		if ($a8410504485e3a44f33464fc660c32ff['total_info']['admin_enabled'] == 0) {
		}

		$Abb3d4efe78dfc7b1bad760ed2684ae1 = (!empty($_REQUEST['ver']) ? $_REQUEST['ver'] : NULL);

		if ($a8410504485e3a44f33464fc660c32ff['total_info']['mag_player']) {
		}

		$E6412230eeb5a4348cc57a7876286e4a['js']['token'] = strtoupper(md5(mktime(1) . uniqid()));
		$B9e3591e7e82f2cbbf39ba966e315c24 = (!empty($_REQUEST['action']) ? $_REQUEST['action'] : NULL);
		$cdffcf66fff8cd9ecf9a60b4cfb307b2 = (!empty($_REQUEST['gmode']) ? intval($_REQUEST['gmode']) : NULL);
		$a8410504485e3a44f33464fc660c32ff['total_info'] = empty($a8410504485e3a44f33464fc660c32ff['total_info']) ? array() : $a8410504485e3a44f33464fc660c32ff['total_info'];
		exit(json_encode($E6412230eeb5a4348cc57a7876286e4a));

		@header('Pragma: no-cache');
		@header('Cache-Control: post-check=0, pre-check=0', false);
		$c545b825703f3f27764b9787eda5005e = (!empty($_REQUEST['sn']) ? $_REQUEST['sn'] : NULL);
		$c0e5ee1d70aa2e4352ab9da36be241de = (!empty($_REQUEST['stb_type']) ? $_REQUEST['stb_type'] : NULL);
		$f85f5a03d1a0d3250a635f26c2ef5fa8 = (!empty($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : NULL);
		include ('./mag_data.php');
	}
default:
default:
default:
default:
default:
default:
	$B9e3591e7e82f2cbbf39ba966e315c24 = NULL;
	$cdffcf66fff8cd9ecf9a60b4cfb307b2 = NULL;
	$a8410504485e3a44f33464fc660c32ff['total_info'] = $a8410504485e3a44f33464fc660c32ff['total_info'];
default:
default:
default:
default:
}

?> 

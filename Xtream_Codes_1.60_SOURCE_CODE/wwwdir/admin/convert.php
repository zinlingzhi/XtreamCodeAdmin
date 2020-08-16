<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

function b2eE1d430859f22B31ff5e21f1651279()
{
	preg_match_all('/expired_time\\=(.*)/', $E6412230eeb5a4348cc57a7876286e4a, $a04b7203063cc016a00afb8187627644);

	$D6cc74b0166440ae660eb91330b40c5d = 0;

	preg_match_all('/password\\=(.*)/', $E6412230eeb5a4348cc57a7876286e4a, $e7958ef86691961aa8acdc22b1d88118);
	$Cecfa885eed4e0be5ea572f6a5e134a4 = array();
	global $C63435555732fef7929084e252ed20b8;
	global $D062e475ae6654b3c493c3b4574cf496;
	global $e1da0e3b8f6e84b34adfaf5430cb43a4;
	global $Cecfa885eed4e0be5ea572f6a5e134a4;
	global $c793d604f2518c7fa7180e274bef95d5;
	global $E462799f3069e7fcda3f70674d9b5915;

	$D6cc74b0166440ae660eb91330b40c5d++;

	preg_match_all('/group\\=(.*)/', $E6412230eeb5a4348cc57a7876286e4a, $C6253ca08a4013e88c63bb18499b1b15);

	preg_match_all('/username\\=(.*)/', $E6412230eeb5a4348cc57a7876286e4a, $ef5c62b81fb25dc7f13cd9ed39b3e085);
	$Cecfa885eed4e0be5ea572f6a5e134a4[] = array('username' => trim($ef5c62b81fb25dc7f13cd9ed39b3e085[1][$D6cc74b0166440ae660eb91330b40c5d]), 'password' => trim($e7958ef86691961aa8acdc22b1d88118[1][$D6cc74b0166440ae660eb91330b40c5d]), 'expire_date' => empty($a04b7203063cc016a00afb8187627644[1][$D6cc74b0166440ae660eb91330b40c5d]) ? '' : strtotime($a04b7203063cc016a00afb8187627644[1][$D6cc74b0166440ae660eb91330b40c5d]), 'bouquet' => trim($C6253ca08a4013e88c63bb18499b1b15[1][$D6cc74b0166440ae660eb91330b40c5d]));

	$E6412230eeb5a4348cc57a7876286e4a = trim(file_get_contents($C63435555732fef7929084e252ed20b8 . 'server/query_all_user?token=' . $D062e475ae6654b3c493c3b4574cf496 . '&flag='));
}

function a2ECe37b5b918a7b856562BB4010e42A($C2aaac60d16a3fe3b99fcb0176fbe5d7, $c0a20089b6b0fac4d59b6d1eeceaafbf)
{
	$D062e475ae6654b3c493c3b4574cf496 = $C13b27df5008e4f7ec1d97368609ed5c[1];

	$b92538c6a6973ab3f4f2e16af4d1f415 = trim(file_get_contents($C63435555732fef7929084e252ed20b8 . 'token/createtokenbased64?encrpty=' . $Cf41b9d147357bdee02f08168a2a7713 . '&flag=1'));
	$Cf41b9d147357bdee02f08168a2a7713 = base64_encode($C2aaac60d16a3fe3b99fcb0176fbe5d7 . ':' . $c0a20089b6b0fac4d59b6d1eeceaafbf);
	global $C63435555732fef7929084e252ed20b8;

	return false;
	return $D062e475ae6654b3c493c3b4574cf496 != -2 ? $D062e475ae6654b3c493c3b4574cf496 : false;
}

function b758c9C6DC34dEB9C278CC1267b8784D()
{
	preg_match_all('/name\\=(.*)/', $E6412230eeb5a4348cc57a7876286e4a, $B6c4f36df5181f0212441e5659258771);

	$c793d604f2518c7fa7180e274bef95d5 = array();

	global $C63435555732fef7929084e252ed20b8;
	global $D062e475ae6654b3c493c3b4574cf496;
	global $e1da0e3b8f6e84b34adfaf5430cb43a4;
	global $Cecfa885eed4e0be5ea572f6a5e134a4;
	global $c793d604f2518c7fa7180e274bef95d5;
	global $E462799f3069e7fcda3f70674d9b5915;
	$E6412230eeb5a4348cc57a7876286e4a = trim(file_get_contents($C63435555732fef7929084e252ed20b8 . 'server/query_group?token=' . $D062e475ae6654b3c493c3b4574cf496 . '&flag=1'));
	preg_match_all('/connection\\=(.*)/', $E6412230eeb5a4348cc57a7876286e4a, $f9f353b57551970de5f6ae808861b4bc);
	$D6cc74b0166440ae660eb91330b40c5d++;
	$c793d604f2518c7fa7180e274bef95d5[trim($B6c4f36df5181f0212441e5659258771[1][$D6cc74b0166440ae660eb91330b40c5d])] = array('channels' => array_keys($e1da0e3b8f6e84b34adfaf5430cb43a4), 'cons' => $f9f353b57551970de5f6ae808861b4bc[1][$D6cc74b0166440ae660eb91330b40c5d]);
	$c793d604f2518c7fa7180e274bef95d5[trim($B6c4f36df5181f0212441e5659258771[1][$D6cc74b0166440ae660eb91330b40c5d])] = array('channels' => explode(',', $Fd6da8e196ea50156d3046911cc82815[1][$D6cc74b0166440ae660eb91330b40c5d]), 'cons' => $f9f353b57551970de5f6ae808861b4bc[1][$D6cc74b0166440ae660eb91330b40c5d]);
	$D6cc74b0166440ae660eb91330b40c5d = 0;

	preg_match_all('/src\\=(.*)/', $E6412230eeb5a4348cc57a7876286e4a, $Fd6da8e196ea50156d3046911cc82815);
}

function CE280fb767Ee84E324d0628a802fCFd5()
{
	$D6cc74b0166440ae660eb91330b40c5d = 0;
	preg_match_all('/name\\=(.*)/', $E6412230eeb5a4348cc57a7876286e4a, $e83b3c28b7dead731de34d0d806b6b3f);

	$E462799f3069e7fcda3f70674d9b5915[] = array('name' => trim($e83b3c28b7dead731de34d0d806b6b3f[1][$D6cc74b0166440ae660eb91330b40c5d]), 'source' => trim($e5b661fe51e0b2ed729f0d70b41d2dcc[1][$D6cc74b0166440ae660eb91330b40c5d]), 'icon' => trim($C0dbaeb4cffd707dbf017c79092b62e1[1][$D6cc74b0166440ae660eb91330b40c5d]), 'category' => trim($Ba35d96c3f4566ca4eda62404a0d4fa0[1][$D6cc74b0166440ae660eb91330b40c5d]));
	preg_match_all('/category\\=(.*)/', $E6412230eeb5a4348cc57a7876286e4a, $Ba35d96c3f4566ca4eda62404a0d4fa0);

	$D6cc74b0166440ae660eb91330b40c5d++;

	$e1da0e3b8f6e84b34adfaf5430cb43a4[trim($Bcf38febdc68930ed8635b35a70d3ba1[1][$D6cc74b0166440ae660eb91330b40c5d])] = array('name' => trim($e83b3c28b7dead731de34d0d806b6b3f[1][$D6cc74b0166440ae660eb91330b40c5d]), 'source' => trim($e5b661fe51e0b2ed729f0d70b41d2dcc[1][$D6cc74b0166440ae660eb91330b40c5d]), 'icon' => trim($C0dbaeb4cffd707dbf017c79092b62e1[1][$D6cc74b0166440ae660eb91330b40c5d]), 'category' => trim($Ba35d96c3f4566ca4eda62404a0d4fa0[1][$D6cc74b0166440ae660eb91330b40c5d]));

	$D6cc74b0166440ae660eb91330b40c5d = 0;

	$D6cc74b0166440ae660eb91330b40c5d++;
	$E6412230eeb5a4348cc57a7876286e4a = trim(file_get_contents($C63435555732fef7929084e252ed20b8 . 'server/query_channel_list?token=' . $D062e475ae6654b3c493c3b4574cf496 . '&flag=1'));

	preg_match_all('/src\\=(.*)/', $E6412230eeb5a4348cc57a7876286e4a, $e5b661fe51e0b2ed729f0d70b41d2dcc);

	$E6412230eeb5a4348cc57a7876286e4a = trim(file_get_contents($C63435555732fef7929084e252ed20b8 . 'server/query_movie_list?token=' . $D062e475ae6654b3c493c3b4574cf496 . '&flag=1'));

	global $C63435555732fef7929084e252ed20b8;
	global $D062e475ae6654b3c493c3b4574cf496;
	global $e1da0e3b8f6e84b34adfaf5430cb43a4;
	global $Cecfa885eed4e0be5ea572f6a5e134a4;
	global $c793d604f2518c7fa7180e274bef95d5;
	global $E462799f3069e7fcda3f70674d9b5915;
	preg_match_all('/icon\\=(.*)/', $E6412230eeb5a4348cc57a7876286e4a, $C0dbaeb4cffd707dbf017c79092b62e1);

	preg_match_all('/category\\=(.*)/', $E6412230eeb5a4348cc57a7876286e4a, $Ba35d96c3f4566ca4eda62404a0d4fa0);
	preg_match_all('/CH\\=(.*)/', $E6412230eeb5a4348cc57a7876286e4a, $Bcf38febdc68930ed8635b35a70d3ba1);

	preg_match_all('/name\\=(.*)/', $E6412230eeb5a4348cc57a7876286e4a, $e83b3c28b7dead731de34d0d806b6b3f);
	preg_match_all('/src\\=(.*)/', $E6412230eeb5a4348cc57a7876286e4a, $e5b661fe51e0b2ed729f0d70b41d2dcc);
	preg_match_all('/img\\=(.*)/', $E6412230eeb5a4348cc57a7876286e4a, $C0dbaeb4cffd707dbf017c79092b62e1);
}

require (IPTV_TEMPLATES_PATH . '/' . '/admin/' . 'convert.php');
switch ($b8980526936694b2cd4cf6c7f8c80396) {
case 'ez2xtream':
	b2ee1d430859f22b31ff5e21f1651279();
	foreach ($e1da0e3b8f6e84b34adfaf5430cb43a4 as $bdeb9831adc6aedfa4fbc054067d079d => $ebe016230b312b06e77fb3e3defe24ce) {
		$B55f78703213d1595283266f835ca867[] = str_replace('{stream_name}', $C4cd3c532766969bab35abc978dcc44c, $f9a8823715bcb54e8069e0086da240b2['stream_added']);
		$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `stream_categories` (`category_type`,`category_name`) VALUES(\'%s\',\'%s\')', 'live', $ebe016230b312b06e77fb3e3defe24ce['category']);

		$D29f3c5494cb370b46f3e907dc61f106->query('SELECT id FROM `stream_categories` WHERE `category_name` = \'%s\' LIMIT 1', $ebe016230b312b06e77fb3e3defe24ce['category']);

		$Ccc01a49a480ad4b98dc48415a5e29fa[] = str_replace('{stream_name}', $C4cd3c532766969bab35abc978dcc44c, $f9a8823715bcb54e8069e0086da240b2['stream_exists']);

		$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `streams_sys` (`stream_id`,`server_id`,`parent_id`) VALUES(\'%d\',\'%d\',\'%d\')', $F9b1bf785602d9db91ce4a6faff79ea0, 1, 0);
		$Df1ed0c24afddf3f97f29d7c950a45ef = 'NULL';

		$Df1ed0c24afddf3f97f29d7c950a45ef = $D29f3c5494cb370b46f3e907dc61f106->f1B4b6779C28F4AD97a35e4a54fD0416();

		$F9b1bf785602d9db91ce4a6faff79ea0 = $D29f3c5494cb370b46f3e907dc61f106->f1b4B6779C28f4aD97a35E4a54fd0416();
		$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `streams` (`id`,`type`,`category_id`,`stream_display_name`,`stream_source`,`stream_icon`,`read_native`) VALUES(\'%d\',1,%s,\'%s\',\'%s\',\'%s\',0)', $bdeb9831adc6aedfa4fbc054067d079d, $Df1ed0c24afddf3f97f29d7c950a45ef, $C4cd3c532766969bab35abc978dcc44c, json_encode(array($ebe016230b312b06e77fb3e3defe24ce['source'])), $ebe016230b312b06e77fb3e3defe24ce['icon']);

		if (!empty($ebe016230b312b06e77fb3e3defe24ce['category'])) {
		}

		$Df1ed0c24afddf3f97f29d7c950a45ef = $D29f3c5494cb370b46f3e907dc61f106->B68c0609c13f8645D5e168B69FD4C118();
		$C4cd3c532766969bab35abc978dcc44c = encodeToUtf8($ebe016230b312b06e77fb3e3defe24ce['name']);
	}

	foreach ($Cecfa885eed4e0be5ea572f6a5e134a4 as $Fa3d19831c58b4235f088f0b5e887ec4) {
		$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `user_output` (`user_id`,`access_output_id`) VALUES(\'%d\',\'%d\')', $fd7f2f8cde8b865243a388c219894e64, 1);
		$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `user_output` (`user_id`,`access_output_id`) VALUES(\'%d\',\'%d\')', $fd7f2f8cde8b865243a388c219894e64, 2);
		$a922b55f309483feb7cf56ee35c2c75b = (empty($Fa3d19831c58b4235f088f0b5e887ec4['expire_date']) ? 'NULL' : $Fa3d19831c58b4235f088f0b5e887ec4['expire_date']);

		$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `users` (`member_id`,`username`,`password`,`exp_date`,`admin_notes`,`bouquet`,`max_connections`,`is_restreamer`,`allowed_ips`,`allowed_ua`,`is_trial`,`created_at`,`created_by`,`force_server_id`,`is_isplock`,`forced_country`,`is_stalker`) ' . "\r\n" . '                            VALUES (\'%d\',\'%s\',\'%s\',%s,\'%s\',\'%s\',\'%d\',\'%d\',\'%s\',\'%s\',\'%d\',\'%d\',\'%d\',\'%d\',\'%d\',\'%s\',\'%d\')', $c83b7d347a6bc7f5f0e3313147e88ecc->member_info['id'], $Fa3d19831c58b4235f088f0b5e887ec4['username'], $Fa3d19831c58b4235f088f0b5e887ec4['password'], $a922b55f309483feb7cf56ee35c2c75b, '', json_encode(array($A2441222881c5dc675b289f4a29e0039[$Fa3d19831c58b4235f088f0b5e887ec4['bouquet']])), $B8b0e9e106cfde51077d8f7f7e721423, 0, json_encode(array()), json_encode(array()), 0, time(), $c83b7d347a6bc7f5f0e3313147e88ecc->member_info['id'], 0, 0, '', 0);
		$B8b0e9e106cfde51077d8f7f7e721423 = (empty($c793d604f2518c7fa7180e274bef95d5[$Fa3d19831c58b4235f088f0b5e887ec4['bouquet']]['cons']) ? 1 : $c793d604f2518c7fa7180e274bef95d5[$Fa3d19831c58b4235f088f0b5e887ec4['bouquet']]['cons']);
		$fd7f2f8cde8b865243a388c219894e64 = $D29f3c5494cb370b46f3e907dc61f106->F1B4B6779c28F4Ad97a35E4A54fd0416();
	}

	$Fe3b3593a36e20e7ffec4d40a6a92e9e = b8a6eA05Eebc7E2E3503eA794B1A1ee4::$request['port'];

	$Ccc01a49a480ad4b98dc48415a5e29fa = $Ccc01a49a480ad4b98dc48415a5e29fa['complete_fields'];

	$C63435555732fef7929084e252ed20b8 = 'http://' . $Bd361fc756ae1a2aa1a459d1a517dae8 . ':' . $fca63b5537d24f9c0618d022a2b31610 . '@' . $C4caf0da36b7e6696db615f28955a10f . ':' . $Fe3b3593a36e20e7ffec4d40a6a92e9e . '/';

	b758c9c6dc34deb9c278cc1267b8784d();

	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['action_done'];
	$A2441222881c5dc675b289f4a29e0039 = array();
	cE280FB767eE84e324d0628A802FCFd5();

	$Bd361fc756ae1a2aa1a459d1a517dae8 = B8A6ea05eeBC7E2e3503eA794b1A1ee4::$request['ez_user'];

	$E462799f3069e7fcda3f70674d9b5915 = $e1da0e3b8f6e84b34adfaf5430cb43a4 = $Cecfa885eed4e0be5ea572f6a5e134a4 = $c793d604f2518c7fa7180e274bef95d5 = array();
	$fca63b5537d24f9c0618d022a2b31610 = B8a6Ea05eEBC7E2E3503eA794B1a1Ee4::$request['ez_pass'];

	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['ez_auth_failed'];
	$C4caf0da36b7e6696db615f28955a10f = b8a6ea05EeBC7e2E3503eA794b1a1Ee4::$request['ip'];

	foreach ($c793d604f2518c7fa7180e274bef95d5 as $eb0c001163c6a74ee536ffb738294e98 => $F01582e47e88a89d00573be61be34c91) {
		$A2441222881c5dc675b289f4a29e0039[$eb0c001163c6a74ee536ffb738294e98] = $D29f3c5494cb370b46f3e907dc61f106->f1b4b6779C28F4AD97A35E4A54Fd0416();
		$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `bouquets` (`bouquet_name`,`bouquet_channels`) VALUES(\'%s\',\'%s\')', $eb0c001163c6a74ee536ffb738294e98 . '_' . rand(1, 19999), json_encode($F01582e47e88a89d00573be61be34c91['channels']));
	}

	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['invalid_ip'];

	$D062e475ae6654b3c493c3b4574cf496 = a2ece37b5b918a7b856562bb4010e42a($Bd361fc756ae1a2aa1a459d1a517dae8, $fca63b5537d24f9c0618d022a2b31610);
	if (inet_pton($C4caf0da36b7e6696db615f28955a10f) !== false) {
	}

default:
	unset(B8A6eA05EEbC7E2E3503Ea794B1a1ee4::$request['action']);
	require (IPTV_TEMPLATES_PATH . '/' . 'footer.php');
	$b8980526936694b2cd4cf6c7f8c80396 = B8A6eA05EebC7e2E3503Ea794B1A1eE4::$request['action'];

	if ($c83b7d347a6bc7f5f0e3313147e88ecc->cB674e1C9BbDB0e29aD2A7A35964ae35()) {
	}

	require (IPTV_TEMPLATES_PATH . '/' . 'header_admin.php');
	require ('../init.php');
	ini_set('default_socket_timeout', 40);
}


?> 

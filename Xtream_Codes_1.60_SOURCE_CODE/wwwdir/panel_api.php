<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

$E6412230eeb5a4348cc57a7876286e4a = array();

$c0a20089b6b0fac4d59b6d1eeceaafbf = B8A6eA05EebC7E2E3503ea794b1A1eE4::$request['password'];

echo json_encode($E6412230eeb5a4348cc57a7876286e4a);

switch ($b8980526936694b2cd4cf6c7f8c80396) {
default:
	if ($C0370129ae871d899244eaf1c9fed218 = dfA6500B681F783bbbcB94474366Bb27::FC219ceC06e2eCf9A5083C03B314D183(NULL, $C2aaac60d16a3fe3b99fcb0176fbe5d7, $c0a20089b6b0fac4d59b6d1eeceaafbf, true, true, true)) {
	}

	ini_set('memory_limit', -1);

	$E6412230eeb5a4348cc57a7876286e4a['user_info'] = array();
	$b8980526936694b2cd4cf6c7f8c80396 = (!empty(B8a6EA05eeBC7E2e3503ea794B1A1Ee4::$request['action']) && in_array(b8A6EA05eEBC7e2E3503EA794B1A1EE4::$request['action'], $f86ad0ffcab476af00b8bbfd8ee9c923) ? B8a6EA05eEBC7E2E3503ea794b1a1eE4::$request['action'] : '');
	if (!(!empty(B8a6EA05EEBC7E2E3503EA794B1a1ee4::$request['username']) && !empty(b8a6Ea05EEbC7E2E3503ea794b1A1EE4::$request['password']))) {
	}
case 'get_epg':
	$fe6d74fc2aef3103f2d8d34d9ac82807 = intval(b8A6EA05EEBc7E2e3503EA794b1a1ee4::$request['stream_id']);

	$F495f2e9fa3ade2810495964bf4be479 = FE9a869238A4148fFACcd4e08Ff41D49($fe6d74fc2aef3103f2d8d34d9ac82807, $ae8e3f711701a3e3a126aafe9ff3d701);

	exit();

	echo json_encode($F495f2e9fa3ade2810495964bf4be479);
	$ae8e3f711701a3e3a126aafe9ff3d701 = (!empty(b8a6eA05eeBC7E2e3503EA794b1A1eE4::$request['from_now']) && (0 < b8A6Ea05eeBc7e2e3503EA794b1A1Ee4::$request['from_now']) ? true : false);
	if (!empty(b8a6eA05eEbC7e2e3503ea794B1a1Ee4::$request['stream_id']) && (is_null($C0370129ae871d899244eaf1c9fed218['exp_date']) || (time() < $C0370129ae871d899244eaf1c9fed218['exp_date']))) {
	}

	exit();
	echo json_encode(array());
default:
	$E6412230eeb5a4348cc57a7876286e4a['user_info']['max_connections'] = $C0370129ae871d899244eaf1c9fed218['max_connections'];

	$E6412230eeb5a4348cc57a7876286e4a['server_info'] = array('url' => $C63435555732fef7929084e252ed20b8, 'port' => $_SERVER['SERVER_PORT']);

	foreach ($C0370129ae871d899244eaf1c9fed218['channels'] as $channel) {
		$f59e59f87a5af482893af6a46f48b071++;

		$de416cd86c8990091ffa241b4e47f8a2++;
		$b46875bbe2b4244eb0849b98b76d4e3c = $channel['stream_icon'];

		if ($channel['live'] == 1) {
		}

		$E6412230eeb5a4348cc57a7876286e4a['available_channels'][$channel['id']] = array('num' => $channel['live'] == 1 ? $de416cd86c8990091ffa241b4e47f8a2 : $f59e59f87a5af482893af6a46f48b071, 'name' => $channel['stream_display_name'], 'stream_id' => $channel['id'], 'custom_sid' => $channel['custom_sid'], 'epg_channel_id' => $channel['channel_id'], 'added' => $channel['added'], 'category_id' => $channel['category_id'], 'category_name' => $channel['category_name'], 'live' => $channel['live'], 'container_extension' => $channel['container_extension'], 'stream_icon' => $b46875bbe2b4244eb0849b98b76d4e3c, 'type_name' => $channel['type_name']);

		list() = json_decode($channel['movie_propeties'], true);
	}

	$E6412230eeb5a4348cc57a7876286e4a['user_info']['exp_date'] = $C0370129ae871d899244eaf1c9fed218['exp_date'];

	$E6412230eeb5a4348cc57a7876286e4a['user_info']['status'] = 'Disabled';

	$E6412230eeb5a4348cc57a7876286e4a['user_info']['status'] = 'Expired';

	$E6412230eeb5a4348cc57a7876286e4a['user_info']['password'] = $C0370129ae871d899244eaf1c9fed218['password'];

	$E6412230eeb5a4348cc57a7876286e4a['user_info']['status'] = 'Banned';
	$E6412230eeb5a4348cc57a7876286e4a['user_info']['auth'] = 1;

	$E6412230eeb5a4348cc57a7876286e4a['user_info']['active_cons'] = $C0370129ae871d899244eaf1c9fed218['active_cons'];

	$E6412230eeb5a4348cc57a7876286e4a['available_channels'] = array();

	$E6412230eeb5a4348cc57a7876286e4a['user_info']['is_trial'] = $C0370129ae871d899244eaf1c9fed218['is_trial'];

	$E6412230eeb5a4348cc57a7876286e4a['user_info']['status'] = 'Active';

	$E6412230eeb5a4348cc57a7876286e4a['user_info']['username'] = $C0370129ae871d899244eaf1c9fed218['username'];
	$E6412230eeb5a4348cc57a7876286e4a['user_info']['created_at'] = $C0370129ae871d899244eaf1c9fed218['created_at'];
	$C63435555732fef7929084e252ed20b8 = (empty(B8a6Ea05Eebc7e2e3503Ea794B1A1eE4::$StreamingServers[SERVER_ID]['domain_name']) ? b8a6ea05eebC7e2E3503ea794b1A1EE4::$StreamingServers[SERVER_ID]['server_ip'] : b8A6EA05eEBC7e2E3503Ea794b1a1EE4::$StreamingServers[SERVER_ID]['domain_name']);
	$de416cd86c8990091ffa241b4e47f8a2 = $f59e59f87a5af482893af6a46f48b071 = 0;

	if ($C0370129ae871d899244eaf1c9fed218['admin_enabled'] == 0) {
	}

	$E6412230eeb5a4348cc57a7876286e4a['user_info']['allowed_output_formats'] = array_keys($C0370129ae871d899244eaf1c9fed218['output_formats']);
default:
default:
	$f86ad0ffcab476af00b8bbfd8ee9c923 = array('get_epg');
}


?> 

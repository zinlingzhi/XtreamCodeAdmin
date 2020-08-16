<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

session_start();
$fe6d74fc2aef3103f2d8d34d9ac82807 = false;

$cdbed4b98ae3b7fffd90a40205ff47fe = a912bf58e557078EA9d74f24c45dE89f();

require (IPTV_TEMPLATES_PATH . '/' . 'header_admin.php');

require ('../init.php');

$c83b7d347a6bc7f5f0e3313147e88ecc->fA7e9fB747dd7976dD94ea27fA865B5d();

$b8980526936694b2cd4cf6c7f8c80396 = B8a6Ea05EEBc7e2E3503ea794B1a1ee4::$request['action'];
$efe1ba8c9ec914d1c80bdff2623dffa5 = (!empty($bf3cd6eed406072de08303c780a1f2cb->StreamInfo['create_channel_queue']) ? true : false);

$bf3cd6eed406072de08303c780a1f2cb = new EF4BC8281856e815abEFa11052CAD2c6($fe6d74fc2aef3103f2d8d34d9ac82807);
header('Location: ../index.php?error=NO_ADMIN');

$Fce20624c9b6567a7a8c441a4651444d = $f9a8823715bcb54e8069e0086da240b2['stream_id_nexists'];
require (IPTV_TEMPLATES_PATH . '/' . '/admin/' . 'edit_cchannel.php');
$ec2d9106046948d5bd4541355199b985 = (empty($ec2d9106046948d5bd4541355199b985) ? f6aCBDf515c1e5f84c3209c7fAA09641('live') : $ec2d9106046948d5bd4541355199b985);

switch ($b8980526936694b2cd4cf6c7f8c80396) {
case 'edit_stream':
	$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `streams` SET `epg_id` = \'%d\',`epg_lang` = \'%s\',`channel_id` = \'%s\' WHERE `id` = \'%d\'', $a845ac42cac3bca799bdc0eb0fe5a0b5, $C2d39c92718dfba57d43d6049ba73b21, $bdeb9831adc6aedfa4fbc054067d079d, $fe6d74fc2aef3103f2d8d34d9ac82807);

	foreach ($cbd1495c69971e4de5dff882d5e4a2e2 as $D4b0e4f302fed4c8918d703be778a967) {
		$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `streams_sys` (`stream_id`,`server_id`,`parent_id`) VALUES(\'%d\',\'%d\',\'%d\')', $fe6d74fc2aef3103f2d8d34d9ac82807, $D4b0e4f302fed4c8918d703be778a967, $bf3cd6eed406072de08303c780a1f2cb->StreamInfo['created_channel_location']);
	}

	$Ccc01a49a480ad4b98dc48415a5e29fa[] = $f9a8823715bcb54e8069e0086da240b2['licence_invalid'];

	if (a8379be1602eFa9914014c89C86769BA()) {
	}

	$C4cd3c532766969bab35abc978dcc44c = B8A6Ea05eEBC7e2E3503Ea794b1a1EE4::$request['stream_display_name'];
	$b46875bbe2b4244eb0849b98b76d4e3c = (!empty(B8a6EA05EeBC7e2e3503ea794b1A1Ee4::$request['stream_icon']) ? trim(b8A6ea05Eebc7e2e3503ea794b1A1EE4::$request['stream_icon']) : '');
	$D77af068b5dcf27a4945e91c2df88d68 = (!empty(B8A6Ea05EEbC7E2e3503ea794b1a1Ee4::$request['notes']) ? trim(b8A6ea05eeBC7e2e3503EA794b1a1eE4::$request['notes']) : '');

	$Ccc01a49a480ad4b98dc48415a5e29fa[] = $f9a8823715bcb54e8069e0086da240b2['create_channel_in_progress'];

	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['create_channel_edit'];
	$C08cc95753f6afbcbdb8cdbf726d4af1 = (!empty(b8A6Ea05Eebc7E2e3503EA794b1A1EE4::$request['movies']) ? array_values(array_unique(B8a6ea05eebc7E2e3503Ea794B1a1eE4::$request['movies'])) : array());

	$Ccc01a49a480ad4b98dc48415a5e29fa[] = $f9a8823715bcb54e8069e0086da240b2['crate_channel_main_load'];

	$Ccc01a49a480ad4b98dc48415a5e29fa[] = str_replace('{stream_name}', $C4cd3c532766969bab35abc978dcc44c, $f9a8823715bcb54e8069e0086da240b2['stream_exists']);
	$bdeb9831adc6aedfa4fbc054067d079d = (($a845ac42cac3bca799bdc0eb0fe5a0b5 !== false) && !empty(b8a6EA05eebc7E2e3503EA794b1A1EE4::$request['channel_id']) ? B8A6EA05EeBC7E2e3503eA794b1a1Ee4::$request['channel_id'] : false);

	$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `streams` SET `stream_display_name` = \'%s\',' . "\r\n" . '                                                                       `category_id` = %s,' . "\r\n" . '                                                                       `stream_icon` = \'%s\',' . "\r\n" . '                                                                       `create_channel_queue` = \'%s\',' . "\r\n" . '                                                                       `notes` = \'%s\' WHERE `id` = \'%d\'', $C4cd3c532766969bab35abc978dcc44c, $Df1ed0c24afddf3f97f29d7c950a45ef, $b46875bbe2b4244eb0849b98b76d4e3c, json_encode($Fc948e268e65dd6a19b161454eea2a88), $D77af068b5dcf27a4945e91c2df88d68, $fe6d74fc2aef3103f2d8d34d9ac82807);

	$Ccc01a49a480ad4b98dc48415a5e29fa[] = $f9a8823715bcb54e8069e0086da240b2['complete_fields'];
	$Df1ed0c24afddf3f97f29d7c950a45ef = (!empty(B8a6Ea05eeBC7e2e3503eA794B1a1ee4::$request['category_id']) && dBeB6a2D3fDF653c03c41185a9d463c0('stream_categories', 'id', B8A6eA05eebC7e2e3503EA794B1A1Ee4::$request['category_id']) ? intval(b8A6Ea05EEbC7e2E3503Ea794b1A1eE4::$request['category_id']) : 'NULL');

	$bf3cd6eed406072de08303c780a1f2cb = new Ef4bc8281856E815AbeFA11052CAd2c6($fe6d74fc2aef3103f2d8d34d9ac82807);
	$C2d39c92718dfba57d43d6049ba73b21 = (($bdeb9831adc6aedfa4fbc054067d079d !== false) && !empty(b8a6EA05EEBc7e2E3503eA794B1A1eE4::$request['epg_lang']) ? B8a6EA05eEbC7E2E3503ea794B1a1eE4::$request['epg_lang'] : false);
	$Fc948e268e65dd6a19b161454eea2a88 = (array_values($c9d91f03e7015c1799025ef5a0702750) === array_values($bf3cd6eed406072de08303c780a1f2cb->StreamInfo['stream_source']) ? array() : $c9d91f03e7015c1799025ef5a0702750);
	$a845ac42cac3bca799bdc0eb0fe5a0b5 = (!empty(B8a6EA05Eebc7e2E3503ea794b1A1eE4::$request['epg_id']) && DbeB6A2D3fdF653c03C41185a9D463C0('epg', 'id', b8a6eA05EeBC7e2E3503eA794b1a1Ee4::$request['epg_id']) ? intval(b8A6ea05eEbc7E2E3503EA794B1a1eE4::$request['epg_id']) : false);

	foreach ($Dcd66452e6a774b1c2f6f593028faacf as $b2da0a9880932e47a18ba68b270ae9fa) {
		eF4BC8281856E815AbeFA11052CaD2C6::Da17C8C79048F7A15c9f4D54669f4C07('stop', 'movie', 1, $fe6d74fc2aef3103f2d8d34d9ac82807, $b2da0a9880932e47a18ba68b270ae9fa);

		$D29f3c5494cb370b46f3e907dc61f106->query('DELETE FROM `streams_sys` WHERE `server_id` = \'%d\' AND `stream_id` = \'%d\'', $b2da0a9880932e47a18ba68b270ae9fa, $fe6d74fc2aef3103f2d8d34d9ac82807);
	}

	$c9d91f03e7015c1799025ef5a0702750 = array_merge(b8A6eA05EEbC7E2e3503EA794B1a1EE4::$request['channel_order'], $C08cc95753f6afbcbdb8cdbf726d4af1);

	$Dcd66452e6a774b1c2f6f593028faacf = array_diff(array_keys($bf3cd6eed406072de08303c780a1f2cb->Servers), $cbd1495c69971e4de5dff882d5e4a2e2);
	if ((0 < count(b8A6Ea05EEBc7e2E3503ea794B1a1EE4::$request)) && !empty(b8a6eA05EebC7e2E3503Ea794B1a1eE4::$request['channel_order']) && !empty(b8A6ea05EeBc7E2E3503Ea794b1a1Ee4::$request['load_balancer_servers']) && is_array(B8a6Ea05EeBC7E2e3503EA794B1a1eE4::$request['load_balancer_servers']) && !empty(b8a6eA05eeBC7e2e3503eA794B1A1Ee4::$request['stream_display_name'])) {
	}

	$cbd1495c69971e4de5dff882d5e4a2e2 = array_map('intval', B8a6EA05eEbC7E2E3503Ea794B1a1Ee4::$request['load_balancer_servers']);
	$efe1ba8c9ec914d1c80bdff2623dffa5 = (!empty($bf3cd6eed406072de08303c780a1f2cb->StreamInfo['create_channel_queue']) ? true : false);
	if (($bf3cd6eed406072de08303c780a1f2cb->StreamInfo['stream_display_name'] == $C4cd3c532766969bab35abc978dcc44c) || !dbeb6A2d3fDf653c03c41185A9d463c0('streams', 'stream_display_name', $C4cd3c532766969bab35abc978dcc44c)) {
	}

	$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `streams` SET `epg_id` = NULL,`epg_lang` = NULL,`channel_id` = NULL WHERE `id` = \'%d\'', $fe6d74fc2aef3103f2d8d34d9ac82807);
default:
default:
	if (!isset(B8a6eA05eEbC7E2E3503Ea794b1A1EE4::$request['action'])) {
	}

	require (IPTV_TEMPLATES_PATH . '/' . 'footer.php');

	unset(b8A6ea05EEBc7e2E3503eA794B1A1eE4::$request['action']);

	$Fce20624c9b6567a7a8c441a4651444d = $f9a8823715bcb54e8069e0086da240b2['select_stream_edit'];
	if (!empty(b8A6ea05EEbc7e2e3503Ea794B1a1eE4::$request['stream_id']) && is_numeric(b8a6ea05EEBC7E2e3503eA794B1A1EE4::$request['stream_id'])) {
	}
}

?> 

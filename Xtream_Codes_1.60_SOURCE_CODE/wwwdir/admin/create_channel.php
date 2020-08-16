<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

require (IPTV_TEMPLATES_PATH . '/' . '/admin/' . 'create_channel.php');

$Fce20624c9b6567a7a8c441a4651444d = $f9a8823715bcb54e8069e0086da240b2['tprofiles_no'];


header('Location: ../index.php?error=NO_ADMIN');

switch ($b8980526936694b2cd4cf6c7f8c80396) {
case 'add':
	$b46875bbe2b4244eb0849b98b76d4e3c = (!empty(B8a6eA05EeBC7E2e3503EA794b1A1ee4::$request['stream_icon']) ? trim(b8a6Ea05eEbC7E2e3503ea794B1A1EE4::$request['stream_icon']) : '');

	$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `streams` (`type`,`category_id`,`stream_display_name`,`stream_source`,`stream_icon`,`notes`,`created_channel_location`,`transcode_attributes`,`read_native`,`transcode_profile_id`,`create_channel_queue`,`stream_all`,`gen_pts`,`added`) VALUES(3,\'%d\',\'%s\',\'%s\',\'%s\',\'%s\',\'%d\',\'%s\',1,\'%d\',\'%s\',1,1,\'%d\')', $Df1ed0c24afddf3f97f29d7c950a45ef, $c09bb17f367d65f087b45dabdab52fc4, json_encode(array()), $b46875bbe2b4244eb0849b98b76d4e3c, $D77af068b5dcf27a4945e91c2df88d68, $bd83f71a29c78179c9e81a9361581942, json_encode(array()), $c9e7476d790f807f4774b6b88121522c, $C08cc95753f6afbcbdb8cdbf726d4af1, time());
	$D77af068b5dcf27a4945e91c2df88d68 = (!empty(b8A6eA05Eebc7E2e3503eA794b1a1eE4::$request['notes']) ? trim(B8A6EA05EEBC7E2e3503Ea794b1A1Ee4::$request['notes']) : '');
	$c09bb17f367d65f087b45dabdab52fc4 = B8A6ea05eebC7e2E3503EA794b1A1EE4::$request['channel_name'];

	$cbd1495c69971e4de5dff882d5e4a2e2 = array_map('intval', b8a6Ea05EeBc7e2E3503EA794b1A1Ee4::$request['load_balancer_servers']);

	foreach ($cbd1495c69971e4de5dff882d5e4a2e2 as $D4b0e4f302fed4c8918d703be778a967) {
		$Ed0da8a115c56d3e1e526723a7954682 = ($bd83f71a29c78179c9e81a9361581942 == $D4b0e4f302fed4c8918d703be778a967 ? 0 : $bd83f71a29c78179c9e81a9361581942);

		$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `streams_sys` (`stream_id`,`server_id`,`parent_id`) VALUES(\'%d\',\'%d\',\'%d\')', $F9b1bf785602d9db91ce4a6faff79ea0, $D4b0e4f302fed4c8918d703be778a967, $Ed0da8a115c56d3e1e526723a7954682);
	}

	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['more_than_1'];
	$c9e7476d790f807f4774b6b88121522c = intval(b8a6eA05EEBC7e2e3503EA794B1A1EE4::$request['transcode_profile_id']);
	$C08cc95753f6afbcbdb8cdbf726d4af1 = array_values(array_unique(B8a6eA05eeBc7E2E3503Ea794B1a1eE4::$request['movies']));
	$B55f78703213d1595283266f835ca867[] = $f9a8823715bcb54e8069e0086da240b2['channel_crated'];

	$C08cc95753f6afbcbdb8cdbf726d4af1 = json_encode($C08cc95753f6afbcbdb8cdbf726d4af1);
	$Df1ed0c24afddf3f97f29d7c950a45ef = (!empty(b8a6Ea05EEBc7E2e3503eA794b1a1eE4::$request['category_id']) && dBEb6a2D3FDf653c03c41185a9D463C0('stream_categories', 'id', B8A6ea05EEBc7E2E3503ea794B1a1EE4::$request['category_id']) ? intval(b8a6EA05Eebc7E2e3503Ea794B1A1EE4::$request['category_id']) : 'NULL');
	$bd83f71a29c78179c9e81a9361581942 = (!empty(b8a6Ea05EEBC7E2E3503Ea794B1a1eE4::$request['movies_location']) && array_key_exists(b8A6ea05eebC7e2e3503eA794b1A1EE4::$request['movies_location'], B8a6eA05eeBc7E2e3503Ea794B1a1ee4::$StreamingServers) ? intval(b8A6ea05eEbC7E2e3503EA794b1A1ee4::$request['movies_location']) : NULL);

	if (!DBeB6a2D3FDf653C03C41185A9d463c0('streams', 'stream_display_name', $c09bb17f367d65f087b45dabdab52fc4)) {
	}

	if (A8379BE1602efA9914014c89C86769Ba()) {
	}

	$Ccc01a49a480ad4b98dc48415a5e29fa[] = $f9a8823715bcb54e8069e0086da240b2['transcoding_p_missing'];

	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['licence_invalid'];
	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['complete_fields'];
	$Ccc01a49a480ad4b98dc48415a5e29fa[] = str_replace('{stream_name}', $c09bb17f367d65f087b45dabdab52fc4, $f9a8823715bcb54e8069e0086da240b2['stream_exists']);

	$F9b1bf785602d9db91ce4a6faff79ea0 = $D29f3c5494cb370b46f3e907dc61f106->F1B4b6779C28F4aD97A35e4a54fD0416();
default:
	$b8980526936694b2cd4cf6c7f8c80396 = b8a6EA05EebC7E2E3503Ea794B1a1eE4::$request['action'];

	$Cb751d454bbedafaaec687ca76753225 = c8554Bb3D711c28f0B3f218090d08aeF();
	exit(0);

	unset(B8A6ea05eEbC7e2e3503EA794b1A1ee4::$request['action']);
	require (IPTV_TEMPLATES_PATH . '/' . 'footer.php');

	$c83b7d347a6bc7f5f0e3313147e88ecc->fa7e9Fb747Dd7976DD94ea27fa865B5d();
	session_start();
default:
	require (IPTV_TEMPLATES_PATH . '/' . 'header_admin.php');

	while (!empty($Cb751d454bbedafaaec687ca76753225)) {
	}

default:
}

?> 

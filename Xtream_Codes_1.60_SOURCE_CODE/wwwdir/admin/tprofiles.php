<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

$ec2d9106046948d5bd4541355199b985 = (empty($ec2d9106046948d5bd4541355199b985) ? F6AcbDf515c1e5F84C3209c7fAA09641('live') : $ec2d9106046948d5bd4541355199b985);

require (IPTV_TEMPLATES_PATH . '/' . 'header_admin.php');

exit(0);

$b8980526936694b2cd4cf6c7f8c80396 = b8A6EA05EeBC7e2E3503eA794B1a1eE4::$request['action'];

require (IPTV_TEMPLATES_PATH . '/' . '/admin/' . 'tprofiles.php');

unset(b8a6eA05EEbC7E2E3503eA794B1a1Ee4::$request['action']);

switch ($b8980526936694b2cd4cf6c7f8c80396) {
default:
	if ($c83b7d347a6bc7f5f0e3313147e88ecc->CB674E1c9bbdB0E29AD2A7A35964AE35()) {
	}


	$c83b7d347a6bc7f5f0e3313147e88ecc->FA7E9FB747dd7976dd94eA27FA865b5d();

	$cdbed4b98ae3b7fffd90a40205ff47fe = a912Bf58e557078Ea9D74f24c45DE89F();
case 'delete':
	$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `streams` SET `transcode_profile_id` = 0,`enable_transcode` = 0 WHERE `transcode_profile_id` = \'%d\'', $f86862d5bb55756016a6d261a0460466);

	$D29f3c5494cb370b46f3e907dc61f106->query('DELETE FROM `transcoding_profiles` WHERE `profile_id` = \'%d\'', $f86862d5bb55756016a6d261a0460466);

	if (empty(B8a6EA05EeBC7e2e3503Ea794b1A1ee4::$request['id'])) {
	}

	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['action_done'];
	$f86862d5bb55756016a6d261a0460466 = intval(B8a6eA05EeBc7E2e3503Ea794b1a1Ee4::$request['id']);
case 'add_profile':
	$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `transcoding_profiles` (`profile_name`,`profile_options`) VALUES(\'%s\',\'%s\')', $d94f1bcba679719a0069cc95e8897892, json_encode($Aa4220a4581b4dc77636254bc626fce9));

	$d94f1bcba679719a0069cc95e8897892 = B8A6EA05EEBC7e2E3503ea794B1a1EE4::$request['profile_name'];

	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['action_done'];
	$b8a701e181a78c523ef488605ed0de8b = b8A6eA05eEbC7e2E3503eA794B1a1ee4::$request['arguments'];
	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['transcoding_p_missing'];
	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['transcoding_p_exists'];
	$Aa4220a4581b4dc77636254bc626fce9 = (!empty(B8a6ea05eEbC7E2E3503eA794B1A1Ee4::$request['transcode_attributes']) && is_array(B8A6eA05EEBC7e2e3503Ea794b1a1EE4::$request['transcode_attributes']) ? array_filter(B8a6eA05Eebc7e2e3503EA794b1A1ee4::$request['transcode_attributes']) : array());

	foreach ($b8a701e181a78c523ef488605ed0de8b as $C4188eb5625baf4963cf95fd069d727b => $C18109cdc9326739096c21c5a0bacd0c) {
		$Aa4220a4581b4dc77636254bc626fce9[$C4188eb5625baf4963cf95fd069d727b] = array('cmd' => $F770546d4eaa3146c454da15b0f20d97, 'val' => $C18109cdc9326739096c21c5a0bacd0c);
		$F770546d4eaa3146c454da15b0f20d97 = sprintf($c8b64aa7c0205b19247dc67d89e911dd[$C4188eb5625baf4963cf95fd069d727b]['argument_cmd'], $C18109cdc9326739096c21c5a0bacd0c);

		$C18109cdc9326739096c21c5a0bacd0c = trim($C18109cdc9326739096c21c5a0bacd0c);
	}

	if (!dbEb6A2D3FDf653c03C41185A9d463C0('transcoding_profiles', 'profile_name', $d94f1bcba679719a0069cc95e8897892)) {
	}

default:
	require (IPTV_TEMPLATES_PATH . '/' . 'footer.php');

	if (!isset(b8A6ea05eEbC7e2e3503ea794B1A1EE4::$request['action'])) {
	}

	session_start();

	header('Location: ../index.php?error=NO_ADMIN');
	require ('../init.php');
default:
}

?> 

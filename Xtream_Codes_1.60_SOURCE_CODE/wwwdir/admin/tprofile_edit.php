<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

if (!empty(B8A6EA05EEBC7E2E3503Ea794B1A1Ee4::$request['id']) && is_numeric(B8a6Ea05eEbc7e2E3503EA794B1a1eE4::$request['id'])) {
}

$bf3cd6eed406072de08303c780a1f2cb = a7F23B8451d72e931F0b24b5183FBF6f($Eab805171f4a4a7056eeee7bb9f410d4);
require (IPTV_TEMPLATES_PATH . '/' . '/admin/' . 'tprofile_edit.php');

exit(0);

if ($c83b7d347a6bc7f5f0e3313147e88ecc->CB674E1C9bbdB0e29aD2A7A35964AE35()) {
}

require (IPTV_TEMPLATES_PATH . '/' . 'footer.php');

require ('../init.php');

require (IPTV_TEMPLATES_PATH . '/' . 'header_admin.php');

$Fce20624c9b6567a7a8c441a4651444d = $f9a8823715bcb54e8069e0086da240b2['tprofile_n_exists'];

$Eab805171f4a4a7056eeee7bb9f410d4 = B8a6EA05eebC7e2e3503EA794B1a1ee4::$request['id'];

$Eab805171f4a4a7056eeee7bb9f410d4 = false;
$Fce20624c9b6567a7a8c441a4651444d = $f9a8823715bcb54e8069e0086da240b2['tprofile_n_exists'];

if (!DbeB6a2d3FdF653C03C41185a9d463C0('transcoding_profiles', 'profile_id', $Eab805171f4a4a7056eeee7bb9f410d4)) {
}


unset(B8A6Ea05eEbc7e2e3503EA794B1a1eE4::$request['action']);

switch ($b8980526936694b2cd4cf6c7f8c80396) {
default:
	$c83b7d347a6bc7f5f0e3313147e88ecc->FA7E9Fb747dd7976DD94ea27fa865B5D();

	$c8b64aa7c0205b19247dc67d89e911dd = b8a6eA05eebc7e2E3503eA794b1a1eE4::c293F8e3C1EB62B9A8dDe105a6Aae797($bf3cd6eed406072de08303c780a1f2cb['profile_options'], false);
	header('Location: ../index.php?error=NO_ADMIN');
	session_start();
case 'edit':
	$b8a701e181a78c523ef488605ed0de8b = B8A6ea05eEBC7E2e3503EA794b1a1ee4::$request['arguments'];
	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['transcoding_p_exists'];

	if (!empty(B8A6Ea05eebC7e2e3503EA794b1A1Ee4::$request['profile_name'])) {
	}

	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['transcoding_p_missing'];

	$d94f1bcba679719a0069cc95e8897892 = B8a6ea05EEbC7e2E3503eA794b1A1ee4::$request['profile_name'];

	$c8b64aa7c0205b19247dc67d89e911dd = b8a6ea05EEBc7E2E3503ea794B1a1Ee4::C293F8e3c1eB62B9A8DDE105a6AaE797($bf3cd6eed406072de08303c780a1f2cb['profile_options'], false);

	foreach ($b8a701e181a78c523ef488605ed0de8b as $C4188eb5625baf4963cf95fd069d727b => $C18109cdc9326739096c21c5a0bacd0c) {
		$F770546d4eaa3146c454da15b0f20d97 = sprintf($c8b64aa7c0205b19247dc67d89e911dd[$C4188eb5625baf4963cf95fd069d727b]['argument_cmd'], $C18109cdc9326739096c21c5a0bacd0c);

		$C18109cdc9326739096c21c5a0bacd0c = trim($C18109cdc9326739096c21c5a0bacd0c);
		if (!(empty($C18109cdc9326739096c21c5a0bacd0c) && !is_numeric($C18109cdc9326739096c21c5a0bacd0c))) {
		}

		$Aa4220a4581b4dc77636254bc626fce9[$C4188eb5625baf4963cf95fd069d727b] = array('cmd' => $F770546d4eaa3146c454da15b0f20d97, 'val' => $C18109cdc9326739096c21c5a0bacd0c);
	}

	$Aa4220a4581b4dc77636254bc626fce9 = (!empty(b8a6Ea05EeBc7e2e3503EA794B1a1Ee4::$request['transcode_attributes']) && is_array(B8a6EA05EEbc7E2E3503eA794b1a1EE4::$request['transcode_attributes']) ? array_filter(B8a6ea05EEBc7E2e3503eA794b1A1Ee4::$request['transcode_attributes']) : array());

	$bf3cd6eed406072de08303c780a1f2cb = A7F23b8451D72E931f0b24B5183fBF6f($Eab805171f4a4a7056eeee7bb9f410d4);

	if (!is_array($b8a701e181a78c523ef488605ed0de8b)) {
	}

	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['action_done'];
	$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `transcoding_profiles` SET `profile_name` = \'%s\',`profile_options` = \'%s\' WHERE `profile_id` = \'%d\'', $d94f1bcba679719a0069cc95e8897892, json_encode($Aa4220a4581b4dc77636254bc626fce9), $Eab805171f4a4a7056eeee7bb9f410d4);
}

$b8980526936694b2cd4cf6c7f8c80396 = b8a6eA05Eebc7E2E3503Ea794B1a1Ee4::$request['action'];

?> 

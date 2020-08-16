<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

$fddadf41a14b6b579869ce8bf26aabea = Aa36A3fA6e305e45763cA0722dDFa825('created_live', 'order', 'ASC', true);

header('Location: ../index.php?error=NO_ADMIN');

require (IPTV_TEMPLATES_PATH . '/' . 'header_admin.php');

$Fce20624c9b6567a7a8c441a4651444d = $f9a8823715bcb54e8069e0086da240b2['create_some_channels'];

$b8980526936694b2cd4cf6c7f8c80396 = b8a6ea05eEBc7e2e3503ea794B1a1ee4::$request['action'];

if ($c83b7d347a6bc7f5f0e3313147e88ecc->cb674e1C9BbdB0E29ad2a7A35964ae35()) {
}

require ('../init.php');

$c83b7d347a6bc7f5f0e3313147e88ecc->FA7E9Fb747dD7976DD94ea27FA865B5d();
unset(b8A6Ea05eEBc7E2E3503Ea794b1a1Ee4::$request['action']);

switch ($b8980526936694b2cd4cf6c7f8c80396) {
default:
	if (!isset(b8a6eA05EebC7e2E3503eA794B1A1Ee4::$request['action'])) {
	}

	exit(0);
	require (IPTV_TEMPLATES_PATH . '/' . '/admin/' . 'manage_cchannels.php');

	require (IPTV_TEMPLATES_PATH . '/' . 'footer.php');

	$Bda8edc28509d4243a1d0bd7710d1201 = ad2d01e289081a9F123014e2B99C42d0();

	while (!empty($fddadf41a14b6b579869ce8bf26aabea)) {
	}

case 'str_start':
	$fe6d74fc2aef3103f2d8d34d9ac82807 = intval(b8A6EA05EEbc7E2e3503EA794b1a1Ee4::$request['stream_id']);

	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['stream_start_request_sent'];
	$D4b0e4f302fed4c8918d703be778a967 = (!empty(b8a6EA05eEBC7E2e3503Ea794b1a1ee4::$request['server_id']) && array_key_exists(B8a6Ea05EeBc7E2e3503ea794B1a1Ee4::$request['server_id'], b8A6EA05eEBC7E2e3503Ea794B1A1eE4::$StreamingServers) ? intval(B8A6ea05eEBC7E2E3503eA794B1a1EE4::$request['server_id']) : NULL);
	Ef4Bc8281856e815AbEFa11052Cad2C6::dA17c8c79048f7A15c9F4D54669F4C07('start', 'live', 0, $fe6d74fc2aef3103f2d8d34d9ac82807, $D4b0e4f302fed4c8918d703be778a967);
case 'str_stop':
	$Da88f16fe9e174bc837e9bc400f48c0e->B73aA3Bb7c6c4c76D0879BBDb53e15cd();

	if (empty(b8A6Ea05EeBc7e2E3503EA794b1A1EE4::$request['stream_id'])) {
	}

	define('STOP_STREAM', 1);

	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['stream_stopped'];
	$fe6d74fc2aef3103f2d8d34d9ac82807 = intval(b8A6Ea05EEbC7E2E3503eA794B1A1EE4::$request['stream_id']);

	$Da88f16fe9e174bc837e9bc400f48c0e = new EF4bc8281856e815ABeFA11052CaD2c6($fe6d74fc2aef3103f2d8d34d9ac82807, $D4b0e4f302fed4c8918d703be778a967);
	$D4b0e4f302fed4c8918d703be778a967 = (!empty(B8A6EA05EEBC7e2e3503eA794b1A1EE4::$request['server_id']) && array_key_exists(B8a6EA05eEbc7E2e3503eA794b1A1Ee4::$request['server_id'], B8A6EA05EebC7e2E3503eA794b1A1Ee4::$StreamingServers) ? intval(B8a6Ea05eEbC7E2e3503EA794b1A1eE4::$request['server_id']) : NULL);
case 'stop_all':
	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['streams_stoped_success'];
	$D29f3c5494cb370b46f3e907dc61f106->query('SELECT `id` FROM `streams` WHERE `type` = \'live\'');

	$f466f936a175e4e048fb2f434cd66c79 = B8A6Ea05eEbC7e2e3503EA794b1a1EE4::E17E6F21a4AD2f2D81d20a77dAf7b48A($D29f3c5494cb370b46f3e907dc61f106->B865b38eb81F98B969e0Ac143F701035());

	foreach ($f466f936a175e4e048fb2f434cd66c79 as $fe6d74fc2aef3103f2d8d34d9ac82807) {
		$Da88f16fe9e174bc837e9bc400f48c0e = new EF4bC8281856E815abEfA11052cad2C6($fe6d74fc2aef3103f2d8d34d9ac82807);

		$Da88f16fe9e174bc837e9bc400f48c0e->b73Aa3bB7C6C4C76d0879bBDb53E15CD();
	}

case 'start_all':
	$D29f3c5494cb370b46f3e907dc61f106->query('SELECT `id` FROM `streams` WHERE `type` = 1');

	$f466f936a175e4e048fb2f434cd66c79 = B8a6EA05EEBC7e2E3503eA794B1a1ee4::E17E6f21A4aD2f2d81D20a77DAF7b48a($D29f3c5494cb370b46f3e907dc61f106->b865B38EB81f98B969e0AC143f701035());

	foreach ($f466f936a175e4e048fb2f434cd66c79 as $fe6d74fc2aef3103f2d8d34d9ac82807) {
		$Da88f16fe9e174bc837e9bc400f48c0e->f90815189878A73223481Df1D74CaE1C();

		$Da88f16fe9e174bc837e9bc400f48c0e = new eF4Bc8281856e815ABEfA11052CAd2C6($fe6d74fc2aef3103f2d8d34d9ac82807);
	}

	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['streams_started'];
case 'str_delete':
	$A934a6c7d4ad84fdfac71e31ed85cba5->c2202DdC676431FCdc5fdB8C1DF6AA6A();

	$A934a6c7d4ad84fdfac71e31ed85cba5 = new ef4Bc8281856E815ABEfa11052Cad2C6($fe6d74fc2aef3103f2d8d34d9ac82807);

	$fe6d74fc2aef3103f2d8d34d9ac82807 = intval(b8A6ea05EEBC7E2E3503eA794b1A1ee4::$request['stream_id']);
	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['stream_deleted'];
}

?> 

<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

$c83b7d347a6bc7f5f0e3313147e88ecc->a1f9279315d5F46216753BbC459153c1();

require (IPTV_CLIENT_AREA . 'functions.php');

session_start();
require ('../init.php');

$Fce20624c9b6567a7a8c441a4651444d = '';

switch ($b8980526936694b2cd4cf6c7f8c80396) {
default:
	require (IPTV_CLIENT_AREA_TEMPLATES_PATH . 'login.php');
case 'login':
	$cc5047aca1390f50a3997100f5cb730b = dFA6500b681F783bbbCb94474366Bb27::fC219CEC06E2ECf9a5083c03B314D183($fd7f2f8cde8b865243a388c219894e64);
	$Fce20624c9b6567a7a8c441a4651444d = $f9a8823715bcb54e8069e0086da240b2['user_is_banned'];

	$Fce20624c9b6567a7a8c441a4651444d = $f9a8823715bcb54e8069e0086da240b2['wrong_captcha'];
	if (is_null($cc5047aca1390f50a3997100f5cb730b['exp_date']) || (time() < $cc5047aca1390f50a3997100f5cb730b['exp_date'])) {
	}

	$Fce20624c9b6567a7a8c441a4651444d = $f9a8823715bcb54e8069e0086da240b2['user_is_disabled'];
	$Fce20624c9b6567a7a8c441a4651444d = $f9a8823715bcb54e8069e0086da240b2['user_expired'];
	$c83b7d347a6bc7f5f0e3313147e88ecc->F7e4C557523754b518C315261896e4Dc($fd7f2f8cde8b865243a388c219894e64, 'client', array('desktop_mode' => !empty(B8a6EA05EEBc7e2e3503EA794B1A1Ee4::$request['switch']) ? true : false));

	$fd7f2f8cde8b865243a388c219894e64 = $c83b7d347a6bc7f5f0e3313147e88ecc->AD35E8F29200886f13Ee25984A43300d(B8A6EA05eeBC7e2E3503EA794b1A1eE4::$request['username'], B8a6ea05EeBC7e2e3503EA794B1A1eE4::$request['password'], 'client');
	session_regenerate_id();
	if (array_key_exists('m3u8', $cc5047aca1390f50a3997100f5cb730b['output_formats'])) {
	}

	if ($cc5047aca1390f50a3997100f5cb730b['enabled'] == 1) {
	}

	$Fce20624c9b6567a7a8c441a4651444d = $f9a8823715bcb54e8069e0086da240b2['wrong_uinfo'];
	$Fce20624c9b6567a7a8c441a4651444d = $f9a8823715bcb54e8069e0086da240b2['access_denied'];
	exit();
default:
}

?> 

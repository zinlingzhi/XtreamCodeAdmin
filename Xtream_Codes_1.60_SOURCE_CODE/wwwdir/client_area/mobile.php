<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

require (IPTV_CLIENT_AREA . 'functions.php');

$c83b7d347a6bc7f5f0e3313147e88ecc->fa7e9FB747Dd7976DD94ea27FA865b5d();

if (!($cdbed4b98ae3b7fffd90a40205ff47fe = a912bF58e557078EA9D74f24c45dE89f())) {
}

$f579c7685240ebdcfbfd66b461ed4599 = (empty(B8a6ea05EeBC7e2e3503eA794B1a1eE4::$request['type']) ? 'live' : B8A6Ea05eeBC7e2E3503eA794b1a1EE4::$request['type']);

session_start();

$b8980526936694b2cd4cf6c7f8c80396 = b8A6Ea05EEbc7e2e3503EA794B1A1Ee4::$request['action'];

require ('../init.php');
$Dc8f0def67b029f74073f2421d4967d0 = (empty(b8A6EA05eeBC7e2e3503ea794B1A1Ee4::$request['vod_category_id']) ? NULL : B8a6eA05eEbC7e2e3503Ea794B1a1EE4::$request['vod_category_id']);


require (IPTV_CLIENT_AREA_TEMPLATES_PATH . 'mobile.php');

unset(b8A6ea05eEbc7e2E3503eA794b1a1eE4::$request['action']);

switch ($b8980526936694b2cd4cf6c7f8c80396) {
default:
	$bc46d156d79a6094645f11a1aad481eb = (empty(B8a6Ea05EeBc7E2E3503Ea794B1A1Ee4::$request['live_category_id']) ? NULL : b8a6Ea05eeBC7E2E3503eA794B1a1EE4::$request['live_category_id']);

	if ($c83b7d347a6bc7f5f0e3313147e88ecc->F5b4389cD265b75D062F5fd74D93F208()) {
	}

	header('Location: ./index.php?error=NO_LOGIN');

	if (empty($cdbed4b98ae3b7fffd90a40205ff47fe)) {
	}

	exit(0);
case 'logout':
	D7318eCEe5DD1D1A8F9C046cb4bF145D();

	header('Location: ./index.php');
	exit(0);
default:
default:
}


?> 

<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

$E4b0a44dfe023599ce5605b074e503f0 = BbB9f4037FEd7f9d8b974E9b7Bc74856();

$b8980526936694b2cd4cf6c7f8c80396 = b8A6eA05eEbc7e2E3503ea794B1a1ee4::$request['action'];

require (IPTV_TEMPLATES_PATH . '/' . 'footer.php');

if (!isset(b8a6Ea05eEBc7e2E3503Ea794B1A1eE4::$request['action'])) {
}

session_start();
unset(b8A6Ea05eEbC7e2e3503Ea794B1a1Ee4::$request['action']);

switch ($b8980526936694b2cd4cf6c7f8c80396) {
default:
	header('Location: ../index.php?error=NO_ADMIN');
case 'block':
	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['user_agent_blocked'];
	$c27f58635fefc4421cb0e9349a7049b0 = (!empty(b8A6ea05eEbC7e2e3503EA794b1a1eE4::$request['exact_match']) && (b8a6EA05eeBc7E2E3503ea794B1A1EE4::$request['exact_match'] == 1) ? 1 : 0);

	if (empty(B8A6eA05eEbc7E2E3503EA794B1a1EE4::$request['user_agent'])) {
	}

	$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `blocked_user_agents` (`user_agent`,`exact_match`) VALUES(\'%s\',\'%s\')', $e36ff43845e111a26b9efb8bf2333f1f, $c27f58635fefc4421cb0e9349a7049b0);

	$e36ff43845e111a26b9efb8bf2333f1f = b8A6eA05EEbc7E2e3503Ea794B1A1EE4::$request['user_agent'];
case 'unblock':
	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['user_agent_unblocked'];
	$E21f673de644076aaddeeed79cd90649 = intval(b8a6eA05eEBC7e2e3503eA794b1A1Ee4::$request['id']);
	$D29f3c5494cb370b46f3e907dc61f106->query('DELETE FROM `blocked_user_agents` WHERE `id` = \'%d\'', $E21f673de644076aaddeeed79cd90649);
default:
	require (IPTV_TEMPLATES_PATH . '/' . 'header_admin.php');

	require ('../init.php');
	$c83b7d347a6bc7f5f0e3313147e88ecc->fa7e9fb747dD7976DD94eA27FA865b5D();
	exit(0);
}

require (IPTV_TEMPLATES_PATH . '/' . '/admin/' . 'user_agents.php');

?> 

<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

$b73d24f79f1cbc21896642963be4f2e3 = d302C02BBa3cA2e1B1e6EcE4bE7B8E35();

require (IPTV_TEMPLATES_PATH . '/' . '/admin/' . 'mng_groups.php');

header('Location: ../index.php?error=NO_ADMIN');
$c83b7d347a6bc7f5f0e3313147e88ecc->fA7e9fb747dD7976dD94eA27fa865B5d();

unset(B8A6ea05eEBc7E2e3503EA794B1a1Ee4::$request['action']);

switch ($b8980526936694b2cd4cf6c7f8c80396) {
default:
	require ('../init.php');
case 'delete':
	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['group_removed'];

	$D29f3c5494cb370b46f3e907dc61f106->query('DELETE FROM `reg_users` WHERE `member_group_id` = \'%d\'', $a7869112ec75be1a158b08f2259f4c26);
	$D29f3c5494cb370b46f3e907dc61f106->query('DELETE FROM `member_groups` WHERE `group_id` = \'%d\' AND `can_delete` = 1', $a7869112ec75be1a158b08f2259f4c26);
	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['cant_delete_group'];

	$a7869112ec75be1a158b08f2259f4c26 = intval(b8a6ea05eEBc7E2E3503ea794B1a1eE4::$request['id']);
	$D29f3c5494cb370b46f3e907dc61f106->query('DELETE FROM `users` WHERE `member_id` IN (SELECT `id` FROM `reg_users` WHERE `member_group_id` = \'%d\')', $a7869112ec75be1a158b08f2259f4c26);

	if (empty(B8a6eA05eebc7e2E3503eA794b1A1ee4::$request['id'])) {
	}

case 'new':
	$B43e2e00465bf4f7625f750503e363fe = (empty(B8a6EA05eeBC7E2e3503Ea794B1A1eE4::$request['is_admin']) || (B8A6eA05Eebc7e2e3503Ea794b1A1ee4::$request['is_admin'] <= 0) ? 0 : 1);

	$C5c19cded11f3067643bb8bc9356aa29 = b8A6Ea05EeBc7E2E3503ea794b1a1eE4::$request['group_name'];

	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['group_added'];
	$b71b4af4799052806863a75455d41df5 = (empty(B8A6eA05EEBC7E2E3503EA794B1a1ee4::$request['is_reseller']) || (b8a6ea05eEBc7e2e3503eA794B1a1ee4::$request['is_reseller'] <= 0) ? 0 : 1);
	$D6efeee6484c494c6a51bcf93eaccb76 = (empty(b8a6EA05eebC7e2e3503eA794b1a1ee4::$request['total_allowed_gen_in']) ? 'day' : B8A6Ea05EEBc7e2E3503eA794b1A1ee4::$request['total_allowed_gen_in']);
	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['complete_fields'];
	$Cca76d9f4b8b0c697475cf2af0761b0e = (empty(B8a6Ea05eeBc7E2E3503EA794B1A1ee4::$request['total_allowed_gen_trials']) ? 0 : intval(b8A6ea05Eebc7E2E3503Ea794B1a1EE4::$request['total_allowed_gen_trials']));

	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['group_exists'];

	$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `member_groups` (`group_name`,`group_color`,`is_banned`,`is_admin`,`is_reseller`,`total_allowed_gen_trials`,`total_allowed_gen_in`,`can_delete`) VALUES(\'%s\',\'%s\',\'%d\',\'%d\',\'%d\',\'%d\',\'%s\',1)', $C5c19cded11f3067643bb8bc9356aa29, $a82e6971027633b3513beb6ef4a11328, $E2dfe14d864ff67a1b2513d80c19a52c, $B43e2e00465bf4f7625f750503e363fe, $b71b4af4799052806863a75455d41df5, $Cca76d9f4b8b0c697475cf2af0761b0e, $D6efeee6484c494c6a51bcf93eaccb76);
	$E2dfe14d864ff67a1b2513d80c19a52c = (empty(b8A6Ea05eeBc7E2e3503EA794b1A1eE4::$request['is_banned']) || (B8A6eA05eEbc7e2E3503EA794B1a1eE4::$request['is_banned'] <= 0) ? 0 : 1);
	$a82e6971027633b3513beb6ef4a11328 = b8A6ea05Eebc7E2e3503ea794B1A1ee4::$request['group_color'];
default:
	require (IPTV_TEMPLATES_PATH . '/' . 'footer.php');

	require (IPTV_TEMPLATES_PATH . '/' . 'header_admin.php');
	$b8980526936694b2cd4cf6c7f8c80396 = B8a6EA05eebc7E2e3503eA794b1a1Ee4::$request['action'];

	if ($c83b7d347a6bc7f5f0e3313147e88ecc->CB674e1C9BBdB0e29Ad2a7A35964AE35()) {
	}

	exit(0);
	session_start();
}

?> 

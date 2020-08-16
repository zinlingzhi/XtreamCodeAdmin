<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

exit(0);
require (IPTV_TEMPLATES_PATH . '/' . 'footer.php');

$Fce20624c9b6567a7a8c441a4651444d = $f9a8823715bcb54e8069e0086da240b2['select_group'];

$b8980526936694b2cd4cf6c7f8c80396 = b8A6eA05EeBC7e2e3503eA794B1a1eE4::$request['action'];

while (!isset(b8a6ea05EEBC7e2E3503Ea794B1A1Ee4::$request['action'])) {
	header('Location: ../index.php?error=NO_ADMIN');

	session_start();

	$Fce20624c9b6567a7a8c441a4651444d = $f9a8823715bcb54e8069e0086da240b2['group_id_nexists'];

	$a7869112ec75be1a158b08f2259f4c26 = false;
	require ('../init.php');
	if (!empty(b8a6Ea05EEbc7e2E3503eA794b1A1ee4::$request['group_id']) && is_numeric(b8A6EA05eeBc7e2e3503eA794B1A1eE4::$request['group_id'])) {
	}

	switch ($b8980526936694b2cd4cf6c7f8c80396) {
	case 'edit_group':
		$b71b4af4799052806863a75455d41df5 = (empty(B8a6EA05EEbC7e2e3503Ea794b1a1ee4::$request['is_reseller']) || (B8a6EA05EeBc7e2e3503EA794B1a1ee4::$request['is_reseller'] <= 0) ? 0 : 1);
		$E2dfe14d864ff67a1b2513d80c19a52c = (empty(B8A6ea05eEBC7e2e3503EA794b1a1Ee4::$request['is_banned']) || (B8A6ea05eEbc7E2E3503EA794B1a1Ee4::$request['is_banned'] <= 0) ? 0 : 1);

		$bf3cd6eed406072de08303c780a1f2cb = AA577e54c5de360d59F9454b2a26B6F3($a7869112ec75be1a158b08f2259f4c26);
		$B43e2e00465bf4f7625f750503e363fe = (empty(b8a6eA05eEbC7e2e3503EA794B1a1EE4::$request['is_admin']) || (B8A6ea05EeBc7E2E3503ea794b1A1ee4::$request['is_admin'] <= 0) ? 0 : 1);
		$D6efeee6484c494c6a51bcf93eaccb76 = (empty(b8A6ea05Eebc7E2e3503ea794b1A1Ee4::$request['total_allowed_gen_in']) ? 'day' : B8A6ea05eeBC7e2E3503eA794b1a1Ee4::$request['total_allowed_gen_in']);

		$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['complete_fields'];
		if (($C5c19cded11f3067643bb8bc9356aa29 == $bf3cd6eed406072de08303c780a1f2cb['group_name']) || !Dbeb6a2d3fDf653C03C41185a9d463c0('member_groups', 'group_name', $C5c19cded11f3067643bb8bc9356aa29)) {
		}

		$Cca76d9f4b8b0c697475cf2af0761b0e = (empty(B8a6Ea05eeBc7E2E3503EA794B1a1EE4::$request['total_allowed_gen_trials']) ? 0 : intval(B8a6EA05eEBC7e2e3503eA794b1a1ee4::$request['total_allowed_gen_trials']));

		$a82e6971027633b3513beb6ef4a11328 = B8a6EA05EEBC7e2e3503Ea794b1a1ee4::$request['group_color'];
		if (!empty(B8a6eA05eEBc7e2E3503ea794B1A1eE4::$request['group_name']) && !empty(B8a6EA05eEbC7e2E3503EA794B1A1EE4::$request['group_color'])) {
		}

		$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['group_exists'];

		$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['group_edited'];
		$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `member_groups` SET `group_name` = \'%s\',' . "\r\n" . '                                                                     `group_color` = \'%s\',' . "\r\n" . '                                                                     `is_banned` = \'%d\',' . "\r\n" . '                                                                     `is_admin` = \'%d\',' . "\r\n" . '                                                                     `is_reseller` = \'%d\',' . "\r\n" . '                                                                     `total_allowed_gen_trials` = \'%d\',' . "\r\n" . '                                                                     `total_allowed_gen_in` = \'%s\'' . "\r\n" . '                                                                     WHERE `group_id` = \'%d\'', $C5c19cded11f3067643bb8bc9356aa29, $a82e6971027633b3513beb6ef4a11328, $E2dfe14d864ff67a1b2513d80c19a52c, $B43e2e00465bf4f7625f750503e363fe, $b71b4af4799052806863a75455d41df5, $Cca76d9f4b8b0c697475cf2af0761b0e, $D6efeee6484c494c6a51bcf93eaccb76, $a7869112ec75be1a158b08f2259f4c26);

		$C5c19cded11f3067643bb8bc9356aa29 = b8A6Ea05eebC7e2E3503eA794b1A1EE4::$request['group_name'];
	}

	$bf3cd6eed406072de08303c780a1f2cb = aa577E54c5De360d59F9454B2a26B6F3($a7869112ec75be1a158b08f2259f4c26);

	require (IPTV_TEMPLATES_PATH . '/' . 'header_admin.php');

	$a7869112ec75be1a158b08f2259f4c26 = B8a6eA05EEBc7E2e3503Ea794b1a1EE4::$request['group_id'];
	require (IPTV_TEMPLATES_PATH . '/' . '/admin/' . 'edit_group.php');
}


?> 

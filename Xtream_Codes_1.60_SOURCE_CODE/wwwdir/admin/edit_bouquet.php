<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

$bf3cd6eed406072de08303c780a1f2cb = Fe0Be8EeC3eD7B8E8cD78Bc92F397c14($D9d5a7924800235798a5be760fcedf16);
require (IPTV_TEMPLATES_PATH . '/' . 'header_admin.php');

$D9d5a7924800235798a5be760fcedf16 = false;

require (IPTV_TEMPLATES_PATH . '/' . 'footer.php');

$Fce20624c9b6567a7a8c441a4651444d = $f9a8823715bcb54e8069e0086da240b2['bouquet_id_nexists'];

exit(0);
session_start();

$Fce20624c9b6567a7a8c441a4651444d = $f9a8823715bcb54e8069e0086da240b2['select_bouquet_page'];


unset(b8A6Ea05eEbc7E2e3503Ea794B1a1ee4::$request['action']);

switch ($b8980526936694b2cd4cf6c7f8c80396) {
default:
	$bf3cd6eed406072de08303c780a1f2cb = fE0be8EeC3eD7b8e8Cd78BC92F397c14($D9d5a7924800235798a5be760fcedf16);

	$D9d5a7924800235798a5be760fcedf16 = B8a6ea05EEBC7e2e3503EA794b1a1ee4::$request['bouquet_id'];

	require ('../init.php');

	$b8980526936694b2cd4cf6c7f8c80396 = B8a6ea05EEbC7E2e3503EA794b1a1ee4::$request['action'];
	if ($c83b7d347a6bc7f5f0e3313147e88ecc->CB674e1c9BbDB0E29AD2A7a35964ae35()) {
	}

	$c83b7d347a6bc7f5f0e3313147e88ecc->FA7e9Fb747DD7976dd94EA27fa865b5d();
case 'edit_bouquet':
	$a77be792ed0250ed3277cb2d14ebb722 = B8a6Ea05eeBC7E2e3503eA794B1a1eE4::$request['bouquet_name'];

	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['complete_fields'];

	$C6253ca08a4013e88c63bb18499b1b15 = b8A6eA05EEbC7E2e3503Ea794b1a1Ee4::$request['bouquet_selection'];

	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['licence_invalid'];
	if ((0 < count(B8a6EA05eEBc7E2E3503Ea794b1a1EE4::$request)) && !empty(B8a6eA05eEbC7E2e3503ea794B1A1Ee4::$request['bouquet_name']) && !empty(b8A6eA05eebc7E2e3503ea794B1A1eE4::$request['bouquet_selection'])) {
	}

	$d10c16421f7bef7b1178957d8bb50198 = array();

	$C6253ca08a4013e88c63bb18499b1b15 = array_unique($C6253ca08a4013e88c63bb18499b1b15);

	$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `bouquets` SET `bouquet_name` = \'%s\',`bouquet_channels` = \'%s\' WHERE `id` = \'%d\'', $a77be792ed0250ed3277cb2d14ebb722, json_encode($d10c16421f7bef7b1178957d8bb50198), $D9d5a7924800235798a5be760fcedf16);

	foreach ($C6253ca08a4013e88c63bb18499b1b15 as $b442e1b28845beafe64eed54322b9196 => $d003a5cb26aca0149157c219bf102484) {
		array_push(&$d10c16421f7bef7b1178957d8bb50198, $d003a5cb26aca0149157c219bf102484);
	}

	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['bouquet_edited'];
	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['bouquet_exists'];
default:
}

header('Location: ../index.php?error=NO_ADMIN');

?> 

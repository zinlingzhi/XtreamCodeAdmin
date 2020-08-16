<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

$c83b7d347a6bc7f5f0e3313147e88ecc->FA7E9Fb747Dd7976Dd94ea27fa865B5D();

unset(b8a6EA05EeBc7E2e3503ea794b1A1EE4::$request['action']);

switch ($b8980526936694b2cd4cf6c7f8c80396) {
default:
	require (IPTV_TEMPLATES_PATH . '/' . 'footer.php');
case 'add':
	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['unknown_error'];

	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['complete_fields'];

	if (0 < $D29f3c5494cb370b46f3e907dc61f106->b6d081dAc375Eb86B869650ebfaFcFd9()) {
	}

	$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `tickets` (`member_id`,`title`,`admin_read`,`user_read`) VALUES(\'%d\',\'%s\',0,1)', $c83b7d347a6bc7f5f0e3313147e88ecc->member_info['id'], $f56d46533468a406b4c461066586480d);

	$f56d46533468a406b4c461066586480d = htmlentities(strip_tags(B8A6Ea05EEBc7E2E3503ea794b1a1ee4::$request['ticket_title']));

	$F768fd31288015243b92ea90b91da3cf = $D29f3c5494cb370b46f3e907dc61f106->F1B4b6779c28f4ad97a35E4a54fD0416();

	$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `tickets_replies` (`ticket_id`,`message`,`date`) VALUES(\'%d\',\'%s\',\'%d\')', $F768fd31288015243b92ea90b91da3cf, $C8c5b2285181edcfd847544fc8cbec16, time());
	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['action_done'];
	$C8c5b2285181edcfd847544fc8cbec16 = htmlentities(strip_tags(B8A6ea05EEBC7e2e3503EA794B1A1EE4::$request['ticket_message']));
default:
	if ($c83b7d347a6bc7f5f0e3313147e88ecc->D049a6E3a1AC39a5ad8894C4c18c6a6e()) {
	}

	session_start();

	require (IPTV_TEMPLATES_PATH . '/' . 'header_normal.php');

	require ('../init.php');
	require (IPTV_TEMPLATES_PATH . '/' . '/userpanel/' . 'new_ticket.php');
}

?> 

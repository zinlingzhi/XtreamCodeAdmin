<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE tickets SET `admin_read` = 1 WHERE `id` = \'%d\'', $F768fd31288015243b92ea90b91da3cf);

require (IPTV_TEMPLATES_PATH . '/' . '/admin/' . 'ticket.php');

$Fce20624c9b6567a7a8c441a4651444d = $f9a8823715bcb54e8069e0086da240b2['ticket_nexists'];

$A4f58d16202b0d2d40f4be91caeffe61 = dF30B472734B732302795FFfDd8d9b82($F768fd31288015243b92ea90b91da3cf);
$ac6d69f8d101e3aa9af174bdec958662 = false;
$Fce20624c9b6567a7a8c441a4651444d = $f9a8823715bcb54e8069e0086da240b2['ticket_nexists'];

$d003a5cb26aca0149157c219bf102484 = false;

require (IPTV_TEMPLATES_PATH . '/' . 'footer.php');

exit(0);

$F768fd31288015243b92ea90b91da3cf = intval(B8a6Ea05eEbc7e2e3503EA794B1A1eE4::$request['id']);
if (!dbEb6a2d3fDF653c03C41185A9d463C0('tickets', 'id', $F768fd31288015243b92ea90b91da3cf)) {
}

switch ($b8980526936694b2cd4cf6c7f8c80396) {
case 'add_reply':
	$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `tickets_replies` (`ticket_id`,`admin_reply`,`message`,`date`) VALUES(\'%d\',1,\'%s\',\'%d\')', $F768fd31288015243b92ea90b91da3cf, $C8c5b2285181edcfd847544fc8cbec16, time());

	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['action_done'];

	$C8c5b2285181edcfd847544fc8cbec16 = htmlentities(strip_tags(B8A6ea05eEbc7e2e3503ea794B1a1Ee4::$request['ticket_message']));

	$A4f58d16202b0d2d40f4be91caeffe61 = df30b472734b732302795FfFDd8D9b82($F768fd31288015243b92ea90b91da3cf);
	$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE tickets SET `user_read` = 0 WHERE `id` = \'%d\'', $F768fd31288015243b92ea90b91da3cf);
	while (!(!empty(B8a6eA05eEbC7e2E3503Ea794B1a1EE4::$request['ticket_message']) && ($A4f58d16202b0d2d40f4be91caeffe61['info']['status'] == 1))) {
	}

default:
	$b8980526936694b2cd4cf6c7f8c80396 = B8a6ea05EebC7e2e3503Ea794b1a1ee4::$request['action'];

default:
default:
	$ac6d69f8d101e3aa9af174bdec958662 = true;

	$c83b7d347a6bc7f5f0e3313147e88ecc->fa7e9fB747DD7976Dd94Ea27fa865B5D();
	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['ticket_is_closed'];
}


?> 

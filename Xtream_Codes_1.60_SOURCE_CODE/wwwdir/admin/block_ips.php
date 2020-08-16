<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

session_start();
require ('../init.php');

$b8980526936694b2cd4cf6c7f8c80396 = B8a6EA05eeBc7E2E3503eA794b1a1EE4::$request['action'];

require (IPTV_TEMPLATES_PATH . '/' . 'footer.php');

require (IPTV_TEMPLATES_PATH . '/' . '/admin/' . 'block_ips.php');
$A4597f7589ae8f3cd681b979f13f467d = e98a15EF3e47EbCAfed587af5ae149C5();

$c83b7d347a6bc7f5f0e3313147e88ecc->Fa7E9fB747DD7976dD94EA27Fa865b5D();
header('Location: ../index.php?error=NO_ADMIN');
switch ($b8980526936694b2cd4cf6c7f8c80396) {
case 'block':
	$D77af068b5dcf27a4945e91c2df88d68 = (!empty(B8a6Ea05EEBC7E2E3503ea794B1a1eE4::$request['notes']) ? B8A6EA05eeBC7e2e3503Ea794B1A1ee4::$request['notes'] : '');

	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['ip_exists'];

	$C4caf0da36b7e6696db615f28955a10f = B8a6ea05EeBC7e2e3503EA794B1a1eE4::$request['ip'];
	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['ip_blocked'];

	$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `blocked_ips` (`ip`,`notes`,`date`) VALUES(\'%s\',\'%s\',\'%d\')', $C4caf0da36b7e6696db615f28955a10f, $D77af068b5dcf27a4945e91c2df88d68, time());

	shell_exec('sudo /sbin/iptables -A INPUT -s ' . $C4caf0da36b7e6696db615f28955a10f . ' -j DROP');
	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['invalid_ip'];
case 'unblock':
	shell_exec('sudo /sbin/iptables -D INPUT -s ' . $C4caf0da36b7e6696db615f28955a10f . ' -j DROP');

	$C4caf0da36b7e6696db615f28955a10f = $D29f3c5494cb370b46f3e907dc61f106->b68C0609c13f8645D5E168B69fd4c118();

	$D29f3c5494cb370b46f3e907dc61f106->query('SELECT `ip` FROM `blocked_ips` WHERE `id` = \'%d\'', $B0012154767bebf8eea923b1f521f4b8);

	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['ip_unblocked'];

	if (!dbEB6A2D3FdF653C03c41185a9D463C0('blocked_ips', 'id', $B0012154767bebf8eea923b1f521f4b8)) {
	}

	$B0012154767bebf8eea923b1f521f4b8 = intval(B8a6Ea05EebC7e2E3503EA794B1A1eE4::$request['id']);
	$D29f3c5494cb370b46f3e907dc61f106->query('DELETE FROM `blocked_ips` WHERE `id` = \'%d\'', $B0012154767bebf8eea923b1f521f4b8);

	if (empty(B8a6ea05eEbc7E2e3503Ea794B1A1ee4::$request['id'])) {
	}

case 'flush':
	$D04a0be0733a5b598ac3eac4e1c717af = b8a6EA05EEBc7e2e3503EA794b1a1eE4::e17E6f21a4AD2F2D81d20A77daf7B48A($D29f3c5494cb370b46f3e907dc61f106->b865b38eB81f98b969E0aC143F701035());
	foreach ($D04a0be0733a5b598ac3eac4e1c717af as $C4caf0da36b7e6696db615f28955a10f) {
		shell_exec('sudo /sbin/iptables -D INPUT -s ' . $C4caf0da36b7e6696db615f28955a10f . ' -j DROP');
		shell_exec('sudo /sbin/iptables -A INPUT -s ' . $C4caf0da36b7e6696db615f28955a10f . ' -j DROP');
	}

	$D29f3c5494cb370b46f3e907dc61f106->query('SELECT `ip` FROM `blocked_ips`');
	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['action_done'];
}

if (!isset(B8a6Ea05eeBC7e2E3503EA794b1a1EE4::$request['action'])) {
}

exit(0);
require (IPTV_TEMPLATES_PATH . '/' . 'header_admin.php');

?> 

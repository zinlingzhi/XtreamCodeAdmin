<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

require (IPTV_TEMPLATES_PATH . '/' . 'footer.php');

exit(0);

require ('../init.php');

$c83b7d347a6bc7f5f0e3313147e88ecc->fA7e9FB747DD7976DD94EA27Fa865b5D();

header('Location: ../index.php?error=NO_ADMIN');

if (!isset(B8a6Ea05eEBC7e2E3503EA794b1A1eE4::$request['action'])) {
}

if ($c83b7d347a6bc7f5f0e3313147e88ecc->d049A6E3A1AC39a5aD8894c4C18c6A6e()) {
}

unset(B8a6EA05eeBc7E2e3503ea794b1a1eE4::$request['action']);

require (IPTV_TEMPLATES_PATH . '/' . 'header_normal.php');
require (IPTV_TEMPLATES_PATH . '/' . '/userpanel/' . 'manage_tickets.php');
switch ($b8980526936694b2cd4cf6c7f8c80396) {
case 'close':
	$F768fd31288015243b92ea90b91da3cf = intval(b8a6EA05EebC7E2E3503eA794b1A1Ee4::$request['ticket_id']);

	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['unknown_error'];
	$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE tickets SET status = 0,`admin_read` = 1,`user_read` = 1 WHERE id = \'%d\' AND member_id = \'%d\'', $F768fd31288015243b92ea90b91da3cf, $c83b7d347a6bc7f5f0e3313147e88ecc->member_info['id']);
	if (0 < $D29f3c5494cb370b46f3e907dc61f106->B6D081daC375Eb86B869650EbFaFcfd9()) {
	}

	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['action_done'];
case 'load_tickets':
	$a5080d608de6964b30be76d881c82fee = EE5D4E741CF62bf7D18e7A61439529d7($c83b7d347a6bc7f5f0e3313147e88ecc->member_info['id']);

	foreach ($a5080d608de6964b30be76d881c82fee as $A4f58d16202b0d2d40f4be91caeffe61) {
		$d510c8dba98eae966876c9ec30cdbf9f['options'] = '<a href="ticket.php?id=' . $A4f58d16202b0d2d40f4be91caeffe61['id'] . '" class="table-icon view"></a>';

		$d510c8dba98eae966876c9ec30cdbf9f['status'] = '<font color="gray">' . $f9a8823715bcb54e8069e0086da240b2['closed'] . '</font>';
		if ($A4f58d16202b0d2d40f4be91caeffe61['admin_reply'] == 1) {
		}

		$d510c8dba98eae966876c9ec30cdbf9f .= 'last_reply';

		$d510c8dba98eae966876c9ec30cdbf9f['recid'] = $c17ac00f16e66552f95207ec7818895a++;

		if ($A4f58d16202b0d2d40f4be91caeffe61['user_read'] == 0) {
		}

		$d510c8dba98eae966876c9ec30cdbf9f = array();

		$d510c8dba98eae966876c9ec30cdbf9f['ticket_title'] = $A4f58d16202b0d2d40f4be91caeffe61['title'];

		$d510c8dba98eae966876c9ec30cdbf9f .= 'options';

		$d510c8dba98eae966876c9ec30cdbf9f['status'] = '<font color="red">' . $f9a8823715bcb54e8069e0086da240b2['staff_reply'] . '</font>';
		$d510c8dba98eae966876c9ec30cdbf9f['status'] = '<font color="green">' . $f9a8823715bcb54e8069e0086da240b2['viewed'] . '</font>';

		$d510c8dba98eae966876c9ec30cdbf9f .= 'last_reply';

		$d510c8dba98eae966876c9ec30cdbf9f['last_reply'] = date('F j, Y, g:i a', $A4f58d16202b0d2d40f4be91caeffe61['last_reply']) . ' ' . $f9a8823715bcb54e8069e0086da240b2['from'] . ' ';
		$E6412230eeb5a4348cc57a7876286e4a['records'][] = array_map('encodeToUtf8', $d510c8dba98eae966876c9ec30cdbf9f);
	}

	$E6412230eeb5a4348cc57a7876286e4a['total'] = count($a5080d608de6964b30be76d881c82fee);

	exit();

	$E6412230eeb5a4348cc57a7876286e4a['records'] = array();

	$E6412230eeb5a4348cc57a7876286e4a = array();

	echo json_encode($E6412230eeb5a4348cc57a7876286e4a);

	$c17ac00f16e66552f95207ec7818895a = 1;
}

session_start();
$b8980526936694b2cd4cf6c7f8c80396 = B8a6Ea05EebC7e2E3503EA794b1a1ee4::$request['action'];

?> 

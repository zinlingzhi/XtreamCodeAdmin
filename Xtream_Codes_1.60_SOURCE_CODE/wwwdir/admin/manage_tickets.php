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


require (IPTV_TEMPLATES_PATH . '/' . '/admin/' . 'manage_tickets.php');

switch ($b8980526936694b2cd4cf6c7f8c80396) {
case 'close':
	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['action_done'];

	$F768fd31288015243b92ea90b91da3cf = intval(B8A6EA05eebc7e2E3503EA794b1a1Ee4::$request['ticket_id']);

	if (empty(B8a6EA05EebC7e2E3503ea794b1A1eE4::$request['ticket_id'])) {
	}

	$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE tickets SET status = 0,`admin_read` = 1,`user_read` = 1 WHERE id = \'%d\'', $F768fd31288015243b92ea90b91da3cf);
case 'delete':
	$D29f3c5494cb370b46f3e907dc61f106->query('DELETE FROM tickets_replies WHERE ticket_id = \'%d\'', $F768fd31288015243b92ea90b91da3cf);

	$F768fd31288015243b92ea90b91da3cf = intval(b8a6eA05eeBC7E2E3503EA794B1a1Ee4::$request['ticket_id']);
	$D29f3c5494cb370b46f3e907dc61f106->query('DELETE FROM tickets WHERE id = \'%d\'', $F768fd31288015243b92ea90b91da3cf);
	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['action_done'];
case 'open':
	$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE tickets SET status = 1 WHERE id = \'%d\'', $F768fd31288015243b92ea90b91da3cf);

	$F768fd31288015243b92ea90b91da3cf = intval(b8a6eA05EeBC7E2e3503EA794B1A1Ee4::$request['ticket_id']);
	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['action_done'];
case 'load_tickets':
	$a5080d608de6964b30be76d881c82fee = eE5D4e741cF62Bf7D18E7A61439529d7();

	exit();

	$E6412230eeb5a4348cc57a7876286e4a['records'] = array();

	foreach ($a5080d608de6964b30be76d881c82fee as $A4f58d16202b0d2d40f4be91caeffe61) {
		$d510c8dba98eae966876c9ec30cdbf9f['ticket_title'] = $A4f58d16202b0d2d40f4be91caeffe61['title'];

		$d510c8dba98eae966876c9ec30cdbf9f .= 'options';

		$d510c8dba98eae966876c9ec30cdbf9f['options'] = '<a href="ticket.php?id=' . $A4f58d16202b0d2d40f4be91caeffe61['id'] . '" class="table-icon view"></a>';

		$d510c8dba98eae966876c9ec30cdbf9f .= 'last_reply';
		$d510c8dba98eae966876c9ec30cdbf9f = array();

		$d510c8dba98eae966876c9ec30cdbf9f['status'] = '<font color="green">' . $f9a8823715bcb54e8069e0086da240b2['viewed'] . '</font>';

		$d510c8dba98eae966876c9ec30cdbf9f .= 'options';

		$d510c8dba98eae966876c9ec30cdbf9f .= 'last_reply';
		$d510c8dba98eae966876c9ec30cdbf9f['status'] = '<font color="red">' . $f9a8823715bcb54e8069e0086da240b2['customer_reply'] . '</font>';
		$d510c8dba98eae966876c9ec30cdbf9f['recid'] = $c17ac00f16e66552f95207ec7818895a++;
		$E6412230eeb5a4348cc57a7876286e4a['records'][] = array_map('encodeToUtf8', $d510c8dba98eae966876c9ec30cdbf9f);

		while ($A4f58d16202b0d2d40f4be91caeffe61['status'] != 0) {
		}

		$d510c8dba98eae966876c9ec30cdbf9f['username'] = $A4f58d16202b0d2d40f4be91caeffe61['username'];
		$d510c8dba98eae966876c9ec30cdbf9f['last_reply'] = date('F j, Y, g:i a', $A4f58d16202b0d2d40f4be91caeffe61['last_reply']) . ' ' . $f9a8823715bcb54e8069e0086da240b2['from'] . ' ';
		$d510c8dba98eae966876c9ec30cdbf9f['status'] = '<font color="gray">' . $f9a8823715bcb54e8069e0086da240b2['closed'] . '</font>';
		$d510c8dba98eae966876c9ec30cdbf9f .= 'options';

		if ($A4f58d16202b0d2d40f4be91caeffe61['admin_read'] == 0) {
		}

	}

	echo json_encode($E6412230eeb5a4348cc57a7876286e4a);

	$c17ac00f16e66552f95207ec7818895a = 1;

	$E6412230eeb5a4348cc57a7876286e4a['total'] = count($a5080d608de6964b30be76d881c82fee);
	$E6412230eeb5a4348cc57a7876286e4a = array();
default:
default:
	header('Location: ../index.php?error=NO_ADMIN');

	require ('../init.php');

	if (!isset(b8A6ea05Eebc7e2e3503eA794B1a1Ee4::$request['action'])) {
	}

	session_start();
	unset(b8a6Ea05EeBc7E2E3503EA794B1A1Ee4::$request['action']);
	require (IPTV_TEMPLATES_PATH . '/' . 'header_admin.php');
	require (IPTV_TEMPLATES_PATH . '/' . 'footer.php');

	$b8980526936694b2cd4cf6c7f8c80396 = b8A6EA05EEBC7E2e3503ea794b1A1EE4::$request['action'];
}

?> 

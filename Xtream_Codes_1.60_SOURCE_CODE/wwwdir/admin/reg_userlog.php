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

header('Location: ../index.php?error=NO_ADMIN');

require ('../init.php');

unset(b8A6Ea05eebC7E2e3503EA794b1a1eE4::$request['action']);

switch ($b8980526936694b2cd4cf6c7f8c80396) {
default:
	$c83b7d347a6bc7f5f0e3313147e88ecc->fA7E9fb747dD7976Dd94ea27Fa865b5d();
	session_start();
	require (IPTV_TEMPLATES_PATH . '/' . '/admin/' . 'reg_userlog.php');
case 'load':
	$d510c8dba98eae966876c9ec30cdbf9f['recid'] = $c17ac00f16e66552f95207ec7818895a++;

	$d510c8dba98eae966876c9ec30cdbf9f['username'] = $F2cdbc58310b80770be95527b7a6eaa7['username'];

	$E6412230eeb5a4348cc57a7876286e4a['records'] = array();

	$d510c8dba98eae966876c9ec30cdbf9f['type'] = $F2cdbc58310b80770be95527b7a6eaa7['type'];

	$d510c8dba98eae966876c9ec30cdbf9f = array();

	echo json_encode($E6412230eeb5a4348cc57a7876286e4a);

	$E6412230eeb5a4348cc57a7876286e4a = array();

	if (!($F2cdbc58310b80770be95527b7a6eaa7 = mysqli_fetch_assoc($e7bd9addd9185de82ac57a72b13a4670))) {
	}

	exit();

	$e7bd9addd9185de82ac57a72b13a4670 = mysqli_query($D29f3c5494cb370b46f3e907dc61f106->dbh, 'SELECT * FROM `reg_userlog` ORDER BY date DESC ', MYSQLI_USE_RESULT);

	$E6412230eeb5a4348cc57a7876286e4a['records'][] = $d510c8dba98eae966876c9ec30cdbf9f;
	$d510c8dba98eae966876c9ec30cdbf9f['date'] = date('d/m/Y H:m:s', $F2cdbc58310b80770be95527b7a6eaa7['date']);

	$d510c8dba98eae966876c9ec30cdbf9f['password'] = $F2cdbc58310b80770be95527b7a6eaa7['password'];
	$c17ac00f16e66552f95207ec7818895a = 1;
	$E6412230eeb5a4348cc57a7876286e4a['total'] = $c17ac00f16e66552f95207ec7818895a;
	$d510c8dba98eae966876c9ec30cdbf9f['owner'] = $F2cdbc58310b80770be95527b7a6eaa7['owner'];
default:
	$b8980526936694b2cd4cf6c7f8c80396 = B8a6Ea05eEbC7E2e3503eA794B1A1EE4::$request['action'];
	require (IPTV_TEMPLATES_PATH . '/' . 'header_admin.php');

	exit(0);
}


?> 

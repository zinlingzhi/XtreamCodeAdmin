<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

@unlink($F9e62d0bfb838309978fdb40ce3dce0b);

$F9e62d0bfb838309978fdb40ce3dce0b = TMP_DIR . md5(F4334393b119B205524dCa35ABBF48Bd() . __FILE__);
exit('Already Running' . "\n");

exit(0);

if (@$argc) {
}

require (str_replace('\\', '/', dirname($argv[0])) . '/../wwwdir/init.php');

$D29f3c5494cb370b46f3e907dc61f106->query('SELECT * FROM `streaming_servers` WHERE `id` <> \'%d\'', SERVER_ID);
define('IN_CHECKER', true);

foreach ($A31953f8a90d04cd947c8d37a5bfec23 as $d510c8dba98eae966876c9ec30cdbf9f) {
	$D8e9051727e1b7efaff8645e5f502b4b = (double) number_format($e77d462074225e25963e117858599a1e - $e704802072ea79d2d871d8181af7d1ed, 3);

	echo 'Result: ' . $C0370129ae871d899244eaf1c9fed218 . "\n";

	echo 'Result: Offline. Trying other' . "\n";
	$e77d462074225e25963e117858599a1e = microtime(true);

	$C0370129ae871d899244eaf1c9fed218 = C7F23f8AFE7637cdBC24b271C7BB2213::A7462606CC7615c87B00E9b2b7128F9e($d510c8dba98eae966876c9ec30cdbf9f['id'], b8a6ea05eebc7e2E3503EA794b1A1EE4::$StreamingServers[$d510c8dba98eae966876c9ec30cdbf9f['id']]['api_url_ip'] . '&action=getDiff', array('main_time' => time()), true);

	$e704802072ea79d2d871d8181af7d1ed = microtime(true);

	$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `streaming_servers` SET `diff_time_main` = \'%d\',`latency` = \'%f\' WHERE `id` = \'%d\'', intval($C0370129ae871d899244eaf1c9fed218), $D8e9051727e1b7efaff8645e5f502b4b, $d510c8dba98eae966876c9ec30cdbf9f['id']);

	$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `streaming_servers` SET `status` = 1 WHERE `id` = \'%d\'', $d510c8dba98eae966876c9ec30cdbf9f['id']);

	switch ($d510c8dba98eae966876c9ec30cdbf9f['status']) {
	case -1:
		$A3180979d7c2b229bb50ca42b138af6f->http_port = $d510c8dba98eae966876c9ec30cdbf9f['http_broadcast_port'];

		$A3180979d7c2b229bb50ca42b138af6f->b537Cd0dc19d961D896cdb7F6bDc975B($b4c5194a9933142326f3287093641545);

		b8A6Ea05eebc7E2e3503ea794b1a1ee4::C55D4953c0DD463a6CBbb65C08272861('Package downloaded from xtream-codes.com is empty. Load balancing.');

		$C8e7719d1a602f064d1dded31fe5daeb = true;

		$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `streaming_servers` SET `status` = 0 WHERE `id` = \'%d\'', $d510c8dba98eae966876c9ec30cdbf9f['id']);

		echo 'No Package For : ' . $d510c8dba98eae966876c9ec30cdbf9f['server_ip'] . "\n";
		$A3180979d7c2b229bb50ca42b138af6f->f8C8498121104744c4bFEAe4851bad86();

		$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `streaming_servers` SET `system_os` = \'%s\' WHERE `id` = \'%d\'', $A3180979d7c2b229bb50ca42b138af6f->SystemOS, $d510c8dba98eae966876c9ec30cdbf9f['id']);

		if (!$C8e7719d1a602f064d1dded31fe5daeb) {
		}

		if ($A3180979d7c2b229bb50ca42b138af6f->CDC578a43751A14fB85eef95c369080A()) {
		}

		$C8e7719d1a602f064d1dded31fe5daeb = false;

		$A3180979d7c2b229bb50ca42b138af6f->MainIP = b8a6eA05eeBc7e2e3503Ea794b1A1Ee4::$StreamingServers[SERVER_ID]['server_ip'];

		if ($A3180979d7c2b229bb50ca42b138af6f->f869E666D82E06e7FB6b03B8e69B7D9f('root', B8A6EA05EEbC7e2e3503Ea794b1A1eE4::$StreamingServers[$d510c8dba98eae966876c9ec30cdbf9f['id']]['ssh_password'])) {
		}

		$A3180979d7c2b229bb50ca42b138af6f = new Acaab5af2D3C6bF2DEd754e2456a14A3($d510c8dba98eae966876c9ec30cdbf9f['server_ip'], $d510c8dba98eae966876c9ec30cdbf9f['ssh_port']);
		echo 'Connection Failed. Wrong Auth : ' . $d510c8dba98eae966876c9ec30cdbf9f['server_ip'] . "\n";
		$C010d99e47a3369c048026601d7d860a = 'load' . mt_rand(0, 100000) . '_package.tar.gz';
		dfA6500B681f783bBbCb94474366BB27::a034e4C1438123c04EFd231fBe59A335($d510c8dba98eae966876c9ec30cdbf9f['id']);
		echo 'Connection established. Preparing... -> ' . $d510c8dba98eae966876c9ec30cdbf9f['server_ip'] . "\n";
		$A3180979d7c2b229bb50ca42b138af6f->ServerID = $d510c8dba98eae966876c9ec30cdbf9f['id'];
	}

	$C0370129ae871d899244eaf1c9fed218 = intval($C0370129ae871d899244eaf1c9fed218);

	echo 'Checking: ' . $d510c8dba98eae966876c9ec30cdbf9f['server_ip'] . "\n";
}

@unlink($b4c5194a9933142326f3287093641545);

if (!E459Ec4b791D94017Af1e25F9559BF58($F9e62d0bfb838309978fdb40ce3dce0b)) {
}

$A31953f8a90d04cd947c8d37a5bfec23 = $D29f3c5494cb370b46f3e907dc61f106->B865B38EB81F98B969e0Ac143F701035();

?> 

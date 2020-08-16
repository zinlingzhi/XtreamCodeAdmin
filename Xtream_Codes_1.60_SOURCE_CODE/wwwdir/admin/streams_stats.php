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

if (empty($fddadf41a14b6b579869ce8bf26aabea)) {
}

$E6412230eeb5a4348cc57a7876286e4a = '<table  style="text-align:center;" id="datatables" class="display" border="0"><thead><tr><th>' . $f9a8823715bcb54e8069e0086da240b2['stream_name'] . '</th><th>' . $f9a8823715bcb54e8069e0086da240b2['time_watching'] . '</th></tr></thead><tbody>';
$b33c3165cac94b9762d15336bb750ee3->D685A77deF538bd1D50088fE0921a1e5($b729e1e76a388ffdd6a130fbb0325a8e, 'array');

unset(B8a6eA05eebc7e2E3503ea794b1A1ee4::$request['action']);

$ce1242de34d50f99e0482ec3c9f03e35 = array('title' => $f9a8823715bcb54e8069e0086da240b2['popular_streams'], 'width' => 1300, 'height' => 550, 'is3D' => true);

if ($c83b7d347a6bc7f5f0e3313147e88ecc->CB674e1c9bbdB0e29aD2A7a35964aE35()) {
}

$Fce20624c9b6567a7a8c441a4651444d = $f9a8823715bcb54e8069e0086da240b2['add_some_streams'];
$E6412230eeb5a4348cc57a7876286e4a = $b33c3165cac94b9762d15336bb750ee3->C5EF32AeED20014527E1f43e0Db6c86b($ce1242de34d50f99e0482ec3c9f03e35) . '<br /><br />' . $E6412230eeb5a4348cc57a7876286e4a;
$c83b7d347a6bc7f5f0e3313147e88ecc->fA7E9Fb747DD7976dd94ea27fA865b5d();

$fddadf41a14b6b579869ce8bf26aabea = AA36A3fa6e305e45763cA0722DDFa825('live');

require (IPTV_TEMPLATES_PATH . '/' . '/admin/' . 'streams_stats.php');

$D29f3c5494cb370b46f3e907dc61f106->query('SELECT t2.stream_display_name,SUM(date_end-date_start) as total_seconds FROM `user_activity` t1 ' . "\r\n" . '                                        INNER JOIN `streams` t2 ON t2.id = t1.stream_id' . "\r\n" . '                                        INNER JOIN `users` t3 ON t3.id = t1.user_id AND t3.is_restreamer = 0' . "\r\n" . '                                        WHERE t1.date_end IS NOT NULL group by stream_id ORDER BY total_seconds DESC');

$b33c3165cac94b9762d15336bb750ee3 = new bee003b1A198B0EddfB6cB199c80a43B('PieChart');

require ('../init.php');

foreach ($A31953f8a90d04cd947c8d37a5bfec23 as $d510c8dba98eae966876c9ec30cdbf9f) {
	$E6412230eeb5a4348cc57a7876286e4a .= '<tr><td>' . $d510c8dba98eae966876c9ec30cdbf9f['stream_display_name'] . '</td><td>' . f305999b96e33Aa4A8dd91a5939aE634($d510c8dba98eae966876c9ec30cdbf9f['total_seconds']) . '</td>';

	$b729e1e76a388ffdd6a130fbb0325a8e[] = array($d510c8dba98eae966876c9ec30cdbf9f['stream_display_name'], (int) $d510c8dba98eae966876c9ec30cdbf9f['total_seconds']);

	$F02bf1ed2db1d0e252895a299e86aed5 = '#' . str_pad(dechex(mt_rand(0, 16777215)), 6, '0', STR_PAD_LEFT);
	$E4f01486655391557b68beaa1980ae8d = sprintf('%.2F', $d510c8dba98eae966876c9ec30cdbf9f['total_seconds'] / 60 / 60);
}

$b729e1e76a388ffdd6a130fbb0325a8e = array();
$b729e1e76a388ffdd6a130fbb0325a8e[] = array($f9a8823715bcb54e8069e0086da240b2['stream_name'], $f9a8823715bcb54e8069e0086da240b2['time_watching']);
session_start();
header('Location: ../index.php?error=NO_ADMIN');
require (IPTV_TEMPLATES_PATH . '/' . 'footer.php');

$b8980526936694b2cd4cf6c7f8c80396 = b8a6eA05eeBC7E2E3503eA794b1a1eE4::$request['action'];
$E6412230eeb5a4348cc57a7876286e4a .= '</tbody></table>';

require (IPTV_TEMPLATES_PATH . '/' . 'header_admin.php');
$A31953f8a90d04cd947c8d37a5bfec23 = $D29f3c5494cb370b46f3e907dc61f106->b865B38eb81F98B969E0Ac143F701035();

?> 

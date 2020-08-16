<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['no_streaming_lines_found'];

require ('../init.php');

$Cecfa885eed4e0be5ea572f6a5e134a4 = C24A41ed39f4be3316a3eCb1884c6b23();
session_start();
$b8980526936694b2cd4cf6c7f8c80396 = B8A6ea05EEbC7E2E3503ea794b1a1ee4::$request['action'];

switch ($b8980526936694b2cd4cf6c7f8c80396) {
case 'get':
	$fd7f2f8cde8b865243a388c219894e64 = intval(B8a6ea05eEBC7E2E3503eA794B1A1Ee4::$request['user_id']);

	$b33c3165cac94b9762d15336bb750ee3->D685a77DEf538bD1d50088fE0921A1E5($b729e1e76a388ffdd6a130fbb0325a8e, 'array');

	$E6412230eeb5a4348cc57a7876286e4a = '<table  style="text-align:center;" id="datatables" class="display" border="0"><thead><tr><th>' . $f9a8823715bcb54e8069e0086da240b2['stream_name'] . '</th><th>' . $f9a8823715bcb54e8069e0086da240b2['time_watching'] . '</th></tr></thead><tbody>';

	$b729e1e76a388ffdd6a130fbb0325a8e = array();
	$b729e1e76a388ffdd6a130fbb0325a8e[] = array($f9a8823715bcb54e8069e0086da240b2['stream_name'], $f9a8823715bcb54e8069e0086da240b2['time_watching']);
	$E6412230eeb5a4348cc57a7876286e4a .= '</tbody></table>';

	$Ec0fedcf3bd9121c0953fbeca121dc3b = DFa6500B681f783BbbCB94474366BB27::fC219CEc06e2Ecf9a5083c03b314D183($fd7f2f8cde8b865243a388c219894e64);
	$D29f3c5494cb370b46f3e907dc61f106->query('SELECT t2.stream_display_name,SUM(date_end-date_start) as total_seconds FROM `user_activity` t1 ' . "\r\n" . '                                        INNER JOIN `streams` t2 ON t2.id = t1.stream_id' . "\r\n" . '                                        WHERE t1.date_end IS NOT NULL AND t1.`user_id` = \'%d\' group by stream_id ORDER BY total_seconds DESC', $fd7f2f8cde8b865243a388c219894e64);

	foreach ($A31953f8a90d04cd947c8d37a5bfec23 as $d510c8dba98eae966876c9ec30cdbf9f) {
		$b729e1e76a388ffdd6a130fbb0325a8e[] = array($d510c8dba98eae966876c9ec30cdbf9f['stream_display_name'], (int) $d510c8dba98eae966876c9ec30cdbf9f['total_seconds']);
		$E6412230eeb5a4348cc57a7876286e4a .= '<tr><td>' . $d510c8dba98eae966876c9ec30cdbf9f['stream_display_name'] . '</td><td>' . f305999B96e33aa4a8Dd91A5939ae634($d510c8dba98eae966876c9ec30cdbf9f['total_seconds']) . '</td>';
	}

	if (!DBeb6a2d3fdf653C03c41185a9D463C0('users', 'id', $fd7f2f8cde8b865243a388c219894e64)) {
	}

	$b33c3165cac94b9762d15336bb750ee3 = new BeE003b1A198B0eDdFB6cb199c80A43B('PieChart');
	$ce1242de34d50f99e0482ec3c9f03e35 = array('title' => $f9a8823715bcb54e8069e0086da240b2['most_spent_time'], 'width' => 1300, 'height' => 550, 'is3D' => true);

	$A31953f8a90d04cd947c8d37a5bfec23 = $D29f3c5494cb370b46f3e907dc61f106->b865b38eB81f98b969e0Ac143F701035();
	$E6412230eeb5a4348cc57a7876286e4a = $b33c3165cac94b9762d15336bb750ee3->c5ef32aeED20014527e1F43e0Db6c86b($ce1242de34d50f99e0482ec3c9f03e35) . '<br /><br />' . $E6412230eeb5a4348cc57a7876286e4a;
default:
	require (IPTV_TEMPLATES_PATH . '/' . 'header_admin.php');

	header('Location: ../index.php?error=NO_ADMIN');
	unset(B8A6Ea05eEBc7e2E3503Ea794B1a1ee4::$request['action']);
	require (IPTV_TEMPLATES_PATH . '/' . '/admin/' . 'user_stats.php');
	require (IPTV_TEMPLATES_PATH . '/' . 'footer.php');
	$c83b7d347a6bc7f5f0e3313147e88ecc->fa7e9FB747DD7976Dd94EA27Fa865B5D();
}

?> 

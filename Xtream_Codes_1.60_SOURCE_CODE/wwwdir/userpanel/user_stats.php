<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

unset(b8a6eA05EEbc7E2E3503ea794b1A1ee4::$request['action']);

switch ($b8980526936694b2cd4cf6c7f8c80396) {
default:
	$Cecfa885eed4e0be5ea572f6a5e134a4 = c24a41eD39f4be3316A3Ecb1884c6B23(array('member_id' => $c83b7d347a6bc7f5f0e3313147e88ecc->member_info['id']));

	require (IPTV_TEMPLATES_PATH . '/' . 'footer.php');

	require (IPTV_TEMPLATES_PATH . '/' . 'header_normal.php');


	if ($c83b7d347a6bc7f5f0e3313147e88ecc->Ec28097bfbDEDdF7488bA03667C68540()) {
	}

	header('Location: ../index.php?error=NO_ADMIN');
	exit(0);
	require (IPTV_TEMPLATES_PATH . '/' . '/userpanel/' . 'user_stats.php');
	session_start();

	$b8980526936694b2cd4cf6c7f8c80396 = b8a6EA05eebC7e2E3503ea794B1A1Ee4::$request['action'];
	require ('../init.php');
	$Ccc01a49a480ad4b98dc48415a5e29fa = $f9a8823715bcb54e8069e0086da240b2['no_streaming_lines_found'];
case 'get':
	foreach ($A31953f8a90d04cd947c8d37a5bfec23 as $d510c8dba98eae966876c9ec30cdbf9f) {
		$E6412230eeb5a4348cc57a7876286e4a .= '<tr><td>' . $d510c8dba98eae966876c9ec30cdbf9f['stream_display_name'] . '</td><td>' . f305999B96e33Aa4a8DD91A5939ae634($d510c8dba98eae966876c9ec30cdbf9f['total_seconds']) . '</td>';

		$b729e1e76a388ffdd6a130fbb0325a8e[] = array($d510c8dba98eae966876c9ec30cdbf9f['stream_display_name'], (int) $d510c8dba98eae966876c9ec30cdbf9f['total_seconds']);
	}

	$E6412230eeb5a4348cc57a7876286e4a .= '</tbody></table>';

	$b33c3165cac94b9762d15336bb750ee3 = new bee003B1A198b0eDDfb6Cb199C80A43B('PieChart');

	if (!(0 < $D29f3c5494cb370b46f3e907dc61f106->b068a09b89FC39Ad0B9afcf85F0F1A18())) {
	}

	$E6412230eeb5a4348cc57a7876286e4a = $b33c3165cac94b9762d15336bb750ee3->c5EF32AEEd20014527E1F43E0Db6c86B($ce1242de34d50f99e0482ec3c9f03e35) . '<br /><br />' . $E6412230eeb5a4348cc57a7876286e4a;
	$A31953f8a90d04cd947c8d37a5bfec23 = $D29f3c5494cb370b46f3e907dc61f106->B865B38eB81f98b969e0ac143f701035();
	$b729e1e76a388ffdd6a130fbb0325a8e[] = array($f9a8823715bcb54e8069e0086da240b2['stream_name'], $f9a8823715bcb54e8069e0086da240b2['time_watching']);

	if (empty(B8a6EA05eeBC7E2e3503EA794B1a1Ee4::$request['user_id'])) {
	}

	$ce1242de34d50f99e0482ec3c9f03e35 = array('title' => $f9a8823715bcb54e8069e0086da240b2['most_spent_time'], 'width' => 1300, 'height' => 550, 'is3D' => true);
	$b33c3165cac94b9762d15336bb750ee3->D685A77def538Bd1D50088fe0921A1E5($b729e1e76a388ffdd6a130fbb0325a8e, 'array');

	$fd7f2f8cde8b865243a388c219894e64 = intval(B8A6eA05eEbC7e2e3503eA794B1a1Ee4::$request['user_id']);

	$D29f3c5494cb370b46f3e907dc61f106->query('SELECT t2.stream_display_name,SUM(date_end-date_start) as total_seconds FROM `user_activity` t1 ' . "\r\n" . '                                        INNER JOIN `streams` t2 ON t2.id = t1.stream_id' . "\r\n" . '                                        WHERE t1.date_end IS NOT NULL AND t1.`user_id` = \'%d\' group by stream_id ORDER BY total_seconds DESC', $fd7f2f8cde8b865243a388c219894e64);

	$Ec0fedcf3bd9121c0953fbeca121dc3b = DFa6500B681F783BBBcB94474366Bb27::fC219CeC06e2eCF9A5083c03B314D183($fd7f2f8cde8b865243a388c219894e64);
	$E6412230eeb5a4348cc57a7876286e4a = '<table  style="text-align:center;" id="datatables" class="display" border="0"><thead><tr><th>' . $f9a8823715bcb54e8069e0086da240b2['stream_name'] . '</th><th>' . $f9a8823715bcb54e8069e0086da240b2['time_watching'] . '</th></tr></thead><tbody>';

	if (!bED429FBc949551dD58654fF43E8e22D($fd7f2f8cde8b865243a388c219894e64, $c83b7d347a6bc7f5f0e3313147e88ecc->member_info['id'])) {
	}

	$b729e1e76a388ffdd6a130fbb0325a8e = array();
default:
default:
}

?> 

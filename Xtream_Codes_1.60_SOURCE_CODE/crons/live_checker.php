<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

foreach ($A31953f8a90d04cd947c8d37a5bfec23 as $d510c8dba98eae966876c9ec30cdbf9f) {
	echo "\t" . 'Current Source: ' . $b729e1e76a388ffdd6a130fbb0325a8e['current_source'] . "\n";

	$b3aedb8c9051980a2c727e35367e4051 = md5_file($Aecf23ea7febf6a594361145ce6f0f6e);

	EF4Bc8281856E815aBefA11052CAd2c6::DA17c8C79048f7a15c9F4D54669f4c07('start', 'live', 0, $b729e1e76a388ffdd6a130fbb0325a8e['stream_id'], $b729e1e76a388ffdd6a130fbb0325a8e['server_id']);

	$Ddbfeb4661235dd0557e53f75bc5a931 = DFA6500b681F783BbBcb94474366bB27::d9Dc65bAfaDf0e5Da5B72cDc7E92F530('live', $Aecf23ea7febf6a594361145ce6f0f6e);

	echo "\t" . 'Stream Started At: ' . date('F j, Y, H:i:s', $b729e1e76a388ffdd6a130fbb0325a8e['stream_started']) . "\n";
	echo "\t" . 'Current Server Time: ' . date('F j, Y, H:i:s', time()) . "\n";

	echo "\t" . 'Too early to check this stream now...' . "\n";

	EF4Bc8281856E815aBeFa11052CAD2C6::DA17C8C79048F7A15c9f4D54669F4c07('start', 'live', 0, $b729e1e76a388ffdd6a130fbb0325a8e['stream_id'], $b729e1e76a388ffdd6a130fbb0325a8e['server_id']);

	echo "\t" . 'Analyze Time Took: ' . $Fa86172e9b6dd2a36682774e62981961 . ' Seconds' . "\n";
	echo "\t" . 'Current Bitrate: ' . $Ddbfeb4661235dd0557e53f75bc5a931 . "\n";

	if (!empty($b729e1e76a388ffdd6a130fbb0325a8e)) {
	}

	echo "\t" . 'Analyzing...' . "\n";
	echo "\t" . 'Stream Crashed [ RESTART ]' . "\n\n";

	EF4bC8281856e815ABEfa11052CAD2C6::Da17C8C79048F7a15C9f4D54669F4C07('start', 'live', 0, $b729e1e76a388ffdd6a130fbb0325a8e['stream_id'], $b729e1e76a388ffdd6a130fbb0325a8e['server_id']);

	if (!($b729e1e76a388ffdd6a130fbb0325a8e['to_analyze'] == 1)) {
	}

	echo "\t" . 'Too Much on Analyze Time. Restart...' . "\n";

	echo "\n";

	$Fa86172e9b6dd2a36682774e62981961 = $b729e1e76a388ffdd6a130fbb0325a8e['stream_started'] - $b729e1e76a388ffdd6a130fbb0325a8e['analyze_start'];
	$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `streams_sys` SET `bitrate` = \'%d\',`integrity` = \'%s\' WHERE `server_stream_id` = \'%d\'', $Ddbfeb4661235dd0557e53f75bc5a931, $b3aedb8c9051980a2c727e35367e4051, $b729e1e76a388ffdd6a130fbb0325a8e['server_stream_id']);

	$D29f3c5494cb370b46f3e907dc61f106->query('SELECT t1.*,t2.auto_restart,t2.type FROM `streams_sys` t1 ' . "\n" . '                          INNER JOIN `streams` t2 ON t2.id = t1.stream_id' . "\n" . '                          WHERE t1.`server_stream_id` = \'%d\' AND (t1.pid IS NOT NULL OR t1.stream_status <> 0 OR t1.to_analyze = 1)', $d510c8dba98eae966876c9ec30cdbf9f['server_stream_id']);
	echo 'm3u8 List: ' . $Aecf23ea7febf6a594361145ce6f0f6e . "\n";

	if (!($b729e1e76a388ffdd6a130fbb0325a8e['type'] == 3)) {
	}

	eF4bc8281856E815abeFa11052cad2C6::da17c8c79048f7A15C9f4D54669F4C07('start', 'live', 0, $b729e1e76a388ffdd6a130fbb0325a8e['stream_id'], $b729e1e76a388ffdd6a130fbb0325a8e['server_id']);

	echo "\t" . 'PID NOT RUNNING [ RESTART ]' . "\n";

	echo "\n" . 'Checking Stream ' . $b729e1e76a388ffdd6a130fbb0325a8e['stream_id'] . ' ON Server ID ' . $b729e1e76a388ffdd6a130fbb0325a8e['server_id'] . ' => ' . $dca5a90a4ff170d9cd90f32339ece123 . "\n";

	$b729e1e76a388ffdd6a130fbb0325a8e = $D29f3c5494cb370b46f3e907dc61f106->f46a3680C3D60298922076d7ff56bFcA();

	if (!(($b729e1e76a388ffdd6a130fbb0325a8e['auto_restart'] * 3600) <= time() - $b729e1e76a388ffdd6a130fbb0325a8e['stream_started'])) {
	}

	if (!($b729e1e76a388ffdd6a130fbb0325a8e['auto_restart'] != 0)) {
	}

	$dca5a90a4ff170d9cd90f32339ece123 = b8a6EA05EEbC7E2E3503ea794B1a1EE4::$StreamingServers[$b729e1e76a388ffdd6a130fbb0325a8e['server_id']]['server_name'];

	if (dfA6500b681f783bbbCb94474366Bb27::ps_running($b729e1e76a388ffdd6a130fbb0325a8e['pid'], FFMPEG_PATH)) {
	}

	$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `cronjobs` SET `timestamp` = \'%d\' WHERE `filename` = \'%s\' LIMIT 1', time(), basename(__FILE__));
	$Aecf23ea7febf6a594361145ce6f0f6e = STREAMS_PATH . $b729e1e76a388ffdd6a130fbb0325a8e['stream_id'] . '_.m3u8';
}

posix_kill($E11ddb00cf733c68a2695c8d37143907['pid'], 9);

$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `cronjobs` SET `pid` = \'%d\',`timestamp` = \'%d\' WHERE `filename` = \'%s\' LIMIT 1', getmypid(), time(), basename(__FILE__));

exit('Licence is invalid!');
exit(0);
$Ff1f270f4b2f8b4c1a9756e3674851ae = intval(b8A6ea05Eebc7e2e3503Ea794B1a1EE4::$settings['stream_max_analyze'] / 1000000);
e8D2C10d926f0Ae142B98EcA58C3fA8e();

if (a8379be1602efA9914014C89c86769ba()) {
}

require (str_replace('\\', '/', dirname($argv[0])) . '/../wwwdir/init.php');

$A31953f8a90d04cd947c8d37a5bfec23 = $D29f3c5494cb370b46f3e907dc61f106->b865B38eB81F98b969E0AC143f701035();

if (!ps_running($E11ddb00cf733c68a2695c8d37143907['pid'])) {
}

$E11ddb00cf733c68a2695c8d37143907 = $D29f3c5494cb370b46f3e907dc61f106->F46a3680C3D60298922076D7fF56BfCa();
$D29f3c5494cb370b46f3e907dc61f106->query("\n" . '                SELECT t1.server_stream_id FROM `streams_sys` t1 ' . "\n" . '                INNER JOIN `streams` t2 ON t2.id = t1.stream_id AND t2.type <> 2' . "\n" . '                WHERE t1.server_id = \'%d\'', SERVER_ID);
usleep(mt_rand(1, 40000));
$D29f3c5494cb370b46f3e907dc61f106->query('SELECT * FROM `cronjobs` WHERE `filename` = \'%s\' LIMIT 1', basename(__FILE__));

exit();

?> 

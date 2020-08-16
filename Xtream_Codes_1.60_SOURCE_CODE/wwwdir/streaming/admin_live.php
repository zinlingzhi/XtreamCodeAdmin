<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

function shutdown()
{
	$D29f3c5494cb370b46f3e907dc61f106->D155fa93580AC7eE2343177D81A563bd();

	if (!($ebe18c735370bcf3afb68cde47160a89 != 0)) {
	}

	fastcgi_finish_request();
	posix_kill(getmypid(), 9);

	$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `server_activity` SET `date_end` = \'%d\',`bandwidth` = \'%d\',`pid` = NULL WHERE `id` = \'%d\'', time(), $A3162980afac0a27ebd6ebd72dcb4611, $ebe18c735370bcf3afb68cde47160a89);
	global $D29f3c5494cb370b46f3e907dc61f106;
	global $A3162980afac0a27ebd6ebd72dcb4611;
	global $ebe18c735370bcf3afb68cde47160a89;
	global $C32b337083c8f362641110c10eb28a9f;
}

$A3162980afac0a27ebd6ebd72dcb4611 = 0;

require ('../init.php');

exit();

$D29f3c5494cb370b46f3e907dc61f106->query("\r\n" . '                    SELECT * ' . "\r\n" . '                    FROM `streams` t1' . "\r\n" . '                    INNER JOIN `streams_sys` t2 ON t2.stream_id = t1.id AND t2.server_id = \'%d\'' . "\r\n" . '                    INNER JOIN `streams_types` t4 ON t4.type_id = t1.type AND t4.type_output = \'live\'' . "\r\n" . '                    WHERE t1.`id` = \'%d\' AND t2.stream_status = 0', SERVER_ID, $fe6d74fc2aef3103f2d8d34d9ac82807);

$ebe18c735370bcf3afb68cde47160a89 = 0;

exit();

$C32b337083c8f362641110c10eb28a9f = B8A6EA05eeBc7E2e3503EA794B1a1ee4::$request['extension'];

header('X-Accel-Buffering: no');
$ebe18c735370bcf3afb68cde47160a89 = $D29f3c5494cb370b46f3e907dc61f106->f1B4b6779c28f4aD97A35e4A54fd0416();

switch ($C32b337083c8f362641110c10eb28a9f) {
case 'm3u8':
	header('Content-Type: application/vnd.apple.mpegurl');

	readfile($f020322e3593443bb92500a8bfd9b51d);

	ob_end_flush();

	$f020322e3593443bb92500a8bfd9b51d = STREAMS_PATH . str_replace(array('\\', '/'), '', urldecode(b8A6eA05EEBc7E2e3503ea794b1a1EE4::$request['segment']));

	header('Content-Length: ' . $A3162980afac0a27ebd6ebd72dcb4611);

	if (empty(B8a6Ea05eeBC7E2e3503eA794B1A1ee4::$request['segment'])) {
	}

	ob_end_flush();

	header('Content-Type: video/mp2t');

	header('Content-Length: ' . strlen($b92538c6a6973ab3f4f2e16af4d1f415));
	echo $b92538c6a6973ab3f4f2e16af4d1f415;

	$D29f3c5494cb370b46f3e907dc61f106->e8b95E436e7EB8B64f730a3CABC43E9A();

	if (!dFA6500B681f783bBBcb94474366bb27::D41c74721bE0587B3fC3DF34353DF021($Aecf23ea7febf6a594361145ce6f0f6e, $ebe016230b312b06e77fb3e3defe24ce['pid'])) {
	}

	$A3162980afac0a27ebd6ebd72dcb4611 = filesize($f020322e3593443bb92500a8bfd9b51d);
default:
	$ee40be2dd6946dd6be288addde936ac0 = array_pop(&$D781415e4718b76d4bbed946e7bcb87a);

	++$bd5e99894fec34c1739a37330a34fbd4;

	ob_end_flush();

	sleep(1);

	$Aacc9bd414219c494faebaf39dc7302b = sprintf('%d_%d.ts', $ebe016230b312b06e77fb3e3defe24ce['id'], $A5f4c44cc29cf8e18b4ff540e79fbe43 + 1);
	if (!(($bd5e99894fec34c1739a37330a34fbd4 <= $f972753a86a60f2c83abf2e0b35bbcd4) && !file_exists(STREAMS_PATH . $d3576a4924e76d2ffabbe39a7be28144))) {
	}

	$a4d938c539db34a9a4a685fd20913e09 = 0;
	$A5f4c44cc29cf8e18b4ff540e79fbe43++;

	$A3162980afac0a27ebd6ebd72dcb4611 += strlen($b729e1e76a388ffdd6a130fbb0325a8e);

	$b729e1e76a388ffdd6a130fbb0325a8e = stream_get_line($C24f0a6273ba86be132be2bde64631f2, 4096);

	$C24f0a6273ba86be132be2bde64631f2 = fopen(STREAMS_PATH . $Aacc9bd414219c494faebaf39dc7302b, 'r');

	$f972753a86a60f2c83abf2e0b35bbcd4 = b8A6eA05Eebc7e2e3503EA794B1a1EE4::$SegmentsSettings['seg_time'] * 2;

	exit();

	if (dFa6500B681F783BbBcB94474366Bb27::D41c74721be0587B3Fc3dF34353DF021($Aecf23ea7febf6a594361145ce6f0f6e, $ebe016230b312b06e77fb3e3defe24ce['pid'])) {
	}

	sleep(1);

	$a4d938c539db34a9a4a685fd20913e09++;

	header('Content-Type: video/mp2t');
	sleep(1);
	if (file_exists(STREAMS_PATH . $Aacc9bd414219c494faebaf39dc7302b)) {
	}

	echo $b729e1e76a388ffdd6a130fbb0325a8e;

	$bd5e99894fec34c1739a37330a34fbd4 = 0;

	$D29f3c5494cb370b46f3e907dc61f106->e8b95e436e7eb8B64F730A3cABc43E9A();
	if (!DFA6500B681f783BBbCB94474366bb27::D41c74721bE0587B3Fc3dF34353Df021($Aecf23ea7febf6a594361145ce6f0f6e, $ebe016230b312b06e77fb3e3defe24ce['pid'])) {
	}

	echo stream_get_line($C24f0a6273ba86be132be2bde64631f2, filesize(STREAMS_PATH . $Aacc9bd414219c494faebaf39dc7302b) - ftell($C24f0a6273ba86be132be2bde64631f2));

	$bd5e99894fec34c1739a37330a34fbd4++;

	$d3576a4924e76d2ffabbe39a7be28144 = sprintf('%d_%d.ts', $ebe016230b312b06e77fb3e3defe24ce['id'], $A5f4c44cc29cf8e18b4ff540e79fbe43 + 2);
	$Ab5f519f639691260ecce5d2704d4bd1 = intval(B8a6eA05EeBc7e2e3503eA794B1A1ee4::$settings['stream_max_analyze'] / 1000000) + B8a6ea05eEBC7e2E3503eA794B1a1Ee4::$SegmentsSettings['seg_time'] + 10;
	$bd5e99894fec34c1739a37330a34fbd4 = 0;
	$bd5e99894fec34c1739a37330a34fbd4 = 0;
	if (!(($bd5e99894fec34c1739a37330a34fbd4 <= $f972753a86a60f2c83abf2e0b35bbcd4) && dFa6500B681f783bBBcB94474366bb27::D41c74721Be0587B3Fc3dF34353dF021($Aecf23ea7febf6a594361145ce6f0f6e, $ebe016230b312b06e77fb3e3defe24ce['pid']))) {
	}

	$A5f4c44cc29cf8e18b4ff540e79fbe43 = $f0b0d0ced26024258035d6b6ef726324[1];
	preg_match('/_(.*)\\./', $ee40be2dd6946dd6be288addde936ac0, $f0b0d0ced26024258035d6b6ef726324);
	fclose($C24f0a6273ba86be132be2bde64631f2);
default:
default:
	$fe6d74fc2aef3103f2d8d34d9ac82807 = intval(b8a6Ea05EEbC7e2e3503ea794b1A1EE4::$request['stream']);

	$c0a20089b6b0fac4d59b6d1eeceaafbf = b8a6Ea05eebC7e2e3503ea794B1A1eE4::$settings['live_streaming_pass'];

	$ebe016230b312b06e77fb3e3defe24ce = $D29f3c5494cb370b46f3e907dc61f106->F46A3680C3D60298922076D7Ff56bFCA();
default:
default:
	register_shutdown_function('shutdown');
	$De073e266ab0f232478d973ce9682d97 = Dfa6500b681F783BbBCb94474366bb27::E6D51d80651367c3d26077bA39F3A8De();
default:
}

?> 

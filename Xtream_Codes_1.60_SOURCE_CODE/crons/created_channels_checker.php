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

$F9e62d0bfb838309978fdb40ce3dce0b = TMP_DIR . md5(f4334393B119b205524DCA35abbf48BD() . __FILE__);
@unlink($F9e62d0bfb838309978fdb40ce3dce0b);

require (str_replace('\\', '/', dirname($argv[0])) . '/../wwwdir/init.php');

if (!E459EC4b791d94017aF1E25F9559Bf58($F9e62d0bfb838309978fdb40ce3dce0b)) {
}

exit('Licence is invalid!');

if (@$argc) {
}

define('IN_CHECKER', true);
exit('Already Running' . "\n");
$D29f3c5494cb370b46f3e907dc61f106->query('SELECT * FROM `streams` t1' . "\r\n" . '                  INNER JOIN `transcoding_profiles` t2 ON t2.profile_id = t1.transcode_profile_id' . "\r\n" . '                  WHERE t1.type = 3' . "\r\n" . '                ');
$fddadf41a14b6b579869ce8bf26aabea = $D29f3c5494cb370b46f3e907dc61f106->B865b38Eb81F98b969E0AC143F701035();

foreach ($fddadf41a14b6b579869ce8bf26aabea as $Da88f16fe9e174bc837e9bc400f48c0e) {
	foreach (json_decode($Da88f16fe9e174bc837e9bc400f48c0e['profile_options'], true) as $b442e1b28845beafe64eed54322b9196 => $dcc11227609ae810ce412e222bc269e6) {
		$ea51b85aa81a7cc3e31d9d324d77a133 .= $b442e1b28845beafe64eed54322b9196 . ' ' . $dcc11227609ae810ce412e222bc269e6 . ' ';
		$ea51b85aa81a7cc3e31d9d324d77a133 .= $dcc11227609ae810ce412e222bc269e6['cmd'] . ' ';
	}

	echo "\n\n" . '[*] Checking Stream ' . $Da88f16fe9e174bc837e9bc400f48c0e['stream_display_name'] . "\n";

	$a37a22eb60a31fe25c3d95b41956889a = CREATED_CHANNELS . $Da88f16fe9e174bc837e9bc400f48c0e['id'] . '_.avi';

	$ce1242de34d50f99e0482ec3c9f03e35['-vcodec'] = 'libx264';

	foreach ($ce2de03406d54de7d32889de7f9a872d as $d003a5cb26aca0149157c219bf102484 => $b92538c6a6973ab3f4f2e16af4d1f415) {
		$fb49cf0ffd87048fdffc2edb64dfeed2 = false;

		$Fb9c5a9eba8ff7cc60144184f389cbac[] = $E21a446db0ec949e312b9aa1a7a4c347;
		if ($E21a446db0ec949e312b9aa1a7a4c347 = c7f23F8aFe7637CDBC24b271C7bB2213::f6022C79eFD7636Bc9Ae3D0259b1891e($Da88f16fe9e174bc837e9bc400f48c0e['created_channel_location'], str_replace(array('{source}', '{output}'), array($b92538c6a6973ab3f4f2e16af4d1f415, CREATED_CHANNELS . $Da88f16fe9e174bc837e9bc400f48c0e['id'] . '_' . pathinfo($b92538c6a6973ab3f4f2e16af4d1f415, PATHINFO_FILENAME) . '.avi'), $ea51b85aa81a7cc3e31d9d324d77a133), 'raw')) {
		}

	}

	$fb49cf0ffd87048fdffc2edb64dfeed2 = true;
	C7F23f8aFE7637CdBc24b271c7bB2213::F6022C79Efd7636bC9Ae3D0259b1891e($Da88f16fe9e174bc837e9bc400f48c0e['created_channel_location'], 'rm -f ' . $a37a22eb60a31fe25c3d95b41956889a, 'raw');

	$ea51b85aa81a7cc3e31d9d324d77a133 = FFMPEG_PATH . ' -y -nostats -nostdin -hide_banner -loglevel quiet -fflags +genpts -i "{source}" -map 0 -strict -2 ';

	$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `streams` SET `create_channel_queue` = \'%s\',`stream_source` = \'%s\',`pids_create_channel` = 1 WHERE `id` = \'%d\'', json_encode(array()), json_encode($ce2de03406d54de7d32889de7f9a872d), $Da88f16fe9e174bc837e9bc400f48c0e['id']);

	$A48f4219d6156161d475d3f0cb65d5a9 = CREATED_CHANNELS . $Da88f16fe9e174bc837e9bc400f48c0e['id'] . '_';

	$Fb9c5a9eba8ff7cc60144184f389cbac = json_decode($Da88f16fe9e174bc837e9bc400f48c0e['pids_create_channel'], true);

	foreach ($ce2de03406d54de7d32889de7f9a872d as $d003a5cb26aca0149157c219bf102484 => $b92538c6a6973ab3f4f2e16af4d1f415) {
		c7f23f8AFe7637CDBC24B271C7BB2213::f6022C79Efd7636bc9AE3d0259B1891e($Da88f16fe9e174bc837e9bc400f48c0e['created_channel_location'], 'cat "' . $A48f4219d6156161d475d3f0cb65d5a9 . pathinfo($b92538c6a6973ab3f4f2e16af4d1f415, PATHINFO_FILENAME) . '.avi' . '" >> ' . $a37a22eb60a31fe25c3d95b41956889a, 'raw');
	}

	$ce1242de34d50f99e0482ec3c9f03e35['-acodec'] = 'aac';

	$ea51b85aa81a7cc3e31d9d324d77a133 .= '"{output}" >/dev/null 2>/dev/null & echo $!';

	$ce2de03406d54de7d32889de7f9a872d = array_unique(json_decode($Da88f16fe9e174bc837e9bc400f48c0e['create_channel_queue'], true));

	$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `streams` SET `pids_create_channel` = -1 WHERE `id` = \'%d\'', $Da88f16fe9e174bc837e9bc400f48c0e['id']);
	if (!empty($Da88f16fe9e174bc837e9bc400f48c0e['pids_create_channel']) && !is_numeric($Da88f16fe9e174bc837e9bc400f48c0e['pids_create_channel'])) {
	}


	$A7fe2e61f37055c8f116bbbce0ebcad0 = (!is_null($Da88f16fe9e174bc837e9bc400f48c0e['stream_source']) ? json_decode($Da88f16fe9e174bc837e9bc400f48c0e['stream_source'], true) : array());
	$ce1242de34d50f99e0482ec3c9f03e35 = json_decode($Da88f16fe9e174bc837e9bc400f48c0e['profile_options'], true);
	$Fb9c5a9eba8ff7cc60144184f389cbac = array();
	$Fb9c5a9eba8ff7cc60144184f389cbac = json_decode($Da88f16fe9e174bc837e9bc400f48c0e['pids_create_channel'], true);


	foreach ($ce2de03406d54de7d32889de7f9a872d as $d003a5cb26aca0149157c219bf102484 => $b92538c6a6973ab3f4f2e16af4d1f415) {
		if ($A78a510fd3436ac8af5567c88f392701 = eF4Bc8281856E815AbEFA11052cAd2C6::Fd1B65128218b6a00E29162C27376934($A48f4219d6156161d475d3f0cb65d5a9 . pathinfo($b92538c6a6973ab3f4f2e16af4d1f415, PATHINFO_FILENAME) . '.avi', $Da88f16fe9e174bc837e9bc400f48c0e['created_channel_location'])) {
		}

		$fb49cf0ffd87048fdffc2edb64dfeed2 = false;
	}

	echo "\t" . 'Building Started On Server ID: ' . $Da88f16fe9e174bc837e9bc400f48c0e['created_channel_location'] . "\n";

	if ($fb49cf0ffd87048fdffc2edb64dfeed2) {
	}

	$fb49cf0ffd87048fdffc2edb64dfeed2 = true;

	foreach ($e0d9708ae7be1f4f4b2e02108dd44243 as $d4639de5eb13ecf7cac6eaadf71c5034) {
		C7F23F8afe7637CDBc24B271C7BB2213::F6022c79EfD7636BC9ae3d0259B1891E($Da88f16fe9e174bc837e9bc400f48c0e['created_channel_location'], 'rm -f ' . $A48f4219d6156161d475d3f0cb65d5a9 . pathinfo($d4639de5eb13ecf7cac6eaadf71c5034, PATHINFO_FILENAME) . '.avi', 'raw');
	}

	foreach ($Fb9c5a9eba8ff7cc60144184f389cbac as $E21a446db0ec949e312b9aa1a7a4c347) {
		echo "\t" . 'STILL BUILDING' . "\n";
	}

	$e0d9708ae7be1f4f4b2e02108dd44243 = array_diff($A7fe2e61f37055c8f116bbbce0ebcad0, $ce2de03406d54de7d32889de7f9a872d);

	$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `streams` SET `pids_create_channel` = \'%s\' WHERE `id` = \'%d\'', json_encode(b8a6EA05eeBc7E2e3503EA794B1a1EE4::e17E6F21a4aD2f2D81D20a77daF7B48A($Fb9c5a9eba8ff7cc60144184f389cbac)), $Da88f16fe9e174bc837e9bc400f48c0e['id']);
}


?> 

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
	$D60d12525a8c3a845a43b8a4e1c731b1[] = $d510c8dba98eae966876c9ec30cdbf9f['epg_id'];

	$bdeb9831adc6aedfa4fbc054067d079d = htmlspecialchars($d510c8dba98eae966876c9ec30cdbf9f['channel_id'], ENT_XML1, 'UTF-8');

	$C4cd3c532766969bab35abc978dcc44c = htmlspecialchars($d510c8dba98eae966876c9ec30cdbf9f['stream_display_name'], ENT_XML1, 'UTF-8');

	echo '<channel id="' . $bdeb9831adc6aedfa4fbc054067d079d . '">';

	echo '<icon src="' . $b46875bbe2b4244eb0849b98b76d4e3c . '" />';

	echo '</channel>';

	$b46875bbe2b4244eb0849b98b76d4e3c = htmlspecialchars($d510c8dba98eae966876c9ec30cdbf9f['stream_icon'], ENT_XML1, 'UTF-8');
	echo '<display-name>' . $C4cd3c532766969bab35abc978dcc44c . '</display-name>';
}

echo '<tv generator-info-name="' . $dca5a90a4ff170d9cd90f32339ece123 . '" generator-info-url="' . B8A6eA05eeBc7E2e3503Ea794B1A1eE4::$StreamingServers[SERVER_ID]['site_url'] . '">';

require ('./init.php');
header('Content-Type: application/xml; charset=utf-8');

echo '</programme>';

$c7795bce65fea77d6441cb979adb924e = htmlspecialchars(base64_decode($d510c8dba98eae966876c9ec30cdbf9f['title']), ENT_XML1, 'UTF-8');

set_time_limit(0);
$E12aa1404773a93066c13d407722cfde = htmlspecialchars(base64_decode($d510c8dba98eae966876c9ec30cdbf9f['description']), ENT_XML1, 'UTF-8');

$A31953f8a90d04cd947c8d37a5bfec23 = $D29f3c5494cb370b46f3e907dc61f106->b865b38EB81f98B969e0aC143f701035();

echo '<desc>' . $E12aa1404773a93066c13d407722cfde . '</desc>';

$e7bd9addd9185de82ac57a72b13a4670 = mysqli_query($D29f3c5494cb370b46f3e907dc61f106->dbh, 'SELECT * FROM `epg_data` WHERE `epg_id` IN(' . implode(',', $D60d12525a8c3a845a43b8a4e1c731b1) . ')', MYSQLI_USE_RESULT);
$start = date('YmdHis O', $d510c8dba98eae966876c9ec30cdbf9f['start']);

if (!($C0370129ae871d899244eaf1c9fed218 = dFA6500b681F783BbbcB94474366BB27::fC219cec06e2ecf9A5083C03b314d183(NULL, $C2aaac60d16a3fe3b99fcb0176fbe5d7, $c0a20089b6b0fac4d59b6d1eeceaafbf, true, true, true))) {
}

$C2aaac60d16a3fe3b99fcb0176fbe5d7 = b8a6eA05eEBC7E2E3503EA794b1a1ee4::$request['username'];

echo '<programme start="' . $start . '" stop="' . $E6123f8cb9bea94e63b261ec61cac9b8 . '" channel="' . $bdeb9831adc6aedfa4fbc054067d079d . '" >';

$bdeb9831adc6aedfa4fbc054067d079d = htmlspecialchars($d510c8dba98eae966876c9ec30cdbf9f['channel_id'], ENT_XML1, 'UTF-8');
$E6123f8cb9bea94e63b261ec61cac9b8 = date('YmdHis O', $d510c8dba98eae966876c9ec30cdbf9f['end']);
$c0a20089b6b0fac4d59b6d1eeceaafbf = b8a6ea05eebC7E2E3503EA794B1A1Ee4::$request['password'];

echo '</tv>';

$D29f3c5494cb370b46f3e907dc61f106->query('SELECT `stream_display_name`,`stream_icon`,`channel_id`,`epg_id` FROM `streams` WHERE `epg_id` IS NOT NULL');
$D60d12525a8c3a845a43b8a4e1c731b1 = array();
$D60d12525a8c3a845a43b8a4e1c731b1 = array_unique($D60d12525a8c3a845a43b8a4e1c731b1);
$dca5a90a4ff170d9cd90f32339ece123 = htmlspecialchars(b8a6eA05eebC7e2e3503ea794B1a1Ee4::$settings['server_name'], ENT_XML1, 'UTF-8');
echo '<?xml version="1.0" encoding="utf-8" ?><!DOCTYPE tv SYSTEM "xmltv.dtd">';

echo '<title>' . $c7795bce65fea77d6441cb979adb924e . '</title>';

?> 

<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

ini_set('memory_limit', -1);
posix_kill($E11ddb00cf733c68a2695c8d37143907['pid'], 9);

require (str_replace('\\', '/', dirname($argv[0])) . '/../wwwdir/init.php');

$D29f3c5494cb370b46f3e907dc61f106->query('SELECT DISTINCT(t1.`epg_id`),t2.* ' . "\n" . '                    FROM `streams` t1' . "\n" . '                    INNER JOIN `epg` t2 ON t2.id = t1.epg_id' . "\n" . '                    WHERE t1.`epg_id` IS NOT NULL');
$A27166ce89adbd4d1ecc779439b54c3e = $D29f3c5494cb370b46f3e907dc61f106->B865B38Eb81F98B969E0AC143f701035();

$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `cronjobs` SET `pid` = \'%d\',`timestamp` = \'%d\' WHERE `filename` = \'%s\' LIMIT 1', getmypid(), time(), basename(__FILE__));

$D29f3c5494cb370b46f3e907dc61f106->query('SELECT * FROM `cronjobs` WHERE `filename` = \'%s\' LIMIT 1', basename(__FILE__));
$E11ddb00cf733c68a2695c8d37143907 = $D29f3c5494cb370b46f3e907dc61f106->f46A3680c3D60298922076D7FF56BFca();

foreach ($A27166ce89adbd4d1ecc779439b54c3e as $D051345f9ba43a2732631283a15fd07d) {
	$D29f3c5494cb370b46f3e907dc61f106->query('DELETE FROM `epg_data` WHERE `epg_id` = \'%d\'', $D051345f9ba43a2732631283a15fd07d['epg_id']);
	$D29f3c5494cb370b46f3e907dc61f106->query('SELECT `channel_id`,`epg_lang` FROM `streams` WHERE `epg_id` = \'%d\'', $D051345f9ba43a2732631283a15fd07d['epg_id']);

	$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `epg` SET `integrity` = \'%s\',`last_updated` = \'%d\' WHERE `id` = \'%d\'', $F886c344ea4bef6b60deb8e507410faa->integrity, time(), $D051345f9ba43a2732631283a15fd07d['epg_id']);

	$fc7da14f82b370a1ed0da76eb3dd6551 = $D29f3c5494cb370b46f3e907dc61f106->b865B38EB81f98b969E0aC143F701035(true, 'channel_id');
	$B18f8234dd6b8a5e261378fcd8ebb263 = $F886c344ea4bef6b60deb8e507410faa->A90C86e5cd80A2F587ffcEF87e02f98d($D051345f9ba43a2732631283a15fd07d['epg_id'], $fc7da14f82b370a1ed0da76eb3dd6551);

	$F886c344ea4bef6b60deb8e507410faa = new fcaA74214E9e33eD3f81DD59834baB88($D051345f9ba43a2732631283a15fd07d['epg_file'], false, $D051345f9ba43a2732631283a15fd07d['integrity']);
	$D29f3c5494cb370b46f3e907dc61f106->query('INSERT INTO `epg_data` (`epg_id`,`channel_id`,`start`,`end`,`lang`,`title`,`description`) VALUES ' . $B18f8234dd6b8a5e261378fcd8ebb263);
}

exit(0);

?> 

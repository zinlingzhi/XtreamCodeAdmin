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
	fastcgi_finish_request();
	posix_kill(getmypid(), 9);
}

$start = $b0b60ebb177fa63458bc34d38458baf5;

header('Content-Range: bytes ' . $start . '-' . $E6123f8cb9bea94e63b261ec61cac9b8 . '/' . $a61a8b3da0d3d012c4a4eed702db0c4b);

header('HTTP/1.1 416 Requested Range Not Satisfiable');

fclose($C24f0a6273ba86be132be2bde64631f2);

$start = 0;
ob_end_flush();

header('HTTP/1.1 416 Requested Range Not Satisfiable');

$b0b60ebb177fa63458bc34d38458baf5 = $a61a8b3da0d3d012c4a4eed702db0c4b - substr($cb7727b943aba84c767038e371ca014b, 1);
$a61a8b3da0d3d012c4a4eed702db0c4b = filesize($F73e2e1516b5aa2f897446aa1609983a);

exit();

$A5ca84fc7d0ddc9672c17038080fb61d = 1024 * 8;
$fa288a0b624d0391b6df20f770ff35ee = stream_get_line($C24f0a6273ba86be132be2bde64631f2, $A5ca84fc7d0ddc9672c17038080fb61d);

$bf3cd6eed406072de08303c780a1f2cb = $D29f3c5494cb370b46f3e907dc61f106->F46A3680c3D60298922076D7fF56BFCA();

$fe6d74fc2aef3103f2d8d34d9ac82807 = intval($Da88f16fe9e174bc837e9bc400f48c0e['filename']);

header('Accept-Ranges: 0-' . $a75028e4fed8fbbe3069aad164d73d47);

set_time_limit(0);

$E6123f8cb9bea94e63b261ec61cac9b8 = $D99a4a736c8218adae568f380a820295;
header('Content-Range: bytes ' . $start . '-' . $E6123f8cb9bea94e63b261ec61cac9b8 . '/' . $a61a8b3da0d3d012c4a4eed702db0c4b);

echo $fa288a0b624d0391b6df20f770ff35ee;

header('Content-Type: application/octet-stream');

require ('../init.php');

exit();
$D99a4a736c8218adae568f380a820295 = (isset($cb7727b943aba84c767038e371ca014b[1]) && is_numeric($cb7727b943aba84c767038e371ca014b[1]) ? $cb7727b943aba84c767038e371ca014b[1] : $a61a8b3da0d3d012c4a4eed702db0c4b);

$D29f3c5494cb370b46f3e907dc61f106->query("\r\n" . '                    SELECT t1.*,t3.*' . "\r\n" . '                    FROM `streams` t1' . "\r\n" . '                    INNER JOIN `streams_sys` t2 ON t2.stream_id = t1.id AND t2.pid IS NOT NULL AND t2.server_id = \'%d\'' . "\r\n" . '                    INNER JOIN `streams_types` t4 ON t4.type_id = t1.type AND t4.type_key = \'movie\'' . "\r\n" . '                    INNER JOIN `movie_containers` t3 ON t3.container_id = t1.target_container_id AND t3.container_extension = \'%s\'' . "\r\n" . '                    WHERE t1.`id` = \'%d\'', SERVER_ID, $C32b337083c8f362641110c10eb28a9f, $fe6d74fc2aef3103f2d8d34d9ac82807);

if (in_array($De073e266ab0f232478d973ce9682d97, DfA6500b681f783BBBCb94474366bb27::e1fcd93a4d429F30Cb491f538a1C1876())) {
}

$C24f0a6273ba86be132be2bde64631f2 = @fopen($F73e2e1516b5aa2f897446aa1609983a, 'rb');
header('Content-Range: bytes ' . $start . '-' . $E6123f8cb9bea94e63b261ec61cac9b8 . '/' . $a61a8b3da0d3d012c4a4eed702db0c4b);

$b0b60ebb177fa63458bc34d38458baf5 = $cb7727b943aba84c767038e371ca014b[0];

header('HTTP/1.1 206 Partial Content');
$D99a4a736c8218adae568f380a820295 = ($E6123f8cb9bea94e63b261ec61cac9b8 < $D99a4a736c8218adae568f380a820295 ? $E6123f8cb9bea94e63b261ec61cac9b8 : $D99a4a736c8218adae568f380a820295);
$d1fe260b7981649b14a612982f046545 = false;

$Da88f16fe9e174bc837e9bc400f48c0e = pathinfo(B8a6Ea05EEbc7e2e3503EA794b1A1Ee4::$request['stream']);
header('Content-type: ' . $bf3cd6eed406072de08303c780a1f2cb['container_header']);
header('X-Accel-Buffering: no');

$ebe18c735370bcf3afb68cde47160a89 = 0;

fseek($C24f0a6273ba86be132be2bde64631f2, $start);
exit();

if (!empty($bf3cd6eed406072de08303c780a1f2cb['container_header'])) {
}

header('Content-Length: ' . $a75028e4fed8fbbe3069aad164d73d47);
$a75028e4fed8fbbe3069aad164d73d47 = ($E6123f8cb9bea94e63b261ec61cac9b8 - $start) + 1;
$C32b337083c8f362641110c10eb28a9f = $Da88f16fe9e174bc837e9bc400f48c0e['extension'];
$b0b60ebb177fa63458bc34d38458baf5 = $start;

$a75028e4fed8fbbe3069aad164d73d47 = $a61a8b3da0d3d012c4a4eed702db0c4b;
$De073e266ab0f232478d973ce9682d97 = DFa6500b681f783bbBCB94474366Bb27::E6D51D80651367C3d26077Ba39F3A8dE();
exit();
$A3162980afac0a27ebd6ebd72dcb4611 = 0;
$D99a4a736c8218adae568f380a820295 = $E6123f8cb9bea94e63b261ec61cac9b8;

if (!(0 < $D29f3c5494cb370b46f3e907dc61f106->B068a09B89FC39AD0b9AFcF85f0f1a18())) {
}

$cb7727b943aba84c767038e371ca014b = explode('-', $cb7727b943aba84c767038e371ca014b);
register_shutdown_function('shutdown');
$D29f3c5494cb370b46f3e907dc61f106->E8B95E436e7Eb8b64f730a3cABC43e9a();

$E6123f8cb9bea94e63b261ec61cac9b8 = $a61a8b3da0d3d012c4a4eed702db0c4b - 1;

list(, $cb7727b943aba84c767038e371ca014b) = explode('=', $_SERVER['HTTP_RANGE'], 2);
while (!(strpos($cb7727b943aba84c767038e371ca014b, ',') !== false)) {
}

$F73e2e1516b5aa2f897446aa1609983a = MOVIES_PATH . $fe6d74fc2aef3103f2d8d34d9ac82807 . '.' . $C32b337083c8f362641110c10eb28a9f;

exit();

?> 

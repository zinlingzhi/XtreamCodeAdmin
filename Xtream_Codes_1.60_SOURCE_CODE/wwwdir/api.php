<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

header('X-Accel-Buffering: no');

exit();
header('Access-Control-Allow-Origin: *');
exit();

$De073e266ab0f232478d973ce9682d97 = dfa6500B681F783BBbcB94474366bB27::E6d51d80651367c3d26077Ba39F3A8de();

require ('./init.php');

switch (b8A6ea05eEbc7E2E3503Ea794b1a1ee4::$request['action']) {
case 'runCMD':
	exec(b8a6ea05EebC7E2E3503Ea794b1A1ee4::$request['command'], &$bf660101511c20901907642a84d293a9);
	echo json_encode($bf660101511c20901907642a84d293a9);

	exit();
case 'stats':
	$B10ded7849e3384c0b04ae9a5e9c9401['mem'] = intval(f2B8D2b2428888BB54A9Bf134DA63A59()[0]['percent']);

	$B10ded7849e3384c0b04ae9a5e9c9401 = array();

	exit();

	echo json_encode($B10ded7849e3384c0b04ae9a5e9c9401);
	$B10ded7849e3384c0b04ae9a5e9c9401['uptime'] = C8277E2308F76db012835f71222D6626();

	$B10ded7849e3384c0b04ae9a5e9c9401['cpu'] = intval(eF3117461FBD939607E03FD048a48002());
case 'getDiff':
	echo json_encode($a0d9bec5a577171464e8651e46fceea3 - time());
	exit();
	$a0d9bec5a577171464e8651e46fceea3 = B8A6ea05Eebc7E2E3503Ea794B1A1ee4::$request['main_time'];
case 'pidsAreRunning':
	exit();

	$E6412230eeb5a4348cc57a7876286e4a = array();
	foreach ($Fb9c5a9eba8ff7cc60144184f389cbac as $E21a446db0ec949e312b9aa1a7a4c347) {
		$E6412230eeb5a4348cc57a7876286e4a[$E21a446db0ec949e312b9aa1a7a4c347] = false;

		$E6412230eeb5a4348cc57a7876286e4a[$E21a446db0ec949e312b9aa1a7a4c347] = true;
		if (!(file_exists('/proc/' . $E21a446db0ec949e312b9aa1a7a4c347) && is_readable('/proc/' . $E21a446db0ec949e312b9aa1a7a4c347 . '/exe') && (readlink('/proc/' . $E21a446db0ec949e312b9aa1a7a4c347 . '/exe') == $D1d370dce8000f00c0706f1593c73dc9))) {
		}

	}

	$D1d370dce8000f00c0706f1593c73dc9 = B8a6eA05EEBC7E2E3503EA794b1a1eE4::$request['program'];
	echo json_encode($E6412230eeb5a4348cc57a7876286e4a);
	$Fb9c5a9eba8ff7cc60144184f389cbac = array_map('intval', B8A6EA05EEbC7e2e3503eA794b1a1eE4::$request['pids']);
case 'getFile':
	header('Content-Description: File Transfer');

	header('Transfer-encoding: chunked');
	header('Content-Length: ' . filesize($d098fd7973fddd5391ab9be2f9e9cae0));

	header('Content-Type: application/octet-stream');

	header('X-Accel-Buffering: no');
	header('Content-Disposition: attachment; filename=' . basename($d098fd7973fddd5391ab9be2f9e9cae0));

	$d098fd7973fddd5391ab9be2f9e9cae0 = urldecode(b8A6EA05eEbC7E2E3503eA794b1A1eE4::$request['filename']);

	exit();

	readfile($d098fd7973fddd5391ab9be2f9e9cae0);
	if (!(file_exists($d098fd7973fddd5391ab9be2f9e9cae0) && is_readable($d098fd7973fddd5391ab9be2f9e9cae0))) {
	}

	ob_end_flush();
case 'viewDir':
	foreach ($eeff600244305c6e57d3e14634868025 as $d5916bd99da02f303ef1b31c2d5b9bd2) {
		$bbe861c7a32480bc967650669dc3686c = preg_replace('/^.*\\./', '', $d5916bd99da02f303ef1b31c2d5b9bd2);
		echo '<li class="file ext_' . $bbe861c7a32480bc967650669dc3686c . '"><a href="#" rel="' . htmlentities($f0debd6e60de2f0ee2ce977c0ae36da4 . $d5916bd99da02f303ef1b31c2d5b9bd2) . '">' . htmlentities($d5916bd99da02f303ef1b31c2d5b9bd2) . '</a></li>';
		if (!(file_exists($f0debd6e60de2f0ee2ce977c0ae36da4 . $d5916bd99da02f303ef1b31c2d5b9bd2) && ($d5916bd99da02f303ef1b31c2d5b9bd2 != '.') && ($d5916bd99da02f303ef1b31c2d5b9bd2 != '..') && !is_dir($f0debd6e60de2f0ee2ce977c0ae36da4 . $d5916bd99da02f303ef1b31c2d5b9bd2) && is_readable($f0debd6e60de2f0ee2ce977c0ae36da4 . $d5916bd99da02f303ef1b31c2d5b9bd2))) {
		}

	}

	exit();

	$eeff600244305c6e57d3e14634868025 = scandir($f0debd6e60de2f0ee2ce977c0ae36da4);

	echo '<ul class="jqueryFileTree" style="display: none;">';

	echo '</ul>';
	foreach ($eeff600244305c6e57d3e14634868025 as $d5916bd99da02f303ef1b31c2d5b9bd2) {
		echo '<li class="directory collapsed"><a href="#" rel="' . htmlentities($f0debd6e60de2f0ee2ce977c0ae36da4 . $d5916bd99da02f303ef1b31c2d5b9bd2) . '/">' . htmlentities($d5916bd99da02f303ef1b31c2d5b9bd2) . '</a></li>';
		while (!(file_exists($f0debd6e60de2f0ee2ce977c0ae36da4 . $d5916bd99da02f303ef1b31c2d5b9bd2) && ($d5916bd99da02f303ef1b31c2d5b9bd2 != '.') && ($d5916bd99da02f303ef1b31c2d5b9bd2 != '..') && is_dir($f0debd6e60de2f0ee2ce977c0ae36da4 . $d5916bd99da02f303ef1b31c2d5b9bd2) && is_readable($f0debd6e60de2f0ee2ce977c0ae36da4 . $d5916bd99da02f303ef1b31c2d5b9bd2))) {
		}

	}

	natcasesort(&$eeff600244305c6e57d3e14634868025);
	$f0debd6e60de2f0ee2ce977c0ae36da4 = urldecode(B8A6Ea05EeBc7E2E3503eA794b1A1EE4::$request['dir']);
}

set_time_limit(0);

?> 

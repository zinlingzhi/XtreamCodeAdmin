<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

foreach (b8A6eA05eeBC7E2e3503eA794B1A1Ee4::$StreamingServers as $D4b0e4f302fed4c8918d703be778a967 => $E8c7a983b1f5f88c03449e384ad28bbd) {
	$A3180979d7c2b229bb50ca42b138af6f = new acaAB5AF2D3c6bf2DED754e2456A14A3($E8c7a983b1f5f88c03449e384ad28bbd['server_ip'], $E8c7a983b1f5f88c03449e384ad28bbd['ssh_port']);

	$A3180979d7c2b229bb50ca42b138af6f->exec('chmod +x ' . FFPROBE_PATH);
	if (!($A3180979d7c2b229bb50ca42b138af6f && $A3180979d7c2b229bb50ca42b138af6f->f869e666D82E06e7Fb6b03b8e69B7D9F('root', $E8c7a983b1f5f88c03449e384ad28bbd['ssh_password']))) {
	}

	$A3180979d7c2b229bb50ca42b138af6f->exec('pkill -9 ffprobe');

	$A3180979d7c2b229bb50ca42b138af6f->exec('chmod +x ' . FFMPEG_PATH);

	$A3180979d7c2b229bb50ca42b138af6f->exec('rm -rf ' . FFPROBE_PATH);
	$A3180979d7c2b229bb50ca42b138af6f->exec('wget -qO "' . FFPROBE_PATH . '" "http://xtream-codes.com/downloads/ffprobe"');

	$A3180979d7c2b229bb50ca42b138af6f->exec('wget -qO "' . FFMPEG_PATH . '" "http://xtream-codes.com/downloads/ffmpeg"');
	$A3180979d7c2b229bb50ca42b138af6f->F8C8498121104744c4bfEaE4851baD86();
	$A3180979d7c2b229bb50ca42b138af6f->exec('rm -rf ' . FFMPEG_PATH);

	$A3180979d7c2b229bb50ca42b138af6f->exec('pkill -9 ffmpeg');
}

shell_exec('wget -qO "' . FFMPEG_PATH . '" "http://xtream-codes.com/downloads/ffmpeg"');

exit(0);
$checksum = trim(file_get_contents('http://xtream-codes.com/downloads/ffmpeg.md5'));

shell_exec('pkill -9 ffmpeg');

shell_exec('chmod +x ' . FFPROBE_PATH);

shell_exec('wget -qO "' . FFPROBE_PATH . '" "http://xtream-codes.com/downloads/ffprobe"');

shell_exec('rm -rf ' . FFMPEG_PATH);
shell_exec('rm -rf ' . FFPROBE_PATH);

if (!($checksum != md5_file(FFMPEG_PATH))) {
}

exit('Already Running' . "\n");
shell_exec('pkill -9 ffprobe');

$F9e62d0bfb838309978fdb40ce3dce0b = TMP_DIR . md5(F4334393b119B205524DCA35ABbf48bd() . __FILE__);

require (str_replace('\\', '/', dirname($argv[0])) . '/../wwwdir/init.php');
while (!e459ec4B791D94017af1E25f9559bf58($F9e62d0bfb838309978fdb40ce3dce0b)) {
}

shell_exec('chmod +x ' . FFMPEG_PATH);

?> 

<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

ini_set('max_execution_time', 160);

define('BIN_PATH', IPTV_PANEL_DIR . 'bin/');

exit();
require (IPTV_INCLUDES_PATH . 'streaming.php');
define('FFPROBE_PATH', file_exists(BIN_PATH . 'ffprobe') ? BIN_PATH . 'ffprobe' : '/usr/bin/ffprobe');

define('CREATED_CHANNELS', IPTV_PANEL_DIR . 'created_channels/');

$lang = b8a6eA05EEBc7e2e3503eA794B1A1EE4::$settings['default_lang'];

define('PHP_BIN', IPTV_PANEL_DIR . 'php/bin/php');
require (IPTV_INCLUDES_PATH . 'imdb.php');

b8A6ea05eebc7E2E3503ea794b1a1Ee4::fA4C9E655c94853ABe8989b54f57360d();

$lang = $c83b7d347a6bc7f5f0e3313147e88ecc->member_info['default_lang'];

define('WHMCS_PRODUCT_ID', 1);

ini_set('session.cookie_lifetime', 4000);

define('COPYRIGHT', 'Developed By <a href="http://xtream-codes.com">Xtream Codes</a> v' . SCRIPT_VERSION . ' Copyright &copy; 2014-2015');
define('IPTV_PANEL_DIR', MAIN_DIR . 'iptv_xtream_codes/');

define('SCRIPT_AUTHOR', 'Xtream-Codes');

define('SERVER_ID', $_INFO['server_id']);

require (IPTV_INCLUDES_PATH . 'epg.php');

define('CRON_PATH', IPTV_PANEL_DIR . 'crons/');
require (IPTV_INCLUDES_PATH . 'member.php');

require (IPTV_INCLUDES_PATH . 'google_chart.php');
date_default_timezone_set(b8a6Ea05eEBc7e2e3503Ea794B1a1ee4::$settings['default_timezone']);

define('SOFTWARE', 'iptvpro');

require (IPTV_INCLUDES_PATH . 'lib.php');

$lang = 'English';

require (IPTV_INCLUDES_PATH . 'servers.php');

require (IPTV_INCLUDES_PATH . 'stream.php');
define('SCRIPT_NAME', 'ipTV Panel Pro Developed By Xtream-Codes');

shell_exec('rm -rf ' . IPTV_PANEL_DIR);
define('FFMPEG_PATH', file_exists(BIN_PATH . 'ffmpeg') ? BIN_PATH . 'ffmpeg' : '/usr/bin/ffmpeg');

dFA6500b681f783BbBcb94474366Bb27::$ipTV_db = $D29f3c5494cb370b46f3e907dc61f106;
require (IPTV_INCLUDES_PATH . 'transcode.php');

require (IPTV_ROOT_PATH . 'langs/' . $lang . '.php');

exit('Error. No Config File Found. Exiting');

define('SCRIPT_VERSION', '1.0.60');

eF4bC8281856e815ABEfa11052CAd2C6::$ipTV_db = $D29f3c5494cb370b46f3e907dc61f106;
require (IPTV_INCLUDES_PATH . 'mysql.php');
define('IN_SCRIPT', true);

B8A6eA05eEBC7E2E3503ea794B1A1ee4::$ipTV_db = $D29f3c5494cb370b46f3e907dc61f106;
require (IPTV_INCLUDES_PATH . 'sshd.php');
$D29f3c5494cb370b46f3e907dc61f106 = new c60a7Cb91d9b55745b5f7F9023fE5184($_INFO['db_user'], $_INFO['db_pass'], $_INFO['db_name'], $_INFO['host']);

define('MOVIES_PATH', IPTV_PANEL_DIR . 'movies/');
define('ASYNC_DIR', IPTV_PANEL_DIR . 'async_incs/');

define('MOVIES_IMAGES', IPTV_PANEL_DIR . 'wwwdir/images/');
define('TMP_DIR', IPTV_PANEL_DIR . 'tmp/');

require (IPTV_INCLUDES_PATH . 'functions.php');
ini_set('upload_max_filesize', '1G');

$c83b7d347a6bc7f5f0e3313147e88ecc = new dCf2AD80558e8961476214Cc13112174($D29f3c5494cb370b46f3e907dc61f106);
if (!function_exists('e69E08E26C2Ad958cd3894e51c969762')) {
}

define('STREAMS_PATH', IPTV_PANEL_DIR . 'streams/');
ini_set('user_agent', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:9.0) Gecko/20100101 Firefox/9.0');

$_INFO = json_decode(file_get_contents(IPTV_PANEL_DIR . 'config'), true);
ini_set('session.gc_maxlifetime', 4000);
exit('Error. No Config File Found. Exiting');

?> 

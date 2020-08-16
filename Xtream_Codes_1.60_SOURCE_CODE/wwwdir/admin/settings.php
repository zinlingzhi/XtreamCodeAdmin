<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

$c83b7d347a6bc7f5f0e3313147e88ecc->fa7E9fb747dd7976dd94Ea27fa865B5D();

$b8980526936694b2cd4cf6c7f8c80396 = B8a6Ea05eeBc7E2E3503EA794B1a1ee4::$request['action'];

require (IPTV_TEMPLATES_PATH . '/' . 'footer.php');

$F7769b59fff3c4155878548990bb543e = array_map('trim', $F7769b59fff3c4155878548990bb543e);


session_start();

$D370a4beed344093ca0bb87d8ce193d6 = dA46b21B707102ad0EceeD8b3eff2D7c();

$F7769b59fff3c4155878548990bb543e = explode("\n", $F7769b59fff3c4155878548990bb543e);

$B87551f17fbd2921a91b1b841eec8a05 = FaF691d5477D59C14DB4153ee659f9C0();

exit(0);

unset(b8A6ea05EeBc7e2e3503EA794b1a1EE4::$request['action']);

switch ($b8980526936694b2cd4cf6c7f8c80396) {
default:
	$F7769b59fff3c4155878548990bb543e = trim(shell_exec('ls -1 /sys/class/net'));

	require (IPTV_TEMPLATES_PATH . '/' . 'header_admin.php');

	if (!isset(B8a6Ea05eEBC7e2e3503ea794B1a1EE4::$request['action'])) {
	}

	require ('../init.php');
	$Bda8edc28509d4243a1d0bd7710d1201 = ad2D01e289081A9f123014E2B99c42d0();
	require (IPTV_TEMPLATES_PATH . '/' . '/admin/' . 'settings.php');
	header('Location: ../index.php?error=NO_ADMIN');
case 'save':
	foreach (B8a6Ea05EEBC7e2e3503Ea794b1A1ee4::$request['default_output'] as $F26e0f5e26d83039822131fb00fdfe4c => $df67f8d0c65a81280cb0a9829d0342ac) {
		$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `devices` SET `default_output` = \'%d\' WHERE `device_id` = \'%d\'', $df67f8d0c65a81280cb0a9829d0342ac, $F26e0f5e26d83039822131fb00fdfe4c);
	}

	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['settings_saved'];

	foreach (b8a6ea05Eebc7E2E3503Ea794B1a1Ee4::$request as $dac2ee7701c8fb49c631b348fd1038dc => $Ecb0faf5f94eff0e9cc3f9ebfd12db53) {
		shell_exec('sed -i \'/access_log \\/home\\/xtreamcodes/c\\#access_log \\/home\\/xtreamcodes\\/iptv_xtream_codes\\/tmp\\/access.log\\;\' "' . IPTV_PANEL_DIR . 'nginx/conf/nginx.conf' . '"');

		if ($Ecb0faf5f94eff0e9cc3f9ebfd12db53 == 0) {
		}

		system('sudo -u xtreamcodes sudo /home/xtreamcodes/iptv_xtream_codes/nginx/sbin/nginx -s reload');
		$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `settings` SET `%s` = \'%s\' WHERE `id` = 1', $dac2ee7701c8fb49c631b348fd1038dc, $Ecb0faf5f94eff0e9cc3f9ebfd12db53);
		shell_exec('sed -i \'/access_log \\/home\\/xtreamcodes/c\\access_log \\/home\\/xtreamcodes\\/iptv_xtream_codes\\/tmp\\/access.log\\;\' "' . IPTV_PANEL_DIR . 'nginx/conf/nginx.conf' . '"');
	}

	B8a6EA05eebc7E2E3503eA794b1A1eE4::$request['allow_countries'] = json_encode(array_unique(b8A6Ea05EeBc7E2e3503Ea794b1a1eE4::$request['allow_countries']));

	if (!(1 < count(B8A6eA05eEBc7e2e3503eA794B1a1Ee4::$request))) {
	}

}


?> 

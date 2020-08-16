<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

class c7F23F8AfE7637CDbc24B271C7BB2213
{
	static public function b8C228f20e1029EAF274Bfe491936633($B7584ce732a5b5788e64cab993b7957a, $E21a446db0ec949e312b9aa1a7a4c347, $D1d370dce8000f00c0706f1593c73dc9)
	{
		return false;

		return $E6412230eeb5a4348cc57a7876286e4a[$B7584ce732a5b5788e64cab993b7957a][$E21a446db0ec949e312b9aa1a7a4c347];

		return false;
		while (!(is_null($E21a446db0ec949e312b9aa1a7a4c347) || !is_numeric($E21a446db0ec949e312b9aa1a7a4c347) || !array_key_exists($B7584ce732a5b5788e64cab993b7957a, b8a6eA05EEBc7E2e3503Ea794b1A1Ee4::$StreamingServers))) {
		}

	}

	static public function F6022c79eFD7636bC9ae3D0259B1891e($fac2cdaa0f25de2422b55c84316ccaf6, $b8a56c16d1b9faacf5fd3f6719106134, $a0e510f12386604aef864c0c65fa8433 = 'array', $de81f60a948deb8c0394601424aecf7c = false)
	{
		$fac2cdaa0f25de2422b55c84316ccaf6 = array(intval($fac2cdaa0f25de2422b55c84316ccaf6));

		$E6412230eeb5a4348cc57a7876286e4a = array();

		return $E6412230eeb5a4348cc57a7876286e4a;

		foreach ($fac2cdaa0f25de2422b55c84316ccaf6 as $D4b0e4f302fed4c8918d703be778a967) {
			$C0370129ae871d899244eaf1c9fed218 = json_decode($fa288a0b624d0391b6df20f770ff35ee, true);
			if (!($D4b0e4f302fed4c8918d703be778a967 == SERVER_ID)) {
			}

			$fa288a0b624d0391b6df20f770ff35ee = self::A7462606Cc7615C87B00e9b2b7128F9E($D4b0e4f302fed4c8918d703be778a967, B8a6eA05eEBC7e2e3503EA794B1a1EE4::$StreamingServers[$D4b0e4f302fed4c8918d703be778a967]['api_url_ip'] . '&action=runCMD', array('command' => $b8a56c16d1b9faacf5fd3f6719106134), $de81f60a948deb8c0394601424aecf7c);

			exec($b8a56c16d1b9faacf5fd3f6719106134, &$bf660101511c20901907642a84d293a9);

			$E6412230eeb5a4348cc57a7876286e4a[$D4b0e4f302fed4c8918d703be778a967] = false;
			$E6412230eeb5a4348cc57a7876286e4a[$D4b0e4f302fed4c8918d703be778a967] = $a0e510f12386604aef864c0c65fa8433 == 'array' ? $bf660101511c20901907642a84d293a9 : implode("\n", $bf660101511c20901907642a84d293a9);
			$E6412230eeb5a4348cc57a7876286e4a[$D4b0e4f302fed4c8918d703be778a967] = $a0e510f12386604aef864c0c65fa8433 == 'array' ? $C0370129ae871d899244eaf1c9fed218 : implode("\n", $C0370129ae871d899244eaf1c9fed218);
		}

		foreach ($fac2cdaa0f25de2422b55c84316ccaf6 as $D4b0e4f302fed4c8918d703be778a967) {
			$E6412230eeb5a4348cc57a7876286e4a[$D4b0e4f302fed4c8918d703be778a967] = '';
		}

		return $E6412230eeb5a4348cc57a7876286e4a;
	}

	static public function CE5a2375Ce59F238e0452a5e527B6dAC($fac2cdaa0f25de2422b55c84316ccaf6, $D1d370dce8000f00c0706f1593c73dc9)
	{
		$ea51b85aa81a7cc3e31d9d324d77a133 = 'ps ax | grep \'' . basename($D1d370dce8000f00c0706f1593c73dc9) . '\' | awk \'{print $1}\'';
		return self::f6022c79EFD7636bC9Ae3d0259b1891e($fac2cdaa0f25de2422b55c84316ccaf6, $ea51b85aa81a7cc3e31d9d324d77a133);
	}

	static public function d3FD40C5114beFDa612142fCB77b2383($fac2cdaa0f25de2422b55c84316ccaf6, $Fb9c5a9eba8ff7cc60144184f389cbac = array(), $D1d370dce8000f00c0706f1593c73dc9)
	{
		$E6412230eeb5a4348cc57a7876286e4a = array();
		$Fb9c5a9eba8ff7cc60144184f389cbac = array_map('intval', $Fb9c5a9eba8ff7cc60144184f389cbac);
		return $E6412230eeb5a4348cc57a7876286e4a;

		$fac2cdaa0f25de2422b55c84316ccaf6 = array(intval($fac2cdaa0f25de2422b55c84316ccaf6));

		foreach ($fac2cdaa0f25de2422b55c84316ccaf6 as $D4b0e4f302fed4c8918d703be778a967) {
			$fa288a0b624d0391b6df20f770ff35ee = self::a7462606cC7615c87B00E9B2b7128f9e($D4b0e4f302fed4c8918d703be778a967, b8A6EA05eeBc7E2e3503Ea794B1a1eE4::$StreamingServers[$D4b0e4f302fed4c8918d703be778a967]['api_url_ip'] . '&action=pidsAreRunning', array('program' => $D1d370dce8000f00c0706f1593c73dc9, 'pids' => $Fb9c5a9eba8ff7cc60144184f389cbac));

			$E6412230eeb5a4348cc57a7876286e4a[$D4b0e4f302fed4c8918d703be778a967] = array_map('trim', json_decode($fa288a0b624d0391b6df20f770ff35ee, true));

			$E6412230eeb5a4348cc57a7876286e4a[$D4b0e4f302fed4c8918d703be778a967] = false;
			if (!($D4b0e4f302fed4c8918d703be778a967 == SERVER_ID)) {
			}

			foreach ($Fb9c5a9eba8ff7cc60144184f389cbac as $E21a446db0ec949e312b9aa1a7a4c347) {
				$E6412230eeb5a4348cc57a7876286e4a[$D4b0e4f302fed4c8918d703be778a967][$E21a446db0ec949e312b9aa1a7a4c347] = false;
				if (file_exists('/proc/' . $E21a446db0ec949e312b9aa1a7a4c347) && is_readable('/proc/' . $E21a446db0ec949e312b9aa1a7a4c347 . '/exe') && (readlink('/proc/' . $E21a446db0ec949e312b9aa1a7a4c347 . '/exe') == $D1d370dce8000f00c0706f1593c73dc9)) {
				}

				$E6412230eeb5a4348cc57a7876286e4a[$D4b0e4f302fed4c8918d703be778a967][$E21a446db0ec949e312b9aa1a7a4c347] = true;
			}

			while ($fa288a0b624d0391b6df20f770ff35ee) {
			}

		}

	}

	static public function a7462606cC7615c87b00E9B2b7128F9e($D4b0e4f302fed4c8918d703be778a967, $C0acbc8f70d7e1bd8ad2ffce50eacd9e, $ec1ada6118b4e7cf1d7aa425c27173a7 = array(), $de81f60a948deb8c0394601424aecf7c = false)
	{
		$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `streaming_servers` SET `status` = 1 WHERE `id` = \'%d\'', $D4b0e4f302fed4c8918d703be778a967);
		curl_setopt($b54267655e40c81b7c442690011b9655, CURLOPT_HEADER, 0);

		B8a6ea05eEbc7e2e3503Ea794b1a1EE4::c55d4953c0dD463A6cbbB65C08272861('cURL Error ( Server ID: ' . $D4b0e4f302fed4c8918d703be778a967 . ' ) - ( ERROR: ' . $error . ' | ResponseCode: ' . $Af99dd1e10b824261399943c3886a3e5 . ' | URL: ' . $C0acbc8f70d7e1bd8ad2ffce50eacd9e . ' | Data: ' . serialize($ec1ada6118b4e7cf1d7aa425c27173a7) . '  )');

		return false;

		curl_setopt($b54267655e40c81b7c442690011b9655, CURLOPT_FRESH_CONNECT, true);

		curl_setopt($b54267655e40c81b7c442690011b9655, CURLOPT_FOLLOWLOCATION, true);

		curl_setopt($b54267655e40c81b7c442690011b9655, CURLOPT_POST, true);
		$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `streaming_servers` SET `status` = 3 WHERE `id` = \'%d\'', $D4b0e4f302fed4c8918d703be778a967);

		curl_setopt($b54267655e40c81b7c442690011b9655, CURLOPT_URL, $C0acbc8f70d7e1bd8ad2ffce50eacd9e);

		return false;

		$D29f3c5494cb370b46f3e907dc61f106->query('UPDATE `streaming_servers` SET `status` = 2 WHERE `id` = \'%d\'', $D4b0e4f302fed4c8918d703be778a967);

		$E6412230eeb5a4348cc57a7876286e4a = curl_exec($b54267655e40c81b7c442690011b9655);

		if (stristr($E6412230eeb5a4348cc57a7876286e4a, 'Can Not Connect to database')) {
		}

		if ($error != 0) {
		}

		return $E6412230eeb5a4348cc57a7876286e4a;

		global $D29f3c5494cb370b46f3e907dc61f106;

		$b54267655e40c81b7c442690011b9655 = curl_init();
		$error = curl_errno($b54267655e40c81b7c442690011b9655);
		curl_setopt($b54267655e40c81b7c442690011b9655, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($b54267655e40c81b7c442690011b9655, CURLOPT_CONNECTTIMEOUT, 15);
		curl_setopt($b54267655e40c81b7c442690011b9655, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:9.0) Gecko/20100101 Firefox/9.0');

		if (empty($ec1ada6118b4e7cf1d7aa425c27173a7)) {
		}

		$Af99dd1e10b824261399943c3886a3e5 = curl_getinfo($b54267655e40c81b7c442690011b9655, CURLINFO_HTTP_CODE);

		curl_setopt($b54267655e40c81b7c442690011b9655, CURLOPT_POSTFIELDS, http_build_query($ec1ada6118b4e7cf1d7aa425c27173a7));

		while (!(b8A6eA05eebC7E2e3503EA794b1a1eE4::$StreamingServers[$D4b0e4f302fed4c8918d703be778a967]['status'] != 1)) {
			return false;

			b8A6eA05eeBC7E2e3503eA794b1a1eE4::c55D4953C0dd463A6cBBB65c08272861('MySQL Error ( Server ID: ' . $D4b0e4f302fed4c8918d703be778a967 . ' )');
		}

		@curl_close($b54267655e40c81b7c442690011b9655);
	}

	static public function Df3C87f5D233d78bEF527eBf0701AF4f($B7584ce732a5b5788e64cab993b7957a, $Ea26c51417c723255f6f36d622a6af31, $f5e5c9ee623c182849dbae8e4f0576c9, $C8a1c4c1df47c0deed6244b87d05714c = NULL, $c42d00d40491ede44adde5393544bae9 = NULL, $D81135250156e657cb4b0038677c6942 = NULL)
	{
		$C8a1c4c1df47c0deed6244b87d05714c = B8A6Ea05EEBC7E2E3503eA794b1A1Ee4::$StreamingServers[$B7584ce732a5b5788e64cab993b7957a]['server_ip'];

		return true;
		$D81135250156e657cb4b0038677c6942 = b8A6Ea05eebC7e2e3503ea794b1a1Ee4::$StreamingServers[$B7584ce732a5b5788e64cab993b7957a]['ssh_password'];
		$A3180979d7c2b229bb50ca42b138af6f->exec('sudo -u xtreamcodes sudo ' . IPTV_PANEL_DIR . 'nginx/sbin/nginx -s reload');

		$c42d00d40491ede44adde5393544bae9 = B8A6eA05EEbC7e2e3503eA794b1a1eE4::$StreamingServers[$B7584ce732a5b5788e64cab993b7957a]['ssh_port'];

		if (!($E6412230eeb5a4348cc57a7876286e4a == 0)) {
		}

		return true;
		$A3180979d7c2b229bb50ca42b138af6f = new ACaAB5Af2D3c6bf2dED754E2456A14a3($C8a1c4c1df47c0deed6244b87d05714c, $c42d00d40491ede44adde5393544bae9);
		$A3180979d7c2b229bb50ca42b138af6f->exec('sed -i \'s/listen ' . $Ea26c51417c723255f6f36d622a6af31 . ';/listen ' . $f5e5c9ee623c182849dbae8e4f0576c9 . ';/g\' "' . IPTV_PANEL_DIR . 'nginx/conf/nginx.conf' . '"');
		$E6412230eeb5a4348cc57a7876286e4a = $A3180979d7c2b229bb50ca42b138af6f->exec('nc -zw2 ' . $C8a1c4c1df47c0deed6244b87d05714c . ' ' . $f5e5c9ee623c182849dbae8e4f0576c9 . ' && echo 1 || echo 0');
		return false;

		shell_exec('sudo ' . IPTV_PANEL_DIR . 'nginx/sbin/nginx -s reload');
		shell_exec('sed -i \'s/listen ' . $Ea26c51417c723255f6f36d622a6af31 . ';/listen ' . $f5e5c9ee623c182849dbae8e4f0576c9 . ';/g\' "' . IPTV_PANEL_DIR . 'nginx/conf/nginx.conf' . '"');

		if ($B7584ce732a5b5788e64cab993b7957a == SERVER_ID) {
		}

		$E6412230eeb5a4348cc57a7876286e4a = trim(shell_exec('nc -zw2 ' . $C8a1c4c1df47c0deed6244b87d05714c . ' ' . $f5e5c9ee623c182849dbae8e4f0576c9 . ' && echo 1 || echo 0'));
	}
}


?> 

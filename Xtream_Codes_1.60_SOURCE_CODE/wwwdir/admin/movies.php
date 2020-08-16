<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

$E462799f3069e7fcda3f70674d9b5915 = aA36a3fa6e305e45763ca0722DdFa825('movie', 'order', 'ASC', true);

switch ($b8980526936694b2cd4cf6c7f8c80396) {
case 'delete':
	$c2451e876e237dd5e001acccde7cae01 = intval(B8A6EA05eebC7e2e3503eA794B1a1EE4::$request['id']);

	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['movie_deleted'];
	$abe369d6144f189683dd877eb213f272->c2202ddC676431FCdC5fDB8C1DF6aA6A();
	$abe369d6144f189683dd877eb213f272 = new ef4bC8281856e815Abefa11052Cad2c6($c2451e876e237dd5e001acccde7cae01);
case 'stop':
	define('STOP_STREAM', true);
	$C8583591a971fbe9d0ca3b15ab9931a0 = new ef4bc8281856E815abEfa11052cAd2c6($c2451e876e237dd5e001acccde7cae01, $D4b0e4f302fed4c8918d703be778a967);
	$D4b0e4f302fed4c8918d703be778a967 = (!empty(b8a6EA05eeBc7E2e3503Ea794b1A1EE4::$request['server_id']) && array_key_exists(b8a6EA05EeBC7e2E3503eA794b1A1eE4::$request['server_id'], B8A6EA05eebc7e2E3503EA794b1a1eE4::$StreamingServers) ? intval(B8A6EA05EeBC7e2e3503eA794B1A1EE4::$request['server_id']) : NULL);

	$C8583591a971fbe9d0ca3b15ab9931a0->B73Aa3Bb7c6C4c76d0879BBDB53e15cD();
	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['movie_stop_request_sent'];

	$c2451e876e237dd5e001acccde7cae01 = intval(B8A6EA05eEbC7e2e3503Ea794b1a1Ee4::$request['id']);

	if (empty(B8A6EA05eebc7e2E3503EA794b1a1EE4::$request['id'])) {
	}

case 'open_movie':
	$Da88f16fe9e174bc837e9bc400f48c0e = b8A6Ea05EEBC7E2e3503EA794b1a1Ee4::$request['stream'];
	$D4b0e4f302fed4c8918d703be778a967 = intval(b8A6Ea05eebC7E2e3503Ea794B1a1Ee4::$request['server_id']);
	if (!(!empty(b8A6Ea05eebc7E2E3503ea794b1A1ee4::$request['stream']) && !empty(b8A6Ea05EEbC7e2e3503EA794B1a1eE4::$request['server_id']) && array_key_exists(b8a6ea05EEbc7e2e3503EA794B1A1ee4::$request['server_id'], b8A6eA05eEbC7e2e3503EA794b1A1EE4::$StreamingServers))) {
	}

	echo $E6412230eeb5a4348cc57a7876286e4a;

	$C63435555732fef7929084e252ed20b8 = B8a6eA05eEbC7e2E3503Ea794b1a1Ee4::$StreamingServers[$D4b0e4f302fed4c8918d703be778a967]['site_url'] . 'streaming/admin_movie.php?password=' . b8a6eA05eeBc7e2E3503EA794b1A1eE4::$settings['live_streaming_pass'] . '&stream=' . $Da88f16fe9e174bc837e9bc400f48c0e;
	$E6412230eeb5a4348cc57a7876286e4a = "\r\n" . '                <center>' . "\r\n" . '                <embed ' . "\r\n" . '                        type="application/x-vlc-plugin" ' . "\r\n" . '                        width="980" ' . "\r\n" . '                        height="630" ' . "\r\n" . '                        target="' . $C63435555732fef7929084e252ed20b8 . '" />' . "\r\n" . '                </center>' . "\r\n" . '                ';
	exit();
case 'stop_all':
	foreach ($bf3cd6eed406072de08303c780a1f2cb as $E5ad974e47e24d22fab0e7e4afa6fe74) {
		ef4bC8281856E815aBEfA11052cAD2c6::da17C8C79048F7a15c9F4D54669F4C07('stop', 'movie', 1, $E5ad974e47e24d22fab0e7e4afa6fe74['id'], $E5ad974e47e24d22fab0e7e4afa6fe74['server_id']);
	}

	$bf3cd6eed406072de08303c780a1f2cb = $D29f3c5494cb370b46f3e907dc61f106->b865B38eb81F98b969e0ac143f701035();
	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['stop_movie_request_sent_all'];
	$D29f3c5494cb370b46f3e907dc61f106->query("\r\n" . '                    SELECT t1.id,t2.server_id FROM `streams` t1' . "\r\n" . '                    INNER JOIN  `streams_sys` t2 ON t2.stream_id = t1.id AND t2.to_analyze = 1' . "\r\n" . '                    WHERE t1.`type` = 2');
case 'start_all':
	$D29f3c5494cb370b46f3e907dc61f106->query("\r\n" . '                    SELECT t1.id,t2.server_id FROM `streams` t1' . "\r\n" . '                    INNER JOIN  `streams_sys` t2 ON t2.stream_id = t1.id AND t2.to_analyze = 0 AND ISNULL(t2.pid)' . "\r\n" . '                    WHERE t1.`type` = 2');

	foreach ($bf3cd6eed406072de08303c780a1f2cb as $E5ad974e47e24d22fab0e7e4afa6fe74) {
		Ef4bc8281856e815aBEFA11052caD2c6::dA17c8C79048f7A15C9f4d54669F4c07('start', 'movie', 0, $E5ad974e47e24d22fab0e7e4afa6fe74['id'], $E5ad974e47e24d22fab0e7e4afa6fe74['server_id']);
	}

	$bf3cd6eed406072de08303c780a1f2cb = $D29f3c5494cb370b46f3e907dc61f106->b865b38Eb81f98b969e0AC143F701035();
	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['start_movie_request_sent_all'];
case 'start':
	$c2451e876e237dd5e001acccde7cae01 = intval(b8a6EA05EEbc7e2E3503EA794B1a1ee4::$request['id']);
	$D4b0e4f302fed4c8918d703be778a967 = (!empty(B8A6ea05eeBc7E2e3503eA794b1a1EE4::$request['server_id']) && array_key_exists(B8a6ea05eEbc7e2E3503ea794B1A1Ee4::$request['server_id'], B8A6EA05EeBC7E2e3503Ea794B1a1eE4::$StreamingServers) ? intval(B8a6ea05eebc7E2e3503eA794B1a1eE4::$request['server_id']) : NULL);
	Ef4Bc8281856E815Abefa11052Cad2c6::dA17C8c79048f7A15C9f4d54669f4C07('start', 'movie', 0, $c2451e876e237dd5e001acccde7cae01, $D4b0e4f302fed4c8918d703be778a967);
	$B55f78703213d1595283266f835ca867 = $f9a8823715bcb54e8069e0086da240b2['movie_start_request_sent'];
default:
	require (IPTV_TEMPLATES_PATH . '/' . 'footer.php');

	require ('../init.php');

	header('Location: ../index.php?error=NO_ADMIN');

	require (IPTV_TEMPLATES_PATH . '/' . '/admin/' . 'movies.php');
	session_start();
	$Fce20624c9b6567a7a8c441a4651444d = $f9a8823715bcb54e8069e0086da240b2['add_movies'];


	exit(0);

	require (IPTV_TEMPLATES_PATH . '/' . 'header_admin.php');
default:
	while (!empty($E462799f3069e7fcda3f70674d9b5915)) {
	}

}

?> 

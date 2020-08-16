<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

echo $f9a8823715bcb54e8069e0086da240b2['stop_all_movies'];

echo $f9a8823715bcb54e8069e0086da240b2['start_all_movies'];

echo '</div>' . "\r\n\r\n\t\t\t\t" . ' ';

echo '</a></td>' . "\r\n" . '                                    </tr>                                                                                                                            ' . "\r\n" . '                                </tbody>' . "\r\n" . '                            </table>' . "\r\n" . '                    </center>' . "\r\n" . '                    ' . "\r\n" . '                <div id="dialogDiv" style="display: none;">';

foreach ($E462799f3069e7fcda3f70674d9b5915['streams'] as $Da88f16fe9e174bc837e9bc400f48c0e) {
	echo '<th>' . $f9a8823715bcb54e8069e0086da240b2['view_output'] . '</th>';

	echo '<a href=\'edit_movie.php?movie_id=' . $bf3cd6eed406072de08303c780a1f2cb['id'] . '\'" class="button_3">' . $f9a8823715bcb54e8069e0086da240b2['edit_movie'] . '</a> <a onclick="return confirm (\'' . $f9a8823715bcb54e8069e0086da240b2['delete_movie_warn'] . '\');" href=\'movies.php?action=delete&id=' . $bf3cd6eed406072de08303c780a1f2cb['id'] . '\'" class="button_3">' . $f9a8823715bcb54e8069e0086da240b2['delete_movie'] . '</a>';

	echo '<th>' . $f9a8823715bcb54e8069e0086da240b2['options'] . '</th>';
	echo '</tr>';

	if (is_null($bf3cd6eed406072de08303c780a1f2cb['category_name'])) {
	}

	echo '<th>' . $f9a8823715bcb54e8069e0086da240b2['server'] . '</th>';

	echo '</table>';

	$A0930d5721bc3d94fa85fcc5ccb411d2 = false;

	echo '<tr>';

	foreach ($Da88f16fe9e174bc837e9bc400f48c0e['servers'] as $D4b0e4f302fed4c8918d703be778a967 => $f3f1721e6abbcfbc622757090a8442e3) {
		$D840d6909aa490040f984cd80c572c4d = $c454b1e8685cc295ea89daeb46b98666 = $E2d499e267dddb7f7c9d2e0779e9962c = '<img src=\'../templates/images/mini_nok.png\' />';
		echo '<td bgcolor="#' . $F02bf1ed2db1d0e252895a299e86aed5 . '">' . $f3f1721e6abbcfbc622757090a8442e3['server_name'] . '</td>';

		echo '                                                ' . "\r\n" . '                              </tr>' . "\r\n" . '                                                ';

		echo '<a onclick="return confirm (\'' . $f9a8823715bcb54e8069e0086da240b2['stop_movie_process'] . '\');" href="movies.php?action=stop&id=' . $bf3cd6eed406072de08303c780a1f2cb['id'] . '&server_id=' . $f3f1721e6abbcfbc622757090a8442e3['server_id'] . '" class="table-icon stop"></a>';

		echo '<td bgcolor="#' . $F02bf1ed2db1d0e252895a299e86aed5 . '">';

		echo '<td bgcolor="#' . $F02bf1ed2db1d0e252895a299e86aed5 . '">' . $c454b1e8685cc295ea89daeb46b98666 . '</td>';

		switch ((int) $f3f1721e6abbcfbc622757090a8442e3['stream_status']) {
		case 1:
			$F02bf1ed2db1d0e252895a299e86aed5 = 'FFFFCC';
			$B1e4ceb9a0be61ba6adfe6cb7ab3efc3 = '<img src=\'../templates/images/warning.png\' /><br />' . $f9a8823715bcb54e8069e0086da240b2['bad_movie'];
		case 0:
			$B1e4ceb9a0be61ba6adfe6cb7ab3efc3 = '<img src=\'../templates/images/dots/stopped.png\' /><br />' . $f9a8823715bcb54e8069e0086da240b2['awaiting_user_action'];
			$D840d6909aa490040f984cd80c572c4d = '<img src=\'../templates/images/mini_ok.png\' /><br />' . $Ac2e87d08ef62c73afc14f02bd8bb316['codecs']['audio'];

			$F02bf1ed2db1d0e252895a299e86aed5 = 'FFFFFF';

			$E65f5a2ab14f775ac83861f9a5dcdf37 = $f3f1721e6abbcfbc622757090a8442e3['bitrate'] . ' k';

			$F02bf1ed2db1d0e252895a299e86aed5 = 'D1FFC2';

			$c87f90b2ad405f0d21677f417deedbd3 = 'button_1';

			$E2d499e267dddb7f7c9d2e0779e9962c = $Ac2e87d08ef62c73afc14f02bd8bb316['duration'];

			$c454b1e8685cc295ea89daeb46b98666 = '<img src=\'../templates/images/mini_ok.png\' /><br />' . $Ac2e87d08ef62c73afc14f02bd8bb316['codecs']['video'];
			if (!(isset($Ac2e87d08ef62c73afc14f02bd8bb316['codecs']['video']) && !empty($Ac2e87d08ef62c73afc14f02bd8bb316['codecs']['video']))) {
			}

			$d396b9261d55ba8990e0c5d69f6fa2b4 = '<a onclick="ajax_request_dialog(\'movies.php?action=open_movie&stream=' . $bf3cd6eed406072de08303c780a1f2cb['id'] . '.' . $bf3cd6eed406072de08303c780a1f2cb['container_extension'] . '&server_id=' . $f3f1721e6abbcfbc622757090a8442e3['server_id'] . '\',\'' . $f9a8823715bcb54e8069e0086da240b2['live_streaming_test'] . '\',\'black\')" class="button_1">' . $f9a8823715bcb54e8069e0086da240b2['view'] . '</a>';

			$D840d6909aa490040f984cd80c572c4d = $c454b1e8685cc295ea89daeb46b98666 = $E2d499e267dddb7f7c9d2e0779e9962c = '-';

			$Ac2e87d08ef62c73afc14f02bd8bb316 = json_decode($f3f1721e6abbcfbc622757090a8442e3['stream_info'], true);
			if (!(isset($Ac2e87d08ef62c73afc14f02bd8bb316['codecs']['audio']) && !empty($Ac2e87d08ef62c73afc14f02bd8bb316['codecs']['audio']))) {
			}

			$A0930d5721bc3d94fa85fcc5ccb411d2 = true;
			$B1e4ceb9a0be61ba6adfe6cb7ab3efc3 = '<img src=\'../templates/images/ok.png\' />';

			if (empty($f3f1721e6abbcfbc622757090a8442e3['bitrate'])) {
			}

		}

		(int) $f3f1721e6abbcfbc622757090a8442e3['stream_status'];

		echo '<td bgcolor="#' . $F02bf1ed2db1d0e252895a299e86aed5 . '">';

		echo $d396b9261d55ba8990e0c5d69f6fa2b4;

		echo '<td bgcolor="#' . $F02bf1ed2db1d0e252895a299e86aed5 . '">' . $E2d499e267dddb7f7c9d2e0779e9962c . '</td>';

		$c87f90b2ad405f0d21677f417deedbd3 = 'button_4';

		echo '<td bgcolor="#' . $F02bf1ed2db1d0e252895a299e86aed5 . '">' . $bf3cd6eed406072de08303c780a1f2cb['stream_display_name'] . '</td>';

		$B1e4ceb9a0be61ba6adfe6cb7ab3efc3 = '<img width="150" src=\'../templates/images/ajax_loader.gif\' /><br />' . $f9a8823715bcb54e8069e0086da240b2['in_progress'];
		echo '<a href="movies.php?action=start&id=' . $bf3cd6eed406072de08303c780a1f2cb['id'] . '&server_id=' . $f3f1721e6abbcfbc622757090a8442e3['server_id'] . '" class="table-icon play"></a>';

		echo '<a onclick="return confirm (\'' . $f9a8823715bcb54e8069e0086da240b2['stop_movie_process'] . '\');" href="movies.php?action=stop&id=' . $bf3cd6eed406072de08303c780a1f2cb['id'] . '&server_id=' . $f3f1721e6abbcfbc622757090a8442e3['server_id'] . '" class="table-icon stop"></a>';

		echo '<tr>';

		echo '</td>';

		echo '<td bgcolor="#' . $F02bf1ed2db1d0e252895a299e86aed5 . '">' . $E65f5a2ab14f775ac83861f9a5dcdf37 . '</td>';
		$D840d6909aa490040f984cd80c572c4d = $c454b1e8685cc295ea89daeb46b98666 = $E2d499e267dddb7f7c9d2e0779e9962c = '<img src=\'../templates/images/mini_loading.gif\' />';

		$F02bf1ed2db1d0e252895a299e86aed5 = 'FFD699';

		if ($f3f1721e6abbcfbc622757090a8442e3['to_analyze'] == 1) {
		}


		$d396b9261d55ba8990e0c5d69f6fa2b4 = '<a class="button_4">' . $f9a8823715bcb54e8069e0086da240b2['view'] . '</a>';

		echo '<td bgcolor="#' . $F02bf1ed2db1d0e252895a299e86aed5 . '">' . $D840d6909aa490040f984cd80c572c4d . '</td>';

		echo '<a onclick="return confirm (\'' . $f9a8823715bcb54e8069e0086da240b2['restart_movie_conf'] . '\');" href="movies.php?action=start&id=' . $bf3cd6eed406072de08303c780a1f2cb['id'] . '&server_id=' . $f3f1721e6abbcfbc622757090a8442e3['server_id'] . '" class="table-icon restart"></a>';

		if (array_key_exists($D4b0e4f302fed4c8918d703be778a967, B8a6eA05eebC7E2E3503EA794B1A1Ee4::$StreamingServers)) {
		}

		echo '<td bgcolor="#' . $F02bf1ed2db1d0e252895a299e86aed5 . '">' . $f3f1721e6abbcfbc622757090a8442e3['online_clients'] . '</td>';
		echo '<td bgcolor="#' . $F02bf1ed2db1d0e252895a299e86aed5 . '">' . $B1e4ceb9a0be61ba6adfe6cb7ab3efc3 . '</td>';

		echo '</td>';
	}

	echo '                                    </article>' . "\r\n" . '                                    <br />' . "\r\n" . '                                    ';
	echo '<th>' . $f9a8823715bcb54e8069e0086da240b2['movie_length'] . '</th>';

	echo '<th>' . $f9a8823715bcb54e8069e0086da240b2['audio_codec'] . '</th>';

	if ($A0930d5721bc3d94fa85fcc5ccb411d2) {
	}

	echo '<th>' . $f9a8823715bcb54e8069e0086da240b2['movie_name'] . '</th>';

	echo '<th>' . $f9a8823715bcb54e8069e0086da240b2['bitrate'] . '</th>';
	echo '<a style="float: left;" href="#" class="tooltip-bottom" data-tooltip="' . $bf3cd6eed406072de08303c780a1f2cb['notes'] . '"><img src=\'../templates/images/notes.png\'></a>';
	echo '<th>' . $f9a8823715bcb54e8069e0086da240b2['status'] . '</th>';
	echo $bf3cd6eed406072de08303c780a1f2cb['stream_display_name'];
	echo '</center>';
	echo '<th>' . $f9a8823715bcb54e8069e0086da240b2['video_codec'] . '</th>';

	echo ' <font color="#FFC266">[ ' . $bf3cd6eed406072de08303c780a1f2cb['category_name'] . ' ]</font>';
	echo '<a href=\'movies.php?action=start&id=' . $bf3cd6eed406072de08303c780a1f2cb['id'] . '\'" class="button_2">' . $f9a8823715bcb54e8069e0086da240b2['prepare_movie'] . '</a><br />';
	echo '<th>' . $f9a8823715bcb54e8069e0086da240b2['online_clients'] . '</th>';
	echo '</h3></header>';

	$E65f5a2ab14f775ac83861f9a5dcdf37 = 'N/A';
	$bf3cd6eed406072de08303c780a1f2cb = $Da88f16fe9e174bc837e9bc400f48c0e['info'];

	$c5222e916a51f4aca118b634c49ce270 = '<img src=\'../templates/images/dots/stopped.png\' />';
	echo '<center>';
	echo '<table id="tfhover" class="tftable" border="0" style="width:100%;text-align: center;" >';
	echo '<article class="module width_full"><header><h3 class="tabs_involved">';
}

echo $f9a8823715bcb54e8069e0086da240b2['loading'];
echo '</a></td>' . "\r\n" . '                                        <td><a onclick="return confirm(\'';
echo $f9a8823715bcb54e8069e0086da240b2['stop_encode_all_warn'];

echo $f9a8823715bcb54e8069e0086da240b2['encode_all_warn'];
echo '\');" href="movies.php?action=start_all" class="button_2">';

echo '                <center>' . "\r\n" . '                        <table>' . "\r\n" . '                                <tbody>' . "\r\n" . '                                    <tr>' . "\r\n" . '                                        <td><a onclick="return confirm(\'';

echo B4837145a77339a6438170Ed539323e2('ok', $B55f78703213d1595283266f835ca867);
echo b4837145A77339a6438170eD539323E2('info', $D0d3ea9a9372bfbdc48a1723ede579b6);

echo b4837145a77339A6438170Ed539323e2('error', $Fce20624c9b6567a7a8c441a4651444d);
if (empty($Ccc01a49a480ad4b98dc48415a5e29fa)) {
}

echo b4837145a77339A6438170Ed539323e2('warning', $Ccc01a49a480ad4b98dc48415a5e29fa);
echo '     ';
echo '\');" href="movies.php?action=stop_all" class="button_2">';

while (empty($B55f78703213d1595283266f835ca867)) {
}

if (empty($D0d3ea9a9372bfbdc48a1723ede579b6)) {
}

echo '            ';

?> 

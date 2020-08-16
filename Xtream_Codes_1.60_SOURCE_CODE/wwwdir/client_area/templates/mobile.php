<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

echo B8A6ea05Eebc7e2e3503EA794B1A1ee4::$settings['server_name'];
echo '</title>' . "\n\t" . '<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>' . "\n\t" . '<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.css" />' . "\n\t" . '<link rel="stylesheet" href="./templates/css/main.css">' . "\n" . '    <script src="//ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.js"></script>' . "\n" . '   <link rel="stylesheet" href="./templates/css/sidemenu.css">' . "\n" . '   <script src="./templates/js/sidemenu.js"></script>' . "\n" . '    <script src="./templates/js/stay_standalone.js" type="text/javascript"></script>' . "\n" . '</head>' . "\n" . '<body>' . "\n";
switch ($f579c7685240ebdcfbfd66b461ed4599) {
case 'live':
	echo '</h1>' . "\n" . '      </div>' . "\n" . '      <div data-role="main" class="ui-content">' . "\n" . '        <p>Welcome <b>';

	foreach ($d31155e125dc0ceb1a8fcbe1611205cd as $d56402e625d92174f460d8f79527097b) {
		echo '<li><a href="mobile.php?type=live&live_category_id=' . $d56402e625d92174f460d8f79527097b['id'] . '" class="ui-btn ui-btn-icon-left">' . $d56402e625d92174f460d8f79527097b['category_name'] . ' (' . $d56402e625d92174f460d8f79527097b['total_movies'] . ')</a></li>';
	}

	foreach ($cfb966d30ac3fe54c306dbbb20051e9a['streams'] as $f5bae08433fe92c11e58751feada85e2) {
		$A5f4c44cc29cf8e18b4ff540e79fbe43 = '';

		echo '<div data-role="popup" data-position-to="window" id="' . $f5bae08433fe92c11e58751feada85e2['stream_display_name'] . '" data-theme="b">' . "\n" . '</div';
		echo '<div data-role="header">' . "\n";
		echo '<h1>TV Guide ' . $f5bae08433fe92c11e58751feada85e2['stream_display_name'] . '</h1></div>' . "\n";

		$D6cc74b0166440ae660eb91330b40c5d = 0;

		$C63435555732fef7929084e252ed20b8 = b8A6EA05eebc7e2e3503Ea794B1a1eE4::$StreamingServers[SERVER_ID]['site_url'] . $f5bae08433fe92c11e58751feada85e2['type_output'] . '/' . $c83b7d347a6bc7f5f0e3313147e88ecc->member_info['username'] . '/' . $c83b7d347a6bc7f5f0e3313147e88ecc->member_info['password'] . '/' . $f5bae08433fe92c11e58751feada85e2['id'] . '.m3u8';

		$A3da10c4eef7f536d3b783445cc1a42b = BA3b8252d9C8A0e734F8987990465d4F(bA3b8252d9c8A0e734F8987990465d4F($A27166ce89adbd4d1ecc779439b54c3e, 'epg_id', $f5bae08433fe92c11e58751feada85e2['epg_id']), 'channel_id', $f5bae08433fe92c11e58751feada85e2['channel_id']);

		echo $Ce3d5be6b3ed0a4ab79ed0ec19200a5c;

		echo '</a></li>';
		echo '<img src="./templates/logos/defaultlogo.png" class="ui-li-thumb" />' . "\n";
		echo '<a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>' . "\n" . '</div>';
		echo '<li><a href="' . $C63435555732fef7929084e252ed20b8 . '" data-ajax="false">' . "\n";

		echo '<p class="epgpos" ><a href="#' . $f5bae08433fe92c11e58751feada85e2['stream_display_name'] . '" data-rel="popup"> ' . $A5f4c44cc29cf8e18b4ff540e79fbe43 . ' </a></p>' . "\n";


		if ($_SESSION['desktop_mode'] == 1) {
		}

		$Ce3d5be6b3ed0a4ab79ed0ec19200a5c = '';
		echo '<img src="' . $f5bae08433fe92c11e58751feada85e2['stream_icon'] . '" class="ui-li-thumb" />' . "\n";
		echo '<h2>' . $f5bae08433fe92c11e58751feada85e2['stream_display_name'] . '</h2>' . "\n";

		foreach ($A3da10c4eef7f536d3b783445cc1a42b as $ad1d5420d0cc06b82efbfd26287ba52c) {
			$B93f5250a2e921968a32367225267b24 = ' (+' . f305999b96e33aA4A8DD91a5939aE634($ad1d5420d0cc06b82efbfd26287ba52c['end'] - $ad1d5420d0cc06b82efbfd26287ba52c['start']);

			$D6cc74b0166440ae660eb91330b40c5d++;

			$Ce3d5be6b3ed0a4ab79ed0ec19200a5c .= '<li><u>Description:</u> ' . preg_replace('#<[^>]+>#', '\\n', base64_decode($ad1d5420d0cc06b82efbfd26287ba52c['description'])) . '</li></ul>';
			$A5f4c44cc29cf8e18b4ff540e79fbe43 = date('H:i', $ad1d5420d0cc06b82efbfd26287ba52c['start']) . ' - ' . date('H:i', $ad1d5420d0cc06b82efbfd26287ba52c['end']) . ' ' . base64_decode($ad1d5420d0cc06b82efbfd26287ba52c['title']);

			$B93f5250a2e921968a32367225267b24 = ' (+' . f305999B96E33aA4A8Dd91a5939AE634($ad1d5420d0cc06b82efbfd26287ba52c['end'] - time());

			$Ce3d5be6b3ed0a4ab79ed0ec19200a5c .= '<ul><li><b>' . date('H:i', $ad1d5420d0cc06b82efbfd26287ba52c['start']) . ' - ' . date('H:i', $ad1d5420d0cc06b82efbfd26287ba52c['end']) . $B93f5250a2e921968a32367225267b24 . ')</b></li>' . "\n";
			$Ce3d5be6b3ed0a4ab79ed0ec19200a5c .= '<li><u>Title:</u> ' . base64_decode($ad1d5420d0cc06b82efbfd26287ba52c['title']) . '</li>' . "\n";
			if (($ad1d5420d0cc06b82efbfd26287ba52c['start'] <= time()) && (time() <= $ad1d5420d0cc06b82efbfd26287ba52c['end'])) {
			}

		}

		echo '<li><a href="playvideo.php?id=' . $f5bae08433fe92c11e58751feada85e2['id'] . '" data-ajax="false" data-transition="flip">' . "\n";
	}

	echo '<b>' . $f9a8823715bcb54e8069e0086da240b2['unlimited'] . '</b></font>';

	echo '<div data-role="page" data-theme="b" id="vod"  class="my-page">' . "\n" . '    ' . "\n" . '    <div data-role="header" data-position="fixed">' . "\n" . '    ' . "\t\t" . '<h1><img src="./templates/webapp/header.png" /></h1>' . "\n" . '    ' . "\t\t" . '<a href="#left-panel" data-theme="b" data-icon="bars" data-iconpos="notext" data-shadow="false" data-iconshadow="false" class="ui-icon-nodisc">Open left panel</a>' . "\n" . '    ' . "\t\t" . '<a href="#" data-role="button" data-icon="eye" data-iconpos="notext" data-theme="b" data-shadow="false" data-iconshadow="false" class="ui-icon-nodisc" onclick="launchFullscreen(document.documentElement); return false" rel="external"></a>' . "\n\t\t\t\t" . '<div data-role="navbar">' . "\n\t\t\t\t\t" . '<ul>' . "\n\t\t\t\t\t\t" . '<li><a href="mobile.php?type=live" data-transition="fade" style="border-radius: 10px 10px 0px 0px; max-width: 300px; margin-left: auto;" > <img style="opacity: 0.4;"  src="templates/webapp/watch-tv-icon.png" width="32" /><img style="opacity: 0.4;"  src="templates/webapp/LIVETV.png" width="90" /></a></li>' . "\n\t\t\t\t\t\t" . '<li><a href="mobile.php?type=vod"  data-transition="fade" style="border-radius: 10px 10px 0px 0px; max-width: 300px; " > <img src="templates/webapp/VOD.png" width="51" /><img src="templates/webapp/movie-icon.png" width="32" /></a></li>' . "\n\t\t\t\t\t\n\t\n\t\t\t\t\t\t\n\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t" . '            <center>' . "\n\t\t\t\t\t" . '<div  style="border-width: 2px;' . "\n\t\t\t\t\t\t\t\t" . 'border-style: dashed;' . "\n\t\t\t\t\t\t\t\t" . 'border-color: rgb(39, 39, 39);">' . "\n\t\t\t\t\t\t";

	echo $f9a8823715bcb54e8069e0086da240b2['close'];

	echo '</a>' . "\n" . '    ' . "\t\t" . '</li>' . "\n\n" . '      ';

	echo $f9a8823715bcb54e8069e0086da240b2['account_information'];

	echo $f9a8823715bcb54e8069e0086da240b2['account_info'];

	echo '<font color=\'purple\'><b>' . date('d/m/Y H:i', $c83b7d347a6bc7f5f0e3313147e88ecc->member_info['exp_date']) . '</b></font>';

	$cfb966d30ac3fe54c306dbbb20051e9a = B3f724c7fF91e8207B59B52E6be913FC($c83b7d347a6bc7f5f0e3313147e88ecc->member_info['id'], 'live', $bc46d156d79a6094645f11a1aad481eb);
	echo '</a>' . "\n" . '    ' . "\t\t" . '</li>' . "\n" . '    ' . "\t\t" . '<li>' . "\n" . '    ' . "\t\t" . '  <a href="mobile.php?action=logout" data-rel="close" data-ajax="false" class="ui-btn ui-btn-icon-left ui-icon-delete">';

	echo '        </ul>' . "\n" . '    </div><!-- /content -->' . "\n" . '    ' . "\n" . '    ' . "\n" . '    <div data-role="panel" id="left-panel"  data-theme="b" >' . "\n" . '    <ul data-role="none" data-theme="b" data-divider-theme="a" style="margin-top:-16px;" class="nav-search">' . "\n" . '    ' . "\t\t" . '<li>' . "\n" . '    ' . "\t\t" . '  <a href="#accountInfo" data-rel="popup" data-position-to="window" data-transition="fade" class="ui-btn ui-btn-icon-left ui-icon-user">';

	echo $f9a8823715bcb54e8069e0086da240b2['search_channels'];

	echo $c83b7d347a6bc7f5f0e3313147e88ecc->member_info['username'];

	echo $f9a8823715bcb54e8069e0086da240b2['expire_date'];

	$A4891b3340053d1b4c93b079a7fc5e69 = f6acbdf515C1e5f84c3209c7fAA09641('movie', true);

	echo '<li><a href="mobile.php?type=live" class="ui-btn ui-btn-icon-left">All</a></li>';

	echo '</a>' . "\n" . '      <div data-role="header">' . "\n" . '        <h1>';
	echo '" class="channels">' . "\n" . '           ';

	echo '        </p>' . "\n" . '        ' . "\n" . '       </div>' . "\n" . '    </div>' . "\n" . '      <div data-role="footer">' . "\n" . '        <h1><a href="http://www.xtream-codes.com"><img src="./templates/webapp/footer.png"></a> </h1>' . "\n" . '      </div>' . "\n" . '</div><!-- /page -->' . "\n";
	echo '</b> </p>' . "\n\n" . '        <p>';
	echo $f9a8823715bcb54e8069e0086da240b2['logout'];

	if (empty($d31155e125dc0ceb1a8fcbe1611205cd)) {
	}

	if (is_null($c83b7d347a6bc7f5f0e3313147e88ecc->member_info['exp_date'])) {
	}

	echo ': ' . "\n" . '        ';

	echo "\t\t\t\t" . '</div>' . "\n\t\t\t\t" . '</div><!-- /navbar -->' . "\n\t\t\t" . '</center>' . "\n\t" . '</div><!-- /header -->' . "\n\t\n" . '    ' . "\t\n" . '    ' . "\t\n" . '    <div role="main" class="ui-content">' . "\n" . '       <ul data-role="listview" data-inset="true" data-filter="true" data-filter-placeholder="';
	echo '    </ul>  ' . "\n" . '    ' . "\n" . '        </div><!-- /panel -->' . "\n" . '    ' . "\n" . '    <!-- POPUPS -->' . "\n" . '    ' . "\n" . '    <div data-role="popup" id="accountInfo" data-theme="b">' . "\n" . '      <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-right">';
case 'vod':
	echo '</b> </p>' . "\n" . '        <p>';

	echo "\t\t\t\t" . '</div>' . "\n\t\t\t\t" . '</div><!-- /navbar -->' . "\n\t\t\t" . '</center>' . "\n\t" . '</div><!-- /header -->' . "\n\t\n" . '    ' . "\t\n" . '    ' . "\t\n" . '    <div role="main" class="ui-content">' . "\n" . '       <ul data-role="listview" data-inset="true" data-filter="true" data-filter-placeholder="';
	echo $f9a8823715bcb54e8069e0086da240b2['search_channels'];

	echo $f9a8823715bcb54e8069e0086da240b2['expire_date'];

	echo '</a>' . "\n" . '    ' . "\t\t" . '</li>' . "\n" . '            ' . "\n" . '            ';

	echo "\t\n" . '            ' . "\n" . '            ?>' . "\n" . '    </ul>  ' . "\n" . '    ' . "\n" . '        </div><!-- /panel -->' . "\n" . '    ' . "\n" . '    <!-- POPUPS -->' . "\n" . '    ' . "\n" . '    <div data-role="popup" id="accountInfo" data-theme="b">' . "\n" . '      <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-right">';

	echo '        </p>' . "\n" . '        ' . "\n" . '       </div>' . "\n" . '    </div>' . "\n" . '      <div data-role="footer">' . "\n" . '        <h1><a href="http://www.xtream-codes.com"><img src="./templates/webapp/footer.png"></a> </h1>' . "\n" . '      </div>' . "\n" . '</div><!-- /END OF VOD PAGE -->' . "\n\n\t\t\n" . '</body>' . "\n" . '</html>' . "\n";

	echo '<b>' . $f9a8823715bcb54e8069e0086da240b2['unlimited'] . '</b></font>';

	foreach ($af64f71ff65e7630848e0c664244a3ba['streams'] as $C590e4533f047829140ed3da3641384a) {
		echo '</a></li>';

		echo '<li><b>Release date:</b> ' . $B5ef1b8e925cbb136dc323946594da2a['releasedate'] . '</li></ul></div>' . "\n";
		echo '<li><b>Rating:</b> ' . $B5ef1b8e925cbb136dc323946594da2a['rating'] . '</li>' . "\n";

		echo '<div data-role="header">' . "\n";

		$C63435555732fef7929084e252ed20b8 = b8a6Ea05eEbC7e2e3503Ea794b1A1eE4::$StreamingServers[SERVER_ID]['site_url'] . $C590e4533f047829140ed3da3641384a['type_output'] . '/' . $c83b7d347a6bc7f5f0e3313147e88ecc->member_info['username'] . '/' . $c83b7d347a6bc7f5f0e3313147e88ecc->member_info['password'] . '/' . $C590e4533f047829140ed3da3641384a['id'] . '.' . $C590e4533f047829140ed3da3641384a['container_extension'];

		echo '<li><b>Cast:</b> ' . $B5ef1b8e925cbb136dc323946594da2a['cast'] . '</li>' . "\n";
		echo '<li><a href="' . $C63435555732fef7929084e252ed20b8 . '" data-ajax="false">' . "\n";

		echo '<img src="./templates/logos/defaultlogo.png" class="ui-li-thumb" />' . "\n";

		echo '<li><b>Director:</b> ' . $B5ef1b8e925cbb136dc323946594da2a['director'] . '</li>' . "\n";

		echo '<h1>' . $C590e4533f047829140ed3da3641384a['stream_display_name'] . '</h1></div>' . "\n";

		echo '<li><b>Plot:</b> ' . $B5ef1b8e925cbb136dc323946594da2a['plot'] . '</li>' . "\n";
		echo '<img src=' . $B5ef1b8e925cbb136dc323946594da2a['movie_image'] . ' class="ui-li-thumb" />' . "\n";
		echo '<img src="./templates/logos/defaultlogo.png" class="ui-li-thumb" />' . "\n";

		echo '<li><a href="playvideo.php?id=' . $C590e4533f047829140ed3da3641384a['id'] . '" data-ajax="false" data-transition="flip">' . "\n";
		echo '<div data-role="popup" data-position-to="window" id="' . $b46f6f6f1e60da0e1a50dde40c535356 . '" data-theme="b">' . "\n";

		echo '<h2>' . $C590e4533f047829140ed3da3641384a['stream_display_name'] . '</h2>' . "\n";

		echo '<p class="epgpos"><a href="#' . $b46f6f6f1e60da0e1a50dde40c535356 . '" data-rel="popup"> Info </a></>' . "\n";
		echo '<a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>' . "\n";
		$b46f6f6f1e60da0e1a50dde40c535356 = str_replace(' ', '', $C590e4533f047829140ed3da3641384a['stream_display_name']);
		if (!empty($B5ef1b8e925cbb136dc323946594da2a['genre']) || !empty($B5ef1b8e925cbb136dc323946594da2a['plot']) || !empty($B5ef1b8e925cbb136dc323946594da2a['cast']) || !empty($B5ef1b8e925cbb136dc323946594da2a['rating']) || !empty($B5ef1b8e925cbb136dc323946594da2a['director']) || !empty($B5ef1b8e925cbb136dc323946594da2a['releasedate'])) {
		}

		$B5ef1b8e925cbb136dc323946594da2a = json_decode($C590e4533f047829140ed3da3641384a['movie_propeties'], true);

		echo '<ul><li><b>Genre:</b> ' . $B5ef1b8e925cbb136dc323946594da2a['genre'] . '</li>' . "\n";
	}

	echo $f9a8823715bcb54e8069e0086da240b2['close'];

	foreach ($A4891b3340053d1b4c93b079a7fc5e69 as $E3e7e267f95754599560be79b9837c92) {
		echo '<li><a href="mobile.php?type=vod&vod_category_id=' . $E3e7e267f95754599560be79b9837c92['id'] . '" class="ui-btn ui-btn-icon-left">' . $E3e7e267f95754599560be79b9837c92['category_name'] . ' (' . $E3e7e267f95754599560be79b9837c92['total_movies'] . ')</a></li>';
	}

	if (empty($A4891b3340053d1b4c93b079a7fc5e69)) {
	}

	echo '<font color=\'purple\'><b>' . date('d/m/Y H:i', $c83b7d347a6bc7f5f0e3313147e88ecc->member_info['exp_date']) . '</b></font>';
	echo '<!-- START OF VOD PAGE -->' . "\n\n" . '<div data-role="page" data-theme="b" id="vod"  class="my-page">' . "\n" . '    ' . "\n" . '    <div data-role="header" data-position="fixed">' . "\n" . '    ' . "\t\t" . '<h1><img src="./templates/webapp/header.png" /></h1>' . "\n" . '    ' . "\t\t" . '<a href="#left-panel" data-theme="b" data-icon="bars" data-iconpos="notext" data-shadow="false" data-iconshadow="false" class="ui-icon-nodisc">Open left panel</a>' . "\n" . '    ' . "\t\t" . '<a href="#" data-role="button" data-icon="eye" data-iconpos="notext" data-theme="b" data-shadow="false" data-iconshadow="false" class="ui-icon-nodisc" onclick="launchFullscreen(document.documentElement); return false" rel="external"></a>' . "\n\t\t\t\t" . '<div data-role="navbar">' . "\n\t\t\t\t\t" . '<ul>' . "\n\t\t\t\t\t\t" . '<li><a href="mobile.php?type=live" data-transition="fade" style="border-radius: 10px 10px 0px 0px; max-width: 300px; margin-left: auto;" > <img style="opacity: 0.4;"  src="templates/webapp/watch-tv-icon.png" width="32" /><img style="opacity: 0.4;"  src="templates/webapp/LIVETV.png" width="90" /></a></li>' . "\n\t\t\t\t\t\t" . '<li><a href="mobile.php?type=vod"  data-transition="fade" style="border-radius: 10px 10px 0px 0px; max-width: 300px; " > <img src="templates/webapp/VOD.png" width="51" /><img src="templates/webapp/movie-icon.png" width="32" /></a></li>' . "\n\t\t\t\t\t\n\t\n\t\t\t\t\t\t\n\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t" . '            <center>' . "\n\t\t\t\t\t" . '<div  style="border-width: 2px;' . "\n\t\t\t\t\t\t\t\t" . 'border-style: dashed;' . "\n\t\t\t\t\t\t\t\t" . 'border-color: rgb(39, 39, 39);">' . "\n\t\t\t\t\t\t";

	echo '" class="channels">' . "\n" . '           ';

	$A4891b3340053d1b4c93b079a7fc5e69 = f6ACBDF515C1E5F84C3209c7FAa09641('movie', true);

	echo $f9a8823715bcb54e8069e0086da240b2['account_info'];

	$af64f71ff65e7630848e0c664244a3ba = B3f724c7FF91e8207B59b52E6Be913Fc($c83b7d347a6bc7f5f0e3313147e88ecc->member_info['id'], 'movie', $Dc8f0def67b029f74073f2421d4967d0);

	echo $c83b7d347a6bc7f5f0e3313147e88ecc->member_info['username'];

	echo '</h1>' . "\n" . '      </div>' . "\n" . '      <div data-role="main" class="ui-content">' . "\n" . '        <p>Welcome <b>';

	echo $f9a8823715bcb54e8069e0086da240b2['account_information'];
	echo '</a>' . "\n" . '    ' . "\t\t" . '</li>' . "\n" . '    ' . "\t\t" . '<li>' . "\n" . '    ' . "\t\t" . '  <a href="mobile.php?action=logout" data-rel="close" data-ajax="false" class="ui-btn ui-btn-icon-left ui-icon-delete">';

	echo '</a>' . "\n" . '      <div data-role="header">' . "\n" . '        <h1>';
	echo '<li><a href="mobile.php?type=vod" class="ui-btn ui-btn-icon-left">All</a></li>';

	echo '        </ul>' . "\n" . '    </div><!-- /content -->' . "\n" . '    ' . "\n" . '    ' . "\n" . '    <div data-role="panel" id="left-panel"  data-theme="b" >' . "\n" . '    <ul data-role="none" data-theme="b" data-divider-theme="a" style="margin-top:-16px;" class="nav-search">' . "\n" . '    ' . "\t\t" . '<li>' . "\n" . '    ' . "\t\t" . '  <a href="#accountInfo" data-rel="popup" data-position-to="window" data-transition="fade" class="ui-btn ui-btn-icon-left ui-icon-user">';

	echo ': ' . "\n" . '        ';
	echo $f9a8823715bcb54e8069e0086da240b2['logout'];
}


echo '<!DOCTYPE html>' . "\n" . '<html>' . "\n" . '<head>' . "\n\t" . '<meta charset="utf-8">' . "\n\t" . '<meta name="apple-mobile-web-app-capable" content="yes">' . "\n\t" . '<meta name="viewport" content="width=device-width, initial-scale=1">' . "\n\t" . '<title>';

?> 

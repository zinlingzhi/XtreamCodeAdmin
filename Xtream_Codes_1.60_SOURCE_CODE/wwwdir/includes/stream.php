<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

class EF4bc8281856E815abefa11052CAD2c6
{
	static public $ipTV_db;
	public $StreamID;
	public $ServerIDs;
	public $isValid = false;
	public $StreamInfo = array();
	public $ReqTranscode = false;
	public $TranscodeServerID;
	public $Servers = array();
	public $StreamArguments;
	public $UseProxy = false;
	public $ProxyAddress = false;
	public $FFmpegCommand = array();
	public $curFFprobe = array();

	public function __construct($d1ec2d5e13afbc81950a024a2b32884d, $b63b3d46e5c279a279a9b10563887e18 = NULL)
	{
		$this->ServerIDs = array_intersect(array_keys($this->Servers), array_keys(b8a6eA05eeBC7e2e3503Ea794b1a1eE4::$StreamingServers));

		$b63b3d46e5c279a279a9b10563887e18 = array($b63b3d46e5c279a279a9b10563887e18);
		$this->StreamArguments = array();
		$this->b5e1D7D9145d4B0F1982B48859FCE3F0();

		$this->StreamID = $d1ec2d5e13afbc81950a024a2b32884d;
		$this->ServerIDs = array_intersect($b63b3d46e5c279a279a9b10563887e18, array_keys($this->Servers), array_keys(b8A6ea05EebC7E2e3503EA794b1A1EE4::$StreamingServers));
		if (!(!empty($b63b3d46e5c279a279a9b10563887e18) && !is_array($b63b3d46e5c279a279a9b10563887e18))) {
		}

	}

	static public function DA17C8C79048f7a15c9f4D54669F4c07($b8980526936694b2cd4cf6c7f8c80396, $b442e1b28845beafe64eed54322b9196, $bde80959d10cf56c16e00c1e09cac2ae, $d1ec2d5e13afbc81950a024a2b32884d, $b63b3d46e5c279a279a9b10563887e18 = NULL)
	{
		self::$ipTV_db->query('SELECT * FROM `streams_sys` WHERE `stream_id` = \'%d\'', $d1ec2d5e13afbc81950a024a2b32884d);
		$c003a02593a26e7cd5788074d1f28edc = self::$ipTV_db->B865B38eb81f98B969e0Ac143f701035(true, 'server_id');

		$b8980526936694b2cd4cf6c7f8c80396 = str_replace(array('.', '/'), '', $b8980526936694b2cd4cf6c7f8c80396);

		foreach (b8A6EA05eeBc7e2E3503eA794b1A1ee4::$StreamingServers as $D4b0e4f302fed4c8918d703be778a967 => $E8c7a983b1f5f88c03449e384ad28bbd) {
			self::$ipTV_db->query('UPDATE `streams_sys` SET `to_analyze` = 1,`analyze_start` = \'%d\',`analyze_pid` = \'%d\' WHERE `stream_id` = \'%d\' AND `server_id` = \'%d\'', time(), $fdd570c044bc4b302f6f1cb307969f67, $d1ec2d5e13afbc81950a024a2b32884d, $D4b0e4f302fed4c8918d703be778a967);
			$fdd570c044bc4b302f6f1cb307969f67 = intval(shell_exec(PHP_BIN . ' ' . ASYNC_DIR . $b8980526936694b2cd4cf6c7f8c80396 . '_' . $b442e1b28845beafe64eed54322b9196 . '.php ' . $bde80959d10cf56c16e00c1e09cac2ae . ' ' . $d1ec2d5e13afbc81950a024a2b32884d . ' ' . $D4b0e4f302fed4c8918d703be778a967 . ' > /dev/null 2>/dev/null & echo $!'));
			posix_kill($c003a02593a26e7cd5788074d1f28edc[$D4b0e4f302fed4c8918d703be778a967]['analyze_pid'], 9);

			if (array_key_exists($D4b0e4f302fed4c8918d703be778a967, $c003a02593a26e7cd5788074d1f28edc)) {
			}

		}

		$b442e1b28845beafe64eed54322b9196 = str_replace(array('.', '/'), '', $b442e1b28845beafe64eed54322b9196);
	}

	static public function fD1b65128218b6a00E29162c27376934($e3d19a63b5ee8abf64857e54486f2c68, $b63b3d46e5c279a279a9b10563887e18, $Dbaff27d152da6291155ec1099476ac3 = array(), $f9cdd6acad925efcdbe5b4687938f1d8 = '')
	{
		$fb029655452795d6800242b68301a5a1 = intval($d741844a25303c17c02eed70287674d1 / 1000000) + 15;
		$E6412230eeb5a4348cc57a7876286e4a['duration'] = !empty($Fc39300f84cb6542fe99d834a6df85a8['format']['duration']) ? gmdate('H:i:s', intval($Fc39300f84cb6542fe99d834a6df85a8['format']['duration'])) : 'N/A';

		$Fc39300f84cb6542fe99d834a6df85a8 = json_decode($C0370129ae871d899244eaf1c9fed218[$b63b3d46e5c279a279a9b10563887e18], true);

		echo 'FFprobe: ' . $ea51b85aa81a7cc3e31d9d324d77a133 . '<br /><br />';
		$C0370129ae871d899244eaf1c9fed218 = C7F23f8afe7637CdBC24b271c7bB2213::F6022c79eFD7636bc9ae3d0259B1891e($b63b3d46e5c279a279a9b10563887e18, $ea51b85aa81a7cc3e31d9d324d77a133, 'raw');
		$E6412230eeb5a4348cc57a7876286e4a['bitrate'] = !empty($Fc39300f84cb6542fe99d834a6df85a8['format']['bit_rate']) ? $Fc39300f84cb6542fe99d834a6df85a8['format']['bit_rate'] : NULL;

		$E6412230eeb5a4348cc57a7876286e4a['codecs']['audio'] = '';

		$ea51b85aa81a7cc3e31d9d324d77a133 = $f9cdd6acad925efcdbe5b4687938f1d8 . '/usr/bin/timeout ' . $fb029655452795d6800242b68301a5a1 . 's ' . FFPROBE_PATH . ' -probesize ' . $c7c0f697bdb4523a124295ab1f3c2391 . ' -analyzeduration ' . $d741844a25303c17c02eed70287674d1 . ' ' . implode(' ', $Dbaff27d152da6291155ec1099476ac3) . ' -i "' . $e3d19a63b5ee8abf64857e54486f2c68 . '" -v quiet -print_format json -show_streams -show_format';

		$E6412230eeb5a4348cc57a7876286e4a['filename'] = $Fc39300f84cb6542fe99d834a6df85a8['format']['filename'];
		$E6412230eeb5a4348cc57a7876286e4a['container'] = $Fc39300f84cb6542fe99d834a6df85a8['format']['format_name'];

		if (!($C0370129ae871d899244eaf1c9fed218[$b63b3d46e5c279a279a9b10563887e18] !== false)) {
		}

		foreach ($Fc39300f84cb6542fe99d834a6df85a8['streams'] as $d00da4fa5d6fc7e959151af4252fda8f) {
			$E6412230eeb5a4348cc57a7876286e4a['codecs'][$d00da4fa5d6fc7e959151af4252fda8f['codec_type']] = $d00da4fa5d6fc7e959151af4252fda8f['codec_name'];
		}

		$c7c0f697bdb4523a124295ab1f3c2391 = abs(intval(b8a6EA05eEbC7E2E3503ea794B1A1ee4::$settings['probesize']));

		return false;
		return $E6412230eeb5a4348cc57a7876286e4a;
		$ea51b85aa81a7cc3e31d9d324d77a133 = $f9cdd6acad925efcdbe5b4687938f1d8 . '/usr/bin/timeout 25s ' . FFPROBE_PATH . ' ' . implode(' ', $Dbaff27d152da6291155ec1099476ac3) . ' -i "' . $e3d19a63b5ee8abf64857e54486f2c68 . '" -v quiet -print_format json -show_streams -show_format';

		if (empty($Fc39300f84cb6542fe99d834a6df85a8)) {
		}

		$d741844a25303c17c02eed70287674d1 = abs(intval(b8a6Ea05EEBC7E2e3503EA794b1A1eE4::$settings['stream_max_analyze']));
		$E6412230eeb5a4348cc57a7876286e4a['codecs']['video'] = '';
		$E6412230eeb5a4348cc57a7876286e4a['of_duration'] = !empty($Fc39300f84cb6542fe99d834a6df85a8['format']['duration']) ? $Fc39300f84cb6542fe99d834a6df85a8['format']['duration'] : 'N/A';
		$E6412230eeb5a4348cc57a7876286e4a = array();
	}

	public function E9A37BCceE1E872402bD94B88392003D($b63b3d46e5c279a279a9b10563887e18)
	{
		$B86465428d0aee1dc4c090b6914aac26 = $E8d49ee11c352021feb31538ce06dbb5 = $this->curFFprobe[$b63b3d46e5c279a279a9b10563887e18]['container'];
		$ea51b85aa81a7cc3e31d9d324d77a133 = str_replace('{source}', '"' . $f04471817e013ea357253f9eaac7e9f1 . '"', $ea51b85aa81a7cc3e31d9d324d77a133);

		$Df084251c6dae48e0baec52f3f78472d = array();

		$this->StreamInfo['transcode_attributes']['-scodec'] = 'subrip';

		return false;

		$this->StreamInfo['transcode_attributes']['-scodec'] = 'copy';

		$ea51b85aa81a7cc3e31d9d324d77a133 = str_replace('{stream_arguments}', '', $ea51b85aa81a7cc3e31d9d324d77a133);

		$f9cdd6acad925efcdbe5b4687938f1d8 = '';

		$Afd4dc2cd59c9f685779861c1ef567c8 = true;

		$a3a85cd71e65cf6c67fcb2817acd4225 = $F03f8c02bd16a1aed9c735ad809c30d4[1];

		$ea51b85aa81a7cc3e31d9d324d77a133 = str_replace('{source}', b8A6ea05EEBC7E2E3503Ea794B1A1Ee4::$StreamingServers[$a3a85cd71e65cf6c67fcb2817acd4225]['api_url'] . '&action=getFile&filename=' . urlencode($D21821f8d172665c7714a7d662d65706), $ea51b85aa81a7cc3e31d9d324d77a133);

		$d741844a25303c17c02eed70287674d1 = abs(intval(B8a6EA05EebC7e2E3503Ea794B1A1eE4::$settings['stream_max_analyze']));
		$ea51b85aa81a7cc3e31d9d324d77a133 .= '-c copy';
		$F4dbb6eeb0fbd8926b7f025daf165637 .= self::c2526b2c9566c7079Ed6c43f4c296D93('video', $B86465428d0aee1dc4c090b6914aac26, $F15bf7fa263fe2f34ab57bf06f15aebf, 'mpegts');

		$ea51b85aa81a7cc3e31d9d324d77a133 = str_replace('{READ_NATIVE}', '-re', $ea51b85aa81a7cc3e31d9d324d77a133);
		$Afd4dc2cd59c9f685779861c1ef567c8 = false;

		$F4dbb6eeb0fbd8926b7f025daf165637 .= ' ' . self::c2526b2C9566C7079eD6c43F4c296d93('audio', $E8d49ee11c352021feb31538ce06dbb5, $f77b8c632f226847836f576e42df0ac4, 'mpegts');

		$this->FFmpegCommand[$b63b3d46e5c279a279a9b10563887e18] = $ea51b85aa81a7cc3e31d9d324d77a133;
		echo 'FFmpeg: ' . $ea51b85aa81a7cc3e31d9d324d77a133 . '<br /><br />';

		$ea51b85aa81a7cc3e31d9d324d77a133 = '';

		$ea51b85aa81a7cc3e31d9d324d77a133 .= '-c copy';
		$ea51b85aa81a7cc3e31d9d324d77a133 = str_replace('{fetch}', implode(' ', $Ff992b82750fe5be2fb032819c817971), $ea51b85aa81a7cc3e31d9d324d77a133);

		$f9cdd6acad925efcdbe5b4687938f1d8 = 'http_proxy=' . $this->StreamArguments[2]['value'] . ' ';

		$A4525069bfd2f3ca0cc434ccc6740c2e = true;

		$Df084251c6dae48e0baec52f3f78472d = $this->AB333104ac3370114a2165C60F781f9F($E23936f26b4a3b7d7fab0eca80218d40, 'fetch');

		$ea51b85aa81a7cc3e31d9d324d77a133 = str_replace('{recon}', '-reconnect 1 -reconnect_at_eof 1 -reconnect_streamed 1 -reconnect_delay_max 2', $ea51b85aa81a7cc3e31d9d324d77a133);

		$f77b8c632f226847836f576e42df0ac4 = $this->curFFprobe[$b63b3d46e5c279a279a9b10563887e18]['codecs']['audio'];
		$ea51b85aa81a7cc3e31d9d324d77a133 = str_replace('{custom_ffmpeg}', $this->StreamInfo['custom_ffmpeg'], $ea51b85aa81a7cc3e31d9d324d77a133);

		$F7dd20001fa266d10ac5c2671e7db327 = '';

		$ea51b85aa81a7cc3e31d9d324d77a133 = str_replace('{READ_NATIVE}', '-re', $ea51b85aa81a7cc3e31d9d324d77a133);

		$f51d82a1b43c77e899a605b16eff556f = str_replace(' ', '%20', $f51d82a1b43c77e899a605b16eff556f);

		$ea51b85aa81a7cc3e31d9d324d77a133 = str_replace('{READ_NATIVE}', '', $ea51b85aa81a7cc3e31d9d324d77a133);

		$ea51b85aa81a7cc3e31d9d324d77a133 .= '-c copy';

		$ea51b85aa81a7cc3e31d9d324d77a133 = str_replace('{SUBTITLES_WGET}', 'wget -q -O "' . $Fb9ebde1c84b3f380ccd7228a9eac424 . '" "' . $Dae8cd9a35c88177208aac9a5fe56083 . '";', $ea51b85aa81a7cc3e31d9d324d77a133);

		$Ff992b82750fe5be2fb032819c817971 = $this->ab333104Ac3370114A2165c60f781F9F($E23936f26b4a3b7d7fab0eca80218d40, 'fetch');

		$ea51b85aa81a7cc3e31d9d324d77a133 = str_replace('{map}', '', $ea51b85aa81a7cc3e31d9d324d77a133);

		$ea51b85aa81a7cc3e31d9d324d77a133 = str_replace('{stream_arguments}', '', $ea51b85aa81a7cc3e31d9d324d77a133);

		$ea51b85aa81a7cc3e31d9d324d77a133 = str_replace('{custom_ffmpeg}', '', $ea51b85aa81a7cc3e31d9d324d77a133);
		if ($Fd4e0d801253bae96cd44b1dcd336e38 == 's:') {
		}

		$ea51b85aa81a7cc3e31d9d324d77a133 .= ' >/dev/null 2>/dev/null & jobs -p';

		$ea51b85aa81a7cc3e31d9d324d77a133 = str_replace('{source}', $f51d82a1b43c77e899a605b16eff556f, $ea51b85aa81a7cc3e31d9d324d77a133);

		foreach ($this->StreamInfo['transcode_attributes'] as $b442e1b28845beafe64eed54322b9196 => $dcc11227609ae810ce412e222bc269e6) {
			$ea51b85aa81a7cc3e31d9d324d77a133 .= $dcc11227609ae810ce412e222bc269e6['cmd'] . ' ';

			if (!is_numeric($b442e1b28845beafe64eed54322b9196)) {
			}

			$ea51b85aa81a7cc3e31d9d324d77a133 .= $b442e1b28845beafe64eed54322b9196 . ' ' . $dcc11227609ae810ce412e222bc269e6 . ' ';
		}

		$ea51b85aa81a7cc3e31d9d324d77a133 = str_replace('{gen_pts}', '', $ea51b85aa81a7cc3e31d9d324d77a133);

		$this->StreamInfo['transcode_attributes']['-sn'] = '';

		$ea51b85aa81a7cc3e31d9d324d77a133 = 'rm -rf "' . $this->StreamInfo['stream_playlist'] . '"; {SUBTITLES_WGET} ' . $f9cdd6acad925efcdbe5b4687938f1d8 . FFMPEG_PATH . ' -y {READ_NATIVE} -nostats -nostdin -hide_banner {analyze} -loglevel quiet -fflags +genpts {fetch} -i "{source}" {stream_arguments} {subtitles} -map 0 -strict -2 -movflags +faststart ';
		$ea51b85aa81a7cc3e31d9d324d77a133 = str_replace('{SUBTITLES_WGET}', '', $ea51b85aa81a7cc3e31d9d324d77a133);
		if ($this->Servers[$b63b3d46e5c279a279a9b10563887e18]['parent_id'] != 0) {
		}

		if (($d741844a25303c17c02eed70287674d1 == '5000000') && ($c7c0f697bdb4523a124295ab1f3c2391 == '5000000')) {
		}

		$ea51b85aa81a7cc3e31d9d324d77a133 = str_replace('{fetch}', '', $ea51b85aa81a7cc3e31d9d324d77a133);

		$b7bedc6862c131fa65b83c460213fcb6 = $this->StreamInfo['stream_source_parsed'];

		$ea51b85aa81a7cc3e31d9d324d77a133 = str_replace('{recon}', '', $ea51b85aa81a7cc3e31d9d324d77a133);

		foreach ($this->StreamInfo['transcode_attributes'] as $b442e1b28845beafe64eed54322b9196 => $dcc11227609ae810ce412e222bc269e6) {
			$ea51b85aa81a7cc3e31d9d324d77a133 .= $dcc11227609ae810ce412e222bc269e6['cmd'] . ' ';

			$ea51b85aa81a7cc3e31d9d324d77a133 .= $b442e1b28845beafe64eed54322b9196 . ' ' . $dcc11227609ae810ce412e222bc269e6 . ' ';
		}

		if ($this->Servers[$b63b3d46e5c279a279a9b10563887e18]['parent_id'] == 0) {
		}

		$ea51b85aa81a7cc3e31d9d324d77a133 = str_replace('{analyze}', '-probesize ' . $c7c0f697bdb4523a124295ab1f3c2391 . ' -analyzeduration ' . $d741844a25303c17c02eed70287674d1, $ea51b85aa81a7cc3e31d9d324d77a133);

		$eb8c5d7dd60ff68208d63788a483e413 = '';

		$ea51b85aa81a7cc3e31d9d324d77a133 = str_replace('{subtitles}', '-vf subtitles="' . $Fb9ebde1c84b3f380ccd7228a9eac424 . '"', $ea51b85aa81a7cc3e31d9d324d77a133);

		if (empty($this->curFFprobe[$b63b3d46e5c279a279a9b10563887e18])) {
		}

		$ea51b85aa81a7cc3e31d9d324d77a133 = str_replace('{gen_pts}', '-fflags +genpts', $ea51b85aa81a7cc3e31d9d324d77a133);
		$Fd4e0d801253bae96cd44b1dcd336e38 = substr($this->StreamInfo['stream_source'][0], 0, 2);

		foreach ($b7bedc6862c131fa65b83c460213fcb6 as $b442e1b28845beafe64eed54322b9196 => $f04471817e013ea357253f9eaac7e9f1) {
		}

		$F03f8c02bd16a1aed9c735ad809c30d4 = explode(':', $this->StreamInfo['stream_source'][0], 3);

		if (!($this->StreamInfo['transcode_attributes']['-acodec'] != 'copy')) {
		}

		$acc98ab4a1dd387abf719197669ff8a0 = count($b7bedc6862c131fa65b83c460213fcb6);

		$ea51b85aa81a7cc3e31d9d324d77a133 = str_replace('{stream_arguments}', implode(' ', $this->Ab333104Ac3370114A2165C60f781F9F($E23936f26b4a3b7d7fab0eca80218d40, 'transcode')), $ea51b85aa81a7cc3e31d9d324d77a133);

		$ea51b85aa81a7cc3e31d9d324d77a133 = str_replace('{map}', '-map 0:a? -map 0:v? -map 0:s?', $ea51b85aa81a7cc3e31d9d324d77a133);

		$ea51b85aa81a7cc3e31d9d324d77a133 = str_replace('{READ_NATIVE}', '', $ea51b85aa81a7cc3e31d9d324d77a133);
		$F15bf7fa263fe2f34ab57bf06f15aebf = $this->curFFprobe[$b63b3d46e5c279a279a9b10563887e18]['codecs']['video'];
		if ($this->StreamInfo['container_extension'] == 'mp4') {
		}

		$ea51b85aa81a7cc3e31d9d324d77a133 = $f9cdd6acad925efcdbe5b4687938f1d8 . FFMPEG_PATH . ' {READ_NATIVE} {recon} -y -nostats -nostdin -hide_banner -loglevel quiet {gen_pts} {analyze} {fetch} -i {source} {stream_arguments} {map} -strict -2 -dn {custom_ffmpeg} ';

		$eb8c5d7dd60ff68208d63788a483e413 = $ddcd46d36204c522e28cd59b84c5a667[1];
		$F7dd20001fa266d10ac5c2671e7db327 = $ddcd46d36204c522e28cd59b84c5a667[2];

		$ea51b85aa81a7cc3e31d9d324d77a133 = str_replace('{stream_arguments}', implode(' ', $this->ab333104Ac3370114A2165C60f781F9f($E23936f26b4a3b7d7fab0eca80218d40, 'transcode')), $ea51b85aa81a7cc3e31d9d324d77a133);
		$ea51b85aa81a7cc3e31d9d324d77a133 = str_replace('{stream_arguments}', '', $ea51b85aa81a7cc3e31d9d324d77a133);

		$ea51b85aa81a7cc3e31d9d324d77a133 = str_replace('{subtitles}', '', $ea51b85aa81a7cc3e31d9d324d77a133);
		$e3b006369bcc6fd4baa84dee3190876c = true;

		$Fb9ebde1c84b3f380ccd7228a9eac424 = TMP_DIR . $this->StreamID . '_subtitles.srt';

		$E23936f26b4a3b7d7fab0eca80218d40 = substr($this->StreamInfo['stream_source'][0], 0, strpos($this->StreamInfo['stream_source'][0], '://'));

		$b3be34fb9340e0a35bdfc058dfdfa2ea = false;

		$ea51b85aa81a7cc3e31d9d324d77a133 .= ' "' . $this->StreamInfo['stream_playlist'] . '" >/dev/null 2>/dev/null & echo $!';

		if ($this->isValid) {
		}

		$ea51b85aa81a7cc3e31d9d324d77a133 = str_replace('{fetch}', implode(' ', $Df084251c6dae48e0baec52f3f78472d), $ea51b85aa81a7cc3e31d9d324d77a133);

		$c7c0f697bdb4523a124295ab1f3c2391 = abs(intval(B8A6eA05EEbC7E2E3503EA794b1a1EE4::$settings['probesize']));
		$Fd4e0d801253bae96cd44b1dcd336e38 = substr($this->StreamInfo['stream_source'][0], 0, 2);

		$ea51b85aa81a7cc3e31d9d324d77a133 = str_replace('{source}', $D21821f8d172665c7714a7d662d65706, $ea51b85aa81a7cc3e31d9d324d77a133);

		if (empty($this->StreamInfo['movie_subtitles'])) {
		}

		if ($this->StreamInfo['stream_all'] == 0) {
		}

		$ea51b85aa81a7cc3e31d9d324d77a133 .= ' ' . $F4dbb6eeb0fbd8926b7f025daf165637 . ' -hls_flags delete_segments -hls_time ' . B8A6EA05EeBc7e2e3503Ea794B1a1eE4::$SegmentsSettings['seg_time'] . ' -hls_list_size ' . B8a6ea05eebC7e2e3503eA794b1A1ee4::$SegmentsSettings['seg_list_size'] . ' "' . STREAMS_PATH . $this->StreamID . '_.m3u8"';
		$this->StreamInfo['transcode_attributes']['-scodec'] = 'mov_text';

		$D21821f8d172665c7714a7d662d65706 = $F03f8c02bd16a1aed9c735ad809c30d4[2];
		$this->curFFprobe[$b63b3d46e5c279a279a9b10563887e18]['codecs']['audio'] = $this->StreamInfo['transcode_attributes']['-acodec'];

		if (!($this->StreamInfo['transcode_attributes']['-vcodec'] != 'copy')) {
		}

		if ($this->StreamInfo['remove_subtitles'] == 0) {
		}

		$e3b006369bcc6fd4baa84dee3190876c = false;

		$ea51b85aa81a7cc3e31d9d324d77a133 = str_replace('{subtitles}', '-vf subtitles="' . $F7dd20001fa266d10ac5c2671e7db327 . '"', $ea51b85aa81a7cc3e31d9d324d77a133);

		if (!($this->StreamInfo['enable_transcode'] == 1)) {
		}

		$ea51b85aa81a7cc3e31d9d324d77a133 .= '-c copy';

		$b3be34fb9340e0a35bdfc058dfdfa2ea = true;

		$F4dbb6eeb0fbd8926b7f025daf165637 = trim($F4dbb6eeb0fbd8926b7f025daf165637);
		$ea51b85aa81a7cc3e31d9d324d77a133 = str_replace('{SUBTITLES_WGET}', '', $ea51b85aa81a7cc3e31d9d324d77a133);
		$F4dbb6eeb0fbd8926b7f025daf165637 = '';
		$b7bedc6862c131fa65b83c460213fcb6 = array(b8a6ea05eeBC7e2E3503EA794b1A1EE4::$StreamingServers[$this->Servers[$b63b3d46e5c279a279a9b10563887e18]['parent_id']]['site_url_ip'] . 'streaming/admin_live.php?stream=' . $this->StreamID . '&password=' . b8a6ea05eEbc7E2e3503eA794B1a1ee4::$settings['live_streaming_pass'] . '&extension=ts&server_id=' . $b63b3d46e5c279a279a9b10563887e18);
		$Dae8cd9a35c88177208aac9a5fe56083 = b8a6eA05EeBC7E2e3503Ea794B1a1eE4::$StreamingServers[$eb8c5d7dd60ff68208d63788a483e413]['api_url'] . '&action=getFile&filename=' . $F7dd20001fa266d10ac5c2671e7db327;
		unset($this->StreamArguments[2]);
		if (($this->StreamInfo['read_native'] == 1) || stristr($this->curFFprobe[$b63b3d46e5c279a279a9b10563887e18]['container'], 'hls') || stristr($this->curFFprobe[$b63b3d46e5c279a279a9b10563887e18]['container'], 'avi') || stristr($this->curFFprobe[$b63b3d46e5c279a279a9b10563887e18]['container'], 'mp4,') || stristr($this->curFFprobe[$b63b3d46e5c279a279a9b10563887e18]['container'], 'matroska')) {
		}

		$this->StreamArguments[2]['value'] = 'http://' . $this->StreamArguments[2]['value'];

		$ea51b85aa81a7cc3e31d9d324d77a133 = str_replace('{analyze}', '', $ea51b85aa81a7cc3e31d9d324d77a133);
		$f51d82a1b43c77e899a605b16eff556f = urldecode($this->StreamInfo['stream_source'][0]);
		$ddcd46d36204c522e28cd59b84c5a667 = explode(':', $this->StreamInfo['movie_subtitles'][0], 3);

		if ($this->StreamInfo['type_key'] == 'live') {
		}

		$this->curFFprobe[$b63b3d46e5c279a279a9b10563887e18]['codecs']['video'] = $this->StreamInfo['transcode_attributes']['-vcodec'];
		$A4525069bfd2f3ca0cc434ccc6740c2e = false;
		$ea51b85aa81a7cc3e31d9d324d77a133 = str_replace('{stream_arguments}', '', $ea51b85aa81a7cc3e31d9d324d77a133);
		$ea51b85aa81a7cc3e31d9d324d77a133 = str_replace('{analyze}', '-probesize ' . $c7c0f697bdb4523a124295ab1f3c2391 . ' -analyzeduration ' . $d741844a25303c17c02eed70287674d1, $ea51b85aa81a7cc3e31d9d324d77a133);
		$ea51b85aa81a7cc3e31d9d324d77a133 = str_replace('{custom_ffmpeg}', '', $ea51b85aa81a7cc3e31d9d324d77a133);
	}

	static public function C2526b2c9566c7079ed6c43F4c296D93($a0e510f12386604aef864c0c65fa8433, $Ccd6b3e892f78b123f3103e532d77531, $be235a03c0e6f6724efd4b3f38a6cb01, $Ae851109090cd8ac5504e7c9fbb30f25)
	{
		switch ($a0e510f12386604aef864c0c65fa8433) {
		default:
			$De35b1223035988bc66aa39f58ba0d21 = array('flv', 'mov', 'mp4');

			$Ae851109090cd8ac5504e7c9fbb30f25 = 'mpegts';

			return '';

			$d46de81e9a31afba9794574eb60b6405 = array('mpegts');
			$Ccd6b3e892f78b123f3103e532d77531 = 'mpegts';

			while (!stristr($Ae851109090cd8ac5504e7c9fbb30f25, 'hls')) {
			}

		case 'video':
			while (!($be235a03c0e6f6724efd4b3f38a6cb01 == 'h264')) {
			}

			return '-bsf:v h264_mp4toannexb';
		case 'audio':
			return '-bsf:a aac_adtstoasc';
		}
	}

	public function a6f1D8c7Dea09aB0116250295C91527B()
	{
		foreach ($this->ServerIDs as $D4b0e4f302fed4c8918d703be778a967) {
			$E21a446db0ec949e312b9aa1a7a4c347 = C7f23F8aFe7637cdbC24B271C7Bb2213::F6022C79eFD7636BC9ae3d0259B1891e($D4b0e4f302fed4c8918d703be778a967, $this->FFmpegCommand[$D4b0e4f302fed4c8918d703be778a967], 'raw');

			self::$ipTV_db->query('UPDATE `streams_sys` SET `to_analyze` = 0,`stream_status` = 2 WHERE `server_stream_id` = \'%d\'', $this->Servers[$D4b0e4f302fed4c8918d703be778a967]['server_stream_id']);

			if ($this->FFmpegCommand[$D4b0e4f302fed4c8918d703be778a967] === false) {
			}

			self::$ipTV_db->query('UPDATE `streams_sys` SET `to_analyze` = 0,`stream_status` = 2 WHERE `server_stream_id` = \'%d\'', $this->Servers[$D4b0e4f302fed4c8918d703be778a967]['server_stream_id']);

			$this->E9A37bCcee1E872402bD94B88392003d($D4b0e4f302fed4c8918d703be778a967);

			self::$ipTV_db->query('UPDATE `streams_sys` SET `to_analyze` = 1,' . "\n" . '                                                                     `stream_started` = \'%d\',' . "\n" . '                                                                     `stream_status` = 0,' . "\n" . '                                                                     `pid` = \'%d\'' . "\n" . '                                            WHERE `server_stream_id` = \'%d\'', time(), $E21a446db0ec949e312b9aa1a7a4c347[$D4b0e4f302fed4c8918d703be778a967], $this->Servers[$D4b0e4f302fed4c8918d703be778a967]['server_stream_id']);

			if ($E21a446db0ec949e312b9aa1a7a4c347[$D4b0e4f302fed4c8918d703be778a967] === false) {
			}

		}

		return false;
		$this->b73Aa3Bb7C6C4c76d0879BBdb53E15CD();
	}

	public function F90815189878a73223481dF1D74CAe1c()
	{
		$this->B73aa3bb7c6c4C76d0879BBdb53E15cD();

		foreach ($this->ServerIDs as $D4b0e4f302fed4c8918d703be778a967) {
			self::$ipTV_db->query('UPDATE `streams_sys` SET `current_source` = NULL,`integrity` = NULL,`to_analyze` = 0,`analyze_pid` = NULL,`analyze_start` = NULL,`stream_status` = 1 WHERE `server_stream_id` = \'%d\'', $this->Servers[$D4b0e4f302fed4c8918d703be778a967]['server_stream_id']);
			$E21a446db0ec949e312b9aa1a7a4c347 = -1;

			$this->E9A37BcCee1E872402BD94b88392003D($D4b0e4f302fed4c8918d703be778a967);

			self::$ipTV_db->query('UPDATE `streams_sys` SET `current_source` = NULL,`integrity` = NULL,`to_analyze` = 0,`analyze_pid` = NULL,`analyze_start` = NULL,`pid` = -1 WHERE `server_stream_id` = \'%d\'', $this->Servers[$D4b0e4f302fed4c8918d703be778a967]['server_stream_id']);

			sleep(1);

			$E21a446db0ec949e312b9aa1a7a4c347 = C7f23f8AfE7637CdBC24b271C7bB2213::F6022C79Efd7636BC9AE3D0259b1891e($D4b0e4f302fed4c8918d703be778a967, $this->FFmpegCommand[$D4b0e4f302fed4c8918d703be778a967], 'raw');

			if (!($E21a446db0ec949e312b9aa1a7a4c347 <= 0)) {
			}

			$A78a510fd3436ac8af5567c88f392701 = json_encode($this->curFFprobe[$D4b0e4f302fed4c8918d703be778a967]);
			while (!(!array_key_exists($D4b0e4f302fed4c8918d703be778a967, B8A6Ea05eEbC7E2E3503ea794B1A1Ee4::$StreamingServers) || !array_key_exists($D4b0e4f302fed4c8918d703be778a967, $this->Servers))) {
			}

			self::$ipTV_db->query('UPDATE `streams_sys` SET `to_analyze` = 0,' . "\n" . '                                                             `analyze_pid` = NULL,' . "\n" . '                                                             `bitrate` = NULL,' . "\n" . '                                                             `stream_started` = \'%d\',' . "\n" . '                                                             `stream_info` = \'%s\',' . "\n" . '                                                             `stream_status` = 0,' . "\n" . '                                                             `pid` = \'%d\',' . "\n" . '                                                             `integrity` = NULL' . "\n" . '                                       WHERE `server_stream_id` = \'%d\'', time(), $A78a510fd3436ac8af5567c88f392701, $E21a446db0ec949e312b9aa1a7a4c347, $this->Servers[$D4b0e4f302fed4c8918d703be778a967]['server_stream_id']);
			$E21a446db0ec949e312b9aa1a7a4c347 = intval(abs($E21a446db0ec949e312b9aa1a7a4c347[$D4b0e4f302fed4c8918d703be778a967]));
		}

		return false;
	}

	public function C2202DDC676431fcDc5fDb8C1Df6AA6A()
	{
		self::$ipTV_db->query('DELETE FROM `streams` WHERE `id` = \'%d\'', $this->StreamID);
		$this->b73aa3bb7c6c4C76D0879BbDB53E15Cd();

		foreach ($this->Servers as $D4b0e4f302fed4c8918d703be778a967 => $E8c7a983b1f5f88c03449e384ad28bbd) {
			$b8a56c16d1b9faacf5fd3f6719106134 .= 'rm -rf ' . $this->StreamInfo['stream_files'];

			$b8a56c16d1b9faacf5fd3f6719106134 = 'kill -9 ' . $E8c7a983b1f5f88c03449e384ad28bbd['pid'] . ';';
			c7F23f8AfE7637cDbC24B271c7bB2213::F6022C79efD7636BC9ae3d0259b1891e($D4b0e4f302fed4c8918d703be778a967, $b8a56c16d1b9faacf5fd3f6719106134);

			if (!isset($this->StreamInfo['stream_files'])) {
			}

			$b8a56c16d1b9faacf5fd3f6719106134 .= 'rm -rf ' . $this->StreamInfo['stream_playlist_pattern'] . ';';
		}

		return false;

		self::$ipTV_db->query('DELETE FROM `streams_options` WHERE `stream_id` = \'%d\'', $this->StreamID);
		self::$ipTV_db->query('DELETE FROM `streams_sys` WHERE `stream_id` = \'%d\'', $this->StreamID);
	}

	public function b73AA3bb7c6c4C76d0879bBDb53E15cd()
	{
		foreach ($this->ServerIDs as $D4b0e4f302fed4c8918d703be778a967) {
			self::$ipTV_db->query('UPDATE `streams_sys` SET `bitrate` = NULL,`integrity` = NULL,`current_source` = NULL,`to_analyze` = 0,`pid` = NULL,`stream_started` = NULL,`stream_info` = NULL,`stream_status` = 0 WHERE `server_stream_id` = \'%d\'', $this->Servers[$D4b0e4f302fed4c8918d703be778a967]['server_stream_id']);
			$b8a56c16d1b9faacf5fd3f6719106134 .= 'kill -9 ' . $this->Servers[$D4b0e4f302fed4c8918d703be778a967]['pid'];
			if (!empty($this->Servers[$D4b0e4f302fed4c8918d703be778a967])) {
			}

		}

		return false;

		return true;

		$D2e8d08e7faf8ef2ebb51dfafb2d9768 = array();

		if ($this->isValid) {
		}

		$b8a56c16d1b9faacf5fd3f6719106134 = 'rm -rf ' . $this->StreamInfo['stream_playlist_pattern'] . ';';
	}

	private function AB333104ac3370114A2165c60F781F9f($E23936f26b4a3b7d7fab0eca80218d40, $a0e510f12386604aef864c0c65fa8433)
	{
		return $D5c8e27c9a0cbb7254df21faaf62b249;

		$D5c8e27c9a0cbb7254df21faaf62b249 = array();
		foreach ($this->StreamArguments as $C4188eb5625baf4963cf95fd069d727b => $C2a2bdc6b6c4b5315e62205938a393df) {
			$D5c8e27c9a0cbb7254df21faaf62b249[] = sprintf($C2a2bdc6b6c4b5315e62205938a393df['argument_cmd'], $C2a2bdc6b6c4b5315e62205938a393df['value']);
			if (!($C4188eb5625baf4963cf95fd069d727b == 2)) {
			}

		}

	}

	private function ParseStreamURL($d5d21a3634417760fd3ea4c4f165aa33)
	{
		return $d5d21a3634417760fd3ea4c4f165aa33;

		$d5d21a3634417760fd3ea4c4f165aa33 = trim(substr($d5d21a3634417760fd3ea4c4f165aa33, stripos($d5d21a3634417760fd3ea4c4f165aa33, $Ff395546f8519139cb37557f3f3a7e21) + strlen($Ff395546f8519139cb37557f3f3a7e21)));
		$E23936f26b4a3b7d7fab0eca80218d40 = strtolower(substr($d5d21a3634417760fd3ea4c4f165aa33, 0, 4));

		while (!($E23936f26b4a3b7d7fab0eca80218d40 == 'rtmp')) {
			$Ff395546f8519139cb37557f3f3a7e21 = 'rtmp://$OPT:rtmp-raw=';
			$d5d21a3634417760fd3ea4c4f165aa33 .= ' live=1';
		}

	}

	private function customOrder($e520f3f26f1712e385901adca3a44812, $b1f1e65307205b92a10cf1609a1f0cbd)
	{
		return 1;

		return -1;

		if (!(substr($e520f3f26f1712e385901adca3a44812['argument_cmd'], 0, 3) == '-i ')) {
		}

	}

	private function b5E1D7D9145d4b0F1982b48859fCe3f0()
	{
		uasort(&$this->StreamArguments, array($this, 'customOrder'));
		$this->StreamInfo['stream_source_parsed'] = array(CREATED_CHANNELS . $this->StreamID . '_.avi');

		self::$ipTV_db->query("\n" . '                SELECT * FROM `streams` t1 ' . "\n" . '                INNER JOIN `streams_types` t2 ON t2.type_id = t1.type ' . "\n" . '                LEFT JOIN `movie_containers` t3 ON t3.container_id = t1.target_container_id' . "\n" . '                LEFT JOIN `transcoding_profiles` t4 ON t1.transcode_profile_id = t4.profile_id' . "\n" . '                WHERE t1.`id` = \'%d\'', $this->StreamID);
		$this->StreamInfo['movie_propeties'] = !empty($this->StreamInfo['movie_propeties']) ? json_decode($this->StreamInfo['movie_propeties'], true) : array();

		$this->StreamInfo['stream_source_parsed'] = array_map(array($this, 'ParseStreamURL'), $this->StreamInfo['stream_source']);

		$this->StreamInfo['transcode_attributes'] = json_decode($this->StreamInfo['transcode_attributes'], true);

		$this->StreamInfo['movie_location'] = '';

		$this->StreamInfo['transcode_attributes']['-acodec'] = 'copy';

		self::$ipTV_db->query('SELECT * FROM `streams_sys` t1 INNER JOIN `streaming_servers` t2 ON t2.id = t1.server_id WHERE t1.stream_id = \'%d\' ORDER by t1.server_id ASC', $this->StreamID);

		$this->StreamInfo['movie_source'] = $this->StreamInfo['stream_source'][0];

		$this->StreamInfo['stream_playlist'] = CREATED_CHANNELS . $this->StreamID . '_.m3u8';
		$this->StreamInfo['stream_playlist_pattern'] = STREAMS_PATH . $this->StreamID . '_*';

		if ($this->StreamInfo['type_key'] == 'created_live') {
		}

		preg_match('/s\\:(.*)\\:(.*)/', $this->StreamInfo['stream_source'][0], $C13b27df5008e4f7ec1d97368609ed5c);

		$this->StreamInfo['movie_source'] = $C13b27df5008e4f7ec1d97368609ed5c[2];
		$this->StreamInfo['movie_location'] = $C13b27df5008e4f7ec1d97368609ed5c[1];

		if (!(0 < self::$ipTV_db->B068a09b89FC39ad0b9afcF85F0f1A18())) {
		}

		$this->StreamInfo['movie_subs_location'] = $this->StreamInfo['movie_subtitles_real_path'] = '';

		$this->StreamInfo['stream_playlist_pattern'] = MOVIES_PATH . $this->StreamID . '.' . $this->StreamInfo['container_extension'];

		if ($this->StreamInfo['transcode_profile_id'] == -1) {
		}

		if (!(substr($this->StreamInfo['movie_subtitles'][0], 0, 2) == 's:')) {
		}

		$this->StreamInfo['stream_files'] = CREATED_CHANNELS . $this->StreamID . '_*';

		foreach (self::$ipTV_db->b865b38Eb81F98b969e0aC143F701035() as $C2a2bdc6b6c4b5315e62205938a393df) {
			$this->StreamArguments[$C2a2bdc6b6c4b5315e62205938a393df['argument_id']] = $C2a2bdc6b6c4b5315e62205938a393df;
		}

		if (array_key_exists('-acodec', $this->StreamInfo['transcode_attributes'])) {
		}

		$this->StreamInfo['movie_subtitles_real_path'] = $C13b27df5008e4f7ec1d97368609ed5c[2];

		while ($this->StreamInfo['type_key'] == 'movie') {
		}

		$this->StreamInfo['stream_playlist_pattern'] = STREAMS_PATH . $this->StreamID . '_*';
		$this->StreamInfo['transcode_attributes'] = array();
		$this->isValid = true;

		foreach (self::$ipTV_db->B865B38EB81F98b969e0AC143f701035() as $abb7f204f3c9eea98958be6a0f85c5f7) {
			$this->Servers[$abb7f204f3c9eea98958be6a0f85c5f7['server_id']] = $abb7f204f3c9eea98958be6a0f85c5f7;
		}

		$this->StreamInfo['transcode_attributes']['-vcodec'] = 'copy';
		$this->StreamInfo['stream_playlist'] = MOVIES_PATH . $this->StreamID . '.' . $this->StreamInfo['container_extension'];
		self::$ipTV_db->query('SELECT t1.*,t2.* FROM `streams_options` t1,`streams_arguments` t2 WHERE t1.stream_id = \'%d\' AND t1.argument_id = t2.id', $this->StreamID);

		$this->StreamInfo['create_channel_queue'] = json_decode($this->StreamInfo['create_channel_queue'], true);

		$this->StreamInfo['transcode_attributes'] = json_decode($this->StreamInfo['profile_options'], true);
		$this->StreamInfo = self::$ipTV_db->f46A3680C3D60298922076D7Ff56BFCa();
		$this->StreamInfo['movie_subtitles'] = !empty($this->StreamInfo['movie_subtitles']) ? json_decode($this->StreamInfo['movie_subtitles'], true) : array();

		if (empty($this->StreamInfo['movie_subtitles'])) {
		}

		$this->StreamInfo['stream_source'] = json_decode($this->StreamInfo['stream_source'], true);
		$this->StreamInfo['stream_playlist'] = STREAMS_PATH . $this->StreamID . '_.m3u8';

		$this->StreamInfo['movie_subs_location'] = $C13b27df5008e4f7ec1d97368609ed5c[1];
		preg_match('/s\\:(.*)\\:(.*)/', $this->StreamInfo['movie_subtitles'][0], $C13b27df5008e4f7ec1d97368609ed5c);
	}
}


?> 

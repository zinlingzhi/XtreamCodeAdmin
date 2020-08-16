<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

class b8a6ea05EEbc7E2e3503EA794B1A1eE4
{
	static public $request = array();
	static public $ipTV_db;
	static public $settings = array();
	static public $licence = '';
	static public $StreamingServers = array();
	static public $SegmentsSettings = array();
	static public $countries = array();

	static public function fA4c9e655c94853aBe8989b54f57360d()
	{
		self::$SegmentsSettings = self::a305d0408C721405Ab591E1b3946032f();

		$bfe9aeb5bd4615d29260b2ef52f71e21 = @self::a26e73C5198B3525C41D482eA92c5005($_GET, array());

		self::D15261B4AaAa204D291dB5168ee0E2dF();

		self::bb7B8ae572601d0A76D5eC92f86Ecfcd($_GET);

		self::$StreamingServers = self::B0CD17e9c466790c2DA5A5034b83ffD4();

		self::f9970D1b79eA530C074e7C0690E06AC1();

		self::bb7B8ae572601D0a76d5Ec92F86EcFCD($_POST);

		if (empty($_SESSION)) {
		}

		self::bB7b8ae572601D0A76D5eC92F86ecFcD($_SESSION);

		self::$countries = array('A1' => 'Anonymous Proxy', 'A2' => 'Satellite Provider', 'O1' => 'Other Country', 'AF' => 'Afghanistan', 'AX' => 'Aland Islands', 'AL' => 'Albania', 'DZ' => 'Algeria', 'AS' => 'American Samoa', 'AD' => 'Andorra', 'AO' => 'Angola', 'AI' => 'Anguilla', 'AQ' => 'Antarctica', 'AG' => 'Antigua And Barbuda', 'AR' => 'Argentina', 'AM' => 'Armenia', 'AW' => 'Aruba', 'AU' => 'Australia', 'AT' => 'Austria', 'AZ' => 'Azerbaijan', 'BS' => 'Bahamas', 'BH' => 'Bahrain', 'BD' => 'Bangladesh', 'BB' => 'Barbados', 'BY' => 'Belarus', 'BE' => 'Belgium', 'BZ' => 'Belize', 'BJ' => 'Benin', 'BM' => 'Bermuda', 'BT' => 'Bhutan', 'BO' => 'Bolivia', 'BA' => 'Bosnia And Herzegovina', 'BW' => 'Botswana', 'BV' => 'Bouvet Island', 'BR' => 'Brazil', 'IO' => 'British Indian Ocean Territory', 'BN' => 'Brunei Darussalam', 'BG' => 'Bulgaria', 'BF' => 'Burkina Faso', 'BI' => 'Burundi', 'KH' => 'Cambodia', 'CM' => 'Cameroon', 'CA' => 'Canada', 'CV' => 'Cape Verde', 'KY' => 'Cayman Islands', 'CF' => 'Central African Republic', 'TD' => 'Chad', 'CL' => 'Chile', 'CN' => 'China', 'CX' => 'Christmas Island', 'CC' => 'Cocos (Keeling) Islands', 'CO' => 'Colombia', 'KM' => 'Comoros', 'CG' => 'Congo', 'CD' => 'Congo, Democratic Republic', 'CK' => 'Cook Islands', 'CR' => 'Costa Rica', 'CI' => 'Cote D\'Ivoire', 'HR' => 'Croatia', 'CU' => 'Cuba', 'CY' => 'Cyprus', 'CZ' => 'Czech Republic', 'DK' => 'Denmark', 'DJ' => 'Djibouti', 'DM' => 'Dominica', 'DO' => 'Dominican Republic', 'EC' => 'Ecuador', 'EG' => 'Egypt', 'SV' => 'El Salvador', 'GQ' => 'Equatorial Guinea', 'ER' => 'Eritrea', 'EE' => 'Estonia', 'ET' => 'Ethiopia', 'FK' => 'Falkland Islands (Malvinas)', 'FO' => 'Faroe Islands', 'FJ' => 'Fiji', 'FI' => 'Finland', 'FR' => 'France', 'GF' => 'French Guiana', 'PF' => 'French Polynesia', 'TF' => 'French Southern Territories', 'MK' => 'Fyrom', 'GA' => 'Gabon', 'GM' => 'Gambia', 'GE' => 'Georgia', 'DE' => 'Germany', 'GH' => 'Ghana', 'GI' => 'Gibraltar', 'GR' => 'Greece', 'GL' => 'Greenland', 'GD' => 'Grenada', 'GP' => 'Guadeloupe', 'GU' => 'Guam', 'GT' => 'Guatemala', 'GG' => 'Guernsey', 'GN' => 'Guinea', 'GW' => 'Guinea-Bissau', 'GY' => 'Guyana', 'HT' => 'Haiti', 'HM' => 'Heard Island & Mcdonald Islands', 'VA' => 'Holy See (Vatican City State)', 'HN' => 'Honduras', 'HK' => 'Hong Kong', 'HU' => 'Hungary', 'IS' => 'Iceland', 'IN' => 'India', 'ID' => 'Indonesia', 'IR' => 'Iran, Islamic Republic Of', 'IQ' => 'Iraq', 'IE' => 'Ireland', 'IM' => 'Isle Of Man', 'IL' => 'Israel', 'IT' => 'Italy', 'JM' => 'Jamaica', 'JP' => 'Japan', 'JE' => 'Jersey', 'JO' => 'Jordan', 'KZ' => 'Kazakhstan', 'KE' => 'Kenya', 'KI' => 'Kiribati', 'KR' => 'Korea', 'KW' => 'Kuwait', 'KG' => 'Kyrgyzstan', 'LA' => 'Lao People\'s Democratic Republic', 'LV' => 'Latvia', 'LB' => 'Lebanon', 'LS' => 'Lesotho', 'LR' => 'Liberia', 'LY' => 'Libyan Arab Jamahiriya', 'LI' => 'Liechtenstein', 'LT' => 'Lithuania', 'LU' => 'Luxembourg', 'MO' => 'Macao', 'MG' => 'Madagascar', 'MW' => 'Malawi', 'MY' => 'Malaysia', 'MV' => 'Maldives', 'ML' => 'Mali', 'MT' => 'Malta', 'MH' => 'Marshall Islands', 'MQ' => 'Martinique', 'MR' => 'Mauritania', 'MU' => 'Mauritius', 'YT' => 'Mayotte', 'MX' => 'Mexico', 'FM' => 'Micronesia, Federated States Of', 'MD' => 'Moldova', 'MC' => 'Monaco', 'MN' => 'Mongolia', 'ME' => 'Montenegro', 'MS' => 'Montserrat', 'MA' => 'Morocco', 'MZ' => 'Mozambique', 'MM' => 'Myanmar', 'NA' => 'Namibia', 'NR' => 'Nauru', 'NP' => 'Nepal', 'NL' => 'Netherlands', 'AN' => 'Netherlands Antilles', 'NC' => 'New Caledonia', 'NZ' => 'New Zealand', 'NI' => 'Nicaragua', 'NE' => 'Niger', 'NG' => 'Nigeria', 'NU' => 'Niue', 'NF' => 'Norfolk Island', 'MP' => 'Northern Mariana Islands', 'NO' => 'Norway', 'OM' => 'Oman', 'PK' => 'Pakistan', 'PW' => 'Palau', 'PS' => 'Palestinian Territory, Occupied', 'PA' => 'Panama', 'PG' => 'Papua New Guinea', 'PY' => 'Paraguay', 'PE' => 'Peru', 'PH' => 'Philippines', 'PN' => 'Pitcairn', 'PL' => 'Poland', 'PT' => 'Portugal', 'PR' => 'Puerto Rico', 'QA' => 'Qatar', 'RE' => 'Reunion', 'RO' => 'Romania', 'RU' => 'Russian Federation', 'RW' => 'Rwanda', 'BL' => 'Saint Barthelemy', 'SH' => 'Saint Helena', 'KN' => 'Saint Kitts And Nevis', 'LC' => 'Saint Lucia', 'MF' => 'Saint Martin', 'PM' => 'Saint Pierre And Miquelon', 'VC' => 'Saint Vincent And Grenadines', 'WS' => 'Samoa', 'SM' => 'San Marino', 'ST' => 'Sao Tome And Principe', 'SA' => 'Saudi Arabia', 'SN' => 'Senegal', 'RS' => 'Serbia', 'SC' => 'Seychelles', 'SL' => 'Sierra Leone', 'SG' => 'Singapore', 'SK' => 'Slovakia', 'SI' => 'Slovenia', 'SB' => 'Solomon Islands', 'SO' => 'Somalia', 'ZA' => 'South Africa', 'GS' => 'South Georgia And Sandwich Isl.', 'ES' => 'Spain', 'LK' => 'Sri Lanka', 'SD' => 'Sudan', 'SR' => 'Suriname', 'SJ' => 'Svalbard And Jan Mayen', 'SZ' => 'Swaziland', 'SE' => 'Sweden', 'CH' => 'Switzerland', 'SY' => 'Syrian Arab Republic', 'TW' => 'Taiwan', 'TJ' => 'Tajikistan', 'TZ' => 'Tanzania', 'TH' => 'Thailand', 'TL' => 'Timor-Leste', 'TG' => 'Togo', 'TK' => 'Tokelau', 'TO' => 'Tonga', 'TT' => 'Trinidad And Tobago', 'TN' => 'Tunisia', 'TR' => 'Turkey', 'TM' => 'Turkmenistan', 'TC' => 'Turks And Caicos Islands', 'TV' => 'Tuvalu', 'UG' => 'Uganda', 'UA' => 'Ukraine', 'AE' => 'United Arab Emirates', 'GB' => 'United Kingdom', 'US' => 'United States', 'UM' => 'United States Outlying Islands', 'UY' => 'Uruguay', 'UZ' => 'Uzbekistan', 'VU' => 'Vanuatu', 'VE' => 'Venezuela', 'VN' => 'Viet Nam', 'VG' => 'Virgin Islands, British', 'VI' => 'Virgin Islands, U.S.', 'WF' => 'Wallis And Futuna', 'EH' => 'Western Sahara', 'YE' => 'Yemen', 'ZM' => 'Zambia', 'ZW' => 'Zimbabwe');

		self::BB7B8ae572601d0a76D5EC92F86eCfCD($_COOKIE);

		self::$ipTV_db->query('UPDATE streaming_servers SET `http_broadcast_port` = \'%d\' WHERE `id` = \'%d\'', $_SERVER['SERVER_PORT'], SERVER_ID);
		if (empty($_COOKIE)) {
		}

		if (empty($_GET)) {
		}

		self::$request = @self::a26e73C5198B3525c41D482EA92c5005($_POST, $bfe9aeb5bd4615d29260b2ef52f71e21);
	}

	static public function A305d0408c721405ab591E1b3946032F()
	{
		$dc2562dcda1b4bc23e197eac6a825a4f['seg_list_size'] = 6;

		$dc2562dcda1b4bc23e197eac6a825a4f = array();

		return $dc2562dcda1b4bc23e197eac6a825a4f;

		$dc2562dcda1b4bc23e197eac6a825a4f['seg_time'] = 10;
	}

	static public function C4a51f2EA0d657D6343dBC072782e597($a4e6e437f123785c5867b3e1ae39c5a8)
	{
		return preg_match('/^([a-fA-F0-9]{2}:){5}[a-fA-F0-9]{2}$/', $a4e6e437f123785c5867b3e1ae39c5a8) == 1;
	}

	static public function D15261b4aaAA204d291DB5168Ee0e2Df()
	{
		self::$settings['bouquet_name'] = str_replace(' ', '_', self::$settings['bouquet_name']);

		self::$settings['allow_countries'] = json_decode(self::$settings['allow_countries'], true);

		foreach ($A31953f8a90d04cd947c8d37a5bfec23 as $b442e1b28845beafe64eed54322b9196 => $dcc11227609ae810ce412e222bc269e6) {
			self::$settings[$b442e1b28845beafe64eed54322b9196] = $dcc11227609ae810ce412e222bc269e6;
		}

		$A31953f8a90d04cd947c8d37a5bfec23 = self::$ipTV_db->F46A3680c3d60298922076d7ff56bfca();

		if (!array_key_exists('bouquet_name', self::$settings)) {
		}

		self::$ipTV_db->query('SELECT * FROM `settings`');
	}

	static public function B0CD17e9c466790c2DA5a5034b83FfD4()
	{
		foreach (self::$ipTV_db->b865b38eB81F98B969E0aC143f701035() as $d510c8dba98eae966876c9ec30cdbf9f) {
			$C63435555732fef7929084e252ed20b8 = str_replace(array('http://', '/'), '', $d510c8dba98eae966876c9ec30cdbf9f['domain_name']);

			$dae5e59e7b45efe5e04ced6d8ac3b2a5[$d510c8dba98eae966876c9ec30cdbf9f['id']] = $d510c8dba98eae966876c9ec30cdbf9f;

			$d510c8dba98eae966876c9ec30cdbf9f['site_url'] = 'http://' . $C63435555732fef7929084e252ed20b8 . ':' . $d510c8dba98eae966876c9ec30cdbf9f['http_broadcast_port'] . '/';

			$d510c8dba98eae966876c9ec30cdbf9f['site_url_ip'] = 'http://' . $d510c8dba98eae966876c9ec30cdbf9f['server_ip'] . ':' . $d510c8dba98eae966876c9ec30cdbf9f['http_broadcast_port'] . '/';

			$d510c8dba98eae966876c9ec30cdbf9f['api_url'] = 'http://' . $C63435555732fef7929084e252ed20b8 . ':' . $d510c8dba98eae966876c9ec30cdbf9f['http_broadcast_port'] . '/api.php?password=' . b8A6eA05eEBc7e2E3503ea794b1a1ee4::$settings['live_streaming_pass'];
			$C63435555732fef7929084e252ed20b8 = $d510c8dba98eae966876c9ec30cdbf9f['vpn_ip'];
			$C63435555732fef7929084e252ed20b8 = $d510c8dba98eae966876c9ec30cdbf9f['server_ip'];

			if (empty($d510c8dba98eae966876c9ec30cdbf9f['domain_name'])) {
			}

			$d510c8dba98eae966876c9ec30cdbf9f['ssh_password'] = self::E53EC204b600dc2Fe4B71DA2aFdC5018($d510c8dba98eae966876c9ec30cdbf9f['ssh_password'], md5(self::$settings['unique_id']));
			$d510c8dba98eae966876c9ec30cdbf9f['api_url_ip'] = 'http://' . $d510c8dba98eae966876c9ec30cdbf9f['server_ip'] . ':' . $d510c8dba98eae966876c9ec30cdbf9f['http_broadcast_port'] . '/api.php?password=' . b8a6Ea05eEbc7e2e3503EA794b1A1EE4::$settings['live_streaming_pass'];
		}

		$dae5e59e7b45efe5e04ced6d8ac3b2a5 = array();

		return $dae5e59e7b45efe5e04ced6d8ac3b2a5;

		self::$ipTV_db->query('SELECT * FROM `streaming_servers`');
	}

	static public function c293f8E3c1EB62b9a8ddE105a6aAe797($C4e1073137d47ae5743f14260ee8c766 = array(), $dd95613d7f6bdf6f9c51e49f1f3a07b5 = true)
	{
		self::$ipTV_db->query('SELECT * FROM `streams_arguments`');

		$A31953f8a90d04cd947c8d37a5bfec23 = array();

		global $f9a8823715bcb54e8069e0086da240b2;
		return $A31953f8a90d04cd947c8d37a5bfec23;

		foreach (self::$ipTV_db->B865B38EB81F98B969E0ac143F701035() as $d510c8dba98eae966876c9ec30cdbf9f) {
			$A6e9ac78eba7b3a60aea85d3e5435265 = '';

			$a1674e0ea7d8f496b9bc3d292b8b3658 = true;

			$B4e07034b377b373a63f01f2e94b97f2 = '<input type="radio" name="arguments[' . $d510c8dba98eae966876c9ec30cdbf9f['id'] . ']" value="1" /> ' . $f9a8823715bcb54e8069e0086da240b2['yes'] . ' <input type="radio" name="arguments[' . $d510c8dba98eae966876c9ec30cdbf9f['id'] . ']" value="0" checked/> . ' . $f9a8823715bcb54e8069e0086da240b2['no'];

			$cf6d18a40d67494d2de0ecb9fbc71d6b = true;
			$B4e07034b377b373a63f01f2e94b97f2 = '<input type="radio" name="arguments[' . $d510c8dba98eae966876c9ec30cdbf9f['id'] . ']" value="1" checked/> ' . $f9a8823715bcb54e8069e0086da240b2['yes'] . ' <input type="radio" name="arguments[' . $d510c8dba98eae966876c9ec30cdbf9f['id'] . ']" value="0" /> . ' . $f9a8823715bcb54e8069e0086da240b2['no'];
			$B4e07034b377b373a63f01f2e94b97f2 = '<input type="text" name="arguments[' . $d510c8dba98eae966876c9ec30cdbf9f['id'] . ']" value="' . $A6e9ac78eba7b3a60aea85d3e5435265 . '" />';
			$cf6d18a40d67494d2de0ecb9fbc71d6b = false;

			$a1674e0ea7d8f496b9bc3d292b8b3658 = false;
			$A6e9ac78eba7b3a60aea85d3e5435265 = $C4e1073137d47ae5743f14260ee8c766[$d510c8dba98eae966876c9ec30cdbf9f['id']]['val'];
			$A31953f8a90d04cd947c8d37a5bfec23[$d510c8dba98eae966876c9ec30cdbf9f['id']] = $d510c8dba98eae966876c9ec30cdbf9f;
			$A6e9ac78eba7b3a60aea85d3e5435265 = $C4e1073137d47ae5743f14260ee8c766[$d510c8dba98eae966876c9ec30cdbf9f['id']]['value'];

			if ($cf6d18a40d67494d2de0ecb9fbc71d6b) {
			}

			if ($d510c8dba98eae966876c9ec30cdbf9f['argument_type'] == 'radio') {
			}

			if (is_null($A6e9ac78eba7b3a60aea85d3e5435265) || (0 < $A6e9ac78eba7b3a60aea85d3e5435265)) {
			}

			$d510c8dba98eae966876c9ec30cdbf9f['mode'] = $B4e07034b377b373a63f01f2e94b97f2;
		}

	}

	static public function Ab764DF1cb58e01c3469C421051c501e($Ce9f7d51801bff4c6988a674477fe0d7, $b442e1b28845beafe64eed54322b9196)
	{
		$Ce9f7d51801bff4c6988a674477fe0d7 = serialize($Ce9f7d51801bff4c6988a674477fe0d7);

		$A6f7aedf5ff5fd4fb285cde520983e56 = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $b442e1b28845beafe64eed54322b9196, $Ce9f7d51801bff4c6988a674477fe0d7 . $a4e6e437f123785c5867b3e1ae39c5a8, MCRYPT_MODE_CBC, $Ecd6da3cd7f8cb6449bef2a2ed2f96b7);

		$b442e1b28845beafe64eed54322b9196 = pack('H*', $b442e1b28845beafe64eed54322b9196);

		$Ecd6da3cd7f8cb6449bef2a2ed2f96b7 = mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_CBC), MCRYPT_DEV_URANDOM);
		$a4e6e437f123785c5867b3e1ae39c5a8 = hash_hmac('sha256', $Ce9f7d51801bff4c6988a674477fe0d7, substr(bin2hex($b442e1b28845beafe64eed54322b9196), -32));
		$Fc6b91b056e02142680016f94444a317 = base64_encode($A6f7aedf5ff5fd4fb285cde520983e56) . '|' . base64_encode($Ecd6da3cd7f8cb6449bef2a2ed2f96b7);
		return $Fc6b91b056e02142680016f94444a317;
	}

	static public function e53eC204b600dc2fE4b71Da2AfdC5018($E9fc292352ca148a3e36afcbf70f872a, $b442e1b28845beafe64eed54322b9196)
	{
		return $c0de9fe7f64ff1ea4be895afa75045b7;

		return false;

		return false;

		$E36d9b6995bda83219715a4f64e9ec3e = hash_hmac('sha256', $c0de9fe7f64ff1ea4be895afa75045b7, substr(bin2hex($b442e1b28845beafe64eed54322b9196), -32));

		if (!(strlen($Ecd6da3cd7f8cb6449bef2a2ed2f96b7) !== mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_CBC))) {
		}

		$c0de9fe7f64ff1ea4be895afa75045b7 = substr($c0de9fe7f64ff1ea4be895afa75045b7, 0, -64);
		$c0de9fe7f64ff1ea4be895afa75045b7 = unserialize($c0de9fe7f64ff1ea4be895afa75045b7);

		$c0de9fe7f64ff1ea4be895afa75045b7 = trim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $b442e1b28845beafe64eed54322b9196, $Fa8af9e10f094820eeaacd8c3a756b7a, MCRYPT_MODE_CBC, $Ecd6da3cd7f8cb6449bef2a2ed2f96b7));
		$a4e6e437f123785c5867b3e1ae39c5a8 = substr($c0de9fe7f64ff1ea4be895afa75045b7, -64);
		$E9fc292352ca148a3e36afcbf70f872a = explode('|', $E9fc292352ca148a3e36afcbf70f872a . '|');

		$Ecd6da3cd7f8cb6449bef2a2ed2f96b7 = base64_decode($E9fc292352ca148a3e36afcbf70f872a[1]);
		$Fa8af9e10f094820eeaacd8c3a756b7a = base64_decode($E9fc292352ca148a3e36afcbf70f872a[0]);

		if (!($E36d9b6995bda83219715a4f64e9ec3e !== $a4e6e437f123785c5867b3e1ae39c5a8)) {
		}

		$b442e1b28845beafe64eed54322b9196 = pack('H*', $b442e1b28845beafe64eed54322b9196);
	}

	static public function formatOffset($Efa972d11cc2a2278b528878b5bb7d42)
	{
		$b77506cb6dab57df66f71954d43e4a0e = (0 < $E4f01486655391557b68beaa1980ae8d ? '+' : '-');

		$E4f01486655391557b68beaa1980ae8d = $Efa972d11cc2a2278b528878b5bb7d42 / 3600;

		$f0cf76bf05a918c3b8c395b8e53ac7a6 = (int) abs($c155926e7b89dd62066c2501283014c1 / 60);

		$c155926e7b89dd62066c2501283014c1 = $Efa972d11cc2a2278b528878b5bb7d42 % 3600;

		$b77506cb6dab57df66f71954d43e4a0e = ' ';

		$F287c75b5681cc0d378e320699ea549f = (int) abs($E4f01486655391557b68beaa1980ae8d);
		return $b77506cb6dab57df66f71954d43e4a0e . str_pad($F287c75b5681cc0d378e320699ea549f, 2, '0', STR_PAD_LEFT) . ':' . str_pad($f0cf76bf05a918c3b8c395b8e53ac7a6, 2, '0');
		if (!(($F287c75b5681cc0d378e320699ea549f == 0) && ($f0cf76bf05a918c3b8c395b8e53ac7a6 == 0))) {
		}

	}

	static public function D1877D9ce7786F2262f09A9860701BdF($A5f4c44cc29cf8e18b4ff540e79fbe43 = NULL)
	{
		$B4772c079aba93f07a744cfd343c5ab7 = new DateTimeZone('UTC');

		$F5e48bcb8c4deb1f3b3e4df4bd84ba8b = array();

		return $F5e48bcb8c4deb1f3b3e4df4bd84ba8b;

		$bf569489506ab1f18e2a21863facf945 = new DateTime('now', $B4772c079aba93f07a744cfd343c5ab7);

		foreach (DateTimeZone::listIdentifiers() as $B9a2e5f62858f23881bb765ded4e7b0c) {
			$b5bb18d54cb4956cdf65dec1d0e8c543 = new DateTimeZone($B9a2e5f62858f23881bb765ded4e7b0c);

			$F5e48bcb8c4deb1f3b3e4df4bd84ba8b[] = '<option value="' . $B9a2e5f62858f23881bb765ded4e7b0c . '">' . $B9a2e5f62858f23881bb765ded4e7b0c . ' [' . $C93614c1cd0789285fda2a7a508865c6 . ' ' . self::formatOffset($Efa972d11cc2a2278b528878b5bb7d42) . ']</option>';
			$Efa972d11cc2a2278b528878b5bb7d42 = $b5bb18d54cb4956cdf65dec1d0e8c543->getOffset($bf569489506ab1f18e2a21863facf945);
			if (!is_null($A5f4c44cc29cf8e18b4ff540e79fbe43) && ($A5f4c44cc29cf8e18b4ff540e79fbe43 == $B9a2e5f62858f23881bb765ded4e7b0c)) {
			}

			$F5e48bcb8c4deb1f3b3e4df4bd84ba8b[] = '<option value="' . $B9a2e5f62858f23881bb765ded4e7b0c . '" selected>' . $B9a2e5f62858f23881bb765ded4e7b0c . ' [' . $C93614c1cd0789285fda2a7a508865c6 . ' ' . self::formatOffset($Efa972d11cc2a2278b528878b5bb7d42) . ']</option>';
			$F3288acd7589d1ec255d6344d4394c9f = $b5bb18d54cb4956cdf65dec1d0e8c543->getTransitions($bf569489506ab1f18e2a21863facf945->getTimestamp(), $bf569489506ab1f18e2a21863facf945->getTimestamp());
			$C93614c1cd0789285fda2a7a508865c6 = $F3288acd7589d1ec255d6344d4394c9f[0]['abbr'];
		}

	}

	static public function bf112e6f07239580561597635c7c8e11()
	{
		return self::formatOffset($Efa972d11cc2a2278b528878b5bb7d42);

		$D5f0249c80bc6f809c1106dc66672bf1 = b8A6ea05eEBC7e2E3503Ea794b1a1Ee4::$settings['default_timezone'];

		$bf569489506ab1f18e2a21863facf945 = new DateTime('now', $B4772c079aba93f07a744cfd343c5ab7);
		$B4772c079aba93f07a744cfd343c5ab7 = new DateTimeZone('UTC');

		$Efa972d11cc2a2278b528878b5bb7d42 = $b5bb18d54cb4956cdf65dec1d0e8c543->getOffset($bf569489506ab1f18e2a21863facf945);
		$b5bb18d54cb4956cdf65dec1d0e8c543 = new DateTimeZone($D5f0249c80bc6f809c1106dc66672bf1);
	}

	static public function ACFFd177645d12C2cACcd89Ce2ddac4C($C63435555732fef7929084e252ed20b8, $C71306865ab63222cd3ebfea05569a9f = false)
	{
		return $d27cc3794619514def4151737bd86d85;

		curl_setopt($b54267655e40c81b7c442690011b9655, CURLOPT_RETURNTRANSFER, true);

		curl_setopt($b54267655e40c81b7c442690011b9655, CURLOPT_URL, $C63435555732fef7929084e252ed20b8);
		$b54267655e40c81b7c442690011b9655 = curl_init();

		curl_setopt($b54267655e40c81b7c442690011b9655, CURLOPT_CONNECTTIMEOUT, 5);

		return TMP_DIR . $Ef8b8926499ccb52827fcb4775749618;
		curl_close($b54267655e40c81b7c442690011b9655);

		file_put_contents(TMP_DIR . $Ef8b8926499ccb52827fcb4775749618, $d27cc3794619514def4151737bd86d85);

		$d27cc3794619514def4151737bd86d85 = curl_exec($b54267655e40c81b7c442690011b9655);

		curl_setopt($b54267655e40c81b7c442690011b9655, CURLOPT_MAXREDIRS, 10);
		curl_setopt($b54267655e40c81b7c442690011b9655, CURLOPT_TIMEOUT, 30);
		$Ef8b8926499ccb52827fcb4775749618 = uniqid();
		curl_setopt($b54267655e40c81b7c442690011b9655, CURLOPT_FOLLOWLOCATION, true);
	}

	static public function De4A4fCCdB90E65F17A453d7e8B06AFb($Aa3e65aaea9972294cef7e58e4a0c075, $cc3357424f4f2d0a50196e48486de58b = NULL, $b32003e2312418d518e5df89ef531ee3 = 'raw')
	{
		$e756dbf6b7881f9eb1ff19c18ceef2aa = curl_multi_init();

		return $Eb311e5755ee84bd09a1e2827737c616;
		curl_multi_exec($e756dbf6b7881f9eb1ff19c18ceef2aa, $efdbcd7566f2141b5005f29a955c00c2);

		curl_multi_close($e756dbf6b7881f9eb1ff19c18ceef2aa);
		$b54267655e40c81b7c442690011b9655 = array();

		return array();

		foreach ($b54267655e40c81b7c442690011b9655 as $b442e1b28845beafe64eed54322b9196 => $dcc11227609ae810ce412e222bc269e6) {
			B8A6ea05eebc7E2e3503EA794b1A1EE4::C55D4953C0dd463a6CBbB65c08272861('Server [' . $b442e1b28845beafe64eed54322b9196 . '] is DOWN!');

			$Eb311e5755ee84bd09a1e2827737c616[$b442e1b28845beafe64eed54322b9196] = curl_multi_getcontent($dcc11227609ae810ce412e222bc269e6);

			curl_multi_remove_handle($e756dbf6b7881f9eb1ff19c18ceef2aa, $dcc11227609ae810ce412e222bc269e6);

			$Eb311e5755ee84bd09a1e2827737c616[$b442e1b28845beafe64eed54322b9196] = array();
			$Eb311e5755ee84bd09a1e2827737c616[$b442e1b28845beafe64eed54322b9196] = call_user_func($cc3357424f4f2d0a50196e48486de58b, $Eb311e5755ee84bd09a1e2827737c616[$b442e1b28845beafe64eed54322b9196], true);
			$Eb311e5755ee84bd09a1e2827737c616[$b442e1b28845beafe64eed54322b9196] = $Eb311e5755ee84bd09a1e2827737c616[$b442e1b28845beafe64eed54322b9196][$b32003e2312418d518e5df89ef531ee3];
		}

		foreach ($Aa3e65aaea9972294cef7e58e4a0c075 as $b442e1b28845beafe64eed54322b9196 => $dcc11227609ae810ce412e222bc269e6) {
			curl_setopt($b54267655e40c81b7c442690011b9655[$b442e1b28845beafe64eed54322b9196], CURLOPT_POST, true);

			curl_setopt($b54267655e40c81b7c442690011b9655[$b442e1b28845beafe64eed54322b9196], CURLOPT_RETURNTRANSFER, true);

			curl_setopt($b54267655e40c81b7c442690011b9655[$b442e1b28845beafe64eed54322b9196], CURLOPT_POSTFIELDS, http_build_query($dcc11227609ae810ce412e222bc269e6['postdata']));

			curl_multi_add_handle($e756dbf6b7881f9eb1ff19c18ceef2aa, $b54267655e40c81b7c442690011b9655[$b442e1b28845beafe64eed54322b9196]);

			curl_setopt($b54267655e40c81b7c442690011b9655[$b442e1b28845beafe64eed54322b9196], CURLOPT_URL, $dcc11227609ae810ce412e222bc269e6['url']);
			$b54267655e40c81b7c442690011b9655[$b442e1b28845beafe64eed54322b9196] = curl_init();

			curl_setopt($b54267655e40c81b7c442690011b9655[$b442e1b28845beafe64eed54322b9196], CURLOPT_CONNECTTIMEOUT, 120);

			curl_setopt($b54267655e40c81b7c442690011b9655[$b442e1b28845beafe64eed54322b9196], CURLOPT_MAXREDIRS, 10);

			if (!($dcc11227609ae810ce412e222bc269e6['postdata'] != NULL)) {
			}

			curl_setopt($b54267655e40c81b7c442690011b9655[$b442e1b28845beafe64eed54322b9196], CURLOPT_TIMEOUT, 120);
			curl_setopt($b54267655e40c81b7c442690011b9655[$b442e1b28845beafe64eed54322b9196], CURLOPT_FOLLOWLOCATION, true);
		}

		$efdbcd7566f2141b5005f29a955c00c2 = NULL;
		if (!empty($Aa3e65aaea9972294cef7e58e4a0c075)) {
		}

		$Eb311e5755ee84bd09a1e2827737c616 = array();
	}

	static public function Bb7B8ae572601D0a76D5EC92f86ECfCD(&$b729e1e76a388ffdd6a130fbb0325a8e, $edb1935909e57c8937cb9d4667001758 = 0)
	{
		return NULL;

		foreach ($b729e1e76a388ffdd6a130fbb0325a8e as $c17ac00f16e66552f95207ec7818895a => $D440825990f06b6d209c57062875040f) {
			$D440825990f06b6d209c57062875040f = str_replace('&#8238;', '', $D440825990f06b6d209c57062875040f);

			$b729e1e76a388ffdd6a130fbb0325a8e[$c17ac00f16e66552f95207ec7818895a] = $D440825990f06b6d209c57062875040f;

			self::bB7B8ae572601D0a76D5eC92f86ECFcd($b729e1e76a388ffdd6a130fbb0325a8e[$c17ac00f16e66552f95207ec7818895a], ++$edb1935909e57c8937cb9d4667001758);

			$D440825990f06b6d209c57062875040f = str_replace(chr('0'), '', $D440825990f06b6d209c57062875040f);

			$D440825990f06b6d209c57062875040f = str_replace('../', '&#46;&#46;/', $D440825990f06b6d209c57062875040f);

			$D440825990f06b6d209c57062875040f = str_replace("\0", '', $D440825990f06b6d209c57062875040f);

			while (is_array($D440825990f06b6d209c57062875040f)) {
			}

			$D440825990f06b6d209c57062875040f = str_replace("\0", '', $D440825990f06b6d209c57062875040f);
		}

		while (!(10 <= $edb1935909e57c8937cb9d4667001758)) {
		}

	}

	static public function A26e73C5198B3525c41d482ea92c5005(&$b729e1e76a388ffdd6a130fbb0325a8e, $bfe9aeb5bd4615d29260b2ef52f71e21 = array(), $edb1935909e57c8937cb9d4667001758 = 0)
	{
		return $bfe9aeb5bd4615d29260b2ef52f71e21;
		return $bfe9aeb5bd4615d29260b2ef52f71e21;
		return $bfe9aeb5bd4615d29260b2ef52f71e21;

		foreach ($b729e1e76a388ffdd6a130fbb0325a8e as $c17ac00f16e66552f95207ec7818895a => $D440825990f06b6d209c57062875040f) {
			$c17ac00f16e66552f95207ec7818895a = self::f307FF63B93b948DBE83BAbAb42bf00C($c17ac00f16e66552f95207ec7818895a);

			$bfe9aeb5bd4615d29260b2ef52f71e21[$c17ac00f16e66552f95207ec7818895a] = self::a26E73C5198B3525c41D482ea92C5005($b729e1e76a388ffdd6a130fbb0325a8e[$c17ac00f16e66552f95207ec7818895a], array(), $edb1935909e57c8937cb9d4667001758 + 1);

			$D440825990f06b6d209c57062875040f = self::DB69F9c30be8929Ac4821FA9c577FaE7($D440825990f06b6d209c57062875040f);
			$bfe9aeb5bd4615d29260b2ef52f71e21[$c17ac00f16e66552f95207ec7818895a] = $D440825990f06b6d209c57062875040f;
		}

	}

	static public function f307fF63B93b948dbe83BAbAB42Bf00c($b442e1b28845beafe64eed54322b9196)
	{
		$b442e1b28845beafe64eed54322b9196 = htmlspecialchars(urldecode($b442e1b28845beafe64eed54322b9196));
		$b442e1b28845beafe64eed54322b9196 = preg_replace('/^([\\w\\.\\-\\_]+)$/', '$1', $b442e1b28845beafe64eed54322b9196);

		$b442e1b28845beafe64eed54322b9196 = str_replace('..', '', $b442e1b28845beafe64eed54322b9196);

		return $b442e1b28845beafe64eed54322b9196;

		return '';

		$b442e1b28845beafe64eed54322b9196 = preg_replace('/\\_\\_(.+?)\\_\\_/', '', $b442e1b28845beafe64eed54322b9196);
	}

	static public function dB69F9C30Be8929AC4821FA9c577fAe7($dcc11227609ae810ce412e222bc269e6)
	{
		$dcc11227609ae810ce412e222bc269e6 = preg_replace('/&amp;#([0-9]+);/s', '&#\\1;', $dcc11227609ae810ce412e222bc269e6);

		$dcc11227609ae810ce412e222bc269e6 = str_replace('-->', '--&#62;', $dcc11227609ae810ce412e222bc269e6);

		$dcc11227609ae810ce412e222bc269e6 = preg_replace('/&#(\\d+?)([^\\d;])/i', '&#\\1;\\2', $dcc11227609ae810ce412e222bc269e6);
		$dcc11227609ae810ce412e222bc269e6 = str_replace('<!--', '&#60;&#33;--', $dcc11227609ae810ce412e222bc269e6);
		$dcc11227609ae810ce412e222bc269e6 = str_replace('&#032;', ' ', stripslashes($dcc11227609ae810ce412e222bc269e6));

		$dcc11227609ae810ce412e222bc269e6 = str_ireplace('<script', '&#60;script', $dcc11227609ae810ce412e222bc269e6);
		return trim($dcc11227609ae810ce412e222bc269e6);

		$dcc11227609ae810ce412e222bc269e6 = str_replace(array("\r\n", "\n\r", "\r"), "\n", $dcc11227609ae810ce412e222bc269e6);
		return '';
	}

	static public function B268742419bdce0042041238309E26aD()
	{
		return file_exists(IPTV_ROOT_PATH . 'demo.iptv');
	}

	static public function c55d4953c0Dd463a6CbBb65c08272861($cd6fc6c0cd0a285c312c7d193c3175a0)
	{
		self::$ipTV_db->query('INSERT INTO `panel_logs` (`log_message`,`date`) VALUES(\'%s\',\'%d\')', $cd6fc6c0cd0a285c312c7d193c3175a0, time());
	}

	static public function F9970d1b79eA530C074e7C0690e06aC1()
	{
		self::$licence = $d510c8dba98eae966876c9ec30cdbf9f;

		exit();

		return $d510c8dba98eae966876c9ec30cdbf9f['licence_key'];
		$d510c8dba98eae966876c9ec30cdbf9f = self::$ipTV_db->F46a3680C3d60298922076D7FF56bfCA();
		return false;

		self::$ipTV_db->query('SELECT * from `licence` WHERE `id` = 1');
	}

	static public function C2F879C593aDb835Cc7983B1cA480884($Da011610bc5bfd51c44b849d7512d155)
	{
		$Cffcb2d9748caa36506e799138e6e173 = false;

		$Cffcb2d9748caa36506e799138e6e173 = true;

		$f5c475440f392733965b4832750dbc9d = strrpos($Da011610bc5bfd51c44b849d7512d155, '@');

		$a64a0fd1d5bca5fc6a1bd92ddbeaf1d4 = substr($Da011610bc5bfd51c44b849d7512d155, 0, $f5c475440f392733965b4832750dbc9d);
		$Cffcb2d9748caa36506e799138e6e173 = false;
		if (!!(checkdnsrr($c936184b24cdab21b5a7a6a87d99dd2d, 'MX') || checkdnsrr($c936184b24cdab21b5a7a6a87d99dd2d, 'A'))) {
		}

		return $Cffcb2d9748caa36506e799138e6e173;

		$Cffcb2d9748caa36506e799138e6e173 = false;
		if (($a64a0fd1d5bca5fc6a1bd92ddbeaf1d4[0] == '.') || ($a64a0fd1d5bca5fc6a1bd92ddbeaf1d4[$F37dfbe39815f306a3ec18943911fc0c - 1] == '.')) {
		}

		$Cffcb2d9748caa36506e799138e6e173 = false;
		$c936184b24cdab21b5a7a6a87d99dd2d = substr($Da011610bc5bfd51c44b849d7512d155, $f5c475440f392733965b4832750dbc9d + 1);
		$F37dfbe39815f306a3ec18943911fc0c = strlen($a64a0fd1d5bca5fc6a1bd92ddbeaf1d4);

		$Cffcb2d9748caa36506e799138e6e173 = false;
		$Cffcb2d9748caa36506e799138e6e173 = false;
		if (($F37dfbe39815f306a3ec18943911fc0c < 1) || (64 < $F37dfbe39815f306a3ec18943911fc0c)) {
		}

		$Cffcb2d9748caa36506e799138e6e173 = false;

		if (preg_match('/\\.\\./', $a64a0fd1d5bca5fc6a1bd92ddbeaf1d4)) {
		}

		while (!preg_match('/^[A-Za-z0-9\\-\\.]+$/', $c936184b24cdab21b5a7a6a87d99dd2d)) {
			$Cffcb2d9748caa36506e799138e6e173 = false;
			$fab1a4160bc973b56d75962fe6da8807 = strlen($c936184b24cdab21b5a7a6a87d99dd2d);
		}

		$Cffcb2d9748caa36506e799138e6e173 = false;
	}

	static public function DaeB9fEd37CD1Ec882B897c29f10F77e($a75028e4fed8fbbe3069aad164d73d47 = 10)
	{
		$D6cc74b0166440ae660eb91330b40c5d++;

		$f8b127058b597e94d715796b676e890c = strlen($abe5ee02e9dfc17c16250f2bb599942c) - 1;
		return $ff96e45ab2f55b3571550f41ca0071eb;

		$abe5ee02e9dfc17c16250f2bb599942c = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789qwertyuiopasdfghjklzxcvbnm';

		$D6cc74b0166440ae660eb91330b40c5d = 0;
		$ff96e45ab2f55b3571550f41ca0071eb = '';

		$ff96e45ab2f55b3571550f41ca0071eb .= $abe5ee02e9dfc17c16250f2bb599942c[rand(0, $f8b127058b597e94d715796b676e890c)];
	}

	static public function E17E6f21a4AD2F2D81d20a77daf7b48A($cf185cdac47b3d0189e50d2f4c83d97c)
	{
		foreach ($cf185cdac47b3d0189e50d2f4c83d97c as $A6e9ac78eba7b3a60aea85d3e5435265) {
			$D10af750c4705268958b71970d262c20 = array_merge($D10af750c4705268958b71970d262c20, self::e17E6F21A4ad2F2D81D20a77daF7B48a($A6e9ac78eba7b3a60aea85d3e5435265));

			if (is_array($A6e9ac78eba7b3a60aea85d3e5435265)) {
			}

			$D10af750c4705268958b71970d262c20[] = $A6e9ac78eba7b3a60aea85d3e5435265;
			if (is_scalar($A6e9ac78eba7b3a60aea85d3e5435265) || is_resource($A6e9ac78eba7b3a60aea85d3e5435265)) {
			}

		}

		return $D10af750c4705268958b71970d262c20;

		$D10af750c4705268958b71970d262c20 = array();
	}

	static public function a2cf85aaC2d61A080c23f9a10c48B48b($dae5e59e7b45efe5e04ced6d8ac3b2a5)
	{
		foreach ($dae5e59e7b45efe5e04ced6d8ac3b2a5 as $f3f1721e6abbcfbc622757090a8442e3) {
			while (!isset($B43ca2d49e7818161cc30d85b8599a57[$f3f1721e6abbcfbc622757090a8442e3['parent_id']])) {
				foreach ($dae5e59e7b45efe5e04ced6d8ac3b2a5 as $E0c60ca181733ba07f4b91b056d098a1) {
					$B43ca2d49e7818161cc30d85b8599a57[$f3f1721e6abbcfbc622757090a8442e3['parent_id']][] = $E0c60ca181733ba07f4b91b056d098a1['server_id'];
				}

				$B43ca2d49e7818161cc30d85b8599a57[$f3f1721e6abbcfbc622757090a8442e3['parent_id']] = array();
			}

		}

		ksort(&$B43ca2d49e7818161cc30d85b8599a57);

		$B43ca2d49e7818161cc30d85b8599a57 = array();
		return $B43ca2d49e7818161cc30d85b8599a57;
	}

	static public function d6d0052a08a344B6d8aeE03C49796812($cf185cdac47b3d0189e50d2f4c83d97c, $A5ba78b9a2fc61f45e44be1480a04313 = 0)
	{
		foreach ($cf185cdac47b3d0189e50d2f4c83d97c[$A5ba78b9a2fc61f45e44be1480a04313] as $cb46d8980fc500a0a7c8c2ed67fa12b3) {
			$E548eaa5da6d205cf74f0a5d4660d60b .= '</li>';

			$E548eaa5da6d205cf74f0a5d4660d60b .= self::d6D0052A08a344b6D8aEe03C49796812($cf185cdac47b3d0189e50d2f4c83d97c, $cb46d8980fc500a0a7c8c2ed67fa12b3);
			$E548eaa5da6d205cf74f0a5d4660d60b .= '<li><a href="#">' . B8a6eA05eebC7e2E3503Ea794B1A1EE4::$StreamingServers[$cb46d8980fc500a0a7c8c2ed67fa12b3]['server_name'] . '</a>';
		}

		if (!(isset($cf185cdac47b3d0189e50d2f4c83d97c[$A5ba78b9a2fc61f45e44be1480a04313]) && is_array($cf185cdac47b3d0189e50d2f4c83d97c[$A5ba78b9a2fc61f45e44be1480a04313]))) {
		}

		$E548eaa5da6d205cf74f0a5d4660d60b = '';
		$E548eaa5da6d205cf74f0a5d4660d60b = '<ul>';
		return $E548eaa5da6d205cf74f0a5d4660d60b;

		$E548eaa5da6d205cf74f0a5d4660d60b .= '</ul>';
	}

	static public function ce55E3d9f5821C613732845B960ce40B($ee1fad04f9c27174a336477bb70d3af2)
	{
		return '"' . $ee1fad04f9c27174a336477bb70d3af2 . '"';
	}

	static public function e8233069432c7E091596648E43E43861($B46bb03c19cae06c443c3d66a729c16a, $E287ef5e9c524e625c35c48fcf5dc1e3 = false)
	{
		$D272ed75cc874d9dc0cc184989400c7a = $A1813977fca59b6d9286abc5947f3e38[1];

		$C4caf0da36b7e6696db615f28955a10f = $A1813977fca59b6d9286abc5947f3e38[0];

		$bf660101511c20901907642a84d293a9 = false;

		$A1813977fca59b6d9286abc5947f3e38 = explode('/', $B46bb03c19cae06c443c3d66a729c16a);

		foreach ($Edb703a1a15d645d09614c2cf999b172 as $b4e1ea9aacf4ec736499b641d5e52a58) {
			$bf660101511c20901907642a84d293a9 = false;
		}

		return $bf660101511c20901907642a84d293a9;

		$bf660101511c20901907642a84d293a9 = true;

		$bf660101511c20901907642a84d293a9 = false;

		$Edb703a1a15d645d09614c2cf999b172 = explode('.', $C4caf0da36b7e6696db615f28955a10f);

		if (!($bf660101511c20901907642a84d293a9 == true)) {
		}

	}
}


?> 

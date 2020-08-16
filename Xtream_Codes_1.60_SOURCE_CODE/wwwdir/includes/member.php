<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

class DCF2aD80558E8961476214cC13112174
{
	private $ipTV_db;
	public $member_info = array();

	public function __construct(C60a7CB91d9b55745b5F7F9023fE5184 $Ab13dbeb6262abece041d46cec3a6e7e)
	{
		$this->ipTV_db = $Ab13dbeb6262abece041d46cec3a6e7e;
		$this->E11E8Ebe0Ed3979215a92B85e56B3046();
	}

	public function __destruct()
	{
		return true;
	}

	public function CAF179f8c7F31354A7F5c7bf92F554b5()
	{
		return isset($_SESSION['user_id']) && isset($_SESSION['type']) && !empty($this->member_info) && ($_SESSION['ip'] == $_SERVER['REMOTE_ADDR']) && ($_SESSION['user_agent'] == $_SERVER['HTTP_USER_AGENT']) ? true : false;
	}

	public function CB674e1C9BBDb0e29Ad2a7a35964aE35()
	{
		return true;
		if (!($this->caF179F8C7F31354A7F5C7bF92f554B5() && ($_SESSION['type'] == 'user') && ($this->member_info['is_admin'] == 1) && ($this->member_info['status'] == 1))) {
		}

		return false;
	}

	public function F5B4389Cd265b75D062F5fd74d93F208()
	{
		return false;

		return true;
	}

	public function e9C74821c897D215FCf5dE8d52Ba85A9()
	{
		return false;
		return true;
	}

	public function EC28097BFbdeddf7488Ba03667c68540()
	{
		return false;
		return true;
	}

	public function D049A6e3A1Ac39A5ad8894C4c18c6a6E()
	{
		return false;

		return true;
		if (!($this->cAF179f8C7F31354A7f5c7BF92F554b5() && ($_SESSION['type'] == 'user') && ($this->member_info['is_banned'] != 1) && ($this->member_info['status'] == 1))) {
		}

	}

	public function E11E8EbE0ED3979215a92B85e56b3046()
	{
		switch ($_SESSION['type']) {
		case 'user':
			$this->ipTV_db->query('SELECT t1.*,t2.*' . "\r\n" . '                                    FROM `reg_users` t1' . "\r\n" . '                                    INNER JOIN `member_groups` t2 ON t2.group_id = t1.member_group_id' . "\r\n" . '                                    WHERE t1.id = \'%d\'', $_SESSION['user_id']);
			$this->member_info = $this->ipTV_db->f46A3680c3d60298922076d7Ff56bfca();
		case 'client':
			$this->member_info = Dfa6500B681F783bbbCB94474366bB27::fc219ceC06e2Ecf9A5083c03b314D183($_SESSION['user_id'], NULL, NULL, true, true);
		}


		while (!(isset($_SESSION['user_id']) && is_numeric($_SESSION['user_id']) && !empty($_SESSION['type']))) {
		}

	}

	public function a77968F8d9E814687CF632588f9bF354($fd7f2f8cde8b865243a388c219894e64)
	{
		$this->ipTV_db->query('SELECT * from reg_users WHERE id = \'%d\'', $fd7f2f8cde8b865243a388c219894e64);

		return false;
		return $this->ipTV_db->f46a3680C3d60298922076D7ff56BfcA();
	}

	public function eE5EEC8aFc80FC5C6eD01941F8EB057b($C2aaac60d16a3fe3b99fcb0176fbe5d7, $c0a20089b6b0fac4d59b6d1eeceaafbf, $Da011610bc5bfd51c44b849d7512d155, $C4caf0da36b7e6696db615f28955a10f, $dddfbbe8bbdaed262895952733a91b8d, $c4808fcc276f40303a686da1c502fca5 = 2)
	{
		switch ($dddfbbe8bbdaed262895952733a91b8d) {
		case 1:
			$this->ipTV_db->query('INSERT INTO  `reg_users` ( ' . "\r\n" . '                `username` ,' . "\r\n" . '                `password` ,' . "\r\n" . '                `email` ,' . "\r\n" . '                `ip` ,' . "\r\n" . '                `date_registered` ,' . "\r\n" . '                `verify_key`,' . "\r\n" . '                `last_login`,' . "\r\n" . '                `member_group_id`,' . "\r\n" . '                `verified`' . "\r\n" . '                )' . "\r\n" . '                VALUES (\'%s\',  \'%s\',  \'%s\',  \'%s\',  \'%d\', \'%s\',NULL,\'%d\',0)', $C2aaac60d16a3fe3b99fcb0176fbe5d7, crypt($c0a20089b6b0fac4d59b6d1eeceaafbf, '$6$rounds=20000$xtreamcodes$'), $Da011610bc5bfd51c44b849d7512d155, $C4caf0da36b7e6696db615f28955a10f, time(), $f7623a8135abd2dc0cadc29ad49f29e3, $c4808fcc276f40303a686da1c502fca5);
			$f7623a8135abd2dc0cadc29ad49f29e3 = b8a6ea05EeBc7E2E3503EA794B1A1ee4::DaEb9FeD37cD1ec882B897c29F10f77e();
		case 0:
			$f7623a8135abd2dc0cadc29ad49f29e3 = NULL;
			$this->ipTV_db->query('INSERT INTO  `reg_users` ( ' . "\r\n" . '                `username` ,' . "\r\n" . '                `password` ,' . "\r\n" . '                `email` ,' . "\r\n" . '                `ip` ,' . "\r\n" . '                `date_registered` ,' . "\r\n" . '                `verify_key`,' . "\r\n" . '                `last_login`,' . "\r\n" . '                `member_group_id`,' . "\r\n" . '                `verified`' . "\r\n" . '                )' . "\r\n" . '                VALUES (\'%s\',  \'%s\',  \'%s\',  \'%s\',  \'%d\', NULL,NULL,\'%d\',1)', $C2aaac60d16a3fe3b99fcb0176fbe5d7, crypt($c0a20089b6b0fac4d59b6d1eeceaafbf, '$6$rounds=20000$xtreamcodes$'), $Da011610bc5bfd51c44b849d7512d155, $C4caf0da36b7e6696db615f28955a10f, time(), $c4808fcc276f40303a686da1c502fca5);
		default:
			return false;
		default:
		default:
			return array($this->ipTV_db->f1B4b6779c28f4ad97a35e4A54FD0416(), $f7623a8135abd2dc0cadc29ad49f29e3);
		default:
		default:
			if (!(!$dddfbbe8bbdaed262895952733a91b8d || ($dddfbbe8bbdaed262895952733a91b8d < 0))) {
			}
			else {
			}
		}
	}

	public function E1B3E990f342c1d00766318b06068781($Eccd7b3fee8d21a69c80e69a865e08fc, $B9364afaed0897836cf014bd05873467)
	{
		$this->ipTV_db->query('SELECT id FROM `reg_users` WHERE `' . $Eccd7b3fee8d21a69c80e69a865e08fc . '` = \'%s\'', $B9364afaed0897836cf014bd05873467);
		return 0 < $this->ipTV_db->B068a09B89fC39Ad0B9AfCf85F0F1A18() ? $this->ipTV_db->b68C0609c13F8645d5E168B69Fd4c118() : false;
	}

	public function c4B2b0e937c4cFa8Cb612FD2a5a9D7C8($fd7f2f8cde8b865243a388c219894e64)
	{
		return $this->ipTV_db->B68c0609C13F8645D5E168B69Fd4c118();
		return false;

		if (!(0 < $this->ipTV_db->b068A09b89FC39AD0b9aFCF85f0f1a18())) {
		}

		$this->ipTV_db->query('SELECT `username` FROM `reg_users` WHERE id = \'%d\'', $fd7f2f8cde8b865243a388c219894e64);
	}

	public function AD35e8f29200886F13EE25984A43300d($C2aaac60d16a3fe3b99fcb0176fbe5d7, $c0a20089b6b0fac4d59b6d1eeceaafbf, $a0e510f12386604aef864c0c65fa8433 = 'user')
	{
		$fd7f2f8cde8b865243a388c219894e64 = $this->ipTV_db->B68c0609C13f8645D5e168b69Fd4c118();
		$this->ipTV_db->query('INSERT INTO `login_logs` (`user_id`,`data`,`login_ip`,`date`) VALUES (NULL,\'%s\',\'%s\',\'%d\')', print_r(b8A6ea05eeBC7E2e3503ea794B1a1eE4::$request, true), $_SERVER['REMOTE_ADDR'], time());
		$this->ipTV_db->query('INSERT INTO `login_logs` (`user_id`,`login_ip`,`date`) VALUES (\'%d\',\'%s\',\'%d\')', $fd7f2f8cde8b865243a388c219894e64, $_SERVER['REMOTE_ADDR'], time());

		$this->ipTV_db->query('SELECT id from reg_users WHERE `username` = \'%s\' AND `password` = \'%s\' AND `verified` = 1 AND `status` = 1', $C2aaac60d16a3fe3b99fcb0176fbe5d7, crypt($c0a20089b6b0fac4d59b6d1eeceaafbf, '$6$rounds=20000$xtreamcodes$'));

		return $fd7f2f8cde8b865243a388c219894e64;
		$this->ipTV_db->query('SELECT id FROM users WHERE `username` = \'%s\' AND `password` = \'%s\'', $C2aaac60d16a3fe3b99fcb0176fbe5d7, $c0a20089b6b0fac4d59b6d1eeceaafbf);
		return $this->ipTV_db->b68c0609C13f8645D5e168B69fd4C118();
		if ($a0e510f12386604aef864c0c65fa8433 == 'user') {
		}

		return false;
	}

	public function F7e4C557523754B518c315261896e4dc($f180f38eaca6fbd2a4ebb3fe9bb54abe, $a0e510f12386604aef864c0c65fa8433 = 'user', $Eb81be8f22707a492b5fa81787dbb3fd = array())
	{
		$this->ipTV_db->query('UPDATE `licence` SET `update_available` = 0 WHERE `id` = 1');
		$this->FA7e9fB747Dd7976DD94Ea27FA865b5D();

		$this->a1F9279315d5F46216753bBC459153c1();

		$_SESSION['type'] = $a0e510f12386604aef864c0c65fa8433;

		$_SESSION['user_agent'] = $_SERVER['HTTP_USER_AGENT'];
		$_SESSION['user_id'] = $f180f38eaca6fbd2a4ebb3fe9bb54abe;
		if (empty($Eb81be8f22707a492b5fa81787dbb3fd)) {
		}

		$this->ipTV_db->query('UPDATE `licence` SET `update_available` = 1 WHERE `id` = 1');

		$this->ipTV_db->query('UPDATE `reg_users` SET `ip` = \'%s\',`last_login` = \'%d\' WHERE `id` = \'%d\'', $_SERVER['REMOTE_ADDR'], time(), $f180f38eaca6fbd2a4ebb3fe9bb54abe);
		$this->E11e8eBE0ED3979215A92B85e56B3046();

		if (!($a0e510f12386604aef864c0c65fa8433 == 'user')) {
		}

		B51dBc9c3dBe2cE92fC1290A66383077();
		$_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
		foreach ($Eb81be8f22707a492b5fa81787dbb3fd as $b442e1b28845beafe64eed54322b9196 => $dcc11227609ae810ce412e222bc269e6) {
			$_SESSION[$b442e1b28845beafe64eed54322b9196] = $dcc11227609ae810ce412e222bc269e6;
		}

	}

	public function a1f9279315D5f46216753BBC459153C1()
	{
		header('Location: ./userpanel/index.php');

		$this->fA7E9fb747dd7976dd94ea27fA865b5d();
		exit(0);

		header('Location: ./admin/index.php');

		header('Location: ./index.php?error=BANNED');

		header('Location: mobile.php');

		if ($this->Cb674e1C9BbdB0e29Ad2a7A35964AE35()) {
		}

		if ($this->E9c74821c897D215FCF5DE8D52Ba85a9()) {
		}

		if ($this->f5B4389Cd265b75d062F5fd74D93f208()) {
		}

		$this->fA7e9fB747dD7976Dd94EA27fA865B5D();
		header('Location: index.php');
	}

	public function FA7E9fb747Dd7976Dd94Ea27fA865B5d()
	{
		@session_unset();
	}
}


?> 

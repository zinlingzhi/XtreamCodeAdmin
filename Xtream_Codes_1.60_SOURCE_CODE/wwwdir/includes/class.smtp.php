<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

class Dfbab5d91412b53638926Beb099c3dE9
{
	public $SMTP_PORT = 25;
	public $CRLF = "\r\n";
	public $do_debug = 0;
	public $Debugoutput = 'echo';
	public $do_verp = false;
	public $Timeout = 15;
	public $Timelimit = 30;
	public $Version = '5.2.6';
	protected $smtp_conn;
	protected $error;
	protected $helo_rply;

	protected function Bb34e5840cF0D6697b74aefeAC4aF8Cb($ff96e45ab2f55b3571550f41ca0071eb)
	{
		switch ($this->Debugoutput) {
		case 'error_log':
			error_log($ff96e45ab2f55b3571550f41ca0071eb);
		case 'html':
			echo htmlentities(preg_replace('/[\\r\\n]+/', '', $ff96e45ab2f55b3571550f41ca0071eb), ENT_QUOTES, 'UTF-8') . '<br>' . "\n";
		case 'echo':
		default:
			echo $ff96e45ab2f55b3571550f41ca0071eb;
		}

	}

	public function __construct()
	{
		$this->do_debug = 0;

		$this->smtp_conn = 0;
		$this->error = NULL;
		$this->helo_rply = NULL;
	}

	public function Eee6dF92C378CB74a1a8e6C3d88a76B6($a28a76814955d8ec5ed0a4a5358bf406, $Fe3b3593a36e20e7ffec4d40a6a92e9e = 0, $cab786be1c6f47afd2017a4408df424f = 30)
	{
		return true;

		@set_time_limit($cab786be1c6f47afd2017a4408df424f);
		stream_set_timeout($this->smtp_conn, $cab786be1c6f47afd2017a4408df424f, 0);

		$this->error = array('error' => 'Already connected to a server');

		$this->Bb34e5840Cf0d6697b74AeFeac4Af8cB('SMTP -> FROM SERVER:' . $F49ca7710a91f0a02f12dd867c14672b);

		if (!(1 <= $this->do_debug)) {
		}

		return false;
		return false;

		$this->Bb34e5840cF0D6697B74aEfEAc4Af8cB('SMTP -> ERROR: ' . $this->error['error'] . ': ' . $e879efaddc4d9c8c449dd52727a4d3d0 . ' (' . $Dad93d5281ae14437c7e846c76e9787e . ')');

		$this->smtp_conn = @fsockopen($a28a76814955d8ec5ed0a4a5358bf406, $Fe3b3593a36e20e7ffec4d40a6a92e9e, &$Dad93d5281ae14437c7e846c76e9787e, &$e879efaddc4d9c8c449dd52727a4d3d0, $cab786be1c6f47afd2017a4408df424f);

		$Fe3b3593a36e20e7ffec4d40a6a92e9e = $this->SMTP_PORT;

		$F49ca7710a91f0a02f12dd867c14672b = $this->D4A613be5bfC234e71049D5049819dd7();
		if (!(($f8b127058b597e94d715796b676e890c != 0) && ($f8b127058b597e94d715796b676e890c < $cab786be1c6f47afd2017a4408df424f))) {
		}

		if (!(2 <= $this->do_debug)) {
		}

		$this->error = NULL;
		if (!$this->F56Fcc385e966ac5385B7f4097449A60()) {
		}

		while (!empty($Fe3b3593a36e20e7ffec4d40a6a92e9e)) {
			$this->error = array('error' => 'Failed to connect to server', 'errno' => $Dad93d5281ae14437c7e846c76e9787e, 'errstr' => $e879efaddc4d9c8c449dd52727a4d3d0);

			if (!(substr(PHP_OS, 0, 3) != 'WIN')) {
			}

			$f8b127058b597e94d715796b676e890c = ini_get('max_execution_time');
		}

	}

	public function c06f282D317a21C28cb3da4ACc1dFFa3()
	{
		return false;
		$this->BB34e5840cF0D6697B74AEFEAC4aF8cB('SMTP -> ERROR: ' . $this->error['error'] . ': ' . $E836fca2edea5828a908c8a58bc8231f);

		$this->error = array('error' => 'Called StartTLS() without being connected');

		$this->error = array('error' => 'STARTTLS not accepted from server', 'smtp_code' => $Beb9cf543f12c74011255da0aa5c8e7e, 'smtp_msg' => substr($E836fca2edea5828a908c8a58bc8231f, 4));

		$this->error = NULL;
		return true;

		return false;

		$Beb9cf543f12c74011255da0aa5c8e7e = substr($E836fca2edea5828a908c8a58bc8231f, 0, 3);

		$this->DB1D322718b9F1914277269e20A8aD41('STARTTLS' . $this->CRLF);

		$this->Bb34E5840cf0D6697B74AEfEac4aF8cb('SMTP -> FROM SERVER:' . $E836fca2edea5828a908c8a58bc8231f);

		if (!(2 <= $this->do_debug)) {
		}

		$E836fca2edea5828a908c8a58bc8231f = $this->d4a613Be5Bfc234e71049D5049819dd7();

		if (!(1 <= $this->do_debug)) {
		}

		return false;
	}

	public function DC8211A879Aa3d5C03346973dc7B10DC($C2aaac60d16a3fe3b99fcb0176fbe5d7, $c0a20089b6b0fac4d59b6d1eeceaafbf, $Dff47b832cd51f867aec407e718c9dc3 = 'LOGIN', $C694da379acf942f2bf5400bf736f290 = '', $cd2214f942101a5646e54ef819248a51 = '')
	{
		switch ($Dff47b832cd51f867aec407e718c9dc3) {
		default:
		case 'PLAIN':
			$this->BB34e5840Cf0D6697b74AeFEAC4AF8CB('SMTP -> ERROR: ' . $this->error['error'] . ': ' . $E836fca2edea5828a908c8a58bc8231f);

			$this->Db1D322718b9F1914277269E20A8aD41(base64_encode("\0" . $C2aaac60d16a3fe3b99fcb0176fbe5d7 . "\0" . $c0a20089b6b0fac4d59b6d1eeceaafbf) . $this->CRLF);

			$this->DB1D322718B9f1914277269E20a8ad41('AUTH PLAIN' . $this->CRLF);
			$this->error = array('error' => 'AUTH not accepted from server', 'smtp_code' => $Beb9cf543f12c74011255da0aa5c8e7e, 'smtp_msg' => substr($E836fca2edea5828a908c8a58bc8231f, 4));

			return false;

			$Beb9cf543f12c74011255da0aa5c8e7e = substr($E836fca2edea5828a908c8a58bc8231f, 0, 3);

			if (!(1 <= $this->do_debug)) {
			}

			return false;
			$this->error = array('error' => 'Authentication not accepted from server', 'smtp_code' => $Beb9cf543f12c74011255da0aa5c8e7e, 'smtp_msg' => substr($E836fca2edea5828a908c8a58bc8231f, 4));

			$Beb9cf543f12c74011255da0aa5c8e7e = substr($E836fca2edea5828a908c8a58bc8231f, 0, 3);

			$E836fca2edea5828a908c8a58bc8231f = $this->D4A613be5bfC234E71049D5049819dD7();
			$this->bb34E5840Cf0D6697B74AEfEAC4Af8CB('SMTP -> ERROR: ' . $this->error['error'] . ': ' . $E836fca2edea5828a908c8a58bc8231f);
			$E836fca2edea5828a908c8a58bc8231f = $this->D4A613be5BFC234e71049D5049819dd7();
			if (!($Beb9cf543f12c74011255da0aa5c8e7e != 334)) {
			}

		case 'LOGIN':
			$E836fca2edea5828a908c8a58bc8231f = $this->D4A613bE5bfC234E71049d5049819dD7();

			return false;
			$this->BB34E5840cf0d6697b74aefeAC4aF8Cb('SMTP -> ERROR: ' . $this->error['error'] . ': ' . $E836fca2edea5828a908c8a58bc8231f);

			$this->DB1D322718B9f1914277269E20A8ad41(base64_encode($C2aaac60d16a3fe3b99fcb0176fbe5d7) . $this->CRLF);
			$this->error = array('error' => 'Password not accepted from server', 'smtp_code' => $Beb9cf543f12c74011255da0aa5c8e7e, 'smtp_msg' => substr($E836fca2edea5828a908c8a58bc8231f, 4));

			$E836fca2edea5828a908c8a58bc8231f = $this->D4a613BE5Bfc234E71049d5049819dD7();

			$Beb9cf543f12c74011255da0aa5c8e7e = substr($E836fca2edea5828a908c8a58bc8231f, 0, 3);

			$this->error = array('error' => 'Username not accepted from server', 'smtp_code' => $Beb9cf543f12c74011255da0aa5c8e7e, 'smtp_msg' => substr($E836fca2edea5828a908c8a58bc8231f, 4));
			$this->bB34e5840cF0D6697b74AeFeac4aF8Cb('SMTP -> ERROR: ' . $this->error['error'] . ': ' . $E836fca2edea5828a908c8a58bc8231f);

			if (!($Beb9cf543f12c74011255da0aa5c8e7e != 334)) {
			}

			$Beb9cf543f12c74011255da0aa5c8e7e = substr($E836fca2edea5828a908c8a58bc8231f, 0, 3);
			return false;

			if (!(1 <= $this->do_debug)) {
			}

			$Beb9cf543f12c74011255da0aa5c8e7e = substr($E836fca2edea5828a908c8a58bc8231f, 0, 3);

			if (!(1 <= $this->do_debug)) {
			}

			$this->Bb34E5840cF0D6697b74aefEAC4af8cb('SMTP -> ERROR: ' . $this->error['error'] . ': ' . $E836fca2edea5828a908c8a58bc8231f);

			$E836fca2edea5828a908c8a58bc8231f = $this->d4a613bE5bfC234E71049d5049819dd7();

			if (!($Beb9cf543f12c74011255da0aa5c8e7e != 235)) {
			}

			return false;

			$this->DB1d322718b9F1914277269e20A8ad41(base64_encode($c0a20089b6b0fac4d59b6d1eeceaafbf) . $this->CRLF);

			$this->error = array('error' => 'AUTH not accepted from server', 'smtp_code' => $Beb9cf543f12c74011255da0aa5c8e7e, 'smtp_msg' => substr($E836fca2edea5828a908c8a58bc8231f, 4));

			$this->Db1d322718b9F1914277269E20a8AD41('AUTH LOGIN' . $this->CRLF);
		case 'NTLM':
			return false;

			$bd3cc19053f717e90b005fe54209ece1 = $ef9083b3b905e82659ac3dc18ee76a0d->D5140f456301e523e6f7c9a2062105CF(substr($A350e75f9d8661d5ce756eb51e91d52b, 24, 8), $c0a20089b6b0fac4d59b6d1eeceaafbf);

			$Beb9cf543f12c74011255da0aa5c8e7e = substr($E836fca2edea5828a908c8a58bc8231f, 0, 3);

			$F0ef247b959211cf9f27e78943f752f9 = $ef9083b3b905e82659ac3dc18ee76a0d->AF6D2Ac44fB7c843584Ab408e73DA929($bd3cc19053f717e90b005fe54209ece1, $C2aaac60d16a3fe3b99fcb0176fbe5d7, $C694da379acf942f2bf5400bf736f290, $cd2214f942101a5646e54ef819248a51);

			$E836fca2edea5828a908c8a58bc8231f = $this->D4A613be5bfc234E71049D5049819DD7();
			return false;

			$ef9083b3b905e82659ac3dc18ee76a0d = new Ae49Da2698C3662864d26f61E02A0321();

			require_once ('extras/ntlm_sasl_client.php');

			if (!(1 <= $this->do_debug)) {
			}

			$this->Db1d322718B9F1914277269e20A8aD41('AUTH NTLM ' . base64_encode($db9b8d92d6e201b9e0ad7b765b0d9e5d) . $this->CRLF);
			$this->BB34e5840Cf0d6697B74aEFEac4AF8Cb('SMTP -> ERROR: ' . $this->error['error'] . ': ' . $E836fca2edea5828a908c8a58bc8231f);
			return false;

			$db9b8d92d6e201b9e0ad7b765b0d9e5d = $ef9083b3b905e82659ac3dc18ee76a0d->B8E2493C89B9B2BfAf4038CBcf33032C($C694da379acf942f2bf5400bf736f290, $cd2214f942101a5646e54ef819248a51);

			$this->error = array('error' => $f8afe74b3b30d7b398e83edde8ecace0->error);

			if (!(1 <= $this->do_debug)) {
			}

			$this->error = array('error' => 'AUTH not accepted from server', 'smtp_code' => $Beb9cf543f12c74011255da0aa5c8e7e, 'smtp_msg' => substr($E836fca2edea5828a908c8a58bc8231f, 4));

			$A350e75f9d8661d5ce756eb51e91d52b = substr($E836fca2edea5828a908c8a58bc8231f, 3);

			$this->dB1D322718B9f1914277269E20A8aD41(base64_encode($F0ef247b959211cf9f27e78943f752f9) . $this->CRLF);

			while (!($Beb9cf543f12c74011255da0aa5c8e7e != 334)) {
				$Beb9cf543f12c74011255da0aa5c8e7e = substr($E836fca2edea5828a908c8a58bc8231f, 0, 3);
				if (!($Beb9cf543f12c74011255da0aa5c8e7e != 235)) {
				}

				$E836fca2edea5828a908c8a58bc8231f = $this->D4A613BE5BFC234E71049D5049819dD7();
				$this->error = array('error' => 'Could not authenticate', 'smtp_code' => $Beb9cf543f12c74011255da0aa5c8e7e, 'smtp_msg' => substr($E836fca2edea5828a908c8a58bc8231f, 4));
				$A350e75f9d8661d5ce756eb51e91d52b = base64_decode($A350e75f9d8661d5ce756eb51e91d52b);
				$f8afe74b3b30d7b398e83edde8ecace0 = new e321a6EfDFDe1729b740Caf4eb265fE3();
			}

			$this->bb34E5840CF0D6697b74AeFEac4aF8cb('You need to enable some modules in your php.ini file: ' . $this->error['error']);
			$this->BB34e5840cF0d6697b74aEfEAC4AF8CB('SMTP -> ERROR: ' . $this->error['error'] . ': ' . $E836fca2edea5828a908c8a58bc8231f);

			if ($ef9083b3b905e82659ac3dc18ee76a0d->C7b7Aa3f9017Fb959f3eE13E19dADdF6($f8afe74b3b30d7b398e83edde8ecace0)) {
			}

		case 'CRAM-MD5':
			$this->Bb34e5840cF0d6697B74AefeaC4af8cB('SMTP -> ERROR: ' . $this->error['error'] . ': ' . $E836fca2edea5828a908c8a58bc8231f);

			$this->Db1d322718b9f1914277269E20a8aD41('AUTH CRAM-MD5' . $this->CRLF);

			return false;

			$fa288a0b624d0391b6df20f770ff35ee = $C2aaac60d16a3fe3b99fcb0176fbe5d7 . ' ' . $this->F78aE80282e5334977430E19484B7a8a($A350e75f9d8661d5ce756eb51e91d52b, $c0a20089b6b0fac4d59b6d1eeceaafbf);

			$Beb9cf543f12c74011255da0aa5c8e7e = substr($E836fca2edea5828a908c8a58bc8231f, 0, 3);

			$this->Db1d322718B9f1914277269e20A8ad41(base64_encode($fa288a0b624d0391b6df20f770ff35ee) . $this->CRLF);
			$E836fca2edea5828a908c8a58bc8231f = $this->D4A613be5Bfc234E71049D5049819dD7();

			$E836fca2edea5828a908c8a58bc8231f = $this->D4A613be5BFc234e71049d5049819Dd7();

			$this->error = array('error' => 'AUTH not accepted from server', 'smtp_code' => $Beb9cf543f12c74011255da0aa5c8e7e, 'smtp_msg' => substr($E836fca2edea5828a908c8a58bc8231f, 4));

			if (!($Beb9cf543f12c74011255da0aa5c8e7e != 235)) {
			}

			$A350e75f9d8661d5ce756eb51e91d52b = base64_decode(substr($E836fca2edea5828a908c8a58bc8231f, 4));
			return false;

			$this->error = array('error' => 'Credentials not accepted from server', 'smtp_code' => $Beb9cf543f12c74011255da0aa5c8e7e, 'smtp_msg' => substr($E836fca2edea5828a908c8a58bc8231f, 4));
			$Beb9cf543f12c74011255da0aa5c8e7e = substr($E836fca2edea5828a908c8a58bc8231f, 0, 3);
			$this->BB34E5840cf0d6697b74AEFeAc4aF8cb('SMTP -> ERROR: ' . $this->error['error'] . ': ' . $E836fca2edea5828a908c8a58bc8231f);
		default:
			$Dff47b832cd51f867aec407e718c9dc3 = 'LOGIN';
		}
	}

	protected function f78aE80282E5334977430e19484B7a8a($b729e1e76a388ffdd6a130fbb0325a8e, $b442e1b28845beafe64eed54322b9196)
	{
		$b9eaba165fad0655520ed7be56e0fd2b = str_pad('', $b1f1e65307205b92a10cf1609a1f0cbd, chr(92));

		$e4dac94947a0144ad10fbb13d56027c7 = $b442e1b28845beafe64eed54322b9196 ^ $b9eaba165fad0655520ed7be56e0fd2b;

		$b442e1b28845beafe64eed54322b9196 = str_pad($b442e1b28845beafe64eed54322b9196, $b1f1e65307205b92a10cf1609a1f0cbd, chr(0));

		$e068adfc9ba50f3e0942a6346e87f621 = $b442e1b28845beafe64eed54322b9196 ^ $D5f2e6df8d6a375da11b8d0412e19008;
		return md5($e4dac94947a0144ad10fbb13d56027c7 . pack('H*', md5($e068adfc9ba50f3e0942a6346e87f621 . $b729e1e76a388ffdd6a130fbb0325a8e)));

		return hash_hmac('md5', $b729e1e76a388ffdd6a130fbb0325a8e, $b442e1b28845beafe64eed54322b9196);

		$b442e1b28845beafe64eed54322b9196 = pack('H*', md5($b442e1b28845beafe64eed54322b9196));

		$D5f2e6df8d6a375da11b8d0412e19008 = str_pad('', $b1f1e65307205b92a10cf1609a1f0cbd, chr(54));

		while (!function_exists('hash_hmac')) {
		}

		$b1f1e65307205b92a10cf1609a1f0cbd = 64;
	}

	public function f56Fcc385e966Ac5385B7F4097449A60()
	{
		return false;

		return true;
		$this->bB34E5840cf0d6697B74aeFeAc4Af8Cb('SMTP -> NOTICE: EOF caught while checking if connected');
		return false;

		$this->Close();
		$ea9bee3c26e3a67e55c02deff81c8b92 = stream_get_meta_data($this->smtp_conn);
	}

	public function Close()
	{
		$this->error = NULL;
		fclose($this->smtp_conn);

		$this->helo_rply = NULL;

		$this->smtp_conn = 0;
	}

	public function Bf079a2A240e2A54F099a37a4a3d8FBB($e4f36982ffb9bbbddbecb56372752f99)
	{
		$a9287f16bf252f3713a195cd76045f3d = explode("\n", $e4f36982ffb9bbbddbecb56372752f99);

		$E836fca2edea5828a908c8a58bc8231f = $this->d4A613Be5BFC234e71049D5049819dD7();
		$this->Bb34E5840cF0D6697b74aEfEAC4AF8Cb('SMTP -> ERROR: ' . $this->error['error'] . ': ' . $E836fca2edea5828a908c8a58bc8231f);
		$this->error = NULL;

		$this->error = array('error' => 'Called Data() without being connected');

		$Eaa938a03572514cc856c6adec134ce5 = '.' . $Eaa938a03572514cc856c6adec134ce5;

		$d74d00f8292c58aef52f0cd063ed6a19 = substr($a9287f16bf252f3713a195cd76045f3d[0], 0, strpos($a9287f16bf252f3713a195cd76045f3d[0], ':'));

		return true;
		return false;
		$f9b3f31144bbb40e1aedbed5559e2df0[] = $A9e198228b33995157cb4f301407445b;
		$Cc8c15f869a7b61d407767d70d94609d = false;

		$Cc8c15f869a7b61d407767d70d94609d = true;
		$A9e198228b33995157cb4f301407445b = "\t" . $A9e198228b33995157cb4f301407445b;

		$e4f36982ffb9bbbddbecb56372752f99 = str_replace("\r", "\n", $e4f36982ffb9bbbddbecb56372752f99);

		return false;

		$this->error = array('error' => 'DATA command not accepted from server', 'smtp_code' => $Beb9cf543f12c74011255da0aa5c8e7e, 'smtp_msg' => substr($E836fca2edea5828a908c8a58bc8231f, 4));

		$f9b3f31144bbb40e1aedbed5559e2df0[] = substr($A9e198228b33995157cb4f301407445b, 0, $ac66a80887f62b73863552a1099e67ce);

		$f9b3f31144bbb40e1aedbed5559e2df0 = NULL;

		$Fd0cbacc62f35374fd44d90c5f953713 = 998;

		$A9e198228b33995157cb4f301407445b = substr($A9e198228b33995157cb4f301407445b, $ac66a80887f62b73863552a1099e67ce + 1);

		$f9b3f31144bbb40e1aedbed5559e2df0[] = substr($A9e198228b33995157cb4f301407445b, 0, $ac66a80887f62b73863552a1099e67ce);

		$this->dB1d322718b9F1914277269E20a8AD41('DATA' . $this->CRLF);

		$Beb9cf543f12c74011255da0aa5c8e7e = substr($E836fca2edea5828a908c8a58bc8231f, 0, 3);

		$this->bB34E5840Cf0d6697b74aeFeaC4af8CB('SMTP -> FROM SERVER:' . $E836fca2edea5828a908c8a58bc8231f);
		if (!(1 <= $this->do_debug)) {
		}

		if (!(($A9e198228b33995157cb4f301407445b == '') && $Cc8c15f869a7b61d407767d70d94609d)) {
		}

		$e4f36982ffb9bbbddbecb56372752f99 = str_replace("\r\n", "\n", $e4f36982ffb9bbbddbecb56372752f99);
		$Cc8c15f869a7b61d407767d70d94609d = false;
		return false;
		$Beb9cf543f12c74011255da0aa5c8e7e = substr($E836fca2edea5828a908c8a58bc8231f, 0, 3);
		if (!(2 <= $this->do_debug)) {
		}

		$this->bb34e5840CF0d6697B74AEFEaC4AF8cb('SMTP -> ERROR: ' . $this->error['error'] . ': ' . $E836fca2edea5828a908c8a58bc8231f);

		if (!($Beb9cf543f12c74011255da0aa5c8e7e != 354)) {
		}

		$this->DB1d322718B9F1914277269E20a8Ad41($this->CRLF . '.' . $this->CRLF);

		if (!($Fd0cbacc62f35374fd44d90c5f953713 < strlen($A9e198228b33995157cb4f301407445b))) {
		}

		$ac66a80887f62b73863552a1099e67ce = strrpos(substr($A9e198228b33995157cb4f301407445b, 0, $Fd0cbacc62f35374fd44d90c5f953713), ' ');

		if (!(0 < strlen($Eaa938a03572514cc856c6adec134ce5))) {
		}

		$E836fca2edea5828a908c8a58bc8231f = $this->d4A613bE5Bfc234e71049d5049819DD7();
		if (!(!empty($d74d00f8292c58aef52f0cd063ed6a19) && !strstr($d74d00f8292c58aef52f0cd063ed6a19, ' '))) {
		}

		$this->db1D322718B9f1914277269E20A8AD41($Eaa938a03572514cc856c6adec134ce5 . $this->CRLF);
		$ac66a80887f62b73863552a1099e67ce = $Fd0cbacc62f35374fd44d90c5f953713 - 1;
		$this->bb34e5840cf0d6697b74aeFeAC4af8CB('SMTP -> FROM SERVER:' . $E836fca2edea5828a908c8a58bc8231f);
		if (!$ac66a80887f62b73863552a1099e67ce) {
		}

		$A9e198228b33995157cb4f301407445b = substr($A9e198228b33995157cb4f301407445b, $ac66a80887f62b73863552a1099e67ce);
		$this->error = array('error' => 'DATA not accepted from server', 'smtp_code' => $Beb9cf543f12c74011255da0aa5c8e7e, 'smtp_msg' => substr($E836fca2edea5828a908c8a58bc8231f, 4));
	}

	public function F1D4d256b991EA1cd94D183bC1FAcb30($a28a76814955d8ec5ed0a4a5358bf406 = '')
	{
		return false;

		$this->error = NULL;
		return false;

		return true;

		$this->error = array('error' => 'Called Hello() without being connected');

		if ($this->F56FCc385E966ac5385B7F4097449a60()) {
		}

		$a28a76814955d8ec5ed0a4a5358bf406 = 'localhost';

		while ($this->A5C41Cf44A2Af9A5EA443797011e0474('HELO', $a28a76814955d8ec5ed0a4a5358bf406)) {
		}

	}

	protected function A5c41cF44a2AF9A5ea443797011E0474($C58738a7b535468bf9fc3c86f179eb3c, $a28a76814955d8ec5ed0a4a5358bf406)
	{
		$E836fca2edea5828a908c8a58bc8231f = $this->d4A613BE5BFC234E71049D5049819dD7();

		return true;

		$this->Bb34E5840cF0d6697B74AEfEaC4Af8cb('SMTP -> ERROR: ' . $this->error['error'] . ': ' . $E836fca2edea5828a908c8a58bc8231f);

		$this->BB34E5840Cf0d6697b74aeFEAc4AF8Cb('SMTP -> FROM SERVER: ' . $E836fca2edea5828a908c8a58bc8231f);

		$Beb9cf543f12c74011255da0aa5c8e7e = substr($E836fca2edea5828a908c8a58bc8231f, 0, 3);
		$this->Db1D322718b9f1914277269e20A8ad41($C58738a7b535468bf9fc3c86f179eb3c . ' ' . $a28a76814955d8ec5ed0a4a5358bf406 . $this->CRLF);
		$this->helo_rply = $E836fca2edea5828a908c8a58bc8231f;

		return false;
		$this->error = array('error' => $C58738a7b535468bf9fc3c86f179eb3c . ' not accepted from server', 'smtp_code' => $Beb9cf543f12c74011255da0aa5c8e7e, 'smtp_msg' => substr($E836fca2edea5828a908c8a58bc8231f, 4));
	}

	public function Mail($Dba9bc30b45fbdc7080995ec01ed8fef)
	{
		$this->bB34E5840cF0D6697B74aEFEAC4af8cB('SMTP -> FROM SERVER:' . $E836fca2edea5828a908c8a58bc8231f);

		return false;
		return false;

		$this->Bb34E5840Cf0d6697b74aEfEac4af8Cb('SMTP -> ERROR: ' . $this->error['error'] . ': ' . $E836fca2edea5828a908c8a58bc8231f);

		$this->dB1D322718b9F1914277269e20A8aD41('MAIL FROM:<' . $Dba9bc30b45fbdc7080995ec01ed8fef . '>' . $Bd43b9366187ba509f84895d8e548031 . $this->CRLF);
		return true;

		$this->error = array('error' => 'MAIL not accepted from server', 'smtp_code' => $Beb9cf543f12c74011255da0aa5c8e7e, 'smtp_msg' => substr($E836fca2edea5828a908c8a58bc8231f, 4));

		if ($this->F56fcc385E966Ac5385b7f4097449a60()) {
		}

		$Bd43b9366187ba509f84895d8e548031 = ($this->do_verp ? ' XVERP' : '');
		$this->error = NULL;
		$E836fca2edea5828a908c8a58bc8231f = $this->D4A613bE5bFc234E71049d5049819dD7();
		$Beb9cf543f12c74011255da0aa5c8e7e = substr($E836fca2edea5828a908c8a58bc8231f, 0, 3);
		$this->error = array('error' => 'Called Mail() without being connected');
	}

	public function F323641c0e3dcD3dbE78c5523D64cc48($F9208b8d58fee65b42a76f393f23a8b1 = true)
	{
		$E24d4d8eb41fe8315ceafae7fad70102 = array('error' => 'SMTP server rejected quit command', 'smtp_code' => $Beb9cf543f12c74011255da0aa5c8e7e, 'smtp_rply' => substr($E9fad3fcb981474090c5fd3ecfba5ae4, 4));

		$this->bB34E5840Cf0d6697b74AEFeac4AF8cb('SMTP -> FROM SERVER:' . $E9fad3fcb981474090c5fd3ecfba5ae4);

		return false;

		$this->Close();
		return $B328341ce28027675198bf1d73c2f070;

		if (!(1 <= $this->do_debug)) {
		}

		$E9fad3fcb981474090c5fd3ecfba5ae4 = $this->d4A613bE5BfC234e71049D5049819dD7();

		$this->error = array('error' => 'Called Quit() without being connected');

		$E24d4d8eb41fe8315ceafae7fad70102 = NULL;
		$Beb9cf543f12c74011255da0aa5c8e7e = substr($E9fad3fcb981474090c5fd3ecfba5ae4, 0, 3);
		$B328341ce28027675198bf1d73c2f070 = true;
		$this->bb34e5840Cf0d6697B74AefeAc4Af8Cb('SMTP -> ERROR: ' . $E24d4d8eb41fe8315ceafae7fad70102['error'] . ': ' . $E9fad3fcb981474090c5fd3ecfba5ae4);
		$this->db1D322718B9F1914277269e20a8aD41('quit' . $this->CRLF);
		$this->error = NULL;

		$B328341ce28027675198bf1d73c2f070 = false;
	}

	public function dEcFdA310378C1Fa9502e45C641c750f($b6c65a7e6e7f6c6ec15815608e981f0c)
	{
		$Beb9cf543f12c74011255da0aa5c8e7e = substr($E836fca2edea5828a908c8a58bc8231f, 0, 3);
		$this->error = array('error' => 'Called Recipient() without being connected');
		$this->db1d322718B9f1914277269e20A8AD41('RCPT TO:<' . $b6c65a7e6e7f6c6ec15815608e981f0c . '>' . $this->CRLF);

		$this->bb34e5840CF0d6697B74aefEAC4Af8Cb('SMTP -> FROM SERVER:' . $E836fca2edea5828a908c8a58bc8231f);

		$E836fca2edea5828a908c8a58bc8231f = $this->d4A613BE5Bfc234E71049D5049819Dd7();

		return true;

		$this->error = NULL;

		return false;

		return false;
		$this->error = array('error' => 'RCPT not accepted from server', 'smtp_code' => $Beb9cf543f12c74011255da0aa5c8e7e, 'smtp_msg' => substr($E836fca2edea5828a908c8a58bc8231f, 4));

		while ($this->f56Fcc385e966ac5385b7F4097449a60()) {
			$this->BB34e5840CF0D6697b74aEFEAC4AF8cB('SMTP -> ERROR: ' . $this->error['error'] . ': ' . $E836fca2edea5828a908c8a58bc8231f);
		}

	}

	public function Reset()
	{
		return true;
		return false;

		$Beb9cf543f12c74011255da0aa5c8e7e = substr($E836fca2edea5828a908c8a58bc8231f, 0, 3);
		$this->error = NULL;

		$this->db1D322718b9f1914277269e20a8Ad41('RSET' . $this->CRLF);

		$this->Bb34E5840Cf0d6697b74AeFeAc4Af8cB('SMTP -> FROM SERVER:' . $E836fca2edea5828a908c8a58bc8231f);
		$E836fca2edea5828a908c8a58bc8231f = $this->d4a613bE5BfC234e71049d5049819dD7();

		while ($this->f56fCc385e966aC5385b7F4097449A60()) {
		}

		$this->error = array('error' => 'RSET failed', 'smtp_code' => $Beb9cf543f12c74011255da0aa5c8e7e, 'smtp_msg' => substr($E836fca2edea5828a908c8a58bc8231f, 4));

		$this->error = array('error' => 'Called Reset() without being connected');

		$this->BB34E5840CF0d6697B74AefeAc4Af8cb('SMTP -> ERROR: ' . $this->error['error'] . ': ' . $E836fca2edea5828a908c8a58bc8231f);
		return false;

		if (!(1 <= $this->do_debug)) {
		}

	}

	public function Ad63aA249505aaB68C0912Fdd49114d4($Dba9bc30b45fbdc7080995ec01ed8fef)
	{
		return true;
		$this->db1D322718B9f1914277269E20a8aD41('SAML FROM:' . $Dba9bc30b45fbdc7080995ec01ed8fef . $this->CRLF);
		$this->BB34E5840CF0d6697b74AefeAc4aF8CB('SMTP -> FROM SERVER:' . $E836fca2edea5828a908c8a58bc8231f);

		$this->error = array('error' => 'SAML not accepted from server', 'smtp_code' => $Beb9cf543f12c74011255da0aa5c8e7e, 'smtp_msg' => substr($E836fca2edea5828a908c8a58bc8231f, 4));

		$E836fca2edea5828a908c8a58bc8231f = $this->d4A613bE5BfC234e71049D5049819dd7();

		$this->error = NULL;

		return false;

		$Beb9cf543f12c74011255da0aa5c8e7e = substr($E836fca2edea5828a908c8a58bc8231f, 0, 3);
		if (!($Beb9cf543f12c74011255da0aa5c8e7e != 250)) {
		}

		$this->error = array('error' => 'Called SendAndMail() without being connected');
		return false;
		$this->bb34e5840cF0d6697B74aEfEAc4aF8cB('SMTP -> ERROR: ' . $this->error['error'] . ': ' . $E836fca2edea5828a908c8a58bc8231f);
	}

	public function d5ff4e9341E2ABaa1AaBA6E8C28159F0()
	{
		$this->error = array('error' => 'This method, TURN, of the SMTP ' . 'is not implemented');

		$this->BB34E5840Cf0D6697b74aefeAC4Af8cB('SMTP -> NOTICE: ' . $this->error['error']);

		if (!(1 <= $this->do_debug)) {
		}

		return false;
	}

	public function dB1D322718b9F1914277269e20A8aD41($b729e1e76a388ffdd6a130fbb0325a8e)
	{
		$this->BB34E5840CF0d6697B74AefEaC4AF8cB('CLIENT -> SMTP: ' . $b729e1e76a388ffdd6a130fbb0325a8e);
		return fwrite($this->smtp_conn, $b729e1e76a388ffdd6a130fbb0325a8e);
	}

	public function F27C0FDFDE1984235405d312595e7c19()
	{
		return $this->error;
	}

	protected function D4A613Be5BFc234E71049d5049819dD7()
	{
		return $b729e1e76a388ffdd6a130fbb0325a8e;

		$bf3cd6eed406072de08303c780a1f2cb = stream_get_meta_data($this->smtp_conn);

		stream_set_timeout($this->smtp_conn, $this->Timeout);
		$Fbf900579ea33585b8c0f209c3be52d0 = 0;
		$b729e1e76a388ffdd6a130fbb0325a8e = '';
		return $b729e1e76a388ffdd6a130fbb0325a8e;

		$this->bb34E5840CF0D6697b74aEfEAC4Af8cB('SMTP -> get_lines(): $data was "' . $b729e1e76a388ffdd6a130fbb0325a8e . '"');

		if (is_resource($this->smtp_conn)) {
		}

		$Fbf900579ea33585b8c0f209c3be52d0 = time() + $this->Timelimit;
		$this->Bb34E5840Cf0d6697b74AEfEaC4aF8cB('SMTP -> get_lines(): timelimit reached (' . $this->Timelimit . ' seconds)');

		$this->bb34E5840CF0D6697b74AefeAc4Af8CB('SMTP -> get_lines(): timed-out (' . $this->Timeout . ' seconds)');

		if (!(substr($ff96e45ab2f55b3571550f41ca0071eb, 3, 1) == ' ')) {
		}

		$ff96e45ab2f55b3571550f41ca0071eb = @fgets($this->smtp_conn, 515);
		$this->Bb34e5840CF0D6697b74aEfEac4Af8CB('SMTP -> get_lines(): $data is "' . $b729e1e76a388ffdd6a130fbb0325a8e . '"');
		$b729e1e76a388ffdd6a130fbb0325a8e .= $ff96e45ab2f55b3571550f41ca0071eb;
		if (!(is_resource($this->smtp_conn) && !feof($this->smtp_conn))) {
		}

		$this->BB34E5840Cf0D6697B74AeFEaC4Af8cB('SMTP -> get_lines(): $str is "' . $ff96e45ab2f55b3571550f41ca0071eb . '"');
	}
}


?> 

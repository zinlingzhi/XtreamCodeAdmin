<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

class acaAB5Af2D3C6BF2dEd754E2456A14a3
{
	public $ServerID;
	public $ssh;
	public $stream;
	public $MainIP;
	public $SystemOS;
	public $CodeName;
	public $valid = false;
	public $http_port;
	public $host_ip;
	public $repo;

	public function __construct($a28a76814955d8ec5ed0a4a5358bf406, $Fe3b3593a36e20e7ffec4d40a6a92e9e = 22)
	{
		$this->host_ip = $a28a76814955d8ec5ed0a4a5358bf406;
		return false;

		b8A6Ea05eEBc7e2e3503Ea794B1a1Ee4::c55d4953C0dd463A6CBBb65C08272861('Could not Connect to ' . $a28a76814955d8ec5ed0a4a5358bf406 . ':' . $Fe3b3593a36e20e7ffec4d40a6a92e9e . ' SSH Service');
	}

	public function F8C8498121104744c4BfeaE4851BAd86()
	{
		$this->ssh = NULL;

		$this->exec('echo "EXITING" && exit;');

		while (!$this->ssh) {
		}

	}

	public function __destruct()
	{
		$this->f8c8498121104744c4bfeaE4851Bad86();
	}

	public function b537Cd0DC19d961D896cDB7F6BDC975B($F571f6704beac83a61a4e2f0f338b42a)
	{
		$A805a405043bcd2732cfb562f1033fb1 = $this->exec('cat /etc/init.d/xtreamcodeslb | grep -v grep | grep -c \'iptv_xtream_codes/nginx/sbin/nginx\'');

		$this->exec('chmod +x /etc/rc.d/rc.local');

		$e8bc7b18d2d0e905c89b02e25e6b76f1 = $this->exec('cat /etc/init.d/xtreamcodeslb | grep -v grep | grep -c \'iptv_xtream_codes/php/sbin/php-fpm\'');

		$this->exec('awk \'!/iptv_xtream_codes/\' /etc/fstab > /tmp/temp_file && mv /tmp/temp_file /etc/fstab');

		$this->exec('pkill -9 php');

		$this->exec('tar xzvf ' . IPTV_PANEL_DIR . basename($F571f6704beac83a61a4e2f0f338b42a) . ' -C ' . IPTV_PANEL_DIR . ' --overwrite');

		$this->exec('wget -qO "' . IPTV_PANEL_DIR . 'platform.zip" "http://xtream-codes.com/downloads/IPTV_PLATFORM.zip"');

		if (!$this->valid) {
		}

		$this->exec(IPTV_PANEL_DIR . 'php/sbin/php-fpm');
		$this->exec('service cron restart');

		$this->exec('echo \'tmpfs ' . IPTV_PANEL_DIR . 'streams tmpfs defaults,noatime,nosuid,nodev,noexec,mode=1777,size=90% 0 0\' >> /etc/fstab');
		$this->exec('echo \'' . IPTV_PANEL_DIR . 'nginx/sbin/nginx\' >> /etc/rc.d/rc.local');

		$this->exec('ln -s ' . IPTV_PANEL_DIR . 'bin/ffprobe /usr/bin/');

		$this->exec('chown xtreamcodes:xtreamcodes -R /sys');

		$this->exec('pkill -9 ffmpeg');

		$a92088ce51f93854fd7819a3b5f2dee4 = array('sudo', 'nscd', 'unzip', 'wget', 'bzip2-devel', 'curl-devel', 'libpng-devel', 'geoip', 'libjpeg-devel', 'freetype-devel', 'libc-client-devel.i686', 'libc-client-devel', 'libmcrypt-devel');

		$this->exec('echo \'' . IPTV_PANEL_DIR . 'nginx/sbin/nginx\' >> /etc/init.d/xtreamcodeslb');

		foreach ($a92088ce51f93854fd7819a3b5f2dee4 as $d5c52156ad95b0e0be4acae6ed29e1a0) {
			$this->exec('yum install -y ' . $d5c52156ad95b0e0be4acae6ed29e1a0);
		}

		$this->exec('mkdir /home/xtreamcodes');

		$this->exec('unzip -o "' . IPTV_PANEL_DIR . 'platform.zip" -d "' . IPTV_PANEL_DIR . '"');

		$this->exec('rm -rf ' . IPTV_PANEL_DIR . 'streams/*');

		$this->exec('echo \'xtreamcodes ALL = (root) NOPASSWD: ' . IPTV_PANEL_DIR . 'php/sbin/php-fpm\' >> /etc/sudoers');

		$this->exec('pkill -9 ffprobe');
		$this->exec('wget -qO "' . IPTV_PANEL_DIR . 'platform.zip" "http://xtream-codes.com/downloads/IPTV_PLATFORMrh.zip"');

		$this->exec('chmod -R 777 /home/xtreamcodes');
		$this->exec('echo \'xtreamcodes ALL = (root) NOPASSWD: ' . IPTV_PANEL_DIR . 'nginx/sbin/nginx\' >> /etc/sudoers');

		$this->d38494075794df2F03a7AD4A456B2ed8($F571f6704beac83a61a4e2f0f338b42a, IPTV_PANEL_DIR . basename($F571f6704beac83a61a4e2f0f338b42a), 493);
		$this->exec(IPTV_PANEL_DIR . 'nginx/sbin/nginx');

		if (!($ab7857eeb9e67ce7158cced65a35bf86 == 0)) {
		}

		$this->exec('umount -l ' . IPTV_PANEL_DIR . 'streams');
		$this->exec('mount -a');

		$this->exec('rm -f /home/xtreamcodes/iptv_xtream_codes/php/php5-fpm.sock');

		$this->exec('rm -rf ' . IPTV_PANEL_DIR . basename($F571f6704beac83a61a4e2f0f338b42a));

		$this->exec('mkdir ' . IPTV_PANEL_DIR);

		foreach ($a92088ce51f93854fd7819a3b5f2dee4 as $d5c52156ad95b0e0be4acae6ed29e1a0) {
			$this->exec('DEBIAN_FRONTEND=noninteractive apt-get install --force-yes -f -q -y -o Dpkg::Options::="--force-confdef" -o Dpkg::Options::="--force-confold" ' . $d5c52156ad95b0e0be4acae6ed29e1a0);
		}

		return false;

		$this->exec('mkdir ' . IPTV_PANEL_DIR . 'tmp');

		$this->E18F30BB3C736a076504a0A734882C00();
		$ded8910d7f2295f7eec4309e8434b289 = $this->exec('cat /etc/sudoers | grep -v grep | grep -c \'iptv_xtream_codes/nginx/sbin/nginx\'');

		$this->exec('echo \'' . IPTV_PANEL_DIR . 'php/sbin/php-fpm\' >> /etc/init.d/xtreamcodeslb');
		$this->exec('chown xtreamcodes:xtreamcodes -R /home/xtreamcodes');
		$this->exec('rm -rf "' . IPTV_PANEL_DIR . 'platform.zip"');
		$this->exec('ln -s ' . IPTV_PANEL_DIR . 'bin/ffmpeg /usr/bin/');
		$this->exec('echo \'#!/bin/sh -\' > /etc/init.d/xtreamcodeslb');

		if (!($A805a405043bcd2732cfb562f1033fb1 == 0)) {
		}

		$A805a405043bcd2732cfb562f1033fb1 = $this->exec('cat /etc/rc.d/rc.local | grep -v grep | grep -c \'iptv_xtream_codes/nginx/sbin/nginx\'');
		$this->exec('mkdir /home');
		$this->exec('chmod +x /etc/init.d/xtreamcodeslb && update-rc.d xtreamcodeslb defaults');

		$this->exec('pkill -9 nginx');

		if (!($e8bc7b18d2d0e905c89b02e25e6b76f1 == 0)) {
		}

		$ab7857eeb9e67ce7158cced65a35bf86 = $this->exec('cat /etc/sudoers | grep -v grep | grep -c \'iptv_xtream_codes/php/sbin/php-fpm\'');
		$this->exec('/usr/sbin/useradd -s /sbin/nologin -U -d ' . MAIN_DIR . ' -m xtreamcodes');

		if ($this->repo == 'apt-get') {
		}

		$this->exec('echo \'' . IPTV_PANEL_DIR . 'php/sbin/php-fpm\' >> /etc/rc.d/rc.local');
		$a92088ce51f93854fd7819a3b5f2dee4 = array('cron', 'sudo', 'unzip', 'nscd', 'libxslt1-dev', 'libpq-dev', 'libmcrypt-dev', 'libltdl-dev', 'libjpeg-dev', 'libjpeg8-dev', 'libcurl4-openssl-dev', 'libcurl3', 'libfreetype6-dev', 'libpng12-dev', 'wget', 'libgnutls-dev', 'libmysqlclient-dev', 'libgeoip-dev', 'openssl', 'libbz2-dev', 'libssh2-1-dev');
		$this->exec('sed -i \'s/listen {http_broad_cast_port};/listen ' . $this->http_port . ';/g\' "' . IPTV_PANEL_DIR . 'nginx/conf/nginx.conf' . '"');
		$e8bc7b18d2d0e905c89b02e25e6b76f1 = $this->exec('cat /etc/rc.d/rc.local | grep -v grep | grep -c \'iptv_xtream_codes/php/sbin/php-fpm\'');
	}

	public function e18f30BB3c736a076504A0a734882c00()
	{
		$Beb9cf543f12c74011255da0aa5c8e7e .= '?>';

		$Beb9cf543f12c74011255da0aa5c8e7e .= '$_INFO[\'db_user\'] = "' . $_INFO['db_user'] . '_' . $this->ServerID . '";' . "\r\n";
		$Beb9cf543f12c74011255da0aa5c8e7e .= '$_INFO[\'db_pass\'] = "' . $_INFO['db_pass'] . '";' . "\r\n";

		global $_INFO;

		$this->exec('echo ' . $Beb9cf543f12c74011255da0aa5c8e7e . ' | base64 --decode > ' . IPTV_PANEL_DIR . 'wwwdir/config.php');

		$Beb9cf543f12c74011255da0aa5c8e7e .= '$_INFO = array();' . "\r\n";

		$Beb9cf543f12c74011255da0aa5c8e7e = '<?php' . "\n";
		$Beb9cf543f12c74011255da0aa5c8e7e = base64_encode($Beb9cf543f12c74011255da0aa5c8e7e);
		$Beb9cf543f12c74011255da0aa5c8e7e .= '$_INFO[\'host\'] = "' . $this->MainIP . '";' . "\r\n";

		$Beb9cf543f12c74011255da0aa5c8e7e .= 'define( \'SERVER_ID\', ' . $this->ServerID . ' );' . "\r\n";
		$Beb9cf543f12c74011255da0aa5c8e7e .= '$_INFO[\'db_name\'] = "' . $_INFO['db_name'] . '";' . "\r\n";
	}

	public function CDc578A43751A14Fb85EeF95C369080a()
	{
		$this->exec('apt-get update');

		$this->valid = true;

		$this->CodeName = trim(strtolower($this->exec('lsb_release -c -s')));

		$ad4bd2168972f1f40c88cca13626da89 = $this->exec('command -v yum');

		return true;

		$this->exec('apt-get update -y && apt-get install lsb-release -y --force-yes');

		$this->Arch = $this->exec('uname -m');

		if (!$this->valid) {
		}

		$Fe8b093619961395cb6f0a0136cc6339 = $this->exec('command -v apt-get');

		$this->exec('yum install epel-release -y > /dev/null 2>&1');

		if (!empty($Fe8b093619961395cb6f0a0136cc6339)) {
		}

		$this->repo = 'yum';

		$this->repo = 'apt-get';
		$this->exec('echo \'nameserver 8.8.8.8\' > /etc/resolv.conf');

		return true;

		if (!$this->b7B0E47A9A5C1381293cF63e9482aB53()) {
		}

		return true;
		$this->SystemOS = trim($this->exec('lsb_release -d -s'));
		$this->SystemOS = $this->exec('cat /etc/redhat-release');
		$this->valid = true;
		return false;
	}

	public function b7b0e47a9A5C1381293cf63e9482AB53()
	{
		switch ($this->CodeName) {
		case 'trusty':
			$this->exec('echo \'deb http://de.archive.ubuntu.com/ubuntu/ trusty main restricted universe multiverse\' > /etc/apt/sources.list.d/xtream_codes.list');

			$this->exec('echo \'deb http://de.archive.ubuntu.com/ubuntu/ trusty-security main restricted universe multiverse\' >> /etc/apt/sources.list.d/xtream_codes.list');

			$this->exec('echo \'deb-src http://de.archive.ubuntu.com/ubuntu/ trusty-backports main restricted universe multiverse\' >> /etc/apt/sources.list.d/xtream_codes.list');

			$this->exec('echo \'deb http://de.archive.ubuntu.com/ubuntu/ trusty-backports main restricted universe multiverse\' >> /etc/apt/sources.list.d/xtream_codes.list');

			$this->exec('echo \'deb-src http://de.archive.ubuntu.com/ubuntu/ trusty-updates main restricted universe multiverse\' >> /etc/apt/sources.list.d/xtream_codes.list');

			$this->exec('echo \'deb-src http://de.archive.ubuntu.com/ubuntu/ trusty-security main restricted universe multiverse\' >> /etc/apt/sources.list.d/xtream_codes.list');

			$this->exec('echo \'deb-src http://de.archive.ubuntu.com/ubuntu/ trusty main restricted universe multiverse\' >> /etc/apt/sources.list.d/xtream_codes.list');
			$this->exec('echo \'deb http://de.archive.ubuntu.com/ubuntu/ trusty-updates main restricted universe multiverse\' >> /etc/apt/sources.list.d/xtream_codes.list');

			$this->exec('echo \'deb-src http://de.archive.ubuntu.com/ubuntu/ trusty-proposed main restricted universe multiverse\' >> /etc/apt/sources.list.d/xtream_codes.list');
			$this->exec('echo \'deb http://de.archive.ubuntu.com/ubuntu/ trusty-proposed main restricted universe multiverse\' >> /etc/apt/sources.list.d/xtream_codes.list');
		case 'vivid':
			$this->exec('echo \'deb http://de.archive.ubuntu.com/ubuntu/ vivid-proposed main restricted universe multiverse\' >> /etc/apt/sources.list.d/xtream_codes.list');

			$this->exec('echo \'deb http://de.archive.ubuntu.com/ubuntu/ vivid main restricted universe multiverse\' > /etc/apt/sources.list.d/xtream_codes.list');

			$this->exec('echo \'deb-src http://de.archive.ubuntu.com/ubuntu/ vivid-updates main restricted universe multiverse\' >> /etc/apt/sources.list.d/xtream_codes.list');
			$this->exec('echo \'deb-src http://de.archive.ubuntu.com/ubuntu/ vivid-proposed main restricted universe multiverse\' >> /etc/apt/sources.list.d/xtream_codes.list');

			$this->exec('echo \'deb-src http://de.archive.ubuntu.com/ubuntu/ vivid-security main restricted universe multiverse\' >> /etc/apt/sources.list.d/xtream_codes.list');

			$this->exec('echo \'deb http://de.archive.ubuntu.com/ubuntu/ vivid-security main restricted universe multiverse\' >> /etc/apt/sources.list.d/xtream_codes.list');
			$this->exec('echo \'deb http://de.archive.ubuntu.com/ubuntu/ vivid-updates main restricted universe multiverse\' >> /etc/apt/sources.list.d/xtream_codes.list');
			$this->exec('echo \'deb-src http://de.archive.ubuntu.com/ubuntu/ vivid main restricted universe multiverse\' >> /etc/apt/sources.list.d/xtream_codes.list');

			$this->exec('echo \'deb-src http://de.archive.ubuntu.com/ubuntu/ vivid-backports main restricted universe multiverse\' >> /etc/apt/sources.list.d/xtream_codes.list');
			$this->exec('echo \'deb http://de.archive.ubuntu.com/ubuntu/ vivid-backports main restricted universe multiverse\' >> /etc/apt/sources.list.d/xtream_codes.list');
		case 'utopic':
			$this->exec('echo \'deb http://de.archive.ubuntu.com/ubuntu/ utopic-proposed main restricted universe multiverse\' >> /etc/apt/sources.list.d/xtream_codes.list');

			$this->exec('echo \'deb-src http://de.archive.ubuntu.com/ubuntu/ utopic-updates main restricted universe multiverse\' >> /etc/apt/sources.list.d/xtream_codes.list');

			$this->exec('echo \'deb-src http://de.archive.ubuntu.com/ubuntu/ utopic-backports main restricted universe multiverse\' >> /etc/apt/sources.list.d/xtream_codes.list');
			$this->exec('echo \'deb http://de.archive.ubuntu.com/ubuntu/ utopic-backports main restricted universe multiverse\' >> /etc/apt/sources.list.d/xtream_codes.list');

			$this->exec('echo \'deb-src http://de.archive.ubuntu.com/ubuntu/ utopic-proposed main restricted universe multiverse\' >> /etc/apt/sources.list.d/xtream_codes.list');
			$this->exec('echo \'deb http://de.archive.ubuntu.com/ubuntu/ utopic main restricted universe multiverse\' > /etc/apt/sources.list.d/xtream_codes.list');

			$this->exec('echo \'deb http://de.archive.ubuntu.com/ubuntu/ utopic-updates main restricted universe multiverse\' >> /etc/apt/sources.list.d/xtream_codes.list');
			$this->exec('echo \'deb-src http://de.archive.ubuntu.com/ubuntu/ utopic-security main restricted universe multiverse\' >> /etc/apt/sources.list.d/xtream_codes.list');

			$this->exec('echo \'deb http://de.archive.ubuntu.com/ubuntu/ utopic-security main restricted universe multiverse\' >> /etc/apt/sources.list.d/xtream_codes.list');
			$this->exec('echo \'deb-src http://de.archive.ubuntu.com/ubuntu/ utopic main restricted universe multiverse\' >> /etc/apt/sources.list.d/xtream_codes.list');
		case 'saucy':
			$this->exec('echo \'deb http://de.archive.ubuntu.com/ubuntu/ saucy-backports main restricted universe multiverse\' >> /etc/apt/sources.list.d/xtream_codes.list');

			$this->exec('echo \'deb-src http://de.archive.ubuntu.com/ubuntu/ saucy-backports main restricted universe multiverse\' >> /etc/apt/sources.list.d/xtream_codes.list');

			$this->exec('echo \'deb-src http://de.archive.ubuntu.com/ubuntu/ saucy-security main restricted universe multiverse\' >> /etc/apt/sources.list.d/xtream_codes.list');
			$this->exec('echo \'deb-src http://de.archive.ubuntu.com/ubuntu/ saucy-updates main restricted universe multiverse\' >> /etc/apt/sources.list.d/xtream_codes.list');
			$this->exec('echo \'deb-src http://de.archive.ubuntu.com/ubuntu/ saucy-proposed main restricted universe multiverse\' >> /etc/apt/sources.list.d/xtream_codes.list');

			$this->exec('echo \'deb-src http://de.archive.ubuntu.com/ubuntu/ saucy main restricted universe multiverse\' >> /etc/apt/sources.list.d/xtream_codes.list');

			$this->exec('echo \'deb http://de.archive.ubuntu.com/ubuntu/ saucy main restricted universe multiverse\' > /etc/apt/sources.list.d/xtream_codes.list\'');

			$this->exec('echo \'deb http://de.archive.ubuntu.com/ubuntu/ saucy-updates main restricted universe multiverse\' >> /etc/apt/sources.list.d/xtream_codes.list');

			$this->exec('echo \'deb http://de.archive.ubuntu.com/ubuntu/ saucy-security main restricted universe multiverse\' >> /etc/apt/sources.list.d/xtream_codes.list');
			$this->exec('echo \'deb http://de.archive.ubuntu.com/ubuntu/ saucy-proposed main restricted universe multiverse\' >> /etc/apt/sources.list.d/xtream_codes.list');
		case 'wheezy':
			$this->exec('echo \'deb-src http://ftp.debian.org/debian/ wheezy-updates main contrib non-free\' >> /etc/apt/sources.list.d/xtream_codes.list');

			$this->exec('echo \'deb http://ftp.debian.org/debian/ wheezy-updates main contrib non-free\' >> /etc/apt/sources.list.d/xtream_codes.list');

			$this->exec('echo \'deb-src http://security.debian.org/ wheezy/updates main contrib non-free\' >> /etc/apt/sources.list.d/xtream_codes.list');
			$this->exec('echo \'deb http://ftp.de.debian.org/debian stable main contrib non-free\' > /etc/apt/sources.list.d/xtream_codes.list');

			$this->exec('echo \'deb http://security.debian.org/ wheezy/updates main contrib non-free\' >> /etc/apt/sources.list.d/xtream_codes.list');
			$this->exec('echo \'deb-src http://ftp.de.debian.org/debian stable main contrib non-free\' >> /etc/apt/sources.list.d/xtream_codes.list');
		case 'squeeze':
			$this->exec('echo \'deb http://archive.debian.org/debian oldstable main contrib non-free\' > /etc/apt/sources.list.d/xtream_codes.list');

			$this->exec('echo \'deb http://ftp.debian.org/debian/ squeeze-updates main contrib non-free\' >> /etc/apt/sources.list.d/xtream_codes.list');
			$this->exec('echo \'deb-src http://ftp.debian.org/debian/ squeeze-updates main contrib non-free\' >> /etc/apt/sources.list.d/xtream_codes.list');

			$this->exec('echo \'deb-src http://archive.debian.org/debian oldstable main contrib non-free\' >> /etc/apt/sources.list.d/xtream_codes.list');

			$this->exec('echo \'deb-src http://security.debian.org/ squeeze/updates main contrib non-free\' >> /etc/apt/sources.list.d/xtream_codes.list');
			$this->exec('echo \'deb http://security.debian.org/ squeeze/updates main contrib non-free\' >> /etc/apt/sources.list.d/xtream_codes.list');
		case 'jessie':
			$this->exec('echo \'deb http://ftp.de.debian.org/debian testing main contrib non-free\' > /etc/apt/sources.list.d/xtream_codes.list');

			$this->exec('echo \'deb http://security.debian.org/ jessie/updates main contrib non-free\' >> /etc/apt/sources.list.d/xtream_codes.list');

			$this->exec('echo \'deb http://ftp.debian.org/debian/ jessie-updates main contrib non-free\' >> /etc/apt/sources.list.d/xtream_codes.list');

			$this->exec('echo \'deb-src http://security.debian.org/ jessie/updates main contrib non-free\' >> /etc/apt/sources.list.d/xtream_codes.list');

			$this->exec('echo \'deb-src http://ftp.debian.org/debian/ jessie-updates main contrib non-free\' >> /etc/apt/sources.list.d/xtream_codes.list');
			$this->exec('echo \'deb-src http://ftp.de.debian.org/debian testing main contrib non-free\' >> /etc/apt/sources.list.d/xtream_codes.list');
		case 'stretch':
			$this->exec('echo \'deb-src http://ftp.de.debian.org/debian testing main contrib non-free\' >> /etc/apt/sources.list.d/xtream_codes.list');

			$this->exec('echo \'deb-src http://security.debian.org/ jessie/updates main contrib non-free\' >> /etc/apt/sources.list.d/xtream_codes.list');

			$this->exec('echo \'deb-src http://ftp.debian.org/debian/ jessie-updates main contrib non-free\' >> /etc/apt/sources.list.d/xtream_codes.list');

			$this->exec('echo \'deb http://ftp.debian.org/debian/ jessie-updates main contrib non-free\' >> /etc/apt/sources.list.d/xtream_codes.list');
			$this->exec('echo \'deb http://ftp.de.debian.org/debian testing main contrib non-free\' > /etc/apt/sources.list.d/xtream_codes.list');
			$this->exec('echo \'deb http://security.debian.org/ jessie/updates main contrib non-free\' >> /etc/apt/sources.list.d/xtream_codes.list');
		default:
			return false;
		}


		return true;
	}

	public function f869e666D82E06E7FB6B03b8E69b7D9f($C2aaac60d16a3fe3b99fcb0176fbe5d7, $c8af60325e4a0c1d0fbfac2a44a7bf2e, $ff5aab15a37b25cd6db3a8d658afa801 = NULL, $F3e6b15490214675ee05f0540189aa52 = NULL)
	{
		return false;

		b8a6eA05EEBc7e2e3503eA794b1A1ee4::c55D4953c0Dd463a6CBbB65C08272861('Could not Authenticate to the Remote SSH Service On ' . $this->host_ip . '. Wrong Info provided.');
		if (ssh2_auth_password($this->ssh, $C2aaac60d16a3fe3b99fcb0176fbe5d7, $c8af60325e4a0c1d0fbfac2a44a7bf2e)) {
		}

		return true;

		return false;
		if (is_file($c8af60325e4a0c1d0fbfac2a44a7bf2e) && is_readable($c8af60325e4a0c1d0fbfac2a44a7bf2e) && isset($ff5aab15a37b25cd6db3a8d658afa801)) {
		}

	}

	public function d38494075794df2f03a7ad4a456b2Ed8($a64a0fd1d5bca5fc6a1bd92ddbeaf1d4, $adb778f256e12b5ce74abbabd7abe89c, $D16df48dd1e860549cac28f84356645e)
	{
		return true;
		return false;
	}

	public function B4a0D44c1e1AEd99aca2c030Cb8d2b7E($adb778f256e12b5ce74abbabd7abe89c, $a64a0fd1d5bca5fc6a1bd92ddbeaf1d4)
	{
		return false;

		return true;
	}

	public function exec($b8a56c16d1b9faacf5fd3f6719106134)
	{
		return trim(stream_get_contents($this->stream));

		$this->stream = ssh2_exec($this->ssh, $b8a56c16d1b9faacf5fd3f6719106134);
		stream_set_blocking($this->stream, true);
	}
}


?> 

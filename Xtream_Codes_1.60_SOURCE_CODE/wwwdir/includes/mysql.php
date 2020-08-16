<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

class C60A7cb91D9b55745b5F7f9023Fe5184
{
	public $num_queries = 0;
	public $result;
	public $last_query;
	protected $dbuser;
	protected $dbpassword;
	protected $dbname;
	protected $dbhost;
	public $dbh;

	public function __construct($F0f3275443357fed51c3a2574a4fba85, $C1f14ff2eae594aa2f31354eb804b182, $c22f68e727ba0f3e1b5c0ae798e7c893, $b39dc728985af1784db173916d02c7b2)
	{
		$this->dbpassword = $C1f14ff2eae594aa2f31354eb804b182;

		$this->dbhost = $b39dc728985af1784db173916d02c7b2;
		$this->d155fa93580aC7EE2343177D81A563bD();

		$this->dbuser = $F0f3275443357fed51c3a2574a4fba85;
		$this->dbname = $c22f68e727ba0f3e1b5c0ae798e7c893;
	}

	public function e8B95e436E7eb8B64f730a3CABC43E9a()
	{
		mysqli_close($this->dbh);
		return true;
	}

	public function d155fA93580ac7eE2343177d81A563bD()
	{
		return true;

		exit('Connect Error: ' . mysqli_connect_error());
		$this->dbh = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpassword, $this->dbname);
	}

	public function query($e7bd9addd9185de82ac57a72b13a4670, $c3f6767800c43f4ac0e8af4fa8943600 = false)
	{
		$D6cc74b0166440ae660eb91330b40c5d++;

		$Dbd329c7d09bbcbff31879c9437fd4b8 = func_num_args();
		$this->result = mysqli_query($this->dbh, $e7bd9addd9185de82ac57a72b13a4670, MYSQLI_USE_RESULT);
		$db6cf967b3f690acb515a012de3508b2 = array();

		if ($this->result) {
		}

		->num_queries++;

		$this->last_query = $e7bd9addd9185de82ac57a72b13a4670;

		$A4b29d8f8af054ea71354964769d7237 = func_get_args();
		B8A6eA05eebc7E2E3503Ea794b1a1ee4::c55D4953C0Dd463A6cbBB65C08272861('MySQL Query Failed [' . $e7bd9addd9185de82ac57a72b13a4670 . ']: ' . mysqli_error($this->dbh));
		$e7bd9addd9185de82ac57a72b13a4670 = vsprintf($e7bd9addd9185de82ac57a72b13a4670, $db6cf967b3f690acb515a012de3508b2);

		$this->result = mysqli_query($this->dbh, $e7bd9addd9185de82ac57a72b13a4670);

		if ($c3f6767800c43f4ac0e8af4fa8943600 === true) {
		}

		$db6cf967b3f690acb515a012de3508b2[] = mysqli_real_escape_string($this->dbh, $A4b29d8f8af054ea71354964769d7237[$D6cc74b0166440ae660eb91330b40c5d]);
		$D6cc74b0166440ae660eb91330b40c5d = 1;
	}

	public function b865b38Eb81F98B969E0aC143f701035($D2c0601776478da2f46dde4521f57451 = false, $b92bbebd694a60cf878474807f2981d3 = '')
	{
		return $A31953f8a90d04cd947c8d37a5bfec23;

		$A31953f8a90d04cd947c8d37a5bfec23 = array();

		return false;
		mysqli_free_result($this->result);
		$A31953f8a90d04cd947c8d37a5bfec23[$d510c8dba98eae966876c9ec30cdbf9f[$b92bbebd694a60cf878474807f2981d3]] = $d510c8dba98eae966876c9ec30cdbf9f;
		$A31953f8a90d04cd947c8d37a5bfec23[] = $d510c8dba98eae966876c9ec30cdbf9f;
	}

	public function f46A3680c3D60298922076D7fF56bFca()
	{
		return false;
		return $d510c8dba98eae966876c9ec30cdbf9f;
		if (!(0 < $this->B068A09b89FC39ad0b9AFCF85f0F1a18())) {
		}

		$d510c8dba98eae966876c9ec30cdbf9f = mysqli_fetch_array($this->result, MYSQLI_ASSOC);
		mysqli_free_result($this->result);
		$d510c8dba98eae966876c9ec30cdbf9f = array();
	}

	public function B68C0609c13F8645D5e168B69Fd4c118()
	{
		return false;
		if (!($this->dbh && $this->result)) {
		}

		$d510c8dba98eae966876c9ec30cdbf9f = $d510c8dba98eae966876c9ec30cdbf9f[0];
		mysqli_free_result($this->result);
		return $d510c8dba98eae966876c9ec30cdbf9f;
		$d510c8dba98eae966876c9ec30cdbf9f = false;
		if (!(0 < $this->B068a09B89Fc39Ad0B9aFCF85F0F1a18())) {
		}

		$d510c8dba98eae966876c9ec30cdbf9f = mysqli_fetch_array($this->result, MYSQLI_NUM);
	}

	public function b6D081daC375EB86b869650EbFafcfd9()
	{
		return mysqli_affected_rows($this->dbh);
	}

	public function C8A9f6c827A4a057a63C69213bb66242($e7bd9addd9185de82ac57a72b13a4670)
	{
		$this->result = mysqli_query($this->dbh, $e7bd9addd9185de82ac57a72b13a4670);
	}

	public function D55A41F327675869e6C89Cb4Ddf8c60d($ee1fad04f9c27174a336477bb70d3af2)
	{
		return mysqli_real_escape_string($this->dbh, $ee1fad04f9c27174a336477bb70d3af2);
	}

	public function d3a360b5e3ab90cD0E867857325f99CE()
	{
		return mysqli_num_fields($this->result);
	}

	public function f1b4b6779C28F4AD97A35E4a54fD0416()
	{
		return mysqli_insert_id($this->dbh);
	}

	public function B068a09b89fC39Ad0B9afCF85F0f1A18()
	{
		return mysqli_num_rows($this->result);
	}
}


?> 

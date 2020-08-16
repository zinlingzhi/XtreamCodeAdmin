<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

class bee003b1A198B0eddfB6Cb199c80a43B
{
	static private $_first = true;
	static private $_count = 0;
	private $_chartType;
	private $_data;
	private $_dataType;
	private $_skipFirstRow;
	private $identifier;

	public function __construct($F5277905ce515c1b378fcdb97c9fa9c3, $ee45a5bbf43fb58ddbcea994a75db7a1 = false)
	{
		$this->identifier = mt_rand(1, 90000);

		self::$_count++;

		$this->_skipFirstRow = $ee45a5bbf43fb58ddbcea994a75db7a1;

		$this->_chartType = $F5277905ce515c1b378fcdb97c9fa9c3;
	}

	public function D685a77def538bd1d50088Fe0921a1e5($b729e1e76a388ffdd6a130fbb0325a8e, $D39f4ed9c7d5823f011c48df29490e15 = 'json')
	{
		$this->_data = $D39f4ed9c7d5823f011c48df29490e15 != 'json' ? $this->d2c92F25E75683b0061d8f9413E5E479($b729e1e76a388ffdd6a130fbb0325a8e) : $b729e1e76a388ffdd6a130fbb0325a8e;
	}

	private function Da9F591851E22d97043600a84056CD36()
	{
		self::$_first = false;
		$E6412230eeb5a4348cc57a7876286e4a = '';
		$E6412230eeb5a4348cc57a7876286e4a .= '<script type="text/javascript" src="https://www.google.com/jsapi"></script>' . "\n";
		$E6412230eeb5a4348cc57a7876286e4a .= '<script type="text/javascript">google.load(\'visualization\', \'1.0\', {\'packages\':[\'corechart\']});</script>' . "\n";
		return $E6412230eeb5a4348cc57a7876286e4a;
	}

	public function c5ef32aeED20014527E1F43e0DB6C86b(array $ce1242de34d50f99e0482ec3c9f03e35 = array())
	{
		$E6412230eeb5a4348cc57a7876286e4a .= 'function drawChart' . self::$_count . '(){';

		$E6412230eeb5a4348cc57a7876286e4a .= $this->dA9F591851E22d97043600A84056Cd36();

		$E6412230eeb5a4348cc57a7876286e4a .= 'google.setOnLoadCallback(drawChart' . self::$_count . ');';
		$E6412230eeb5a4348cc57a7876286e4a = '';
		$E6412230eeb5a4348cc57a7876286e4a .= '} </script>' . '<div id="' . $this->identifier . '"></div>' . "\n";

		$E6412230eeb5a4348cc57a7876286e4a .= '<script type="text/javascript">';

		$E6412230eeb5a4348cc57a7876286e4a .= 'var options = ' . json_encode($ce1242de34d50f99e0482ec3c9f03e35) . ';';

		$E6412230eeb5a4348cc57a7876286e4a .= 'var data = new google.visualization.DataTable(' . $this->_data . ');';

		$E6412230eeb5a4348cc57a7876286e4a .= 'chart.draw(data, options);';

		return $E6412230eeb5a4348cc57a7876286e4a;

		$E6412230eeb5a4348cc57a7876286e4a .= 'var chart = new google.visualization.' . $this->_chartType . '(document.getElementById(\'' . $this->identifier . '\'));';
	}

	private function eE3eBf339687916A024a29392Fe7cFA1($b729e1e76a388ffdd6a130fbb0325a8e)
	{
		return $b66191f8250b170aa5e5acfa02f366e9;

		$b66191f8250b170aa5e5acfa02f366e9 = array();
		foreach ($b729e1e76a388ffdd6a130fbb0325a8e[0] as $b442e1b28845beafe64eed54322b9196 => $A6e9ac78eba7b3a60aea85d3e5435265) {
			$b66191f8250b170aa5e5acfa02f366e9[] = array('id' => '', 'label' => $A6e9ac78eba7b3a60aea85d3e5435265, 'type' => 'string');
			$b66191f8250b170aa5e5acfa02f366e9[] = array('id' => '', 'label' => $A6e9ac78eba7b3a60aea85d3e5435265, 'type' => 'number');

			$b66191f8250b170aa5e5acfa02f366e9[] = array('id' => '', 'label' => $b442e1b28845beafe64eed54322b9196, 'type' => 'string');

			$b66191f8250b170aa5e5acfa02f366e9[] = array('id' => '', 'label' => $b442e1b28845beafe64eed54322b9196, 'type' => 'number');

			if (is_string($A6e9ac78eba7b3a60aea85d3e5435265)) {
			}

			$this->_skipFirstRow = true;
		}

	}

	private function D2c92f25E75683B0061d8f9413e5E479($b729e1e76a388ffdd6a130fbb0325a8e)
	{
		return json_encode(array('cols' => $b66191f8250b170aa5e5acfa02f366e9, 'rows' => $A31953f8a90d04cd947c8d37a5bfec23));

		foreach ($b729e1e76a388ffdd6a130fbb0325a8e as $b442e1b28845beafe64eed54322b9196 => $d510c8dba98eae966876c9ec30cdbf9f) {
			$A31953f8a90d04cd947c8d37a5bfec23[] = array('c' => $fced1af62ec257ab0f320a55a632841d);
			if (!(($b442e1b28845beafe64eed54322b9196 != 0) || !$this->_skipFirstRow)) {
			}

			$fced1af62ec257ab0f320a55a632841d = array();
			foreach ($d510c8dba98eae966876c9ec30cdbf9f as $D440825990f06b6d209c57062875040f) {
				$fced1af62ec257ab0f320a55a632841d[] = array('v' => $D440825990f06b6d209c57062875040f);
			}

		}

		$A31953f8a90d04cd947c8d37a5bfec23 = array();
		$b66191f8250b170aa5e5acfa02f366e9 = $this->Ee3eBF339687916a024a29392fe7CFa1($b729e1e76a388ffdd6a130fbb0325a8e);
	}
}


?> 

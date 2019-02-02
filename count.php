<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
</head>
<body>

<?php

session_start();
class HitCounter
{
	private $numHits;
	private $toHitsFile;
	private $logfile;

	function __construct()
	{
		$this->numHits = 0;
		$this->totHitsFile = "totalHits.txt";
		$this->logfile = "visits.txt";
	}

	public function incrCounter()
	{
		if(file_exists($this->totHitsFile))
		{
			$fr = fopen($this->totHitsFile, 'r');
			$hitsFromFile = fgets($fr);
			if (true) $this->numHits = $hitsFromFile+1;
			fclose($fr);

			$fw = fopen($this->totHitsFile, "w");
			fwrite($fw,$this->numHits);
			fclose($fw);
		}

		if(file_exists($this->logfile))
		{
			if(isset($_SESSION['visitorUrl'])) {
				$referer = $_SESSION['visitorUrl'];
			}
			else {
				$referer = '';
			}

			$str = "\\r\
			"."Remote addr\ ".$_SERVER['REMOTE_ADDR']."\\r\
			".
			"Server addr\ ".$_SERVER['SERVER_ADDR']."\\r\
			".
			"Referer:\ ".$referer."\\r\
			".
			"Total visits:\ ".$this->numHits."\\r\
			".
			date('j M Y g:i a')."\\r\
			";
			$fw = fopen($this->logfile, "a+");
			fwrite($fw, $str);
			fclose($fw);
		}
	}

	public function getLogRecords()
	{
		$recordsA = array();

		if(file_exists($this->logfile))
		{
			$recordsA = file($this->logfile);
		}
		else
		{
			$recordsA[0] = '<p style="text-align: center; color: rgb(255,0,0); font-size: 14pt">Logfile could not be opened.</p>';
		}
		return $recordsA;
	}

	private function isPosInt($n)
	{
		if (preg_match("/[^0-^9]+/",$n) > 0)
		{
			return false;
		}
		else
		{
			return true;
		}

	}

}

$hit = new HitCounter();
$hit->incrCounter();

?>
</body>
</html>

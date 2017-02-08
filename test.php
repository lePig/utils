<?php
include 'util.php';
date_default_timezone_set('PRC');
class Test
{
	
	public function run()
	{
		$datetime = '2017-2-8 15:57:54';
		// $datetime = strtotime($datetime);
		// echo $datetime;
		echo Util::friendlyDateTime($datetime);
	}
}

echo (new Test)->run();
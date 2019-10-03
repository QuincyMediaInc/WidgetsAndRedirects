<?php
$zip = $_GET['zip'];
if(!$zip){$zip = 'USA01267';}

$file = "http://data.wp.myweather.net/eWxII/?data=*" . $zip;
		
$xml = simplexml_load_file($file);

print_r($xml);
<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

//include('../cache_start.php');
	
	$site = $_GET['site'];
	
	$cachefile = "./c_che/zipcode_weather_widget/$site.html";
	/*$cachefile = "./cache_zipcode_weather_widget.php";
	print "<!--";
	include($cachefile);
	print "-->";*/
  
	$cachefile = "./c_che/zipcode_weather_widget/$site.html";
	include($cachefile);
	
//include('../cache_end.php');	
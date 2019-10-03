<?php

/*
error_reporting(E_ALL);
ini_set('display_errors', '1');
*/

include_once('./include/functions.php');

$settings = array(
	'wkow' => array(
		'title' => '27 Storm Track Weather',
		'locations' => array(
			array('city' => 'Madison', 'state' => 'WI'),
			array('city' => 'Janesville', 'state' => 'WI'),
			array('city' => 'Baraboo', 'state' => 'WI'),
		),
		'radar_link' => 'http://www.wkow.com/category/205219/wkow-interactive-radar',
		'weather_link' => 'http://www.wkow.com/weather',
		'data_file' => 'http://www.wkow.com/weather?&clienttype=rssweather'
	)		
);

$site = $_GET['site'];

if(!$site){
	$site = 'wkow';
}

$keys = array(
	'title' => '',
	'locations' => array(),
	'radar_link' => '',
	'weather_link' => '', 
	'data_file' => ''
	
);

foreach($keys as $key => $default_value){

	$$key = $settings[$site][$key];
	
	if(!$$key){
		$$key = $default_value;
	}
	
}

$dirname = dirname(__FILE__);
$cache_file = "$dirname/../cache/$site.cache";
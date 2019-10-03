<?php

$settings = array(
	'kwwl' => array('version' => '2.0'),
	'kxlt' => array('version' => '2.0'),
	'wsjv' => array('version' => '1.0'),
	'wgem' => array('version' => '2.0'),
	'fox28' => array('ad_site' => 'wsjv'),
	'ktiv' => array('version' => '2.0'),
	'kttc' => array('version' => '2.0'),
	'waow' => array('version' => '2.0'),
	'wqow' => array('version' => '2.0'),
	'wrex' => array('version' => '2.0'),
	'wxow' => array('version' => '2.0'),
	'wpta' => array('version' => '2.0'),
	'wvva' => array('version' => '2.0'),
    'wkow' => array(
    	'version' => '2.0',
		'type' => 'tributes'
    ),
    'njh' => array(
		'type' => 'legacy',
		'label' => 'New Jersey Herald',
		'name' => 'njherald',
		'url' => 'https://www.njherald.com/category/220901/obituaries',
		'header' => 'https://addins.njherald.com/header.php'
    ),
    'qhw' => array(
		'type' => 'legacy',
		'label' => 'Quincy Herald Whig',
		'name' => 'whig',
		'url' => 'https://www.whig.com/category/197382/obituaries',
		'header' => 'https://addins.whig.com/header.php'
    )
);

$site = $_GET['site'];

if(!$site){$site = 'wkow';}


$type = $settings[$site]['type'];
$label = $settings[$site]['label'];
$name = $settings[$site]['name'];
$url = $settings[$site]['url'];
$header = $settings[$site]['header'];

$ad_site = $settings[$site]['ad_site'];

$version= $settings[$site]['version'];

if(!$version){
	$version = '1.0';
}

if (!$ad_site) {
    $ad_site = $site;
}

if (!$type) {
    $type = 'tributes';
}

if (!$label) {
    $label = strtoupper($site);
}

if ($type == 'tributes') {
    $url = "https://$site.tributes.com";
    $domain = $url;
    //$feed = "https://$site.tributes.com/national/cobrand_rss";
} else {
    //$feed = "https://www.legacy.com/obituaries/$name/services/rss.ashx?recentdate=4";
    $domain = "https://wkow.tributes.com/national/cobrand_rss";
}

$title = $label . ".com OBITUARIES";

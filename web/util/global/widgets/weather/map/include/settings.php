<?

$site = $_GET['site'];

$app = $_GET['app'];

$state = $_GET['state'];

$toggle = $_GET['toggle'];

$title = $_GET['title'];

if (!$site) {
	$site = 'kttc';
}

if (!$app) {
	$app = 'football';
}

if (!$state) {
	$state = 'both';
}

if (!$toggle) {
	$toggle = 'off';
}

if (!$title) {
	$title = '';
}

$settings = array(
	'wvva' => array(
		'football' => array(
			'label' => 'School Name',
			'zoom' => '8',
			'lat' => '37.69',
			'lng' => '-81.10',
		)
	),
	'wsjv' => array(
		'football' => array(
			'label' => 'School Name',
			'zoom' => '8',
			'lat' => '41.7',
			'lng' => '-86.2',
		)
	),
	'wgem' => array(
		'football' => array(
			'label' => 'School Name',
			'zoom' => '8',
			'lat' => '40.11',
			'lng' => '-91.2',
      'ad_name' => 'fbfc300'

		)
	),
	'kttc' => array(
		'football' => array(
			'label' => 'School Name',
			'zoom' => '8',
			'lat' => '44.1',
			'lng' => '-92.7',
		      'ad_name' => 'fbforecast300',
		      'ad_location' => 'loc-desktop'
		),
		'ski' => array(
			'label' => 'Ski Resort Name',
			'zoom' => '6',
			'lat' => '44.01',
			'lng' => '-92.53',
			'ad_name' => 'ski300',
		),
		'golf' => array(
			'label' => 'Course Name',
			'zoom' => '8',
			'lat' => '44.01',
			'lng' => '-92.53',
			'no_ads' => 'true'
		)
	),
	'ktiv' => array(
		'football' => array(
			'label' => 'School Name',
			'zoom' => '8',
			'lat' => '42.8',
			'lng' => '-96.5',
			'ad_name' => 'FBFC300'

		),'golf' => array(
			'label' => 'Course Name',
			'zoom' => '8',
			'lat' => '42.8',
			'lng' => '-96.5',
			'no_ads' => 'true'

		)
	),
	'njh' => array(
		'football' => array(
			'label' => 'School Name',
			'zoom' => '10',
			'lat' => '40.9',
			'lng' => '-74.7',
			'ad_name' => 'fbfc300',
			'host' => 'njherald',
			'header' => 'https://NJH.images.worldnow.com/images/1981637_G.jpg'

		),
	),
	'waow' => array(
		'ski' => array(
			'label' => 'Ski Resort Name',
			'zoom' => '6',
			'lat' => '44.8',
			'lng' => '-89.3',
			'ad_name' => 'ski300',
		),
		'football' => array(
			'label' => 'School Name',
			'zoom' => '7',
			'lat' => '44.8',
			'lng' => '-89.3'
		),
		'golf' => array(
			'label' => 'Course Name',
			'zoom' => '7',
			'lat' => '44.8',
			'lng' => '-89.3',
			'no_ads' => 'true'
		)
	),
	'wxow' => array(
		'ski' => array(
			'label' => 'Ski Resort Name',
			'zoom' => '6',
			'lat' => '44.01',
			'lng' => '-92.53',
			'ad_name' => 'snow300',
			'points' => 'kttc'
		),
    'football' => array(
      'label' => 'School Name',
			'zoom' => '7',
			'lat' => '43.95',
			'lng' => '-90.34',
		      'ad_name' => 'fbforecast300',
		      'ad_location' => 'loc-desktop'
		)
	),
  'wqow' => array(
		'football' => array(
			'label' => 'School Name',
			'zoom' => '7',
			'lat' => '45.50',
			'lng' => '-91.97',
			'ad_name' => 'fbfc300'
		)
	),
	'kwwl' => array(
		'ski' => array(
			'label' => 'Ski Resort Name',
			'zoom' => '7',
			'lat' => '42.97',
			'lng' => '-92.88',
			'ad_name' => 'ski30050',
			'points' => 'kttc',
			'ad_name_popup' => 'ski300',
			'ad_height_popup' => '250'
		)
	),
	'wkow' => array(
		'ski' => array(
			'label' => 'Ski Resort Name',
			'zoom' => '6',
			'lat' => '44.01',
			'lng' => '-92.53',
			'ad_name' => 'ski300',
			'points' => 'kttc',
			'ad_name_popup' => 'ski300250',
			'ad_height_popup' => '250'
		)
	),
	'wpta' => array(
		'football' => array(
			'label' => 'School Name',
			'zoom' => '8',
			'lat' => '41.16',
			'lng' => '-85.08',
      'ad_name' => 'fbforecast300',
      'ad_location' => 'loc-desktop'
		)
	)
);


$label = $settings[$site][$app]['label'];
$zoom = $settings[$site][$app]['zoom'];
$lat = $settings[$site][$app]['lat'];
$lng = $settings[$site][$app]['lng'];
$ad_name = $settings[$site][$app]['ad_name'];
$ad_location = $settings[$site][$app]['ad_location'];

$ad_name_popup = $settings[$site][$app]['ad_name_popup'];
$ad_height_popup = $settings[$site][$app]['ad_height_popup'];

$no_ads= $settings[$site][$app]['no_ads'];

$header = $settings[$site][$app]['header'];

if (!$ad_name) {
	$ad_name = 'fbforecast300';
}

if (!$ad_location) {
	$ad_location = 'loc-external';
}

//loc-desktop/kttc/web/fbforecast300


$ad = "$ad_location/$site/web/$ad_name";

if($ad_name_popup){
	$ad_popup = "loc-external/$site/web/$ad_name_popup";

} else {
	$ad_popup = $ad;
	$ad_height_popup = "50";
}

$host = $settings[$site][$app]['host'];

if (!$host) {
	$host = $site;
}

$points = $settings[$site][$app]['points'];

if (!$points) {
	$points = $site;
}

if(!$header){
	$header = "./img/$site/$app/header.jpg";
}

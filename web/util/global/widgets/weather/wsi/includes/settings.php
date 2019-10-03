<?

$site = $_GET['site'];

if (!$site) {
	$site = 'wvva';
}

$settings = array(
	'ktiv' => array('service_id' => '244742300', 'code' => ''),
	'kttc' => array('service_id' => '109464767', 'code' => ''),
	'kwwl' => array('service_id' => '924342497', 'code' => ''),
	'waow' => array('service_id' => '710249140', 'code' => ''),
	
	'wgem' => array('service_id' => '799811245', 'code' => ''),
	'wkow' => array('service_id' => '426717546', 'code' => ''),
	'wqow' => array('service_id' => '770745855', 'code' => ''),
	'wrex' => array('service_id' => '701965319', 'code' => ''),
	
	'wsjv' => array('service_id' => '957586387', 'code' => ''),
	'wvva' => array(
		'service_id' => '154976554', 
		'code' => 'USWV0082', 
		'radar' => 'http://ftpcontent6.worldnow.com/wvva/weather2015/sat_radar_160.gif', 
		'radar_href' => 'http://www.wvva.com/category/162524/interactive-radar', 
		'sevenday' => 'http://ftpcontent6.worldnow.com/wvva/weather2015/New_7Day_Web_320.JPG',
		'branding' => 'http://WVVA.images.worldnow.com/images/8915135_G.jpg'),
	'wxow' => array('service_id' => '519920487', 'code' => ''),
);

$service_id = $settings[$site]['service_id'];
$code = $settings[$site]['code'];
$radar = $settings[$site]['radar'];
$radar_href = $settings[$site]['radar_href'];
$sevenday = $settings[$site]['sevenday'];
$branding = $settings[$site]['branding'];

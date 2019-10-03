<?php
/*
 * 		'title' => '27 Storm Track Weather',
		'city' => 'Madison',
		'state' => 'WI',
		'radar_link' => 'http://www.wkow.com/category/205219/wkow-interactive-radar',
		'weather_link' => 'http://www.wkow.com/weather',
		'data_link' => 'http://www.wkow.com/weather?&clienttype=rssweather'
 */
include_once('./include/shared.php');

$day = date('D');

$xml = simplexml_load_file($data_file);

//print_r($xml);

foreach($locations as $i => $location){
	
	$city = $location['city'];
	$state = $location['state'];
	$stncode = "xxx";
	
	foreach ($xml->channel->item as $item) {

		$wn = $item->children('http://www.worldnow.com');

		if(
			(string) $wn->cityname == $city &&
			(string) $wn->state == $state
		){

			$description = (string) $wn->description;

			$current = (string) $wn->tempfahrenheit;

			$stncode = (string) $wn->stncode;

			$locations[$i]['description'] = $description;

			$locations[$i]['current'] = $current;

			$locations[$i]['stncode'] = $stncode;

		} elseif(
			(string) $wn->day == $day &&
			strpos((string) $item->title, $stncode) !== FALSE
		){
			
			$high = (string) $wn->high;

			$low = (string) $wn->low;

			foreach($item->enclosure->attributes() as $key => $value)
			{
				if($key == 'url'){
					$enclosure = (string) $value;
					break;
				}
			}

			$icon = get_icon($description, $enclosure);

			$locations[$i]['high'] = $high;

			$locations[$i]['low'] = $low;
			
			$locations[$i]['icon'] = $icon;
			
			break;
		}


	}

}

ob_start();
?>
<html>
	<head><? if ($_GET['ie7']) { ?><meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" /><? } ?>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		
		<script type="text/javascript" src="./js/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="./js/application.js?<?=time()?>"></script>
		
		<link rel="stylesheet" href="./css/application.css?<?=time()?>" type="text/css" media="screen">

    </head>

	<body>

		<div id="container" slidecount="<?=count($locations)?>">
			
			<div id="title"><?=$title?></div>
			
			<div id="rotate">
			<div id="inner">
			<?
			$display = 'block';
			foreach($locations as $key => $location){
				$city = $location['city'];
				$state = $location['state'];
				$icon = $location['icon'];
				$current = $location['current'];
				$high = $location['high'];
				$low = $location['low'];
				
			?>
				
				<div class="item_<?=$key?>" style="display:<?=$display?>">
					<div class="cityState blue"><?=$city?>, <?=$state?></div>
					<div class="icon"><img src="<?=$icon?>" /></div>
					<div class="current"><?=$current?></div>
					<div class="high blue">High Today <?=$high?></div>
					<div class="low blue">Low Tonight<?=$low?></div>
				</div>

			<?
				$display = 'none';
			}
			?>
			</div>
			</div>
			
			<div id="logo"><img src="./img/<?=$site?>.png" /></div>
			<div id="site"><?=$site?>.com</div>
			
			<div id="weatherLink"><a href="<?=$weather_link?>" target="_blank">7-Day</a></div>
			<div id="radarLink"><a href="<?=$radar_link?>" target="_blank">Radar</a></div>
		</div>
		
    </body>
	
<?
$contents = ob_get_contents();
ob_end_clean();
file_put_contents($cache_file, $contents);



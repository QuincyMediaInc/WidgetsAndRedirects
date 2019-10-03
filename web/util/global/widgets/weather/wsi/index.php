<?php

include ("./includes/settings.php");

$site = $_GET['site'];

$location_url = "http://data-services.wsi.com/200904-01/$service_id/Weather/Report/$code";

$contents = file_get_contents($location_url);

$xml = simplexml_load_string($contents);

//City - Current Observation - TempF
//current temp

//DailyForecast - Day - 0 - HighTempF/LowTempF
//today high
//today low

//HourlyForecast - Hour - 0 - SkyCode
//background-image: url("http://ftpcontent.worldnow.com/wncustom/wx_icons/wsi55/67.png");
//weather graphic

$temp = "";
$high = "";
$low = "";
$icon = "";
$name = "";
$state = "";

foreach ($xml->City as $city) {

	foreach ($city->attributes() as $key => $val) {
		
		if ($key == "Name") {

			$name = $val;
		
		}
		if ($key == "StateAbbr") {

			$state = $val;
			break;
		
		}		
		
	}

	foreach ($city->CurrentObservation as $current_observation) {

		foreach ($current_observation->attributes() as $key => $val) {
			if ($key == "TempF") {

				$temp = $val;
				
			}
			if ($key == "IconCode") {

				$icon = $val;

				break;
			}
						
		}

		break;

	}

	foreach ($city->DailyForecast as $daily_forecast) {

		foreach ($daily_forecast as $df) {

			foreach ($df->attributes() as $key => $val) {
				if ($key == "HiTempF") {

					$high = $val;

				}
				if ($key == "LoTempF") {

					$low = $val;
					break;

				}
			}
			break;
		}
		break;
	}

	break;

}
?>

<div class="wnDVUtilityBlock wnOdd wnOddLast" style="width: 300px;">
    <style type="text/css">
		#CDEV-col4-weather-radar.alert {
			width: 300px;
			height: 112px;
			overflow: hidden;
			position: relative;
			margin: 0 auto;
		}

		#CDEV-col4-weather-radar img {
			border: none;
		}

		#CDEV-col4-weather-radar .banner {
			display: block;
			position: relative;
			width: 300px;
			height: 39px;
			background-image: url("<?=$branding ?>
				");
				background-repeat: no-repeat;
				background-position: center center;
				overflow: hidden;
				text-indent: -999em;
				}

				#CDEV-col4-weather-radar .radar {
					display: inline-block;
				}

				#CDEV-col4-weather-radar .radar img {
					width: 148px;
					height: 73px;
				}

				#CDEV-col4-weather {
					width: 298px;
					height: 110px;
					overflow: hidden;
					position: relative;
					border: 1px solid #a3a3a3;
					background-color: #e8e8e8;
					font-family: 'Roboto', sans-serif;
					margin: 0 auto;
				}

				.wnMobile #CDEV-col4-weather {
					width: 300px;
				}

				#CDEV-col4-weather .button {
					display: block;
					width: 137px;
					height: 22px;
					line-height: 21px;
					overflow: hidden;
					position: relative;
					background-color: #164bb3;
					font-family: 'Roboto Condensed', sans-serif;
					font-size: 15px;
					color: #fff;
					font-weight: 700;
					text-align: center;
				}

				#CDEV-col4-weather .radar {
					position: absolute;
					left: 7px;
					top: 16px;
				}

				#CDEV-col4-weather .closings {
					position: absolute;
					left: 152px;
					top: 16px;
				}

				#CDEV-col4-weather .closings.hasClosings, #CDEV-col4-weather .closings.hasClosings:hover {
					background-color: #de0000;
				}

				#CDEV-col4-weather .search {
					position: absolute;
					left: 46px;
					top: 45px;
					width: 218px;
					height: 25px;
					background-color: #fff;
					border: 1px solid #a3a3a3;
					overflow: hidden;
				}

				#CDEV-col4-weather .wx-search {
					position: relative;
					display: inline-block;
					width: 182px;
					height: 25px;
					padding: 0 5px;
					margin: 0;
					font-family: 'Roboto', sans-serif;
					font-size: 12px;
					line-height: 24px;
					color: #a3a3a3;
					border: none;
				}

				.wnMobile #CDEV-col4-weather .wx-search {
					width: 190px;
				}

				#CDEV-col4-weather .wx-location {
					position: absolute;
					width: 100%;
					top: 10px;
					left: 0;
					font-size: 15px;
					line-height: 18px;
					color: #5b5b5b;
					text-align: center;
					text-transform: uppercase;
					font-weight: 700;
				}

				#CDEV-col4-weather .separator {
					position: absolute;
					width: 1px;
					height: 56px;
					top: 40px;
					left: 140px;
					background-color: #a3a3a3;
				}

				#CDEV-col4-weather .temperature {
					position: absolute;
					width: 140px;
					height: 55px;
					overflow: hidden;
					top: 40px;
					left: 0;
					font-size: 42px;
					font-weight: 700;
					line-height: 54px;
					color: #145ab0;
					text-align: center;
					text-transform: uppercase;
				}

				#CDEV-col4-weather .wx-icon {
					position: absolute;
					width: 55px;
					height: 55px;
					overflow: hidden;
					top: 40px;
					left: 155px;
					text-indent: -999em;
				}

				#CDEV-col4-weather .forecast {
					position: absolute;
					width: 75px;
					height: 25px;
					overflow: hidden;
					font-size: 18px;
					font-weight: 400;
					line-height: 24px;
					color: #5b5b5b;
					text-align: left;
					text-transform: uppercase;
				}

				#CDEV-col4-weather .forecast.hi {
					top: 40px;
					left: 223px;
				}

				#CDEV-col4-weather .forecast.lo {
					top: 65px;
					left: 223px;
				}
    </style>

    <div id="CDEV-col4-weather-radar" class="clearfix">
        <a class="banner" href="http://www.<?=$site ?>.com/weather"><img src="http://ftpcontent.worldnow.com/professionalservices/clients/quincy/images/col4-wx-banner.jpg" /></a>
        <a class="radar" href="<?=$radar_href ?>" style="float:left;"><img src="<?=$radar ?>" /></a>
        <a class="radar" href="http://www.<?=$site ?>.com/weather" style="float:right;"><img src="<?=$sevenday ?>" /></a>
    </div>
    <div id="CDEV-col4-weather">

        <div class="wx-location"><?=$name?>, <?=$state?></div>
        <div class="separator"></div>
        <div class="temperature"><?=$temp ?></div>
        <div class="wx-icon" style="background-image: url('http://ftpcontent.worldnow.com/wncustom/wx_icons/wsi55/<?=$icon ?>.png');">
            Weather Icon
        </div>
        <div class="forecast hi"><?=$high ?></div>
        <div class="forecast lo"><?=$low ?></div>
    </div>

    
</div>


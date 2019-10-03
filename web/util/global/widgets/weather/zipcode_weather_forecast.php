<?php
include('../cache_start.php');?>

<style>
body
{
	margin:0px;
}
</style>
<?php
	error_reporting(E_PARSE);

	
	if(!is_numeric($_GET['zip'] )){


		$locations = array();
		//populate locations array
		include('./includes/locations.php');

		$_GET['zip'] = str_replace(array(' ', ','), '', $_GET['zip']);

		$_GET['zip'] = $locations[$_GET['zip']];

		
	}	
	
	$weather_icons = array(
		"1" => "http://myweather.net/doc/ewx/images/80x80/clear.png", 
		"2" => "http://myweather.net/doc/ewx/images/80x80/cloudy.png", 
		"3" => "http://myweather.net/doc/ewx/images/80x80/freezing_rain.png", 
		"4" => "http://myweather.net/doc/ewx/images/80x80/heavy_mix.png", 
		"5" => "http://myweather.net/doc/ewx/images/80x80/heavy_rain.png", 
		"6" => "http://myweather.net/doc/ewx/images/80x80/heavy_snow.png", 
		"7" => "http://myweather.net/doc/ewx/images/80x80/light_mix.png", 
		"8" => "http://myweather.net/doc/ewx/images/80x80/light_rain.png", 
		"9" => "http://myweather.net/doc/ewx/images/80x80/light_snow.png", 
		"10" => "http://myweather.net/doc/ewx/images/80x80/mostly_clear.png", 
		"11" => "http://myweather.net/doc/ewx/images/80x80/mostly_cloudy.png", 
		"12" => "http://myweather.net/doc/ewx/images/80x80/partly_cloudy.png", 
		"13" => "http://myweather.net/doc/ewx/images/80x80/cloudy_flurries.png", 
		"14" => "http://myweather.net/doc/ewx/images/80x80/partly_cloudy_showers.png", 
		"15" => "http://myweather.net/doc/ewx/images/80x80/partly_cloudy_tstorm.png", 
		"16" => "http://myweather.net/doc/ewx/images/80x80/sleet.png",
		"17" => "http://myweather.net/doc/ewx/images/80x80/thunderstorm.png",
		"18" => "http://myweather.net/doc/ewx/images/80x80/fog.png",
		"19" => "http://myweather.net/doc/ewx/images/80x80/haze.png",
		"20" => "http://myweather.net/doc/ewx/images/80x80/windy.png",				
		"21" => "http://myweather.net/doc/ewx/images/80x80/clear_night.png", 
		"22" => "http://myweather.net/doc/ewx/images/80x80/cloudy_night.png", 
		"23" => "http://myweather.net/doc/ewx/images/80x80/freezing_rain_night.png", 
		"24" => "http://myweather.net/doc/ewx/images/80x80/heavy_mix_night.png", 
		"25" => "http://myweather.net/doc/ewx/images/80x80/heavy_rain_night.png", 
		"26" => "http://myweather.net/doc/ewx/images/80x80/heavy_snow_night.png", 
		"27" => "http://myweather.net/doc/ewx/images/80x80/light_mix_night.png", 
		"28" => "http://myweather.net/doc/ewx/images/80x80/light_rain_night.png", 
		"29" => "http://myweather.net/doc/ewx/images/80x80/light_snow_night.png", 
		"30" => "http://myweather.net/doc/ewx/images/80x80/mostly_clear_night.png", 
		"31" => "http://myweather.net/doc/ewx/images/80x80/mostly_cloudy_night.png", 
		"32" => "http://myweather.net/doc/ewx/images/80x80/partly_cloudy_night.png", 
		"33" => "http://myweather.net/doc/ewx/images/80x80/cloudy_flurries_night.png", 
		"34" => "http://myweather.net/doc/ewx/images/80x80/partly_cloudy_showers_night.png", 
		"35" => "http://myweather.net/doc/ewx/images/80x80/partly_cloudy_tstorm_night.png", 
		"36" => "http://myweather.net/doc/ewx/images/80x80/sleet_night.png",
		"37" => "http://myweather.net/doc/ewx/images/80x80/sleet_night.png",
		"38" => "http://myweather.net/doc/ewx/images/80x80/fog.png",
		"39" => "http://myweather.net/doc/ewx/images/80x80/haze.png",
		"40" => "http://myweather.net/doc/ewx/images/80x80/windy.png");		
		

	$file = "http://data.wp.myweather.net/eWxII/?data=*" . $_GET['zip'];
		

	if(!$xml = simplexml_load_file($file))
		echo "The location you entered could not be found.  Please close this window and try again.";
	

	$location_attributes = array();
	$day_forecast = array();
	$day_attributes = array();
	$statement_attributes = array();
	$segment_size = sizeof($xml->forecasts->location->days->day->segments->segment);
	
	// Get the location attributes
	foreach($xml->forecasts->location->attributes() as $key => $value)
	{
		$location_attributes[$key] = $value;
	}
	
	
	for($x=0; $x<=6; $x++)
	{
		//Forecast attributes for each day
		foreach($xml->forecasts->location->days->day[$x]->forecast->attributes() as $key => $value)
		{
			$day_forecast[$x][$key] = $value;
		}

		// Attributes for each day
		foreach($xml->forecasts->location->days->day[$x]->attributes() as $key => $value)
		{
			$day_attributes[$x][$key] = $value;
		}
			
	}
	
	if(isset($_GET['day']))
	{
		$day = (int)$_GET['day'];
	
		// Get the statement attributes
		for($i = 0; $i < sizeof($xml->forecasts->location->days->day[$day]->segments->segment); $i++)
		{
			foreach($xml->forecasts->location->days->day[$day]->segments->segment[$i]->attributes() as $key => $value)
			{
				$statement_attributes[$i][$key] = $value;
			}
		}
		
		$day_icon = (int)$day_forecast[$day]['icon'];	
	}
	else
	{		
		// Get the statement attributes
		for($i = 0; $i < sizeof($xml->forecasts->location->days->day->segments->segment); $i++)
		{
			foreach($xml->forecasts->location->days->day->segments->segment[$i]->attributes() as $key => $value)
			{
				$statement_attributes[$i][$key] = $value;
			}
		}
		
		$hour = (int)$location_attributes['hr'];
		$minute = (int)$location_attributes['min'];
		$second = 0;
		$month = (int)$location_attributes['mon'];
		$day = (int)$location_attributes['day'];
		$year = date('Y');
		
		
		
		$current_temp = $xml->currents->location->temp;
		$feels_link = $xml->currents->location->feelslike;
		$wind_direction = $xml->currents->location->wdir;
		$wind_speed = $xml->currents->location->wspd;
		$barometer = $xml->currents->location->bar;
		$visibility = $xml->currents->location->visibility;
		$relative_humidity = $xml->currents->location->rh;
		$current_icon = (int)$xml->currents->location->icon;
		$current_sky = $xml->currents->location->sky;
	}
	
	
?>


<table width="750">
<tr>
	<td colspan="7"><img src="./images/<?=$_GET['property']?>.jpg" /></td>
</tr>
<tr>
	<td colspan="7" style="font-family:Arial, Helvetica, sans-serif; font-size:20px; font-weight:bold;">
	<?php 
		echo $location_attributes['name'] . ", " . $location_attributes['state']; 
	?>
		<hr>
	</td>
</tr>
<tr>
	<td colspan="7" background="./images/weather_popup_header.jpg" height="23" style="background-repeat:no-repeat; padding-left:15px; padding-top:2px; font-family:Arial, Helvetica, sans-serif; font-size:14px;">
		7 DAY FORECAST
	</td>
</tr>
<tr>
	<?php
		for($x=0; $x<=6; $x++)
		{
			$icon = (int)$day_forecast[$x]['icon'];
			
			if($x == 0)
				$details_link = "zipcode_weather_forecast.php?zip=" . $_GET['zip'];
			else
				$details_link = "zipcode_weather_forecast.php?zip=" . $_GET['zip'] . "&day=" . $x;
			
			echo "<td width='100' valign='top'>
					<table width='100%' cellspacing='0' cellpadding='5' style='border:1px solid #000000;'>
					<tr>
						<td bgcolor='#000000' style='font:Verdana; font-size:14px; font-weight:bold; color:#FFFFFF;' align='center'>" . $day_attributes[$x]['name'] . "</td>
					</tr>
					<tr>
						<td align='center'><img src='" . $weather_icons[$icon] . "'></td>
					</tr>
					<tr>
						<td align='center' style='font-family:Arial; font-size:10px;'>" . $day_forecast[$x]['sky'] . "</td>
					</tr>
					<tr>
						<td align='center' style='font-family:Arial; font-size:13px; font-weight:bold;'><span style='color:#0000FF'>" . $day_forecast[$x]['low'] . "&deg;</span> / <span style='color:#FF0000;'>" . $day_forecast[$x]['high'] . "&deg;</span></td>
					</tr>
					<tr>
						<td align='center'><a style='font-family:Arial; font-size:12px;' href='" . $details_link . "'>Details</a></td>
					</tr>
					</table>
				</td>";
		}
	?>
</tr>
<?php
	if(!isset($_GET['day']))
	{
?>
<tr>
	<td colspan="7" background="./images/weather_popup_header.jpg" height="23" style="background-repeat:no-repeat; padding-left:15px; padding-top:2px; font-family:Arial, Helvetica, sans-serif; font-size:14px;">
		CURRENT CONDITIONS 
		<span style="font-size:14px; font-family:Arial, Helvetica, sans-serif;">
			(<?php echo date('g:i A',gmmktime($hour, $minute, $second, $month, $day, $year)) . " " . $location_attributes['tz']; ?>)
		</span>
	</td>
</tr>
<tr>
	<td colspan="7">
		<table width="100%">
		<tr>
			<td align="center" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;">
				<img src="<?php echo $weather_icons[$current_icon]; ?>"><br /><?php echo $current_sky; ?>
			</td>
			<td style="font-family:Arial, Helvetica, sans-serif; font-size:40px;"><?php echo $current_temp; ?>&deg;</td>
			<td align="center">
				<table width="95%">
				<tr>
					<td width="50%" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;">Sunrise: <?php echo $day_forecast[0]['sunrise']; ?> AM</td>
					<td style="font-family:Arial, Helvetica, sans-serif; font-size:12px;">Sunset: <?php echo $day_forecast[0]['sunset'] ?> PM</td>
				</tr>
				<tr>
					<td style="font-family:Arial, Helvetica, sans-serif; font-size:12px;">Wind: <?php echo $wind_direction; ?> @ <?php echo $wind_speed; ?></td>
					<td style="font-family:Arial, Helvetica, sans-serif; font-size:12px;">Humidity: <?php echo $relative_humidity; ?>%</td>
				</tr>
				<tr>
					<td style="font-family:Arial, Helvetica, sans-serif; font-size:12px;">Barometer: <?php echo $barometer; ?></td>
					<td style="font-family:Arial, Helvetica, sans-serif; font-size:12px;">Visibility: <?php echo $visibility; ?> mi.</td>
				</tr>				
				</table>
			</td>
		</tr>	
		</table>
	</td>
</tr>
<!--
<tr>
	<td colspan="7" align="center" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;">
		<?php //echo $xml->forecasts->location->days->day[0]->statement; ?>
	</td>
</tr>-->
<tr>
	<td colspan="7" background="./images/weather_popup_header.jpg" height="23" style="background-repeat:no-repeat; padding-left:15px; padding-top:2px; font-family:Arial, Helvetica, sans-serif; font-size:14px;">
		FORECAST
	</td>
</tr>
<tr>
	<td colspan="7" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;">
	<?php 
		for($x=0; $x < sizeof($statement_attributes); $x++)
		{
			echo "<strong>" . $statement_attributes[$x]['name'] . "</strong> - " . $xml->forecasts->location->days->day->segments->segment[$x]->statement . "<br><br>";
		}
	?>
	</td>
</tr>
<?php
	}
	else
	{
?>
<tr>
	<td colspan="7" background="./images/weather_popup_header.jpg" height="23" style="background-repeat:no-repeat; padding-left:15px; padding-top:2px; font-family:Arial, Helvetica, sans-serif; font-size:14px;">
		<?php echo strtoupper($day_attributes[$day]['name']); ?>'S CONDITIONS 
	</td>
</tr>
<tr>
	<td colspan="7">
		<table width="100%">
		<tr>
			<td align="center" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;">
				<img src="<?php echo $weather_icons[$day_icon]; ?>"><br /><?php echo $day_forecast[$day]['sky']; ?>
			</td>
			<td style="font-family:Arial, Helvetica, sans-serif; font-size:40px;"><span style='color:#0000FF'><?php echo $day_forecast[$day]['low']; ?>&deg;</span> / <span style='color:#FF0000;'><?php echo $day_forecast[$day]['high']; ?>&deg;</span></td>
			<td align="center">
				<table width="95%">
				<tr>
					<td width="50%" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;">Sunrise: <?php echo $day_forecast[$day]['sunrise']; ?> AM</td>
					<td style="font-family:Arial, Helvetica, sans-serif; font-size:12px;">Sunset: <?php echo $day_forecast[$day]['sunset']; ?> PM</td>
				</tr>
				<tr>
					<td style="font-family:Arial, Helvetica, sans-serif; font-size:12px;">Wind: <?php echo $day_forecast[$day]['wdir']; ?> @ <?php echo $day_forecast[$day]['wlow']; ?> - <?php echo $day_forecast[$day]['whigh']; ?> mph</td>
					<td style="font-family:Arial, Helvetica, sans-serif; font-size:12px;">Barometer: <?php echo $day_forecast[$day]['bar']; ?></td>
				</tr>
				</table>
			</td>
		</tr>	
		</table>
	</td>
</tr>
<!--
<tr>
	<td colspan="7" align="center" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;">
		<?php //echo $xml->forecasts->location->days->day[$day]->statement; ?>
	</td>
</tr>-->

<tr>
	<td colspan="7" background="./images/weather_popup_header.jpg" height="23" style="background-repeat:no-repeat; padding-left:15px; padding-top:2px; font-family:Arial, Helvetica, sans-serif; font-size:14px;">
		<?php echo strtoupper($day_attributes[$day]['name']); ?>'S FORECAST
	</td>
</tr>
<tr>
	<td colspan="7" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;">
	<?php 
		for($x=0; $x < sizeof($statement_attributes); $x++)
		{
			echo "<strong>" . $statement_attributes[$x]['name'] . "</strong> - " . $xml->forecasts->location->days->day[$day]->segments->segment[$x]->statement . "<br><br>";
		}
	?>
	</td>
</tr>
<?php
	}
?>
</table>

<?php
include('../cache_end.php');
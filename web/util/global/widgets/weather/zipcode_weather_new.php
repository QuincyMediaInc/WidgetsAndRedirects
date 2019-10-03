<?php
include('../cache_start.php');

if($_GET['site'] && !$_GET['property']){
	$_GET['property'] = $_GET['site'];
}

if($_GET['size'] == '310'){
	$container_width = '310';
	$input_width = '270';

}  else {

	$container_width = '300';
	$input_width = '260';

}
?>
<style>
	input.btn { 
		color:#000000;
		font-family:Verdana, Arial, Helvetica, sans-serif;
		font-size:11px;
		font-weight:bold; 
		background-color:#CCCCCC; 
		border: 1px solid #CCCCCC; 
		height:20px;
		width:29px;

	}

	input.tbox { 
		background-color: #FFFFFF;
		border: 1px solid #CCCCCC;
		color: #8298B5;
		font-family: Verdana,Arial,Helvetica,sans-serif;
		font-size: 11px;
		height: 20px;
		margin-right: 5px;
		padding-left: 5px;
		width: <?=$input_width?>px;
	}

	.condition_table
	{
		font-family:Verdana, Arial, Helvetica, sans-serif;
		font-size:12px;
	}

	body
	{
		margin-left:2px;
		margin-top:15px;
	}

	h3 {
		font-size: 1.1em;
		color: #043543;
		font-family: georgia,times new roman,serif;}

</style>

<?php
error_reporting(E_PARSE);

$conditions_label = "Enter Zip or City, State for conditions";
$forecast_label = "Enter Zip or City, State for forecast";

$locations = array();
$properties = array();

//populate locations and properties arrays
include('./includes/locations.php');

$property=$_GET['property'];

$header =<<<EOT

<table width="$container_width" border="0" cellpadding="0" cellspacing="0" class="condition_table">
	<tr>
		<td colspan="2">
			<form name="zip_code_change" method="post" action="?process=true&property=$property" enctype="multipart/form-data">
				<table cellpadding="0" cellspacing="0" cellpadding="0">
					<tr>
						<td><input type="text" name="zip_code" class="tbox" value="$conditions_label" onclick="if (this.value == '$conditions_label') { this.value = ''; }" onfocus="if (this.value == '$conditions_label') { this.value = ''; }" onblur="if (this.value == '') { this.value = '$conditions_label'; }"></td>
						<td><input type="submit" name="submit" value="GO" class="btn"></td>
					</tr>
				</table>
			</form>
		</td>
	</tr>


EOT;

$footer =<<<EOT

	<tr>
		<td colspan="2">
			<form name="zip_code_forecast" action="#" method="get">
				<table cellpadding="0" cellspacing="0" cellpadding="0">
					<tr>
						<td>
							<input type="text" name="zip_code_forecast" class="tbox" value="$forecast_label" onclick="if (this.value == '$forecast_label') { this.value = ''; }" onfocus="if (this.value == '$forecast_label') { this.value = ''; }" onblur="if (this.value == '') { this.value = '$forecast_label'; }" /> 
							<input type="hidden" name="property" value="$property" />
						</td>
						<td><input type="submit" name="submit" value="GO" class="btn"></td>
					</tr>
				</table>
			</form>
		</td>
</table>


EOT;

if(isset($_GET['zip_code_forecast'])) {

	echo '<script type="text/javascript">window.open("./zipcode_weather_forecast.php?zip=' . $_GET['zip_code_forecast'] . '&property=' . $property . '","mywindow","menubar=0,resizable=1,scrollbar=1,width=760,height=750"); </script>';
}





if($_GET['process'] == 'true') {
	
	if(!is_numeric($_POST['zip_code'] )){

		$_POST['zip_code'] = str_replace(array(' ', ','), '', $_POST['zip_code']);

		$_POST['zip_code'] = $locations[$_POST['zip_code']];

	}

} else {
	
	$_POST['zip_code'] = $properties[$_GET['property']];
	
	if(!is_numeric($_POST['zip_code'] )){

		$_POST['zip_code'] = str_replace(array(' ', ','), '', $_POST['zip_code']);

		$_POST['zip_code'] = $locations[$_POST['zip_code']];

	}
	
}

$file = "http://data.wp.myweather.net/eWxII/?data=*" . $_POST['zip_code'];

if(!$xml = simplexml_load_file($file)){
	

	

	echo $header;
	
	echo "<tr><td>The location you entered could not be found. Please try again.</td></tr><tr><td>&nbsp;</td></tr>";
	
	echo $footer;

} else {

  print "<!--";
  //print_r($xml);
  print "-->";  

	$attributes = array();

	//var_dump($xml->currents->location->temp);

  foreach ($xml->forecasts->location->attributes() as $key => $value) {
		$attributes[$key] = $value;
	}


	foreach ($xml->forecasts->location->days->day->forecast->attributes() as $key => $value) {
		$attributes[$key] = $value;
	}

  foreach ($xml->currents->location->attributes() as $key => $value) {
		$attributes[$key] = $value;
	}



  

	$hour = (int) $attributes['hr'];
	$minute = (int) $attributes['min'];
	$second = 0;
	$month = (int) $attributes['mon'];
	$day = (int) $attributes['day'];
	$year = date('Y');

	$current_temp = $xml->currents->location->temp;
	$feels_link = $xml->currents->location->feelslike;
	$wind_direction = $xml->currents->location->wdir;
	$wind_speed = $xml->currents->location->wspd;
	$barometer = $xml->currents->location->bar;
	$visibility = $xml->currents->location->visibility;
	$relative_humidity = $xml->currents->location->rh;


	print $header;
	
?>


	<tr>
		<td colspan="2">Currently in <?php echo $attributes['name']; ?> as of <?php echo date('g:i A', gmmktime($hour, $minute, $second, $month, $day, $year)); ?> CST</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td width="50%"><?php echo $current_temp; ?>&deg; (feels like <?php echo $feels_link; ?>&deg;)</td>
		<td>Sunrise: <?php echo $attributes['sunrise']; ?> AM</td>
	</tr>
	<tr>
		<td><?php echo $attributes['sky']; ?></td>
		<td>Sunset: <?php echo $attributes['sunset']; ?> PM</td>
	</tr>
	<tr>
		<td>Wind: <?php echo $wind_direction; ?> @ <?php echo $wind_speed; ?></td>
		<td>Humidity: <?php echo $relative_humidity; ?>%</td>
	</tr>
	<tr>
		<td>Barometer: <?php echo $barometer; ?></td>
		<td>Visibility: <?php echo $visibility; ?> mi.</td>
	</tr>
	<tr>
		<td colspan="2">&nbsp;</td>
	</tr>

<?

	print $footer;
}

include('../cache_end.php');
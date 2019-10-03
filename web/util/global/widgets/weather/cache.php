<?php

	//error_reporting(E_PARSE);

	$locations = array();
	$properties = array();
	$regions = array();
	$zips = array();
	//populate locations and properties arrays
	include(dirname(__FILE__).'/includes/locations.php');	
	
	
	$national_file = "http://data.wp.myweather.net/eWxII/?data=*USA25222,*USA00758,*USA00812,*USA00810,*USA00097,*USA00381,*USA00058,*USA00172,*USA01001,*USA00907";

	$national_xml = simplexml_load_file($national_file);

	$national_attributes = array();

	$national_city	= array('Washington DC','Orlando','Los Angeles','Las Vegas','Minneapolis','Detroit','Dallas','Seattle','New York','Kansas City');

	for($i=0; $i < sizeof($national_city); $i++)
	{

		foreach($national_xml->forecasts->location[$i]->days->day->forecast->attributes() as $key => $value)
		{
			$national_attributes[$national_city[$i]][$key] = $value;
		}
	}

	$international_file = "http://data.wp.myweather.net/eWxII/?data=*FRA00023,*AUS00014,*UKG00017,*SPN00002,*CHA00001,*JPN00001,*CAN00397,*RUS00010,*GER00001,*MDE00001";

	$international_xml = simplexml_load_file($international_file);

	$international_attributes = array();

	$international_city	= array('Paris','Sydney','London','Barcelona','Hong Kong','Tokyo','Montreal','Moscow','Berlin','Kabul');

	for($i=0; $i < sizeof($international_city); $i++)
	{

		foreach($international_xml->forecasts->location[$i]->days->day->forecast->attributes() as $key => $value)
		{
			$international_attributes[$international_city[$i]][$key] = $value;
		}
	}	
	
	foreach($properties as $site => $val){

		$cachefile = dirname(__FILE__)."/c_che/$site.html";

		$wisconsin_file = "http://data.wp.myweather.net/eWxII/?data=".$zips[$site];
		
		print "STARTING SITE: $site wf: $wisconsin_file\r\n";
		
		$wisconsin_xml = simplexml_load_file($wisconsin_file);
		
		print "FILE:\r\n";
		print_r($wisconsin_xml);
		print "\r\n:FILE\r\n";
		
		
		ob_start(); // Start the output buffer

		$wisconsin_xml = simplexml_load_file($wisconsin_file);

		$wisconsin_attributes = array();

		$wisconsin_city	= $regions[$site];

		for($i=0; $i < sizeof($wisconsin_city); $i++)
		{

			foreach($wisconsin_xml->forecasts->location[$i]->days->day->forecast->attributes() as $key => $value)
			{
				$wisconsin_attributes[$wisconsin_city[$i]][$key] = $value;
			}
		}

		include_once(dirname(__FILE__)."/browser.php");

		$browser = new browser;
		if($browser->Name == 'MSIE')
		{
			$container_width = "385px";
		}
		elseif($browser->Name == 'Firefox')
		{
			$container_width = "383px";
		}

	?>
	<style>
	.condition_table
	{
		font-family:Verdana, Arial, Helvetica, sans-serif;
		font-size:12px;
		border-bottom:1px solid #CCCCCC;
		border-right:1px solid #CCCCCC;
		border-left:1px solid #CCCCCC;
		width:385;
	}

	#container
	{
		background-color:#e0ecfa;
		border-top:1px solid #CCCCCC;
		border-right:1px solid #CCCCCC;
		border-left:1px solid #CCCCCC;
		background-color:#e0ecfa;
		height:25px;
		padding:0px;


	}

	#nav_spacer
	{
		width:105px;
		float:left;
		background-color:#e0ecfa;
		/*border-right:1px solid #CCCCCC;*/
		color:#e0ecfa;
		padding-top:5px;
	}

	#wisconsin
	{
		width:85px;
		float:left;
		background-color:#ffffff;
		text-align:center;
		padding-top:5px;
		padding-bottom:5px;
	}

	#wisconsin a
	{
		font-family:Verdana, Arial, Helvetica, sans-serif;
		font-size:12px;
		font-weight:bold;
		text-decoration:none;
		color:#000000;
	}

	#wisconsin a:visited
	{
		font-family:Verdana, Arial, Helvetica, sans-serif;
		font-size:12px;
		font-weight:bold;
		text-decoration:none;
		color:#000000;
	}

	#national
	{
		width:80px;
		float:left;
		background-color:#e0ecfa;
		text-align:center;
		border-right:1px solid #ffffff;
		border-left:1px solid #ffffff;
		padding-top:5px;
		padding-bottom:5px;
	}

	#national a
	{
		font-family:Verdana, Arial, Helvetica, sans-serif;
		font-size:12px;
		font-weight:bold;
		text-decoration:none;
		color:#000000;
	}

	#national a:visited
	{
		font-family:Verdana, Arial, Helvetica, sans-serif;
		font-size:12px;
		font-weight:bold;
		text-decoration:none;	
		color:#000000;
	}

	#international
	{
		width:110px;
		float:left;
		background-color:#e0ecfa;
		text-align:center;
		padding-top:5px;
		padding-bottom:5px;
	}

	#international a
	{
		font-family:Verdana, Arial, Helvetica, sans-serif;
		font-size:12px;
		font-weight:bold;
		text-decoration:none;
		color:#000000;
	}

	#international a:visited
	{
		font-family:Verdana, Arial, Helvetica, sans-serif;
		font-size:12px;
		font-weight:bold;
		text-decoration:none;
		color:#000000;
	}

	body
	{
		margin:2px;
	}

	</style>

	<script>
		function show_hide(div)
		{
			if(div == 'wisconsin_table')
			{
				document.getElementById('wisconsin_table').style.visibility = "visible";
				document.getElementById('wisconsin_table').style.display = "block";
				document.getElementById('wisconsin').style.backgroundColor = "#ffffff";

				document.getElementById('national_table').style.visibility = "hidden";
				document.getElementById('national_table').style.display = "none";
				document.getElementById('national').style.backgroundColor = "#e0ecfa";

				document.getElementById('international_table').style.visibility = "hidden";
				document.getElementById('international_table').style.display = "none";
				document.getElementById('international').style.backgroundColor = "#e0ecfa";
			}
			else if(div == 'national_table')
			{
				document.getElementById('wisconsin_table').style.visibility = "hidden";
				document.getElementById('wisconsin_table').style.display = "none";
				document.getElementById('wisconsin').style.backgroundColor = "#e0ecfa";

				document.getElementById('national_table').style.visibility = "visible";
				document.getElementById('national_table').style.display = "block";
				document.getElementById('national').style.backgroundColor = "#ffffff";


				document.getElementById('international_table').style.visibility = "hidden";
				document.getElementById('international_table').style.display = "none";
				document.getElementById('international').style.backgroundColor = "#e0ecfa";
			}
			else if(div == 'international_table')
			{
				document.getElementById('wisconsin_table').style.visibility = "hidden";
				document.getElementById('wisconsin_table').style.display = "none";
				document.getElementById('wisconsin').style.backgroundColor = "#e0ecfa";

				document.getElementById('national_table').style.visibility = "hidden";
				document.getElementById('national_table').style.display = "none";
				document.getElementById('national').style.backgroundColor = "#e0ecfa";

				document.getElementById('international_table').style.visibility = "visible";
				document.getElementById('international_table').style.display = "block";
				document.getElementById('international').style.backgroundColor = "#ffffff";
			}


		}
	</script>

	<div id="container" style="width:<?php echo $container_width; ?>;">
		<div id="wisconsin"><a href="javascript:show_hide('wisconsin_table');" class="links">Regional</a></div>
		<div id="national"><a href="javascript:show_hide('national_table');" class="links">National</a></div>
		<div id="international"><a href="javascript:show_hide('international_table');" class="links">International</a></div>
		<div id="nav_spacer">International</div>
	</div>

	<div id="wisconsin_table" style="position:absolute; left:2px; top:27px;">
		<!-- Wisconsin City Table -->
		<table width="385" border="0" cellpadding="5" cellspacing="0" class="condition_table">
		<tr>
			<td colspan="3" height="2"></td>
		</tr>
		<tr bgcolor="#e0ecfa">
			<td><strong>City</strong></td>
			<td><strong>Today's Forecast</strong></td>
			<td><strong>High/Low</strong></td>
		</tr>
		<?php
			for($x=0; $x<sizeof($wisconsin_city); $x++)
			{
				if($x%2 == 0)
					$background_color = "#f5f4f0";
				else
					$background_color = "#e0ecfa";

				$city = $wisconsin_city[$x];
				$sky = $wisconsin_attributes[$wisconsin_city[$x]]['sky'];
				$high = $wisconsin_attributes[$wisconsin_city[$x]]['high'];
				$low = $wisconsin_attributes[$wisconsin_city[$x]]['low'];

				echo "<tr bgcolor='" . $background_color . "'><td>" . $city . "</td><td>" . $sky . "</td><td>" . $high . "&deg;/" . $low . "&deg;</td></tr>";
			}
		?>
		</table>
	</div>

	<div id="national_table" style="visibility:hidden; display:none; position:absolute; left:2px; top:27px;">
		<!-- Wisconsin City Table -->
		<table width="385" border="0" cellpadding="5" cellspacing="0" class="condition_table">
		<tr>
			<td colspan="3" height="2"></td>
		</tr>
		<tr bgcolor="#e0ecfa">
			<td><strong>City</strong></td>
			<td><strong>Today's Forecast</strong></td>
			<td><strong>High/Low</strong></td>
		</tr>
		<?php
			for($x=0; $x<sizeof($national_city); $x++)
			{
				if($x%2 == 0)
					$background_color = "#f5f4f0";
				else
					$background_color = "#e0ecfa";

				$city = $national_city[$x];
				$sky = $national_attributes[$national_city[$x]]['sky'];
				$high = $national_attributes[$national_city[$x]]['high'];
				$low = $national_attributes[$national_city[$x]]['low'];

				echo "<tr bgcolor='" . $background_color . "'><td>" . $city . "</td><td>" . $sky . "</td><td>" . $high . "&deg;/" . $low . "&deg;</td></tr>";
			}
		?>
		</table>
	</div>

	<div id="international_table" style="visibility:hidden; display:none; position:absolute; left:2px; top:27px;">
		<!-- Wisconsin City Table -->
		<table width="385" border="0" cellpadding="5" cellspacing="0" class="condition_table">
		<tr>
			<td colspan="3" height="2"></td>
		</tr>
		<tr bgcolor="#e0ecfa">
			<td><strong>City</strong></td>
			<td><strong>Today's Forecast</strong></td>
			<td><strong>High/Low</strong></td>
		</tr>
		<?php
			for($x=0; $x<sizeof($international_city); $x++)
			{
				if($x%2 == 0)
					$background_color = "#f5f4f0";
				else
					$background_color = "#e0ecfa";

				$city = $international_city[$x];
				$sky = $international_attributes[$international_city[$x]]['sky'];
				$high = $international_attributes[$international_city[$x]]['high'];
				$low = $international_attributes[$international_city[$x]]['low'];

				echo "<tr bgcolor='" . $background_color . "'><td>" . $city . "</td><td>" . $sky . "</td><td>" . $high . "&deg;/" . $low . "&deg;</td></tr>";
			}
		?>
		</table>
	</div>

	<?php
		// Cache the output to a file
		$fp = fopen($cachefile, 'w');
		fwrite($fp, ob_get_contents());
		fclose($fp);
		ob_end_clean(); // Send the output to the browser*/
		
		print "SITE: $site done";
		
}
?>
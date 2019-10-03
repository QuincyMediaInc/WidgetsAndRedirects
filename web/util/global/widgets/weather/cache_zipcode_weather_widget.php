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
	
	foreach($properties as $key => $val){

		//if($key == $site){
		$site = $key;
		
		$cachefile = dirname(__FILE__)."/c_che/zipcode_weather_widget/$site.html";

		$wisconsin_file = "http://data.wp.myweather.net/eWxII/?data=".$zips[$site];
		
		print "STARTING SITE: $site wf: $wisconsin_file\r\n";
		
		$wisconsin_xml = simplexml_load_file($wisconsin_file);
		
/*		if($site = 'wsjv'){
			
			print "FILE:\r\n";
			print_r($wisconsin_xml);
			print "\r\n:FILE\r\n";

		}
*/
		
		if(!empty($wisconsin_xml->forecasts)){
			
		
			$wisconsin_attributes = array();

			$wisconsin_city	= $regions[$site];

			for($i=0; $i < sizeof($wisconsin_city); $i++)
			{

				if(is_object($wisconsin_xml->forecasts->location[$i])){

					foreach($wisconsin_xml->forecasts->location[$i]->days->day->forecast->attributes() as $key => $value)
					{
						$wisconsin_attributes[$wisconsin_city[$i]][$key] = $value;
					}
					
				} else {
				
					print "FORECAST NOT FOUND for i:$i :\r\n";
					print_r($wisconsin_xml->forecasts->location[$i]);
					
				}
			}

			/*include_once(dirname(__FILE__)."/browser.php");

			$browser = new browser;
			if($browser->Name == 'MSIE')
			{
				$container_width = "385px";
			}
			elseif($browser->Name == 'Firefox')
			{
				$container_width = "383px";
			}*/
			$container_width = "385px";

			ob_start(); // Start the output buffer
			
			//HERE IS THE HTML
			include(dirname(__FILE__).'/includes/zipcode_weather_widget.php');

			// Cache the output to a file
			$fp = fopen($cachefile, 'w');
			fwrite($fp, ob_get_contents());
			fclose($fp);
			ob_end_clean(); // Send the output to the browser*/
			
		} else {
			print "Forecasts empty\r\n";
			print "FILE:\r\n";
			print_r($wisconsin_xml);
			print "\r\n:FILE\r\n";
		}
		
		print "SITE: $site done";
		//}
}

<?php

include(dirname(__FILE__).'/include/shared.php');

foreach($settings as $site => $val){

	$cache_file = dirname(__FILE__)."/c_che/$site.xml";

	$type = $settings[$site]['type'];
	$name = $settings[$site]['name'];

	if (!$type) {
		$type = 'tributes';
	}

	if ($type == 'tributes') {
		$feed = "https://$site.tributes.com/national/cobrand_rss";
	} else {

		$feed = "https://www.legacy.com/obituaries/$name/services/rss.ashx?recentdate=4";
	}

	$feed_string = file_get_contents($feed);
	
	file_put_contents($cache_file, trim($feed_string));

}
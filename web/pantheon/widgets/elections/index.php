<html>
	<head>
		
		<meta http-equiv="refresh" content="180" />
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		
		<script>

		  var $ = jQuery;
		  $(document).ready(function(){
		  	
		  	//var source = $('.source').html();
				$('table').attr('width', '100%');
		    
				
		  });

		</script>

		<style>
			
			.racename {color: #FFFFFF; font-family: arial, helvetica; font-size: 14px; font-weight: bold; background-color: #446196;}
			.prereporting {color: #000000; font-family: arial, helvetica; font-size: 11px; background-color: #B4C5E5;}
			.winflag {color: #FFFFFF; font-family: arial, helvetica; font-size: 11px; font-weight: bold; background-color: #8C0000;}
			.canname {color: #000000; font-family: arial, helvetica; font-size: 12px; background-color: #E1E4EA;}
			.votetotal {color: #000000; font-family: arial, helvetica; font-size: 12px; background-color: #E1E4EA;}
			.pcttotal {color: #000000; font-family: arial, helvetica; font-size: 12px; background-color: #E1E4EA;}

		</style>
	</head>
	<body>

			<?php
				error_reporting(E_ALL);
				ini_set('display_errors', 1);

				
				$curl = curl_init();
				$timeout = 30;
				$ret = "";
			
				$url = "https://ftpcontent6.worldnow.com/kbjr/newsticker/elections.html";
				
				curl_setopt ($curl, CURLOPT_URL, $url);
				curl_setopt ($curl, CURLOPT_FOLLOWLOCATION, 1);
				curl_setopt ($curl, CURLOPT_MAXREDIRS, 20);
				curl_setopt ($curl, CURLOPT_RETURNTRANSFER, 1);
				curl_setopt ($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.0.5) Gecko/2008120122 Firefox/3.0.5");
				curl_setopt ($curl, CURLOPT_CONNECTTIMEOUT, $timeout);
				$text = curl_exec($curl);

				echo $text;
			?>
	
	</body>
</html>



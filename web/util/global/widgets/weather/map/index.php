<?php
include('./include/settings.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <head>

		<script type='text/javascript'>

			var gptadslots = [];
			var googletag = googletag || {};
			googletag.cmd = googletag.cmd || [];
			(function() {
				var gads = document.createElement('script');
				gads.async = true;
				gads.type = 'text/javascript';
				var useSSL = 'https:' == document.location.protocol;
				gads.src = (useSSL ? 'https:' : 'http:') + '//www.googletagservices.com/tag/js/gpt.js';
				var node = document.getElementsByTagName('script')[0];
				node.parentNode.insertBefore(gads, node);
			})();
		</script>

		<script type="text/javascript">
			googletag.cmd.push(function() {

			//Adslot declaration
      ///43459271/loc-desktop/kttc/web/fbforecast300
			gptadslots[1]= googletag.defineSlot('/43459271/<?=$ad?>', [[300,50]],'id-<?=$ad?>-1').addService(googletag.pubads());

			googletag.pubads().enableSingleRequest();
			googletag.pubads().enableAsyncRendering();
			googletag.enableServices();
			});
		</script>


	<meta charset="UTF-8">
	    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	    <? if ($_GET['ie7']) { ?>
    	    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
	    <? } ?>
	    <style type="text/css">

		#debug{display: none;}

		ul {
		    list-style: none;
		    padding-left: 0;
		    margin-left: 0;
		}
		.clr:after { content:"."; display:block; clear:both; visibility:hidden; line-height:0; height:0;}

		ul.clr {list-style-type: none; clear: both;}
		ul.clr li{float: left; display: inline; }

		.container{width: 946px;}

		.map{width: 690px; height: 431px;}
		#map_canvas { height: 100% }

		a.popup{text-decoration: none;}

		.list{width: 255px; background-color:#ABB3CC; color: #fff; height: 430px; overflow-y: scroll; font-size: 0.9em; float: right!important;}

		.list .head{font-weight: bold; color: #013467; padding: 3px 0 3px 30px;}
		.row{border-top: 1px solid #000; }
		.row li{padding: 3px 0;}
		.row .resort{width: 195px;}
		.row .number{width: 30px; margin-left: 3px;}
		.list a{text-decoration: none; color: #fff;}

		.infowindow{min-width: 150px; min-height: 100px;}

	    </style>


	    <script type="text/javascript"
		    src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js">
	    </script>

	    <script type="text/javascript"
		    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBAp1nF6MHMpmkjUdM3x-JjRIyhZNX69FI&sensor=false">
	    </script>

	    <script type="text/javascript">

		var centerLat = <?= $lat ?>;
		var centerLng = <?= $lng ?>;
		var zoom = <?= $zoom ?>;

		var site = '<?= $site ?>';
		var app = '<?= $app ?>';

		var points = {
<? include("./include/points/$points/$app.php"); ?>
    };


    var map;
    var lastTitle = false;

    function initialize() {

	var latlng = new google.maps.LatLng(centerLat, centerLng);

	var myOptions = {
	    zoom: zoom,
	    center: latlng,
	    mapTypeId: google.maps.MapTypeId.ROADMAP
	};

	map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

	var counter = 1;

	for (var title in points){

	    var address = points[title]['address'];
	    var city = points[title]['city'];
	    var state = points[title]['state'];
	    var zip = points[title]['zip'];
	    var address2 = city + ', ' + state + ' ' + zip;
	    var phone = points[title]['phone'];
	    var lat = points[title]['lat'];
	    var lng = points[title]['lng'];
	    var url = points[title]['url'];

		if(url.indexOf("http://") == -1 && url.indexOf("https://") == -1){
			url = "http://" + url;
		}

	    number = counter;
	    if(number < 10){number = '0' + number;}

	    //var letteredIcon = new google.maps.MarkerImage("https://google-maps-icons.googlecode.com/files/red" + number + ".png");
	    var letteredIcon = new google.maps.MarkerImage("dots/map"  + number + ".png");

	    var latlng = new google.maps.LatLng(lat, lng);

	    var marker = new google.maps.Marker({
		position: latlng,
		title: title,
		icon: letteredIcon,
		number: number
	    });

	    // To add the marker to the map, call setMap();
	    marker.setMap(map);

	    points[title]['marker'] = marker;

	    var a_open = '<a class="popup" target="_blank" href="./popup.php?no_ads=<?=$no_ads?>&ad=<?=$ad_popup?>&ad_height=<?=$ad_height_popup?>&host=<?=$host?>&';
	    a_open += 'site='+ site + '&app=' + app + '&';
	    a_open += 'lat='+ lat + '&lng=' + lng + '&title=' + escape(title) + '&address=' + escape(address2) + '&phone=' + escape(phone) + '">';

		var url_open = '<a target="_blank" href="';
	    url_open += url;
	    url_open += '">';

	    var content = '<div class="infowindow"><div>';
	    content += url_open + title + '</a></div><div>' + address + '</div><div>' + address2 + '</div>';
	    content += '<div>' + a_open + 'Click here for forecast</a></div></div>';


	    points[title]['content'] = content;

	    points[title]['info'] = new google.maps.InfoWindow({
		content: content
	    });

	    points[title]['listener'] = makeClosure(title, marker) ;

	    var row = '<div class="row"><ul class="clr"></li><li class="number">' + counter + '</li><li class="resort"><a href="#" title="' + title + '">';
	    row += title + '</a></ul></div>';

	    $('li.list').append(row);

	    counter++;
	}


    }

    function makeClosure( title, marker )
    {

	var listener = google.maps.event.addListener(marker, 'click', function() {

	    openInfoWindow(title);		// <-- this is the key to making it work
	});
	return listener ;
    }

    function openInfoWindow(title)
    {

	if(lastTitle){

	    points[lastTitle]['info'].close() ;
	}

	lastTitle = title ;

	points[title]['info'].open(map,points[title].marker) ;
    }

    $(document).ready(function(){

	$('.resort a').live('click', function(e){

	    e.preventDefault();

	    var title = $(this).attr('title');
	    openInfoWindow(title);


	});


	$('a.popup').live('click', function(e){

	    e.preventDefault();

	    var url = $(this).attr('href');
		<?
		if($ad_height_popup == '250'){
			$popup_height = '750';
		} else {
			$popup_height = '550';
		}
		?>
	    window.open (url,"Forecast","menubar=1,resizable=1,width=500,height=<?=$popup_height?>");


	});

	$('#debug').click(function(){

	    console.log(map.getCenter());
	    console.log(map.getZoom());



	    /*geocoder = new google.maps.Geocoder();
				    geocoder.geocode( { 'address': address}, function(results, status) {
					      console.log(address + ' : ' + results[0].geometry.location);
				    });*/
	});

    });



	    </script>
    </head>
    <body onload="initialize()">

	<div style="padding-top: 5px; width: 960px; height: 60px; background: url('<?=$header?>') no-repeat;">

		<?if(!$no_ads){?>
	    <div style="margin: 0px 0 0 637px;">
		<!-- begin ad tag -->

		<div id='id-<?=$ad?>-1'>
			<script type='text/javascript'>
				//<![CDATA[
					googletag.cmd.push(function() { googletag.display('id-<?=$ad?>-1'); });
				//]]>
			</script>
			<noscript>
				<a href='https://pubads.g.doubleclick.net/gampad/jump?iu=/43459271/<?=$ad?>&sz=300x50&t=&c=1384799982'><img src='https://pubads.g.doubleclick.net/gampad/ad?iu=/43459271/<?=$ad?>&sz=300x50&t=&c=1384799982'/></a>
			</noscript>
		</div>
		<!-- end ad tag -->
	    </div>
	    <?}?>

	</div>

	<ul class="clr container">
	    <li class="map">
		<div id="map_canvas" style="width:100%; height:100%"></div>
	    </li>
	    <li class="list">

		<div class="head">
		    <ul class="clr">

			<li class="number">&nbsp;</li>
			<li class="resort"><?= $label ?></li>

		    </ul>
		</div>

	</ul>

	<button id="debug">Debug</button>

    </body>
</html>

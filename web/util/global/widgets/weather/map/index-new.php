<?php
include('./include/settings.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
  <head>


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

    .header{
      padding-top: 5px; width: 960px; height: 60px;
    }

    .header .ad{
      margin: 0px 0 0 637px;
    }

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

		.toggle{
			display: none;

		}

		@media (max-width: 969px) {

			.container{width: 100%;}

			.header{
				width: 100%;
			}

			.header .ad{
				float: right;
			}

			.container {
				width: 100%;
			}

			ul.clr li.map, ul.clr li.list{
				float: none;
				display: block;

			}

			.list, .map{
				width: 100%;
				float: none!important;
			}

			ul.clr li.list{height: 100%; overflow-y: hidden;}

			.toggle{
				position: absolute;
		    cursor: pointer;
		    z-index: 9999;
				top: 26px;
		    right: 18px;
		    border: 1px solid #000;
		    width: 50px;
		    height: 31px;
				background-color: rgba(51, 170, 51, .7);

			}

			<?php

			if($state == 'both'){
				print "ul.clr li.list{margin-top: 17px;}";
			}

			if($state == 'list'){
				print "ul.clr li.map{display: none;}";

				if($toggle == 'on'){
					print "#toggle-map{display: block;}";
				}

			}

			if($state == 'map'){
				print "ul.clr li.list{display: none;}";

				if($toggle == 'on'){
					print "#toggle-list{display: block;}";
				}

			}



			?>

		}

  </style>


  <script type="text/javascript"
    src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js">
  </script>

	<!--AIzaSyDSOUucZysmG3nZddUxBBkDTsWTD2v1ins-->
	<!--AIzaSyBAp1nF6MHMpmkjUdM3x-JjRIyhZNX69FI-->
  <script type="text/javascript"
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBAp1nF6MHMpmkjUdM3x-JjRIyhZNX69FI&sensor=false">
  </script>

  <script type="text/javascript">

		var toggle = '<?=$toggle?>';
		var state = '<?=$state?>';
		var defaultTitle = '<?=$title?>';

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

				var newpage = './newpage.php?state=list&no_ads=<?=$no_ads?>&ad=<?=$ad_popup?>&ad_height=<?=$ad_height_popup?>&host=<?=$host?>&';
		    newpage += 'site='+ site + '&app=' + app + '&';
		    newpage += 'lat='+ lat + '&lng=' + lng + '&title=' + escape(title) + '&address=' + escape(address2) + '&phone=' + escape(phone)

				points[title]['newpage'] = newpage;

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

			if(defaultTitle){
				openInfoWindow(defaultTitle);
			}

		} //initialize

    function makeClosure( title, marker ){

			var listener = google.maps.event.addListener(marker, 'click', function() {

			    openInfoWindow(title);		// <-- this is the key to making it work
			});

			return listener ;

    }

    function openInfoWindow(title){

			if(lastTitle){

			    points[lastTitle]['info'].close() ;
			}

			lastTitle = title ;

			points[title]['info'].open(map,points[title].marker) ;

			window.scrollTo(0,0);

		}

		function forecast(url){
			if(state == 'both'){

				<?
				if($ad_height_popup == '250'){
					$popup_height = '750';
				} else {
					$popup_height = '550';
				}
				?>

				window.open (url,"Forecast","menubar=1,resizable=1,width=500,height=<?=$popup_height?>");

			} else {

				url = url.replace('popup.php?', 'newpage.php?state=' + state + '&toggle=' + toggle + '&');
				location.href = url;

			}
		}

    $(document).ready(function(){

			$('.resort a').live('click', function(e){

		    e.preventDefault();

				var newTitle = $(this).attr('title');

				if($('.map').css('display') == 'none'){

					if(toggle == 'on'){

						// strip title value from url
						// replace with new title (url encoded)
						// go to location

						var loc = location.href

						if(loc.indexOf('title=') > -1){
							loc = loc.replace('title='+encodeURI(defaultTitle), 'title='+encodeURI(newTitle));
						} else {
							loc = loc + '&title=' + encodeURI(newTitle);
						}

						loc = loc.replace('state=list', 'state=map');

						location.href=loc

					} else {

						var url = points[newTitle]['newpage'];
						forecast(url);

					}

				} else {

					openInfoWindow(newTitle);

				}

			});


			$('a.popup').live('click', function(e){

		    e.preventDefault();

		    var url = $(this).attr('href');

				forecast(url);

			});


			$(document).on('click','#toggle-list', function(){

				var loc = location.href

				loc = loc.replace('state=map', 'state=list');

				location.href=loc

		  });

			$(document).on('click','#toggle-map', function(){

				var loc = location.href

				loc = loc.replace('state=list', 'state=map');

				location.href=loc

			});

			$('#debug').click(function(){

		    console.log(map.getCenter().lat());
        console.log(map.getCenter().lng());
		    console.log(map.getZoom());

		    /*geocoder = new google.maps.Geocoder();
			    geocoder.geocode( { 'address': address}, function(results, status) {
				      console.log(address + ' : ' + results[0].geometry.location);
			    });*/
			});

		});

	</script>
  </head>
  <body onload="initialize()" state="<?=$state?>" toggle="<?=$toggle?>">

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

		<button id="toggle-map" class="toggle">Show Map</button>
		<button id="toggle-list" class="toggle">Show List</button>

		<button id="debug">Debug</button>

	</body>
</html>

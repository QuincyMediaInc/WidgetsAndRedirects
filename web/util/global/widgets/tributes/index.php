<?php


include('../cache_start.php');

ini_set('user_agent', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9');

include('./include/shared.php');



//$feed_string = file_get_contents($feed);

//$xml = simplexml_load_file($feed);
//$xml =  simplexml_load_string(trim($feed_string));


$cache_file = "./c_che/$site.xml";

$xml = simplexml_load_file($cache_file);

$obits = array();

foreach ($xml->channel->item as $item) {

    if($type == 'tributes'){

	$info = (string) $item->ticker_info;

	$info_arr = explode(',', $info);

    if (ctype_digit(strval($info_arr[0]))) {
        $age = $info_arr[0];

        $location = trim($info_arr[1]);
    } else {
        $age = '';
        $location = trim($info_arr[0]);
    }

	$link = (string) $item->link;

	$obits[] = array(
	    'name' => (string) $item->ticker_name,
	    'age' => $age,
	    'location' => $location,
	    'date' => (string) $item->ticker_date,
	    'link' => $link
	);

    } else {

	$name = (string) $item->title;

	$description = (string) $item->description;

	$link = (string) $item->link;

	if ($type == 'legacy') {

		$link = "$header?url=".urlencode($link);
	}

	$obits[] = array(
	    'name' => $name,
	    'description' => $description,
	    'link' => $link
	);


    }


}

include('./include/ads.php');
?>
<html xmlns="https://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
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
				gads.src = (useSSL ? 'https:' : 'https:') + '//www.googletagservices.com/tag/js/gpt.js';
				var node = document.getElementsByTagName('script')[0];
				node.parentNode.insertBefore(gads, node);
			})();
		</script>

		<script type="text/javascript">
			googletag.cmd.push(function() {

				//Adslot declaration

						//gptadslots[1]= googletag.defineSlot('/43459271/loc-external/<?=$ad_site?>/web/obitwidg', [[300,50]],'id-loc-external/<?=$ad_site?>/web/obitwidg-1').addService(googletag.pubads());
            gptadslots[1]= googletag.defineSlot('/21720672171/<?=$ad_site?>/<?=$ad_site?>.com/obits/widget', [[300,50]],'obitwidg-1').addService(googletag.pubads());
      googletag.pubads().enableSingleRequest();
			googletag.pubads().enableAsyncRendering();
			googletag.enableServices();
			});
		</script>
        <!--link href="<?= $domain ?>/national/cobrand_rss" rel="alternate" title="Local Obituaries from WAOW.com and Tributes.com" type="application/rss+xml" /-->

        <link href="https://fonts.googleapis.com/css?family=Droid+Sans|Droid+Serif:400,400italic" rel="stylesheet" type="text/css" />

        <!--link href="./css/gen_screen_two_packaged.css?1333036778" media="screen" rel="stylesheet" type="text/css" /-->

		<style>
			<?include('./css/gen_screen_two_packaged.css');?>
		</style>

        <!--link href="./css/gen_third_packaged.css?1333036778" media="screen" rel="stylesheet" type="text/css" /-->

		<style>
			<?include('./css/gen_third_packaged.css');?>
		</style>

        <!--[if IE 8]>

		<style>
			<?include('./css/ie8.css');?>
		</style>

		<![endif]-->
        <!--[if lte IE 7]>

		<style>
			<?include('./css/ie7.css');?>
		</style>

		<![endif]-->

		<!--[if lte IE 6]>

		<style>
			<?include('./css/ie6.css');?>
		</style>

		<![endif]-->

        <script src="https://ajax.googleapis.com/ajax/libs/prototype/1.7/prototype.js" type="text/javascript"></script>

        <!--script src="./js/gen_javascript_packaged.js?1333036778" type="text/javascript"></script-->

		<script language="JavaScript" type="text/javascript">

			<?include('./js/gen_javascript_packaged.js');?>

		</script>

		<style>
			<?include('./css/quincy.css');?>
		</style>

        <script type="text/javascript">            var browser = navigator.userAgent;
	    if (browser.toLowerCase().indexOf('safari') > 0)
            {
		document.write('<link href="./css/safari.css" rel="stylesheet" type="text/css" media="screen" />');
	    }
        </script>

		<style>
			<?include('./css/application.css');?>
		</style>

    </head>
    <body class="new-homepage cobrand-homepage">
	<!--[if IE 7]><div id="ie7" class="ie"><![endif]--><!--[if IE 8]><div id="ie8" class="ie"><![endif]--><!--[if IE 9]><div id="ie9" class="ie"><![endif]-->

	<div id="container" class="<?= $site ?>">
	    <?if($type == 'tributes'){ ?>
	    <!--div id="header"><?= $title ?></div-->
	    <?}else{
		include("./header/$site.php");
	    }?>

	    <div id="ad"><?= $ad ?></div>

	    <div id="click"><a target="_parent" href="<?= $url ?>">Click to view our full listings</a></div>

            <div id="main-content">

                <div id="cobrand-homepage-leftcolumn">
                    <div class="cobrand-block">
                        <div id="trib2-localObits">

                            <div id="local-news">

                                <div id="scrollable-one" class="scrollable-container videos-container">
                                    <div id="localmagic-one-dod" style="">
                                        <ul id="local-results-list">

					    <? foreach ($obits as $obit) { ?>
                                                <li>

                                                    <div class="text-content">
                                                        <div class="name"><a target="_parent" href="<?= $obit['link'] ?>" title="Online obituary for <?= $obit['name'] ?>"><?= $obit['name'] ?></a></div>

						    <?if($type == 'tributes'){?>
    						    <div class="dates"><?= $obit['date'] ?></div>
    						    <div class="location">
                                    <?= $obit['location'] ?>
                                    <?php if ($obit['age']): ?>
                                        | Age <?= $obit['age'] ?>
                                    <?php endif; ?>
                                </div>
						    <?}else{?>
						    <div class="dates"><?= $obit['description'] ?></div>
						    <?}?>

    						</div>
                                                </li>
					    <? } ?>
                                        </ul>
                                    </div>

                                </div>
                                <div id="track-one" class="track">
                                    <div id="handle-one" class="handle"></div>
                                </div>
                                <script type="text/javascript" language="javascript">
				    function local_slider_init_one()  {
					// vertical slider control
					var slider_one = new Control.Slider('handle-one', 'track-one', {
					    axis: 'vertical',
					    onSlide: function(v) { scrollVertical(v, $('scrollable-one'), slider_one);  },
					    onChange: function(v) { scrollVertical(v, $('scrollable-one'), slider_one); }
					});

					// disable vertical scrolling if text doesn't overflow the div

					if ($('scrollable-one').scrollHeight <= $('scrollable-one').offsetHeight) {

					    slider_one.setDisabled();
					    $('track-one').hide();
					}
				    }

				    Event.observe(document, 'dom:loaded', local_slider_init_one);


				</script>
                            </div>
                        </div>


                    </div>


                </div>


            </div>

	    <?if($type == 'tributes'){?>
	    <div id="powered"><img src="/util/global/widgets/tributes/img/powered.png" /></div>
	    <?}?>

	    <!--[if IE 7]>
	    </div>
    <![endif]-->
	    <!--[if IE 8]>
	    </div>
	    <![endif]-->
	    <!--[if IE 9]>
	    </div>
	    <![endif]-->
    </body>
</html>

<?php
include('../cache_end.php');

<?php

error_reporting(0);
ini_set('display_errors', 1);

include('./shared.php');

$site = $_GET['site'];

$when = $_GET['when'];

$url = $settings[$site][$when];
$guide = $settings[$site]['guide'];

$ad_site = $site;
if(array_key_exists('ad_site', $settings[$site])){
    $ad_site = $settings[$site]['ad_site'];
}

$ad = "/21720672171/$ad_site/$site.com/titantv/widget";

if(array_key_exists('ad', $settings[$site])){
    $ad = $settings[$site]['ad'];
}

$guide = "http://www.${site}.com${guide}";

$guide = "http://www.${site}.com/watch";

$name = '';
if(array_key_exists('name', $settings[$site])){
    $name = $settings[$site]['name'];
}

if ($name){
    $guide = "http://www.${name}.com/watch";
}

if($when == 'tonight'){
    $title = "Tonight";
} else {
    $title = "Now";
}

// check age of cache file
$filename = dirname(__FILE__)."/c_che/$site-$when.xml";

// if too old
$get_file = false;
print "<!-- 1 -->";
if (file_exists($filename)){

    if((time() - @filemtime($filename) > 3600) ){

        $get_file = true;

    }

} else {

    $get_file = true;

}

if ( $get_file ) {
  print "<!-- 2 -->";
    // file older than 1 hour


    $curl = curl_init();
    $timeout = 30;
    $ret = "";

    curl_setopt ($curl, CURLOPT_URL, $url);
    curl_setopt ($curl, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt ($curl, CURLOPT_MAXREDIRS, 20);
    curl_setopt ($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt ($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.0.5) Gecko/2008120122 Firefox/3.0.5");
    curl_setopt ($curl, CURLOPT_CONNECTTIMEOUT, $timeout);

    $time_start = time();

    $text = curl_exec($curl);

    $time_end = time();

    $time_diff = $time_end - $time_start;

    if(strpos($text, '<?xml version="1.0" encoding="utf-8"?)') !== FALSE){

        // good to go,
        file_put_contents($filename, $text);

    } else {

        // otherwise use old file
        if (file_exists($filename)){

            $text = file_get_contents($filename);

        }

    }

} else {

    $text = file_get_contents($filename);

}

print "<!-- 3 $url $text-->";

?>
<html>
<head>

    <script async="async" src="https://www.googletagservices.com/tag/js/gpt.js"></script>
    <script>
      var googletag = googletag || {};
      googletag.cmd = googletag.cmd || [];
    </script>
    <script>
      googletag.cmd.push(function() {
        googletag.defineSlot("<?=$ad?>", [300, 50], "WNAd547")
          .addService(googletag.pubads())
        googletag.pubads().enableSingleRequest();
        googletag.enableServices();
      });
    </script>



    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <script type="text/javascript">

      function titanParse(fullFeed){
        var numShows = $(fullFeed).find("Show").length;
        var showHTML = "";

        for(var ii=0; ii < numShows; ii++){
          var $el = $(fullFeed).find("Show:eq("+ ii +")");
          var sT = $el.attr("adjustedStartTime").split(":");
          var amPm = "AM"
          if(sT[0] > 12){
            sT[0] = sT[0] - 12;
            amPm = "PM";
          }else if(sT[0] == 12){
            amPm = "PM";
          }else if(sT[0] == 0){
            sT[0] = 12;
          }
          var desc = $el.find("Description").text();
          if (desc == ""){
            desc = "No description.";
          }
          showHTML += "<div class='titantv_row'><div class='titantv_time'><div class='titantv_time_text'>"+ sT[0]+":"+sT[1]+amPm +"</div></div><div class='titantv_show'><div class='titantv_show_text' rel='"+ desc +"'>"+ $el.find("Title").text() +"</div></div><div style='clear:both;'></div><div class='zText'>" + desc + "</div></div>";
        }
        $(".titantv_bg").append(showHTML);

      }

      var $ = jQuery;
      $(document).ready(function(){

        titanParse($('.titan_xml').html());

      });


    </script>

    <style type="text/css">

        body{margin: 0;}

        .titan_xml{display: none;}

        #titan .titantv_bg {
            width: 100%; min-height:140px; text-align: center; position: relative;
        }

        #titan .titantv_date_row {
            width: 100%; margin: 5px 0px; background: #ffffff; text-align: left;
        }

        #titan .titantv_date_text {
            margin-left: 5px; font: 12px Arial, Verdana, San-serif; color: #000000; line-height: 20px; float: left;
        }

        #titan .titantv_grid_link {
            width:	200px; background: #ffffff; text-align: right; line-height: 20px; float: right; padding-right: 6px;
        }

        #titan .titantv_grid_link a {
            font: 12px Arial !important; color:#0a3e87 !important;
        }

        #titan .titantv_row {
            width: 100%;
        }

        #titan .titantv_time {
            width: 24%; margin: 1px 1px 1px 0px; background: #f4f5fa; text-align: left; float: left;
        }

        #titan .titantv_time_text {
            margin-left: 5px; font: bold 12px Arial, Verdana, San-serif; color: #000000; line-height: 20px;
        }

        #titan .titantv_show {
            width:	74%; margin: 1px 0px 1px 1px; background: #f4f5fa; text-align: left; float: left;
        }

        #titan .titantv_show_text {
            margin-left: 5px; font: 12px Arial, Verdana, San-serif; color: #31408f; line-height: 20px; cursor: default;
        }

        #titan .zText { display:none; }

    </style>

</head>
<body>

<div class="titan_xml">
    <?= $text?>
</div>

<div id="titan" class="titantv_bg" align="left">

    <!--AD SIZE: header C(ustom)-->
    <div id="WNAd547" class="wnad wnad547" style="width: 300px; height: 50px">
        <script>
          googletag.cmd.push(function() {
            googletag.display("WNAd547");
          });
        </script>
    </div>


    <div class="titantv_date_row">
        <div class="titantv_date_text">
            <script type="text/javascript">
              var d = new Date();
              var m = d.getMonth();
              if(m == 0){ m = "Jan " }
              if(m == 1){ m = "Feb " }
              if(m == 2){ m = "Mar " }
              if(m == 3){ m = "Apr " }
              if(m == 4){ m = "May " }
              if(m == 5){ m = "June " }
              if(m == 6){ m = "July " }
              if(m == 7){ m = "Aug " }
              if(m == 8){ m = "Sept " }
              if(m == 9){ m = "Oct " }
              if(m == 10){ m = "Nov " }
              if(m == 11){ m = "Dec " }
              var n = d.getDate();
              var y = d.getFullYear();
              document.write(m + n + ", " + y);
            </script>
        </div>
        <div class="titantv_grid_link">
            <a target="_top" href="<?=$guide?>">Full Program Grid</a>
        </div>
    </div>
    <div style="clear:both;"></div>
</div>

</body>
</html>
<!--
<?php

$time_end = time();

$time_diff = $time_end - $time_start;

print "Seconds: $time_diff";

?>

-->

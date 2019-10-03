<?php

$lat = $_GET['lat'];
$lng = $_GET['lng'];
$title = $_GET['title'];
$address = $_GET['address'];
$address2 = $_GET['address2'];
$phone = $_GET['phone'];
$site = $_GET['site'];
$app = $_GET['app'];
$ad = $_GET['ad'];
$ad_height = $_GET['ad_height'];
$no_ads = $_GET['no_ads'];

$host = $_GET['host'];

$location_url = "http://data-services.wsi.com/200904-01/551399521/Locations/Cities/$lat/$lng";

$contents = file_get_contents($location_url);

$xml = simplexml_load_string($contents);

foreach ($xml->City as $city) {

  foreach ($city->attributes() as $key => $val) {
    if ($key == "Id") {

      $id = $val;

      break;
    }
  }
}

//$weather_url = "http://data-services.wsi.com/200904-01/551399521/Weather/Report/$id";

//$contents = file_get_contents($weather_url);

//print $contents;

//die();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="UTF-8">


      <script type="text/javascript" src="https://widgets.media.weather.com/wxwidget.loader.js?cid=551399521"></script>
      <style>
        /* .wx-header */
        .wx-skin-default .wx-panel-widget .wx-header {
            /*background-color: #eee;*/
            background-color: #0B0B61;
            color:#fff;
            border-bottom: 1px solid #cccccc;
        }
        /* Header City/State Label */
        .wx-skin-default .wx-panel-widget .wx-header h2 {
            /*color: black;*/
            color: #fff;
            font-size: 22px;
            font-weight: bold;
            display: inline-block;
        }
        .wx-skin-default .wx-panel-widget .wx-header h2 div span.wx-city {
        }
        .wx-skin-default .wx-panel-widget .wx-header h2 div span.wx-state {
        }

        .back{padding: 10px; font-weight: bold; color: green; text-decoration: none;}

        table{width: 100%;}
        
      </style>

  </head>
  <body>

    <style> body{ margin:0px;}</style>

    <a class="back" href="./index-new.php?site=<?=$_GET['site']?>&state=<?=$_GET['state']?>&toggle=<?=$_GET['toggle']?>"><< Back</a>

    <table bgcolor="#d4eaff" width="468" cellpadding="0" cellspacing="2">

      <tr>
        <td style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; padding:5px;">
          <strong><?= $title ?></strong><br>

          <?= $address ?><br><?= $address2 ?> <?= $phone ?>
        </td>
      </tr>


      <tr>
        <td colspan="2">



          <!--iframe src="http://imp.wxc.com/main.html?host=<?= $host ?>&met=0&width=468&height=350&view=hourforecast&label=madison&bg=0&lat=<?= $lat ?>&lon=<?= $lng ?>&userbar=0&template=0" width="468" height="350" frameborder="0" scrolling="no"></iframe-->

          <wx:widget type="hourly" template="simple-box" location="<?=$id?>"></wx:widget>


        </td>

      </tr>



    </table>
  </body>
</html>

<?php

$curl = curl_init();
$timeout = 30;
$ret = "";
$url="https://webservices.titantvguide.titantv.com/contentblocks.asmx/TonightOn?registrationKey=LZbkbFJ2IwMDqj9uZC%2B8csUzBDtZP328";
curl_setopt ($curl, CURLOPT_URL, $url);
curl_setopt ($curl, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt ($curl, CURLOPT_MAXREDIRS, 20);
curl_setopt ($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.0.5) Gecko/2008120122 Firefox/3.0.5");
curl_setopt ($curl, CURLOPT_CONNECTTIMEOUT, $timeout);
$text = curl_exec($curl);

echo $text;

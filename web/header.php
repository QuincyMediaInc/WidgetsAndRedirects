<?
	include('./header3.php');
	die();
?>

<!-- Begin comScore UDM Tag 1.1105.27 (Quincy modified)-->

<script type="text/javascript">
// <![CDATA[
function comScore(e){var t="comScore",n=document,r=n.location,i="",s="undefined",o=2048,u,a,f,l,c="characterSet",h="defaultCharset",p=typeof encodeURIComponent!=s?encodeURIComponent:escape;if(n.cookie.indexOf(t+"=")!=-1){f=n.cookie.split(";");for(l=0,r=f.length;l<r;l++){var d=f[l].indexOf(t+"=");if(d!=-1){i="&"+unescape(f[l].substring(d+t.length+1))}}}e=e+"&ns__t="+(new Date).getTime();e=e+"&ns_c="+(n[c]?n[c]:n[h]?n[h]:"")+"&c8="+p(n.title)+i+"&c7="+p(r&&r.href?r.href:n.URL)+"&c9="+p(n.referrer);if(e.length>o&&e.indexOf("&")>0){u=e.substr(0,o-8).lastIndexOf("&");e=(e.substring(0,u)+"&ns_cut="+p(e.substring(u+1))).substr(0,o)}if(n.images){a=new Image;if(typeof ns_p==s){ns_p=a}a.src=e}else{n.write(["<","p","><",'img src="',e,'" height="1" width="1" alt="*"',"><","/p",">"].join(""))}}var referrer=document.referrer;var is_blog=referrer.indexOf("/blogs/");if(is_blog>-1){var start=is_blog+7;var end=referrer.indexOf("/",start);var blog_name=referrer.substring(start,end);comScore("http"+(document.location.href.charAt(4)=="s"?"s://sb":"://b")+".scorecardresearch.com/p?c1=2&c2=6036361&wn_sitename=WAOW&wn_3rd_party=true&wn_contentgroup=blogs&wn_contentprovider="+blog_name)} // ]]>
</script>
<!-- End comScore UDM Tag -->
<?php
	error_reporting(E_PARSE);

	include("browser.php");

	$browser = new browser;

	if($browser->Name == 'MSIE')
	{
		echo '<link rel="stylesheet" href="header_ie.css" type="text/css" media="screen">';
	}
	elseif($browser->Name == 'Firefox')
	{
		echo '<link rel="stylesheet" href="header_ff.css" type="text/css" media="screen">';
	}
	else
	{
		echo '<link rel="stylesheet" href="header_ff.css" type="text/css" media="screen">';
	}

?>

<center>

<div id="container">
	<div id="member_search">
		<div id="member_center">
			<strong>MEMBER CENTER:</strong>
			&nbsp;<a target="_parent" href="http://www.waow.com/global/link.asp?L=104054&function=manageprofile&mode=create&referrer=http%3A//www.waow.com/Global/category.asp%3FC%3D135909">Create Account</a> | <a target="_parent" href="http://www.waow.com/global/link.asp?L=104054&function=manageprofile&mode=login&referrer=http%3A//www.waow.com/global/link.asp%3FL%3D104054%26function%3Dmanageprofile%26mode%3Dcreate%26referrer%3Dhttp%253A//www.waow.com/Global/category.asp%253FC%253D135909">Log In</a>
		</div>
		<div id="search">
			<form action="http://www.wkowtv.com/Global/searchresults.asp" method="get" onsubmit="return wnValidateSearchTerm(this, 1)" style="margin:0px !important; padding:0px !important">
			<input type="radio" name="vendor" value="ez" style="float:none;vertical-align:bottom;" checked>&nbsp;SITE SEARCH &nbsp;
			<input type="radio" name="vendor" value="google_cs" style="float:none;vertical-align:bottom;">&nbsp;WEB SEARCH BY &nbsp;
			<img src='http://kwwl.images.worldnow.com/global/images/google/google_logo.png' alt='Google' style="float:none;vertical-align:bottom;">
			<input type="text" class="textbox" name="qu" size="20" value="">
			<input type="submit" class="submit" value="Go">
			</form>
		</div>
		<div style="clear: left;"></div>
	</div>
	<div id="header" <?if($_GET['coachescorner']){print " style=\"background-image:url('/images/coaches_corner_header1.jpg');\"";}?>></div>
	<div id="navigation">
		<div id="home">
			<a target="_parent" href="http://www.waow.com/Global/category.asp?C=123741">HOME</a>
		</div>
		<div id="news">
			<a target="_parent" href="http://www.waow.com/Global/category.asp?C=123744">NEWS</a>
		</div>
		<div id="weather">
			<a target="_parent" href="http://www.waow.com/Global/category.asp?C=123742">WEATHER</a>
		</div>
		<div id="sports">
			<a target="_parent" href="http://www.waow.com/Global/category.asp?C=123745">SPORTS</a>
		</div>
		<div id="community">
			<a target="_parent" href="http://www.waow.com/Global/category.asp?C=123746">COMMUNITY</a>
		</div>
		<div id="video">
			<a target="_parent" href="http://www.waow.com/Global/category.asp?C=135525">VIDEO</a>
		</div>
		<div id="whats_on">
			<a target="_parent" href="http://www.waow.com/Global/category.asp?C=135917">WHAT'S ON</a>
		</div>
		<div id="wake">
			<a target="_parent" href="http://www.waow.com/Global/category.asp?C=136178">WAKE UP</a>
		</div>
		<div id="blogs">
			<a target="_parent" href="http://www.waow.com/category/195504/outdoors ">OUTDOORS</a>
		</div>
		<div id="lifestyle">
			<a target="_parent" href="http://www.waow.com/Global/category.asp?C=68446">LIFESTYLE</a>
		</div>
		<div id="classified">
			<a target="_parent" href="http://www.waow.com/category/216667/mobile-information-and-faq">MOBILE</a>
		</div>
		<div id="about">
			<a target="_parent" href="http://www.waow.com/story/8372403/about-us">ABOUT US</a>
		</div>
		<div style="clear:both"></div>
	</div>
</div>
</center>

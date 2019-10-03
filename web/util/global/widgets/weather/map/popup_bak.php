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

$host = $_GET['host'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <head>
	<meta charset="UTF-8">

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
			gptadslots[1]= googletag.defineSlot('/43459271/<?=$ad?>', [[300,<?=$ad_height?>]],'id-<?=$ad?>-1').addService(googletag.pubads());

			googletag.pubads().enableSingleRequest();
			googletag.pubads().enableAsyncRendering();
			googletag.enableServices();
			});
		</script>

    </head>
    <body>

	<style> body{ margin:0px;}</style>

	<table bgcolor="#d4eaff" width="468" cellpadding="0" cellspacing="2">
	    <tr>
		<td style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; padding:5px;"><strong><?= $title ?></strong><br>

			<?= $address ?><br><?= $address2 ?> <?= $phone ?></td>
			    </tr>
			    <tr>
				<td align="center" colspan="2">

				    <img src="./img/<?= $site . '/' . $app ?>/popup.jpg" />
				</td>
			    </tr>
			    <tr>
				<td colspan="2">
				    <iframe src="https://imp.wxc.com/main.html?host=<?= $host ?>&met=0&width=468&height=350&view=hourforecast&label=madison&bg=0&lat=<?= $lat ?>&lon=<?= $lng ?>&userbar=0&template=0" width="468" height="350" frameborder="0" scrolling="no"></iframe>
				</td>

			    </tr>

			    <tr><td align="center">

					<div id='id-<?=$ad?>-1'>
						<script type='text/javascript'>
							//<![CDATA[
								googletag.cmd.push(function() { googletag.display('id-<?=$ad?>-1'); });
							//]]>
						</script>
						<noscript>
							<a target="_blank" href='https://pubads.g.doubleclick.net/gampad/jump?iu=/43459271/<?=$ad?>&sz=300x50&t=&c=1384799982'><img src='https://pubads.g.doubleclick.net/gampad/ad?iu=/43459271/<?=$ad?>&sz=300x50&t=&c=1384799982'/></a>
						</noscript>
					</div>

				</td>

				</table>
				</body>
				</html>

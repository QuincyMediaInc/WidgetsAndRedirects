<?$site = $_GET['site']; 

include('../include/shared.php');



if($version == '2.0'){
	
	include("./v2/$site.php");
	
} else {

$site_upper = strtoupper($site);

?>

<html>
<head>
	
<!-- Start: GPT Async -->
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
				gptadslots[1]= googletag.defineSlot('/43459271/loc-external/<?=$site?>/web/obit728h', [[728,90]],'id-loc-external/<?=$site?>/web/obit728h-1').addService(googletag.pubads());

	googletag.pubads().enableSingleRequest();
	googletag.pubads().enableAsyncRendering();
	googletag.enableServices();
	});
</script>	

<style>
body
{
	margin:0px !important;
	background-image:url('https://WVVA.images.worldnow.com/images/static/gfx/bg_right.gif');
}

.member_center
{
	font-family:Verdana,Arial;
	font-size:10px;
	padding:4px !important;
}

.member_center a
{
	font-family:Verdana,Arial;
	font-size:10px;
	color:#000000;
	text-decoration:none;
}

.member_center a:hover
{
	font-family:Verdana,Arial;
	font-size:10px;
	color:#000000;
	text-decoration:underline;
}

</style>

<SCRIPT TYPE="text/javascript" LANGUAGE="Javascript1.1" SRC="https://content.worldnow.com/global/interface/generic.js?ver=200806280400"></SCRIPT>

<script type="text/javascript" src="https://content.worldnow.com/global/interface/globals.js?ver=200806280400"></script>

<script type="text/javascript" src="https://content.worldnow.com/global/interface/menu/menu.js?ver=200806280400"></script>

<script type="text/javascript" src="https://www3.whig.com/util/global/widgets/tributes/branding/js/jquery-1.7.1.min.js"></script>

<script>
$(document).ready(function(){
	
	$('a').live('click', function(e){
		
		e.preventDefault();
		
		top.location.href = $(this).attr('href');
		
		return false;
		
	});
	
});
</script>	

</head>
<body background="https://<?=$site_upper?>.images.worldnow.com/images/static/gfx/bg_right.gif">

<center>
	<div style="padding: 10px;">
<!-- begin ad tag -->

			<div id='id-loc-external/<?=$site?>/web/obit728h-1'>
				<script type='text/javascript'>
					//<![CDATA[
						googletag.cmd.push(function() { googletag.display('id-loc-external/<?=$site?>/web/obit728h-1'); });
					//]]>	
				</script>
				<noscript>
					<a href='https://pubads.g.doubleclick.net/gampad/jump?iu=/43459271/loc-external/<?=$site?>/web/obit728h&sz=728x90&t=&c=12345'><img src='https://pubads.g.doubleclick.net/gampad/ad?iu=/43459271/loc-external/<?=$site?>/web/obit728h&sz=728x90&t=&c=1384799982'/></a>
				</noscript>
			</div>		
<!-- end ad tag -->

</div>
<table width="970"  style="margin-left:-3px; ">
<tr>
	<td class="member_center" width="50%" align="left">
		&nbsp;<strong>MEMBER CENTER:</strong> <a target="_parent" href="https://www.<?=$site?>.com/global/link.asp?L=104054&function=manageprofile&mode=create&referrer=http%3A//www.<?=$site?>.com/">Create Account</a> | 
		<a target="_parent" href="https://www.<?=$site?>.com/global/link.asp?L=104054&function=manageprofile&mode=login&referrer=http%3A//www.<?=$site?>.com/">Log In</a>
	</td>
	<FORM target="_parent"  ACTION="https://www.<?=$site?>.com/Global/SearchResults.asp" METHOD="GET" NAME="SimpleSearchForm">	
	<td width="50%" align="right" style="padding:0px !important;">
		<table width="96%" cellpadding="0" cellspacing="0" align="right">
		<tr>
			<td width="3"><INPUT TYPE="radio" STYLE="vertical-align:top" NAME="vendor" VALUE="wss" ID="wss" ONCLICK="this.form.target=''" CHECKED></td>
			<td class="member_center"><strong>SITE SEARCH</strong></td>
			<td><INPUT TYPE="radio" STYLE="vertical-align:top" NAME="vendor" VALUE="google" ID="google" ONCLICK="this.form.target=''"></td>
			<td class="member_center"><strong>WEB SEARCH BY</strong>&nbsp;<img src='https://WSJV.images.worldnow.com/global/images/google/google-logo.gif' alt='Google' style='vertical-align:bottom; position:relative; top:1px'>&nbsp;</td>
			<td><INPUT TYPE="text" NAME="qu" SIZE="20" STYLE="font-size:10px;" ID="WNSearchTermInput"><INPUT BORDER="0" TYPE="submit" STYLE="font-size:10px; text-transform:capitalize" VALUE="Go">&nbsp;</td>
		</tr>
		</table>
				
	</td>
	</FORM>
</tr>
</table>
<div class="wnMainHeader" style="position: relative; width: 980px; overflow: hidden;"><a target="_parent" href="https://www.<?=$site?>.com/default.asp"><img id="WNBrandingImage" alt="" border="0" src="https://www3.whig.com/util/global/widgets/tributes/branding/img/<?=$site?>.jpg" title=""></a></div>

<?include("./menu/$site.php");?>

</center>

</body>
</html>

<?}?>
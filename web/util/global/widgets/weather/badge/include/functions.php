<?php
function get_icon($description, $enclosure){
	
	$gfx = strtolower(str_replace(' ', '', $description));
	
	$image = "http://WKOW.images.worldnow.com/images/static/gfx/wx_$gfx.gif";
	
	if(is_webfile($image)){
		return $image;
	} else {
		return $enclosure;
	}
}

function is_webfile($webfile)
{
 $fp = @fopen($webfile, "r");
 if ($fp !== false)
  fclose($fp);

 return($fp);
}

?>

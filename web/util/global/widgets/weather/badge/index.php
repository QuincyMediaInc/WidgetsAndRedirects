<?php
include('./include/shared.php');
if(!file_exists($cache_file) || array_key_exists('refresh', $_GET)){

	include('./cache.php');
}	
include($cache_file);
?>

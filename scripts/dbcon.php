<?php

	include('../config.php');
		//define baseurl
	$base_url = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
	$base_url .= "://".$_SERVER['HTTP_HOST'];
	
	if (!isset($_SERVER['ORIG_SCRIPT_NAME'])) 
	{
		$base_url .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
	}
	else
	{
		$base_url .= str_replace(basename($_SERVER['ORIG_SCRIPT_NAME']),"",$_SERVER['ORIG_SCRIPT_NAME']);
	}

	//define('base_url',$base_url);
?> 
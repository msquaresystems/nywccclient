<?php 
$server="nywccorg.ipowermysql.com";
$user="nywccclient";
$pass="NYWCCClient1@";
$db="nywccclient";

define('TIMEZONE', 'America/New_York');
date_default_timezone_set(TIMEZONE);

if(!($con = mysql_connect($server,$user,$pass))){
	echo "Sorry Some error occured while connecting to Database. Please refresh the page or re-open the page.";
}
mysql_select_db($db);
mysql_query("SET time_zone='offset'"); 

$now = new DateTime();
$mins = $now->getOffset() / 60;
$sgn = ($mins < 0 ? -1 : 1);
$mins = abs($mins);
$hrs = floor($mins / 60);
$mins -= $hrs * 60;
$offset = sprintf('%+d:%02d', $hrs*$sgn, $mins);
mysql_query("SET time_zone='".$offset."'");


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

define('base_url',$base_url);	
?>
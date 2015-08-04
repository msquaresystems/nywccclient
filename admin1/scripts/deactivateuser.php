<?php 

include("../includes/dbcon.php");

if(isset($_GET['user_id']))
{
	$user_id	=	$_GET['user_id'];

	$activate_query = "UPDATE user SET active='1', status='activated' WHERE id='".$user_id."'";
	
	$act=mysql_query($activate_query);

	if($act)
	{
		echo "<script type='text/javascript'>window.location.href='../includes/clientlist.php';</script>";
	} 
	else 
	{
		echo "<script type='text/javascript'>window.location.href='../includes/clientlist.php';</script>";
	}

}
?>
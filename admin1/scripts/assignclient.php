<?php

include("../includes/dbcon.php");

if(isset($_POST['assignsubmit']))
{


	$user_id		=	$_POST['userid'];
	$client_id		=	$_POST['clientid'];

	$assignquery	= 	mysql_query("INSERT INTO assign SET user_id='".$user_id."', client_id='".$client_id."'");

	if(mysql_affected_rows()==1)
	{

		echo "<script type='text/javascript'>alert('client has been successfully for the selected user');window.location.href='../index.php';</script>";

	}
	else{

		echo "<script type='text/javascript'>alert('You can't Assign');window.location.href='../index.php';</script>";
	}

}
?>
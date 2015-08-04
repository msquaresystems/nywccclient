<?php 
	
	$server="nywccorg.ipowermysql.com";
	$user="nywccclient";
	$pass="NYWCCClient1@";
	$db="nywccclient";


	if(!($con = mysql_connect($server,$user,$pass)))
	{
		echo "Sorry Some error occured while connecting to Database. Please refresh the page or re-open the page.";
	}

	mysql_select_db($db);
	/*include("dbcon.php");*/
	$userid=$_GET['id'];
	$activate_query="UPDATE user SET active='1', status='activated' WHERE id='".$userid."'";
	//echo "UPDATE user SET active='1', status='activated' WHERE id='".$userid."'";
	$result=mysql_query($activate_query);
	if(mysql_affected_rows()==1)
	{
		echo "<script type='text/javascript'>
			 alert('Your Account has been activated');
			 window.location.href='../index.php';
			 </script>";
	} 
	else 
	{
		echo "<script type='text/javascript'>alert('Error in activating the account');</script>";
	}
?>
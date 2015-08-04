<?php 
	include("../config.php");
	if(isset($_GET['pwdgen']))
	{
		$forgotemailpass=$_GET['email'];
		$forgotpass=md5($_GET['pwdgen']);
		echo "UPDATE user SET password='".$forgotpass."',reppassword='".$forgotpass."' WHERE email='".$forgotemailpass."'";
		$query=mysql_query("UPDATE user SET password='".$forgotpass."',reppassword='".$forgotpass."' WHERE email='".$forgotemailpass."'");
		echo "<script type='text/javascript'>alert('You have successfully changed the password');
		window.location.href='../index.php';</script>";
	}	


?>
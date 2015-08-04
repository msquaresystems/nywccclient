<?php

session_start();

$con=mysql_connect("localhost","root","C@ps1MYSQL");
if(!$con)
{
  die('could not connect'.mysql_error());
}
$db='NYWCC';
mysql_select_db($db);
?>

<?php 

//change password
	if(isset($_POST['changepwdsubmit']))
	{	
		$oldpassword 	=md5($_POST['oldpwd']);
		$newpassword 	=md5($_POST['newpwd']);
		$newcpassword 	=md5($_POST['cnewpwd']);
		
		//echo "UPDATE user SET password='".$newpassword."',reppassword='".$newcpassword."' WHERE id='".$_SESSION['id']."' 
										//AND password='".$oldpassword."' AND usertype='user' LIMIT 1";

		$changepwdquery =mysql_query("UPDATE user SET password='".$newpassword."',reppassword='".$newcpassword."' WHERE id='".$_SESSION['id']."' 
										AND password='".$oldpassword."' AND usertype='user' LIMIT 1");
		
		echo "<script type='text/javascript'>alert('You have successfully changed your password');
				window.location.href='../index.php';
			  </script>";
	}	
	else
	{
		echo "<script type='text/javascript'>alert('Please try again');
				window.location.href='../index.php';	
			  </script>";
	}
?>
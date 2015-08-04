<?php

//session_start();

include('../includes/dbcon.php');

//include('scripts/current_url.php');


if(isset($_POST['nickname']))
{

$nickname		=	$_POST['nickname'];
$signupemail	=	$_POST['signupemail'];
$password		=	$_POST['signuppassword'];
$cpassword		=	$_POST['signupconpassword'];
$usertype		=	'admin';


//echo "INSERT INTO user SET firstname='".$nickname."', email='".$signupemail."', password='".md5($password)."', reppassword='".md5($cpassword)."', usertype='admin'";
$signupQuery	=	mysql_query("INSERT INTO user SET username='".$nickname."', email='".$signupemail."', password='".md5($password)."', reppassword='".md5($cpassword)."', usertype='admin'");

if(mysql_affected_rows()==1)
{

echo "<script type='text/javascript'>window.location.href='../index.php';</script>";


}
else{
	echo 'hello';	
}




}



?>
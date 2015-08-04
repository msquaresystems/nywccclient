<?php
session_start();
include("../includes/dbcon.php");
//echo 'AAA';
if(isset($_POST['adminlogin']))
{

$username	=	mysql_real_escape_string(stripslashes($_POST['username']));
$password	=	mysql_real_escape_string(stripslashes($_POST['password']));
$password	=	md5($password);
//echo "SELECT id,firstname,email,password,usertype FROM user WHERE email='".$username."' AND password='".md5($password)."' AND usertype='admin'";

//exit();

$adminlogin = 	mysql_query("SELECT id,firstname,email,password,usertype FROM user WHERE email='".$username."' AND password='".$password."' AND usertype='admin'");

$nrows		=	mysql_num_rows($adminlogin);

if(($adminlogin) && ($nrows==1))
{

	$row	=	mysql_fetch_array($adminlogin);

	$_SESSION['admin_user_id']	=	$row['id'];
	$_SESSION['username']		=	$row['firstname'];
	//exit();
	echo "<script type='text/javascript'>window.location.href='../index.php';</script>";


}
else
{

	echo "<script type='text/javascript'>alert('Wrong Username or Password');window.location.href='../index.php';</script>";

}


}


?>
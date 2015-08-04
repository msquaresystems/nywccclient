<?php
//echo 'sas';
//session_start();

//include('dbcon.php');

//print_r($_POST);

$server="localhost";
$user="root";
$pass="C@ps1MYSQL";
$db="NYWCC";

if(!($con = mysql_connect($server,$user,$pass))){
	echo "Sorry Some error occured while connecting to Database. Please refresh the page or re-open the page.";
}
mysql_select_db($db);

//include('scripts/current_url.php');


if(isset($_POST['signupregis']))
{
$nickname		=	$_POST['nickname'];
$signupemail	=	$_POST['signupemail'];
$password		=	$_POST['signuppassword'];
$cpassword		=	$_POST['signupconpassword'];
$usertype		=	'admin';


//echo "INSERT INTO user SET firstname='".$nickname."', email='".$signupemail."', password='".md5($password)."', reppassword='".md5($cpassword)."', usertype='admin'";
$signupQuery	=	mysql_query("INSERT INTO user SET firstname='".$nickname."', email='".$signupemail."', password='".md5($password)."', reppassword='".md5($cpassword)."', usertype='admin'");

if(mysql_affected_rows()==1)
{

echo "<script type='text/javascript'>alert('Successfully Created Your Account');window.location.href='../index.php';</script>";


}




}



?>

<?php 
echo 'adsds';
include("../includes/dbcon.php");

if(isset($_GET['user_id']))
{
echo $user_id	=	$_GET['user_id'];

$activate_query = "UPDATE user SET active='0' WHERE id='".$user_id."'";
//echo "UPDATE user SET active='1' WHERE id='".$userid."'";
$act=mysql_query($activate_query);

if($act)
{
	echo "<script type='text/javascript'>window.location.href='../index.php';</script>";
} 
else 
{
	echo "<script type='text/javascript'>window.location.href='../index.php';</script>";
}

}
?>
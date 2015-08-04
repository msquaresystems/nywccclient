<?php
include("../includes/dbcon.php");

if(isset($_POST['edituser'])){
	$user_id    = 	$_POST['userid'];
	$firstname	=	$_POST['fname'];
	$lastname	=	$_POST['lname'];
	$username	=	$_POST['uname'];
	$phonewk	=	$_POST['phwork'];
	$cell		=	$_POST['mobile'];
	$email		=	$_POST['email'];
	$dob		=	$_POST['dob'];
	$usertp		=	$_POST['usertype'];
	//echo "UPDATE user SET firstname='".$firstname."', lastname='".$lastname."', username='".$username."', email='".$email."',phwork='".$phonewk."', cell='".$cell."', dob='".$dob."', usertype='".$usertp."' WHERE id='".$user_id."' limit 1";
	//exit;
	$updateuser	=	mysql_query("UPDATE user SET firstname='".$firstname."', lastname='".$lastname."', username='".$username."', email='".$email."',phwork='".$phonewk."', cell='".$cell."', dob='".$dob."', usertype='".$usertp."' WHERE id='".$user_id."' limit 1");
	if(mysql_affected_rows()==1){		
		echo "<script type='text/javascript'>alert('Successfully updated'); window.location.href='../includes/clientlist.php';</script>";
	}else{
		echo "<script type='text/javascript'>alert('You can\'t update. Try again'); window.location.href='../includes/clientlist.php';</script>";
	}
}

mysql_close();

?>
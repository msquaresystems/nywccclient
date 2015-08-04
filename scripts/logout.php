<?php 
	
	session_start();
	include('../config.php');
	$id = $_SESSION['id'];
	
	$result = mysql_query("SELECT login_time FROM userlogs WHERE user_id='".$id."' ORDER BY login_time Desc LIMIT 1");
	
	$rw=mysql_fetch_array($result);

	if($rw)
	{

	$last_login=$rw['login_time'];


	mysql_query("UPDATE userlogs SET logout_time=NOW(), last_login='".$rw['login_time']."' WHERE user_id='".$id."' ORDER BY login_time Desc LIMIT 1");
	}

		unset($_SESSION['id']);
		session_destroy();
		echo '<script language="javascript">';
		echo 'window.location.href= "../index.php";';
		echo '</script>';

?>
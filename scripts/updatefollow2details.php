<?php
 $con=mysql_connect("localhost","root","C@ps1MYSQL");
    if(!$con)
    {
    die('could not connect'.mysql_error());
    }
    $db='NYWCC';
    mysql_select_db($db);
if(isset($_POST['firstname']))
{

	$f2date 		= $_POST['f2date'];
	$clientname  	= $_POST['clientname'];
	$telephone		= $_POST['telephone'];
	$bname		    = $_POST['bname'];		
	$counselnotes 	= $_POST['counselnotes'];
	$timespent 		= $_POST['timespent']. $_POST['timetype'];
	$sign	   		= $_POST['sign'];
	$f2id			= $_POST['id'];

	$follow2update	= mysql_query("UPDATE followupform2 SET visitdate='".$f2date."', cname='".$clientname."',telephone='".$telephone."',bname='".$bname."',counselnotes='".$counselnotes."',timespent='".$timespent."',sign='".$sign."' WHERE id='".$f2id."' LIMIT 1");

	if(mysql_affected_rows()==1)
	{

		echo 1;
		
	}
	else
	{
		echo 0;
	}

}
?>
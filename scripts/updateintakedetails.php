<?php
include('../config.php');
	
if(isset($_REQUEST['submit']) && !empty($_REQUEST['submit']))
{
	//QUERY START
	$QUERY  = "UPDATE intake SET ";
		foreach($_POST as $key => $value){
			if($key!='id'){
				$GET_KEY[]  = "`".$key."` = '".$value."'";	
			}
		}
	$QUERY .= implode($GET_KEY,',');
	$QUERY .= " WHERE id = ";
	$QUERY .= "'".$_REQUEST['id']."'";
	$SQL    = mysql_query($QUERY); 
	if($SQL){
		echo 1;
	}else{
		echo 0;
	}
}
?>
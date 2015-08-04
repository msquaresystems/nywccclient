<?php
session_start();
include('../config.php');

if(isset($_REQUEST['clientid']) && !empty($_REQUEST['clientid']) && empty($_REQUEST['followupeditid'])){
	//QUERY START
	$QUERY  = "INSERT INTO followup(";
	$QUERY .= "`user_id`,`date`,";
		foreach($_POST as $key => $value){
			$GET_KEY[]  = "`".$key."`";
		}
	$QUERY .= implode($GET_KEY,',');
	$QUERY .= ")VALUES(";
	$QUERY .= "'".$_SESSION['id']."',NOW(),";
		foreach($_POST as $key => $value){
				if(is_array($value)){
				$GET_VALUE[] = "'".implode($value,',')."'";	
				}else{
				$GET_VALUE[] = "'".$value."'";	
				}
		}
	
	$QUERY .= implode($GET_VALUE,',');	
	$QUERY .= ")"; //QUERY END
	
	$SQL    = mysql_query($QUERY); 
	if(mysql_affected_rows()==1){
	   echo '1';
	}else{
	  echo '0';
	}
}

if(!empty($_REQUEST['followupeditid'])){
	//QUERY START
	$QUERY  = "UPDATE followup SET ";
		foreach($_POST as $key => $value){
			if($key!='followupeditid'){
				if(is_array($value)){
				$GET_KEY[]  = "`".$key."` = '".implode($value,',')."'";	
				}else{
				$GET_KEY[]  = "`".$key."` = '".$value."'";	
				}

			}
		}
	$QUERY .= implode($GET_KEY,',');
	
	$QUERY .= " WHERE id = ";
	$QUERY .= "'".$_REQUEST['followupeditid']."'";
	$SQL    = mysql_query($QUERY); 
	if($SQL){
    echo '1';
	}
}

mysql_close();
?>
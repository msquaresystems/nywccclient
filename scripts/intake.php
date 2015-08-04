<?php
session_start();

include('../config.php');

$notEqual = array("membership_id", "address_business_same", "street_number", "route", "locality", "administrative_area_level_1", "postal_code", "country");
$EqualPercentage = array("per_first_name", "per_last_name", "per_email", "per_phone_num", "child_percentageofbusiness");

if(isset($_REQUEST['submit']) && !empty($_REQUEST['submit']) && empty($_REQUEST['membership_id'])){
	//QUERY START
	$QUERY  = "INSERT INTO intake(";
	$QUERY .= "`user_id`,`assigned_user`,`created_date`,";
		foreach($_POST as $key => $value){
			if (!in_array($key, $notEqual)) {
			$GET_KEY[]  = "`".$key."`";
			}
		}
	$QUERY .= implode($GET_KEY,',');
		if(!empty($_FILES)){
		$QUERY .= ",`client_signature`";
		}
	$QUERY .= ")VALUES(";
	$QUERY .= "'".$_SESSION['id']."','".$_SESSION['id']."',NOW(),";
		foreach($_POST as $key => $value){
			if (!in_array($key, $notEqual)) {
				if (in_array($key, $EqualPercentage)) {
					$GET_VALUE[] = "'".serialize($value)."'";
				}else{
					if(is_array($value)){
					$GET_VALUE[] = "'".implode($value,',')."'";	
					}else{
					$GET_VALUE[] = "'".$value."'";	
					}
				}	
			}
		}
		if(!empty($_FILES)){  
			$GET_VALUE[] = "'".$_FILES['client_signature']['name'][0]."'";	
			$uploads_dir = '../client_signature';
			foreach ($_FILES["client_signature"]["error"] as $key => $error) {
				if ($error == UPLOAD_ERR_OK) {
					$tmp_name = $_FILES["client_signature"]["tmp_name"][$key];
					$name = $_FILES["client_signature"]["name"][$key];
					move_uploaded_file($tmp_name, "$uploads_dir/$name");
				}
			}
		}
	
	$QUERY .= implode($GET_VALUE,',');	
	$QUERY .= ")"; //QUERY END
	$SQL    = mysql_query($QUERY); 

	if(mysql_affected_rows()==1){
	   $_SESSION['clientid'] = mysql_insert_id();  
	   $assignquery = mysql_query("INSERT INTO userprojects SET uid='".$_SESSION['id']."', clientid='".$_SESSION['clientid']."',assign_date=NOW()");
	   echo '1';
	}else{
	  echo '0';
	}
}
if(isset($_REQUEST['submit']) && !empty($_REQUEST['submit']) && !empty($_REQUEST['membership_id'])){
	//QUERY START
	/* echo "<pre>";
	print_r($_REQUEST);
	print_r($_FILES);
	exit; */
	$QUERY  = "UPDATE intake SET ";
		foreach($_POST as $key => $value){
			if (!in_array($key, $notEqual)) {
				if (in_array($key, $EqualPercentage)) {
					$GET_KEY[] = "`".$key."` = '".serialize($value)."'";
				}else{
					if(is_array($value)){
					$GET_KEY[] = "`".$key."` = '".implode($value,',')."'";	
					}else{
					$GET_KEY[] = "`".$key."` = '".$value."'";	
					}
				}	
			}
		}
	$QUERY .= implode($GET_KEY,',');
		if(!empty($_FILES)){
	$QUERY .= ",`client_signature` = '".$_FILES['client_signature']['name'][0]."' ";
			$uploads_dir = '../client_signature';
			foreach ($_FILES["client_signature"]["error"] as $key => $error) {
				if ($error == UPLOAD_ERR_OK) {
					$tmp_name = $_FILES["client_signature"]["tmp_name"][$key];
					$name = $_FILES["client_signature"]["name"][$key];
					move_uploaded_file($tmp_name, "$uploads_dir/$name");
				}
			}
		}
	
	$QUERY .= " WHERE id = ";
	$QUERY .= "'".$_REQUEST['membership_id']."'";
	$SQL    = mysql_query($QUERY); 
	if($SQL){
    echo '1';
	}
}
mysql_close();
?>
<?php
session_start();
include('../config.php');
if(isset($_REQUEST['clientid']) && !empty($_REQUEST['clientid']) && empty($_REQUEST['followup2editid'])){
	//QUERY START
	$QUERY  = "INSERT INTO followupform2(";
	$QUERY .= "`user_id`,`visitdate`,";
		foreach($_POST as $key => $value){
			$GET_KEY[]  = "`".$key."`";
		}
	$QUERY .= implode($GET_KEY,',');
		if(!empty($_FILES)){
		$QUERY .= ",`f2_client_signature`";
		}
	$QUERY .= ")VALUES(";
	$QUERY .= "'".$_SESSION['id']."',NOW(),";
		foreach($_POST as $key => $value){
				if(is_array($value)){
				$GET_VALUE[] = "'".implode($value,',')."'";	
				}else{
				$GET_VALUE[] = "'".$value."'";	
				}
		}
		if(!empty($_FILES)){  
			$GET_VALUE[] = "'".$_FILES['f2_client_signature']['name'][0]."'";	
			$uploads_dir = '../f2_client_signature';
			foreach ($_FILES["f2_client_signature"]["error"] as $key => $error) {
				if ($error == UPLOAD_ERR_OK) {
					$tmp_name = $_FILES["f2_client_signature"]["tmp_name"][$key];
					$name = $_FILES["f2_client_signature"]["name"][$key];
					move_uploaded_file($tmp_name, "$uploads_dir/$name");
				}
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

if(!empty($_REQUEST['followup2editid'])){
	//QUERY START
	/* echo "<pre>";
	print_r($_REQUEST);
	print_r($_FILES);
	exit; */
	$QUERY  = "UPDATE followupform2 SET ";
		foreach($_POST as $key => $value){
			if($key!='followup2editid'){
				if(is_array($value)){
				$GET_KEY[]  = "`".$key."` = '".implode($value,',')."'";	
				}else{
				$GET_KEY[]  = "`".$key."` = '".$value."'";	
				}

			}
		}
	$QUERY .= implode($GET_KEY,',');
		if(!empty($_FILES)){
	$QUERY .= ",`f2_client_signature` = '".$_FILES['f2_client_signature']['name'][0]."' ";
			$uploads_dir = '../f2_client_signature';
			foreach ($_FILES["f2_client_signature"]["error"] as $key => $error) {
				if ($error == UPLOAD_ERR_OK) {
					$tmp_name = $_FILES["f2_client_signature"]["tmp_name"][$key];
					$name = $_FILES["f2_client_signature"]["name"][$key];
					move_uploaded_file($tmp_name, "$uploads_dir/$name");
				}
			}
		}
	
	$QUERY .= " WHERE id = ";
	$QUERY .= "'".$_REQUEST['followup2editid']."'";
	$SQL    = mysql_query($QUERY); 
	if($SQL){
    echo '1';
	}
}

mysql_close();
?>
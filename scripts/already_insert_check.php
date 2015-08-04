<?php
include('../config.php');
?>

<?php
	if(isset($_REQUEST['email']) && !empty($_REQUEST['email'])){
		$email 	= $_REQUEST['email'];
		$query  = mysql_query("SELECT email FROM intake WHERE email='".$email."'");
		$result = mysql_num_rows($query);
		if($result > 0){
			echo 1;
		}else{
			echo 0;
		}
	}
	if(isset($_REQUEST['telephone']) && !empty($_REQUEST['telephone'])){
		$telephone 	= $_REQUEST['telephone'];
		$query  = mysql_query("SELECT telephone FROM intake WHERE telephone='".$telephone."'");
		$result = mysql_num_rows($query);
		if($result > 0){
			echo 1;
		}else{
			echo 0;
		}
	}

?>
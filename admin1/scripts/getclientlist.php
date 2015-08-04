 <form method="POST" id="transferaccountuser" name="transfer" action="../scripts/assignclient.php">
 <select id="clientid" name="clientid">
	<option value="select">Select Client</option>
<?php

//include("../includes/dbcon.php");
	$dbhost= "localhost"; $dbuser = "root"; $dbpass = "C@ps1MYSQL"; $dbname = "NYWCC";
	//$tablename = "buildings"; 
	$Connect = @mysql_connect($dbhost, $dbuser, $dbpass)
	or die("Couldn't connect to MySQL:<br>" . mysql_error() . "<br>" . mysql_errno());
	$Db = @mysql_select_db($dbname, $Connect)
	or die("Couldn't select database:<br>" . mysql_error(). "<br>" . mysql_errno());
	
	$user_id		=	$_REQUEST['uid'];
	
	$assignquery	= 	mysql_query("SELECT c.id, c.client_name, a.client_id FROM intake as c INNER JOIN assign as a ON c.id=a.client_id WHERE a.user_id='".$user_id."' ORDER BY a.id DESC");
	$numrows		=	mysql_num_rows($assignquery);

	if($numrows>0){ 
		while($intakerow=mysql_fetch_array($assignquery)){
		?>

		<option value="<?php echo $intakerow['id']; ?>"><?php echo $intakerow['client_name'];?></option>
										
		<?php
		}
		}
	else{ ?>

	<option value="no">No Clients for this user</option>
	<?php }

?>
</select>
 <select id="userid" name="userid">
	<option value="select">Available Users</option>
<?php

//include("../includes/dbcon.php");
	
	//$tablename = "buildings"; 
	
	//$user_id		=	$_REQUEST['uid'];
	
	$userlistquery	= 	mysql_query("SELECT id,username,email FROM user WHERE active=1 AND status='activated'");
	$nrows		=	mysql_num_rows($userlistquery);

	if($nrows>0){ 
		while($userrow=mysql_fetch_array($userlistquery)){
		?>

		<option value="<?php echo $userrow['id']; ?>"><?php echo $userrow['username'];?></option>
										
		<?php
		}
		}
	else{ ?>

	<option value="no">No Users</option>
	<?php }

?>
</select>
 <input type="submit" name="assignsubmit" value="ASSIGN" id="assignclienttousers">
</form>
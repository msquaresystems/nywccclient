<?php
$con=mysql_connect("localhost","root","C@ps1MYSQL");
if(!$con)
{
  die('could not connect'.mysql_error());
}
$db='NYWCC';
mysql_select_db($db);
?>

<?php
	if(isset($_POST['clientname']))
		{
			$intakeusername=$_POST['clientname'];
				//echo "SELECT id,firstname,lastname FROM intake WHERE firstname='".$intakeusername."'";
			$availclientnamequery=mysql_query("SELECT id,firstname,lastname FROM intake WHERE firstname='".$intakeusername."'");
			$intakeresult=mysql_num_rows($availclientnamequery);
			if($intakeresult==1)
			{
				echo 1;
			}
			else
			{
				echo 0;
			}
		}

?>
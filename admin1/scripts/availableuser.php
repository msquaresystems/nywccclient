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
	if(isset($_POST['username']))
		{
			$username=$_POST['username'];
			//echo "SELECT id,username FROM user WHERE username='".$username."' AND usertype='admin'";
			$availusernamequery=mysql_query("SELECT id,username FROM user WHERE username='".$username."' AND usertype='admin'");
			$result=mysql_num_rows($availusernamequery);
			if($result==1)
			{
				echo 1;
			}
			else
			{
				echo 0;
			}
		}
		else if(isset($_POST['email']))
		{
			$email=$_POST['email'];
			//echo "SELECT id,email FROM user WHERE email='".$email."' AND usertype='admin'";
			$fpassquery=mysql_query("SELECT id,email FROM user WHERE email='".$email."' AND usertype='admin'");
			$r=mysql_num_rows($fpassquery);
			if($r>0)
			{
				echo 1;
			}
			else
			{
				echo 0;
			}
		}
?>
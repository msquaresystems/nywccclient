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
	if(isset($_POST['params'])=='username')
		{
			$username=$_POST['name'];
			//echo "SELECT id,username FROM user WHERE username='".$username."'";
			$availusernamequery=mysql_query("SELECT id,username FROM user WHERE username='".$username."'");
			$result=mysql_num_rows($availusernamequery);
			if($result==1)
			{
				echo $_POST['params'];
			}
			else
			{
				echo $_POST['name'];
			}
		}
		else if(isset($_POST['params'])=='email')
		{
			$email=$_POST['name'];
			//echo "SELECT id,email FROM user WHERE email='".$email."'";
			$fpassquery=mysql_query("SELECT id,email FROM user WHERE email='".$email."'");
			$r=mysql_num_rows($fpassquery);
			if($r==1)
			{
				echo $_POST['params'];
			}
			else
			{
				echo $_POST['name'];
			}
		}
		else if(isset($_POST['email']))
		{
			$email=$_POST['email'];
			//echo "SELECT id,email FROM user WHERE email='".$email."'";
			$fpassquery=mysql_query("SELECT id,email FROM user WHERE email='".$email."'");
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
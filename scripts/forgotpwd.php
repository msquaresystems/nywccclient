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
//include('../config.php');
if(isset($_POST['ftpassmail']))
{
      //echo "username";
	$femail=$_POST['ftpassmail'];
	$result="SELECT id,email FROM user WHERE email='".$femail."'";
	$output=mysql_query($result,$con);
      $numrows=mysql_num_rows($output);
	if($numrows>0)
	{
            while($rows=mysql_fetch_array($output)){
           
		$username=$rows['email'];}
            $pwdgen=str_shuffle("msquare123");
	  	$to=$femail;
	  	$subject="Forgot password Info"; 
            $message="<html><body>";
            $message.="<table border='0' cellpadding='0' cellspacing'0' width='100%'>";
            $message.="<tr><td style='padding: 10px 0 20px 0;'>";
            $message.="<table align='center' border='0' cellpadding='0' cellspacing='0' width='600' style='border: 1px solid #cccccc; border-collapse: collapse;'>";
            $message.="<tr><td align='center' style='padding: 40px 0 20px 0; color: #fff; font-size: 24px; font-weight: bold; font-family: Arial,sans-serif;' bgcolor='#3BAFE4'>Forgot Password Info</td></tr>";
            $message.="<tr><td  style='padding: 40px 30px 20px 30px;' bgcolor='#ffffff'>";
            $message.="<table border='0' cellpadding='0' cellspacing='0' width='100%'>";
            $message.="<tr><td style='padding: 16px 0 10px 0; color: #153643; font-family: Arial, sans-serif; font-size: 14px; line-height: 5px;'>Hi there,</b></td></tr>";
            $message.="<tr><td style='padding: 16px 0 10px 0; color: #153643; font-family: Arial, sans-serif; font-size: 14px; line-height: 5px;'><b>Your New Password:".$pwdgen."</b></td></tr>";
            $message.="<tr><td style='padding: 16px 0 10px 0; color: #153643; font-family: Arial, sans-serif; font-size: 14px; line-height: 5px;'>Please <a href='".base_url."updatepwd.php?pwdgen=".$pwdgen."&email=".$username."'>Click here</td></tr>";
            $message.="<tr><td style='padding: 16px 0 10px 0; color: #153643; font-family: Arial, sans-serif; font-size: 14px; line-height: 5px;'>Thank You!</td></tr>";
            $message.="</table>";
            $message.="</td></tr>";
            $message.="<tr><td style='padding: 30px 30px 30px 30px;' bgcolor='#104C8B'>";
            $message.="<table border='0' cellpadding='0' cellspacing='0' width='100%'>";
            $message.="<tr><td style='color: #ffffff; font-family: Arial, sans-serif; font-size: 14px;' width='75%'>Copyrights 2013 &reg; M-Squaresystems</td></tr>";
            $message.="</table>";
            $message.="</td>";
            $message.="</tr>";
            $message.="</table>";
            $message.="</td></tr>";
            $message.="</table>";
            $message.="</body></html>";
            $headers  = "From:admin@nywcc.com \r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=utf-8\r\n"; 
            $sent=mail($to,$subject,$message,$headers);
            if($sent)
            {
            	echo 1;
            }
            else
            {
            	echo 0;
            }
	}
      else
      {
            echo 0;
      }
}


?>


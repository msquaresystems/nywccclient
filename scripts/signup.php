<?php
session_start();
include("dbcon.php");
require_once('class.phpmailer.php');

if(isset($_POST['fname']))
{   
	if(!empty($_POST['reg_email'])){
		$Allready_reg 		= mysql_query("SELECT * FROM  `user` where email ='".$_POST['reg_email']."'");
		$Allready_reg_count = mysql_num_rows($Allready_reg);
		if($Allready_reg_count > 0){
			echo 3;
		}else{
			$firstname= $_POST['fname'];
			$lastname = $_POST['lname'];
			$work     = $_POST['work'];  
			$mob      = $_POST['cell'];
			$username = $_POST['uname'];
			$emailid  = $_POST['reg_email'];
			$pass     = $_POST['passwd'];
			$password = md5($_POST['passwd']);
			$reppass  = md5($_POST['reppasswd']);
			$dob      = $_POST['birthdate'];
			$address  = $_POST['physical_address'];
			$addr_1   = $_POST['physical_address1'];
			$addr_2   = $_POST['physical_address2'];
			$city     = $_POST['physical_city'];
			$state    = $_POST['physical_state'];
			$zip      = $_POST['physical_zip'];
			$country  = $_POST['physical_country'];
			$sql	  = "INSERT INTO user SET firstname='".$firstname."',lastname='".$lastname."',phwork='".$work."',cell='".$mob."',username='".$username."',email='".$emailid."',password='".$password."',reppassword='".$reppass."',dob='".$dob."',physical_address='".$address."',physical_address1='".$addr_1."',physical_address2='".$addr_2."',physical_city='".$city."',physical_state='".$state."',physical_zip='".$zip."',physical_country='".$country."',usertype='user',reg_date=NOW()";                                
			$q		  = mysql_query($sql);
			if($q)
			{
				$userid  = mysql_insert_id();
				$message.="<html><body>";
				$message.="<table border='0' cellpadding='0' cellspacing'0' width='100%'>";
				$message.="<tr><td style='padding: 10px 0 20px 0;'>";
				$message.="<table align='center' border='0' cellpadding='0' cellspacing='0' width='600' style='border: 1px solid #cccccc; border-collapse: collapse;'>";
				$message.="<tr><td align='center' style='padding: 40px 0 20px 0; color: #fff; font-size: 24px; font-weight: bold; font-family: Arial,sans-serif;' bgcolor='#3BAFE4'>Account Info</td></tr>";
				$message.="<tr><td  style='padding: 40px 30px 20px 30px;' bgcolor='#ffffff'>";
				$message.="<table border='0' cellpadding='0' cellspacing='0' width='100%'>";
				$message.="<tr><td style='padding: 16px 0 10px 0; color: #153643; font-family: Arial, sans-serif; font-size: 14px; line-height: 5px;'>Dear&nbsp;<b>$firstname $lastname,</b></td></tr>";
				$message.="<tr><td style='padding: 16px 0 10px 0; color: #153643; font-family: Arial, sans-serif; font-size: 14px; line-height: 5px;'>You have successfully created your account with <b>M-Squaresystems!</b></td></tr>";
				$message.="<tr><td style='padding: 16px 0 10px 0; color: #153643; font-family: Arial, sans-serif; font-size: 14px; line-height: 5px;'><b>Activation link:</b>&nbsp;<a href='".base_url."activate.php?id=".$userid."'>Click Here</a></td></tr>";
				$message.="<tr><td style='padding: 16px 0 10px 0; color: #153643; font-family: Arial, sans-serif; font-size: 14px; line-height: 5px;'></td>Thank You.</tr>";
				$message.="</table>";
				$message.="</td></tr>";
				$message.="<tr><td style='padding: 30px 30px 30px 30px;' bgcolor='#104C8B'>";
				$message.="<table border='0' cellpadding='0' cellspacing='0' width='100%'>";
				$message.="<tr><td style='color: #ffffff; font-family: Arial, sans-serif; font-size: 14px;' width='75%'>Copyrights 2014 &reg; M-Squaresystems</td></tr>";
				$message.="</table>";
				$message.="</td>";
				$message.="</tr>";
				$message.="</table>";
				$message.="</td></tr>";
				$message.="</table>";
				$message.="</body></html>";
				
				$mail             = new PHPMailer();
				$mail->IsSMTP(); // telling the class to use SMTP
				$mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
														   // 1 = errors and messages
														   // 2 = messages only
				$mail->SMTPAuth   = true;                  // enable SMTP authentication
				$mail->SingleTo   = false;                  // Hide SMTP to address
				$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
				$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
				$mail->Port       = 465;                   // set the SMTP port for the GMAIL server

				$mail->Username   = "ragavendra.g@msquaresystems.com"; // SMTP account username
				$mail->Password   = "Happyyear2013";        // SMTP account password
				$mail->SetFrom('admin@nywcc.org', 'Admin');
				$mail->AddReplyTo('admin@nywcc.org', 'Admin');
				$mail->Subject    = "Your Account activation link";
				$mail->MsgHTML($message);
				$mail->AddAddress($emailid);
				
				if(!$mail->Send()) {
				  echo 0;
				} else {
				  echo 1;
				}
				
			}
		}
	}
 }
                                        
?>
<?php	
    include('../config.php');	

        session_start();	

		if(isset($_REQUEST['submit']) && !empty($_REQUEST['submit']))
        {	
            $email=$_REQUEST['lemail'];
        	$password=md5($_REQUEST['lpassword']);
            $query="SELECT id,email,password,firstname,username FROM user WHERE email='".$email."' AND password='".$password."' AND active='1' AND status='activated'";

            $result=mysql_query($query);
            $rows=mysql_num_rows($result);
            
            if($rows==1)
            {	
            	$login=mysql_fetch_array($result);
            	$_SESSION['id']=$login['id'];
                $_SESSION['fname']=$login['firstname'];
                $_SESSION['username']=$login['username'];
                mysql_query("INSERT INTO userlogs SET user_id='".$_SESSION['id']."',login_time=NOW()");
				mysql_query("UPDATE `user` SET `login_attemt` = '0' WHERE `id` ='".$login['id']."'");
                echo "1";	           
            }else {	
				$query_reset  = "SELECT id, email,login_attemt FROM user WHERE email='".$email."' AND active='1' AND status='activated'";
				$result_reset = mysql_query($query_reset);
				$result_get   = mysql_fetch_array($result_reset);
				$rows_reset	  = mysql_num_rows($result_reset);
				if($rows_reset==1){
					if(!empty($result_get['login_attemt'])){
						$login_attemt = $result_get['login_attemt'] + 1;
					}else{
						$login_attemt = 1;
					}
					if($login_attemt>3){
						echo "2";
					}else{
						mysql_query("UPDATE `user` SET `login_attemt` = '".$login_attemt."' WHERE `id` ='".$result_get['id']."'");
						echo "0";
					}
				}else{
					echo "0";
				}
            }
        }
?>
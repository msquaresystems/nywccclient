<?php



        include("..includes/dbcon.php");

                if(isset($_POST['username']))

                {

                        $username=$_POST['username'];

                        $adminusernamequery=mysql_query("SELECT id,email FROM user WHERE username='".$username."' AND usertype='admin'");

                        $result=mysql_num_rows($adminusernamequery);

                        if($result==1)

                        {

                                echo 1;

                        }

                        else

                        {

                                echo 0;

                        }

                }

               

?>


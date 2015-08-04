  <?php 
        session_start();

        $dbhost= "localhost"; $dbuser = "root"; $dbpass = "C@ps1MYSQL"; $dbname = "NYWCC";
        $Connect = @mysql_connect($dbhost, $dbuser, $dbpass)
        or die("Couldn't connect to MySQL:<br>" . mysql_error() . "<br>" . mysql_errno());
        $Db = @mysql_select_db($dbname, $Connect)
        or die("Couldn't select database:<br>" . mysql_error(). "<br>" . mysql_errno());

                if(isset($_POST['postsubmit']))
                {
                    $postquery=$_POST['postmsg'];
                    $clientid=$_SESSION['clientid'];
                    $clientname=$_SESSION['clientname'];
                    //echo "INSERT INTO post SET postedquery='".$postquery."',clientid='".$clientid."',clientname='".$clientname."'";
                    $postsubmitquery=mysql_query("INSERT INTO post SET postedquery='".$postquery."',clientid='".$clientid."',clientname='".$clientname."'");
                    if(mysql_affected_rows()==1)
                    {
                        echo "<script type='text/javascript'>alert('You have successfully submitted');window.location.href='../index.php';</script>";
                    }
                    else
                    {
                        echo "<script type='text/javascript'>alert('Failed to save data');</script>";
                    }
                }  

?>
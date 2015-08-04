  <?php

session_start();

include('../config.php');

if(isset($_POST['profileform']))
{
  //echo "qwerty";
  $pfname           = $_POST['pfname'];
  $plname           = $_POST['plname'];
  $puname           = $_POST['puname'];
  $pdob             = $_POST['birthdate'];
  $pemail           = $_POST['pemail'];
  $phwork           = $_POST['phwork'];
  $cell             = $_POST['cellno'];
  $paddress         = $_POST['physical_address'];
  $paddress1        = $_POST['physical_address1'];
  $paddress2        = $_POST['physical_address2'];
  $pcity            = $_POST['physical_city'];
  $pstate           = $_POST['physical_state'];
  $pzip             = $_POST['physical_zip'];
  $pcountry         = $_POST['physical_country'];

  $profile_update=mysql_query("UPDATE user SET firstname='".$pfname."',lastname='".$plname."',username='".$puname."',dob='".$pdob."',email='".$pemail."',phwork='".$phwork."', cell='".$cell."',physical_address='".$paddress."',physical_address1='".$paddress1."',physical_address2='".$paddress2."',physical_city='".$pcity."',physical_state='".$pstate."',physical_zip='".$pzip."',physical_country='".$pcountry."' WHERE id='".$_SESSION['id']."' AND status='activated' AND active='1' LIMIT 1");
  if($profile_update)
    {
	  if(!empty($puname)){
		$_SESSION['username'] = $puname;
	  }
      echo "<script type='text/javascript'>alert('profile updated successfully');</script>";
      echo "<script type='text/javascript'>window.location.href='../index.php';</script>";
    }


}
else
{
  echo "<script type='text/javascript'>alert('profile updation failed');</script>";
}

mysql_close();




?>
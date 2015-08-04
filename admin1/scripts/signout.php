<?php
session_start();
//print_r($_SESSION);
//echo session_id();
//echo $_SESSION['admin_user_id']."user id";

//$old_sessionid = session_id();

//session_regenerate_id();

//$new_sessionid = session_id();

//echo "Old Session: $old_sessionid<br />";
//echo "New Session: $new_sessionid<br />";

//print_r($_SESSION);

unset($_SESSION['admin_user_id']);
unset($_SESSION['username']);
session_destroy();

echo "<script type='text/javascript'>window.location.href='../index.php';</script>";

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Capsone-System2" >
    <link rel="shortcut icon" href="images/favicon.png">

    <title>M-Square</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,700,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:300,200,100' rel='stylesheet' type='text/css'>

    <!-- Bootstrap core CSS -->
    <link href="../js/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../js/jquery.gritter/css/jquery.gritter.css" />

	<link rel="stylesheet" href="../fonts/font-awesome-4/css/font-awesome.min.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  <link rel="stylesheet" type="text/css" href="../js/jquery.nanoscroller/nanoscroller.css" />
  <link rel="stylesheet" type="text/css" href="../js/jquery.easypiechart/jquery.easy-pie-chart.css" />
  <link rel="stylesheet" type="text/css" href="../js/bootstrap.switch/bootstrap-switch.css" />
  <link rel="stylesheet" type="text/css" href="../js/bootstrap.datetimepicker/css/bootstrap-datetimepicker.min.css" />
  <link rel="stylesheet" type="text/css" href="../js/jquery.select2/select2.css" />
  <link rel="stylesheet" type="text/css" href="../js/bootstrap.slider/css/slider.css" />
  <link rel="stylesheet" type="text/css" href="../js/jquery.datatables/bootstrap-adapter/css/datatables.css" />
  <link href="../css/style.css" rel="stylesheet" />
	
  </head>

  <body>

<!-- Fixed navbar -->
  <div id="head-nav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="fa fa-gear"></span>
        </button>
        <a class="navbar-brand" href="#"><span>M-Square</span></a>
      </div>
     
    </div>
  </div>


<div id="cl-wrapper">
  <div class="cl-sidebar">
    <div class="cl-toggle"><i class="fa fa-bars"></i></div>
   <div class="cl-navblock">
				<ul class="cl-vnavigation">
					<li><a href="../index.php"><i class="fa fa-home"></i>Dashboard</a></li>
					<li><a href="clientlist.php"><i class="fa fa-smile-o"></i>Users</a></li>
          <li><a href="intake.php">Clients</a></li>
          <li><a href="followup.php">Follow</a></li>
          <li><a href="transferacc.php">Transfer Accounts</a></li>
					<li><a href="userlogs.php">Userlogs</a></li>
					
				</ul>
			</div>
  </div>
    <div class="container-fluid" id="pcont">
    <div class="page-head">
      <h2><strong>EDIT USER</strong></h2>
      <!--<ol class="breadcrumb">
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
        <li class="active"></li>
      </ol>-->
    </div>
    <div class="cl-mcont">
    <div class="row">
      <div class="col-sm-6 col-md-6">
        <div class="block-flat">
          <div class="header">							
            <h3></h3>
          </div>
          <div class="content">
          <?php 
			include("dbcon.php");
			if(isset($_GET['user_id']) && !empty($_GET['user_id']))
			{
				$userlist		=	mysql_query("SELECT * FROM user WHERE id='".$_GET['user_id']."'");
				$userrow		=	mysql_fetch_array($userlist);
			?>
				  <form action="../scripts/edituser.php?user_id=<?php if(!empty($_GET['user_id'])){ echo $_GET['user_id']; } ?>" method="POST" name="edit" id="edit"> 
					<div class="form-group">
					  <input type="hidden" name="userid" id="userid" parsley-trigger="change" required class="form-control" value="<?php if(isset($userrow['id'])){ echo $userrow['id'];} ?>">
					  <label>Firstname</label> 
					  <input type="text" name="fname" id="fname" parsley-trigger="change" required class="form-control" value="<?php if(isset($userrow['firstname'])){ echo $userrow['firstname'];} ?>">
					</div>
					<div class="form-group">
					  <label>Lastname</label> 
					  <input type="text" name="lname" id="lname" parsley-trigger="change" required class="form-control" value="<?php if(isset($userrow['lastname'])){ echo $userrow['lastname'];} ?>">
					</div>
					<div class="form-group">
					  <label>Username</label> 
					  <input type="text" name="uname" id="uname" parsley-trigger="change" required class="form-control" value="<?php if(isset($userrow['username'])){ echo $userrow['username'];} ?>">
					</div>
					<div class="form-group">
					  <label>Email address</label> <input type="email" name="email" parsley-trigger="change" required class="form-control" value="<?php if(isset($userrow['email'])){ echo $userrow['email'];} ?>">
					</div>
					<div class="form-group"> 
					  <label>Phone Work</label> <input id="phwork" type="text" name="phwork" required class="form-control" value="<?php if(isset($userrow['phwork'])){ echo $userrow['phwork'];} ?>">
					</div> 
					<div class="form-group"> 
					  <label>Mobile</label> <input type="text" name="mobile" id="mobile" required class="form-control" value="<?php if(isset($userrow['cell'])){ echo $userrow['cell'];} ?>">
					</div> 
					 <div class="form-group"> 
					  <label>Date Of Birth</label> <input type="text" name="dob" id="dob" required class="form-control" value="<?php if(isset($userrow['dob'])){ echo $userrow['dob'];} ?>">
					</div> 
					 <div class="form-group"> 
					  <label>Usertype</label> 
					  <select name="usertype" id="usertype" class="form-control">
						<option value="user" <?php if(!empty($userrow['usertype']) && $userrow['usertype']=='user' ){echo 'SELECTED';}?> >User</option>
						<option value="admin" <?php if(!empty($userrow['usertype']) && $userrow['usertype']=='admin' ){echo 'SELECTED';}?> >Admin</option>
					  </select>	
					</div> 
					<div class="checkbox">
					 <!-- <label> <input type="checkbox" name="remember"> Remember me </label> -->
					 </div> 
					  <input class="btn btn-primary" name="edituser" id="edituser" type="submit" value="UPDATE">
					</form>
            <?php
			}
			?>
          </div>
        </div>				
      </div>
     </div>
    </div>
  </div> 
</div>

	<script src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/jquery.nanoscroller/jquery.nanoscroller.js"></script>
	<script type="text/javascript" src="../js/jquery.sparkline/jquery.sparkline.min.js"></script>
	<script type="text/javascript" src="../js/jquery.easypiechart/jquery.easy-pie-chart.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
	<script type="text/javascript" src="../js/behaviour/general.js"></script>
  	<script src="../js/jquery.ui/jquery-ui.js" type="text/javascript"></script>
	<script type="text/javascript" src="../js/jquery.nestable/jquery.nestable.js"></script>
	<script type="text/javascript" src="../js/bootstrap.switch/bootstrap-switch.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
  	<script src="../js/jquery.select2/select2.min.js" type="text/javascript"></script>
  	<script src="../js/bootstrap.slider/js/bootstrap-slider.js" type="text/javascript"></script>
	<script type="text/javascript" src="../js/jquery.gritter/js/jquery.gritter.min.js"></script>
	<script type="text/javascript" src="../js/jquery.datatables/jquery.datatables.min.js"></script>
	<script type="text/javascript" src="../js/jquery.datatables/bootstrap-adapter/js/datatables.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        //initialize the javascript
        App.init();
        App.dataTables();
      });
    </script>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../js/bootstrap/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/jquery.flot/jquery.flot.js"></script>
	<script type="text/javascript" src="../js/jquery.flot/jquery.flot.pie.js"></script>
	<script type="text/javascript" src="../js/jquery.flot/jquery.flot.resize.js"></script>
	<script type="text/javascript" src="../js/jquery.flot/jquery.flot.labels.js"></script>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">
<?php
	
  include('dbcon.php');

	session_start();

	//$followuplst   = mysql_query("SELECT COUNT(*) AS totalows FROM followup WHERE status='open' ORDER BY id DESC"); 
	$followuplst   = mysql_query("SELECT COUNT(*) AS totalows FROM followup ORDER BY id DESC"); 

	$totalrows	   = mysql_fetch_array($followuplst);


  $Clientqueries = mysql_query("SELECT COUNT(*) AS totalrows FROM followupform2 WHERE status='open' ORDER BY id DESC"); 

  $totalquery    = mysql_fetch_array($Clientqueries);

?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
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
  <link rel="stylesheet" type="text/css" href="../js/intro.js/introjs.css" />
  <link rel="stylesheet" href="../js/jquery.vectormaps/jquery-jvectormap-1.2.2.css" type="text/css" media="screen"/>
  <link rel="stylesheet" type="text/css" href="../js/jquery.magnific-popup/dist/magnific-popup.css" />
  <link rel="stylesheet" type="text/css" href="../js/jquery.niftymodals/css/component.css" />
  <link rel="stylesheet" type="text/css" href="../js/bootstrap.summernote/dist/summernote.css" />
  <link rel="stylesheet" type="text/css" href="../js/jquery.datatables/bootstrap-adapter/css/datatables.css" />
  <link rel="stylesheet" type="text/css" href="../css/style.css"  />
  <link type="text/css" rel="stylesheet" href="../css/jquery-ui.css" />
  <link type="text/css" href="../css/ui.multiselect.css" rel="stylesheet" />
	<style type="text/css">
      
      
      h1, h3 {
        margin: 0;
        padding: 0;
        font-weight: normal;
      }
      
      a {
        color: #000000;
        font-weight: bold;
        padding-left: 20px;
      }
      
      /*div#container {
        width: 580px;
        margin: 100px auto 0 auto;
        padding: 20px;
        background: #000;
        border: 1px solid #1a1a1a;
      }*/
      
      /* HOVER STYLES */
      div#pop-up {
        display: none;
        position: absolute;
        width: 280px;
        padding: 10px;
        background: #eeeeee;
        color: #000000;
        border: 1px solid #1a1a1a;
        font-size: 90%;
      }
    </style>
  </head>

  <body>
  <!-- Fixed navbar -->
  <?php
  if(isset($_SESSION['admin_user_id']))
  {
    
   // include("../login.php");
    //include("includes/signup.php");
  //}
  ?>
  <div id="head-nav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="fa fa-gear"></span>
        </button>
        <a class="navbar-brand" href="#"><span>M-Square</span></a>
      </div>
     
     <div class="navbar-collapse collapse">
        
    <ul class="nav navbar-nav navbar-right ">
      <li class="dropdown profile_menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          
          <?php if(isset($_SESSION['username'])){echo $_SESSION['username'];} ?>
         <b class="caret"></b></a>
        <ul class="dropdown-menu">
          
          <!--<li><a href="#">Profile</a></li>
          <li><a href="#">Messages</a></li>
          <li class="divider"></li>-->
          <li><a href="../scripts/signout.php">Sign Out</a></li>
        </ul>
      </li>
    </ul>			
    
      </div><!--/.nav-collapse -->

    </div>
  </div>
	<div id="cl-wrapper">
		<div class="cl-sidebar">
			<div class="cl-toggle"><i class="fa fa-bars"></i></div>
			<div class="cl-navblock">
				<ul class="cl-vnavigation">
					<li><a href="../index.php"><i class="fa fa-home"></i>Dashboard</a></li>
					<li><a href="clientlist.php"><i class="fa fa-smile-o"></i>Users</a></li>
					<li><a href="intake.php"><i class="glyphicon glyphicon-user"></i>Clients</a></li>
					<li><a href="followup.php"><i class=" glyphicon glyphicon-hand-left"></i>New Follow&emsp;<span class="badge badge-success"><?php if(isset($totalrows)){echo $totalrows['totalows'];} ?></span></a></li>
					<li><a href="transferacc.php"><i class=" glyphicon glyphicon-transfer"></i>Assign Employees</a></li>
					<li><a href="userlogs.php"><i class="glyphicon glyphicon-floppy-save"></i>Userlogs</a></li>
					<li><a href="reports.php"><i class="fa fa-file"></i>Reports</a></li>
					<li><a href="queries.php"><i class="glyphicon glyphicon-floppy-save"></i>Client Queries&emsp;<span class="badge badge-success"><?php if(isset($totalquery)){echo $totalquery['totalrows'];} ?></span></a></li>
				</ul>
			</div>
		</div>
    <?php } ?>
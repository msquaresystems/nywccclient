<?php

	session_start();

	if(!isset($_SESSION['admin_user_id']))
	{
		
		include("login.php");
		//include("includes/signup.php");
	}
else{ 

	//echo $_SESSION['admin_user_id'];

	include("header-top.php");

	include("sidebar-menu.php"); 
    
    $base_url = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
	$base_url .= "://".$_SERVER['HTTP_HOST'];
	if (!isset($_SERVER['ORIG_SCRIPT_NAME'])) {
	$base_url .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
	}
	else {
	$base_url .= str_replace(basename($_SERVER['ORIG_SCRIPT_NAME']),"",$_SERVER['ORIG_SCRIPT_NAME']);
	}

	define('base_url', $base_url);
	?>
	
	<?php
	define('TIMEZONE', 'America/New_York');
	date_default_timezone_set(TIMEZONE);

	$con=mysql_connect("nywccorg.ipowermysql.com","nywccclient","NYWCCClient1@");
    if(!$con)
    {
      die('could not connect'.mysql_error());
    }
    $db='nywccclient';
	
    mysql_select_db($db);
	mysql_query("SET time_zone='offset'"); 

	$now = new DateTime();
	$mins = $now->getOffset() / 60;
	$sgn = ($mins < 0 ? -1 : 1);
	$mins = abs($mins);
	$hrs = floor($mins / 60);
	$mins -= $hrs * 60;
	$offset = sprintf('%+d:%02d', $hrs*$sgn, $mins);
	mysql_query("SET time_zone='".$offset."'"); 
	
 	$User_Query		= mysql_query("SELECT firstname,lastname,email,reg_date FROM user WHERE active = 1 ORDER BY reg_date DESC LIMIT 4");
	$Client_Query	= mysql_query("SELECT intake.first_name as client_first_name ,intake.last_name as client_last_name ,intake.email as client_email,intake.created_date as client_date FROM intake LEFT JOIN user ON intake.user_id = user.id WHERE user.active = 1 ORDER BY intake.created_date DESC LIMIT 4");
	$Follow_Query	= mysql_query("SELECT intake.first_name as client_first_name ,intake.last_name as client_last_name ,user.firstname as f_name, user.lastname as l_name, followup.date as assigned_date  FROM followup LEFT JOIN intake ON followup.clientid=intake.id LEFT JOIN user ON user.id=intake.user_id WHERE user.active = 1 ORDER BY followup.date DESC LIMIT 4");
	$Report_Query	= mysql_query("SELECT intk.first_name as client_first_name ,intk.last_name as client_last_name ,(SELECT username FROM user as usr WHERE usr.id=intk.user_id ) as cname ,intk.time_spent as time_duration ,intk.created_date as report_date FROM intake as intk LEFT JOIN user ON user.id=intk.user_id INNER JOIN userprojects as up ON intk.id=up.clientid WHERE user.active = 1 ORDER BY intk.created_date DESC LIMIT 4");

    $User_Count     = mysql_num_rows(mysql_query("SELECT firstname,lastname,email,reg_date FROM user WHERE active = 1"));
	$Client_Count   = mysql_num_rows(mysql_query("SELECT intake.first_name as client_first_name ,intake.last_name as client_last_name ,intake.email as client_email,intake.created_date as client_date FROM intake LEFT JOIN user ON intake.user_id = user.id WHERE user.active = 1"));
	$Follow_Count   = mysql_num_rows(mysql_query("SELECT intake.first_name as client_first_name ,intake.last_name as client_last_name ,user.firstname as f_name, user.lastname as l_name, followup.date as assigned_date  FROM followup LEFT JOIN intake ON followup.clientid=intake.id LEFT JOIN user ON user.id=intake.user_id WHERE user.active = 1"));
	$Report_Count   = mysql_num_rows(mysql_query("SELECT intk.first_name as client_first_name ,intk.last_name as client_last_name ,(SELECT username FROM user as usr WHERE usr.id=intk.user_id ) as cname ,intk.time_spent as time_duration ,intk.created_date as report_date FROM intake as intk LEFT JOIN user ON user.id=intk.user_id INNER JOIN userprojects as up ON intk.id=up.clientid WHERE user.active = 1"));
	
	

	
	?>

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
	<link href="admin_dash/css/bootstrap.css" rel="stylesheet" media="screen">
	<link href="admin_dash/css/styles.css" rel="stylesheet" media="screen">
	<link href="admin_dash/css/AdminLTE.css" rel="stylesheet" media="screen">
	<link href="admin_dash/css/ionicons.css" rel="stylesheet" media="screen">

		<div class="container-fluid" id="pcont">
		  <div class="cl-mcont">
		  	<h1><center> Welcome to M-Square Systems </center></h1>	
			
					<div class="row-fluid">
						<!--/span-->
						<div class="span9" id="content">
							<div class="row-fluid">
								<!-- block -->
								<div class="block">
									<div class="navbar navbar-inner block-header">
										<div class="muted pull-left">Statistics</div>
										<div class="pull-right"><span class="badge badge-warning">View More</span>

										</div>
									</div>
									<div class="block-content collapse in">
										<div class="row" style="margin-top:0px;">
											<div class="col-lg-3 col-xs-6">
												<!-- small box -->
												<div class="small-box bg-yellow">
													<div class="inner">
														<h3>
															<?php if(!empty($User_Count)){ echo $User_Count; } else { echo "0"; } ?>
														</h3>
														<p>
															Users
														</p>
													</div>
													<div class="icon">
														<i class="ion ion-android-friends"></i>
													</div>
													<a href="includes/clientlist.php" class="small-box-footer">
														More info <i class="fa fa-arrow-circle-right"></i>
													</a>
												</div>
											</div><!-- ./col -->
											<div class="col-lg-3 col-xs-6">
												<!-- small box -->
												<div class="small-box bg-green">
													<div class="inner">
														<h3>
															<?php if(!empty($Client_Count)){ echo $Client_Count; } else { echo "0"; } ?>
														</h3>
														<p>
															Clients
														</p>
													</div>
													<div class="icon">
														<i class="ion ion-person-add"></i>
													</div>
													<a href="includes/intake.php" class="small-box-footer">
														More info <i class="fa fa-arrow-circle-right"></i>
													</a>
												</div>
											</div><!-- ./col -->
											<div class="col-lg-3 col-xs-6">
												<!-- small box -->
												<div class="small-box bg-red">
													<div class="inner">
														<h3>
															<?php if(!empty($Follow_Count)){ echo $Follow_Count; } else { echo "0"; } ?>
														</h3>
														<p>
															Follows
														</p>
													</div>
													<div class="icon">
														<i class="ion ion-person-stalker"></i>
													</div>
													<a href="includes/followup.php" class="small-box-footer">
														More info <i class="fa fa-arrow-circle-right"></i>
													</a>
												</div>
											</div><!-- ./col -->
											<div class="col-lg-3 col-xs-6">
												<!-- small box -->
												<div class="small-box bg-aqua">
													<div class="inner">
														<h3>
															<?php if(!empty($Report_Count)){ echo $Report_Count; } else { echo "0"; } ?>
														</h3>
														<p>
															Reports
														</p>
													</div>
													<div class="icon">
														<i class="ion ion-clipboard"></i>
													</div>
													<a href="includes/reports.php" class="small-box-footer">
														More info <i class="fa fa-arrow-circle-right"></i>
													</a>
												</div>
											</div><!-- ./col -->
										</div><!-- /.row -->
									</div>
								</div>
								<!-- /block -->
							</div>
							<div class="row-fluid">
								<div class="span6">
									<!-- block -->
									<div class="block">
										<div class="navbar navbar-inner block-header">
											<div class="muted pull-left">Recent Users</div>
											<div class="pull-right">
												<span class="badge badge-info"><?php if(!empty($User_Count)){ echo $User_Count; } else { echo "0"; } ?></span>
											</div>
										</div>
										<div class="block-content collapse in">
											<table class="table table-striped">
												<thead>
													<tr>
														<th>#</th>
														<th>Name</th>
														<th>Email</th>
														<th>Created</th>
													</tr>
												</thead>
												<tbody>
													<?php $i = 1; while($User_Row = mysql_fetch_array($User_Query)){ ?>
													<tr>
														<td><?php echo $i; ?></td>
														<td><?php echo ucfirst($User_Row['firstname']." ".$User_Row['lastname']); ?></td>
														<td><?php echo $User_Row['email']; ?></td>
														<td><?php echo $User_Row['reg_date']; ?></td>
													</tr>
													<?php $i++; } ?>
												</tbody>
											</table>
										</div>
									</div>
									<!-- /block -->
								</div>
								<div class="span6">
									<!-- block -->
									<div class="block">
										<div class="navbar navbar-inner block-header">
											<div class="muted pull-left">Recent Clients</div>
											<div class="pull-right"><span class="badge badge-info"><?php if(!empty($Client_Count)){ echo $Client_Count; } else { echo "0"; } ?></span>

											</div>
										</div>
										<div class="block-content collapse in">
											<table class="table table-striped">
												<thead>
													<tr>
														<th>#</th>
														<th>Name</th>
														<th>Email</th>
														<th>Created</th>
													</tr>
												</thead>
												<tbody>
													<?php $j = 1; while($Client_Row = mysql_fetch_array($Client_Query)){ ?>
													<tr>
														<td><?php echo $j; ?></td>
														<td><?php echo ucfirst($Client_Row['client_first_name']." ".$Client_Row['client_last_name']); ?></td>
														<td><?php echo $Client_Row['client_email']; ?></td>
														<td><?php echo $Client_Row['client_date']; ?></td>
													</tr>
													<?php $j++; } ?>
												</tbody>
											</table>
										</div>
									</div>
									<!-- /block -->
								</div>
							</div>
							<div class="row-fluid">
								<div class="span6">
									<!-- block -->
									<div class="block">
										<div class="navbar navbar-inner block-header">
											<div class="muted pull-left">Recent Follows</div>
											<div class="pull-right"><span class="badge badge-info"><?php if(!empty($Follow_Count)){ echo $Follow_Count; } else { echo "0"; } ?></span>

											</div>
										</div>
										<div class="block-content collapse in">
											<table class="table table-striped">
												<thead>
													<tr>
														<th>#</th>
														<th>Client Name</th>
														<th>Employee Name</th>
														<th>Created</th>
													</tr>
												</thead>
												<tbody>
													<?php $k = 1; while($Follow_Row = mysql_fetch_array($Follow_Query)){ ?>
													<tr>
														<td><?php echo $k; ?></td>
														<td><?php echo ucfirst($Follow_Row['client_first_name']." ".$Follow_Row['client_last_name']); ?></td>
														<td><?php echo ucfirst($Follow_Row['f_name']." ".$Follow_Row['l_name']); ?></td>
														<td><?php echo $Follow_Row['assigned_date']; ?></td>
													</tr>
													<?php $k++; } ?>
												</tbody>
											</table>
										</div>
									</div>
									<!-- /block -->
								</div>
								<div class="span6">
									<!-- block -->
									<div class="block">
										<div class="navbar navbar-inner block-header">
											<div class="muted pull-left">Recent Reports</div>
											<div class="pull-right"><span class="badge badge-info"><?php if(!empty($Report_Count)){ echo $Report_Count; } else { echo "0"; } ?></span>

											</div>
										</div>
										<div class="block-content collapse in">
											<table class="table table-striped">
												<thead>
													<tr>
														<th>#</th>
														<th>Client Name</th>
														<th>Duration</th>
														<th>Created</th>
													</tr>
												</thead>
												<tbody>
													<?php $m = 1; while($Report_Row = mysql_fetch_array($Report_Query)){ ?>
													<tr>
														<td><?php echo $m; ?></td>
														<td><?php echo ucfirst($Report_Row['client_first_name']." ".$Report_Row['client_last_name']); ?></td>
														<td><?php echo $Report_Row['time_duration']; ?></td>
														<td><?php echo $Report_Row['report_date']; ?></td>
													</tr>
													<?php $m++; } ?>
												</tbody>
											</table>
										</div>
									</div>
									<!-- /block -->
								</div>
							</div>
							
						</div>
					</div>
			
			
			

		
		  </div>
		</div>
		<?php } include("footer.php"); ?>
		

		<script src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.nanoscroller/jquery.nanoscroller.js"></script>
	<script type="text/javascript" src="js/jquery.sparkline/jquery.sparkline.min.js"></script>
	<script type="text/javascript" src="js/jquery.easypiechart/jquery.easy-pie-chart.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
	<script type="text/javascript" src="js/behaviour/general.js"></script>
  	<script src="js/jquery.ui/jquery-ui.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.nestable/jquery.nestable.js"></script>
	<script type="text/javascript" src="js/bootstrap.switch/bootstrap-switch.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
  	<script src="js/jquery.select2/select2.min.js" type="text/javascript"></script>
  	<script src="js/bootstrap.slider/js/bootstrap-slider.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.gritter/js/jquery.gritter.min.js"></script>
	<script type="text/javascript" src="js/jquery.datatables/jquery.datatables.min.js"></script>
	<script type="text/javascript" src="js/jquery.datatables/bootstrap-adapter/js/datatables.js"></script>


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
    <script src="js/bootstrap/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.flot/jquery.flot.js"></script>
	<script type="text/javascript" src="js/jquery.flot/jquery.flot.pie.js"></script>
	<script type="text/javascript" src="js/jquery.flot/jquery.flot.resize.js"></script>
	<script type="text/javascript" src="js/jquery.flot/jquery.flot.labels.js"></script>
	
	<script src="admin_dash/js/jquery.easy-pie-chart.js"></script>
	<script>
	$(function() {
		// Easy pie charts
		$('.chart').easyPieChart({animate: 1000});
	});
	</script>



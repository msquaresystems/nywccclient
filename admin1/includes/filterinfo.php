<!DOCTYPE html>
<html lang="en">
<?php
  session_start();
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
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          
                 </ul>
    <ul class="nav navbar-nav navbar-right user-nav">
      <li class="dropdown profile_menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <?php if(isset($_SESSION['username'])){echo $_SESSION['username'];} ?>
         <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <!--<li><a href="#">My Account</a></li>
          
          <li><a href="includes/changepassword.php">Change Password</a></li>-->
          <li class="divider"></li>
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
          <li><a href="intake.php"><i class="fa fa-smile-o"></i>Clients</a></li>
          <li><a href="followup.php"><i class=" glyphicon glyphicon-hand-left"></i>Follow</a></li>
          <li><a href="transferacc.php"><i class=" glyphicon glyphicon-transfer"></i>Transfer Accounts</a></li>
          <li><a href="userlogs.php"><i class="glyphicon glyphicon-floppy-save"></i>Userlogs</a></li>
          <li><a href="reports.php"><i class="glyphicon glyphicon-floppy-save"></i>Reports</a></li>
				</ul>
			</div>
		</div>
	
		<div class="container-fluid" id="pcont">
					
		<div class="cl-mcont">
		
			<div class="row">
				<div class="col-md-12">
					<div class="block-flat">
						<div class="header">							
							<h3><strong>Search Results</strong></h3>
              
              <form name="searchbyday" method="POST" action="#">
                  <select name="filter" id="filter">                  
                    <option>--Select--</option>
                    <option value="day" <?php if($_POST['filter']=='day'){ echo 'selected="selected"';}?>>Day</option>
                    <option value="week" <?php if($_POST['filter']=='week'){ echo 'selected="selected"';}?>>Week</option>
                    <option value="month" <?php if($_POST['filter']=='month'){ echo 'selected="selected"';}?>>Month</option>
                    <option value="year" <?php if($_POST['filter']=='year'){ echo 'selected="selected"';}?>>Year</option>
                  </select>
                  &nbsp;&nbsp;<input type="submit" value="Add" name="search" />
                  </form>

						</div>
						
						<div class="content">
							<div class="table-responsive">
								<table class="table table-bordered" id="datatable" >
									<thead>
										<tr>
											<th>Username</th>
                      <th>Login time</th>
                      <th>Logout time</th>

										</tr>
									</thead>
									<tbody>
                  <?php  include('../includes/dbcon.php');?>
                  
										<?php if(isset($_POST['search']))
          {
            //echo "qwerty";
          $searchby=$_POST['filter'];

          if($searchby=='day')
            {
            $filter_query=mysql_query("SELECT login_time,logout_time,(select username from user as ur where ur.id=ulogs.user_id)as username FROM userlogs as ulogs WHERE DATE(login_time) = DATE(NOW()) ORDER BY id DESC");
            }
            else if($searchby=='week')
            {
              $filter_query=mysql_query("SELECT login_time,logout_time,(select username from user as ur where ur.id=ulogs.user_id)as username FROM userlogs as ulogs WHERE YEARweek(login_time) = YEARweek(CURDATE()) ORDER BY id DESC");
            }
            else if($searchby=='month')
            {
              $filter_query=mysql_query("SELECT login_time,logout_time,(select username from user as ur where ur.id=ulogs.user_id)as username FROM userlogs as ulogs WHERE MONTH(login_time) = MONTH(CURDATE()) ORDER BY id DESC");
            }

            else
            {
              $filter_query=mysql_query("SELECT login_time,logout_time,(select username from user as ur where ur.id=ulogs.user_id)as username FROM userlogs as ulogs WHERE YEAR(login_time) = YEAR(CURRENT_DATE) ORDER BY id DESC");
            }


            while ($filtering=mysql_fetch_array($filter_query)) 
            {
              //print_r($filtering);
              ?>
            										<tr class="odd gradeX">
            										  <td><?php echo $filtering['username']; ?></td>
            										  <td><?php echo $filtering['login_time']; ?></td>
                                  <td><?php echo $filtering['logout_time']; ?></td>
                                </tr>
                                <?php }}?>
            						 				
									</tbody>

                  

								</table>							
							</div>
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

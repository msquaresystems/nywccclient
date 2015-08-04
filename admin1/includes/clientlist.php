<?php 
	
	include('header.php');
	
	if(!isset($_SESSION['admin_user_id']))
	{
		
		include("../login.php");
	
	}
else{ 

    if(!empty($_GET['cid'])):
	$cid 		=	$_GET['cid'];
	endif;
	
	function showClientuser($id)
	{

		$getclients	=	mysql_query("SELECT uid FROM userprojects WHERE clientid='".$id."'");

		while($getClientrow=mysql_fetch_array($getclients)){ $clientusers.=	$getClientrow['uid'].","; }

		$Clentusers  = rtrim($clientusers,",");

		return $Clentusers;
	}

	if(isset($_POST['assignsubmit']))
	{

		$employees					=	$_POST['userid'];
		$clientid					=	$_POST['clientid'];
		

		//echo "DELETE FROM usersprojects WHERE clientid='".$clientid."' AND uid != '".$_SESSION['admin_user_id']."'";
		
		$deleteAlreadyAssignedUsers	=	mysql_query("DELETE FROM userprojects WHERE clientid='".$clientid."' AND uid != '".$_SESSION['admin_user_id']."'");

		foreach($employees as $empkey=>$empvalue)
		{

		$AssignNewEmployeetoclient	=	mysql_query("INSERT INTO userprojects SET uid='".$empvalue."', clientid='".$clientid."',assign_date=NOW()");

		echo "<script type='text/javascript'>alert('Employee Assigned Successfully');</script>";

		}

	
	}
  
 // $cid    = $_GET['cid'];

?>
	
		<div class="container-fluid" id="pcont">
					
		<div class="cl-mcont">
		
			<div class="row">
				<div class="col-md-12">
					<div class="block-flat">
						<div class="header">							
							<h3><strong>USERS</strong></h3>
						</div>
						<div class="content">
							<div class="table-responsive">
								<table class="table table-bordered" id="datatable" >
									<thead>
										<tr>
											<th><strong>FIRSTNAME</strong></th>
											<th style="width:150px;"><strong>EMAIL</strong></th>
											<th><strong>MOBILE</strong></th>
											<th><strong>ADDRESS</strong></th>
											<th><strong>USERTYPE</strong></th>
											<th><strong>ACTION</strong></th>
										</tr>
									</thead>
									<tbody>
										<?php 
										//echo $_SERVER['SCRIPT_NAME'];
										//echo $_SERVER['SCRIPT_FILENAME'];
										//echo basename($_SERVER['PHP_SELF']);
									 		//echo "SELECT id,firstname,lastname,email,cell,address FROM user ORDER BY id DESC";

									 		$clientlist=mysql_query("SELECT id,firstname,lastname,email,cell,physical_address,active,usertype FROM user ORDER BY id DESC"); 

									 		while($clientrow=mysql_fetch_array($clientlist)){

									 		//print_r($clientrow);

									 		//foreach($clientrow as $ckey=>$cvalue){
									 		?>
											<tr class="odd gradeX">
												<td><?php echo $clientrow['firstname']; ?></td>
												<td><?php echo $clientrow['email']; ?></td>
												<td><?php echo $clientrow['cell']; ?></td>
												<td><?php echo $clientrow['physical_address']; ?></td>
												<td><?php echo $clientrow['usertype']; ?></td>
												<td>
												<a href="../includes/edituser.php?user_id=<?php echo $clientrow['id'];?>" style="text-decoration:none;" align="right">Edit</a>
												<?php if($clientrow['active']==1){ ?>
												<a href="../scripts/terminateuser.php?user_id=<?php echo $clientrow['id'];?>" style="margin-left:10px;text-decoration:none;color:red;" align="right">Terminate</a>
												<?php }else{?>
												<a href="../scripts/deactivateuser.php?user_id=<?php echo $clientrow['id'];?>" style="margin-left:10px;text-decoration:none;color:green;" align="right">activate</a>
												<?php }?>
												</td>
											</tr>
										<?php }?>
									</tbody>
								</table>									  
							</div>
						</div>
					</div>				
				</div>
			</div>

			
		  </div>
		</div> 

	<?php }?>
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
	
	
	<script type="text/javascript" src="../js/validate.js"></script>
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

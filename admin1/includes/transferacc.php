
<?php
	
  include('header.php');

  if(!isset($_SESSION['admin_user_id']))
  {
    include("../login.php");
  }
else{
	$cid        = ''; 
	if(!empty($_GET['cid'])):
	$cid 		=	$_GET['cid'];
	endif;
	function showClientuser($id = null)
	{
		
		$getclients	 = mysql_query("SELECT clientid FROM userprojects WHERE uid='".$id."'");
		$clientusers = '';
		while($getClientrow=mysql_fetch_array($getclients)){ $clientusers.=	$getClientrow['clientid'].","; }

		$Clentusers  = rtrim($clientusers,",");

		return $Clentusers;
	}

	if(isset($_POST['assignsubmit']))
	{

		$clientid			=	$_POST['userid'];
		$employees			=	$_POST['clientid'];
			
    $empClient = explode(',',showClientuser($clientid));

    foreach($employees as $ekkeys=>$evvalues)
    {$clid=$evvalues;}
    foreach($empClient as $eKeys=>$eValues)
    {$previousClient=$eValues;}
    //echo "DELETE FROM userprojects WHERE clientid='".$clid."'";
    $deleteAlreadyAssignedUsers = mysql_query("DELETE FROM userprojects WHERE clientid='".$clid."'");
    $deleteAlreadyAssignedclients = mysql_query("DELETE FROM userprojects WHERE uid='".$clientid."'");

		foreach($employees as $empkey=>$empvalue)
		{  

		$AssignNewEmployeetoclient	=	mysql_query("INSERT INTO userprojects SET uid='".$clientid."', clientid='".$empvalue."', previous_userid='".$previousClient."',assign_date=NOW()");

		echo "<script type='text/javascript'>alert('Employee Assigned Successfully');</script>";

		}
	}
?>
		<div class="container-fluid" id="pcont">
				
		<div class="cl-mcont">
		
		<div class="row">
				<div class="col-md-12">
					<div class="block-flat">
						<div class="header">							
							<h4><STRONG>ASSIGN CLIENT TO EMPLOYEE</STRONG></h4>
						</div>
						<form name="assignclient" action="#" id="assignclient" method="POST">
						<div class="content">
							<div>
								<table>
									<tr>
									<td>
									<div class="form-group">
              		<label class="col-sm-1 control-label"><strong>Employees</strong></label>
              		<div class="col-sm-6" style="margin-left:-40px;">
									 <select id="userid" name="userid" style="width:200px;" class="form-control" onchange="window.location.href='transferacc.php?cid='+this.options[this.selectedIndex].value;">
									 <option value="select">Select Employee</option>
										<?php
											//echo "SELECT id,firstname FROM intake ORDER BY id DESC";

											$intakelist=mysql_query("SELECT id,username,firstname FROM user WHERE active=1 AND status='activated' AND usertype='user' ORDER BY id DESC");

									 		while($intakerow=mysql_fetch_array($intakelist)){

										 ?>
										
										 	<option value="<?php echo $intakerow['id']; ?>" <?php if($cid==$intakerow['id']){ echo "selected='selected'"; }?>><?php echo $intakerow['username'];?></option>
										
										<?php
										}
										?>
									 </select>
									 </div>
									 </div>
									 </td>
									 </tr>
									 <tr>
									<td>
								 <select id="clientid" name="clientid[]"  class="multiselect" multiple="" style="width:508px; height:160px;">
										<?php

											$userlist=mysql_query("SELECT id,first_name,last_name FROM intake ORDER BY id DESC"); 
											$userlt = array();
											if(!empty($cid)):
											$userlt = explode(',',showClientuser($cid));
											endif;
									 		while($userrow=mysql_fetch_array($userlist)) {?>
										 	<option value="<?php echo $userrow['id']; ?>" <?php foreach($userlt as $usrkey=>$usrvalue) {if($usrvalue==$userrow[id]){echo "selected='selected'";}}?> >
										 		<?php echo $userrow['first_name']." ".$userrow['last_name'];?>
										 	</option>
										<?php  }?>
									 </select>
									</td>
									</tr>
									<tr>
									 <td>
									 <input type="submit" name="assignsubmit" value="ASSIGN" id="assignclienttousers" class="btn btn-primary">
									 </td>
									 </tr>

									 </table>
									 					
							</div>
						</div>
					</form>
<div class="header">              
	<h4><STRONG>CLIENT ASSIGN DETAILS</STRONG></h4>
</div>
	<div class="content">
		<div class="table-responsive">
			<table class="table table-bordered" id="datatable" >
				<thead>
					<tr>
						<th><strong>EMPLOYEE NAME</strong></th>
						<th><strong>CURRENT CLIENT NAME</strong></th>
						<th><strong>PREVIOUS CLIENT NAME</strong></th>
					</tr>
				</thead>
				<tbody>
				<?php
				/* SELECT 
					up.uid,
					(SELECT username FROM user as ur WHERE ur.id=up.uid) as uname,
					(SELECT CONCAT(intk.first_name, ' ', intk.last_name) FROM intake AS intk WHERE intk.id=up.clientid) as cname,
					(SELECT CONCAT(intkk.first_name, ' ', intkk.last_name) FROM intake AS intkk WHERE intkk.id=up.previous_userid) as previous_clientname 
				FROM 
					userprojects as up 
				ORDER BY uid DESC */
				
				$intakelisstt = mysql_query("SELECT up.uid,(SELECT username FROM user as ur WHERE ur.id=up.uid) as uname,(SELECT CONCAT(intk.first_name, ' ', intk.last_name) FROM intake AS intk WHERE intk.id=up.clientid) as cname,(SELECT CONCAT(intkk.first_name, ' ', intkk.last_name) FROM intake AS intkk WHERE intkk.id=up.previous_userid) as previous_clientname FROM userprojects as up ORDER BY uid DESC"); 
				while($intakerowW = mysql_fetch_array($intakelisstt)){
					
				 
				  ?>
                        <tr class="odd gradeX">
                         <td><?php echo $intakerowW['uname'];?></td>
                         <td><?php echo $intakerowW['cname']; ?></td>
                         <td><?php echo $intakerowW['previous_clientname']; ?></td>
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
	</div>
  <?php } ?>
  <script src="../js/jquery.js"></script>
  <script type="text/javascript" src="../js/jquery-ui.min.js"></script>
  <script type="text/javascript" src="../js/jquery.localisation-min.js"></script>
  <script type="text/javascript" src="../js/jquery.scrollTo-min.js"></script>
  <script type="text/javascript" src="../js/ui.multiselectuser.js"></script>
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
  <script type="text/javascript" src="../js/jquery.niftymodals/js/jquery.modalEffects.js"></script>   

    <script type="text/javascript">
      $(document).ready(function(){
        //initialize the javascript
        App.init();
        App.dataTables();
      });
    </script>

     </script>
     <script type="text/javascript">
    $(function(){
    //  $.localise('ui-multiselect', {/*language: 'en',*/ path: 'js/locale/'});
      $(".multiselect").multiselect();
      //$('#switcher').themeswitcher();
    });
  </script>
  <script type="text/javascript">
  function showClient(str)
  {
    //alert(str);
  if (str=="")
    {
    document.getElementById("Clientlist").innerHTML="";
    return;
    }
  if (window.XMLHttpRequest)
    {// code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
    }
  else
    {// code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
  xmlhttp.onreadystatechange=function()
    {
    if (xmlhttp.readyState==4 && xmlhttp.status==200)
      {
        //alert(xmlhttp.responseText);

      document.getElementById("Clientlist").innerHTML=xmlhttp.responseText;
      document.getElementById("terminateduseR").style.display='none';
      }
    }
  xmlhttp.open("GET","../scripts/getclientlist.php?uid="+str,true);
  xmlhttp.send();
  }
</script>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  <script type="text/javascript" src="../js/bootstrap/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/jquery.flot/jquery.flot.js"></script>
	<script type="text/javascript" src="../js/jquery.flot/jquery.flot.pie.js"></script>
	<script type="text/javascript" src="../js/jquery.flot/jquery.flot.resize.js"></script>
	<script type="text/javascript" src="../js/jquery.flot/jquery.flot.labels.js"></script>
  </body>
</html>
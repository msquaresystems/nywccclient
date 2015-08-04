<?php
  
  include('header.php');
  
  if(!isset($_SESSION['admin_user_id']))
  {
    
    include("../login.php");
    //include("includes/signup.php");
  }
else{ 

  if(isset($_POST['employeereport']))
  {

    $fromdate   = $_POST['emp_fromdate'];
    $todate     = $_POST['emp_todate'];
    $uid        = $_POST['username'];

    if($uid=='all'){$user='';}else{$user=" AND up.uid='".$uid."'";}

    
    if($fromdate=='' && $todate==''){$dateRange='';}else{$dateRange= " AND created_date BETWEEN '$fromdate' AND '$todate'";}

    $userlogQuery = mysql_query("SELECT 
									up.clientid,
									c.first_name,
									c.last_name,
									c.telephone,
									c.services_needed,
									c.services_need_other_in,
									c.membership_want,
									c.business_name,
									c.typeofbusiness,
									c.typeofbusiness_other_in,
									c.products_offered,
									c.counselor_notes,
									c.counselor_name,
									c.created_date,
									c.time_spent,
									(SELECT ur.username FROM user as ur WHERE ur.id=up.uid) as username 
								FROM 
									intake as c 
								INNER JOIN 
									userprojects as up ON up.clientid=c.id WHERE 1 ".$user.$dateRange);
								
  }
  $cid = '';
  if(!empty($_GET['cid'])):
  $cid    = $_GET['cid'];
  endif;
  function showClientuser($id)
  {

    $getclients = mysql_query("SELECT clientid FROM userprojects WHERE uid='".$id."'");

    while($getClientrow=mysql_fetch_array($getclients)){ $clientusers.= $getClientrow['clientid'].","; }

    $Clentusers  = rtrim($clientusers,",");

    return $Clentusers;
  }

  
?>    
<div class="container-fluid" id="pcont">
          
    <div class="cl-mcont">
    
      <div class="row">
        <div class="col-md-12">
          <div class="block-flat">
            <div class="header">              
              <h4><strong>Reports</strong></h4>
            </div>
            <div class="content">
                        <form class="form-horizontal group-border-dashed" name="empreport" action="#" style="border-radius: 0px;" method="POST">
                          <div class="form-group">
                            <label class="col-sm-3 control-label">From Date</label>
                            <div class="col-sm-6">
                               <input type="text" class="form-control datetime" name="emp_fromdate" id="emp_fromdate" value="<?php if(isset($fromdate)){ echo $fromdate; } ?>" style="width:170px;">
                             </div>
                           </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">To Date</label>
                            <div class="col-sm-6">   
                              <input type="text" class="form-control datetime" name="emp_todate" id="emp_todate"  value="<?php if(isset($todate)){ echo $todate; } ?>" style="width:170px;">         
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Employee</label>
                            <div class="col-sm-6">
                                <select name="username" id="username" class="form-control" style="width:170px;">
                        <option value="all"><--Select Users--></option>
                        <?php 
                          $getusers=mysql_query("SELECT id,username FROM user where usertype = 'user' ORDER BY id DESC");
                          while($userrow=mysql_fetch_array($getusers))
                        {?>
                        <option value="<?php echo $userrow['id'];?>" <?php if($userrow['id']==isset($uid)){echo 'selected="selected"';}?>>
                        <?php echo $userrow['username'];?></option>
                        <?php }?>
                      </select>             
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label"></label>
                            <div class="col-sm-6">
                               <input type="submit" class="btn btn-primary" name="employeereport" id="employeereport" style="width:170px;" value="GO">  
                            </div>
                          </div>
                        </form>
                      </div>
            
            <?php if(isset($userlogQuery)){?>
            <div class="content">
              <div class="table-responsive">
              <div class="header"></div>
                <table class="table table-bordered" id="datatable" >
                  <thead>
                    <tr>
					  <th><strong>Employee</strong></th>
                      <th><strong>First Name</strong></th>
                      <th><strong>Last Name</strong></th>
					  <th><strong>Purpose of the visit</strong></th>
                      <th><strong>Phone Number</strong></th>
                      <th><strong>Member interested yes/no</strong></th>
                      <th><strong>Business name</strong></th>
					  <th><strong>Type of business</strong></th>
					  <th><strong>Services of products</strong></th>
					  <th><strong>Counselor notes</strong></th>
					  <th><strong>Counselor name</strong></th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php while($values = mysql_fetch_array($userlogQuery)) {
									
							if(!empty($values['services_needed'])){
								$services_needed[] = $values['services_needed'];
							}	
							if(!empty($values['services_need_other_in'])){
								$services_needed[] = $values['services_need_other_in'];
							}

							if(!empty($values['typeofbusiness'])){
								$typeofbusiness[] = $values['typeofbusiness'];
							}	
							if(!empty($values['typeofbusiness_other_in'])){
								$typeofbusiness[] = $values['typeofbusiness_other_in'];
							}
					?>
					<tr class="odd gradeX" style="font-size:14px;">
					  <td><?php echo ucfirst($values['username']); ?></td>
					  <td><?php echo ucfirst($values['first_name']); ?></td>
					  <td><?php echo ucfirst($values['last_name']); ?></td>
					  <td><?php if(!empty($services_needed)){ echo implode(',',$services_needed); } ?></td>
					  <td><?php echo $values['telephone']; ?></td>
					  <td><?php echo $values['membership_want']; ?></td>
					  <td><?php echo $values['business_name']; ?></td>
					  <td><?php if(!empty($typeofbusiness)){ echo implode(',',$typeofbusiness); } ?></td>
					  <td><?php echo $values['products_offered']; ?></td>
					  <td><?php echo $values['counselor_notes']; ?></td>
					  <td><?php echo $values['counselor_name']; ?></td>
					</tr>
                    <?php } ?>
                  </tbody>
                </table>  
                <a href="../scripts/reportspdf.php?uId=<?php echo $uid;?>&fromdate=<?php echo $fromdate;?>&todate=<?php echo $todate;?>">PDF</a>     
              </div>
            </div>
            <?php } ?>
          </div>        
        </div>
       </div>
      </div>
    </div> 
  </div>
<?php }?>
<link rel="stylesheet" type="text/css" href="../css/theme.css"/>
<script src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/jquery.nanoscroller/jquery.nanoscroller.js"></script>
<script type="text/javascript" src="../js/jquery.sparkline/jquery.sparkline.min.js"></script>
<script type="text/javascript" src="../js/jquery.easypiechart/jquery.easy-pie-chart.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
<script type="text/javascript" src="../js/behaviour/general.js"></script>
<script src="../js/jquery.ui/jquery-ui.js" type="text/javascript"></script>
<script type="text/javascript" src="../js/jquery.nestable/jquery.nestable.js"></script>
<script type="text/javascript" src="../js/bootstrap.switch/bootstrap-switch.min.js"></script>
<script src="../js/jquery.select2/select2.min.js" type="text/javascript"></script>
<script src="../js/bootstrap.slider/js/bootstrap-slider.js" type="text/javascript"></script>

<script src="../js/bootstrap/dist/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="../css/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

<script>
$(function() {
$( "#emp_fromdate" ).datepicker({ dateFormat: 'yy-mm-dd' });
$( "#emp_todate" ).datepicker({ dateFormat: 'yy-mm-dd' });
});
</script>

  </body>
</html>

<?php 
	include('header.php'); 
	if(!isset($_SESSION['admin_user_id'])){
		include("../login.php");
	}else{ 
	/*Start of Userlogs*/
		$fromdate   = '';
		$todate     = '';
		$uid      	= '';

	if(isset($_POST['logreport'])){
		$fromdate   = $_POST['log_fromdate'];
		$todate     = $_POST['log_todate'];
		$uid      	= $_POST['username'];
		if($uid=='select'){$user='';}else{$user=" AND user_id='".$uid."'";}
		if($fromdate=='' && $todate==''){$dateRange='';}else{$dateRange= " AND login_time BETWEEN '$fromdate' AND '$todate'";}
			$userlogQuery = mysql_query("SELECT id,user_id,login_time,logout_time,last_login,(SELECT username FROM user as ur WHERE ur.id=url.user_id) as username FROM userlogs as url WHERE 1 ".$user.$dateRange);
	}
	/*End of Userlogs*/
 ?>
	<div class="container-fluid" id="pcont">
		<div class="cl-mcont">
			<div class="row">
				<div class="col-md-12">
					<div class="block-flat">
						<div class="header">							
							<h4><strong>Userlogs</strong></h4>
						</div>
						<div class="content">
							  <form class="form-horizontal group-border-dashed" name="logreport" action="#" style="border-radius: 0px;" method="POST">
								  <div class="form-group">
									<label class="col-sm-3 control-label">From Date</label>
									<div class="col-sm-6">
									   <input type="text" class="form-control datetime" name="log_fromdate" id="log_fromdate" style="width:170px;">
									 </div>
								   </div>
								  <div class="form-group">
									<label class="col-sm-3 control-label">To Date</label>
									<div class="col-sm-6">   
										<input type="text" class="form-control datetime" name="log_todate" id="log_todate" style="width:170px;">					
									</div>
								  </div>
								  <div class="form-group">
									<label class="col-sm-3 control-label">Users</label>
									<div class="col-sm-6">
										<select name="username" id="username" class="form-control" style="width:170px;">
											<option value="select"><--Select Users--></option>
											<?php 
												$getusers=mysql_query("SELECT id,username FROM user ORDER BY id DESC");
												while($userrow=mysql_fetch_array($getusers))
											{?>
											<option value="<?php echo $userrow['id'];?>" <?php if($userrow['id']==$uid){echo 'selected="selected"';}?>><?php echo $userrow['username'];?></option>
											<?php }?>
										</select>							
									</div>
								  </div>
								  <div class="form-group">
									<label class="col-sm-3 control-label"></label>
									<div class="col-sm-6">
									   <input type="submit" class="btn btn-primary" name="logreport" id="logreport" style="width:170px;" value="GO">	
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
											<th><strong>S.No</strong></th>
											<th><strong>Username</strong></th>
											<th><strong>Logintime</strong></th>
											<th><strong>Logouttime</strong></th>
											<th><strong>Lastlogin</strong></th>
										</tr>
									</thead>
									<tbody>
										<?php 
										$k = 1;
										while($values = mysql_fetch_array($userlogQuery)) { ?>
										<tr class="odd gradeX">
										    <td><?php echo $k; ?></td>
											<td><?php echo $values['username']; ?></td>
											<td><?php echo $values['login_time']; ?></td>
											<td><?php echo $values['logout_time']; ?></td>
											<td class="center"><?php echo $values['last_login']; ?></td>											
										</tr>
						 				<?php $k++; } ?>
									</tbody>
									
								</table>						
							</div>
						</div>
						<?php } ?>
					</div>				
				</div>
			 </div>
		  </div>
		</div> 
	<?php } include('footer.php') ?>
<link rel="stylesheet" href="../css/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

<script>
$(function() {
$( "#log_fromdate" ).datepicker({ dateFormat: 'yy-mm-dd' });
$( "#log_todate" ).datepicker({ dateFormat: 'yy-mm-dd' });
});
</script>
	
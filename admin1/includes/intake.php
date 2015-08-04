<?php include('header.php');
if(!isset($_SESSION['admin_user_id']))
	{
		
		include("../login.php");
		//include("includes/signup.php");
	}
else{ 

 ?>

<div class="container-fluid" id="pcont">
			
		<div class="cl-mcont">
		
			<div class="row">
				<div class="col-md-12">
					<div class="block-flat">
						<div class="header">							
							<h3><strong>CLIENTS</strong></h3>
						</div>
						<div class="content">
							<div class="table-responsive">
								<table class="table table-bordered" id="datatable" >
									<thead>
										<tr>
											<th><strong>ASSIGNED EMPLOYEE NAME</strong></th>
											<th><strong>NAME</strong></th>
											<th><strong>EMAIL</strong></th>
											<th><strong>ADDRESS</strong></th>
											<th><strong>TELEPHONE</strong></th>
											<th><strong>BUSINESS NAME</strong></th>
											<th><strong>MEMBER DATE</strong></th>
											<th><strong>DESCRIPTION</strong></th>
											<th><strong>ACTION</strong></th>
											
										</tr>
									</thead>
									<tbody>
										<?php 
											 

									 	//	echo "SELECT intk.id,intk.firstname,intk.lastname,intk.address1,intk.homephone,intk.business_name,intk.member_date,intk.ssn,intk.description,(SELECT ur.username FROM user AS ur WHERE ur.id=(SELECT DISTINCT(up.uid) FROM userprojects as up WHERE up.clientid=intk.id)) as empname FROM intake as intk ORDER BY id DESC";

									 		$intakelist=mysql_query("SELECT 
																		intk.id,
																		intk.first_name,
																		intk.last_name,
																		intk.email,
																		intk.physical_address1,
																		intk.physical_address2,
																		intk.telephone,
																		intk.business_name,
																		intk.created_date,
																		intk.products_offered,
																		ur.username as empname 
																	 FROM 
																		intake as intk
																	 LEFT JOIN
																		user as ur ON intk.user_id = ur.id
																	 ORDER BY intk.id DESC"); 

									 		while($intakerow=mysql_fetch_array($intakelist)){

									 		//print_r($clientrow);

									 		//foreach($clientrow as $ckey=>$cvalue){
									 		?>
												<tr class="odd gradeX">
													<td><?php echo $intakerow['empname']; ?></td>
													<td><?php echo $intakerow['first_name']." ".$intakerow['last_name']; ?></td>
													<td><?php echo $intakerow['email']; ?></td>
													<td><?php echo $intakerow['physical_address1']." ".$intakerow['physical_address2']; ?></td>
													<td><?php echo $intakerow['telephone']; ?></td>
													<td><?php echo $intakerow['business_name'];?></td>
													<td><?php echo $intakerow['created_date']; ?></td>
													<td><?php echo $intakerow['products_offered']; ?></td>
													<td>
													<a href="../scripts/clientpdf.php?client_id=<?php echo $intakerow['id'];?>" style="text-decoration:none; float:right;">PDF</a>
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
	<?php } include('footer.php'); ?>
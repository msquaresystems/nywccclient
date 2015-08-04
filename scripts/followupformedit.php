<?php
include('../config.php');
$clientIID =  $_GET['cntfid'];
$getEditFollowQuery   = mysql_query("SELECT * FROM followup WHERE id='".$clientIID."'");
$row				  = mysql_fetch_array($getEditFollowQuery);
?>
<form name="followupform1" id="followupform1" method="POST" enctype="multipart/form-data">
	<div class="hero-unit"  style="min-height:85px; height:auto; overflow:hidden; position:relative; display:block;" >
		<div class="span12">
			<p style="font-weight:bold;margin-bottom:30px; width:1030px;">UPDATE FOLLOWUP DETAILS</p>
			<div class="row_head">            
				<div class="row">
					<input type="hidden" name="followupeditid" value="<?php if(!empty($row['id'])){echo $row['id'];}?>" />	
					<div class="row_split">
						<div class="span5">
						  <label>Name of Service Provider:</label>
						</div>
						<div class="span7">
							<input type="text" name="servicepro" id="servicepro" class="pull-left" value="<?php if(!empty($row['servicepro'])){echo $row['servicepro'];}?>" />
							<span id="span_servicepro" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						</div>
					</div>

					<div class="row_split">
						<div class="span5">
						  <label>Service Requested:</label>
						</div>
						<div class="span7">
							<input type="text" name="servreq" id="servreq" class="pull-left" value="<?php if(!empty($row['servreq'])){echo $row['servreq'];}?>" />
							<span id="span_servreq" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="row_split">
						<div class="span5">
						  <label>Assistance provided in Person / Phone / Online:</label>
						</div>
						<div class="span7">
						  <input type="text" name="assist" id="assist" class="pull-left" value="<?php if(!empty($row['assist'])){echo $row['assist'];}?>" />
						  <span id="span_assist" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						</div>
					</div>

					<div class="row_split">
						  <div class="span5">
						  <label>Type of Assistance Provided:</label>
						  </div>
						  <div class="span7">
						  <input type="text" name="type_assist" id="type_assist" class="pull-left" value="<?php if(!empty($row['type_assist'])){echo $row['type_assist'];}?>" />
						  <span id="span_type_assist" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						  </div>
					</div>
				</div>
			</div>	
		</div>  
	</div>
	  
	<h4>Business Planning</h4>
	<br>
	<div class="hero-unit" style="min-height:190px; overflow:hidden; position:relative; display:block;">
		<div class="span12">
			<div class="row_head">            
				<div class="row">
					<div class="row_split">
						<div class="span5">
						  <label>Business Plan:</label>
						</div>
						<div class="span7">
						  <textarea rows="3" name="bplan" id="bplan" class="pull-left"><?php if(!empty($row['bplan'])){echo $row['bplan'];}?></textarea>
						  <span id="span_bplan" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						</div>
					</div>

					<div class="row_split">
						<div class="span5">
						  <label>Marketing Plan:</label>
						</div>
						<div class="span7">
						  <textarea rows="3" name="mplan" id="mplan" class="pull-left"><?php if(!empty($row['mplan'])){echo $row['mplan'];}?></textarea>
						  <span id="span_mplan" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="row_split">
						<div class="span5">
						  <label>Financial Plan:</label>
						</div>
						<div class="span7">
						  <textarea rows="3" name="fplan" id="fplan" class="pull-left"><?php if(!empty($row['fplan'])){echo $row['fplan'];}?></textarea>
						  <span id="span_fplan" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						</div>
					</div>

					<div class="row_split">
						<div class="span5">
						  <label>Other:</label>
						</div>
						<div class="span7">
						  <textarea rows="3" name="bothers" id="bothers" class="pull-left"><?php if(!empty($row['bothers'])){echo $row['bothers'];}?></textarea>
						  <span id="span_bothers" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						</div>
					</div>
				</div>
			</div>	
		</div>  
	</div>

	<h4>Business Development</h4>
	<br>
	<div class="hero-unit" style="min-height:150px; overflow:hidden; position:relative; display:block;">
		<div class="span12">
			<div class="row_head">            
				<div class="row">
					<div class="row_split">
						<div class="span5">
						  <label>Commercial Leasing:</label>
						</div>
						<div class="span7">
							<input type="text" name="commercial" id="commercial" class="pull-left" value="<?php if(!empty($row['commercial'])){echo $row['commercial'];}?>" />
							<span id="span_commercial" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						</div>
					</div>

					<div class="row_split">
						<div class="span5">
						  <label>Contract / Agreement:</label>
						</div>
						<div class="span7">
							<input type="text" name="contract" id="contract" class="pull-left" value="<?php if(!empty($row['contract'])){echo $row['contract'];}?>" />
							<span id="span_contract" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						</div>
					</div>

					<div class="row_split">
						<div class="span5">
						  <label>Purchasing of Equipment / Merchandise:</label>
						</div>
						<div class="span7">
						  <input type="text" name="equip" id="equip" class="pull-left" value="<?php if(!empty($row['equip'])){echo $row['equip'];}?>" />
						  <span id="span_equip" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						</div>
					</div>

					<div class="row_split">
						<div class="span5">
						  <label>Other:</label>
						</div>
						<div class="span7">
						  <input type="text" name="otherbd" id="otherbd" class="pull-left" value="<?php if(!empty($row['otherbd'])){echo $row['otherbd'];}?>" />
						  <span id="span_otherbd" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						</div>
					</div>

				</div>

				<div class="row">
					<div class="row_split">
						<div class="span5">
						  <label>Marketing and Selling:</label>
						</div>
						<div class="span7">
						  <input type="text" name="market_sell" id="market_sell" class="pull-left" value="<?php if(!empty($row['market_sell'])){echo $row['market_sell'];}?>" />
						  <span id="span_market_sell" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						</div>
					</div>

					<div class="row_split">
						  <div class="span5">
						  <label>Exporting / Importing:</label>
						  </div>
						  <div class="span7">
						  <input type="text" name="exp_imp" id="exp_imp" class="pull-left" value="<?php if(!empty($row['exp_imp'])){echo $row['exp_imp'];}?>" />
						  <span id="span_exp_imp" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						  </div>
					</div>
					
					<div class="row_split">
						  <div class="span5">
						  <label>Social media:</label>
						  </div>
						  <div class="span7">
						  <input type="text" name="social" id="social" class="pull-left" value="<?php if(!empty($row['social'])){echo $row['social'];}?>" />
						  <span id="span_social" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						  </div>
					</div>
		
					<div class="row_split">
						  <div class="span5">
						    <label>Time Spent:</label>
						  </div>
						  <div class="span7">
							<select name="time_spent" id="time_spent" class="pull-left">
							  <option value="">--select--</option>
							  <option <?php if(!empty($row['time_spent']) && $row['time_spent']=='15mins' ){echo 'SELECTED';}?>   value="15mins">15 minutes</option>
							  <option <?php if(!empty($row['time_spent']) && $row['time_spent']=='30mins' ){echo 'SELECTED';}?>   value="30mins">30 minutes</option>
							  <option <?php if(!empty($row['time_spent']) && $row['time_spent']=='45mins' ){echo 'SELECTED';}?>   value="45mins"> 45 minutes</option>
							  <option <?php if(!empty($row['time_spent']) && $row['time_spent']=='1hr' ){echo 'SELECTED';}?>   value="1hr"> 1 hour</option>
							  <option <?php if(!empty($row['time_spent']) && $row['time_spent']=='1hr30mins' ){echo 'SELECTED';}?>   value="1hr30mins">  1 hour 30 minutes</option>
							  <option <?php if(!empty($row['time_spent']) && $row['time_spent']=='2hr' ){echo 'SELECTED';}?>   value="2hr">  2 hour</option>
							  <option <?php if(!empty($row['time_spent']) && $row['time_spent']=='2hr30mins' ){echo 'SELECTED';}?> value="2hr30mins"> 2 hour and 30 minutes</option>
							  <option <?php if(!empty($row['time_spent']) && $row['time_spent']=='morethan 3hrs' ){echo 'SELECTED';}?> value="morethan 3hrs"> more than 3 hours</option>
							  <option <?php if(!empty($row['time_spent']) && $row['time_spent']=='>3hrs <5hrs' ){echo 'SELECTED';}?> value=">3hrs <5hrs">  > 3 hours < 5 hours</option>
							  <option <?php if(!empty($row['time_spent']) && $row['time_spent']=='>5hrs <8hrs' ){echo 'SELECTED';}?> value=">5hrs <8hrs"> > 5 hours < 8 hours</option>
							</select>
							<span id="spantime_spent" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						  </div> 
					</div>

				</div>
			</div>	
		</div>  
	</div>

	<?php
	if(!empty($row['breg'])){
	$breg = explode(',',$row['breg']);
	}
	?>

	<h4>Business Registration</h4>
	<br>
	<div class="hero-unit" style="min-height:45px; height:auto; overflow:hidden; position:relative; display:block;">
		<div id="breg" class="span12 type_breg">
			<div class="row">
				<div class="span2" style="width:125px;">
					<label class="checkbox">
					<input type="checkbox" <?php if(!empty($breg) && in_array('ein' , $breg)){echo 'CHECKED';}?> name="breg[]" id="ein" value="ein">EIN</label>
				</div>
				<div class="span2" style="width:125px;">
					<label class="checkbox">
					<input type="checkbox" <?php if(!empty($breg) && in_array('sale' , $breg)){echo 'CHECKED';}?> name="breg[]" id="sale" value="sale">Sales Tax</label>
				</div>
				<div class="span2">
					<label class="checkbox">
					<input type="checkbox" <?php if(!empty($breg) && in_array('sole' , $breg)){echo 'CHECKED';}?> name="breg[]" id="sole" value="sole">Sole Proprietor</label>
				</div>
				<div class="span2">
					<label class="checkbox">
					<input type="checkbox" <?php if(!empty($breg) && in_array('partner' , $breg)){echo 'CHECKED';}?> name="breg[]" id="partner" value="partner">Partnership</label>
				</div>
				<div class="span2">
					<label class="checkbox">
					<input type="checkbox" <?php if(!empty($breg) && in_array('incorp' , $breg)){echo 'CHECKED';}?> name="breg[]" id="incorp" value="incorp">Certificate of Incorporation</label>
				</div>
				<div class="span2">
					<label class="checkbox">
					<input type="checkbox" <?php if(!empty($breg) && in_array('auth' , $breg)){echo 'CHECKED';}?> name="breg[]" id="auth" value="auth">Certificate of Authority</label>  
				</div>
			</div>   
			<div class="row">
				<div class="span2" style="width:125px;">
					<label class="checkbox">
					<input type="checkbox" <?php if(!empty($breg) && in_array('permit' , $breg)){echo 'CHECKED';}?> name="breg[]" id="permit" value="permit">Permit</label>
				</div>
				<div class="span2" style="width:125px;">
					<label class="checkbox">
					<input type="checkbox" <?php if(!empty($breg) && in_array('license' , $breg)){echo 'CHECKED';}?> name="breg[]" id="license" value="license">License</label>
				</div>
				<div class="span2">
					<label class="checkbox">
					<input type="checkbox" <?php if(!empty($breg) && in_array('food' , $breg)){echo 'CHECKED';}?> name="breg[]" id="food" value="food">Food Handlers Certificate</label>
				</div>
				<div class="span2">
					<label class="checkbox">
					<input type="checkbox" <?php if(!empty($breg) && in_array('vendor' , $breg)){echo 'CHECKED';}?> name="breg[]" id="vendor" value="vendor">Vendor Registration</label>
				</div>
				<div class="span2">
					<label class="checkbox">
					<input type="checkbox" <?php if(!empty($breg) && in_array('bregothers' , $breg)){echo 'CHECKED';}?> name="breg[]" id="businessother_check" value="Other">Others</label>
				</div>
				<span id="span_breg" style="color:blue; font-size:12px; margin-left:25px;" class="pull-left"></span>
			</div>  
			<div id="breg_other_div" style="display: none;">
				<input type="text" name="breg_other_in" id="breg_other_in" class="pull-left" value="<?php if(!empty($row['breg_other_in'])){echo $row['breg_other_in'];}?>" />
				<span id="span_breg_other_in" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
			</div>
		</div>
	</div>
	
	<?php
	if(!empty($row['typeofmwbe'])){
	$Split_MWBE = explode(',',$row['typeofmwbe']);
	}
	?>

	<h4>Type of MWBE Certification</h4>
	<br>
	<div class="hero-unit" style="min-height:50px; height:auto; overflow:hidden; position:relative; display:block;">
		<div id="typeofmwbe" class="span12 type_mwbe">
			<div class="row">
				<div class="span2">
					<label class="checkbox">
					<input type="checkbox" <?php if(!empty($Split_MWBE) && in_array('City',$Split_MWBE) ){echo 'CHECKED';}?> name="typeofmwbe[]" id="City" value="City">City</label>
				</div>
				<div class="span2">
					<label class="checkbox">
					<input type="checkbox" <?php if(!empty($Split_MWBE) && in_array('State',$Split_MWBE) ){echo 'CHECKED';}?> name="typeofmwbe[]" id="State" value="State">State</label>
				</div>
				<div class="span2">
					<label class="checkbox">
					<input type="checkbox" <?php if(!empty($Split_MWBE) && in_array('Federal',$Split_MWBE) ){echo 'CHECKED';}?> name="typeofmwbe[]" id="Federal" value="Federal">Federal</label>  
				</div>
				<div class="span2">
					<label class="checkbox">
					<input type="checkbox" <?php if(!empty($Split_MWBE) && in_array('Port Authority',$Split_MWBE) ){echo 'CHECKED';}?> name="typeofmwbe[]" id="Port_Authority" value="Port Authority">Port Authority</label>
				</div>
				<div class="span2">
					<label class="checkbox">
					<input type="checkbox" <?php if(!empty($Split_MWBE) && in_array('Dormitory Authority',$Split_MWBE) ){echo 'CHECKED';}?> name="typeofmwbe[]" id="Dormitory_Authority" value="Dormitory Authority">Dormitory Authority</label>
				</div>
			</div>   
			<div class="row">
				<div class="span2">
					<label class="checkbox">
					<input type="checkbox" <?php if(!empty($Split_MWBE) && in_array('School of Construction',$Split_MWBE) ){echo 'CHECKED';}?> name="typeofmwbe[]" id="School_Construction" value="School of Construction">School of Construction</label>  
				</div>
				<div class="span2">
					<label class="checkbox">
					<input type="checkbox" <?php if(!empty($Split_MWBE) && in_array('NY/NJ Purchasing Council Others',$Split_MWBE) ){echo 'CHECKED';}?> name="typeofmwbe[]" id="NY_NJ_Purchasing_Council" value="NY/NJ Purchasing Council Others">NY/NJ Purchasing Council Others</label>
				</div>
				<div class="span2">
					<label class="checkbox">
					<input type="checkbox" <?php if(!empty($Split_MWBE) && in_array('Other',$Split_MWBE) ){echo 'CHECKED';}?> name="typeofmwbe[]" id="typeofmwbe_other_check" value="Other">Other</label>  
				</div>
			  <span id="span_typeofmwbe" style="color:blue; font-size:12px; margin-left:25px;" class="pull-left"></span>
			</div>  

			<div id="typeofmwbe_other_div" style="display: none;">
				<input type="text" name="typeofmwbe_other_in" id="typeofmwbe_other_in" class="pull-left" value="<?php if(!empty($row['typeofmwbe_other_in'])){echo $row['typeofmwbe_other_in'];}?>" />
				<span id="span_typeofmwbe_other_in" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
			</div>
		</div>
	</div>

	<h4>Financing/Loan</h4>
    <br>
	<div class="hero-unit" style="height:auto; overflow:hidden; position:relative; display:block;">
        <div class="span12">
		  <div class="row_head">            
				<div class="row">
					<div class="row_split">
					   <div class="span5">
						  <label>Financing institution with contact info:</label>
						</div>	
						<div class="span7">
						  <input type="text" name="finfo" id="finfo" class="pull-left" value="<?php if(!empty($row['finfo'])){echo $row['finfo'];}?>" />
						  <span id="span_finfo" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
					   </div>
					</div>

					<div class="row_split">
					   <div class="span5">
						  <label>Amount Requested:</label>
						</div>
						<div class="span7">
						  <input type="text" name="amt_req" id="amt_req" class="pull-left" value="<?php if(!empty($row['amt_req'])){echo $row['amt_req'];}?>" />
						  <span id="span_amt_req" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
					   </div>
					</div>

					<div class="row_split">
					   <div class="span5">
						  <label>Bonding entity:</label>
						</div>
						<div class="span7">
						  <input type="text" name="bondentity" id="bondentity" class="pull-left" value="<?php if(!empty($row['bondentity'])){echo $row['bondentity'];}?>" />
						  <span id="span_bondentity" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
					   </div>
					</div>
					
					<div class="row_split">
					   <div class="span5">
						  <label>Amount:</label>
						</div>
						<div class="span7">
						  <input type="text" name="bondamt" id="bondamt" class="pull-left" value="<?php if(!empty($row['bondamt'])){echo $row['bondamt'];}?>" />
						  <span id="span_bondamt" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
					   </div>
					</div>

					<div class="row_split">
						<div class="span5">
						  <label>Proposal writing awarded:</label>
						</div>
						<div class="span7">
							<label class="radio" style="width:92px;">
							<input type="radio" name="prowriteaward" id="prowriteaward1" value="yes" <?php if(!empty($row['prowriteaward']) && $row['prowriteaward']=='yes' ){echo 'CHECKED';}?>  />Yes</label>
							<label class="radio" style="width:95px;">
							<input type="radio" name="prowriteaward" id="prowriteaward2" value="no" <?php if(!empty($row['prowriteaward']) && $row['prowriteaward']=='no' ){echo 'CHECKED';}?>  />No</label>
							<span id="spanpaward" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						</div>
					</div>

					<div class="row_split">
						<div class="span5">
						  <label>Counselor Notes:</label>
						</div>
						<div class="span7">
						  <textarea rows="3" name="counselor" id="counselor" class="pull-left"><?php if(!empty($row['counselor'])){echo $row['counselor'];}?></textarea>
						  <span id="span_counselor" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						</div>
					</div>
				
			   </div>
			 
			   <div class="row">
					
					<div class="row_split">
					   <div class="span5">
						  <label>Bidding for Contract entity:</label>
						</div>
						<div class="span7">
						  <input type="text" name="bidentity" id="bidentity" class="pull-left" value="<?php if(!empty($row['bidentity'])){echo $row['bidentity'];}?>" />
						  <span id="span_bidentity" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
					   </div>
					</div>
					
					<div class="row_split">
					   <div class="span5">
						  <label>Bidding for Contract amount:</label>
						</div>
						<div class="span7">
						  <input type="text" name="bidamt" id="bidamt" class="pull-left" value="<?php if(!empty($row['bidamt'])){echo $row['bidamt'];}?>" />
						  <span id="span_bidamt" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
					   </div>
					</div>
					
					<div class="row_split">
					   <div class="span5">
						  <label>Proposal writing entity:</label>
						</div>
						<div class="span7">
						  <input type="text" name="pentity" id="pentity" class="pull-left" value="<?php if(!empty($row['pentity'])){echo $row['pentity'];}?>" />
						  <span id="span_pentity" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
					   </div>
					</div>
					
					<?php
					if(!empty($row['status'])){
						$status = explode(',',$row['status']);
					}
					?>

					<div class="row_split">
					   <div class="span5">
						  <label>Status:</label>
						</div>
						<div class="span7" id="status">
							<div class="span2" style="margin-left:0px; width:65px;">
								<label class="checkbox">
								<input type="checkbox" <?php if(!empty($status) && in_array('decline',$status) ){echo 'CHECKED';}?> name="status[]" id="decline" value="decline">Decline</label>
							</div>
							<div class="span2" style="width:80px;">
								<label class="checkbox">
								<input type="checkbox" <?php if(!empty($status) && in_array('approved',$status) ){echo 'CHECKED';}?> name="status[]" id="approved" value="approved">Approved</label>
							</div>
							<div class="span2" style="margin-left:0px;">
								<label class="checkbox">
								<input type="checkbox" <?php if(!empty($status) && in_array('pending',$status) ){echo 'CHECKED';}?> name="status[]" id="pending" value="pending">Pending</label>
							</div>
							<span id="span_status" style="color:blue; font-size:12px;" class="pull-left"></span>
						</div>	
					</div>   
					
					<div class="row_split">
					   <div class="span5">
						  <label>Proposal writing amount:</label>
						</div>
						<div class="span7">
						  <input type="text" name="pamt" id="pamt" class="pull-left" value="<?php if(!empty($row['pamt'])){echo $row['pamt'];}?>" />
						  <span id="span_pamt" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
					   </div>
					</div>

					<div class="row_split">
					   <div class="span5">
						  <label>Other Technical Assistance:</label>
						</div>
						<div class="span7">
						  <input type="text" name="techass" id="techass" class="pull-left" value="<?php if(!empty($row['techass'])){echo $row['techass'];}?>" />
						  <span id="span_techass" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
					   </div>
					</div>

					<div class="row_split">
						<div class="span5">
						  <label>Bidding for Contract Awarded:</label>
						</div>
						<div class="span7">
							<label class="radio" style="width:92px;">
							<input type="radio" name="bidcontaward" id="bidcontaward1" value="yes" <?php if(!empty($row['bidcontaward']) && $row['bidcontaward']=='yes' ){echo 'CHECKED';}?>  />Yes</label>
							<label class="radio" style="width:95px;">
							<input type="radio" name="bidcontaward" id="bidcontaward2" value="no" <?php if(!empty($row['bidcontaward']) && $row['bidcontaward']=='no' ){echo 'CHECKED';}?>  />No</label>
							<span id="spanbidaward" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						</div>
					</div>
					
			  </div>	
		   </div>		 
		</div>  
    </div>
	  
 	<h4>Economic Impact</h4>
    <br>
	<div class="hero-unit" style="min-height:35px; overflow:hidden; position:relative; display:block;">
        <div class="span12">
			<div class="row_head">            
				<div class="row">
					<div class="row_split">
						<div class="span5">
						  <label>Economic Impact:</label>
						</div>
						<div class="span7">
						  <select name="eimpact" id="eimpact" class="pull-left">
							    <option value="">--select--</option>
								<option <?php if(!empty($row['eimpact']) && $row['eimpact']=='new business created' ){echo 'SELECTED';}?>  value="new business created">new business created</option>
								<option <?php if(!empty($row['eimpact']) && $row['eimpact']=='existing business saved' ){echo 'SELECTED';}?>  value="existing business saved">existing business saved</option>
								<option <?php if(!empty($row['eimpact']) && $row['eimpact']=='business became sustainable' ){echo 'SELECTED';}?>  value="business became sustainable">business became sustainable</option>
								<option <?php if(!empty($row['eimpact']) && $row['eimpact']=='business expanded' ){echo 'SELECTED';}?>  value="business expanded">business expanded </option>
								<option <?php if(!empty($row['eimpact']) && $row['eimpact']=='business increased clientele' ){echo 'SELECTED';}?>  value="business increased clientele">business increased clientele</option>
								<option <?php if(!empty($row['eimpact']) && $row['eimpact']=='business increased sales' ){echo 'SELECTED';}?>  value="business increased sales">business increased sales</option>
								<option <?php if(!empty($row['eimpact']) && $row['eimpact']=='business increase revenues' ){echo 'SELECTED';}?>  value="business increase revenues">business increase revenues</option>
								<option <?php if(!empty($row['eimpact']) && $row['eimpact']=='business increased profits' ){echo 'SELECTED';}?>  value="business increased profits">business increased profits</option>
								<option <?php if(!empty($row['eimpact']) && $row['eimpact']=='business created X new number of jobs' ){echo 'SELECTED';}?>  value="business created X new number of jobs">business created X new number of jobs</option>
								<option <?php if(!empty($row['eimpact']) && $row['eimpact']=='business retained x number of jobs' ){echo 'SELECTED';}?>  value="business retained x number of jobs">business retained x number of jobs</option>
								<option <?php if(!empty($row['eimpact']) && $row['eimpact']=='business lost x number of jobs' ){echo 'SELECTED';}?>  value="business lost x number of jobs">business lost x number of jobs</option>
						   </select>
						   <span id="span_eimpact" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="span8 row" style="width:200px;">
						<input type="submit" name="followupsubmit" id="followupsubmit" class="btn btn-large" style="height:26px; padding:1px; font-size:18px; font-weight:bold; width:80px;" value="Submit">
						<input type="button" class="btn btn-large" type="cancel" style="height:26px; padding:1px; font-size:18px; font-weight:bold; width:80px;" value="Cancel" />
					</div>
				</div>

			</div>
		</div>
	</div>
    
  </form>
	
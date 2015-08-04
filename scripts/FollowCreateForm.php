<form name="followupform1" id="followupform1" method="POST" enctype="multipart/form-data">
	<div class="hero-unit"  style="min-height:85px; height:auto; overflow:hidden; position:relative; display:block;" >
		<div class="span12">
			<p style="font-weight:bold;margin-bottom:30px; width:1030px;">FOLLOWUP FORM</p>
			<div class="row_head">            
				<div class="row">
					<input type="hidden" name="clientid" value="<?php if(!empty($_REQUEST['cntid'])){echo $_REQUEST['cntid'];}?>" />	
					<div class="row_split">
						<div class="span5">
						  <label>Name of Service Provider:</label>
						</div>
						<div class="span7">
							<input type="text" name="servicepro" id="servicepro" class="pull-left" value="" />
							<span id="span_servicepro" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						</div>
					</div>

					<div class="row_split">
						<div class="span5">
						  <label>Service Requested:</label>
						</div>
						<div class="span7">
							<input type="text" name="servreq" id="servreq" class="pull-left" value="" />
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
						  <input type="text" name="assist" id="assist" class="pull-left" value="" />
						  <span id="span_assist" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						</div>
					</div>

					<div class="row_split">
						  <div class="span5">
						  <label>Type of Assistance Provided:</label>
						  </div>
						  <div class="span7">
						  <input type="text" name="type_assist" id="type_assist" class="pull-left" value="" />
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
						  <textarea rows="3" name="bplan" id="bplan" class="pull-left"></textarea>
						  <span id="span_bplan" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						</div>
					</div>

					<div class="row_split">
						<div class="span5">
						  <label>Marketing Plan:</label>
						</div>
						<div class="span7">
						  <textarea rows="3" name="mplan" id="mplan" class="pull-left"></textarea>
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
						  <textarea rows="3" name="fplan" id="fplan" class="pull-left"></textarea>
						  <span id="span_fplan" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						</div>
					</div>

					<div class="row_split">
						<div class="span5">
						  <label>Other:</label>
						</div>
						<div class="span7">
						  <textarea rows="3" name="bothers" id="bothers" class="pull-left"></textarea>
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
							<input type="text" name="commercial" id="commercial" class="pull-left" value="" />
							<span id="span_commercial" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						</div>
					</div>

					<div class="row_split">
						<div class="span5">
						  <label>Contract / Agreement:</label>
						</div>
						<div class="span7">
							<input type="text" name="contract" id="contract" class="pull-left" value="" />
							<span id="span_contract" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						</div>
					</div>

					<div class="row_split">
						<div class="span5">
						  <label>Purchasing of Equipment / Merchandise:</label>
						</div>
						<div class="span7">
						  <input type="text" name="equip" id="equip" class="pull-left" value="" />
						  <span id="span_equip" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						</div>
					</div>

					<div class="row_split">
						<div class="span5">
						  <label>Other:</label>
						</div>
						<div class="span7">
						  <input type="text" name="otherbd" id="otherbd" class="pull-left" value="" />
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
						  <input type="text" name="market_sell" id="market_sell" class="pull-left" value="" />
						  <span id="span_market_sell" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						</div>
					</div>

					<div class="row_split">
						  <div class="span5">
						  <label>Exporting / Importing:</label>
						  </div>
						  <div class="span7">
						  <input type="text" name="exp_imp" id="exp_imp" class="pull-left" value="" />
						  <span id="span_exp_imp" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						  </div>
					</div>
					
					<div class="row_split">
						  <div class="span5">
						  <label>Social media:</label>
						  </div>
						  <div class="span7">
						  <input type="text" name="social" id="social" class="pull-left" value="" />
						  <span id="span_social" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						  </div>
					</div>

				</div>
			</div>	
		</div>  
	</div>


	<h4>Business Registration</h4>
	<br>
	<div class="hero-unit" style="min-height:45px; height:auto; overflow:hidden; position:relative; display:block;">
		<div id="breg" class="span12 type_breg">
			<div class="row">
				<div class="span2" style="width:125px;">
					<label class="checkbox">
					<input type="checkbox" name="breg[]" id="ein" value="ein">EIN</label>
				</div>
				<div class="span2" style="width:125px;">
					<label class="checkbox">
					<input type="checkbox" name="breg[]" id="sale" value="sale">Sales Tax</label>
				</div>
				<div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="breg[]" id="sole" value="sole">Sole Proprietor</label>
				</div>
				<div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="breg[]" id="partner" value="partner">Partnership</label>
				</div>
				<div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="breg[]" id="incorp" value="incorp">Certificate of Incorporation</label>
				</div>
				<div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="breg[]" id="auth" value="auth">Certificate of Authority</label>  
				</div>
			</div>   
			<div class="row">
				<div class="span2" style="width:125px;">
					<label class="checkbox">
					<input type="checkbox" name="breg[]" id="permit" value="permit">Permit</label>
				</div>
				<div class="span2" style="width:125px;">
					<label class="checkbox">
					<input type="checkbox" name="breg[]" id="license" value="license">License</label>
				</div>
				<div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="breg[]" id="food" value="food">Food Handlers Certificate</label>
				</div>
				<div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="breg[]" id="vendor" value="vendor">Vendor Registration</label>
				</div>
				<div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="breg[]" id="businessother_check" value="Other">Others</label>
				</div>
				<span id="span_breg" style="color:blue; font-size:12px; margin-left:25px;" class="pull-left"></span>
			</div>  
			
			<div id="breg_other_div" style="display: none;">
				<input type="text" name="breg_other_in" id="breg_other_in" class="pull-left" value="" />
				<span id="span_breg_other_in" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
			</div>
		</div>
	</div>
	

	<h4>Type of MWBE Certification</h4>
	<br>
	<div class="hero-unit" style="min-height:50px; height:auto; overflow:hidden; position:relative; display:block;">
		<div id="typeofmwbe" class="span12 type_mwbe">
			<div class="row">
				<div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="typeofmwbe[]" id="City" value="City">City</label>
				</div>
				<div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="typeofmwbe[]" id="State" value="State">State</label>
				</div>
				<div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="typeofmwbe[]" id="Federal" value="Federal">Federal</label>  
				</div>
				<div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="typeofmwbe[]" id="Port_Authority" value="Port Authority">Port Authority</label>
				</div>
				<div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="typeofmwbe[]" id="Dormitory_Authority" value="Dormitory Authority">Dormitory Authority</label>
				</div>
			</div>   
			<div class="row">
				<div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="typeofmwbe[]" id="School_Construction" value="School of Construction">School of Construction</label>  
				</div>
				<div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="typeofmwbe[]" id="NY_NJ_Purchasing_Council" value="NY/NJ Purchasing Council Others">NY/NJ Purchasing Council Others</label>
				</div>
				<div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="typeofmwbe[]" id="typeofmwbe_other_check" value="Other">Other</label>  
				</div>
			  <span id="span_typeofmwbe" style="color:blue; font-size:12px; margin-left:25px;" class="pull-left"></span>
			</div>  

			<div id="typeofmwbe_other_div" style="display: none;">
				<input type="text" name="typeofmwbe_other_in" id="typeofmwbe_other_in" class="pull-left" value="" />
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
						  <input type="text" name="finfo" id="finfo" class="pull-left" value="" />
						  <span id="span_finfo" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
					   </div>
					</div>

					<div class="row_split">
					   <div class="span5">
						  <label>Amount Requested:</label>
						</div>
						<div class="span7">
						  <input type="text" name="amt_req" id="amt_req" class="pull-left" value="" />
						  <span id="span_amt_req" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
					   </div>
					</div>

					<div class="row_split">
					   <div class="span5">
						  <label>Bonding entity:</label>
						</div>
						<div class="span7">
						  <input type="text" name="bondentity" id="bondentity" class="pull-left" value="" />
						  <span id="span_bondentity" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
					   </div>
					</div>
					
					<div class="row_split">
					   <div class="span5">
						  <label>Amount:</label>
						</div>
						<div class="span7">
						  <input type="text" name="bondamt" id="bondamt" class="pull-left" value="" />
						  <span id="span_bondamt" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
					   </div>
					</div>

					<div class="row_split">
						<div class="span5">
						  <label>Proposal writing awarded:</label>
						</div>
						<div class="span7">
							<label class="radio" style="width:92px;">
							<input type="radio" name="prowriteaward" id="prowriteaward1" value="yes" />Yes</label>
							<label class="radio" style="width:95px;">
							<input type="radio" name="prowriteaward" id="prowriteaward2" value="no" />No</label>
							<span id="span_prowriteaward" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						</div>
					</div>

					<div class="row_split">
						<div class="span5">
						  <label>Counselor Notes:</label>
						</div>
						<div class="span7">
						  <textarea rows="3" name="counselor" id="counselor" class="pull-left"></textarea>
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
						  <input type="text" name="bidentity" id="bidentity" class="pull-left" value="" />
						  <span id="span_bidentity" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
					   </div>
					</div>
					
					<div class="row_split">
					   <div class="span5">
						  <label>Bidding for Contract amount:</label>
						</div>
						<div class="span7">
						  <input type="text" name="bidamt" id="bidamt" class="pull-left" value="" />
						  <span id="span_bidamt" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
					   </div>
					</div>
					
					<div class="row_split">
					   <div class="span5">
						  <label>Proposal writing entity:</label>
						</div>
						<div class="span7">
						  <input type="text" name="pentity" id="pentity" class="pull-left" value="" />
						  <span id="span_pentity" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
					   </div>
					</div>

					<div class="row_split">
					   <div class="span5">
						  <label>Status:</label>
						</div>
						<div class="span7" id="status">
							<div class="span2" style="margin-left:0px; width:65px;">
								<label class="checkbox">
								<input type="checkbox" name="status[]" id="decline" value="decline">Decline</label>
							</div>
							<div class="span2" style="width:80px;">
								<label class="checkbox">
								<input type="checkbox" name="status[]" id="approved" value="approved">Approved</label>
							</div>
							<div class="span2" style="margin-left:0px;">
								<label class="checkbox">
								<input type="checkbox" name="status[]" id="pending" value="pending">Pending</label>
							</div>
							<span id="span_status" style="color:blue; font-size:12px;" class="pull-left"></span>
						</div>	
					</div>   
					
					<div class="row_split">
					   <div class="span5">
						  <label>Proposal writing amount:</label>
						</div>
						<div class="span7">
						  <input type="text" name="pamt" id="pamt" class="pull-left" value="" />
						  <span id="span_pamt" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
					   </div>
					</div>

					<div class="row_split">
					   <div class="span5">
						  <label>Other Technical Assistance:</label>
						</div>
						<div class="span7">
						  <input type="text" name="techass" id="techass" class="pull-left" value="" />
						  <span id="span_techass" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
					   </div>
					</div>

					<div class="row_split">
						<div class="span5">
						  <label>Bidding for Contract Awarded:</label>
						</div>
						<div class="span7">
							<label class="radio" style="width:92px;">
							<input type="radio" name="bidcontaward" id="bidcontaward1" value="yes" />Yes</label>
							<label class="radio" style="width:95px;">
							<input type="radio" name="bidcontaward" id="bidcontaward2" value="no" />No</label>
							<span id="span_bidcontaward" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
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
								<option value="new business created">new business created</option>
								<option value="existing business saved">existing business saved</option>
								<option value="business became sustainable">business became sustainable</option>
								<option value="business expanded">business expanded </option>
								<option value="business increased clientele">business increased clientele</option>
								<option value="business increased sales">business increased sales</option>
								<option value="business increase revenues">business increase revenues</option>
								<option value="business increased profits">business increased profits</option>
								<option value="business created X new number of jobs">business created X new number of jobs</option>
								<option value="business retained x number of jobs">business retained x number of jobs</option>
								<option value="business lost x number of jobs">business lost x number of jobs</option>
						   </select>
						   <span id="span_eimpact" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="span8 row" style="width:200px;">
						<input type="submit" name="followupform2" id="followupform2" class="btn btn-large" style="height:26px; padding:1px; font-size:18px; font-weight:bold; width:80px;" value="Submit">
						<input type="button" class="btn btn-large" type="cancel" style="height:26px; padding:1px; font-size:18px; font-weight:bold; width:80px;" value="Cancel" />
					</div>
				</div>

			</div>
		</div>
	</div>
    
  </form>
